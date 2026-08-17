<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'avatar_icon',
        'avatar_accessory',
        'age',
        'parent_name',
        'parent_relationship',
        'parent_pin',
        'school_name',
        'phone',
        'total_stars',
        'current_streak_days',
        'longest_streak_days',
        'last_activity_date',
        'is_active',
        'last_login_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'parent_pin',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'age' => 'integer',
            'total_stars' => 'integer',
            'current_streak_days' => 'integer',
            'longest_streak_days' => 'integer',
            'last_activity_date' => 'date',
            'is_active' => 'boolean',
            'last_login_at' => 'datetime',
        ];
    }

    /**
     * Relasi ke riwayat pengerjaan kuis siswa.
     */
    public function quizAttempts(): HasMany
    {
        return $this->hasMany(QuizAttempt::class);
    }

    /**
     * Relasi ke koleksi stiker yang dimiliki siswa.
     */
    public function stickers(): BelongsToMany
    {
        return $this->belongsToMany(Sticker::class, 'user_stickers')
            ->withPivot('earned_at')
            ->withTimestamps();
    }

    /**
     * Relasi ke lencana prestasi yang diraih.
     */
    public function achievements(): BelongsToMany
    {
        return $this->belongsToMany(Achievement::class, 'user_achievements')
            ->withPivot(['current_progress', 'is_unlocked', 'unlocked_at'])
            ->withTimestamps();
    }

    /**
     * Relasi ke materi flashcard yang sudah diselesaikan & diklaim bintangnya (+1 ⭐).
     */
    public function completedMaterials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class, 'user_materials')
            ->withPivot('completed_at')
            ->withTimestamps();
    }

    /**
     * Relasi ke log aktivitas audit sistem.
     */
    public function auditLogs(): HasMany
    {
        return $this->hasMany(AuditLog::class);
    }

    /**
     * Scope untuk mengambil akun siswa.
     */
    public function scopeStudents(Builder $query): Builder
    {
        return $query->where('role', 'student');
    }

    /**
     * Scope untuk mengambil akun pengajar/guru/admin.
     */
    public function scopeStaff(Builder $query): Builder
    {
        return $query->whereIn('role', ['admin', 'teacher']);
    }

    /**
     * Scope untuk pengguna yang aktif.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Helper emoji avatar.
     */
    public function getAvatarEmojiAttribute(): string
    {
        return match ($this->avatar_icon) {
            'kucing' => '🐱',
            'singa' => '🦁',
            'kelinci' => '🐰',
            'panda' => '🐼',
            'beruang' => '🐻',
            'gajah' => '🐘',
            'koala' => '🐨',
            default => '🦖',
        };
    }

    /**
     * Helper label hubungan orang tua.
     */
    public function getParentRelationshipLabelAttribute(): string
    {
        return match (strtolower($this->parent_relationship ?? 'bunda')) {
            'ayah' => 'Ayah',
            'wali' => 'Wali / Pendamping',
            default => 'Bunda / Ibu',
        };
    }

    /**
     * Helper tampilan lengkap pendamping anak.
     */
    public function getParentDisplayTitleAttribute(): string
    {
        if (! empty($this->parent_name)) {
            return "{$this->parent_name} ({$this->parent_relationship_label})";
        }

        return 'Bunda / Pendamping Keluarga';
    }

    /**
     * Catat aktivitas harian anak & perbarui learning streak + penghargaan stiker langka.
     *
     * @return array{streak_days: int, longest_streak_days: int, is_new_day: bool, unlocked_rare_sticker: ?string}
     */
    public function recordDailyActivity(): array
    {
        $today = now()->startOfDay();
        $lastDate = $this->last_activity_date ? Carbon::parse($this->last_activity_date)->startOfDay() : null;

        $isNewDay = false;
        $unlockedRareSticker = null;

        if (! $lastDate) {
            $this->current_streak_days = 1;
            $this->longest_streak_days = max(1, (int) $this->longest_streak_days);
            $this->last_activity_date = $today->toDateString();
            $isNewDay = true;
        } elseif ($lastDate->lt($today)) {
            $diffInDays = (int) round($lastDate->diffInDays($today));
            if ($diffInDays === 1 || $lastDate->isYesterday()) {
                $this->current_streak_days = ((int) $this->current_streak_days) + 1;
            } else {
                $this->current_streak_days = 1;
            }
            $this->longest_streak_days = max((int) $this->longest_streak_days, (int) $this->current_streak_days);
            $this->last_activity_date = $today->toDateString();
            $isNewDay = true;
        }

        $this->save();

        // Cek milestone streak 3 hari
        if ($this->current_streak_days >= 3) {
            $rareSticker = Sticker::where('name', 'Api Semangat Belajar 3 Hari')->first();
            if ($rareSticker && ! $this->stickers()->where('stickers.id', $rareSticker->id)->exists()) {
                $this->stickers()->attach($rareSticker->id, ['earned_at' => now()]);
                $unlockedRareSticker = $rareSticker->name;
            }
        }

        // Cek milestone streak 7 hari
        if ($this->current_streak_days >= 7) {
            $legendSticker = Sticker::where('name', 'Bintang Ketekunan Emas 7 Hari')->first();
            if ($legendSticker && ! $this->stickers()->where('stickers.id', $legendSticker->id)->exists()) {
                $this->stickers()->attach($legendSticker->id, ['earned_at' => now()]);
                $unlockedRareSticker = $legendSticker->name;
            }
        }

        return [
            'streak_days' => (int) $this->current_streak_days,
            'longest_streak_days' => (int) $this->longest_streak_days,
            'is_new_day' => $isNewDay,
            'unlocked_rare_sticker' => $unlockedRareSticker,
        ];
    }
}

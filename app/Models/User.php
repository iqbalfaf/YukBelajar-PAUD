<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'parent_pin',
        'school_name',
        'phone',
        'total_stars',
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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StarGift extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'star_gifts';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'sender_id',
        'recipient_id',
        'stars_count',
        'reason',
        'category',
        'is_claimed',
        'claimed_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'stars_count' => 'integer',
        'is_claimed' => 'boolean',
        'claimed_at' => 'datetime',
    ];

    /**
     * Guru / Pengirim Hadiah Bintang.
     */
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Siswa Penerima Hadiah Bintang.
     */
    public function recipient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

    /**
     * Emoji & Icon Kategori Hadiah.
     */
    public function getCategoryEmojiAttribute(): string
    {
        return match ($this->category) {
            'keaktifan' => '⚡',
            'prestasi' => '🏆',
            'kreativitas' => '🎨',
            'karakter_baik' => '🤝',
            'ulang_tahun' => '🎂',
            default => '🌟',
        };
    }

    /**
     * Label Deskriptif Kategori Hadiah.
     */
    public function getCategoryLabelAttribute(): string
    {
        return match ($this->category) {
            'keaktifan' => 'Keaktifan Belajar',
            'prestasi' => 'Prestasi Hebat',
            'kreativitas' => 'Karya & Mewarnai',
            'karakter_baik' => 'Sopan & Ramah',
            'ulang_tahun' => 'Hadiah Ulang Tahun',
            default => 'Apresiasi Spesial',
        };
    }
}

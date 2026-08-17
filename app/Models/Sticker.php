<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sticker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'emoji',
        'category',
        'rarity',
        'description',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_stickers')
            ->withPivot('earned_at')
            ->withTimestamps();
    }
}

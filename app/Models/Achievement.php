<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'description',
        'icon_badge',
        'target_type',
        'reward_type',
        'reward_value',
        'required_count',
    ];

    protected function casts(): array
    {
        return [
            'required_count' => 'integer',
        ];
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_achievements')
            ->withPivot(['current_progress', 'is_unlocked', 'unlocked_at'])
            ->withTimestamps();
    }
}

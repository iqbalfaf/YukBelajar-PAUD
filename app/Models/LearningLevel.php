<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LearningLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'level_number',
        'target_age',
        'unlock_stars_required',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'level_number' => 'integer',
            'target_age' => 'integer',
            'unlock_stars_required' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class)->orderBy('sort_order');
    }

    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }
}

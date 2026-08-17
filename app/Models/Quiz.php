<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'learning_level_id',
        'title',
        'slug',
        'icon_emoji',
        'target_age',
        'total_questions',
        'stars_reward',
    ];

    protected function casts(): array
    {
        return [
            'target_age' => 'integer',
            'total_questions' => 'integer',
            'stars_reward' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(LearningLevel::class, 'learning_level_id');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class)->orderBy('sort_order');
    }

    public function attempts(): HasMany
    {
        return $this->hasMany(QuizAttempt::class);
    }
}

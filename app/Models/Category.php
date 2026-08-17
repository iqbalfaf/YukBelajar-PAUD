<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'pillar',
        'name',
        'slug',
        'icon_emoji',
        'color_theme',
        'bg_gradient',
        'border_color',
        'subtitle',
        'description',
        'age_min',
        'age_max',
        'recommended_age',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'age_min' => 'integer',
            'age_max' => 'integer',
            'sort_order' => 'integer',
        ];
    }

    /**
     * Relasi ke tingkatan level (Level 1, Level 2, Level 3).
     */
    public function levels(): HasMany
    {
        return $this->hasMany(LearningLevel::class)->orderBy('level_number');
    }

    /**
     * Relasi ke kartu flashcard materi melalui tabel learning_levels.
     */
    public function materials(): HasManyThrough
    {
        return $this->hasManyThrough(Material::class, LearningLevel::class);
    }

    /**
     * Relasi ke modul kuis.
     */
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }
}

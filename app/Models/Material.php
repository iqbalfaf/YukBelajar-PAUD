<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'learning_level_id',
        'title',
        'subtitle',
        'icon_emoji',
        'sound_effect',
        'speech_text',
        'parent_note',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
        ];
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(LearningLevel::class, 'learning_level_id');
    }

    public function learningLevel(): BelongsTo
    {
        return $this->level();
    }
}

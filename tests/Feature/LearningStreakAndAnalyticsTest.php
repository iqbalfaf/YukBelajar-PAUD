<?php

use App\Models\Category;
use App\Models\Quiz;
use App\Models\Sticker;
use App\Models\User;

test('user daily streak increments on consecutive days', function () {
    $user = User::factory()->create([
        'current_streak_days' => 1,
        'longest_streak_days' => 1,
        'last_activity_date' => now()->subDay()->toDateString(),
    ]);

    $result = $user->recordDailyActivity();

    expect($result['streak_days'])->toBe(2)
        ->and($result['longest_streak_days'])->toBe(2)
        ->and($result['is_new_day'])->toBeTrue();

    $user->refresh();
    expect($user->current_streak_days)->toBe(2)
        ->and($user->last_activity_date->toDateString())->toBe(now()->toDateString());
});

test('user daily streak resets to 1 if day was skipped', function () {
    $user = User::factory()->create([
        'current_streak_days' => 4,
        'longest_streak_days' => 4,
        'last_activity_date' => now()->subDays(3)->toDateString(),
    ]);

    $result = $user->recordDailyActivity();

    expect($result['streak_days'])->toBe(1)
        ->and($result['longest_streak_days'])->toBe(4)
        ->and($result['is_new_day'])->toBeTrue();

    $user->refresh();
    expect($user->current_streak_days)->toBe(1);
});

test('user earns rare streak sticker on reaching 3-day streak', function () {
    $sticker = Sticker::firstOrCreate(
        ['name' => 'Api Semangat Belajar 3 Hari'],
        [
            'emoji' => '🔥',
            'category' => 'spesial',
            'rarity' => 'rare',
            'required_stars' => 0,
            'description' => 'Stiker langka apresiasi belajar 3 hari berturut-turut!',
        ]
    );

    $user = User::factory()->create([
        'current_streak_days' => 2,
        'longest_streak_days' => 2,
        'last_activity_date' => now()->subDay()->toDateString(),
    ]);

    $result = $user->recordDailyActivity();

    expect($result['streak_days'])->toBe(3)
        ->and($result['unlocked_rare_sticker'])->toBe('Api Semangat Belajar 3 Hari');

    $user->refresh();
    expect($user->stickers()->where('stickers.id', $sticker->id)->exists())->toBeTrue();
});

test('quiz submission records daily streak and returns level unlock information', function () {
    $category = Category::where('slug', 'hewan')->first() ?? Category::first();
    $quiz = $category->quizzes()->first() ?? Quiz::create([
        'category_id' => $category->id,
        'title' => 'Tebak Hewan L1',
        'slug' => 'kuis-hewan-l1-test',
        'icon_emoji' => '🦁',
        'target_age' => 4,
        'total_questions' => 3,
        'stars_reward' => 3,
    ]);

    $user = User::factory()->create([
        'total_stars' => 3,
        'current_streak_days' => 1,
        'last_activity_date' => null,
    ]);

    $response = $this->actingAs($user)->postJson(route('quiz.submit', $quiz->slug), [
        'total_correct' => 3,
        'total_questions' => 3,
    ]);

    $response->assertOk()
        ->assertJsonStructure([
            'success',
            'score',
            'stars_earned',
            'new_stars_awarded',
            'total_stars',
            'streak_info' => [
                'streak_days',
                'longest_streak_days',
                'is_new_day',
            ],
            'level_unlocked',
        ]);

    // User went from 3 stars to 6 stars (crossing threshold 5 for Level 2)
    expect($response->json('total_stars'))->toBe(6)
        ->and($response->json('level_unlocked.level'))->toBe(2);
});

test('parent portal renders chart development categories dataset', function () {
    $user = User::factory()->create([
        'name' => 'Ananda Ceria',
        'role' => 'student',
        'total_stars' => 10,
        'current_streak_days' => 3,
    ]);

    $response = $this->actingAs($user)->get(route('parents'));

    $response->assertOk()
        ->assertViewHas('parentData', function ($data) {
            return isset($data['chart_categories'])
                && count($data['chart_categories']) > 0
                && $data['learning_summary']['learning_streak_days'] === 3;
        });
});

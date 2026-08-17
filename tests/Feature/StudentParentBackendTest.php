<?php

use App\Models\Category;
use App\Models\User;

test('halaman beranda game hub memuat relasi kategori, level progress, dan kuis dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('home'));

    $response->assertStatus(200);
    $response->assertViewHas('categories');
    $response->assertViewHas('user');

    $categories = $response->viewData('categories');
    expect(count($categories))->toBe(Category::count());
    expect($categories[0])->toHaveKeys(['slug', 'name', 'materials_count', 'levels_progress', 'quiz_id']);
});

test('halaman materi flashcard memuat kartu materi nyata dan bank kuis dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('materials', 'hewan'));

    $response->assertStatus(200);
    $response->assertViewHas('materialData');

    $materialData = $response->viewData('materialData');
    expect($materialData['category_name'])->toBe('Pulau Hewan Ceria');
    expect($materialData['cards'])->not->toBeEmpty();
    expect($materialData['cards'][0])->toHaveKeys(['id', 'level', 'title', 'voice_text', 'sound_mimic', 'parent_note']);
});

test('halaman arena kuis memuat butir soal dan opsi jawaban nyata dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('quiz', 'tebak-hewan'));

    $response->assertStatus(200);
    $response->assertViewHas('quizData');

    $quizData = $response->viewData('quizData');
    expect($quizData['slug'])->toBe('tebak-hewan');
    expect($quizData['questions'])->not->toBeEmpty();
    expect($quizData['questions'][0]['options'])->not->toBeEmpty();
});

test('halaman portal orang tua memuat riwayat belajar anak dan analisis penguasaan modul', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('parents'));

    $response->assertStatus(200);
    $response->assertViewHas('parentData');

    $parentData = $response->viewData('parentData');
    expect($parentData['learning_summary']['total_stars'])->toBe($student->total_stars);
    expect($parentData['topic_mastery'])->not->toBeEmpty();
    expect($parentData['child_profile']['name'])->toBe($student->name);
});

test('halaman panggung sahabat petualang memuat daftar siswa nyata dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('community'));

    $response->assertStatus(200);
    $response->assertViewHas('friends');
    $response->assertViewHas('milestone');

    $friends = $response->viewData('friends');
    expect(count($friends))->toBeGreaterThan(0);
    expect(collect($friends)->pluck('id'))->not->toContain($student->id);
});

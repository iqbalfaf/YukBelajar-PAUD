<?php

use App\Models\Category;
use App\Models\Material;
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
    expect($materialData['category_name'])->toBe('Satwa & Hewan Lucu');
    expect($materialData['cards'])->not->toBeEmpty();
    expect($materialData['cards'][0])->toHaveKeys(['id', 'level', 'title', 'voice_text', 'sound_mimic', 'parent_note']);
});

test('halaman arena kuis memuat butir soal dan opsi jawaban nyata dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('quiz', 'kuis-hewan-l1-suara-hewan-jinak'));

    $response->assertStatus(200);
    $response->assertViewHas('quizData');

    $quizData = $response->viewData('quizData');
    expect($quizData['slug'])->toBe('kuis-hewan-l1-suara-hewan-jinak');
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
    expect(collect($friends)->pluck('id'))->toContain($student->id);
    expect(collect($friends)->firstWhere('id', $student->id)['name'])->toContain('Kamu');
});

test('halaman buku stiker memuat koleksi nyata dan kalkulasi progres dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('stickers'));

    $response->assertStatus(200);
    $response->assertViewHas('stickers');
    $response->assertViewHas('stickersData');

    $stickersData = $response->viewData('stickersData');
    expect($stickersData['total_count'])->toBeGreaterThan(0);
    expect($stickersData['progress_pct'])->toBeGreaterThanOrEqual(0);
});

test('halaman ruang piala memuat lencana prestasi nyata dari database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('achievements'));

    $response->assertStatus(200);
    $response->assertViewHas('achievementsData');

    $achievementsData = $response->viewData('achievementsData');
    expect($achievementsData['total_count'])->toBeGreaterThan(0);
    expect($achievementsData['printable_certificates'])->not->toBeEmpty();
});

test('pengguna dapat memperbarui profil nama, usia, avatar, dan PIN ke database', function () {
    $student = User::where('username', 'alif_ceria')->first();

    $response = $this->actingAs($student)->post(route('profile.update'), [
        'name' => 'Alif Bintang Terang',
        'age' => 5,
        'avatar_icon' => 'singa',
        'avatar_accessory' => 'crown',
        'parent_pin' => '9988',
    ]);

    $response->assertRedirect(route('profile'));
    $response->assertSessionHas('success');

    $student->refresh();
    expect($student->name)->toBe('Alif Bintang Terang');
    expect($student->age)->toBe(5);
    expect($student->avatar_icon)->toBe('singa');
    expect($student->avatar_accessory)->toBe('crown');
    expect($student->parent_pin)->toBe('9988');
});

test('siswa dapat mengklaim bintang 1x pada kartu materi flashcard dan tersimpan permanen ke database', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $material = Material::first();

    // Reset hubungan materi untuk pengujian
    $student->completedMaterials()->detach($material->id);
    $initialStars = $student->total_stars;

    // 1. Klaim pertama kali -> Sukses dapat +1 bintang
    $response = $this->actingAs($student)->postJson(route('materials.complete-card'), [
        'material_id' => $material->id,
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'success' => true,
        'already_completed' => false,
        'new_stars_awarded' => 1,
        'total_stars' => $initialStars + 1,
    ]);

    $student->refresh();
    expect($student->total_stars)->toBe($initialStars + 1);
    expect($student->completedMaterials()->where('material_id', $material->id)->exists())->toBeTrue();

    // 2. Klaim kedua kali (kartu yang sama) -> Tidak menambah bintang lagi
    $duplicateResponse = $this->actingAs($student)->postJson(route('materials.complete-card'), [
        'material_id' => $material->id,
    ]);

    $duplicateResponse->assertStatus(200);
    $duplicateResponse->assertJson([
        'success' => true,
        'already_completed' => true,
        'new_stars_awarded' => 0,
        'total_stars' => $initialStars + 1,
    ]);

    $student->refresh();
    expect($student->total_stars)->toBe($initialStars + 1);

    // 3. Muat halaman materi -> is_completed bernilai true
    $pageResponse = $this->actingAs($student)->get(route('materials', 'hewan'));
    $pageResponse->assertStatus(200);
    $materialData = $pageResponse->viewData('materialData');
    $claimedCard = collect($materialData['cards'])->firstWhere('id', $material->id);
    if ($claimedCard) {
        expect($claimedCard['is_completed'])->toBeTrue();
    }
});

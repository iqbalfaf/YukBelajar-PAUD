<?php

use App\Models\AuditLog;
use App\Models\Category;
use App\Models\LearningLevel;
use App\Models\Material;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Sticker;
use App\Models\User;

test('seeder berhasil menginisialisasi kategori, level, dan materi di database', function () {
    expect(Category::count())->toBeGreaterThanOrEqual(6);
    expect(LearningLevel::count())->toBeGreaterThanOrEqual(18);
    expect(Material::count())->toBeGreaterThanOrEqual(20);
    expect(Quiz::count())->toBeGreaterThanOrEqual(6);
    expect(Question::count())->toBeGreaterThanOrEqual(10);
    expect(Sticker::count())->toBeGreaterThanOrEqual(12);
    expect(User::count())->toBeGreaterThanOrEqual(5);
});

test('relasi model eloquent category, level, material, dan quiz berjalan dengan benar', function () {
    $hewan = Category::where('slug', 'hewan')->first();
    expect($hewan)->not->toBeNull();
    expect($hewan->levels)->toHaveCount(3);
    expect($hewan->materials->count())->toBeGreaterThanOrEqual(6);

    $level1 = $hewan->levels->first();
    expect($level1->materials->count())->toBeGreaterThanOrEqual(3);

    $quiz = Quiz::where('slug', 'tebak-hewan')->first();
    expect($quiz)->not->toBeNull();
    expect($quiz->questions->count())->toBeGreaterThanOrEqual(3);
    expect($quiz->questions->first()->options->count())->toBeGreaterThanOrEqual(3);
});

test('dashboard admin menampilkan data real dari database mysql', function () {
    $admin = User::where('role', 'admin')->first();
    $response = $this->actingAs($admin)->get(route('admin.dashboard'));

    $response->assertStatus(200);
    $response->assertViewHas('adminData');
    $response->assertViewHas('categories');

    $adminData = $response->viewData('adminData');
    expect($adminData['stats']['total_materials'])->toBe(Material::count());
    expect($adminData['stats']['total_quizzes'])->toBe(Quiz::count());
    expect($adminData['stats']['total_students'])->toBe(User::where('role', 'student')->count());
    expect($adminData['stats']['total_stars_awarded'])->toBe((int) User::where('role', 'student')->sum('total_stars'));
});

test('halaman manajemen user admin menampilkan data user dari database dan mendukung filter role', function () {
    $admin = User::where('role', 'admin')->first();
    $response = $this->actingAs($admin)->get(route('admin.users'));

    $response->assertStatus(200);
    $response->assertViewHas('usersData');
    $response->assertSee('Alif Rahman');
    $response->assertSee('Pak Guru Iqbal');

    // Filter role student
    $studentResponse = $this->actingAs($admin)->get(route('admin.users', ['role' => 'student']));
    $studentResponse->assertStatus(200);
    $studentResponse->assertSee('Alif Rahman');

    // Filter search query
    $searchResponse = $this->actingAs($admin)->get(route('admin.users', ['search' => 'Iqbal']));
    $searchResponse->assertStatus(200);
    $searchResponse->assertSee('Pak Guru Iqbal');
});

test('audit log sistem dapat mencatat riwayat aktivitas baru', function () {
    $admin = User::where('role', 'admin')->first();

    $log = AuditLog::create([
        'user_id' => $admin->id,
        'action_type' => 'test_action',
        'description' => 'Aktivitas pengujian otomatis backend',
        'ip_address' => '127.0.0.1',
    ]);

    expect($log->id)->not->toBeNull();
    expect($admin->auditLogs)->toHaveCount(User::where('role', 'admin')->first()->auditLogs()->count());
});

test('admin dapat menambahkan pengguna baru ke database', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->post(route('admin.users.store'), [
        'name' => 'Bintang Baru',
        'username' => 'bintang_baru',
        'email' => 'bintang@kuybelajar.test',
        'role' => 'student',
        'age' => 4,
        'avatar_icon' => 'kelinci',
        'parent_pin' => '1234',
        'password' => 'secret123',
    ]);

    $response->assertRedirect(route('admin.users'));
    $response->assertSessionHas('success');

    $newUser = User::where('username', 'bintang_baru')->first();
    expect($newUser)->not->toBeNull();
    expect($newUser->name)->toBe('Bintang Baru');
    expect($newUser->role)->toBe('student');
});

test('admin dapat memperbarui profil pengguna di database', function () {
    $admin = User::where('role', 'admin')->first();
    $targetUser = User::where('username', 'bintang_baru')->first() ?? User::where('role', 'student')->first();

    $response = $this->actingAs($admin)->put(route('admin.users.update', $targetUser->id), [
        'name' => 'Bintang Terang Juara',
        'email' => $targetUser->email,
        'role' => 'student',
        'age' => 5,
        'avatar_icon' => 'singa',
        'is_active' => true,
    ]);

    $response->assertRedirect(route('admin.users'));
    $response->assertSessionHas('success');

    $targetUser->refresh();
    expect($targetUser->name)->toBe('Bintang Terang Juara');
    expect($targetUser->age)->toBe(5);
});

test('admin dapat mereset PIN parental pengguna', function () {
    $admin = User::where('role', 'admin')->first();
    $targetUser = User::where('username', 'bintang_baru')->first() ?? User::where('role', 'student')->first();
    $targetUser->parent_pin = '9999';
    $targetUser->save();

    $response = $this->actingAs($admin)->post(route('admin.users.reset-pin', $targetUser->id));

    $response->assertRedirect(route('admin.users'));
    $response->assertSessionHas('success');

    $targetUser->refresh();
    expect($targetUser->parent_pin)->toBe('1234');
});

test('admin dapat menghapus akun pengguna dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $userToDelete = User::where('username', 'bintang_baru')->first();

    if (! $userToDelete) {
        $userToDelete = User::create([
            'name' => 'User Hapus Test',
            'username' => 'user_hapus_test',
            'role' => 'student',
            'password' => bcrypt('password'),
        ]);
    }

    $userId = $userToDelete->id;
    $response = $this->actingAs($admin)->delete(route('admin.users.delete', $userId));

    $response->assertRedirect(route('admin.users'));
    $response->assertSessionHas('success');

    expect(User::find($userId))->toBeNull();
});

test('admin dapat memperbarui informasi profil dan sekolah di database', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->post(route('admin.profile.update'), [
        'name' => 'Pak Guru Iqbal M.Pd.',
        'email' => $admin->email,
        'school_name' => 'TK Pembina Ceria Bangsa',
        'phone' => '081299998888',
    ]);

    $response->assertRedirect(route('admin.profile'));
    $response->assertSessionHas('success');

    $admin->refresh();
    expect($admin->name)->toBe('Pak Guru Iqbal M.Pd.');
    expect($admin->school_name)->toBe('TK Pembina Ceria Bangsa');
});

test('admin dapat menambahkan materi flashcard baru ke database', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->post(route('admin.materials.store'), [
        'category_slug' => 'hewan',
        'level_number' => 2,
        'title' => 'Kura-kura Hijau 🐢',
        'subtitle' => 'Mengenal kura-kura yang berjalan lambat dan membawa tempurung',
        'speech_text' => 'Kura-kura membawa rumah tempurung!',
        'sound_effect' => 'Kecipak Air',
        'parent_note' => 'Ajak anak menirukan gerakan berjalan lambat.',
    ]);

    $response->assertRedirect(route('admin.dashboard'));
    $response->assertSessionHas('success');

    $material = Material::where('title', 'Kura-kura Hijau 🐢')->first();
    expect($material)->not->toBeNull();
    expect($material->learningLevel->level_number)->toBe(2);
});

test('admin dapat menghapus kartu flashcard dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $material = Material::where('title', 'Kura-kura Hijau 🐢')->first();

    if (! $material) {
        $level = LearningLevel::first();
        $material = Material::create([
            'learning_level_id' => $level->id,
            'title' => 'Materi Dihapus Test',
            'subtitle' => 'Subtitle test',
            'icon_emoji' => '📄',
        ]);
    }

    $matId = $material->id;
    $response = $this->actingAs($admin)->delete(route('admin.materials.delete', $matId));

    $response->assertRedirect(route('admin.dashboard'));
    $response->assertSessionHas('success');

    expect(Material::find($matId))->toBeNull();
});

test('admin dapat mengekspor laporan rapor belajar siswa ke format CSV', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->post(route('admin.export-report'));

    $response->assertStatus(200);
    expect($response->headers->get('content-type'))->toContain('text/csv');
    expect($response->headers->get('content-disposition'))->toContain('rapor-belajar-paud');
});

test('admin dapat mengenerate materi dan soal kuis AI via backend endpoint', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->postJson(route('admin.ai-generator.generate'), [
        'category_slug' => 'hewan',
        'level_number' => 2,
        'theme' => 'Satwa Gurun Pasir 🐫',
        'questions_count' => 3,
    ]);

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'success',
        'category_slug',
        'level_number',
        'theme',
        'generated_items' => [
            '*' => ['question', 'voice_script', 'image_prompt', 'options'],
        ],
    ]);
});

test('admin dapat mempublikasikan materi dan kuis hasil AI langsung ke tabel database', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->postJson(route('admin.ai-generator.publish'), [
        'category_slug' => 'hewan',
        'level_number' => 2,
        'theme' => 'Satwa Gurun Pasir 🐫',
        'questions' => [
            [
                'question' => 'Manakah unta berpunuk yang kuat berjalan di padang pasir? 🐫',
                'voice_script' => 'Unta memiliki punuk untuk menyimpan cadangan makanan.',
                'image_prompt' => 'Cute cartoon camel smiling in desert',
                'options' => [
                    ['label' => 'Unta Padang Pasir 🐫', 'is_correct' => true],
                    ['label' => 'Kucing Rumah 🐱', 'is_correct' => false],
                ],
            ],
        ],
    ]);

    $response->assertStatus(200);
    $response->assertJson(['success' => true]);

    $quiz = Quiz::where('title', 'like', '%Satwa Gurun Pasir%')->first();
    expect($quiz)->not->toBeNull();
    expect($quiz->questions)->toHaveCount(1);
    expect($quiz->questions->first()->options)->toHaveCount(2);
});

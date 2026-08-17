<?php

use App\Models\AuditLog;
use App\Models\Category;
use App\Models\LearningLevel;
use App\Models\Material;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Sticker;
use App\Models\User;
use App\Services\GeminiService;

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

    $quiz = Quiz::where('slug', 'kuis-hewan-l1-suara-hewan-jinak')->first();
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
        'phone' => '0812-3333-4444',
        'parent_name' => 'Bunda Mega',
        'parent_relationship' => 'bunda',
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
    expect($newUser->parent_name)->toBe('Bunda Mega');
    expect($newUser->phone)->toBe('0812-3333-4444');
});

test('admin dapat memperbarui profil pengguna di database', function () {
    $admin = User::where('role', 'admin')->first();
    $targetUser = User::where('username', 'bintang_baru')->first() ?? User::where('role', 'student')->first();

    $response = $this->actingAs($admin)->put(route('admin.users.update', $targetUser->id), [
        'name' => 'Bintang Terang Juara',
        'email' => $targetUser->email,
        'phone' => '0812-5555-6666',
        'parent_name' => 'Ayah Surya',
        'parent_relationship' => 'ayah',
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
    expect($targetUser->parent_name)->toBe('Ayah Surya');
    expect($targetUser->parent_relationship)->toBe('ayah');
    expect($targetUser->phone)->toBe('0812-5555-6666');
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

    // Restore name
    $admin->update([
        'name' => 'Pak Guru Iqbal, S.Pd.',
        'username' => 'pak_guru_iqbal',
        'email' => 'guru@kuybelajar.id',
    ]);
});

test('admin dapat menambahkan materi flashcard baru ke database', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)
        ->from(route('admin.materials'))
        ->post(route('admin.materials.store'), [
            'category_slug' => 'hewan',
            'level_number' => 2,
            'title' => 'Kura-kura Hijau 🐢',
            'subtitle' => 'Mengenal kura-kura yang berjalan lambat dan membawa tempurung',
            'speech_text' => 'Kura-kura membawa rumah tempurung!',
            'sound_effect' => 'Kecipak Air',
            'parent_note' => 'Ajak anak menirukan gerakan berjalan lambat.',
        ]);

    $response->assertRedirect(route('admin.materials'));
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
    $response = $this->actingAs($admin)
        ->from(route('admin.materials'))
        ->delete(route('admin.materials.delete', $matId));

    $response->assertRedirect(route('admin.materials'));
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

test('halaman bank soal admin menampilkan daftar kuis nyata dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $response = $this->actingAs($admin)->get(route('admin.quizzes'));

    $response->assertStatus(200);
    $response->assertViewHas('quizzesData');
    $response->assertViewHas('categories');

    $quizzesData = $response->viewData('quizzesData');
    expect($quizzesData['stats']['total_quizzes'])->toBeGreaterThan(0);
    expect($quizzesData['quizzes'])->not->toBeEmpty();
});

test('admin dapat menambahkan kuis baru beserta butir soal secara manual ke database', function () {
    $admin = User::where('role', 'admin')->first();
    $category = Category::first();

    $response = $this->actingAs($admin)->post(route('admin.quizzes.store'), [
        'category_id' => $category->id,
        'title' => 'Kuis Manual Burung Cerdas',
        'icon_emoji' => '🦅',
        'target_age' => 4,
        'stars_reward' => 3,
        'questions' => [
            [
                'question_text' => 'Manakah burung elang yang terbang tinggi di angkasa? 🦅',
                'question_audio' => 'Sentuh gambar burung elang yang gagah ya!',
                'options' => [
                    ['option_text' => 'Burung Elang 🦅', 'option_emoji' => '🦅', 'is_correct' => 1],
                    ['option_text' => 'Kelinci Putih 🐰', 'option_emoji' => '🐰', 'is_correct' => 0],
                    ['option_text' => 'Ikan Mas 🐟', 'option_emoji' => '🐟', 'is_correct' => 0],
                ],
            ],
        ],
    ]);

    $response->assertRedirect(route('admin.quizzes'));
    $response->assertSessionHas('success');

    $quiz = Quiz::where('title', 'Kuis Manual Burung Cerdas')->first();
    expect($quiz)->not->toBeNull();
    expect($quiz->questions)->toHaveCount(1);
    expect($quiz->questions->first()->options)->toHaveCount(3);
});

test('admin dapat menambahkan butir soal baru ke kuis yang sudah ada', function () {
    $admin = User::where('role', 'admin')->first();
    $quiz = Quiz::where('title', 'Kuis Manual Burung Cerdas')->first() ?? Quiz::first();

    $response = $this->actingAs($admin)->post(route('admin.quizzes.questions.store', $quiz->id), [
        'question_text' => 'Manakah burung hantu yang matanya bulat besar? 🦉',
        'question_audio' => 'Pilih burung hantu yang suka melek malam hari!',
        'options' => [
            ['option_text' => 'Burung Hantu 🦉', 'option_emoji' => '🦉', 'is_correct' => 1],
            ['option_text' => 'Kambing Gunung 🐐', 'option_emoji' => '🐐', 'is_correct' => 0],
        ],
    ]);

    $response->assertRedirect(route('admin.quizzes'));
    $response->assertSessionHas('success');

    $question = Question::where('question_text', 'like', '%Burung Hantu%')->first();
    expect($question)->not->toBeNull();
    expect($question->options)->toHaveCount(2);
});

test('admin dapat menghapus butir soal kuis dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $question = Question::where('question_text', 'like', '%Burung Hantu%')->first();

    if (! $question) {
        $quiz = Quiz::first();
        $question = Question::create([
            'quiz_id' => $quiz->id,
            'question_text' => 'Soal Hapus Test',
        ]);
    }

    $qId = $question->id;
    $response = $this->actingAs($admin)->delete(route('admin.questions.delete', $qId));

    $response->assertRedirect(route('admin.quizzes'));
    $response->assertSessionHas('success');

    expect(Question::find($qId))->toBeNull();
});

test('admin dapat menghapus modul kuis dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $quiz = Quiz::where('title', 'Kuis Manual Burung Cerdas')->first();

    if (! $quiz) {
        $category = Category::first();
        $quiz = Quiz::create([
            'category_id' => $category->id,
            'title' => 'Kuis Hapus Test',
            'slug' => 'kuis-hapus-test-'.time(),
            'target_age' => 4,
            'total_questions' => 1,
            'stars_reward' => 3,
        ]);
    }

    $quizId = $quiz->id;
    $response = $this->actingAs($admin)->delete(route('admin.quizzes.delete', $quizId));

    $response->assertRedirect(route('admin.quizzes'));
    $response->assertSessionHas('success');

    expect(Quiz::find($quizId))->toBeNull();
});

test('halaman manajemen flashcard admin menampilkan seluruh materi dan tingkatan level', function () {
    $admin = User::where('role', 'admin')->first();
    $response = $this->actingAs($admin)->get(route('admin.materials'));

    $response->assertStatus(200);
    $response->assertViewHas('materialsData');
    $response->assertViewHas('categories');

    $materialsData = $response->viewData('materialsData');
    expect($materialsData['stats']['total_materials'])->toBeGreaterThan(0);
});

test('admin dapat memperbarui flashcard dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $material = Material::first();

    $response = $this->actingAs($admin)->put(route('admin.materials.update', $material->id), [
        'title' => 'Singa Si Raja Hutan Diedit',
        'subtitle' => 'Si-nga Hebat',
        'speech_text' => 'Singa mengaum sangat keras!',
        'sound_effect' => 'Roaaar Kuat',
        'parent_note' => 'Ajak anak menirukan surai singa.',
        'icon_emoji' => '🦁',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $material->refresh();
    expect($material->title)->toBe('Singa Si Raja Hutan Diedit');
});

test('halaman manajemen stiker admin menampilkan seluruh stiker hadiah', function () {
    $admin = User::where('role', 'admin')->first();
    $response = $this->actingAs($admin)->get(route('admin.stickers'));

    $response->assertStatus(200);
    $response->assertViewHas('stickersData');

    $stickersData = $response->viewData('stickersData');
    expect($stickersData['stats']['total_stickers'])->toBeGreaterThan(0);
});

test('admin dapat menambahkan stiker baru ke database', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->post(route('admin.stickers.store'), [
        'name' => 'Stiker Lumba-Lumba Terbang',
        'category' => 'Hewan',
        'icon_emoji' => '🐬',
        'description' => 'Membuka stiker petualangan laut ceria.',
        'is_special' => 1,
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $sticker = Sticker::where('name', 'Stiker Lumba-Lumba Terbang')->first();
    expect($sticker)->not->toBeNull();
    expect($sticker->emoji)->toBe('🐬');
    expect($sticker->rarity)->toBe('legendary');
});

test('admin dapat memperbarui stiker di database', function () {
    $admin = User::where('role', 'admin')->first();
    $sticker = Sticker::where('name', 'Stiker Lumba-Lumba Terbang')->first() ?? Sticker::first();

    $response = $this->actingAs($admin)->put(route('admin.stickers.update', $sticker->id), [
        'name' => 'Stiker Lumba Emas Super',
        'category' => 'Hewan',
        'icon_emoji' => '🐬',
        'description' => 'Edisi terbatas untuk penjelajah laut.',
        'is_special' => 1,
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $sticker->refresh();
    expect($sticker->name)->toBe('Stiker Lumba Emas Super');
    expect($sticker->rarity)->toBe('legendary');
});

test('admin dapat menghapus stiker dari database', function () {
    $admin = User::where('role', 'admin')->first();
    $sticker = Sticker::where('name', 'Stiker Lumba Emas Super')->first();

    if (! $sticker) {
        $sticker = Sticker::create([
            'name' => 'Stiker Hapus Test',
            'category' => 'prestasi',
            'emoji' => '🏆',
            'rarity' => 'common',
        ]);
    }

    $stId = $sticker->id;
    $response = $this->actingAs($admin)->delete(route('admin.stickers.delete', $stId));

    $response->assertRedirect();
    $response->assertSessionHas('success');

    expect(Sticker::find($stId))->toBeNull();
});

test('gemini service dapat menghasilkan paket kuis terstruktur ramah anak', function () {
    $service = app(GeminiService::class);
    $result = $service->generateQuizContent('hewan', 'Satwa & Hewan Lucu 🦁', 1, 'Kucing Lucu', '3-4', 3);

    expect($result)->toHaveKeys(['source', 'model', 'items']);
    expect($result['items'])->toHaveCount(3);
    expect($result['items'][0])->toHaveKeys(['question', 'voice_script', 'image_prompt', 'options']);
    expect($result['items'][0]['options'])->toHaveCount(3);
});

test('admin dapat menambahkan, mengedit, dan menghapus topik pembelajaran baru 3 pilar', function () {
    $admin = User::where('role', 'admin')->first();

    // 1. Create Topic
    $response = $this->actingAs($admin)->post(route('admin.topics.store'), [
        'pillar' => 'mengenal',
        'name' => 'Mengenal Profesi Impian',
        'subtitle' => 'Mengenal dokter, pilot, dan guru hebat',
        'icon_emoji' => '👨‍⚕️',
        'color_theme' => 'emerald',
        'recommended_age' => '4 - 6 Thn',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $topic = Category::where('name', 'Mengenal Profesi Impian')->first();
    expect($topic)->not->toBeNull();
    expect($topic->pillar)->toBe('mengenal');
    expect($topic->levels)->toHaveCount(3);

    // 2. Update Topic
    $updateResponse = $this->actingAs($admin)->put(route('admin.topics.update', $topic->id), [
        'pillar' => 'mengenal',
        'name' => 'Mengenal Aneka Profesi Cita-cita',
        'subtitle' => 'Mengenal profesi mulia',
        'icon_emoji' => '👩‍🚀',
        'color_theme' => 'purple',
        'recommended_age' => '4 - 6 Thn',
    ]);

    $updateResponse->assertRedirect();
    $topic->refresh();
    expect($topic->name)->toBe('Mengenal Aneka Profesi Cita-cita');
    expect($topic->icon_emoji)->toBe('👩‍🚀');

    // 3. Delete Topic
    $delResponse = $this->actingAs($admin)->delete(route('admin.topics.delete', $topic->id));
    $delResponse->assertRedirect();
    expect(Category::find($topic->id))->toBeNull();
});

test('dashboard admin menampilkan data monitoring siswa online dan offline', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->get(route('admin.dashboard'));

    $response->assertStatus(200);
    $response->assertSee('Detail Siswa');
    $response->assertSee('Monitoring keaktifan siswa yang sedang online');
    $response->assertViewHas('adminData', function ($data) {
        return isset($data['students_status_list']) && is_array($data['students_status_list']);
    });
});

test('admin dapat memperbarui username dan profil pada halaman profil admin', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->post(route('admin.profile.update'), [
        'name' => 'Pak Guru Iqbal Juara, M.Pd.',
        'username' => 'guru_iqbal_baru',
        'email' => 'guru_baru@kuybelajar.id',
        'school_name' => 'TK & PAUD Bintang Juara',
        'phone' => '0812-9999-8888',
    ]);

    $response->assertRedirect(route('admin.profile'));
    $response->assertSessionHas('success');

    $admin->refresh();
    expect($admin->name)->toBe('Pak Guru Iqbal Juara, M.Pd.');
    expect($admin->username)->toBe('guru_iqbal_baru');
    expect($admin->email)->toBe('guru_baru@kuybelajar.id');

    // Kembalikan ke nilai seeder agar konsisten
    $admin->update([
        'name' => 'Pak Guru Iqbal, S.Pd.',
        'username' => 'pak_guru_iqbal',
        'email' => 'guru@kuybelajar.id',
    ]);
});

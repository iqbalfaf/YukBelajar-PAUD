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

<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

test('halaman login dan register dapat diakses oleh tamu (guest)', function () {
    $loginRes = $this->get(route('login'));
    $loginRes->assertStatus(200);
    $loginRes->assertSee('Masuk Akun YukBelajar');
    $loginRes->assertSee('Username atau Email');

    $regRes = $this->get(route('register'));
    $regRes->assertStatus(200);
    $regRes->assertSee('DAFTAR AKUN PETUALANG CILIK');
    $regRes->assertSee('10 Bintang Emas Pertama');
});

test('siswa dapat login menggunakan username dan password yang benar pada form tunggal', function () {
    $response = $this->post(route('login.post'), [
        'login' => 'alif_ceria',
        'password' => 'password123',
    ]);

    $response->assertRedirect(route('home'));
    expect(Auth::check())->toBeTrue();
    expect(Auth::user()->username)->toBe('alif_ceria');
});

test('guru atau admin dapat login menggunakan email atau username pada form tunggal dan diarahkan ke dashboard admin', function () {
    $response = $this->post(route('login.post'), [
        'login' => 'guru@kuybelajar.id',
        'password' => 'password123',
    ]);

    $response->assertRedirect(route('admin.dashboard'));
    expect(Auth::check())->toBeTrue();
    expect(Auth::user()->role)->toBe('admin');
});

test('login gagal jika kredensial salah dan menampilkan error session', function () {
    $response = $this->post(route('login.post'), [
        'login' => 'alif_ceria',
        'password' => 'passwordsalah123',
    ]);

    $response->assertSessionHasErrors('login');
    expect(Auth::check())->toBeFalse();
});

test('pendaftaran siswa baru berhasil dan otomatis mendapatkan 10 bintang emas', function () {
    $response = $this->post(route('register.post'), [
        'name' => 'Budi Santoso',
        'username' => 'budi_pintar',
        'password' => 'budi1234',
        'age' => 5,
        'avatar_icon' => 'kelinci',
        'email' => 'budi@gmail.com',
    ]);

    $response->assertRedirect(route('home'));
    expect(Auth::check())->toBeTrue();

    $user = User::where('username', 'budi_pintar')->first();
    expect($user)->not->toBeNull();
    expect($user->name)->toBe('Budi Santoso');
    expect($user->total_stars)->toBe(10); // 10 Welcome Bonus Stars!
    expect($user->avatar_icon)->toBe('kelinci');
    expect($user->role)->toBe('student');
});

test('pendaftaran gagal jika username sudah terpakai', function () {
    $response = $this->post(route('register.post'), [
        'name' => 'Alif Kloning',
        'username' => 'alif_ceria', // Sudah dipakai di seeder
        'password' => 'password123',
        'age' => 4,
        'avatar_icon' => 'dino',
    ]);

    $response->assertSessionHasErrors('username');
});

test('pengguna yang sudah login dapat logout dengan aman melalui POST maupun GET link', function () {
    $user = User::where('username', 'alif_ceria')->first();
    $this->actingAs($user);

    expect(Auth::check())->toBeTrue();

    // Test POST logout
    $postResponse = $this->post(route('logout'));
    $postResponse->assertRedirect(route('landing'));
    expect(Auth::check())->toBeFalse();

    // Test GET logout langsung dari link / address bar
    $this->actingAs($user);
    expect(Auth::check())->toBeTrue();

    $getResponse = $this->get(route('logout'));
    $getResponse->assertRedirect(route('landing'));
    expect(Auth::check())->toBeFalse();
});

test('pengguna belum login dilarang mengakses halaman game hub dan dialihkan ke login', function () {
    $response = $this->get(route('home'));
    $response->assertRedirect(route('login'));

    $profileRes = $this->get(route('profile'));
    $profileRes->assertRedirect(route('login'));
});

test('siswa cilik dilarang mengakses panel admin dan dialihkan ke petualangan', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $this->actingAs($student);

    $response = $this->get(route('admin.dashboard'));
    $response->assertRedirect(route('home'));
    $response->assertSessionHas('error');
});

test('pengguna yang sudah login dialihkan jika mencoba membuka halaman login atau register', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $this->actingAs($student);

    $loginRes = $this->get(route('login'));
    $loginRes->assertRedirect(route('home'));

    $regRes = $this->get(route('register'));
    $regRes->assertRedirect(route('home'));
});

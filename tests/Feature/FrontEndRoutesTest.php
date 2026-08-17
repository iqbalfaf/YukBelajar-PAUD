<?php

use App\Models\User;

test('halaman landing page utama dapat diakses dengan sukses tanpa login', function () {
    $response = $this->get(route('landing'));

    $response->assertStatus(200);
    $response->assertSee('Petualangan Belajar Digital');
    $response->assertSee('Jelajahi 6 Pulau Petualangan Seru');
    $response->assertSee('Flashcard Bersuara');
    $response->assertSee('MULAI MAIN PETUALANGAN');
});

test('halaman login dapat diakses dengan mode siswa dan mode guru', function () {
    $response = $this->get(route('login'));

    $response->assertStatus(200);
    $response->assertSee('MASUK AKUN PETUALANG');
    $response->assertSee('Mode Siswa Cilik');
    $response->assertSee('Guru / Orang Tua');
});

test('halaman register dapat diakses dengan form avatar gamified', function () {
    $response = $this->get(route('register'));

    $response->assertStatus(200);
    $response->assertSee('DAFTAR AKUN PETUALANG CILIK');
    $response->assertSee('10 Bintang Emas Pertama');
    $response->assertSee('BUAT AKUN');
});

test('halaman beranda taman petualangan game hub dapat diakses oleh pengguna terautentikasi', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('home'));

    $response->assertStatus(200);
    $response->assertSee('Taman Petualangan');
    $response->assertSee('Kiki si Kucing Pintar');
    $response->assertSee('Zona Mengenal');
    $response->assertSee('Zona Membaca');
    $response->assertSee('Zona Menghitung');
    $response->assertSee('Tabungan Bintang');
});

test('halaman ruang piala dan sertifikat prestasi dapat diakses', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('achievements'));

    $response->assertStatus(200);
    $response->assertSee('Ruang Piala');
    $response->assertSee('Lencana Petualang Cilik');
    $response->assertSee('Studio Sertifikat');
    $response->assertSee('Sahabat Rimba');
});

test('halaman panggung sahabat petualang dapat diakses', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('community'));

    $response->assertStatus(200);
    $response->assertSee('PANGGUNG SAHABAT PETUALANG');
    $response->assertSee('Kumpulkan 500 Bintang Emas Bersama');
    $response->assertSee('Nayla');
    $response->assertSee('Kenzo');
});

test('halaman flashcard bergambar dapat diakses dengan data kategori', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('materials', 'hewan'));

    $response->assertStatus(200);
    $response->assertSee('Satwa & Hewan Lucu');
    $response->assertSee('Katalog Materi');
    $response->assertSee('Bank Kuis & Soal', false);
    $response->assertSee('Dengar Pelafalan Suara');
    $response->assertSee('Tingkatan Level');
    $response->assertSee('Level 1');
});

test('halaman arena kuis gambar interaktif dapat diakses dengan soal', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('quiz', 'kuis-hewan-l1-suara-hewan-jinak'));

    $response->assertStatus(200);
    $response->assertSee('Tebak Suara Hewan Jinak Ceria');
    $response->assertSee('Pertanyaan Soal');
    $response->assertSee('Ulangi Suara');
});

test('halaman buku stiker virtual dapat diakses', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('stickers'));

    $response->assertStatus(200);
    $response->assertSee('Buku Stiker Virtual');
    $response->assertSee('Album Prestasi');
});

test('halaman portal orang tua dapat diakses', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('parents'));

    $response->assertStatus(200);
    $response->assertSee('Portal Pantauan Belajar Orang Tua');
    $response->assertSee('Tingkat Pemahaman per Kategori');
    $response->assertSee('Pengaturan Kunci Tingkatan Level');
    $response->assertSee('Kontrol Pembelajaran Anak Cerdas');
});

test('halaman dashboard admin dan 1-click ai generator dapat diakses oleh admin', function () {
    $admin = User::where('role', 'admin')->first();

    $dashboardResponse = $this->actingAs($admin)->get(route('admin.dashboard'));
    $dashboardResponse->assertStatus(200);
    $dashboardResponse->assertSee('Kelola Materi');
    $dashboardResponse->assertSee('Aktivitas Kuis');
    $dashboardResponse->assertSee('Ketuntasan per Kategori');
    $dashboardResponse->assertSee('Pengkategorian Materi');
    $dashboardResponse->assertSee('Tingkatan Level');
    $dashboardResponse->assertSee('Google Gemini AI');
    $dashboardResponse->assertSee('Riwayat Aktivitas Sistem');
    $dashboardResponse->assertSee('Ekspor Rapor Belajar');

    $aiResponse = $this->actingAs($admin)->get(route('admin.ai-generator'));
    $aiResponse->assertStatus(200);
    $aiResponse->assertSee('1-Click AI Generator');
    $aiResponse->assertSee('Pilih Topik Pembelajaran');
    $aiResponse->assertSee('Tingkatan Level Belajar');

    $usersResponse = $this->actingAs($admin)->get(route('admin.users'));
    $usersResponse->assertStatus(200);
    $usersResponse->assertSee('Panel Manajemen Pengguna');
    $usersResponse->assertSee('Alif Rahman');
    $usersResponse->assertSee('Tambah Pengguna Baru');
    $usersResponse->assertSee('Reset PIN / Password');

    $adminProfileResponse = $this->actingAs($admin)->get(route('admin.profile'));
    $adminProfileResponse->assertStatus(200);
    $adminProfileResponse->assertSee('Profil Pengajar');
    $adminProfileResponse->assertSee('Pak Guru Iqbal');
    $adminProfileResponse->assertSee('Google Gemini API Key');
});

test('halaman profil akun siswa dan pengaturan orang tua dapat diakses', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $response = $this->actingAs($student)->get(route('profile'));

    $response->assertStatus(200);
    $response->assertSee('Profil Akun Siswa');
    $response->assertSee('Alif');
    $response->assertSee('Profil Anak');
    $response->assertSee('Keamanan Akun');
    $response->assertSee('Suara & Efek Animasi', false);
});

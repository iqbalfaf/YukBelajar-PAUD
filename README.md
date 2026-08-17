# 🌟 YukBelajar PAUD — Platform Game Belajar & Kuis Bergambar Interaktif

<p align="center">
  <img src="https://raw.githubusercontent.com/iqbalfaf/YukBelajar-PAUD/main/public/favicon.ico" width="80" alt="YukBelajar Logo">
</p>

<p align="center">
  <strong>Aplikasi Edukasi Digital Interaktif Berbasis Gamifikasi untuk Anak Usia Dini (3–6 Tahun), Dilengkapi Audio Suara Ceria, Portal Pendamping Orang Tua, dan 1-Click AI Generator Studio untuk Guru.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.4">
  <img src="https://img.shields.io/badge/Tailwind_CSS-v4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS v4">
  <img src="https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpinedotjs&logoColor=black" alt="Alpine.js">
  <img src="https://img.shields.io/badge/Google_Gemini-AI_Studio-4285F4?style=for-the-badge&logo=google&logoColor=white" alt="Google Gemini AI">
  <img src="https://img.shields.io/badge/Tests-76_Passed-success?style=for-the-badge&logo=pest" alt="Pest Tests">
</p>

---

## 📖 Daftar Isi
1. [Tentang YukBelajar PAUD](#-tentang-yukbelajar-paud)
2. [Pilar Pembelajaran](#-pilar-pembelajaran)
3. [Fitur Lengkap Aplikasi](#-fitur-lengkap-aplikasi)
   - [A. Area Siswa / Petualang Cilik](#a-area-siswa--petualang-cilik)
   - [B. Area Portal Orang Tua / Pendamping](#b-area-portal-orang-tua--pendamping)
   - [C. Area Panel Guru & Administrator](#c-area-panel-guru--administrator)
4. [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
5. [Spesifikasi Server & Rekomendasi OS](#-spesifikasi-server--rekomendasi-os)
6. [Panduan Instalasi & Menjalankan Aplikasi](#-panduan-instalasi--menjalankan-aplikasi)
7. [Akun Bawaan (Default Login)](#-akun-bawaan-default-login)
8. [Pengujian Otomatis (Testing)](#-pengujian-otomatis-testing)
9. [Struktur Direktori Proyek](#-struktur-direktori-proyek)
10. [Lisensi & Kontribusi](#-lisensi--kontribusi)

---

## 💡 Tentang YukBelajar PAUD

**YukBelajar PAUD** adalah aplikasi web pembelajaran digital yang dirancang khusus untuk memenuhi kebutuhan kognitif, motorik, dan afektif anak usia pra-sekolah (PAUD dan TK). Menggunakan pendekatan **Gamifikasi Edukatif** (*Playful Learning*), anak belajar mengenal dunia di sekitarnya layaknya menjelajahi pulau petualangan yang penuh warna, animasi, maskot pemandu, suara pelafalan ceria, dan apresiasi bintang emas.

Aplikasi ini mengintegrasikan tiga peran penting dalam satu ekosistem:
1. **Siswa (Anak)**: Bermain sambil belajar melalui kartu bergambar (*flashcard*), suara interaktif (*TTS & Web Audio*), tantangan kuis bergambar, dan mengoleksi stiker virtual.
2. **Orang Tua**: Memantau perkembangan belajar, mengatur durasi bermain, memantau catatan apresiasi guru, dan mengakses fitur yang diamankan oleh *Parental Gate*.
3. **Guru / Admin**: Mengelola materi kurikulum, membuat kuis dengan bantuan **Google Gemini AI 1-Click Studio**, membagikan hadiah bintang (*Teacher Star Gift*), memantau analitik kelas, dan mengekspor rapor belajar siswa.

---

## 🏛️ Pilar Pembelajaran

YukBelajar PAUD membagi kurikulum pembelajarannya ke dalam 3 Pilar Utama:
* 🔍 **Pilar Mengenal**: Mengenal Satwa & Hewan Lucu, Aneka Buah & Sayuran Segar, Warna Ceria, Bentuk Geometri, dan Benda di Sekitar Kita.
* 📖 **Pilar Membaca**: Mengenal Huruf Abjad A–Z, Suku Kata Ceria, Kosa Kata Bergambar, dan Huruf Hijaiyah Cilik (Alif–Ya).
* 🔢 **Pilar Menghitung**: Mengenal Lambang Bilangan Angka 1–20, Menghitung Jumlah Benda Ceria, dan Pengenalan Ukuran/Perbandingan Dasar.

---

## ✨ Fitur Lengkap Aplikasi

### A. Area Siswa / Petualang Cilik
* **🏝️ Taman Petualangan (Game Hub)**: Antarmuka utama dengan kartu topik dinamis, indikator level terbuka/terkunci, animasi awan mengambang, dan sapaan suara ramah.
* **🃏 Flashcard Bergambar & Bersuara (Audio TTS)**: Kartu belajar interaktif dengan pelafalan suara otomatis (Web Speech API Bahasa Indonesia), tiruan bunyi benda/hewan, serta mode tampilan panggung putar (*Carousel Fullscreen*).
* **🎯 Arena Kuis Bergambar Interaktif**: Kuis pilihan ganda berbasis gambar dan emoji ramah anak dengan efek suara kemenangan (*Web Audio Synthesizer*) dan ledakan konfeti emas saat meraih skor sempurna.
* **🎁 Hadiah & Klaim Bintang Guru**: Pop-up perayaan khusus dengan maskot Kiki dan animasi saat anak menerima hadiah bintang apresiasi dari guru pengajar.
* **🏆 Buku Stiker Virtual & Album Prestasi**: Koleksi stiker virtual dengan tingkatan kelangkaan (*Common*, *Rare*, *Legendary*) yang otomatis terbuka seiring bertambahnya tabungan bintang anak.
* **📜 Ruang Piala & Studio Sertifikat**: Penghargaan lencana pencapaian dan sertifikat kelulusan per topik materi yang dapat dicetak langsung.
* **🤝 Panggung Sahabat Petualang**: Ruang komunitas untuk melihat pencapaian teman sekelas, milestone bintang bersama, dan kabar prestasi terkini.
* **🔥 Semangat Belajar Harian (*Daily Streak*)**: Sistem pelacak keaktifan belajar harian untuk memotivasi anak belajar secara konsisten setiap hari.
* **🔓 Sistem Tingkatan Level Dinamis (*Scaffolding Levels*)**:
  * *Level 1 (Pemula)*: Terbuka untuk semua petualang baru.
  * *Level 2 (Menengah)*: Terbuka otomatis saat mencapai syarat bintang.
  * *Level 3 (Pra-SD / Mahir)*: Terbuka saat anak menguasai materi lanjutan.

---

### B. Area Portal Orang Tua / Pendamping
* **🛡️ Gerbang Keamanan Orang Tua (*Parental Gate*)**: Pengaman soal matematika acak sederhana sebelum masuk ke menu sensitif agar anak tidak mengubah pengaturan tanpa didampingi orang tua.
* **📊 Radar & Analitik Pemahaman Anak**: Grafik dan persentase ketuntasan belajar per topik berdasarkan riwayat kuis dan kartu yang telah dipelajari.
* **💌 Catatan Apresiasi & Hadiah Guru**: Riwayat lengkap catatan motivasi dan hadiah bintang yang dikirimkan guru langsung ke anak.
* **⚙️ Pengaturan Profil Anak & Keamanan PIN**: Mengubah avatar, nama panggilan anak, data kontak orang tua, dan PIN parental gate.

---

### C. Area Panel Guru & Administrator
* **📊 Dashboard Analitik Pembelajaran**: Statistik total materi, aktivitas kuis mingguan, distribusi penguasaan kelas, log aktivitas audit, dan status siswa online/aktif.
* **⚡ 1-Click AI Generator Studio (Google Gemini)**: Generator otomatis pembuatan paket soal kuis dan kartu materi berbasis kurikulum PAUD dalam hitungan detik menggunakan kecerdasan buatan Google Gemini.
* **📚 Manajemen Topik & Materi Kurikulum**: Tambah, ubah, dan hapus topik pembelajaran, pilar belajar, dan kartu flashcard bersuara.
* **🎯 Manajemen Bank Kuis & Soal**: Mengelola kuis, opsi jawaban benar/salah, emoji ilustrasi, dan naskah audio pembacaan soal.
* **🚀 Manajemen Hadiah Bintang Guru (*Teacher Star Gift*)**:
  * *Single Gift*: Mengirimkan bintang apresiasi ke satu siswa tertentu beserta kategori dan pesan motivasi.
  * *Bulk Gift*: Membagikan bintang apresiasi ke seluruh siswa aktif sekaligus untuk perayaan kelas.
* **👥 Manajemen Pengguna & Reset PIN**: Kelola data siswa, guru, dan orang tua, serta fitur 1-klik reset PIN Parental Gate jika orang tua lupa PIN.
* **📄 Ekspor Rapor Belajar CSV**: Mengunduh rekapitulasi perkembangan belajar, rata-rata skor kuis, dan akumulasi bintang seluruh siswa dalam format file CSV ramah Excel.

---

## 🛠️ Teknologi yang Digunakan

* **Backend Framework**: [Laravel 12](https://laravel.com/) (PHP 8.4)
* **Frontend Framework & UI**: [Tailwind CSS v4](https://tailwindcss.com/), [Alpine.js 3.x](https://alpinejs.dev/)
* **Database**: MySQL 8.0+ / MariaDB
* **Audio & Suara**: Web Speech API (SpeechSynthesis TTS `id-ID`) + Web Audio API (Synthesizer Chimes, Clicks, Fanfare)
* **Animasi & Interaktivitas**: Canvas-Confetti, CSS3 Keyframe Animations, Glassmorphism UI
* **Artificial Intelligence**: [Google Gemini PHP Laravel Package](https://github.com/google-gemini-php/laravel)
* **Pengujian Otomatis (*Testing*)**: Pest PHP Testing Framework (76 Unit & Feature Tests, 445 Assertions)
* **Standar Kode**: Laravel Pint Formatter

---

## 🖥️ Spesifikasi Server & Rekomendasi OS

### 1. Sistem Operasi (OS) yang Didukung
| Lingkungan | Rekomendasi Sistem Operasi | Keterangan |
| :--- | :--- | :--- |
| **Produksi (Production Server)** | **Ubuntu Server 22.04 LTS / 24.04 LTS** (Sangat Direkomendasikan) | Sangat stabil, kompatibilitas paket PHP 8.4 dan Nginx tinggi. |
| **Alternatif Server** | **Debian 12 (Bookworm)** / **Rocky Linux 9** / **AlmaLinux 9** | Pilihan andal untuk VPS atau server dedicated. |
| **Pengembangan (Local Dev)** | **Windows 10 / 11** (via Laravel Herd, Laragon, atau WSL2) | Direkomendasikan menggunakan Laravel Herd untuk kemudahan PHP 8.4 & Node.js. |
| **Pengembangan (Mac / Linux)** | **macOS 12+** (Apple Silicon / Intel) atau **Ubuntu Desktop** | Menggunakan Laravel Herd / Valet / Docker. |

---

### 2. Spesifikasi Hardware Server
* **Minimum (1–50 Pengguna Aktif Bersamaan)**:
  * CPU: 1 Core vCPU (2.0 GHz+)
  * RAM: 1 GB (Disarankan menambah 1 GB Swap)
  * Penyimpanan: 10 GB SSD / NVMe
* **Rekomendasi (50–500+ Pengguna Aktif Bersamaan)**:
  * CPU: 2 Core vCPU atau lebih
  * RAM: 2 GB – 4 GB RAM
  * Penyimpanan: 25 GB+ SSD / NVMe

---

### 3. Persyaratan Perangkat Lunak (Software Requirements)
* **PHP**: Versi **8.2, 8.3, atau 8.4** (Disarankan PHP 8.4)
  * Ekstensi PHP Wajib: `BCMath`, `Ctype`, `cURL`, `DOM`, `Fileinfo`, `JSON`, `Mbstring`, `OpenSSL`, `PCRE`, `PDO`, `PDO_MySQL`, `Tokenizer`, `XML`, `GD` / `Imagick`.
* **Database**: **MySQL 8.0+** atau **MariaDB 10.5+**
* **Web Server**: **Nginx** (Direkomendasikan) atau **Apache 2.4+**
* **Node.js & NPM**: Node.js versi **18.x, 20.x, atau 22.x LTS**
* **Composer**: Versi **2.x+**

---

## 🚀 Panduan Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek di komputer lokal atau server:

### Langkah 1: Kloning Repositori
```bash
git clone https://github.com/iqbalfaf/YukBelajar-PAUD.git
cd YukBelajar-PAUD
```

### Langkah 2: Instal Dependensi PHP (Composer)
```bash
composer install
```

### Langkah 3: Siapkan File Konfigurasi Environment (`.env`)
Salin file template `.env.example` menjadi `.env`:
```bash
# Untuk Linux / macOS / Git Bash
cp .env.example .env

# Untuk Windows PowerShell / CMD
copy .env.example .env
```

Buka file `.env` dan sesuaikan pengaturan database Anda:
```env
APP_NAME="YukBelajar PAUD"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kuy_belajar
DB_USERNAME=root
DB_PASSWORD=

# (Opsional) Google Gemini API Key untuk 1-Click AI Studio
GEMINI_API_KEY=
```

### Langkah 4: Generate Application Key
```bash
php artisan key:generate
```

### Langkah 5: Migrasi Database & Seeder Data Lengkap
Perintah ini akan membuat semua tabel kurikulum, kartu materi, bank kuis, lencana, stiker virtual, dan akun demo:
```bash
php artisan migrate:fresh --seed
```

### Langkah 6: Instal Dependensi Frontend & Kompilasi Aset
```bash
npm install
npm run build
```
*(Saat proses pengembangan aktif, Anda dapat menjalankan `npm run dev` untuk fitur Vite Hot Module Replacement).*

### Langkah 7: Jalankan Server Aplikasi
Jika menggunakan PHP Built-in Server:
```bash
php artisan serve
```
Aplikasi kini dapat diakses melalui browser di: **`http://localhost:8000`** atau **`http://127.0.0.1:8000`** *(atau melalui domain lokal Laravel Herd seperti `http://kuy-belajar.test`)*.

---

## 🔑 Akun Bawaan (Default Login)

Setelah menjalankan seeder database, Anda dapat langsung masuk menggunakan akun demo berikut pada halaman Login (**`/login`**):

| Peran (Role) | Username / Email | Kata Sandi (Password) | Akses Utama |
| :--- | :--- | :--- | :--- |
| **👨‍🏫 Guru / Administrator** | `guru@kuybelajar.id`<br>*(atau username: `pak_guru_iqbal`)* | `password123` | Panel Admin, AI Studio, Manajemen Kuis & Siswa, Gift Bintang |
| **👦 Siswa Demo 1 (Alif)** | `alif_ceria`<br>*(atau email: `ortu.alif@gmail.com`)* | `password123` | Taman Petualangan, Kuis, Stiker (PIN Orang Tua: `1234`) |
| **👧 Siswa Demo 2 (Nayla)** | `nayla_pintar` | `password123` | Taman Petualangan & Arena Kuis (PIN: `1234`) |
| **👦 Siswa Demo 3 (Kenzo)** | `kenzo_juara` | `password123` | Taman Petualangan & Arena Kuis (PIN: `1234`) |
| **👧 Siswa Demo 4 (Zahra)** | `zahra_kreatif` | `password123` | Taman Petualangan & Arena Kuis (PIN: `1234`) |

---

## 🧪 Pengujian Otomatis (Testing)

Proyek ini dilengkapi dengan suite pengujian otomatis yang komprehensif menggunakan **Pest PHP**:

Untuk menjalankan seluruh pengujian otomatis:
```bash
php artisan test
```

Untuk menjalankan pengujian spesifik fitur:
```bash
# Pengujian Fitur Hadiah Bintang Guru
php artisan test tests/Feature/StarGiftTest.php

# Pengujian Rute & Halaman Frontend Siswa/Orang Tua
php artisan test tests/Feature/FrontEndRoutesTest.php

# Pengujian Autentikasi & Registrasi
php artisan test tests/Feature/AuthTest.php
```

Untuk memformat dan memeriksa kerapian kode sesuai standar Laravel:
```bash
vendor/bin/pint --format agent
```

---

## 📂 Struktur Direktori Proyek

```text
YukBelajar-PAUD/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php      # Controller Panel Admin, AI Studio, Materi, User & Gift
│   │   │   ├── AuthController.php       # Controller Login, Register & Session
│   │   │   └── FrontEndController.php   # Controller Siswa, Kuis, Flashcard, Portal Ortu & Stiker
│   │   └── Middleware/
│   │       └── EnsureAdminOrTeacher.php # Proteksi Hak Akses Khusus Guru & Admin
│   ├── Models/                          # Model Eloquent (User, Category, Material, Quiz, StarGift, dll)
│   └── Services/
│       └── GeminiService.php            # Service Integrasi Google Gemini AI & Kurasi Cerdas Fallback
├── database/
│   ├── migrations/                      # Skema Database Relasional
│   └── seeders/                         # Master Seeder Data Kurikulum, Kuis, Stiker & User Demo
├── resources/
│   ├── css/
│   │   └── app.css                      # Tailwind CSS v4 & Styling Khusus Tombol 3D & Animasi
│   ├── js/
│   │   └── app.js                       # Alpine.js & Inisialisasi Audio Engine
│   └── views/
│       ├── layouts/                     # Layout Utama (Siswa/Orang Tua & Admin)
│       └── pages/                       # Blade Views (Home, Quiz, Materials, Stickers, Parents, Admin)
├── routes/
│   └── web.php                          # Rute Web & Proteksi Middleware
└── tests/
    └── Feature/                         # Automated Feature Tests (Pest)
```

---

## 📄 Lisensi & Hak Cipta

Proyek **YukBelajar PAUD** ini dilisensikan di bawah lisensi open-source [MIT License](LICENSE).
Dikembangkan dengan sepenuh hati untuk memajukan pendidikan anak usia dini Indonesia melalui teknologi yang ramah, aman, dan mendidik. ⭐

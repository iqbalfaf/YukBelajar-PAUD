<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Sticker;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Admin & Guru Utama
        $admin = User::updateOrCreate(
            ['username' => 'iqbal'],
            [
                'name' => 'Pak Guru Iqbal, S.Pd.',
                'email' => 'guru@kuybelajar.id',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'avatar_icon' => 'singa',
                'school_name' => 'TK & PAUD Ceria Nusantara',
                'phone' => '0812-3456-7890',
                'total_stars' => 100,
                'is_active' => true,
                'last_login_at' => now(),
            ]
        );

        // 2. Demo Siswa PAUD Utama: Alif Rahman
        $alif = User::updateOrCreate(
            ['username' => 'alif_ceria'],
            [
                'name' => 'Alif Rahman',
                'email' => 'ortu.alif@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'student',
                'avatar_icon' => 'dino',
                'avatar_accessory' => 'crown',
                'age' => 4,
                'parent_pin' => '1234',
                'school_name' => 'TK & PAUD Ceria Nusantara',
                'phone' => '0813-9876-5432',
                'total_stars' => 35,
                'is_active' => true,
                'last_login_at' => now(),
            ]
        );

        // 3. Siswa Demo Tambahan: Nayla, Kenzo, Zahra
        $nayla = User::updateOrCreate(
            ['username' => 'nayla_pintar'],
            [
                'name' => 'Nayla Putri',
                'email' => 'ortu.nayla@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'student',
                'avatar_icon' => 'kucing',
                'avatar_accessory' => 'hat',
                'age' => 4,
                'parent_pin' => '1234',
                'school_name' => 'TK & PAUD Ceria Nusantara',
                'total_stars' => 42,
                'is_active' => true,
                'last_login_at' => now()->subHours(2),
            ]
        );

        $kenzo = User::updateOrCreate(
            ['username' => 'kenzo_juara'],
            [
                'name' => 'Kenzo Al-Fatih',
                'email' => 'ortu.kenzo@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'student',
                'avatar_icon' => 'singa',
                'avatar_accessory' => 'glasses',
                'age' => 5,
                'parent_pin' => '1234',
                'school_name' => 'TK & PAUD Ceria Nusantara',
                'total_stars' => 58,
                'is_active' => true,
                'last_login_at' => now()->subHours(5),
            ]
        );

        $zahra = User::updateOrCreate(
            ['username' => 'zahra_kreatif'],
            [
                'name' => 'Zahra Humaira',
                'email' => 'ortu.zahra@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'student',
                'avatar_icon' => 'kelinci',
                'age' => 3,
                'parent_pin' => '1234',
                'school_name' => 'TK & PAUD Ceria Nusantara',
                'total_stars' => 28,
                'is_active' => true,
                'last_login_at' => now()->subDay(),
            ]
        );

        // 4. Orang Tua Pendamping
        $bundaSiti = User::updateOrCreate(
            ['username' => 'bunda_siti'],
            [
                'name' => 'Bunda Siti Rahmawati',
                'email' => 'siti.rahma@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'parent',
                'avatar_icon' => 'panda',
                'phone' => '0821-1122-3344',
                'parent_pin' => '1234',
                'is_active' => true,
                'last_login_at' => now()->subHours(1),
            ]
        );

        // Berikan beberapa stiker awal untuk Alif
        $stickers = Sticker::take(7)->get();
        foreach ($stickers as $stk) {
            $alif->stickers()->syncWithoutDetaching([$stk->id => ['earned_at' => now()->subDays(rand(1, 10))]]);
        }

        // Berikan lencana prestasi untuk Alif
        $achievements = Achievement::where('target_type', 'student')->get();
        foreach ($achievements as $ach) {
            $alif->achievements()->syncWithoutDetaching([
                $ach->id => [
                    'current_progress' => $ach->required_count,
                    'is_unlocked' => true,
                    'unlocked_at' => now()->subDays(rand(1, 5)),
                ],
            ]);
        }
    }
}

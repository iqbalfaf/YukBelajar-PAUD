<?php

namespace Database\Seeders;

use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Database\Seeder;

class AuditLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alif = User::where('username', 'alif_ceria')->first();
        $nayla = User::where('username', 'nayla_pintar')->first();
        $admin = User::where('role', 'admin')->first();

        $logs = [
            [
                'user_id' => $alif ? $alif->id : null,
                'action_type' => 'quiz',
                'description' => 'Alif Rahman menamatkan Kuis Tebak Hewan Ceria (Skor: 100% ⭐⭐⭐)',
                'ip_address' => '127.0.0.1',
                'created_at' => now()->subMinutes(5),
            ],
            [
                'user_id' => $admin ? $admin->id : null,
                'action_type' => 'ai',
                'description' => 'Google Gemini AI membuat 3 materi flashcard baru pada modul Satwa Laut Cerdas',
                'ip_address' => '127.0.0.1',
                'created_at' => now()->subMinutes(25),
            ],
            [
                'user_id' => $nayla ? $nayla->id : null,
                'action_type' => 'level_unlock',
                'description' => 'Nayla Putri berhasil membuka tantangan akselerasi Level 3 Istana Angka',
                'ip_address' => '127.0.0.1',
                'created_at' => now()->subHour(),
            ],
            [
                'user_id' => $admin ? $admin->id : null,
                'action_type' => 'user_crud',
                'description' => 'Pak Guru Iqbal memperbarui kurikulum dan kunci level pada kategori Taman Abjad',
                'ip_address' => '127.0.0.1',
                'created_at' => now()->subHours(3),
            ],
            [
                'user_id' => $alif ? $alif->id : null,
                'action_type' => 'achievement',
                'description' => 'Alif Rahman meraih Piala Sahabat Rimba 🦁 dan Mahkota Emas 👑',
                'ip_address' => '127.0.0.1',
                'created_at' => now()->subHours(6),
            ],
        ];

        foreach ($logs as $log) {
            AuditLog::create($log);
        }
    }
}

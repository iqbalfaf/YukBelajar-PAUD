<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            // Lencana Siswa
            [
                'code' => 'sahabat_rimba',
                'title' => 'Sahabat Rimba',
                'description' => 'Membuka dan mempelajari seluruh materi Pulau Hewan.',
                'icon_badge' => '🦁',
                'target_type' => 'student',
                'reward_type' => 'accessory',
                'reward_value' => '👑 Mahkota Emas',
                'required_count' => 5,
            ],
            [
                'code' => 'master_berhitung',
                'title' => 'Master Berhitung',
                'description' => 'Menyelesaikan kuis Istana Angka dengan nilai sempurna 100%.',
                'icon_badge' => '🔢',
                'target_type' => 'student',
                'reward_type' => 'accessory',
                'reward_value' => '👓 Kacamata Pintar',
                'required_count' => 3,
            ],
            [
                'code' => 'detektif_abjad',
                'title' => 'Detektif Abjad',
                'description' => 'Mengenal seluruh huruf vokal A-I-U-E-O.',
                'icon_badge' => '🔤',
                'target_type' => 'student',
                'reward_type' => 'stars',
                'reward_value' => '+15 Bintang',
                'required_count' => 5,
            ],
            [
                'code' => 'kolektor_stiker',
                'title' => 'Kolektor Stiker Handal',
                'description' => 'Mengumpulkan minimal 5 stiker karakter di Buku Stiker.',
                'icon_badge' => '🏆',
                'target_type' => 'student',
                'reward_type' => 'accessory',
                'reward_value' => '🥳 Topi Pesta Ceria',
                'required_count' => 5,
            ],
            [
                'code' => 'streak_belajar_5_hari',
                'title' => 'Api Petualang',
                'description' => 'Belajar secara konsisten selama 5 hari berturut-turut.',
                'icon_badge' => '🔥',
                'target_type' => 'student',
                'reward_type' => 'stars',
                'reward_value' => '+25 Bintang',
                'required_count' => 5,
            ],

            // Lencana Pendamping Orang Tua
            [
                'code' => 'pendamping_teladan',
                'title' => 'Pendamping Teladan',
                'description' => 'Mendampingi ananda menamatkan 5 modul kuis.',
                'icon_badge' => '🌟',
                'target_type' => 'parent',
                'reward_type' => 'certificate',
                'reward_value' => 'Piagam Orang Tua Hebat',
                'required_count' => 5,
            ],
            [
                'code' => 'sahabat_cerita',
                'title' => 'Sahabat Dongeng & Cerita',
                'description' => 'Membacakan seluruh catatan panduan orang tua di setiap pulau.',
                'icon_badge' => '📖',
                'target_type' => 'parent',
                'reward_type' => 'certificate',
                'reward_value' => 'Piagam Narator Ceria',
                'required_count' => 6,
            ],
        ];

        foreach ($achievements as $ach) {
            Achievement::updateOrCreate(['code' => $ach['code']], $ach);
        }
    }
}

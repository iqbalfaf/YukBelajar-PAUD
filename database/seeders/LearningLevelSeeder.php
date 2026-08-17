<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\LearningLevel;
use Illuminate\Database\Seeder;

class LearningLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $cat) {
            // Level 1: Dasar / Pemula
            LearningLevel::updateOrCreate(
                ['category_id' => $cat->id, 'level_number' => 1],
                [
                    'title' => 'Level 1: Dasar / Pemula (Usia 3-4 Thn)',
                    'target_age' => 3,
                    'unlock_stars_required' => 0,
                    'description' => 'Materi konkret paling mendasar dengan bantuan visual besar dan audio ramah.',
                ]
            );

            // Level 2: Menengah / Eksplorasi
            LearningLevel::updateOrCreate(
                ['category_id' => $cat->id, 'level_number' => 2],
                [
                    'title' => 'Level 2: Menengah / Eksplorasi (Usia 4-5 Thn)',
                    'target_age' => 4,
                    'unlock_stars_required' => 10,
                    'description' => 'Eksplorasi ciri-ciri objek, suku kata pertama, dan konsep perbandingan.',
                ]
            );

            // Level 3: Pra-SD / Mahir
            LearningLevel::updateOrCreate(
                ['category_id' => $cat->id, 'level_number' => 3],
                [
                    'title' => 'Level 3: Pra-SD / Mahir (Usia 5-6 Thn)',
                    'target_age' => 5,
                    'unlock_stars_required' => 25,
                    'description' => 'Penalaran sebab-akibat sederhana, merangkai kata, dan persiapan sekolah dasar.',
                ]
            );
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            LearningLevelSeeder::class,
            MaterialSeeder::class,
            QuizSeeder::class,
            StickerSeeder::class,
            AchievementSeeder::class,
            UserSeeder::class,
            QuizAttemptSeeder::class,
            AuditLogSeeder::class,
        ]);
    }
}

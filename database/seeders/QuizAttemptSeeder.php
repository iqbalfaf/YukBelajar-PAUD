<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QuizAttemptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = User::where('role', 'student')->get();
        $quizzes = Quiz::all();

        if ($students->isEmpty() || $quizzes->isEmpty()) {
            return;
        }

        // Generate quiz attempts across the past 7 days to populate weekly chart
        $now = Carbon::now();

        foreach ($students as $student) {
            foreach ($quizzes as $quiz) {
                // Random completed day within this week
                $dayOffset = rand(0, 6);
                $attemptDate = $now->copy()->subDays($dayOffset)->subHours(rand(1, 10));

                QuizAttempt::create([
                    'user_id' => $student->id,
                    'quiz_id' => $quiz->id,
                    'score' => 100,
                    'total_correct' => $quiz->total_questions,
                    'total_questions' => $quiz->total_questions,
                    'stars_earned' => 3,
                    'completed_at' => $attemptDate,
                ]);
            }
        }
    }
}

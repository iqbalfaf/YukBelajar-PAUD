<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\LearningLevel;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzesData = [
            [
                'category_slug' => 'hewan',
                'title' => 'Tebak Hewan Pintar',
                'slug' => 'tebak-hewan',
                'icon_emoji' => '🦁',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Manakah hewan yang memiliki belalai panjang dan telinga lebar?',
                        'audio' => 'Manakah hewan yang memiliki belalai panjang dan telinga lebar?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Gajah', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Kucing', 'is_correct' => false],
                            ['emoji' => '🐸', 'text' => 'Katak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan apa yang dijuluki Raja Hutan dan memiliki surai gagah?',
                        'audio' => 'Hewan apa yang dijuluki Raja Hutan dan memiliki surai gagah?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🐰', 'text' => 'Kelinci', 'is_correct' => false],
                            ['emoji' => '🦁', 'text' => 'Singa', 'is_correct' => true],
                            ['emoji' => '🐒', 'text' => 'Monyet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan lucu bertelinga panjang yang suka makan wortel?',
                        'audio' => 'Manakah hewan lucu bertelinga panjang yang suka makan wortel?',
                        'emoji' => '🐰',
                        'options' => [
                            ['emoji' => '🐶', 'text' => 'Anjing', 'is_correct' => false],
                            ['emoji' => '🐰', 'text' => 'Kelinci', 'is_correct' => true],
                            ['emoji' => '🐼', 'text' => 'Panda', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'category_slug' => 'hewan',
                'title' => 'Tantangan Satwa Laut Cerdas',
                'slug' => 'satwa-laut',
                'icon_emoji' => '🐬',
                'target_age' => 5,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Manakah mamalia laut yang cerdas dan suka melompat di atas ombak?',
                        'audio' => 'Manakah mamalia laut yang cerdas dan suka melompat di atas ombak?',
                        'emoji' => '🐬',
                        'options' => [
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba', 'is_correct' => true],
                            ['emoji' => '🦀', 'text' => 'Kepiting', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bintang Laut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan laut mana yang memiliki capit kuat dan berjalan miring?',
                        'audio' => 'Hewan laut mana yang memiliki capit kuat dan berjalan miring?',
                        'emoji' => '🦀',
                        'options' => [
                            ['emoji' => '🐠', 'text' => 'Ikan Badut', 'is_correct' => false],
                            ['emoji' => '🦀', 'text' => 'Kepiting', 'is_correct' => true],
                            ['emoji' => '🐙', 'text' => 'Gurita', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'category_slug' => 'angka',
                'title' => 'Berhitung Balon Ceria',
                'slug' => 'berhitung-balon',
                'icon_emoji' => '🔢',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapakah jumlah bebek kuning yang sedang berenang? 🦆 🦆',
                        'audio' => 'Berapakah jumlah bebek kuning yang sedang berenang?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '1️⃣', 'text' => '1 Bebek', 'is_correct' => false],
                            ['emoji' => '2️⃣', 'text' => '2 Bebek', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Bebek', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah bintang emas berkilau di langit? ⭐ ⭐ ⭐',
                        'audio' => 'Berapakah jumlah bintang emas berkilau di langit?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Bintang', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Bintang', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Bintang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ada 1 apel ditambah 1 apel lagi, berapakah total apelnya?',
                        'audio' => 'Ada satu apel ditambah satu apel lagi, berapakah total apelnya?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Apel', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Apel', 'is_correct' => false],
                            ['emoji' => '1️⃣', 'text' => '1 Apel', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'category_slug' => 'abjad',
                'title' => 'Tebak Huruf Vokal Ceria',
                'slug' => 'huruf-vokal',
                'icon_emoji' => '🔤',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf apakah huruf pertama pada kata "A-P-E-L"?',
                        'audio' => 'Huruf apakah huruf pertama pada kata Apel?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah huruf pertama pada kata "I-K-A-N"?',
                        'audio' => 'Huruf apakah huruf pertama pada kata Ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '⛎', 'text' => 'Huruf U', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'category_slug' => 'buah',
                'title' => 'Tebak Buah Segar Sehat',
                'slug' => 'tebak-buah',
                'icon_emoji' => '🍎',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Buah apakah yang berwarna kuning melengkung dan disukai monyet?',
                        'audio' => 'Buah apakah yang berwarna kuning melengkung dan disukai monyet?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🍌', 'text' => 'Pisang', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Apel', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah apakah yang bulat berwarna merah dan renyah manis?',
                        'audio' => 'Buah apakah yang bulat berwarna merah dan renyah manis?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍊', 'text' => 'Jeruk', 'is_correct' => false],
                            ['emoji' => '🍎', 'text' => 'Apel', 'is_correct' => true],
                            ['emoji' => '🍉', 'text' => 'Semangka', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'category_slug' => 'warna',
                'title' => 'Tebak Warna Pelangi Ceria',
                'slug' => 'tebak-warna',
                'icon_emoji' => '🎨',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Warna apakah buah stroberi yang sudah matang di kebun?',
                        'audio' => 'Warna apakah buah stroberi yang sudah matang di kebun?',
                        'emoji' => '🍓',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah langit cerah di siang hari?',
                        'audio' => 'Warna apakah langit cerah di siang hari?',
                        'emoji' => '☀️',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'category_slug' => 'kendaraan',
                'title' => 'Tebak Kendaraan Hebat',
                'slug' => 'tebak-kendaraan',
                'icon_emoji' => '🚗',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Kendaraan apa yang terbang tinggi di angkasa memiliki sayap lebar?',
                        'audio' => 'Kendaraan apa yang terbang tinggi di angkasa memiliki sayap lebar?',
                        'emoji' => '✈️',
                        'options' => [
                            ['emoji' => '✈️', 'text' => 'Pesawat Terbang', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Mobil', 'is_correct' => false],
                            ['emoji' => '🚢', 'text' => 'Kapal Laut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan apa yang berjalan di atas rel panjang?',
                        'audio' => 'Kendaraan apa yang berjalan di atas rel panjang?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => true],
                            ['emoji' => '🚌', 'text' => 'Bus Kota', 'is_correct' => false],
                            ['emoji' => '🚲', 'text' => 'Sepeda', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzesData as $qData) {
            $cat = Category::where('slug', $qData['category_slug'])->first();
            if (! $cat) {
                continue;
            }

            $lvl = LearningLevel::where('category_id', $cat->id)->first();

            $quiz = Quiz::updateOrCreate(
                ['slug' => $qData['slug']],
                [
                    'category_id' => $cat->id,
                    'learning_level_id' => $lvl ? $lvl->id : null,
                    'title' => $qData['title'],
                    'icon_emoji' => $qData['icon_emoji'],
                    'target_age' => $qData['target_age'],
                    'total_questions' => $qData['total_questions'],
                    'stars_reward' => $qData['stars_reward'],
                ]
            );

            // Delete old questions if re-seeding
            $quiz->questions()->delete();

            foreach ($qData['questions'] as $qIdx => $questionItem) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $questionItem['text'],
                    'question_audio' => $questionItem['audio'],
                    'question_emoji' => $questionItem['emoji'],
                    'sort_order' => $qIdx + 1,
                ]);

                foreach ($questionItem['options'] as $oIdx => $opt) {
                    QuestionOption::create([
                        'question_id' => $question->id,
                        'option_emoji' => $opt['emoji'],
                        'option_text' => $opt['text'],
                        'is_correct' => $opt['is_correct'],
                        'sort_order' => $oIdx + 1,
                    ]);
                }
            }
        }
    }
}

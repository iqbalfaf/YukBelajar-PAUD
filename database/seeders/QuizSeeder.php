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
     * Run the database seeds for all 20 Topics.
     */
    public function run(): void
    {
        $quizzesData = [
            // =========================================================================
            // PILAR 1 - TOPIK 1: HURUF ABJAD CERIA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (HURUF A - I) ---
            [
                'category_slug' => 'abjad',
                'level_number' => 1,
                'title' => 'Tebak Huruf A, B, C Cilik',
                'slug' => 'kuis-abjad-l1-abc',
                'icon_emoji' => '🍎',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf apakah yang menjadi huruf pertama untuk kata APEL?',
                        'audio' => 'Huruf apakah yang menjadi huruf pertama untuk kata APEL?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan lucu yang bersuara kwek-kwek BEBEK diawali dengan huruf apa?',
                        'audio' => 'Hewan lucu yang bersuara kwek-kwek BEBEK diawali dengan huruf apa?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => false],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah kecil manis berwarna merah CERI diawali dengan huruf apa?',
                        'audio' => 'Buah kecil manis berwarna merah CERI diawali dengan huruf apa?',
                        'emoji' => '🍒',
                        'options' => [
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => true],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'abjad',
                'level_number' => 1,
                'title' => 'Tebak Huruf D, E, F Ceria',
                'slug' => 'kuis-abjad-l1-def',
                'icon_emoji' => '🦆',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hewan berbulu putih tebal DOMBA diawali dengan huruf apa?',
                        'audio' => 'Hewan berbulu putih tebal DOMBA diawali dengan huruf apa?',
                        'emoji' => '🐑',
                        'options' => [
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Burung gagah yang terbang tinggi ELANG diawali dengan huruf apa?',
                        'audio' => 'Burung gagah yang terbang tinggi ELANG diawali dengan huruf apa?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '🅴', 'text' => 'Huruf E', 'is_correct' => true],
                            ['emoji' => '🅸', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Burung cantik berbulu merah muda FLAMINGO diawali dengan huruf apa?',
                        'audio' => 'Burung cantik berbulu merah muda FLAMINGO diawali dengan huruf apa?',
                        'emoji' => '🦩',
                        'options' => [
                            ['emoji' => '🅵', 'text' => 'Huruf F', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🅿️', 'text' => 'Huruf P', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'abjad',
                'level_number' => 1,
                'title' => 'Tebak Huruf G, H, I Pintar',
                'slug' => 'kuis-abjad-l1-ghi',
                'icon_emoji' => '🐘',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hewan besar berbelalai panjang GAJAH diawali dengan huruf apa?',
                        'audio' => 'Hewan besar berbelalai panjang GAJAH diawali dengan huruf apa?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🅶', 'text' => 'Huruf G', 'is_correct' => true],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan loreng pemberani HARIMAU diawali dengan huruf apa?',
                        'audio' => 'Hewan loreng pemberani HARIMAU diawali dengan huruf apa?',
                        'emoji' => '🐯',
                        'options' => [
                            ['emoji' => '🅷', 'text' => 'Huruf H', 'is_correct' => true],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan yang lincah berenang di air IKAN diawali dengan huruf apa?',
                        'audio' => 'Hewan yang lincah berenang di air IKAN diawali dengan huruf apa?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🅸', 'text' => 'Huruf I', 'is_correct' => true],
                            ['emoji' => '🅻', 'text' => 'Huruf L', 'is_correct' => false],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (HURUF J - R) ---
            [
                'category_slug' => 'abjad',
                'level_number' => 2,
                'title' => 'Petualangan Huruf J, K, L, M',
                'slug' => 'kuis-abjad-l2-jklm',
                'icon_emoji' => '🦒',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Hewan tinggi berleher panjang JERAPAH diawali dengan huruf apa?',
                        'audio' => 'Hewan tinggi berleher panjang JERAPAH diawali dengan huruf apa?',
                        'emoji' => '🦒',
                        'options' => [
                            ['emoji' => '🅹', 'text' => 'Huruf J', 'is_correct' => true],
                            ['emoji' => '🅸', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'KUCING imut yang suka mengeong diawali dengan huruf apa?',
                        'audio' => 'KUCING imut yang suka mengeong diawali dengan huruf apa?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => true],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah kuning segar kaya vitamin C LEMON diawali dengan huruf apa?',
                        'audio' => 'Buah kuning segar kaya vitamin C LEMON diawali dengan huruf apa?',
                        'emoji' => '🍋',
                        'options' => [
                            ['emoji' => '🅻', 'text' => 'Huruf L', 'is_correct' => true],
                            ['emoji' => '🅸', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '🅹', 'text' => 'Huruf J', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'MONYET lincah yang suka makan pisang diawali dengan huruf apa?',
                        'audio' => 'MONYET lincah yang suka makan pisang diawali dengan huruf apa?',
                        'emoji' => '🐒',
                        'options' => [
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => true],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                            ['emoji' => '🆆', 'text' => 'Huruf W', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf yang tepat untuk melengkapi kata: "...UCING" (Kucing)?',
                        'audio' => 'Manakah huruf yang tepat untuk melengkapi kata Kucing?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'abjad',
                'level_number' => 2,
                'title' => 'Tantangan Huruf N, O, P, Q, R',
                'slug' => 'kuis-abjad-l2-nopq',
                'icon_emoji' => '🍍',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Buah bersisik dengan mahkota daun hijau NANAS diawali huruf apa?',
                        'audio' => 'Buah bersisik dengan mahkota daun hijau NANAS diawali huruf apa?',
                        'emoji' => '🍍',
                        'options' => [
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan pintar penjaga rimba ORANGUTAN diawali huruf apa?',
                        'audio' => 'Hewan pintar penjaga rimba ORANGUTAN diawali huruf apa?',
                        'emoji' => '🦧',
                        'options' => [
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => true],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                            ['emoji' => '🆀', 'text' => 'Huruf Q', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Burung lucu yang pandai berenang di salju PENGUIN diawali huruf apa?',
                        'audio' => 'Burung lucu yang pandai berenang di salju PENGUIN diawali huruf apa?',
                        'emoji' => '🐧',
                        'options' => [
                            ['emoji' => '🅿️', 'text' => 'Huruf P', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kitab suci mulia QURAN diawali dengan huruf apa?',
                        'audio' => 'Kitab suci mulia QURAN diawali dengan huruf apa?',
                        'emoji' => '📖',
                        'options' => [
                            ['emoji' => '🆀', 'text' => 'Huruf Q', 'is_correct' => true],
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => false],
                            ['emoji' => '🅶', 'text' => 'Huruf G', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan lincah bertanduk indah RUSA diawali dengan huruf apa?',
                        'audio' => 'Hewan lincah bertanduk indah RUSA diawali dengan huruf apa?',
                        'emoji' => '🦌',
                        'options' => [
                            ['emoji' => '🆁', 'text' => 'Huruf R', 'is_correct' => true],
                            ['emoji' => '🅿️', 'text' => 'Huruf P', 'is_correct' => false],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'abjad',
                'level_number' => 2,
                'title' => 'Eksplorasi Huruf Tengah J sampai R',
                'slug' => 'kuis-abjad-l2-j-sampai-r',
                'icon_emoji' => '🐱',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Huruf apakah yang berada di antara huruf J dan L dalam urutan abjad?',
                        'audio' => 'Huruf apakah yang berada di antara huruf J dan L dalam urutan abjad?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '🅺', 'text' => 'Huruf K (J - K - L)', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf vokal bulat sempurna seperti buah donat?',
                        'audio' => 'Manakah huruf vokal bulat sempurna seperti buah donat?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => true],
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => false],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang mengawali kata PENGUIN dan PISANG?',
                        'audio' => 'Huruf apakah yang mengawali kata PENGUIN dan PISANG?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🅿️', 'text' => 'Huruf P', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => '🆁', 'text' => 'Huruf R', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang memiliki dua lengkungan kaki seperti gunung kembar?',
                        'audio' => 'Huruf apakah yang memiliki dua lengkungan kaki seperti gunung kembar?',
                        'emoji' => '⛰️',
                        'options' => [
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => true],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                            ['emoji' => '🆅', 'text' => 'Huruf V', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah pasangan huruf dan nama hewan yang paling tepat?',
                        'audio' => 'Manakah pasangan huruf dan nama hewan yang paling tepat?',
                        'emoji' => '🦒',
                        'options' => [
                            ['emoji' => '🅹', 'text' => 'Huruf J untuk Jerapah', 'is_correct' => true],
                            ['emoji' => '🅺', 'text' => 'Huruf K untuk Gajah', 'is_correct' => false],
                            ['emoji' => '🅻', 'text' => 'Huruf L untuk Bebek', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (HURUF S - Z & A-Z LENGKAP) ---
            [
                'category_slug' => 'abjad',
                'level_number' => 3,
                'title' => 'Master Huruf Akhir S sampai Z',
                'slug' => 'kuis-abjad-l3-s-sampai-z',
                'icon_emoji' => '🦁',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Hewan perkasa si Raja Hutan SINGA diawali dengan huruf apa?',
                        'audio' => 'Hewan perkasa si Raja Hutan SINGA diawali dengan huruf apa?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah merah segar dan menyehatkan TOMAT diawali huruf apa?',
                        'audio' => 'Buah merah segar dan menyehatkan TOMAT diawali huruf apa?',
                        'emoji' => '🍅',
                        'options' => [
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => true],
                            ['emoji' => '🅸', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '🅻', 'text' => 'Huruf L', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan tangguh berpunuk di padang pasir UNTA diawali huruf apa?',
                        'audio' => 'Hewan tangguh berpunuk di padang pasir UNTA diawali huruf apa?',
                        'emoji' => '🐪',
                        'options' => [
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => true],
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => false],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tempat menaruh rangkaian bunga indah VAS diawali huruf apa?',
                        'audio' => 'Tempat menaruh rangkaian bunga indah VAS diawali huruf apa?',
                        'emoji' => '🏺',
                        'options' => [
                            ['emoji' => '🆅', 'text' => 'Huruf V', 'is_correct' => true],
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => false],
                            ['emoji' => '🆆', 'text' => 'Huruf W', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayur oranye kesukaan kelinci WORTEL diawali dengan huruf apa?',
                        'audio' => 'Sayur oranye kesukaan kelinci WORTEL diawali dengan huruf apa?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🆆', 'text' => 'Huruf W', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🆅', 'text' => 'Huruf V', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik bilah bernada riang XILOFON diawali huruf apa?',
                        'audio' => 'Alat musik bilah bernada riang XILOFON diawali huruf apa?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🆇', 'text' => 'Huruf X', 'is_correct' => true],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                            ['emoji' => '🆉', 'text' => 'Huruf Z', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mainan putar bertali yang seru YOYO diawali huruf apa?',
                        'audio' => 'Mainan putar bertali yang seru YOYO diawali huruf apa?',
                        'emoji' => '🪀',
                        'options' => [
                            ['emoji' => '🆈', 'text' => 'Huruf Y', 'is_correct' => true],
                            ['emoji' => '🆅', 'text' => 'Huruf V', 'is_correct' => false],
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan unik bergaris belang hitam putih ZEBRA diawali huruf apa?',
                        'audio' => 'Hewan unik bergaris belang hitam putih ZEBRA diawali huruf apa?',
                        'emoji' => '🦓',
                        'options' => [
                            ['emoji' => '🆉', 'text' => 'Huruf Z', 'is_correct' => true],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                            ['emoji' => '🆇', 'text' => 'Huruf X', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf paling terakhir dalam urutan alfabet A sampai Z adalah...?',
                        'audio' => 'Huruf paling terakhir dalam urutan alfabet A sampai Z adalah apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '🆉', 'text' => 'Huruf Z', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang berbentuk seperti cangkir melengkung ke atas?',
                        'audio' => 'Huruf apakah yang berbentuk seperti cangkir melengkung ke atas?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => true],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'abjad',
                'level_number' => 3,
                'title' => 'Tantangan Rangkaian Kata Abjad A-Z',
                'slug' => 'kuis-abjad-l3-kata-abjad',
                'icon_emoji' => '🔤',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata buah manis: "...PEL" (Apel)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata buah manis Apel?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf A (Apel)', 'is_correct' => true],
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => false],
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata hewan lucu: "...EBEK" (Bebek)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata hewan lucu Bebek?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🅱️', 'text' => 'Huruf B (Bebek)', 'is_correct' => true],
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => false],
                            ['emoji' => '🅿️', 'text' => 'Huruf P', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata hewan besar: "...AJAH" (Gajah)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata hewan besar Gajah?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🅶', 'text' => 'Huruf G (Gajah)', 'is_correct' => true],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                            ['emoji' => '🅹', 'text' => 'Huruf J', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata hewan laut: "...KAN" (Ikan)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata hewan laut Ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🅸', 'text' => 'Huruf I (Ikan)', 'is_correct' => true],
                            ['emoji' => '🅴', 'text' => 'Huruf E', 'is_correct' => false],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata hewan lincah: "...ONYET" (Monyet)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata hewan lincah Monyet?',
                        'emoji' => '🐒',
                        'options' => [
                            ['emoji' => '🅼', 'text' => 'Huruf M (Monyet)', 'is_correct' => true],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                            ['emoji' => '🆆', 'text' => 'Huruf W', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata buah segar: "...ANAS" (Nanas)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata buah segar Nanas?',
                        'emoji' => '🍍',
                        'options' => [
                            ['emoji' => '🅽', 'text' => 'Huruf N (Nanas)', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🅷', 'text' => 'Huruf H', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata hewan raja hutan: "...INGA" (Singa)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata hewan raja hutan Singa?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🆂', 'text' => 'Huruf S (Singa)', 'is_correct' => true],
                            ['emoji' => '🅲', 'text' => 'Huruf C', 'is_correct' => false],
                            ['emoji' => '🆉', 'text' => 'Huruf Z', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata sayur oranye: "...ORTEL" (Wortel)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata sayur oranye Wortel?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🆆', 'text' => 'Huruf W (Wortel)', 'is_correct' => true],
                            ['emoji' => '🆅', 'text' => 'Huruf V', 'is_correct' => false],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata mainan putar: "...OYO" (Yoyo)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata mainan putar Yoyo?',
                        'emoji' => '🪀',
                        'options' => [
                            ['emoji' => '🆈', 'text' => 'Huruf Y (Yoyo)', 'is_correct' => true],
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => false],
                            ['emoji' => '🆅', 'text' => 'Huruf V', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lengkapi huruf pertama untuk kata hewan belang: "...EBRA" (Zebra)?',
                        'audio' => 'Lengkapi huruf pertama untuk kata hewan belang Zebra?',
                        'emoji' => '🦓',
                        'options' => [
                            ['emoji' => '🆉', 'text' => 'Huruf Z (Zebra)', 'is_correct' => true],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                            ['emoji' => '🆇', 'text' => 'Huruf X', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'abjad',
                'level_number' => 3,
                'title' => 'Grand Champion Maestro Abjad Ceria A-Z',
                'slug' => 'kuis-abjad-l3-grand-master',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Huruf pertama dalam alfabet yang paling awal adalah...?',
                        'audio' => 'Huruf pertama dalam alfabet yang paling awal adalah apa?',
                        'emoji' => '🅰️',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                            ['emoji' => '🆉', 'text' => 'Huruf Z', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah total seluruh jumlah huruf abjad dari A sampai Z?',
                        'audio' => 'Berapakah total seluruh jumlah huruf abjad dari A sampai Z?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '26 Huruf Lengkap', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => '10 Huruf', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Huruf', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang berada tepat setelah huruf C?',
                        'audio' => 'Huruf apakah yang berada tepat setelah huruf C?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '🅳', 'text' => 'Huruf D (A-B-C-D)', 'is_correct' => true],
                            ['emoji' => '🅴', 'text' => 'Huruf E', 'is_correct' => false],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang berada tepat sebelum huruf Z?',
                        'audio' => 'Huruf apakah yang berada tepat sebelum huruf Z?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '🆈', 'text' => 'Huruf Y (X-Y-Z)', 'is_correct' => true],
                            ['emoji' => '🆇', 'text' => 'Huruf X', 'is_correct' => false],
                            ['emoji' => '🆆', 'text' => 'Huruf W', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah di bawah ini yang merupakan 5 huruf vokal utama?',
                        'audio' => 'Manakah di bawah ini yang merupakan 5 huruf vokal utama?',
                        'emoji' => '🅰️',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'A - I - U - E - O', 'is_correct' => true],
                            ['emoji' => '🅱️', 'text' => 'B - C - D - F - G', 'is_correct' => false],
                            ['emoji' => '🆇', 'text' => 'V - W - X - Y - Z', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang memiliki bentuk seperti garis lurus berdiri tegak?',
                        'audio' => 'Huruf apakah yang memiliki bentuk seperti garis lurus berdiri tegak?',
                        'emoji' => '📏',
                        'options' => [
                            ['emoji' => '🅸', 'text' => 'Huruf I', 'is_correct' => true],
                            ['emoji' => '🅾️', 'text' => 'Huruf O', 'is_correct' => false],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang memiliki bentuk meliuk seperti ular?',
                        'audio' => 'Huruf apakah yang memiliki bentuk meliuk seperti ular?',
                        'emoji' => '🐍',
                        'options' => [
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang memiliki bentuk dua garis menyilang membentuk tanda silang?',
                        'audio' => 'Huruf apakah yang memiliki bentuk dua garis menyilang membentuk tanda silang?',
                        'emoji' => '❌',
                        'options' => [
                            ['emoji' => '🆇', 'text' => 'Huruf X', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🅻', 'text' => 'Huruf L', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan abjad berikut: P, Q, R, ... ?',
                        'audio' => 'Lanjutan dari urutan abjad berikut: P, Q, R, lalu huruf apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '🆂', 'text' => 'Huruf S (P-Q-R-S)', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🆄', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar hebat apakah untuk anak cerdas yang berhasil menghafal seluruh abjad A sampai Z?',
                        'audio' => 'Gelar hebat apakah untuk anak cerdas yang berhasil menghafal seluruh abjad A sampai Z?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Juara Hebat Abjad Ceria', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 2: MENGENAL ANGKA CERDAS (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (ANGKA 1 - 6) ---
            [
                'category_slug' => 'angka',
                'level_number' => 1,
                'title' => 'Tebak Angka 1, 2, 3 Cilik',
                'slug' => 'kuis-angka-l1-123',
                'icon_emoji' => '1️⃣',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Ada berapa banyak matahari di langit pada siang hari?',
                        'audio' => 'Ada berapa banyak matahari di langit pada siang hari?',
                        'emoji' => '☀️',
                        'options' => [
                            ['emoji' => '1️⃣', 'text' => '1 (Satu)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 (Dua)', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 (Tiga)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa jumlah mata yang kita miliki untuk melihat?',
                        'audio' => 'Berapa jumlah mata yang kita miliki untuk melihat?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '1️⃣', 'text' => '1 Mata', 'is_correct' => false],
                            ['emoji' => '2️⃣', 'text' => '2 Mata (Dua)', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Mata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah simbol angka TIGA di antara pilihan berikut?',
                        'audio' => 'Manakah simbol angka TIGA di antara pilihan berikut?',
                        'emoji' => '3️⃣',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => 'Angka 3 (Tiga)', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => 'Angka 1', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => 'Angka 5', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'angka',
                'level_number' => 1,
                'title' => 'Tebak Angka 4, 5, 6 Ceria',
                'slug' => 'kuis-angka-l1-456',
                'icon_emoji' => '4️⃣',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapa jumlah roda pada sebuah mobil keluarga?',
                        'audio' => 'Berapa jumlah roda pada sebuah mobil keluarga?',
                        'emoji' => '🚗',
                        'options' => [
                            ['emoji' => '4️⃣', 'text' => '4 Roda (Empat)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Roda', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Roda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ada berapa jumlah jari pada satu telapak tangan kanan kita?',
                        'audio' => 'Ada berapa jumlah jari pada satu telapak tangan kanan kita?',
                        'emoji' => '🖐️',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Jari (Lima)', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Jari', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Jari', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah kaki kecil pada seekor semut?',
                        'audio' => 'Berapakah jumlah kaki kecil pada seekor semut?',
                        'emoji' => '🐜',
                        'options' => [
                            ['emoji' => '6️⃣', 'text' => '6 Kaki (Enam)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Kaki', 'is_correct' => false],
                            ['emoji' => '8️⃣', 'text' => '8 Kaki', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'angka',
                'level_number' => 1,
                'title' => 'Petualangan Hitung Benda 1 sampai 6',
                'slug' => 'kuis-angka-l1-hitung-1-6',
                'icon_emoji' => '🎲',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hitung jumlah balon ceria berikut: 🎈🎈🎈. Ada berapa balon?',
                        'audio' => 'Hitung jumlah balon ceria berikut: ada berapa balon?',
                        'emoji' => '🎈',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Balon', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Balon', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Balon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hitung jumlah buah apel segar berikut: 🍎🍎. Ada berapa apel?',
                        'audio' => 'Hitung jumlah buah apel segar berikut: ada berapa apel?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Apel', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => '1 Apel', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Apel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hitung jumlah bintang emas berikut: ⭐⭐⭐⭐⭐. Ada berapa bintang?',
                        'audio' => 'Hitung jumlah bintang emas berikut: ada berapa bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Bintang', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Bintang', 'is_correct' => false],
                            ['emoji' => '6️⃣', 'text' => '6 Bintang', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (ANGKA 7 - 13) ---
            [
                'category_slug' => 'angka',
                'level_number' => 2,
                'title' => 'Tantangan Angka 7, 8, 9, 10',
                'slug' => 'kuis-angka-l2-7-10',
                'icon_emoji' => '🔟',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Ada berapa hari dalam satu minggu dari hari Senin sampai Minggu?',
                        'audio' => 'Ada berapa hari dalam satu minggu dari hari Senin sampai Minggu?',
                        'emoji' => '📅',
                        'options' => [
                            ['emoji' => '7️⃣', 'text' => '7 Hari (Tujuh)', 'is_correct' => true],
                            ['emoji' => '5️⃣', 'text' => '5 Hari', 'is_correct' => false],
                            ['emoji' => '1️⃣', 'text' => '10 Hari', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah tentakel kaki pada hewan gurita laut?',
                        'audio' => 'Berapakah jumlah tentakel kaki pada hewan gurita laut?',
                        'emoji' => '🐙',
                        'options' => [
                            ['emoji' => '8️⃣', 'text' => '8 Kaki (Delapan)', 'is_correct' => true],
                            ['emoji' => '6️⃣', 'text' => '6 Kaki', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Kaki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka satuan tertinggi tepat sebelum angka sepuluh adalah...?',
                        'audio' => 'Angka satuan tertinggi tepat sebelum angka sepuluh adalah apa?',
                        'emoji' => '9️⃣',
                        'options' => [
                            ['emoji' => '9️⃣', 'text' => 'Angka 9 (Sembilan)', 'is_correct' => true],
                            ['emoji' => '7️⃣', 'text' => 'Angka 7', 'is_correct' => false],
                            ['emoji' => '8️⃣', 'text' => 'Angka 8', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah gabungan seluruh jari kedua tangan kita?',
                        'audio' => 'Berapakah jumlah gabungan seluruh jari kedua tangan kita?',
                        'emoji' => '👐',
                        'options' => [
                            ['emoji' => '🔟', 'text' => '10 Jari (Sepuluh)', 'is_correct' => true],
                            ['emoji' => '5️⃣', 'text' => '5 Jari', 'is_correct' => false],
                            ['emoji' => '8️⃣', 'text' => '8 Jari', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Urutan angka setelah angka 7 adalah angka...?',
                        'audio' => 'Urutan angka setelah angka 7 adalah angka apa?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '8️⃣', 'text' => 'Angka 8 (Delapan)', 'is_correct' => true],
                            ['emoji' => '6️⃣', 'text' => 'Angka 6', 'is_correct' => false],
                            ['emoji' => '9️⃣', 'text' => 'Angka 9', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'angka',
                'level_number' => 2,
                'title' => 'Mengenal Angka Belasan 11, 12, 13',
                'slug' => 'kuis-angka-l2-belasan-awal',
                'icon_emoji' => '🗓️',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Angka 10 ditambah 1 menghasilkan angka berapa?',
                        'audio' => 'Angka 10 ditambah 1 menghasilkan angka berapa?',
                        'emoji' => '1️⃣1️⃣',
                        'options' => [
                            ['emoji' => '1️⃣1️⃣', 'text' => '11 (Sebelas)', 'is_correct' => true],
                            ['emoji' => '1️⃣2️⃣', 'text' => '12 (Dua Belas)', 'is_correct' => false],
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 (Dua Puluh)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah bulan dalam satu tahun kalender?',
                        'audio' => 'Berapakah jumlah bulan dalam satu tahun kalender?',
                        'emoji' => '🗓️',
                        'options' => [
                            ['emoji' => '1️⃣2️⃣', 'text' => '12 Bulan (Dua Belas)', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => '10 Bulan', 'is_correct' => false],
                            ['emoji' => '7️⃣', 'text' => '7 Bulan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka belasan yang terdiri dari angka 1 dan angka 3 adalah...?',
                        'audio' => 'Angka belasan yang terdiri dari angka 1 dan angka 3 adalah apa?',
                        'emoji' => '1️⃣3️⃣',
                        'options' => [
                            ['emoji' => '1️⃣3️⃣', 'text' => '13 (Tiga Belas)', 'is_correct' => true],
                            ['emoji' => '3️⃣1️⃣', 'text' => '31 (Tiga Puluh Satu)', 'is_correct' => false],
                            ['emoji' => '1️⃣1️⃣', 'text' => '11 (Sebelas)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hitung jumlah bebek berikut: 🦆 (10 ekor) + 🦆 (2 ekor) = ... ?',
                        'audio' => 'Hitung jumlah bebek berikut: sepuluh ditambah dua sama dengan berapa?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '1️⃣2️⃣', 'text' => '12 Ekor Bebek', 'is_correct' => true],
                            ['emoji' => '1️⃣1️⃣', 'text' => '11 Ekor', 'is_correct' => false],
                            ['emoji' => '1️⃣5️⃣', 'text' => '15 Ekor', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka berapakah yang berada tepat di antara angka 11 dan 13?',
                        'audio' => 'Angka berapakah yang berada tepat di antara angka 11 dan 13?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '1️⃣2️⃣', 'text' => 'Angka 12 (11 - 12 - 13)', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => 'Angka 10', 'is_correct' => false],
                            ['emoji' => '1️⃣4️⃣', 'text' => 'Angka 14', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'angka',
                'level_number' => 2,
                'title' => 'Eksplorasi Hitung Maju 7 sampai 13',
                'slug' => 'kuis-angka-l2-hitung-maju',
                'icon_emoji' => '🚀',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Lanjutan dari urutan angka berikut: 7, 8, 9, ... ?',
                        'audio' => 'Lanjutan dari urutan angka berikut: 7, 8, 9, lalu angka berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '🔟', 'text' => 'Angka 10', 'is_correct' => true],
                            ['emoji' => '1️⃣1️⃣', 'text' => 'Angka 11', 'is_correct' => false],
                            ['emoji' => '6️⃣', 'text' => 'Angka 6', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan angka berikut: 10, 11, 12, ... ?',
                        'audio' => 'Lanjutan dari urutan angka berikut: 10, 11, 12, lalu angka berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '1️⃣3️⃣', 'text' => 'Angka 13', 'is_correct' => true],
                            ['emoji' => '1️⃣4️⃣', 'text' => 'Angka 14', 'is_correct' => false],
                            ['emoji' => '9️⃣', 'text' => 'Angka 9', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah angka yang nilainya paling besar antara 8, 10, dan 13?',
                        'audio' => 'Manakah angka yang nilainya paling besar antara 8, 10, dan 13?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '1️⃣3️⃣', 'text' => 'Angka 13 (Paling Besar)', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => 'Angka 10', 'is_correct' => false],
                            ['emoji' => '8️⃣', 'text' => 'Angka 8', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ada 6 donat 🍩 lalu ibu memberi 2 donat lagi 🍩🍩. Berapa totalnya?',
                        'audio' => 'Ada 6 donat lalu ibu memberi 2 donat lagi. Berapa totalnya?',
                        'emoji' => '🍩',
                        'options' => [
                            ['emoji' => '8️⃣', 'text' => '8 Donat', 'is_correct' => true],
                            ['emoji' => '7️⃣', 'text' => '7 Donat', 'is_correct' => false],
                            ['emoji' => '9️⃣', 'text' => '9 Donat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sebutan populer untuk jumlah 12 buah benda adalah...?',
                        'audio' => 'Sebutan populer untuk jumlah 12 buah benda adalah apa?',
                        'emoji' => '📦',
                        'options' => [
                            ['emoji' => '1️⃣2️⃣', 'text' => '1 Lusin (12 Buah)', 'is_correct' => true],
                            ['emoji' => '1️⃣0️⃣0️⃣', 'text' => '1 Ratus', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => 'Setengah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (ANGKA 14 - 20 & 1-20 LENGKAP) ---
            [
                'category_slug' => 'angka',
                'level_number' => 3,
                'title' => 'Master Angka Belasan 14 sampai 20',
                'slug' => 'kuis-angka-l3-14-20',
                'icon_emoji' => '🔢',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Angka belasan yang terdiri dari angka 1 dan angka 4 adalah...?',
                        'audio' => 'Angka belasan yang terdiri dari angka 1 dan angka 4 adalah apa?',
                        'emoji' => '🍒',
                        'options' => [
                            ['emoji' => '1️⃣4️⃣', 'text' => '14 (Empat Belas)', 'is_correct' => true],
                            ['emoji' => '4️⃣1️⃣', 'text' => '41', 'is_correct' => false],
                            ['emoji' => '1️⃣5️⃣', 'text' => '15', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka pertengahan antara 10 dan 20 adalah...?',
                        'audio' => 'Angka pertengahan antara 10 dan 20 adalah apa?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '1️⃣5️⃣', 'text' => '15 (Lima Belas)', 'is_correct' => true],
                            ['emoji' => '1️⃣2️⃣', 'text' => '12', 'is_correct' => false],
                            ['emoji' => '1️⃣8️⃣', 'text' => '18', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka belasan yang terdiri dari angka 1 dan angka 6 adalah...?',
                        'audio' => 'Angka belasan yang terdiri dari angka 1 dan angka 6 adalah apa?',
                        'emoji' => '🍓',
                        'options' => [
                            ['emoji' => '1️⃣6️⃣', 'text' => '16 (Enam Belas)', 'is_correct' => true],
                            ['emoji' => '6️⃣1️⃣', 'text' => '61', 'is_correct' => false],
                            ['emoji' => '1️⃣9️⃣', 'text' => '19', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka istimewa tanggal kemerdekaan Indonesia di bulan Agustus adalah...?',
                        'audio' => 'Angka istimewa tanggal kemerdekaan Indonesia di bulan Agustus adalah berapa?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '1️⃣7️⃣', 'text' => '17 (Tujuh Belas)', 'is_correct' => true],
                            ['emoji' => '1️⃣5️⃣', 'text' => '15', 'is_correct' => false],
                            ['emoji' => '2️⃣0️⃣', 'text' => '20', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka belasan yang terdiri dari angka 1 dan angka 8 adalah...?',
                        'audio' => 'Angka belasan yang terdiri dari angka 1 dan angka 8 adalah apa?',
                        'emoji' => '🦋',
                        'options' => [
                            ['emoji' => '1️⃣8️⃣', 'text' => '18 (Delapan Belas)', 'is_correct' => true],
                            ['emoji' => '8️⃣1️⃣', 'text' => '81', 'is_correct' => false],
                            ['emoji' => '1️⃣3️⃣', 'text' => '13', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka belasan tertinggi sebelum angka dua puluh adalah...?',
                        'audio' => 'Angka belasan tertinggi sebelum angka dua puluh adalah apa?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '1️⃣9️⃣', 'text' => '19 (Sembilan Belas)', 'is_correct' => true],
                            ['emoji' => '1️⃣8️⃣', 'text' => '18', 'is_correct' => false],
                            ['emoji' => '1️⃣7️⃣', 'text' => '17', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah gabungan 10 jari tangan dan 10 jari kaki kita?',
                        'audio' => 'Berapakah jumlah gabungan 10 jari tangan dan 10 jari kaki kita?',
                        'emoji' => '🦶',
                        'options' => [
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 (Dua Puluh)', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => '10', 'is_correct' => false],
                            ['emoji' => '1️⃣5️⃣', 'text' => '15', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Urutan angka yang berada tepat setelah angka 15 adalah...?',
                        'audio' => 'Urutan angka yang berada tepat setelah angka 15 adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '1️⃣6️⃣', 'text' => 'Angka 16', 'is_correct' => true],
                            ['emoji' => '1️⃣4️⃣', 'text' => 'Angka 14', 'is_correct' => false],
                            ['emoji' => '1️⃣7️⃣', 'text' => 'Angka 17', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Urutan angka yang berada tepat sebelum angka 20 adalah...?',
                        'audio' => 'Urutan angka yang berada tepat sebelum angka 20 adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '1️⃣9️⃣', 'text' => 'Angka 19', 'is_correct' => true],
                            ['emoji' => '1️⃣8️⃣', 'text' => 'Angka 18', 'is_correct' => false],
                            ['emoji' => '2️⃣1️⃣', 'text' => 'Angka 21', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah yang merupakan urutan bilangan belasan yang benar?',
                        'audio' => 'Manakah yang merupakan urutan bilangan belasan yang benar?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '🔢', 'text' => '14, 15, 16, 17', 'is_correct' => true],
                            ['emoji' => '🔢', 'text' => '14, 16, 15, 17', 'is_correct' => false],
                            ['emoji' => '🔢', 'text' => '17, 16, 18, 19', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'angka',
                'level_number' => 3,
                'title' => 'Tantangan Berhitung Ceria & Pola Angka',
                'slug' => 'kuis-angka-l3-pola-hitung',
                'icon_emoji' => '🧮',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola lompat 2 angka berikut: 2, 4, 6, ... ?',
                        'audio' => 'Lanjutkan pola lompat 2 angka berikut: 2, 4, 6, lalu angka berapa?',
                        'emoji' => '🧮',
                        'options' => [
                            ['emoji' => '8️⃣', 'text' => 'Angka 8', 'is_correct' => true],
                            ['emoji' => '7️⃣', 'text' => 'Angka 7', 'is_correct' => false],
                            ['emoji' => '9️⃣', 'text' => 'Angka 9', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola lompat 5 angka berikut: 5, 10, 15, ... ?',
                        'audio' => 'Lanjutkan pola lompat 5 angka berikut: 5, 10, 15, lalu angka berapa?',
                        'emoji' => '🧮',
                        'options' => [
                            ['emoji' => '2️⃣0️⃣', 'text' => 'Angka 20', 'is_correct' => true],
                            ['emoji' => '1️⃣6️⃣', 'text' => 'Angka 16', 'is_correct' => false],
                            ['emoji' => '1️⃣8️⃣', 'text' => 'Angka 18', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hitung: 10 jari tangan + 5 jari kaki = berapa jari?',
                        'audio' => 'Hitung: 10 jari tangan ditambah 5 jari kaki sama dengan berapa jari?',
                        'emoji' => '🖐️',
                        'options' => [
                            ['emoji' => '1️⃣5️⃣', 'text' => '15 Jari', 'is_correct' => true],
                            ['emoji' => '1️⃣2️⃣', 'text' => '12 Jari', 'is_correct' => false],
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 Jari', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hitung: 10 buah apel 🍎 + 10 buah apel 🍎 = berapa apel?',
                        'audio' => 'Hitung: 10 buah apel ditambah 10 buah apel sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 Apel', 'is_correct' => true],
                            ['emoji' => '1️⃣5️⃣', 'text' => '15 Apel', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Apel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah tanda perbandingan yang benar: 18 ... 12 ?',
                        'audio' => 'Manakah yang benar: 18 lebih besar atau lebih kecil dari 12?',
                        'emoji' => '⚖️',
                        'options' => [
                            ['emoji' => '👍', 'text' => '18 Lebih Besar dari 12', 'is_correct' => true],
                            ['emoji' => '👎', 'text' => '18 Lebih Kecil dari 12', 'is_correct' => false],
                            ['emoji' => '🟰', 'text' => 'Sama Banyak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah tanda perbandingan yang benar: 14 ... 20 ?',
                        'audio' => 'Manakah yang benar: 14 lebih kecil atau lebih besar dari 20?',
                        'emoji' => '⚖️',
                        'options' => [
                            ['emoji' => '👍', 'text' => '14 Lebih Kecil dari 20', 'is_correct' => true],
                            ['emoji' => '👎', 'text' => '14 Lebih Besar dari 20', 'is_correct' => false],
                            ['emoji' => '🟰', 'text' => 'Sama Banyak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ada 20 bintang ✨, 1 bintang tertutup awan ☁️. Sisa berapa bintang?',
                        'audio' => 'Ada 20 bintang, 1 bintang tertutup awan. Sisa berapa bintang?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '1️⃣9️⃣', 'text' => '19 Bintang', 'is_correct' => true],
                            ['emoji' => '1️⃣8️⃣', 'text' => '18 Bintang', 'is_correct' => false],
                            ['emoji' => '1️⃣5️⃣', 'text' => '15 Bintang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ada 13 balon 🎈, ditiup 2 balon lagi 🎈🎈. Berapa total balon sekarang?',
                        'audio' => 'Ada 13 balon, ditiup 2 balon lagi. Berapa total balon sekarang?',
                        'emoji' => '🎈',
                        'options' => [
                            ['emoji' => '1️⃣5️⃣', 'text' => '15 Balon', 'is_correct' => true],
                            ['emoji' => '1️⃣4️⃣', 'text' => '14 Balon', 'is_correct' => false],
                            ['emoji' => '1️⃣6️⃣', 'text' => '16 Balon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka genap manakah yang terletak di antara 15 dan 17?',
                        'audio' => 'Angka genap manakah yang terletak di antara 15 dan 17?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '1️⃣6️⃣', 'text' => '16 (Enam Belas)', 'is_correct' => true],
                            ['emoji' => '1️⃣4️⃣', 'text' => '14', 'is_correct' => false],
                            ['emoji' => '1️⃣8️⃣', 'text' => '18', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah hasil dari 9 ditambah 9 ?',
                        'audio' => 'Berapakah hasil dari 9 ditambah 9?',
                        'emoji' => '🧮',
                        'options' => [
                            ['emoji' => '1️⃣8️⃣', 'text' => '18 (Delapan Belas)', 'is_correct' => true],
                            ['emoji' => '1️⃣7️⃣', 'text' => '17', 'is_correct' => false],
                            ['emoji' => '1️⃣9️⃣', 'text' => '19', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'angka',
                'level_number' => 3,
                'title' => 'Grand Champion Maestro Angka Cerdas 1-20',
                'slug' => 'kuis-angka-l3-grand-master',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Angka terkecil dalam materi berhitung 1 sampai 20 adalah...?',
                        'audio' => 'Angka terkecil dalam materi berhitung 1 sampai 20 adalah apa?',
                        'emoji' => '1️⃣',
                        'options' => [
                            ['emoji' => '1️⃣', 'text' => 'Angka 1 (Satu)', 'is_correct' => true],
                            ['emoji' => '5️⃣', 'text' => 'Angka 5', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => 'Angka 10', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka terbesar dalam materi berhitung 1 sampai 20 adalah...?',
                        'audio' => 'Angka terbesar dalam materi berhitung 1 sampai 20 adalah apa?',
                        'emoji' => '2️⃣0️⃣',
                        'options' => [
                            ['emoji' => '2️⃣0️⃣', 'text' => 'Angka 20 (Dua Puluh)', 'is_correct' => true],
                            ['emoji' => '1️⃣9️⃣', 'text' => 'Angka 19', 'is_correct' => false],
                            ['emoji' => '1️⃣5️⃣', 'text' => 'Angka 15', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah total seluruh angka yang kita pelajari dari 1 sampai 20?',
                        'audio' => 'Berapakah total seluruh angka yang kita pelajari dari 1 sampai 20?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 Angka Lengkap', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => '10 Angka', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Angka', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Urutan bilangan mundur dari 5 sampai 1 yang benar adalah...?',
                        'audio' => 'Urutan bilangan mundur dari 5 sampai 1 yang benar adalah apa?',
                        'emoji' => '⏳',
                        'options' => [
                            ['emoji' => '🔢', 'text' => '5, 4, 3, 2, 1 (Selesai!)', 'is_correct' => true],
                            ['emoji' => '🔢', 'text' => '1, 2, 3, 4, 5', 'is_correct' => false],
                            ['emoji' => '🔢', 'text' => '5, 3, 4, 2, 1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka belasan manakah yang melambangkan 10 + 7 ?',
                        'audio' => 'Angka belasan manakah yang melambangkan 10 ditambah 7?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '1️⃣7️⃣', 'text' => '17 (Tujuh Belas)', 'is_correct' => true],
                            ['emoji' => '1️⃣6️⃣', 'text' => '16', 'is_correct' => false],
                            ['emoji' => '1️⃣8️⃣', 'text' => '18', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa banyak kaki pada 2 ekor kucing lucu 🐱🐱? (4 kaki + 4 kaki)',
                        'audio' => 'Berapa banyak kaki pada 2 ekor kucing lucu?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '8️⃣', 'text' => '8 Kaki Kucing', 'is_correct' => true],
                            ['emoji' => '6️⃣', 'text' => '6 Kaki', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Kaki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa banyak roda pada 3 buah sepeda roda dua 🚲🚲🚲? (2 + 2 + 2)',
                        'audio' => 'Berapa banyak roda pada 3 buah sepeda roda dua?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '6️⃣', 'text' => '6 Roda Sepeda', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Roda', 'is_correct' => false],
                            ['emoji' => '8️⃣', 'text' => '8 Roda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Angka berapakah yang terdiri dari angka 2 diikuti angka 0?',
                        'audio' => 'Angka berapakah yang terdiri dari angka 2 diikuti angka 0?',
                        'emoji' => '2️⃣0️⃣',
                        'options' => [
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 (Dua Puluh)', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => '10 (Sepuluh)', 'is_correct' => false],
                            ['emoji' => '2️⃣', 'text' => '2 (Dua)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan angka berikut: 16, 17, 18, ... ?',
                        'audio' => 'Lanjutan dari urutan angka berikut: 16, 17, 18, lalu angka berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            ['emoji' => '1️⃣9️⃣', 'text' => 'Angka 19', 'is_correct' => true],
                            ['emoji' => '2️⃣0️⃣', 'text' => 'Angka 20', 'is_correct' => false],
                            ['emoji' => '1️⃣5️⃣', 'text' => 'Angka 15', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar hebat apakah untuk anak pintar yang menguasai angka 1 sampai 20?',
                        'audio' => 'Gelar hebat apakah untuk anak pintar yang menguasai angka 1 sampai 20?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Juara Cilik Angka Cerdas', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Tidur', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 3: HURUF HIJAIYAH CILIK (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (HURUF ALIF - RO) ---
            [
                'category_slug' => 'hijaiyah',
                'level_number' => 1,
                'title' => 'Tebak Huruf Alif, Ba, Ta Cilik',
                'slug' => 'kuis-hijaiyah-l1-alif-ba-ta',
                'icon_emoji' => 'ا',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf hijaiyah pertama yang berdiri tegak lurus adalah...?',
                        'audio' => 'Huruf hijaiyah pertama yang berdiri tegak lurus adalah apa?',
                        'emoji' => 'ا',
                        'options' => [
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah berbentuk perahu dengan SATU titik di BAWAH adalah...?',
                        'audio' => 'Huruf hijaiyah berbentuk perahu dengan satu titik di bawah adalah apa?',
                        'emoji' => 'ب',
                        'options' => [
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => true],
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => false],
                            ['emoji' => 'ث', 'text' => 'Huruf Tsa (ث)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah tersenyum dengan DUA titik ceria di ATAS adalah...?',
                        'audio' => 'Huruf hijaiyah tersenyum dengan dua titik ceria di atas adalah apa?',
                        'emoji' => 'ت',
                        'options' => [
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'level_number' => 1,
                'title' => 'Tebak Huruf Tsa, Jim, Ha Ceria',
                'slug' => 'kuis-hijaiyah-l1-tsa-jim-ha',
                'icon_emoji' => 'ج',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf hijaiyah bermahkota TIGA titik bintang di atasnya adalah...?',
                        'audio' => 'Huruf hijaiyah bermahkota tiga titik bintang di atasnya adalah apa?',
                        'emoji' => 'ث',
                        'options' => [
                            ['emoji' => 'ث', 'text' => 'Huruf Tsa (ث)', 'is_correct' => true],
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => false],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah berperut buncit dengan SATU titik di TENGAH perutnya adalah...?',
                        'audio' => 'Huruf hijaiyah berperut buncit dengan satu titik di tengah perutnya adalah apa?',
                        'emoji' => 'ج',
                        'options' => [
                            ['emoji' => 'ج', 'text' => 'Huruf Jim (ج)', 'is_correct' => true],
                            ['emoji' => 'ح', 'text' => 'Huruf Ha (ح)', 'is_correct' => false],
                            ['emoji' => 'خ', 'text' => 'Huruf Kho (خ)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah yang bentuknya mirip Jim namun BERSIH tanpa titik adalah...?',
                        'audio' => 'Huruf hijaiyah yang bentuknya mirip Jim namun bersih tanpa titik adalah apa?',
                        'emoji' => 'ح',
                        'options' => [
                            ['emoji' => 'ح', 'text' => 'Huruf Ha (ح)', 'is_correct' => true],
                            ['emoji' => 'ج', 'text' => 'Huruf Jim (ج)', 'is_correct' => false],
                            ['emoji' => 'خ', 'text' => 'Huruf Kho (خ)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'level_number' => 1,
                'title' => 'Petualangan Huruf Kho, Dal, Dzal, Ro',
                'slug' => 'kuis-hijaiyah-l1-kho-dal-ro',
                'icon_emoji' => 'ر',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf melengkung dengan SATU titik mahkota di ATAS KEPALA adalah...?',
                        'audio' => 'Huruf melengkung dengan satu titik mahkota di atas kepala adalah apa?',
                        'emoji' => 'خ',
                        'options' => [
                            ['emoji' => 'خ', 'text' => 'Huruf Kho (خ)', 'is_correct' => true],
                            ['emoji' => 'ح', 'text' => 'Huruf Ha (ح)', 'is_correct' => false],
                            ['emoji' => 'ج', 'text' => 'Huruf Jim (ج)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf melengkung membuka ke kiri tanpa titik adalah...?',
                        'audio' => 'Huruf melengkung membuka ke kiri tanpa titik adalah apa?',
                        'emoji' => 'د',
                        'options' => [
                            ['emoji' => 'د', 'text' => 'Huruf Dal (د)', 'is_correct' => true],
                            ['emoji' => 'ذ', 'text' => 'Huruf Dzal (ذ)', 'is_correct' => false],
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf yang meluncur ke bawah seperti papan seluncuran adalah...?',
                        'audio' => 'Huruf yang meluncur ke bawah seperti papan seluncuran adalah apa?',
                        'emoji' => 'ر',
                        'options' => [
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => true],
                            ['emoji' => 'د', 'text' => 'Huruf Dal (د)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (HURUF ZAI - FA) ---
            [
                'category_slug' => 'hijaiyah',
                'level_number' => 2,
                'title' => 'Tantangan Huruf Zai, Sin, Syin',
                'slug' => 'kuis-hijaiyah-l2-zai-sin-syin',
                'icon_emoji' => 'س',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Huruf meluncur mirip Ro yang memiliki SATU titik di atasnya adalah...?',
                        'audio' => 'Huruf meluncur mirip Ro yang memiliki satu titik di atasnya adalah apa?',
                        'emoji' => 'ز',
                        'options' => [
                            ['emoji' => 'ز', 'text' => 'Huruf Zai (ز)', 'is_correct' => true],
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => false],
                            ['emoji' => 'ذ', 'text' => 'Huruf Dzal (ذ)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf bertiga gigi rapi tanpa titik adalah...?',
                        'audio' => 'Huruf bertiga gigi rapi tanpa titik adalah apa?',
                        'emoji' => 'س',
                        'options' => [
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س)', 'is_correct' => true],
                            ['emoji' => 'ش', 'text' => 'Huruf Syin (ش)', 'is_correct' => false],
                            ['emoji' => 'ص', 'text' => 'Huruf Shod (ص)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf bergigi tiga dengan TIGA titik bintang di atasnya adalah...?',
                        'audio' => 'Huruf bergigi tiga dengan tiga titik bintang di atasnya adalah apa?',
                        'emoji' => 'ش',
                        'options' => [
                            ['emoji' => 'ش', 'text' => 'Huruf Syin (ش)', 'is_correct' => true],
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س)', 'is_correct' => false],
                            ['emoji' => 'ث', 'text' => 'Huruf Tsa (ث)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah untuk kata ikan (Samakun 🐟) adalah...?',
                        'audio' => 'Huruf hijaiyah untuk kata ikan adalah apa?',
                        'emoji' => 'س',
                        'options' => [
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س)', 'is_correct' => true],
                            ['emoji' => 'ز', 'text' => 'Huruf Zai (ز)', 'is_correct' => false],
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah untuk kata matahari cerah (Syamsun ☀️) adalah...?',
                        'audio' => 'Huruf hijaiyah untuk kata matahari cerah adalah apa?',
                        'emoji' => 'ش',
                        'options' => [
                            ['emoji' => 'ش', 'text' => 'Huruf Syin (ش)', 'is_correct' => true],
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'level_number' => 2,
                'title' => 'Mengenal Huruf Shod, Dhod, Tho, Zho',
                'slug' => 'kuis-hijaiyah-l2-shod-dhod-tho-zho',
                'icon_emoji' => 'ص',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Huruf tebal dengan kepala bundar dan mangkok tanpa titik adalah...?',
                        'audio' => 'Huruf tebal dengan kepala bundar dan mangkok tanpa titik adalah apa?',
                        'emoji' => 'ص',
                        'options' => [
                            ['emoji' => 'ص', 'text' => 'Huruf Shod (ص)', 'is_correct' => true],
                            ['emoji' => 'ض', 'text' => 'Huruf Dhod (ض)', 'is_correct' => false],
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf mirip Shod yang memiliki SATU titik mahkota di atasnya adalah...?',
                        'audio' => 'Huruf mirip Shod yang memiliki satu titik mahkota di atasnya adalah apa?',
                        'emoji' => 'ض',
                        'options' => [
                            ['emoji' => 'ض', 'text' => 'Huruf Dhod (ض)', 'is_correct' => true],
                            ['emoji' => 'ص', 'text' => 'Huruf Shod (ص)', 'is_correct' => false],
                            ['emoji' => 'ش', 'text' => 'Huruf Syin (ش)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf bertiang tegak lurus di atas lengkungan tanpa titik adalah...?',
                        'audio' => 'Huruf bertiang tegak lurus di atas lengkungan tanpa titik adalah apa?',
                        'emoji' => 'ط',
                        'options' => [
                            ['emoji' => 'ط', 'text' => 'Huruf Tho (ط)', 'is_correct' => true],
                            ['emoji' => 'ظ', 'text' => 'Huruf Zho (ظ)', 'is_correct' => false],
                            ['emoji' => 'ص', 'text' => 'Huruf Shod (ص)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf bertiang tegak yang memiliki SATU titik di atasnya adalah...?',
                        'audio' => 'Huruf bertiang tegak yang memiliki satu titik di atasnya adalah apa?',
                        'emoji' => 'ظ',
                        'options' => [
                            ['emoji' => 'ظ', 'text' => 'Huruf Zho (ظ)', 'is_correct' => true],
                            ['emoji' => 'ط', 'text' => 'Huruf Tho (ط)', 'is_correct' => false],
                            ['emoji' => 'ض', 'text' => 'Huruf Dhod (ض)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah pasangan huruf yang sama-sama memiliki tiang tegak lurus?',
                        'audio' => 'Manakah pasangan huruf yang sama-sama memiliki tiang tegak lurus?',
                        'emoji' => 'ط',
                        'options' => [
                            ['emoji' => 'ط', 'text' => 'Huruf Tho (ط) & Zho (ظ)', 'is_correct' => true],
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س) & Syin (ش)', 'is_correct' => false],
                            ['emoji' => 'د', 'text' => 'Huruf Dal (د) & Dzal (ذ)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'level_number' => 2,
                'title' => "Eksplorasi Huruf 'Ain, Ghoin, Fa",
                'slug' => 'kuis-hijaiyah-l2-ain-ghoin-fa',
                'icon_emoji' => 'ع',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Huruf berkepala kecil dan berperut besar melengkung tanpa titik adalah...?',
                        'audio' => 'Huruf berkepala kecil dan berperut besar melengkung tanpa titik adalah apa?',
                        'emoji' => 'ع',
                        'options' => [
                            ['emoji' => 'ع', 'text' => "Huruf 'Ain (ع)", 'is_correct' => true],
                            ['emoji' => 'غ', 'text' => 'Huruf Ghoin (غ)', 'is_correct' => false],
                            ['emoji' => 'ح', 'text' => 'Huruf Ha (ح)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => "Huruf mirip 'Ain yang memiliki SATU titik di atas kepalanya adalah...?",
                        'audio' => "Huruf mirip 'Ain yang memiliki satu titik di atas kepalanya adalah apa?",
                        'emoji' => 'غ',
                        'options' => [
                            ['emoji' => 'غ', 'text' => 'Huruf Ghoin (غ)', 'is_correct' => true],
                            ['emoji' => 'ع', 'text' => "Huruf 'Ain (ع)", 'is_correct' => false],
                            ['emoji' => 'خ', 'text' => 'Huruf Kho (خ)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf berkepala bundar dengan mangkok datar dan SATU titik di atas adalah...?',
                        'audio' => 'Huruf berkepala bundar dengan mangkok datar dan satu titik di atas adalah apa?',
                        'emoji' => 'ف',
                        'options' => [
                            ['emoji' => 'ف', 'text' => 'Huruf Fa (ف)', 'is_correct' => true],
                            ['emoji' => 'ق', 'text' => 'Huruf Qof (ق)', 'is_correct' => false],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah untuk kata gajah besar (Fiilun 🐘) adalah...?',
                        'audio' => 'Huruf hijaiyah untuk kata gajah besar adalah apa?',
                        'emoji' => 'ف',
                        'options' => [
                            ['emoji' => 'ف', 'text' => 'Huruf Fa (ف)', 'is_correct' => true],
                            ['emoji' => 'ع', 'text' => "Huruf 'Ain (ع)", 'is_correct' => false],
                            ['emoji' => 'غ', 'text' => 'Huruf Ghoin (غ)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => "Huruf hijaiyah untuk kata buah anggur manis ('Inabun 🍇) adalah...?",
                        'audio' => 'Huruf hijaiyah untuk kata buah anggur manis adalah apa?',
                        'emoji' => 'ع',
                        'options' => [
                            ['emoji' => 'ع', 'text' => "Huruf 'Ain (ع)", 'is_correct' => true],
                            ['emoji' => 'غ', 'text' => 'Huruf Ghoin (غ)', 'is_correct' => false],
                            ['emoji' => 'ف', 'text' => 'Huruf Fa (ف)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (HURUF QOF - YA & ALIF-YA LENGKAP) ---
            [
                'category_slug' => 'hijaiyah',
                'level_number' => 3,
                'title' => 'Master Huruf Qof sampai Ya',
                'slug' => 'kuis-hijaiyah-l3-qof-sampai-ya',
                'icon_emoji' => 'ق',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Huruf berkepala bulat dengan mangkok dalam dan DUA titik di atas adalah...?',
                        'audio' => 'Huruf berkepala bulat dengan mangkok dalam dan dua titik di atas adalah apa?',
                        'emoji' => 'ق',
                        'options' => [
                            ['emoji' => 'ق', 'text' => 'Huruf Qof (ق)', 'is_correct' => true],
                            ['emoji' => 'ف', 'text' => 'Huruf Fa (ف)', 'is_correct' => false],
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf berwadah lebar dengan tanda hamzah kecil di dalamnya adalah...?',
                        'audio' => 'Huruf berwadah lebar dengan tanda hamzah kecil di dalamnya adalah apa?',
                        'emoji' => 'ك',
                        'options' => [
                            ['emoji' => 'ك', 'text' => 'Huruf Kaf (ك)', 'is_correct' => true],
                            ['emoji' => 'ل', 'text' => 'Huruf Lam (ل)', 'is_correct' => false],
                            ['emoji' => 'ق', 'text' => 'Huruf Qof (ق)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf berbentuk tongkat melengkung indah ke bawah adalah...?',
                        'audio' => 'Huruf berbentuk tongkat melengkung indah ke bawah adalah apa?',
                        'emoji' => 'ل',
                        'options' => [
                            ['emoji' => 'ل', 'text' => 'Huruf Lam (ل)', 'is_correct' => true],
                            ['emoji' => 'ك', 'text' => 'Huruf Kaf (ك)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf berkepala bulat kecil dengan ekor turun ke bawah adalah...?',
                        'audio' => 'Huruf berkepala bulat kecil dengan ekor turun ke bawah adalah apa?',
                        'emoji' => 'م',
                        'options' => [
                            ['emoji' => 'م', 'text' => 'Huruf Mim (م)', 'is_correct' => true],
                            ['emoji' => 'ن', 'text' => 'Huruf Nun (ن)', 'is_correct' => false],
                            ['emoji' => 'و', 'text' => 'Huruf Wawu (و)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf berbentuk mangkok bulat dengan SATU titik mutiara di tengahnya adalah...?',
                        'audio' => 'Huruf berbentuk mangkok bulat dengan satu titik mutiara di tengahnya adalah apa?',
                        'emoji' => 'ن',
                        'options' => [
                            ['emoji' => 'ن', 'text' => 'Huruf Nun (ن)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'م', 'text' => 'Huruf Mim (م)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf berkepala melingkar dengan ekor meluncur manis adalah...?',
                        'audio' => 'Huruf berkepala melingkar dengan ekor meluncur manis adalah apa?',
                        'emoji' => 'و',
                        'options' => [
                            ['emoji' => 'و', 'text' => 'Huruf Wawu (و)', 'is_correct' => true],
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => false],
                            ['emoji' => 'م', 'text' => 'Huruf Mim (م)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf Ha besar yang berongga bulat melingkar adalah...?',
                        'audio' => 'Huruf Ha besar yang berongga bulat melingkar adalah apa?',
                        'emoji' => 'هـ',
                        'options' => [
                            ['emoji' => 'هـ', 'text' => 'Huruf Ha Besar (هـ)', 'is_correct' => true],
                            ['emoji' => 'ح', 'text' => 'Huruf Ha Kecil (ح)', 'is_correct' => false],
                            ['emoji' => 'و', 'text' => 'Huruf Wawu (و)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf istimewa bergandengan antara huruf Lam dan Alif adalah...?',
                        'audio' => 'Huruf istimewa bergandengan antara huruf Lam dan Alif adalah apa?',
                        'emoji' => 'لا',
                        'options' => [
                            ['emoji' => 'لا', 'text' => 'Huruf Lam Alif (لا)', 'is_correct' => true],
                            ['emoji' => 'ل', 'text' => 'Huruf Lam (ل)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => "Huruf mungil pemutus suara seperti kepala 'Ain kecil adalah...?",
                        'audio' => 'Huruf mungil pemutus suara adalah apa?',
                        'emoji' => 'ء',
                        'options' => [
                            ['emoji' => 'ء', 'text' => 'Huruf Hamzah (ء)', 'is_correct' => true],
                            ['emoji' => 'ع', 'text' => "Huruf 'Ain (ع)", 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah penutup berbadan bebek dengan DUA titik di bawah adalah...?',
                        'audio' => 'Huruf hijaiyah penutup berbadan bebek dengan dua titik di bawah adalah apa?',
                        'emoji' => 'ي',
                        'options' => [
                            ['emoji' => 'ي', 'text' => 'Huruf Ya (ي)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'level_number' => 3,
                'title' => 'Tantangan Karakteristik Titik & Bentuk Huruf',
                'slug' => 'kuis-hijaiyah-l3-karakteristik-huruf',
                'icon_emoji' => 'لا',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok 3 huruf bersaudara yang berbentuk perahu?',
                        'audio' => 'Manakah kelompok 3 huruf bersaudara yang berbentuk perahu?',
                        'emoji' => 'ب',
                        'options' => [
                            ['emoji' => 'ب', 'text' => 'Ba (ب), Ta (ت), Tsa (ث)', 'is_correct' => true],
                            ['emoji' => 'ج', 'text' => 'Jim (ج), Ha (ح), Kho (خ)', 'is_correct' => false],
                            ['emoji' => 'د', 'text' => 'Dal (د), Dzal (ذ), Ro (ر)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok 3 huruf bersaudara yang memiliki perut melengkung besar?',
                        'audio' => 'Manakah kelompok 3 huruf bersaudara yang memiliki perut melengkung besar?',
                        'emoji' => 'ج',
                        'options' => [
                            ['emoji' => 'ج', 'text' => 'Jim (ج), Ha (ح), Kho (خ)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Ba (ب), Ta (ت), Tsa (ث)', 'is_correct' => false],
                            ['emoji' => 'س', 'text' => 'Sin (س), Syin (ش), Shod (ص)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah 2 huruf hijaiyah yang memiliki TIGA titik di atasnya?',
                        'audio' => 'Manakah 2 huruf hijaiyah yang memiliki tiga titik di atasnya?',
                        'emoji' => 'ث',
                        'options' => [
                            ['emoji' => 'ث', 'text' => 'Tsa (ث) dan Syin (ش)', 'is_correct' => true],
                            ['emoji' => 'ت', 'text' => 'Ta (ت) dan Qof (ق)', 'is_correct' => false],
                            ['emoji' => 'ب', 'text' => 'Ba (ب) dan Nun (ن)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah 2 huruf hijaiyah yang memiliki DUA titik di ATAS badannya?',
                        'audio' => 'Manakah 2 huruf hijaiyah yang memiliki dua titik di atas badannya?',
                        'emoji' => 'ت',
                        'options' => [
                            ['emoji' => 'ت', 'text' => 'Ta (ت) dan Qof (ق)', 'is_correct' => true],
                            ['emoji' => 'ي', 'text' => 'Ta (ت) dan Ya (ي)', 'is_correct' => false],
                            ['emoji' => 'ب', 'text' => 'Ba (ب) dan Ta (ت)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf hijaiyah manakah yang memiliki DUA titik di BAWAH badannya?',
                        'audio' => 'Huruf hijaiyah manakah yang memiliki dua titik di bawah badannya?',
                        'emoji' => 'ي',
                        'options' => [
                            ['emoji' => 'ي', 'text' => 'Huruf Ya (ي)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf hijaiyah yang memiliki SATU titik di BAWAH perahunya?',
                        'audio' => 'Manakah huruf hijaiyah yang memiliki satu titik di bawah perahunya?',
                        'emoji' => 'ب',
                        'options' => [
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => true],
                            ['emoji' => 'ن', 'text' => 'Huruf Nun (ن)', 'is_correct' => false],
                            ['emoji' => 'ج', 'text' => 'Huruf Jim (ج)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf hijaiyah yang BERSIH tanpa titik sama sekali?',
                        'audio' => 'Manakah huruf hijaiyah yang bersih tanpa titik sama sekali?',
                        'emoji' => 'ح',
                        'options' => [
                            ['emoji' => 'ح', 'text' => 'Alif (ا), Ha (ح), Dal (د), Ro (ر)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Ba (ب), Ta (ت), Tsa (ث)', 'is_correct' => false],
                            ['emoji' => 'ج', 'text' => 'Jim (ج), Kho (خ), Zai (ز)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah pasangan huruf yang dibedakan hanya dengan satu titik di atas?',
                        'audio' => 'Manakah pasangan huruf yang dibedakan hanya dengan satu titik di atas?',
                        'emoji' => 'د',
                        'options' => [
                            ['emoji' => 'د', 'text' => 'Dal (د) & Dzal (ذ)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Ba (ب) & Ta (ت)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Alif (ا) & Ba (ب)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang memiliki tanda hamzah kecil di bagian dalamnya?',
                        'audio' => 'Huruf apakah yang memiliki tanda hamzah kecil di bagian dalamnya?',
                        'emoji' => 'ك',
                        'options' => [
                            ['emoji' => 'ك', 'text' => 'Huruf Kaf (ك)', 'is_correct' => true],
                            ['emoji' => 'ل', 'text' => 'Huruf Lam (ل)', 'is_correct' => false],
                            ['emoji' => 'ق', 'text' => 'Huruf Qof (ق)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf apakah yang merupakan perpaduan dua huruf bersahabat?',
                        'audio' => 'Huruf apakah yang merupakan perpaduan dua huruf bersahabat?',
                        'emoji' => 'لا',
                        'options' => [
                            ['emoji' => 'لا', 'text' => 'Huruf Lam Alif (لا)', 'is_correct' => true],
                            ['emoji' => 'ء', 'text' => 'Huruf Hamzah (ء)', 'is_correct' => false],
                            ['emoji' => 'ي', 'text' => 'Huruf Ya (ي)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'level_number' => 3,
                'title' => 'Grand Champion Maestro Hijaiyah Cilik Alif-Ya',
                'slug' => 'kuis-hijaiyah-l3-grand-master',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Huruf pertama dalam urutan huruf hijaiyah adalah...?',
                        'audio' => 'Huruf pertama dalam urutan huruf hijaiyah adalah apa?',
                        'emoji' => 'ا',
                        'options' => [
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Huruf Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'ي', 'text' => 'Huruf Ya (ي)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf terakhir penutup dalam urutan huruf hijaiyah adalah...?',
                        'audio' => 'Huruf terakhir penutup dalam urutan huruf hijaiyah adalah apa?',
                        'emoji' => 'ي',
                        'options' => [
                            ['emoji' => 'ي', 'text' => 'Huruf Ya (ي)', 'is_correct' => true],
                            ['emoji' => 'ا', 'text' => 'Huruf Alif (ا)', 'is_correct' => false],
                            ['emoji' => 'لا', 'text' => 'Huruf Lam Alif (لا)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Alif (ا), Ba (ب), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Alif, Ba, lalu huruf apa?',
                        'emoji' => 'ت',
                        'options' => [
                            ['emoji' => 'ت', 'text' => 'Huruf Ta (ت)', 'is_correct' => true],
                            ['emoji' => 'ث', 'text' => 'Huruf Tsa (ث)', 'is_correct' => false],
                            ['emoji' => 'ج', 'text' => 'Huruf Jim (ج)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Jim (ج), Ha (ح), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Jim, Ha, lalu huruf apa?',
                        'emoji' => 'خ',
                        'options' => [
                            ['emoji' => 'خ', 'text' => 'Huruf Kho (خ)', 'is_correct' => true],
                            ['emoji' => 'د', 'text' => 'Huruf Dal (د)', 'is_correct' => false],
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Dal (د), Dzal (ذ), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Dal, Dzal, lalu huruf apa?',
                        'emoji' => 'ر',
                        'options' => [
                            ['emoji' => 'ر', 'text' => 'Huruf Ro (ر)', 'is_correct' => true],
                            ['emoji' => 'ز', 'text' => 'Huruf Zai (ز)', 'is_correct' => false],
                            ['emoji' => 'س', 'text' => 'Huruf Sin (س)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Sin (س), Syin (ش), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Sin, Syin, lalu huruf apa?',
                        'emoji' => 'ص',
                        'options' => [
                            ['emoji' => 'ص', 'text' => 'Huruf Shod (ص)', 'is_correct' => true],
                            ['emoji' => 'ض', 'text' => 'Huruf Dhod (ض)', 'is_correct' => false],
                            ['emoji' => 'ط', 'text' => 'Huruf Tho (ط)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Tho (ط), Zho (ظ), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Tho, Zho, lalu huruf apa?',
                        'emoji' => 'ع',
                        'options' => [
                            ['emoji' => 'ع', 'text' => "Huruf 'Ain (ع)", 'is_correct' => true],
                            ['emoji' => 'غ', 'text' => 'Huruf Ghoin (غ)', 'is_correct' => false],
                            ['emoji' => 'ف', 'text' => 'Huruf Fa (ف)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Kaf (ك), Lam (ل), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Kaf, Lam, lalu huruf apa?',
                        'emoji' => 'م',
                        'options' => [
                            ['emoji' => 'م', 'text' => 'Huruf Mim (م)', 'is_correct' => true],
                            ['emoji' => 'ن', 'text' => 'Huruf Nun (ن)', 'is_correct' => false],
                            ['emoji' => 'و', 'text' => 'Huruf Wawu (و)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan dari urutan huruf hijaiyah berikut: Nun (ن), Wawu (و), ... ?',
                        'audio' => 'Lanjutan dari urutan huruf hijaiyah berikut: Nun, Wawu, lalu huruf apa?',
                        'emoji' => 'هـ',
                        'options' => [
                            ['emoji' => 'هـ', 'text' => 'Huruf Ha Besar (هـ)', 'is_correct' => true],
                            ['emoji' => 'لا', 'text' => 'Huruf Lam Alif (لا)', 'is_correct' => false],
                            ['emoji' => 'ي', 'text' => 'Huruf Ya (ي)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar hebat apakah untuk anak pintar yang menguasai huruf Alif sampai Ya?',
                        'audio' => 'Gelar hebat apakah untuk anak pintar yang menguasai huruf Alif sampai Ya?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Juara Cilik Hijaiyah Hebat!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 4: SATWA & HEWAN LUCU (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (HEWAN JINAK & TERNAK) ---
            [
                'category_slug' => 'hewan',
                'level_number' => 1,
                'title' => 'Tebak Suara Hewan Jinak Ceria',
                'slug' => 'kuis-hewan-l1-suara-hewan-jinak',
                'icon_emoji' => '🐱',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hewan berkumis lembut yang bunyinya "Meong-meong" adalah...?',
                        'audio' => 'Hewan berkumis lembut yang bunyinya meong meong adalah apa?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '🐱', 'text' => 'Kucing Persia', 'is_correct' => true],
                            ['emoji' => '🐮', 'text' => 'Sapi Perah', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan lucu bertelinga panjang yang suka melompat dan makan wortel adalah...?',
                        'audio' => 'Hewan lucu bertelinga panjang yang suka melompat dan makan wortel adalah apa?',
                        'emoji' => '🐰',
                        'options' => [
                            ['emoji' => '🐰', 'text' => 'Kelinci Putih', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => false],
                            ['emoji' => '🐑', 'text' => 'Domba Lembut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Unggas berparuh datar yang bersuara "Kwek-kwek" saat berenang adalah...?',
                        'audio' => 'Unggas berparuh datar yang bersuara kwek kwek saat berenang adalah apa?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Kucing Manja', 'is_correct' => false],
                            ['emoji' => '🐠', 'text' => 'Ikan Mas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hewan',
                'level_number' => 1,
                'title' => 'Mengenal Hewan Ternak Bermanfaat',
                'slug' => 'kuis-hewan-l1-hewan-ternak-sehat',
                'icon_emoji' => '🐮',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hewan besar penghasil susu sehat yang berbunyi "Moo-moo" adalah...?',
                        'audio' => 'Hewan besar penghasil susu sehat yang berbunyi moo moo adalah apa?',
                        'emoji' => '🐮',
                        'options' => [
                            ['emoji' => '🐮', 'text' => 'Sapi Perah', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => false],
                            ['emoji' => '🐰', 'text' => 'Kelinci Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Unggas yang suka berkokok "Kukuruyuk!" di pagi hari adalah...?',
                        'audio' => 'Unggas yang suka berkokok kukuruyuk di pagi hari adalah apa?',
                        'emoji' => '🐔',
                        'options' => [
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => true],
                            ['emoji' => '🐑', 'text' => 'Domba Lembut', 'is_correct' => false],
                            ['emoji' => '🐱', 'text' => 'Kucing Manja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan berbulu tebal putih seperti awan yang bersuara "Mbee-mbee" adalah...?',
                        'audio' => 'Hewan berbulu tebal putih seperti awan yang bersuara mbee mbee adalah apa?',
                        'emoji' => '🐑',
                        'options' => [
                            ['emoji' => '🐑', 'text' => 'Domba Lembut', 'is_correct' => true],
                            ['emoji' => '🐮', 'text' => 'Sapi Perah', 'is_correct' => false],
                            ['emoji' => '🐠', 'text' => 'Ikan Mas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hewan',
                'level_number' => 1,
                'title' => 'Sahabat Air & Peliharaan Lucu',
                'slug' => 'kuis-hewan-l1-sahabat-air-lucu',
                'icon_emoji' => '🐠',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hewan yang hidup di air dan berenang lincah menggunakan sirip adalah...?',
                        'audio' => 'Hewan yang hidup di air dan berenang lincah menggunakan sirip adalah apa?',
                        'emoji' => '🐠',
                        'options' => [
                            ['emoji' => '🐠', 'text' => 'Ikan Mas Ceria', 'is_correct' => true],
                            ['emoji' => '🐰', 'text' => 'Kelinci Putih', 'is_correct' => false],
                            ['emoji' => '🐱', 'text' => 'Kucing Persia', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Pasangan sahabat hewan jinak yang sama-sama berkaki empat adalah...?',
                        'audio' => 'Pasangan sahabat hewan jinak yang sama-sama berkaki empat adalah apa?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '🐱', 'text' => 'Kucing & Kelinci', 'is_correct' => true],
                            ['emoji' => '🦆', 'text' => 'Bebek & Ayam', 'is_correct' => false],
                            ['emoji' => '🐠', 'text' => 'Ikan & Bebek', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Makanan renyah yang paling disukai oleh kelinci lucu adalah...?',
                        'audio' => 'Makanan renyah yang paling disukai oleh kelinci lucu adalah apa?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🥕', 'text' => 'Sayur Wortel Renyah', 'is_correct' => true],
                            ['emoji' => '🐟', 'text' => 'Ikan Asin', 'is_correct' => false],
                            ['emoji' => '🦴', 'text' => 'Tulang Kering', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (SATWA RIMBA & SAFARI) ---
            [
                'category_slug' => 'hewan',
                'level_number' => 2,
                'title' => 'Raja Hutan & Raksasa Rimba',
                'slug' => 'kuis-hewan-l2-raja-hutan-raksasa-rimba',
                'icon_emoji' => '🦁',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Hewan gagah bertaring tajam dan berbulu lebat di leher yang dijuluki Raja Hutan adalah...?',
                        'audio' => 'Hewan gagah bertaring tajam dan berbulu lebat di leher yang dijuluki Raja Hutan adalah apa?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🦁', 'text' => 'Singa Si Raja Hutan', 'is_correct' => true],
                            ['emoji' => '🦒', 'text' => 'Jerapah Leher Tinggi', 'is_correct' => false],
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan darat terbesar yang memiliki belalai panjang dan telinga lebar adalah...?',
                        'audio' => 'Hewan darat terbesar yang memiliki belalai panjang dan telinga lebar adalah apa?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Gajah Belalai Panjang', 'is_correct' => true],
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => false],
                            ['emoji' => '🐴', 'text' => 'Kuda Kencang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan berleher sangat panjang yang suka makan daun di pucuk pohon adalah...?',
                        'audio' => 'Hewan berleher sangat panjang yang suka makan daun di pucuk pohon adalah apa?',
                        'emoji' => '🦒',
                        'options' => [
                            ['emoji' => '🦒', 'text' => 'Jerapah Leher Tinggi', 'is_correct' => true],
                            ['emoji' => '🦁', 'text' => 'Singa Gagah', 'is_correct' => false],
                            ['emoji' => '🐯', 'text' => 'Harimau Belang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan lincah berekor panjang yang suka bergelantungan di dahan pohon adalah...?',
                        'audio' => 'Hewan lincah berekor panjang yang suka bergelantungan di dahan pohon adalah apa?',
                        'emoji' => '🐵',
                        'options' => [
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah Besar', 'is_correct' => false],
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suara auman keras menggelegar "Roaaar!" adalah suara dari hewan...?',
                        'audio' => 'Suara auman keras menggelegar roar adalah suara dari hewan apa?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🦁', 'text' => 'Singa Si Raja Hutan', 'is_correct' => true],
                            ['emoji' => '🦒', 'text' => 'Jerapah', 'is_correct' => false],
                            ['emoji' => '🐵', 'text' => 'Monyet', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hewan',
                'level_number' => 2,
                'title' => 'Belang Gagah & Panda Gemas',
                'slug' => 'kuis-hewan-l2-belang-gagah-panda-gemas',
                'icon_emoji' => '🐯',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Kucing besar bercorak loreng oranye hitam yang berlari tangguh adalah...?',
                        'audio' => 'Kucing besar bercorak loreng oranye hitam yang berlari tangguh adalah apa?',
                        'emoji' => '🐯',
                        'options' => [
                            ['emoji' => '🐯', 'text' => 'Harimau Belang', 'is_correct' => true],
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => false],
                            ['emoji' => '🐴', 'text' => 'Kuda Kencang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Beruang gemas berbulu hitam-putih yang sangat suka makan daun bambu adalah...?',
                        'audio' => 'Beruang gemas berbulu hitam putih yang sangat suka makan daun bambu adalah apa?',
                        'emoji' => '🐼',
                        'options' => [
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => true],
                            ['emoji' => '🐯', 'text' => 'Harimau Belang', 'is_correct' => false],
                            ['emoji' => '🦁', 'text' => 'Singa Gagah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan tangguh berkaki empat yang berlari sangat kencang dan berbunyi "Hii-haak!" adalah...?',
                        'audio' => 'Hewan tangguh berkaki empat yang berlari sangat kencang dan berbunyi hii haak adalah apa?',
                        'emoji' => '🐴',
                        'options' => [
                            ['emoji' => '🐴', 'text' => 'Kuda Berlari Kencang', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah Belalai', 'is_correct' => false],
                            ['emoji' => '🦒', 'text' => 'Jerapah Tinggi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan rimba yang memiliki belalai panjang untuk menyemprotkan air?',
                        'audio' => 'Manakah hewan rimba yang memiliki belalai panjang untuk menyemprotkan air?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Gajah Belalai Panjang', 'is_correct' => true],
                            ['emoji' => '🐯', 'text' => 'Harimau Belang', 'is_correct' => false],
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan manakah yang sangat suka makan buah pisang manis di atas pohon?',
                        'audio' => 'Hewan manakah yang sangat suka makan buah pisang manis di atas pohon?',
                        'emoji' => '🐵',
                        'options' => [
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => true],
                            ['emoji' => '🐴', 'text' => 'Kuda Kencang', 'is_correct' => false],
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hewan',
                'level_number' => 2,
                'title' => 'Eksplorasi Ciri & Keunikan Satwa Safari',
                'slug' => 'kuis-hewan-l2-keunikan-satwa-safari',
                'icon_emoji' => '🦒',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Mengapa leher jerapah diciptakan sangat panjang oleh Tuhan?',
                        'audio' => 'Mengapa leher jerapah diciptakan sangat panjang oleh Tuhan?',
                        'emoji' => '🦒',
                        'options' => [
                            ['emoji' => '🦒', 'text' => 'Untuk memetik daun di pucuk pohon tinggi', 'is_correct' => true],
                            ['emoji' => '🏊', 'text' => 'Untuk menyelam di dasar laut', 'is_correct' => false],
                            ['emoji' => '🕳️', 'text' => 'Untuk masuk ke dalam lubang tanah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan safari manakah yang memiliki motif loreng garis-garis indah di tubuhnya?',
                        'audio' => 'Hewan safari manakah yang memiliki motif loreng garis garis indah di tubuhnya?',
                        'emoji' => '🐯',
                        'options' => [
                            ['emoji' => '🐯', 'text' => 'Harimau Belang', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah Besar', 'is_correct' => false],
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan manakah yang memiliki dua telinga lebar yang dikipas-kipaskan saat kepanasan?',
                        'audio' => 'Hewan manakah yang memiliki dua telinga lebar yang dikipas kipaskan saat kepanasan?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Gajah Belalai Panjang', 'is_correct' => true],
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => false],
                            ['emoji' => '🦁', 'text' => 'Singa Gagah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Pasangan hewan rimba yang sama-sama memiliki cakar tajam dan auman gagah adalah...?',
                        'audio' => 'Pasangan hewan rimba yang sama-sama memiliki cakar tajam dan auman gagah adalah apa?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🦁', 'text' => 'Singa & Harimau', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah & Jerapah', 'is_correct' => false],
                            ['emoji' => '🐼', 'text' => 'Panda & Monyet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan lucu berbulu hitam-putih yang suka makan batang bambu renyah?',
                        'audio' => 'Manakah hewan lucu berbulu hitam putih yang suka makan batang bambu renyah?',
                        'emoji' => '🐼',
                        'options' => [
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => true],
                            ['emoji' => '🦁', 'text' => 'Singa Si Raja Hutan', 'is_correct' => false],
                            ['emoji' => '🐴', 'text' => 'Kuda Kencang', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (SATWA KUTUB, LAUT, UDARA & HABITAT) ---
            [
                'category_slug' => 'hewan',
                'level_number' => 3,
                'title' => 'Penguasa Samudra & Satwa Kutub Dingin',
                'slug' => 'kuis-hewan-l3-penguasa-samudra-satwa-kutub',
                'icon_emoji' => '🐬',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Mamalia laut ramah dan cerdas yang suka melompat gembira di atas ombak adalah...?',
                        'audio' => 'Mamalia laut ramah dan cerdas yang suka melompat gembira di atas ombak adalah apa?',
                        'emoji' => '🐬',
                        'options' => [
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba Cerdas', 'is_correct' => true],
                            ['emoji' => '🐢', 'text' => 'Kura-Kura Tempurung', 'is_correct' => false],
                            ['emoji' => '🦅', 'text' => 'Burung Elang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan terbesar di samudra yang dapat menyemburkan air dari kepalanya adalah...?',
                        'audio' => 'Hewan terbesar di samudra yang dapat menyemburkan air dari kepalanya adalah apa?',
                        'emoji' => '🐳',
                        'options' => [
                            ['emoji' => '🐳', 'text' => 'Paus Biru Raksasa', 'is_correct' => true],
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba', 'is_correct' => false],
                            ['emoji' => '🐠', 'text' => 'Ikan Mas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Burung berjas hitam-putih yang hidup di kutub es dan pandai meluncur di salju adalah...?',
                        'audio' => 'Burung berjas hitam putih yang hidup di kutub es dan pandai meluncur di salju adalah apa?',
                        'emoji' => '🐧',
                        'options' => [
                            ['emoji' => '🐧', 'text' => 'Pinguin Salju Lucu', 'is_correct' => true],
                            ['emoji' => '🦉', 'text' => 'Burung Hantu', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Penguasa angkasa bercakar tajam dengan penglihatan mata sangat tajam dari langit adalah...?',
                        'audio' => 'Penguasa angkasa bercakar tajam dengan penglihatan mata sangat tajam dari langit adalah apa?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🦅', 'text' => 'Burung Elang Penjelajah', 'is_correct' => true],
                            ['emoji' => '🐧', 'text' => 'Pinguin Salju', 'is_correct' => false],
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Burung bijak bermata bulat besar yang aktif terbang di malam hari adalah...?',
                        'audio' => 'Burung bijak bermata bulat besar yang aktif terbang di malam hari adalah apa?',
                        'emoji' => '🦉',
                        'options' => [
                            ['emoji' => '🦉', 'text' => 'Burung Hantu Penjaga Malam', 'is_correct' => true],
                            ['emoji' => '🦅', 'text' => 'Burung Elang', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan lambat berumur panjang yang membawa rumah tempurung keras di punggungnya adalah...?',
                        'audio' => 'Hewan lambat berumur panjang yang membawa rumah tempurung keras di punggungnya adalah apa?',
                        'emoji' => '🐢',
                        'options' => [
                            ['emoji' => '🐢', 'text' => 'Kura-Kura Rumah Tempurung', 'is_correct' => true],
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba', 'is_correct' => false],
                            ['emoji' => '🐰', 'text' => 'Kelinci Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa pinguin memiliki lapisan lemak tebal di bawah kulitnya?',
                        'audio' => 'Mengapa pinguin memiliki lapisan lemak tebal di bawah kulitnya?',
                        'emoji' => '🐧',
                        'options' => [
                            ['emoji' => '🐧', 'text' => 'Menjaga tubuh tetap hangat di kutub dingin', 'is_correct' => true],
                            ['emoji' => '🏊', 'text' => 'Agar tidak bisa berenang di air', 'is_correct' => false],
                            ['emoji' => '🪶', 'text' => 'Agar bisa terbang tinggi di awan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan yang menggunakan tempurung keras sebagai pelindung saat merasa terancam?',
                        'audio' => 'Manakah hewan yang menggunakan tempurung keras sebagai pelindung saat merasa terancam?',
                        'emoji' => '🐢',
                        'options' => [
                            ['emoji' => '🐢', 'text' => 'Kura-Kura', 'is_correct' => true],
                            ['emoji' => '🐳', 'text' => 'Paus Biru', 'is_correct' => false],
                            ['emoji' => '🦉', 'text' => 'Burung Hantu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di manakah habitat tempat tinggal yang paling disukai oleh paus dan lumba-lumba?',
                        'audio' => 'Di manakah habitat tempat tinggal yang paling disukai oleh paus dan lumba lumba?',
                        'emoji' => '🌊',
                        'options' => [
                            ['emoji' => '🌊', 'text' => 'Lautan dan Samudra Luas', 'is_correct' => true],
                            ['emoji' => '🌲', 'text' => 'Puncak Pohon Hutan Rimba', 'is_correct' => false],
                            ['emoji' => '🏜️', 'text' => 'Padang Pasir Gersang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Burung pemangsa apakah yang terbang tinggi melayang dan menyambar mangsa dengan cakar kokoh?',
                        'audio' => 'Burung pemangsa apakah yang terbang tinggi melayang dan menyambar mangsa dengan cakar kokoh?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🦅', 'text' => 'Burung Elang', 'is_correct' => true],
                            ['emoji' => '🐧', 'text' => 'Pinguin', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hewan',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Habitat & Makanan Satwa',
                'slug' => 'kuis-hewan-l3-habitat-makanan-satwa',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Kelompok hewan manakah yang hidup dan berenang di dalam air?',
                        'audio' => 'Kelompok hewan manakah yang hidup dan berenang di dalam air?',
                        'emoji' => '🐬',
                        'options' => [
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba, Paus, Ikan Mas', 'is_correct' => true],
                            ['emoji' => '🦁', 'text' => 'Singa, Harimau, Kuda', 'is_correct' => false],
                            ['emoji' => '🐵', 'text' => 'Monyet, Jerapah, Gajah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok hewan manakah yang berkembang biak dengan cara bertelur?',
                        'audio' => 'Kelompok hewan manakah yang berkembang biak dengan cara bertelur?',
                        'emoji' => '🐔',
                        'options' => [
                            ['emoji' => '🐔', 'text' => 'Ayam, Bebek, Pinguin', 'is_correct' => true],
                            ['emoji' => '🐮', 'text' => 'Sapi, Kucing, Domba', 'is_correct' => false],
                            ['emoji' => '🐘', 'text' => 'Gajah, Kuda, Singa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok hewan manakah yang termasuk pemakan tumbuhan (Herbivora)?',
                        'audio' => 'Kelompok hewan manakah yang termasuk pemakan tumbuhan?',
                        'emoji' => '🐮',
                        'options' => [
                            ['emoji' => '🐮', 'text' => 'Sapi, Kelinci, Jerapah', 'is_correct' => true],
                            ['emoji' => '🦁', 'text' => 'Singa, Harimau, Elang', 'is_correct' => false],
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba, Burung Hantu, Kucing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan darat yang memiliki belalai serbaguna untuk minum dan mengambil makanan?',
                        'audio' => 'Manakah hewan darat yang memiliki belalai serbaguna untuk minum dan mengambil makanan?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Gajah', 'is_correct' => true],
                            ['emoji' => '🦒', 'text' => 'Jerapah', 'is_correct' => false],
                            ['emoji' => '🦁', 'text' => 'Singa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan yang menghasilkan bahan wol hangat dari bulu tebalnya?',
                        'audio' => 'Manakah hewan yang menghasilkan bahan wol hangat dari bulu tebalnya?',
                        'emoji' => '🐑',
                        'options' => [
                            ['emoji' => '🐑', 'text' => 'Domba Lembut', 'is_correct' => true],
                            ['emoji' => '🐮', 'text' => 'Sapi Perah', 'is_correct' => false],
                            ['emoji' => '🐴', 'text' => 'Kuda Kencang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan yang menghasilkan minuman susu segar dan sehat untuk anak-anak?',
                        'audio' => 'Manakah hewan yang menghasilkan minuman susu segar dan sehat untuk anak anak?',
                        'emoji' => '🐮',
                        'options' => [
                            ['emoji' => '🐮', 'text' => 'Sapi Perah', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Kucing Persia', 'is_correct' => false],
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan laut yang bernapas dengan paru-paru dan melompat di atas ombak?',
                        'audio' => 'Manakah hewan laut yang bernapas dengan paru paru dan melompat di atas ombak?',
                        'emoji' => '🐬',
                        'options' => [
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba Cerdas', 'is_correct' => true],
                            ['emoji' => '🐠', 'text' => 'Ikan Mas Kolam', 'is_correct' => false],
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Satwa apakah yang dapat memutar kepalanya ke belakang untuk mengamati kegelapan malam?',
                        'audio' => 'Satwa apakah yang dapat memutar kepalanya ke belakang untuk mengamati kegelapan malam?',
                        'emoji' => '🦉',
                        'options' => [
                            ['emoji' => '🦉', 'text' => 'Burung Hantu', 'is_correct' => true],
                            ['emoji' => '🦅', 'text' => 'Burung Elang', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah satwa yang terkenal sangat lambat di darat namun lincah saat berenang?',
                        'audio' => 'Manakah satwa yang terkenal sangat lambat di darat namun lincah saat berenang?',
                        'emoji' => '🐢',
                        'options' => [
                            ['emoji' => '🐢', 'text' => 'Kura-Kura', 'is_correct' => true],
                            ['emoji' => '🐴', 'text' => 'Kuda', 'is_correct' => false],
                            ['emoji' => '🐯', 'text' => 'Harimau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah satwa hutan yang pandai menirukan gerakan dan hidup berkelompok di pepohonan?',
                        'audio' => 'Manakah satwa hutan yang pandai menirukan gerakan dan hidup berkelompok di pepohonan?',
                        'emoji' => '🐵',
                        'options' => [
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => true],
                            ['emoji' => '🐼', 'text' => 'Panda Gemas', 'is_correct' => false],
                            ['emoji' => '🐘', 'text' => 'Gajah Besar', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hewan',
                'level_number' => 3,
                'title' => 'Grand Champion Penjaga Alam & Satwa Ceria',
                'slug' => 'kuis-hewan-l3-grand-master-satwa-ceria',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Siapakah satwa gagah yang dijuluki sebagai Raja Hutan Rimba?',
                        'audio' => 'Siapakah satwa gagah yang dijuluki sebagai Raja Hutan Rimba?',
                        'emoji' => '🦁',
                        'options' => [
                            ['emoji' => '🦁', 'text' => 'Singa Si Raja Hutan', 'is_correct' => true],
                            ['emoji' => '🐵', 'text' => 'Monyet Ceria', 'is_correct' => false],
                            ['emoji' => '🐰', 'text' => 'Kelinci Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan apakah yang memiliki leher paling panjang di antara semua hewan darat?',
                        'audio' => 'Hewan apakah yang memiliki leher paling panjang di antara semua hewan darat?',
                        'emoji' => '🦒',
                        'options' => [
                            ['emoji' => '🦒', 'text' => 'Jerapah Leher Tinggi', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah Belalai', 'is_correct' => false],
                            ['emoji' => '🐴', 'text' => 'Kuda Kencang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan raksasa apakah yang memiliki tubuh terbesar di planet bumi?',
                        'audio' => 'Hewan raksasa apakah yang memiliki tubuh terbesar di planet bumi?',
                        'emoji' => '🐳',
                        'options' => [
                            ['emoji' => '🐳', 'text' => 'Paus Biru Samudra', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah Belalai', 'is_correct' => false],
                            ['emoji' => '🦁', 'text' => 'Singa Raja Hutan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Makanan pokok apakah yang sangat digemari oleh panda lucu?',
                        'audio' => 'Makanan pokok apakah yang sangat digemari oleh panda lucu?',
                        'emoji' => '🐼',
                        'options' => [
                            ['emoji' => '🐼', 'text' => 'Batang dan Daun Bambu Segar', 'is_correct' => true],
                            ['emoji' => '🥩', 'text' => 'Daging Segar', 'is_correct' => false],
                            ['emoji' => '🍌', 'text' => 'Buah Pisang Manis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara kita menyayangi hewan peliharaan di rumah seperti kucing dan kelinci?',
                        'audio' => 'Bagaimana cara kita menyayangi hewan peliharaan di rumah seperti kucing dan kelinci?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '🐱', 'text' => 'Memberi makan teratur dan merawatnya dengan kasih sayang', 'is_correct' => true],
                            ['emoji' => '🏃', 'text' => 'Mengejar dan menakut-nakutinya sampai lari', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Membiarkannya kelaparan tanpa minum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suara kokok "Kukuruyuk!" di pagi hari adalah tanda dari unggas...?',
                        'audio' => 'Suara kokok kukuruyuk di pagi hari adalah tanda dari unggas apa?',
                        'emoji' => '🐔',
                        'options' => [
                            ['emoji' => '🐔', 'text' => 'Ayam Jago Berkokok', 'is_correct' => true],
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => false],
                            ['emoji' => '🦉', 'text' => 'Burung Hantu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan lucu apakah yang suka melompat-lompat dengan telinga panjang yang tegak?',
                        'audio' => 'Hewan lucu apakah yang suka melompat lompat dengan telinga panjang yang tegak?',
                        'emoji' => '🐰',
                        'options' => [
                            ['emoji' => '🐰', 'text' => 'Kelinci Putih Melompat', 'is_correct' => true],
                            ['emoji' => '🐢', 'text' => 'Kura-Kura Lambat', 'is_correct' => false],
                            ['emoji' => '🐮', 'text' => 'Sapi Perah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan bersirip yang bernapas menggunakan insang di dalam air adalah...?',
                        'audio' => 'Hewan bersirip yang bernapas menggunakan insang di dalam air adalah apa?',
                        'emoji' => '🐠',
                        'options' => [
                            ['emoji' => '🐠', 'text' => 'Ikan Mas Ceria', 'is_correct' => true],
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Satwa kutub apakah yang berjalan bergoyang-goyang lucu di atas hamparan es salju?',
                        'audio' => 'Satwa kutub apakah yang berjalan bergoyang goyang lucu di atas hamparan es salju?',
                        'emoji' => '🐧',
                        'options' => [
                            ['emoji' => '🐧', 'text' => 'Pinguin Salju Lucu', 'is_correct' => true],
                            ['emoji' => '🦅', 'text' => 'Burung Elang', 'is_correct' => false],
                            ['emoji' => '🦁', 'text' => 'Singa Gagah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar hebat apakah untuk anak pintar pecinta dan penyayang satwa ciptaan Tuhan?',
                        'audio' => 'Gelar hebat apakah untuk anak pintar pecinta dan penyayang satwa ciptaan Tuhan?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Sahabat Satwa Hebat & Penjaga Alam!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk dan Malas', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Hutan yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 5: BUAH & SAYURAN SEGAR (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (BUAH POPULER & SAYUR MANIS) ---
            [
                'category_slug' => 'buah',
                'level_number' => 1,
                'title' => 'Tebak Buah Merah & Kuning Manis',
                'slug' => 'kuis-buah-l1-merah-kuning-manis',
                'icon_emoji' => '🍎',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Buah merah bulat manis dan renyah yang kaya vitamin adalah...?',
                        'audio' => 'Buah merah bulat manis dan renyah yang kaya vitamin adalah apa?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Apel Merah Manis', 'is_correct' => true],
                            ['emoji' => '🥕', 'text' => 'Wortel Oranye', 'is_correct' => false],
                            ['emoji' => '🍌', 'text' => 'Pisang Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah kuning melengkung lembut yang sangat disukai anak-anak dan monyet adalah...?',
                        'audio' => 'Buah kuning melengkung lembut yang sangat disukai anak anak dan monyet adalah apa?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🍌', 'text' => 'Pisang Kuning Lembut', 'is_correct' => true],
                            ['emoji' => '🍊', 'text' => 'Jeruk Oranye', 'is_correct' => false],
                            ['emoji' => '🍉', 'text' => 'Semangka Berair', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah bulat berwarna oranye segar yang kaya vitamin C adalah...?',
                        'audio' => 'Buah bulat berwarna oranye segar yang kaya vitamin C adalah apa?',
                        'emoji' => '🍊',
                        'options' => [
                            ['emoji' => '🍊', 'text' => 'Jeruk Oranye Segar', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Apel Merah', 'is_correct' => false],
                            ['emoji' => '🍓', 'text' => 'Stroberi Bintik', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'buah',
                'level_number' => 1,
                'title' => 'Segarnya Semangka & Sayur Wortel Sehat',
                'slug' => 'kuis-buah-l1-semangka-wortel-sehat',
                'icon_emoji' => '🍉',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Buah besar berdaging merah berair manis dengan kulit hijau bergaris adalah...?',
                        'audio' => 'Buah besar berdaging merah berair manis dengan kulit hijau bergaris adalah apa?',
                        'emoji' => '🍉',
                        'options' => [
                            ['emoji' => '🍉', 'text' => 'Semangka Merah Berair', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang Lembut', 'is_correct' => false],
                            ['emoji' => '🍊', 'text' => 'Jeruk Segar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran renyah berwarna oranye kesukaan kelinci yang baik untuk mata adalah...?',
                        'audio' => 'Sayuran renyah berwarna oranye kesukaan kelinci yang baik untuk mata adalah apa?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🥕', 'text' => 'Wortel Oranye Renyah', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Apel Merah', 'is_correct' => false],
                            ['emoji' => '🍅', 'text' => 'Tomat Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah merah mungil berbentuk hati dengan bintik biji manis adalah...?',
                        'audio' => 'Buah merah mungil berbentuk hati dengan bintik biji manis adalah apa?',
                        'emoji' => '🍓',
                        'options' => [
                            ['emoji' => '🍓', 'text' => 'Stroberi Merah Bintik', 'is_correct' => true],
                            ['emoji' => '🍉', 'text' => 'Semangka Berair', 'is_correct' => false],
                            ['emoji' => '🍌', 'text' => 'Pisang Lembut', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'buah',
                'level_number' => 1,
                'title' => 'Sahabat Kebun & Tomat Merah Ceria',
                'slug' => 'kuis-buah-l1-tomat-merah-ceria',
                'icon_emoji' => '🍅',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Sayur buah berwarna merah bulat yang sering dibuat jus atau sup sehat adalah...?',
                        'audio' => 'Sayur buah berwarna merah bulat yang sering dibuat jus atau sup sehat adalah apa?',
                        'emoji' => '🍅',
                        'options' => [
                            ['emoji' => '🍅', 'text' => 'Tomat Merah Segar', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang Lembut', 'is_correct' => false],
                            ['emoji' => '🥕', 'text' => 'Wortel Renyah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah di antara berikut ini yang merupakan buah berdaging merah banyak air saat digigit?',
                        'audio' => 'Manakah di antara berikut ini yang merupakan buah berdaging merah banyak air saat digigit?',
                        'emoji' => '🍉',
                        'options' => [
                            ['emoji' => '🍉', 'text' => 'Semangka Merah', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang Kuning', 'is_correct' => false],
                            ['emoji' => '🥕', 'text' => 'Wortel Oranye', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah kulit buah pisang yang sudah matang dan manis?',
                        'audio' => 'Warna apakah kulit buah pisang yang sudah matang dan manis?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🍌', 'text' => 'Kuning Cerah', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Biru Tua', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Hitam Gelap', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (BUAH MANIS & SAYURAN BERGIZI) ---
            [
                'category_slug' => 'buah',
                'level_number' => 2,
                'title' => 'Petualangan Anggur, Nanas & Mangga Manis',
                'slug' => 'kuis-buah-l2-anggur-nanas-mangga',
                'icon_emoji' => '🍇',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Buah bergerombol bulat ungu manis yang tumbuh merambat di pohon adalah...?',
                        'audio' => 'Buah bergerombol bulat ungu manis yang tumbuh merambat di pohon adalah apa?',
                        'emoji' => '🍇',
                        'options' => [
                            ['emoji' => '🍇', 'text' => 'Anggur Ungu Manis', 'is_correct' => true],
                            ['emoji' => '🍍', 'text' => 'Nanas Mahkota', 'is_correct' => false],
                            ['emoji' => '🥭', 'text' => 'Mangga Harum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah bersisik kuning dengan mahkota daun hijau di atasnya adalah...?',
                        'audio' => 'Buah bersisik kuning dengan mahkota daun hijau di atasnya adalah apa?',
                        'emoji' => '🍍',
                        'options' => [
                            ['emoji' => '🍍', 'text' => 'Nanas Mahkota Emas', 'is_correct' => true],
                            ['emoji' => '🥭', 'text' => 'Mangga Manis', 'is_correct' => false],
                            ['emoji' => '🌽', 'text' => 'Jagung Manis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah tropis berdaging oranye lembut dengan aroma sangat harum adalah...?',
                        'audio' => 'Buah tropis berdaging oranye lembut dengan aroma sangat harum adalah apa?',
                        'emoji' => '🥭',
                        'options' => [
                            ['emoji' => '🥭', 'text' => 'Mangga Harum Manis', 'is_correct' => true],
                            ['emoji' => '🥑', 'text' => 'Alpukat Gurih', 'is_correct' => false],
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran bertongkol dengan deretan biji kuning manis yang lezat direbus adalah...?',
                        'audio' => 'Sayuran bertongkol dengan deretan biji kuning manis yang lezat direbus adalah apa?',
                        'emoji' => '🌽',
                        'options' => [
                            ['emoji' => '🌽', 'text' => 'Jagung Manis Kuning', 'is_correct' => true],
                            ['emoji' => '🍇', 'text' => 'Anggur Ungu', 'is_correct' => false],
                            ['emoji' => '🍍', 'text' => 'Nanas Emas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran hijau yang bentuknya unik mirip pohon cilik rindang adalah...?',
                        'audio' => 'Sayuran hijau yang bentuknya unik mirip pohon cilik rindang adalah apa?',
                        'emoji' => '🥦',
                        'options' => [
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau Si Pohon Cilik', 'is_correct' => true],
                            ['emoji' => '🥭', 'text' => 'Mangga Harum', 'is_correct' => false],
                            ['emoji' => '🌽', 'text' => 'Jagung Manis', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'buah',
                'level_number' => 2,
                'title' => 'Manfaat Alpukat, Melon & Sayur Hijau',
                'slug' => 'kuis-buah-l2-alpukat-melon-sayur-hijau',
                'icon_emoji' => '🥑',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Buah berkulit hijau dengan daging lembut gurih berlemak baik untuk otak adalah...?',
                        'audio' => 'Buah berkulit hijau dengan daging lembut gurih berlemak baik untuk otak adalah apa?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🥑', 'text' => 'Alpukat Hijau Gurih', 'is_correct' => true],
                            ['emoji' => '🍍', 'text' => 'Nanas Mahkota', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur Ungu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah bulat wangi manis dengan daging buah hijau muda yang lembut menyegarkan adalah...?',
                        'audio' => 'Buah bulat wangi manis dengan daging buah hijau muda yang lembut menyegarkan adalah apa?',
                        'emoji' => '🍈',
                        'options' => [
                            ['emoji' => '🍈', 'text' => 'Melon Hijau Manis Segar', 'is_correct' => true],
                            ['emoji' => '🌽', 'text' => 'Jagung Manis', 'is_correct' => false],
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran apakah yang sering disebut "Si Pohon Cilik Rindang" karena kaya vitamin?',
                        'audio' => 'Sayuran apakah yang sering disebut si pohon cilik rindang karena kaya vitamin?',
                        'emoji' => '🥦',
                        'options' => [
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau', 'is_correct' => true],
                            ['emoji' => '🥑', 'text' => 'Alpukat', 'is_correct' => false],
                            ['emoji' => '🥭', 'text' => 'Mangga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Makanan jagung manis paling lezat dinikmati dengan cara...?',
                        'audio' => 'Makanan jagung manis paling lezat dinikmati dengan cara apa?',
                        'emoji' => '🌽',
                        'options' => [
                            ['emoji' => '🌽', 'text' => 'Direbus atau dibakar manis hangat', 'is_correct' => true],
                            ['emoji' => '🪨', 'text' => 'Dibiarkan mengeras kotor', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Tidak dimasak sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah buah yang memiliki biji bulat besar di bagian tengahnya?',
                        'audio' => 'Manakah buah yang memiliki biji bulat besar di bagian tengahnya?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🥑', 'text' => 'Alpukat Gurih', 'is_correct' => true],
                            ['emoji' => '🍇', 'text' => 'Anggur', 'is_correct' => false],
                            ['emoji' => '🍓', 'text' => 'Stroberi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'buah',
                'level_number' => 2,
                'title' => 'Eksplorasi Cita Rasa & Warna Buah Kebun',
                'slug' => 'kuis-buah-l2-cita-rasa-warna-buah',
                'icon_emoji' => '🌽',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok buah dan sayuran yang berwarna ungu dan hijau segar?',
                        'audio' => 'Manakah kelompok buah dan sayuran yang berwarna ungu dan hijau segar?',
                        'emoji' => '🍇',
                        'options' => [
                            ['emoji' => '🍇', 'text' => 'Anggur Ungu & Brokoli Hijau', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang & Jagung', 'is_correct' => false],
                            ['emoji' => '🍎', 'text' => 'Apel & Stroberi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah nanas memiliki hiasan daun alami di bagian atasnya yang menyerupai...?',
                        'audio' => 'Buah nanas memiliki hiasan daun alami di bagian atasnya yang menyerupai apa?',
                        'emoji' => '🍍',
                        'options' => [
                            ['emoji' => '🍍', 'text' => 'Mahkota Raja yang Indah', 'is_correct' => true],
                            ['emoji' => '🪶', 'text' => 'Sayap Burung', 'is_correct' => false],
                            ['emoji' => '🎩', 'text' => 'Topi Pesulap', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita dianjurkan rajin makan buah dan sayuran setiap hari?',
                        'audio' => 'Mengapa kita dianjurkan rajin makan buah dan sayuran setiap hari?',
                        'emoji' => '💪',
                        'options' => [
                            ['emoji' => '💪', 'text' => 'Agar tubuh sehat, kuat, dan tidak mudah sakit', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar cepat mengantuk dan malas', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada manfaatnya sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah buah yang tumbuh bergerombol di satu tangkai ranting pohon?',
                        'audio' => 'Manakah buah yang tumbuh bergerombol di satu tangkai ranting pohon?',
                        'emoji' => '🍇',
                        'options' => [
                            ['emoji' => '🍇', 'text' => 'Anggur Ungu', 'is_correct' => true],
                            ['emoji' => '🍉', 'text' => 'Semangka Besar', 'is_correct' => false],
                            ['emoji' => '🍍', 'text' => 'Nanas Emas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah mangga yang sudah matang biasanya memiliki rasa yang...?',
                        'audio' => 'Buah mangga yang sudah matang biasanya memiliki rasa apa?',
                        'emoji' => '🥭',
                        'options' => [
                            ['emoji' => '🥭', 'text' => 'Manis, lembut, dan segar', 'is_correct' => true],
                            ['emoji' => '🧂', 'text' => 'Sangat asin seperti garam', 'is_correct' => false],
                            ['emoji' => '☕', 'text' => 'Pahit seperti jamu', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (BUAH TROPIS, VITAMIN & NUTRISI) ---
            [
                'category_slug' => 'buah',
                'level_number' => 3,
                'title' => 'Juara Buah Tropis & Vitamin Alami',
                'slug' => 'kuis-buah-l3-buah-tropis-vitamin-alami',
                'icon_emoji' => '🥥',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Buah berkulit keras di pohon pantai tinggi yang airnya sangat segar melegakan dahaga adalah...?',
                        'audio' => 'Buah berkulit keras di pohon pantai tinggi yang airnya sangat segar melegakan dahaga adalah apa?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '🥥', 'text' => 'Kelapa Muda Segar', 'is_correct' => true],
                            ['emoji' => '🥝', 'text' => 'Kiwi Hijau', 'is_correct' => false],
                            ['emoji' => '🍒', 'text' => 'Ceri Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah berkulit cokelat berbulu dengan daging hijau berbintik hitam yang kaya vitamin C adalah...?',
                        'audio' => 'Buah berkulit cokelat berbulu dengan daging hijau berbintik hitam yang kaya vitamin C adalah apa?',
                        'emoji' => '🥝',
                        'options' => [
                            ['emoji' => '🥝', 'text' => 'Kiwi Hijau Berbintik', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Kelapa Muda', 'is_correct' => false],
                            ['emoji' => '🍋', 'text' => 'Lemon Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah mungil merah mengkilap yang sering tumbuh berpasangan kembar di tangkai adalah...?',
                        'audio' => 'Buah mungil merah mengkilap yang sering tumbuh berpasangan kembar di tangkai adalah apa?',
                        'emoji' => '🍒',
                        'options' => [
                            ['emoji' => '🍒', 'text' => 'Ceri Merah Berpasangan', 'is_correct' => true],
                            ['emoji' => '🥒', 'text' => 'Mentimun', 'is_correct' => false],
                            ['emoji' => '🫑', 'text' => 'Paprika', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah kuning cerah yang kaya vitamin C dan membuat minuman terasa asam segar adalah...?',
                        'audio' => 'Buah kuning cerah yang kaya vitamin C dan membuat minuman terasa asam segar adalah apa?',
                        'emoji' => '🍋',
                        'options' => [
                            ['emoji' => '🍋', 'text' => 'Lemon Kuning Asam Segar', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Kelapa Muda', 'is_correct' => false],
                            ['emoji' => '🥑', 'text' => 'Alpukat Gurih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran hijau panjang berair yang dingin menyegarkan dan baik untuk pencernaan adalah...?',
                        'audio' => 'Sayuran hijau panjang berair yang dingin menyegarkan dan baik untuk pencernaan adalah apa?',
                        'emoji' => '🥒',
                        'options' => [
                            ['emoji' => '🥒', 'text' => 'Mentimun Hijau Segar', 'is_correct' => true],
                            ['emoji' => '🍒', 'text' => 'Ceri Merah', 'is_correct' => false],
                            ['emoji' => '🍋', 'text' => 'Lemon Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran berbentuk lonceng cerah yang memiliki warna merah, kuning, dan hijau adalah...?',
                        'audio' => 'Sayuran berbentuk lonceng cerah yang memiliki warna merah kuning dan hijau adalah apa?',
                        'emoji' => '🫑',
                        'options' => [
                            ['emoji' => '🫑', 'text' => 'Paprika Warna-Warni', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Kelapa Muda', 'is_correct' => false],
                            ['emoji' => '🥝', 'text' => 'Kiwi Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa buah jeruk, lemon, dan kiwi sangat penting dikonsumsi tubuh kita?',
                        'audio' => 'Mengapa buah jeruk, lemon, dan kiwi sangat penting dikonsumsi tubuh kita?',
                        'emoji' => '🍋',
                        'options' => [
                            ['emoji' => '🍋', 'text' => 'Kaya vitamin C untuk daya tahan tubuh kuat', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Membuat tubuh lemas dan lelah', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak memiliki vitamin apa pun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian buah kelapa manakah yang biasa diminum langsung untuk menyegarkan tubuh?',
                        'audio' => 'Bagian buah kelapa manakah yang biasa diminum langsung untuk menyegarkan tubuh?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '🥥', 'text' => 'Air kelapa murni di dalam buah', 'is_correct' => true],
                            ['emoji' => '🪨', 'text' => 'Sabut kelapa kering', 'is_correct' => false],
                            ['emoji' => '🪵', 'text' => 'Batang pohon kelapa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran apakah yang biasa diiris tipis untuk lalapan dan masker alami penyegar mata?',
                        'audio' => 'Sayuran apakah yang biasa diiris tipis untuk lalapan dan masker alami penyegar mata?',
                        'emoji' => '🥒',
                        'options' => [
                            ['emoji' => '🥒', 'text' => 'Mentimun Segar', 'is_correct' => true],
                            ['emoji' => '🍋', 'text' => 'Lemon Kuning', 'is_correct' => false],
                            ['emoji' => '🍒', 'text' => 'Ceri Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah mungil apakah yang sering digunakan sebagai hiasan manis di atas kue ulang tahun?',
                        'audio' => 'Buah mungil apakah yang sering digunakan sebagai hiasan manis di atas kue ulang tahun?',
                        'emoji' => '🍒',
                        'options' => [
                            ['emoji' => '🍒', 'text' => 'Ceri Merah Berpasangan', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Kelapa Utuh', 'is_correct' => false],
                            ['emoji' => '🫑', 'text' => 'Paprika Lonceng', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'buah',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Buah, Sayur & Vitamin',
                'slug' => 'kuis-buah-l3-kelompok-buah-sayur-vitamin',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok makanan yang semuanya termasuk jenis buah manis?',
                        'audio' => 'Manakah kelompok makanan yang semuanya termasuk jenis buah manis?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Apel, Pisang, Anggur', 'is_correct' => true],
                            ['emoji' => '🥕', 'text' => 'Wortel, Brokoli, Mentimun', 'is_correct' => false],
                            ['emoji' => '🥔', 'text' => 'Kentang, Tomat, Bawang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok makanan yang semuanya termasuk jenis sayuran sehat?',
                        'audio' => 'Manakah kelompok makanan yang semuanya termasuk jenis sayuran sehat?',
                        'emoji' => '🥦',
                        'options' => [
                            ['emoji' => '🥦', 'text' => 'Brokoli, Wortel, Mentimun', 'is_correct' => true],
                            ['emoji' => '🍉', 'text' => 'Semangka, Stroberi, Mangga', 'is_correct' => false],
                            ['emoji' => '🍍', 'text' => 'Nanas, Pisang, Apel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah sayuran yang berwarna oranye dan sangat kaya akan vitamin A untuk kesehatan mata?',
                        'audio' => 'Manakah sayuran yang berwarna oranye dan sangat kaya akan vitamin A untuk kesehatan mata?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🥕', 'text' => 'Wortel Oranye Renyah', 'is_correct' => true],
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau', 'is_correct' => false],
                            ['emoji' => '🫑', 'text' => 'Paprika Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah buah yang berukuran paling besar dan memiliki biji banyak di dalamnya?',
                        'audio' => 'Manakah buah yang berukuran paling besar dan memiliki biji banyak di dalamnya?',
                        'emoji' => '🍉',
                        'options' => [
                            ['emoji' => '🍉', 'text' => 'Semangka Merah', 'is_correct' => true],
                            ['emoji' => '🍒', 'text' => 'Ceri Mungil', 'is_correct' => false],
                            ['emoji' => '🍓', 'text' => 'Stroberi Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah buah yang kulitnya harus dikupas sebelum dimakan daging buahnya yang lembut?',
                        'audio' => 'Manakah buah yang kulitnya harus dikupas sebelum dimakan daging buahnya yang lembut?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🍌', 'text' => 'Pisang & Alpukat', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Apel & Ceri', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur & Stroberi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran hijau apakah yang kaya serat dan berbentuk mirip pohon cilik?',
                        'audio' => 'Sayuran hijau apakah yang kaya serat dan berbentuk mirip pohon cilik?',
                        'emoji' => '🥦',
                        'options' => [
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau Sehat', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang Kuning', 'is_correct' => false],
                            ['emoji' => '🍉', 'text' => 'Semangka Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah manakah yang memiliki rasa asam segar dan biasa diperas menjadi minuman limun hangat?',
                        'audio' => 'Buah manakah yang memiliki rasa asam segar dan biasa diperas menjadi minuman limun hangat?',
                        'emoji' => '🍋',
                        'options' => [
                            ['emoji' => '🍋', 'text' => 'Lemon Kuning Segar', 'is_correct' => true],
                            ['emoji' => '🥑', 'text' => 'Alpukat Gurih', 'is_correct' => false],
                            ['emoji' => '🥥', 'text' => 'Kelapa Muda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah pasangan buah yang sama-sama berwarna merah cerah saat matang?',
                        'audio' => 'Manakah pasangan buah yang sama-sama berwarna merah cerah saat matang?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Apel & Stroberi', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang & Lemon', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur & Kiwi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus kita lakukan sebelum memakan buah atau sayuran segar?',
                        'audio' => 'Apa yang harus kita lakukan sebelum memakan buah atau sayuran segar?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Mencucinya dengan air bersih mengalir', 'is_correct' => true],
                            ['emoji' => '🚫', 'text' => 'Langsung memakannya dalam keadaan kotor', 'is_correct' => false],
                            ['emoji' => '🗑️', 'text' => 'Membuangnya ke tempat sampah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa makan sayur dan buah membuat kita cerdas dan berenergi di sekolah?',
                        'audio' => 'Mengapa makan sayur dan buah membuat kita cerdas dan berenergi di sekolah?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena kaya vitamin, mineral, dan nutrisi alami', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Karena membuat mengantuk dan malas', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak memiliki pengaruh apa pun', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'buah',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Nutrisi Buah & Sayur Ceria',
                'slug' => 'kuis-buah-l3-grand-master-nutrisi-ceria',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Buah renyah berwarna merah yang terkenal sangat menyehatkan tubuh adalah...?',
                        'audio' => 'Buah renyah berwarna merah yang terkenal sangat menyehatkan tubuh adalah apa?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Apel Merah Manis', 'is_correct' => true],
                            ['emoji' => '🌽', 'text' => 'Jagung Manis', 'is_correct' => false],
                            ['emoji' => '🥒', 'text' => 'Mentimun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran apakah yang bentuknya seperti mahkota pohon hijau kecil dan kaya nutrisi?',
                        'audio' => 'Sayuran apakah yang bentuknya seperti mahkota pohon hijau kecil dan kaya nutrisi?',
                        'emoji' => '🥦',
                        'options' => [
                            ['emoji' => '🥦', 'text' => 'Brokoli Hijau Sehat', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang Kuning', 'is_correct' => false],
                            ['emoji' => '🥥', 'text' => 'Kelapa Muda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Minuman segar alami dari pohon pantai tropis yang kaya mineral alami adalah...?',
                        'audio' => 'Minuman segar alami dari pohon pantai tropis yang kaya mineral alami adalah apa?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '🥥', 'text' => 'Air Kelapa Muda Segar', 'is_correct' => true],
                            ['emoji' => '🥫', 'text' => 'Minuman Kaleng Bersoda', 'is_correct' => false],
                            ['emoji' => '☕', 'text' => 'Kopi Pahit Panas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sayuran renyah yang membuat kelinci lincah dan mata kita jernih adalah...?',
                        'audio' => 'Sayuran renyah yang membuat kelinci lincah dan mata kita jernih adalah apa?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🥕', 'text' => 'Wortel Oranye Renyah', 'is_correct' => true],
                            ['emoji' => '🍉', 'text' => 'Semangka Berair', 'is_correct' => false],
                            ['emoji' => '🍍', 'text' => 'Nanas Emas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah berdaging hijau gurih berlemak baik yang lezat dibuat jus alpukat adalah...?',
                        'audio' => 'Buah berdaging hijau gurih berlemak baik yang lezat dibuat jus alpukat adalah apa?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🥑', 'text' => 'Alpukat Hijau Gurih', 'is_correct' => true],
                            ['emoji' => '🍋', 'text' => 'Lemon Asam', 'is_correct' => false],
                            ['emoji' => '🌶️', 'text' => 'Cabai Pedas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah apakah yang bagian luarnya memiliki mahkota daun hijau berduri kecil?',
                        'audio' => 'Buah apakah yang bagian luarnya memiliki mahkota daun hijau berduri kecil?',
                        'emoji' => '🍍',
                        'options' => [
                            ['emoji' => '🍍', 'text' => 'Nanas Mahkota Emas', 'is_correct' => true],
                            ['emoji' => '🥭', 'text' => 'Mangga Harum', 'is_correct' => false],
                            ['emoji' => '🍎', 'text' => 'Apel Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah semangka memiliki rasa yang sangat menyegarkan karena banyak mengandung...?',
                        'audio' => 'Buah semangka memiliki rasa yang sangat menyegarkan karena banyak mengandung apa?',
                        'emoji' => '🍉',
                        'options' => [
                            ['emoji' => '🍉', 'text' => 'Air Alami dan Vitamin Segar', 'is_correct' => true],
                            ['emoji' => '🧂', 'text' => 'Garam Dapur Asin', 'is_correct' => false],
                            ['emoji' => '🌶️', 'text' => 'Rasa Pedas Panas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah kecil merah mengkilap yang sering ditaruh di puncak kue tart manis adalah...?',
                        'audio' => 'Buah kecil merah mengkilap yang sering ditaruh di puncak kue tart manis adalah apa?',
                        'emoji' => '🍒',
                        'options' => [
                            ['emoji' => '🍒', 'text' => 'Ceri Merah Berpasangan', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Kelapa Utuh', 'is_correct' => false],
                            ['emoji' => '🥑', 'text' => 'Alpukat Gurih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana sikap anak hebat yang ingin tubuhnya tumbuh tinggi dan sehat kuat?',
                        'audio' => 'Bagaimana sikap anak hebat yang ingin tubuhnya tumbuh tinggi dan sehat kuat?',
                        'emoji' => '🥗',
                        'options' => [
                            ['emoji' => '🥗', 'text' => 'Gemar makan aneka buah dan sayuran segar setiap hari', 'is_correct' => true],
                            ['emoji' => '🍟', 'text' => 'Hanya mau makan permen manis', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Selalu menolak makan sayur di rumah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar hebat apakah untuk anak pintar yang gemar makan buah dan sayuran segar?',
                        'audio' => 'Gelar hebat apakah untuk anak pintar yang gemar makan buah dan sayuran segar?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Juara Cilik Sehat & Sahabat Nutrisi Hebat!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk dan Malas', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Kebun yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'title' => 'Tebak Warna Indah Ceria',
                'slug' => 'tebak-warna',
                'icon_emoji' => '🎨',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Warna apakah yang sama seperti warna buah apel merah yang matang?',
                        'audio' => 'Warna apakah yang sama seperti warna buah apel merah yang matang?',
                        'emoji' => '🔴',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah bentuk bangun geometri yang bulat sempurna seperti roda?',
                        'audio' => 'Manakah bentuk bangun geometri yang bulat sempurna seperti roda?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '🔺', 'text' => 'Segitiga', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Lingkaran', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Kotak Persegi', 'is_correct' => false],
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
                        'text' => 'Kendaraan apakah yang terbang tinggi di angkasa dan memiliki sayap lebar?',
                        'audio' => 'Kendaraan apakah yang terbang tinggi di angkasa dan memiliki sayap lebar?',
                        'emoji' => '✈️',
                        'options' => [
                            ['emoji' => '✈️', 'text' => 'Pesawat Terbang', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Mobil', 'is_correct' => false],
                            ['emoji' => '🚲', 'text' => 'Sepeda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan panjang yang berjalan di atas rel besi dengan bunyi tut-tut adalah?',
                        'audio' => 'Kendaraan panjang yang berjalan di atas rel besi dengan bunyi tut-tut adalah?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚢', 'text' => 'Kapal Laut', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => true],
                            ['emoji' => '🚁', 'text' => 'Helikopter', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'title' => 'Tebak Benda di Sekitar Kita',
                'slug' => 'tebak-benda',
                'icon_emoji' => '🧸',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Benda apakah yang digunakan untuk menulis dan menggambar cita-cita?',
                        'audio' => 'Benda apakah yang digunakan untuk menulis dan menggambar cita-cita?',
                        'emoji' => '✏️',
                        'options' => [
                            ['emoji' => '✏️', 'text' => 'Pensil', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Sepatu', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Kursi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang berisi lembaran cerita bergambar yang seru?',
                        'audio' => 'Benda apakah yang berisi lembaran cerita bergambar yang seru?',
                        'emoji' => '📚',
                        'options' => [
                            ['emoji' => '🎒', 'text' => 'Tas', 'is_correct' => false],
                            ['emoji' => '📚', 'text' => 'Buku Cerita', 'is_correct' => true],
                            ['emoji' => '⏰', 'text' => 'Jam Dinding', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'title' => 'Tebak Bendera Sahabat Dunia',
                'slug' => 'tebak-bendera',
                'icon_emoji' => '🚩',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Manakah bendera negara kita tercinta, Indonesia?',
                        'audio' => 'Manakah bendera negara kita tercinta, Indonesia?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Merah Putih (Indonesia)', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang', 'is_correct' => false],
                            ['emoji' => '🇲🇾', 'text' => 'Malaysia', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara manakah yang berwarna putih dengan lingkaran merah di tengah?',
                        'audio' => 'Bendera negara manakah yang berwarna putih dengan lingkaran merah di tengah?',
                        'emoji' => '🇯🇵',
                        'options' => [
                            ['emoji' => '🇸🇦', 'text' => 'Arab Saudi', 'is_correct' => false],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang', 'is_correct' => true],
                            ['emoji' => '🇵🇸', 'text' => 'Palestina', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'title' => 'Tebak Anggota Tubuh Pintar',
                'slug' => 'tebak-tubuh',
                'icon_emoji' => '👀',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bagian tubuh manakah yang kita gunakan untuk melihat pemandangan indah?',
                        'audio' => 'Bagian tubuh manakah yang kita gunakan untuk melihat pemandangan indah?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Dua Mata', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang memiliki sepuluh jari untuk bertepuk tangan?',
                        'audio' => 'Bagian tubuh manakah yang memiliki sepuluh jari untuk bertepuk tangan?',
                        'emoji' => '✋',
                        'options' => [
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                            ['emoji' => '✋', 'text' => 'Dua Tangan', 'is_correct' => true],
                            ['emoji' => '👄', 'text' => 'Mulut', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 11: MENGENAL ALAT MUSIK (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL ---
            [
                'category_slug' => 'alat-musik',
                'level_number' => 1,
                'title' => 'Tebak Tuts Piano Cilik',
                'slug' => 'kuis-musik-l1-piano',
                'icon_emoji' => '🎹',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Alat musik bertuts hitam putih yang berbunyi ting-ting-ting adalah...?',
                        'audio' => 'Alat musik bertuts hitam putih yang berbunyi ting-ting-ting adalah apa?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Piano Tuts', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => 'Drum Pukul', 'is_correct' => false],
                            ['emoji' => '🔔', 'text' => 'Lonceng', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa warna tuts pada alat musik piano yang indah?',
                        'audio' => 'Apa warna tuts pada alat musik piano yang indah?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Hitam dan Putih', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Merah dan Biru', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Hijau dan Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara memainkan alat musik piano?',
                        'audio' => 'Bagaimana cara memainkan alat musik piano?',
                        'emoji' => '🖐️',
                        'options' => [
                            ['emoji' => '🖐️', 'text' => 'Menekan Tuts dengan Jari', 'is_correct' => true],
                            ['emoji' => '🦶', 'text' => 'Menendang dengan Kaki', 'is_correct' => false],
                            ['emoji' => '✂️', 'text' => 'Menggunting', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'alat-musik',
                'level_number' => 1,
                'title' => 'Tebak Irama Gitar & Drum',
                'slug' => 'kuis-musik-l1-gitar-drum',
                'icon_emoji' => '🎸',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Alat musik yang dimainkan dengan cara dipetik senarnya adalah...?',
                        'audio' => 'Alat musik yang dimainkan dengan cara dipetik senarnya adalah apa?',
                        'emoji' => '🎸',
                        'options' => [
                            ['emoji' => '🎸', 'text' => 'Gitar Petik', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => 'Drum Pukul', 'is_correct' => false],
                            ['emoji' => '📻', 'text' => 'Radio Musik', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik perkusi yang dipukul dengan stik berbunyi duk-duk-tak adalah...?',
                        'audio' => 'Alat musik perkusi yang dipukul dengan stik berbunyi duk-duk-tak adalah apa?',
                        'emoji' => '🥁',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Piano', 'is_correct' => false],
                            ['emoji' => '🥁', 'text' => 'Drum Pukul', 'is_correct' => true],
                            ['emoji' => '🎧', 'text' => 'Headphone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa stik pemukul yang biasa digunakan saat memainkan drum?',
                        'audio' => 'Berapa stik pemukul yang biasa digunakan saat memainkan drum?',
                        'emoji' => '🥢',
                        'options' => [
                            ['emoji' => '🥢', 'text' => '2 Stik Pemukul', 'is_correct' => true],
                            ['emoji' => '🔟', 'text' => '10 Stik', 'is_correct' => false],
                            ['emoji' => '0️⃣', 'text' => 'Tidak Pakai Stik', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'alat-musik',
                'level_number' => 1,
                'title' => 'Tebak Lonceng, Headphone & Radio',
                'slug' => 'kuis-musik-l1-suara-ceria',
                'icon_emoji' => '🔔',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Alat musik logam yang berbunyi kling-kling-kling saat digoyang adalah...?',
                        'audio' => 'Alat musik logam yang berbunyi kling-kling-kling saat digoyang adalah apa?',
                        'emoji' => '🔔',
                        'options' => [
                            ['emoji' => '🔔', 'text' => 'Lonceng Ceria', 'is_correct' => true],
                            ['emoji' => '🎸', 'text' => 'Gitar', 'is_correct' => false],
                            ['emoji' => '🥁', 'text' => 'Drum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat yang kita pasang di telinga untuk mendengarkan lagu kesayangan adalah...?',
                        'audio' => 'Alat yang kita pasang di telinga untuk mendengarkan lagu kesayangan adalah apa?',
                        'emoji' => '🎧',
                        'options' => [
                            ['emoji' => '🎧', 'text' => 'Headphone Musik', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Sepatu', 'is_correct' => false],
                            ['emoji' => '🧢', 'text' => 'Topi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kotak ajaib yang bisa memutar lagu anak-anak dan dongeng seru adalah...?',
                        'audio' => 'Kotak ajaib yang bisa memutar lagu anak-anak dan dongeng seru adalah apa?',
                        'emoji' => '📻',
                        'options' => [
                            ['emoji' => '📻', 'text' => 'Radio Musik', 'is_correct' => true],
                            ['emoji' => '🪑', 'text' => 'Meja Belajar', 'is_correct' => false],
                            ['emoji' => '🚪', 'text' => 'Pintu Rumah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL ---
            [
                'category_slug' => 'alat-musik',
                'level_number' => 2,
                'title' => 'Eksplorasi Terompet & Biola Indah',
                'slug' => 'kuis-musik-l2-tiup-gesek',
                'icon_emoji' => '🎺',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Alat musik tiup dari logam kuningan yang bersuara lantang tet-tooot adalah...?',
                        'audio' => 'Alat musik tiup dari logam kuningan yang bersuara lantang tet-tooot adalah apa?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => 'Terompet Tiup', 'is_correct' => true],
                            ['emoji' => '🎻', 'text' => 'Biola Gesek', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => 'Piano Tuts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik dawai kayu yang dimainkan dengan cara digesek memakai busur adalah...?',
                        'audio' => 'Alat musik dawai kayu yang dimainkan dengan cara digesek memakai busur adalah apa?',
                        'emoji' => '🎻',
                        'options' => [
                            ['emoji' => '🎻', 'text' => 'Biola Gesek', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => 'Drum Pukul', 'is_correct' => false],
                            ['emoji' => '🔔', 'text' => 'Lonceng', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di manakah posisi meletakkan biola saat hendak digesek?',
                        'audio' => 'Di manakah posisi meletakkan biola saat hendak digesek?',
                        'emoji' => '🎻',
                        'options' => [
                            ['emoji' => '🎻', 'text' => 'Di antara Bahu dan Dagu', 'is_correct' => true],
                            ['emoji' => '🦶', 'text' => 'Di Telapak Kaki', 'is_correct' => false],
                            ['emoji' => '🎒', 'text' => 'Di dalam Tas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara membunyikan terompet logam?',
                        'audio' => 'Bagaimana cara membunyikan terompet logam?',
                        'emoji' => '💨',
                        'options' => [
                            ['emoji' => '💨', 'text' => 'Ditiup dengan Mulut', 'is_correct' => true],
                            ['emoji' => '🥢', 'text' => 'Dipukul dengan Kayu', 'is_correct' => false],
                            ['emoji' => '✂️', 'text' => 'Digunting', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Dari bahan apakah terompet musik umumnya dibuat?',
                        'audio' => 'Dari bahan apakah terompet musik umumnya dibuat?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => 'Logam Kuningan Emas', 'is_correct' => true],
                            ['emoji' => '🍰', 'text' => 'Kue Cokelat', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Kali', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'alat-musik',
                'level_number' => 2,
                'title' => 'Petualangan Saxophone & Banjo Ceria',
                'slug' => 'kuis-musik-l2-sax-banjo',
                'icon_emoji' => '🎷',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Alat musik tiup keemasan dengan suara jazz melengkung merdu adalah...?',
                        'audio' => 'Alat musik tiup keemasan dengan suara jazz melengkung merdu adalah apa?',
                        'emoji' => '🎷',
                        'options' => [
                            ['emoji' => '🎷', 'text' => 'Saxophone', 'is_correct' => true],
                            ['emoji' => '🎸', 'text' => 'Gitar Petik', 'is_correct' => false],
                            ['emoji' => '📻', 'text' => 'Radio Musik', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik petik yang memiliki badan berbentuk lingkaran bundar adalah...?',
                        'audio' => 'Alat musik petik yang memiliki badan berbentuk lingkaran bundar adalah apa?',
                        'emoji' => '🪕',
                        'options' => [
                            ['emoji' => '🪕', 'text' => 'Banjo Ceria', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => 'Drum', 'is_correct' => false],
                            ['emoji' => '🔔', 'text' => 'Lonceng', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Melalui bagian manakah pemain meniup alat musik saxophone?',
                        'audio' => 'Melalui bagian manakah pemain meniup alat musik saxophone?',
                        'emoji' => '🎷',
                        'options' => [
                            ['emoji' => '🎷', 'text' => 'Corong Tiup di Atas', 'is_correct' => true],
                            ['emoji' => '🦶', 'text' => 'Ujung Bawah', 'is_correct' => false],
                            ['emoji' => '🎒', 'text' => 'Tali Pegangan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa bentuk badan utama dari alat musik banjo?',
                        'audio' => 'Apa bentuk badan utama dari alat musik banjo?',
                        'emoji' => '🪕',
                        'options' => [
                            ['emoji' => '🪕', 'text' => 'Bulat Melingkar', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Segitiga Runcing', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bintang Bersegi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah yang termasuk pasangan dua alat musik tiup?',
                        'audio' => 'Manakah yang termasuk pasangan dua alat musik tiup?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => '🎷 Saxophone & 🎺 Terompet', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => '🥁 Drum & 🎸 Gitar', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => '🎹 Piano & 🔔 Lonceng', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'alat-musik',
                'level_number' => 2,
                'title' => 'Tantangan Speaker & Not Balok Nada',
                'slug' => 'kuis-musik-l2-speaker-nada',
                'icon_emoji' => '🔊',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Pengeras suara agar musik terdengar menggelegar ke seluruh ruangan adalah...?',
                        'audio' => 'Pengeras suara agar musik terdengar menggelegar ke seluruh ruangan adalah apa?',
                        'emoji' => '🔊',
                        'options' => [
                            ['emoji' => '🔊', 'text' => 'Speaker Musik', 'is_correct' => true],
                            ['emoji' => '✏️', 'text' => 'Pensil Gambar', 'is_correct' => false],
                            ['emoji' => '🍎', 'text' => 'Apel Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Simbol tanda nada untuk menuliskan melodi lagu adalah...?',
                        'audio' => 'Simbol tanda nada untuk menuliskan melodi lagu adalah apa?',
                        'emoji' => '🎵',
                        'options' => [
                            ['emoji' => '🎵', 'text' => 'Not Balok Musik', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Mobil Balap', 'is_correct' => false],
                            ['emoji' => '🏠', 'text' => 'Rumah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa fungsi utama dari alat speaker pengeras suara?',
                        'audio' => 'Apa fungsi utama dari alat speaker pengeras suara?',
                        'emoji' => '🔊',
                        'options' => [
                            ['emoji' => '🔊', 'text' => 'Mengeraskan Suara Lagu', 'is_correct' => true],
                            ['emoji' => '🧹', 'text' => 'Menyapu Lantai', 'is_correct' => false],
                            ['emoji' => '🍳', 'text' => 'Memasak Nasi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah gambar simbol not balok musik ceria?',
                        'audio' => 'Manakah gambar simbol not balok musik ceria?',
                        'emoji' => '🎵',
                        'options' => [
                            ['emoji' => '🎵', 'text' => 'Not Musik (🎵)', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bola Sepak (⚽)', 'is_correct' => false],
                            ['emoji' => '🎈', 'text' => 'Balon Terbang (🎈)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang kita lakukan saat mendengar alunan lagu ceria dari speaker?',
                        'audio' => 'Apa yang kita lakukan saat mendengar alunan lagu ceria dari speaker?',
                        'emoji' => '💃',
                        'options' => [
                            ['emoji' => '💃', 'text' => 'Menari & Bernyanyi Bahagia', 'is_correct' => true],
                            ['emoji' => '😭', 'text' => 'Menangis Sedih', 'is_correct' => false],
                            ['emoji' => '😡', 'text' => 'Marah-marah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL ---
            [
                'category_slug' => 'alat-musik',
                'level_number' => 3,
                'title' => 'Master Akordeon & Kendang Tradisional',
                'slug' => 'kuis-musik-l3-akordeon-kendang',
                'icon_emoji' => '🪗',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Alat musik unik yang dimainkan dengan cara ditarik dan didorong memompa udara adalah...?',
                        'audio' => 'Alat musik unik yang dimainkan dengan cara ditarik dan didorong memompa udara adalah apa?',
                        'emoji' => '🪗',
                        'options' => [
                            ['emoji' => '🪗', 'text' => 'Akordeon Lipat', 'is_correct' => true],
                            ['emoji' => '🎸', 'text' => 'Gitar', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => 'Piano', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik tradisional berkulit yang ditabuh dengan telapak tangan adalah...?',
                        'audio' => 'Alat musik tradisional berkulit yang ditabuh dengan telapak tangan adalah apa?',
                        'emoji' => '🪘',
                        'options' => [
                            ['emoji' => '🪘', 'text' => 'Kendang Nusantara', 'is_correct' => true],
                            ['emoji' => '🎺', 'text' => 'Terompet', 'is_correct' => false],
                            ['emoji' => '🎻', 'text' => 'Biola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara menghasilkan suara pada alat musik akordeon?',
                        'audio' => 'Bagaimana cara menghasilkan suara pada alat musik akordeon?',
                        'emoji' => '🪗',
                        'options' => [
                            ['emoji' => '🪗', 'text' => 'Ditarik & Didorong Udaranya', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Digunting', 'is_correct' => false],
                            ['emoji' => '🦶', 'text' => 'Diinjak-injak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Anggota tubuh manakah yang digunakan langsung untuk menabuh kendang?',
                        'audio' => 'Anggota tubuh manakah yang digunakan langsung untuk menabuh kendang?',
                        'emoji' => '🖐️',
                        'options' => [
                            ['emoji' => '🖐️', 'text' => 'Telapak Tangan', 'is_correct' => true],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik tiup melingkar yang bersuara gagah dan bergema jauh adalah...?',
                        'audio' => 'Alat musik tiup melingkar yang bersuara gagah dan bergema jauh adalah apa?',
                        'emoji' => '📯',
                        'options' => [
                            ['emoji' => '📯', 'text' => 'Terompet Tanduk (Horn)', 'is_correct' => true],
                            ['emoji' => '🔔', 'text' => 'Lonceng', 'is_correct' => false],
                            ['emoji' => '📻', 'text' => 'Radio', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah yang termasuk alat musik perkusi tradisional di Indonesia?',
                        'audio' => 'Manakah yang termasuk alat musik perkusi tradisional di Indonesia?',
                        'emoji' => '🪘',
                        'options' => [
                            ['emoji' => '🪘', 'text' => 'Kendang', 'is_correct' => true],
                            ['emoji' => '🎸', 'text' => 'Gitar Listrik', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => 'Piano Besar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Akordeon memiliki bagian lipatan di tengah yang berfungsi untuk...?',
                        'audio' => 'Akordeon memiliki bagian lipatan di tengah yang berfungsi untuk apa?',
                        'emoji' => '🪗',
                        'options' => [
                            ['emoji' => '💨', 'text' => 'Memompa Udara Nada', 'is_correct' => true],
                            ['emoji' => '💧', 'text' => 'Menyimpan Air Minum', 'is_correct' => false],
                            ['emoji' => '🥪', 'text' => 'Menaruh Makanan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah dua alat musik yang sama-sama dimainkan dengan cara dipetik?',
                        'audio' => 'Manakah dua alat musik yang sama-sama dimainkan dengan cara dipetik?',
                        'emoji' => '🎸',
                        'options' => [
                            ['emoji' => '🎸', 'text' => '🎸 Gitar & 🪕 Banjo', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => '🥁 Drum & 🎺 Terompet', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => '🎹 Piano & 🔔 Lonceng', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah dua alat musik yang sama-sama dimainkan dengan cara dipukul / ditabuh?',
                        'audio' => 'Manakah dua alat musik yang sama-sama dimainkan dengan cara dipukul atau ditabuh?',
                        'emoji' => '🥁',
                        'options' => [
                            ['emoji' => '🥁', 'text' => '🥁 Drum & 🪘 Kendang', 'is_correct' => true],
                            ['emoji' => '🎻', 'text' => '🎻 Biola & 🎷 Saxophone', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => '🎹 Piano & 🎸 Gitar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok tiga alat musik tiup yang tepat?',
                        'audio' => 'Manakah kelompok tiga alat musik tiup yang tepat?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => '🎺 Terompet, 🎷 Saxophone & 📯 Tanduk', 'is_correct' => true],
                            ['emoji' => '🎸', 'text' => '🎸 Gitar, 🪕 Banjo & 🎻 Biola', 'is_correct' => false],
                            ['emoji' => '🥁', 'text' => '🥁 Drum, 🪘 Kendang & 🔔 Lonceng', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'alat-musik',
                'level_number' => 3,
                'title' => 'Tantangan Partitur, Mikrofon & Do-Re-Mi',
                'slug' => 'kuis-musik-l3-partitur-vokal',
                'icon_emoji' => '🎼',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Alat pengeras suara untuk bernyanyi lagu ceria bersama teman adalah...?',
                        'audio' => 'Alat pengeras suara untuk bernyanyi lagu ceria bersama teman adalah apa?',
                        'emoji' => '🎙️',
                        'options' => [
                            ['emoji' => '🎙️', 'text' => 'Mikrofon Vokal', 'is_correct' => true],
                            ['emoji' => '🎒', 'text' => 'Tas Sekolah', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buku lembaran kertas yang berisi garis paranada dan not balok lagu adalah...?',
                        'audio' => 'Buku lembaran kertas yang berisi garis paranada dan not balok lagu adalah apa?',
                        'emoji' => '🎼',
                        'options' => [
                            ['emoji' => '🎼', 'text' => 'Partitur Musik', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Peta Mobil', 'is_correct' => false],
                            ['emoji' => '🍎', 'text' => 'Kotak Bekal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Urutan tangga nada musik yang harmonis dimulai dari nada apa?',
                        'audio' => 'Urutan tangga nada musik yang harmonis dimulai dari nada apa?',
                        'emoji' => '🎶',
                        'options' => [
                            ['emoji' => '🎶', 'text' => 'Do - Re - Mi', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => 'Satu - Dua - Tiga', 'is_correct' => false],
                            ['emoji' => '🅰️', 'text' => 'A - B - C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa kegunaan utama dari mikrofon di atas panggung musik?',
                        'audio' => 'Apa kegunaan utama dari mikrofon di atas panggung musik?',
                        'emoji' => '🎙️',
                        'options' => [
                            ['emoji' => '🎙️', 'text' => 'Memperjelas Suara Penyanyi', 'is_correct' => true],
                            ['emoji' => '🧹', 'text' => 'Membersihkan Debu', 'is_correct' => false],
                            ['emoji' => '🥤', 'text' => 'Tempat Minum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang dibaca oleh seorang pemusik saat memainkan orkestra lagu?',
                        'audio' => 'Apa yang dibaca oleh seorang pemusik saat memainkan orkestra lagu?',
                        'emoji' => '🎼',
                        'options' => [
                            ['emoji' => '🎼', 'text' => 'Partitur Not Lagu', 'is_correct' => true],
                            ['emoji' => '📖', 'text' => 'Buku Resep Masak', 'is_correct' => false],
                            ['emoji' => '📰', 'text' => 'Koran Berita', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutan urutan tangga nada berikut: Do, Re, Mi, Fa, ... ?',
                        'audio' => 'Lanjutan urutan tangga nada berikut: Do, Re, Mi, Fa, lalu nada apa?',
                        'emoji' => '🎶',
                        'options' => [
                            ['emoji' => '🎶', 'text' => 'Sol, La, Si, Do', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tidur Pulas', 'is_correct' => false],
                            ['emoji' => '🏃', 'text' => 'Lari Cepat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa jumlah nada utama dalam satu susunan tangga nada diatonis?',
                        'audio' => 'Berapa jumlah nada utama dalam satu susunan tangga nada diatonis?',
                        'emoji' => '7️⃣',
                        'options' => [
                            ['emoji' => '7️⃣', 'text' => '7 Nada (Do sampai Si)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Nada Saja', 'is_correct' => false],
                            ['emoji' => '0️⃣', 'text' => 'Tidak Ada Nada', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di manakah posisi seorang penyanyi memegang mikrofon saat bernyanyi?',
                        'audio' => 'Di manakah posisi seorang penyanyi memegang mikrofon saat bernyanyi?',
                        'emoji' => '🎙️',
                        'options' => [
                            ['emoji' => '🎙️', 'text' => 'Di Depan Mulut', 'is_correct' => true],
                            ['emoji' => '🦶', 'text' => 'Di Bawah Kaki', 'is_correct' => false],
                            ['emoji' => '🧢', 'text' => 'Di Atas Kepala', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Simbol apakah yang tersusun rapi di atas garis partitur musik?',
                        'audio' => 'Simbol apakah yang tersusun rapi di atas garis partitur musik?',
                        'emoji' => '🎵',
                        'options' => [
                            ['emoji' => '🎵', 'text' => 'Not Balok Nada (🎵)', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Buah-buahan', 'is_correct' => false],
                            ['emoji' => '🐱', 'text' => 'Kucing-kucingan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita bernyanyi lagu ceria bersama teman-teman?',
                        'audio' => 'Mengapa kita bernyanyi lagu ceria bersama teman-teman?',
                        'emoji' => '😄',
                        'options' => [
                            ['emoji' => '😄', 'text' => 'Membuat Hati Gembira & Semangat', 'is_correct' => true],
                            ['emoji' => '😭', 'text' => 'Supaya Menangis', 'is_correct' => false],
                            ['emoji' => '😡', 'text' => 'Supaya Bertengkar', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'alat-musik',
                'level_number' => 3,
                'title' => 'Grand Champion Maestro Musik PAUD',
                'slug' => 'kuis-musik-l3-grand-master',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Alat musik manakah yang dimainkan dengan cara digesek menggunakan busur?',
                        'audio' => 'Alat musik manakah yang dimainkan dengan cara digesek menggunakan busur?',
                        'emoji' => '🎻',
                        'options' => [
                            ['emoji' => '🎻', 'text' => 'Biola Gesek', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => 'Drum', 'is_correct' => false],
                            ['emoji' => '📻', 'text' => 'Radio', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik manakah yang memiliki tuts hitam dan tuts putih berjejer rapi?',
                        'audio' => 'Alat musik manakah yang memiliki tuts hitam dan tuts putih berjejer rapi?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Piano Tuts', 'is_correct' => true],
                            ['emoji' => '🎺', 'text' => 'Terompet', 'is_correct' => false],
                            ['emoji' => '🪕', 'text' => 'Banjo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik tiup logam berkilau keemasan dengan badan melengkung adalah...?',
                        'audio' => 'Alat musik tiup logam berkilau keemasan dengan badan melengkung adalah apa?',
                        'emoji' => '🎷',
                        'options' => [
                            ['emoji' => '🎷', 'text' => 'Saxophone Merdu', 'is_correct' => true],
                            ['emoji' => '🎸', 'text' => 'Gitar Petik', 'is_correct' => false],
                            ['emoji' => '🔔', 'text' => 'Lonceng', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik tradisional yang ditabuh langsung dengan telapak tangan adalah...?',
                        'audio' => 'Alat musik tradisional yang ditabuh langsung dengan telapak tangan adalah apa?',
                        'emoji' => '🪘',
                        'options' => [
                            ['emoji' => '🪘', 'text' => 'Kendang Nusantara', 'is_correct' => true],
                            ['emoji' => '🎧', 'text' => 'Headphone', 'is_correct' => false],
                            ['emoji' => '🎙️', 'text' => 'Mikrofon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik lipat unik yang ditarik dan didorong sambil memompa udara adalah...?',
                        'audio' => 'Alat musik lipat unik yang ditarik dan didorong sambil memompa udara adalah apa?',
                        'emoji' => '🪗',
                        'options' => [
                            ['emoji' => '🪗', 'text' => 'Akordeon Lipat', 'is_correct' => true],
                            ['emoji' => '🔔', 'text' => 'Lonceng Logam', 'is_correct' => false],
                            ['emoji' => '🔊', 'text' => 'Speaker', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah di antara pilihan berikut yang BUKAN merupakan alat musik tiup?',
                        'audio' => 'Manakah di antara pilihan berikut yang BUKAN merupakan alat musik tiup?',
                        'emoji' => '🥁',
                        'options' => [
                            ['emoji' => '🥁', 'text' => '🥁 Drum Pukul', 'is_correct' => true],
                            ['emoji' => '🎺', 'text' => '🎺 Terompet Tiup', 'is_correct' => false],
                            ['emoji' => '🎷', 'text' => '🎷 Saxophone Tiup', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat manakah yang kita pasang di telinga untuk mendengarkan lagu pribadi?',
                        'audio' => 'Alat manakah yang kita pasang di telinga untuk mendengarkan lagu pribadi?',
                        'emoji' => '🎧',
                        'options' => [
                            ['emoji' => '🎧', 'text' => 'Headphone Musik', 'is_correct' => true],
                            ['emoji' => '👞', 'text' => 'Sepatu Lari', 'is_correct' => false],
                            ['emoji' => '🧤', 'text' => 'Sarung Tangan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik perkusi manakah yang dipukul menggunakan dua stik kayu?',
                        'audio' => 'Alat musik perkusi manakah yang dipukul menggunakan dua stik kayu?',
                        'emoji' => '🥁',
                        'options' => [
                            ['emoji' => '🥁', 'text' => 'Drum Perkusi', 'is_correct' => true],
                            ['emoji' => '🎻', 'text' => 'Biola', 'is_correct' => false],
                            ['emoji' => '🎹', 'text' => 'Piano', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah alat musik petik yang bertubuh bundar seperti rebana?',
                        'audio' => 'Manakah alat musik petik yang bertubuh bundar seperti rebana?',
                        'emoji' => '🪕',
                        'options' => [
                            ['emoji' => '🪕', 'text' => 'Banjo Ceria', 'is_correct' => true],
                            ['emoji' => '📯', 'text' => 'Terompet Tanduk', 'is_correct' => false],
                            ['emoji' => '📻', 'text' => 'Radio Musik', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar hebat apakah untuk anak pintar yang menguasai seluruh instrumen musik?',
                        'audio' => 'Gelar hebat apakah untuk anak pintar yang menguasai seluruh instrumen musik?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Maestro Musik Cilik Juara', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Tidur Siang', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 2: ZONA BELAJAR MEMBACA
            // =========================================================================
            [
                'category_slug' => 'huruf-vokal',
                'title' => 'Tebak Bunyi Huruf Vokal',
                'slug' => 'kuis-huruf-vokal',
                'icon_emoji' => '🅰️',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf vokal apakah yang dibunyikan dengan tersenyum lebar: Iii?',
                        'audio' => 'Huruf vokal apakah yang dibunyikan dengan tersenyum lebar: Iii?',
                        'emoji' => 'ℹ️',
                        'options' => [
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang dibunyikan dengan bibir membulat ke depan: Uuu?',
                        'audio' => 'Huruf vokal apakah yang dibunyikan dengan bibir membulat ke depan: Uuu?',
                        'emoji' => '☂️',
                        'options' => [
                            ['emoji' => '📧', 'text' => 'Huruf E', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'title' => 'Tantangan Membaca 2 Suku Kata',
                'slug' => 'kuis-dua-suku-kata',
                'icon_emoji' => '🗣️',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'B-O Bo, L-A La. Jika digabungkan dibaca apa ya?',
                        'audio' => 'B-O Bo, L-A La. Jika digabungkan dibaca apa ya?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bo-la', 'is_correct' => true],
                            ['emoji' => '📖', 'text' => 'Bu-ku', 'is_correct' => false],
                            ['emoji' => '🐎', 'text' => 'Ku-da', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-U Bu, K-U Ku. Jika digabungkan dibaca apa ya?',
                        'audio' => 'B-U Bu, K-U Ku. Jika digabungkan dibaca apa ya?',
                        'emoji' => '📖',
                        'options' => [
                            ['emoji' => '🐄', 'text' => 'Sa-pi', 'is_correct' => false],
                            ['emoji' => '📖', 'text' => 'Bu-ku', 'is_correct' => true],
                            ['emoji' => '🍞', 'text' => 'Ro-ti', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'title' => 'Tantangan Membaca 3 Suku Kata',
                'slug' => 'kuis-tiga-suku-kata',
                'icon_emoji' => '📚',
                'target_age' => 5,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Se - Pe - Da. Kata ini dibaca apa ya?',
                        'audio' => 'Se - Pe - Da. Kata ini dibaca apa ya?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Sepeda', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Sepatu', 'is_correct' => false],
                            ['emoji' => '🥥', 'text' => 'Kelapa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ke - La - Pa. Kata ini dibaca apa ya?',
                        'audio' => 'Ke - La - Pa. Kata ini dibaca apa ya?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '👖', 'text' => 'Celana', 'is_correct' => false],
                            ['emoji' => '🥥', 'text' => 'Kelapa', 'is_correct' => true],
                            ['emoji' => '🐙', 'text' => 'Gurita', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'title' => 'Tebak Kata Berakhiran',
                'slug' => 'kuis-akhiran-konsonan',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'R-U Ru, M-A-H Mah. Kata ini dibaca apa?',
                        'audio' => 'R-U Ru, M-A-H Mah. Kata ini dibaca apa?',
                        'emoji' => '🏠',
                        'options' => [
                            ['emoji' => '🏠', 'text' => 'Ru-mah', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'A-yam', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'I-kan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'I, K-A-N Kan. Kata ini dibaca apa?',
                        'audio' => 'I, K-A-N Kan. Kata ini dibaca apa?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐦', 'text' => 'Bu-rung', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'I-kan', 'is_correct' => true],
                            ['emoji' => '🌳', 'text' => 'Po-hon', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'title' => 'Kuis Cerita Pendek Bergambar',
                'slug' => 'kuis-cerita-pendek',
                'icon_emoji' => '📖',
                'target_age' => 5,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Cerita: "Budi suka makan apel merah." Siapa yang suka makan apel merah?',
                        'audio' => 'Cerita: Budi suka makan apel merah. Siapa yang suka makan apel merah?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '👦', 'text' => 'Budi', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Kucing', 'is_correct' => false],
                            ['emoji' => '🐰', 'text' => 'Kelinci', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Kucing putih minum susu hangat." Apa yang diminum kucing?',
                        'audio' => 'Cerita: Kucing putih minum susu hangat. Apa yang diminum kucing?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🧃', 'text' => 'Jus Buah', 'is_correct' => false],
                            ['emoji' => '🥛', 'text' => 'Susu Hangat', 'is_correct' => true],
                            ['emoji' => '☕', 'text' => 'Teh Manis', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 3: ZONA BELAJAR MENGHITUNG
            // =========================================================================
            [
                'category_slug' => 'membilang',
                'title' => 'Kuis Membilang Benda',
                'slug' => 'kuis-membilang',
                'icon_emoji' => '🎈',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hitung ada berapa balon: 🎈 🎈 🎈 ?',
                        'audio' => 'Hitung ada berapa balon yang melayang?',
                        'emoji' => '🎈',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Balon', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Balon', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Balon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hitung ada berapa bintang: ⭐ ⭐ ?',
                        'audio' => 'Hitung ada berapa bintang emas yang berkilau?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '1️⃣', 'text' => '1 Bintang', 'is_correct' => false],
                            ['emoji' => '2️⃣', 'text' => '2 Bintang', 'is_correct' => true],
                            ['emoji' => '5️⃣', 'text' => '5 Bintang', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'title' => 'Tebak Perbandingan Ukuran & Jumlah',
                'slug' => 'kuis-perbandingan',
                'icon_emoji' => '⚖️',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Di antara Gajah dan Tikus, manakah yang berukuran LEBIH BESAR?',
                        'audio' => 'Di antara Gajah dan Tikus, manakah yang berukuran LEBIH BESAR?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Gajah (Besar)', 'is_correct' => true],
                            ['emoji' => '🐭', 'text' => 'Tikus (Kecil)', 'is_correct' => false],
                            ['emoji' => '🐜', 'text' => 'Semut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di antara Jerapah dan Kelinci, manakah yang berpostur LEBIH TINGGI?',
                        'audio' => 'Di antara Jerapah dan Kelinci, manakah yang berpostur LEBIH TINGGI?',
                        'emoji' => '🦒',
                        'options' => [
                            ['emoji' => '🐰', 'text' => 'Kelinci (Pendek)', 'is_correct' => false],
                            ['emoji' => '🦒', 'text' => 'Jerapah (Tinggi)', 'is_correct' => true],
                            ['emoji' => '🐢', 'text' => 'Kura-kura', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'title' => 'Tebak Penjumlahan Ceria',
                'slug' => 'kuis-penjumlahan',
                'icon_emoji' => '➕',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 1 Apel 🍎 + 1 Apel 🍎 = ... ?',
                        'audio' => 'Berapa hasil dari 1 Apel ditambah 1 Apel?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Apel', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Apel', 'is_correct' => false],
                            ['emoji' => '1️⃣', 'text' => '1 Apel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Kucing 🐱🐱 + 1 Kucing 🐱 = ... ?',
                        'audio' => 'Berapa hasil dari 2 Kucing ditambah 1 Kucing?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '4️⃣', 'text' => '4 Kucing', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Kucing', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Kucing', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'title' => 'Tebak Pengurangan Ceria',
                'slug' => 'kuis-pengurangan',
                'icon_emoji' => '➖',
                'target_age' => 5,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Ada 3 balon 🎈🎈🎈, 1 balon terbang lepas. Sisa berapa balon?',
                        'audio' => 'Ada 3 balon, 1 balon terbang lepas. Sisa berapa balon?',
                        'emoji' => '🎈',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Balon', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => '1 Balon', 'is_correct' => false],
                            ['emoji' => '0️⃣', 'text' => 'Habis', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ada 4 donat 🍩🍩🍩🍩, adik makan 1 donat. Sisa berapa donat?',
                        'audio' => 'Ada 4 donat, adik makan 1 donat. Sisa berapa donat?',
                        'emoji' => '🍩',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Donat', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Donat', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Donat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'title' => 'Tantangan Pola & Logika Pintar',
                'slug' => 'kuis-pola-logika',
                'icon_emoji' => '🧩',
                'target_age' => 4,
                'total_questions' => 2,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola warna berikut: 🔴 Merah, 🔵 Biru, 🔴 Merah, ... ?',
                        'audio' => 'Lanjutkan pola warna berikut: Merah, Biru, Merah, lalu warna apa?',
                        'emoji' => '🔴',
                        'options' => [
                            ['emoji' => '🔵', 'text' => '🔵 Warna Biru', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => '🟢 Warna Hijau', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => '🟡 Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola bentuk berikut: ⭕ Lingkaran, 🟩 Kotak, ⭕ Lingkaran, ... ?',
                        'audio' => 'Lanjutkan pola bentuk berikut: Lingkaran, Kotak, Lingkaran, lalu bentuk apa?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '🔺', 'text' => '🔺 Segitiga', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => '🟩 Kotak', 'is_correct' => true],
                            ['emoji' => '⭐', 'text' => '⭐ Bintang', 'is_correct' => false],
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

            $learningLevelId = null;
            if (isset($qData['level_number'])) {
                $lvl = LearningLevel::where('category_id', $cat->id)->where('level_number', $qData['level_number'])->first();
                if ($lvl) {
                    $learningLevelId = $lvl->id;
                }
            }

            $quiz = Quiz::updateOrCreate(
                ['slug' => $qData['slug']],
                [
                    'category_id' => $cat->id,
                    'learning_level_id' => $learningLevelId,
                    'title' => $qData['title'],
                    'icon_emoji' => $qData['icon_emoji'],
                    'target_age' => $qData['target_age'],
                    'total_questions' => count($qData['questions']),
                    'stars_reward' => $qData['stars_reward'],
                ]
            );

            // Bersihkan pertanyaan lama lalu buat yang baru
            $quiz->questions()->delete();

            foreach ($qData['questions'] as $qIdx => $questionItem) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $questionItem['text'],
                    'question_audio' => $questionItem['audio'],
                    'question_emoji' => $questionItem['emoji'],
                    'sort_order' => $qIdx + 1,
                ]);

                foreach ($questionItem['options'] as $oIdx => $optItem) {
                    QuestionOption::create([
                        'question_id' => $question->id,
                        'option_emoji' => $optItem['emoji'],
                        'option_text' => $optItem['text'],
                        'is_correct' => $optItem['is_correct'],
                        'sort_order' => $oIdx + 1,
                    ]);
                }
            }
        }
    }
}

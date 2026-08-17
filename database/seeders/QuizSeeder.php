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

            // =========================================================================
            // PILAR 1 - TOPIK 7: JENIS KENDARAAN HEBAT (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (KENDARAAN SEHARI-HARI & DARAT POPULER) ---
            [
                'category_slug' => 'kendaraan',
                'level_number' => 1,
                'title' => 'Sahabat Jalan Raya & Klakson Ceria',
                'slug' => 'kuis-kendaraan-l1-jalan-raya-klakson',
                'icon_emoji' => '🚗',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Kendaraan roda empat yang nyaman untuk bepergian bersama keluarga dengan bunyi tin-tin adalah...?',
                        'audio' => 'Kendaraan roda empat yang nyaman untuk bepergian bersama keluarga dengan bunyi tin-tin adalah apa?',
                        'emoji' => '🚗',
                        'options' => [
                            ['emoji' => '🚗', 'text' => 'Mobil Keluarga Ceria', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Sepeda Roda Dua', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan roda dua ramah lingkungan yang dikayuh dengan kaki dan berbel kring-kring adalah...?',
                        'audio' => 'Kendaraan roda dua ramah lingkungan yang dikayuh dengan kaki dan berbel kring-kring adalah apa?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Sepeda Roda Dua', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Mobil Keluarga', 'is_correct' => false],
                            ['emoji' => '🚚', 'text' => 'Truk Besar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan roda dua bermesin yang lincah melaju dengan bunyi ngeeng-ngeeng adalah...?',
                        'audio' => 'Kendaraan roda dua bermesin yang lincah melaju dengan bunyi ngeeng-ngeeng adalah apa?',
                        'emoji' => '🏍️',
                        'options' => [
                            ['emoji' => '🏍️', 'text' => 'Sepeda Motor Lincah', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Sepeda Gowes', 'is_correct' => false],
                            ['emoji' => '🚌', 'text' => 'Bus Sekolah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'kendaraan',
                'level_number' => 1,
                'title' => 'Kereta Rel Panjang & Bus Sekolah Ceria',
                'slug' => 'kuis-kendaraan-l1-kereta-bus-sekolah',
                'icon_emoji' => '🚆',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Kendaraan besar panjang yang mengangkut banyak siswa ke sekolah dengan gembira adalah...?',
                        'audio' => 'Kendaraan besar panjang yang mengangkut banyak siswa ke sekolah dengan gembira adalah apa?',
                        'emoji' => '🚌',
                        'options' => [
                            ['emoji' => '🚌', 'text' => 'Bus Sekolah Kuning', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Mobil Cilik', 'is_correct' => false],
                            ['emoji' => '🏍️', 'text' => 'Sepeda Motor', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Rangkaian gerbong panjang yang melaju kencang di atas rel besi dengan bunyi tut-tut gujes-gujes adalah...?',
                        'audio' => 'Rangkaian gerbong panjang yang melaju kencang di atas rel besi dengan bunyi tut-tut gujes-gujes adalah apa?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚆', 'text' => 'Kereta Api Cepat', 'is_correct' => true],
                            ['emoji' => '🚌', 'text' => 'Bus Sekolah', 'is_correct' => false],
                            ['emoji' => '🚚', 'text' => 'Truk Barang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan besar dan kuat bertubuh kokoh yang digunakan untuk mengangkut barang muatan berat adalah...?',
                        'audio' => 'Kendaraan besar dan kuat bertubuh kokoh yang digunakan untuk mengangkut barang muatan berat adalah apa?',
                        'emoji' => '🚚',
                        'options' => [
                            ['emoji' => '🚚', 'text' => 'Truk Pengangkut Kuat', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Sepeda', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Mobil Mini', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'kendaraan',
                'level_number' => 1,
                'title' => 'Becak Tradisional & Sahabat Darat Cilik',
                'slug' => 'kuis-kendaraan-l1-becak-sahabat-darat',
                'icon_emoji' => '🛺',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Kendaraan roda tiga tradisional yang ramah dan digowes oleh bapak pengemudi adalah...?',
                        'audio' => 'Kendaraan roda tiga tradisional yang ramah dan digowes oleh bapak pengemudi adalah apa?',
                        'emoji' => '🛺',
                        'options' => [
                            ['emoji' => '🛺', 'text' => 'Becak Tradisional Unik', 'is_correct' => true],
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => false],
                            ['emoji' => '✈️', 'text' => 'Pesawat Terbang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Dimanakah mobil, motor, sepeda, dan bus biasanya melaju dan berjalan?',
                        'audio' => 'Dimanakah mobil, motor, sepeda, dan bus biasanya melaju dan berjalan?',
                        'emoji' => '🛣️',
                        'options' => [
                            ['emoji' => '🛣️', 'text' => 'Di jalan raya daratan', 'is_correct' => true],
                            ['emoji' => '🌊', 'text' => 'Di dasar samudra laut', 'is_correct' => false],
                            ['emoji' => '☁️', 'text' => 'Di langit awan tinggi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bunyi apakah yang dikeluarkan oleh bel sepeda saat dibunyikan di jalan?',
                        'audio' => 'Bunyi apakah yang dikeluarkan oleh bel sepeda saat dibunyikan di jalan?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Kring-kring suara bel gembira', 'is_correct' => true],
                            ['emoji' => '🚢', 'text' => 'Tuuut klakson kapal laut', 'is_correct' => false],
                            ['emoji' => '✈️', 'text' => 'Wuuush deru pesawat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (KENDARAAN PENOLONG & PETUALANG HEBAT) ---
            [
                'category_slug' => 'kendaraan',
                'level_number' => 2,
                'title' => 'Mobil Penolong & Pahlawan Siaga',
                'slug' => 'kuis-kendaraan-l2-mobil-penolong-siaga',
                'icon_emoji' => '🚒',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Mobil merah gagah bersirine wiu-wiu yang bertugas memadamkan kobaran api kebakaran adalah...?',
                        'audio' => 'Mobil merah gagah bersirine wiu-wiu yang bertugas memadamkan kobaran api kebakaran adalah apa?',
                        'emoji' => '🚒',
                        'options' => [
                            ['emoji' => '🚒', 'text' => 'Mobil Pemadam Kebakaran', 'is_correct' => true],
                            ['emoji' => '🚑', 'text' => 'Mobil Ambulans', 'is_correct' => false],
                            ['emoji' => '🚓', 'text' => 'Mobil Polisi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mobil medis bersirine ninu-ninu yang bertugas cepat mengantar orang sakit ke rumah sakit adalah...?',
                        'audio' => 'Mobil medis bersirine ninu-ninu yang bertugas cepat mengantar orang sakit ke rumah sakit adalah apa?',
                        'emoji' => '🚑',
                        'options' => [
                            ['emoji' => '🚑', 'text' => 'Mobil Ambulans Penolong', 'is_correct' => true],
                            ['emoji' => '🚕', 'text' => 'Taksi Kota', 'is_correct' => false],
                            ['emoji' => '🚜', 'text' => 'Traktor Sawah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mobil patroli bersirine tet-tot yang digunakan petugas untuk menjaga keamanan kota adalah...?',
                        'audio' => 'Mobil patroli bersirine tet-tot yang digunakan petugas untuk menjaga keamanan kota adalah apa?',
                        'emoji' => '🚓',
                        'options' => [
                            ['emoji' => '🚓', 'text' => 'Mobil Polisi Penjaga Aman', 'is_correct' => true],
                            ['emoji' => '🚒', 'text' => 'Mobil Pemadam', 'is_correct' => false],
                            ['emoji' => '🚛', 'text' => 'Truk Molen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan bermesin tangguh di pedesaan yang digunakan untuk membajak tanah sawah subur adalah...?',
                        'audio' => 'Kendaraan bermesin tangguh di pedesaan yang digunakan untuk membajak tanah sawah subur adalah apa?',
                        'emoji' => '🚜',
                        'options' => [
                            ['emoji' => '🚜', 'text' => 'Traktor Sawah Perkasa', 'is_correct' => true],
                            ['emoji' => '🚕', 'text' => 'Taksi Kuning', 'is_correct' => false],
                            ['emoji' => '🛴', 'text' => 'Skuter Otopet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Truk khusus dengan tabung besar berputar untuk mencampur adonan semen bangunan adalah...?',
                        'audio' => 'Truk khusus dengan tabung besar berputar untuk mencampur adonan semen bangunan adalah apa?',
                        'emoji' => '🚛',
                        'options' => [
                            ['emoji' => '🚛', 'text' => 'Truk Molen Pengaduk Semen', 'is_correct' => true],
                            ['emoji' => '🚒', 'text' => 'Mobil Pemadam', 'is_correct' => false],
                            ['emoji' => '🚑', 'text' => 'Mobil Ambulans', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'kendaraan',
                'level_number' => 2,
                'title' => 'Taksi Kota & Skuter Lincah Bergaya',
                'slug' => 'kuis-kendaraan-l2-taksi-kota-skuter-lincah',
                'icon_emoji' => '🚕',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Mobil penumpang umum dengan lampu atap yang siap mengantar kita ke mana saja di kota adalah...?',
                        'audio' => 'Mobil penumpang umum dengan lampu atap yang siap mengantar kita ke mana saja di kota adalah apa?',
                        'emoji' => '🚕',
                        'options' => [
                            ['emoji' => '🚕', 'text' => 'Taksi Kuning Ramah', 'is_correct' => true],
                            ['emoji' => '🚜', 'text' => 'Traktor Sawah', 'is_correct' => false],
                            ['emoji' => '🚒', 'text' => 'Mobil Pemadam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan beroda kecil dengan papan pijakan yang meluncur seru didorong kaki adalah...?',
                        'audio' => 'Kendaraan beroda kecil dengan papan pijakan yang meluncur seru didorong kaki adalah apa?',
                        'emoji' => '🛴',
                        'options' => [
                            ['emoji' => '🛴', 'text' => 'Skuter Otopet Lincah', 'is_correct' => true],
                            ['emoji' => '🚛', 'text' => 'Truk Molen', 'is_correct' => false],
                            ['emoji' => '🚜', 'text' => 'Traktor Perkasa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Saat mendengar sirine mobil pemadam kebakaran atau ambulans berbunyi, apa yang harus dilakukan kendaraan lain?',
                        'audio' => 'Saat mendengar sirine mobil pemadam kebakaran atau ambulans berbunyi apa yang harus dilakukan kendaraan lain?',
                        'emoji' => '🛣️',
                        'options' => [
                            ['emoji' => '🛣️', 'text' => 'Memberi jalan ke tepi agar mobil penolong lewat cepat', 'is_correct' => true],
                            ['emoji' => '🛑', 'text' => 'Menghalangi jalan di tengah', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Berhenti sembarangan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus selalu dipakai saat mengendarai sepeda motor demi melindungi keselamatan kepala?',
                        'audio' => 'Apa yang harus selalu dipakai saat mengendarai sepeda motor demi melindungi keselamatan kepala?',
                        'emoji' => '⛑️',
                        'options' => [
                            ['emoji' => '⛑️', 'text' => 'Helm Pengaman Kepala', 'is_correct' => true],
                            ['emoji' => '🎩', 'text' => 'Topi Pesta Kertas', 'is_correct' => false],
                            ['emoji' => '🕶️', 'text' => 'Kacamata Renang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa roda kendaraan darat dibuat berbentuk lingkaran bulat?',
                        'audio' => 'Mengapa roda kendaraan darat dibuat berbentuk lingkaran bulat?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Agar mudah berputar dan menggelinding lancar', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Agar sulit bergerak maju', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => 'Agar jalannya tersendat-sendat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'kendaraan',
                'level_number' => 2,
                'title' => 'Eksplorasi Fungsi & Kehebatan Kendaraan Tugas',
                'slug' => 'kuis-kendaraan-l2-fungsi-kendaraan-tugas',
                'icon_emoji' => '🚜',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok kendaraan yang termasuk mobil penolong darurat bersirine?',
                        'audio' => 'Manakah kelompok kendaraan yang termasuk mobil penolong darurat bersirine?',
                        'emoji' => '🚨',
                        'options' => [
                            ['emoji' => '🚒', 'text' => 'Pemadam Kebakaran, Ambulans, Mobil Polisi', 'is_correct' => true],
                            ['emoji' => '🚕', 'text' => 'Taksi, Skuter, Traktor', 'is_correct' => false],
                            ['emoji' => '🚲', 'text' => 'Sepeda, Becak, Mobil Pribadi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Dimanakah kita biasanya melihat traktor bekerja membantu pak tani?',
                        'audio' => 'Dimanakah kita biasanya melihat traktor bekerja membantu pak tani?',
                        'emoji' => '🌾',
                        'options' => [
                            ['emoji' => '🌾', 'text' => 'Di area persawahan dan ladang pertanian', 'is_correct' => true],
                            ['emoji' => '✈️', 'text' => 'Di landasan bandara udara', 'is_correct' => false],
                            ['emoji' => '🚢', 'text' => 'Di tengah dermaga laut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna lampu lalu lintas yang menandakan kendaraan harus BERHENTI adalah...?',
                        'audio' => 'Warna lampu lalu lintas yang menandakan kendaraan harus BERHENTI adalah apa?',
                        'emoji' => '🔴',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Lampu Merah', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => 'Lampu Hijau', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Lampu Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna lampu lalu lintas yang menandakan kendaraan boleh BERJALAN MAJU adalah...?',
                        'audio' => 'Warna lampu lalu lintas yang menandakan kendaraan boleh BERJALAN MAJU adalah apa?',
                        'emoji' => '🟢',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Lampu Hijau', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Lampu Merah', 'is_correct' => false],
                            ['emoji' => '🔵', 'text' => 'Lampu Biru', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat apa di dalam mobil yang diputar sopir untuk mengarahkan belok kanan atau kiri?',
                        'audio' => 'Alat apa di dalam mobil yang diputar sopir untuk mengarahkan belok kanan atau kiri?',
                        'emoji' => '🛞',
                        'options' => [
                            ['emoji' => '🛞', 'text' => 'Setir Kemudi Bundar', 'is_correct' => true],
                            ['emoji' => '🪟', 'text' => 'Kaca Jendela Mobil', 'is_correct' => false],
                            ['emoji' => '💡', 'text' => 'Lampu Depan', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (KENDARAAN SAMUDRA, UDARA & ANTARIKSA) ---
            [
                'category_slug' => 'kendaraan',
                'level_number' => 3,
                'title' => 'Penguasa Samudra, Udara & Antariksa',
                'slug' => 'kuis-kendaraan-l3-samudra-udara-antariksa',
                'icon_emoji' => '✈️',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Kendaraan bersayap lebar yang melaju cepat membawa penumpang melintasi awan di langit adalah...?',
                        'audio' => 'Kendaraan bersayap lebar yang melaju cepat membawa penumpang melintasi awan di langit adalah apa?',
                        'emoji' => '✈️',
                        'options' => [
                            ['emoji' => '✈️', 'text' => 'Pesawat Terbang Angkasa', 'is_correct' => true],
                            ['emoji' => '🚢', 'text' => 'Kapal Laut', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan udara yang memiliki baling-baling putar di atasnya dan bisa mendarat di atap gedung adalah...?',
                        'audio' => 'Kendaraan udara yang memiliki baling-baling putar di atasnya dan bisa mendarat di atap gedung adalah apa?',
                        'emoji' => '🚁',
                        'options' => [
                            ['emoji' => '🚁', 'text' => 'Helikopter Baling-Baling', 'is_correct' => true],
                            ['emoji' => '✈️', 'text' => 'Pesawat Terbang', 'is_correct' => false],
                            ['emoji' => '🚀', 'text' => 'Roket Antariksa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan raksasa yang berlayar dan mengapung mengarungi ombak samudra luas adalah...?',
                        'audio' => 'Kendaraan raksasa yang berlayar dan mengapung mengarungi ombak samudra luas adalah apa?',
                        'emoji' => '🚢',
                        'options' => [
                            ['emoji' => '🚢', 'text' => 'Kapal Laut Samudra', 'is_correct' => true],
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Mobil Keluarga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Perahu tradisional yang memanfaatkan hembusan tiupan angin pada kain layarnya untuk melaju adalah...?',
                        'audio' => 'Perahu tradisional yang memanfaatkan hembusan tiupan angin pada kain layarnya untuk melaju adalah apa?',
                        'emoji' => '⛵',
                        'options' => [
                            ['emoji' => '⛵', 'text' => 'Perahu Layar Nelayan', 'is_correct' => true],
                            ['emoji' => '🚀', 'text' => 'Roket', 'is_correct' => false],
                            ['emoji' => '✈️', 'text' => 'Pesawat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Perahu bermesin cepat yang mampu meluncur kencang membelah ombak di permukaan air laut adalah...?',
                        'audio' => 'Perahu bermesin cepat yang mampu meluncur kencang membelah ombak di permukaan air laut adalah apa?',
                        'emoji' => '🚤',
                        'options' => [
                            ['emoji' => '🚤', 'text' => 'Perahu Cepat Speedboat', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Sepeda', 'is_correct' => false],
                            ['emoji' => '🚁', 'text' => 'Helikopter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Wahana luar angkasa bertenaga api dahsyat yang meluncur menembus atmosfer menuju bulan adalah...?',
                        'audio' => 'Wahana luar angkasa bertenaga api dahsyat yang meluncur menembus atmosfer menuju bulan adalah apa?',
                        'emoji' => '🚀',
                        'options' => [
                            ['emoji' => '🚀', 'text' => 'Roket Penjelajah Antariksa', 'is_correct' => true],
                            ['emoji' => '✈️', 'text' => 'Pesawat Terbang', 'is_correct' => false],
                            ['emoji' => '🚁', 'text' => 'Helikopter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tempat khusus yang sangat luas untuk pesawat terbang lepas landas dan mendarat disebut...?',
                        'audio' => 'Tempat khusus yang sangat luas untuk pesawat terbang lepas landas dan mendarat disebut apa?',
                        'emoji' => '🛫',
                        'options' => [
                            ['emoji' => '🛫', 'text' => 'Bandara Udara', 'is_correct' => true],
                            ['emoji' => '⚓', 'text' => 'Pelabuhan Dermaga Laut', 'is_correct' => false],
                            ['emoji' => '🚉', 'text' => 'Stasiun Rel Kereta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tempat bersandarnya kapal-kapal besar dan perahu di tepi laut disebut...?',
                        'audio' => 'Tempat bersandarnya kapal-kapal besar dan perahu di tepi laut disebut apa?',
                        'emoji' => '⚓',
                        'options' => [
                            ['emoji' => '⚓', 'text' => 'Pelabuhan Dermaga Laut', 'is_correct' => true],
                            ['emoji' => '🛫', 'text' => 'Bandara Udara', 'is_correct' => false],
                            ['emoji' => '🏁', 'text' => 'Terminal Bus Kota', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah sebutan untuk orang hebat yang bertugas mengemudikan pesawat terbang di angkasa?',
                        'audio' => 'Siapakah sebutan untuk orang hebat yang bertugas mengemudikan pesawat terbang di angkasa?',
                        'emoji' => '👨‍✈️',
                        'options' => [
                            ['emoji' => '👨‍✈️', 'text' => 'Pilot yang Hebat', 'is_correct' => true],
                            ['emoji' => '🚢', 'text' => 'Nahkoda Kapal', 'is_correct' => false],
                            ['emoji' => '🚂', 'text' => 'Masinis Kereta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah sebutan untuk orang hebat yang bertugas memimpin dan mengemudikan kapal laut di samudra?',
                        'audio' => 'Siapakah sebutan untuk orang hebat yang bertugas memimpin dan mengemudikan kapal laut di samudra?',
                        'emoji' => '👨‍✈️',
                        'options' => [
                            ['emoji' => '👨‍✈️', 'text' => 'Nahkoda Kapal Laut', 'is_correct' => true],
                            ['emoji' => '✈️', 'text' => 'Pilot Pesawat', 'is_correct' => false],
                            ['emoji' => '🚂', 'text' => 'Masinis Kereta', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'kendaraan',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Jalur Transportasi Hebat',
                'slug' => 'kuis-kendaraan-l3-jalur-transportasi-hebat',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok kendaraan yang semuanya melaju dan berjalan di jalur DARAT?',
                        'audio' => 'Manakah kelompok kendaraan yang semuanya melaju dan berjalan di jalur DARAT?',
                        'emoji' => '🛣️',
                        'options' => [
                            ['emoji' => '🚗', 'text' => 'Mobil, Kereta Api, Bus Sekolah', 'is_correct' => true],
                            ['emoji' => '✈️', 'text' => 'Pesawat, Helikopter, Roket', 'is_correct' => false],
                            ['emoji' => '🚢', 'text' => 'Kapal Laut, Perahu, Speedboat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok kendaraan yang semuanya berlayar di jalur LAUT/AIR?',
                        'audio' => 'Manakah kelompok kendaraan yang semuanya berlayar di jalur LAUT/AIR?',
                        'emoji' => '🌊',
                        'options' => [
                            ['emoji' => '🚢', 'text' => 'Kapal Laut, Perahu Layar, Speedboat', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Mobil, Motor, Sepeda', 'is_correct' => false],
                            ['emoji' => '✈️', 'text' => 'Pesawat, Helikopter, Roket', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok kendaraan yang semuanya terbang di jalur UDARA & ANGKASA?',
                        'audio' => 'Manakah kelompok kendaraan yang semuanya terbang di jalur UDARA & ANGKASA?',
                        'emoji' => '☁️',
                        'options' => [
                            ['emoji' => '✈️', 'text' => 'Pesawat, Helikopter, Roket Antariksa', 'is_correct' => true],
                            ['emoji' => '🚌', 'text' => 'Bus, Truk, Becak', 'is_correct' => false],
                            ['emoji' => '🚢', 'text' => 'Kapal Laut, Speedboat, Perahu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah sebutan untuk pengemudi yang mengendalikan laju rangkaian kereta api?',
                        'audio' => 'Siapakah sebutan untuk pengemudi yang mengendalikan laju rangkaian kereta api?',
                        'emoji' => '🚂',
                        'options' => [
                            ['emoji' => '🚂', 'text' => 'Masinis Kereta Api', 'is_correct' => true],
                            ['emoji' => '👨‍✈️', 'text' => 'Pilot Pesawat', 'is_correct' => false],
                            ['emoji' => '🚢', 'text' => 'Nahkoda Kapal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan apakah yang memiliki baling-baling putar dan bisa mendarat tegak lurus di helipad?',
                        'audio' => 'Kendaraan apakah yang memiliki baling-baling putar dan bisa mendarat tegak lurus di helipad?',
                        'emoji' => '🚁',
                        'options' => [
                            ['emoji' => '🚁', 'text' => 'Helikopter', 'is_correct' => true],
                            ['emoji' => '✈️', 'text' => 'Pesawat Jumbo', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Kereta Api', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan apakah yang digunakan para antariksawan (astronot) untuk pergi menjelajah ke bulan?',
                        'audio' => 'Kendaraan apakah yang digunakan para antariksawan untuk pergi menjelajah ke bulan?',
                        'emoji' => '🚀',
                        'options' => [
                            ['emoji' => '🚀', 'text' => 'Roket Antariksa', 'is_correct' => true],
                            ['emoji' => '🚤', 'text' => 'Speedboat', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Mobil Listrik', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kapal laut yang terbuat dari besi berat tetap bisa mengapung di atas air laut?',
                        'audio' => 'Mengapa kapal laut yang terbuat dari besi berat tetap bisa mengapung di atas air laut?',
                        'emoji' => '🌊',
                        'options' => [
                            ['emoji' => '🌊', 'text' => 'Karena adanya gaya apung air dan lambung kapal yang berongga udara', 'is_correct' => true],
                            ['emoji' => '🪨', 'text' => 'Karena bentuknya seperti batu tenggelam', 'is_correct' => false],
                            ['emoji' => '🪽', 'text' => 'Karena memiliki sayap burung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sabuk pengaman (seatbelt) di dalam mobil dan pesawat terbang berfungsi untuk...?',
                        'audio' => 'Sabuk pengaman di dalam mobil dan pesawat terbang berfungsi untuk apa?',
                        'emoji' => '🛡️',
                        'options' => [
                            ['emoji' => '🛡️', 'text' => 'Melindungi tubuh penumpang agar tetap aman dan selamat', 'is_correct' => true],
                            ['emoji' => '🎮', 'text' => 'Bermain game', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Mengikat barang belanjaan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di manakah tempat yang tepat dan aman bagi kita untuk menyeberang jalan raya?',
                        'audio' => 'Di manakah tempat yang tepat dan aman bagi kita untuk menyeberang jalan raya?',
                        'emoji' => '🦓',
                        'options' => [
                            ['emoji' => '🦓', 'text' => 'Garis Zebra Cross atau Jembatan Penyeberangan Orang', 'is_correct' => true],
                            ['emoji' => '🛣️', 'text' => 'Di tengah tikungan jalan raya yang ramai', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Di mana saja sembarangan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa alat transportasi dan kendaraan diciptakan oleh manusia?',
                        'audio' => 'Mengapa alat transportasi dan kendaraan diciptakan oleh manusia?',
                        'emoji' => '🌍',
                        'options' => [
                            ['emoji' => '🌍', 'text' => 'Untuk mempermudah manusia bepergian dan membawa barang ke tempat jauh', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar manusia malas bergerak', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak memiliki manfaat apa pun', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'kendaraan',
                'level_number' => 3,
                'title' => 'Grand Champion Kapten Transportasi Ceria',
                'slug' => 'kuis-kendaraan-l3-grand-master-transportasi',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Kendaraan manakah yang meluncur paling cepat di antara seluruh ciptaan transportasi manusia?',
                        'audio' => 'Kendaraan manakah yang meluncur paling cepat di antara seluruh ciptaan transportasi manusia?',
                        'emoji' => '🚀',
                        'options' => [
                            ['emoji' => '🚀', 'text' => 'Roket Antariksa', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Sepeda Gowes', 'is_correct' => false],
                            ['emoji' => '🛺', 'text' => 'Becak Roda Tiga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bunyi apakah yang paling terkenal dari sirine mobil pemadam kebakaran saat bergegas bertugas?',
                        'audio' => 'Bunyi apakah yang paling terkenal dari sirine mobil pemadam kebakaran saat bergegas bertugas?',
                        'emoji' => '🚒',
                        'options' => [
                            ['emoji' => '🚒', 'text' => 'Wiu-wiu nyaring pertanda bahaya', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Kring-kring suara bel sepeda', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Tut-tut peluit kereta api', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bunyi apakah yang terkenal dari peluit ceria masinis saat kereta api melaju di atas rel?',
                        'audio' => 'Bunyi apakah yang terkenal dari peluit ceria masinis saat kereta api melaju di atas rel?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚆', 'text' => 'Tut-tut.. gujes-gujes..!', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Tin-tin..!', 'is_correct' => false],
                            ['emoji' => '🚁', 'text' => 'Prok-prok..!', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan apakah yang digerakkan oleh kayuhan tenaga kaki kita sendiri sambil berolahraga?',
                        'audio' => 'Kendaraan apakah yang digerakkan oleh kayuhan tenaga kaki kita sendiri sambil berolahraga?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Sepeda Roda Dua', 'is_correct' => true],
                            ['emoji' => '🏍️', 'text' => 'Sepeda Motor', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Mobil Keluarga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan laut manakah yang bergerak mengandalkan dorongan hembusan angin pada layarnya?',
                        'audio' => 'Kendaraan laut manakah yang bergerak mengandalkan dorongan hembusan angin pada layarnya?',
                        'emoji' => '⛵',
                        'options' => [
                            ['emoji' => '⛵', 'text' => 'Perahu Layar Nelayan', 'is_correct' => true],
                            ['emoji' => '🚤', 'text' => 'Speedboat Cepat', 'is_correct' => false],
                            ['emoji' => '🚢', 'text' => 'Kapal Feri Besar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Truk apakah yang memiliki tabung molen besar berputar untuk bahan semen cor gedung tinggi?',
                        'audio' => 'Truk apakah yang memiliki tabung molen besar berputar untuk bahan semen cor gedung tinggi?',
                        'emoji' => '🚛',
                        'options' => [
                            ['emoji' => '🚛', 'text' => 'Truk Molen Pengaduk Semen', 'is_correct' => true],
                            ['emoji' => '🚒', 'text' => 'Mobil Pemadam Kebakaran', 'is_correct' => false],
                            ['emoji' => '🚑', 'text' => 'Mobil Ambulans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa bus sekolah sangat membantu para siswa setiap pagi?',
                        'audio' => 'Mengapa bus sekolah sangat membantu para siswa setiap pagi?',
                        'emoji' => '🚌',
                        'options' => [
                            ['emoji' => '🚌', 'text' => 'Mengantar banyak anak sekolah bersama-sama secara aman dan tepat waktu', 'is_correct' => true],
                            ['emoji' => '🍦', 'text' => 'Untuk menjual es krim keliling', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Sebagai tempat tidur santai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus kita lakukan saat berada di dalam mobil keluarga yang sedang melaju kencang?',
                        'audio' => 'Apa yang harus kita lakukan saat berada di dalam mobil keluarga yang sedang melaju kencang?',
                        'emoji' => '🪑',
                        'options' => [
                            ['emoji' => '🪑', 'text' => 'Duduk tertib, tenang, dan memakai sabuk pengaman', 'is_correct' => true],
                            ['emoji' => '🏃‍♂️', 'text' => 'Berlari-lari di dalam mobil', 'is_correct' => false],
                            ['emoji' => '🪟', 'text' => 'Membuka pintu saat mobil berjalan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah pahlawan yang mengemudikan mobil ambulans untuk menyelamatkan pasien gawat darurat?',
                        'audio' => 'Siapakah pahlawan yang mengemudikan mobil ambulans untuk menyelamatkan pasien gawat darurat?',
                        'emoji' => '👨‍⚕️',
                        'options' => [
                            ['emoji' => '👨‍⚕️', 'text' => 'Sopir Ambulans & Tim Medis Penolong', 'is_correct' => true],
                            ['emoji' => '👨‍🌾', 'text' => 'Petani Ladang', 'is_correct' => false],
                            ['emoji' => '👨‍🍳', 'text' => 'Koki Dapur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai semua jenis kendaraan darat, laut, dan udara?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai semua jenis kendaraan darat laut dan udara?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Juara Cilik Kapten Transportasi Hebat Dunia!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk dan Malas', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Dermaga yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 8: BENDA DI SEKITAR KITA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (PERLENGKAPAN BELAJAR & SEKOLAH CERIA) ---
            [
                'category_slug' => 'benda',
                'level_number' => 1,
                'title' => 'Sahabat Belajar & Buku Cerita Ceria',
                'slug' => 'kuis-benda-l1-buku-alat-tulis',
                'icon_emoji' => '📚',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Benda jendela ilmu yang memiliki lembaran cerita bergambar dan menambah wawasan adalah...?',
                        'audio' => 'Benda jendela ilmu yang memiliki lembaran cerita bergambar dan menambah wawasan adalah apa?',
                        'emoji' => '📚',
                        'options' => [
                            ['emoji' => '📚', 'text' => 'Buku Cerita Bergambar', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas', 'is_correct' => false],
                            ['emoji' => '🎒', 'text' => 'Tas Ransel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat tulis bergagang kayu yang digunakan untuk menulis kata dan menggambar adalah...?',
                        'audio' => 'Alat tulis bergagang kayu yang digunakan untuk menulis kata dan menggambar adalah apa?',
                        'emoji' => '✏️',
                        'options' => [
                            ['emoji' => '✏️', 'text' => 'Pensil Menulis Ceria', 'is_correct' => true],
                            ['emoji' => '📏', 'text' => 'Penggaris Lurus', 'is_correct' => false],
                            ['emoji' => '🖍️', 'text' => 'Krayon Warna', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tempat yang kita gendong di punggung untuk membawa buku dan bekal ke sekolah adalah...?',
                        'audio' => 'Tempat yang kita gendong di punggung untuk membawa buku dan bekal ke sekolah adalah apa?',
                        'emoji' => '🎒',
                        'options' => [
                            ['emoji' => '🎒', 'text' => 'Tas Ransel Sekolah', 'is_correct' => true],
                            ['emoji' => '👝', 'text' => 'Kotak Pensil', 'is_correct' => false],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'level_number' => 1,
                'title' => 'Krayon Warna & Gunting Kertas Aman',
                'slug' => 'kuis-benda-l1-krayon-gunting-aman',
                'icon_emoji' => '🖍️',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Batangan lilin warna-warni cerah yang digunakan anak-anak untuk mewarnai gambar adalah...?',
                        'audio' => 'Batangan lilin warna warni cerah yang digunakan anak anak untuk mewarnai gambar adalah apa?',
                        'emoji' => '🖍️',
                        'options' => [
                            ['emoji' => '🖍️', 'text' => 'Krayon Warna-Warni', 'is_correct' => true],
                            ['emoji' => '📏', 'text' => 'Penggaris Lurus', 'is_correct' => false],
                            ['emoji' => '📚', 'text' => 'Buku Cerita', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat berbilah dengan pegangan dua jari yang digunakan untuk memotong pola kertas adalah...?',
                        'audio' => 'Alat berbilah dengan pegangan dua jari yang digunakan untuk memotong pola kertas adalah apa?',
                        'emoji' => '✂️',
                        'options' => [
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas Aman', 'is_correct' => true],
                            ['emoji' => '✏️', 'text' => 'Pensil Kayu', 'is_correct' => false],
                            ['emoji' => '🎒', 'text' => 'Tas Ransel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat bergaris angka yang digunakan untuk membuat garis lurus rapi adalah...?',
                        'audio' => 'Alat bergaris angka yang digunakan untuk membuat garis lurus rapi adalah apa?',
                        'emoji' => '📏',
                        'options' => [
                            ['emoji' => '📏', 'text' => 'Penggaris Lurus Rapi', 'is_correct' => true],
                            ['emoji' => '🖍️', 'text' => 'Krayon Warna', 'is_correct' => false],
                            ['emoji' => '👝', 'text' => 'Kotak Pensil', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'level_number' => 1,
                'title' => 'Kotak Pensil & Merapikan Alat Sekolah',
                'slug' => 'kuis-benda-l1-kotak-pensil-rapi',
                'icon_emoji' => '👝',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Wadah praktis beresleting atau klip untuk menyimpan pensil, penghapus, dan rautan adalah...?',
                        'audio' => 'Wadah praktis beresleting atau klip untuk menyimpan pensil penghapus dan rautan adalah apa?',
                        'emoji' => '👝',
                        'options' => [
                            ['emoji' => '👝', 'text' => 'Kotak Pensil Praktis', 'is_correct' => true],
                            ['emoji' => '🎒', 'text' => 'Tas Besar', 'is_correct' => false],
                            ['emoji' => '📚', 'text' => 'Buku Cerita', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang kita gunakan saat ingin mewarnai gambar pemandangan di buku gambar?',
                        'audio' => 'Benda apakah yang kita gunakan saat ingin mewarnai gambar pemandangan di buku gambar?',
                        'emoji' => '🖍️',
                        'options' => [
                            ['emoji' => '🖍️', 'text' => 'Krayon Warna-Warni', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas Saja', 'is_correct' => false],
                            ['emoji' => '📏', 'text' => 'Penggaris Plastik', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus kita lakukan pada semua alat tulis setelah selesai belajar di rumah?',
                        'audio' => 'Apa yang harus kita lakukan pada semua alat tulis setelah selesai belajar di rumah?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '👝', 'text' => 'Merapikan dan memasukkannya ke kotak pensil', 'is_correct' => true],
                            ['emoji' => '🗑️', 'text' => 'Membiarkannya berserakan di lantai', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Melemparnya sembarangan', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (BENDA RUMAH TANGGA & PERAWATAN DIRI) ---
            [
                'category_slug' => 'benda',
                'level_number' => 2,
                'title' => 'Sepatu Melangkah & Jam Penunjuk Waktu',
                'slug' => 'kuis-benda-l2-sepatu-jam-dinding',
                'icon_emoji' => '👟',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Benda beralas empuk yang kita pakai di kedua kaki untuk melindungi kaki saat berjalan dan berlari adalah...?',
                        'audio' => 'Benda beralas empuk yang kita pakai di kedua kaki untuk melindungi kaki saat berjalan dan berlari adalah apa?',
                        'emoji' => '👟',
                        'options' => [
                            ['emoji' => '👟', 'text' => 'Sepatu Nyaman Melangkah', 'is_correct' => true],
                            ['emoji' => '☂️', 'text' => 'Payung Hujan', 'is_correct' => false],
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda di dinding rumah yang berdetak tik-tok untuk menunjukkan waktu dan jam adalah...?',
                        'audio' => 'Benda di dinding rumah yang berdetak tik-tok untuk menunjukkan waktu dan jam adalah apa?',
                        'emoji' => '⏰',
                        'options' => [
                            ['emoji' => '⏰', 'text' => 'Jam Dinding Penunjuk Waktu', 'is_correct' => true],
                            ['emoji' => '💡', 'text' => 'Lampu Belajar', 'is_correct' => false],
                            ['emoji' => '🥛', 'text' => 'Gelas Minum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda berbulu halus yang digunakan bersama pasta gigi untuk membersihkan gigi dari kuman adalah...?',
                        'audio' => 'Benda berbulu halus yang digunakan bersama pasta gigi untuk membersihkan gigi dari kuman adalah apa?',
                        'emoji' => '🪥',
                        'options' => [
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi & Pasta Sehat', 'is_correct' => true],
                            ['emoji' => '🍴', 'text' => 'Sendok Makan', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Payung Hujan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda berkubah kain anti air yang dibuka di atas kepala untuk melindungi tubuh dari guyuran hujan adalah...?',
                        'audio' => 'Benda berkubah kain anti air yang dibuka di atas kepala untuk melindungi tubuh dari guyuran hujan adalah apa?',
                        'emoji' => '☂️',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Payung Pelindung Hujan', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Sepatu Karet', 'is_correct' => false],
                            ['emoji' => '💡', 'text' => 'Lampu Tidur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda makan yang digunakan berpasangan untuk menyuap nasi dan menusuk lauk pauk adalah...?',
                        'audio' => 'Benda makan yang digunakan berpasangan untuk menyuap nasi dan menusuk lauk pauk adalah apa?',
                        'emoji' => '🍴',
                        'options' => [
                            ['emoji' => '🍴', 'text' => 'Sendok & Garpu Makan', 'is_correct' => true],
                            ['emoji' => '🥛', 'text' => 'Gelas Bening', 'is_correct' => false],
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'level_number' => 2,
                'title' => 'Gelas Bening & Lampu Belajar Terang',
                'slug' => 'kuis-benda-l2-gelas-lampu-belajar',
                'icon_emoji' => '💡',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Wadah bersih yang digunakan untuk menuang dan meminum air putih sehat setiap hari adalah...?',
                        'audio' => 'Wadah bersih yang digunakan untuk menuang dan meminum air putih sehat setiap hari adalah apa?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'Gelas Minum Bening', 'is_correct' => true],
                            ['emoji' => '🍴', 'text' => 'Sendok Garpu', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu Olahraga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda sumber cahaya listrik yang dinyalakan agar meja belajar terang benderang saat malam hari adalah...?',
                        'audio' => 'Benda sumber cahaya listrik yang dinyalakan agar meja belajar terang benderang saat malam hari adalah apa?',
                        'emoji' => '💡',
                        'options' => [
                            ['emoji' => '💡', 'text' => 'Lampu Belajar Terang', 'is_correct' => true],
                            ['emoji' => '⏰', 'text' => 'Jam Dinding', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Payung Hujan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa kali minimal kita disarankan menggosok gigi dengan sikat gigi setiap hari?',
                        'audio' => 'Berapa kali minimal kita disarankan menggosok gigi dengan sikat gigi setiap hari?',
                        'emoji' => '🪥',
                        'options' => [
                            ['emoji' => '🪥', 'text' => 'Minimal 2 kali sehari (pagi dan sebelum tidur)', 'is_correct' => true],
                            ['emoji' => '🚫', 'text' => 'Satu minggu sekali saja', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Tidak perlu menggosok gigi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jam dinding atau jam beker yang berdering nyaring di pagi hari berfungsi untuk...?',
                        'audio' => 'Jam dinding atau jam beker yang berdering nyaring di pagi hari berfungsi untuk apa?',
                        'emoji' => '⏰',
                        'options' => [
                            ['emoji' => '⏰', 'text' => 'Membangunkan kita agar bangun tepat waktu dan segar', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Membuat kita malas bangun tidur', 'is_correct' => false],
                            ['emoji' => '🎮', 'text' => 'Untuk bermain game saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sebelum makan menggunakan sendok dan garpu, apa yang harus selalu kita lakukan terlebih dahulu?',
                        'audio' => 'Sebelum makan menggunakan sendok dan garpu apa yang harus selalu kita lakukan terlebih dahulu?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Mencuci tangan dengan sabun bersih dan berdoa', 'is_correct' => true],
                            ['emoji' => '🏃‍♂️', 'text' => 'Langsung menyuap makanan tanpa cuci tangan', 'is_correct' => false],
                            ['emoji' => '🗑️', 'text' => 'Membuang makanan ke lantai', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'level_number' => 2,
                'title' => 'Eksplorasi Benda Rumah Tangga & Kebiasaan Mandiri',
                'slug' => 'kuis-benda-l2-eksplorasi-kebiasaan-mandiri',
                'icon_emoji' => '🍴',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok benda yang digunakan saat kita sedang makan di meja makan?',
                        'audio' => 'Manakah kelompok benda yang digunakan saat kita sedang makan di meja makan?',
                        'emoji' => '🍽️',
                        'options' => [
                            ['emoji' => '🍴', 'text' => 'Sendok, Garpu & Gelas Minum', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Sepatu & Payung Hujan', 'is_correct' => false],
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi & Jam Dinding', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah benda yang melindungi tubuh kita saat cuaca sedang hujan lebat turun?',
                        'audio' => 'Manakah benda yang melindungi tubuh kita saat cuaca sedang hujan lebat turun?',
                        'emoji' => '☂️',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Payung Pelindung Hujan', 'is_correct' => true],
                            ['emoji' => '💡', 'text' => 'Lampu Belajar', 'is_correct' => false],
                            ['emoji' => '🍴', 'text' => 'Garpu Makan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus memakai sepatu beralas nyaman saat bermain di luar rumah?',
                        'audio' => 'Mengapa kita harus memakai sepatu beralas nyaman saat bermain di luar rumah?',
                        'emoji' => '🛡️',
                        'options' => [
                            ['emoji' => '👟', 'text' => 'Agar telapak kaki terlindung dari benda tajam dan kotoran', 'is_correct' => true],
                            ['emoji' => '🪽', 'text' => 'Agar kita bisa terbang tinggi', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Agar kita cepat mengantuk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus kita lakukan saat lampu kamar menyala tetapi hari sudah siang terang benderang?',
                        'audio' => 'Apa yang harus kita lakukan saat lampu kamar menyala tetapi hari sudah siang terang benderang?',
                        'emoji' => '💡',
                        'options' => [
                            ['emoji' => '💡', 'text' => 'Mematikan saklar lampu untuk hemat energi listrik', 'is_correct' => true],
                            ['emoji' => '🚫', 'text' => 'Membiarkannya menyala terus seharian', 'is_correct' => false],
                            ['emoji' => '🔦', 'text' => 'Menyalakan semua lampu lainnya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang kita gunakan untuk mengukur panjang buku dan kertas dengan angka-angka cm?',
                        'audio' => 'Benda apakah yang kita gunakan untuk mengukur panjang buku dan kertas dengan angka-angka cm?',
                        'emoji' => '📏',
                        'options' => [
                            ['emoji' => '📏', 'text' => 'Penggaris Lurus Rapi', 'is_correct' => true],
                            ['emoji' => '🥛', 'text' => 'Gelas Minum', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu Olahraga', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (PERABOT RUMAH, KEBERSIHAN & KEMANDIRIAN) ---
            [
                'category_slug' => 'benda',
                'level_number' => 3,
                'title' => 'Perabot Kamar, Rumah Nyaman & Mainan Lucu',
                'slug' => 'kuis-benda-l3-perabot-kamar-boneka',
                'icon_emoji' => '🧸',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Perabot kayu tempat kita meletakkan buku dan belajar dengan posisi duduk tegak adalah...?',
                        'audio' => 'Perabot kayu tempat kita meletakkan buku dan belajar dengan posisi duduk tegak adalah apa?',
                        'emoji' => '🪑',
                        'options' => [
                            ['emoji' => '🪑', 'text' => 'Meja Belajar Kayu', 'is_correct' => true],
                            ['emoji' => '🚪', 'text' => 'Pintu Rumah', 'is_correct' => false],
                            ['emoji' => '🧹', 'text' => 'Sapu Lantai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tempat empuk beralas kasur, bantal, dan selimut hangat untuk kita beristirahat tidur malam adalah...?',
                        'audio' => 'Tempat empuk beralas kasur bantal dan selimut hangat untuk kita beristirahat tidur malam adalah apa?',
                        'emoji' => '🛏️',
                        'options' => [
                            ['emoji' => '🛏️', 'text' => 'Tempat Tidur Nyaman', 'is_correct' => true],
                            ['emoji' => '🪞', 'text' => 'Cermin Kaca', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Meja Kayu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kaca bening yang memantulkan bayangan diri kita saat menyisir rambut dan merapikan baju adalah...?',
                        'audio' => 'Kaca bening yang memantulkan bayangan diri kita saat menyisir rambut dan merapikan baju adalah apa?',
                        'emoji' => '🪞',
                        'options' => [
                            ['emoji' => '🪞', 'text' => 'Cermin Kaca Bening', 'is_correct' => true],
                            ['emoji' => '🚪', 'text' => 'Pintu Rumah', 'is_correct' => false],
                            ['emoji' => '🛏️', 'text' => 'Tempat Tidur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Pintu kokoh berengsel yang selalu diketuk dengan sopan sebelum kita memasukinya adalah...?',
                        'audio' => 'Pintu kokoh berengsel yang selalu diketuk dengan sopan sebelum kita memasukinya adalah apa?',
                        'emoji' => '🚪',
                        'options' => [
                            ['emoji' => '🚪', 'text' => 'Pintu Rumah Kokoh', 'is_correct' => true],
                            ['emoji' => '🧹', 'text' => 'Sapu Ijuk', 'is_correct' => false],
                            ['emoji' => '🪞', 'text' => 'Cermin Kaca', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat bertangkai dengan ijuk yang digunakan untuk menyapu debu dan kotoran di lantai adalah...?',
                        'audio' => 'Alat bertangkai dengan ijuk yang digunakan untuk menyapu debu dan kotoran di lantai adalah apa?',
                        'emoji' => '🧹',
                        'options' => [
                            ['emoji' => '🧹', 'text' => 'Sapu Pembersih Lantai', 'is_correct' => true],
                            ['emoji' => '🛏️', 'text' => 'Kasur Bantal', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Meja Belajar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sahabat main berbulu lembut yang empuk dipeluk dan menemani waktu tidur anak adalah...?',
                        'audio' => 'Sahabat main berbulu lembut yang empuk dipeluk dan menemani waktu tidur anak adalah apa?',
                        'emoji' => '🧸',
                        'options' => [
                            ['emoji' => '🧸', 'text' => 'Boneka Beruang Lucu', 'is_correct' => true],
                            ['emoji' => '🚪', 'text' => 'Pintu Kayu', 'is_correct' => false],
                            ['emoji' => '🧹', 'text' => 'Sapu Lantai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus dilakukan sebelum masuk ke dalam rumah orang lain atau ruangan kelas?',
                        'audio' => 'Apa yang harus dilakukan sebelum masuk ke dalam rumah orang lain atau ruangan kelas?',
                        'emoji' => '🚪',
                        'options' => [
                            ['emoji' => '🚪', 'text' => 'Mengetuk pintu dengan sopan dan mengucapkan salam', 'is_correct' => true],
                            ['emoji' => '🏃‍♂️', 'text' => 'Langsung menerobos masuk tanpa permisi', 'is_correct' => false],
                            ['emoji' => '🔊', 'text' => 'Berteriak-teriak keras di depan pintu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus kita lakukan pada tempat tidur kita setiap kali bangun pagi?',
                        'audio' => 'Apa yang harus kita lakukan pada tempat tidur kita setiap kali bangun pagi?',
                        'emoji' => '🛏️',
                        'options' => [
                            ['emoji' => '🛏️', 'text' => 'Merapikan selimut, menepuk bantal, dan menata kasur rapi', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Membiarkannya berantakan kotor', 'is_correct' => false],
                            ['emoji' => '🗑️', 'text' => 'Membuang bantal ke lantai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa lantai rumah harus rajin disapu dengan sapu setiap hari?',
                        'audio' => 'Mengapa lantai rumah harus rajin disapu dengan sapu setiap hari?',
                        'emoji' => '🧹',
                        'options' => [
                            ['emoji' => '🧹', 'text' => 'Agar lantai selalu bersih, sehat, serta bebas debu dan kuman', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar ruangan menjadi kotor', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada gunanya sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sikap apakah yang baik saat kita selesai bermain dengan boneka atau mainan di kamar?',
                        'audio' => 'Sikap apakah yang baik saat kita selesai bermain dengan boneka atau mainan di kamar?',
                        'emoji' => '🧸',
                        'options' => [
                            ['emoji' => '🧸', 'text' => 'Mengembalikan dan menata mainan di tempat mainan', 'is_correct' => true],
                            ['emoji' => '🏃‍♂️', 'text' => 'Meninggalkannya berserakan di jalan', 'is_correct' => false],
                            ['emoji' => '🗑️', 'text' => 'Merusak dan membuangnya', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Fungsi Benda Sehari-Hari',
                'slug' => 'kuis-benda-l3-fungsi-benda-sehari-hari',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok benda yang semuanya termasuk perlengkapan belajar di sekolah?',
                        'audio' => 'Manakah kelompok benda yang semuanya termasuk perlengkapan belajar di sekolah?',
                        'emoji' => '🎒',
                        'options' => [
                            ['emoji' => '📚', 'text' => 'Buku Cerita, Pensil Tulis, Tas Ransel', 'is_correct' => true],
                            ['emoji' => '🛏️', 'text' => 'Tempat Tidur, Pintu, Sapu Lantai', 'is_correct' => false],
                            ['emoji' => '🍴', 'text' => 'Sendok Makan, Gelas, Sikat Gigi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok benda yang digunakan untuk menjaga kebersihan diri dan rumah?',
                        'audio' => 'Manakah kelompok benda yang digunakan untuk menjaga kebersihan diri dan rumah?',
                        'emoji' => '🪥',
                        'options' => [
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi, Pasta Gigi & Sapu Lantai', 'is_correct' => true],
                            ['emoji' => '📚', 'text' => 'Buku, Krayon, Penggaris', 'is_correct' => false],
                            ['emoji' => '🧸', 'text' => 'Boneka Beruang, Meja, Kasur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah benda yang kita gunakan untuk melihat kerapian wajah dan pakaian seragam kita?',
                        'audio' => 'Manakah benda yang kita gunakan untuk melihat kerapian wajah dan pakaian seragam kita?',
                        'emoji' => '🪞',
                        'options' => [
                            ['emoji' => '🪞', 'text' => 'Cermin Kaca Bening', 'is_correct' => true],
                            ['emoji' => '🚪', 'text' => 'Pintu Rumah Kayu', 'is_correct' => false],
                            ['emoji' => '🧹', 'text' => 'Sapu Lantai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang berbunyi kring-kring dan memiliki jarum penunjuk detik, menit, dan jam?',
                        'audio' => 'Benda apakah yang berbunyi kring-kring dan memiliki jarum penunjuk detik menit dan jam?',
                        'emoji' => '⏰',
                        'options' => [
                            ['emoji' => '⏰', 'text' => 'Jam Dinding & Jam Beker', 'is_correct' => true],
                            ['emoji' => '💡', 'text' => 'Lampu Belajar', 'is_correct' => false],
                            ['emoji' => '🥛', 'text' => 'Gelas Minum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda manakah yang membutuhkan aliran listrik untuk menghasilkan cahaya terang benderang?',
                        'audio' => 'Benda manakah yang membutuhkan aliran listrik untuk menghasilkan cahaya terang benderang?',
                        'emoji' => '💡',
                        'options' => [
                            ['emoji' => '💡', 'text' => 'Lampu Belajar Terang', 'is_correct' => true],
                            ['emoji' => '📚', 'text' => 'Buku Tulis', 'is_correct' => false],
                            ['emoji' => '📏', 'text' => 'Penggaris Plastik', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika ingin menuang dan meminum air putih segar pelepas dahaga, benda apakah yang kita gunakan?',
                        'audio' => 'Jika ingin menuang dan meminum air putih segar pelepas dahaga benda apakah yang kita gunakan?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'Gelas Minum Bening', 'is_correct' => true],
                            ['emoji' => '👝', 'text' => 'Kotak Pensil', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa buku sering disebut sebagai "Jendela Dunia"?',
                        'audio' => 'Mengapa buku sering disebut sebagai jendela dunia?',
                        'emoji' => '📚',
                        'options' => [
                            ['emoji' => '📚', 'text' => 'Karena dengan membaca buku kita belajar banyak ilmu baru yang hebat', 'is_correct' => true],
                            ['emoji' => '🪟', 'text' => 'Karena bentuknya menyerupai kaca jendela rumah', 'is_correct' => false],
                            ['emoji' => '🧱', 'text' => 'Karena buku terbuat dari batu bata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat apakah yang digunakan untuk memotong tali atau pola kertas kerajinan tangan?',
                        'audio' => 'Alat apakah yang digunakan untuk memotong tali atau pola kertas kerajinan tangan?',
                        'emoji' => '✂️',
                        'options' => [
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas Aman', 'is_correct' => true],
                            ['emoji' => '📏', 'text' => 'Penggaris', 'is_correct' => false],
                            ['emoji' => '✏️', 'text' => 'Pensil', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di manakah tempat yang tepat untuk meletakkan sepatu saat kita sudah masuk ke dalam rumah?',
                        'audio' => 'Di manakah tempat yang tepat untuk meletakkan sepatu saat kita sudah masuk ke dalam rumah?',
                        'emoji' => '👟',
                        'options' => [
                            ['emoji' => '👟', 'text' => 'Di rak sepatu tertata dengan rapi', 'is_correct' => true],
                            ['emoji' => '🛏️', 'text' => 'Di atas tempat tidur', 'is_correct' => false],
                            ['emoji' => '🍽️', 'text' => 'Di atas meja makan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa anak hebat selalu mandiri merapikan barang-barang miliknya sendiri?',
                        'audio' => 'Mengapa anak hebat selalu mandiri merapikan barang-barang miliknya sendiri?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena menjadi anak disiplin, teratur, dan membanggakan orang tua', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar rumah menjadi berantakan', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada manfaatnya', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'benda',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Benda & Kemandirian Cilik',
                'slug' => 'kuis-benda-l3-grand-master-kemandirian',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Benda apakah yang kita gunakan untuk menulis nama kita sendiri di atas buku tulis?',
                        'audio' => 'Benda apakah yang kita gunakan untuk menulis nama kita sendiri di atas buku tulis?',
                        'emoji' => '✏️',
                        'options' => [
                            ['emoji' => '✏️', 'text' => 'Pensil Menulis Ceria', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas', 'is_correct' => false],
                            ['emoji' => '🧹', 'text' => 'Sapu Lantai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang paling kita butuhkan saat langit tiba-tiba mendung gelap dan hujan deras turun?',
                        'audio' => 'Benda apakah yang paling kita butuhkan saat langit tiba-tiba mendung gelap dan hujan deras turun?',
                        'emoji' => '☂️',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Payung Pelindung Hujan', 'is_correct' => true],
                            ['emoji' => '🪞', 'text' => 'Cermin Kaca', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Meja Belajar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang membuat kita tahu bahwa sekarang sudah pukul 07.00 pagi waktu masuk sekolah?',
                        'audio' => 'Benda apakah yang membuat kita tahu bahwa sekarang sudah pukul 07.00 pagi waktu masuk sekolah?',
                        'emoji' => '⏰',
                        'options' => [
                            ['emoji' => '⏰', 'text' => 'Jam Dinding Penunjuk Waktu', 'is_correct' => true],
                            ['emoji' => '🥛', 'text' => 'Gelas Minum', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu Sekolah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang menemani kita tidur malam dengan bulu lembut dan bentuk yang lucu?',
                        'audio' => 'Benda apakah yang menemani kita tidur malam dengan bulu lembut dan bentuk yang lucu?',
                        'emoji' => '🧸',
                        'options' => [
                            ['emoji' => '🧸', 'text' => 'Boneka Beruang Lucu', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas', 'is_correct' => false],
                            ['emoji' => '🚪', 'text' => 'Pintu Rumah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah posisi yang benar saat kita sedang belajar menulis di atas meja belajar?',
                        'audio' => 'Bagaimanakah posisi yang benar saat kita sedang belajar menulis di atas meja belajar?',
                        'emoji' => '🪑',
                        'options' => [
                            ['emoji' => '🪑', 'text' => 'Duduk tegak di kursi dengan penerangan lampu yang cukup', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tiduran di lantai yang gelap', 'is_correct' => false],
                            ['emoji' => '🏃‍♂️', 'text' => 'Sambil melompat-lompat di atas kasur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang digunakan untuk menyapu daun-daun kering yang jatuh di halaman rumah?',
                        'audio' => 'Benda apakah yang digunakan untuk menyapu daun-daun kering yang jatuh di halaman rumah?',
                        'emoji' => '🧹',
                        'options' => [
                            ['emoji' => '🧹', 'text' => 'Sapu Pembersih Halaman', 'is_correct' => true],
                            ['emoji' => '🍴', 'text' => 'Sendok Makan', 'is_correct' => false],
                            ['emoji' => '📚', 'text' => 'Buku Cerita', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Wadah apakah yang kita pakai untuk membawa kotak bekal makanan dan buku ke sekolah?',
                        'audio' => 'Wadah apakah yang kita pakai untuk membawa kotak bekal makanan dan buku ke sekolah?',
                        'emoji' => '🎒',
                        'options' => [
                            ['emoji' => '🎒', 'text' => 'Tas Ransel Sekolah', 'is_correct' => true],
                            ['emoji' => '👝', 'text' => 'Kotak Pensil Kecil', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu Olahraga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang membuat gigi kita selalu putih, bersih, dan bebas kuman karies?',
                        'audio' => 'Benda apakah yang membuat gigi kita selalu putih bersih dan bebas kuman karies?',
                        'emoji' => '🪥',
                        'options' => [
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi & Pasta Gigi Sehat', 'is_correct' => true],
                            ['emoji' => '🖍️', 'text' => 'Krayon Warna', 'is_correct' => false],
                            ['emoji' => '📏', 'text' => 'Penggaris Lurus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana perasaan anak pintar saat kamarnya selalu bersih dan barang-barangnya tertata rapi?',
                        'audio' => 'Bagaimana perasaan anak pintar saat kamarnya selalu bersih dan barang-barangnya tertata rapi?',
                        'emoji' => '😊',
                        'options' => [
                            ['emoji' => '😊', 'text' => 'Sangat senang, nyaman, dan bangga', 'is_correct' => true],
                            ['emoji' => '😢', 'text' => 'Sedih dan menangis', 'is_correct' => false],
                            ['emoji' => '😡', 'text' => 'Marah-marah tanpa alasan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak hebat yang pandai merawat dan merapikan semua benda miliknya?',
                        'audio' => 'Gelar apakah yang pantas untuk anak hebat yang pandai merawat dan merapikan semua benda miliknya?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Juara Cilik Mandiri & Sahabat Benda Ceria!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Kamar Berantakan', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Kamar yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 9: BENDERA NEGARA DUNIA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (INDONESIA & NEGARA SAHABAT ASIA TENGGARA) ---
            [
                'category_slug' => 'bendera',
                'level_number' => 1,
                'title' => 'Sang Saka Merah Putih & Sahabat Serumpun',
                'slug' => 'kuis-bendera-l1-merah-putih-serumpun',
                'icon_emoji' => '🇮🇩',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bendera negara kita tercinta Indonesia memiliki dua warna utama, yaitu warna...?',
                        'audio' => 'Bendera negara kita tercinta Indonesia memiliki dua warna utama yaitu warna apa?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Merah di atas dan Putih di bawah', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Putih dengan lingkaran merah', 'is_correct' => false],
                            ['emoji' => '🇸🇦', 'text' => 'Hijau dengan tulisan putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Palestina memiliki segitiga merah di sebelah kiri serta tiga garis warna...?',
                        'audio' => 'Bendera negara Palestina memiliki segitiga merah di sebelah kiri serta tiga garis warna apa?',
                        'emoji' => '🇵🇸',
                        'options' => [
                            ['emoji' => '🇵🇸', 'text' => 'Hitam, Putih, dan Hijau', 'is_correct' => true],
                            ['emoji' => '🇸🇬', 'text' => 'Merah dan Putih saja', 'is_correct' => false],
                            ['emoji' => '🇲🇾', 'text' => 'Kuning dan Biru saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara tetangga kita Malaysia memiliki lambang di sudut kiri atas berbentuk...?',
                        'audio' => 'Bendera negara tetangga kita Malaysia memiliki lambang di sudut kiri atas berbentuk apa?',
                        'emoji' => '🇲🇾',
                        'options' => [
                            ['emoji' => '🇲🇾', 'text' => 'Bulan Sabit & Bintang Kuning', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Lingkaran Matahari Merah', 'is_correct' => false],
                            ['emoji' => '🇮🇩', 'text' => 'Polos Merah Putih', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'level_number' => 1,
                'title' => 'Mengenal Singapura, Brunei & Arab Saudi',
                'slug' => 'kuis-bendera-l1-singapura-brunei-saudi',
                'icon_emoji' => '🇸🇦',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bendera negara Singapura berwarna merah putih dengan lambang bulan sabit dan berapa bintang putih?',
                        'audio' => 'Bendera negara Singapura berwarna merah putih dengan lambang bulan sabit dan berapa bintang putih?',
                        'emoji' => '🇸🇬',
                        'options' => [
                            ['emoji' => '🇸🇬', 'text' => '5 Bintang Putih Kecil', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => '1 Lingkaran Merah', 'is_correct' => false],
                            ['emoji' => '🇲🇾', 'text' => '1 Bintang Kuning Besar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Brunei Darussalam memiliki warna dasar dominan yang cerah, yaitu warna...?',
                        'audio' => 'Bendera negara Brunei Darussalam memiliki warna dasar dominan yang cerah yaitu warna apa?',
                        'emoji' => '🇧🇳',
                        'options' => [
                            ['emoji' => '🇧🇳', 'text' => 'Kuning Cerah Keemasan', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Merah Menyala', 'is_correct' => false],
                            ['emoji' => '🔵', 'text' => 'Biru Langit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Arab Saudi tempat berdirinya Ka\'bah di kota Mekkah berwarna dasar...?',
                        'audio' => 'Bendera negara Arab Saudi tempat berdirinya Kabah di kota Mekkah berwarna dasar apa?',
                        'emoji' => '🇸🇦',
                        'options' => [
                            ['emoji' => '🇸🇦', 'text' => 'Hijau Zamrud dengan Tulisan Kalimat Suci', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Putih Polos', 'is_correct' => false],
                            ['emoji' => '🇮🇩', 'text' => 'Merah dan Putih', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'level_number' => 1,
                'title' => 'Bendera Matahari Terbit & Harmoni Ceria',
                'slug' => 'kuis-bendera-l1-jepang-merah-putih',
                'icon_emoji' => '🇯🇵',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bendera negara Jepang berwarna putih bersih dengan gambar lingkaran berwarna...?',
                        'audio' => 'Bendera negara Jepang berwarna putih bersih dengan gambar lingkaran berwarna apa?',
                        'emoji' => '🇯🇵',
                        'options' => [
                            ['emoji' => '🇯🇵', 'text' => 'Lingkaran Merah Matahari Terbit', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Lingkaran Biru Laut', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Lingkaran Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa jumlah warna yang ada pada bendera Sang Saka Merah Putih Indonesia?',
                        'audio' => 'Berapa jumlah warna yang ada pada bendera Sang Saka Merah Putih Indonesia?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => '2 Warna (Merah dan Putih)', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Warna', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Warna', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa arti makna dari warna MERAH pada bendera negara Indonesia?',
                        'audio' => 'Apa arti makna dari warna MERAH pada bendera negara Indonesia?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '💪', 'text' => 'Berani dan Semangat Juang', 'is_correct' => true],
                            ['emoji' => '🕊️', 'text' => 'Suci dan Bersih', 'is_correct' => false],
                            ['emoji' => '🌲', 'text' => 'Subur Makmur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (NEGARA SAHABAT ASIA & TIMUR TENGAH) ---
            [
                'category_slug' => 'bendera',
                'level_number' => 2,
                'title' => 'Bendera Turki, Korea Selatan & Qatar',
                'slug' => 'kuis-bendera-l2-turki-korea-qatar',
                'icon_emoji' => '🇹🇷',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bendera negara Turki berwarna merah cerah dengan lambang langit berupa...?',
                        'audio' => 'Bendera negara Turki berwarna merah cerah dengan lambang langit berupa apa?',
                        'emoji' => '🇹🇷',
                        'options' => [
                            ['emoji' => '🇹🇷', 'text' => 'Bulan Sabit dan Bintang Putih', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Lingkaran Merah Saja', 'is_correct' => false],
                            ['emoji' => '🇰🇷', 'text' => 'Lingkaran Yin-Yang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Korea Selatan memiliki lingkaran lambang Taegeuk di tengahnya yang berwarna...?',
                        'audio' => 'Bendera negara Korea Selatan memiliki lingkaran lambang Taegeuk di tengahnya yang berwarna apa?',
                        'emoji' => '🇰🇷',
                        'options' => [
                            ['emoji' => '🇰🇷', 'text' => 'Merah di atas dan Biru di bawah', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => 'Hijau dan Kuning', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Hitam dan Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Qatar memiliki warna merah marun dan putih yang dipisahkan oleh garis berbentuk...?',
                        'audio' => 'Bendera negara Qatar memiliki warna merah marun dan putih yang dipisahkan oleh garis berbentuk apa?',
                        'emoji' => '🇶🇦',
                        'options' => [
                            ['emoji' => '🇶🇦', 'text' => 'Pola Gerigi Sembilan Sudut Runcing', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Lingkaran Bulat Halus', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Satu Segitiga Saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Mesir memiliki tiga garis mendatar (Merah, Putih, Hitam) dengan lambang emas bergambar...?',
                        'audio' => 'Bendera negara Mesir memiliki tiga garis mendatar merah putih hitam dengan lambang emas bergambar apa?',
                        'emoji' => '🇪🇬',
                        'options' => [
                            ['emoji' => '🇪🇬', 'text' => 'Burung Elang Emas Salahuddin', 'is_correct' => true],
                            ['emoji' => '🦁', 'text' => 'Singa Gagah', 'is_correct' => false],
                            ['emoji' => '🐬', 'text' => 'Lumba-Lumba Cerdas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera Uni Emirat Arab (UEA) memiliki garis tegak merah serta tiga garis mendatar berwarna...?',
                        'audio' => 'Bendera Uni Emirat Arab memiliki garis tegak merah serta tiga garis mendatar berwarna apa?',
                        'emoji' => '🇦🇪',
                        'options' => [
                            ['emoji' => '🇦🇪', 'text' => 'Hijau, Putih, dan Hitam', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Merah, Kuning, dan Hijau', 'is_correct' => false],
                            ['emoji' => '🔵', 'text' => 'Biru, Putih, dan Merah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'level_number' => 2,
                'title' => 'Eksplorasi Thailand, Filipina & Asia Ceria',
                'slug' => 'kuis-bendera-l2-thailand-filipina-asia',
                'icon_emoji' => '🇹🇭',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bendera negara Thailand memiliki lima garis warna mendatar dengan warna garis paling tengah berupa...?',
                        'audio' => 'Bendera negara Thailand memiliki lima garis warna mendatar dengan warna garis paling tengah berupa apa?',
                        'emoji' => '🇹🇭',
                        'options' => [
                            ['emoji' => '🇹🇭', 'text' => 'Garis Biru Tua Tebal', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Garis Merah', 'is_correct' => false],
                            ['emoji' => '⚪', 'text' => 'Garis Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Filipina memiliki segitiga putih di sebelah kiri dengan gambar...?',
                        'audio' => 'Bendera negara Filipina memiliki segitiga putih di sebelah kiri dengan gambar apa?',
                        'emoji' => '🇵🇭',
                        'options' => [
                            ['emoji' => '🇵🇭', 'text' => 'Matahari Kuning 8 Sinar dan 3 Bintang', 'is_correct' => true],
                            ['emoji' => '🌙', 'text' => 'Bulan Sabit Saja', 'is_correct' => false],
                            ['emoji' => '🦅', 'text' => 'Burung Elang Emas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa arti makna dari warna PUTIH pada bendera Sang Saka Merah Putih Indonesia?',
                        'audio' => 'Apa arti makna dari warna PUTIH pada bendera Sang Saka Merah Putih Indonesia?',
                        'emoji' => '🕊️',
                        'options' => [
                            ['emoji' => '🕊️', 'text' => 'Suci, Bersih, dan Tulus', 'is_correct' => true],
                            ['emoji' => '💪', 'text' => 'Berani Berperang', 'is_correct' => false],
                            ['emoji' => '🌊', 'text' => 'Lautan Dalam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah negara sahabat yang benderanya berwarna hijau zamrud dengan tulisan suci dan pedang?',
                        'audio' => 'Manakah negara sahabat yang benderanya berwarna hijau zamrud dengan tulisan suci dan pedang?',
                        'emoji' => '🇸🇦',
                        'options' => [
                            ['emoji' => '🇸🇦', 'text' => 'Arab Saudi', 'is_correct' => true],
                            ['emoji' => '🇹🇷', 'text' => 'Turki', 'is_correct' => false],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana sikap yang benar saat lagu Indonesia Raya dinyanyikan dan bendera Merah Putih dikibarkan?',
                        'audio' => 'Bagaimana sikap yang benar saat lagu Indonesia Raya dinyanyikan dan bendera Merah Putih dikibarkan?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Berdiri tegak, tertib, dan memberi hormat dengan bangga', 'is_correct' => true],
                            ['emoji' => '🏃‍♂️', 'text' => 'Berlari-lari kesana kemari', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Duduk santai sambil mengantuk', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'level_number' => 2,
                'title' => 'Petualangan Warna & Lambang Bendera Dunia',
                'slug' => 'kuis-bendera-l2-warna-lambang-dunia',
                'icon_emoji' => '🚩',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok negara yang benderanya sama-sama memiliki lambang Bulan Sabit dan Bintang?',
                        'audio' => 'Manakah kelompok negara yang benderanya sama-sama memiliki lambang Bulan Sabit dan Bintang?',
                        'emoji' => '🌙',
                        'options' => [
                            ['emoji' => '🇹🇷', 'text' => 'Turki, Malaysia & Singapura', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang & Indonesia', 'is_correct' => false],
                            ['emoji' => '🇰🇷', 'text' => 'Korea Selatan & Thailand', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah bendera yang memiliki warna simpel berupa lingkaran merah di atas kain putih polos?',
                        'audio' => 'Manakah bendera yang memiliki warna simpel berupa lingkaran merah di atas kain putih polos?',
                        'emoji' => '🇯🇵',
                        'options' => [
                            ['emoji' => '🇯🇵', 'text' => 'Bendera Jepang', 'is_correct' => true],
                            ['emoji' => '🇰🇷', 'text' => 'Korea Selatan', 'is_correct' => false],
                            ['emoji' => '🇵🇭', 'text' => 'Filipina', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera manakah yang memiliki lambang burung elang emas di bagian tengahnya?',
                        'audio' => 'Bendera manakah yang memiliki lambang burung elang emas di bagian tengahnya?',
                        'emoji' => '🇪🇬',
                        'options' => [
                            ['emoji' => '🇪🇬', 'text' => 'Bendera Mesir', 'is_correct' => true],
                            ['emoji' => '🇸🇦', 'text' => 'Arab Saudi', 'is_correct' => false],
                            ['emoji' => '🇧🇳', 'text' => 'Brunei Darussalam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di manakah biasanya bendera Sang Saka Merah Putih dipasang saat perayaan 17 Agustus?',
                        'audio' => 'Di manakah biasanya bendera Sang Saka Merah Putih dipasang saat perayaan 17 Agustus?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Di depan halaman rumah dan tiang bendera sekolah', 'is_correct' => true],
                            ['emoji' => '🗑️', 'text' => 'Di dalam lemari tertutup', 'is_correct' => false],
                            ['emoji' => '🌊', 'text' => 'Dihanyutkan ke sungai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa setiap negara di dunia memiliki bendera kebangsaan yang berbeda-beda?',
                        'audio' => 'Mengapa setiap negara di dunia memiliki bendera kebangsaan yang berbeda-beda?',
                        'emoji' => '🌍',
                        'options' => [
                            ['emoji' => '🌍', 'text' => 'Sebagai identitas, lambang kehormatan, dan pemersatu bangsa', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Hanya untuk hiasan mainan saja', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak memiliki arti apa pun', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (BENUA DUNIA & SAHABAT INTERNASIONAL) ---
            [
                'category_slug' => 'bendera',
                'level_number' => 3,
                'title' => 'Juara Benua Eropa, Australia & Amerika',
                'slug' => 'kuis-bendera-l3-eropa-australia-amerika',
                'icon_emoji' => '🇬🇧',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bendera negara Inggris (United Kingdom) yang terkenal dengan sebutan Union Jack memiliki corak...?',
                        'audio' => 'Bendera negara Inggris yang terkenal dengan sebutan Union Jack memiliki corak apa?',
                        'emoji' => '🇬🇧',
                        'options' => [
                            ['emoji' => '🇬🇧', 'text' => 'Salib Merah dan Salib Putih di atas kain Biru', 'is_correct' => true],
                            ['emoji' => '🇫🇷', 'text' => 'Tiga Garis Tegak Biru Putih Merah', 'is_correct' => false],
                            ['emoji' => '🇩🇪', 'text' => 'Tiga Garis Mendatar Hitam Merah Emas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Jerman memiliki tiga garis warna mendatar dari atas ke bawah yaitu...?',
                        'audio' => 'Bendera negara Jerman memiliki tiga garis warna mendatar dari atas ke bawah yaitu apa?',
                        'emoji' => '🇩🇪',
                        'options' => [
                            ['emoji' => '🇩🇪', 'text' => 'Hitam, Merah, dan Emas Kuning', 'is_correct' => true],
                            ['emoji' => '🇫🇷', 'text' => 'Biru, Putih, dan Merah', 'is_correct' => false],
                            ['emoji' => '🇮🇹', 'text' => 'Hijau, Putih, dan Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Prancis terdiri dari tiga garis warna tegak (Triwarna) berurutan dari kiri ke kanan yaitu...?',
                        'audio' => 'Bendera negara Prancis terdiri dari tiga garis warna tegak berurutan dari kiri ke kanan yaitu apa?',
                        'emoji' => '🇫🇷',
                        'options' => [
                            ['emoji' => '🇫🇷', 'text' => 'Biru, Putih, dan Merah', 'is_correct' => true],
                            ['emoji' => '🇮🇹', 'text' => 'Hijau, Putih, dan Merah', 'is_correct' => false],
                            ['emoji' => '🇩🇪', 'text' => 'Hitam, Merah, dan Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Italia memiliki tiga garis tegak yang mirip dengan Prancis, namun warna paling kirinya adalah...?',
                        'audio' => 'Bendera negara Italia memiliki tiga garis tegak yang mirip dengan Prancis namun warna paling kirinya adalah apa?',
                        'emoji' => '🇮🇹',
                        'options' => [
                            ['emoji' => '🇮🇹', 'text' => 'Warna Hijau Segar', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru Laut', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Australia berwarna biru dengan lambang Union Jack di sudut kiri serta gambar...?',
                        'audio' => 'Bendera negara Australia berwarna biru dengan lambang Union Jack di sudut kiri serta gambar apa?',
                        'emoji' => '🇦🇺',
                        'options' => [
                            ['emoji' => '🇦🇺', 'text' => 'Gugusan Bintang Salib Selatan (Southern Cross)', 'is_correct' => true],
                            ['emoji' => '🦘', 'text' => 'Gambar Kangguru Saja', 'is_correct' => false],
                            ['emoji' => '☀️', 'text' => 'Matahari Terbit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara Brasil dari Amerika Selatan berwarna hijau tropis dengan belah ketupat kuning dan di tengahnya ada...?',
                        'audio' => 'Bendera negara Brasil dari Amerika Selatan berwarna hijau tropis dengan belah ketupat kuning dan di tengahnya ada apa?',
                        'emoji' => '🇧🇷',
                        'options' => [
                            ['emoji' => '🇧🇷', 'text' => 'Bola Biru Langit Berbintang dan Pita Putih', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bola Sepak Hitam Putih', 'is_correct' => false],
                            ['emoji' => '🌴', 'text' => 'Gambar Pohon Kelapa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah warna garis tegak pada bendera negara Prancis dan Italia?',
                        'audio' => 'Berapakah jumlah warna garis tegak pada bendera negara Prancis dan Italia?',
                        'emoji' => '🇫🇷',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Garis Warna Tegak', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Garis Warna', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Garis Warna', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara manakah yang memiliki lambang empat Trigram hitam di keempat sudutnya?',
                        'audio' => 'Bendera negara manakah yang memiliki lambang empat Trigram hitam di keempat sudutnya?',
                        'emoji' => '🇰🇷',
                        'options' => [
                            ['emoji' => '🇰🇷', 'text' => 'Korea Selatan', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang', 'is_correct' => false],
                            ['emoji' => '🇨🇳', 'text' => 'Tiongkok', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Negara manakah yang benderanya memiliki warna merah marun dan gerigi putih sembilan sudut?',
                        'audio' => 'Negara manakah yang benderanya memiliki warna merah marun dan gerigi putih sembilan sudut?',
                        'emoji' => '🇶🇦',
                        'options' => [
                            ['emoji' => '🇶🇦', 'text' => 'Qatar', 'is_correct' => true],
                            ['emoji' => '🇸🇦', 'text' => 'Arab Saudi', 'is_correct' => false],
                            ['emoji' => '🇹🇷', 'text' => 'Turki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara manakah yang memiliki warna dasar hijau subur melambangkan hutan tropis Amazon?',
                        'audio' => 'Bendera negara manakah yang memiliki warna dasar hijau subur melambangkan hutan tropis Amazon?',
                        'emoji' => '🇧🇷',
                        'options' => [
                            ['emoji' => '🇧🇷', 'text' => 'Brasil', 'is_correct' => true],
                            ['emoji' => '🇩🇪', 'text' => 'Jerman', 'is_correct' => false],
                            ['emoji' => '🇬🇧', 'text' => 'Inggris', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Corak & Warna Bendera Sahabat',
                'slug' => 'kuis-bendera-l3-corak-warna-sahabat',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok bendera yang memiliki kombinasi warna dominan MERAH dan PUTIH saja?',
                        'audio' => 'Manakah kelompok bendera yang memiliki kombinasi warna dominan MERAH dan PUTIH saja?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Indonesia, Jepang, Turki & Singapura', 'is_correct' => true],
                            ['emoji' => '🇸🇦', 'text' => 'Arab Saudi, Brasil, Australia', 'is_correct' => false],
                            ['emoji' => '🇩🇪', 'text' => 'Jerman, Prancis, Inggris', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok negara yang benderanya memiliki 3 garis warna tegak (vertikal)?',
                        'audio' => 'Manakah kelompok negara yang benderanya memiliki 3 garis warna tegak vertikal?',
                        'emoji' => '🇫🇷',
                        'options' => [
                            ['emoji' => '🇫🇷', 'text' => 'Prancis & Italia', 'is_correct' => true],
                            ['emoji' => '🇩🇪', 'text' => 'Jerman & Mesir', 'is_correct' => false],
                            ['emoji' => '🇮🇩', 'text' => 'Indonesia & Malaysia', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok negara yang benderanya memiliki 3 garis warna mendatar (horizontal)?',
                        'audio' => 'Manakah kelompok negara yang benderanya memiliki 3 garis warna mendatar horizontal?',
                        'emoji' => '🇩🇪',
                        'options' => [
                            ['emoji' => '🇩🇪', 'text' => 'Jerman & Mesir', 'is_correct' => true],
                            ['emoji' => '🇫🇷', 'text' => 'Prancis & Italia', 'is_correct' => false],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang & Korea Selatan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lambang apakah yang terdapat di dalam lingkaran merah biru pada bendera Korea Selatan?',
                        'audio' => 'Lambang apakah yang terdapat di dalam lingkaran merah biru pada bendera Korea Selatan?',
                        'emoji' => '🇰🇷',
                        'options' => [
                            ['emoji' => '🇰🇷', 'text' => 'Lambang Keseimbangan Taegeuk', 'is_correct' => true],
                            ['emoji' => '☀️', 'text' => 'Matahari 8 Sinar', 'is_correct' => false],
                            ['emoji' => '🦅', 'text' => 'Burung Elang Emas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara sahabat manakah yang memiliki segitiga merah di sisi kiri benderanya?',
                        'audio' => 'Bendera negara sahabat manakah yang memiliki segitiga merah di sisi kiri benderanya?',
                        'emoji' => '🇵🇸',
                        'options' => [
                            ['emoji' => '🇵🇸', 'text' => 'Palestina', 'is_correct' => true],
                            ['emoji' => '🇯🇵', 'text' => 'Jepang', 'is_correct' => false],
                            ['emoji' => '🇸🇦', 'text' => 'Arab Saudi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang terletak paling atas pada bendera negara Jerman?',
                        'audio' => 'Warna apakah yang terletak paling atas pada bendera negara Jerman?',
                        'emoji' => '🇩🇪',
                        'options' => [
                            ['emoji' => '🇩🇪', 'text' => 'Warna Hitam', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Emas Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang membuat bendera Arab Saudi sangat unik dibandingkan bendera negara lain?',
                        'audio' => 'Apa yang membuat bendera Arab Saudi sangat unik dibandingkan bendera negara lain?',
                        'emoji' => '🇸🇦',
                        'options' => [
                            ['emoji' => '🇸🇦', 'text' => 'Memiliki tulisan kalimat suci dan pedang di atas warna hijau zamrud', 'is_correct' => true],
                            ['emoji' => '⚪', 'text' => 'Berwarna putih polos tanpa gambar', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Hanya ada lingkaran merah di tengah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Pada tanggal berapakah bangsa Indonesia selalu merayakan hari kemerdekaan dan mengibarkan bendera?',
                        'audio' => 'Pada tanggal berapakah bangsa Indonesia selalu merayakan hari kemerdekaan dan mengibarkan bendera?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => '17 Agustus', 'is_correct' => true],
                            ['emoji' => '📅', 'text' => '1 Januari', 'is_correct' => false],
                            ['emoji' => '📅', 'text' => '25 Desember', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus menghormati bendera negara sahabat saat acara pesta olahraga dunia?',
                        'audio' => 'Mengapa kita harus menghormati bendera negara sahabat saat acara pesta olahraga dunia?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => 'Untuk menjaga persahabatan, perdamaian, dan saling menghargai', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Karena disuruh tidur', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak perlu menghargai orang lain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sebutan kehormatan apakah yang diberikan untuk bendera kebangsaan negara Indonesia tercinta?',
                        'audio' => 'Sebutan kehormatan apakah yang diberikan untuk bendera kebangsaan negara Indonesia tercinta?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Sang Saka Merah Putih', 'is_correct' => true],
                            ['emoji' => '🟡', 'text' => 'Jalur Gemilang', 'is_correct' => false],
                            ['emoji' => '🇬🇧', 'text' => 'Union Jack', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bendera',
                'level_number' => 3,
                'title' => 'Grand Champion Duta Sahabat Bendera Dunia',
                'slug' => 'kuis-bendera-l3-grand-master-duta-dunia',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah bendera kebanggaan tanah air kita Indonesia tercinta?',
                        'audio' => 'Manakah bendera kebanggaan tanah air kita Indonesia tercinta?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🇮🇩', 'text' => 'Sang Saka Merah Putih', 'is_correct' => true],
                            ['emoji' => '🇲🇾', 'text' => 'Jalur Gemilang', 'is_correct' => false],
                            ['emoji' => '🇯🇵', 'text' => 'Hinomaru Matahari Terbit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera manakah yang memiliki lambang matahari bersinar delapan arah di atas segitiga putih?',
                        'audio' => 'Bendera manakah yang memiliki lambang matahari bersinar delapan arah di atas segitiga putih?',
                        'emoji' => '🇵🇭',
                        'options' => [
                            ['emoji' => '🇵🇭', 'text' => 'Filipina', 'is_correct' => true],
                            ['emoji' => '🇹🇭', 'text' => 'Thailand', 'is_correct' => false],
                            ['emoji' => '🇧🇳', 'text' => 'Brunei Darussalam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera manakah yang memiliki julukan terkenal "Union Jack"?',
                        'audio' => 'Bendera manakah yang memiliki julukan terkenal Union Jack?',
                        'emoji' => '🇬🇧',
                        'options' => [
                            ['emoji' => '🇬🇧', 'text' => 'Inggris (United Kingdom)', 'is_correct' => true],
                            ['emoji' => '🇫🇷', 'text' => 'Prancis', 'is_correct' => false],
                            ['emoji' => '🇩🇪', 'text' => 'Jerman', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Lambang bulan sabit dan bintang pada bendera Turki melambangkan...?',
                        'audio' => 'Lambang bulan sabit dan bintang pada bendera Turki melambangkan apa?',
                        'emoji' => '🇹🇷',
                        'options' => [
                            ['emoji' => '🇹🇷', 'text' => 'Keindahan cahaya langit malam dan harapan cerah', 'is_correct' => true],
                            ['emoji' => '☀️', 'text' => 'Siang hari yang panas', 'is_correct' => false],
                            ['emoji' => '🌊', 'text' => 'Ombak laut samudra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna hijau pada bendera Brasil melambangkan kekayaan alam berupa...?',
                        'audio' => 'Warna hijau pada bendera Brasil melambangkan kekayaan alam berupa apa?',
                        'emoji' => '🇧🇷',
                        'options' => [
                            ['emoji' => '🇧🇷', 'text' => 'Hutan dan alam tropis Amazon yang subur luas', 'is_correct' => true],
                            ['emoji' => '❄️', 'text' => 'Salju kutub yang dingin', 'is_correct' => false],
                            ['emoji' => '🏜️', 'text' => 'Padang pasir gersang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera negara manakah yang memiliki lambang negara di atas kain kuning keemasan megah?',
                        'audio' => 'Bendera negara manakah yang memiliki lambang negara di atas kain kuning keemasan megah?',
                        'emoji' => '🇧🇳',
                        'options' => [
                            ['emoji' => '🇧🇳', 'text' => 'Brunei Darussalam', 'is_correct' => true],
                            ['emoji' => '🇸🇬', 'text' => 'Singapura', 'is_correct' => false],
                            ['emoji' => '🇮🇩', 'text' => 'Indonesia', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bendera manakah yang memiliki warna Merah, Putih, Hitam dengan Elang Emas di tengahnya?',
                        'audio' => 'Bendera manakah yang memiliki warna Merah Putih Hitam dengan Elang Emas di tengahnya?',
                        'emoji' => '🇪🇬',
                        'options' => [
                            ['emoji' => '🇪🇬', 'text' => 'Mesir', 'is_correct' => true],
                            ['emoji' => '🇶🇦', 'text' => 'Qatar', 'is_correct' => false],
                            ['emoji' => '🇦🇪', 'text' => 'Uni Emirat Arab', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana sikap anak Indonesia yang hebat saat berkenalan dengan sahabat dari berbagai negara?',
                        'audio' => 'Bagaimana sikap anak Indonesia yang hebat saat berkenalan dengan sahabat dari berbagai negara?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => 'Ramah, sopan, bersahabat, dan saling menghargai', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => 'Mengejek warna benderanya', 'is_correct' => false],
                            ['emoji' => '🏃‍♂️', 'text' => 'Menjauhi dan menolak berteman', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa belajar mengenal bendera negara dunia membuat kita berwawasan luas?',
                        'audio' => 'Mengapa belajar mengenal bendera negara dunia membuat kita berwawasan luas?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena kita jadi mengenal keberagaman sahabat di seluruh dunia', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar kita cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada gunanya sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai bendera negara di dunia dengan hebat?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai bendera negara di dunia dengan hebat?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Duta Cilik Persahabatan & Penjelajah Bendera Dunia!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk di Kamar', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Tiang yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 10: MENGENAL ANGGOTA TUBUH & PANCA INDRA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (PANCA INDRA UTAMA & WAJAH CERIA) ---
            [
                'category_slug' => 'tubuh',
                'level_number' => 1,
                'title' => 'Panca Indra: Mata, Telinga & Hidung Cilik',
                'slug' => 'kuis-tubuh-l1-mata-telinga-hidung',
                'icon_emoji' => '👀',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bagian wajah yang berjumlah dua dan kita gunakan untuk melihat warna-warni dunia adalah...?',
                        'audio' => 'Bagian wajah yang berjumlah dua dan kita gunakan untuk melihat warna-warni dunia adalah apa?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Dua Mata Indah', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian kepala di sebelah kanan dan kiri yang berfungsi untuk mendengar suara dan nasehat baik adalah...?',
                        'audio' => 'Bagian kepala di sebelah kanan dan kiri yang berfungsi untuk mendengar suara dan nasehat baik adalah apa?',
                        'emoji' => '👂',
                        'options' => [
                            ['emoji' => '👂', 'text' => 'Dua Telinga', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'Dua Mata', 'is_correct' => false],
                            ['emoji' => '👄', 'text' => 'Mulut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian indra di tengah wajah yang digunakan untuk mencium wangi bunga dan bernapas adalah...?',
                        'audio' => 'Bagian indra di tengah wajah yang digunakan untuk mencium wangi bunga dan bernapas adalah apa?',
                        'emoji' => '👃',
                        'options' => [
                            ['emoji' => '👃', 'text' => 'Hidung Bersih', 'is_correct' => true],
                            ['emoji' => '👅', 'text' => 'Lidah', 'is_correct' => false],
                            ['emoji' => '🦷', 'text' => 'Gigi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'level_number' => 1,
                'title' => 'Lidah Pengecap, Tangan & Mulut Senyum',
                'slug' => 'kuis-tubuh-l1-lidah-tangan-mulut',
                'icon_emoji' => '👅',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bagian indra di dalam mulut yang berfungsi untuk merasakan manisnya madu dan lezatnya buah adalah...?',
                        'audio' => 'Bagian indra di dalam mulut yang berfungsi untuk merasakan manisnya madu dan lezatnya buah adalah apa?',
                        'emoji' => '👅',
                        'options' => [
                            ['emoji' => '👅', 'text' => 'Lidah Pengecap Rasa', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh yang memiliki sepuluh jari terampil untuk meraba, memegang pensil, dan tos adalah...?',
                        'audio' => 'Bagian tubuh yang memiliki sepuluh jari terampil untuk meraba memegang pensil dan tos adalah apa?',
                        'emoji' => '✋',
                        'options' => [
                            ['emoji' => '✋', 'text' => 'Dua Tangan Terampil', 'is_correct' => true],
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian wajah yang kita gunakan untuk berbicara kata sopan dan tersenyum manis ceria adalah...?',
                        'audio' => 'Bagian wajah yang kita gunakan untuk berbicara kata sopan dan tersenyum manis ceria adalah apa?',
                        'emoji' => '👄',
                        'options' => [
                            ['emoji' => '👄', 'text' => 'Mulut & Bibir Senyum', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'level_number' => 1,
                'title' => 'Gigi Bersih & Merawat Kebersihan Indra',
                'slug' => 'kuis-tubuh-l1-gigi-kebersihan-indra',
                'icon_emoji' => '🦷',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bagian putih dan kuat di dalam mulut yang digunakan untuk mengunyah makanan adalah...?',
                        'audio' => 'Bagian putih dan kuat di dalam mulut yang digunakan untuk mengunyah makanan adalah apa?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => 'Gigi Putih Bersih', 'is_correct' => true],
                            ['emoji' => '👅', 'text' => 'Lidah Saja', 'is_correct' => false],
                            ['emoji' => '👄', 'text' => 'Bibir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah yang kita gunakan setiap hari untuk membersihkan gigi dari kuman sisa makanan?',
                        'audio' => 'Benda apakah yang kita gunakan setiap hari untuk membersihkan gigi dari kuman sisa makanan?',
                        'emoji' => '🪥',
                        'options' => [
                            ['emoji' => '🪥', 'text' => 'Sikat Gigi dan Pasta Gigi', 'is_correct' => true],
                            ['emoji' => '📏', 'text' => 'Penggaris', 'is_correct' => false],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus rajin mencuci tangan dengan sabun setelah bermain di luar?',
                        'audio' => 'Mengapa kita harus rajin mencuci tangan dengan sabun setelah bermain di luar?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Agar tangan bersih, bebas kuman, dan tidak mudah sakit', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar tangan menjadi kotor', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada gunanya', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (ANGGOTA GERAK, KEPALA & KEKUATAN TUBUH) ---
            [
                'category_slug' => 'tubuh',
                'level_number' => 2,
                'title' => 'Kaki Kuat Melangkah & Otot Perkasa',
                'slug' => 'kuis-tubuh-l2-kaki-otot-perkasa',
                'icon_emoji' => '🦵',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bagian tubuh bawah yang sangat kuat dan kita gunakan untuk berjalan, berlari, dan melompat adalah...?',
                        'audio' => 'Bagian tubuh bawah yang sangat kuat dan kita gunakan untuk berjalan berlari dan melompat adalah apa?',
                        'emoji' => '🦵',
                        'options' => [
                            ['emoji' => '🦵', 'text' => 'Dua Kaki Kuat', 'is_correct' => true],
                            ['emoji' => '✋', 'text' => 'Tangan', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian paling bawah dari kaki yang bersentuhan langsung dengan tanah dan beralaskan sepatu adalah...?',
                        'audio' => 'Bagian paling bawah dari kaki yang bersentuhan langsung dengan tanah dan beralaskan sepatu adalah apa?',
                        'emoji' => '🦶',
                        'options' => [
                            ['emoji' => '🦶', 'text' => 'Telapak Kaki Berpijak', 'is_correct' => true],
                            ['emoji' => '🦵', 'text' => 'Lutut Kaki', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian lengan yang jika dilatih membuat kita bertenaga dan kuat mengangkat benda adalah...?',
                        'audio' => 'Bagian lengan yang jika dilatih membuat kita bertenaga dan kuat mengangkat benda adalah apa?',
                        'emoji' => '💪',
                        'options' => [
                            ['emoji' => '💪', 'text' => 'Otot Lengan Perkasa', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👅', 'text' => 'Lidah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah jari yang ada pada satu telapak tangan kita?',
                        'audio' => 'Berapakah jumlah jari yang ada pada satu telapak tangan kita?',
                        'emoji' => '✋',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Jari Tangan', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Jari Tangan', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Jari Tangan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gerakan tangan apakah yang kita lakukan saat bertepuk tangan memberikan semangat gembira?',
                        'audio' => 'Gerakan tangan apakah yang kita lakukan saat bertepuk tangan memberikan semangat gembira?',
                        'emoji' => '👏',
                        'options' => [
                            ['emoji' => '👏', 'text' => 'Bertepuk Dua Telapak Tangan (Prok-prok)', 'is_correct' => true],
                            ['emoji' => '🦵', 'text' => 'Menendang Kaki', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Menutup Mata Tidur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'level_number' => 2,
                'title' => 'Kepala Cerdas, Rambut & Jempol Hebat',
                'slug' => 'kuis-tubuh-l2-kepala-rambut-jempol',
                'icon_emoji' => '👶',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bagian atas tubuh tempat beradanya mata, hidung, mulut, telinga, dan otak adalah...?',
                        'audio' => 'Bagian atas tubuh tempat beradanya mata hidung mulut telinga dan otak adalah apa?',
                        'emoji' => '👶',
                        'options' => [
                            ['emoji' => '👶', 'text' => 'Kepala & Wajah Ceria', 'is_correct' => true],
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                            ['emoji' => '🦶', 'text' => 'Telapak Kaki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mahkota di atas kepala yang halus dan harus rajin disisir serta dicuci keramas adalah...?',
                        'audio' => 'Mahkota di atas kepala yang halus dan harus rajin disisir serta dicuci keramas adalah apa?',
                        'emoji' => '💇',
                        'options' => [
                            ['emoji' => '💇', 'text' => 'Rambut Kepala Rapi', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '🦷', 'text' => 'Gigi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jari tangan yang diacungkan ke atas sebagai simbol pujian untuk anak yang hebat dan juara adalah...?',
                        'audio' => 'Jari tangan yang diacungkan ke atas sebagai simbol pujian untuk anak yang hebat dan juara adalah apa?',
                        'emoji' => '👍',
                        'options' => [
                            ['emoji' => '👍', 'text' => 'Ibu Jari Jempol Hebat', 'is_correct' => true],
                            ['emoji' => '🖐️', 'text' => 'Jari Kelingking', 'is_correct' => false],
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Rasa apakah yang biasanya dirasakan oleh lidah saat kita memakan es krim manis?',
                        'audio' => 'Rasa apakah yang biasanya dirasakan oleh lidah saat kita memakan es krim manis?',
                        'emoji' => '🍦',
                        'options' => [
                            ['emoji' => '🍦', 'text' => 'Rasa Manis Lezat', 'is_correct' => true],
                            ['emoji' => '🧂', 'text' => 'Rasa Asin Gurih', 'is_correct' => false],
                            ['emoji' => '🌶️', 'text' => 'Rasa Pedas Sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa kali minimal kita disarankan menggosok gigi dengan sikat gigi setiap hari?',
                        'audio' => 'Berapa kali minimal kita disarankan menggosok gigi dengan sikat gigi setiap hari?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => '2 Kali Sehari (Pagi & Sebelum Tidur)', 'is_correct' => true],
                            ['emoji' => '🗓️', 'text' => '1 Bulan Sekali', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Tidak Pernah Menggosok Gigi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'level_number' => 2,
                'title' => 'Harmoni Panca Indra & Kebiasaan Sehat Ceria',
                'slug' => 'kuis-tubuh-l2-harmoni-panca-indra',
                'icon_emoji' => '🛡️',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok berikut yang semuanya termasuk ke dalam 5 Panca Indra manusia?',
                        'audio' => 'Manakah kelompok berikut yang semuanya termasuk ke dalam 5 Panca Indra manusia?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Mata, Telinga, Hidung, Lidah, Kulit Peraba', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Sepatu, Tas, Buku, Pensil', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Mobil, Sepeda, Kereta Api, Bus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Indra manakah yang kita gunakan saat mendengarkan dongeng cerita ayah dan bunda?',
                        'audio' => 'Indra manakah yang kita gunakan saat mendengarkan dongeng cerita ayah dan bunda?',
                        'emoji' => '👂',
                        'options' => [
                            ['emoji' => '👂', 'text' => 'Telinga (Indra Pendengaran)', 'is_correct' => true],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                            ['emoji' => '👅', 'text' => 'Lidah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Indra manakah yang kita gunakan saat mencium harum wangi sabun mandi?',
                        'audio' => 'Indra manakah yang kita gunakan saat mencium harum wangi sabun mandi?',
                        'emoji' => '👃',
                        'options' => [
                            ['emoji' => '👃', 'text' => 'Hidung (Indra Penciuman)', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita tidak boleh membaca buku di tempat yang gelap gulita?',
                        'audio' => 'Mengapa kita tidak boleh membaca buku di tempat yang gelap gulita?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Agar mata kita tetap sehat dan tidak cepat lelah', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar kita cepat tertidur', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada pengaruhnya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sikap apakah yang baik saat kita bertemu teman baru di sekolah untuk menunjukkan persahabatan?',
                        'audio' => 'Sikap apakah yang baik saat kita bertemu teman baru di sekolah untuk menunjukkan persahabatan?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => 'Berjabat tangan ramah dan tersenyum', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => 'Membuang muka dan cemberut', 'is_correct' => false],
                            ['emoji' => '🏃‍♂️', 'text' => 'Menendang dan lari menjauh', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (ORGAN DALAM & RANGKA TUBUH KOKOH) ---
            [
                'category_slug' => 'tubuh',
                'level_number' => 3,
                'title' => 'Organ Dalam Menakjubkan & Rangka Tubuh Kokoh',
                'slug' => 'kuis-tubuh-l3-organ-dalam-rangka',
                'icon_emoji' => '🧠',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Organ penting di dalam kepala yang kita gunakan untuk berpikir, mengingat, dan belajar adalah...?',
                        'audio' => 'Organ penting di dalam kepala yang kita gunakan untuk berpikir mengingat dan belajar adalah apa?',
                        'emoji' => '🧠',
                        'options' => [
                            ['emoji' => '🧠', 'text' => 'Otak Cerdas Berpikir', 'is_correct' => true],
                            ['emoji' => '🫀', 'text' => 'Jantung', 'is_correct' => false],
                            ['emoji' => '🦴', 'text' => 'Tulang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Organ di dalam dada yang berdetak deg-deg dan bertugas memompa darah ke seluruh tubuh adalah...?',
                        'audio' => 'Organ di dalam dada yang berdetak deg-deg dan bertugas memompa darah ke seluruh tubuh adalah apa?',
                        'emoji' => '🫀',
                        'options' => [
                            ['emoji' => '🫀', 'text' => 'Jantung Pemompa Darah', 'is_correct' => true],
                            ['emoji' => '🧠', 'text' => 'Otak', 'is_correct' => false],
                            ['emoji' => '🫁', 'text' => 'Paru-paru', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sepasang organ di dalam rongga dada yang bekerja saat kita menghirup udara segar beroksigen adalah...?',
                        'audio' => 'Sepasang organ di dalam rongga dada yang bekerja saat kita menghirup udara segar beroksigen adalah apa?',
                        'emoji' => '🫁',
                        'options' => [
                            ['emoji' => '🫁', 'text' => 'Paru-Paru Pernapasan', 'is_correct' => true],
                            ['emoji' => '🫀', 'text' => 'Jantung', 'is_correct' => false],
                            ['emoji' => '🦴', 'text' => 'Tulang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh yang keras di dalam daging yang membentuk kerangka kokoh penopang tubuh adalah...?',
                        'audio' => 'Bagian tubuh yang keras di dalam daging yang membentuk kerangka kokoh penopang tubuh adalah apa?',
                        'emoji' => '🦴',
                        'options' => [
                            ['emoji' => '🦴', 'text' => 'Tulang Rangka Kokoh', 'is_correct' => true],
                            ['emoji' => '🧠', 'text' => 'Otak', 'is_correct' => false],
                            ['emoji' => '👅', 'text' => 'Lidah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jejak apakah yang tertinggal di atas pasir saat kita melangkah berjalan tanpa alas kaki?',
                        'audio' => 'Jejak apakah yang tertinggal di atas pasir saat kita melangkah berjalan tanpa alas kaki?',
                        'emoji' => '👣',
                        'options' => [
                            ['emoji' => '👣', 'text' => 'Jejak Langkah Kaki Cilik', 'is_correct' => true],
                            ['emoji' => '✋', 'text' => 'Jejak Tangan', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Jejak Mobil', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sentuhan tangan seperti apakah yang melambangkan janji persahabatan dan saling memaafkan?',
                        'audio' => 'Sentuhan tangan seperti apakah yang melambangkan janji persahabatan dan saling memaafkan?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => 'Jabat Tangan Sahabat Hangat', 'is_correct' => true],
                            ['emoji' => '🤜', 'text' => 'Memukul Teman', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Mengabaikan Orang Lain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah total jumlah jari tangan kanan dan jari tangan kiri kita jika digabungkan?',
                        'audio' => 'Berapakah total jumlah jari tangan kanan dan jari tangan kiri kita jika digabungkan?',
                        'emoji' => '✋',
                        'options' => [
                            ['emoji' => '🔟', 'text' => '10 Jari Tangan', 'is_correct' => true],
                            ['emoji' => '5️⃣', 'text' => '5 Jari Tangan', 'is_correct' => false],
                            ['emoji' => '2️⃣0️⃣', 'text' => '20 Jari Tangan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Minuman apakah yang kaya akan kalsium untuk membuat tulang dan gigi kita tumbuh kuat?',
                        'audio' => 'Minuman apakah yang kaya akan kalsium untuk membuat tulang dan gigi kita tumbuh kuat?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'Susu Sehat Segar', 'is_correct' => true],
                            ['emoji' => '🍭', 'text' => 'Air Permen Manis', 'is_correct' => false],
                            ['emoji' => '🥤', 'text' => 'Minuman Bersoda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang terjadi pada detak jantung kita saat kita selesai berlari kencang di lapangan?',
                        'audio' => 'Apa yang terjadi pada detak jantung kita saat kita selesai berlari kencang di lapangan?',
                        'emoji' => '🫀',
                        'options' => [
                            ['emoji' => '🫀', 'text' => 'Berdetak lebih cepat memompa darah segar', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Berhenti berdetak', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak mengalami perubahan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus bersyukur kepada Tuhan atas tubuh sehat dan panca indra yang lengkap?',
                        'audio' => 'Mengapa kita harus bersyukur kepada Tuhan atas tubuh sehat dan panca indra yang lengkap?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena tubuh sehat adalah anugerah luar biasa untuk belajar dan berbuat baik', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tidak perlu bersyukur', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Biasa saja tidak ada gunanya', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Fungsi Anggota Tubuh & Indra',
                'slug' => 'kuis-tubuh-l3-fungsi-tubuh-indra',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bagian tubuh manakah yang merupakan indra penglihatan kita?',
                        'audio' => 'Bagian tubuh manakah yang merupakan indra penglihatan kita?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Sepasang Mata', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang merupakan indra pendengaran kita?',
                        'audio' => 'Bagian tubuh manakah yang merupakan indra pendengaran kita?',
                        'emoji' => '👂',
                        'options' => [
                            ['emoji' => '👂', 'text' => 'Sepasang Telinga', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                            ['emoji' => '👅', 'text' => 'Lidah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang merupakan indra pembau dan penciuman kita?',
                        'audio' => 'Bagian tubuh manakah yang merupakan indra pembau dan penciuman kita?',
                        'emoji' => '👃',
                        'options' => [
                            ['emoji' => '👃', 'text' => 'Hidung Bersih', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '✋', 'text' => 'Kulit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang merupakan indra pengecap aneka rasa makanan?',
                        'audio' => 'Bagian tubuh manakah yang merupakan indra pengecap aneka rasa makanan?',
                        'emoji' => '👅',
                        'options' => [
                            ['emoji' => '👅', 'text' => 'Lidah Pengecap', 'is_correct' => true],
                            ['emoji' => '🦷', 'text' => 'Gigi', 'is_correct' => false],
                            ['emoji' => '👄', 'text' => 'Bibir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang merupakan indra peraba untuk merasakan panas, dingin, halus, dan kasar?',
                        'audio' => 'Bagian tubuh manakah yang merupakan indra peraba untuk merasakan panas dingin halus dan kasar?',
                        'emoji' => '✋',
                        'options' => [
                            ['emoji' => '✋', 'text' => 'Kulit dan Telapak Tangan', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Anggota tubuh manakah yang paling utama kita gunakan saat menendang bola ke gawang sepak bola?',
                        'audio' => 'Anggota tubuh manakah yang paling utama kita gunakan saat menendang bola ke gawang sepak bola?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '🦵', 'text' => 'Kaki dan Telapak Kaki', 'is_correct' => true],
                            ['emoji' => '✋', 'text' => 'Tangan', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Anggota tubuh manakah yang kita gunakan saat menulis catatan di atas buku tulis?',
                        'audio' => 'Anggota tubuh manakah yang kita gunakan saat menulis catatan di atas buku tulis?',
                        'emoji' => '✍️',
                        'options' => [
                            ['emoji' => '✋', 'text' => 'Jari-Jari Tangan Terampil', 'is_correct' => true],
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang kita anggukkan saat menyetujui sesuatu dengan sopan?',
                        'audio' => 'Bagian tubuh manakah yang kita anggukkan saat menyetujui sesuatu dengan sopan?',
                        'emoji' => '👶',
                        'options' => [
                            ['emoji' => '👶', 'text' => 'Kepala', 'is_correct' => true],
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                            ['emoji' => '🦶', 'text' => 'Telapak Kaki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Organ manakah yang paling terlindungi di dalam tempurung tengkorak kepala yang keras?',
                        'audio' => 'Organ manakah yang paling terlindungi di dalam tempurung tengkorak kepala yang keras?',
                        'emoji' => '🧠',
                        'options' => [
                            ['emoji' => '🧠', 'text' => 'Otak Cerdas', 'is_correct' => true],
                            ['emoji' => '🫀', 'text' => 'Jantung', 'is_correct' => false],
                            ['emoji' => '🫁', 'text' => 'Paru-paru', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah cara terbaik menjaga kesehatan paru-paru pernapasan kita?',
                        'audio' => 'Bagaimanakah cara terbaik menjaga kesehatan paru-paru pernapasan kita?',
                        'emoji' => '🫁',
                        'options' => [
                            ['emoji' => '🫁', 'text' => 'Menghirup udara bersih di alam dan rajin berolahraga', 'is_correct' => true],
                            ['emoji' => '💨', 'text' => 'Menghirup asap pembakaran sampah', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Hanya tidur dan tidak pernah bergerak', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tubuh',
                'level_number' => 3,
                'title' => 'Grand Champion Dokter Cilik & Ahli Tubuh Pintar',
                'slug' => 'kuis-tubuh-l3-grand-master-dokter-cilik',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bagian tubuh manakah yang membuat kita bisa melihat indahnya pemandangan alam semesta?',
                        'audio' => 'Bagian tubuh manakah yang membuat kita bisa melihat indahnya pemandangan alam semesta?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Sepasang Mata Indah', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang membuat kita bisa mendengarkan lagu merdu dan nasehat guru?',
                        'audio' => 'Bagian tubuh manakah yang membuat kita bisa mendengarkan lagu merdu dan nasehat guru?',
                        'emoji' => '👂',
                        'options' => [
                            ['emoji' => '👂', 'text' => 'Sepasang Telinga Cermat', 'is_correct' => true],
                            ['emoji' => '👃', 'text' => 'Hidung', 'is_correct' => false],
                            ['emoji' => '👅', 'text' => 'Lidah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagian tubuh manakah yang digunakan untuk mengunyah buah apel yang renyah dan sehat?',
                        'audio' => 'Bagian tubuh manakah yang digunakan untuk mengunyah buah apel yang renyah dan sehat?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => 'Gigi yang Kuat dan Bersih', 'is_correct' => true],
                            ['emoji' => '👂', 'text' => 'Telinga', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus kita lakukan setiap kali tangan kita kotor terkena debu atau tanah?',
                        'audio' => 'Apa yang harus kita lakukan setiap kali tangan kita kotor terkena debu atau tanah?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Mencuci tangan dengan air bersih mengalir dan sabun', 'is_correct' => true],
                            ['emoji' => '👕', 'text' => 'Mengusapnya di baju seragam', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Membiarkannya kotor begitu saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Organ tubuh apakah yang berdetak memompa darah ke seluruh tubuh di dalam dada kita?',
                        'audio' => 'Organ tubuh apakah yang berdetak memompa darah ke seluruh tubuh di dalam dada kita?',
                        'emoji' => '🫀',
                        'options' => [
                            ['emoji' => '🫀', 'text' => 'Jantung yang Kuat dan Sehat', 'is_correct' => true],
                            ['emoji' => '🧠', 'text' => 'Otak', 'is_correct' => false],
                            ['emoji' => '🦴', 'text' => 'Tulang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jari manakah yang kita acungkan saat memberikan apresiasi anak hebat jempolan?',
                        'audio' => 'Jari manakah yang kita acungkan saat memberikan apresiasi anak hebat jempolan?',
                        'emoji' => '👍',
                        'options' => [
                            ['emoji' => '👍', 'text' => 'Ibu Jari Jempol Hebat', 'is_correct' => true],
                            ['emoji' => '🖐️', 'text' => 'Jari Manis', 'is_correct' => false],
                            ['emoji' => '🦵', 'text' => 'Kaki', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah total jumlah panca indra yang dimiliki oleh manusia?',
                        'audio' => 'Berapakah total jumlah panca indra yang dimiliki oleh manusia?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Panca Indra', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Panca Indra', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Panca Indra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa anak hebat harus tidur cukup selama 8-10 jam setiap malam?',
                        'audio' => 'Mengapa anak hebat harus tidur cukup selama 8-10 jam setiap malam?',
                        'emoji' => '😴',
                        'options' => [
                            ['emoji' => '😴', 'text' => 'Agar otak dan seluruh organ tubuh bisa beristirahat dan bertumbuh sehat', 'is_correct' => true],
                            ['emoji' => '🎮', 'text' => 'Agar bisa begadang bermain terus', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada manfaatnya sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara anak pintar merawat seluruh anggota tubuhnya setiap hari?',
                        'audio' => 'Bagaimana cara anak pintar merawat seluruh anggota tubuhnya setiap hari?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Mandi teratur, makan makanan bergizi, berolahraga, dan menjaga kebersihan', 'is_correct' => true],
                            ['emoji' => '🍟', 'text' => 'Hanya makan permen manis dan tidak mandi', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Hanya tidur seharian tanpa beraktivitas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak hebat yang pandai mengenali dan merawat seluruh tubuhnya?',
                        'audio' => 'Gelar apakah yang pantas untuk anak hebat yang pandai mengenali dan merawat seluruh tubuhnya?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Dokter Cilik Juara & Sahabat Tubuh Sehat!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Malas Mandi', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Patung yang Diam', 'is_correct' => false],
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

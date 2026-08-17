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

            // =========================================================================
            // PILAR 1 - TOPIK 6: MENGENAL WARNA CERIA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (WARNA PRIMER & POPULER DASAR) ---
            [
                'category_slug' => 'warna',
                'level_number' => 1,
                'title' => 'Warna Primer Ceria: Merah, Kuning, Biru',
                'slug' => 'kuis-warna-l1-primer-ceria',
                'icon_emoji' => '🔴',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Warna buah stroberi manis, buah apel matang, dan bendera bagian atas Indonesia adalah...?',
                        'audio' => 'Warna buah stroberi manis buah apel matang dan bendera bagian atas Indonesia adalah apa?',
                        'emoji' => '🔴',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Warna Merah Berani', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna langit cerah di siang hari dan air samudra luas adalah...?',
                        'audio' => 'Warna langit cerah di siang hari dan air samudra luas adalah apa?',
                        'emoji' => '🔵',
                        'options' => [
                            ['emoji' => '🔵', 'text' => 'Warna Biru Langit', 'is_correct' => true],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                            ['emoji' => '⚪', 'text' => 'Warna Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna sinar mentari pagi dan buah pisang yang sudah matang adalah...?',
                        'audio' => 'Warna sinar mentari pagi dan buah pisang yang sudah matang adalah apa?',
                        'emoji' => '🟡',
                        'options' => [
                            ['emoji' => '🟡', 'text' => 'Warna Kuning Matahari', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'level_number' => 1,
                'title' => 'Eksplorasi Hijau, Oranye & Ungu Manis',
                'slug' => 'kuis-warna-l1-hijau-oranye-ungu',
                'icon_emoji' => '🟢',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Warna segar daun pepohonan rindang dan rumput di taman adalah...?',
                        'audio' => 'Warna segar daun pepohonan rindang dan rumput di taman adalah apa?',
                        'emoji' => '🟢',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau Daun', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                            ['emoji' => '🟠', 'text' => 'Warna Oranye', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna buah jeruk manis dan sayuran wortel kesukaan kelinci adalah...?',
                        'audio' => 'Warna buah jeruk manis dan sayuran wortel kesukaan kelinci adalah apa?',
                        'emoji' => '🟠',
                        'options' => [
                            ['emoji' => '🟠', 'text' => 'Warna Oranye Jeruk', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna butiran buah anggur matang dan sayur terong kebun adalah...?',
                        'audio' => 'Warna butiran buah anggur matang dan sayur terong kebun adalah apa?',
                        'emoji' => '🟣',
                        'options' => [
                            ['emoji' => '🟣', 'text' => 'Warna Ungu Anggur', 'is_correct' => true],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                            ['emoji' => '⚪', 'text' => 'Warna Putih', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'level_number' => 1,
                'title' => 'Pesona Warna Putih & Alam Sekitar',
                'slug' => 'kuis-warna-l1-putih-alam-sekitar',
                'icon_emoji' => '⚪',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Warna segelas susu segar yang menyehatkan dan awan bersih di langit adalah...?',
                        'audio' => 'Warna segelas susu segar yang menyehatkan dan awan bersih di langit adalah apa?',
                        'emoji' => '⚪',
                        'options' => [
                            ['emoji' => '⚪', 'text' => 'Warna Putih Bersih', 'is_correct' => true],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah apel yang matang dan manis di pohon umumnya memiliki warna...?',
                        'audio' => 'Buah apel yang matang dan manis di pohon umumnya memiliki warna apa?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah rumput di taman bermain saat tumbuh subur dan segar?',
                        'audio' => 'Warna apakah rumput di taman bermain saat tumbuh subur dan segar?',
                        'emoji' => '🌱',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau Segar', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                            ['emoji' => '🟠', 'text' => 'Warna Oranye', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (WARNA SEKUNDER, BUMI & KILAU) ---
            [
                'category_slug' => 'warna',
                'level_number' => 2,
                'title' => 'Warna Hitam, Cokelat & Merah Muda Manis',
                'slug' => 'kuis-warna-l2-hitam-cokelat-pink',
                'icon_emoji' => '🟤',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Warna malam hari yang tenang bertabur bintang dan warna aspal jalan raya adalah...?',
                        'audio' => 'Warna malam hari yang tenang bertabur bintang dan warna aspal jalan raya adalah apa?',
                        'emoji' => '⚫',
                        'options' => [
                            ['emoji' => '⚫', 'text' => 'Warna Hitam Pekat', 'is_correct' => true],
                            ['emoji' => '⚪', 'text' => 'Warna Putih', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna batang pohon kayu yang kokoh dan kue cokelat lezat adalah...?',
                        'audio' => 'Warna batang pohon kayu yang kokoh dan kue cokelat lezat adalah apa?',
                        'emoji' => '🟤',
                        'options' => [
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat Manis', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna manis lembut seperti kelopak bunga mawar merah muda dan permen adalah...?',
                        'audio' => 'Warna manis lembut seperti kelopak bunga mawar merah muda dan permen adalah apa?',
                        'emoji' => '🩷',
                        'options' => [
                            ['emoji' => '🩷', 'text' => 'Warna Merah Muda Ceria', 'is_correct' => true],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna tubuh hewan gajah besar perkasa dan batu gunung yang kokoh adalah...?',
                        'audio' => 'Warna tubuh hewan gajah besar perkasa dan batu gunung yang kokoh adalah apa?',
                        'emoji' => '🩶',
                        'options' => [
                            ['emoji' => '🩶', 'text' => 'Warna Abu-Abu Gajah', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna air sungai pegunungan yang jernih dan langit pagi yang cerah adalah...?',
                        'audio' => 'Warna air sungai pegunungan yang jernih dan langit pagi yang cerah adalah apa?',
                        'emoji' => '🩵',
                        'options' => [
                            ['emoji' => '🩵', 'text' => 'Warna Biru Muda Awan', 'is_correct' => true],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'level_number' => 2,
                'title' => 'Kemilau Emas, Perak & Hijau Toska Segar',
                'slug' => 'kuis-warna-l2-emas-perak-toska',
                'icon_emoji' => '💛',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Warna kuning berkilau megah seperti piala sang juara dan mahkota raja adalah...?',
                        'audio' => 'Warna kuning berkilau megah seperti piala sang juara dan mahkota raja adalah apa?',
                        'emoji' => '💛',
                        'options' => [
                            ['emoji' => '💛', 'text' => 'Warna Kuning Emas Megah', 'is_correct' => true],
                            ['emoji' => '🩶', 'text' => 'Warna Abu-abu', 'is_correct' => false],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna danau tropis bening yang merupakan perpaduan indah hijau dan biru adalah...?',
                        'audio' => 'Warna danau tropis bening yang merupakan perpaduan indah hijau dan biru adalah apa?',
                        'emoji' => '💚',
                        'options' => [
                            ['emoji' => '💚', 'text' => 'Warna Hijau Toska Segar', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna abu-abu berkilau mengkilap seperti sendok makan perak dan koin adalah...?',
                        'audio' => 'Warna abu-abu berkilau mengkilap seperti sendok makan perak dan koin adalah apa?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '✨', 'text' => 'Warna Perak Berkilau', 'is_correct' => true],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah warna yang melambangkan keberanian pada bendera Sang Saka Indonesia?',
                        'audio' => 'Manakah warna yang melambangkan keberanian pada bendera Sang Saka Indonesia?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Warna Merah (Berani)', 'is_correct' => true],
                            ['emoji' => '⚪', 'text' => 'Warna Putih', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah warna yang melambangkan kesucian dan kebersihan pada bendera Indonesia?',
                        'audio' => 'Manakah warna yang melambangkan kesucian dan kebersihan pada bendera Indonesia?',
                        'emoji' => '🕊️',
                        'options' => [
                            ['emoji' => '⚪', 'text' => 'Warna Putih (Suci)', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'level_number' => 2,
                'title' => 'Petualangan Aneka Warna Buah & Alam',
                'slug' => 'kuis-warna-l2-warna-buah-alam',
                'icon_emoji' => '🎨',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Warna apakah kulit buah pisang yang sudah matang dan manis?',
                        'audio' => 'Warna apakah kulit buah pisang yang sudah matang dan manis?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🟡', 'text' => 'Warna Kuning Cerah', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah sayuran wortel segar yang renyah dan menyehatkan mata?',
                        'audio' => 'Warna apakah sayuran wortel segar yang renyah dan menyehatkan mata?',
                        'emoji' => '🥕',
                        'options' => [
                            ['emoji' => '🟠', 'text' => 'Warna Oranye Segar', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                            ['emoji' => '⚪', 'text' => 'Warna Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah buah alpukat gurih dan daun teh di perkebunan pegunungan?',
                        'audio' => 'Warna apakah buah alpukat gurih dan daun teh di perkebunan pegunungan?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau Subur', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda langit apakah yang bersinar memberikan warna kuning keemasan di siang hari?',
                        'audio' => 'Benda langit apakah yang bersinar memberikan warna kuning keemasan di siang hari?',
                        'emoji' => '☀️',
                        'options' => [
                            ['emoji' => '☀️', 'text' => 'Matahari Hangat', 'is_correct' => true],
                            ['emoji' => '🌙', 'text' => 'Bulan Malam', 'is_correct' => false],
                            ['emoji' => '☁️', 'text' => 'Awan Kelabu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah susu murni yang sering kita minum setiap pagi sebelum beraktivitas?',
                        'audio' => 'Warna apakah susu murni yang sering kita minum setiap pagi sebelum beraktivitas?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '⚪', 'text' => 'Warna Putih Bersih', 'is_correct' => true],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat Pekat', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (SAINS PENCAMPURAN WARNA & NUANSA ALAM) ---
            [
                'category_slug' => 'warna',
                'level_number' => 3,
                'title' => 'Sains Pencampuran Warna Ajaib (Primer & Sekunder)',
                'slug' => 'kuis-warna-l3-pencampuran-warna',
                'icon_emoji' => '🖌️',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah tiga warna yang termasuk ke dalam kelompok Warna Primer dasar?',
                        'audio' => 'Manakah tiga warna yang termasuk ke dalam kelompok Warna Primer dasar?',
                        'emoji' => '🎨',
                        'options' => [
                            ['emoji' => '🎨', 'text' => 'Merah, Kuning, dan Biru', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Ungu, Hijau, dan Oranye', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Hitam, Putih, dan Abu-abu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika kita mencampurkan cat warna MERAH dan KUNING, warna baru apakah yang akan terbentuk?',
                        'audio' => 'Jika kita mencampurkan cat warna MERAH dan KUNING warna baru apakah yang akan terbentuk?',
                        'emoji' => '🟠',
                        'options' => [
                            ['emoji' => '🟠', 'text' => 'Warna Oranye', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika kita mencampurkan cat warna BIRU dan KUNING, warna baru apakah yang akan tercipta?',
                        'audio' => 'Jika kita mencampurkan cat warna BIRU dan KUNING warna baru apakah yang akan tercipta?',
                        'emoji' => '🟢',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => true],
                            ['emoji' => '🟠', 'text' => 'Warna Oranye', 'is_correct' => false],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika kita mencampurkan cat warna MERAH dan BIRU, warna baru apakah yang akan dihasilkan?',
                        'audio' => 'Jika kita mencampurkan cat warna MERAH dan BIRU warna baru apakah yang akan dihasilkan?',
                        'emoji' => '🟣',
                        'options' => [
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika warna merah dicampur dengan warna putih, warna lembut apakah yang akan muncul?',
                        'audio' => 'Jika warna merah dicampur dengan warna putih warna lembut apakah yang akan muncul?',
                        'emoji' => '🩷',
                        'options' => [
                            ['emoji' => '🩷', 'text' => 'Warna Merah Muda (Pink)', 'is_correct' => true],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika warna hitam dicampur dengan warna putih, warna apakah yang akan terbentuk?',
                        'audio' => 'Jika warna hitam dicampur dengan warna putih warna apakah yang akan terbentuk?',
                        'emoji' => '🩶',
                        'options' => [
                            ['emoji' => '🩶', 'text' => 'Warna Abu-Abu', 'is_correct' => true],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna sekunder adalah kelompok warna yang dihasilkan dari...?',
                        'audio' => 'Warna sekunder adalah kelompok warna yang dihasilkan dari apa?',
                        'emoji' => '🖌️',
                        'options' => [
                            ['emoji' => '🖌️', 'text' => 'Pencampuran dua warna primer', 'is_correct' => true],
                            ['emoji' => '⚪', 'text' => 'Warna putih saja tanpa dicampur', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna hitam pekat saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna biru nila pekat pada buah bluberi merupakan perpaduan antara...?',
                        'audio' => 'Warna biru nila pekat pada buah bluberi merupakan perpaduan antara apa?',
                        'emoji' => '🫐',
                        'options' => [
                            ['emoji' => '🫐', 'text' => 'Warna Biru dan sedikit Ungu', 'is_correct' => true],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning dan Merah', 'is_correct' => false],
                            ['emoji' => '⚪', 'text' => 'Warna Putih dan Hijau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna cokelat hangat di alam bisa dihasilkan dari perpaduan warna...?',
                        'audio' => 'Warna cokelat hangat di alam bisa dihasilkan dari perpaduan warna apa?',
                        'emoji' => '🟤',
                        'options' => [
                            ['emoji' => '🟤', 'text' => 'Warna Oranye dan sedikit Hitam atau Biru', 'is_correct' => true],
                            ['emoji' => '⚪', 'text' => 'Warna Putih dan Kuning', 'is_correct' => false],
                            ['emoji' => '🔴', 'text' => 'Warna Merah dan Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa warna-warni di dunia sangat indah dan menyenangkan bagi mata kita?',
                        'audio' => 'Mengapa warna-warni di dunia sangat indah dan menyenangkan bagi mata kita?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena warna memberikan keindahan dan mengenal aneka ciptaan Tuhan', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar kita cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada artinya sama sekali', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Nuansa Warna Dingin & Hangat',
                'slug' => 'kuis-warna-l3-nuansa-warna-alam',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok warna yang memberikan kesan hangat dan bersemangat?',
                        'audio' => 'Manakah kelompok warna yang memberikan kesan hangat dan bersemangat?',
                        'emoji' => '🔥',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Merah, Oranye, dan Kuning', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Biru, Biru Muda, dan Hijau Toska', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Hitam, Putih, dan Abu-abu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok warna yang memberikan kesan sejuk dan dingin menenangkan?',
                        'audio' => 'Manakah kelompok warna yang memberikan kesan sejuk dan dingin menenangkan?',
                        'emoji' => '❄️',
                        'options' => [
                            ['emoji' => '🔵', 'text' => 'Biru Samudra, Hijau Daun, Biru Muda', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Merah, Oranye, Kuning Menyala', 'is_correct' => false],
                            ['emoji' => '🟤', 'text' => 'Cokelat dan Hitam Pekat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna gradasi senja saat matahari terbenam terdiri dari perpaduan warna...?',
                        'audio' => 'Warna gradasi senja saat matahari terbenam terdiri dari perpaduan warna apa?',
                        'emoji' => '🌅',
                        'options' => [
                            ['emoji' => '🌅', 'text' => 'Merah, Jingga Oranye, dan Kuning Emas', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => 'Hijau dan Biru Laut', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Hitam dan Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang paling cocok untuk menggambarkan daun-daun kering yang gugur di musim kemarau?',
                        'audio' => 'Warna apakah yang paling cocok untuk menggambarkan daun-daun kering yang gugur di musim kemarau?',
                        'emoji' => '🍂',
                        'options' => [
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat dan Kuning Tua', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru Muda', 'is_correct' => false],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang mendominasi pemandangan pantai dan lautan yang jernih di siang hari?',
                        'audio' => 'Warna apakah yang mendominasi pemandangan pantai dan lautan yang jernih di siang hari?',
                        'emoji' => '🌊',
                        'options' => [
                            ['emoji' => '🔵', 'text' => 'Biru dan Biru Muda Jernih', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Merah Menyala', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Hitam Pekat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang mendominasi pemandangan hutan rimba yang subur dan lebat?',
                        'audio' => 'Warna apakah yang mendominasi pemandangan hutan rimba yang subur dan lebat?',
                        'emoji' => '🌲',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau Rindang', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                            ['emoji' => '🩷', 'text' => 'Warna Merah Muda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna perak berkilau sering kita temukan pada benda berupa...?',
                        'audio' => 'Warna perak berkilau sering kita temukan pada benda berupa apa?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '✨', 'text' => 'Sendok makan, koin logam, dan perhiasan perak', 'is_correct' => true],
                            ['emoji' => '🍃', 'text' => 'Daun pepohonan segar', 'is_correct' => false],
                            ['emoji' => '🪵', 'text' => 'Batang kayu pohon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang menandakan lampu lalu lintas bahwa kendaraan harus BERHENTI?',
                        'audio' => 'Warna apakah yang menandakan lampu lalu lintas bahwa kendaraan harus BERHENTI?',
                        'emoji' => '🚦',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Warna Merah (Berhenti)', 'is_correct' => true],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang menandakan lampu lalu lintas bahwa kendaraan boleh BERJALAN MAJU?',
                        'audio' => 'Warna apakah yang menandakan lampu lalu lintas bahwa kendaraan boleh BERJALAN MAJU?',
                        'emoji' => '🚦',
                        'options' => [
                            ['emoji' => '🟢', 'text' => 'Warna Hijau (Jalan)', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang menandakan lampu lalu lintas agar pengemudi BERHATI-HATI?',
                        'audio' => 'Warna apakah yang menandakan lampu lalu lintas agar pengemudi BERHATI-HATI?',
                        'emoji' => '🚦',
                        'options' => [
                            ['emoji' => '🟡', 'text' => 'Warna Kuning (Hati-hati)', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🟢', 'text' => 'Warna Hijau', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'warna',
                'level_number' => 3,
                'title' => 'Grand Champion Pelukis Cilik Ahli Warna Ceria',
                'slug' => 'kuis-warna-l3-grand-master-pelukis',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Alat tulis manakah yang memiliki aneka warna lilin cerah untuk mewarnai gambar di buku gambar?',
                        'audio' => 'Alat tulis manakah yang memiliki aneka warna lilin cerah untuk mewarnai gambar di buku gambar?',
                        'emoji' => '🖍️',
                        'options' => [
                            ['emoji' => '🖍️', 'text' => 'Krayon Warna-Warni', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Gunting Kertas', 'is_correct' => false],
                            ['emoji' => '📏', 'text' => 'Penggaris', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang menjadi latar belakang bendera negara Jepang dengan lingkaran merah di tengah?',
                        'audio' => 'Warna apakah yang menjadi latar belakang bendera negara Jepang dengan lingkaran merah di tengah?',
                        'emoji' => '🇯🇵',
                        'options' => [
                            ['emoji' => '⚪', 'text' => 'Warna Putih Bersih', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna dasar apakah yang mendominasi bendera negara Arab Saudi?',
                        'audio' => 'Warna dasar apakah yang mendominasi bendera negara Arab Saudi?',
                        'emoji' => '🇸🇦',
                        'options' => [
                            ['emoji' => '🇸🇦', 'text' => 'Warna Hijau Zamrud', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '⚪', 'text' => 'Warna Putih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang dihasilkan saat sinar matahari pagi bersinar cerah menerangi bumi?',
                        'audio' => 'Warna apakah yang dihasilkan saat sinar matahari pagi bersinar cerah menerangi bumi?',
                        'emoji' => '☀️',
                        'options' => [
                            ['emoji' => '🟡', 'text' => 'Warna Kuning Hangat', 'is_correct' => true],
                            ['emoji' => '🟣', 'text' => 'Warna Ungu', 'is_correct' => false],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika anak pintar ingin menggambar batang pohon kelapa yang kokoh, warna apakah yang dipilih?',
                        'audio' => 'Jika anak pintar ingin menggambar batang pohon kelapa yang kokoh warna apakah yang dipilih?',
                        'emoji' => '🌴',
                        'options' => [
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat Kayu', 'is_correct' => true],
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => false],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang dipilih saat anak pintar menggambar langit biru cerah di atas rumah?',
                        'audio' => 'Warna apakah yang dipilih saat anak pintar menggambar langit biru cerah di atas rumah?',
                        'emoji' => '🌤️',
                        'options' => [
                            ['emoji' => '🔵', 'text' => 'Warna Biru Langit', 'is_correct' => true],
                            ['emoji' => '⚫', 'text' => 'Warna Hitam', 'is_correct' => false],
                            ['emoji' => '🟤', 'text' => 'Warna Cokelat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah warna primer dasar yang menjadi pembentuk warna lainnya?',
                        'audio' => 'Berapakah jumlah warna primer dasar yang menjadi pembentuk warna lainnya?',
                        'emoji' => '🎨',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Warna (Merah, Kuning, Biru)', 'is_correct' => true],
                            ['emoji' => '5️⃣', 'text' => '5 Warna', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Warna', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Warna apakah yang membuat bunga mawar di taman terlihat sangat anggun dan menawan?',
                        'audio' => 'Warna apakah yang membuat bunga mawar di taman terlihat sangat anggun dan menawan?',
                        'emoji' => '🌹',
                        'options' => [
                            ['emoji' => '🔴', 'text' => 'Merah dan Merah Muda', 'is_correct' => true],
                            ['emoji' => '⚫', 'text' => 'Hitam Aspal', 'is_correct' => false],
                            ['emoji' => '🩶', 'text' => 'Abu-abu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa belajar mengenal warna membuat imajinasi dan kreativitas anak berkembang pesat?',
                        'audio' => 'Mengapa belajar mengenal warna membuat imajinasi dan kreativitas anak berkembang pesat?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena membantu anak mengekspresikan karya seni dan mengenal alam dengan ceria', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar cepat tertidur', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada manfaatnya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai semua jenis warna dan perpaduannya?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai semua jenis warna dan perpaduannya?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Pelukis Cilik Juara & Sahabat Warna Ceria!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Coret Tembok', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Kanvas yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 1 - TOPIK 7: MENGENAL BENTUK GEOMETRI INDAH (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (BENTUK GEOMETRI 2D DASAR) ---
            [
                'category_slug' => 'bentuk',
                'level_number' => 1,
                'title' => 'Lingkaran Bulat & Segitiga Runcing Ceria',
                'slug' => 'kuis-bentuk-l1-lingkaran-segitiga',
                'icon_emoji' => '⭕',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bentuk bangun datar yang bulat sempurna tanpa sudut seperti roda sepeda dan piring makan adalah...?',
                        'audio' => 'Bentuk bangun datar yang bulat sempurna tanpa sudut seperti roda sepeda dan piring makan adalah apa?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran Bulat', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk bangun datar yang memiliki tiga garis sisi dan tiga sudut runcing seperti potongan pizza adalah...?',
                        'audio' => 'Bentuk bangun datar yang memiliki tiga garis sisi dan tiga sudut runcing seperti potongan pizza adalah apa?',
                        'emoji' => '🔺',
                        'options' => [
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga Runcing', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🏷️', 'text' => 'Bentuk Persegi Panjang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jam dinding bulat di kamar kita memiliki bentuk bangun datar...?',
                        'audio' => 'Jam dinding bulat di kamar kita memiliki bentuk bangun datar apa?',
                        'emoji' => '⏰',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bentuk Bintang', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bentuk',
                'level_number' => 1,
                'title' => 'Persegi Kotak & Persegi Panjang Rapi',
                'slug' => 'kuis-bentuk-l1-persegi-persegi-panjang',
                'icon_emoji' => '🟩',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bentuk kotak yang memiliki empat sisi sama panjang seperti biskuit kotak adalah...?',
                        'audio' => 'Bentuk kotak yang memiliki empat sisi sama panjang seperti biskuit kotak adalah apa?',
                        'emoji' => '🟩',
                        'options' => [
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi Kotak', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk yang memiliki dua sisi panjang dan dua sisi pendek seperti buku tulis dan daun pintu adalah...?',
                        'audio' => 'Bentuk yang memiliki dua sisi panjang dan dua sisi pendek seperti buku tulis dan daun pintu adalah apa?',
                        'emoji' => '🏷️',
                        'options' => [
                            ['emoji' => '🏷️', 'text' => 'Bentuk Persegi Panjang', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bentuk Bintang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah garis sisi pada bangun datar persegi kotak?',
                        'audio' => 'Berapakah jumlah garis sisi pada bangun datar persegi kotak?',
                        'emoji' => '🟩',
                        'options' => [
                            ['emoji' => '4️⃣', 'text' => '4 Sisi Sama Panjang', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Sisi', 'is_correct' => false],
                            ['emoji' => '0️⃣', 'text' => '0 Sisi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bentuk',
                'level_number' => 1,
                'title' => 'Bintang Bersinar, Hati Kasih & Bulan Sabit',
                'slug' => 'kuis-bentuk-l1-bintang-hati-bulan',
                'icon_emoji' => '⭐',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Bentuk bersudut lima yang bersinar indah menghiasi langit malam adalah...?',
                        'audio' => 'Bentuk bersudut lima yang bersinar indah menghiasi langit malam adalah apa?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '⭐', 'text' => 'Bentuk Bintang Lima Sudut', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk lengkung manis yang melambangkan rasa cinta dan kasih sayang kepada orang tua adalah...?',
                        'audio' => 'Bentuk lengkung manis yang melambangkan rasa cinta dan kasih sayang kepada orang tua adalah apa?',
                        'emoji' => '❤️',
                        'options' => [
                            ['emoji' => '❤️', 'text' => 'Bentuk Hati Kasih Sayang', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '🏷️', 'text' => 'Bentuk Persegi Panjang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk lengkungan bulan yang bersinar lembut di langit malam awal bulan adalah...?',
                        'audio' => 'Bentuk lengkungan bulan yang bersinar lembut di langit malam awal bulan adalah apa?',
                        'emoji' => '🌙',
                        'options' => [
                            ['emoji' => '🌙', 'text' => 'Bentuk Bulan Sabit', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bentuk Bintang', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (BENTUK GEOMETRI LANJUTAN & DATAR) ---
            [
                'category_slug' => 'bentuk',
                'level_number' => 2,
                'title' => 'Belah Ketupat, Layang-Layang & Oval Telur',
                'slug' => 'kuis-bentuk-l2-ketupat-layangan-oval',
                'icon_emoji' => '🔶',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bentuk bersudut empat miring yang simetris seperti anyaman ketupat hari raya adalah...?',
                        'audio' => 'Bentuk bersudut empat miring yang simetris seperti anyaman ketupat hari raya adalah apa?',
                        'emoji' => '🔶',
                        'options' => [
                            ['emoji' => '🔶', 'text' => 'Bentuk Belah Ketupat', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk bersudut empat dengan bagian bawah lebih panjang yang siap terbang dengan benang di udara adalah...?',
                        'audio' => 'Bentuk bersudut empat dengan bagian bawah lebih panjang yang siap terbang dengan benang di udara adalah apa?',
                        'emoji' => '🔷',
                        'options' => [
                            ['emoji' => '🔷', 'text' => 'Bentuk Layang-Layang', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                            ['emoji' => '🌙', 'text' => 'Bulan Sabit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk bulat lonjong memanjang tanpa sudut seperti bentuk telur ayam adalah...?',
                        'audio' => 'Bentuk bulat lonjong memanjang tanpa sudut seperti bentuk telur ayam adalah apa?',
                        'emoji' => '🥚',
                        'options' => [
                            ['emoji' => '🥚', 'text' => 'Bentuk Oval Telur', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bentuk Bintang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah di meja makan yang memiliki bentuk oval lonjong alami?',
                        'audio' => 'Benda apakah di meja makan yang memiliki bentuk oval lonjong alami?',
                        'emoji' => '🥚',
                        'options' => [
                            ['emoji' => '🥚', 'text' => 'Telur Ayam Rebus', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Kotak Tisu Persegi', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Potongan Semangka', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah sudut yang dimiliki oleh bangun belah ketupat?',
                        'audio' => 'Berapakah jumlah sudut yang dimiliki oleh bangun belah ketupat?',
                        'emoji' => '🔶',
                        'options' => [
                            ['emoji' => '4️⃣', 'text' => '4 Sudut', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Sudut', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Sudut', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bentuk',
                'level_number' => 2,
                'title' => 'Mengenal Segi Lima, Segi Enam & Lengkungan',
                'slug' => 'kuis-bentuk-l2-segi-lima-enam',
                'icon_emoji' => '🛑',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bangun datar kokoh yang memiliki 5 garis sisi sama panjang dan 5 sudut adalah...?',
                        'audio' => 'Bangun datar kokoh yang memiliki 5 garis sisi sama panjang dan 5 sudut adalah apa?',
                        'emoji' => '🛑',
                        'options' => [
                            ['emoji' => '🛑', 'text' => 'Bentuk Segi Lima (Pentagon)', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun datar bersisi 6 yang tersusun rapi sempurna seperti pola sarang lebah madu adalah...?',
                        'audio' => 'Bangun datar bersisi 6 yang tersusun rapi sempurna seperti pola sarang lebah madu adalah apa?',
                        'emoji' => '🐝',
                        'options' => [
                            ['emoji' => '🐝', 'text' => 'Bentuk Segi Enam (Heksagon)', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                            ['emoji' => '❤️', 'text' => 'Bentuk Hati', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Garis melengkung halus seperti bentuk jembatan lengkung dan busur panah adalah...?',
                        'audio' => 'Garis melengkung halus seperti bentuk jembatan lengkung dan busur panah adalah apa?',
                        'emoji' => '🏹',
                        'options' => [
                            ['emoji' => '🏹', 'text' => 'Bentuk Busur Lengkung', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Perpotongan dua garis lurus tegak dan mendatar seperti tanda tambah pada matematika adalah...?',
                        'audio' => 'Perpotongan dua garis lurus tegak dan mendatar seperti tanda tambah pada matematika adalah apa?',
                        'emoji' => '➕',
                        'options' => [
                            ['emoji' => '➕', 'text' => 'Bentuk Tanda Palang Tambah', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🥚', 'text' => 'Bentuk Oval', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah garis sisi yang dimiliki oleh sarang lebah madu (heksagon)?',
                        'audio' => 'Berapakah jumlah garis sisi yang dimiliki oleh sarang lebah madu heksagon?',
                        'emoji' => '🐝',
                        'options' => [
                            ['emoji' => '6️⃣', 'text' => '6 Sisi Simetris', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Sisi', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Sisi', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bentuk',
                'level_number' => 2,
                'title' => 'Detektif Bentuk Benda di Sekitar Kita',
                'slug' => 'kuis-bentuk-l2-detektif-bentuk',
                'icon_emoji' => '🔍',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Daun pintu kamar dan permukaan meja belajar umumnya memiliki bentuk...?',
                        'audio' => 'Daun pintu kamar dan permukaan meja belajar umumnya memiliki bentuk apa?',
                        'emoji' => '🚪',
                        'options' => [
                            ['emoji' => '🏷️', 'text' => 'Bentuk Persegi Panjang', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Roda mobil, koin uang, dan tutup botol minum semuanya memiliki bentuk...?',
                        'audio' => 'Roda mobil koin uang dan tutup botol minum semuanya memiliki bentuk apa?',
                        'emoji' => '🪙',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran Bulat', 'is_correct' => true],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bentuk Bintang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Penggaris segitiga dan potongan kue pizza memiliki bentuk...?',
                        'audio' => 'Penggaris segitiga dan potongan kue pizza memiliki bentuk apa?',
                        'emoji' => '🍕',
                        'options' => [
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga Runcing', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🥚', 'text' => 'Bentuk Oval', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bingkai foto kotak sama sisi di dinding kamar memiliki bentuk...?',
                        'audio' => 'Bingkai foto kotak sama sisi di dinding kamar memiliki bentuk apa?',
                        'emoji' => '🖼️',
                        'options' => [
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi Kotak', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '🌙', 'text' => 'Bulan Sabit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa roda kendaraan darat dibuat berbentuk lingkaran bulat?',
                        'audio' => 'Mengapa roda kendaraan darat dibuat berbentuk lingkaran bulat?',
                        'emoji' => '🚗',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Agar mudah berputar dan menggelinding lancar di jalan', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Agar mudah tersangkut batu', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => 'Agar tidak bisa bergerak maju', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (BANGUN RUANG 3D & EKSPLORASI GEOMETRI) ---
            [
                'category_slug' => 'bentuk',
                'level_number' => 3,
                'title' => 'Bangun Ruang 3D: Kubus, Bola & Tabung Silinder',
                'slug' => 'kuis-bentuk-l3-bangun-ruang-kubus-bola',
                'icon_emoji' => '🧊',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bangun ruang 3 dimensi yang memiliki 6 sisi kotak persegi sama besar seperti dadu mainan adalah...?',
                        'audio' => 'Bangun ruang 3 dimensi yang memiliki 6 sisi kotak persegi sama besar seperti dadu mainan adalah apa?',
                        'emoji' => '🧊',
                        'options' => [
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus 3D', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola', 'is_correct' => false],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun ruang 3 dimensi yang bulat padat dan bisa menggelinding ke segala arah seperti bola sepak adalah...?',
                        'audio' => 'Bangun ruang 3 dimensi yang bulat padat dan bisa menggelinding ke segala arah seperti bola sepak adalah apa?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '⛺', 'text' => 'Bentuk Prisma', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun ruang silinder yang memiliki alas dan tutup lingkaran seperti kaleng susu dan drum musik adalah...?',
                        'audio' => 'Bangun ruang silinder yang memiliki alas dan tutup lingkaran seperti kaleng susu dan drum musik adalah apa?',
                        'emoji' => '🥫',
                        'options' => [
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung Silinder 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Es batu kotak di dalam gelas minuman dingin berbentuk bangun ruang...?',
                        'audio' => 'Es batu kotak di dalam gelas minuman dingin berbentuk bangun ruang apa?',
                        'emoji' => '🧊',
                        'options' => [
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus 3D', 'is_correct' => true],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kaleng biskuit bulat tinggi memiliki bentuk bangun ruang...?',
                        'audio' => 'Kaleng biskuit bulat tinggi memiliki bentuk bangun ruang apa?',
                        'emoji' => '🥫',
                        'options' => [
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung Silinder', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '⛺', 'text' => 'Bentuk Prisma', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bola basket dan bola kasti termasuk ke dalam kelompok bangun ruang...?',
                        'audio' => 'Bola basket dan bola kasti termasuk ke dalam kelompok bangun ruang apa?',
                        'emoji' => '🏀',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🏛️', 'text' => 'Bentuk Balok', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah sisi datar pada bangun ruang kubus?',
                        'audio' => 'Berapakah jumlah sisi datar pada bangun ruang kubus?',
                        'emoji' => '🧊',
                        'options' => [
                            ['emoji' => '6️⃣', 'text' => '6 Sisi Kotak Sama Besar', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Sisi', 'is_correct' => false],
                            ['emoji' => '2️⃣', 'text' => '2 Sisi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun ruang manakah yang tidak memiliki sudut lancip sama sekali dan berbentuk bulat utuh?',
                        'audio' => 'Bangun ruang manakah yang tidak memiliki sudut lancip sama sekali dan berbentuk bulat utuh?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tutup kaleng dan alas tabung silinder memiliki bentuk bangun 2D berupa...?',
                        'audio' => 'Tutup kaleng dan alas tabung silinder memiliki bentuk bangun 2D berupa apa?',
                        'emoji' => '🥫',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa bangun 3D disebut sebagai bangun ruang?',
                        'audio' => 'Mengapa bangun 3D disebut sebagai bangun ruang?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena memiliki volume isi di dalamnya dan dapat diisi benda', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Karena berada di luar angkasa', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada ruangan di dalamnya', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bentuk',
                'level_number' => 3,
                'title' => 'Bangun Ruang 3D: Kerucut, Prisma & Balok Panjang',
                'slug' => 'kuis-bentuk-l3-kerucut-prisma-balok',
                'icon_emoji' => '🍦',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bangun ruang yang memiliki alas lingkaran dan mengerucut runcing ke atas seperti topi pesta adalah...?',
                        'audio' => 'Bangun ruang yang memiliki alas lingkaran dan mengerucut runcing ke atas seperti topi pesta adalah apa?',
                        'emoji' => '🍦',
                        'options' => [
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut Corong 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🏛️', 'text' => 'Bentuk Balok', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun ruang yang memiliki sisi segitiga kokoh seperti bentuk tenda perkemahan pramuka adalah...?',
                        'audio' => 'Bangun ruang yang memiliki sisi segitiga kokoh seperti bentuk tenda perkemahan pramuka adalah apa?',
                        'emoji' => '⛺',
                        'options' => [
                            ['emoji' => '⛺', 'text' => 'Bentuk Prisma Segitiga 3D', 'is_correct' => true],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun ruang 3 dimensi yang memiliki sisi persegi panjang seperti kotak kardus sepatu dan lemari adalah...?',
                        'audio' => 'Bangun ruang 3 dimensi yang memiliki sisi persegi panjang seperti kotak kardus sepatu dan lemari adalah apa?',
                        'emoji' => '🏛️',
                        'options' => [
                            ['emoji' => '🏛️', 'text' => 'Bentuk Balok Ruang Panjang 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Corong es krim renyah (cone) yang lezat memiliki bentuk bangun ruang...?',
                        'audio' => 'Corong es krim renyah cone yang lezat memiliki bentuk bangun ruang apa?',
                        'emoji' => '🍦',
                        'options' => [
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut 3D', 'is_correct' => true],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                            ['emoji' => '⛺', 'text' => 'Bentuk Prisma', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Tenda perkemahan yang didirikan di alam terbuka memiliki bentuk bangun ruang...?',
                        'audio' => 'Tenda perkemahan yang didirikan di alam terbuka memiliki bentuk bangun ruang apa?',
                        'emoji' => '⛺',
                        'options' => [
                            ['emoji' => '⛺', 'text' => 'Bentuk Prisma Segitiga', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola', 'is_correct' => false],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kotak pensil berbahan kayu dan batu bata bangunan memiliki bentuk bangun ruang...?',
                        'audio' => 'Kotak pensil berbahan kayu dan batu bata bangunan memiliki bentuk bangun ruang apa?',
                        'emoji' => '🧱',
                        'options' => [
                            ['emoji' => '🏛️', 'text' => 'Bentuk Balok Ruang Panjang', 'is_correct' => true],
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apakah perbedaan utama antara bangun ruang kubus dan balok?',
                        'audio' => 'Apakah perbedaan utama antara bangun ruang kubus dan balok?',
                        'emoji' => '📐',
                        'options' => [
                            ['emoji' => '📐', 'text' => 'Kubus sisinya persegi sama sisi, balok sisinya persegi panjang', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Kubus bulat, balok kotak', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Kubus segitiga, balok lingkaran', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda pembatas jalan raya (traffic cone) berbentuk bangun ruang...?',
                        'audio' => 'Benda pembatas jalan raya traffic cone berbentuk bangun ruang apa?',
                        'emoji' => '🚧',
                        'options' => [
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Atap tenda prisma segitiga ditopang oleh bidang depan berbentuk...?',
                        'audio' => 'Atap tenda prisma segitiga ditopang oleh bidang depan berbentuk apa?',
                        'emoji' => '⛺',
                        'options' => [
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga Kokoh', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🥚', 'text' => 'Bentuk Oval', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa lemari pakaian dan kotak kardus berbentuk balok sangat praktis digunakan?',
                        'audio' => 'Mengapa lemari pakaian dan kotak kardus berbentuk balok sangat praktis digunakan?',
                        'emoji' => '📦',
                        'options' => [
                            ['emoji' => '🏛️', 'text' => 'Karena memiliki ruang penyimpanan yang luas dan stabil diletakkan', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar mudah menggelinding di lantai', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak praktis sama sekali', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'bentuk',
                'level_number' => 3,
                'title' => 'Grand Champion Arsitek Cilik Ahli Bentuk Geometri',
                'slug' => 'kuis-bentuk-l3-grand-master-arsitek',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bentuk bangun datar apakah yang memiliki 3 sudut runcing dan 3 sisi garis lurus?',
                        'audio' => 'Bentuk bangun datar apakah yang memiliki 3 sudut runcing dan 3 sisi garis lurus?',
                        'emoji' => '🔺',
                        'options' => [
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga Runcing', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bentuk bangun ruang apakah yang digunakan anak-anak saat bermain bola tendang di lapangan?',
                        'audio' => 'Bentuk bangun ruang apakah yang digunakan anak-anak saat bermain bola tendang di lapangan?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola 3D', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun geometri apakah yang memiliki 4 sisi sama panjang dan 4 sudut siku-siku?',
                        'audio' => 'Bangun geometri apakah yang memiliki 4 sisi sama panjang dan 4 sudut siku-siku?',
                        'emoji' => '🟩',
                        'options' => [
                            ['emoji' => '🟩', 'text' => 'Bentuk Persegi Kotak', 'is_correct' => true],
                            ['emoji' => '🏷️', 'text' => 'Bentuk Persegi Panjang', 'is_correct' => false],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Benda apakah di angkasa malam yang berbentuk lengkungan bulan sabit?',
                        'audio' => 'Benda apakah di angkasa malam yang berbentuk lengkungan bulan sabit?',
                        'emoji' => '🌙',
                        'options' => [
                            ['emoji' => '🌙', 'text' => 'Bulan Sabit Malam', 'is_correct' => true],
                            ['emoji' => '☀️', 'text' => 'Matahari Siang', 'is_correct' => false],
                            ['emoji' => '☁️', 'text' => 'Awan Mendung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Topi pesulap atau topi kerucut pesta ulang tahun memiliki bentuk bangun ruang...?',
                        'audio' => 'Topi pesulap atau topi kerucut pesta ulang tahun memiliki bentuk bangun ruang apa?',
                        'emoji' => '🎉',
                        'options' => [
                            ['emoji' => '🍦', 'text' => 'Bentuk Kerucut Corong', 'is_correct' => true],
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bentuk Bola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Sarang lebah madu yang unik tersusun dari ratusan pola bangun datar...?',
                        'audio' => 'Sarang lebah madu yang unik tersusun dari ratusan pola bangun datar apa?',
                        'emoji' => '🐝',
                        'options' => [
                            ['emoji' => '🐝', 'text' => 'Segi Enam (Heksagon)', 'is_correct' => true],
                            ['emoji' => '🔺', 'text' => 'Bentuk Segitiga', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun ruang apakah yang memiliki bentuk seperti dadu bermata enam?',
                        'audio' => 'Bangun ruang apakah yang memiliki bentuk seperti dadu bermata enam?',
                        'emoji' => '🎲',
                        'options' => [
                            ['emoji' => '🧊', 'text' => 'Bentuk Kubus 3D', 'is_correct' => true],
                            ['emoji' => '🥫', 'text' => 'Bentuk Tabung', 'is_correct' => false],
                            ['emoji' => '⛺', 'text' => 'Bentuk Prisma', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bangun datar apakah yang berbentuk berlian empat sisi miring seperti makanan ketupat lebaran?',
                        'audio' => 'Bangun datar apakah yang berbentuk berlian empat sisi miring seperti makanan ketupat lebaran?',
                        'emoji' => '🔶',
                        'options' => [
                            ['emoji' => '🔶', 'text' => 'Bentuk Belah Ketupat', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Bentuk Lingkaran', 'is_correct' => false],
                            ['emoji' => '🥚', 'text' => 'Bentuk Oval', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa belajar mengenal bentuk geometri sangat penting untuk calon arsitek dan insinyur cilik?',
                        'audio' => 'Mengapa belajar mengenal bentuk geometri sangat penting untuk calon arsitek dan insinyur cilik?',
                        'emoji' => '🏗️',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena semua gedung, rumah, dan benda di dunia dirancang dari bentuk geometri', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak penting sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak hebat yang menguasai seluruh bentuk 2D dan 3D dengan sempurna?',
                        'audio' => 'Gelar apakah yang pantas untuk anak hebat yang menguasai seluruh bentuk 2D dan 3D dengan sempurna?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Arsitek Cilik Juara & Master Bentuk Geometri!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Malas Belajar', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Patung yang Diam', 'is_correct' => false],
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
            // =========================================================================
            // PILAR 2 - TOPIK 1: HURUF VOKAL & FONIK CERIA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (PENGENALAN 5 VOKAL DASAR A, I, U, E, O) ---
            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 1,
                'title' => 'Vokal A, I & Bentuk Mulut Terbuka Ceria',
                'slug' => 'kuis-vokal-l1-a-i-mulut-ceria',
                'icon_emoji' => '🅰️',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf vokal apakah yang dibunyikan dengan membuka mulut lebar: Aaaa seperti pada kata Apel?',
                        'audio' => 'Huruf vokal apakah yang dibunyikan dengan membuka mulut lebar: Aaaa seperti pada kata Apel?',
                        'emoji' => '🅰️',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf Vokal A', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang dibunyikan dengan menarik senyum lebar: Iiii seperti pada kata Ikan?',
                        'audio' => 'Huruf vokal apakah yang dibunyikan dengan menarik senyum lebar: Iiii seperti pada kata Ikan?',
                        'emoji' => 'ℹ️',
                        'options' => [
                            ['emoji' => 'ℹ️', 'text' => 'Huruf Vokal I', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gambar buah segar apakah yang diawali oleh huruf vokal A?',
                        'audio' => 'Gambar buah segar apakah yang diawali oleh huruf vokal A?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Buah Apel Merah', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 1,
                'title' => 'Vokal U, E & O Bibir Membulat',
                'slug' => 'kuis-vokal-l1-u-e-o-bulat',
                'icon_emoji' => '☂️',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf vokal apakah yang dibunyikan dengan memajukan bibir ke depan: Uuuu seperti pada kata Unta?',
                        'audio' => 'Huruf vokal apakah yang dibunyikan dengan memajukan bibir ke depan: Uuuu seperti pada kata Unta?',
                        'emoji' => '☂️',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Huruf Vokal U', 'is_correct' => true],
                            ['emoji' => '📧', 'text' => 'Huruf E', 'is_correct' => false],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang dibunyikan santai seperti pada kata Ember dan Es Krim?',
                        'audio' => 'Huruf vokal apakah yang dibunyikan santai seperti pada kata Ember dan Es Krim?',
                        'emoji' => '📧',
                        'options' => [
                            ['emoji' => '📧', 'text' => 'Huruf Vokal E', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang berbentuk bulat sempurna dan dibunyikan: Oooo seperti pada kata Obat?',
                        'audio' => 'Huruf vokal apakah yang berbentuk bulat sempurna dan dibunyikan: Oooo seperti pada kata Obat?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Huruf Vokal O', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 1,
                'title' => 'Paduan 5 Huruf Vokal A-I-U-E-O Cilik',
                'slug' => 'kuis-vokal-l1-paduan-aiueo',
                'icon_emoji' => '🎶',
                'target_age' => 3,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapakah total jumlah huruf vokal utama dalam abjad bahasa Indonesia?',
                        'audio' => 'Berapakah total jumlah huruf vokal utama dalam abjad bahasa Indonesia?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Huruf Vokal (A, I, U, E, O)', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Huruf Vokal', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Huruf Vokal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal manakah yang terdapat pada kata "IBU"?',
                        'audio' => 'Huruf vokal manakah yang terdapat pada kata "IBU"?',
                        'emoji' => '👩',
                        'options' => [
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I dan Huruf U', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A saja', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gambar hewan laut apakah yang diawali oleh huruf vokal U?',
                        'audio' => 'Gambar hewan laut apakah yang diawali oleh huruf vokal U?',
                        'emoji' => '🦐',
                        'options' => [
                            ['emoji' => '🦐', 'text' => 'Udang Segar', 'is_correct' => true],
                            ['emoji' => '🦁', 'text' => 'Singa', 'is_correct' => false],
                            ['emoji' => '🐘', 'text' => 'Gajah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (PASANGAN VOKAL, ARTIKULASI & FONIK) ---
            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 2,
                'title' => 'Pasangan Vokal A-I & U-E Ceria',
                'slug' => 'kuis-vokal-l2-pasangan-ai-ue',
                'icon_emoji' => '🍎',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Huruf vokal pertama pada kata "A-P-I" (Api) adalah...?',
                        'audio' => 'Huruf vokal pertama pada kata Api adalah apa?',
                        'emoji' => '🔥',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf Vokal A', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal kedua pada kata "A-I-R" (Air) adalah...?',
                        'audio' => 'Huruf vokal kedua pada kata Air adalah apa?',
                        'emoji' => '💧',
                        'options' => [
                            ['emoji' => 'ℹ️', 'text' => 'Huruf Vokal I', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata benda "E-M-B-E-R" diawali oleh huruf vokal...?',
                        'audio' => 'Kata benda Ember diawali oleh huruf vokal apa?',
                        'emoji' => '🪣',
                        'options' => [
                            ['emoji' => '📧', 'text' => 'Huruf Vokal E', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan melata "U-L-A-R" diawali oleh huruf vokal...?',
                        'audio' => 'Hewan melata Ular diawali oleh huruf vokal apa?',
                        'emoji' => '🐍',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Huruf Vokal U', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gerakan mulut seperti apakah saat kita membunyikan huruf vokal O?',
                        'audio' => 'Gerakan mulut seperti apakah saat kita membunyikan huruf vokal O?',
                        'emoji' => '⭕',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Bibir membulat seperti lingkaran bulat', 'is_correct' => true],
                            ['emoji' => '👄', 'text' => 'Mulut tertutup rapat', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Menguap tidur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 2,
                'title' => 'Pasangan Vokal O-A & Senam Artikulasi Fonik',
                'slug' => 'kuis-vokal-l2-pasangan-oa-artikulasi',
                'icon_emoji' => '🏐',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Kata "O-B-O-R" memiliki dua huruf vokal yang sama, yaitu huruf...?',
                        'audio' => 'Kata Obor memiliki dua huruf vokal yang sama yaitu huruf apa?',
                        'emoji' => '🕯️',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Huruf Vokal O', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata "A-W-A-N" di langit cerah diawali oleh huruf vokal...?',
                        'audio' => 'Kata Awan di langit cerah diawali oleh huruf vokal apa?',
                        'emoji' => '☁️',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf Vokal A', 'is_correct' => true],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                            ['emoji' => '📧', 'text' => 'Huruf E', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di antara kata-kata berikut, manakah yang DIAWALI huruf vokal I?',
                        'audio' => 'Di antara kata-kata berikut manakah yang diawali huruf vokal I?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐟', 'text' => 'Ikan Berenang', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Kucing', 'is_correct' => false],
                            ['emoji' => '🐶', 'text' => 'Anjing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di antara kata-kata berikut, manakah yang DIAWALI huruf vokal E?',
                        'audio' => 'Di antara kata-kata berikut manakah yang diawali huruf vokal E?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🦅', 'text' => 'Elang Terbang', 'is_correct' => true],
                            ['emoji' => '🐅', 'text' => 'Harimau', 'is_correct' => false],
                            ['emoji' => '🐒', 'text' => 'Monyet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Urutan lima huruf vokal yang benar dari awal adalah...?',
                        'audio' => 'Urutan lima huruf vokal yang benar dari awal adalah apa?',
                        'emoji' => '🎶',
                        'options' => [
                            ['emoji' => '🎶', 'text' => 'A - I - U - E - O', 'is_correct' => true],
                            ['emoji' => '🔤', 'text' => 'O - E - U - I - A', 'is_correct' => false],
                            ['emoji' => '🔡', 'text' => 'B - C - D - F - G', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 2,
                'title' => 'Irama Melodi & Petualangan Bunyi Vokal',
                'slug' => 'kuis-vokal-l2-irama-melodi-bunyi',
                'icon_emoji' => '🎤',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Huruf vokal manakah yang ada di dalam kata "B-O-L-A"?',
                        'audio' => 'Huruf vokal manakah yang ada di dalam kata BOLA?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Huruf O dan Huruf A', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I saja', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U saja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal manakah yang ada di dalam kata "B-U-K-U"?',
                        'audio' => 'Huruf vokal manakah yang ada di dalam kata BUKU?',
                        'emoji' => '📖',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Huruf U (Dua Huruf U)', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '📧', 'text' => 'Huruf E', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal manakah yang ada di dalam kata "S-A-P-I"?',
                        'audio' => 'Huruf vokal manakah yang ada di dalam kata SAPI?',
                        'emoji' => '🐄',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf A dan Huruf I', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                            ['emoji' => '📧', 'text' => 'Huruf E', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal manakah yang ada di dalam kata "M-E-J-A"?',
                        'audio' => 'Huruf vokal manakah yang ada di dalam kata MEJA?',
                        'emoji' => '🪑',
                        'options' => [
                            ['emoji' => '📧', 'text' => 'Huruf E dan Huruf A', 'is_correct' => true],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus membunyikan huruf vokal dengan jelas saat belajar membaca?',
                        'audio' => 'Mengapa kita harus membunyikan huruf vokal dengan jelas saat belajar membaca?',
                        'emoji' => '🗣️',
                        'options' => [
                            ['emoji' => '🗣️', 'text' => 'Agar kata terdengar jelas, benar, dan mudah dipahami orang lain', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak perlu jelas', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (AWALAN, AKHIRAN & MERANGKAI KATA VOKAL) ---
            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 3,
                'title' => 'Awalan & Akhiran Kata Huruf Vokal',
                'slug' => 'kuis-vokal-l3-awalan-akhiran-vokal',
                'icon_emoji' => '✨',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Manakah kelompok kata yang SEMUANYA diawali oleh huruf vokal?',
                        'audio' => 'Manakah kelompok kata yang semuanya diawali oleh huruf vokal?',
                        'emoji' => '🅰️',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Apel, Ikan, Udang, Ember, Obor', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bola, Buku, Kuda', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Mobil, Sepeda, Kereta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang terletak di awal kata "U-D-A-R-A"?',
                        'audio' => 'Huruf vokal apakah yang terletak di awal kata UDARA?',
                        'emoji' => '💨',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Huruf Vokal U', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang terletak di akhir kata "S-E-P-A-T-U"?',
                        'audio' => 'Huruf vokal apakah yang terletak di akhir kata SEPATU?',
                        'emoji' => '👟',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Huruf Vokal U', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '📧', 'text' => 'Huruf E', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang terletak di akhir kata "C-E-L-A-N-A"?',
                        'audio' => 'Huruf vokal apakah yang terletak di akhir kata CELANA?',
                        'emoji' => '👖',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf Vokal A', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang terletak di akhir kata "P-I-A-N-O"?',
                        'audio' => 'Huruf vokal apakah yang terletak di akhir kata PIANO?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Huruf Vokal O', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf vokal apakah yang terletak di akhir kata "T-O-P-I"?',
                        'audio' => 'Huruf vokal apakah yang terletak di akhir kata TOPI?',
                        'emoji' => '🧢',
                        'options' => [
                            ['emoji' => 'ℹ️', 'text' => 'Huruf Vokal I', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah huruf vokal pada kata "S-E-M-A-N-G-A-T"?',
                        'audio' => 'Berapakah jumlah huruf vokal pada kata SEMANGAT?',
                        'emoji' => '💪',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Huruf Vokal (E, A, A)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Huruf Vokal', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Huruf Vokal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah huruf vokal pada kata "I-N-D-O-N-E-S-I-A"?',
                        'audio' => 'Berapakah jumlah huruf vokal pada kata INDONESIA?',
                        'emoji' => '🇮🇩',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Huruf Vokal (I, O, E, I, A)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Huruf Vokal', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Huruf Vokal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Di antara kata-kata berikut, manakah yang berakhiran huruf vokal E?',
                        'audio' => 'Di antara kata-kata berikut manakah yang berakhiran huruf vokal E?',
                        'emoji' => '☕',
                        'options' => [
                            ['emoji' => '☕', 'text' => 'Jahe Manis', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Apel', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'Ikan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa huruf vokal sangat penting dalam setiap kata yang kita ucapkan?',
                        'audio' => 'Mengapa huruf vokal sangat penting dalam setiap kata yang kita ucapkan?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena huruf vokal memberi suara hidup pada huruf konsonan agar bisa dibaca', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tidak ada gunanya', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Hanya hiasan huruf', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 3,
                'title' => 'Eksplorasi Vokal Rangkap & Suku Kata Dasar',
                'slug' => 'kuis-vokal-l3-vokal-rangkap-suku-kata',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Dua huruf vokal yang berdampingan pada kata "T-U-P-A-I" adalah...?',
                        'audio' => 'Dua huruf vokal yang berdampingan pada kata TUPAI adalah apa?',
                        'emoji' => '🐿️',
                        'options' => [
                            ['emoji' => '🐿️', 'text' => 'Huruf A dan I (Ai)', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'Huruf O dan U', 'is_correct' => false],
                            ['emoji' => '📧', 'text' => 'Huruf E dan O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Dua huruf vokal yang berdampingan pada kata "D-A-U-N" adalah...?',
                        'audio' => 'Dua huruf vokal yang berdampingan pada kata DAUN adalah apa?',
                        'emoji' => '🍃',
                        'options' => [
                            ['emoji' => '🍃', 'text' => 'Huruf A dan U (Au)', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I dan E', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O dan A', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Dua huruf vokal yang berdampingan pada kata "K-O-B-O-I" adalah...?',
                        'audio' => 'Dua huruf vokal yang berdampingan pada kata KOBOI adalah apa?',
                        'emoji' => '🤠',
                        'options' => [
                            ['emoji' => '🤠', 'text' => 'Huruf O dan I (Oi)', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A dan U', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'Huruf U dan E', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata dari huruf B yang digabung dengan huruf vokal A dibaca...?',
                        'audio' => 'Suku kata dari huruf B yang digabung dengan huruf vokal A dibaca apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'BA', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'BI', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'BU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata dari huruf B yang digabung dengan huruf vokal I dibaca...?',
                        'audio' => 'Suku kata dari huruf B yang digabung dengan huruf vokal I dibaca apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => 'ℹ️', 'text' => 'BI', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'BA', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'BO', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata dari huruf B yang digabung dengan huruf vokal U dibaca...?',
                        'audio' => 'Suku kata dari huruf B yang digabung dengan huruf vokal U dibaca apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'BU', 'is_correct' => true],
                            ['emoji' => '📧', 'text' => 'BE', 'is_correct' => false],
                            ['emoji' => '🅰️', 'text' => 'BA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata dari huruf B yang digabung dengan huruf vokal E dibaca...?',
                        'audio' => 'Suku kata dari huruf B yang digabung dengan huruf vokal E dibaca apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '📧', 'text' => 'BE', 'is_correct' => true],
                            ['emoji' => '⭕', 'text' => 'BO', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'BI', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata dari huruf B yang digabung dengan huruf vokal O dibaca...?',
                        'audio' => 'Suku kata dari huruf B yang digabung dengan huruf vokal O dibaca apa?',
                        'emoji' => '🔤',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'BO', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'BA', 'is_correct' => false],
                            ['emoji' => '☂️', 'text' => 'BU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "BA" digabung dengan suku kata "JU", akan membentuk kata...?',
                        'audio' => 'Jika suku kata BA digabung dengan suku kata JU akan membentuk kata apa?',
                        'emoji' => '👕',
                        'options' => [
                            ['emoji' => '👕', 'text' => 'BAJU', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'BOLA', 'is_correct' => false],
                            ['emoji' => '📖', 'text' => 'BUKU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "GI" digabung dengan suku kata "GI", akan membentuk kata...?',
                        'audio' => 'Jika suku kata GI digabung dengan suku kata GI akan membentuk kata apa?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => 'GIGI', 'is_correct' => true],
                            ['emoji' => '👃', 'text' => 'HIDUNG', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'MATA', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'huruf-vokal',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Fonik & Huruf Vokal Cilik',
                'slug' => 'kuis-vokal-l3-grand-master-vokal',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Sebutkan 5 huruf vokal utama secara berurutan dan lengkap!',
                        'audio' => 'Sebutkan 5 huruf vokal utama secara berurutan dan lengkap!',
                        'emoji' => '🎶',
                        'options' => [
                            ['emoji' => '🎶', 'text' => 'A, I, U, E, O', 'is_correct' => true],
                            ['emoji' => '🔤', 'text' => 'B, C, D, F, G', 'is_correct' => false],
                            ['emoji' => '🔡', 'text' => 'K, L, M, N, P', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata "A-P-E-L" memiliki dua huruf vokal yaitu huruf...?',
                        'audio' => 'Kata APEL memiliki dua huruf vokal yaitu huruf apa?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Huruf A dan Huruf E', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I dan Huruf U', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O dan Huruf A', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata "G-U-R-U" memiliki dua huruf vokal yang sama yaitu huruf...?',
                        'audio' => 'Kata GURU memiliki dua huruf vokal yang sama yaitu huruf apa?',
                        'emoji' => '👩‍🏫',
                        'options' => [
                            ['emoji' => '☂️', 'text' => 'Huruf U dan Huruf U', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A dan Huruf A', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I dan Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah kata benda yang diawali huruf vokal O?',
                        'audio' => 'Manakah kata benda yang diawali huruf vokal O?',
                        'emoji' => '🕯️',
                        'options' => [
                            ['emoji' => '🕯️', 'text' => 'Obor Terang', 'is_correct' => true],
                            ['emoji' => '👓', 'text' => 'Kacamata', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Sepatu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan lucu yang namanya diawali huruf vokal U?',
                        'audio' => 'Manakah hewan lucu yang namanya diawali huruf vokal U?',
                        'emoji' => '🐛',
                        'options' => [
                            ['emoji' => '🐛', 'text' => 'Ulat Bulu Ceria', 'is_correct' => true],
                            ['emoji' => '🐘', 'text' => 'Gajah', 'is_correct' => false],
                            ['emoji' => '🦒', 'text' => 'Jerapah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan unggas yang namanya diawali huruf vokal A?',
                        'audio' => 'Manakah hewan unggas yang namanya diawali huruf vokal A?',
                        'emoji' => '🐔',
                        'options' => [
                            ['emoji' => '🐔', 'text' => 'Ayam Jago', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Kucing', 'is_correct' => false],
                            ['emoji' => '🐶', 'text' => 'Anjing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah hewan air yang namanya diawali huruf vokal I?',
                        'audio' => 'Manakah hewan air yang namanya diawali huruf vokal I?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐟', 'text' => 'Ikan Emas', 'is_correct' => true],
                            ['emoji' => '🐎', 'text' => 'Kuda', 'is_correct' => false],
                            ['emoji' => '🐄', 'text' => 'Sapi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah burung perkasa yang namanya diawali huruf vokal E?',
                        'audio' => 'Manakah burung perkasa yang namanya diawali huruf vokal E?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🦅', 'text' => 'Burung Elang', 'is_correct' => true],
                            ['emoji' => '🐧', 'text' => 'Pinguin', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Bebek', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa anak yang mahir mengenali bunyi huruf vokal akan lebih cepat membaca buku cerita?',
                        'audio' => 'Mengapa anak yang mahir mengenali bunyi huruf vokal akan lebih cepat membaca buku cerita?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena huruf vokal adalah pondasi utama dalam mengeja dan membaca seluruh kata', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tidak ada pengaruhnya', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Hanya buang waktu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak pintar yang sudah menguasai seluruh bunyi dan bentuk huruf vokal?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang sudah menguasai seluruh bunyi dan bentuk huruf vokal?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Bintang Cilik Ahli Fonik & Sahabat Huruf Vokal!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Malas Mengeja', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Huruf yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 2 - TOPIK 2: MEMBACA 2 SUKU KATA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (BOLA, BUKU, KUDA, MATA, SAPI, ROTI, MEJA) ---
            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 1,
                'title' => 'Membaca Kata Bo-la, Bu-ku & Ku-da',
                'slug' => 'kuis-2suku-l1-bola-buku-kuda',
                'icon_emoji' => '⚽',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'B-O Bo, L-A La. Jika digabungkan dibaca apa ya?',
                        'audio' => 'B-O Bo, L-A La. Jika digabungkan dibaca apa ya?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bo - la (Bola)', 'is_correct' => true],
                            ['emoji' => '📖', 'text' => 'Bu - ku', 'is_correct' => false],
                            ['emoji' => '🐎', 'text' => 'Ku - da', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-U Bu, K-U Ku. Jika digabungkan dibaca apa ya?',
                        'audio' => 'B-U Bu, K-U Ku. Jika digabungkan dibaca apa ya?',
                        'emoji' => '📖',
                        'options' => [
                            ['emoji' => '📖', 'text' => 'Bu - ku (Buku)', 'is_correct' => true],
                            ['emoji' => '🐄', 'text' => 'Sa - pi', 'is_correct' => false],
                            ['emoji' => '🍞', 'text' => 'Ro - ti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'K-U Ku, D-A Da. Jika digabungkan dibaca apa ya?',
                        'audio' => 'K-U Ku, D-A Da. Jika digabungkan dibaca apa ya?',
                        'emoji' => '🐎',
                        'options' => [
                            ['emoji' => '🐎', 'text' => 'Ku - da (Kuda)', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'Ma - ta', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Me - ja', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 1,
                'title' => 'Membaca Kata Ma-ta, Sa-pi & Ro-ti',
                'slug' => 'kuis-2suku-l1-mata-sapi-roti',
                'icon_emoji' => '👀',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'M-A Ma, T-A Ta. Jika digabungkan dibaca apa ya?',
                        'audio' => 'M-A Ma, T-A Ta. Jika digabungkan dibaca apa ya?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Ma - ta (Mata)', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bo - la', 'is_correct' => false],
                            ['emoji' => '🍞', 'text' => 'Ro - ti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'S-A Sa, P-I Pi. Jika digabungkan dibaca apa ya?',
                        'audio' => 'S-A Sa, P-I Pi. Jika digabungkan dibaca apa ya?',
                        'emoji' => '🐄',
                        'options' => [
                            ['emoji' => '🐄', 'text' => 'Sa - pi (Sapi)', 'is_correct' => true],
                            ['emoji' => '🐎', 'text' => 'Ku - da', 'is_correct' => false],
                            ['emoji' => '📖', 'text' => 'Bu - ku', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'R-O Ro, T-I Ti. Jika digabungkan dibaca apa ya?',
                        'audio' => 'R-O Ro, T-I Ti. Jika digabungkan dibaca apa ya?',
                        'emoji' => '🍞',
                        'options' => [
                            ['emoji' => '🍞', 'text' => 'Ro - ti (Roti)', 'is_correct' => true],
                            ['emoji' => '🪑', 'text' => 'Me - ja', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'Ma - ta', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 1,
                'title' => 'Membaca Kata Me-ja & Benda Harian',
                'slug' => 'kuis-2suku-l1-meja-benda-harian',
                'icon_emoji' => '🪑',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'M-E Me, J-A Ja. Jika digabungkan dibaca apa ya?',
                        'audio' => 'M-E Me, J-A Ja. Jika digabungkan dibaca apa ya?',
                        'emoji' => '🪑',
                        'options' => [
                            ['emoji' => '🪑', 'text' => 'Me - ja (Meja)', 'is_correct' => true],
                            ['emoji' => '👕', 'text' => 'Ba - ju', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bo - la', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Bo - la"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Bola?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata (Bo - la)', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => '1 Suku Kata', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang mengawali kata "Bu - ku"?',
                        'audio' => 'Huruf konsonan apakah yang mengawali kata Buku?',
                        'emoji' => '📖',
                        'options' => [
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => true],
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => false],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (BAJU, NURI, GIGI, KUKU, TOPI, PADI, LELE) ---
            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 2,
                'title' => 'Membaca Ba-ju, Nuri & Gi-gi',
                'slug' => 'kuis-2suku-l2-baju-nuri-gigi',
                'icon_emoji' => '👕',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'B-A Ba, J-U Ju. Jika digabungkan dibaca apa ya?',
                        'audio' => 'B-A Ba, J-U Ju. Jika digabungkan dibaca apa ya?',
                        'emoji' => '👕',
                        'options' => [
                            ['emoji' => '👕', 'text' => 'Ba - ju (Baju)', 'is_correct' => true],
                            ['emoji' => '🧢', 'text' => 'To - pi', 'is_correct' => false],
                            ['emoji' => '🥛', 'text' => 'Su - su', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'N-U Nu, R-I Ri. Burung cantik bersiul ini dibaca apa?',
                        'audio' => 'N-U Nu, R-I Ri. Burung cantik bersiul ini dibaca apa?',
                        'emoji' => '🦜',
                        'options' => [
                            ['emoji' => '🦜', 'text' => 'Nu - ri (Nuri)', 'is_correct' => true],
                            ['emoji' => '🐎', 'text' => 'Ku - da', 'is_correct' => false],
                            ['emoji' => '🐄', 'text' => 'Sa - pi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'G-I Gi, G-I Gi. Bagian mulut untuk mengunyah ini dibaca apa?',
                        'audio' => 'G-I Gi, G-I Gi. Bagian mulut untuk mengunyah ini dibaca apa?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => 'Gi - gi (Gigi)', 'is_correct' => true],
                            ['emoji' => '💅', 'text' => 'Ku - ku', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'Ma - ta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'K-U Ku, K-U Ku. Bagian ujung jari yang bersih ini dibaca apa?',
                        'audio' => 'K-U Ku, K-U Ku. Bagian ujung jari yang bersih ini dibaca apa?',
                        'emoji' => '💅',
                        'options' => [
                            ['emoji' => '💅', 'text' => 'Ku - ku (Kuku)', 'is_correct' => true],
                            ['emoji' => '🦷', 'text' => 'Gi - gi', 'is_correct' => false],
                            ['emoji' => '🐎', 'text' => 'Ku - da', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata pertama pada kata "Ba - ju" adalah...?',
                        'audio' => 'Suku kata pertama pada kata Baju adalah apa?',
                        'emoji' => '👕',
                        'options' => [
                            ['emoji' => '🅱️', 'text' => 'BA', 'is_correct' => true],
                            ['emoji' => '🇯', 'text' => 'JU', 'is_correct' => false],
                            ['emoji' => '🅱️', 'text' => 'BO', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 2,
                'title' => 'Membaca To-pi, Pa-di & Le-le',
                'slug' => 'kuis-2suku-l2-topi-padi-lele',
                'icon_emoji' => '🧢',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'T-O To, P-I Pi. Pelindung kepala dari panas ini dibaca apa?',
                        'audio' => 'T-O To, P-I Pi. Pelindung kepala dari panas ini dibaca apa?',
                        'emoji' => '🧢',
                        'options' => [
                            ['emoji' => '🧢', 'text' => 'To - pi (Topi)', 'is_correct' => true],
                            ['emoji' => '👕', 'text' => 'Ba - ju', 'is_correct' => false],
                            ['emoji' => '🍞', 'text' => 'Ro - ti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'P-A Pa, D-I Di. Tanaman penghasil beras di sawah ini dibaca apa?',
                        'audio' => 'P-A Pa, D-I Di. Tanaman penghasil beras di sawah ini dibaca apa?',
                        'emoji' => '🌾',
                        'options' => [
                            ['emoji' => '🌾', 'text' => 'Pa - di (Padi)', 'is_correct' => true],
                            ['emoji' => '🥭', 'text' => 'Sa - wo', 'is_correct' => false],
                            ['emoji' => '🪵', 'text' => 'Ka - yu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'L-E Le, L-E Le. Ikan air tawar berkumis lincah ini dibaca apa?',
                        'audio' => 'L-E Le, L-E Le. Ikan air tawar berkumis lincah ini dibaca apa?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐟', 'text' => 'Le - le (Lele)', 'is_correct' => true],
                            ['emoji' => '🐄', 'text' => 'Sa - pi', 'is_correct' => false],
                            ['emoji' => '🦜', 'text' => 'Nu - ri', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata kedua pada kata "To - pi" adalah...?',
                        'audio' => 'Suku kata kedua pada kata Topi adalah apa?',
                        'emoji' => '🧢',
                        'options' => [
                            ['emoji' => '🅿️', 'text' => 'PI', 'is_correct' => true],
                            ['emoji' => '🇹', 'text' => 'TO', 'is_correct' => false],
                            ['emoji' => '🅿️', 'text' => 'PA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata kedua pada kata "Pa - di" adalah...?',
                        'audio' => 'Suku kata kedua pada kata Padi adalah apa?',
                        'emoji' => '🌾',
                        'options' => [
                            ['emoji' => '🇩', 'text' => 'DI', 'is_correct' => true],
                            ['emoji' => '🅿️', 'text' => 'PA', 'is_correct' => false],
                            ['emoji' => '🇩', 'text' => 'DA', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 2,
                'title' => 'Membaca Su-su, Ka-yu & La-ri',
                'slug' => 'kuis-2suku-l2-susu-kayu-lari',
                'icon_emoji' => '🥛',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'S-U Su, S-U Su. Minuman sehat berkalsium ini dibaca apa?',
                        'audio' => 'S-U Su, S-U Su. Minuman sehat berkalsium ini dibaca apa?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'Su - su (Susu)', 'is_correct' => true],
                            ['emoji' => '🍞', 'text' => 'Ro - ti', 'is_correct' => false],
                            ['emoji' => '🥭', 'text' => 'Sa - wo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-A Ba, T-A Ta. Bahan pembuat tembok dinding ini dibaca apa?',
                        'audio' => 'B-A Ba, T-A Ta. Bahan pembuat tembok dinding ini dibaca apa?',
                        'emoji' => '🧱',
                        'options' => [
                            ['emoji' => '🧱', 'text' => 'Ba - ta (Bata)', 'is_correct' => true],
                            ['emoji' => '🪵', 'text' => 'Ka - yu', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Me - ja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'K-A Ka, Y-U Yu. Batang pohon keras untuk perabot ini dibaca apa?',
                        'audio' => 'K-A Ka, Y-U Yu. Batang pohon keras untuk perabot ini dibaca apa?',
                        'emoji' => '🪵',
                        'options' => [
                            ['emoji' => '🪵', 'text' => 'Ka - yu (Kayu)', 'is_correct' => true],
                            ['emoji' => '🧱', 'text' => 'Ba - ta', 'is_correct' => false],
                            ['emoji' => '🌾', 'text' => 'Pa - di', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'S-A Sa, W-O Wo. Buah cokelat manis legit ini dibaca apa?',
                        'audio' => 'S-A Sa, W-O Wo. Buah cokelat manis legit ini dibaca apa?',
                        'emoji' => '🥭',
                        'options' => [
                            ['emoji' => '🥭', 'text' => 'Sa - wo (Sawo)', 'is_correct' => true],
                            ['emoji' => '🍞', 'text' => 'Ro - ti', 'is_correct' => false],
                            ['emoji' => '🥛', 'text' => 'Su - su', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'L-A La, R-I Ri. Olahraga melangkah kencang ini dibaca apa?',
                        'audio' => 'L-A La, R-I Ri. Olahraga melangkah kencang ini dibaca apa?',
                        'emoji' => '🏃',
                        'options' => [
                            ['emoji' => '🏃', 'text' => 'La - ri (Lari)', 'is_correct' => true],
                            ['emoji' => '🎵', 'text' => 'La - gu', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bo - la', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (SUSUN KATA, KALIMAT PENDEK & GRAND MASTER) ---
            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 3,
                'title' => 'Menyusun Potongan 2 Suku Kata Cerdas',
                'slug' => 'kuis-2suku-l3-susun-suku-kata',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Jika suku kata "BA" digabung dengan suku kata "TA", akan menjadi kata...?',
                        'audio' => 'Jika suku kata BA digabung dengan suku kata TA akan menjadi kata apa?',
                        'emoji' => '🧱',
                        'options' => [
                            ['emoji' => '🧱', 'text' => 'BATA', 'is_correct' => true],
                            ['emoji' => '👕', 'text' => 'BAJU', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'BOLA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "LA" digabung dengan suku kata "GU", akan menjadi kata...?',
                        'audio' => 'Jika suku kata LA digabung dengan suku kata GU akan menjadi kata apa?',
                        'emoji' => '🎵',
                        'options' => [
                            ['emoji' => '🎵', 'text' => 'LAGU', 'is_correct' => true],
                            ['emoji' => '🏃', 'text' => 'LARI', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'LELE', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "SA" digabung dengan suku kata "PI", akan menjadi kata...?',
                        'audio' => 'Jika suku kata SA digabung dengan suku kata PI akan menjadi kata apa?',
                        'emoji' => '🐄',
                        'options' => [
                            ['emoji' => '🐄', 'text' => 'SAPI', 'is_correct' => true],
                            ['emoji' => '🥭', 'text' => 'SAWO', 'is_correct' => false],
                            ['emoji' => '🥛', 'text' => 'SUSU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "BO" digabung dengan suku kata "LA", akan menjadi kata...?',
                        'audio' => 'Jika suku kata BO digabung dengan suku kata LA akan menjadi kata apa?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'BOLA', 'is_correct' => true],
                            ['emoji' => '📖', 'text' => 'BUKU', 'is_correct' => false],
                            ['emoji' => '🧱', 'text' => 'BATA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "KU" digabung dengan suku kata "DA", akan menjadi kata...?',
                        'audio' => 'Jika suku kata KU digabung dengan suku kata DA akan menjadi kata apa?',
                        'emoji' => '🐎',
                        'options' => [
                            ['emoji' => '🐎', 'text' => 'KUDA', 'is_correct' => true],
                            ['emoji' => '💅', 'text' => 'KUKU', 'is_correct' => false],
                            ['emoji' => '🪵', 'text' => 'KAYU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "RO" digabung dengan suku kata "TI", akan menjadi kata...?',
                        'audio' => 'Jika suku kata RO digabung dengan suku kata TI akan menjadi kata apa?',
                        'emoji' => '🍞',
                        'options' => [
                            ['emoji' => '🍞', 'text' => 'ROTI', 'is_correct' => true],
                            ['emoji' => '🪑', 'text' => 'MEJA', 'is_correct' => false],
                            ['emoji' => '🧢', 'text' => 'TOPI', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "ME" digabung dengan suku kata "JA", akan menjadi kata...?',
                        'audio' => 'Jika suku kata ME digabung dengan suku kata JA akan menjadi kata apa?',
                        'emoji' => '🪑',
                        'options' => [
                            ['emoji' => '🪑', 'text' => 'MEJA', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'MATA', 'is_correct' => false],
                            ['emoji' => '👕', 'text' => 'BAJU', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "GI" digabung dengan suku kata "GI", akan menjadi kata...?',
                        'audio' => 'Jika suku kata GI digabung dengan suku kata GI akan menjadi kata apa?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => 'GIGI', 'is_correct' => true],
                            ['emoji' => '💅', 'text' => 'KUKU', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'MATA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "TO" digabung dengan suku kata "PI", akan menjadi kata...?',
                        'audio' => 'Jika suku kata TO digabung dengan suku kata PI akan menjadi kata apa?',
                        'emoji' => '🧢',
                        'options' => [
                            ['emoji' => '🧢', 'text' => 'TOPI', 'is_correct' => true],
                            ['emoji' => '🍞', 'text' => 'ROTI', 'is_correct' => false],
                            ['emoji' => '🌾', 'text' => 'PADI', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "SU" digabung dengan suku kata "SU", akan menjadi kata...?',
                        'audio' => 'Jika suku kata SU digabung dengan suku kata SU akan menjadi kata apa?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'SUSU', 'is_correct' => true],
                            ['emoji' => '🐄', 'text' => 'SAPI', 'is_correct' => false],
                            ['emoji' => '🥭', 'text' => 'SAWO', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 3,
                'title' => 'Membaca Gabungan Kata 2 Suku Kata Ceria',
                'slug' => 'kuis-2suku-l3-gabung-kata-ceria',
                'icon_emoji' => '📖',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Baca gabungan kata ini: "Bu - ku  Bo - la". Ada berapa kata yang dibaca?',
                        'audio' => 'Baca gabungan kata ini: Buku Bola. Ada berapa kata yang dibaca?',
                        'emoji' => '📖',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Kata (Buku dan Bola)', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Kata', 'is_correct' => false],
                            ['emoji' => '1️⃣', 'text' => '1 Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Baca kalimat: "Ma - ta  Sa - pi". Kata pertama adalah...?',
                        'audio' => 'Baca kalimat: Mata Sapi. Kata pertama adalah apa?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => true],
                            ['emoji' => '🐄', 'text' => 'Sapi', 'is_correct' => false],
                            ['emoji' => '🐎', 'text' => 'Kuda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Baca kalimat: "Ba - ju  To - pi". Kata kedua adalah...?',
                        'audio' => 'Baca kalimat: Baju Topi. Kata kedua adalah apa?',
                        'emoji' => '🧢',
                        'options' => [
                            ['emoji' => '🧢', 'text' => 'Topi', 'is_correct' => true],
                            ['emoji' => '👕', 'text' => 'Baju', 'is_correct' => false],
                            ['emoji' => '🪑', 'text' => 'Meja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Baca kalimat: "Mi - num  Su - su". Minuman sehat apa yang diminum?',
                        'audio' => 'Baca kalimat: Minum Susu. Minuman sehat apa yang diminum?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'Susu Sehat', 'is_correct' => true],
                            ['emoji' => '🍞', 'text' => 'Roti', 'is_correct' => false],
                            ['emoji' => '🥭', 'text' => 'Sawo', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Baca kalimat: "Ku - da  La - ri". Apa yang dilakukan hewan kuda?',
                        'audio' => 'Baca kalimat: Kuda Lari. Apa yang dilakukan hewan kuda?',
                        'emoji' => '🏃',
                        'options' => [
                            ['emoji' => '🏃', 'text' => 'Berlari Kencang', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tidur Pulas', 'is_correct' => false],
                            ['emoji' => '🏊', 'text' => 'Berenang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Baca kalimat: "Ro - ti  Ma - nis". Makanan lezat apakah itu?',
                        'audio' => 'Baca kalimat: Roti Manis. Makanan lezat apakah itu?',
                        'emoji' => '🍞',
                        'options' => [
                            ['emoji' => '🍞', 'text' => 'Roti Manis Sarapan', 'is_correct' => true],
                            ['emoji' => '🌾', 'text' => 'Padi', 'is_correct' => false],
                            ['emoji' => '🧱', 'text' => 'Bata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran huruf vokal I?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran huruf vokal I?',
                        'emoji' => 'ℹ️',
                        'options' => [
                            ['emoji' => '🍞', 'text' => 'Ro-ti, Sa-pi, Pa-di, To-pi', 'is_correct' => true],
                            ['emoji' => '📖', 'text' => 'Bu-ku, Su-su, Ka-yu', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bo-la, Ma-ta, Me-ja', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran huruf vokal U?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran huruf vokal U?',
                        'emoji' => '☂️',
                        'options' => [
                            ['emoji' => '📖', 'text' => 'Bu-ku, Ba-ju, Su-su, Ka-yu', 'is_correct' => true],
                            ['emoji' => '👀', 'text' => 'Ma-ta, Bo-la, Ba-ta', 'is_correct' => false],
                            ['emoji' => '🍞', 'text' => 'Ro-ti, Sa-pi, To-pi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran huruf vokal A?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran huruf vokal A?',
                        'emoji' => '🅰️',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bo-la, Ma-ta, Me-ja, Ba-ta', 'is_correct' => true],
                            ['emoji' => '🥛', 'text' => 'Su-su, Bu-ku, Ku-ku', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'Le-le, Ro-ti, Nu-ri', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa manfaat anak hebat yang rajin membaca kata 2 suku kata setiap hari?',
                        'audio' => 'Apa manfaat anak hebat yang rajin membaca kata 2 suku kata setiap hari?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Membaca jadi semakin lancar, pintar, dan percaya diri', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Biar cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada gunanya sama sekali', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'dua-suku-kata',
                'level_number' => 3,
                'title' => 'Grand Champion Pembaca Cilik 2 Suku Kata',
                'slug' => 'kuis-2suku-l3-grand-master-membaca',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'M-A Ma, T-A Ta dibaca apa?',
                        'audio' => 'M-A Ma, T-A Ta dibaca apa?',
                        'emoji' => '👀',
                        'options' => [
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => true],
                            ['emoji' => '🪑', 'text' => 'Meja', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Bola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'N-U Nu, R-I Ri dibaca apa?',
                        'audio' => 'N-U Nu, R-I Ri dibaca apa?',
                        'emoji' => '🦜',
                        'options' => [
                            ['emoji' => '🦜', 'text' => 'Nuri', 'is_correct' => true],
                            ['emoji' => '🐎', 'text' => 'Kuda', 'is_correct' => false],
                            ['emoji' => '🐄', 'text' => 'Sapi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'S-A Sa, W-O Wo dibaca apa?',
                        'audio' => 'S-A Sa, W-O Wo dibaca apa?',
                        'emoji' => '🥭',
                        'options' => [
                            ['emoji' => '🥭', 'text' => 'Sawo', 'is_correct' => true],
                            ['emoji' => '🥛', 'text' => 'Susu', 'is_correct' => false],
                            ['emoji' => '🍞', 'text' => 'Roti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'P-A Pa, D-I Di dibaca apa?',
                        'audio' => 'P-A Pa, D-I Di dibaca apa?',
                        'emoji' => '🌾',
                        'options' => [
                            ['emoji' => '🌾', 'text' => 'Padi', 'is_correct' => true],
                            ['emoji' => '🧱', 'text' => 'Bata', 'is_correct' => false],
                            ['emoji' => '🪵', 'text' => 'Kayu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'K-A Ka, Y-U Yu dibaca apa?',
                        'audio' => 'K-A Ka, Y-U Yu dibaca apa?',
                        'emoji' => '🪵',
                        'options' => [
                            ['emoji' => '🪵', 'text' => 'Kayu', 'is_correct' => true],
                            ['emoji' => '💅', 'text' => 'Kuku', 'is_correct' => false],
                            ['emoji' => '🐎', 'text' => 'Kuda', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'L-A La, G-U Gu dibaca apa?',
                        'audio' => 'L-A La, G-U Gu dibaca apa?',
                        'emoji' => '🎵',
                        'options' => [
                            ['emoji' => '🎵', 'text' => 'Lagu', 'is_correct' => true],
                            ['emoji' => '🏃', 'text' => 'Lari', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'Lele', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'L-E Le, L-E Le dibaca apa?',
                        'audio' => 'L-E Le, L-E Le dibaca apa?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐟', 'text' => 'Lele', 'is_correct' => true],
                            ['emoji' => '🦜', 'text' => 'Nuri', 'is_correct' => false],
                            ['emoji' => '🐄', 'text' => 'Sapi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'K-U Ku, K-U Ku dibaca apa?',
                        'audio' => 'K-U Ku, K-U Ku dibaca apa?',
                        'emoji' => '💅',
                        'options' => [
                            ['emoji' => '💅', 'text' => 'Kuku', 'is_correct' => true],
                            ['emoji' => '🦷', 'text' => 'Gigi', 'is_correct' => false],
                            ['emoji' => '👀', 'text' => 'Mata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-A Ba, J-U Ju dibaca apa?',
                        'audio' => 'B-A Ba, J-U Ju dibaca apa?',
                        'emoji' => '👕',
                        'options' => [
                            ['emoji' => '👕', 'text' => 'Baju', 'is_correct' => true],
                            ['emoji' => '🧢', 'text' => 'Topi', 'is_correct' => false],
                            ['emoji' => '🧱', 'text' => 'Bata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak hebat yang lancar membaca seluruh kata 2 suku kata?',
                        'audio' => 'Gelar apakah yang pantas untuk anak hebat yang lancar membaca seluruh kata 2 suku kata?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Bintang Cilik Ahli Membaca 2 Suku Kata!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Malas Membaca', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 2 - TOPIK 3: MEMBACA 3 SUKU KATA (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (SEPEDA, KELAPA, CELANA, GURITA, SEPATU, KEPALA, PEPAYA) ---
            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 1,
                'title' => 'Membaca Se-pe-da, Ke-la-pa & Ce-la-na',
                'slug' => 'kuis-3suku-l1-sepeda-kelapa-celana',
                'icon_emoji' => '🚲',
                'target_age' => 5,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Se - Pe - Da. Kendaraan roda dua asyik ini dibaca apa ya?',
                        'audio' => 'Se - Pe - Da. Kendaraan roda dua asyik ini dibaca apa ya?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Se - pe - da (Sepeda)', 'is_correct' => true],
                            ['emoji' => '👟', 'text' => 'Se - pa - tu', 'is_correct' => false],
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ke - La - Pa. Pohon pantai tinggi ini dibaca apa ya?',
                        'audio' => 'Ke - La - Pa. Pohon pantai tinggi ini dibaca apa ya?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa (Kelapa)', 'is_correct' => true],
                            ['emoji' => '👖', 'text' => 'Ce - la - na', 'is_correct' => false],
                            ['emoji' => '👶', 'text' => 'Ke - pa - la', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ce - La - Na. Pakaian bawahan ini dibaca apa ya?',
                        'audio' => 'Ce - La - Na. Pakaian bawahan ini dibaca apa ya?',
                        'emoji' => '👖',
                        'options' => [
                            ['emoji' => '👖', 'text' => 'Ce - la - na (Celana)', 'is_correct' => true],
                            ['emoji' => '👔', 'text' => 'Ke - me - ja', 'is_correct' => false],
                            ['emoji' => '🚲', 'text' => 'Se - pe - da', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 1,
                'title' => 'Membaca Gu-ri-ta, Se-pa-tu & Ke-pa-la',
                'slug' => 'kuis-3suku-l1-gurita-sepatu-kepala',
                'icon_emoji' => '🐙',
                'target_age' => 5,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Gu - Ri - Ta. Hewan bertentakel delapan ini dibaca apa ya?',
                        'audio' => 'Gu - Ri - Ta. Hewan bertentakel delapan ini dibaca apa ya?',
                        'emoji' => '🐙',
                        'options' => [
                            ['emoji' => '🐙', 'text' => 'Gu - ri - ta (Gurita)', 'is_correct' => true],
                            ['emoji' => '🐊', 'text' => 'Bu - a - ya', 'is_correct' => false],
                            ['emoji' => '🦅', 'text' => 'Ga - ru - da', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Se - Pa - Tu. Alas pelindung kaki ini dibaca apa ya?',
                        'audio' => 'Se - Pa - Tu. Alas pelindung kaki ini dibaca apa ya?',
                        'emoji' => '👟',
                        'options' => [
                            ['emoji' => '👟', 'text' => 'Se - pa - tu (Sepatu)', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'Se - pe - da', 'is_correct' => false],
                            ['emoji' => '👖', 'text' => 'Ce - la - na', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ke - Pa - La. Bagian tubuh atas tempat otak pintar ini dibaca apa ya?',
                        'audio' => 'Ke - Pa - La. Bagian tubuh atas tempat otak pintar ini dibaca apa ya?',
                        'emoji' => '👶',
                        'options' => [
                            ['emoji' => '👶', 'text' => 'Ke - pa - la (Kepala)', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Ke - re - ta', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 1,
                'title' => 'Membaca Pe-pa-ya & Ke-re-ta Ceria',
                'slug' => 'kuis-3suku-l1-pepaya-kereta',
                'icon_emoji' => '🍈',
                'target_age' => 5,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Pe - Pa - Ya. Buah manis berdaging jingga ini dibaca apa ya?',
                        'audio' => 'Pe - Pa - Ya. Buah manis berdaging jingga ini dibaca apa ya?',
                        'emoji' => '🍈',
                        'options' => [
                            ['emoji' => '🍈', 'text' => 'Pe - pa - ya (Pepaya)', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa', 'is_correct' => false],
                            ['emoji' => '🥑', 'text' => 'Al - pu - kat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ke - Re - Ta. Angkutan rel panjang cepat ini dibaca apa ya?',
                        'audio' => 'Ke - Re - Ta. Angkutan rel panjang cepat ini dibaca apa ya?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚆', 'text' => 'Ke - re - ta (Kereta)', 'is_correct' => true],
                            ['emoji' => '👶', 'text' => 'Ke - pa - la', 'is_correct' => false],
                            ['emoji' => '🚲', 'text' => 'Se - pe - da', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Se - pe - da"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Sepeda?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata (Se - pe - da)', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (CEMARA, GARUDA, MENARA, BUAYA, KEMEJA, JENDELA, PIANO, RADIO, KUALI) ---
            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 2,
                'title' => 'Membaca Ce-ma-ra, Ga-ru-da & Me-na-ra',
                'slug' => 'kuis-3suku-l2-cemara-garuda-menara',
                'icon_emoji' => '🌲',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Ce - Ma - Ra. Pohon cemara rindang ini dibaca apa ya?',
                        'audio' => 'Ce - Ma - Ra. Pohon cemara rindang ini dibaca apa ya?',
                        'emoji' => '🌲',
                        'options' => [
                            ['emoji' => '🌲', 'text' => 'Ce - ma - ra (Cemara)', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa', 'is_correct' => false],
                            ['emoji' => '🗼', 'text' => 'Me - na - ra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ga - Ru - Da. Burung lambang negara perkasa ini dibaca apa ya?',
                        'audio' => 'Ga - Ru - Da. Burung lambang negara perkasa ini dibaca apa ya?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🦅', 'text' => 'Ga - ru - da (Garuda)', 'is_correct' => true],
                            ['emoji' => '🐙', 'text' => 'Gu - ri - ta', 'is_correct' => false],
                            ['emoji' => '🐊', 'text' => 'Bu - a - ya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Me - Na - Ra. Bangunan tinggi pemantau pemandangan ini dibaca apa ya?',
                        'audio' => 'Me - Na - Ra. Bangunan tinggi pemantau pemandangan ini dibaca apa ya?',
                        'emoji' => '🗼',
                        'options' => [
                            ['emoji' => '🗼', 'text' => 'Me - na - ra (Menara)', 'is_correct' => true],
                            ['emoji' => '🌲', 'text' => 'Ce - ma - ra', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'Ke - re - ta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata kedua pada kata "Ce - ma - ra" adalah...?',
                        'audio' => 'Suku kata kedua pada kata Cemara adalah apa?',
                        'emoji' => '🌲',
                        'options' => [
                            ['emoji' => 'Ⓜ️', 'text' => 'MA', 'is_correct' => true],
                            ['emoji' => '🇨', 'text' => 'CE', 'is_correct' => false],
                            ['emoji' => '🇷', 'text' => 'RA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata pertama pada kata "Ga - ru - da" adalah...?',
                        'audio' => 'Suku kata pertama pada kata Garuda adalah apa?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🇬', 'text' => 'GA', 'is_correct' => true],
                            ['emoji' => '🇷', 'text' => 'RU', 'is_correct' => false],
                            ['emoji' => '🇩', 'text' => 'DA', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 2,
                'title' => 'Membaca Bu-a-ya, Ke-me-ja & Jen-de-la',
                'slug' => 'kuis-3suku-l2-buaya-kemeja-jendela',
                'icon_emoji' => '🐊',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Bu - A - Ya. Hewan reptil sungai ini dibaca apa ya?',
                        'audio' => 'Bu - A - Ya. Hewan reptil sungai ini dibaca apa ya?',
                        'emoji' => '🐊',
                        'options' => [
                            ['emoji' => '🐊', 'text' => 'Bu - a - ya (Buaya)', 'is_correct' => true],
                            ['emoji' => '🐙', 'text' => 'Gu - ri - ta', 'is_correct' => false],
                            ['emoji' => '🦅', 'text' => 'Ga - ru - da', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ke - Me - Ja. Pakaian berkerah rapi ini dibaca apa ya?',
                        'audio' => 'Ke - Me - Ja. Pakaian berkerah rapi ini dibaca apa ya?',
                        'emoji' => '👔',
                        'options' => [
                            ['emoji' => '👔', 'text' => 'Ke - me - ja (Kemeja)', 'is_correct' => true],
                            ['emoji' => '👖', 'text' => 'Ce - la - na', 'is_correct' => false],
                            ['emoji' => '👟', 'text' => 'Se - pa - tu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jen - De - La. Ventilasi kaca rumah ini dibaca apa ya?',
                        'audio' => 'Jen - De - La. Ventilasi kaca rumah ini dibaca apa ya?',
                        'emoji' => '🪟',
                        'options' => [
                            ['emoji' => '🪟', 'text' => 'Jen - de - la (Jendela)', 'is_correct' => true],
                            ['emoji' => '🗼', 'text' => 'Me - na - ra', 'is_correct' => false],
                            ['emoji' => '🌲', 'text' => 'Ce - ma - ra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata tengah pada kata "Bu - A - Ya" adalah huruf vokal...?',
                        'audio' => 'Suku kata tengah pada kata Buaya adalah huruf vokal apa?',
                        'emoji' => '🐊',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf Vokal A', 'is_correct' => true],
                            ['emoji' => '☂️', 'text' => 'Huruf U', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata terakhir pada kata "Ke - me - ja" adalah...?',
                        'audio' => 'Suku kata terakhir pada kata Kemeja adalah apa?',
                        'emoji' => '👔',
                        'options' => [
                            ['emoji' => '🇯', 'text' => 'JA', 'is_correct' => true],
                            ['emoji' => '🅺', 'text' => 'KE', 'is_correct' => false],
                            ['emoji' => 'Ⓜ️', 'text' => 'ME', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 2,
                'title' => 'Membaca Pi-a-no, Ra-di-o & Ku-a-li',
                'slug' => 'kuis-3suku-l2-piano-radio-kuali',
                'icon_emoji' => '🎹',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Pi - A - No. Alat musik tuts melodi indah ini dibaca apa ya?',
                        'audio' => 'Pi - A - No. Alat musik tuts melodi indah ini dibaca apa ya?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Pi - a - no (Piano)', 'is_correct' => true],
                            ['emoji' => '📻', 'text' => 'Ra - di - o', 'is_correct' => false],
                            ['emoji' => '🎺', 'text' => 'Te - rom - pet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ra - Di - O. Pemutar siaran lagu ceria ini dibaca apa ya?',
                        'audio' => 'Ra - Di - O. Pemutar siaran lagu ceria ini dibaca apa ya?',
                        'emoji' => '📻',
                        'options' => [
                            ['emoji' => '📻', 'text' => 'Ra - di - o (Radio)', 'is_correct' => true],
                            ['emoji' => '🎹', 'text' => 'Pi - a - no', 'is_correct' => false],
                            ['emoji' => '🍳', 'text' => 'Ku - a - li', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ku - A - Li. Wajan masak di dapur ibu ini dibaca apa ya?',
                        'audio' => 'Ku - A - Li. Wajan masak di dapur ibu ini dibaca apa ya?',
                        'emoji' => '🍳',
                        'options' => [
                            ['emoji' => '🍳', 'text' => 'Ku - a - li (Kuali)', 'is_correct' => true],
                            ['emoji' => '🥑', 'text' => 'Al - pu - kat', 'is_correct' => false],
                            ['emoji' => '🍈', 'text' => 'Pe - pa - ya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata tengah pada kata "Pi - A - No" adalah huruf vokal...?',
                        'audio' => 'Suku kata tengah pada kata Piano adalah huruf vokal apa?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'Huruf Vokal A', 'is_correct' => true],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                            ['emoji' => '⭕', 'text' => 'Huruf O', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata terakhir pada kata "Ra - Di - O" adalah huruf vokal...?',
                        'audio' => 'Suku kata terakhir pada kata Radio adalah huruf vokal apa?',
                        'emoji' => '📻',
                        'options' => [
                            ['emoji' => '⭕', 'text' => 'Huruf Vokal O', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                            ['emoji' => 'ℹ️', 'text' => 'Huruf I', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (ALPUKAT, TEROMPET, JUARA, PENGGAL KATA & GRAND MASTER) ---
            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 3,
                'title' => 'Membaca Al-pu-kat, Te-rom-pet & Ju-a-ra',
                'slug' => 'kuis-3suku-l3-alpukat-terompet-juara',
                'icon_emoji' => '🥑',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Al - Pu - Kat. Buah hijau lembut bernutrisi ini dibaca apa?',
                        'audio' => 'Al - Pu - Kat. Buah hijau lembut bernutrisi ini dibaca apa?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🥑', 'text' => 'Al - pu - kat (Alpukat)', 'is_correct' => true],
                            ['emoji' => '🍈', 'text' => 'Pe - pa - ya', 'is_correct' => false],
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Te - Rom - Pet. Alat musik tiup lantang ini dibaca apa?',
                        'audio' => 'Te - Rom - Pet. Alat musik tiup lantang ini dibaca apa?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => 'Te - rom - pet (Terompet)', 'is_correct' => true],
                            ['emoji' => '🎹', 'text' => 'Pi - a - no', 'is_correct' => false],
                            ['emoji' => '📻', 'text' => 'Ra - di - o', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Ju - A - Ra. Anak pintar berprestasi hebat ini dibaca apa?',
                        'audio' => 'Ju - A - Ra. Anak pintar berprestasi hebat ini dibaca apa?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => 'Ju - a - ra (Juara)', 'is_correct' => true],
                            ['emoji' => '🦅', 'text' => 'Ga - ru - da', 'is_correct' => false],
                            ['emoji' => '🗼', 'text' => 'Me - na - ra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata pertama pada kata "Al - pu - kat" adalah...?',
                        'audio' => 'Suku kata pertama pada kata Alpukat adalah apa?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🅰️', 'text' => 'AL', 'is_correct' => true],
                            ['emoji' => '🅿️', 'text' => 'PU', 'is_correct' => false],
                            ['emoji' => '🅺', 'text' => 'KAT', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata tengah pada kata "Te - rom - pet" adalah...?',
                        'audio' => 'Suku kata tengah pada kata Terompet adalah apa?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🇷', 'text' => 'ROM', 'is_correct' => true],
                            ['emoji' => '🇹', 'text' => 'TE', 'is_correct' => false],
                            ['emoji' => '🅿️', 'text' => 'PET', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Suku kata pertama pada kata "Ju - a - ra" adalah...?',
                        'audio' => 'Suku kata pertama pada kata Juara adalah apa?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🇯', 'text' => 'JU', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'A', 'is_correct' => false],
                            ['emoji' => '🇷', 'text' => 'RA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Al - pu - kat"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Alpukat?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Te - rom - pet"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Terompet?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => false],
                            ['emoji' => '5️⃣', 'text' => '5 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Ju - a - ra"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Juara?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => '1 Suku Kata', 'is_correct' => false],
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus membaca kata demi suku kata secara tenang dan tepat?',
                        'audio' => 'Mengapa kita harus membaca kata demi suku kata secara tenang dan tepat?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Agar pengucapannya jelas, benar, dan maknanya mudah dipahami', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Agar cepat tidur', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak ada gunanya', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 3,
                'title' => 'Cerdas Memenggal & Menghitung 3 Suku Kata',
                'slug' => 'kuis-3suku-l3-penggal-hitung-suku-kata',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Sepeda"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Sepeda?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Se - pe - da', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Sep - eda', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Seped - a', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Kelapa"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Kelapa?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Kel - apa', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Kela - pa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Celana"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Celana?',
                        'emoji' => '👖',
                        'options' => [
                            ['emoji' => '👖', 'text' => 'Ce - la - na', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Cel - ana', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Cela - na', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Gurita"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Gurita?',
                        'emoji' => '🐙',
                        'options' => [
                            ['emoji' => '🐙', 'text' => 'Gu - ri - ta', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Gur - ita', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Guri - ta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Sepatu"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Sepatu?',
                        'emoji' => '👟',
                        'options' => [
                            ['emoji' => '👟', 'text' => 'Se - pa - tu', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Sep - atu', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Sepa - tu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Kepala"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Kepala?',
                        'emoji' => '👶',
                        'options' => [
                            ['emoji' => '👶', 'text' => 'Ke - pa - la', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Kep - ala', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Kepa - la', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Pepaya"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Pepaya?',
                        'emoji' => '🍈',
                        'options' => [
                            ['emoji' => '🍈', 'text' => 'Pe - pa - ya', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Pep - aya', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Pepa - ya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Kereta"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Kereta?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚆', 'text' => 'Ke - re - ta', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Ker - eta', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Kere - ta', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Cemara"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Cemara?',
                        'emoji' => '🌲',
                        'options' => [
                            ['emoji' => '🌲', 'text' => 'Ce - ma - ra', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Cem - ara', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Cema - ra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata "Kemeja"?',
                        'audio' => 'Bagaimanakah pemenggalan suku kata yang benar untuk kata Kemeja?',
                        'emoji' => '👔',
                        'options' => [
                            ['emoji' => '👔', 'text' => 'Ke - me - ja', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Kem - eja', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Keme - ja', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'tiga-suku-kata',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Membaca 3 Suku Kata Ceria',
                'slug' => 'kuis-3suku-l3-grand-master-3suku',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Kata manakah di bawah ini yang terdiri dari TEPAT 3 suku kata?',
                        'audio' => 'Kata manakah di bawah ini yang terdiri dari TEPAT 3 suku kata?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🚲', 'text' => 'Se - pe - da (3 Suku Kata)', 'is_correct' => true],
                            ['emoji' => '⚽', 'text' => 'Bo - la (2 Suku Kata)', 'is_correct' => false],
                            ['emoji' => '📖', 'text' => 'Bu - ku (2 Suku Kata)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata manakah di bawah ini yang BUKAN 3 suku kata?',
                        'audio' => 'Kata manakah di bawah ini yang BUKAN 3 suku kata?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Bo - la (Hanya 2 Suku Kata)', 'is_correct' => true],
                            ['emoji' => '🥥', 'text' => 'Ke - la - pa (3 Suku Kata)', 'is_correct' => false],
                            ['emoji' => '👖', 'text' => 'Ce - la - na (3 Suku Kata)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "SE", "PA", dan "TU" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata SE, PA, dan TU digabungkan akan membentuk kata apa?',
                        'emoji' => '👟',
                        'options' => [
                            ['emoji' => '👟', 'text' => 'SEPATU', 'is_correct' => true],
                            ['emoji' => '🚲', 'text' => 'SEPEDA', 'is_correct' => false],
                            ['emoji' => '👖', 'text' => 'CELANA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "KE", "LA", dan "PA" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata KE, LA, dan PA digabungkan akan membentuk kata apa?',
                        'emoji' => '🥥',
                        'options' => [
                            ['emoji' => '🥥', 'text' => 'KELAPA', 'is_correct' => true],
                            ['emoji' => '👶', 'text' => 'KEPALA', 'is_correct' => false],
                            ['emoji' => '🚆', 'text' => 'KERETA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "GU", "RI", dan "TA" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata GU, RI, dan TA digabungkan akan membentuk kata apa?',
                        'emoji' => '🐙',
                        'options' => [
                            ['emoji' => '🐙', 'text' => 'GURITA', 'is_correct' => true],
                            ['emoji' => '🐊', 'text' => 'BUAYA', 'is_correct' => false],
                            ['emoji' => '🦅', 'text' => 'GARUDA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "KE", "RE", dan "TA" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata KE, RE, dan TA digabungkan akan membentuk kata apa?',
                        'emoji' => '🚆',
                        'options' => [
                            ['emoji' => '🚆', 'text' => 'KERETA', 'is_correct' => true],
                            ['emoji' => '👶', 'text' => 'KEPALA', 'is_correct' => false],
                            ['emoji' => '👔', 'text' => 'KEMEJA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "GA", "RU", dan "DA" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata GA, RU, dan DA digabungkan akan membentuk kata apa?',
                        'emoji' => '🦅',
                        'options' => [
                            ['emoji' => '🦅', 'text' => 'GARUDA', 'is_correct' => true],
                            ['emoji' => '🐙', 'text' => 'GURITA', 'is_correct' => false],
                            ['emoji' => '🐊', 'text' => 'BUAYA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "ME", "NA", dan "RA" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata ME, NA, dan RA digabungkan akan membentuk kata apa?',
                        'emoji' => '🗼',
                        'options' => [
                            ['emoji' => '🗼', 'text' => 'MENARA', 'is_correct' => true],
                            ['emoji' => '🌲', 'text' => 'CEMARA', 'is_correct' => false],
                            ['emoji' => '🪟', 'text' => 'JENDELA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika suku kata "PI", "A", dan "NO" digabungkan, akan membentuk kata...?',
                        'audio' => 'Jika suku kata PI, A, dan NO digabungkan akan membentuk kata apa?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'PIANO', 'is_correct' => true],
                            ['emoji' => '📻', 'text' => 'RADIO', 'is_correct' => false],
                            ['emoji' => '🎺', 'text' => 'TEROMPET', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak pintar yang sudah menguasai seluruh kata 3 suku kata?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang sudah menguasai seluruh kata 3 suku kata?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Grand Champion Ahli Membaca 3 Suku Kata Ceria!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Mengantuk Saat Mengeja', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Patung Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 2 - TOPIK 4: KATA BERAKHIRAN KONSONAN (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (RUMAH, AYAM, IKAN, BURUNG, POHON, KUCING, GAJAH) ---
            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 1,
                'title' => 'Membaca Ru-mah, A-yam & I-kan',
                'slug' => 'kuis-akhiran-l1-rumah-ayam-ikan',
                'icon_emoji' => '🏠',
                'target_age' => 5,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'R-U Ru, M-A-H Mah. Tempat tinggal nyaman kita ini dibaca apa?',
                        'audio' => 'R-U Ru, M-A-H Mah. Tempat tinggal nyaman kita ini dibaca apa?',
                        'emoji' => '🏠',
                        'options' => [
                            ['emoji' => '🏠', 'text' => 'Ru - mah (Rumah)', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'A - yam', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'I - kan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'A, Y-A-M Yam. Unggas berkokok pagi ini dibaca apa?',
                        'audio' => 'A, Y-A-M Yam. Unggas berkokok pagi ini dibaca apa?',
                        'emoji' => '🐔',
                        'options' => [
                            ['emoji' => '🐔', 'text' => 'A - yam (Ayam)', 'is_correct' => true],
                            ['emoji' => '🐦', 'text' => 'Bu - rung', 'is_correct' => false],
                            ['emoji' => '🐘', 'text' => 'Ga - jah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'I, K-A-N Kan. Hewan berenang di air jernih ini dibaca apa?',
                        'audio' => 'I, K-A-N Kan. Hewan berenang di air jernih ini dibaca apa?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐟', 'text' => 'I - kan (Ikan)', 'is_correct' => true],
                            ['emoji' => '🌳', 'text' => 'Po - hon', 'is_correct' => false],
                            ['emoji' => '🏠', 'text' => 'Ru - mah', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 1,
                'title' => 'Membaca Bu-rung, Po-hon & Ku-cing',
                'slug' => 'kuis-akhiran-l1-burung-pohon-kucing',
                'icon_emoji' => '🐦',
                'target_age' => 5,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'B-U Bu, R-U-N-G Rung. Hewan bersayap merdu ini dibaca apa?',
                        'audio' => 'B-U Bu, R-U-N-G Rung. Hewan bersayap merdu ini dibaca apa?',
                        'emoji' => '🐦',
                        'options' => [
                            ['emoji' => '🐦', 'text' => 'Bu - rung (Burung)', 'is_correct' => true],
                            ['emoji' => '🐱', 'text' => 'Ku - cing', 'is_correct' => false],
                            ['emoji' => '🌳', 'text' => 'Po - hon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'P-O Po, H-O-N Hon. Tanaman rindang dan sejuk ini dibaca apa?',
                        'audio' => 'P-O Po, H-O-N Hon. Tanaman rindang dan sejuk ini dibaca apa?',
                        'emoji' => '🌳',
                        'options' => [
                            ['emoji' => '🌳', 'text' => 'Po - hon (Pohon)', 'is_correct' => true],
                            ['emoji' => '🐟', 'text' => 'I - kan', 'is_correct' => false],
                            ['emoji' => '🏠', 'text' => 'Ru - mah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'K-U Ku, C-I-N-G Cing. Hewan lucu berbulu halus ini dibaca apa?',
                        'audio' => 'K-U Ku, C-I-N-G Cing. Hewan lucu berbulu halus ini dibaca apa?',
                        'emoji' => '🐱',
                        'options' => [
                            ['emoji' => '🐱', 'text' => 'Ku - cing (Kucing)', 'is_correct' => true],
                            ['emoji' => '🐦', 'text' => 'Bu - rung', 'is_correct' => false],
                            ['emoji' => '🐔', 'text' => 'A - yam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 1,
                'title' => 'Membaca Ga-jah & Mengenal Huruf Akhir',
                'slug' => 'kuis-akhiran-l1-gajah-huruf-akhir',
                'icon_emoji' => '🐘',
                'target_age' => 5,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'G-A Ga, J-A-H Jah. Hewan berbelalai panjang ini dibaca apa?',
                        'audio' => 'G-A Ga, J-A-H Jah. Hewan berbelalai panjang ini dibaca apa?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Ga - jah (Gajah)', 'is_correct' => true],
                            ['emoji' => '🏠', 'text' => 'Ru - mah', 'is_correct' => false],
                            ['emoji' => '🐔', 'text' => 'A - yam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Ru - mah"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Rumah?',
                        'emoji' => '🏠',
                        'options' => [
                            ['emoji' => '🅷', 'text' => 'Huruf H', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "I - kan"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🅷', 'text' => 'Huruf H', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (EMBER, BEBEK, BERAS, PASIR, LUMUT, SABUN, MANGKUK) ---
            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 2,
                'title' => 'Membaca Em-ber, Be-bek & Be-ras',
                'slug' => 'kuis-akhiran-l2-ember-bebek-beras',
                'icon_emoji' => '🪣',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'E-M Em, B-E-R Ber. Wadah air bersih ini dibaca apa?',
                        'audio' => 'E-M Em, B-E-R Ber. Wadah air bersih ini dibaca apa?',
                        'emoji' => '🪣',
                        'options' => [
                            ['emoji' => '🪣', 'text' => 'Em - ber (Ember)', 'is_correct' => true],
                            ['emoji' => '🦆', 'text' => 'Be - bek', 'is_correct' => false],
                            ['emoji' => '🌾', 'text' => 'Be - ras', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-E Be, B-E-K Bek. Unggas berenang kwek-kwek ini dibaca apa?',
                        'audio' => 'B-E Be, B-E-K Bek. Unggas berenang kwek-kwek ini dibaca apa?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🦆', 'text' => 'Be - bek (Bebek)', 'is_correct' => true],
                            ['emoji' => '🪣', 'text' => 'Em - ber', 'is_correct' => false],
                            ['emoji' => '🥣', 'text' => 'Mang - kuk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-E Be, R-A-S Ras. Butir putih dimasak jadi nasi ini dibaca apa?',
                        'audio' => 'B-E Be, R-A-S Ras. Butir putih dimasak jadi nasi ini dibaca apa?',
                        'emoji' => '🌾',
                        'options' => [
                            ['emoji' => '🌾', 'text' => 'Be - ras (Beras)', 'is_correct' => true],
                            ['emoji' => '🏖️', 'text' => 'Pa - sir', 'is_correct' => false],
                            ['emoji' => '🧼', 'text' => 'Sa - bun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Em - ber"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Ember?',
                        'emoji' => '🪣',
                        'options' => [
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => true],
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => false],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Be - bek"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Bebek?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => true],
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => false],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 2,
                'title' => 'Membaca Pa-sir, Lu-mut & Sa-bun',
                'slug' => 'kuis-akhiran-l2-pasir-lumut-sabun',
                'icon_emoji' => '🏖️',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'P-A Pa, S-I-R Sir. Butiran lembut di pantai ini dibaca apa?',
                        'audio' => 'P-A Pa, S-I-R Sir. Butiran lembut di pantai ini dibaca apa?',
                        'emoji' => '🏖️',
                        'options' => [
                            ['emoji' => '🏖️', 'text' => 'Pa - sir (Pasir)', 'is_correct' => true],
                            ['emoji' => '🌾', 'text' => 'Be - ras', 'is_correct' => false],
                            ['emoji' => '🌱', 'text' => 'Lu - mut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'L-U Lu, M-U-T Mut. Tanaman hijau lembut di bebatuan ini dibaca apa?',
                        'audio' => 'L-U Lu, M-U-T Mut. Tanaman hijau lembut di bebatuan ini dibaca apa?',
                        'emoji' => '🌱',
                        'options' => [
                            ['emoji' => '🌱', 'text' => 'Lu - mut (Lumut)', 'is_correct' => true],
                            ['emoji' => '🧼', 'text' => 'Sa - bun', 'is_correct' => false],
                            ['emoji' => '🥣', 'text' => 'Mang - kuk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'S-A Sa, B-U-N Bun. Pembersih wangi berbusa ini dibaca apa?',
                        'audio' => 'S-A Sa, B-U-N Bun. Pembersih wangi berbusa ini dibaca apa?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Sa - bun (Sabun)', 'is_correct' => true],
                            ['emoji' => '🎈', 'text' => 'Ba - lon', 'is_correct' => false],
                            ['emoji' => '🌳', 'text' => 'Po - hon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Lu - mut"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Lumut?',
                        'emoji' => '🌱',
                        'options' => [
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => true],
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => false],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Be - ras"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Beras?',
                        'emoji' => '🌾',
                        'options' => [
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => true],
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => false],
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 2,
                'title' => 'Membaca Mang-kuk, Ba-lon & Al-pu-kat',
                'slug' => 'kuis-akhiran-l2-mangkuk-balon-alpukat',
                'icon_emoji' => '🥣',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'M-A-N-G Mang, K-U-K Kuk. Wadah sup lezat ini dibaca apa?',
                        'audio' => 'M-A-N-G Mang, K-U-K Kuk. Wadah sup lezat ini dibaca apa?',
                        'emoji' => '🥣',
                        'options' => [
                            ['emoji' => '🥣', 'text' => 'Mang - kuk (Mangkuk)', 'is_correct' => true],
                            ['emoji' => '🪣', 'text' => 'Em - ber', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Be - bek', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-A Ba, L-O-N Lon. Mainan karet melayang ini dibaca apa?',
                        'audio' => 'B-A Ba, L-O-N Lon. Mainan karet melayang ini dibaca apa?',
                        'emoji' => '🎈',
                        'options' => [
                            ['emoji' => '🎈', 'text' => 'Ba - lon (Balon)', 'is_correct' => true],
                            ['emoji' => '🧼', 'text' => 'Sa - bun', 'is_correct' => false],
                            ['emoji' => '🌳', 'text' => 'Po - hon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'A-L Al, P-U Pu, K-A-T Kat. Buah hijau kaya nutrisi ini dibaca apa?',
                        'audio' => 'A-L Al, P-U Pu, K-A-T Kat. Buah hijau kaya nutrisi ini dibaca apa?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '🥑', 'text' => 'Al - pu - kat (Alpukat)', 'is_correct' => true],
                            ['emoji' => '🎺', 'text' => 'Te - rom - pet', 'is_correct' => false],
                            ['emoji' => '🌱', 'text' => 'Lu - mut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Mang - kuk"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Mangkuk?',
                        'emoji' => '🥣',
                        'options' => [
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Ba - lon"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Balon?',
                        'emoji' => '🎈',
                        'options' => [
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => true],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (TEROMPET, OMBAK, BINTANG, PINTAR, PENGELOMPOKKAN & GRAND MASTER) ---
            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 3,
                'title' => 'Membaca Te-rom-pet, O-mbak & Bin-tang',
                'slug' => 'kuis-akhiran-l3-terompet-ombak-bintang',
                'icon_emoji' => '🎺',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'T-E Te, R-O-M Rom, P-E-T Pet. Alat musik tiup lantang ini dibaca apa?',
                        'audio' => 'T-E Te, R-O-M Rom, P-E-T Pet. Alat musik tiup lantang ini dibaca apa?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => 'Te - rom - pet (Terompet)', 'is_correct' => true],
                            ['emoji' => '🥑', 'text' => 'Al - pu - kat', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bin - tang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'O, M-B-A-K Mbak. Deburan air laut di pantai ini dibaca apa?',
                        'audio' => 'O, M-B-A-K Mbak. Deburan air laut di pantai ini dibaca apa?',
                        'emoji' => '🌊',
                        'options' => [
                            ['emoji' => '🌊', 'text' => 'O - mbak (Ombak)', 'is_correct' => true],
                            ['emoji' => '🦆', 'text' => 'Be - bek', 'is_correct' => false],
                            ['emoji' => '🥣', 'text' => 'Mang - kuk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-I-N Bin, T-A-N-G Tang. Benda langit bersinar malam ini dibaca apa?',
                        'audio' => 'B-I-N Bin, T-A-N-G Tang. Benda langit bersinar malam ini dibaca apa?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '⭐', 'text' => 'Bin - tang (Bintang)', 'is_correct' => true],
                            ['emoji' => '🐦', 'text' => 'Bu - rung', 'is_correct' => false],
                            ['emoji' => '🐱', 'text' => 'Ku - cing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'P-I-N Pin, T-A-R Tar. Anak rajin belajar yang berprestasi ini dibaca apa?',
                        'audio' => 'P-I-N Pin, T-A-R Tar. Anak rajin belajar yang berprestasi ini dibaca apa?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => 'Pin - tar (Pintar)', 'is_correct' => true],
                            ['emoji' => '🏖️', 'text' => 'Pa - sir', 'is_correct' => false],
                            ['emoji' => '🪣', 'text' => 'Em - ber', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Te - rom - pet"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Terompet?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => true],
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => false],
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "O - mbak"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Ombak?',
                        'emoji' => '🌊',
                        'options' => [
                            ['emoji' => '🅺', 'text' => 'Huruf K', 'is_correct' => true],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bunyi sengau apakah yang berada di AKHIR kata "Bin - tang"?',
                        'audio' => 'Bunyi sengau apakah yang berada di akhir kata Bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '🆖', 'text' => 'Huruf NG', 'is_correct' => true],
                            ['emoji' => '🅽', 'text' => 'Huruf N', 'is_correct' => false],
                            ['emoji' => '🅼', 'text' => 'Huruf M', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Huruf konsonan apakah yang berada di AKHIR kata "Pin - tar"?',
                        'audio' => 'Huruf konsonan apakah yang berada di akhir kata Pintar?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🇷', 'text' => 'Huruf R', 'is_correct' => true],
                            ['emoji' => '🆂', 'text' => 'Huruf S', 'is_correct' => false],
                            ['emoji' => '🆃', 'text' => 'Huruf T', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata manakah yang sama-sama berakhiran huruf konsonan R?',
                        'audio' => 'Kata manakah yang sama-sama berakhiran huruf konsonan R?',
                        'emoji' => '🏖️',
                        'options' => [
                            ['emoji' => '🏖️', 'text' => 'Em-ber, Pa-sir, Pin-tar', 'is_correct' => true],
                            ['emoji' => '🦆', 'text' => 'Be-bek, Mang-kuk, O-mbak', 'is_correct' => false],
                            ['emoji' => '🏠', 'text' => 'Ru-mah, Ga-jah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kata manakah yang sama-sama berakhiran huruf konsonan K?',
                        'audio' => 'Kata manakah yang sama-sama berakhiran huruf konsonan K?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🦆', 'text' => 'Be-bek, Mang-kuk, O-mbak', 'is_correct' => true],
                            ['emoji' => '🐟', 'text' => 'I-kan, Po-hon, Sa-bun', 'is_correct' => false],
                            ['emoji' => '⭐', 'text' => 'Bin-tang, Bu-rung, Ku-cing', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 3,
                'title' => 'Cerdas Mengelompokkan Huruf Konsonan Akhir',
                'slug' => 'kuis-akhiran-l3-kelompok-konsonan-akhir',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran konsonan H?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran konsonan H?',
                        'emoji' => '🏠',
                        'options' => [
                            ['emoji' => '🏠', 'text' => 'Ru-mah dan Ga-jah', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'A-yam dan I-kan', 'is_correct' => false],
                            ['emoji' => '🌳', 'text' => 'Po-hon dan Bu-rung', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran konsonan N?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran konsonan N?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '🐟', 'text' => 'I-kan, Po-hon, Sa-bun, Ba-lon', 'is_correct' => true],
                            ['emoji' => '🪣', 'text' => 'Em-ber, Pa-sir, Pin-tar', 'is_correct' => false],
                            ['emoji' => '🦆', 'text' => 'Be-bek, Mang-kuk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran bunyi sengau NG?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran bunyi sengau NG?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '⭐', 'text' => 'Bu-rung, Ku-cing, Bin-tang', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'A-yam, Ru-mah, Ga-jah', 'is_correct' => false],
                            ['emoji' => '🌾', 'text' => 'Be-ras, Lu-mut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kelompok kata manakah yang semuanya berakhiran konsonan T?',
                        'audio' => 'Kelompok kata manakah yang semuanya berakhiran konsonan T?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎺', 'text' => 'Lu-mut, Al-pu-kat, Te-rom-pet', 'is_correct' => true],
                            ['emoji' => '🏖️', 'text' => 'Pa-sir, Em-ber, Pin-tar', 'is_correct' => false],
                            ['emoji' => '🌊', 'text' => 'O-mbak, Be-bek', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Al - pu - kat"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Alpukat?',
                        'emoji' => '🥑',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Te - rom - pet"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Terompet?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => false],
                            ['emoji' => '1️⃣', 'text' => '1 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Bin - tang"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => false],
                            ['emoji' => '1️⃣', 'text' => '1 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Mang - kuk"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Mangkuk?',
                        'emoji' => '🥣',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => true],
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => false],
                            ['emoji' => '4️⃣', 'text' => '4 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah suku kata pada kata "Ga - jah"?',
                        'audio' => 'Berapakah jumlah suku kata pada kata Gajah?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '2️⃣', 'text' => '2 Suku Kata', 'is_correct' => true],
                            ['emoji' => '1️⃣', 'text' => '1 Suku Kata', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Suku Kata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus membunyikan huruf konsonan akhir dengan jelas?',
                        'audio' => 'Mengapa kita harus membunyikan huruf konsonan akhir dengan jelas?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Agar kata terdengar tepat, sempurna, dan maknanya tidak tertukar', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Biar cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tidak penting sama sekali', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'akhiran-konsonan',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Kata Berakhiran Konsonan',
                'slug' => 'kuis-akhiran-l3-grand-master-akhiran',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'R-U Ru, M-A-H Mah dibaca apa?',
                        'audio' => 'R-U Ru, M-A-H Mah dibaca apa?',
                        'emoji' => '🏠',
                        'options' => [
                            ['emoji' => '🏠', 'text' => 'Rumah', 'is_correct' => true],
                            ['emoji' => '🐔', 'text' => 'Ayam', 'is_correct' => false],
                            ['emoji' => '🐟', 'text' => 'Ikan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'A, Y-A-M Yam dibaca apa?',
                        'audio' => 'A, Y-A-M Yam dibaca apa?',
                        'emoji' => '🐔',
                        'options' => [
                            ['emoji' => '🐔', 'text' => 'Ayam', 'is_correct' => true],
                            ['emoji' => '🐦', 'text' => 'Burung', 'is_correct' => false],
                            ['emoji' => '🐱', 'text' => 'Kucing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'E-M Em, B-E-R Ber dibaca apa?',
                        'audio' => 'E-M Em, B-E-R Ber dibaca apa?',
                        'emoji' => '🪣',
                        'options' => [
                            ['emoji' => '🪣', 'text' => 'Ember', 'is_correct' => true],
                            ['emoji' => '🦆', 'text' => 'Bebek', 'is_correct' => false],
                            ['emoji' => '🌾', 'text' => 'Beras', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-E Be, B-E-K Bek dibaca apa?',
                        'audio' => 'B-E Be, B-E-K Bek dibaca apa?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🦆', 'text' => 'Bebek', 'is_correct' => true],
                            ['emoji' => '🪣', 'text' => 'Ember', 'is_correct' => false],
                            ['emoji' => '🥣', 'text' => 'Mangkuk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'P-A Pa, S-I-R Sir dibaca apa?',
                        'audio' => 'P-A Pa, S-I-R Sir dibaca apa?',
                        'emoji' => '🏖️',
                        'options' => [
                            ['emoji' => '🏖️', 'text' => 'Pasir', 'is_correct' => true],
                            ['emoji' => '🌱', 'text' => 'Lumut', 'is_correct' => false],
                            ['emoji' => '🧼', 'text' => 'Sabun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'L-U Lu, M-U-T Mut dibaca apa?',
                        'audio' => 'L-U Lu, M-U-T Mut dibaca apa?',
                        'emoji' => '🌱',
                        'options' => [
                            ['emoji' => '🌱', 'text' => 'Lumut', 'is_correct' => true],
                            ['emoji' => '🏖️', 'text' => 'Pasir', 'is_correct' => false],
                            ['emoji' => '🌾', 'text' => 'Beras', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'S-A Sa, B-U-N Bun dibaca apa?',
                        'audio' => 'S-A Sa, B-U-N Bun dibaca apa?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Sabun', 'is_correct' => true],
                            ['emoji' => '🎈', 'text' => 'Balon', 'is_correct' => false],
                            ['emoji' => '🌳', 'text' => 'Pohon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'B-I-N Bin, T-A-N-G Tang dibaca apa?',
                        'audio' => 'B-I-N Bin, T-A-N-G Tang dibaca apa?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '⭐', 'text' => 'Bintang', 'is_correct' => true],
                            ['emoji' => '🐦', 'text' => 'Burung', 'is_correct' => false],
                            ['emoji' => '🐱', 'text' => 'Kucing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'P-I-N Pin, T-A-R Tar dibaca apa?',
                        'audio' => 'P-I-N Pin, T-A-R Tar dibaca apa?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => 'Pintar', 'is_correct' => true],
                            ['emoji' => '🏖️', 'text' => 'Pasir', 'is_correct' => false],
                            ['emoji' => '🪣', 'text' => 'Ember', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar apakah yang pantas untuk anak pintar yang lancar membaca seluruh kata berakhiran konsonan?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang lancar membaca seluruh kata berakhiran konsonan?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Grand Champion Ahli Kata Berakhiran Konsonan!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Malas Mengeja', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Patung yang Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // PILAR 2 - TOPIK 5: CERITA PENDEK BERGAMBAR (9 KUIS: 3 L1, 3 L2, 3 L3)
            // =========================================================================

            // --- LEVEL 1: 3 KUIS DENGAN 3 BUTIR SOAL (BUDI, KUCING, BURUNG, SEPEDAN, IKAN, BUNGA, BOLA) ---
            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 1,
                'title' => 'Memahami Cerita: Budi Suka Apel & Kucing Minum Susu',
                'slug' => 'kuis-cerita-l1-budi-kucing',
                'icon_emoji' => '🍎',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Cerita: "Budi suka makan apel merah." Buah apa yang disukai Budi?',
                        'audio' => 'Cerita: Budi suka makan apel merah. Buah apa yang disukai Budi?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '🍎', 'text' => 'Apel Merah yang Manis', 'is_correct' => true],
                            ['emoji' => '🍌', 'text' => 'Pisang', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Kucing putih minum susu hangat." Apa yang diminum kucing putih?',
                        'audio' => 'Cerita: Kucing putih minum susu hangat. Apa yang diminum kucing putih?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🥛', 'text' => 'Susu Hangat Segar', 'is_correct' => true],
                            ['emoji' => '☕', 'text' => 'Teh Manis', 'is_correct' => false],
                            ['emoji' => '🧃', 'text' => 'Jus Jeruk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Setelah minum susu dan kenyang, apa yang dilakukan kucing putih?',
                        'audio' => 'Setelah minum susu dan kenyang, apa yang dilakukan kucing putih?',
                        'emoji' => '😴',
                        'options' => [
                            ['emoji' => '😴', 'text' => 'Tidur pulas di sofa', 'is_correct' => true],
                            ['emoji' => '🏃', 'text' => 'Berlari kencang', 'is_correct' => false],
                            ['emoji' => '🏊', 'text' => 'Berenang di sungai', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 1,
                'title' => 'Memahami Cerita: Burung Terbang & Sepeda Dika',
                'slug' => 'kuis-cerita-l1-burung-sepeda',
                'icon_emoji' => '🕊️',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Cerita: "Burung kecil terbang tinggi di langit biru." Di mana burung terbang?',
                        'audio' => 'Cerita: Burung kecil terbang tinggi di langit biru. Di mana burung terbang?',
                        'emoji' => '🕊️',
                        'options' => [
                            ['emoji' => '☁️', 'text' => 'Di langit biru cerah', 'is_correct' => true],
                            ['emoji' => '🌊', 'text' => 'Di dalam dasar laut', 'is_correct' => false],
                            ['emoji' => '🕳️', 'text' => 'Di dalam lubang tanah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Dika memiliki sepeda roda dua warna biru." Apa warna sepeda Dika?',
                        'audio' => 'Cerita: Dika memiliki sepeda roda dua warna biru. Apa warna sepeda Dika?',
                        'emoji' => '🚲',
                        'options' => [
                            ['emoji' => '🔵', 'text' => 'Warna Biru', 'is_correct' => true],
                            ['emoji' => '🔴', 'text' => 'Warna Merah', 'is_correct' => false],
                            ['emoji' => '🟡', 'text' => 'Warna Kuning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Kapan dan di mana Dika bermain sepeda bersama teman-temannya?',
                        'audio' => 'Kapan dan di mana Dika bermain sepeda bersama teman-temannya?',
                        'emoji' => '🌳',
                        'options' => [
                            ['emoji' => '🌳', 'text' => 'Di sore hari di taman', 'is_correct' => true],
                            ['emoji' => '🌙', 'text' => 'Di tengah malam di jalan raya', 'is_correct' => false],
                            ['emoji' => '🏠', 'text' => 'Di dalam kamar tidur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 1,
                'title' => 'Memahami Cerita: Ikan Emas, Bunga Mawar & Bola',
                'slug' => 'kuis-cerita-l1-ikan-bunga-bola',
                'icon_emoji' => '🐟',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Cerita: "Ada lima ekor ikan emas di kolam kakek." Berapa jumlah ikan emas kakek?',
                        'audio' => 'Cerita: Ada lima ekor ikan emas di kolam kakek. Berapa jumlah ikan emas kakek?',
                        'emoji' => '🐟',
                        'options' => [
                            ['emoji' => '5️⃣', 'text' => '5 Ekor Ikan Emas', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Ekor', 'is_correct' => false],
                            ['emoji' => '🔟', 'text' => '10 Ekor', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Siti rajin menyiram bunga mawar." Bunga apa yang dirawat Siti?',
                        'audio' => 'Cerita: Siti rajin menyiram bunga mawar. Bunga apa yang dirawat Siti?',
                        'emoji' => '🌸',
                        'options' => [
                            ['emoji' => '🌸', 'text' => 'Bunga Mawar Merah yang Harum', 'is_correct' => true],
                            ['emoji' => '🌻', 'text' => 'Bunga Matahari', 'is_correct' => false],
                            ['emoji' => '🌵', 'text' => 'Kaktus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Ali menendang bola masuk ke gawang." Apa yang terjadi?',
                        'audio' => 'Cerita: Ali menendang bola masuk ke gawang. Apa yang terjadi?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '⚽', 'text' => 'Gol! Ali dan teman bersorak gembira', 'is_correct' => true],
                            ['emoji' => '😭', 'text' => 'Ali menangis sedih', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Semua tidur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 2: 3 KUIS DENGAN 5 BUTIR SOAL (CUCI TANGAN, GOSOK GIGI, SEKOLAH, GAJAH, KUPU-KUPU, SARAPAN, TANAM POHON) ---
            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 2,
                'title' => 'Memahami Cerita: Cuci Tangan, Gosok Gigi & Sekolah',
                'slug' => 'kuis-cerita-l2-cuci-tangan-gigi-sekolah',
                'icon_emoji' => '🧼',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Cerita: "Sebelum makan siang, Rina mencuci tangan dengan air dan sabun." Mengapa Rina cuci tangan?',
                        'audio' => 'Mengapa Rina mencuci tangan sebelum makan siang?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '🧼', 'text' => 'Agar tangan bersih, wangi, dan bebas kuman', 'is_correct' => true],
                            ['emoji' => '🎨', 'text' => 'Biar tangan berwarna-warni', 'is_correct' => false],
                            ['emoji' => '🥶', 'text' => 'Biar tangan terasa kedinginan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Beni tidak pernah lupa menggosok gigi sebelum tidur." Kapan Beni menggosok gigi?',
                        'audio' => 'Kapan Beni menggosok giginya?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🌙', 'text' => 'Sebelum tidur malam', 'is_correct' => true],
                            ['emoji' => '🏊', 'text' => 'Saat sedang berenang', 'is_correct' => false],
                            ['emoji' => '⚽', 'text' => 'Saat sedang main bola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana kondisi gigi Beni yang rajin digosok setiap malam?',
                        'audio' => 'Bagaimana kondisi gigi Beni yang rajin digosok setiap malam?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '🦷', 'text' => 'Putih berkilau, kuat, dan sehat', 'is_correct' => true],
                            ['emoji' => '🖤', 'text' => 'Hitam dan berlubang sakit', 'is_correct' => false],
                            ['emoji' => '❌', 'text' => 'Patah semua', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Doni memakai seragam rapi dan berpamitan pada ibu." Ke mana Doni pergi?',
                        'audio' => 'Ke mana Doni pergi setelah berpamitan pada ibu?',
                        'emoji' => '🎒',
                        'options' => [
                            ['emoji' => '🏫', 'text' => 'Berangkat ke sekolah untuk belajar', 'is_correct' => true],
                            ['emoji' => '🏖️', 'text' => 'Pergi ke pantai', 'is_correct' => false],
                            ['emoji' => '⛺', 'text' => 'Pergi berkemah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang dilakukan Doni kepada ibu sebelum berangkat sekolah?',
                        'audio' => 'Apa yang dilakukan Doni kepada ibu sebelum berangkat sekolah?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => 'Bersalaman dan berpamitan dengan santun', 'is_correct' => true],
                            ['emoji' => '🏃', 'text' => 'Langsung lari tanpa bicara', 'is_correct' => false],
                            ['emoji' => '😭', 'text' => 'Menangis berteriak', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 2,
                'title' => 'Memahami Cerita: Gajah Mandi, Kupu-Kupu & Roti',
                'slug' => 'kuis-cerita-l2-gajah-kupu-roti',
                'icon_emoji' => '🐘',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Cerita: "Gajah besar menyemprotkan air dengan belalainya." Di mana gajah mandi?',
                        'audio' => 'Di mana gajah mandi dalam cerita?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🌊', 'text' => 'Di sungai yang jernih dan segar', 'is_correct' => true],
                            ['emoji' => '🏠', 'text' => 'Di dalam kamar tidur', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Di dalam mobil', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Dengan apa gajah menyemprotkan air segar ke punggungnya?',
                        'audio' => 'Dengan apa gajah menyemprotkan air segar ke punggungnya?',
                        'emoji' => '🐘',
                        'options' => [
                            ['emoji' => '🐘', 'text' => 'Dengan belalai panjangnya', 'is_correct' => true],
                            ['emoji' => '🪣', 'text' => 'Dengan gayung plastik', 'is_correct' => false],
                            ['emoji' => '🥄', 'text' => 'Dengan sendok makan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Kupu-kupu bersayap kuning hinggap di atas bunga melati." Apa yang diisap kupu-kupu?',
                        'audio' => 'Apa yang diisap kupu-kupu di atas bunga melati?',
                        'emoji' => '🦋',
                        'options' => [
                            ['emoji' => '🍯', 'text' => 'Madu manis bunga (nektar)', 'is_correct' => true],
                            ['emoji' => '🌶️', 'text' => 'Cabai pedas', 'is_correct' => false],
                            ['emoji' => '🧂', 'text' => 'Garam asin', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Ibu menyiapkan roti panggang dan susu cokelat hangat." Kapan mereka sarapan?',
                        'audio' => 'Kapan keluarga menikmati roti panggang dan susu cokelat?',
                        'emoji' => '🍞',
                        'options' => [
                            ['emoji' => '🌅', 'text' => 'Di pagi hari saat sarapan', 'is_correct' => true],
                            ['emoji' => '🌙', 'text' => 'Di tengah malam saat tidur', 'is_correct' => false],
                            ['emoji' => '⏰', 'text' => 'Hanya setahun sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana suasana keluarga saat menikmati sarapan pagi bersama?',
                        'audio' => 'Bagaimana suasana keluarga saat menikmati sarapan pagi bersama?',
                        'emoji' => '👨‍👩‍👧',
                        'options' => [
                            ['emoji' => '😊', 'text' => 'Hangat, rukun, dan gembira', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => 'Marah-marah dan bertengkar', 'is_correct' => false],
                            ['emoji' => '😭', 'text' => 'Menangis ketakutan', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 2,
                'title' => 'Memahami Cerita: Menanam Pohon & Sahabat Sejati',
                'slug' => 'kuis-cerita-l2-tanam-pohon-sahabat',
                'icon_emoji' => '🌱',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Cerita: "Ayah dan Doni menanam bibit pohon mangga di halaman." Mengapa mereka menanam pohon?',
                        'audio' => 'Mengapa Ayah dan Doni menanam pohon di halaman?',
                        'emoji' => '🌱',
                        'options' => [
                            ['emoji' => '🌳', 'text' => 'Agar halaman rindang, sejuk, dan menghasilkan buah lebat', 'is_correct' => true],
                            ['emoji' => '🗑️', 'text' => 'Biar halaman jadi kotor', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Tanpa tujuan sama sekali', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang harus dilakukan agar bibit pohon tumbuh subur dan besar?',
                        'audio' => 'Apa yang harus dilakukan agar bibit pohon tumbuh subur dan besar?',
                        'emoji' => '💧',
                        'options' => [
                            ['emoji' => '💧', 'text' => 'Disiram air dan dirawat secara teratur', 'is_correct' => true],
                            ['emoji' => '✂️', 'text' => 'Dipotong-potong sampai habis', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Dibiarkan kering tanpa air', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Ketika Rani terjatuh di taman, Nina segera membantu berdiri." Sikap baik apa yang ditunjukkan Nina?',
                        'audio' => 'Sikap baik apa yang ditunjukkan Nina kepada Rani?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => 'Suka tolong-menolong dan peduli teman', 'is_correct' => true],
                            ['emoji' => '😆', 'text' => 'Menertawakan teman yang jatuh', 'is_correct' => false],
                            ['emoji' => '🏃', 'text' => 'Meninggalkan teman sendirian', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana perasaan teman kita jika kita tolong saat mereka sedang kesusahan?',
                        'audio' => 'Bagaimana perasaan teman kita jika kita tolong saat mereka sedang kesusahan?',
                        'emoji' => '❤️',
                        'options' => [
                            ['emoji' => '❤️', 'text' => 'Merasa senang, tenang, dan bersyukur', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => 'Marah besar', 'is_correct' => false],
                            ['emoji' => '😭', 'text' => 'Kecewa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa sebutan yang tepat untuk dua orang teman yang saling menyayangi dan membantu?',
                        'audio' => 'Apa sebutan yang tepat untuk dua orang teman yang saling menyayangi dan membantu?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Sahabat Sejati yang Rukun', 'is_correct' => true],
                            ['emoji' => '🥊', 'text' => 'Musuh bebuyutan', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Orang yang tidak kenal', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // --- LEVEL 3: 3 KUIS DENGAN 10 BUTIR SOAL (MEMBACA BUKU, KERJA BAKTI, BERBAGI, BERKEMAH, JUARA & GRAND MASTER) ---
            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 3,
                'title' => 'Memahami Cerita: Gemar Membaca, Bersih Rumah & Berbagi Bekal',
                'slug' => 'kuis-cerita-l3-membaca-bersih-berbagi',
                'icon_emoji' => '📚',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Cerita: "Dika sangat suka membaca buku cerita di perpustakaan." Di mana Dika membaca buku?',
                        'audio' => 'Di mana Dika suka membaca buku cerita?',
                        'emoji' => '📚',
                        'options' => [
                            ['emoji' => '📚', 'text' => 'Di perpustakaan yang tenang', 'is_correct' => true],
                            ['emoji' => '🚗', 'text' => 'Di jalan raya yang ramai', 'is_correct' => false],
                            ['emoji' => '🏊', 'text' => 'Di kolam renang', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa membaca buku disebut sebagai "jendela ilmu pengetahuan dunia"?',
                        'audio' => 'Mengapa membaca buku disebut sebagai jendela ilmu pengetahuan dunia?',
                        'emoji' => '🌍',
                        'options' => [
                            ['emoji' => '🌍', 'text' => 'Karena membaca memberi kita wawasan, pengetahuan, dan hal baru', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Biar kita cepat mengantuk', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Hanya istilah tanpa arti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Hari Minggu keluarga bekerja bakti membersihkan rumah." Apa yang dilakukan keluarga?',
                        'audio' => 'Apa yang dilakukan keluarga di hari Minggu?',
                        'emoji' => '🧹',
                        'options' => [
                            ['emoji' => '🧹', 'text' => 'Kerja bakti membersihkan rumah bersama', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Tidur seharian tanpa bergerak', 'is_correct' => false],
                            ['emoji' => '📺', 'text' => 'Menonton TV terus menerus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa manfaat jika rumah selalu dirawat bersih, rapi, dan harum?',
                        'audio' => 'Apa manfaat jika rumah selalu dirawat bersih, rapi, dan harum?',
                        'emoji' => '🏠',
                        'options' => [
                            ['emoji' => '🏠', 'text' => 'Semua anggota keluarga menjadi sehat, nyaman, dan bahagia', 'is_correct' => true],
                            ['emoji' => '🦟', 'text' => 'Banyak nyamuk dan kuman datang', 'is_correct' => false],
                            ['emoji' => '🗑️', 'text' => 'Rumah jadi bau sampah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara anak pintar membantu orang tua merapikan rumah?',
                        'audio' => 'Bagaimana cara anak pintar membantu orang tua merapikan rumah?',
                        'emoji' => '🧸',
                        'options' => [
                            ['emoji' => '🧸', 'text' => 'Merapikan mainan sendiri dan membuang sampah pada tempatnya', 'is_correct' => true],
                            ['emoji' => '💥', 'text' => 'Menghamburkan mainan ke seluruh lantai', 'is_correct' => false],
                            ['emoji' => '🎨', 'text' => 'Mencoret-coret tembok rumah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Saat jam istirahat, Ali membagi kue bolunya kepada teman." Apa yang dilakukan Ali?',
                        'audio' => 'Apa yang dilakukan Ali saat jam istirahat sekolah?',
                        'emoji' => '🍲',
                        'options' => [
                            ['emoji' => '🍲', 'text' => 'Berbagi bekal kue lezat dengan sahabatnya', 'is_correct' => true],
                            ['emoji' => '😋', 'text' => 'Makan sendirian sambil sembunyi', 'is_correct' => false],
                            ['emoji' => '🗑️', 'text' => 'Membuang kuenya ke tempat sampah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana perasaan orang yang suka berbagi dengan sesama teman?',
                        'audio' => 'Bagaimana perasaan orang yang suka berbagi dengan sesama teman?',
                        'emoji' => '❤️',
                        'options' => [
                            ['emoji' => '❤️', 'text' => 'Hati merasa senang, lapang, dan bahagia', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => 'Merasa rugi dan kesal', 'is_correct' => false],
                            ['emoji' => '😭', 'text' => 'Menangis sedih', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa ungkapan mutiara yang menggambarkan kebiasaan suka memberi makanan pada teman?',
                        'audio' => 'Apa ungkapan mutiara yang menggambarkan kebiasaan suka memberi makanan pada teman?',
                        'emoji' => '✨',
                        'options' => [
                            ['emoji' => '✨', 'text' => '"Berbagi itu Indah dan Penuh Berkah"', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => '"Makan sendiri lebih kenyang"', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => '"Jangan pernah menolong siapa pun"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika ada teman di kelas yang tidak membawa pensil, apa yang sebaiknya kita lakukan?',
                        'audio' => 'Jika ada teman di kelas yang tidak membawa pensil apa yang sebaiknya kita lakukan?',
                        'emoji' => '✏️',
                        'options' => [
                            ['emoji' => '✏️', 'text' => 'Meminjamkan pensil cadangan kita dengan ramah', 'is_correct' => true],
                            ['emoji' => '😆', 'text' => 'Mengejeknya di depan kelas', 'is_correct' => false],
                            ['emoji' => '🙈', 'text' => 'Pura-pura tidak melihat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Nilai budi pekerti apa yang kita pelajari dari ketiga cerita di atas?',
                        'audio' => 'Nilai budi pekerti apa yang kita pelajari dari cerita di atas?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => 'Rajin belajar, menjaga kebersihan, dan suka tolong-menolong', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Malas belajar dan suka bertengkar', 'is_correct' => false],
                            ['emoji' => '🎮', 'text' => 'Hanya bermain game tanpa henti', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 3,
                'title' => 'Memahami Cerita: Berkemah di Danau & Juara Berbudi',
                'slug' => 'kuis-cerita-l3-kemah-juara-berbudi',
                'icon_emoji' => '🏕️',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Cerita: "Keluarga mendirikan tenda kemah di tepi danau." Di mana keluarga berkemah?',
                        'audio' => 'Di mana keluarga berkemah dalam cerita?',
                        'emoji' => '🏕️',
                        'options' => [
                            ['emoji' => '🏕️', 'text' => 'Di tepi danau alam yang indah', 'is_correct' => true],
                            ['emoji' => '🏢', 'text' => 'Di dalam gedung perkantoran', 'is_correct' => false],
                            ['emoji' => '🚗', 'text' => 'Di atas atap mobil', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa yang dilihat keluarga di langit pada malam hari saat berkemah?',
                        'audio' => 'Apa yang dilihat keluarga di langit pada malam hari saat berkemah?',
                        'emoji' => '⭐',
                        'options' => [
                            ['emoji' => '⭐', 'text' => 'Ribuan bintang gemerlap dan bulan yang indah', 'is_correct' => true],
                            ['emoji' => '☀️', 'text' => 'Matahari siang hari yang terik', 'is_correct' => false],
                            ['emoji' => '🌫️', 'text' => 'Asap hitam tebal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara kita menjaga kebersihan saat berwisata atau berkemah di alam terbuka?',
                        'audio' => 'Bagaimana cara kita menjaga kebersihan saat berwisata di alam terbuka?',
                        'emoji' => '🗑️',
                        'options' => [
                            ['emoji' => '🗑️', 'text' => 'Mengumpulkan kembali sampah dan membuangnya ke tempat sampah', 'is_correct' => true],
                            ['emoji' => '🌊', 'text' => 'Membuang plastik ke dalam danau', 'is_correct' => false],
                            ['emoji' => '🔥', 'text' => 'Membakar sampah sembarangan di hutan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Cerita: "Anak yang rajin belajar, selalu jujur, dan berbakti akan disayangi semua orang." Siapakah yang menyayanginya?',
                        'audio' => 'Siapakah yang menyayangi anak yang berbudi pekerti luhur?',
                        'emoji' => '👨‍👩‍👧',
                        'options' => [
                            ['emoji' => '👨‍👩‍👧', 'text' => 'Orang tua, guru, teman, dan semua orang di sekitarnya', 'is_correct' => true],
                            ['emoji' => '❌', 'text' => 'Tidak ada yang suka', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Hanya bantal guling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Mengapa berkata jujur adalah sifat yang sangat mulia bagi anak hebat?',
                        'audio' => 'Mengapa berkata jujur adalah sifat yang sangat mulia bagi anak hebat?',
                        'emoji' => '🌟',
                        'options' => [
                            ['emoji' => '🌟', 'text' => 'Karena kejujuran membuat kita dipercaya, dihormati, dan hati tenang', 'is_correct' => true],
                            ['emoji' => '🙈', 'text' => 'Biar bisa menipu orang lain', 'is_correct' => false],
                            ['emoji' => '🚫', 'text' => 'Jujur tidak ada manfaatnya', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara anak yang berbakti memperlakukan ayah dan ibunya di rumah?',
                        'audio' => 'Bagaimana cara anak yang berbakti memperlakukan ayah dan ibunya di rumah?',
                        'emoji' => '❤️',
                        'options' => [
                            ['emoji' => '❤️', 'text' => 'Mendengarkan nasehat, bertutur kata sopan, dan suka membantu', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => 'Membantah dan berteriak marah', 'is_correct' => false],
                            ['emoji' => '😴', 'text' => 'Mengabaikan panggilan orang tua', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika kita berbuat kesalahan tanpa sengaja, apa kata ajaib yang harus kita ucapkan?',
                        'audio' => 'Jika kita berbuat kesalahan apa kata ajaib yang harus kita ucapkan?',
                        'emoji' => '🙏',
                        'options' => [
                            ['emoji' => '🙏', 'text' => '"Maafkan saya"', 'is_correct' => true],
                            ['emoji' => '😝', 'text' => '"Bukan urusan saya"', 'is_correct' => false],
                            ['emoji' => '🏃', 'text' => 'Langsung kabur melarikan diri', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika kita menerima bantuan atau hadiah dari orang lain, apa kata ajaib yang kita sampaikan?',
                        'audio' => 'Jika menerima bantuan atau hadiah apa kata ajaib yang kita sampaikan?',
                        'emoji' => '🎁',
                        'options' => [
                            ['emoji' => '🎁', 'text' => '"Terima kasih banyak"', 'is_correct' => true],
                            ['emoji' => '😒', 'text' => '"Kurang banyak hadiahnya"', 'is_correct' => false],
                            ['emoji' => '🤐', 'text' => 'Diam saja cemberut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Jika kita ingin meminta tolong kepada teman atau guru, kata santun apa yang kita gunakan?',
                        'audio' => 'Kata santun apa yang kita gunakan saat meminta tolong?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '🤝', 'text' => '"Tolong bantu saya, ya"', 'is_correct' => true],
                            ['emoji' => '😡', 'text' => '"Cepat kerjakan untukku!"', 'is_correct' => false],
                            ['emoji' => '👎', 'text' => '"Hei kamu sini!"', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Apa hadiah terindah bagi anak yang tekun belajar dan berbudi pekerti baik?',
                        'audio' => 'Apa hadiah terindah bagi anak yang tekun belajar dan berbudi pekerti baik?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => 'Masa depan yang cerah, ilmu yang bermanfaat, dan kebahagiaan sejati', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Waktu tidur seharian', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu karang yang keras', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'cerita-pendek',
                'level_number' => 3,
                'title' => 'Grand Champion Pemahaman Cerita & Bintang Literasi Cilik',
                'slug' => 'kuis-cerita-l3-grand-master-literasi',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Siapakah tokoh anak yang suka makan buah apel merah renyah?',
                        'audio' => 'Siapakah tokoh anak yang suka makan buah apel merah renyah?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => '👦', 'text' => 'Budi', 'is_correct' => true],
                            ['emoji' => '👧', 'text' => 'Siti', 'is_correct' => false],
                            ['emoji' => '👦', 'text' => 'Dika', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Hewan apa yang minum susu hangat lalu tidur pulas di sofa?',
                        'audio' => 'Hewan apa yang minum susu hangat lalu tidur pulas di sofa?',
                        'emoji' => '🥛',
                        'options' => [
                            ['emoji' => '🐱', 'text' => 'Kucing Putih yang Lucu', 'is_correct' => true],
                            ['emoji' => '🐶', 'text' => 'Anjing', 'is_correct' => false],
                            ['emoji' => '🐰', 'text' => 'Kelinci', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah anak yang rajin menyiram bunga mawar di kebunnya setiap sore?',
                        'audio' => 'Siapakah anak yang rajin menyiram bunga mawar di kebunnya setiap sore?',
                        'emoji' => '🌸',
                        'options' => [
                            ['emoji' => '👧', 'text' => 'Siti', 'is_correct' => true],
                            ['emoji' => '👦', 'text' => 'Ali', 'is_correct' => false],
                            ['emoji' => '👦', 'text' => 'Doni', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah anak yang mencetak gol kemenangan saat bermain sepak bola di lapangan?',
                        'audio' => 'Siapakah anak yang mencetak gol kemenangan saat bermain sepak bola di lapangan?',
                        'emoji' => '⚽',
                        'options' => [
                            ['emoji' => '👦', 'text' => 'Ali', 'is_correct' => true],
                            ['emoji' => '👦', 'text' => 'Beni', 'is_correct' => false],
                            ['emoji' => '👦', 'text' => 'Dika', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah anak yang rajin mencuci tangan dengan sabun sebelum makan?',
                        'audio' => 'Siapakah anak yang rajin mencuci tangan dengan sabun sebelum makan?',
                        'emoji' => '🧼',
                        'options' => [
                            ['emoji' => '👧', 'text' => 'Rina', 'is_correct' => true],
                            ['emoji' => '👧', 'text' => 'Nina', 'is_correct' => false],
                            ['emoji' => '👧', 'text' => 'Rani', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah anak yang selalu menggosok gigi sebelum tidur malam agar giginya sehat?',
                        'audio' => 'Siapakah anak yang selalu menggosok gigi sebelum tidur malam agar giginya sehat?',
                        'emoji' => '🦷',
                        'options' => [
                            ['emoji' => '👦', 'text' => 'Beni', 'is_correct' => true],
                            ['emoji' => '👦', 'text' => 'Budi', 'is_correct' => false],
                            ['emoji' => '👦', 'text' => 'Doni', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah anak yang menanam bibit pohon mangga bersama ayah di halaman rumah?',
                        'audio' => 'Siapakah anak yang menanam bibit pohon mangga bersama ayah di halaman rumah?',
                        'emoji' => '🌱',
                        'options' => [
                            ['emoji' => '👦', 'text' => 'Doni', 'is_correct' => true],
                            ['emoji' => '👦', 'text' => 'Ali', 'is_correct' => false],
                            ['emoji' => '👦', 'text' => 'Dika', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah sahabat baik yang menolong Rani saat terjatuh di taman bermain?',
                        'audio' => 'Siapakah sahabat baik yang menolong Rani saat terjatuh di taman bermain?',
                        'emoji' => '🤝',
                        'options' => [
                            ['emoji' => '👧', 'text' => 'Nina', 'is_correct' => true],
                            ['emoji' => '👧', 'text' => 'Siti', 'is_correct' => false],
                            ['emoji' => '👧', 'text' => 'Rina', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Siapakah anak yang gemar membaca buku cerita di perpustakaan?',
                        'audio' => 'Siapakah anak yang gemar membaca buku cerita di perpustakaan?',
                        'emoji' => '📚',
                        'options' => [
                            ['emoji' => '👦', 'text' => 'Dika', 'is_correct' => true],
                            ['emoji' => '👦', 'text' => 'Budi', 'is_correct' => false],
                            ['emoji' => '👦', 'text' => 'Beni', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Gelar kehormatan apakah yang pantas disematkan untuk anak yang gemar membaca dan memahami cerita?',
                        'audio' => 'Gelar kehormatan apakah yang pantas disematkan untuk anak yang gemar membaca dan memahami cerita?',
                        'emoji' => '🏆',
                        'options' => [
                            ['emoji' => '🏆', 'text' => '🏆 Grand Champion Bintang Literasi & Sahabat Cerita Cilik!', 'is_correct' => true],
                            ['emoji' => '😴', 'text' => 'Juara Malas Mendengarkan Dongeng', 'is_correct' => false],
                            ['emoji' => '🪨', 'text' => 'Batu Patung Diam', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            // =========================================================================
            // =========================================================================
            // PILAR 3: ZONA BELAJAR MENGHITUNG (45 KUIS TOTAL: 9 PER TOPIK)
            // =========================================================================
            [
                'category_slug' => 'membilang',
                'level_number' => 1,
                'title' => 'Membilang 1 Balon, 2 Bintang & 3 Apel',
                'slug' => 'kuis-membilang-l1-balon-bintang-apel',
                'icon_emoji' => '🎈',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hitung ada berapa balon merah: 🎈 ?',
                        'audio' => 'Hitung ada berapa balon merah yang melayang?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 (Satu) Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung ada berapa bintang emas berkilau: ⭐ ⭐ ?',
                        'audio' => 'Hitung ada berapa bintang emas yang berkilau indah?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 (Dua) Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Bintang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung ada berapa apel merah segar di keranjang: 🍎 🍎 🍎 ?',
                        'audio' => 'Hitung ada berapa apel merah di dalam keranjang?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 (Tiga) Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 1,
                'title' => 'Membilang 4 Mobil, 5 Ikan & 6 Bunga',
                'slug' => 'kuis-membilang-l1-mobil-ikan-bunga',
                'icon_emoji' => '🚗',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hitung ada berapa mobil melaju di jalan: 🚗 🚗 🚗 🚗 ?',
                        'audio' => 'Hitung ada berapa mobil melaju di jalan?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 (Empat) Mobil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Mobil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Mobil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung ada berapa ikan berenang lincah di kolam: 🐟 🐟 🐟 🐟 🐟 ?',
                        'audio' => 'Hitung ada berapa ikan berenang di kolam jernih?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 (Lima) Ikan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Ikan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Ikan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung ada berapa kuntum bunga mawar mekar: 🌸 🌸 🌸 🌸 🌸 🌸 ?',
                        'audio' => 'Hitung ada berapa kuntum bunga mawar di kebun?',
                        'emoji' => '🌸',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 (Enam) Bunga',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Bunga',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Bunga',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 1,
                'title' => 'Membilang 7 Bola & Mengenal Kuantitas Awal',
                'slug' => 'kuis-membilang-l1-bola-kuantitas-awal',
                'icon_emoji' => '⚽',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Hitung ada berapa bola warna di lapangan: ⚽ ⚽ ⚽ ⚽ ⚽ ⚽ ⚽ ?',
                        'audio' => 'Hitung ada berapa bola warna di lapangan?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 (Tujuh) Bola',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Bola',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Bola',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Angka berapakah lambang bilangan dari SATU buah balon 🎈?',
                        'audio' => 'Angka berapakah lambang bilangan dari satu buah balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => 'Angka 1 (Satu)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => 'Angka 2 (Dua)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => 'Angka 3 (Tiga)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Angka berapakah lambang bilangan dari LIMA ekor ikan 🐟🐟🐟🐟🐟?',
                        'audio' => 'Angka berapakah lambang bilangan dari lima ekor ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => 'Angka 5 (Lima)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => 'Angka 4 (Empat)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => 'Angka 6 (Enam)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 2,
                'title' => 'Membilang 8 Bebek, 9 Stroberi & 10 Jari',
                'slug' => 'kuis-membilang-l2-bebek-stroberi-jari',
                'icon_emoji' => '🦆',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Hitung ada berapa bebek berbaris: 🦆 🦆 🦆 🦆 🦆 🦆 🦆 🦆 ?',
                        'audio' => 'Hitung ada berapa bebek berbaris rapi?',
                        'emoji' => '🦆',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 (Delapan) Bebek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Bebek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Bebek',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung ada berapa buah stroberi segar: 🍓 🍓 🍓 🍓 🍓 🍓 🍓 🍓 🍓 ?',
                        'audio' => 'Hitung ada berapa buah stroberi merah segar?',
                        'emoji' => '🍓',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 (Sembilan) Stroberi',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Stroberi',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10 Stroberi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada berapakah jumlah seluruh jari tangan pada kedua belah tangan kita?',
                        'audio' => 'Ada berapakah jumlah seluruh jari tangan pada kedua belah tangan kita?',
                        'emoji' => '🔟',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 (Sepuluh) Jari Tangan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Jari Tangan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Jari Tangan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan manakah yang melambangkan angka DELAPAN?',
                        'audio' => 'Lambang bilangan manakah yang melambangkan angka delapan?',
                        'emoji' => '8️⃣',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => 'Angka 8',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => 'Angka 6',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => 'Angka 9',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan manakah yang melambangkan angka SEPULUH?',
                        'audio' => 'Lambang bilangan manakah yang melambangkan angka sepuluh?',
                        'emoji' => '🔟',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => 'Angka 10',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => 'Angka 1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => 'Angka 0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 2,
                'title' => 'Membilang 11 Telur, 12 Kue & 13 Pensil',
                'slug' => 'kuis-membilang-l2-telur-kue-pensil',
                'icon_emoji' => '🥚',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Hitung butir telur di sarang (10 telur ditambah 1 telur): ada berapa butir?',
                        'audio' => 'Sepuluh butir telur ditambah satu butir telur menjadi berapa?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 (Sebelas) Butir Telur',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Butir',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 Butir',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada berapakah jumlah kue cangkir dalam 1 (satu) lusin?',
                        'audio' => 'Ada berapakah jumlah kue cangkir dalam satu lusin?',
                        'emoji' => '🧁',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 (Dua Belas) Kue',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Kue',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '14 Kue',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung pensil warna di kotak: ada 12 pensil ditambah 1 pensil baru. Totalnya...?',
                        'audio' => 'Dua belas pensil ditambah satu pensil menjadi berapa?',
                        'emoji' => '✏️',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '13 (Tiga Belas) Pensil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 Pensil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 Pensil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Bilangan setelah angka 10 (sepuluh) adalah...?',
                        'audio' => 'Bilangan setelah angka sepuluh adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 (Sebelas)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 (Sembilan)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 (Dua Belas)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Bilangan setelah angka 12 (dua belas) adalah...?',
                        'audio' => 'Bilangan setelah angka dua belas adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '13 (Tiga Belas)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 (Sebelas)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '14 (Empat Belas)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 2,
                'title' => 'Membilang 14 Kupu-Kupu, 15 Permen & 16 Jeruk',
                'slug' => 'kuis-membilang-l2-kupu-permen-jeruk',
                'icon_emoji' => '🦋',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Ada 13 kupu-kupu hinggap, lalu 1 kupu-kupu datang lagi. Total ada berapa kupu-kupu?',
                        'audio' => 'Tiga belas kupu-kupu ditambah satu kupu-kupu menjadi berapa?',
                        'emoji' => '🦋',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '14 (Empat Belas) Kupu-Kupu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 Kupu-Kupu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 Kupu-Kupu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 3 kelompok permen, masing-masing berisi 5 permen (5 + 5 + 5). Total permen ada...?',
                        'audio' => 'Tiga kelompok permen masing-masing berisi lima permen totalnya ada berapa?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 (Lima Belas) Permen',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Permen',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 Permen',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di meja ada 15 jeruk manis, ibu menambah 1 jeruk lagi. Sekarang ada berapa jeruk?',
                        'audio' => 'Lima belas jeruk ditambah satu jeruk lagi menjadi berapa?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '16 (Enam Belas) Jeruk',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '14 Jeruk',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '17 Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan 14 dibaca...?',
                        'audio' => 'Lambang bilangan empat belas ditulis dengan angka berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => 'Empat Belas',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => 'Empat Puluh',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => 'Dua Puluh Empat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan 15 dibaca...?',
                        'audio' => 'Lambang bilangan lima belas ditulis dengan angka berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => 'Lima Belas',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => 'Lima Puluh',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => 'Lima Saja',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 3,
                'title' => 'Membilang 17 Perahu, 18 Lonceng, 19 Buku & 20 Medali',
                'slug' => 'kuis-membilang-l3-perahu-lonceng-buku-medali',
                'icon_emoji' => '⛵',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Ada 16 perahu berlayar, ditambah 1 perahu lagi. Total ada berapa perahu layar?',
                        'audio' => 'Enam belas perahu ditambah satu perahu menjadi berapa?',
                        'emoji' => '⛵',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '17 (Tujuh Belas) Perahu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 Perahu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '18 Perahu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Dua deret lonceng masing-masing berisi 9 lonceng (9 + 9). Total lonceng ada...?',
                        'audio' => 'Sembilan lonceng ditambah sembilan lonceng menjadi berapa?',
                        'emoji' => '🔔',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '18 (Delapan Belas) Lonceng',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '16 Lonceng',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 Lonceng',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 18 buku di rak, ditambah 1 buku cerita baru. Total buku di rak menjadi...?',
                        'audio' => 'Delapan belas buku ditambah satu buku cerita baru menjadi berapa?',
                        'emoji' => '📚',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '19 (Sembilan Belas) Buku',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '17 Buku',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 Buku',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Dua kotak medali emas masing-masing berisi 10 medali (10 + 10). Total medali ada...?',
                        'audio' => 'Sepuluh medali ditambah sepuluh medali menjadi berapa?',
                        'emoji' => '🏅',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 (Dua Puluh) Medali Juara',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Medali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 Medali',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan dari TUJUH BELAS adalah...?',
                        'audio' => 'Lambang bilangan dari tujuh belas adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '17',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '71',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan dari DELAPAN BELAS adalah...?',
                        'audio' => 'Lambang bilangan dari delapan belas adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '18',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '81',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan dari SEMBILAN BELAS adalah...?',
                        'audio' => 'Lambang bilangan dari sembilan belas adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '19',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '91',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lambang bilangan dari DUA PULUH adalah...?',
                        'audio' => 'Lambang bilangan dari dua puluh adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '20',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Urutan bilangan yang benar setelah angka 16 adalah...?',
                        'audio' => 'Urutan bilangan yang benar setelah angka enam belas adalah apa?',
                        'emoji' => '📈',
                        'options' => [
                            [
                                'emoji' => '📈',
                                'text' => '17, 18, 19, 20',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '📉',
                                'text' => '15, 14, 13, 12',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔀',
                                'text' => '20, 19, 18, 17',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapakah total medali emas juara membilang yang kita pelajari pada materi?',
                        'audio' => 'Berapakah total medali emas juara membilang yang kita pelajari?',
                        'emoji' => '🏅',
                        'options' => [
                            [
                                'emoji' => '🏅',
                                'text' => '20 Medali Emas Juara!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10 Medali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Medali',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 3,
                'title' => 'Cerdas Membilang Cepat & Menghitung Objek Visual',
                'slug' => 'kuis-membilang-l3-hitung-cepat-visual',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Jika ada 1 balon 🎈 ditambah 2 bintang ⭐⭐, ada berapa total benda?',
                        'audio' => 'Satu balon ditambah dua bintang totalnya ada berapa benda?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Jika ada 3 apel 🍎🍎🍎 ditambah 3 mobil 🚗🚗🚗, ada berapa total benda?',
                        'audio' => 'Tiga apel ditambah tiga mobil totalnya ada berapa benda?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Jika ada 5 ikan 🐟 dan 5 jari 🔟, ada berapa total kuantitasnya?',
                        'audio' => 'Lima ikan ditambah lima jari totalnya ada berapa?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 (Sepuluh)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 (Delapan)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 (Sembilan)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung mundur: 20, 19, 18, ... angka selanjutnya adalah?',
                        'audio' => 'Dua puluh, sembilan belas, delapan belas, lalu angka berapa?',
                        'emoji' => '📉',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '17 (Tujuh Belas)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '16 (Enam Belas)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '21 (Dua Puluh Satu)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung mundur: 15, 14, 13, ... angka selanjutnya adalah?',
                        'audio' => 'Lima belas, empat belas, tiga belas, lalu angka berapa?',
                        'emoji' => '📉',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 (Dua Belas)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 (Sebelas)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '14 (Empat Belas)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok bilangan yang berada di antara 10 dan 15?',
                        'audio' => 'Manakah kelompok bilangan yang berada di antara sepuluh dan lima belas?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '🔢',
                                'text' => '11, 12, 13, 14',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔢',
                                'text' => '6, 7, 8, 9',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔢',
                                'text' => '16, 17, 18, 19',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Manakah kelompok bilangan yang berada di antara 15 dan 20?',
                        'audio' => 'Manakah kelompok bilangan yang berada di antara lima belas dan dua puluh?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '🔢',
                                'text' => '16, 17, 18, 19',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔢',
                                'text' => '11, 12, 13, 14',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔢',
                                'text' => '1, 2, 3, 4',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapakah jumlah benda jika kita membilang 10 buku ditambah 10 medali?',
                        'audio' => 'Berapakah jumlah benda jika sepuluh buku ditambah sepuluh medali?',
                        'emoji' => '📚',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mengapa belajar membilang benda sangat bermanfaat dalam kehidupan sehari-hari?',
                        'audio' => 'Mengapa belajar membilang benda sangat bermanfaat dalam kehidupan sehari-hari?',
                        'emoji' => '🌟',
                        'options' => [
                            [
                                'emoji' => '🌟',
                                'text' => 'Agar kita dapat menghitung mainan, uang saku, dan benda dengan teliti',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Hanya untuk membuang waktu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🚫',
                                'text' => 'Tidak ada gunanya sama sekali',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Bagaimana cara membilang benda yang banyak agar tidak ada yang terlewat?',
                        'audio' => 'Bagaimana cara membilang benda yang banyak agar tidak ada yang terlewat?',
                        'emoji' => '👆',
                        'options' => [
                            [
                                'emoji' => '👆',
                                'text' => 'Menunjuk benda satu per satu secara berurutan dan teratur',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🙈',
                                'text' => 'Menebak asal-asalan tanpa melihat',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🏃',
                                'text' => 'Menghitung sambil berlari cepat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'membilang',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Membilang Ceria 1 Sampai 20',
                'slug' => 'kuis-membilang-l3-grand-master-membilang',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Hitung 1 balon 🎈 ditambah 4 mobil 🚗🚗🚗🚗: total ada berapa benda?',
                        'audio' => 'Satu balon ditambah empat mobil totalnya ada berapa benda?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 2 bintang ⭐⭐ ditambah 6 bunga 🌸🌸🌸🌸🌸🌸: total ada berapa?',
                        'audio' => 'Dua bintang ditambah enam bunga totalnya ada berapa?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 3 apel 🍎🍎🍎 ditambah 7 bola ⚽⚽⚽⚽⚽⚽⚽: total ada berapa?',
                        'audio' => 'Tiga apel ditambah tujuh bola totalnya ada berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 8 bebek 🦆 ditambah 3 pensil ✏️: total ada berapa benda?',
                        'audio' => 'Delapan bebek ditambah tiga pensil totalnya ada berapa benda?',
                        'emoji' => '🦆',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 9 stroberi 🍓 ditambah 5 permen 🍬: total ada berapa makanan lezat?',
                        'audio' => 'Sembilan stroberi ditambah lima permen totalnya ada berapa?',
                        'emoji' => '🍓',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '14 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '13 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 10 jari 🔟 ditambah 6 jeruk 🍊: total ada berapa?',
                        'audio' => 'Sepuluh ditambah enam totalnya menjadi berapa?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '16',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '17',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 11 telur 🥚 ditambah 7 perahu ⛵: total ada berapa?',
                        'audio' => 'Sebelas ditambah tujuh totalnya menjadi berapa?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '18',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '17',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '19',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 12 kue 🧁 ditambah 7 lonceng 🔔: total ada berapa?',
                        'audio' => 'Dua belas ditambah tujuh totalnya menjadi berapa?',
                        'emoji' => '🧁',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '19',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '18',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '20',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hitung 10 buku 📚 ditambah 10 medali 🏅: total angka puncaknya adalah...?',
                        'audio' => 'Sepuluh ditambah sepuluh total angka puncaknya adalah berapa?',
                        'emoji' => '🏅',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 (Dua Puluh Penuh!)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '19',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelar kehormatan apakah yang pantas untuk anak pintar yang menguasai membilang 1 sampai 20?',
                        'audio' => 'Gelar apakah yang pantas untuk anak pintar yang menguasai membilang satu sampai dua puluh?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => '🏆 Grand Champion Ahli Membilang Ceria 1 Sampai 20!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Juara Malas Berhitung',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Patung Diam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 1,
                'title' => 'Membandingkan Besar-Kecil & Banyak-Sedikit',
                'slug' => 'kuis-banding-l1-besar-kecil-banyak-sedikit',
                'icon_emoji' => '🐘',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Di antara Gajah dan Tikus, hewan manakah yang berukuran LEBIH BESAR?',
                        'audio' => 'Di antara Gajah dan Tikus hewan manakah yang berukuran lebih besar?',
                        'emoji' => '🐘',
                        'options' => [
                            [
                                'emoji' => '🐘',
                                'text' => 'Gajah (Besar)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐭',
                                'text' => 'Tikus (Kecil)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐜',
                                'text' => 'Semut',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara keranjang berisi 10 apel dan 2 apel, manakah yang LEBIH BANYAK?',
                        'audio' => 'Keranjang manakah yang berisi lebih banyak apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🍎',
                                'text' => 'Keranjang 10 Apel (Banyak)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍏',
                                'text' => 'Keranjang 2 Apel (Sedikit)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🧺',
                                'text' => 'Keranjang Kosong',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Tikus memiliki tubuh yang lebih ... daripada gajah?',
                        'audio' => 'Tikus memiliki tubuh yang lebih apa daripada gajah?',
                        'emoji' => '🐭',
                        'options' => [
                            [
                                'emoji' => '🐭',
                                'text' => 'Kecil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐘',
                                'text' => 'Besar',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🦒',
                                'text' => 'Tinggi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 1,
                'title' => 'Membandingkan Tinggi-Pendek & Panjang-Pendek',
                'slug' => 'kuis-banding-l1-tinggi-pendek-panjang',
                'icon_emoji' => '🦒',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Di antara Jerapah dan Kelinci, siapakah yang bertubuh LEBIH TINGGI?',
                        'audio' => 'Siapakah yang bertubuh lebih tinggi antara Jerapah dan Kelinci?',
                        'emoji' => '🦒',
                        'options' => [
                            [
                                'emoji' => '🦒',
                                'text' => 'Jerapah (Tinggi)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐰',
                                'text' => 'Kelinci (Pendek)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐢',
                                'text' => 'Kura-kura',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara Penggaris 30 cm dan Penghapus kecil, benda manakah yang LEBIH PANJANG?',
                        'audio' => 'Benda manakah yang lebih panjang antara Penggaris dan Penghapus?',
                        'emoji' => '📏',
                        'options' => [
                            [
                                'emoji' => '📏',
                                'text' => 'Penggaris (Panjang)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🧽',
                                'text' => 'Penghapus (Pendek)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '✏️',
                                'text' => 'Rautan Pensil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kelinci memiliki postur tubuh yang lebih ... daripada jerapah?',
                        'audio' => 'Kelinci memiliki postur tubuh yang lebih apa daripada jerapah?',
                        'emoji' => '🐰',
                        'options' => [
                            [
                                'emoji' => '🐰',
                                'text' => 'Pendek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🦒',
                                'text' => 'Tinggi',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐘',
                                'text' => 'Lebar',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 1,
                'title' => 'Membandingkan Berat-Ringan & Penuh-Kosong',
                'slug' => 'kuis-banding-l1-berat-ringan-penuh-kosong',
                'icon_emoji' => '🪨',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Di antara Batu kali yang padat dan Bulu ayam yang halus, manakah yang LEBIH BERAT?',
                        'audio' => 'Manakah yang lebih berat antara Batu kali dan Bulu ayam?',
                        'emoji' => '🪨',
                        'options' => [
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Kali (Berat)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪶',
                                'text' => 'Bulu Ayam (Ringan)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍃',
                                'text' => 'Daun Kering',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelas yang terisi air susu sampai ke bibir gelas disebut gelas yang...?',
                        'audio' => 'Gelas yang terisi air susu sampai penuh disebut gelas apa?',
                        'emoji' => '🥛',
                        'options' => [
                            [
                                'emoji' => '🥛',
                                'text' => 'Penuh',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🫙',
                                'text' => 'Kosong',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '💧',
                                'text' => 'Bocor',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara Kuda yang berlari kencang dan Kura-kura, manakah yang LEBIH CEPAT?',
                        'audio' => 'Manakah yang lebih cepat antara Kuda dan Kura-kura?',
                        'emoji' => '🐎',
                        'options' => [
                            [
                                'emoji' => '🐎',
                                'text' => 'Kuda (Cepat)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐢',
                                'text' => 'Kura-kura (Lambat)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐌',
                                'text' => 'Siput',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 2,
                'title' => 'Membandingkan Tebal-Tipis & Lebar-Sempit',
                'slug' => 'kuis-banding-l2-tebal-tipis-lebar-sempit',
                'icon_emoji' => '🌳',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Di antara Batang pohon mangga dan Ranting daun kecil, manakah yang LEBIH TEBAL?',
                        'audio' => 'Manakah yang lebih tebal antara Batang pohon dan Ranting daun?',
                        'emoji' => '🌳',
                        'options' => [
                            [
                                'emoji' => '🌳',
                                'text' => 'Batang Pohon (Tebal)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌿',
                                'text' => 'Ranting Daun (Tipis)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍃',
                                'text' => 'Helai Daun',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara Pintu utama rumah dan Celah jendela kecil, manakah yang LEBIH LEBAR?',
                        'audio' => 'Manakah yang lebih lebar antara Pintu rumah dan Celah jendela?',
                        'emoji' => '🚪',
                        'options' => [
                            [
                                'emoji' => '🚪',
                                'text' => 'Pintu Rumah (Lebar)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪟',
                                'text' => 'Celah Jendela (Sempit)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🕳️',
                                'text' => 'Lubang Kunci',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Selembar kertas buku memiliki bentuk yang lebih ... daripada buku kamus tebal?',
                        'audio' => 'Selembar kertas buku memiliki bentuk yang lebih apa daripada buku kamus?',
                        'emoji' => '📄',
                        'options' => [
                            [
                                'emoji' => '📄',
                                'text' => 'Tipis',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '📚',
                                'text' => 'Tebal',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪵',
                                'text' => 'Keras',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lorong yang hanya bisa dilewati satu orang saja disebut lorong yang...?',
                        'audio' => 'Lorong yang hanya bisa dilewati satu orang disebut lorong apa?',
                        'emoji' => '🚶',
                        'options' => [
                            [
                                'emoji' => '🚶',
                                'text' => 'Sempit',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🛣️',
                                'text' => 'Lebar',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🏖️',
                                'text' => 'Luas',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Buku ensiklopedia bergambar memiliki ukuran yang lebih ... daripada brosur kertas?',
                        'audio' => 'Buku ensiklopedia bergambar memiliki ukuran yang lebih apa?',
                        'emoji' => '📚',
                        'options' => [
                            [
                                'emoji' => '📚',
                                'text' => 'Tebal',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '📄',
                                'text' => 'Tipis',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪶',
                                'text' => 'Ringan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 2,
                'title' => 'Simbol Perbandingan: Lebih Banyak, Lebih Sedikit & Sama',
                'slug' => 'kuis-banding-l2-simbol-lebih-banyak-sedikit',
                'icon_emoji' => '⚖️',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Kelompok 5 Bintang ⭐⭐⭐⭐⭐ ... Kelompok 2 Bintang ⭐⭐. Kata perbandingan yang tepat adalah?',
                        'audio' => 'Lima bintang dibanding dua bintang adalah apa?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '➕',
                                'text' => 'Lebih Banyak Dari ( > )',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '➖',
                                'text' => 'Lebih Sedikit Dari ( < )',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🟰',
                                'text' => 'Sama Banyak Dengan ( = )',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kelompok 3 Ikan 🐟🐟🐟 ... Kelompok 7 Ikan 🐟🐟🐟🐟🐟🐟🐟. Kata perbandingan yang tepat adalah?',
                        'audio' => 'Tiga ikan dibanding tujuh ikan adalah apa?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '➖',
                                'text' => 'Lebih Sedikit Dari ( < )',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '➕',
                                'text' => 'Lebih Banyak Dari ( > )',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🟰',
                                'text' => 'Sama Banyak Dengan ( = )',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kelompok 4 Balon 🎈🎈🎈🎈 ... Kelompok 4 Balon 🎈🎈🎈🎈. Simbol yang tepat adalah?',
                        'audio' => 'Empat balon dibanding empat balon simbolnya apa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '🟰',
                                'text' => 'Sama Banyak ( = )',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '➕',
                                'text' => 'Lebih Banyak ( > )',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '➖',
                                'text' => 'Lebih Sedikit ( < )',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mulut simbol perbandingan \" > \" selalu terbuka menghadap ke arah kelompok yang...?',
                        'audio' => 'Mulut simbol perbandingan selalu menghadap ke arah kelompok yang bagaimana?',
                        'emoji' => '🐊',
                        'options' => [
                            [
                                'emoji' => '➕',
                                'text' => 'Lebih Banyak / Lebih Besar',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '➖',
                                'text' => 'Lebih Sedikit / Kecil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => 'Kosong',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Tanda garis sejajar \" = \" melambangkan bahwa kedua kelompok benda memiliki jumlah yang...?',
                        'audio' => 'Tanda garis sejajar sama dengan melambangkan bahwa kedua kelompok benda berjumlah apa?',
                        'emoji' => '⚖️',
                        'options' => [
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Banyak dan Seimbang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '💥',
                                'text' => 'Berbeda jauh',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '❓',
                                'text' => 'Tidak diketahui',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 2,
                'title' => 'Membandingkan Dalam-Dangkal & Panas-Dingin',
                'slug' => 'kuis-banding-l2-dalam-dangkal-panas-dingin',
                'icon_emoji' => '🌊',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Di antara Laut Samudra lepas dan Kolam karet anak di halaman, manakah yang LEBIH DALAM?',
                        'audio' => 'Manakah yang lebih dalam antara Laut samudra dan Kolam karet anak?',
                        'emoji' => '🌊',
                        'options' => [
                            [
                                'emoji' => '🌊',
                                'text' => 'Laut Samudra (Dalam)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🏖️',
                                'text' => 'Kolam Karet (Dangkal)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🛁',
                                'text' => 'Bak Mandi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara Mangkok sup mendidih dan Es krim buah beku, manakah yang LEBIH DINGIN?',
                        'audio' => 'Manakah yang lebih dingin antara Sup mendidih dan Es krim beku?',
                        'emoji' => '🍦',
                        'options' => [
                            [
                                'emoji' => '🍦',
                                'text' => 'Es Krim (Dingin)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍲',
                                'text' => 'Sup Mendidih (Panas)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '☕',
                                'text' => 'Kopi Hangat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kolam renang anak yang tingginya hanya setinggi mata kaki disebut kolam yang...?',
                        'audio' => 'Kolam renang yang tingginya setinggi mata kaki disebut kolam apa?',
                        'emoji' => '👶',
                        'options' => [
                            [
                                'emoji' => '👶',
                                'text' => 'Dangkal dan Aman',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌊',
                                'text' => 'Sangat Dalam',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🕳️',
                                'text' => 'Curam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Benda yang baru saja dipanaskan di atas api kompor memiliki suhu yang...?',
                        'audio' => 'Benda yang dipanaskan di atas api kompor memiliki suhu apa?',
                        'emoji' => '🔥',
                        'options' => [
                            [
                                'emoji' => '🔥',
                                'text' => 'Panas',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '❄️',
                                'text' => 'Dingin Beku',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🌬️',
                                'text' => 'Sejuk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita harus didampingi orang tua saat berada di dekat air kolam yang dalam?',
                        'audio' => 'Mengapa kita harus didampingi orang tua di dekat kolam yang dalam?',
                        'emoji' => '🛡️',
                        'options' => [
                            [
                                'emoji' => '🛡️',
                                'text' => 'Agar kita selalu aman dan terlindungi dari bahaya',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Biar bisa tidur',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🚫',
                                'text' => 'Tidak perlu alasan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 3,
                'title' => 'Menemukan Objek Terbesar, Terkecil, Tertinggi & Terbanyak',
                'slug' => 'kuis-banding-l3-superlatif-terbesar-terkecil',
                'icon_emoji' => '🐋',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Satwa laut apakah yang memiliki ukuran tubuh PALING BESAR (TERBESAR) di bumi?',
                        'audio' => 'Satwa laut apakah yang bertubuh paling besar di bumi?',
                        'emoji' => '🐋',
                        'options' => [
                            [
                                'emoji' => '🐋',
                                'text' => 'Ikan Paus Biru',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐟',
                                'text' => 'Ikan Emas',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🦐',
                                'text' => 'Udang Kecil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Satwa serangga kebun apakah yang berukuran PALING KECIL (TERKECIL) dan suka gotong royong?',
                        'audio' => 'Satwa apakah yang berukuran paling kecil di kebun?',
                        'emoji' => '🐜',
                        'options' => [
                            [
                                'emoji' => '🐜',
                                'text' => 'Semut',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐱',
                                'text' => 'Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐘',
                                'text' => 'Gajah',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Bangunan apakah yang menjulang PALING TINGGI (TERTINGGI) di tengah kota?',
                        'audio' => 'Bangunan apakah yang menjulang paling tinggi di kota?',
                        'emoji' => '🗼',
                        'options' => [
                            [
                                'emoji' => '🗼',
                                'text' => 'Menara Kota Megah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🏠',
                                'text' => 'Rumah Tingkat Satu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🛖',
                                'text' => 'Gubuk Kayu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Keranjang manakah yang memuat jumlah buah PALING BANYAK (TERBANYAK)?',
                        'audio' => 'Keranjang manakah yang memuat buah paling banyak?',
                        'emoji' => '🧺',
                        'options' => [
                            [
                                'emoji' => '🧺',
                                'text' => 'Keranjang Penuh 20 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍎',
                                'text' => 'Keranjang 5 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍏',
                                'text' => 'Keranjang 2 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kendaraan apakah yang meluncur PALING CEPAT (TERCEPAT) menembus angkasa?',
                        'audio' => 'Kendaraan apakah yang meluncur paling cepat menembus angkasa?',
                        'emoji' => '🚀',
                        'options' => [
                            [
                                'emoji' => '🚀',
                                'text' => 'Roket Angkasa Luar',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🚲',
                                'text' => 'Sepeda Gowes',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🚶',
                                'text' => 'Jalan Kaki',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara pohon cemara, rumput halaman, dan bunga mawar, manakah yang PALING PENDEK?',
                        'audio' => 'Manakah yang paling pendek antara pohon cemara, rumput, dan bunga mawar?',
                        'emoji' => '🌱',
                        'options' => [
                            [
                                'emoji' => '🌱',
                                'text' => 'Rumput Halaman',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌲',
                                'text' => 'Pohon Cemara',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🌸',
                                'text' => 'Bunga Mawar',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara besi baja, batu bata, dan sehelai kapas, manakah yang PALING RINGAN?',
                        'audio' => 'Manakah yang paling ringan antara besi, batu bata, dan sehelai kapas?',
                        'emoji' => '☁️',
                        'options' => [
                            [
                                'emoji' => '☁️',
                                'text' => 'Sehelai Kapas',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🧱',
                                'text' => 'Batu Bata',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⛓️',
                                'text' => 'Besi Baja',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara tali tambang 10 meter, pita 1 meter, dan benang 5 cm, manakah yang PALING PANJANG?',
                        'audio' => 'Manakah yang paling panjang antara tali tambang 10 meter, pita 1 meter, dan benang 5 cm?',
                        'emoji' => '📏',
                        'options' => [
                            [
                                'emoji' => '🪢',
                                'text' => 'Tali Tambang 10 Meter',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🎀',
                                'text' => 'Pita 1 Meter',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🧵',
                                'text' => 'Benang 5 cm',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kata imbuhan \"ter-\" pada kata terbesar, tertinggi, dan tercepat memiliki arti...?',
                        'audio' => 'Kata imbuhan ter pada kata terbesar dan tertinggi memiliki arti apa?',
                        'emoji' => '💡',
                        'options' => [
                            [
                                'emoji' => '💡',
                                'text' => 'Paling / Nomor Satu dalam perbandingan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '❌',
                                'text' => 'Kurang / Tidak ada',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Biasa saja',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelar apa yang pantas untuk anak yang cermat membandingkan semua ukuran di dunia?',
                        'audio' => 'Gelar apa yang pantas untuk anak yang cermat membandingkan semua ukuran?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => '🏆 Juara Ahli Logika Perbandingan Cilik!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Anak Kurang Cermat',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Diam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 3,
                'title' => 'Cerdas Memecahkan Teka-Teki Logika Perbandingan',
                'slug' => 'kuis-banding-l3-teka-teki-logika-banding',
                'icon_emoji' => '🧩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Jika Ali lebih tinggi dari Budi, dan Budi lebih tinggi dari Cici, siapakah yang PALING TINGGI?',
                        'audio' => 'Jika Ali lebih tinggi dari Budi dan Budi lebih tinggi dari Cici siapakah yang paling tinggi?',
                        'emoji' => '👦',
                        'options' => [
                            [
                                'emoji' => '👦',
                                'text' => 'Ali (Paling Tinggi)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '👦',
                                'text' => 'Budi',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '👧',
                                'text' => 'Cici',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Jika Kotak A lebih berat dari Kotak B, dan Kotak B lebih berat dari Kotak C, manakah yang PALING RINGAN?',
                        'audio' => 'Jika Kotak A lebih berat dari Kotak B dan Kotak B lebih berat dari Kotak C manakah yang paling ringan?',
                        'emoji' => '📦',
                        'options' => [
                            [
                                'emoji' => '📦',
                                'text' => 'Kotak C (Paling Ringan)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '📦',
                                'text' => 'Kotak A',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '📦',
                                'text' => 'Kotak B',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Timbangan kiri turun ke bawah karena berisi Semangka, timbangan kanan naik berisi Jeruk. Artinya...?',
                        'audio' => 'Timbangan kiri turun berisi Semangka timbangan kanan naik berisi Jeruk artinya apa?',
                        'emoji' => '🍉',
                        'options' => [
                            [
                                'emoji' => '🍉',
                                'text' => 'Semangka LEBIH BERAT daripada Jeruk',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍊',
                                'text' => 'Jeruk lebih berat daripada Semangka',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Keduanya sama berat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara angka 15, 8, dan 20, manakah angka yang PALING BESAR?',
                        'audio' => 'Di antara angka 15, 8, dan 20 manakah angka yang paling besar?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 (Paling Besar)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '15',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Di antara angka 12, 19, dan 5, manakah angka yang PALING KECIL?',
                        'audio' => 'Di antara angka 12, 19, dan 5 manakah angka yang paling kecil?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 (Paling Kecil)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '19',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Budi punya 10 balon, Dika punya 10 balon. Perbandingan jumlah balon mereka adalah...?',
                        'audio' => 'Budi punya 10 balon dan Dika punya 10 balon perbandingannya apa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '🟰',
                                'text' => 'Sama Banyak ( 10 = 10 )',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '➕',
                                'text' => 'Budi Lebih Banyak',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '➖',
                                'text' => 'Dika Lebih Sedikit',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mana yang lebih tebal: 1 lembar koran ATAU 1 buah kasur busa kamar?',
                        'audio' => 'Mana yang lebih tebal antara 1 lembar koran atau 1 buah kasur busa?',
                        'emoji' => '🛏️',
                        'options' => [
                            [
                                'emoji' => '🛏️',
                                'text' => 'Kasur Busa (Lebih Tebal)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '📰',
                                'text' => 'Lembar Koran (Lebih Tipis)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Tebal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mana yang lebih luas: Lapangan sepak bola ATAU meja belajar kamar?',
                        'audio' => 'Mana yang lebih luas antara Lapangan sepak bola atau Meja belajar?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '⚽',
                                'text' => 'Lapangan Sepak Bola (Lebih Luas)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪑',
                                'text' => 'Meja Belajar (Lebih Sempit)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Luas',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Jika air di ember terisi setengah, ember tersebut dikatakan...?',
                        'audio' => 'Jika air di ember terisi setengah ember tersebut dikatakan apa?',
                        'emoji' => '🪣',
                        'options' => [
                            [
                                'emoji' => '🪣',
                                'text' => 'Terisi Sebagian (Setengah Penuh)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🥛',
                                'text' => 'Penuh Meluap',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🫙',
                                'text' => 'Kosong Melompong',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Urutan ukuran dari yang TERKECIL ke TERBESAR yang benar adalah...?',
                        'audio' => 'Urutan ukuran dari yang terkecil ke terbesar yang benar adalah apa?',
                        'emoji' => '📐',
                        'options' => [
                            [
                                'emoji' => '📐',
                                'text' => 'Semut -> Kucing -> Gajah -> Ikan Paus',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔀',
                                'text' => 'Gajah -> Semut -> Ikan Paus -> Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '📉',
                                'text' => 'Ikan Paus -> Gajah -> Kucing -> Semut',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'perbandingan',
                'level_number' => 3,
                'title' => 'Grand Champion Ahli Perbandingan Ukuran & Kuantitas',
                'slug' => 'kuis-banding-l3-grand-master-perbandingan',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Gajah ... Tikus (Ukuran Tubuh)',
                        'audio' => 'Gajah dibanding Tikus adalah apa?',
                        'emoji' => '🐘',
                        'options' => [
                            [
                                'emoji' => '🐘',
                                'text' => 'Lebih Besar',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐭',
                                'text' => 'Lebih Kecil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Besar',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Jerapah ... Kelinci (Tinggi Tubuh)',
                        'audio' => 'Jerapah dibanding Kelinci adalah apa?',
                        'emoji' => '🦒',
                        'options' => [
                            [
                                'emoji' => '🦒',
                                'text' => 'Lebih Tinggi',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐰',
                                'text' => 'Lebih Pendek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Tinggi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Batu Kali ... Bulu Ayam (Berat Bobot)',
                        'audio' => 'Batu Kali dibanding Bulu Ayam adalah apa?',
                        'emoji' => '🪨',
                        'options' => [
                            [
                                'emoji' => '🪨',
                                'text' => 'Lebih Berat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪶',
                                'text' => 'Lebih Ringan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Berat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Kuda ... Kura-Kura (Kecepatan Lari)',
                        'audio' => 'Kuda dibanding Kura-kura adalah apa?',
                        'emoji' => '🐎',
                        'options' => [
                            [
                                'emoji' => '🐎',
                                'text' => 'Lebih Cepat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐢',
                                'text' => 'Lebih Lambat',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Cepat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Batang Pohon ... Ranting Daun (Ketebalan)',
                        'audio' => 'Batang Pohon dibanding Ranting Daun adalah apa?',
                        'emoji' => '🌳',
                        'options' => [
                            [
                                'emoji' => '🌳',
                                'text' => 'Lebih Tebal',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌿',
                                'text' => 'Lebih Tipis',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Tebal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pintu Rumah ... Celah Jendela (Lebar Ruang)',
                        'audio' => 'Pintu Rumah dibanding Celah Jendela adalah apa?',
                        'emoji' => '🚪',
                        'options' => [
                            [
                                'emoji' => '🚪',
                                'text' => 'Lebih Lebar',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪟',
                                'text' => 'Lebih Sempit',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Lebar',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Laut Samudra ... Kolam Karet (Kedalaman Air)',
                        'audio' => 'Laut Samudra dibanding Kolam Karet adalah apa?',
                        'emoji' => '🌊',
                        'options' => [
                            [
                                'emoji' => '🌊',
                                'text' => 'Lebih Dalam',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🏖️',
                                'text' => 'Lebih Dangkal',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Dalam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Sup Mendidih ... Es Krim Buah (Suhu Benda)',
                        'audio' => 'Sup Mendidih dibanding Es Krim Buah adalah apa?',
                        'emoji' => '🔥',
                        'options' => [
                            [
                                'emoji' => '🔥',
                                'text' => 'Lebih Panas',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍦',
                                'text' => 'Lebih Dingin',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⚖️',
                                'text' => 'Sama Suhu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Simbol yang tepat untuk 10 Benda ... 10 Benda adalah?',
                        'audio' => 'Simbol yang tepat untuk 10 benda dibanding 10 benda adalah apa?',
                        'emoji' => '🟰',
                        'options' => [
                            [
                                'emoji' => '🟰',
                                'text' => 'Sama Dengan ( = )',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '➕',
                                'text' => 'Lebih Besar ( > )',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '➖',
                                'text' => 'Lebih Kecil ( < )',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelar kehormatan untuk anak yang menguasai seluruh konsep perbandingan ukuran dan kuantitas adalah...?',
                        'audio' => 'Gelar kehormatan untuk anak yang menguasai seluruh konsep perbandingan adalah apa?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => '🏆 Grand Champion Ahli Perbandingan Ukuran & Kuantitas!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Juara Malas Mengamati',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Patung Diam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 1,
                'title' => 'Penjumlahan Dasar Hasil 2 dan 3',
                'slug' => 'kuis-tambah-l1-hasil-2-3',
                'icon_emoji' => '🍎',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 1 Apel 🍎 + 1 Apel 🍎 = ... ?',
                        'audio' => 'Berapa hasil dari satu apel ditambah satu apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Balon 🎈🎈 + 1 Balon 🎈 = ... ?',
                        'audio' => 'Berapa hasil dari dua balon ditambah satu balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 1 Bintang ⭐ + 2 Bintang ⭐⭐ = ... ?',
                        'audio' => 'Berapa hasil dari satu bintang ditambah dua bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Bintang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 1,
                'title' => 'Penjumlahan Dasar Hasil 4',
                'slug' => 'kuis-tambah-l1-hasil-4',
                'icon_emoji' => '🐱',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 2 Kucing 🐱🐱 + 2 Kucing 🐱🐱 = ... ?',
                        'audio' => 'Berapa hasil dari dua kucing ditambah dua kucing?',
                        'emoji' => '🐱',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Kucing',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Kucing',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 3 Mobil 🚗🚗🚗 + 1 Mobil 🚗 = ... ?',
                        'audio' => 'Berapa hasil dari tiga mobil ditambah satu mobil?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Mobil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Mobil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Mobil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 1 Apel 🍎 + 3 Apel 🍎🍎🍎 = ... ?',
                        'audio' => 'Berapa hasil dari satu apel ditambah tiga apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 1,
                'title' => 'Penjumlahan Dasar Hasil 5',
                'slug' => 'kuis-tambah-l1-hasil-5',
                'icon_emoji' => '🐟',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 3 Ikan 🐟🐟🐟 + 2 Ikan 🐟🐟 = ... ?',
                        'audio' => 'Berapa hasil dari tiga ikan ditambah dua ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Ikan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Ikan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Ikan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 4 Bunga 🌸🌸🌸🌸 + 1 Bunga 🌸 = ... ?',
                        'audio' => 'Berapa hasil dari empat bunga ditambah satu bunga?',
                        'emoji' => '🌸',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Bunga',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Bunga',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Bunga',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Balon 🎈🎈 + 3 Balon 🎈🎈🎈 = ... ?',
                        'audio' => 'Berapa hasil dari dua balon ditambah tiga balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 2,
                'title' => 'Penjumlahan Ceria Hasil 6',
                'slug' => 'kuis-tambah-l2-hasil-6',
                'icon_emoji' => '⚽',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 3 Bola ⚽⚽⚽ + 3 Bola ⚽⚽⚽ = ... ?',
                        'audio' => 'Berapa hasil dari tiga bola ditambah tiga bola?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Bola',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Bola',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Bola',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 4 Bebek 🦆🦆🦆🦆 + 2 Bebek 🦆🦆 = ... ?',
                        'audio' => 'Berapa hasil dari empat bebek ditambah dua bebek?',
                        'emoji' => '🦆',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Bebek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Bebek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Bebek',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 5 Stroberi 🍓🍓🍓🍓🍓 + 1 Stroberi 🍓 = ... ?',
                        'audio' => 'Berapa hasil dari lima stroberi ditambah satu stroberi?',
                        'emoji' => '🍓',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Stroberi',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Stroberi',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Stroberi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Apel 🍎🍎 + 4 Apel 🍎🍎🍎🍎 = ... ?',
                        'audio' => 'Berapa hasil dari dua apel ditambah empat apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 1 Mobil 🚗 + 5 Mobil 🚗🚗🚗🚗🚗 = ... ?',
                        'audio' => 'Berapa hasil dari satu mobil ditambah lima mobil?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Mobil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Mobil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Mobil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 2,
                'title' => 'Penjumlahan Ceria Hasil 7',
                'slug' => 'kuis-tambah-l2-hasil-7',
                'icon_emoji' => '🥚',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 4 Telur 🥚🥚🥚🥚 + 3 Telur 🥚🥚🥚 = ... ?',
                        'audio' => 'Berapa hasil dari empat telur ditambah tiga telur?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Telur',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Telur',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Telur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 5 Kue 🧁🧁🧁🧁🧁 + 2 Kue 🧁🧁 = ... ?',
                        'audio' => 'Berapa hasil dari lima kue ditambah dua kue?',
                        'emoji' => '🧁',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Kue',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Kue',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Kue',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 6 Balon 🎈🎈🎈🎈🎈🎈 + 1 Balon 🎈 = ... ?',
                        'audio' => 'Berapa hasil dari enam balon ditambah satu balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 3 Ikan 🐟🐟🐟 + 4 Ikan 🐟🐟🐟🐟 = ... ?',
                        'audio' => 'Berapa hasil dari tiga ikan ditambah empat ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Ikan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Ikan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Ikan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Bintang ⭐⭐ + 5 Bintang ⭐⭐⭐⭐⭐ = ... ?',
                        'audio' => 'Berapa hasil dari dua bintang ditambah lima bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Bintang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 2,
                'title' => 'Penjumlahan Ceria Hasil 8',
                'slug' => 'kuis-tambah-l2-hasil-8',
                'icon_emoji' => '✏️',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 4 Pensil ✏️✏️✏️✏️ + 4 Pensil ✏️✏️✏️✏️ = ... ?',
                        'audio' => 'Berapa hasil dari empat pensil ditambah empat pensil?',
                        'emoji' => '✏️',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Pensil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Pensil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Pensil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 5 Kupu 🦋🦋🦋🦋🦋 + 3 Kupu 🦋🦋🦋 = ... ?',
                        'audio' => 'Berapa hasil dari lima kupu-kupu ditambah tiga kupu-kupu?',
                        'emoji' => '🦋',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Kupu-Kupu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Kupu-Kupu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Kupu-Kupu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 6 Apel 🍎🍎🍎🍎🍎🍎 + 2 Apel 🍎🍎 = ... ?',
                        'audio' => 'Berapa hasil dari enam apel ditambah dua apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 7 Balon 🎈🎈🎈🎈🎈🎈🎈 + 1 Balon 🎈 = ... ?',
                        'audio' => 'Berapa hasil dari tujuh balon ditambah satu balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 3 Bebek 🦆🦆🦆 + 5 Bebek 🦆🦆🦆🦆🦆 = ... ?',
                        'audio' => 'Berapa hasil dari tiga bebek ditambah lima bebek?',
                        'emoji' => '🦆',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Bebek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Bebek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Bebek',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 3,
                'title' => 'Penjumlahan Hebat Hasil 9',
                'slug' => 'kuis-tambah-l3-hasil-9',
                'icon_emoji' => '🍬',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 5 Permen 🍬 + 4 Permen 🍬 = ... ?',
                        'audio' => 'Berapa hasil dari lima permen ditambah empat permen?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Permen',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Permen',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10 Permen',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 6 Jeruk 🍊 + 3 Jeruk 🍊 = ... ?',
                        'audio' => 'Berapa hasil dari enam jeruk ditambah tiga jeruk?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Jeruk',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Jeruk',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 7 Perahu ⛵ + 2 Perahu ⛵ = ... ?',
                        'audio' => 'Berapa hasil dari tujuh perahu ditambah dua perahu?',
                        'emoji' => '⛵',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Perahu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Perahu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Perahu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 8 Lonceng 🔔 + 1 Lonceng 🔔 = ... ?',
                        'audio' => 'Berapa hasil dari delapan lonceng ditambah satu lonceng?',
                        'emoji' => '🔔',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Lonceng',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Lonceng',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Lonceng',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 4 Bintang ⭐ + 5 Bintang ⭐ = ... ?',
                        'audio' => 'Berapa hasil dari empat bintang ditambah lima bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Bintang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 3 Apel 🍎 + 6 Apel 🍎 = ... ?',
                        'audio' => 'Berapa hasil dari tiga apel ditambah enam apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Kucing 🐱 + 7 Kucing 🐱 = ... ?',
                        'audio' => 'Berapa hasil dari dua kucing ditambah tujuh kucing?',
                        'emoji' => '🐱',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Kucing',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Kucing',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 1 Balon 🎈 + 8 Balon 🎈 = ... ?',
                        'audio' => 'Berapa hasil dari satu balon ditambah delapan balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Jika di meja ada 5 donat dan ibu memberi 4 donat lagi, total donat menjadi...?',
                        'audio' => 'Jika di meja ada lima donat dan ibu memberi empat donat lagi totalnya ada berapa?',
                        'emoji' => '🍩',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Donat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Donat',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 Donat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Apakah 4 + 5 hasilnya sama dengan 5 + 4?',
                        'audio' => 'Apakah empat ditambah lima hasilnya sama dengan lima ditambah empat?',
                        'emoji' => '✨',
                        'options' => [
                            [
                                'emoji' => '✨',
                                'text' => 'Ya, Sama! Keduanya menghasilkan 9',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '❌',
                                'text' => 'Tidak, hasilnya berbeda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '❓',
                                'text' => 'Tidak bisa dihitung',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 3,
                'title' => 'Penjumlahan Sempurna Pasangan 10',
                'slug' => 'kuis-tambah-l3-pasangan-10',
                'icon_emoji' => '🍩',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari penjumlahan kembar: 5 Donat 🍩 + 5 Donat 🍩 = ... ?',
                        'audio' => 'Berapa hasil dari lima ditambah lima?',
                        'emoji' => '🍩',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Donat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Donat',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Donat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 6 Lonceng 🔔 + 4 Lonceng 🔔 = ... ?',
                        'audio' => 'Berapa hasil dari enam lonceng ditambah empat lonceng?',
                        'emoji' => '🔔',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Lonceng',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Lonceng',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 Lonceng',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 8 Medali 🏅 + 2 Medali 🏅 = ... ?',
                        'audio' => 'Berapa hasil dari delapan medali ditambah dua medali?',
                        'emoji' => '🏅',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Medali',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Medali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 Medali',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 7 Bintang ⭐ + 3 Bintang ⭐ = ... ?',
                        'audio' => 'Berapa hasil dari tujuh bintang ditambah tiga bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Bintang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 9 Balon 🎈 + 1 Balon 🎈 = ... ?',
                        'audio' => 'Berapa hasil dari sembilan balon ditambah satu balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 4 Apel 🍎 + 6 Apel 🍎 = ... ?',
                        'audio' => 'Berapa hasil dari empat apel ditambah enam apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Apel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 2 Ikan 🐟 + 8 Ikan 🐟 = ... ?',
                        'audio' => 'Berapa hasil dari dua ikan ditambah delapan ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Ikan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Ikan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 Ikan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 3 Mobil 🚗 + 7 Mobil 🚗 = ... ?',
                        'audio' => 'Berapa hasil dari tiga mobil ditambah tujuh mobil?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Mobil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Mobil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Mobil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 1 Permen 🍬 + 9 Permen 🍬 = ... ?',
                        'audio' => 'Berapa hasil dari satu permen ditambah sembilan permen?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Permen',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 Permen',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 Permen',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 Jeruk 🍊 + 0 (nol) Jeruk = ... ?',
                        'audio' => 'Berapa hasil dari sepuluh jeruk ditambah nol jeruk?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 Jeruk',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0 Jeruk',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'penjumlahan',
                'level_number' => 3,
                'title' => 'Grand Champion Master Penjumlahan Bergambar 1 Sampai 10',
                'slug' => 'kuis-tambah-l3-grand-master-tambah',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => '1 + 1 = ... ?',
                        'audio' => 'Satu ditambah satu sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '2 + 1 = ... ?',
                        'audio' => 'Dua ditambah satu sama dengan berapa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '2 + 2 = ... ?',
                        'audio' => 'Dua ditambah dua sama dengan berapa?',
                        'emoji' => '🐱',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '3 + 2 = ... ?',
                        'audio' => 'Tiga ditambah dua sama dengan berapa?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '3 + 3 = ... ?',
                        'audio' => 'Tiga ditambah tiga sama dengan berapa?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '4 + 3 = ... ?',
                        'audio' => 'Empat ditambah tiga sama dengan berapa?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '4 + 4 = ... ?',
                        'audio' => 'Empat ditambah empat sama dengan berapa?',
                        'emoji' => '✏️',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '5 + 4 = ... ?',
                        'audio' => 'Lima ditambah empat sama dengan berapa?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '5 + 5 = ... ?',
                        'audio' => 'Lima ditambah lima sama dengan berapa?',
                        'emoji' => '🍩',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelar kehormatan untuk anak yang berhasil menguasai penjumlahan bergambar 1 sampai 10 adalah...?',
                        'audio' => 'Gelar kehormatan untuk anak yang menguasai penjumlahan bergambar adalah apa?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => '🏆 Grand Champion Master Penjumlahan Bergambar 1 Sampai 10!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Juara Malas Menjumlahkan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Patung Diam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 1,
                'title' => 'Pengurangan Dasar dari Angka 2 dan 3',
                'slug' => 'kuis-kurang-l1-angka-2-3',
                'icon_emoji' => '🍎',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Ada 2 Apel 🍎🍎, adik makan 1 apel. Sisa berapa apel di piring?',
                        'audio' => 'Ada dua apel adik memakan satu apel sisa berapa apel?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Apel',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => 'Habis',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 3 Balon 🎈🎈🎈, 1 balon terbang lepas. Sisa berapa balon di tangan?',
                        'audio' => 'Ada tiga balon satu balon terbang lepas sisa berapa balon?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Balon',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Balon',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Balon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 3 Bintang ⭐⭐⭐, 2 bintang tertutup awan. Sisa berapa bintang yang bersinar?',
                        'audio' => 'Tiga bintang dikurang dua bintang sisa berapa bintang?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Bintang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 1,
                'title' => 'Pengurangan Dasar dari Angka 4',
                'slug' => 'kuis-kurang-l1-angka-4',
                'icon_emoji' => '🚗',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Ada 4 Mobil 🚗🚗🚗🚗, 1 mobil masuk garasi. Sisa berapa mobil di jalan?',
                        'audio' => 'Empat mobil dikurang satu mobil sisa berapa mobil?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Mobil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Mobil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Mobil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 4 Kucing 🐱🐱🐱🐱, 2 kucing tidur pulas. Sisa berapa kucing yang masih bermain?',
                        'audio' => 'Empat kucing dikurang dua kucing sisa berapa kucing?',
                        'emoji' => '🐱',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Kucing',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Kucing',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 4 Bunga 🌸🌸🌸🌸, 3 bunga dirangkai ke vas. Sisa berapa bunga di meja?',
                        'audio' => 'Empat bunga dikurang tiga bunga sisa berapa bunga?',
                        'emoji' => '🌸',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Bunga',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Bunga',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Bunga',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 1,
                'title' => 'Pengurangan Dasar dari Angka 5',
                'slug' => 'kuis-kurang-l1-angka-5',
                'icon_emoji' => '🐟',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Ada 5 Ikan 🐟🐟🐟🐟🐟 di kolam, 1 ikan ditangkap jaring. Sisa berapa ikan di kolam?',
                        'audio' => 'Lima ikan dikurang satu ikan sisa berapa ikan?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Ikan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Ikan',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Ikan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 5 Donat 🍩🍩🍩🍩🍩, 2 donat dimakan kakak. Sisa berapa donat di piring?',
                        'audio' => 'Lima donat dikurang dua donat sisa berapa donat?',
                        'emoji' => '🍩',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Donat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Donat',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Donat',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 5 Bola ⚽⚽⚽⚽⚽, 3 bola ditendang masuk gawang. Sisa berapa bola di lapangan?',
                        'audio' => 'Lima bola dikurang tiga bola sisa berapa bola?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Bola',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Bola',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Bola',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 2,
                'title' => 'Pengurangan Ceria dari Angka 5 dan 6',
                'slug' => 'kuis-kurang-l2-angka-5-6',
                'icon_emoji' => '🍩',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 5 - 4 = ... ?',
                        'audio' => 'Lima dikurang empat sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 6 Bebek 🦆 berenang, 1 bebek naik ke darat. Sisa berapa bebek berenang?',
                        'audio' => 'Enam bebek dikurang satu bebek sisa berapa bebek?',
                        'emoji' => '🦆',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Bebek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Bebek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Bebek',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 6 Stroberi 🍓, 3 stroberi dimakan adik. Sisa berapa stroberi di mangkuk?',
                        'audio' => 'Enam stroberi dikurang tiga stroberi sisa berapa stroberi?',
                        'emoji' => '🍓',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Stroberi',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Stroberi',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Stroberi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 6 - 2 = ... ?',
                        'audio' => 'Enam dikurang dua sama dengan berapa?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 6 - 5 = ... ?',
                        'audio' => 'Enam dikurang lima sama dengan berapa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 2,
                'title' => 'Pengurangan Ceria dari Angka 6 dan 7',
                'slug' => 'kuis-kurang-l2-angka-6-7',
                'icon_emoji' => '🥚',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Ada 6 Telur 🥚 di sarang, 4 sudah menetas jadi anak ayam. Sisa telur belum menetas ada...?',
                        'audio' => 'Enam telur dikurang empat telur sisa berapa telur?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Telur',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Telur',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 Telur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 7 Kue 🧁 wangi, 2 kue dibagikan ke teman baik. Sisa kue ada...?',
                        'audio' => 'Tujuh kue dikurang dua kue sisa berapa kue?',
                        'emoji' => '🧁',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Kue',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Kue',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Kue',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 7 Pensil ✏️ warna, 4 pensil dipinjam teman. Sisa pensil di kotak ada...?',
                        'audio' => 'Tujuh pensil dikurang empat pensil sisa berapa pensil?',
                        'emoji' => '✏️',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Pensil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Pensil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Pensil',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 7 - 1 = ... ?',
                        'audio' => 'Tujuh dikurang satu sama dengan berapa?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 7 - 6 = ... ?',
                        'audio' => 'Tujuh dikurang enam sama dengan berapa?',
                        'emoji' => '🌸',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 2,
                'title' => 'Pengurangan Ceria dari Angka 7 dan 8',
                'slug' => 'kuis-kurang-l2-angka-7-8',
                'icon_emoji' => '✏️',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Berapa hasil dari: 7 - 5 = ... ?',
                        'audio' => 'Tujuh dikurang lima sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 8 Kupu-Kupu 🦋 di taman, 3 kupu-kupu terbang ke pohon. Sisa berapa kupu-kupu di taman?',
                        'audio' => 'Delapan kupu-kupu dikurang tiga kupu-kupu sisa berapa kupu-kupu?',
                        'emoji' => '🦋',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Kupu-Kupu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Kupu-Kupu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Kupu-Kupu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 8 Permen 🍬 di toples, 4 permen dimakan bersama. Sisa berapa permen di toples?',
                        'audio' => 'Delapan permen dikurang empat permen sisa berapa permen?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Permen',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Permen',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Permen',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 8 - 2 = ... ?',
                        'audio' => 'Delapan dikurang dua sama dengan berapa?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 8 - 1 = ... ?',
                        'audio' => 'Delapan dikurang satu sama dengan berapa?',
                        'emoji' => '🦆',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 3,
                'title' => 'Pengurangan Hebat dari Angka 8 dan 9',
                'slug' => 'kuis-kurang-l3-angka-8-9',
                'icon_emoji' => '🦋',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => '8 - 5 = ... ?',
                        'audio' => 'Delapan dikurang lima sama dengan berapa?',
                        'emoji' => '🦋',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '8 - 6 = ... ?',
                        'audio' => 'Delapan dikurang enam sama dengan berapa?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '8 - 7 = ... ?',
                        'audio' => 'Delapan dikurang tujuh sama dengan berapa?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '8 - 8 = ... ?',
                        'audio' => 'Delapan dikurang delapan sama dengan berapa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '0️⃣',
                                'text' => '0 (Nol / Habis)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 9 Jeruk 🍊, 4 jeruk diperas jadi jus segar. Sisa jeruk utuh ada...?',
                        'audio' => 'Sembilan jeruk dikurang empat jeruk sisa berapa jeruk?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Jeruk',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Jeruk',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 9 Perahu ⛵ berlayar, 5 perahu bersandar di dermaga. Sisa perahu berlayar ada...?',
                        'audio' => 'Sembilan perahu dikurang lima perahu sisa berapa perahu?',
                        'emoji' => '⛵',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Perahu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Perahu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Perahu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 9 - 1 = ... ?',
                        'audio' => 'Sembilan dikurang satu sama dengan berapa?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 9 - 2 = ... ?',
                        'audio' => 'Sembilan dikurang dua sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 9 - 3 = ... ?',
                        'audio' => 'Sembilan dikurang tiga sama dengan berapa?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 9 - 6 = ... ?',
                        'audio' => 'Sembilan dikurang enam sama dengan berapa?',
                        'emoji' => '🔔',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 3,
                'title' => 'Pengurangan Sempurna dari Angka 10',
                'slug' => 'kuis-kurang-l3-angka-10',
                'icon_emoji' => '🔔',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Ada 10 Lonceng 🔔 emas di dinding, 5 lonceng sudah berdenting merdu. Sisa lonceng belum berdenting ada...?',
                        'audio' => 'Sepuluh lonceng dikurang lima lonceng sisa berapa lonceng?',
                        'emoji' => '🔔',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Lonceng',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Lonceng',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 Lonceng',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Ada 10 Medali 🏅 kejuaraan, 7 diberikan ke peserta teladan. Sisa medali ada...?',
                        'audio' => 'Sepuluh medali dikurang tujuh medali sisa berapa medali?',
                        'emoji' => '🏅',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Medali',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2 Medali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Medali',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 1 = ... ?',
                        'audio' => 'Sepuluh dikurang satu sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 2 = ... ?',
                        'audio' => 'Sepuluh dikurang dua sama dengan berapa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 3 = ... ?',
                        'audio' => 'Sepuluh dikurang tiga sama dengan berapa?',
                        'emoji' => '⭐',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 4 = ... ?',
                        'audio' => 'Sepuluh dikurang empat sama dengan berapa?',
                        'emoji' => '🍩',
                        'options' => [
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 6 = ... ?',
                        'audio' => 'Sepuluh dikurang enam sama dengan berapa?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 8 = ... ?',
                        'audio' => 'Sepuluh dikurang delapan sama dengan berapa?',
                        'emoji' => '✏️',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 9 = ... ?',
                        'audio' => 'Sepuluh dikurang sembilan sama dengan berapa?',
                        'emoji' => '🍬',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Berapa hasil dari: 10 - 10 = ... ?',
                        'audio' => 'Sepuluh dikurang sepuluh sama dengan berapa?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '0️⃣',
                                'text' => '0 (Nol / Habis)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pengurangan',
                'level_number' => 3,
                'title' => 'Grand Champion Master Pengurangan Bergambar 1 Sampai 10',
                'slug' => 'kuis-kurang-l3-grand-master-kurang',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => '2 - 1 = ... ?',
                        'audio' => 'Dua dikurang satu sama dengan berapa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '3 - 1 = ... ?',
                        'audio' => 'Tiga dikurang satu sama dengan berapa?',
                        'emoji' => '🎈',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '4 - 2 = ... ?',
                        'audio' => 'Empat dikurang dua sama dengan berapa?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '5 - 3 = ... ?',
                        'audio' => 'Lima dikurang tiga sama dengan berapa?',
                        'emoji' => '🐟',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '6 - 3 = ... ?',
                        'audio' => 'Enam dikurang tiga sama dengan berapa?',
                        'emoji' => '⚽',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '7 - 4 = ... ?',
                        'audio' => 'Tujuh dikurang empat sama dengan berapa?',
                        'emoji' => '🥚',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '2️⃣',
                                'text' => '2',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '8 - 4 = ... ?',
                        'audio' => 'Delapan dikurang empat sama dengan berapa?',
                        'emoji' => '✏️',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '9 - 5 = ... ?',
                        'audio' => 'Sembilan dikurang lima sama dengan berapa?',
                        'emoji' => '🍊',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => '10 - 5 = ... ?',
                        'audio' => 'Sepuluh dikurang lima sama dengan berapa?',
                        'emoji' => '🔔',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelar kehormatan untuk anak yang berhasil menguasai pengurangan bergambar 1 sampai 10 adalah...?',
                        'audio' => 'Gelar kehormatan untuk anak yang menguasai pengurangan bergambar adalah apa?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => '🏆 Grand Champion Master Pengurangan Bergambar 1 Sampai 10!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Juara Mengantuk Berhitung',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Patung Diam',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 1,
                'title' => 'Menebak Kelanjutan Pola Warna & Bentuk AB-AB',
                'slug' => 'kuis-pola-l1-warna-bentuk-ab',
                'icon_emoji' => '🔴',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola warna berikut: 🔴 Merah, 🔵 Biru, 🔴 Merah, ... ?',
                        'audio' => 'Lanjutkan pola warna: Merah, Biru, Merah, lalu warna apa?',
                        'emoji' => '🔴',
                        'options' => [
                            [
                                'emoji' => '🔵',
                                'text' => '🔵 Warna Biru',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🟢',
                                'text' => '🟢 Warna Hijau',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🟡',
                                'text' => '🟡 Warna Kuning',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola bentuk berikut: ⭕ Lingkaran, 🟩 Kotak, ⭕ Lingkaran, ... ?',
                        'audio' => 'Lanjutkan pola bentuk: Lingkaran, Kotak, Lingkaran, lalu bentuk apa?',
                        'emoji' => '⭕',
                        'options' => [
                            [
                                'emoji' => '🟩',
                                'text' => '🟩 Kotak',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔺',
                                'text' => '🔺 Segitiga',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⭐',
                                'text' => '⭐ Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola warna berikut: 🟢 Hijau, 🟡 Kuning, 🟢 Hijau, ... ?',
                        'audio' => 'Lanjutkan pola warna: Hijau, Kuning, Hijau, lalu warna apa?',
                        'emoji' => '🟢',
                        'options' => [
                            [
                                'emoji' => '🟡',
                                'text' => '🟡 Warna Kuning',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔴',
                                'text' => '🔴 Warna Merah',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔵',
                                'text' => '🔵 Warna Biru',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 1,
                'title' => 'Menebak Kelanjutan Pola Hewan, Buah & Ukuran',
                'slug' => 'kuis-pola-l1-hewan-buah-ukuran',
                'icon_emoji' => '🐱',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola suara hewan: 🐱 Meong, 🦆 Kwek-kwek, 🐱 Meong, ... ?',
                        'audio' => 'Lanjutkan pola hewan: Kucing, Bebek, Kucing, lalu apa?',
                        'emoji' => '🐱',
                        'options' => [
                            [
                                'emoji' => '🦆',
                                'text' => '🦆 Kwek-kwek Bebek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐱',
                                'text' => '🐱 Meong Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐮',
                                'text' => '🐮 Mooo Sapi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola buah: 🍎 Apel, 🍌 Pisang, 🍎 Apel, ... ?',
                        'audio' => 'Lanjutkan pola buah: Apel, Pisang, Apel, lalu buah apa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🍌',
                                'text' => '🍌 Buah Pisang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍎',
                                'text' => '🍎 Buah Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍊',
                                'text' => '🍊 Buah Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola ukuran: 🌟 Besar, ⭐ Kecil, 🌟 Besar, ... ?',
                        'audio' => 'Lanjutkan pola ukuran: Besar, Kecil, Besar, lalu ukuran apa?',
                        'emoji' => '🌟',
                        'options' => [
                            [
                                'emoji' => '⭐',
                                'text' => '⭐ Ukuran Kecil',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌟',
                                'text' => '🌟 Ukuran Besar',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '📏',
                                'text' => '📏 Ukuran Sedang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 1,
                'title' => 'Menebak Kelanjutan Pola Arah & Waktu Alam',
                'slug' => 'kuis-pola-l1-arah-waktu',
                'icon_emoji' => '⬆️',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola arah panah: ⬆️ Atas, ⬇️ Bawah, ⬆️ Atas, ... ?',
                        'audio' => 'Lanjutkan pola arah: Atas, Bawah, Atas, lalu arah mana?',
                        'emoji' => '⬆️',
                        'options' => [
                            [
                                'emoji' => '⬇️',
                                'text' => '⬇️ Panah Bawah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '⬆️',
                                'text' => '⬆️ Panah Atas',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '➡️',
                                'text' => '➡️ Panah Kanan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola siklus waktu alam: 🌞 Siang, 🌙 Malam, 🌞 Siang, ... ?',
                        'audio' => 'Lanjutkan pola waktu: Siang, Malam, Siang, lalu waktu apa?',
                        'emoji' => '🌞',
                        'options' => [
                            [
                                'emoji' => '🌙',
                                'text' => '🌙 Waktu Malam',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌞',
                                'text' => '🌞 Waktu Siang',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⛅',
                                'text' => '⛅ Waktu Sore',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola arah: ⬅️ Kiri, ➡️ Kanan, ⬅️ Kiri, ... ?',
                        'audio' => 'Lanjutkan pola arah: Kiri, Kanan, Kiri, lalu arah mana?',
                        'emoji' => '⬅️',
                        'options' => [
                            [
                                'emoji' => '➡️',
                                'text' => '➡️ Arah Kanan',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '⬅️',
                                'text' => '⬅️ Arah Kiri',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⬆️',
                                'text' => '⬆️ Arah Atas',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 2,
                'title' => 'Menebak Kelanjutan Pola 3 Elemen ABC-ABC',
                'slug' => 'kuis-pola-l2-pola-tiga-elemen',
                'icon_emoji' => '🟢',
                'target_age' => 4,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Pola lampu lalu lintas: 🔴 Merah, 🟡 Kuning, 🟢 Hijau, 🔴 Merah, 🟡 Kuning, ... ?',
                        'audio' => 'Merah, Kuning, Hijau, Merah, Kuning, lalu warna apa?',
                        'emoji' => '🟢',
                        'options' => [
                            [
                                'emoji' => '🟢',
                                'text' => '🟢 Warna Hijau',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔴',
                                'text' => '🔴 Warna Merah',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔵',
                                'text' => '🔵 Warna Biru',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola 3 bentuk: 🔺 Segitiga, ⭕ Lingkaran, 🟩 Kotak, 🔺 Segitiga, ⭕ Lingkaran, ... ?',
                        'audio' => 'Segitiga, Lingkaran, Kotak, Segitiga, Lingkaran, lalu bentuk apa?',
                        'emoji' => '🔺',
                        'options' => [
                            [
                                'emoji' => '🟩',
                                'text' => '🟩 Bentuk Kotak',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔺',
                                'text' => '🔺 Bentuk Segitiga',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '⭐',
                                'text' => '⭐ Bentuk Bintang',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola kendaraan: 🚗 Mobil, ✈️ Pesawat, 🚢 Kapal, 🚗 Mobil, ✈️ Pesawat, ... ?',
                        'audio' => 'Mobil, Pesawat, Kapal, Mobil, Pesawat, lalu kendaraan apa?',
                        'emoji' => '🚗',
                        'options' => [
                            [
                                'emoji' => '🚢',
                                'text' => '🚢 Kapal Laut',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🚗',
                                'text' => '🚗 Mobil',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🚲',
                                'text' => '🚲 Sepeda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola buah: 🍎 Apel, 🍊 Jeruk, 🍌 Pisang, 🍎 Apel, 🍊 Jeruk, ... ?',
                        'audio' => 'Apel, Jeruk, Pisang, Apel, Jeruk, lalu buah apa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🍌',
                                'text' => '🍌 Buah Pisang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍎',
                                'text' => '🍎 Buah Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍇',
                                'text' => '🍇 Buah Anggur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola angka berulang: 1️⃣ Satu, 2️⃣ Dua, 3️⃣ Tiga, 1️⃣ Satu, 2️⃣ Dua, ... ?',
                        'audio' => 'Satu, Dua, Tiga, Satu, Dua, lalu angka berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 (Tiga)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 (Empat)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 (Satu)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 2,
                'title' => 'Melanjutkan Pola Lompat Bilangan Genap & Ganjil',
                'slug' => 'kuis-pola-l2-lompat-bilangan',
                'icon_emoji' => '🔢',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola bilangan genap lompat 2: 2, 4, 6, ... ?',
                        'audio' => 'Dua, Empat, Enam, angka selanjutnya adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 (Delapan)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 (Tujuh)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 (Sembilan)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola bilangan ganjil lompat 2: 1, 3, 5, ... ?',
                        'audio' => 'Satu, Tiga, Lima, angka selanjutnya adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 (Tujuh)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 (Enam)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 (Delapan)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola bilangan genap: 4, 6, 8, ... ?',
                        'audio' => 'Empat, Enam, Delapan, angka selanjutnya adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10 (Sepuluh)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 (Sembilan)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '11 (Sebelas)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola bilangan ganjil: 3, 5, 7, ... ?',
                        'audio' => 'Tiga, Lima, Tujuh, angka selanjutnya adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9 (Sembilan)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 (Delapan)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10 (Sepuluh)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola kelipatan 5: 5, 10, 15, ... ?',
                        'audio' => 'Lima, Sepuluh, Lima Belas, angka selanjutnya adalah berapa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '2️⃣',
                                'text' => '20 (Dua Puluh)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '16 (Enam Belas)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '18 (Delapan Belas)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 2,
                'title' => 'Mengurutkan Pola Pertumbuhan & Siklus Hidup',
                'slug' => 'kuis-pola-l2-siklus-hidup-tumbuh',
                'icon_emoji' => '🌱',
                'target_age' => 5,
                'total_questions' => 5,
                'stars_reward' => 5,
                'questions' => [
                    [
                        'text' => 'Pola pertumbuhan tanaman: Sebutir Biji 🌱 -> Tumbuh Tunas 🌿 -> Menjadi ... ?',
                        'audio' => 'Biji tumbuh menjadi tunas lalu tumbuh menjadi apa?',
                        'emoji' => '🌳',
                        'options' => [
                            [
                                'emoji' => '🌳',
                                'text' => 'Pohon Rindang Berbuah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Kali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🏠',
                                'text' => 'Rumah',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola metamorfosis: Ulat makan daun 🐛 -> Berubah jadi Kepompong 🪵 -> Berubah jadi ... ?',
                        'audio' => 'Ulat menjadi kepompong lalu berubah menjadi apa?',
                        'emoji' => '🦋',
                        'options' => [
                            [
                                'emoji' => '🦋',
                                'text' => 'Kupu-Kupu Bersayap Indah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🦆',
                                'text' => 'Bebek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐟',
                                'text' => 'Ikan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola perkembangbiakan ayam: Butir Telur 🥚 -> Menetas jadi Anak Ayam 🐣 -> Tumbuh jadi ... ?',
                        'audio' => 'Telur menetas jadi anak ayam lalu tumbuh menjadi apa?',
                        'emoji' => '🐔',
                        'options' => [
                            [
                                'emoji' => '🐔',
                                'text' => 'Ayam Dewasa Berkokok',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐱',
                                'text' => 'Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐘',
                                'text' => 'Gajah',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola urutan waktu harian: Pagi terbit mentari 🌅 -> Siang terik ☀️ -> Sore senja 🌇 -> ... ?',
                        'audio' => 'Pagi, Siang, Sore, lalu waktu apa?',
                        'emoji' => '🌙',
                        'options' => [
                            [
                                'emoji' => '🌙',
                                'text' => 'Malam Hari Bertabur Bintang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🌅',
                                'text' => 'Pagi Kembali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '☀️',
                                'text' => 'Siang Lagi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola tahapan manusia: Bayi mungil 👶 -> Tumbuh jadi Anak pintar 👦 -> Tumbuh jadi ... ?',
                        'audio' => 'Bayi tumbuh jadi anak lalu tumbuh menjadi apa?',
                        'emoji' => '👨',
                        'options' => [
                            [
                                'emoji' => '👨',
                                'text' => 'Orang Dewasa Hebat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🧸',
                                'text' => 'Boneka',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '👶',
                                'text' => 'Bayi Lagi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 3,
                'title' => 'Memecahkan Pola Dobel AABB & Gradasi Ukuran',
                'slug' => 'kuis-pola-l3-pola-aabb-gradasi',
                'icon_emoji' => '🟦',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Pola dobel AABB: 🔵🔵 Biru Biru, 🟡🟡 Kuning Kuning, 🔵🔵 Biru Biru, ... ?',
                        'audio' => 'Biru Biru, Kuning Kuning, Biru Biru, dua warna selanjutnya adalah apa?',
                        'emoji' => '🟦',
                        'options' => [
                            [
                                'emoji' => '🟡',
                                'text' => '🟡🟡 Kuning Kuning',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔵',
                                'text' => '🔵🔵 Biru Biru',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔴',
                                'text' => '🔴🔴 Merah Merah',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola dobel bentuk: 🟩🟩 Kotak Kotak, ⭕⭕ Lingkaran Lingkaran, 🟩🟩 Kotak Kotak, ... ?',
                        'audio' => 'Kotak Kotak, Lingkaran Lingkaran, Kotak Kotak, selanjutnya bentuk apa?',
                        'emoji' => '🟩',
                        'options' => [
                            [
                                'emoji' => '⭕',
                                'text' => '⭕⭕ Lingkaran Lingkaran',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🟩',
                                'text' => '🟩🟩 Kotak Kotak',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔺',
                                'text' => '🔺🔺 Segitiga Segitiga',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola gradasi ukuran membesar: Kecil -> Sedang -> Besar -> ... ?',
                        'audio' => 'Kecil, Sedang, Besar, tingkat selanjutnya adalah apa?',
                        'emoji' => '📐',
                        'options' => [
                            [
                                'emoji' => '🐋',
                                'text' => 'Sangat Besar / Raksasa',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐜',
                                'text' => 'Mengecil Kembali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '📏',
                                'text' => 'Kecil Lagi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola gradasi warna: Biru Muda 🩵 -> Biru Sedang 💙 -> ... ?',
                        'audio' => 'Biru Muda, Biru Sedang, warna selanjutnya adalah apa?',
                        'emoji' => '💙',
                        'options' => [
                            [
                                'emoji' => '🔵',
                                'text' => 'Biru Tua Pekat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🟡',
                                'text' => 'Kuning',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔴',
                                'text' => 'Merah',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola dobel hewan: 🐱🐱 Kucing Kucing, 🦆🦆 Bebek Bebek, 🐱🐱 Kucing Kucing, ... ?',
                        'audio' => 'Kucing Kucing, Bebek Bebek, Kucing Kucing, selanjutnya apa?',
                        'emoji' => '🐱',
                        'options' => [
                            [
                                'emoji' => '🦆',
                                'text' => '🦆🦆 Bebek Bebek',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🐱',
                                'text' => '🐱🐱 Kucing Kucing',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐮',
                                'text' => '🐮🐮 Sapi Sapi',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola dobel buah: 🍎🍎 Apel Apel, 🍌🍌 Pisang Pisang, 🍎🍎 Apel Apel, ... ?',
                        'audio' => 'Apel Apel, Pisang Pisang, Apel Apel, selanjutnya apa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🍌',
                                'text' => '🍌🍌 Pisang Pisang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍎',
                                'text' => '🍎🍎 Apel Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍊',
                                'text' => '🍊🍊 Jeruk Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola susunan balok: 1 Balon 🎈, 2 Bintang ⭐⭐, 3 Apel 🍎🍎🍎, ... selanjutnya berisi berapa benda?',
                        'audio' => 'Satu balon, dua bintang, tiga apel, kelompok berikutnya berisi berapa benda?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 Benda',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 Benda',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3 Benda',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola urutan tangga: Tangga 2 -> Tangga 4 -> Tangga 6 -> Tangga 8 -> ... tangga berapa?',
                        'audio' => 'Dua, Empat, Enam, Delapan, anak tangga berikutnya adalah berapa?',
                        'emoji' => '🪜',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => 'Tangga 10',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => 'Tangga 9',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => 'Tangga 12',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola pengulangan pola AAB: 🔴 Merah, 🔴 Merah, 🔵 Biru, 🔴 Merah, 🔴 Merah, ... ?',
                        'audio' => 'Merah, Merah, Biru, Merah, Merah, lalu warna apa?',
                        'emoji' => '🔴',
                        'options' => [
                            [
                                'emoji' => '🔵',
                                'text' => '🔵 Warna Biru',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔴',
                                'text' => '🔴 Warna Merah',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🟢',
                                'text' => '🟢 Warna Hijau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mengapa kita perlu mengenali pola dalam belajar logika dan matematika?',
                        'audio' => 'Mengapa kita perlu mengenali pola dalam belajar logika?',
                        'emoji' => '🧠',
                        'options' => [
                            [
                                'emoji' => '🧠',
                                'text' => 'Melatih kecerdasan otak memprediksi urutan dan menyelesaikan masalah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Supaya cepat mengantuk',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🚫',
                                'text' => 'Tidak ada gunanya',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 3,
                'title' => 'Memecahkan Urutan Logika Mundur & Sebab-Akibat',
                'slug' => 'kuis-pola-l3-hitung-mundur-sebab-akibat',
                'icon_emoji' => '🌧️',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Pola hitung mundur roket: 10, 9, 8, 7, 6, ... angka selanjutnya adalah?',
                        'audio' => 'Sepuluh, Sembilan, Delapan, Tujuh, Enam, lalu angka berapa?',
                        'emoji' => '🚀',
                        'options' => [
                            [
                                'emoji' => '5️⃣',
                                'text' => '5 (Lima)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 (Tujuh)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '4️⃣',
                                'text' => '4 (Empat)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola hitung mundur: 5, 4, 3, 2, ... angka selanjutnya adalah?',
                        'audio' => 'Lima, Empat, Tiga, Dua, lalu angka berapa?',
                        'emoji' => '📉',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1 (Satu -> Roket Meluncur!)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '3️⃣',
                                'text' => '3',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola logika cuaca: Langit berawan mendung ☁️ -> Turun air hujan 🌧️ -> Akibatnya adalah...?',
                        'audio' => 'Langit mendung lalu turun hujan akibatnya apa?',
                        'emoji' => '🌧️',
                        'options' => [
                            [
                                'emoji' => '🌱',
                                'text' => 'Tanaman menjadi segar dan tanah basah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔥',
                                'text' => 'Tanah kebakaran panas',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🏜️',
                                'text' => 'Menjadi padang pasir kering',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola memasak di dapur: Telur mentah 🥚 -> Dipecahkan ke wajan sreng 🍳 -> Hasilnya adalah...?',
                        'audio' => 'Telur mentah digoreng di wajan hasilnya apa?',
                        'emoji' => '🍳',
                        'options' => [
                            [
                                'emoji' => '🍳',
                                'text' => 'Telur Dadar Matang yang Lezat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🥚',
                                'text' => 'Telur Mentah Kembali',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪵',
                                'text' => 'Menjadi Kayu Kering',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola sebab-akibat belajar: Anak rajin membaca buku 📚 dan tekun berlatih -> Akibatnya adalah...?',
                        'audio' => 'Anak rajin membaca buku dan tekun berlatih akibatnya apa?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => 'Menjadi anak pintar, berprestasi, dan juara',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Menjadi malas',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '😭',
                                'text' => 'Menangis sedih',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola kebersihan: Membuang sampah pada tempatnya 🗑️ -> Akibatnya lingkungan rumah menjadi...?',
                        'audio' => 'Membuang sampah pada tempatnya membuat rumah menjadi apa?',
                        'emoji' => '🧹',
                        'options' => [
                            [
                                'emoji' => '✨',
                                'text' => 'Bersih, harum, asri, dan bebas penyakit',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🦟',
                                'text' => 'Banyak nyamuk dan bau kotor',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '💥',
                                'text' => 'Rusak berantakan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola kesehatan gigi: Rajin menggosok gigi setiap malam 🦷 -> Akibatnya gigi menjadi...?',
                        'audio' => 'Rajin menggosok gigi setiap malam membuat gigi menjadi apa?',
                        'emoji' => '🦷',
                        'options' => [
                            [
                                'emoji' => '🦷',
                                'text' => 'Putih bersih, kuat, sehat, dan tidak berlubang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🖤',
                                'text' => 'Hitam berlubang dan sakit',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '❌',
                                'text' => 'Ompong semua',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola menanam: Menyiram tunas pohon setiap hari 💧 -> Akibatnya pohon akan...?',
                        'audio' => 'Menyiram tunas pohon setiap hari membuat pohon menjadi apa?',
                        'emoji' => '🌱',
                        'options' => [
                            [
                                'emoji' => '🌳',
                                'text' => 'Tumbuh subur, tinggi, dan berbuah lebat',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍂',
                                'text' => 'Layu dan mati kering',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Berubah jadi batu',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola hitung mundur: 20 -> 18 -> 16 -> 14 -> ... angka mundur lompat 2 berikutnya adalah?',
                        'audio' => 'Dua puluh, delapan belas, enam belas, empat belas, lalu angka berapa?',
                        'emoji' => '📉',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '12 (Dua Belas)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '13 (Tiga Belas)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '10 (Sepuluh)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola hitung mundur: 15 -> 13 -> 11 -> 9 -> ... angka mundur ganjil berikutnya adalah?',
                        'audio' => 'Lima belas, tiga belas, sebelas, sembilan, lalu angka berapa?',
                        'emoji' => '📉',
                        'options' => [
                            [
                                'emoji' => '7️⃣',
                                'text' => '7 (Tujuh)',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8 (Delapan)',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6 (Enam)',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'pola-logika',
                'level_number' => 3,
                'title' => 'Grand Champion Master Pola Logika & Berpikir Komputasional',
                'slug' => 'kuis-pola-l3-grand-master-pola-logika',
                'icon_emoji' => '🏆',
                'target_age' => 5,
                'total_questions' => 10,
                'stars_reward' => 10,
                'questions' => [
                    [
                        'text' => 'Lanjutkan pola: 🔴 Merah, 🔵 Biru, 🔴 Merah, 🔵 Biru, ... ?',
                        'audio' => 'Merah, Biru, Merah, Biru, lalu apa?',
                        'emoji' => '🔴',
                        'options' => [
                            [
                                'emoji' => '🔴',
                                'text' => '🔴 Merah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🔵',
                                'text' => '🔵 Biru',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🟢',
                                'text' => '🟢 Hijau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola: ⭕ Lingkaran, 🟩 Kotak, 🔺 Segitiga, ⭕ Lingkaran, 🟩 Kotak, ... ?',
                        'audio' => 'Lingkaran, Kotak, Segitiga, Lingkaran, Kotak, lalu apa?',
                        'emoji' => '⭕',
                        'options' => [
                            [
                                'emoji' => '🔺',
                                'text' => '🔺 Segitiga',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '⭕',
                                'text' => '⭕ Lingkaran',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🟩',
                                'text' => '🟩 Kotak',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola: 2, 4, 6, 8, ... ?',
                        'audio' => 'Dua, Empat, Enam, Delapan, lalu apa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '🔟',
                                'text' => '10',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '1️⃣',
                                'text' => '12',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola: 1, 3, 5, 7, ... ?',
                        'audio' => 'Satu, Tiga, Lima, Tujuh, lalu apa?',
                        'emoji' => '🔢',
                        'options' => [
                            [
                                'emoji' => '9️⃣',
                                'text' => '9',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '8️⃣',
                                'text' => '8',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🔟',
                                'text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Lanjutkan pola dobel: 🍎🍎, 🍌🍌, 🍎🍎, ... ?',
                        'audio' => 'Apel Apel, Pisang Pisang, Apel Apel, lalu apa?',
                        'emoji' => '🍎',
                        'options' => [
                            [
                                'emoji' => '🍌',
                                'text' => '🍌🍌 Pisang Pisang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🍎',
                                'text' => '🍎🍎 Apel Apel',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🍊',
                                'text' => '🍊🍊 Jeruk Jeruk',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola pertumbuhan kupu-kupu: Ulat -> Kepompong -> ... ?',
                        'audio' => 'Ulat menjadi kepompong lalu menjadi apa?',
                        'emoji' => '🦋',
                        'options' => [
                            [
                                'emoji' => '🦋',
                                'text' => 'Kupu-Kupu',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🦆',
                                'text' => 'Bebek',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🐱',
                                'text' => 'Kucing',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola pertumbuhan tanaman: Biji -> Tunas -> ... ?',
                        'audio' => 'Biji menjadi tunas lalu menjadi apa?',
                        'emoji' => '🌱',
                        'options' => [
                            [
                                'emoji' => '🌳',
                                'text' => 'Pohon Rindang',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🏠',
                                'text' => 'Rumah',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola hitung mundur: 5, 4, 3, 2, ... ?',
                        'audio' => 'Lima, Empat, Tiga, Dua, lalu apa?',
                        'emoji' => '📉',
                        'options' => [
                            [
                                'emoji' => '1️⃣',
                                'text' => '1',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '0️⃣',
                                'text' => '0',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '6️⃣',
                                'text' => '6',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Pola arah: ⬆️ Atas, ⬇️ Bawah, ⬆️ Atas, ... ?',
                        'audio' => 'Atas, Bawah, Atas, lalu apa?',
                        'emoji' => '⬆️',
                        'options' => [
                            [
                                'emoji' => '⬇️',
                                'text' => '⬇️ Bawah',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '⬆️',
                                'text' => '⬆️ Atas',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '➡️',
                                'text' => '➡️ Kanan',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Gelar kehormatan untuk anak yang berhasil menguasai seluruh pola logika dan berpikir komputasional cilik adalah...?',
                        'audio' => 'Gelar kehormatan untuk anak yang menguasai seluruh pola logika adalah apa?',
                        'emoji' => '🏆',
                        'options' => [
                            [
                                'emoji' => '🏆',
                                'text' => '🏆 Grand Champion Master Pola Logika & Berpikir Komputasional Cilik!',
                                'is_correct' => true,
                            ],
                            [
                                'emoji' => '😴',
                                'text' => 'Juara Malas Berpikir',
                                'is_correct' => false,
                            ],
                            [
                                'emoji' => '🪨',
                                'text' => 'Batu Patung Diam',
                                'is_correct' => false,
                            ],
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

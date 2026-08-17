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
            // PILAR 1: ZONA MENGENAL
            // =========================================================================
            [
                'category_slug' => 'abjad',
                'title' => 'Tebak Huruf Abjad Ceria',
                'slug' => 'tebak-abjad',
                'icon_emoji' => '🔤',
                'target_age' => 4,
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
                        'text' => 'Huruf apakah yang mengawali kata BEBEK?',
                        'audio' => 'Huruf apakah yang mengawali kata BEBEK?',
                        'emoji' => '🦆',
                        'options' => [
                            ['emoji' => '🅳', 'text' => 'Huruf D', 'is_correct' => false],
                            ['emoji' => '🅱️', 'text' => 'Huruf B', 'is_correct' => true],
                            ['emoji' => '🅰️', 'text' => 'Huruf A', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf C yang melengkung seperti bulan sabit?',
                        'audio' => 'Manakah huruf C yang melengkung seperti bulan sabit?',
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
                'category_slug' => 'angka',
                'title' => 'Tebak Angka Cerdas',
                'slug' => 'tebak-angka',
                'icon_emoji' => '🔢',
                'target_age' => 4,
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
                            ['emoji' => '2️⃣', 'text' => '2 Mata', 'is_correct' => true],
                            ['emoji' => '4️⃣', 'text' => '4 Mata', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Berapa jumlah roda pada sebuah mobil keluarga?',
                        'audio' => 'Berapa jumlah roda pada sebuah mobil keluarga?',
                        'emoji' => '🚗',
                        'options' => [
                            ['emoji' => '4️⃣', 'text' => '4 Roda', 'is_correct' => true],
                            ['emoji' => '2️⃣', 'text' => '2 Roda', 'is_correct' => false],
                            ['emoji' => '3️⃣', 'text' => '3 Roda', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'category_slug' => 'hijaiyah',
                'title' => 'Tebak Huruf Hijaiyah Cilik',
                'slug' => 'tebak-hijaiyah',
                'icon_emoji' => '🌙',
                'target_age' => 4,
                'total_questions' => 3,
                'stars_reward' => 3,
                'questions' => [
                    [
                        'text' => 'Huruf hijaiyah pertama yang berdiri lurus tegak adalah?',
                        'audio' => 'Huruf hijaiyah pertama yang berdiri lurus tegak adalah?',
                        'emoji' => '🌙',
                        'options' => [
                            ['emoji' => 'ا', 'text' => 'Alif (ا)', 'is_correct' => true],
                            ['emoji' => 'ب', 'text' => 'Ba (ب)', 'is_correct' => false],
                            ['emoji' => 'ت', 'text' => 'Ta (ت)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf hijaiyah yang memiliki satu titik di bawah perahu?',
                        'audio' => 'Manakah huruf hijaiyah yang memiliki satu titik di bawah perahu?',
                        'emoji' => '⛵',
                        'options' => [
                            ['emoji' => 'ت', 'text' => 'Ta (ت)', 'is_correct' => false],
                            ['emoji' => 'ب', 'text' => 'Ba (ب)', 'is_correct' => true],
                            ['emoji' => 'ث', 'text' => 'Tsa (ث)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah huruf Ta yang memiliki dua titik di atasnya?',
                        'audio' => 'Manakah huruf Ta yang memiliki dua titik di atasnya?',
                        'emoji' => '🍎',
                        'options' => [
                            ['emoji' => 'ت', 'text' => 'Ta (ت)', 'is_correct' => true],
                            ['emoji' => 'ج', 'text' => 'Jim (ج)', 'is_correct' => false],
                            ['emoji' => 'ا', 'text' => 'Alif (ا)', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

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
                            ['emoji' => '🐰', 'text' => 'Kelinci', 'is_correct' => true],
                            ['emoji' => '🐻', 'text' => 'Beruang', 'is_correct' => false],
                            ['emoji' => '🐢', 'text' => 'Kura-kura', 'is_correct' => false],
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
                        'text' => 'Buah apakah yang berkulit kuning melengkung dan disukai monyet?',
                        'audio' => 'Buah apakah yang berkulit kuning melengkung dan disukai monyet?',
                        'emoji' => '🍌',
                        'options' => [
                            ['emoji' => '🍌', 'text' => 'Pisang', 'is_correct' => true],
                            ['emoji' => '🍎', 'text' => 'Apel', 'is_correct' => false],
                            ['emoji' => '🍇', 'text' => 'Anggur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Buah besar berdaging merah manis dengan biji kecil adalah?',
                        'audio' => 'Buah besar berdaging merah manis dengan biji kecil adalah?',
                        'emoji' => '🍉',
                        'options' => [
                            ['emoji' => '🍊', 'text' => 'Jeruk', 'is_correct' => false],
                            ['emoji' => '🍉', 'text' => 'Semangka', 'is_correct' => true],
                            ['emoji' => '🍓', 'text' => 'Stroberi', 'is_correct' => false],
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

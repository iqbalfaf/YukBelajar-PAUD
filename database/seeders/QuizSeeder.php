<?php

namespace Database\Seeders;

use App\Models\Category;
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

            [
                'category_slug' => 'alat-musik',
                'title' => 'Tebak Alat Musik Merdu',
                'slug' => 'tebak-alat-musik',
                'icon_emoji' => '🎵',
                'target_age' => 4,
                'total_questions' => 4,
                'stars_reward' => 4,
                'questions' => [
                    [
                        'text' => 'Alat musik manakah yang dimainkan dengan cara dipetik senarnya?',
                        'audio' => 'Alat musik manakah yang dimainkan dengan cara dipetik senarnya?',
                        'emoji' => '🎸',
                        'options' => [
                            ['emoji' => '🎸', 'text' => 'Gitar Petik', 'is_correct' => true],
                            ['emoji' => '🥁', 'text' => 'Drum Pukul', 'is_correct' => false],
                            ['emoji' => '🎺', 'text' => 'Terompet Tiup', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik perkusi yang dipukul menggunakan stik dan berbunyi duk-duk-tak adalah...?',
                        'audio' => 'Alat musik perkusi yang dipukul menggunakan stik dan berbunyi duk-duk-tak adalah...?',
                        'emoji' => '🥁',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Piano', 'is_correct' => false],
                            ['emoji' => '🥁', 'text' => 'Drum', 'is_correct' => true],
                            ['emoji' => '🎻', 'text' => 'Biola', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Alat musik besar bertuts hitam dan putih yang dimainkan dengan jari tangan adalah...?',
                        'audio' => 'Alat musik besar bertuts hitam dan putih yang dimainkan dengan jari tangan adalah...?',
                        'emoji' => '🎹',
                        'options' => [
                            ['emoji' => '🎹', 'text' => 'Piano Tuts', 'is_correct' => true],
                            ['emoji' => '🎷', 'text' => 'Saxophone', 'is_correct' => false],
                            ['emoji' => '🪇', 'text' => 'Marakas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'text' => 'Manakah alat musik tiup dari logam kuningan yang bersuara lantang tet-tooot?',
                        'audio' => 'Manakah alat musik tiup dari logam kuningan yang bersuara lantang tet-tooot?',
                        'emoji' => '🎺',
                        'options' => [
                            ['emoji' => '🎸', 'text' => 'Gitar', 'is_correct' => false],
                            ['emoji' => '🎺', 'text' => 'Terompet', 'is_correct' => true],
                            ['emoji' => '🪗', 'text' => 'Akordeon', 'is_correct' => false],
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

            $quiz = Quiz::updateOrCreate(
                ['slug' => $qData['slug']],
                [
                    'category_id' => $cat->id,
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

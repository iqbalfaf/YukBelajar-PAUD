<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\LearningLevel;
use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds for all 20 Topics.
     */
    public function run(): void
    {
        $materialBank = [
            // =========================================================================
            // PILAR 1: ZONA MENGENAL
            // =========================================================================
            'abjad' => [
                1 => [
                    ['title' => 'Huruf A untuk Apel', 'subtitle' => 'A - A - Apel', 'icon_emoji' => '🍎', 'sound_effect' => 'Kriuk Manis Apel Segar', 'speech_text' => 'Huruf A! A untuk Apel manis berwarna merah ceria.', 'parent_note' => 'Ajak anak membuka mulut lebar-lebar saat mengucapkan bunyi huruf A.', 'sort_order' => 1],
                    ['title' => 'Huruf B untuk Bebek', 'subtitle' => 'B - B - Bebek', 'icon_emoji' => '🦆', 'sound_effect' => 'Kwek-kwek Suara Bebek', 'speech_text' => 'Huruf B! B untuk Bebek lucu yang suka berenang.', 'parent_note' => 'Ajak anak menirukan bunyi kwek-kwek bebek.', 'sort_order' => 2],
                    ['title' => 'Huruf C untuk Ceri', 'subtitle' => 'C - C - Ceri', 'icon_emoji' => '🍒', 'sound_effect' => 'Manis Segar Ceri Merah', 'speech_text' => 'Huruf C! C untuk buah Ceri merah yang manis dan mungil.', 'parent_note' => 'Minta anak melengkungkan jarinya menyerupai huruf C.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Huruf D untuk Domba', 'subtitle' => 'D - D - Domba', 'icon_emoji' => '🐑', 'sound_effect' => 'Mbeee Suara Domba', 'speech_text' => 'Huruf D! D untuk Domba berbulu putih tebal dan lembut.', 'parent_note' => 'Tanyakan pada anak apa warna bulu domba.', 'sort_order' => 1],
                    ['title' => 'Huruf E untuk Elang', 'subtitle' => 'E - E - Elang', 'icon_emoji' => '🦅', 'sound_effect' => 'Kecipak Sayap Elang', 'speech_text' => 'Huruf E! E untuk burung Elang yang terbang gagah di langit tinggi.', 'parent_note' => 'Ajak anak merentangkan tangan seperti sayap burung elang.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Huruf K untuk Kucing', 'subtitle' => 'K - K - Kucing', 'icon_emoji' => '🐱', 'sound_effect' => 'Meong-meong Manja', 'speech_text' => 'Huruf K! K untuk Kucing imut berkumis lucu.', 'parent_note' => 'Minta anak menuliskan huruf K di udara dengan telunjuknya.', 'sort_order' => 1],
                    ['title' => 'Huruf S untuk Singa', 'subtitle' => 'S - S - Singa', 'icon_emoji' => '🦁', 'sound_effect' => 'Roaaar Auman Gagah', 'speech_text' => 'Huruf S! S untuk Singa si Raja Hutan yang pemberani.', 'parent_note' => 'Latih pelafalan bunyi desis huruf S.', 'sort_order' => 2],
                ],
            ],

            'angka' => [
                1 => [
                    ['title' => 'Angka 1 (Satu)', 'subtitle' => 'Satu Balon Terbang', 'icon_emoji' => '1️⃣', 'sound_effect' => 'Ting! Bunyi Lonceng Ceria', 'speech_text' => 'Satu! Seperti satu buah matahari yang menyinari bumi di siang hari.', 'parent_note' => 'Minta anak mengangkat satu jari telunjuknya ke atas.', 'sort_order' => 1],
                    ['title' => 'Angka 2 (Dua)', 'subtitle' => 'Dua Bebek Berenang', 'icon_emoji' => '2️⃣', 'sound_effect' => 'Kwek-kwek Dua Bebek', 'speech_text' => 'Dua! Seperti dua mata kita yang indah untuk melihat dunia.', 'parent_note' => 'Tunjukkan dua mata dan dua telinga anak sambil berhitung.', 'sort_order' => 2],
                    ['title' => 'Angka 3 (Tiga)', 'subtitle' => 'Tiga Bintang Emas', 'icon_emoji' => '3️⃣', 'sound_effect' => 'Gemilau Tiga Bintang', 'speech_text' => 'Tiga! Tiga bintang bersinar terang di malam yang indah.', 'parent_note' => 'Ajak anak berhitung 1, 2, 3 sambil bertepuk tangan.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Angka 4 (Empat)', 'subtitle' => 'Empat Roda Mobil', 'icon_emoji' => '4️⃣', 'sound_effect' => 'Brum-brum Empat Roda', 'speech_text' => 'Empat! Seperti empat roda mobil yang melaju di jalan raya.', 'parent_note' => 'Ajak anak menghitung 4 kaki meja atau kursi di rumah.', 'sort_order' => 1],
                    ['title' => 'Angka 5 (Lima)', 'subtitle' => 'Lima Jari Tangan', 'icon_emoji' => '5️⃣', 'sound_effect' => 'Tepuk Tangan 5 Jari', 'speech_text' => 'Lima! Ada lima jari di tangan kanan kita yang hebat.', 'parent_note' => 'Minta anak merentangkan lima jari tangannya.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Angka 10 (Sepuluh)', 'subtitle' => 'Sepuluh Jari Lengkap', 'icon_emoji' => '🔟', 'sound_effect' => 'Tepuk Sorak Hore!', 'speech_text' => 'Sepuluh! Gabungan sepuluh jari tangan kita untuk saling tolong menolong.', 'parent_note' => 'Ajak anak menghitung maju dari 1 sampai 10 bersama-sama.', 'sort_order' => 1],
                ],
            ],

            'hijaiyah' => [
                1 => [
                    ['title' => 'Huruf Alif (ا)', 'subtitle' => 'Alif Lurus Tegak', 'icon_emoji' => '🌙', 'sound_effect' => 'Pelafalan Alif Merdu', 'speech_text' => 'Alif! Huruf hijaiyah pertama yang berdiri lurus tegak.', 'parent_note' => 'Ajak anak berdiri tegak lurus seperti huruf Alif.', 'sort_order' => 1],
                    ['title' => 'Huruf Ba (ب)', 'subtitle' => 'Ba - Titik Satu di Bawah', 'icon_emoji' => '⛵', 'sound_effect' => 'Pelafalan Ba Jelas', 'speech_text' => 'Ba! Berbentuk seperti perahu dengan satu titik mutiara di bawahnya.', 'parent_note' => 'Ingatkan anak posisi titik huruf Ba ada di bawah.', 'sort_order' => 2],
                    ['title' => 'Huruf Ta (ت)', 'subtitle' => 'Ta - Dua Titik di Atas', 'icon_emoji' => '🍎', 'sound_effect' => 'Pelafalan Ta Renyah', 'speech_text' => 'Ta! Seperti perahu tersenyum dengan dua titik ceria di atasnya.', 'parent_note' => 'Tunjukkan bahwa huruf Ta memiliki dua titik di atas.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Huruf Tsa (ث)', 'subtitle' => 'Tsa - Tiga Titik Bintang', 'icon_emoji' => '👗', 'sound_effect' => 'Pelafalan Tsa Lembut', 'speech_text' => 'Tsa! Ucapkan dengan ujung lidah menyentuh gigi depan: Tsa!', 'parent_note' => 'Latih anak menempatkan ujung lidah di antara gigi depan.', 'sort_order' => 1],
                    ['title' => 'Huruf Jim (ج)', 'subtitle' => 'Jim - Titik di Tengah Perut', 'icon_emoji' => '🐪', 'sound_effect' => 'Pelafalan Jim Mantap', 'speech_text' => 'Jim! Memiliki perut buncit dengan satu titik di dalamnya. Jim untuk Jamal (Unta).', 'parent_note' => 'Jelaskan titik Jim berada di dalam lengkungan perutnya.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Huruf Lam Alif (لا)', 'subtitle' => 'Lam Alif Bergandengan', 'icon_emoji' => '🕌', 'sound_effect' => 'Pelafalan Lam Alif', 'speech_text' => 'Lam Alif! Dua huruf yang saling bersahabat dan bergandengan erat.', 'parent_note' => 'Gambarkan bentuk silang indah huruf Lam Alif di kertas.', 'sort_order' => 1],
                    ['title' => 'Huruf Ya (ي)', 'subtitle' => 'Ya - Huruf Terakhir', 'icon_emoji' => '🖐️', 'sound_effect' => 'Pelafalan Ya Ceria', 'speech_text' => 'Ya! Huruf hijaiyah penutup yang sangat indah dengan dua titik di bawahnya.', 'parent_note' => 'Apresiasi anak karena telah mengenal huruf hijaiyah dari Alif sampai Ya.', 'sort_order' => 2],
                ],
            ],

            'hewan' => [
                1 => [
                    ['title' => 'Singa Si Raja Hutan', 'subtitle' => 'Si-nga (2 Suku Kata)', 'icon_emoji' => '🦁', 'sound_effect' => 'Roaaar! Auman Singa', 'speech_text' => 'Singa! Hewan gagah bertaring tajam dan berbulu lebat di lehernya.', 'parent_note' => 'Ajak anak menirukan auman singa yang bersemangat.', 'sort_order' => 1],
                    ['title' => 'Kucing Persia Manja', 'subtitle' => 'Ku-cing (2 Suku Kata)', 'icon_emoji' => '🐱', 'sound_effect' => 'Meong-meong Manis', 'speech_text' => 'Kucing! Hewan peliharaan lucu berkumis lembut yang suka dielus.', 'parent_note' => 'Bicarakan bagaimana merawat dan menyayangi hewan peliharaan.', 'sort_order' => 2],
                    ['title' => 'Gajah Belalai Panjang', 'subtitle' => 'Ga-jah (2 Suku Kata)', 'icon_emoji' => '🐘', 'sound_effect' => 'Pruuuut! Suara Belalai', 'speech_text' => 'Gajah! Hewan darat terbesar dengan telinga lebar dan belalai panjang.', 'parent_note' => 'Ajak anak mengayunkan lengan seperti belalai gajah.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Lumba-Lumba Cerdas', 'subtitle' => 'Lum-ba Lum-ba', 'icon_emoji' => '🐬', 'sound_effect' => 'Kecipak Air Laut & Siulan', 'speech_text' => 'Lumba-lumba! Mamalia laut yang sangat ramah dan suka melompat di atas ombak.', 'parent_note' => 'Jelaskan bahwa lumba-lumba bernapas dengan paru-paru.', 'sort_order' => 1],
                    ['title' => 'Jerapah Leher Panjang', 'subtitle' => 'Je-ra-pah (3 Suku Kata)', 'icon_emoji' => '🦒', 'sound_effect' => 'Kunyah Daun Pohon', 'speech_text' => 'Jerapah! Hewan tertinggi yang suka makan daun pucuk pohon hijau.', 'parent_note' => 'Tunjukkan corak polkadot cokelat di tubuh jerapah.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Burung Elang Penjelajah', 'subtitle' => 'Bu-rung E-lang', 'icon_emoji' => '🦅', 'sound_effect' => 'Kecipak Sayap di Angkasa', 'speech_text' => 'Burung Elang! Penguasa angkasa yang memiliki penglihatan mata sangat tajam.', 'parent_note' => 'Diskusikan mengapa burung bisa terbang tinggi di langit.', 'sort_order' => 1],
                ],
            ],

            'buah' => [
                1 => [
                    ['title' => 'Apel Merah Manis', 'subtitle' => 'A-pel (2 Suku Kata)', 'icon_emoji' => '🍎', 'sound_effect' => 'Kriuk Gigitan Apel', 'speech_text' => 'Apel merah! Buah renyah kaya vitamin untuk tubuh yang sehat dan kuat.', 'parent_note' => 'Kenalkan warna kulit apel merah dan daging buahnya yang manis.', 'sort_order' => 1],
                    ['title' => 'Pisang Kuning Lezat', 'subtitle' => 'Pi-sang (2 Suku Kata)', 'icon_emoji' => '🍌', 'sound_effect' => 'Buka Kulit Pisang', 'speech_text' => 'Pisang! Buah lembut berkulit kuning yang sangat disukai anak-anak.', 'parent_note' => 'Ajak anak memperagakan cara mengupas pisang sebelum makan.', 'sort_order' => 2],
                    ['title' => 'Jeruk Segar Manis', 'subtitle' => 'Je-ruk (2 Suku Kata)', 'icon_emoji' => '🍊', 'sound_effect' => 'Perasan Air Jeruk', 'speech_text' => 'Jeruk! Buah bulat berwarna oranye yang banyak mengandung vitamin C.', 'parent_note' => 'Jelaskan rasa jeruk yang manis dan sedikit asam segar.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Semangka Merah Berair', 'subtitle' => 'Se-mang-ka (3 Suku Kata)', 'icon_emoji' => '🍉', 'sound_effect' => 'Kriuk Segar Semangka', 'speech_text' => 'Semangka! Buah besar berdaging merah manis dengan kulit bergaris hijau.', 'parent_note' => 'Ceritakan bahwa semangka banyak mengandung air pelepas dahaga.', 'sort_order' => 1],
                    ['title' => 'Wortel Oranye Renyah', 'subtitle' => 'Wor-tel (2 Suku Kata)', 'icon_emoji' => '🥕', 'sound_effect' => 'Kriuk Gigitan Wortel', 'speech_text' => 'Wortel! Sayuran sehat kesukaan kelinci yang membuat mata kita terang.', 'parent_note' => 'Ajak anak gemar makan sayur wortel di rumah.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Alpukat Hijau Lembut', 'subtitle' => 'Al-pu-kat (3 Suku Kata)', 'icon_emoji' => '🥑', 'sound_effect' => 'Sendok Lembut Alpukat', 'speech_text' => 'Alpukat! Buah super berlemak baik untuk kecerdasan otak anak pintar.', 'parent_note' => 'Diskusikan biji alpukat yang bulat besar di bagian tengahnya.', 'sort_order' => 1],
                ],
            ],

            'warna' => [
                1 => [
                    ['title' => 'Warna Merah Berani', 'subtitle' => 'Me-rah (2 Suku Kata)', 'icon_emoji' => '🔴', 'sound_effect' => 'Detak Jantung Ceria', 'speech_text' => 'Merah! Warna buah apel, bunga mawar, dan bendera bagian atas Indonesia.', 'parent_note' => 'Minta anak mencari benda berwarna merah di sekelilingnya.', 'sort_order' => 1],
                    ['title' => 'Warna Biru Langit', 'subtitle' => 'Bi-ru (2 Suku Kata)', 'icon_emoji' => '🔵', 'sound_effect' => 'Deru Angin Langit Cerah', 'speech_text' => 'Biru! Warna langit cerah di siang hari dan warna air laut yang tenang.', 'parent_note' => 'Tunjukkan langit biru atau benda berwarna biru.', 'sort_order' => 2],
                    ['title' => 'Warna Kuning Matahari', 'subtitle' => 'Ku-ning (2 Suku Kata)', 'icon_emoji' => '🟡', 'sound_effect' => 'Kilau Sinar Hangat', 'speech_text' => 'Kuning! Warna sinar matahari pagi dan warna buah pisang yang matang.', 'parent_note' => 'Ajak anak menyebutkan warna kuning pada buah atau baju.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Bentuk Lingkaran Bulat', 'subtitle' => 'Ling-ka-ran (3 Suku Kata)', 'icon_emoji' => '⭕', 'sound_effect' => 'Gelinding Bola Bulat', 'speech_text' => 'Lingkaran! Bentuk bulat sempurna tanpa sudut, seperti roda dan koin.', 'parent_note' => 'Ajak anak membuat gerakan melingkar dengan tangannya di udara.', 'sort_order' => 1],
                    ['title' => 'Bentuk Segitiga Cerdas', 'subtitle' => 'Se-gi-ti-ga (4 Suku Kata)', 'icon_emoji' => '🔺', 'sound_effect' => 'Ting Segitiga Tiga Sudut', 'speech_text' => 'Segitiga! Memiliki tiga garis lurus dan tiga sudut runcing, seperti potongan pizza.', 'parent_note' => 'Hitung bersama tiga sudut pada segitiga.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Bentuk Bintang Berkilau', 'subtitle' => 'Bin-tang (2 Suku Kata)', 'icon_emoji' => '⭐', 'sound_effect' => 'Klip-klip Bintang Malam', 'speech_text' => 'Bintang! Bentuk indah bersudut lima yang bersinar di langit malam.', 'parent_note' => 'Nyanyikan lagu Bintang Kecil bersama anak.', 'sort_order' => 1],
                ],
            ],

            'kendaraan' => [
                1 => [
                    ['title' => 'Mobil Keluarga Ceria', 'subtitle' => 'Mo-bil (2 Suku Kata)', 'icon_emoji' => '🚗', 'sound_effect' => 'Brum-brum Tin-tin!', 'speech_text' => 'Mobil! Kendaraan roda empat yang nyaman untuk bepergian bersama keluarga.', 'parent_note' => 'Tirukan bunyi klakson mobil tin-tin bersama anak.', 'sort_order' => 1],
                    ['title' => 'Sepeda Roda Dua', 'subtitle' => 'Se-pe-da (3 Suku Kata)', 'icon_emoji' => '🚲', 'sound_effect' => 'Kring-kring Suara Bel Sepeda', 'speech_text' => 'Sepeda! Dikayuh dengan kedua kaki sambil membunyikan bel kring-kring.', 'parent_note' => 'Ceritakan manfaat bersepeda untuk kesehatan tubuh.', 'sort_order' => 2],
                    ['title' => 'Kereta Api Cepat', 'subtitle' => 'Ke-re-ta A-pi', 'icon_emoji' => '🚆', 'sound_effect' => 'Tut-tut Gujes-gujes!', 'speech_text' => 'Kereta Api! Rangkaian gerbong panjang yang berjalan cepat di atas rel besi.', 'parent_note' => 'Ajak anak membuat barisan kereta api bersama teman.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Pesawat Terbang Angkasa', 'subtitle' => 'Pe-sa-wat Ter-bang', 'icon_emoji' => '✈️', 'sound_effect' => 'Wuuush Terbang Tinggi', 'speech_text' => 'Pesawat Terbang! Memiliki sayap lebar untuk mengangkut penumpang melintasi awan.', 'parent_note' => 'Rentangkan tangan seperti sayap pesawat yang terbang tinggi.', 'sort_order' => 1],
                    ['title' => 'Kapal Laut Mengarungi Ombak', 'subtitle' => 'Ka-pal La-ut', 'icon_emoji' => '🚢', 'sound_effect' => 'Klakson Kapal Laut (Tuuut!)', 'speech_text' => 'Kapal Laut! Kendaraan besar yang mengapung dan berlayar di samudra luas.', 'parent_note' => 'Jelaskan bagaimana jangkar kapal menjaga kapal tetap diam di pelabuhan.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Helikopter Baling-Baling', 'subtitle' => 'He-li-kop-ter (4 Suku Kata)', 'icon_emoji' => '🚁', 'sound_effect' => 'Kepak Baling-Baling Helikopter', 'speech_text' => 'Helikopter! Terbang dengan baling-baling putar di atas atapnya.', 'parent_note' => 'Putar tangan di atas kepala menirukan baling-baling.', 'sort_order' => 1],
                ],
            ],

            'benda' => [
                1 => [
                    ['title' => 'Buku Cerita Bergambar', 'subtitle' => 'Bu-ku (2 Suku Kata)', 'icon_emoji' => '📚', 'sound_effect' => 'Buka Lembaran Kertas', 'speech_text' => 'Buku! Jendela ilmu yang berisi cerita menarik dan gambar berwarna-warni.', 'parent_note' => 'Ajak anak membiasakan gemar membaca buku setiap hari.', 'sort_order' => 1],
                    ['title' => 'Pensil Warna Ajaib', 'subtitle' => 'Pen-sil (2 Suku Kata)', 'icon_emoji' => '✏️', 'sound_effect' => 'Goresan Menggambar di Kertas', 'speech_text' => 'Pensil! Alat ajaib untuk menulis kata dan menggambar cita-cita hebat.', 'parent_note' => 'Latih genggaman jari anak saat memegang pensil.', 'sort_order' => 2],
                    ['title' => 'Tas Sekolah Keren', 'subtitle' => 'Tas (1 Suku Kata)', 'icon_emoji' => '🎒', 'sound_effect' => 'Tutup Resleting Tas', 'speech_text' => 'Tas Sekolah! Tempat menyimpan buku, tempat pensil, dan bekal makanan sehat.', 'parent_note' => 'Ajak anak mandiri merapikan tas sekolahnya.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Sepatu Nyaman Melangkah', 'subtitle' => 'Se-pa-tu (3 Suku Kata)', 'icon_emoji' => '👟', 'sound_effect' => 'Langkah Kaki Tap-tap', 'speech_text' => 'Sepatu! Melindungi kaki kita agar tetap bersih dan aman saat berlari.', 'parent_note' => 'Latih anak mengenali sepatu kanan dan sepatu kiri.', 'sort_order' => 1],
                    ['title' => 'Jam Dinding Penunjuk Waktu', 'subtitle' => 'Jam (1 Suku Kata)', 'icon_emoji' => '⏰', 'sound_effect' => 'Tik-tok Detak Jarum Jam', 'speech_text' => 'Jam Dinding! Berdetak tik-tok untuk mengingatkan waktu belajar dan istirahat.', 'parent_note' => 'Kenalkan konsep waktu pagi, siang, dan malam pada anak.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Meja Belajar Rapi', 'subtitle' => 'Me-ja (2 Suku Kata)', 'icon_emoji' => '🪑', 'sound_effect' => 'Meja Rapi Tertata', 'speech_text' => 'Meja Belajar! Tempat yang nyaman dan terang untuk belajar bersama.', 'parent_note' => 'Biasakan anak duduk dengan posisi punggung tegak saat belajar.', 'sort_order' => 1],
                ],
            ],

            'bendera' => [
                1 => [
                    ['title' => 'Bendera Merah Putih Indonesia', 'subtitle' => 'In-do-ne-sia (4 Suku Kata)', 'icon_emoji' => '🇮🇩', 'sound_effect' => 'Kibar Bendera di Udara', 'speech_text' => 'Bendera Indonesia! Merah di atas artinya berani, putih di bawah artinya suci.', 'parent_note' => 'Ajak anak memberi hormat pada bendera Merah Putih dengan bangga.', 'sort_order' => 1],
                    ['title' => 'Bendera Palestina', 'subtitle' => 'Pa-les-ti-na (4 Suku Kata)', 'icon_emoji' => '🇵🇸', 'sound_effect' => 'Kibar Bendera Persaudaraan', 'speech_text' => 'Bendera Palestina! Sahabat tercinta kita yang memiliki segitiga merah di kiri.', 'parent_note' => 'Tunjukkan warna hitam, putih, hijau, dan segitiga merahnya.', 'sort_order' => 2],
                    ['title' => 'Bendera Arab Saudi', 'subtitle' => 'A-rab Sau-di', 'icon_emoji' => '🇸🇦', 'sound_effect' => 'Hijau Zamrud Megah', 'speech_text' => 'Bendera Arab Saudi! Berwarna hijau indah tempat berdirinya Ka\'bah yang mulia.', 'parent_note' => 'Ceritakan tentang kota Mekkah dan ibadah haji.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Bendera Malaysia', 'subtitle' => 'Ma-lay-sia (3 Suku Kata)', 'icon_emoji' => '🇲🇾', 'sound_effect' => 'Bintang & Bulan Sabit', 'speech_text' => 'Bendera Malaysia! Negara tetangga serumpun kita dengan lambang bulan bintang kuning.', 'parent_note' => 'Tunjukkan garis merah putih dan kotak biru di sudutnya.', 'sort_order' => 1],
                    ['title' => 'Bendera Jepang', 'subtitle' => 'Je-pang (2 Suku Kata)', 'icon_emoji' => '🇯🇵', 'sound_effect' => 'Matahari Terbit Bersinar', 'speech_text' => 'Bendera Jepang! Putih bersih dengan lingkaran merah melambangkan matahari terbit.', 'parent_note' => 'Tunjukkan betapa mudahnya menggambar bendera Jepang.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Bendera Turki', 'subtitle' => 'Tur-ki (2 Suku Kata)', 'icon_emoji' => '🇹🇷', 'sound_effect' => 'Bulan Sabit Merah', 'speech_text' => 'Bendera Turki! Berwarna merah dengan bulan sabit dan bintang putih yang menawan.', 'parent_note' => 'Ajak anak menyebutkan nama benda langit di bendera Turki.', 'sort_order' => 1],
                ],
            ],

            'tubuh' => [
                1 => [
                    ['title' => 'Mata untuk Melihat', 'subtitle' => 'Ma-ta (2 Suku Kata)', 'icon_emoji' => '👀', 'sound_effect' => 'Kedip Mata Sehat', 'speech_text' => 'Mata! Kita memiliki dua mata indah untuk melihat warna-warni dunia yang indah.', 'parent_note' => 'Minta anak menutup mata sejenak lalu membukanya sambil bersyukur.', 'sort_order' => 1],
                    ['title' => 'Telinga untuk Mendengar', 'subtitle' => 'Te-li-nga (3 Suku Kata)', 'icon_emoji' => '👂', 'sound_effect' => 'Dengar Suara Merdu', 'speech_text' => 'Telinga! Berada di kanan dan kiri kepala untuk mendengar nasehat baik ayah dan ibu.', 'parent_note' => 'Ajak anak mendengarkan suara burung atau musik lembut.', 'sort_order' => 2],
                    ['title' => 'Hidung untuk Bernapas', 'subtitle' => 'Hi-dung (2 Suku Kata)', 'icon_emoji' => '👃', 'sound_effect' => 'Tarik Napas Segar', 'speech_text' => 'Hidung! Berada di tengah wajah untuk menghirup udara segar dan mencium wangi bunga.', 'parent_note' => 'Latih anak menarik napas dalam-dalam lewat hidung dan menghembuskannya.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Tangan untuk Membantu', 'subtitle' => 'Ta-ngan (2 Suku Kata)', 'icon_emoji' => '✋', 'sound_effect' => 'Tepuk Tangan Ceria', 'speech_text' => 'Tangan! Memiliki sepuluh jari terampil untuk menulis, menggambar, dan menolong teman.', 'parent_note' => 'Beri tos tangan (high-five) ceria bersama anak.', 'sort_order' => 1],
                    ['title' => 'Kaki untuk Melangkah', 'subtitle' => 'Ka-ki (2 Suku Kata)', 'icon_emoji' => '🦵', 'sound_effect' => 'Lari & Lompat Ceria', 'speech_text' => 'Kaki! Otot kaki yang kuat membantu kita berjalan, berlari kencang, dan melompat tinggi.', 'parent_note' => 'Ajak anak berdiri dengan satu kaki selama 3 detik.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Mulut & Senyum Manis', 'subtitle' => 'Mu-lut (2 Suku Kata)', 'icon_emoji' => '👄', 'sound_effect' => 'Tawa Bahagia Ceria', 'speech_text' => 'Mulut! Untuk berbicara sopan, makan makanan bergizi, dan tersenyum gembira.', 'parent_note' => 'Minta anak tersenyum lebar dan menunjukkan gigi bersihnya.', 'sort_order' => 1],
                ],
            ],

            'alat-musik' => [
                1 => [
                    ['title' => 'Piano Tuts Indah', 'subtitle' => 'Pi-a-no (3 Suku Kata)', 'icon_emoji' => '🎹', 'sound_effect' => 'Ting-ting-ting! Melodi Indah Piano', 'speech_text' => 'Piano! Alat musik ber-tuts hitam putih yang menghasilkan melodi indah dan merdu.', 'parent_note' => 'Ajak anak menggerakkan jari-jarinya di atas meja seperti sedang menekan tuts piano.', 'sort_order' => 1],
                    ['title' => 'Gitar Petik Ceria', 'subtitle' => 'Gi-tar (2 Suku Kata)', 'icon_emoji' => '🎸', 'sound_effect' => 'Jreng-jreng-jreng! Petikan Senar Gitar', 'speech_text' => 'Gitar! Alat musik berdawai yang dimainkan dengan cara dipetik menggunakan jari tangan.', 'parent_note' => 'Tanyakan pada anak berapa jumlah senar pada gitar akustik.', 'sort_order' => 2],
                    ['title' => 'Drum Pukul Semangat', 'subtitle' => 'Drum (1 Suku Kata)', 'icon_emoji' => '🥁', 'sound_effect' => 'Duk-duk-tak! Irama Tabuhan Drum', 'speech_text' => 'Drum! Alat musik perkusi yang dipukul menggunakan stik untuk menjaga ketukan irama lagu.', 'parent_note' => 'Ajak anak bertepuk tangan mengikuti ketukan irama drum.', 'sort_order' => 3],
                    ['title' => 'Lonceng Musik Ceria', 'subtitle' => 'Lon-ceng (2 Suku Kata)', 'icon_emoji' => '🔔', 'sound_effect' => 'Kling-kling-kling! Gemerincing Lonceng', 'speech_text' => 'Lonceng! Alat musik logam yang berbunyi klinting merdu saat digoyangkan.', 'parent_note' => 'Ajak anak mendengarkan suara lonceng berdering.', 'sort_order' => 4],
                ],
                2 => [
                    ['title' => 'Terompet Tiup Megah', 'subtitle' => 'Te-rom-pet (3 Suku Kata)', 'icon_emoji' => '🎺', 'sound_effect' => 'Tet-tooot! Tiupan Kencang Terompet', 'speech_text' => 'Terompet! Alat musik tiup dari logam kuningan yang bersuara lantang dan megah.', 'parent_note' => 'Minta anak menirukan gerakan memegang dan meniup terompet.', 'sort_order' => 1],
                    ['title' => 'Biola Gesek Lembut', 'subtitle' => 'Bi-o-la (3 Suku Kata)', 'icon_emoji' => '🎻', 'sound_effect' => 'Ngiing-ngiing! Gesekan Halus Biola', 'speech_text' => 'Biola! Alat musik dawai bertubuh kayu yang dimainkan dengan cara digesek menggunakan busur.', 'parent_note' => 'Peragakan cara meletakkan biola di antara bahu dan dagu.', 'sort_order' => 2],
                    ['title' => 'Saxophone Melodi Merdu', 'subtitle' => 'Sak-so-fon (3 Suku Kata)', 'icon_emoji' => '🎷', 'sound_effect' => 'Tuut-tuut-tuuu! Alunan Manis Saxophone', 'speech_text' => 'Saxophone! Alat musik tiup berkilau keemasan dengan suara melengkung yang sangat merdu.', 'parent_note' => 'Jelaskan bahwa saxophone ditiup melalui corong tiup di bagian atas.', 'sort_order' => 3],
                    ['title' => 'Banjo Petik Ceria', 'subtitle' => 'Ban-jo (2 Suku Kata)', 'icon_emoji' => '🪕', 'sound_effect' => 'Plang-plang-jreng! Petikan Ceria Banjo', 'speech_text' => 'Banjo! Alat musik petik berbentuk bundar yang berbunyi gembira dan bersemangat.', 'parent_note' => 'Tunjukkan bentuk lingkaran bulat pada badan alat musik banjo.', 'sort_order' => 4],
                ],
                3 => [
                    ['title' => 'Akordeon Lipat Harmoni', 'subtitle' => 'A-kor-de-on (4 Suku Kata)', 'icon_emoji' => '🪗', 'sound_effect' => 'Teeet-tet-tet! Pompa Udara Akordeon', 'speech_text' => 'Akordeon! Alat musik unik yang dimainkan dengan cara ditarik-didorong sambil menekan tombol nada.', 'parent_note' => 'Tunjukkan bagaimana akordeon memompa udara untuk menghasilkan bunyi indah.', 'sort_order' => 1],
                    ['title' => 'Kendang Tabuh Irama', 'subtitle' => 'Ken-dang (2 Suku Kata)', 'icon_emoji' => '🪘', 'sound_effect' => 'Tung-tung-plak! Tabuhan Gendang Ceria', 'speech_text' => 'Kendang! Alat musik tradisional berkulit yang ditabuh menggunakan telapak tangan.', 'parent_note' => 'Ajak anak menepuk paha berirama seperti menabuh kendang.', 'sort_order' => 2],
                    ['title' => 'Terompet Tanduk (Horn)', 'subtitle' => 'Te-rom-pet Tan-duk', 'icon_emoji' => '📯', 'sound_effect' => 'Puuu-puuu! Tiupan Bergema Jauh', 'speech_text' => 'Terompet Tanduk! Alat musik tiup melingkar yang bersuara dalam dan bergema gagah.', 'parent_note' => 'Peragakan cara meniup terompet tanduk yang melingkar.', 'sort_order' => 3],
                    ['title' => 'Mikrofon Bernyanyi', 'subtitle' => 'Mik-ro-fon (3 Suku Kata)', 'icon_emoji' => '🎙️', 'sound_effect' => 'La-la-la! Suara Vokal Merdu', 'speech_text' => 'Mikrofon! Alat pengeras suara untuk bernyanyi lagu ceria bersama teman-teman.', 'parent_note' => 'Ajak anak bernyanyi bersama menggunakan kepalan tangan sebagai mikrofon.', 'sort_order' => 4],
                ],
            ],

            // =========================================================================
            // PILAR 2: ZONA BELAJAR MEMBACA
            // =========================================================================
            'huruf-vokal' => [
                1 => [
                    ['title' => 'Bunyi Vokal A', 'subtitle' => 'A - A - A (Mulut Terbuka)', 'icon_emoji' => '🅰️', 'sound_effect' => 'Lafal Vokal A', 'speech_text' => 'Vokal A! Buka mulutmu lebar: Aaaa! Seperti A untuk Apel.', 'parent_note' => 'Latih bentuk bibir terbuka saat membunyikan A.', 'sort_order' => 1],
                    ['title' => 'Bunyi Vokal I', 'subtitle' => 'I - I - I (Tersenyum Lebar)', 'icon_emoji' => 'ℹ️', 'sound_effect' => 'Lafal Vokal I', 'speech_text' => 'Vokal I! Tarik senyum manismu: Iiii! Seperti I untuk Ikan berenang.', 'parent_note' => 'Latih bentuk bibir tersenyum saat membunyikan I.', 'sort_order' => 2],
                    ['title' => 'Bunyi Vokal U', 'subtitle' => 'U - U - U (Bibir Membulat)', 'icon_emoji' => '☂️', 'sound_effect' => 'Lafal Vokal U', 'speech_text' => 'Vokal U! Majukan bibirmu: Uuuu! Seperti U untuk Unta dan Udang.', 'parent_note' => 'Latih bentuk bibir membulat ke depan saat membunyikan U.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Bunyi Vokal E', 'subtitle' => 'E - E - E (Elang & Ember)', 'icon_emoji' => '📧', 'sound_effect' => 'Lafal Vokal E', 'speech_text' => 'Vokal E! Bunyikan dengan santai: Eee! Seperti E untuk Ember dan Es Krim.', 'parent_note' => 'Beri contoh kata dengan vokal E terbuka dan tertutup.', 'sort_order' => 1],
                    ['title' => 'Bunyi Vokal O', 'subtitle' => 'O - O - O (Lingkaran Bulat)', 'icon_emoji' => '⭕', 'sound_effect' => 'Lafal Vokal O', 'speech_text' => 'Vokal O! Bulatkan mulutmu: Oooo! Seperti O untuk Obat dan Orang.', 'parent_note' => 'Ajak anak menyatukan kelima vokal: A - I - U - E - O.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Rangkaian Vokal AIUEO', 'subtitle' => 'Kombinasi 5 Huruf Vokal', 'icon_emoji' => '🎶', 'sound_effect' => 'Lagu Vokal Ceria', 'speech_text' => 'A - I - U - E - O! Hebat sekali! Kelima huruf vokal ini adalah kunci membaca lancar!', 'parent_note' => 'Nyanyikan irama AIUEO bersama anak secara berirama.', 'sort_order' => 1],
                ],
            ],

            'dua-suku-kata' => [
                1 => [
                    ['title' => 'Membaca: Bo - la', 'subtitle' => 'B-O Bo, L-A La = Bo-la', 'icon_emoji' => '⚽', 'sound_effect' => 'Tendangan Bola Gol!', 'speech_text' => 'Bo-la! B-O Bo, L-A La, dibaca Bola! Bola bundar untuk bermain bola.', 'parent_note' => 'Tepuk tangan dua kali sesuai ritme suku kata Bo-la.', 'sort_order' => 1],
                    ['title' => 'Membaca: Bu - ku', 'subtitle' => 'B-U Bu, K-U Ku = Bu-ku', 'icon_emoji' => '📖', 'sound_effect' => 'Halaman Buku Berbisik', 'speech_text' => 'Bu-ku! B-U Bu, K-U Ku, dibaca Buku! Buku sumber ilmu.', 'parent_note' => 'Tunjuk tulisan Bu-ku huruf per huruf di layar.', 'sort_order' => 2],
                    ['title' => 'Membaca: Ku - da', 'subtitle' => 'K-U Ku, D-A Da = Ku-da', 'icon_emoji' => '🐎', 'sound_effect' => 'Lari Kuda Tuk-tik-tak', 'speech_text' => 'Ku-da! K-U Ku, D-A Da, dibaca Kuda! Kuda berlari kencang.', 'parent_note' => 'Bunyikan tuk-tik-tak langkah kuda bersama anak.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Membaca: Ma - ta', 'subtitle' => 'M-A Ma, T-A Ta = Ma-ta', 'icon_emoji' => '👁️', 'sound_effect' => 'Kedipan Mata Ceria', 'speech_text' => 'Ma-ta! M-A Ma, T-A Ta, dibaca Mata! Mata untuk melihat.', 'parent_note' => 'Tunjuk mata sambil mengeja Ma-ta.', 'sort_order' => 1],
                    ['title' => 'Membaca: Sa - pi', 'subtitle' => 'S-A Sa, P-I Pi = Sa-pi', 'icon_emoji' => '🐄', 'sound_effect' => 'Mooo Suara Sapi', 'speech_text' => 'Sa-pi! S-A Sa, P-I Pi, dibaca Sapi! Sapi menghasilkan susu sehat.', 'parent_note' => 'Tirukan suara Moo sapi bersama anak.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Membaca: Ro - ti', 'subtitle' => 'R-O Ro, T-I Ti = Ro-ti', 'icon_emoji' => '🍞', 'sound_effect' => 'Harum Roti Hangat', 'speech_text' => 'Ro-ti! R-O Ro, T-I Ti, dibaca Roti! Roti manis bekal sarapan.', 'parent_note' => 'Minta anak membaca tulisan Roti secara mandiri.', 'sort_order' => 1],
                ],
            ],

            'tiga-suku-kata' => [
                1 => [
                    ['title' => 'Membaca: Se - pe - da', 'subtitle' => 'Se - Pe - Da (3 Suku Kata)', 'icon_emoji' => '🚲', 'sound_effect' => 'Kring-kring Sepeda', 'speech_text' => 'Se-pe-da! S-E Se, P-E Pe, D-A Da, dibaca Sepeda!', 'parent_note' => 'Tepuk tangan 3 kali: Se - pe - da.', 'sort_order' => 1],
                    ['title' => 'Membaca: Ke - la - pa', 'subtitle' => 'Ke - La - Pa (3 Suku Kata)', 'icon_emoji' => '🥥', 'sound_effect' => 'Jatuh Kelapa Puk!', 'speech_text' => 'Ke-la-pa! K-E Ke, L-A La, P-A Pa, dibaca Kelapa! Pohon kelapa tinggi menjulang.', 'parent_note' => 'Gambarkan pohon kelapa dan hitung 3 suku katanya.', 'sort_order' => 2],
                ],
                2 => [
                    ['title' => 'Membaca: Ce - la - na', 'subtitle' => 'Ce - La - Na (3 Suku Kata)', 'icon_emoji' => '👖', 'sound_effect' => 'Kancing Celana Ceklek', 'speech_text' => 'Ce-la-na! C-E Ce, L-A La, N-A Na, dibaca Celana!', 'parent_note' => 'Tunjukkan celana yang sedang dipakai anak sambil mengeja.', 'sort_order' => 1],
                    ['title' => 'Membaca: Gu - ri - ta', 'subtitle' => 'Gu - Ri - Ta (3 Suku Kata)', 'icon_emoji' => '🐙', 'sound_effect' => 'Kecipak Tentakel Gurita', 'speech_text' => 'Gu-ri-ta! G-U Gu, R-I Ri, T-A Ta, dibaca Gurita! Gurita memiliki delapan tentakel.', 'parent_note' => 'Hitung delapan tentakel gurita bersama anak.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Membaca: Se - pa - tu', 'subtitle' => 'Se - Pa - Tu (3 Suku Kata)', 'icon_emoji' => '👟', 'sound_effect' => 'Tap-tap Langkah Sepatu', 'speech_text' => 'Se-pa-tu! S-E Se, P-A Pa, T-U Tu, dibaca Sepatu!', 'parent_note' => 'Apresiasi anak yang berhasil membaca kata 3 suku kata.', 'sort_order' => 1],
                ],
            ],

            'akhiran-konsonan' => [
                1 => [
                    ['title' => 'Membaca: Ru - mah', 'subtitle' => 'Berakhiran Huruf H', 'icon_emoji' => '🏠', 'sound_effect' => 'Buka Pintu Rumah Tok-tok', 'speech_text' => 'Ru-mah! R-U Ru, M-A-H Mah, dibaca Rumah! Tempat tinggal kita yang nyaman.', 'parent_note' => 'Perdengarkan desah halus bunyi akhiran H: Mah.', 'sort_order' => 1],
                    ['title' => 'Membaca: A - yam', 'subtitle' => 'Berakhiran Huruf M', 'icon_emoji' => '🐔', 'sound_effect' => 'Kukuruyuk Suara Ayam', 'speech_text' => 'A-yam! A, Y-A-M Yam, dibaca Ayam! Ayam berkokok di pagi hari.', 'parent_note' => 'Rapatkan bibir saat membunyikan akhiran M: Yam.', 'sort_order' => 2],
                ],
                2 => [
                    ['title' => 'Membaca: I - kan', 'subtitle' => 'Berakhiran Huruf N', 'icon_emoji' => '🐟', 'sound_effect' => 'Kecipak Air Ikan', 'speech_text' => 'I-kan! I, K-A-N Kan, dibaca Ikan! Ikan berenang lincah di dalam kolam.', 'parent_note' => 'Sentuhkan ujung lidah ke langit-langit atas untuk bunyi akhiran N.', 'sort_order' => 1],
                    ['title' => 'Membaca: Bu - rung', 'subtitle' => 'Berakhiran Huruf NG', 'icon_emoji' => '🐦', 'sound_effect' => 'Kicau Burung Pagi', 'speech_text' => 'Bu-rung! B-U Bu, R-U-N-G Rung, dibaca Burung! Burung berkicau merdu di dahan.', 'parent_note' => 'Latih dengung hidung saat membunyikan akhiran NG: Rung.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => 'Membaca: Po - hon', 'subtitle' => 'Berakhiran Huruf N', 'icon_emoji' => '🌳', 'sound_effect' => 'Gesekan Daun Rindang', 'speech_text' => 'Po-hon! P-O Po, H-O-N Hon, dibaca Pohon! Pohon rindang tempat berteduh sejuk.', 'parent_note' => 'Tunjukkan daun dan batang pohon di luar rumah.', 'sort_order' => 1],
                ],
            ],

            'cerita-pendek' => [
                1 => [
                    ['title' => 'Cerita: Budi Suka Apel', 'subtitle' => 'Bu-di su-ka ma-kan a-pel', 'icon_emoji' => '🍎', 'sound_effect' => 'Lonceng Cerita Ceria', 'speech_text' => 'Budi suka makan apel merah. Apel merah rasanya manis dan segar!', 'parent_note' => 'Minta anak menunjuk kata demi kata yang dibacakan.', 'sort_order' => 1],
                ],
                2 => [
                    ['title' => 'Cerita: Kucing Minum Susu', 'subtitle' => 'Ku-cing mi-num su-su pu-tih', 'icon_emoji' => '🥛', 'sound_effect' => 'Kecipak Minum Susu & Meong', 'speech_text' => 'Kucing putih minum susu hangat. Kucing kenyang lalu tidur nyenyak.', 'parent_note' => 'Tanyakan apa yang diminum kucing dalam cerita.', 'sort_order' => 1],
                ],
                3 => [
                    ['title' => 'Cerita: Burung Terbang Tinggi', 'subtitle' => 'Bu-rung ter-bang di a-tas a-wan', 'icon_emoji' => '🕊️', 'sound_effect' => 'Angin Semilir Awan Biru', 'speech_text' => 'Burung kecil terbang tinggi di langit biru. Burung hinggap di ranting pohon sambil bernyanyi.', 'parent_note' => 'Ajak anak menceritakan kembali isi cerita dengan bahasanya sendiri.', 'sort_order' => 1],
                ],
            ],

            // =========================================================================
            // PILAR 3: ZONA BELAJAR MENGHITUNG
            // =========================================================================
            'membilang' => [
                1 => [
                    ['title' => 'Membilang 1 Balon', 'subtitle' => 'Ada 1 (Satu) Balon Merah', 'icon_emoji' => '🎈', 'sound_effect' => 'Ting Balon Melayang', 'speech_text' => 'Satu balon merah melayang tinggi di angkasa!', 'parent_note' => 'Tunjuk balon dan katakan "Satu".', 'sort_order' => 1],
                    ['title' => 'Membilang 2 Bintang', 'subtitle' => 'Ada 2 (Dua) Bintang Emas', 'icon_emoji' => '⭐', 'sound_effect' => 'Kilau 2 Bintang', 'speech_text' => 'Satu, dua! Ada dua bintang emas yang berkilau indah.', 'parent_note' => 'Ajak anak menyentuh kedua bintang sambil berhitung.', 'sort_order' => 2],
                    ['title' => 'Membilang 3 Apel', 'subtitle' => 'Ada 3 (Tiga) Apel Merah', 'icon_emoji' => '🍎', 'sound_effect' => 'Kriuk 3 Apel Segar', 'speech_text' => 'Satu, dua, tiga! Tiga buah apel segar di dalam keranjang.', 'parent_note' => 'Hitung apel satu per satu dari kiri ke kanan.', 'sort_order' => 3],
                ],
                2 => [
                    ['title' => 'Membilang 5 Ikan', 'subtitle' => 'Ada 5 (Lima) Ikan Berenang', 'icon_emoji' => '🐟', 'sound_effect' => 'Kecipak 5 Ikan Lincah', 'speech_text' => 'Satu, dua, tiga, empat, lima! Lima ikan berenang lincah di kolam!', 'parent_note' => 'Bantu anak menghitung sampai lima dengan jarinya.', 'sort_order' => 1],
                ],
                3 => [
                    ['title' => 'Membilang 10 Bunga Ceria', 'subtitle' => 'Ada 10 (Sepuluh) Bunga Indah', 'icon_emoji' => '🌸', 'sound_effect' => 'Semarak 10 Bunga', 'speech_text' => 'Mari berhitung bersama sampai sepuluh! Satu, dua, tiga, empat, lima, enam, tujuh, delapan, sembilan, sepuluh!', 'parent_note' => 'Tepuk tangan meriah saat anak berhasil membilang 1 sampai 10.', 'sort_order' => 1],
                ],
            ],

            'perbandingan' => [
                1 => [
                    ['title' => 'Gajah Besar vs Tikus Kecil', 'subtitle' => 'Perbandingan Ukuran', 'icon_emoji' => '🐘', 'sound_effect' => 'Langkah Berat Gajah vs Cicit Tikus', 'speech_text' => 'Gajah berukuran BESAR, sedangkan tikus berukuran KECIL.', 'parent_note' => 'Rentangkan tangan untuk ukuran BESAR dan rapatkan tangan untuk KECIL.', 'sort_order' => 1],
                    ['title' => 'Banyak Apel vs Sedikit Apel', 'subtitle' => 'Perbandingan Kuantitas', 'icon_emoji' => '🍎', 'sound_effect' => 'Timbangan Seimbang', 'speech_text' => 'Keranjang kiri berisi BANYAK apel, keranjang kanan berisi SEDIKIT apel.', 'parent_note' => 'Tanyakan kelompok mana yang memiliki jumlah lebih banyak.', 'sort_order' => 2],
                ],
                2 => [
                    ['title' => 'Jerapah Tinggi vs Kelinci Pendek', 'subtitle' => 'Perbandingan Tinggi', 'icon_emoji' => '🦒', 'sound_effect' => 'Ukuran Tinggi Pohon', 'speech_text' => 'Jerapah memiliki tubuh TINGGI, kelinci memiliki tubuh PENDEK.', 'parent_note' => 'Jinjitkan kaki untuk TINGGI dan jongkok untuk PENDEK.', 'sort_order' => 1],
                ],
                3 => [
                    ['title' => 'Pohon Lebar vs Bunga Ramping', 'subtitle' => 'Perbandingan Dimensi', 'icon_emoji' => '🌳', 'sound_effect' => 'Pohon Raksasa Megah', 'speech_text' => 'Batang pohon sangat TEBAL dan LEBAR, tangkai bunga sangat RAMPING.', 'parent_note' => 'Ajak anak mengamati benda tebal dan tipis di sekitarnya.', 'sort_order' => 1],
                ],
            ],

            'penjumlahan' => [
                1 => [
                    ['title' => '1 Apel + 1 Apel = 2 Apel', 'subtitle' => 'Penjumlahan Dasar', 'icon_emoji' => '🍎', 'sound_effect' => 'Ting Tambah Apel', 'speech_text' => 'Satu apel ditambah satu apel sama dengan DUA apel!', 'parent_note' => 'Gunakan 2 benda nyata di meja untuk mendemonstrasikan penjumlahan.', 'sort_order' => 1],
                    ['title' => '2 Balon + 1 Balon = 3 Balon', 'subtitle' => 'Penjumlahan Balon', 'icon_emoji' => '🎈', 'sound_effect' => 'Balon Bertambah Ceria', 'speech_text' => 'Dua balon ditambah satu balon sama dengan TIGA balon!', 'parent_note' => 'Hitung total balon setelah digabungkan.', 'sort_order' => 2],
                ],
                2 => [
                    ['title' => '2 Kucing + 2 Kucing = 4 Kucing', 'subtitle' => 'Penjumlahan Satwa', 'icon_emoji' => '🐱', 'sound_effect' => 'Meong 4 Kucing', 'speech_text' => 'Dua anak kucing bermain dengan dua anak kucing lainnya, sekarang ada EMPAT anak kucing!', 'parent_note' => 'Bantu anak menghitung 2 + 2 menggunakan jari tangan.', 'sort_order' => 1],
                    ['title' => '3 Bintang + 2 Bintang = 5 Bintang', 'subtitle' => 'Penjumlahan Bintang', 'icon_emoji' => '⭐', 'sound_effect' => 'Kilau 5 Bintang Lengkap', 'speech_text' => 'Tiga bintang ditambah dua bintang sama dengan LIMA bintang emas!', 'parent_note' => 'Gunakan jari tangan untuk menghitung 3 + 2 = 5.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => '5 Donat + 5 Donat = 10 Donat', 'subtitle' => 'Penjumlahan Genap 10', 'icon_emoji' => '🍩', 'sound_effect' => 'Kotak Donat Penuh!', 'speech_text' => 'Lima donat manis ditambah lima donat lezat sama dengan SEPULUH donat dalam satu kotak!', 'parent_note' => 'Buka kedua telapak tangan anak (5 + 5 = 10).', 'sort_order' => 1],
                ],
            ],

            'pengurangan' => [
                1 => [
                    ['title' => '3 Balon - 1 Terbang = 2 Balon', 'subtitle' => 'Pengurangan Balon', 'icon_emoji' => '🎈', 'sound_effect' => 'Wuuush Balon Terbang', 'speech_text' => 'Ada tiga balon, satu balon terbang lepas. Sisa balon tinggal DUA balon!', 'parent_note' => 'Tunjukkan 3 jari lalu lipat 1 jari untuk melihat sisanya.', 'sort_order' => 1],
                    ['title' => '2 Apel - 1 Dimakan = 1 Apel', 'subtitle' => 'Pengurangan Apel', 'icon_emoji' => '🍎', 'sound_effect' => 'Nyam Apel Dimakan', 'speech_text' => 'Ada dua apel, adik memakan satu apel. Sisa apel di meja tinggal SATU apel!', 'parent_note' => 'Jelaskan konsep berkurang ketika benda diambil atau dimakan.', 'sort_order' => 2],
                ],
                2 => [
                    ['title' => '4 Donat - 1 Dimakan = 3 Donat', 'subtitle' => 'Pengurangan Donat', 'icon_emoji' => '🍩', 'sound_effect' => 'Kriuk Donat Cokelat', 'speech_text' => 'Empat donat manis dimakan satu, sisa donat tinggal TIGA donat!', 'parent_note' => 'Hitung mundur bersama anak: 4 dikurang 1 = 3.', 'sort_order' => 1],
                    ['title' => '5 Ikan - 2 Berenang Pergi = 3 Ikan', 'subtitle' => 'Pengurangan Ikan', 'icon_emoji' => '🐟', 'sound_effect' => 'Kecipak Ikan Pergi', 'speech_text' => 'Lima ikan di akuarium, dua berenang ke kolam lain. Sisa ikan tinggal TIGA!', 'parent_note' => 'Gunakan 5 jari, sembunyikan 2 jari.', 'sort_order' => 2],
                ],
                3 => [
                    ['title' => '10 Kue - 5 Dibagikan = 5 Kue', 'subtitle' => 'Berbagi Kue Bersama', 'icon_emoji' => '🧁', 'sound_effect' => 'Apresiasi Berbagi Ceria', 'speech_text' => 'Sepuluh kue lezat dibagikan lima ke teman baik, kita masih punya LIMA kue untuk dinikmati bersama!', 'parent_note' => 'Ajarkan nilai indah berbagi kepada sesama teman.', 'sort_order' => 1],
                ],
            ],

            'pola-logika' => [
                1 => [
                    ['title' => 'Pola Warna: Merah - Biru - Merah - ... ?', 'subtitle' => 'Pola Keberulangan Warna', 'icon_emoji' => '🔴', 'sound_effect' => 'Ting Tebakan Tepat!', 'speech_text' => 'Lihat polanya: Merah, Biru, Merah... setelah ini warna apa ya? Betul, warna BIRU!', 'parent_note' => 'Ajak anak menyebutkan warna secara bergantian.', 'sort_order' => 1],
                ],
                2 => [
                    ['title' => 'Pola Bentuk: Lingkaran - Kotak - Lingkaran - ... ?', 'subtitle' => 'Pola Geometri Cerdas', 'icon_emoji' => '⭕', 'sound_effect' => 'Pola Bentuk Pas', 'speech_text' => 'Lingkaran, Kotak, Lingkaran... selanjutnya adalah KOTAK!', 'parent_note' => 'Gambarkan pola bentuk di kertas bersama anak.', 'sort_order' => 1],
                ],
                3 => [
                    ['title' => 'Pola Satwa: Kucing - Bebek - Kucing - ... ?', 'subtitle' => 'Pola Hewan Rimba', 'icon_emoji' => '🐱', 'sound_effect' => 'Meong Kwek-kwek', 'speech_text' => 'Meong, Kwek-kwek, Meong... suara berikutnya adalah KWEK-KWEK BEBEK!', 'parent_note' => 'Tirukan suara hewan sesuai urutan pola.', 'sort_order' => 1],
                ],
            ],
        ];

        foreach ($materialBank as $catSlug => $levelData) {
            $cat = Category::where('slug', $catSlug)->first();
            if (! $cat) {
                continue;
            }

            foreach ($levelData as $levelNumber => $cards) {
                $lvl = LearningLevel::where('category_id', $cat->id)->where('level_number', $levelNumber)->first();
                if (! $lvl) {
                    continue;
                }

                foreach ($cards as $card) {
                    Material::updateOrCreate(
                        [
                            'learning_level_id' => $lvl->id,
                            'title' => $card['title'],
                        ],
                        [
                            'subtitle' => $card['subtitle'],
                            'icon_emoji' => $card['icon_emoji'],
                            'sound_effect' => $card['sound_effect'],
                            'speech_text' => $card['speech_text'],
                            'parent_note' => $card['parent_note'],
                            'sort_order' => $card['sort_order'],
                        ]
                    );
                }
            }
        }
    }
}

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
                    ['title' => 'Huruf D untuk Domba', 'subtitle' => 'D - D - Domba', 'icon_emoji' => '🐑', 'sound_effect' => 'Mbeee Suara Domba', 'speech_text' => 'Huruf D! D untuk Domba berbulu putih tebal dan lembut.', 'parent_note' => 'Tanyakan pada anak apa warna bulu domba.', 'sort_order' => 4],
                    ['title' => 'Huruf E untuk Elang', 'subtitle' => 'E - E - Elang', 'icon_emoji' => '🦅', 'sound_effect' => 'Kecipak Sayap Elang', 'speech_text' => 'Huruf E! E untuk burung Elang yang terbang gagah di langit tinggi.', 'parent_note' => 'Ajak anak merentangkan tangan seperti sayap burung elang.', 'sort_order' => 5],
                    ['title' => 'Huruf F untuk Flamingo', 'subtitle' => 'F - F - Flamingo', 'icon_emoji' => '🦩', 'sound_effect' => 'Kepakan Sayap Anggun', 'speech_text' => 'Huruf F! F untuk burung Flamingo berbulu merah muda yang cantik.', 'parent_note' => 'Ajak anak berdiri dengan satu kaki seperti burung flamingo.', 'sort_order' => 6],
                    ['title' => 'Huruf G untuk Gajah', 'subtitle' => 'G - G - Gajah', 'icon_emoji' => '🐘', 'sound_effect' => 'Terompet Suara Belalai', 'speech_text' => 'Huruf G! G untuk Gajah besar dengan belalai panjang dan telinga lebar.', 'parent_note' => 'Ajak anak mengayunkan lengan seperti belalai gajah.', 'sort_order' => 7],
                    ['title' => 'Huruf H untuk Harimau', 'subtitle' => 'H - H - Harimau', 'icon_emoji' => '🐯', 'sound_effect' => 'Auman Gagah Harimau', 'speech_text' => 'Huruf H! H untuk Harimau loreng yang lincah dan berani.', 'parent_note' => 'Ajak anak menirukan langkah gagah harimau.', 'sort_order' => 8],
                    ['title' => 'Huruf I untuk Ikan', 'subtitle' => 'I - I - Ikan', 'icon_emoji' => '🐟', 'sound_effect' => 'Kecipak Air Jernih', 'speech_text' => 'Huruf I! I untuk Ikan yang berenang lincah di air jernih.', 'parent_note' => 'Ajak anak merapatkan kedua telapak tangan lalu meliuk-liuk seperti ikan berenang.', 'sort_order' => 9],
                ],
                2 => [
                    ['title' => 'Huruf J untuk Jerapah', 'subtitle' => 'J - J - Jerapah', 'icon_emoji' => '🦒', 'sound_effect' => 'Langkah Anggun Jerapah', 'speech_text' => 'Huruf J! J untuk Jerapah tinggi dengan leher panjang pemakan daun.', 'parent_note' => 'Ajak anak menjulurkan leher dan tangan ke atas menirukan jerapah.', 'sort_order' => 1],
                    ['title' => 'Huruf K untuk Kucing', 'subtitle' => 'K - K - Kucing', 'icon_emoji' => '🐱', 'sound_effect' => 'Meong-meong Manja', 'speech_text' => 'Huruf K! K untuk Kucing imut berbulu halus dan berkumis lucu.', 'parent_note' => 'Minta anak menuliskan huruf K di udara dengan telunjuknya.', 'sort_order' => 2],
                    ['title' => 'Huruf L untuk Lemon', 'subtitle' => 'L - L - Lemon', 'icon_emoji' => '🍋', 'sound_effect' => 'Segar Harum Lemon Kuning', 'speech_text' => 'Huruf L! L untuk buah Lemon kuning ceria yang kaya vitamin C.', 'parent_note' => 'Tanyakan pada anak bagaimana rasa buah lemon segar.', 'sort_order' => 3],
                    ['title' => 'Huruf M untuk Monyet', 'subtitle' => 'M - M - Monyet', 'icon_emoji' => '🐒', 'sound_effect' => 'Uu-aa-aa Ceria', 'speech_text' => 'Huruf M! M untuk Monyet pintar yang lincah bergelantungan di pohon.', 'parent_note' => 'Ajak anak menirukan suara ceria monyet uu-aa-aa.', 'sort_order' => 4],
                    ['title' => 'Huruf N untuk Nanas', 'subtitle' => 'N - N - Nanas', 'icon_emoji' => '🍍', 'sound_effect' => 'Manis Asam Buah Nanas', 'speech_text' => 'Huruf N! N untuk buah Nanas bersisik emas dengan mahkota daun hijau.', 'parent_note' => 'Tunjukkan bentuk mahkota daun di atas buah nanas.', 'sort_order' => 5],
                    ['title' => 'Huruf O untuk Orangutan', 'subtitle' => 'O - O - Orangutan', 'icon_emoji' => '🦧', 'sound_effect' => 'Suara Sahabat Rimba', 'speech_text' => 'Huruf O! O untuk Orangutan pintar yang menjaga hutan tropis Indonesia.', 'parent_note' => 'Ajak anak membuat lingkaran bulat huruf O dengan kedua tangannya.', 'sort_order' => 6],
                    ['title' => 'Huruf P untuk Penguin', 'subtitle' => 'P - P - Penguin', 'icon_emoji' => '🐧', 'sound_effect' => 'Langkah Lucu Penguin Salju', 'speech_text' => 'Huruf P! P untuk burung Penguin lucu yang pandai berenang di kutub es.', 'parent_note' => 'Ajak anak berjalan melangkah goyang seperti penguin.', 'sort_order' => 7],
                    ['title' => 'Huruf Q untuk Quran', 'subtitle' => 'Q - Q - Quran', 'icon_emoji' => '📖', 'sound_effect' => 'Lantunan Ayat Mulia', 'speech_text' => 'Huruf Q! Q untuk kitab suci Quran yang dibaca dengan tartil dan merdu.', 'parent_note' => 'Ajak anak melafalkan bunyi Qaf / Q dengan fasih.', 'sort_order' => 8],
                    ['title' => 'Huruf R untuk Rusa', 'subtitle' => 'R - R - Rusa', 'icon_emoji' => '🦌', 'sound_effect' => 'Lari Cepat Tanduk Indah', 'speech_text' => 'Huruf R! R untuk Rusa lincah dengan tanduk indah yang anggun.', 'parent_note' => 'Ajak anak menaruh dua tangan di kepala menyerupai tanduk rusa.', 'sort_order' => 9],
                ],
                3 => [
                    ['title' => 'Huruf S untuk Singa', 'subtitle' => 'S - S - Singa', 'icon_emoji' => '🦁', 'sound_effect' => 'Roaaar Auman Gagah', 'speech_text' => 'Huruf S! S untuk Singa si Raja Hutan yang berwibawa dan kuat.', 'parent_note' => 'Latih pelafalan bunyi desis huruf S bersama anak.', 'sort_order' => 1],
                    ['title' => 'Huruf T untuk Tomat', 'subtitle' => 'T - T - Tomat', 'icon_emoji' => '🍅', 'sound_effect' => 'Segar Merah Buah Tomat', 'speech_text' => 'Huruf T! T untuk buah Tomat merah bundar yang lezat dan menyehatkan.', 'parent_note' => 'Tanyakan pada anak masakan apa saja yang menggunakan tomat segar.', 'sort_order' => 2],
                    ['title' => 'Huruf U untuk Unta', 'subtitle' => 'U - U - Unta', 'icon_emoji' => '🐪', 'sound_effect' => 'Langkah Kuat Padang Pasir', 'speech_text' => 'Huruf U! U untuk Unta tangguh dengan punuk penyimpan cadangan energi.', 'parent_note' => 'Ajak anak membulatkan bibir saat melafalkan huruf U.', 'sort_order' => 3],
                    ['title' => 'Huruf V untuk Vas Bunga', 'subtitle' => 'V - V - Vas Bunga', 'icon_emoji' => '🏺', 'sound_effect' => 'Indah Semerbak Bunga', 'speech_text' => 'Huruf V! V untuk Vas tempat menaruh bunga warna-warni yang harum.', 'parent_note' => 'Ajak anak membentuk simbol V dengan dua jari (jari telunjuk dan tengah).', 'sort_order' => 4],
                    ['title' => 'Huruf W untuk Wortel', 'subtitle' => 'W - W - Wortel', 'icon_emoji' => '🥕', 'sound_effect' => 'Kriuk Renyah Sayur Wortel', 'speech_text' => 'Huruf W! W untuk sayur Wortel oranye manis makanan kesukaan kelinci.', 'parent_note' => 'Jelaskan manfaat wortel yang membuat mata sehat dan jernih.', 'sort_order' => 5],
                    ['title' => 'Huruf X untuk Xilofon', 'subtitle' => 'X - X - Xilofon', 'icon_emoji' => '🎹', 'sound_effect' => 'Ting-tong Irama Xilofon', 'speech_text' => 'Huruf X! X untuk alat musik Xilofon yang menghasilkan nada-nada riang.', 'parent_note' => 'Ajak anak menyilangkan kedua telunjuk membentuk huruf X.', 'sort_order' => 6],
                    ['title' => 'Huruf Y untuk Yoyo', 'subtitle' => 'Y - Y - Yoyo', 'icon_emoji' => '🪀', 'sound_effect' => 'Putaran Cepat Tali Yoyo', 'speech_text' => 'Huruf Y! Y untuk mainan Yoyo bundar yang bisa berputar naik turun.', 'parent_note' => 'Ajak anak menirukan gerakan tangan melempar dan menarik yoyo.', 'sort_order' => 7],
                    ['title' => 'Huruf Z untuk Zebra', 'subtitle' => 'Z - Z - Zebra', 'icon_emoji' => '🦓', 'sound_effect' => 'Derap Langkah Belang', 'speech_text' => 'Huruf Z! Z untuk hewan Zebra unik dengan corak garis hitam putih.', 'parent_note' => 'Ajak anak menarik garis zigzag huruf Z di atas meja.', 'sort_order' => 8],
                ],
            ],

            'angka' => [
                1 => [
                    ['title' => 'Angka 1 (Satu)', 'subtitle' => 'Satu Matahari Cerah ☀️', 'icon_emoji' => '1️⃣', 'sound_effect' => 'Ting! Angka Satu', 'speech_text' => 'Satu! Seperti satu matahari cerah yang menyinari bumi di siang hari.', 'parent_note' => 'Minta anak mengangkat satu jari telunjuknya ke atas.', 'sort_order' => 1],
                    ['title' => 'Angka 2 (Dua)', 'subtitle' => 'Dua Bebek Berenang 🦆🦆', 'icon_emoji' => '2️⃣', 'sound_effect' => 'Kwek-kwek Dua Bebek', 'speech_text' => 'Dua! Seperti dua mata kita yang indah untuk melihat dunia.', 'parent_note' => 'Tunjukkan dua mata dan dua telinga anak sambil berhitung.', 'sort_order' => 2],
                    ['title' => 'Angka 3 (Tiga)', 'subtitle' => 'Tiga Bintang Emas ⭐⭐⭐', 'icon_emoji' => '3️⃣', 'sound_effect' => 'Gemilau Tiga Bintang', 'speech_text' => 'Tiga! Tiga bintang bersinar terang di malam yang indah.', 'parent_note' => 'Ajak anak berhitung 1, 2, 3 sambil bertepuk tangan.', 'sort_order' => 3],
                    ['title' => 'Angka 4 (Empat)', 'subtitle' => 'Empat Roda Mobil 🚗', 'icon_emoji' => '4️⃣', 'sound_effect' => 'Brum-brum Empat Roda', 'speech_text' => 'Empat! Seperti empat roda mobil yang melaju di jalan raya.', 'parent_note' => 'Ajak anak menghitung 4 kaki meja atau kursi di rumah.', 'sort_order' => 4],
                    ['title' => 'Angka 5 (Lima)', 'subtitle' => 'Lima Jari Tangan 🖐️', 'icon_emoji' => '5️⃣', 'sound_effect' => 'Tepuk Tangan 5 Jari', 'speech_text' => 'Lima! Ada lima jari di tangan kanan kita yang hebat.', 'parent_note' => 'Minta anak merentangkan lima jari tangannya.', 'sort_order' => 5],
                    ['title' => 'Angka 6 (Enam)', 'subtitle' => 'Enam Kaki Semut 🐜', 'icon_emoji' => '6️⃣', 'sound_effect' => 'Derit Langkah Enam Kaki', 'speech_text' => 'Enam! Seperti enam kaki kecil semut yang rajin bekerja sama.', 'parent_note' => 'Ajak anak menghitung 6 krayon atau pensil warna.', 'sort_order' => 6],
                ],
                2 => [
                    ['title' => 'Angka 7 (Tujuh)', 'subtitle' => 'Tujuh Hari Seminggu 📅', 'icon_emoji' => '7️⃣', 'sound_effect' => 'Tujuh Hari Ceria', 'speech_text' => 'Tujuh! Ada tujuh hari dalam seminggu: Senin sampai Minggu!', 'parent_note' => 'Ajak anak menyanyikan lagu nama-nama hari.', 'sort_order' => 1],
                    ['title' => 'Angka 8 (Delapan)', 'subtitle' => 'Delapan Kaki Gurita 🐙', 'icon_emoji' => '8️⃣', 'sound_effect' => 'Delapan Tentakel Lincah', 'speech_text' => 'Delapan! Seperti delapan tentakel gurita yang berenang di lautan.', 'parent_note' => 'Tunjukkan bentuk angka 8 yang seperti dua lingkaran bertumpuk.', 'sort_order' => 2],
                    ['title' => 'Angka 9 (Sembilan)', 'subtitle' => 'Sembilan Planet Angkasa 🪐', 'icon_emoji' => '9️⃣', 'sound_effect' => 'Bintang Gemintang Sembilan', 'speech_text' => 'Sembilan! Angka sembilan adalah angka satuan tertinggi sebelum sepuluh.', 'parent_note' => 'Ajak anak berhitung dari 1 sampai 9 dengan jari tangan.', 'sort_order' => 3],
                    ['title' => 'Angka 10 (Sepuluh)', 'subtitle' => 'Sepuluh Jari Lengkap 👐', 'icon_emoji' => '🔟', 'sound_effect' => 'Tepuk Sorak Hore!', 'speech_text' => 'Sepuluh! Gabungan sepuluh jari tangan kita untuk saling tolong menolong.', 'parent_note' => 'Ajak anak membuka kedua telapak tangan menunjukkan 10 jari.', 'sort_order' => 4],
                    ['title' => 'Angka 11 (Sebelas)', 'subtitle' => 'Sebelas Apel Merah 🍎', 'icon_emoji' => '1️⃣1️⃣', 'sound_effect' => 'Sebelas Buah Segar', 'speech_text' => 'Sebelas! Angka sepuluh ditambah satu menjadi sebelas.', 'parent_note' => 'Jelaskan angka 11 terdiri dari angka 1 dan angka 1 berdampingan.', 'sort_order' => 5],
                    ['title' => 'Angka 12 (Dua Belas)', 'subtitle' => 'Dua Belas Bulan Setahun 🗓️', 'icon_emoji' => '1️⃣2️⃣', 'sound_effect' => 'Dua Belas Bulan Indah', 'speech_text' => 'Dua Belas! Ada dua belas bulan dalam satu tahun kalender.', 'parent_note' => 'Jelaskan bahwa 12 buah juga biasa disebut satu lusin.', 'sort_order' => 6],
                    ['title' => 'Angka 13 (Tiga Belas)', 'subtitle' => 'Tiga Belas Balon Warna 🎈', 'icon_emoji' => '1️⃣3️⃣', 'sound_effect' => 'Terbang Tinggi Tiga Belas', 'speech_text' => 'Tiga Belas! Angka belasan yang terdiri dari angka 1 dan angka 3.', 'parent_note' => 'Ajak anak menghitung maju dari 10, 11, 12, hingga 13.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Angka 14 (Empat Belas)', 'subtitle' => 'Empat Belas Ceri Manis 🍒', 'icon_emoji' => '1️⃣4️⃣', 'sound_effect' => 'Manis Segar Empat Belas', 'speech_text' => 'Empat Belas! Angka belasan yang terdiri dari angka 1 dan angka 4.', 'parent_note' => 'Latih anak mengenali gabungan angka 1 dan 4.', 'sort_order' => 1],
                    ['title' => 'Angka 15 (Lima Belas)', 'subtitle' => 'Lima Belas Ikan Berenang 🐟', 'icon_emoji' => '1️⃣5️⃣', 'sound_effect' => 'Kecipak Lima Belas Ikan', 'speech_text' => 'Lima Belas! Angka belasan yang terdiri dari angka 1 dan angka 5.', 'parent_note' => 'Tunjukkan bahwa 15 adalah pertengahan antara 10 dan 20.', 'sort_order' => 2],
                    ['title' => 'Angka 16 (Enam Belas)', 'subtitle' => 'Enam Belas Strawberry 🍓', 'icon_emoji' => '1️⃣6️⃣', 'sound_effect' => 'Manis Renyah Enam Belas', 'speech_text' => 'Enam Belas! Angka belasan yang terdiri dari angka 1 dan angka 6.', 'parent_note' => 'Ajak anak berhitung cepat dari 11 sampai 16.', 'sort_order' => 3],
                    ['title' => 'Angka 17 (Tujuh Belas)', 'subtitle' => 'Tujuh Belas Bunga Mawar 🌹', 'icon_emoji' => '1️⃣7️⃣', 'sound_effect' => 'Semerbak Tujuh Belas Bunga', 'speech_text' => 'Tujuh Belas! Angka istimewa hari kemerdekaan Indonesia tanggal 17 Agustus.', 'parent_note' => 'Ceritakan tentang hari kemerdekaan Indonesia tanggal 17 Agustus.', 'sort_order' => 4],
                    ['title' => 'Angka 18 (Delapan Belas)', 'subtitle' => 'Delapan Belas Kupu-kupu 🦋', 'icon_emoji' => '1️⃣8️⃣', 'sound_effect' => 'Terbang Anggun Delapan Belas', 'speech_text' => 'Delapan Belas! Angka belasan yang terdiri dari angka 1 dan angka 8.', 'parent_note' => 'Tunjukkan urutan angka 18 setelah angka 17.', 'sort_order' => 5],
                    ['title' => 'Angka 19 (Sembilan Belas)', 'subtitle' => 'Sembilan Belas Bintang Terang ✨', 'icon_emoji' => '1️⃣9️⃣', 'sound_effect' => 'Kemilau Sembilan Belas Bintang', 'speech_text' => 'Sembilan Belas! Angka belasan tertinggi sebelum angka dua puluh.', 'parent_note' => 'Jelaskan angka 19 tinggal selangkah lagi menuju angka 20.', 'sort_order' => 6],
                    ['title' => 'Angka 20 (Dua Puluh)', 'subtitle' => 'Dua Puluh Jari Tangan & Kaki 🦶', 'icon_emoji' => '2️⃣0️⃣', 'sound_effect' => 'Lengkap Dua Puluh Jari', 'speech_text' => 'Dua Puluh! Jumlah lengkap 10 jari tangan ditambah 10 jari kaki kita.', 'parent_note' => 'Apresiasi anak karena telah berhasil menguasai angka 1 sampai 20 dengan hebat!', 'sort_order' => 7],
                ],
            ],

            'hijaiyah' => [
                1 => [
                    ['title' => 'Huruf Alif (ا)', 'subtitle' => 'Alif - Lurus Berdiri Tegak', 'icon_emoji' => 'ا', 'sound_effect' => 'Pelafalan Alif Merdu', 'speech_text' => 'Alif! Huruf hijaiyah pertama yang berdiri lurus tegak.', 'parent_note' => 'Ajak anak berdiri tegak lurus seperti huruf Alif.', 'sort_order' => 1],
                    ['title' => 'Huruf Ba (ب)', 'subtitle' => 'Ba - Titik Satu di Bawah', 'icon_emoji' => 'ب', 'sound_effect' => 'Pelafalan Ba Jelas', 'speech_text' => 'Ba! Berbentuk seperti perahu dengan satu titik mutiara di bawahnya.', 'parent_note' => 'Ingatkan anak posisi titik huruf Ba ada di bawah.', 'sort_order' => 2],
                    ['title' => 'Huruf Ta (ت)', 'subtitle' => 'Ta - Dua Titik di Atas', 'icon_emoji' => 'ت', 'sound_effect' => 'Pelafalan Ta Renyah', 'speech_text' => 'Ta! Seperti perahu tersenyum dengan dua titik ceria di atasnya.', 'parent_note' => 'Tunjukkan bahwa huruf Ta memiliki dua titik di atas.', 'sort_order' => 3],
                    ['title' => 'Huruf Tsa (ث)', 'subtitle' => 'Tsa - Tiga Titik di Atas', 'icon_emoji' => 'ث', 'sound_effect' => 'Pelafalan Tsa Lembut', 'speech_text' => 'Tsa! Ucapkan dengan ujung lidah menyentuh gigi depan: Tsa! Memiliki tiga titik di atas.', 'parent_note' => 'Latih anak menempatkan ujung lidah di antara gigi depan.', 'sort_order' => 4],
                    ['title' => 'Huruf Jim (ج)', 'subtitle' => 'Jim - Titik di Tengah Perut', 'icon_emoji' => 'ج', 'sound_effect' => 'Pelafalan Jim Mantap', 'speech_text' => 'Jim! Memiliki perut buncit dengan satu titik di dalamnya. Jim untuk Jamal (Unta).', 'parent_note' => 'Jelaskan titik Jim berada di dalam lengkungan perutnya.', 'sort_order' => 5],
                    ['title' => 'Huruf Ha (ح)', 'subtitle' => 'Ha - Bersih Tanpa Titik', 'icon_emoji' => 'ح', 'sound_effect' => 'Pelafalan Ha Halus', 'speech_text' => 'Ha! Huruf Ha kecil yang bersih tanpa titik, diucapkan lembut dari tenggorokan.', 'parent_note' => 'Ajak anak melafalkan bunyi Ha dengan hembusan nafas halus.', 'sort_order' => 6],
                    ['title' => 'Huruf Kho (خ)', 'subtitle' => 'Kho - Satu Titik di Atas', 'icon_emoji' => 'خ', 'sound_effect' => 'Pelafalan Kho Mantap', 'speech_text' => 'Kho! Bentuknya melengkung dengan satu titik mahkota di atas kepalanya.', 'parent_note' => 'Tunjukkan bahwa titik huruf Kho berada di atas kepalanya.', 'sort_order' => 7],
                    ['title' => 'Huruf Dal (د)', 'subtitle' => 'Dal - Melengkung Terbuka', 'icon_emoji' => 'د', 'sound_effect' => 'Pelafalan Dal Jelas', 'speech_text' => 'Dal! Huruf yang melengkung membuka ke arah kiri tanpa titik: Diikun (Ayam Jantan).', 'parent_note' => 'Ajak anak membentuk lengkungan huruf Dal dengan jari.', 'sort_order' => 8],
                    ['title' => 'Huruf Dzal (ذ)', 'subtitle' => 'Dzal - Dal dengan Satu Titik', 'icon_emoji' => 'ذ', 'sound_effect' => 'Pelafalan Dzal Ringan', 'speech_text' => 'Dzal! Mirip huruf Dal namun memiliki satu titik mutiara di atasnya: Dzi-bun (Serigala).', 'parent_note' => 'Latih anak mengucapkan Dzal dengan ujung lidah ringan.', 'sort_order' => 9],
                    ['title' => 'Huruf Ro (ر)', 'subtitle' => 'Ro - Meluncur Lembut', 'icon_emoji' => 'ر', 'sound_effect' => 'Pelafalan Ro Bergetar', 'speech_text' => 'Ro! Melengkung meluncur ke bawah seperti papan seluncuran.', 'parent_note' => 'Ajak anak menggerakkan tangan seperti meluncur di seluncuran.', 'sort_order' => 10],
                ],
                2 => [
                    ['title' => 'Huruf Zai (ز)', 'subtitle' => 'Zai - Ro dengan Satu Titik', 'icon_emoji' => 'ز', 'sound_effect' => 'Pelafalan Zai Berdesing', 'speech_text' => 'Zai! Bentuknya persis seperti huruf Ro dengan satu titik di atasnya: Zahrotun (Bunga).', 'parent_note' => 'Tunjukkan letak satu titik di atas huruf Zai.', 'sort_order' => 1],
                    ['title' => 'Huruf Sin (س)', 'subtitle' => 'Sin - Tiga Gigi Rapi', 'icon_emoji' => 'س', 'sound_effect' => 'Pelafalan Sin Berdesis', 'speech_text' => 'Sin! Memiliki tiga lengkungan gigi kecil tanpa titik: Samakun (Ikan).', 'parent_note' => 'Ajak anak menghitung 3 lengkungan gigi pada huruf Sin.', 'sort_order' => 2],
                    ['title' => 'Huruf Syin (ش)', 'subtitle' => 'Syin - Tiga Titik di Atas Gigi', 'icon_emoji' => 'ش', 'sound_effect' => 'Pelafalan Syin Berhembus', 'speech_text' => 'Syin! Seperti huruf Sin namun memiliki tiga titik bintang di atasnya: Syamsun (Matahari).', 'parent_note' => 'Latih hembusan bunyi Syin bersama anak.', 'sort_order' => 3],
                    ['title' => 'Huruf Shod (ص)', 'subtitle' => 'Shod - Lengkungan Tebal', 'icon_emoji' => 'ص', 'sound_effect' => 'Pelafalan Shod Tebal', 'speech_text' => 'Shod! Huruf tebal dengan kepala melingkar dan lengkungan mangkok: Soqrun (Elang).', 'parent_note' => 'Ajak anak melafalkan Shod dengan bibir sedikit membulat tebal.', 'sort_order' => 4],
                    ['title' => 'Huruf Dhod (ض)', 'subtitle' => 'Dhod - Shod dengan Satu Titik', 'icon_emoji' => 'ض', 'sound_effect' => 'Pelafalan Dhod Khas', 'speech_text' => 'Dhod! Huruf istimewa bahasa Arab yang memiliki satu titik di atasnya: Dhifdaun (Katak).', 'parent_note' => 'Jelaskan bahasa Arab dikenal sebagai bahasa Dhod.', 'sort_order' => 5],
                    ['title' => 'Huruf Tho (ط)', 'subtitle' => 'Tho - Tiang Tegak dan Bulat', 'icon_emoji' => 'ط', 'sound_effect' => 'Pelafalan Tho Kuat', 'speech_text' => 'Tho! Memiliki tiang tegak lurus yang menancap di atas lengkungan: Thoo-irotun (Pesawat).', 'parent_note' => 'Tunjukkan bentuk tiang tegak pada huruf Tho.', 'sort_order' => 6],
                    ['title' => 'Huruf Zho (ظ)', 'subtitle' => 'Zho - Tho dengan Satu Titik', 'icon_emoji' => 'ظ', 'sound_effect' => 'Pelafalan Zho Tebal', 'speech_text' => 'Zho! Bentuknya mirip huruf Tho dengan satu titik di atasnya: Zhab-yun (Rusa).', 'parent_note' => 'Latih pelafalan Zho tebal dengan ujung lidah.', 'sort_order' => 7],
                    ['title' => "Huruf 'Ain (ع)", 'subtitle' => "'Ain - Lengkungan Kepala & Perut", 'icon_emoji' => 'ع', 'sound_effect' => "Pelafalan 'Ain Dalam", 'speech_text' => "Ain! Memiliki kepala kecil di atas dan perut besar melengkung di bawah: 'Inabun (Anggur).", 'parent_note' => "Latih pelafalan bunyi 'Ain dari tengah tenggorokan.", 'sort_order' => 8],
                    ['title' => 'Huruf Ghoin (غ)', 'subtitle' => "Ghoin - 'Ain dengan Satu Titik", 'icon_emoji' => 'غ', 'sound_effect' => 'Pelafalan Ghoin Basah', 'speech_text' => "Ghoin! Seperti huruf 'Ain yang diberi satu titik di atas kepalanya: Ghoimun (Awan).", 'parent_note' => 'Tunjukkan titik di atas kepala huruf Ghoin.', 'sort_order' => 9],
                    ['title' => 'Huruf Fa (ف)', 'subtitle' => 'Fa - Satu Titik di Atas Lingkaran', 'icon_emoji' => 'ف', 'sound_effect' => 'Pelafalan Fa Ringan', 'speech_text' => 'Fa! Memiliki lingkaran kepala di atas dan satu titik: Fiilun (Gajah).', 'parent_note' => 'Ajak anak menyentuhkan gigi atas ke bibir bawah saat melafalkan Fa.', 'sort_order' => 10],
                ],
                3 => [
                    ['title' => 'Huruf Qof (ق)', 'subtitle' => 'Qof - Dua Titik di Atas Mangkok', 'icon_emoji' => 'ق', 'sound_effect' => 'Pelafalan Qof Mantap', 'speech_text' => 'Qof! Memiliki mangkok melengkung ke dalam dengan dua titik ceria di atasnya: Qousun (Busur Panah).', 'parent_note' => 'Latih pelafalan bunyi Qof mantap dari pangkal lidah.', 'sort_order' => 1],
                    ['title' => 'Huruf Kaf (ك)', 'subtitle' => 'Kaf - Ada Hamzah Kecil di Dalam', 'icon_emoji' => 'ك', 'sound_effect' => 'Pelafalan Kaf Renyah', 'speech_text' => 'Kaf! Berbentuk wadah lebar dengan tanda hamzah kecil di dalamnya: Kitabun (Buku).', 'parent_note' => 'Tunjukkan tanda hamzah kecil di dalam huruf Kaf.', 'sort_order' => 2],
                    ['title' => 'Huruf Lam (ل)', 'subtitle' => 'Lam - Tongkat Melengkung Indah', 'icon_emoji' => 'ل', 'sound_effect' => 'Pelafalan Lam Jelas', 'speech_text' => 'Lam! Berdiri tegak dan melengkung ke bawah seperti tongkat: Laymuun (Lemon).', 'parent_note' => 'Ajak anak menggambar bentuk tongkat huruf Lam di udara.', 'sort_order' => 3],
                    ['title' => 'Huruf Mim (م)', 'subtitle' => 'Mim - Lingkaran Ekor Turun', 'icon_emoji' => 'م', 'sound_effect' => 'Pelafalan Mim Dengung', 'speech_text' => 'Mim! Memiliki kepala bulat kecil dengan ekor yang turun ke bawah: Maa-un (Air).', 'parent_note' => 'Ajak anak merapatkan bibir saat melafalkan huruf Mim.', 'sort_order' => 4],
                    ['title' => 'Huruf Nun (ن)', 'subtitle' => 'Nun - Mangkok Satu Titik di Atas', 'icon_emoji' => 'ن', 'sound_effect' => 'Pelafalan Nun Dengung', 'speech_text' => 'Nun! Memiliki mangkok bulat dengan satu titik mutiara di tengahnya: Najmun (Bintang).', 'parent_note' => 'Tunjukkan letak titik huruf Nun di dalam mangkoknya.', 'sort_order' => 5],
                    ['title' => 'Huruf Wawu (و)', 'subtitle' => 'Wawu - Kepala Melingkar Indah', 'icon_emoji' => 'و', 'sound_effect' => 'Pelafalan Wawu Bulat', 'speech_text' => 'Wawu! Memiliki kepala melingkar dengan ekor meluncur: Wardatun (Bunga Mawar).', 'parent_note' => 'Ajak anak membulatkan bibir saat melafalkan Wawu.', 'sort_order' => 6],
                    ['title' => 'Huruf Ha Besar (هـ)', 'subtitle' => 'Ha Besar - Bulat Melingkar Lembut', 'icon_emoji' => 'هـ', 'sound_effect' => 'Pelafalan Ha Besar', 'speech_text' => 'Ha Besar! Huruf Ha berongga bulat yang dibaca halus dan lega: Hadiyyatun (Hadiah).', 'parent_note' => 'Jelaskan perbedaan bunyi Ha besar dan Ha kecil.', 'sort_order' => 7],
                    ['title' => 'Huruf Lam Alif (لا)', 'subtitle' => 'Lam Alif - Bersahabat Bergandengan', 'icon_emoji' => 'لا', 'sound_effect' => 'Pelafalan Lam Alif', 'speech_text' => 'Lam Alif! Dua huruf istimewa yang saling bersahabat dan bergandengan erat.', 'parent_note' => 'Gambarkan bentuk silang indah huruf Lam Alif di kertas.', 'sort_order' => 8],
                    ['title' => 'Huruf Hamzah (ء)', 'subtitle' => 'Hamzah - Kepala Mungil Pemutus Suara', 'icon_emoji' => 'ء', 'sound_effect' => 'Pelafalan Hamzah Tegas', 'speech_text' => "Hamzah! Bentuknya mungil seperti kepala huruf 'Ain untuk memantapkan suara.", 'parent_note' => 'Jelaskan bahwa Hamzah berbunyi hentakan nafas yang jelas.', 'sort_order' => 9],
                    ['title' => 'Huruf Ya (ي)', 'subtitle' => 'Ya - Huruf Terakhir Dua Titik Bawah', 'icon_emoji' => 'ي', 'sound_effect' => 'Pelafalan Ya Ceria', 'speech_text' => 'Ya! Huruf hijaiyah penutup seperti badan bebek dengan dua titik di bawahnya: Yadun (Tangan).', 'parent_note' => 'Apresiasi anak karena telah berhasil menguasai seluruh huruf hijaiyah dari Alif sampai Ya!', 'sort_order' => 10],
                ],
            ],

            'hewan' => [
                1 => [
                    ['title' => 'Kucing Persia Manja', 'subtitle' => 'Ku-cing (2 Suku Kata)', 'icon_emoji' => '🐱', 'sound_effect' => 'Meong-meong Manis', 'speech_text' => 'Kucing! Hewan peliharaan lucu berkumis lembut yang suka dielus dan bersuara meong-meong.', 'parent_note' => 'Bicarakan bagaimana merawat dan menyayangi kucing dengan memberi makan.', 'sort_order' => 1],
                    ['title' => 'Kelinci Putih Melompat', 'subtitle' => 'Ke-lin-ci (3 Suku Kata)', 'icon_emoji' => '🐰', 'sound_effect' => 'Kriuk Wortel & Lompatan Lucu', 'speech_text' => 'Kelinci! Hewan lucu bertelinga panjang yang suka melompat gembira dan makan wortel renyah.', 'parent_note' => 'Ajak anak menirukan gerakan telinga kelinci dengan dua jari.', 'sort_order' => 2],
                    ['title' => 'Bebek Kuning Berenang', 'subtitle' => 'Be-bek (2 Suku Kata)', 'icon_emoji' => '🦆', 'sound_effect' => 'Kwek-kwek Gembira', 'speech_text' => 'Bebek! Unggas berparuh datar yang pandai berenang di air dan bersuara kwek-kwek.', 'parent_note' => 'Ajak anak berjalan bergoyang seperti bebek sambil bersuara kwek-kwek.', 'sort_order' => 3],
                    ['title' => 'Ayam Jago Berkokok', 'subtitle' => 'A-yam (2 Suku Kata)', 'icon_emoji' => '🐔', 'sound_effect' => 'Kukuruyuk di Pagi Hari', 'speech_text' => 'Ayam Jago! Unggas gagah berjengger merah yang membangunkan kita setiap pagi dengan kokok merdu.', 'parent_note' => 'Ajak anak menirukan suara ayam jago kukuruyuk di pagi hari.', 'sort_order' => 4],
                    ['title' => 'Sapi Perah Sehat', 'subtitle' => 'Sa-pi (2 Suku Kata)', 'icon_emoji' => '🐮', 'sound_effect' => 'Moo-moo Merdu', 'speech_text' => 'Sapi! Hewan bertubuh besar pemakan rumput segar yang menghasilkan susu lezat dan bergizi.', 'parent_note' => 'Jelaskan manfaat minum susu sapi untuk pertumbuhan tulang yang kuat.', 'sort_order' => 5],
                    ['title' => 'Domba Berbulu Lembut', 'subtitle' => 'Dom-ba (2 Suku Kata)', 'icon_emoji' => '🐑', 'sound_effect' => 'Mbee-mbee Halus', 'speech_text' => 'Domba! Hewan manis berbulu tebal putih seperti awan yang suka mengembik mbee-mbee.', 'parent_note' => 'Ceritakan bahwa bulu domba bisa diolah menjadi jaket wol yang hangat.', 'sort_order' => 6],
                    ['title' => 'Ikan Mas Ceria', 'subtitle' => 'I-kan (2 Suku Kata)', 'icon_emoji' => '🐠', 'sound_effect' => 'Kecipak Air Kolam', 'speech_text' => 'Ikan Mas! Hewan air yang berenang lincah mengibaskan sirip dan bernapas dengan insang.', 'parent_note' => 'Ajak anak menggerakkan tangan seperti ikan yang berenang bebas di air.', 'sort_order' => 7],
                ],
                2 => [
                    ['title' => 'Singa Si Raja Hutan', 'subtitle' => 'Si-nga (2 Suku Kata)', 'icon_emoji' => '🦁', 'sound_effect' => 'Roaaar! Auman Singa', 'speech_text' => 'Singa! Hewan gagah bertaring tajam dan berbulu lebat di lehernya yang dijuluki Raja Hutan.', 'parent_note' => 'Ajak anak menirukan auman singa yang bersemangat.', 'sort_order' => 1],
                    ['title' => 'Gajah Belalai Panjang', 'subtitle' => 'Ga-jah (2 Suku Kata)', 'icon_emoji' => '🐘', 'sound_effect' => 'Pruuuut! Suara Belalai', 'speech_text' => 'Gajah! Hewan darat terbesar dengan telinga lebar dan belalai panjang serbaguna.', 'parent_note' => 'Ajak anak mengayunkan lengan seperti belalai gajah yang panjang.', 'sort_order' => 2],
                    ['title' => 'Jerapah Leher Tinggi', 'subtitle' => 'Je-ra-pah (3 Suku Kata)', 'icon_emoji' => '🦒', 'sound_effect' => 'Kunyah Daun Pucuk Pohon', 'speech_text' => 'Jerapah! Hewan darat tertinggi dengan leher panjang untuk memetik daun segar di pucuk pohon.', 'parent_note' => 'Tunjukkan corak polkadot cokelat indah di tubuh jerapah.', 'sort_order' => 3],
                    ['title' => 'Monyet Ceria Berayun', 'subtitle' => 'Mo-nyet (2 Suku Kata)', 'icon_emoji' => '🐵', 'sound_effect' => 'Uu-aa Uu-aa Ceria', 'speech_text' => 'Monyet! Hewan lincah berekor panjang yang suka berayun di pepohonan dan gemar makan pisang.', 'parent_note' => 'Ajak anak menirukan suara ceria monyet uu-aa-uu-aa.', 'sort_order' => 4],
                    ['title' => 'Harimau Belang Gagah', 'subtitle' => 'Ha-ri-mau (3 Suku Kata)', 'icon_emoji' => '🐯', 'sound_effect' => 'Graaaar! Suara Harimau', 'speech_text' => 'Harimau! Kucing besar bermotif loreng oranye hitam yang berlari sangat cepat dan tangguh.', 'parent_note' => 'Diskusikan motif loreng yang berfungsi sebagai penyamaran di hutan.', 'sort_order' => 5],
                    ['title' => 'Panda Gemas Pemakan Bambu', 'subtitle' => 'Pan-da (2 Suku Kata)', 'icon_emoji' => '🐼', 'sound_effect' => 'Kriuk Kunyah Bambu', 'speech_text' => 'Panda! Beruang gemas berbulu hitam putih yang sangat suka makan daun dan batang bambu.', 'parent_note' => 'Ceritakan bahwa panda adalah hewan langka yang sangat dilindungi.', 'sort_order' => 6],
                    ['title' => 'Kuda Berlari Kencang', 'subtitle' => 'Ku-da (2 Suku Kata)', 'icon_emoji' => '🐴', 'sound_effect' => 'Hii-haak! Derap Kaki Kuda', 'speech_text' => 'Kuda! Hewan berkaki empat yang kuat dan dapat berlari kencang membawa penunggangnya.', 'parent_note' => 'Ajak anak menirukan suara derap langkah kaki kuda klotak-klotak.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Lumba-Lumba Cerdas', 'subtitle' => 'Lum-ba Lum-ba', 'icon_emoji' => '🐬', 'sound_effect' => 'Kecipak Ombak & Siulan', 'speech_text' => 'Lumba-lumba! Mamalia laut yang sangat cerdas, ramah, dan suka melompat gembira di atas ombak.', 'parent_note' => 'Jelaskan bahwa lumba-lumba bernapas dengan paru-paru dan suka menolong.', 'sort_order' => 1],
                    ['title' => 'Paus Biru Raksasa Samudra', 'subtitle' => 'Pa-us (2 Suku Kata)', 'icon_emoji' => '🐳', 'sound_effect' => 'Semburan Air Paus Megah', 'speech_text' => 'Paus Biru! Hewan terbesar di bumi yang hidup di samudra luas dan dapat menyemburkan air.', 'parent_note' => 'Ceritakan ukuran paus biru yang sangat besar dan megah di lautan.', 'sort_order' => 2],
                    ['title' => 'Pinguin Salju Lucu', 'subtitle' => 'Pin-guin (2 Suku Kata)', 'icon_emoji' => '🐧', 'sound_effect' => 'Langkah Lucu di Salju', 'speech_text' => 'Pinguin! Burung berjas hitam-putih yang hidup di kutub dingin dan pandai meluncur di atas es.', 'parent_note' => 'Peragakan cara berjalan pinguin yang bergoyang-goyang lucu.', 'sort_order' => 3],
                    ['title' => 'Burung Elang Penjelajah', 'subtitle' => 'E-lang (2 Suku Kata)', 'icon_emoji' => '🦅', 'sound_effect' => 'Kecipak Sayap di Angkasa', 'speech_text' => 'Burung Elang! Penguasa angkasa bercakar tajam yang memiliki penglihatan mata sangat tajam.', 'parent_note' => 'Diskusikan mengapa elang bisa terbang tinggi melayang di angkasa luas.', 'sort_order' => 4],
                    ['title' => 'Burung Hantu Penjaga Malam', 'subtitle' => 'Bu-rung Han-tu', 'icon_emoji' => '🦉', 'sound_effect' => 'Huu-huu di Keheningan Malam', 'speech_text' => 'Burung Hantu! Burung bijak bermata bulat besar yang dapat memutar kepalanya dan aktif di malam hari.', 'parent_note' => 'Jelaskan bahwa burung hantu adalah hewan nokturnal yang aktif saat malam.', 'sort_order' => 5],
                    ['title' => 'Kura-Kura Rumah Tempurung', 'subtitle' => 'Ku-ra-ku-ra', 'icon_emoji' => '🐢', 'sound_effect' => 'Langkah Pelan Santai', 'speech_text' => 'Kura-kura! Hewan tenang berumur panjang yang membawa rumah tempurung keras sebagai pelindung.', 'parent_note' => 'Ajak anak memahami bahwa bersikap sabar seperti kura-kura adalah hal yang baik.', 'sort_order' => 6],
                ],
            ],

            'buah' => [
                1 => [
                    ['title' => 'Apel Merah Manis', 'subtitle' => 'A-pel (2 Suku Kata)', 'icon_emoji' => '🍎', 'sound_effect' => 'Kriuk Gigitan Apel Manis', 'speech_text' => 'Apel Merah! Buah renyah kaya vitamin dan serat yang membuat tubuh kita sehat dan bugar.', 'parent_note' => 'Kenalkan warna kulit apel merah dan daging buahnya yang manis renyah.', 'sort_order' => 1],
                    ['title' => 'Pisang Kuning Lembut', 'subtitle' => 'Pi-sang (2 Suku Kata)', 'icon_emoji' => '🍌', 'sound_effect' => 'Buka Kulit Pisang Lembut', 'speech_text' => 'Pisang! Buah lembut berkulit kuning cerah yang kaya energi dan sangat disukai anak-anak.', 'parent_note' => 'Ajak anak memperagakan cara mengupas kulit pisang sebelum dimakan.', 'sort_order' => 2],
                    ['title' => 'Jeruk Oranye Segar', 'subtitle' => 'Je-ruk (2 Suku Kata)', 'icon_emoji' => '🍊', 'sound_effect' => 'Perasan Air Jeruk Manis', 'speech_text' => 'Jeruk! Buah bulat berwarna oranye cerah yang kaya vitamin C untuk daya tahan tubuh kita.', 'parent_note' => 'Jelaskan rasa jeruk yang manis dengan sedikit asam segar yang menyehatkan.', 'sort_order' => 3],
                    ['title' => 'Semangka Merah Berair', 'subtitle' => 'Se-mang-ka (3 Suku Kata)', 'icon_emoji' => '🍉', 'sound_effect' => 'Kriuk Segar Semangka Berair', 'speech_text' => 'Semangka! Buah besar berdaging merah manis dengan kulit hijau bergaris yang sangat segar.', 'parent_note' => 'Ceritakan bahwa semangka mengandung banyak air pelepas dahaga.', 'sort_order' => 4],
                    ['title' => 'Wortel Oranye Renyah', 'subtitle' => 'Wor-tel (2 Suku Kata)', 'icon_emoji' => '🥕', 'sound_effect' => 'Kriuk Gigitan Wortel Segar', 'speech_text' => 'Wortel! Sayuran renyah kaya vitamin A yang membuat mata kita terang dan tubuh sehat.', 'parent_note' => 'Ajak anak gemar makan sayur wortel yang lezat dan renyah di rumah.', 'sort_order' => 5],
                    ['title' => 'Stroberi Merah Bintik', 'subtitle' => 'Stro-be-ri (3 Suku Kata)', 'icon_emoji' => '🍓', 'sound_effect' => 'Petik Stroberi Manis Segar', 'speech_text' => 'Stroberi! Buah mungil berbentuk hati dengan bintik biji manis yang kaya antioksidan.', 'parent_note' => 'Tunjukkan bentuk buah stroberi yang unik dan warnanya yang merah cerah.', 'sort_order' => 6],
                    ['title' => 'Tomat Merah Segar', 'subtitle' => 'To-mat (2 Suku Kata)', 'icon_emoji' => '🍅', 'sound_effect' => 'Irisan Tomat Segar Berair', 'speech_text' => 'Tomat! Sayur buah bulat merah yang segar dan lezat diolah menjadi jus atau sup sehat.', 'parent_note' => 'Jelaskan bahwa tomat sangat kaya vitamin C dan vitamin K untuk kesehatan.', 'sort_order' => 7],
                ],
                2 => [
                    ['title' => 'Anggur Ungu Manis', 'subtitle' => 'Ang-gur (2 Suku Kata)', 'icon_emoji' => '🍇', 'sound_effect' => 'Petik Sebutir Anggur Manis', 'speech_text' => 'Anggur! Buah bulat kecil yang tumbuh bergerombol di pohon rambat dengan rasa manis lezat.', 'parent_note' => 'Kenalkan warna ungu pada anggur dan tekstur daging buahnya yang lembut.', 'sort_order' => 1],
                    ['title' => 'Nanas Mahkota Emas', 'subtitle' => 'Na-nas (2 Suku Kata)', 'icon_emoji' => '🍍', 'sound_effect' => 'Irisan Nanas Segar Manis', 'speech_text' => 'Nanas! Buah tropis berkulit sisik dengan mahkota daun hijau di atasnya yang rasanya segar.', 'parent_note' => 'Tunjukkan mahkota daun nanas yang menyerupai mahkota raja.', 'sort_order' => 2],
                    ['title' => 'Mangga Harum Manis', 'subtitle' => 'Mang-ga (2 Suku Kata)', 'icon_emoji' => '🥭', 'sound_effect' => 'Aroma Harum Buah Mangga', 'speech_text' => 'Mangga! Buah tropis berdaging oranye lembut dengan aroma sangat harum dan rasa manis legit.', 'parent_note' => 'Ceritakan kelezatan buah mangga matang yang dipetik dari pohon.', 'sort_order' => 3],
                    ['title' => 'Jagung Manis Kuning', 'subtitle' => 'Ja-gung (2 Suku Kata)', 'icon_emoji' => '🌽', 'sound_effect' => 'Kriuk Manis Jagung Rebus', 'speech_text' => 'Jagung! Sayuran bertongkol dengan deretan biji kuning manis yang lezat direbus atau dibakar.', 'parent_note' => 'Ajak anak memperhatikan barisan biji jagung yang tersusun rapi.', 'sort_order' => 4],
                    ['title' => 'Brokoli Hijau Si Pohon Cilik', 'subtitle' => 'Bro-ko-li (3 Suku Kata)', 'icon_emoji' => '🥦', 'sound_effect' => 'Kukus Brokoli Hijau Sehat', 'speech_text' => 'Brokoli! Sayuran hijau bergizi tinggi yang bentuknya mirip pohon cilik rindang dan kaya vitamin.', 'parent_note' => 'Beri motivasi anak agar suka makan brokoli si pohon cilik yang menyehatkan.', 'sort_order' => 5],
                    ['title' => 'Melon Hijau Manis Segar', 'subtitle' => 'Me-lon (2 Suku Kata)', 'icon_emoji' => '🍈', 'sound_effect' => 'Sendok Daging Melon Lembut', 'speech_text' => 'Melon! Buah bulat beraroma wangi manis dengan daging buah hijau muda yang lembut menyegarkan.', 'parent_note' => 'Jelaskan aroma harum khas buah melon saat dipotong.', 'sort_order' => 6],
                    ['title' => 'Alpukat Hijau Gurih', 'subtitle' => 'Al-pu-kat (3 Suku Kata)', 'icon_emoji' => '🥑', 'sound_effect' => 'Sendok Lembut Alpukat Sehat', 'speech_text' => 'Alpukat! Buah berkulit hijau dengan daging lembut gurih yang kaya lemak baik untuk otak pintar.', 'parent_note' => 'Tunjukkan biji bulat besar alpukat di bagian tengah buahnya.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Kelapa Muda Segar', 'subtitle' => 'Ke-la-pa (3 Suku Kata)', 'icon_emoji' => '🥥', 'sound_effect' => 'Kecipak Air Kelapa Segar', 'speech_text' => 'Kelapa Muda! Buah dari pohon pantai tinggi yang airnya segar alami untuk mengembalikan tenaga.', 'parent_note' => 'Ceritakan segarnya air kelapa murni yang kaya mineral alami.', 'sort_order' => 1],
                    ['title' => 'Kiwi Hijau Berbintik', 'subtitle' => 'Ki-wi (2 Suku Kata)', 'icon_emoji' => '🥝', 'sound_effect' => 'Potong Buah Kiwi Segar', 'speech_text' => 'Kiwi! Buah berkulit cokelat berbulu halus dengan daging hijau berbintik hitam yang kaya vitamin C.', 'parent_note' => 'Tunjukkan pola lingkaran biji hitam kecil di dalam buah kiwi.', 'sort_order' => 2],
                    ['title' => 'Ceri Merah Berpasangan', 'subtitle' => 'Ce-ri (2 Suku Kata)', 'icon_emoji' => '🍒', 'sound_effect' => 'Petik Ceri Manis Kembar', 'speech_text' => 'Ceri! Buah mungil merah mengkilap bertangkai kembar yang manis dan sering jadi hiasan kue.', 'parent_note' => 'Perlihatkan tangkai ceri kembar yang saling bergandengan lucu.', 'sort_order' => 3],
                    ['title' => 'Lemon Kuning Asam Segar', 'subtitle' => 'Le-mon (2 Suku Kata)', 'icon_emoji' => '🍋', 'sound_effect' => 'Tetesan Air Lemon Segar', 'speech_text' => 'Lemon! Buah kuning cerah yang kaya vitamin C dan membuat minuman terasa segar menyehatkan.', 'parent_note' => 'Jelaskan manfaat air lemon hangat dengan madu untuk kesehatan tenggorokan.', 'sort_order' => 4],
                    ['title' => 'Mentimun Hijau Segar', 'subtitle' => 'Men-ti-mun (3 Suku Kata)', 'icon_emoji' => '🥒', 'sound_effect' => 'Kriuk Mentimun Segar Dingin', 'speech_text' => 'Mentimun! Sayuran hijau panjang berair yang dingin menyegarkan dan baik untuk pencernaan.', 'parent_note' => 'Ajak anak mencicipi irisan mentimun dingin yang renyah.', 'sort_order' => 5],
                    ['title' => 'Paprika Warna-Warni Sehat', 'subtitle' => 'Pa-pri-ka (3 Suku Kata)', 'icon_emoji' => '🫑', 'sound_effect' => 'Kriuk Paprika Renyah Manis', 'speech_text' => 'Paprika! Sayuran berbentuk lonceng cerah yang renyah, manis, dan kaya aneka vitamin penting.', 'parent_note' => 'Tunjukkan aneka warna paprika merah, kuning, dan hijau di kebun.', 'sort_order' => 6],
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
                    ['title' => 'Mobil Keluarga Ceria', 'subtitle' => 'Mo-bil (2 Suku Kata)', 'icon_emoji' => '🚗', 'sound_effect' => 'Brum-brum Tin-tin!', 'speech_text' => 'Mobil! Kendaraan roda empat yang nyaman untuk bepergian bersama keluarga dengan bunyi klakson tin-tin.', 'parent_note' => 'Ajak anak menirukan bunyi klakson mobil tin-tin yang ceria.', 'sort_order' => 1],
                    ['title' => 'Sepeda Roda Dua', 'subtitle' => 'Se-pe-da (3 Suku Kata)', 'icon_emoji' => '🚲', 'sound_effect' => 'Kring-kring Bel Sepeda', 'speech_text' => 'Sepeda! Kendaraan ramah lingkungan yang dikayuh dengan kedua kaki sambil membunyikan bel kring-kring.', 'parent_note' => 'Ceritakan manfaat gowes sepeda untuk kesehatan kaki dan tubuh.', 'sort_order' => 2],
                    ['title' => 'Sepeda Motor Lincah', 'subtitle' => 'Mo-tor (2 Suku Kata)', 'icon_emoji' => '🏍️', 'sound_effect' => 'Ngeeng-ngeeng Suara Gas Motor', 'speech_text' => 'Sepeda Motor! Kendaraan roda dua bermesin yang lincah dan pengendaranya wajib memakai helm pengaman.', 'parent_note' => 'Ingatkan anak pentingnya memakai helm saat naik sepeda motor.', 'sort_order' => 3],
                    ['title' => 'Bus Sekolah Kuning', 'subtitle' => 'Bus Se-ko-lah', 'icon_emoji' => '🚌', 'sound_effect' => 'Klakson Telolet Bus Ceria', 'speech_text' => 'Bus Sekolah! Kendaraan besar berpenumpang banyak yang mengantar anak-anak pergi dan pulang sekolah dengan riang.', 'parent_note' => 'Ceritakan asyiknya naik bus bersama banyak teman sekolah.', 'sort_order' => 4],
                    ['title' => 'Kereta Api Cepat', 'subtitle' => 'Ke-re-ta A-pi', 'icon_emoji' => '🚆', 'sound_effect' => 'Tut-tut Gujes-gujes!', 'speech_text' => 'Kereta Api! Rangkaian gerbong panjang yang melaju kencang di atas rel besi dipimpin oleh bapak masinis.', 'parent_note' => 'Ajak anak menyanyikan lagu Naik Kereta Api Tut-tut-tut.', 'sort_order' => 5],
                    ['title' => 'Truk Pengangkut Kuat', 'subtitle' => 'Truk Be-sar', 'icon_emoji' => '🚚', 'sound_effect' => 'Brumm Deru Mesin Truk', 'speech_text' => 'Truk! Kendaraan bertubuh besar dan kokoh yang bertugas mengangkut aneka muatan barang ke berbagai kota.', 'parent_note' => 'Tunjukkan bak truk besar yang bisa membawa banyak barang.', 'sort_order' => 6],
                    ['title' => 'Becak Tradisional Unik', 'subtitle' => 'Be-cak (2 Suku Kata)', 'icon_emoji' => '🛺', 'sound_effect' => 'Kring-kring Gowes Becak', 'speech_text' => 'Becak! Kendaraan beroda tiga tradisional yang asyik dinaiki santai berkeliling taman kota.', 'parent_note' => 'Kenalkan kendaraan roda tiga tradisional khas Indonesia.', 'sort_order' => 7],
                ],
                2 => [
                    ['title' => 'Mobil Pemadam Kebakaran', 'subtitle' => 'Pe-ma-dam (3 Suku Kata)', 'icon_emoji' => '🚒', 'sound_effect' => 'Wiu-wiu Sirine Pemadam!', 'speech_text' => 'Mobil Pemadam! Kendaraan merah tangguh bertangga panjang dan selang air untuk memadamkan kobaran api.', 'parent_note' => 'Ceritakan keberanian para petugas pemadam kebakaran.', 'sort_order' => 1],
                    ['title' => 'Mobil Ambulans Penolong', 'subtitle' => 'Am-bu-lans (3 Suku Kata)', 'icon_emoji' => '🚑', 'sound_effect' => 'Ninu-ninu Sirine Ambulans!', 'speech_text' => 'Mobil Ambulans! Kendaraan medis bersirine yang bergerak cepat mengantar orang sakit ke rumah sakit.', 'parent_note' => 'Jelaskan mengapa mobil lain harus memberi jalan saat ambulans lewat.', 'sort_order' => 2],
                    ['title' => 'Mobil Polisi Penjaga Aman', 'subtitle' => 'Po-li-si (3 Suku Kata)', 'icon_emoji' => '🚓', 'sound_effect' => 'Tet-tot Sirine Polisi!', 'speech_text' => 'Mobil Polisi! Kendaraan patroli bapak polisi untuk menjaga ketertiban, keamanan jalan, dan menolong warga.', 'parent_note' => 'Tanamkan rasa aman dan percaya kepada petugas polisi.', 'sort_order' => 3],
                    ['title' => 'Traktor Sawah Perkasa', 'subtitle' => 'Trak-tor (2 Suku Kata)', 'icon_emoji' => '🚜', 'sound_effect' => 'Brum-brum Membajak Sawah', 'speech_text' => 'Traktor! Kendaraan beroda besar dan bertenaga kuat yang membantu petani membajak tanah sawah subur.', 'parent_note' => 'Kenalkan fungsi traktor dalam menghasilkan beras dan makanan kita.', 'sort_order' => 4],
                    ['title' => 'Truk Molen Pengaduk Semen', 'subtitle' => 'Truk Mo-len', 'icon_emoji' => '🚛', 'sound_effect' => 'Kruk-kruk Putaran Molen', 'speech_text' => 'Truk Molen! Memiliki tabung besar berputar untuk mencampur semen agar bangunan jembatan dan gedung kokoh.', 'parent_note' => 'Ajak anak mengamati tabung molen yang terus berputar saat berjalan.', 'sort_order' => 5],
                    ['title' => 'Taksi Kuning Ramah', 'subtitle' => 'Tak-si (2 Suku Kata)', 'icon_emoji' => '🚕', 'sound_effect' => 'Tin-tin Klakson Taksi', 'speech_text' => 'Taksi! Mobil penumpang umum dengan lampu atap yang siap mengantar penumpang ke mana saja di kota.', 'parent_note' => 'Ceritakan fungsi taksi yang memudahkan orang bepergian.', 'sort_order' => 6],
                    ['title' => 'Skuter Otopet Lincah', 'subtitle' => 'Sku-ter (2 Suku Kata)', 'icon_emoji' => '🛴', 'sound_effect' => 'Sreet-sreet Meluncur Lincah', 'speech_text' => 'Skuter! Kendaraan beroda kecil dengan papan pijakan yang meluncur seru didorong oleh dorongan kaki.', 'parent_note' => 'Ingatkan selalu berhati-hati dan memakai pelindung saat bermain skuter.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Pesawat Terbang Angkasa', 'subtitle' => 'Pe-sa-wat Ter-bang', 'icon_emoji' => '✈️', 'sound_effect' => 'Wuuush Melayang di Awan', 'speech_text' => 'Pesawat Terbang! Burung besi bersayap lebar yang melesat tinggi di angkasa dipandu oleh bapak pilot.', 'parent_note' => 'Rentangkan kedua tangan menirukan sayap pesawat melayang di langit.', 'sort_order' => 1],
                    ['title' => 'Helikopter Baling-Baling', 'subtitle' => 'He-li-kop-ter (4 Suku Kata)', 'icon_emoji' => '🚁', 'sound_effect' => 'Prok-prok Putaran Baling-Baling', 'speech_text' => 'Helikopter! Kendaraan udara dengan baling-baling putar di atasnya yang bisa mendarat di atap gedung.', 'parent_note' => 'Putar tangan di atas kepala seperti baling-baling helikopter.', 'sort_order' => 2],
                    ['title' => 'Kapal Laut Samudra', 'subtitle' => 'Ka-pal La-ut', 'icon_emoji' => '🚢', 'sound_effect' => 'Tuuut! Klakson Kapal Samudra', 'speech_text' => 'Kapal Laut! Kendaraan raksasa yang berlayar mengapung di samudra luas dipimpin oleh bapak nahkoda.', 'parent_note' => 'Jelaskan bahwa kapal laut berlabuh di pelabuhan dermaga.', 'sort_order' => 3],
                    ['title' => 'Perahu Layar Nelayan', 'subtitle' => 'Pe-ra-hu La-yar', 'icon_emoji' => '⛵', 'sound_effect' => 'Kecipak Ombak dan Angin Layar', 'speech_text' => 'Perahu Layar! Perahu cantik yang bergerak maju mengarungi laut dengan dorongan hembusan angin pada layarnya.', 'parent_note' => 'Ceritakan bagaimana nelayan mencari ikan di laut dengan perahu layar.', 'sort_order' => 4],
                    ['title' => 'Perahu Cepat Speedboat', 'subtitle' => 'Pe-ra-hu Ce-pat', 'icon_emoji' => '🚤', 'sound_effect' => 'Wuuush Membelah Ombak Laut', 'speech_text' => 'Speedboat! Perahu bermesin cepat yang lincah melaju dan membelah percikan ombak di atas air laut.', 'parent_note' => 'Ceritakan serunya meluncur kencang di atas permukaan air laut.', 'sort_order' => 5],
                    ['title' => 'Roket Penjelajah Antariksa', 'subtitle' => 'Ro-ket An-ta-rik-sa', 'icon_emoji' => '🚀', 'sound_effect' => '3.. 2.. 1.. Meluncur ke Angkasa!', 'speech_text' => 'Roket Antariksa! Kendaraan super cepat bertenaga api dahsyat yang terbang meluncur ke luar angkasa dan bulan.', 'parent_note' => 'Ajak anak berhitung mundur 3, 2, 1 Meluncur seperti astronot roket!', 'sort_order' => 6],
                ],
            ],

            'benda' => [
                1 => [
                    ['title' => 'Buku Cerita Bergambar', 'subtitle' => 'Bu-ku (2 Suku Kata)', 'icon_emoji' => '📚', 'sound_effect' => 'Buka Lembaran Kertas Buku', 'speech_text' => 'Buku! Jendela ilmu yang berisi cerita seru, gambar berwarna-warni, dan menambah wawasan anak pintar.', 'parent_note' => 'Ajak anak membiasakan membaca dan merawat buku cerita setiap hari.', 'sort_order' => 1],
                    ['title' => 'Pensil Menulis Ceria', 'subtitle' => 'Pen-sil (2 Suku Kata)', 'icon_emoji' => '✏️', 'sound_effect' => 'Goresan Menulis di Kertas', 'speech_text' => 'Pensil! Alat tulis bergagang kayu untuk menulis kata, angka, dan menggambar cita-cita hebat.', 'parent_note' => 'Latih genggaman jari jemari anak saat memegang pensil dengan benar.', 'sort_order' => 2],
                    ['title' => 'Tas Ransel Sekolah', 'subtitle' => 'Tas Ran-sel', 'icon_emoji' => '🎒', 'sound_effect' => 'Tutup Resleting Tas Ransel', 'speech_text' => 'Tas Ransel! Tempat membawa buku pelajaran, kotak pensil, dan bekal makanan sehat pergi ke sekolah.', 'parent_note' => 'Beri motivasi anak agar mandiri menyiapkan tas sekolahnya di malam hari.', 'sort_order' => 3],
                    ['title' => 'Krayon Warna-Warni', 'subtitle' => 'Kra-yon (2 Suku Kata)', 'icon_emoji' => '🖍️', 'sound_effect' => 'Warnai Gambar Kertas Ceria', 'speech_text' => 'Krayon! Batangan lilin aneka warna cerah untuk mewarnai gambar pemandangan dan imajinasi indah.', 'parent_note' => 'Kenalkan perpaduan warna krayon saat mewarnai gambar.', 'sort_order' => 4],
                    ['title' => 'Gunting Kertas Aman', 'subtitle' => 'Gun-ting (2 Suku Kata)', 'icon_emoji' => '✂️', 'sound_effect' => 'Krek-krek Menggunting Kertas', 'speech_text' => 'Gunting! Alat pemotong kertas ujung bulat ramah anak untuk membuat karya kerajinan tangan kreatif.', 'parent_note' => 'Dampingi anak saat belajar menggunting pola kertas sederhana.', 'sort_order' => 5],
                    ['title' => 'Penggaris Lurus Rapi', 'subtitle' => 'Peng-ga-ris (3 Suku Kata)', 'icon_emoji' => '📏', 'sound_effect' => 'Garis Lurus Presisi', 'speech_text' => 'Penggaris! Alat bergaris angka untuk mengukur panjang benda dan menarik garis lurus rapi di buku.', 'parent_note' => 'Tunjukkan angka-angka satuan sentimeter pada penggaris.', 'sort_order' => 6],
                    ['title' => 'Kotak Pensil Praktis', 'subtitle' => 'Ko-tak Pen-sil', 'icon_emoji' => '👝', 'sound_effect' => 'Klip Tutup Kotak Pensil', 'speech_text' => 'Kotak Pensil! Tempat menyimpan pensil, penghapus, dan rautan agar tertata rapi dan tidak tercecer.', 'parent_note' => 'Biasakan anak selalu mengembalikan alat tulis ke dalam kotak pensil.', 'sort_order' => 7],
                ],
                2 => [
                    ['title' => 'Sepatu Nyaman Melangkah', 'subtitle' => 'Se-pa-tu (3 Suku Kata)', 'icon_emoji' => '👟', 'sound_effect' => 'Tap-tap Langkah Kaki Sepatu', 'speech_text' => 'Sepatu! Pelindung kaki yang nyaman dan kuat untuk melangkah, berlari, dan bermain aman di luar rumah.', 'parent_note' => 'Latih kemandirian anak memakai dan melepas sepatu sendiri.', 'sort_order' => 1],
                    ['title' => 'Jam Dinding Penunjuk Waktu', 'subtitle' => 'Jam Din-ding', 'icon_emoji' => '⏰', 'sound_effect' => 'Tik-tok Detak Jarum Jam', 'speech_text' => 'Jam Dinding! Berdetak tik-tok untuk mengingatkan waktu belajar, shalat, bermain, dan istirahat tidur.', 'parent_note' => 'Kenalkan jarum jam dan konsep waktu bangun pagi pada anak.', 'sort_order' => 2],
                    ['title' => 'Sikat Gigi & Pasta Sehat', 'subtitle' => 'Si-kat Gi-gi', 'icon_emoji' => '🪥', 'sound_effect' => 'Srok-srok Gosok Gigi Bersih', 'speech_text' => 'Sikat Gigi! Menjaga gigi kita tetap putih, bersih, kuat, dan bebas dari kuman karies penyebab sakit gigi.', 'parent_note' => 'Ajak anak rutin menggosok gigi pagi hari dan sebelum tidur malam.', 'sort_order' => 3],
                    ['title' => 'Payung Pelindung Hujan', 'subtitle' => 'Pa-yung (2 Suku Kata)', 'icon_emoji' => '☂️', 'sound_effect' => 'Buka Payung Pelindung Hujan', 'speech_text' => 'Payung! Mengembang lebar di atas kepala untuk melindungi tubuh kita dari terik matahari dan hujan deras.', 'parent_note' => 'Tunjukkan cara membuka dan melipat payung dengan hati-hati.', 'sort_order' => 4],
                    ['title' => 'Sendok & Garpu Makan', 'subtitle' => 'Sen-dok Gar-pu', 'icon_emoji' => '🍴', 'sound_effect' => 'Kling-kling Sendok dan Piring', 'speech_text' => 'Sendok & Garpu! Peralatan makan yang membantu kita menyuap makanan lezat secara bersih dan beradab.', 'parent_note' => 'Ajarkan adab makan dengan tangan kanan dan berdoa sebelum makan.', 'sort_order' => 5],
                    ['title' => 'Gelas Minum Bening', 'subtitle' => 'Ge-las (2 Suku Kata)', 'icon_emoji' => '🥛', 'sound_effect' => 'Tuang Air Putih ke Gelas', 'speech_text' => 'Gelas! Wadah bersih untuk menuang dan meminum air putih sehat penyegar dahaga tubuh kita.', 'parent_note' => 'Ingatkan anak pentingnya minum air putih yang cukup setiap hari.', 'sort_order' => 6],
                    ['title' => 'Lampu Belajar Terang', 'subtitle' => 'Lam-pu (2 Suku Kata)', 'icon_emoji' => '💡', 'sound_effect' => 'Klik Sinar Lampu Terang', 'speech_text' => 'Lampu Belajar! Memancarkan cahaya terang benderang agar mata kita nyaman saat membaca di malam hari.', 'parent_note' => 'Ajarkan anak mematikan lampu jika sudah selesai belajar untuk hemat listrik.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Meja Belajar Kayu', 'subtitle' => 'Me-ja Be-la-jar', 'icon_emoji' => '🪑', 'sound_effect' => 'Rapi Duduk di Meja Belajar', 'speech_text' => 'Meja Belajar! Perabot kokoh tempat meletakkan buku dan belajar dengan posisi duduk punggung tegak yang sehat.', 'parent_note' => 'Biasakan anak selalu menjaga meja belajar bersih dan tidak coret-coret.', 'sort_order' => 1],
                    ['title' => 'Tempat Tidur Nyaman', 'subtitle' => 'Tem-pat Ti-dur', 'icon_emoji' => '🛏️', 'sound_effect' => 'Puk-puk Bantal Empuk Nyaman', 'speech_text' => 'Tempat Tidur! Kasur empuk dengan bantal dan selimut hangat untuk mengistirahatkan tubuh setelah seharian beraktivitas.', 'parent_note' => 'Bimbing anak membiasakan merapikan tempat tidur setiap bangun pagi.', 'sort_order' => 2],
                    ['title' => 'Cermin Kaca Bening', 'subtitle' => 'Cer-min (2 Suku Kata)', 'icon_emoji' => '🪞', 'sound_effect' => 'Kilau Cermin Bersih', 'speech_text' => 'Cermin! Kaca jernih yang memantulkan bayangan diri kita saat menyisir rambut dan merapikan pakaian sekolah.', 'parent_note' => 'Ajak anak tersenyum ceria di depan cermin sambil merapikan seragam.', 'sort_order' => 3],
                    ['title' => 'Pintu Rumah Kokoh', 'subtitle' => 'Pin-tu (2 Suku Kata)', 'icon_emoji' => '🚪', 'sound_effect' => 'Tok-tok Buka Pintu Rumah', 'speech_text' => 'Pintu Rumah! Pintu masuk dan keluar rumah yang selalu diketuk dengan sopan sebelum kita memasukinya.', 'parent_note' => 'Tanamkan kebiasaan mengetuk pintu dan mengucapkan salam.', 'sort_order' => 4],
                    ['title' => 'Sapu Pembersih Lantai', 'subtitle' => 'Sa-pu (2 Suku Kata)', 'icon_emoji' => '🧹', 'sound_effect' => 'Srak-srak Sapu Lantai Bersih', 'speech_text' => 'Sapu! Alat pembersih bertangkai untuk menyapu debu dan kotoran agar rumah selalu bersih dan sehat.', 'parent_note' => 'Ajak anak ikut serta membersihkan kamar dengan menyapu lantai.', 'sort_order' => 5],
                    ['title' => 'Boneka Beruang Lucu', 'subtitle' => 'Bo-ne-ka (3 Suku Kata)', 'icon_emoji' => '🧸', 'sound_effect' => 'Peluk Boneka Beruang Hangat', 'speech_text' => 'Boneka Beruang! Sahabat main berbulu lembut yang empuk dipeluk dan menemani waktu bermain ceria anak-anak.', 'parent_note' => 'Ajarkan anak merawat dan mengembalikan boneka ke kotak mainan.', 'sort_order' => 6],
                ],
            ],

            'bendera' => [
                1 => [
                    ['title' => 'Bendera Merah Putih Indonesia', 'subtitle' => 'In-do-ne-sia (4 Suku Kata)', 'icon_emoji' => '🇮🇩', 'sound_effect' => 'Kibar Bendera di Udara', 'speech_text' => 'Bendera Indonesia! Sang Saka Merah Putih, merah di atas artinya berani dan putih di bawah artinya suci.', 'parent_note' => 'Ajak anak memberi hormat dengan bangga pada bendera Merah Putih.', 'sort_order' => 1],
                    ['title' => 'Bendera Palestina', 'subtitle' => 'Pa-les-ti-na (4 Suku Kata)', 'icon_emoji' => '🇵🇸', 'sound_effect' => 'Kibar Bendera Persaudaraan', 'speech_text' => 'Bendera Palestina! Sahabat tercinta kita yang memiliki tiga garis hitam, putih, hijau, dan segitiga merah di kiri.', 'parent_note' => 'Tunjukkan warna hitam, putih, hijau, dan segitiga merahnya.', 'sort_order' => 2],
                    ['title' => 'Bendera Malaysia', 'subtitle' => 'Ma-lay-sia (3 Suku Kata)', 'icon_emoji' => '🇲🇾', 'sound_effect' => 'Bintang & Bulan Sabit', 'speech_text' => 'Bendera Malaysia! Negara tetangga serumpun kita dengan garis merah putih serta lambang bulan dan bintang kuning.', 'parent_note' => 'Tunjukkan garis merah putih dan kotak biru di sudut kiri atasnya.', 'sort_order' => 3],
                    ['title' => 'Bendera Singapura', 'subtitle' => 'Sing-ga-pu-ra', 'icon_emoji' => '🇸🇬', 'sound_effect' => 'Bulan Sabit & Lima Bintang', 'speech_text' => 'Bendera Singapura! Berwarna merah dan putih dengan lambang bulan sabit putih dan lima bintang kecil di sudut kiri.', 'parent_note' => 'Hitung bersama lima bintang kecil di sudut bendera Singapura.', 'sort_order' => 4],
                    ['title' => 'Bendera Brunei Darussalam', 'subtitle' => 'Bru-nei Da-rus-sa-lam', 'icon_emoji' => '🇧🇳', 'sound_effect' => 'Kuning Keemasan Megah', 'speech_text' => 'Bendera Brunei! Berwarna dasar kuning cerah dengan garis serong hitam putih dan lambang negara di tengahnya.', 'parent_note' => 'Kenalkan warna kuning cerah sebagai lambang kehormatan di Brunei.', 'sort_order' => 5],
                    ['title' => 'Bendera Arab Saudi', 'subtitle' => 'A-rab Sau-di', 'icon_emoji' => '🇸🇦', 'sound_effect' => 'Hijau Zamrud Megah', 'speech_text' => 'Bendera Arab Saudi! Berwarna hijau zamrud indah tempat berdirinya Ka\'bah dengan tulisan kalimat suci dan pedang.', 'parent_note' => 'Ceritakan tentang kota suci Mekkah dan ibadah haji.', 'sort_order' => 6],
                    ['title' => 'Bendera Jepang', 'subtitle' => 'Je-pang (2 Suku Kata)', 'icon_emoji' => '🇯🇵', 'sound_effect' => 'Matahari Terbit Bersinar', 'speech_text' => 'Bendera Jepang! Berwarna putih bersih dengan lingkaran merah di tengah yang melambangkan matahari terbit.', 'parent_note' => 'Tunjukkan bentuk lingkaran merah yang simpel dan mudah digambar.', 'sort_order' => 7],
                ],
                2 => [
                    ['title' => 'Bendera Turki', 'subtitle' => 'Tur-ki (2 Suku Kata)', 'icon_emoji' => '🇹🇷', 'sound_effect' => 'Bulan Sabit Merah', 'speech_text' => 'Bendera Turki! Berwarna merah cerah dengan lambang bulan sabit dan bintang putih bersinar di tengahnya.', 'parent_note' => 'Ajak anak menyebutkan nama benda langit bulan sabit dan bintang.', 'sort_order' => 1],
                    ['title' => 'Bendera Korea Selatan', 'subtitle' => 'Ko-rea Se-la-tan', 'icon_emoji' => '🇰🇷', 'sound_effect' => 'Taegeuk Merah Biru', 'speech_text' => 'Bendera Korea Selatan! Berlatar putih dengan lingkaran Taegeuk merah-biru di tengah dan empat garis trigram hitam di sudut.', 'parent_note' => 'Tunjukkan pola lingkaran merah biru yang berputar indah.', 'sort_order' => 2],
                    ['title' => 'Bendera Qatar', 'subtitle' => 'Qa-tar (2 Suku Kata)', 'icon_emoji' => '🇶🇦', 'sound_effect' => 'Gerigi Sembilan Sudut', 'speech_text' => 'Bendera Qatar! Memiliki warna merah marun dan putih yang dipisahkan oleh pola gerigi sembilan sudut yang unik.', 'parent_note' => 'Hitung gerigi runcing sembilan sudut pada perbatasan warnanya.', 'sort_order' => 3],
                    ['title' => 'Bendera Mesir', 'subtitle' => 'Me-sir (2 Suku Kata)', 'icon_emoji' => '🇪🇬', 'sound_effect' => 'Elang Emas Salahuddin', 'speech_text' => 'Bendera Mesir! Memiliki tiga garis warna mendatar merah, putih, hitam dengan lambang burung elang emas di tengahnya.', 'parent_note' => 'Tunjukkan lambang burung elang emas yang gagah di tengah bendera.', 'sort_order' => 4],
                    ['title' => 'Bendera Uni Emirat Arab', 'subtitle' => 'E-mi-rat A-rab', 'icon_emoji' => '🇦🇪', 'sound_effect' => 'Empat Warna Persaudaraan', 'speech_text' => 'Bendera Uni Emirat Arab! Memiliki garis tegak merah di kiri serta tiga garis mendatar hijau, putih, dan hitam.', 'parent_note' => 'Sebutkan empat warna yang ada pada bendera Uni Emirat Arab.', 'sort_order' => 5],
                    ['title' => 'Bendera Thailand', 'subtitle' => 'Thai-land (2 Suku Kata)', 'icon_emoji' => '🇹🇭', 'sound_effect' => 'Lima Garis Warna Harmoni', 'speech_text' => 'Bendera Thailand! Memiliki lima garis mendatar merah, putih, biru tua di tengah, putih, dan merah.', 'parent_note' => 'Perhatikan pola garis merah putih biru yang simetris rapi.', 'sort_order' => 6],
                    ['title' => 'Bendera Filipina', 'subtitle' => 'Fi-li-pi-na', 'icon_emoji' => '🇵🇭', 'sound_effect' => 'Matahari Delapan Sinar', 'speech_text' => 'Bendera Filipina! Memiliki garis biru dan merah dengan segitiga putih bergambar matahari kuning delapan sinar.', 'parent_note' => 'Tunjukkan gambar matahari kuning di dalam segitiga putihnya.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Bendera Inggris (United Kingdom)', 'subtitle' => 'Ing-gris (2 Suku Kata)', 'icon_emoji' => '🇬🇧', 'sound_effect' => 'Union Jack Salib Megah', 'speech_text' => 'Bendera Inggris! Dikenal sebagai Union Jack dengan perpaduan garis salib merah dan putih di atas kain biru tua.', 'parent_note' => 'Tunjukkan pola salib merah putih yang bersilangan khas.', 'sort_order' => 1],
                    ['title' => 'Bendera Jerman', 'subtitle' => 'Jer-man (2 Suku Kata)', 'icon_emoji' => '🇩🇪', 'sound_effect' => 'Hitam Merah Emas', 'speech_text' => 'Bendera Jerman! Memiliki tiga garis warna mendatar yang tegas yaitu hitam di atas, merah di tengah, dan emas di bawah.', 'parent_note' => 'Sebutkan urutan warna bendera Jerman dari atas ke bawah.', 'sort_order' => 2],
                    ['title' => 'Bendera Prancis', 'subtitle' => 'Pran-cis (2 Suku Kata)', 'icon_emoji' => '🇫🇷', 'sound_effect' => 'Triwarna Biru Putih Merah', 'speech_text' => 'Bendera Prancis! Terdiri dari tiga garis warna tegak berdiri yaitu biru di kiri, putih di tengah, dan merah di kanan.', 'parent_note' => 'Kenalkan konsep bendera tiga warna tegak yang terkenal di Eropa.', 'sort_order' => 3],
                    ['title' => 'Bendera Italia', 'subtitle' => 'I-ta-lia (3 Suku Kata)', 'icon_emoji' => '🇮🇹', 'sound_effect' => 'Triwarna Hijau Putih Merah', 'speech_text' => 'Bendera Italia! Mirip dengan bendera Prancis, tetapi memiliki warna hijau segar di kiri, putih di tengah, dan merah di kanan.', 'parent_note' => 'Bandingkan perbedaan warna hijau pada bendera Italia dengan biru pada bendera Prancis.', 'sort_order' => 4],
                    ['title' => 'Bendera Australia', 'subtitle' => 'Aus-tra-lia (4 Suku Kata)', 'icon_emoji' => '🇦🇺', 'sound_effect' => 'Bintang Salib Selatan', 'speech_text' => 'Bendera Australia! Berwarna dasar biru dengan bendera Union Jack kecil di sudut dan gugusan bintang Salib Selatan.', 'parent_note' => 'Hitung bintang-bintang putih yang ada di bendera Australia.', 'sort_order' => 5],
                    ['title' => 'Bendera Brasil', 'subtitle' => 'Bra-sil (2 Suku Kata)', 'icon_emoji' => '🇧🇷', 'sound_effect' => 'Hijau Tropis & Kuning Emas', 'speech_text' => 'Bendera Brasil! Berwarna hijau tropis dengan belah ketupat kuning dan bola biru langit berbintang di tengahnya.', 'parent_note' => 'Ceritakan tentang alam tropis dan hutan Amazon di Brasil.', 'sort_order' => 6],
                ],
            ],

            'tubuh' => [
                1 => [
                    ['title' => 'Mata Indah Melihat', 'subtitle' => 'Ma-ta (2 Suku Kata)', 'icon_emoji' => '👀', 'sound_effect' => 'Kedip Mata Sehat', 'speech_text' => 'Mata! Kita memiliki dua mata indah untuk melihat indahnya warna-warni dunia dan membaca buku.', 'parent_note' => 'Minta anak menutup mata sejenak lalu membukanya sambil bersyukur.', 'sort_order' => 1],
                    ['title' => 'Telinga Cermat Mendengar', 'subtitle' => 'Te-li-nga (3 Suku Kata)', 'icon_emoji' => '👂', 'sound_effect' => 'Dengar Suara Merdu', 'speech_text' => 'Telinga! Berada di kanan dan kiri kepala untuk mendengar lantunan ayat suci, musik, dan nasehat orang tua.', 'parent_note' => 'Ajak anak mendengarkan suara burung atau musik lembut di sekitarnya.', 'sort_order' => 2],
                    ['title' => 'Hidung Bersih Bernapas', 'subtitle' => 'Hi-dung (2 Suku Kata)', 'icon_emoji' => '👃', 'sound_effect' => 'Tarik Napas Segar', 'speech_text' => 'Hidung! Berada di tengah wajah untuk menghirup udara segar yang bersih dan mencium wangi bunga.', 'parent_note' => 'Latih anak menarik napas dalam-dalam lewat hidung dan menghembuskannya perlahan.', 'sort_order' => 3],
                    ['title' => 'Lidah Pengecap Rasa', 'subtitle' => 'Li-dah (2 Suku Kata)', 'icon_emoji' => '👅', 'sound_effect' => 'Kecap Rasa Manis Lezat', 'speech_text' => 'Lidah! Indra pengecap yang merasakan lezatnya rasa manis, asin gurih, asam segar, dan pahit.', 'parent_note' => 'Tanyakan rasa buah-buahan yang disukai anak saat makan.', 'sort_order' => 4],
                    ['title' => 'Tangan Terampil Meraba', 'subtitle' => 'Ta-ngan (2 Suku Kata)', 'icon_emoji' => '✋', 'sound_effect' => 'Sentuhan Lembut & Tos', 'speech_text' => 'Tangan! Memiliki sepuluh jari terampil untuk menulis, meraba permukaan halus kasar, dan menolong teman.', 'parent_note' => 'Beri tos tangan ceria (high-five) bersama anak.', 'sort_order' => 5],
                    ['title' => 'Mulut & Senyum Manis', 'subtitle' => 'Mu-lut (2 Suku Kata)', 'icon_emoji' => '👄', 'sound_effect' => 'Tawa Bahagia Ceria', 'speech_text' => 'Mulut! Untuk berbicara kata-kata yang sopan, makan makanan bergizi, dan tersenyum ramah.', 'parent_note' => 'Ajak anak tersenyum lebar dan menyapa keluarga dengan santun.', 'sort_order' => 6],
                    ['title' => 'Gigi Putih & Bersih', 'subtitle' => 'Gi-gi (2 Suku Kata)', 'icon_emoji' => '🦷', 'sound_effect' => 'Kriuk Kunyah Makanan', 'speech_text' => 'Gigi! Barisan putih kuat di dalam mulut yang bertugas mengunyah makanan agar mudah dicerna tubuh.', 'parent_note' => 'Ingatkan anak rutin menggosok gigi pagi hari dan sebelum tidur malam.', 'sort_order' => 7],
                ],
                2 => [
                    ['title' => 'Kaki Kuat Melangkah', 'subtitle' => 'Ka-ki (2 Suku Kata)', 'icon_emoji' => '🦵', 'sound_effect' => 'Lari & Lompat Ceria', 'speech_text' => 'Kaki! Otot kaki yang kuat menopang tubuh kita untuk melangkah, berlari kencang, dan melompat tinggi.', 'parent_note' => 'Ajak anak berdiri seimbang dengan satu kaki selama 3 detik.', 'sort_order' => 1],
                    ['title' => 'Telapak Kaki Berpijak', 'subtitle' => 'Te-la-pak Ka-ki', 'icon_emoji' => '🦶', 'sound_effect' => 'Tap-tap Berpijak Aman', 'speech_text' => 'Telapak Kaki! Bagian bawah kaki yang kokoh berpijak di tanah dan dilindungi oleh sepatu yang nyaman.', 'parent_note' => 'Tunjukkan pentingnya menjaga kebersihan telapak kaki dan mencucinya sebelum tidur.', 'sort_order' => 2],
                    ['title' => 'Otot Lengan Perkasa', 'subtitle' => 'O-tot (2 Suku Kata)', 'icon_emoji' => '💪', 'sound_effect' => 'Kuat Angkat Benda Ringan', 'speech_text' => 'Otot! Jaringan kuat bertenaga di lengan kita yang membuat kita semangat bergerak dan berolahraga.', 'parent_note' => 'Ajak anak meregangkan lengan dan bergaya kuat penuh semangat.', 'sort_order' => 3],
                    ['title' => 'Kepala & Wajah Ceria', 'subtitle' => 'Ke-pa-la (3 Suku Kata)', 'icon_emoji' => '👶', 'sound_effect' => 'Angguk Kepala Pintar', 'speech_text' => 'Kepala! Bagian tubuh atas tempat beradanya indra wajah serta tempurung yang melindungi otak pintar.', 'parent_note' => 'Ajak anak menganggukkan kepala tanda mengerti dengan sopan.', 'sort_order' => 4],
                    ['title' => 'Rambut Kepala Rapi', 'subtitle' => 'Ram-but (2 Suku Kata)', 'icon_emoji' => '💇', 'sound_effect' => 'Sisir Rambut Rapi', 'speech_text' => 'Rambut! Mahkota alami di atas kepala yang selalu kita rawat dengan keramas dan disisir rapi.', 'parent_note' => 'Biasakan anak mandiri menyisir rambut di depan cermin.', 'sort_order' => 5],
                    ['title' => 'Ibu Jari Jempol Hebat', 'subtitle' => 'Jem-pol (2 Suku Kata)', 'icon_emoji' => '👍', 'sound_effect' => 'Jempol Acung Keren', 'speech_text' => 'Jempol! Jari tangan yang gagah diacungkan ke atas sebagai tanda pujian untuk anak yang hebat dan berprestasi.', 'parent_note' => 'Berikan acungan dua jempol saat anak berhasil menyelesaikan tugasnya.', 'sort_order' => 6],
                    ['title' => 'Telapak Tepuk Tangan', 'subtitle' => 'Te-puk Ta-ngan', 'icon_emoji' => '👏', 'sound_effect' => 'Prok-prok Tepuk Tangan', 'speech_text' => 'Tepuk Tangan! Dua telapak tangan yang saling bertepuk gembira untuk memberi semangat dan tepuk tangan ceria.', 'parent_note' => 'Ajak anak bertepuk tangan berirama mengikuti nada lagu ceria.', 'sort_order' => 7],
                ],
                3 => [
                    ['title' => 'Otak Cerdas Berpikir', 'subtitle' => 'O-tak (2 Suku Kata)', 'icon_emoji' => '🧠', 'sound_effect' => 'Ting! Ide Cerdas Muncul', 'speech_text' => 'Otak! Pusat kendali berpikir yang luar biasa hebat di dalam kepala untuk belajar, mengingat, dan berkarya.', 'parent_note' => 'Ceritakan bagaimana makanan bergizi dan istirahat cukup membuat otak semakin cerdas.', 'sort_order' => 1],
                    ['title' => 'Jantung Pemompa Darah', 'subtitle' => 'Jan-tung (2 Suku Kata)', 'icon_emoji' => '🫀', 'sound_effect' => 'Deg-deg Detak Jantung Sehat', 'speech_text' => 'Jantung! Organ berharga di dalam dada yang berdetak tak kenal lelah memompa darah segar ke seluruh tubuh.', 'parent_note' => 'Ajak anak menempelkan tangan di dada kiri untuk merasakan detak jantungnya.', 'sort_order' => 2],
                    ['title' => 'Paru-Paru Pernapasan', 'subtitle' => 'Pa-ru-pa-ru', 'icon_emoji' => '🫁', 'sound_effect' => 'Hembusan Napas Segar', 'speech_text' => 'Paru-paru! Sepasang organ pernapasan di rongga dada yang menerima udara segar beroksigen bersih.', 'parent_note' => 'Ajak anak berolahraga di pagi hari untuk menyerap udara segar pegunungan.', 'sort_order' => 3],
                    ['title' => 'Tulang Rangka Kokoh', 'subtitle' => 'Tu-lang (2 Suku Kata)', 'icon_emoji' => '🦴', 'sound_effect' => 'Tubuh Tegak Kokoh', 'speech_text' => 'Tulang! Rangka keras dan kokoh yang menopang tubuh kita sehingga kita bisa berdiri tegak dan bergerak lincah.', 'parent_note' => 'Ingatkan anak rajin minum susu yang kaya kalsium untuk pertumbuhan tulang.', 'sort_order' => 4],
                    ['title' => 'Jabat Tangan Sahabat', 'subtitle' => 'Ja-bat Ta-ngan', 'icon_emoji' => '🤝', 'sound_effect' => 'Salam Hangat Sahabat', 'speech_text' => 'Jabat Tangan! Sentuhan hangat kedua tangan yang melambangkan persahabatan, perdamaian, dan saling menghormati.', 'parent_note' => 'Biasakan anak mencium tangan orang tua dan guru saat bersalaman.', 'sort_order' => 5],
                    ['title' => 'Jejak Langkah Kaki Cilik', 'subtitle' => 'Je-jak Ka-ki', 'icon_emoji' => '👣', 'sound_effect' => 'Tapak Kaki Petualang', 'speech_text' => 'Jejak Kaki! Langkah-langkah kecil anak hebat yang terus melangkah maju meraih impian dan masa depan cerah.', 'parent_note' => 'Motivasi anak untuk selalu berani melangkah mencoba hal-hal baru yang positif.', 'sort_order' => 6],
                ],
            ],

            'alat-musik' => [
                1 => [
                    ['title' => 'Piano Tuts Indah', 'subtitle' => 'Pi-a-no (3 Suku Kata)', 'icon_emoji' => '🎹', 'sound_effect' => 'Ting-ting-ting! Melodi Indah Piano', 'speech_text' => 'Piano! Alat musik ber-tuts hitam putih yang menghasilkan melodi indah dan merdu.', 'parent_note' => 'Ajak anak menggerakkan jari-jarinya di atas meja seperti sedang menekan tuts piano.', 'sort_order' => 1],
                    ['title' => 'Gitar Petik Ceria', 'subtitle' => 'Gi-tar (2 Suku Kata)', 'icon_emoji' => '🎸', 'sound_effect' => 'Jreng-jreng-jreng! Petikan Senar Gitar', 'speech_text' => 'Gitar! Alat musik berdawai yang dimainkan dengan cara dipetik menggunakan jari tangan.', 'parent_note' => 'Tanyakan pada anak berapa jumlah senar pada gitar akustik.', 'sort_order' => 2],
                    ['title' => 'Drum Pukul Semangat', 'subtitle' => 'Drum (1 Suku Kata)', 'icon_emoji' => '🥁', 'sound_effect' => 'Duk-duk-tak! Irama Tabuhan Drum', 'speech_text' => 'Drum! Alat musik perkusi yang dipukul menggunakan stik untuk menjaga ketukan irama lagu.', 'parent_note' => 'Ajak anak bertepuk tangan mengikuti ketukan irama drum.', 'sort_order' => 3],
                    ['title' => 'Lonceng Musik Ceria', 'subtitle' => 'Lon-ceng (2 Suku Kata)', 'icon_emoji' => '🔔', 'sound_effect' => 'Kling-kling-kling! Gemerincing Lonceng', 'speech_text' => 'Lonceng! Alat musik logam yang berbunyi klinting merdu saat digoyangkan.', 'parent_note' => 'Ajak anak mendengarkan suara lonceng berdering.', 'sort_order' => 4],
                    ['title' => 'Headphone Musik Asyik', 'subtitle' => 'Head-phone (2 Suku Kata)', 'icon_emoji' => '🎧', 'sound_effect' => 'Suara Musik Jernih & Asyik', 'speech_text' => 'Headphone! Alat pendengar musik di telinga untuk mendengarkan lagu kesayangan dengan nyaman.', 'parent_note' => 'Ajarkan anak menjaga volume suara agar tidak terlalu keras demi kesehatan telinga.', 'sort_order' => 5],
                    ['title' => 'Radio Musik Ceria', 'subtitle' => 'Ra-di-o (3 Suku Kata)', 'icon_emoji' => '📻', 'sound_effect' => 'Alunan Siaran Lagu Gembira', 'speech_text' => 'Radio! Kotak pemutar musik dan cerita dongeng seru untuk menemani belajar.', 'parent_note' => 'Ceritakan pada anak bahwa radio memutar lagu-lagu anak nusantara.', 'sort_order' => 6],
                ],
                2 => [
                    ['title' => 'Terompet Tiup Megah', 'subtitle' => 'Te-rom-pet (3 Suku Kata)', 'icon_emoji' => '🎺', 'sound_effect' => 'Tet-tooot! Tiupan Kencang Terompet', 'speech_text' => 'Terompet! Alat musik tiup dari logam kuningan yang bersuara lantang dan megah.', 'parent_note' => 'Minta anak menirukan gerakan memegang dan meniup terompet.', 'sort_order' => 1],
                    ['title' => 'Biola Gesek Lembut', 'subtitle' => 'Bi-o-la (3 Suku Kata)', 'icon_emoji' => '🎻', 'sound_effect' => 'Ngiing-ngiing! Gesekan Halus Biola', 'speech_text' => 'Biola! Alat musik dawai bertubuh kayu yang dimainkan dengan cara digesek menggunakan busur.', 'parent_note' => 'Peragakan cara meletakkan biola di antara bahu dan dagu.', 'sort_order' => 2],
                    ['title' => 'Saxophone Melodi Merdu', 'subtitle' => 'Sak-so-fon (3 Suku Kata)', 'icon_emoji' => '🎷', 'sound_effect' => 'Tuut-tuut-tuuu! Alunan Manis Saxophone', 'speech_text' => 'Saxophone! Alat musik tiup berkilau keemasan dengan suara melengkung yang sangat merdu.', 'parent_note' => 'Jelaskan bahwa saxophone ditiup melalui corong tiup di bagian atas.', 'sort_order' => 3],
                    ['title' => 'Banjo Petik Ceria', 'subtitle' => 'Ban-jo (2 Suku Kata)', 'icon_emoji' => '🪕', 'sound_effect' => 'Plang-plang-jreng! Petikan Ceria Banjo', 'speech_text' => 'Banjo! Alat musik petik berbentuk bundar yang berbunyi gembira dan bersemangat.', 'parent_note' => 'Tunjukkan bentuk lingkaran bulat pada badan alat musik banjo.', 'sort_order' => 4],
                    ['title' => 'Speaker Musik Keras', 'subtitle' => 'Spea-ker (2 Suku Kata)', 'icon_emoji' => '🔊', 'sound_effect' => 'Boom-boom! Dentuman Speaker Mantap', 'speech_text' => 'Speaker! Pengeras suara musik agar lagu terdengar meriah di seluruh ruangan.', 'parent_note' => 'Ajak anak menari riang bersama saat musik diputar di speaker.', 'sort_order' => 5],
                    ['title' => 'Not Balok Ceria', 'subtitle' => 'Not Ba-lok (3 Suku Kata)', 'icon_emoji' => '🎵', 'sound_effect' => 'Ting-ting Nada Ceria', 'speech_text' => 'Not Balok! Simbol tanda nada untuk menuliskan tinggi rendahnya bunyi musik.', 'parent_note' => 'Tunjukkan bentuk bulatan dan tangkai pada not balok.', 'sort_order' => 6],
                ],
                3 => [
                    ['title' => 'Akordeon Lipat Harmoni', 'subtitle' => 'A-kor-de-on (4 Suku Kata)', 'icon_emoji' => '🪗', 'sound_effect' => 'Teeet-tet-tet! Pompa Udara Akordeon', 'speech_text' => 'Akordeon! Alat musik unik yang dimainkan dengan cara ditarik-didorong sambil menekan tombol nada.', 'parent_note' => 'Tunjukkan bagaimana akordeon memompa udara untuk menghasilkan bunyi indah.', 'sort_order' => 1],
                    ['title' => 'Kendang Tabuh Irama', 'subtitle' => 'Ken-dang (2 Suku Kata)', 'icon_emoji' => '🪘', 'sound_effect' => 'Tung-tung-plak! Tabuhan Gendang Ceria', 'speech_text' => 'Kendang! Alat musik tradisional berkulit yang ditabuh menggunakan telapak tangan.', 'parent_note' => 'Ajak anak menepuk paha berirama seperti menabuh kendang.', 'sort_order' => 2],
                    ['title' => 'Terompet Tanduk (Horn)', 'subtitle' => 'Te-rom-pet Tan-duk', 'icon_emoji' => '📯', 'sound_effect' => 'Puuu-puuu! Tiupan Bergema Jauh', 'speech_text' => 'Terompet Tanduk! Alat musik tiup melingkar yang bersuara dalam dan bergema gagah.', 'parent_note' => 'Peragakan cara meniup terompet tanduk yang melingkar.', 'sort_order' => 3],
                    ['title' => 'Mikrofon Bernyanyi', 'subtitle' => 'Mik-ro-fon (3 Suku Kata)', 'icon_emoji' => '🎙️', 'sound_effect' => 'La-la-la! Suara Vokal Merdu', 'speech_text' => 'Mikrofon! Alat pengeras suara untuk bernyanyi lagu ceria bersama teman-teman.', 'parent_note' => 'Ajak anak bernyanyi bersama menggunakan kepalan tangan sebagai mikrofon.', 'sort_order' => 4],
                    ['title' => 'Partitur Buku Lagu', 'subtitle' => 'Par-ti-tur (3 Suku Kata)', 'icon_emoji' => '🎼', 'sound_effect' => 'Lembaran Partitur Musik', 'speech_text' => 'Partitur Musik! Buku lembaran kertas yang berisi garis paranada dan not balok lagu.', 'parent_note' => 'Jelaskan bahwa pemain musik membaca partitur saat memainkan konser.', 'sort_order' => 5],
                    ['title' => 'Tangga Nada Harmoni', 'subtitle' => 'Tang-ga Na-da (4 Suku Kata)', 'icon_emoji' => '🎶', 'sound_effect' => 'Do-Re-Mi-Fa-Sol-La-Si-Do', 'speech_text' => 'Tangga Nada! Urutan nada indah: Do, Re, Mi, Fa, Sol, La, Si, Do yang berpadu harmonis!', 'parent_note' => 'Ajak anak menyanyikan Do-Re-Mi bersama-sama naik dan turun.', 'sort_order' => 6],
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

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\LearningLevel;
use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materialBank = [
            'hewan' => [
                1 => [
                    [
                        'title' => 'Singa Si Raja Hutan',
                        'subtitle' => 'Si-nga (2 Suku Kata)',
                        'icon_emoji' => '🦁',
                        'sound_effect' => 'Auman Singa Menggelegar (Roaaar!)',
                        'speech_text' => 'Singa! Hewan yang sangat gagah dan memiliki surai lebat di lehernya. Roaaar!',
                        'parent_note' => 'Ajak anak menirukan pose cakar singa dan auman ramahnya untuk melatih motorik kasar.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Gajah Belalai Panjang',
                        'subtitle' => 'Ga-jah (2 Suku Kata)',
                        'icon_emoji' => '🐘',
                        'sound_effect' => 'Suara Terompet Belalai Gajah (Pruuuut!)',
                        'speech_text' => 'Gajah! Hewan darat terbesar dengan telinga lebar dan belalai yang panjang.',
                        'parent_note' => 'Diskusikan bagaimana gajah menggunakan belalainya untuk minum air dan menyapa kawanannya.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Kelinci Putih Lucu',
                        'subtitle' => 'Ke-lin-ci (3 Suku Kata)',
                        'icon_emoji' => '🐰',
                        'sound_effect' => 'Lompatan Ceria Kelinci (Boing-boing!)',
                        'speech_text' => 'Kelinci! Hewan menggemaskan bertelinga panjang yang sangat suka makan wortel segar.',
                        'parent_note' => 'Minta anak melompat 3 kali seperti kelinci untuk melatih keseimbangan fisik.',
                        'sort_order' => 3,
                    ],
                ],
                2 => [
                    [
                        'title' => 'Lumba-Lumba Cerdas',
                        'subtitle' => 'Lum-ba Lum-ba (4 Suku Kata)',
                        'icon_emoji' => '🐬',
                        'sound_effect' => 'Kecipak Air Laut & Siulan Ceria',
                        'speech_text' => 'Lumba-lumba! Mamalia laut yang sangat ramah dan pandai melompat tinggi di atas ombak.',
                        'parent_note' => 'Jelaskan bahwa lumba-lumba bernapas menggunakan paru-paru seperti manusia.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Jerapah Berleher Jenjang',
                        'subtitle' => 'Je-ra-pah (3 Suku Kata)',
                        'icon_emoji' => '🦒',
                        'sound_effect' => 'Kunyah Daun Pucuk Pohon',
                        'speech_text' => 'Jerapah! Hewan tertinggi di dunia yang dapat menjangkau daun muda di puncak pohon tinggi.',
                        'parent_note' => 'Tunjukkan bagaimana jerapah berdiri tegak dan memiliki corak tubuh polkadot cokelat.',
                        'sort_order' => 2,
                    ],
                ],
                3 => [
                    [
                        'title' => 'Burung Elang Penjelajah Angkasa',
                        'subtitle' => 'Bu-rung E-lang (4 Suku Kata)',
                        'icon_emoji' => '🦅',
                        'sound_effect' => 'Kepakan Sayap Elang Gagah',
                        'speech_text' => 'Burung Elang! Penguasa langit dengan penglihatan tajam dari kejauhan.',
                        'parent_note' => 'Latih konsentrasi visual anak dengan mengamati benda-benda kecil di sekitar rumah.',
                        'sort_order' => 1,
                    ],
                ],
            ],
            'angka' => [
                1 => [
                    [
                        'title' => 'Angka Satu (1)',
                        'subtitle' => 'Sa-tu (1 Balon Merah)',
                        'icon_emoji' => '1️⃣',
                        'sound_effect' => 'Dentang Lonceng Satu Kali (Ting!)',
                        'speech_text' => 'Satu! Seperti satu buah matahari yang bersinar terang di langit pagi!',
                        'parent_note' => 'Minta anak menunjukkan satu jari telunjuk ke atas.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Angka Dua (2)',
                        'subtitle' => 'Du-a (2 Bebek Berenang)',
                        'icon_emoji' => '2️⃣',
                        'sound_effect' => 'Suara Bebek (Kwek kwek!)',
                        'speech_text' => 'Dua! Seperti dua mata kita yang indah untuk melihat dunia ceria!',
                        'parent_note' => 'Sentuh kedua mata anak sambil mengucapkan rasa syukur.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Angka Tiga (3)',
                        'subtitle' => 'Ti-ga (3 Bintang Emas)',
                        'icon_emoji' => '3️⃣',
                        'sound_effect' => 'Gemerincing Bintang (Tinkle!)',
                        'speech_text' => 'Tiga! Tiga sudut segitiga seperti bentuk potongan pizza lezat!',
                        'parent_note' => 'Hitung 3 mainan favorit anak secara bersama-sama.',
                        'sort_order' => 3,
                    ],
                ],
                2 => [
                    [
                        'title' => 'Angka Empat (4)',
                        'subtitle' => 'Em-pat (4 Kaki Meja)',
                        'icon_emoji' => '4️⃣',
                        'sound_effect' => 'Langkah Kaki Ceria (Tap tap!)',
                        'speech_text' => 'Empat! Seperti empat roda pada mobil ayah yang siap meluncur!',
                        'parent_note' => 'Ajak anak menghitung 4 kaki kursi atau meja di ruangan.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Angka Lima (5)',
                        'subtitle' => 'Li-ma (5 Jari Tangan)',
                        'icon_emoji' => '5️⃣',
                        'sound_effect' => 'Tepuk Tangan Lima Jari (Prok prok!)',
                        'speech_text' => 'Lima! Tos lima jari tangan yang kuat dan selalu siap membantu sesama!',
                        'parent_note' => 'Beri anak tos ceria (*high five*) 5 jari tangan!',
                        'sort_order' => 2,
                    ],
                ],
                3 => [
                    [
                        'title' => 'Angka Sepuluh (10)',
                        'subtitle' => 'Se-pu-luh (10 Jari Lengkap)',
                        'icon_emoji' => '🔟',
                        'sound_effect' => 'Fanfare Kemenangan Angka',
                        'speech_text' => 'Sepuluh! Sepuluh jari tangan kita yang pintar menulis dan menggambar!',
                        'parent_note' => 'Rentangkan seluruh jari tangan kanan dan kiri untuk menghitung dari 1 sampai 10.',
                        'sort_order' => 1,
                    ],
                ],
            ],
            'abjad' => [
                1 => [
                    [
                        'title' => 'Huruf Vokal A (Apel)',
                        'subtitle' => 'A - A - Apel Manis',
                        'icon_emoji' => '🅰️',
                        'sound_effect' => 'Pelafalan Fonik Huruf A',
                        'speech_text' => 'A! Buka mulutmu lebar-lebar: A-A-Apel merah yang renyah dan manis!',
                        'parent_note' => 'Latih artikulasi mulut anak saat mengucapkan fonik huruf A terbuka lebar.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Huruf Vokal I (Ikan)',
                        'subtitle' => 'I - I - Ikan Berenang',
                        'icon_emoji' => 'ℹ️',
                        'sound_effect' => 'Pelafalan Fonik Huruf I',
                        'speech_text' => 'I! Senyum manis terlihat gigi: I-I-Ikan lincah berenang di sungai jernih!',
                        'parent_note' => 'Ajak anak tersenyum lebar saat membunyikan huruf I.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Huruf Vokal U (Udang)',
                        'subtitle' => 'U - U - Udang Laut',
                        'icon_emoji' => '⛎',
                        'sound_effect' => 'Pelafalan Fonik Huruf U',
                        'speech_text' => 'U! Bibir membulat ke depan: U-U-Udang melengkung di dalam air!',
                        'parent_note' => 'Bentuk bibir mengerucut membulat bersama anak.',
                        'sort_order' => 3,
                    ],
                ],
                2 => [
                    [
                        'title' => 'Huruf Konsonan B (Bola)',
                        'subtitle' => 'B - B - Bo-la Bulat',
                        'icon_emoji' => '🅱️',
                        'sound_effect' => 'Pantulan Bola (Boing!)',
                        'speech_text' => 'B! Bibir rapat lalu lepas: B-B-Bola yang membal tinggi ke atas!',
                        'parent_note' => 'Rasakan hembusan udara lembut saat membunyikan fonik /b/.',
                        'sort_order' => 1,
                    ],
                ],
                3 => [
                    [
                        'title' => 'Membaca Kata B-A-T-U',
                        'subtitle' => 'Ba - Tu (2 Suku Kata)',
                        'icon_emoji' => '🔤',
                        'sound_effect' => 'Tepukan Ritme Suku Kata',
                        'speech_text' => 'Batu! B-A berbunyi Ba, T-U berbunyi Tu. Dibaca: Batu!',
                        'parent_note' => 'Tepuk tangan dua kali mengikuti ketukan suku kata Ba-Tu.',
                        'sort_order' => 1,
                    ],
                ],
            ],
            'buah' => [
                1 => [
                    [
                        'title' => 'Buah Apel Merah',
                        'subtitle' => 'A-pel (Kaya Vitamin C)',
                        'icon_emoji' => '🍎',
                        'sound_effect' => 'Gigitan Renyah Apel (Kriuk!)',
                        'speech_text' => 'Apel! Buah merah ranum yang kaya serat dan membuat tubuh kita sehat kuat!',
                        'parent_note' => 'Kenalkan warna merah dan rasa manis buah apel.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Buah Pisang Kuning',
                        'subtitle' => 'Pi-sang (Kaya Energi)',
                        'icon_emoji' => '🍌',
                        'sound_effect' => 'Kupas Kulit Pisang',
                        'speech_text' => 'Pisang! Buah kuning manis yang disukai anak ceria dan kera pintar!',
                        'parent_note' => 'Latih motorik halus anak dengan mempraktekkan cara mengupas kulit pisang.',
                        'sort_order' => 2,
                    ],
                ],
                2 => [
                    [
                        'title' => 'Buah Jeruk Segar',
                        'subtitle' => 'Je-ruk (Kaya Vitamin C)',
                        'icon_emoji' => '🍊',
                        'sound_effect' => 'Perasan Sari Jeruk Segar',
                        'speech_text' => 'Jeruk! Buah bulat oranye dengan bulir manis segar penambah imun tubuh!',
                        'parent_note' => 'Kenalkan sensasi rasa manis-asam yang menyegarkan lidah.',
                        'sort_order' => 1,
                    ],
                ],
                3 => [
                    [
                        'title' => 'Buah Semangka Manis',
                        'subtitle' => 'Se-mang-ka (Segar Berair)',
                        'icon_emoji' => '🍉',
                        'sound_effect' => 'Potongan Buah Semangka',
                        'speech_text' => 'Semangka! Kulitnya hijau belang, dagingnya merah manis berair!',
                        'parent_note' => 'Diskusikan perbedaan warna kulit luar hijau dan daging buah merah.',
                        'sort_order' => 1,
                    ],
                ],
            ],
            'warna' => [
                1 => [
                    [
                        'title' => 'Warna Merah Menyala',
                        'subtitle' => 'Me-rah (Warna Primer)',
                        'icon_emoji' => '🔴',
                        'sound_effect' => 'Percikan Warna Ceria',
                        'speech_text' => 'Merah! Warna cerah berani seperti buah stroberi dan mobil pemadam kebakaran!',
                        'parent_note' => 'Ajak anak menunjuk benda berwarna merah di sekitar ruangan.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Warna Biru Langit',
                        'subtitle' => 'Bi-ru (Warna Primer)',
                        'icon_emoji' => '🔵',
                        'sound_effect' => 'Desiran Angin Langit',
                        'speech_text' => 'Biru! Warna sejuk menenangkan seperti langit cerah dan laut yang luas!',
                        'parent_note' => 'Lihat pemandangan langit bersama anak di pagi hari.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Warna Kuning Mentari',
                        'subtitle' => 'Ku-ning (Warna Primer)',
                        'icon_emoji' => '🟡',
                        'sound_effect' => 'Kilauan Sinar Matahari',
                        'speech_text' => 'Kuning! Warna gembira seperti matahari pagi dan bunga matahari yang mekar!',
                        'parent_note' => 'Kenalkan warna kuning hangat pada buah lemon atau pisang.',
                        'sort_order' => 3,
                    ],
                ],
                2 => [
                    [
                        'title' => 'Warna Hijau Daun',
                        'subtitle' => 'Hi-jau (Biru + Kuning)',
                        'icon_emoji' => '🟢',
                        'sound_effect' => 'Gemerisik Dedaunan Pohon',
                        'speech_text' => 'Hijau! Warna alam yang asri pada daun pepohonan dan rumput taman!',
                        'parent_note' => 'Perlihatkan bagaimana mencampur warna biru dan kuning menghasilkan warna hijau.',
                        'sort_order' => 1,
                    ],
                ],
                3 => [
                    [
                        'title' => 'Bentuk Bintang Geometri',
                        'subtitle' => 'Bin-tang (5 Sudut Lancip)',
                        'icon_emoji' => '⭐',
                        'sound_effect' => 'Kelap-kelip Bintang Malam',
                        'speech_text' => 'Bintang! Bentuk indah berujung lima yang bersinar gemerlap di langit malam!',
                        'parent_note' => 'Hitung kelima ujung sudut bintang bersama anak.',
                        'sort_order' => 1,
                    ],
                ],
            ],
            'kendaraan' => [
                1 => [
                    [
                        'title' => 'Mobil Keluarga Ceria',
                        'subtitle' => 'Mo-bil (Transportasi Darat)',
                        'icon_emoji' => '🚗',
                        'sound_effect' => 'Klakson Mobil (Bim bim!)',
                        'speech_text' => 'Mobil! Kendaraan darat beroda empat yang nyaman untuk jalan-jalan bersama keluarga!',
                        'parent_note' => 'Kenalkan pentingnya memakai sabuk pengaman saat naik mobil.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Pesawat Terbang Angkasa',
                        'subtitle' => 'Pe-sa-wat (Transportasi Udara)',
                        'icon_emoji' => '✈️',
                        'sound_effect' => 'Deru Mesin Jet Pesawat Terbang',
                        'speech_text' => 'Pesawat! Burung besi raksasa yang terbang tinggi melintasi awan putih di langit!',
                        'parent_note' => 'Ajak anak merentangkan tangan seperti sayap pesawat terbang.',
                        'sort_order' => 2,
                    ],
                ],
                2 => [
                    [
                        'title' => 'Kapal Laut Samudra',
                        'subtitle' => 'Ka-pal (Transportasi Laut)',
                        'icon_emoji' => '🚢',
                        'sound_effect' => 'Terompet Kapal Laut (Tuuut!)',
                        'speech_text' => 'Kapal! Kendaraan air besar yang mengarungi ombak samudra luas!',
                        'parent_note' => 'Diskusikan mengapa kapal dapat mengapung di atas permukaan air laut.',
                        'sort_order' => 1,
                    ],
                ],
                3 => [
                    [
                        'title' => 'Kereta Api Ekspres',
                        'subtitle' => 'Ke-re-ta A-pi (Rel Darat)',
                        'icon_emoji' => '🚆',
                        'sound_effect' => 'Suara Roda Rel Kereta (Jes gujes gujes!)',
                        'speech_text' => 'Kereta Api! Rangkaian gerbong panjang yang meluncur cepat di atas rel baja!',
                        'parent_note' => 'Nyanyikan lagu anak Naik Kereta Api bersama-sama secara ceria.',
                        'sort_order' => 1,
                    ],
                ],
            ],
        ];

        foreach ($materialBank as $catSlug => $levels) {
            $cat = Category::where('slug', $catSlug)->first();
            if (! $cat) {
                continue;
            }

            foreach ($levels as $levelNum => $cards) {
                $lvl = LearningLevel::where('category_id', $cat->id)->where('level_number', $levelNum)->first();
                if (! $lvl) {
                    continue;
                }

                foreach ($cards as $card) {
                    Material::updateOrCreate(
                        [
                            'learning_level_id' => $lvl->id,
                            'title' => $card['title'],
                        ],
                        $card
                    );
                }
            }
        }
    }
}

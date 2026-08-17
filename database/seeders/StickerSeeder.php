<?php

namespace Database\Seeders;

use App\Models\Sticker;
use Illuminate\Database\Seeder;

class StickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stickers = [
            // ==========================================
            // KATEGORI 1: 🦁 HEWAN (12 Stiker: 3 - 90 Bintang)
            // ==========================================
            ['name' => 'Dino Pemberani', 'emoji' => '🦖', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 3, 'description' => 'Sahabat dino cilik yang selalu ceria dan berani!'],
            ['name' => 'Kucing Cerdas Kiki', 'emoji' => '🐱', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 5, 'description' => 'Maskot ramah pemandu petualangan belajar PAUD.'],
            ['name' => 'Kelinci Lincah', 'emoji' => '🐰', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 15, 'description' => 'Cepat dan tanggap menjawab tantangan kuis.'],
            ['name' => 'Koala Ceria', 'emoji' => '🐨', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 20, 'description' => 'Belajar santai dan bahagia setiap hari.'],
            ['name' => 'Beruang Madu Hebat', 'emoji' => '🐻', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 25, 'description' => 'Manis, rajin, dan pantang menyerah.'],
            ['name' => 'Penyu Samudra Gigih', 'emoji' => '🐢', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 30, 'description' => 'Pelan tapi pasti menyelesaikan setiap modul.'],
            ['name' => 'Kupu-Kupu Cantik', 'emoji' => '🦋', 'category' => 'hewan', 'rarity' => 'common', 'required_stars' => 35, 'description' => 'Sayap indah hasil rajin belajar dan berproses.'],
            ['name' => 'Singa Juara Rimba', 'emoji' => '🦁', 'category' => 'hewan', 'rarity' => 'rare', 'required_stars' => 40, 'description' => 'Raja satwa bijak pelindung hutan ceria.'],
            ['name' => 'Panda Sahabat Cilik', 'emoji' => '🐼', 'category' => 'hewan', 'rarity' => 'rare', 'required_stars' => 50, 'description' => 'Paling suka membantu teman di Panggung Sahabat.'],
            ['name' => 'Gajah Bijak', 'emoji' => '🐘', 'category' => 'hewan', 'rarity' => 'rare', 'required_stars' => 60, 'description' => 'Ingatan kuat dan pendengar yang sangat baik.'],
            ['name' => 'Burung Hantu Pintar', 'emoji' => '🦉', 'category' => 'hewan', 'rarity' => 'rare', 'required_stars' => 75, 'description' => 'Kolektor ilmu pengetahuan dan pembaca buku setia.'],
            ['name' => 'Lumba-Lumba Jenius', 'emoji' => '🐬', 'category' => 'hewan', 'rarity' => 'legendary', 'required_stars' => 90, 'description' => 'Penakluk tantangan level cerdas akselerasi.'],

            // ==========================================
            // KATEGORI 2: 🚀 PETUALANG (12 Stiker: 5 - 150 Bintang)
            // ==========================================
            ['name' => 'Kompas Petualang', 'emoji' => '🧭', 'category' => 'petualang', 'rarity' => 'common', 'required_stars' => 5, 'description' => 'Penunjuk arah penjelajahan pulau belajar.'],
            ['name' => 'Koper Petualang Hebat', 'emoji' => '🧳', 'category' => 'petualang', 'rarity' => 'common', 'required_stars' => 10, 'description' => 'Berisi perlengkapan belajar lengkap ke mana saja.'],
            ['name' => 'Topi Rimba Penjelajah', 'emoji' => '🤠', 'category' => 'petualang', 'rarity' => 'common', 'required_stars' => 15, 'description' => 'Pelindung setia penakluk pulau rimba liar.'],
            ['name' => 'Tenda Kemah Sahabat', 'emoji' => '⛺', 'category' => 'petualang', 'rarity' => 'common', 'required_stars' => 20, 'description' => 'Tempat istirahat nyaman setelah belajar seru.'],
            ['name' => 'Kapal Layar Samudra', 'emoji' => '⛵', 'category' => 'petualang', 'rarity' => 'common', 'required_stars' => 30, 'description' => 'Mengarungi samudra ilmu bersama sahabat.'],
            ['name' => 'Api Unggun Kehangatan', 'emoji' => '🔥', 'category' => 'petualang', 'rarity' => 'rare', 'required_stars' => 45, 'description' => 'Simbol semangat belajar yang tak pernah padam.'],
            ['name' => 'Balon Udara Ceria', 'emoji' => '🎈', 'category' => 'petualang', 'rarity' => 'rare', 'required_stars' => 55, 'description' => 'Melayang santai menikmati pemandangan indah.'],
            ['name' => 'Peta Harta Karun', 'emoji' => '🗺️', 'category' => 'petualang', 'rarity' => 'rare', 'required_stars' => 70, 'description' => 'Peta rahasia menuju ribuan bintang emas.'],
            ['name' => 'Teleskop Bintang', 'emoji' => '🔭', 'category' => 'petualang', 'rarity' => 'rare', 'required_stars' => 85, 'description' => 'Melihat keindahan tata surya dan keajaiban semesta.'],
            ['name' => 'Pesawat Terbang Cilik', 'emoji' => '✈️', 'category' => 'petualang', 'rarity' => 'rare', 'required_stars' => 100, 'description' => 'Terbang tinggi melintasi pulau-pulau belajar.'],
            ['name' => 'Astronaut Cilik', 'emoji' => '👨‍🚀', 'category' => 'petualang', 'rarity' => 'legendary', 'required_stars' => 120, 'description' => 'Menjelajah planet ilmu pengetahuan baru.'],
            ['name' => 'Roket Penjelajah Angkasa', 'emoji' => '🚀', 'category' => 'petualang', 'rarity' => 'legendary', 'required_stars' => 150, 'description' => 'Meluncur tinggi menggapai cita-cita setinggi langit.'],

            // ==========================================
            // KATEGORI 3: 👑 SPESIAL & PRESTASI (12 Stiker: Streak & 10 - 200 Bintang)
            // ==========================================
            ['name' => 'Api Semangat Belajar 3 Hari', 'emoji' => '🔥', 'category' => 'spesial', 'rarity' => 'rare', 'required_stars' => 0, 'description' => 'Stiker langka apresiasi belajar 3 hari berturut-turut!'],
            ['name' => 'Bintang Ketekunan Emas 7 Hari', 'emoji' => '⭐', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 0, 'description' => 'Stiker legendaris pahlawan belajar 7 hari konsisten!'],
            ['name' => 'Kotak Hadiah Kejutan', 'emoji' => '🎁', 'category' => 'spesial', 'rarity' => 'common', 'required_stars' => 10, 'description' => 'Hadiah spesial penuh berkah untuk anak pintar.'],
            ['name' => 'Pita Kehormatan Emas', 'emoji' => '🎗️', 'category' => 'spesial', 'rarity' => 'rare', 'required_stars' => 35, 'description' => 'Dianugerahkan kepada siswa paling tekun.'],
            ['name' => 'Kembang Api Perayaan', 'emoji' => '🎆', 'category' => 'spesial', 'rarity' => 'rare', 'required_stars' => 50, 'description' => 'Pesta kembang api merayakan kelulusan modul.'],
            ['name' => 'Medali Juara Teladan', 'emoji' => '🥇', 'category' => 'spesial', 'rarity' => 'rare', 'required_stars' => 70, 'description' => 'Medali kebanggaan anak teladan berprestasi.'],
            ['name' => 'Piala Emas Kejuaraan', 'emoji' => '🏆', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 110, 'description' => 'Piala kehormatan atas pencapaian luar biasa.'],
            ['name' => 'Tongkat Bintang Ajaib', 'emoji' => '🪄', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 135, 'description' => 'Menyulap kesulitan belajar jadi kegembiraan.'],
            ['name' => 'Bintang Berkilau Megah', 'emoji' => '🌟', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 160, 'description' => 'Simbol kecerdasan dan akhlak terpuji anak PAUD.'],
            ['name' => 'Berlian Berkilau Sakti', 'emoji' => '💎', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 180, 'description' => 'Harta karun paling berharga anak rajin belajar.'],
            ['name' => 'Lencana Super Juara', 'emoji' => '🏅', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 190, 'description' => 'Lencana pahlawan cilik penakluk 3 pilar PAUD.'],
            ['name' => 'Mahkota Bintang Emas', 'emoji' => '👑', 'category' => 'spesial', 'rarity' => 'legendary', 'required_stars' => 200, 'description' => 'Mahkota raja bintang cilik pengumpul 200+ bintang emas.'],

            // ==========================================
            // KATEGORI 4: 🎨 BELAJAR & OBJEK CERDAS (8 Stiker: 3 - 65 Bintang)
            // ==========================================
            ['name' => 'Apel Merah Juara', 'emoji' => '🍎', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 3, 'description' => 'Buah segar penambah energi dan kesehatan otak.'],
            ['name' => 'Pensil Ajaib Cerdas', 'emoji' => '✏️', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 8, 'description' => 'Alat tulis sahabat setia belajar menulis huruf.'],
            ['name' => 'Matahari Pagi Ceria', 'emoji' => '☀️', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 12, 'description' => 'Penyemangat bangun pagi untuk siap belajar.'],
            ['name' => 'Buku Cerita Bergambar', 'emoji' => '📖', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 18, 'description' => 'Jendela dunia untuk gemar membaca sejak dini.'],
            ['name' => 'Kuas Cat Warna-Warni', 'emoji' => '🎨', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 25, 'description' => 'Mewarnai hari dengan karya seni indah.'],
            ['name' => 'Bunga Prestasi Mekar', 'emoji' => '🌻', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 30, 'description' => 'Tumbuh cerdas dan mekar membanggakan orang tua.'],
            ['name' => 'Sempoa Hitung Pintar', 'emoji' => '🧮', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 40, 'description' => 'Sahabat belajar matematika dan berhitung cepat.'],
            ['name' => 'Bulan Sabit Damai', 'emoji' => '🌙', 'category' => 'belajar', 'rarity' => 'common', 'required_stars' => 65, 'description' => 'Teman malam beristirahat setelah belajar giat.'],
        ];

        foreach ($stickers as $stk) {
            Sticker::updateOrCreate(['name' => $stk['name']], $stk);
        }
    }
}

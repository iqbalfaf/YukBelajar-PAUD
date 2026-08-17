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
            // KATEGORI 1: 🦁 HEWAN (12 Stiker)
            // ==========================================
            ['name' => 'Dino Pemberani', 'emoji' => '🦖', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Sahabat dino cilik yang selalu ceria dan berani!'],
            ['name' => 'Kucing Cerdas Kiki', 'emoji' => '🐱', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Maskot ramah pemandu petualangan belajar PAUD.'],
            ['name' => 'Singa Juara Rimba', 'emoji' => '🦁', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Raja satwa bijak pelindung hutan ceria.'],
            ['name' => 'Kelinci Lincah', 'emoji' => '🐰', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Cepat dan tanggap menjawab tantangan kuis.'],
            ['name' => 'Panda Sahabat Cilik', 'emoji' => '🐼', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Paling suka membantu teman di Panggung Sahabat.'],
            ['name' => 'Beruang Madu Hebat', 'emoji' => '🐻', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Manis, rajin, dan pantang menyerah.'],
            ['name' => 'Gajah Bijak', 'emoji' => '🐘', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Ingatan kuat dan pendengar yang sangat baik.'],
            ['name' => 'Koala Ceria', 'emoji' => '🐨', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Belajar santai dan bahagia setiap hari.'],
            ['name' => 'Lumba-Lumba Jenius', 'emoji' => '🐬', 'category' => 'hewan', 'rarity' => 'legendary', 'description' => 'Penakluk tantangan level cerdas akselerasi.'],
            ['name' => 'Burung Hantu Pintar', 'emoji' => '🦉', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Kolektor ilmu pengetahuan dan pembaca buku setia.'],
            ['name' => 'Kupu-Kupu Cantik', 'emoji' => '🦋', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Sayap indah hasil rajin belajar dan berproses.'],
            ['name' => 'Penyu Samudra Gigih', 'emoji' => '🐢', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Pelan tapi pasti menyelesaikan setiap modul.'],

            // ==========================================
            // KATEGORI 2: 🚀 PETUALANG (12 Stiker)
            // ==========================================
            ['name' => 'Roket Penjelajah Angkasa', 'emoji' => '🚀', 'category' => 'petualang', 'rarity' => 'legendary', 'description' => 'Meluncur tinggi menggapai cita-cita setinggi langit.'],
            ['name' => 'Astronaut Cilik', 'emoji' => '👨‍🚀', 'category' => 'petualang', 'rarity' => 'legendary', 'description' => 'Menjelajah planet ilmu pengetahuan baru.'],
            ['name' => 'Teleskop Bintang', 'emoji' => '🔭', 'category' => 'petualang', 'rarity' => 'rare', 'description' => 'Melihat keindahan tata surya dan keajaiban semesta.'],
            ['name' => 'Kompas Petualang', 'emoji' => '🧭', 'category' => 'petualang', 'rarity' => 'common', 'description' => 'Penunjuk arah penjelajahan pulau belajar.'],
            ['name' => 'Peta Harta Karun', 'emoji' => '🗺️', 'category' => 'petualang', 'rarity' => 'rare', 'description' => 'Peta rahasia menuju ribuan bintang emas.'],
            ['name' => 'Kapal Layar Samudra', 'emoji' => '⛵', 'category' => 'petualang', 'rarity' => 'common', 'description' => 'Mengarungi samudra ilmu bersama sahabat.'],
            ['name' => 'Pesawat Terbang Cilik', 'emoji' => '✈️', 'category' => 'petualang', 'rarity' => 'common', 'description' => 'Terbang tinggi melintasi pulau-pulau belajar.'],
            ['name' => 'Balon Udara Ceria', 'emoji' => '🎈', 'category' => 'petualang', 'rarity' => 'rare', 'description' => 'Melayang santai menikmati pemandangan indah.'],
            ['name' => 'Tenda Kemah Sahabat', 'emoji' => '⛺', 'category' => 'petualang', 'rarity' => 'common', 'description' => 'Tempat istirahat nyaman setelah belajar seru.'],
            ['name' => 'Api Unggun Kehangatan', 'emoji' => '🔥', 'category' => 'petualang', 'rarity' => 'rare', 'description' => 'Simbol semangat belajar yang tak pernah padam.'],
            ['name' => 'Koper Petualang Hebat', 'emoji' => '🧳', 'category' => 'petualang', 'rarity' => 'common', 'description' => 'Berisi perlengkapan belajar lengkap ke mana saja.'],
            ['name' => 'Topi Rimba Penjelajah', 'emoji' => '🤠', 'category' => 'petualang', 'rarity' => 'common', 'description' => 'Pelindung setia penakluk pulau rimba liar.'],

            // ==========================================
            // KATEGORI 3: 👑 SPESIAL & PRESTASI (10 Stiker)
            // ==========================================
            ['name' => 'Mahkota Bintang Emas', 'emoji' => '👑', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Mahkota raja bintang cilik pengumpul 50+ bintang emas.'],
            ['name' => 'Bintang Berkilau Megah', 'emoji' => '🌟', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Simbol kecerdasan dan akhlak terpuji anak PAUD.'],
            ['name' => 'Piala Emas Kejuaraan', 'emoji' => '🏆', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Piala kehormatan atas pencapaian luar biasa.'],
            ['name' => 'Medali Juara Teladan', 'emoji' => '🥇', 'category' => 'spesial', 'rarity' => 'rare', 'description' => 'Medali kebanggaan anak teladan berprestasi.'],
            ['name' => 'Berlian Berkilau Sakti', 'emoji' => '💎', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Harta karun paling berharga anak rajin belajar.'],
            ['name' => 'Tongkat Bintang Ajaib', 'emoji' => '🪄', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Menyulap kesulitan belajar jadi kegembiraan.'],
            ['name' => 'Kembang Api Perayaan', 'emoji' => '🎆', 'category' => 'spesial', 'rarity' => 'rare', 'description' => 'Pesta kembang api merayakan kelulusan modul.'],
            ['name' => 'Pita Kehormatan Emas', 'emoji' => '🎗️', 'category' => 'spesial', 'rarity' => 'rare', 'description' => 'Dianugerahkan kepada siswa paling tekun.'],
            ['name' => 'Kotak Hadiah Kejutan', 'emoji' => '🎁', 'category' => 'spesial', 'rarity' => 'rare', 'description' => 'Hadiah spesial penuh berkah untuk anak pintar.'],
            ['name' => 'Lencana Super Juara', 'emoji' => '🏅', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Lencana pahlawan cilik penakluk 3 pilar PAUD.'],

            // ==========================================
            // KATEGORI 4: 🎨 BELAJAR & OBJEK CERDAS (8 Stiker)
            // ==========================================
            ['name' => 'Buku Cerita Bergambar', 'emoji' => '📖', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Jendela dunia untuk gemar membaca sejak dini.'],
            ['name' => 'Kuas Cat Warna-Warni', 'emoji' => '🎨', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Mewarnai hari dengan karya seni indah.'],
            ['name' => 'Sempoa Hitung Pintar', 'emoji' => '🧮', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Sahabat belajar matematika dan berhitung cepat.'],
            ['name' => 'Pensil Ajaib Cerdas', 'emoji' => '✏️', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Alat tulis sahabat setia belajar menulis huruf.'],
            ['name' => 'Apel Merah Juara', 'emoji' => '🍎', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Buah segar penambah energi dan kesehatan otak.'],
            ['name' => 'Matahari Pagi Ceria', 'emoji' => '☀️', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Penyemangat bangun pagi untuk siap belajar.'],
            ['name' => 'Bulan Sabit Damai', 'emoji' => '🌙', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Teman malam beristirahat setelah belajar giat.'],
            ['name' => 'Bunga Prestasi Mekar', 'emoji' => '🌻', 'category' => 'belajar', 'rarity' => 'common', 'description' => 'Tumbuh cerdas dan mekar membanggakan orang tua.'],
        ];

        foreach ($stickers as $stk) {
            Sticker::updateOrCreate(['name' => $stk['name']], $stk);
        }
    }
}

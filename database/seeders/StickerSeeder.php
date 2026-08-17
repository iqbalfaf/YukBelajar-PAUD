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
            ['name' => 'Dino Pemberani', 'emoji' => '🦖', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Sahabat petualang pertama yang selalu bersemangat!'],
            ['name' => 'Kucing Cerdas Kiki', 'emoji' => '🐱', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Maskot ramah pemandu petualangan belajar PAUD.'],
            ['name' => 'Singa Juara', 'emoji' => '🦁', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Diberikan kepada penakluk pulau rimba.'],
            ['name' => 'Kelinci Cepat', 'emoji' => '🐰', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Lincah menjawab kuis dengan tepat dan cepat.'],
            ['name' => 'Panda Sahabat', 'emoji' => '🐼', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Paling suka membantu kawan di Panggung Sahabat.'],
            ['name' => 'Beruang Madu', 'emoji' => '🐻', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Selalu manis dan pantang menyerah dalam belajar.'],
            ['name' => 'Gajah Bijak', 'emoji' => '🐘', 'category' => 'hewan', 'rarity' => 'rare', 'description' => 'Ingatan kuat dan pendengar yang sangat baik.'],
            ['name' => 'Koala Santai', 'emoji' => '🐨', 'category' => 'hewan', 'rarity' => 'common', 'description' => 'Belajar santai dan bahagia setiap hari.'],
            ['name' => 'Lumba-Lumba Jenius', 'emoji' => '🐬', 'category' => 'hewan', 'rarity' => 'legendary', 'description' => 'Penakluk tantangan level cerdas akselerasi.'],
            ['name' => 'Mahkota Bintang Emas', 'emoji' => '👑', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Raja bintang cilik pengumpul 50+ bintang emas.'],
            ['name' => 'Roket Penjelajah', 'emoji' => '🚀', 'category' => 'kendaraan', 'rarity' => 'rare', 'description' => 'Meluncur tinggi meraih cita-cita masa depan.'],
            ['name' => 'Bintang Berkilau', 'emoji' => '🌟', 'category' => 'spesial', 'rarity' => 'legendary', 'description' => 'Simbol kecerdasan dan akhlak mulia anak PAUD.'],
        ];

        foreach ($stickers as $stk) {
            Sticker::updateOrCreate(['name' => $stk['name']], $stk);
        }
    }
}

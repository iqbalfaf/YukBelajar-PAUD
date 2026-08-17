<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pulau Hewan Ceria',
                'slug' => 'hewan',
                'icon_emoji' => '🦁',
                'color_theme' => 'yellow',
                'bg_gradient' => 'from-amber-400 to-yellow-500',
                'border_color' => '#f59e0b',
                'subtitle' => 'Mengenal suara & nama satwa lucu rimba',
                'description' => 'Materi pengenalan ragam satwa darat, air, dan udara lengkap dengan suara tiruan dan pelafalan suku kata.',
                'age_min' => 3,
                'age_max' => 5,
                'recommended_age' => '3 - 5 Thn',
                'sort_order' => 1,
            ],
            [
                'name' => 'Istana Angka & Berhitung',
                'slug' => 'angka',
                'icon_emoji' => '🔢',
                'color_theme' => 'sky',
                'bg_gradient' => 'from-sky-400 to-blue-500',
                'border_color' => '#0284c7',
                'subtitle' => 'Belajar membilang 1 sampai 10 dengan balon',
                'description' => 'Materi konsep berhitung konkret, perbandingan kuantitas benda, dan lambang bilangan ramah anak.',
                'age_min' => 3,
                'age_max' => 6,
                'recommended_age' => '3 - 6 Thn',
                'sort_order' => 2,
            ],
            [
                'name' => 'Taman Abjad & Membaca',
                'slug' => 'abjad',
                'icon_emoji' => '🔤',
                'color_theme' => 'emerald',
                'bg_gradient' => 'from-emerald-400 to-teal-500',
                'border_color' => '#10b981',
                'subtitle' => 'Mengenal huruf vokal & konsonan pertama',
                'description' => 'Materi fonik huruf vokal A-I-U-E-O dan pengenalan suku kata awal kata benda sehari-hari.',
                'age_min' => 4,
                'age_max' => 6,
                'recommended_age' => '4 - 6 Thn',
                'sort_order' => 3,
            ],
            [
                'name' => 'Kebun Buah Segar',
                'slug' => 'buah',
                'icon_emoji' => '🍎',
                'color_theme' => 'rose',
                'bg_gradient' => 'from-rose-400 to-pink-500',
                'border_color' => '#f43f5e',
                'subtitle' => 'Mengenal rasa, warna, & vitamin buah',
                'description' => 'Mengenalkan aneka buah-buahan tropis, manfaat sehat, serta tekstur dan warna alaminya.',
                'age_min' => 3,
                'age_max' => 5,
                'recommended_age' => '3 - 5 Thn',
                'sort_order' => 4,
            ],
            [
                'name' => 'Dunia Warna & Bentuk',
                'slug' => 'warna',
                'icon_emoji' => '🎨',
                'color_theme' => 'purple',
                'bg_gradient' => 'from-purple-400 to-indigo-500',
                'border_color' => '#8b5cf6',
                'subtitle' => 'Mengenal warna dasar & bentuk geometri',
                'description' => 'Eksplorasi visual warna primer, sekunder, dan bentuk geometri lingkaran, segitiga, persegi.',
                'age_min' => 3,
                'age_max' => 5,
                'recommended_age' => '3 - 5 Thn',
                'sort_order' => 5,
            ],
            [
                'name' => 'Garasi Kendaraan Hebat',
                'slug' => 'kendaraan',
                'icon_emoji' => '🚗',
                'color_theme' => 'indigo',
                'bg_gradient' => 'from-indigo-400 to-sky-600',
                'border_color' => '#6366f1',
                'subtitle' => 'Mengenal transportasi darat, laut, & udara',
                'description' => 'Mengenal aneka alat transportasi darat, laut, dan udara dengan suara mesin dan klaksonnya.',
                'age_min' => 4,
                'age_max' => 6,
                'recommended_age' => '4 - 6 Thn',
                'sort_order' => 6,
            ],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}

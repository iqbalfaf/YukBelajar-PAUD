<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeminiService
{
    protected ?string $apiKey;

    protected string $defaultModel;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key') ?: env('GEMINI_API_KEY');
        $this->defaultModel = config('services.gemini.model', 'gemini-3.5-flash');
    }

    /**
     * Cek apakah API Key Gemini aktif dan terkonfigurasi.
     */
    public function isConfigured(): bool
    {
        return ! empty($this->apiKey);
    }

    /**
     * Generate Paket Kuis & Materi Multi-Modal Ramah Anak PAUD via Google Gemini AI.
     */
    public function generateQuizContent(
        string $categorySlug,
        string $categoryName,
        int $levelNumber,
        string $theme,
        string $targetAge = '3-4',
        int $questionsCount = 3,
        ?string $model = null
    ): array {
        $selectedModel = $model ?: $this->defaultModel;

        if ($this->isConfigured()) {
            try {
                $result = $this->callGeminiApi($categorySlug, $categoryName, $levelNumber, $theme, $targetAge, $questionsCount, $selectedModel);
                if (! empty($result) && is_array($result)) {
                    return [
                        'source' => 'gemini_api',
                        'model' => $selectedModel,
                        'items' => $result,
                    ];
                }
            } catch (Exception $e) {
                Log::warning("Gemini AI API Error: {$e->getMessage()}. Menggunakan mode fallback kurasi cerdas.");
            }
        }

        // Fallback generator cerdas ramah anak
        return [
            'source' => $this->isConfigured() ? 'fallback_on_error' : 'smart_curated_engine',
            'model' => $selectedModel,
            'items' => $this->generateCuratedFallback($categorySlug, $categoryName, $levelNumber, $theme, $targetAge, $questionsCount),
        ];
    }

    /**
     * Panggilan langsung ke REST API Google Gemini 2.0 / 1.5.
     */
    protected function callGeminiApi(
        string $categorySlug,
        string $categoryName,
        int $levelNumber,
        string $theme,
        string $targetAge,
        int $questionsCount,
        string $model
    ): ?array {
        $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$this->apiKey}";

        $systemInstruction = "Anda adalah Asisten Pedagogis Ahli Kurikulum Pendidikan Anak Usia Dini (PAUD/TK) Indonesia untuk aplikasi 'YukBelajar PAUD'. "
            ."Tugas Anda adalah merancang soal kuis pilihan ganda bergambar yang sangat ramah anak usia {$targetAge} tahun. "
            .'Gunakan bahasa Indonesia yang riang, santun, ceria, dan mudah dimengerti anak. '
            ."ATURAN MUTLAK: DILARANG menggunakan emoji pelangi (🌈) dan DILARANG menggunakan kata 'pelangi'. Gunakan bintang emas (⭐), roket (🚀), balon (🎈), dan piala (🏆). "
            .'Pastikan seluruh emoji pilihan jawaban menggunakan emoji standar universal yang kompatibel (contoh: cacing/ulat gunakan 🐛, burung 🐦, ayam 🐔, ikan 🐟). '
            .'Format output WAJIB berupa JSON murni dengan format array of objects.';

        $prompt = "Buatlah {$questionsCount} butir soal kuis interaktif anak PAUD untuk Kategori: '{$categoryName}' (Level {$levelNumber}), Tema Spesifik: '{$theme}'. "
            ."Setiap butir soal harus memiliki struktur JSON berikut:\n"
            ."[\n"
            ."  {\n"
            ."    \"question\": \"Teks pertanyaan yang ceria dan ramah anak usia {$targetAge} tahun\",\n"
            ."    \"voice_script\": \"Naskah suara pelafalan audio TTS yang riang untuk dibacakan kepada anak\",\n"
            ."    \"image_prompt\": \"Prompt deskriptif bahasa Inggris untuk membuat ilustrasi 3D kartun kartun anak yang lucu, imut, latar belakang putih bersih\",\n"
            ."    \"options\": [\n"
            ."      {\"label\": \"Pilihan Benar dengan Emoji\", \"is_correct\": true},\n"
            ."      {\"label\": \"Pilihan Salah 1 dengan Emoji\", \"is_correct\": false},\n"
            ."      {\"label\": \"Pilihan Salah 2 dengan Emoji\", \"is_correct\": false}\n"
            ."    ]\n"
            ."  }\n"
            .']';

        $response = Http::timeout(25)->post($url, [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $systemInstruction."\n\n".$prompt],
                    ],
                ],
            ],
            'generationConfig' => [
                'temperature' => 0.7,
                'responseMimeType' => 'application/json',
            ],
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $rawText = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';
            $decoded = json_decode($rawText, true);

            if (is_array($decoded)) {
                // Pastikan format array of questions
                return isset($decoded['questions']) ? $decoded['questions'] : $decoded;
            }
        }

        return null;
    }

    /**
     * Generator kurasi cerdas pedagogis berstandar PAUD (Offline / Fallback).
     */
    protected function generateCuratedFallback(
        string $categorySlug,
        string $categoryName,
        int $levelNumber,
        string $theme,
        string $targetAge,
        int $questionsCount
    ): array {
        $categoryBank = [
            'hewan' => [
                ['name' => 'Kucing Persia', 'emoji' => '🐱', 'sound' => 'meong-meong', 'desc' => 'hewan peliharaan berbulu lembut'],
                ['name' => 'Singa Rimba', 'emoji' => '🦁', 'sound' => 'roaaar', 'desc' => 'raja hutan bersurai lebat'],
                ['name' => 'Lumba-lumba Ceria', 'emoji' => '🐬', 'sound' => 'kecipak air', 'desc' => 'hewan laut ramah yang suka melompat'],
                ['name' => 'Gajah Belalai', 'emoji' => '🐘', 'sound' => 'terompet belalai', 'desc' => 'hewan darat bertelinga lebar'],
                ['name' => 'Kelinci Putih', 'emoji' => '🐰', 'sound' => 'lompat ceria', 'desc' => 'hewan lincah bertelinga panjang'],
                ['name' => 'Burung Elang', 'emoji' => '🦅', 'sound' => 'kicau gagah', 'desc' => 'burung perkasa terbang tinggi'],
            ],
            'angka' => [
                ['name' => 'Angka 1', 'emoji' => '1️⃣', 'sound' => 'satu', 'desc' => 'satu bintang emas bersinar'],
                ['name' => 'Angka 2', 'emoji' => '2️⃣', 'sound' => 'dua', 'desc' => 'dua mata kita yang sehat'],
                ['name' => 'Angka 3', 'emoji' => '3️⃣', 'sound' => 'tiga', 'desc' => 'tiga balon warna-warni terbang'],
                ['name' => 'Angka 4', 'emoji' => '4️⃣', 'sound' => 'empat', 'desc' => 'empat roda mobil yang berputar'],
                ['name' => 'Angka 5', 'emoji' => '5️⃣', 'sound' => 'lima', 'desc' => 'lima jari tangan yang terampil'],
            ],
            'abjad' => [
                ['name' => 'Huruf A', 'emoji' => '🅰️', 'sound' => 'A untuk Apel', 'desc' => 'huruf A pada kata Apel Manis'],
                ['name' => 'Huruf B', 'emoji' => '🅱️', 'sound' => 'B untuk Bola', 'desc' => 'huruf B pada kata Bola Bulat'],
                ['name' => 'Huruf C', 'emoji' => '🔤', 'sound' => 'C untuk Ceri', 'desc' => 'huruf C pada kata Ceri Merah'],
                ['name' => 'Huruf D', 'emoji' => '🔤', 'sound' => 'D untuk Domba', 'desc' => 'huruf D pada kata Domba Lucu'],
            ],
            'buah' => [
                ['name' => 'Buah Apel Merah', 'emoji' => '🍎', 'sound' => 'kriuk manis', 'desc' => 'buah apel renyah kaya vitamin'],
                ['name' => 'Buah Pisang Manis', 'emoji' => '🍌', 'sound' => 'manis legit', 'desc' => 'buah pisang kuning kesukaan anak'],
                ['name' => 'Buah Jeruk Segar', 'emoji' => '🍊', 'sound' => 'segar berseri', 'desc' => 'buah jeruk manis berair'],
                ['name' => 'Buah Semangka Merah', 'emoji' => '🍉', 'sound' => 'segar dingin', 'desc' => 'buah semangka berbiji kecil'],
            ],
            'warna' => [
                ['name' => 'Warna Merah Cerah', 'emoji' => '🔴', 'sound' => 'merah berani', 'desc' => 'warna merah seperti buah stroberi'],
                ['name' => 'Warna Biru Langit', 'emoji' => '🔵', 'sound' => 'biru cerah', 'desc' => 'warna biru seperti awan di angkasa'],
                ['name' => 'Warna Kuning Mentari', 'emoji' => '🟡', 'sound' => 'kuning ceria', 'desc' => 'warna kuning seperti cahaya matahari pagi'],
                ['name' => 'Warna Hijau Daun', 'emoji' => '🟢', 'sound' => 'hijau sejuk', 'desc' => 'warna hijau seperti dedaunan di taman'],
            ],
            'kendaraan' => [
                ['name' => 'Mobil Ceria', 'emoji' => '🚗', 'sound' => 'brum-brum', 'desc' => 'mobil beroda empat di jalan raya'],
                ['name' => 'Pesawat Terbang', 'emoji' => '✈️', 'sound' => 'wuuush', 'desc' => 'pesawat yang melayang tinggi di angkasa'],
                ['name' => 'Kapal Laut', 'emoji' => '🚢', 'sound' => 'tuuut-tuuut', 'desc' => 'kapal besar yang berlayar di samudra'],
                ['name' => 'Kereta Api', 'emoji' => '🚂', 'sound' => 'tut-tut-gujezk-gujezk', 'desc' => 'kereta api panjang di atas rel baja'],
            ],
        ];

        $items = [];
        $bank = $categoryBank[$categorySlug] ?? $categoryBank['hewan'];

        for ($i = 0; $i < $questionsCount; $i++) {
            $correctItem = $bank[$i % count($bank)];
            $distractor1 = $bank[($i + 1) % count($bank)];
            $distractor2 = $bank[($i + 2) % count($bank)];

            $items[] = [
                'question' => "Manakah {$correctItem['name']} yang bersuara {$correctItem['sound']}? {$correctItem['emoji']}",
                'voice_script' => "Ayo sentuh gambar {$correctItem['name']} yang bersuara {$correctItem['sound']}!",
                'image_prompt' => "Cute 3D Pixar style illustration of {$correctItem['name']} smiling happily, vibrant pastel colors, clean white background, kid friendly for toddlers aged {$targetAge}",
                'options' => [
                    ['label' => "{$correctItem['emoji']} {$correctItem['name']}", 'is_correct' => true],
                    ['label' => "{$distractor1['emoji']} {$distractor1['name']}", 'is_correct' => false],
                    ['label' => "{$distractor2['emoji']} {$distractor2['name']}", 'is_correct' => false],
                ],
            ];
        }

        return $items;
    }
}

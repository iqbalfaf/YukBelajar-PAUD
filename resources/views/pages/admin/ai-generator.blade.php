@extends('layouts.admin')

@section('title', '1-Click Gemini AI Multi-Modal Generator - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 pb-16"
     x-data="{
         activePillar: 'mengenal', // 'mengenal', 'membaca', 'menghitung'
         selectedCategory: 'abjad',
         targetLevel: 1,
         selectedModel: '{{ $adminData['default_model'] ?? 'gemini-2.0-flash' }}',
         theme: 'Mengenal Huruf Vokal A I U E O 🔤',
         targetAge: '3-4',
         questionsCount: 3,
         isGenerating: false,
         isPublishing: false,
         hasGenerated: true,
         publishedSuccess: false,
         alertMessage: '',
         isConfigured: {{ $isGeminiConfigured ? 'true' : 'false' }},
         categories: {{ Js::from($categories) }},
         aiModels: {{ Js::from($aiModels) }},
         generatedData: {{ Js::from($adminData['sample_ai_preview']['generated_items']) }},
         
         get currentPillarCategories() {
             return this.categories.filter(c => c.pillar === this.activePillar);
         },

         switchPillar(p) {
             this.activePillar = p;
             const firstCat = this.categories.find(c => c.pillar === p);
             if (firstCat) {
                 this.selectedCategory = firstCat.slug;
             }
             this.updateThemeSuggestion();
         },

         updateThemeSuggestion() {
             const cat = this.selectedCategory;
             const lvl = this.targetLevel;
             
             const suggestions = {
                 'abjad': lvl == 1 ? 'Mengenal Huruf Vokal A I U E O 🔤' : (lvl == 2 ? 'Mengenal Huruf B D P T 🔤' : 'Rangkaian Alfabet A-Z Lengkap 🔤'),
                 'angka': lvl == 1 ? 'Berhitung Angka 1 sampai 5 🔢' : (lvl == 2 ? 'Mengenal Angka 6 sampai 10 🔢' : 'Berhitung Cerdas 11 sampai 20 🔢'),
                 'hijaiyah': lvl == 1 ? 'Mengenal Huruf Alif, Ba, Ta 🌙' : (lvl == 2 ? 'Mengenal Huruf Tsa, Jim, Kha 🌙' : 'Mengenal Huruf Dal sampai Ya 🌙'),
                 'hewan': lvl == 1 ? 'Hewan Peliharaan Jinak 🐱' : (lvl == 2 ? 'Hewan Rimba Gagah 🦁' : 'Mengenal Hewan Laut 🐬'),
                 'buah': lvl == 1 ? 'Aneka Buah Manis & Segar 🍎' : (lvl == 2 ? 'Sayuran Sehat Bergizi 🥕' : 'Buah Tropis & Vitamin Otak 🥑'),
                 'warna': lvl == 1 ? 'Mengenal Warna Dasar Cerah 🎨' : (lvl == 2 ? 'Bentuk Geometri Lingkaran & Segitiga ⭕' : 'Bintang & Bentuk Campuran ⭐'),
                 'kendaraan': lvl == 1 ? 'Mobil & Sepeda Roda Dua 🚗' : (lvl == 2 ? 'Kereta Api & Kapal Laut 🚆' : 'Pesawat Terbang & Helikopter ✈️'),
                 'benda': lvl == 1 ? 'Peralatan Sekolah & Belajar 📚' : (lvl == 2 ? 'Benda-benda di Rumah 🧸' : 'Peralatan Makan & Kebersihan 🪑'),
                 'bendera': lvl == 1 ? 'Bendera Merah Putih Indonesia 🚩' : (lvl == 2 ? 'Bendera Negara Sahabat Dunia 🚩' : 'Mengenal Ragam Bendera Internasional 🚩'),
                 'tubuh': lvl == 1 ? 'Mengenal Mata, Hidung, & Telinga 👀' : (lvl == 2 ? 'Tangan Terampil & Kaki Kuat ✋' : 'Merawat Kebersihan Gigi & Tubuh 👄'),
                 
                 'huruf-vokal': lvl == 1 ? 'Membunyikan Vokal A I U E O 🅰️' : 'Kombinasi Vokal & Benda Ceria 🎵',
                 'dua-suku-kata': lvl == 1 ? 'Membaca Kata Bo-la & Bu-ku 🗣️' : 'Membaca Kata Ku-da & Sa-pi 🐄',
                 'tiga-suku-kata': lvl == 1 ? 'Membaca Kata Se-pe-da 🚲' : 'Membaca Kata Ke-la-pa & Se-pa-tu 🥥',
                 'akhiran-konsonan': lvl == 1 ? 'Kata Berakhiran Rumah & Ayam 🏠' : 'Kata Berakhiran Ikan & Burung 🐟',
                 'cerita-pendek': lvl == 1 ? 'Cerita Pendek: Budi Makan Apel 🍎' : 'Cerita Pendek: Kucing Minum Susu 🥛',

                 'membilang': lvl == 1 ? 'Membilang 1 sampai 5 Balon 🎈' : 'Membilang 6 sampai 10 Bunga 🌸',
                 'perbandingan': lvl == 1 ? 'Besar vs Kecil & Banyak vs Sedikit ⚖️' : 'Tinggi vs Pendek & Tebal vs Tipis 🦒',
                 'penjumlahan': lvl == 1 ? 'Penjumlahan Bergambar 1 + 1 sampai 5 ➕' : 'Penjumlahan Buah & Donat sampai 10 ➕',
                 'pengurangan': lvl == 1 ? 'Pengurangan Balon Lepas 1 sampai 5 ➖' : 'Pengurangan Kue Dimakan sampai 10 ➖',
                 'pola-logika': lvl == 1 ? 'Pola Urutan Warna Merah-Biru 🔴' : 'Pola Urutan Bentuk Lingkaran-Kotak ⭕',
             };

             if (suggestions[cat]) {
                 this.theme = suggestions[cat];
             }
         },

         async triggerGenerate() {
             this.isGenerating = true;
             this.publishedSuccess = false;
             
             try {
                 const response = await fetch('{{ route('admin.ai-generator.generate') }}', {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/json',
                         'X-CSRF-TOKEN': '{{ csrf_token() }}',
                         'Accept': 'application/json'
                     },
                     body: JSON.stringify({
                         category_slug: this.selectedCategory,
                         level_number: parseInt(this.targetLevel),
                         theme: this.theme,
                         target_age: this.targetAge,
                         questions_count: parseInt(this.questionsCount),
                         ai_model: this.selectedModel
                     })
                 });

                 const result = await response.json();
                 if (result.success && result.generated_items) {
                     this.generatedData = result.generated_items;
                     this.hasGenerated = true;
                     if (window.soundEngine) window.soundEngine.playVictory();
                 }
             } catch (err) {
                 console.error('AI Generation Error:', err);
             } finally {
                 this.isGenerating = false;
             }
         },
         
         playNarration(text) {
             if (window.soundEngine) {
                 window.soundEngine.speak(text);
             }
         },
         
         async publishToStudents() {
             this.isPublishing = true;
             
             try {
                 const response = await fetch('{{ route('admin.ai-generator.publish') }}', {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/json',
                         'X-CSRF-TOKEN': '{{ csrf_token() }}',
                         'Accept': 'application/json'
                     },
                     body: JSON.stringify({
                         category_slug: this.selectedCategory,
                         level_number: parseInt(this.targetLevel),
                         theme: this.theme,
                         questions: this.generatedData
                     })
                 });

                 const result = await response.json();
                 if (result.success) {
                     this.publishedSuccess = true;
                     this.alertMessage = result.message || 'Materi & Kuis AI berhasil diterbitkan ke siswa!';
                     if (window.soundEngine) {
                         window.soundEngine.playVictory();
                         window.soundEngine.playStar();
                     }
                     if (typeof window.triggerConfetti === 'function') window.triggerConfetti(0.8);
                     setTimeout(() => this.publishedSuccess = false, 5000);
                 }
             } catch (err) {
                 console.error('Publishing Error:', err);
             } finally {
                 this.isPublishing = false;
             }
         }
     }">

    <!-- Header Title Banner -->
    <div class="bg-gradient-to-r from-purple-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-6 sm:p-8 shadow-sm border border-purple-800 flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <div class="flex items-center gap-2 mb-2">
                <span class="text-3xl shrink-0 animate-bounce-slow">✨</span>
                <span class="px-3 py-1 bg-purple-500/30 border border-purple-400/40 text-purple-200 rounded-full text-xs font-black uppercase tracking-wider">
                    Fitur Eksklusif Multi-Modal Gemini AI
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                1-Click AI Generator Studio (3 Pilar Kurikulum PAUD)
            </h2>
            <p class="text-sm text-purple-200 mt-1 max-w-2xl">
                Pilih Pilar, Topik Pembelajaran, dan Level sasaran. AI merancang butir kuis ramah anak PAUD, membuat prompt gambar kartun 3D, dan menyusun audio narasi ceria.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
            <template x-if="isConfigured">
                <span class="px-3.5 py-2 bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 rounded-2xl text-xs font-black flex items-center gap-2 shadow-xs">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Gemini AI API Aktif 🟢</span>
                </span>
            </template>
            <template x-if="!isConfigured">
                <div class="flex flex-col gap-1 items-end">
                    <span class="px-3.5 py-2 bg-amber-500/20 text-amber-300 border border-amber-500/40 rounded-2xl text-xs font-bold flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                        <span>Engine Siap (Cerdas & Cepat) ⚡</span>
                    </span>
                    <span class="text-[10px] text-purple-300">Masukkan GEMINI_API_KEY di .env untuk Cloud Live</span>
                </div>
            </template>
        </div>
    </div>

    <!-- Generator Form Box -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs">
        <h3 class="text-lg font-extrabold font-heading text-slate-800 mb-4 flex items-center gap-2">
            <span>⚙️</span>
            <span>Konfigurasi Model & Parameter AI Generator</span>
        </h3>

        <!-- Model Selection Ribbon -->
        <div class="mb-4 p-4 bg-slate-50 border border-slate-200 rounded-2xl">
            <label class="block text-xs font-black uppercase text-slate-700 mb-2">
                🤖 Pilih Model Google Gemini Engine:
            </label>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <template x-for="m in aiModels" :key="m.id">
                    <button type="button" @click="selectedModel = m.id"
                            class="p-3.5 rounded-xl border-2 text-left transition-all cursor-pointer flex flex-col justify-between gap-1"
                            :class="selectedModel === m.id ? 'border-purple-600 bg-purple-50 text-purple-950 font-bold shadow-xs' : 'border-slate-200 bg-white hover:bg-slate-50 text-slate-700'">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-extrabold" x-text="m.id"></span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-black uppercase"
                                  :class="m.badge === 'Ultra Fast' ? 'bg-emerald-100 text-emerald-800' : (m.badge === 'Standard' ? 'bg-sky-100 text-sky-800' : 'bg-purple-100 text-purple-800')"
                                  x-text="m.badge">
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-500 font-semibold" x-text="m.name"></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- 3 GRAND PILLARS SELECTOR -->
        <div class="mb-4 p-4 bg-purple-50/60 border border-purple-200 rounded-2xl">
            <label class="block text-xs font-black uppercase text-purple-900 mb-2">
                1. Pilih Pilar Kurikulum PAUD Sasaran:
            </label>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                <button type="button" @click="switchPillar('mengenal')"
                        class="p-3 rounded-xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                        :class="activePillar === 'mengenal' ? 'bg-gradient-to-r from-emerald-500 to-teal-600 text-white shadow-xs' : 'bg-white hover:bg-emerald-50 text-slate-700 border border-purple-200'">
                    <span>🌟</span>
                    <span>Pilar 1: Mengenal</span>
                </button>
                <button type="button" @click="switchPillar('membaca')"
                        class="p-3 rounded-xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                        :class="activePillar === 'membaca' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-xs' : 'bg-white hover:bg-sky-50 text-slate-700 border border-purple-200'">
                    <span>📖</span>
                    <span>Pilar 2: Membaca</span>
                </button>
                <button type="button" @click="switchPillar('menghitung')"
                        class="p-3 rounded-xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                        :class="activePillar === 'menghitung' ? 'bg-gradient-to-r from-purple-500 to-indigo-600 text-white shadow-xs' : 'bg-white hover:bg-purple-50 text-slate-700 border border-purple-200'">
                    <span>🧮</span>
                    <span>Pilar 3: Menghitung</span>
                </button>
            </div>
        </div>

        <!-- 1. Category & Level Target Selector -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 p-4 bg-purple-50/60 border border-purple-200 rounded-2xl">
            <div>
                <label class="block text-xs font-black uppercase text-purple-900 mb-1.5">
                    2. Pilih Topik Pembelajaran:
                </label>
                <select x-model="selectedCategory" @change="updateThemeSuggestion()"
                        class="w-full p-3.5 bg-white border-2 border-purple-300 focus:border-purple-600 rounded-xl font-bold text-sm outline-none cursor-pointer">
                    <template x-for="c in currentPillarCategories" :key="c.slug">
                        <option :value="c.slug" x-text="c.icon_emoji + ' ' + c.name"></option>
                    </template>
                </select>
            </div>

            <div>
                <label class="block text-xs font-black uppercase text-purple-900 mb-1.5">
                    3. Tingkatan Level Belajar:
                </label>
                <select x-model="targetLevel" @change="updateThemeSuggestion()"
                        class="w-full p-3.5 bg-white border-2 border-purple-300 focus:border-purple-600 rounded-xl font-bold text-sm outline-none cursor-pointer">
                    <option value="1">Level 1 (Dasar / Pemula - Usia 3-4 Thn)</option>
                    <option value="2">Level 2 (Menengah / Eksplorasi - Usia 4-5 Thn)</option>
                    <option value="3">Level 3 (Pra-SD / Mahir - Usia 5-6 Thn)</option>
                </select>
            </div>
        </div>

        <!-- 2. Topic & Options Config -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
            <div class="sm:col-span-1">
                <label class="block text-xs font-bold text-slate-600 mb-1.5">Tema / Topik Spesifik Soal</label>
                <input type="text" x-model="theme" required
                       placeholder="Contoh: Mengenal Hewan Laut / Huruf Vokal"
                       class="w-full p-3.5 bg-slate-50 border-2 border-slate-200 focus:border-purple-500 rounded-2xl font-bold text-sm outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1.5">Target Usia PAUD</label>
                <select x-model="targetAge"
                        class="w-full p-3.5 bg-slate-50 border-2 border-slate-200 focus:border-purple-500 rounded-2xl font-bold text-sm outline-none cursor-pointer">
                    <option value="3-4">3 - 4 Tahun (Batita / PAUD A)</option>
                    <option value="5-6">5 - 6 Tahun (TK A / TK B)</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1.5">Jumlah Soal Kuis</label>
                <select x-model="questionsCount"
                        class="w-full p-3.5 bg-slate-50 border-2 border-slate-200 focus:border-purple-500 rounded-2xl font-bold text-sm outline-none cursor-pointer">
                    <option value="3">3 Soal Cepat</option>
                    <option value="5">5 Soal Standar</option>
                    <option value="8">8 Soal Lengkap</option>
                </select>
            </div>
        </div>

        <!-- 1-Click Action Button -->
        <button type="button" @click="triggerGenerate()"
                :disabled="isGenerating"
                class="w-full py-4 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-extrabold text-base rounded-2xl shadow-md transition-all flex items-center justify-center gap-3 cursor-pointer hover:shadow-lg disabled:opacity-50">
            <template x-if="!isGenerating">
                <div class="flex items-center gap-2">
                    <span class="text-xl">✨</span>
                    <span>GENERATE MATERI & KUIS LENGKAP (TEKS + GAMBAR AI + AUDIO NARASI)</span>
                </div>
            </template>
            <template x-if="isGenerating">
                <div class="flex items-center gap-2">
                    <span class="animate-spin text-2xl">⏳</span>
                    <span>Sedang Meracik Soal Ramah Anak & Mengenerate Media via Backend Gemini...</span>
                </div>
            </template>
        </button>
    </div>

    <!-- Live Review Screen (Output) -->
    <template x-if="hasGenerated">
        <div class="bg-white rounded-3xl p-6 sm:p-8 border-2 border-purple-200 shadow-sm flex flex-col gap-6">
            
            <!-- Review Header & Action Bar -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b border-slate-200 pb-5">
                <div>
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="px-2.5 py-0.5 bg-purple-100 text-purple-800 rounded-full font-black text-xs uppercase">
                            Preview Hasil AI Multi-Modal
                        </span>
                        <span class="px-2.5 py-0.5 bg-sky-100 text-sky-800 rounded-full font-bold text-xs"
                              x-text="'Kategori: ' + selectedCategory + ' • Level ' + targetLevel"></span>
                        <span class="text-xs text-slate-500 font-semibold" x-text="`Tema: ${theme}`"></span>
                    </div>
                    <h3 class="text-2xl font-extrabold font-heading text-slate-800 mt-1">
                        Review & Kurasi Sebelum Dipublikasikan ke Siswa
                    </h3>
                </div>

                <div class="flex items-center gap-3">
                    <button @click="triggerGenerate()" :disabled="isGenerating"
                            class="px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs rounded-xl transition-all cursor-pointer">
                        🔄 Generate Ulang
                    </button>

                    <button @click="publishToStudents()" :disabled="isPublishing"
                            class="px-5 py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-sm rounded-xl shadow-xs transition-all flex items-center gap-2 cursor-pointer hover:scale-105 disabled:opacity-50">
                        <span x-show="!isPublishing">🚀 Publish ke Database Siswa</span>
                        <span x-show="isPublishing">⏳ Menyimpan...</span>
                    </button>
                </div>
            </div>

            <!-- Success Alert Banner -->
            <div x-show="publishedSuccess" x-cloak
                 class="p-4 bg-emerald-100 border-2 border-emerald-400 text-emerald-950 font-extrabold text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🎉</span>
                    <span x-text="alertMessage || 'Sukses! Kuis & Materi berhasil dipublikasikan ke database!'"></span>
                </div>
                <a href="{{ route('home') }}" class="px-3 py-1 bg-emerald-700 text-white rounded-lg text-xs font-bold hover:underline">
                    Lihat di Taman Siswa →
                </a>
            </div>

            <!-- Generated Questions Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <template x-for="(item, idx) in generatedData" :key="idx">
                    <div class="bg-slate-50 border-2 border-slate-200 rounded-2xl p-5 flex flex-col justify-between gap-4">
                        
                        <div>
                            <!-- Header Item -->
                            <div class="flex items-center justify-between mb-2">
                                <span class="px-2 py-0.5 bg-slate-200 text-slate-700 rounded-md font-bold text-xs" x-text="`Butir Soal #${idx + 1}`"></span>
                                <button @click="playNarration(item.voice_script)"
                                        class="flex items-center gap-1.5 px-3 py-1 bg-sky-100 hover:bg-sky-200 text-sky-800 border border-sky-300 rounded-full text-xs font-bold transition-all cursor-pointer">
                                    <span class="text-sm">🔊</span>
                                    <span>Tes Audio Suara</span>
                                </button>
                            </div>

                            <!-- Question Text -->
                            <h4 class="font-extrabold text-base text-slate-900 mb-2 leading-snug" x-text="item.question"></h4>

                            <!-- Voice Script Text -->
                            <div class="bg-sky-50/70 border border-sky-200 rounded-xl p-3 mb-3 text-xs text-sky-950">
                                <span class="font-bold block text-sky-800 mb-0.5">🎙️ Naskah Suara TTS:</span>
                                <span x-text="`&ldquo;${item.voice_script}&rdquo;`"></span>
                            </div>

                            <!-- AI Image Prompt Preview -->
                            <div class="bg-purple-50/70 border border-purple-200 rounded-xl p-3 mb-3 text-xs text-purple-950">
                                <span class="font-bold block text-purple-800 mb-0.5">🎨 Prompt Gambar Kartun (Imagen):</span>
                                <span class="italic text-[11px]" x-text="item.image_prompt"></span>
                            </div>

                            <!-- Options Checklist -->
                            <div class="flex flex-col gap-1.5">
                                <span class="text-[11px] font-bold text-slate-500 uppercase">Pilihan Jawaban Kartu:</span>
                                <template x-for="(opt, optIdx) in item.options" :key="optIdx">
                                    <div class="flex items-center justify-between p-2 rounded-lg text-xs font-bold"
                                         :class="opt.is_correct ? 'bg-emerald-100 text-emerald-900 border border-emerald-300' : 'bg-white text-slate-700 border border-slate-200'">
                                        <span x-text="opt.label"></span>
                                        <span x-text="opt.is_correct ? '✅ Kunci Jawaban' : '⚪ Pilihan Lain'"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

        </div>
    </template>

</div>
@endsection

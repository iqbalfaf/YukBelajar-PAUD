@extends('layouts.app')

@section('title', 'YukBelajar PAUD - Game Petualangan Belajar & Kuis Bergambar Ceria')

@section('content')
<div class="flex flex-col gap-12 sm:gap-16 pb-20"
     x-data="{
         activePillar: 'all', // 'all', 'mengenal', 'membaca', 'menghitung'
         demoTab: 'flashcard', // 'flashcard', 'quiz'
         activeDemoCardIndex: 0,
         quizAnswered: false,
         quizCorrect: null,
         categories: {{ Js::from($categories) }},
         demoMaterials: {{ Js::from($demoMaterials) }},
         demoQuiz: {{ Js::from($demoQuiz) }},

         get displayedCategories() {
             if (this.activePillar === 'all') {
                 return this.categories.slice(0, 6);
             }
             return this.categories.filter(c => c.pillar === this.activePillar).slice(0, 4);
         },

         speakHero() {
             if (window.soundEngine) {
                 window.soundEngine.speak('Hore! Selamat datang di YukBelajar PAUD! Ayo bermain, belajar flashcard bersuara, dan kumpulkan banyak bintang emas bersama Kiki!');
                 window.soundEngine.playVictory();
             }
         },

         speakDemoCard(m) {
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 window.soundEngine.speak(m.speech_text);
                 if (m.sound_effect_text) {
                     setTimeout(() => window.soundEngine.speak(m.sound_effect_text), 1500);
                 }
             }
         },

         answerDemoQuiz(isCorrect) {
             this.quizAnswered = true;
             this.quizCorrect = isCorrect;
             if (isCorrect) {
                 if (window.soundEngine) {
                     window.soundEngine.playCorrect();
                     window.soundEngine.playVictory();
                     window.soundEngine.speak('Hore! Jawabanmu benar! Hebat sekali teman pintar!');
                 }
                 if (typeof window.triggerConfetti === 'function') {
                     window.triggerConfetti(0.8);
                 }
             } else {
                 if (window.soundEngine) {
                     window.soundEngine.playWrong();
                     window.soundEngine.speak('Ayo coba lagi teman pintar!');
                 }
             }
         },

         resetDemoQuiz() {
             this.quizAnswered = false;
             this.quizCorrect = null;
         }
     }">

    <!-- ========================================================================= -->
    <!-- 1. HERO SECTION: PLAYFUL GAME THEME WITH MASCOT KIKI & SOUND ENGINE       -->
    <!-- ========================================================================= -->
    <section class="relative bg-gradient-to-br from-amber-300 via-yellow-200 to-sky-200 border-4 border-amber-400 rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-10 lg:p-14 shadow-xl overflow-hidden">
        <div class="max-w-4xl mx-auto flex flex-col items-center text-center relative z-10">
            
            <!-- Top Playful Badge -->
            <div class="inline-flex items-center gap-2 bg-amber-500 text-white font-black text-xs sm:text-sm px-4 py-1.5 rounded-full mb-4 shadow-sm uppercase tracking-wider animate-bounce-slow">
                <span>⭐</span>
                <span>Kurikulum Merdeka PAUD 3 Pilar • Usia 3–6 Tahun</span>
                <span>⭐</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black font-heading text-amber-950 leading-tight mb-4 tracking-tight">
                Petualangan Belajar Digital <br class="hidden sm:inline">
                <span class="text-sky-700 underline decoration-wavy decoration-amber-400">Paling Ceria & Penuh Suara!</span> 🌟
            </h1>

            <!-- Subtitle -->
            <p class="text-sm sm:text-lg lg:text-xl font-bold text-amber-950/85 max-w-2xl mb-8 leading-relaxed">
                Platform interaktif berkonsep pulau petualangan dengan <span class="text-amber-950 font-black">Flashcard Bersuara</span>, <span class="text-amber-950 font-black">Kuis Bergambar Sentuh</span> berhadiah bintang & stiker, serta <span class="text-purple-900 font-black">Piala & Lencana Prestasi</span> membanggakan!
            </p>

            <!-- Mascot Kiki Speech Interactive Card -->
            <div class="bg-white/95 border-3 border-amber-400 rounded-3xl p-4 sm:p-5 shadow-md flex flex-col sm:flex-row items-center gap-4 mb-8 max-w-lg w-full hover:scale-105 transition-transform cursor-pointer group"
                 @click="speakHero()">
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-amber-100 rounded-full border-3 border-amber-400 flex items-center justify-center text-4xl sm:text-5xl shrink-0 animate-wiggle group-hover:scale-110 transition-transform">
                    🐱
                </div>
                <div class="text-center sm:text-left">
                    <span class="text-[11px] font-black uppercase text-amber-600 block">🐱 Kiki si Kucing Pintar:</span>
                    <p class="text-sm sm:text-base font-extrabold text-slate-800 leading-snug">
                        "Hai teman kecil! Sentuh Kiki untuk mendengar suara ceriaku! 🔊"
                    </p>
                </div>
            </div>

            <!-- Big Action CTAs (Responsive Grid/Wrap) -->
            <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 w-full">
                @auth
                    <a href="{{ route('home') }}" 
                       @click="if(window.soundEngine) window.soundEngine.playVictory()"
                       class="btn-3d btn-3d-yellow py-4 sm:py-5 px-8 sm:px-10 rounded-2xl sm:rounded-3xl text-lg sm:text-2xl font-black text-amber-950 flex items-center justify-center gap-3 shadow-lg hover:scale-105 w-full sm:w-auto">
                        <span class="text-3xl animate-bounce-slow">🎮</span>
                        <span>LANJUTKAN PETUALANGAN ({{ auth()->user()->name }})!</span>
                    </a>
                @else
                    <a href="{{ route('home') }}" 
                       @click="if(window.soundEngine) window.soundEngine.playVictory()"
                       class="btn-3d btn-3d-yellow py-4 sm:py-5 px-6 sm:px-10 rounded-2xl sm:rounded-3xl text-lg sm:text-xl font-black text-amber-950 flex items-center justify-center gap-3 shadow-lg hover:scale-105 w-full sm:w-auto">
                        <span class="text-2xl sm:text-3xl animate-bounce-slow">🎮</span>
                        <span>MULAI MAIN GRATIS!</span>
                    </a>

                    <a href="{{ route('register') }}" 
                       class="btn-3d btn-3d-sky py-4 sm:py-5 px-6 sm:px-8 rounded-2xl sm:rounded-3xl text-base sm:text-lg font-black text-white flex items-center justify-center gap-2.5 shadow-lg w-full sm:w-auto">
                        <span class="text-xl">✨</span>
                        <span>Daftar Siswa Baru (+10 ⭐)</span>
                    </a>

                    <a href="{{ route('login') }}" 
                       class="btn-3d btn-3d-white py-4 px-6 rounded-2xl sm:rounded-3xl text-sm sm:text-base font-extrabold text-slate-700 flex items-center justify-center gap-2 w-full sm:w-auto shadow-xs">
                        <span>🔑</span>
                        <span>Masuk Akun</span>
                    </a>
                @endauth
            </div>

        </div>

        <!-- Floating Decorative Background Badges -->
        <div class="absolute -left-8 -bottom-8 text-8xl sm:text-9xl opacity-20 pointer-events-none">🏝️</div>
        <div class="absolute -right-8 -top-8 text-8xl sm:text-9xl opacity-20 pointer-events-none">☀️</div>
        <div class="absolute left-1/4 -bottom-6 text-6xl opacity-15 pointer-events-none">⭐</div>
        <div class="absolute right-1/4 -top-6 text-6xl opacity-15 pointer-events-none">🎈</div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. LIVE DATABASE STATS COUNTER BAR                                        -->
    <!-- ========================================================================= -->
    <section class="grid grid-cols-2 lg:grid-cols-4 gap-3.5 sm:gap-4">
        
        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-amber-300 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-shadow">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-100 border-2 border-amber-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                📚
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_materials'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Flashcard Interaktif Aktif</p>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-sky-300 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-shadow">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-sky-100 border-2 border-sky-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                🎯
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_quizzes'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Bank Modul Kuis Ceria</p>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-purple-300 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-shadow">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-purple-100 border-2 border-purple-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                👶
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_students'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Siswa Petualang Cilik</p>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-yellow-300 shadow-xs flex items-center gap-3.5 hover:shadow-md transition-shadow">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-yellow-100 border-2 border-yellow-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                ⭐
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_stars'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Bintang Emas Dikumpulkan</p>
            </div>
        </div>

    </section>

    <!-- ========================================================================= -->
    <!-- 3. LIVE INTERACTIVE PLAYGROUND WIDGET: COBA LANGSUNG DI HALAMAN DEPAN     -->
    <!-- ========================================================================= -->
    <section class="bg-white rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-8 lg:p-10 border-4 border-sky-300 shadow-md flex flex-col gap-6">
        
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b border-slate-100 pb-5">
            <div>
                <span class="px-3 py-1 bg-sky-100 text-sky-800 font-black text-xs uppercase tracking-wider rounded-full inline-block mb-1.5">
                    🎮 Coba Langsung Sekarang (Tanpa Login!)
                </span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-slate-900">
                    Panggung Uji Coba Ceria YukBelajar
                </h2>
                <p class="text-xs sm:text-sm font-bold text-slate-500 mt-0.5">
                    Sentuh kartu bergambar di bawah untuk mendengarkan suara narasinya, atau coba jawab mini kuis ceria!
                </p>
            </div>

            <!-- Demo Mode Switcher Tabs -->
            <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl shrink-0">
                <button type="button" @click="demoTab = 'flashcard'"
                        class="px-4 py-2 rounded-xl text-xs font-black transition-all cursor-pointer flex items-center gap-1.5"
                        :class="demoTab === 'flashcard' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    <span>🃏</span>
                    <span>Kartu Bersuara</span>
                </button>
                <button type="button" @click="demoTab = 'quiz'"
                        class="px-4 py-2 rounded-xl text-xs font-black transition-all cursor-pointer flex items-center gap-1.5"
                        :class="demoTab === 'quiz' ? 'bg-amber-500 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    <span>🎯</span>
                    <span>Mini Kuis</span>
                </button>
            </div>
        </div>

        <!-- DEMO TAB 1: FLASHCARD DEMO -->
        <div x-show="demoTab === 'flashcard'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <template x-for="(m, idx) in demoMaterials" :key="m.id">
                <div class="bg-gradient-to-b from-white to-slate-50 border-3 border-slate-200 hover:border-sky-400 p-5 rounded-3xl shadow-xs flex flex-col justify-between items-center text-center gap-3 cursor-pointer hover:scale-105 transition-all group"
                     @click="speakDemoCard(m)">
                    
                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-sky-100 text-sky-800"
                          x-text="m.category_name"></span>

                    <span class="text-6xl sm:text-7xl group-hover:scale-115 group-hover:rotate-6 transition-transform my-2 drop-shadow-xs"
                          x-html="window.twemojiParse(m.icon_emoji)"></span>

                    <div>
                        <h4 class="font-black text-lg text-slate-800" x-text="m.title"></h4>
                        <p class="text-xs font-bold text-slate-500 mt-0.5 line-clamp-1" x-text="m.subtitle || 'Sentuh kartu ini!'"></p>
                    </div>

                    <button type="button" 
                            class="w-full py-2.5 px-3 bg-sky-500 hover:bg-sky-400 text-white font-extrabold text-xs rounded-xl shadow-xs flex items-center justify-center gap-2 mt-2 group-hover:shadow-md transition-all">
                        <span class="text-sm">🔊</span>
                        <span>Sentuh & Dengar Suara</span>
                    </button>
                </div>
            </template>
        </div>

        <!-- DEMO TAB 2: MINI QUIZ DEMO -->
        <div x-show="demoTab === 'quiz'" class="bg-gradient-to-r from-amber-50 to-yellow-50 border-3 border-amber-300 p-6 sm:p-8 rounded-3xl flex flex-col items-center text-center gap-5">
            <div class="max-w-xl">
                <span class="px-3 py-1 bg-amber-200 text-amber-900 rounded-full text-xs font-black uppercase tracking-wider inline-block mb-2">
                    🎯 Contoh Tantangan Kuis PAUD
                </span>
                <h3 class="text-xl sm:text-2xl font-black font-heading text-amber-950" x-text="demoQuiz.question_text"></h3>
            </div>

            <!-- Quiz 3 Choice Buttons -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 w-full max-w-2xl">
                <template x-for="(opt, oIdx) in demoQuiz.options" :key="oIdx">
                    <button type="button" @click="answerDemoQuiz(opt.is_correct)"
                            class="p-4 sm:p-5 rounded-2xl border-3 font-extrabold text-sm sm:text-base flex flex-col items-center justify-center gap-2 transition-all cursor-pointer hover:scale-105 shadow-xs"
                            :class="quizAnswered 
                                ? (opt.is_correct ? 'bg-emerald-500 border-emerald-600 text-white shadow-md' : 'bg-slate-100 border-slate-300 text-slate-400')
                                : 'bg-white border-amber-300 hover:border-amber-500 text-slate-800 hover:bg-amber-100/50'">
                        <span class="text-4xl sm:text-5xl" x-html="window.twemojiParse(opt.emoji)"></span>
                        <span x-text="opt.text"></span>
                    </button>
                </template>
            </div>

            <!-- Quiz Feedback Alert -->
            <template x-if="quizAnswered">
                <div class="flex items-center gap-3 p-4 rounded-2xl text-sm font-extrabold"
                     :class="quizCorrect ? 'bg-emerald-100 text-emerald-950 border-2 border-emerald-400' : 'bg-rose-100 text-rose-950 border-2 border-rose-400'">
                    <span class="text-2xl" x-text="quizCorrect ? '🎉' : '💡'"></span>
                    <span x-text="quizCorrect ? 'Hore! Pilihanmu Tepat Sekali (+1 ⭐ Bintang Emas)!' : 'Yuk coba pilih jawaban yang benar lagi!'"></span>
                    <button type="button" @click="resetDemoQuiz()" class="ml-2 px-3 py-1 bg-white rounded-lg text-xs font-black shadow-xs cursor-pointer">
                        Ulangi 🔄
                    </button>
                </div>
            </template>
        </div>

    </section>

    <!-- ========================================================================= -->
    <!-- 4. 3 GRAND PILLARS & FEATURED ADVENTURE ISLANDS                           -->
    <!-- ========================================================================= -->
    <section class="flex flex-col gap-6">
        
        <div class="text-center max-w-3xl mx-auto">
            <span class="text-xs font-black uppercase tracking-wider text-sky-800 bg-sky-100 px-4 py-1.5 rounded-full inline-block mb-2">
                🗺️ Kurikulum Merdeka PAUD 3 Pilar
            </span>
            <h2 class="text-2xl sm:text-4xl font-black font-heading text-slate-900 leading-tight">
                Pilihan Pulau Petualangan Belajar Ceria
            </h2>
            <p class="text-xs sm:text-base font-bold text-slate-600 mt-1">
                Eksplorasi topik pilihan dari 3 pilar kurikulum anak usia dini (Tersedia total 20 pulau di Taman Petualangan).
            </p>
        </div>

        <!-- 3 Pillars Filter Ribbon Tabs -->
        <div class="flex items-center justify-center gap-2 bg-white p-2 rounded-3xl border-3 border-slate-200 shadow-xs overflow-x-auto max-w-full">
            <button type="button" @click="activePillar = 'all'"
                    class="px-5 py-2.5 rounded-2xl font-black text-xs sm:text-sm transition-all whitespace-nowrap cursor-pointer flex items-center gap-2"
                    :class="activePillar === 'all' ? 'bg-slate-800 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100'">
                <span>🌟</span>
                <span>Semua Pilar</span>
            </button>

            <button type="button" @click="activePillar = 'mengenal'"
                    class="px-5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all whitespace-nowrap cursor-pointer flex items-center gap-2"
                    :class="activePillar === 'mengenal' ? 'bg-emerald-600 text-white shadow-sm font-black' : 'text-slate-600 hover:bg-slate-100'">
                <span>🌟</span>
                <span>Pilar 1: Mengenal</span>
            </button>

            <button type="button" @click="activePillar = 'membaca'"
                    class="px-5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all whitespace-nowrap cursor-pointer flex items-center gap-2"
                    :class="activePillar === 'membaca' ? 'bg-sky-600 text-white shadow-sm font-black' : 'text-slate-600 hover:bg-slate-100'">
                <span>📖</span>
                <span>Pilar 2: Membaca</span>
            </button>

            <button type="button" @click="activePillar = 'menghitung'"
                    class="px-5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all whitespace-nowrap cursor-pointer flex items-center gap-2"
                    :class="activePillar === 'menghitung' ? 'bg-purple-600 text-white shadow-sm font-black' : 'text-slate-600 hover:bg-slate-100'">
                <span>🧮</span>
                <span>Pilar 3: Menghitung</span>
            </button>
        </div>

        <!-- Featured Category Island Cards Grid (Curated Subset) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-3.5 sm:gap-4">
            <template x-for="cat in displayedCategories" :key="cat.id">
                <a :href="`{{ url('/materi') }}/${cat.slug}`" 
                   class="card-bubbly p-4 sm:p-5 flex flex-col justify-between items-center text-center gap-2 border-3 hover:scale-105 transition-all group bg-white shadow-xs hover:shadow-md"
                   :style="`border-color: ${cat.border_color}50;`">
                    
                    <span class="text-4xl sm:text-5xl group-hover:scale-120 group-hover:rotate-6 transition-transform my-1"
                          x-html="window.twemojiParse(cat.icon_emoji)"></span>

                    <div>
                        <h3 class="font-black font-heading text-sm sm:text-base text-slate-800 mt-1 line-clamp-1"
                            x-text="cat.name"></h3>
                        <p class="text-[10px] sm:text-[11px] font-bold text-slate-500 mt-0.5 line-clamp-1"
                           x-text="cat.subtitle"></p>
                    </div>

                    <div class="flex items-center gap-1.5 mt-2 flex-wrap justify-center">
                        <span class="text-[10px] font-extrabold px-2 py-0.5 bg-slate-100 text-slate-600 rounded-full"
                              x-text="`${cat.materials_count} Kartu`"></span>
                        <span class="text-[10px] font-extrabold px-2 py-0.5 bg-amber-100 text-amber-800 rounded-full"
                              x-text="`Usia ${cat.recommended_age}`"></span>
                    </div>
                </a>
            </template>
        </div>

        <!-- View All 20 Islands Call to Action -->
        <div class="text-center pt-2">
            <a href="{{ route('home') }}" 
               class="inline-flex items-center gap-2 px-6 py-3.5 bg-gradient-to-r from-sky-500 to-indigo-600 hover:from-sky-400 hover:to-indigo-500 text-white font-black text-xs sm:text-sm rounded-2xl shadow-md transition-all hover:scale-105">
                <span>🗺️</span>
                <span>Buka & Jelajahi Seluruh 20 Pulau Belajar di Game ➔</span>
            </a>
        </div>

    </section>

    <!-- ========================================================================= -->
    <!-- 5. 4 CORE EDUCATIONAL FEATURES (3D CARDS)                                -->
    <!-- ========================================================================= -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        
        <!-- Feature 1 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-sky-200 shadow-xs flex flex-col gap-3 hover:border-sky-400 hover:shadow-md transition-all">
            <div class="w-14 h-14 bg-sky-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-sky-300">
                🔊
            </div>
            <h3 class="text-xl font-black font-heading text-sky-950">Flashcard Bersuara</h3>
            <p class="text-xs sm:text-sm font-bold text-slate-600 leading-relaxed">
                Kartu ilustrasi besar dengan pelafalan suara ramah anak bahasa Indonesia dan suara tiruan objek alami.
            </p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-yellow-200 shadow-xs flex flex-col gap-3 hover:border-yellow-400 hover:shadow-md transition-all">
            <div class="w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-yellow-300">
                🎯
            </div>
            <h3 class="text-xl font-black font-heading text-yellow-950">Kuis Gamifikasi PAUD</h3>
            <p class="text-xs sm:text-sm font-bold text-slate-600 leading-relaxed">
                Pilihan kartu bergambar sentuh besar, umpan balik suara ceria, dan hujan konfeti kemenangan tanpa rasa takut salah.
            </p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-purple-200 shadow-xs flex flex-col gap-3 hover:border-purple-400 hover:shadow-md transition-all">
            <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-purple-300">
                🔥
            </div>
            <h3 class="text-xl font-black font-heading text-purple-950">Daily Learning Streak</h3>
            <p class="text-xs sm:text-sm font-bold text-slate-600 leading-relaxed">
                Menumbuhkan kebiasaan belajar harian yang konsisten dengan bonus lencana api semangat dan stiker langka.
            </p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-emerald-200 shadow-xs flex flex-col gap-3 hover:border-emerald-400 hover:shadow-md transition-all">
            <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-emerald-300">
                📊
            </div>
            <h3 class="text-xl font-black font-heading text-emerald-950">Portal Orang Tua</h3>
            <p class="text-xs sm:text-sm font-bold text-slate-600 leading-relaxed">
                Pantau grafik capaian belajar buah hati, tingkat akurasi kuis, dan proteksi aman gerbang Parental Gate.
            </p>
        </div>

    </section>

    <!-- ========================================================================= -->
    <!-- 6. VIRTUAL STICKER ALBUM SHOWCASE                                        -->
    <!-- ========================================================================= -->
    <section class="bg-gradient-to-r from-purple-900 via-indigo-900 to-slate-900 text-white rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-10 shadow-lg border-4 border-purple-700">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 mb-8">
            <div>
                <span class="inline-block px-3 py-1 bg-purple-500/30 text-purple-300 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                    🏆 Album Koleksi Virtual
                </span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">
                    12 Stiker Karakter Petualangan Unik
                </h2>
                <p class="text-xs sm:text-sm text-purple-200 mt-1 max-w-xl font-medium">
                    Kumpulkan seluruh karakter stiker ramah anak dengan menamatkan modul kuis dan menaikkan perolehan bintang emas!
                </p>
            </div>
            <a href="{{ route('stickers') }}" class="px-6 py-3.5 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black text-xs sm:text-sm rounded-2xl shadow-md transition-all shrink-0 hover:scale-105">
                Buka Album Stiker 🏆
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3.5">
            @foreach(array_slice($stickers, 0, 5) as $stk)
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-3.5 rounded-2xl flex flex-col items-center text-center gap-1.5 hover:scale-105 transition-transform">
                <span class="emoji-icon text-3xl sm:text-4xl">{{ $stk['emoji'] }}</span>
                <span class="text-xs font-bold text-white line-clamp-1 mt-1">{{ $stk['name'] }}</span>
                <span class="text-[9px] px-2 py-0.5 rounded-full font-black uppercase {{ $stk['rarity'] === 'legendary' ? 'bg-amber-400 text-amber-950' : ($stk['rarity'] === 'rare' ? 'bg-purple-400 text-purple-950' : 'bg-slate-300 text-slate-900') }}">
                    {{ $stk['rarity'] }}
                </span>
            </div>
            @endforeach

            <!-- 6th Teaser Card -->
            <a href="{{ route('stickers') }}" 
               class="bg-yellow-400/20 hover:bg-yellow-400/30 border-2 border-dashed border-yellow-400/60 p-3.5 rounded-2xl flex flex-col items-center justify-center text-center gap-1 hover:scale-105 transition-all cursor-pointer">
                <span class="text-3xl animate-bounce-slow">🎁</span>
                <span class="text-xs font-black text-yellow-300 mt-0.5">+7 Stiker Lainnya</span>
                <span class="text-[10px] text-yellow-200 font-bold">Lihat Semua ➔</span>
            </a>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. 3-STEP EASY GUIDE FOR PARENTS & STUDENTS                               -->
    <!-- ========================================================================= -->
    <section class="bg-gradient-to-r from-sky-500 to-indigo-600 text-white rounded-3xl sm:rounded-[2.5rem] p-6 sm:p-10 shadow-lg border-4 border-sky-300">
        <div class="text-center max-w-xl mx-auto mb-8">
            <span class="text-xs font-black uppercase tracking-wider text-sky-100 bg-white/20 px-3.5 py-1 rounded-full inline-block">
                🚀 Cara Mulai Mudah
            </span>
            <h2 class="text-2xl sm:text-3xl font-black font-heading mt-2">
                3 Langkah Praktis Belajar Ceria
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-3xl border border-white/20 flex flex-col items-center">
                <span class="w-12 h-12 bg-yellow-400 text-yellow-950 rounded-full flex items-center justify-center font-black text-xl mb-3 shadow-sm">1</span>
                <h4 class="text-lg font-black font-heading mb-1">Pilih Avatar Ceria</h4>
                <p class="text-xs text-sky-100 font-bold leading-relaxed">Pilih karakter favorit (Dino, Kucing, Singa, Kelinci) dan masukkan nama panggilan anak.</p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-3xl border border-white/20 flex flex-col items-center">
                <span class="w-12 h-12 bg-yellow-400 text-yellow-950 rounded-full flex items-center justify-center font-black text-xl mb-3 shadow-sm">2</span>
                <h4 class="text-lg font-black font-heading mb-1">Buka Pulau Materi</h4>
                <p class="text-xs text-sky-100 font-bold leading-relaxed">Dengarkan suara objek flashcard, tirukan bunyi cerianya, dan kumpulkan bintang.</p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-3xl border border-white/20 flex flex-col items-center">
                <span class="w-12 h-12 bg-yellow-400 text-yellow-950 rounded-full flex items-center justify-center font-black text-xl mb-3 shadow-sm">3</span>
                <h4 class="text-lg font-black font-heading mb-1">Main Kuis & Raih Stiker</h4>
                <p class="text-xs text-sky-100 font-bold leading-relaxed">Jawab kuis bergambar sentuh, buka level berjenjang, dan lengkapi buku stiker prestasi!</p>
            </div>

        </div>
    </section>

    <section class="bg-gradient-to-r from-yellow-300 via-amber-300 to-orange-300 border-4 border-amber-400 rounded-3xl sm:rounded-[2.5rem] p-8 sm:p-12 text-center shadow-lg flex flex-col items-center gap-6">
        <span class="text-6xl animate-bounce-slow">🎉</span>
        <div>
            <h2 class="text-3xl sm:text-5xl font-black font-heading text-amber-950 mb-2">
                Siap Memulai Petualangan Seru?
            </h2>
            <p class="text-sm sm:text-lg font-bold text-amber-900 max-w-xl mx-auto leading-relaxed">
                Bantu tumbuh kembang buah hati dengan cara belajar yang menyenangkan, interaktif, dan 100% ramah anak.
            </p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 w-full">
            @auth
                <a href="{{ route('home') }}" 
                   class="btn-3d btn-3d-yellow py-4 px-8 rounded-2xl sm:rounded-3xl text-lg sm:text-xl font-black text-amber-950 shadow-md flex items-center justify-center gap-2 hover:scale-105 transition-transform">
                    <span>🎮</span>
                    <span>Lanjutkan Petualangan Sekarang!</span>
                </a>
            @else
                <a href="{{ route('home') }}" 
                   class="btn-3d btn-3d-yellow py-4 px-8 rounded-2xl sm:rounded-3xl text-lg sm:text-xl font-black text-amber-950 shadow-md flex items-center justify-center gap-2 hover:scale-105 transition-transform">
                    <span>🎮</span>
                    <span>Mulai Main Gratis!</span>
                </a>
                <a href="{{ route('register') }}" 
                   class="btn-3d btn-3d-sky py-4 px-8 rounded-2xl sm:rounded-3xl text-base sm:text-lg font-black text-white shadow-md flex items-center justify-center gap-2 hover:scale-105 transition-transform">
                    <span>✨</span>
                    <span>Daftar Akun Belajar (+10 ⭐)</span>
                </a>
            @endauth
        </div>
    </section>

</div>
@endsection

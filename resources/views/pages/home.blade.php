@extends('layouts.app')

@section('title', 'Taman Petualangan YukBelajar PAUD - Belajar & Kuis Ceria')

@section('content')
<div class="flex flex-col gap-8 pb-12" 
     x-data="{
         currentAgeFilter: '{{ $defaultAgeFilter ?? '3-4' }}', // 'all', '3-4', '4-5', '5-6'
         unlockedLevels: {{ Js::from($unlockedLevels ?? []) }},
         showSmartUnlockModal: false,
         unlockTarget: { slug: '', name: '', level: 3, reqStars: 25, question: '', options: [] },
         userStars: {{ (int) $user['stars_count'] }},
         
         speakGreeting() {
             if (window.soundEngine) {
                 window.soundEngine.speak('Halo {{ $user['name'] }}! Mau berpetualang dan belajar apa hari ini bersama Kiki? Yuk pilih pulau kesukaanmu!');
                 window.soundEngine.playVictory();
             }
         },

         filterByAge(catAgeMin) {
             if (this.currentAgeFilter === 'all') return true;
             if (this.currentAgeFilter === '3-4') return catAgeMin <= 3;
             if (this.currentAgeFilter === '4-5') return catAgeMin <= 4;
             if (this.currentAgeFilter === '5-6') return true;
             return true;
         },

         openSmartUnlock(cat) {
             this.unlockTarget = {
                 slug: cat.slug,
                 name: cat.name,
                 level: 3,
                 reqStars: 25,
                 question: cat.challenge_question || 'Tantangan Anak Cerdas: Manakah jawaban yang tepat?',
                 options: cat.challenge_options || [
                     { text: `${cat.icon_emoji} Pilihan Tepat`, isCorrect: true },
                     { text: '🪨 Batu Kali', isCorrect: false }
                 ]
             };
             this.showSmartUnlockModal = true;
             if (window.soundEngine) {
                 window.soundEngine.speak('Wah hebat! Yuk jawab tantangan anak cerdas untuk membuka level berikutnya!');
                 window.soundEngine.playClick();
             }
         },

         answerChallenge(isCorrect) {
             if (isCorrect) {
                 this.unlockedLevels[this.unlockTarget.slug + '_3'] = true;
                 this.showSmartUnlockModal = false;
                 if (window.soundEngine) {
                     window.soundEngine.playVictory();
                     window.soundEngine.speak('Hore! Jawabanmu benar! Level 3 sekarang sudah terbuka untukmu!');
                 }
                 window.triggerConfetti(0.8);
             } else {
                 if (window.soundEngine) window.soundEngine.playWrong();
                 alert('Yuk coba lagi teman pintar!');
             }
         }
     }">

    <!-- Welcome Hero Banner with Mascot "Kiki si Kucing Pintar" -->
    <section class="bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-200 border-4 border-amber-400 rounded-3xl p-4 sm:p-7 shadow-md relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-5">
        
        <!-- Mascot & Speech Bubble -->
        <div class="flex flex-col sm:flex-row items-center gap-3.5 sm:gap-5 z-10 text-center sm:text-left w-full md:w-auto">
            <button @click="speakGreeting()" 
                    title="Sentuh Kiki untuk mendengar suaranya!"
                    class="w-20 h-20 sm:w-24 sm:h-24 bg-white/90 rounded-full border-4 border-amber-400 flex items-center justify-center text-5xl sm:text-6xl shadow-md hover:scale-110 active:scale-95 transition-transform cursor-pointer shrink-0 animate-wiggle">
                🐱
            </button>
            <div class="flex-1">
                <div class="inline-block bg-amber-500 text-white font-extrabold text-[11px] px-2.5 py-0.5 rounded-full mb-1 uppercase tracking-wide shadow-xs">
                    🐱 Kiki si Kucing Pintar Menyapa
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold font-heading text-amber-950 leading-tight">
                    "Halo <span class="text-sky-700 underline decoration-wavy">{{ $user['name'] }}</span>! (Usia {{ $user['age'] }} Tahun)"
                </h2>
                <p class="text-xs sm:text-sm font-bold text-amber-900 mt-0.5">
                    Sentuh pulau di bawah ini untuk membuka kartu bergambar dan kumpulkan bintang! ⭐
                </p>
            </div>
        </div>

        <!-- Quick Voice Play Button & User Stars & Profile Button -->
        <div class="flex items-center gap-2 z-10 shrink-0 flex-wrap justify-center w-full md:w-auto">
            <div class="bg-white/90 border-2 border-amber-400 px-3.5 py-2 rounded-2xl flex items-center gap-2 shadow-xs">
                <span class="text-2xl animate-pop-star">⭐</span>
                <div>
                    <span class="block text-[10px] font-black uppercase text-amber-700 leading-none">Tabungan Bintang</span>
                    <span class="font-black text-amber-950 text-base sm:text-lg leading-tight" x-text="`${userStars} ⭐`"></span>
                </div>
            </div>

            <button @click="speakGreeting()"
                    class="btn-3d btn-3d-yellow px-3.5 py-2.5 rounded-2xl flex items-center gap-1.5 text-xs sm:text-sm font-bold cursor-pointer">
                <span class="text-lg animate-bounce-slow">🔊</span>
                <span>Dengar Kiki</span>
            </button>

            <!-- Profil Siswa / Orang Tua Button -->
            <a href="{{ route('profile') }}" @click="if(window.soundEngine) window.soundEngine.playClick()" title="Pengaturan Profil Siswa & Orang Tua"
               class="btn-3d btn-3d-sky px-3.5 py-2.5 rounded-2xl flex items-center gap-1.5 text-xs sm:text-sm font-extrabold text-white shadow-xs">
                <span class="text-lg">👤</span>
                <span>Profil Saya</span>
            </a>
        </div>

        <!-- Decorative Floating Shapes -->
        <div class="absolute -right-8 -bottom-8 text-7xl sm:text-8xl opacity-15 pointer-events-none">⭐</div>
        <div class="absolute right-1/4 -top-8 text-6xl sm:text-7xl opacity-15 pointer-events-none">🎈</div>
    </section>

    <!-- DUOLINGO-STYLE STAR PROGRESSION & LEVEL UNLOCK BAR -->
    <div class="bg-gradient-to-r from-sky-50 via-indigo-50 to-purple-50 border-3 border-sky-300 rounded-3xl p-4 sm:p-6 shadow-xs flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3 text-center md:text-left">
            <div class="w-12 h-12 rounded-2xl bg-sky-500 text-white flex items-center justify-center text-2xl shadow-sm shrink-0">
                🚀
            </div>
            <div>
                <h4 class="font-extrabold text-sm sm:text-base text-slate-800 font-heading">
                    Tingkatan Level & Target Bintang Pembuka:
                </h4>
                <p class="text-xs text-slate-600 font-medium">
                    Isi kuis dan pelajari materi untuk mengumpulkan bintang. Bintang akan membuka level dan materi usia yang lebih tinggi!
                </p>
            </div>
        </div>

        <div class="flex items-center gap-2 sm:gap-4 flex-wrap justify-center w-full md:w-auto">
            <!-- Level 1 Badge -->
            <div class="px-3 py-2 rounded-2xl border-2 flex items-center gap-2 {{ $user['stars_count'] >= 0 ? 'bg-emerald-100 border-emerald-400 text-emerald-950 font-bold' : 'bg-slate-100 border-slate-300 text-slate-400' }}">
                <span>🌱</span>
                <div class="text-left text-xs">
                    <span class="block font-black">Level 1 (3-4 Thn)</span>
                    <span class="text-[10px] text-emerald-700">🔓 Selalu Terbuka</span>
                </div>
            </div>

            <!-- Level 2 Badge -->
            <div class="px-3 py-2 rounded-2xl border-2 flex items-center gap-2 {{ $user['stars_count'] >= 10 ? 'bg-amber-100 border-amber-400 text-amber-950 font-bold' : 'bg-slate-100 border-slate-300 text-slate-500' }}">
                <span>⭐</span>
                <div class="text-left text-xs">
                    <span class="block font-black">Level 2 (4-5 Thn)</span>
                    @if($user['stars_count'] >= 10)
                        <span class="text-[10px] text-emerald-700 font-extrabold">🔓 Terbuka (≥10 ⭐)</span>
                    @else
                        <span class="text-[10px] text-amber-800 font-bold">🔒 Butuh 10 ⭐</span>
                    @endif
                </div>
            </div>

            <!-- Level 3 Badge -->
            <div class="px-3 py-2 rounded-2xl border-2 flex items-center gap-2 {{ $user['stars_count'] >= 25 ? 'bg-purple-100 border-purple-400 text-purple-950 font-bold' : 'bg-slate-100 border-slate-300 text-slate-500' }}">
                <span>🏆</span>
                <div class="text-left text-xs">
                    <span class="block font-black">Level 3 (5-6 Thn)</span>
                    @if($user['stars_count'] >= 25)
                        <span class="text-[10px] text-emerald-700 font-extrabold">🔓 Terbuka (≥25 ⭐)</span>
                    @else
                        <span class="text-[10px] text-purple-800 font-bold">🔒 Butuh 25 ⭐</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- AGE SELECTION FILTER & LEVEL NAVIGATION -->
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-3 bg-white p-3.5 sm:p-5 rounded-3xl border-3 border-sky-200 shadow-xs">
        <div class="flex items-center gap-2.5">
            <span class="text-2xl sm:text-3xl">🎯</span>
            <div>
                <h3 class="text-sm sm:text-base font-black font-heading text-slate-800 leading-tight">
                    Filter Usia & Tingkatan Belajar:
                </h3>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">
                    Otomatis disesuaikan dengan usia anak (<span class="text-sky-700 font-extrabold">{{ $user['age'] }} Tahun</span>). Anda dapat mengubah filter kapan saja.
                </p>
            </div>
        </div>

        <!-- Age Filter Pills (Responsive scroll/wrap) -->
        <div class="flex items-center gap-1.5 overflow-x-auto max-w-full pb-1 sm:pb-0 sm:flex-wrap w-full md:w-auto">
            <button @click="currentAgeFilter = 'all'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap shrink-0"
                    :class="currentAgeFilter === 'all' ? 'bg-sky-600 text-white shadow-xs ring-2 ring-sky-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                🌟 Semua Usia
            </button>
            <button @click="currentAgeFilter = '3-4'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap shrink-0"
                    :class="currentAgeFilter === '3-4' ? 'bg-emerald-600 text-white shadow-xs ring-2 ring-emerald-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                <span>🌱 3 - 4 Thn</span>
                <span class="text-[10px] opacity-80">(L1 Dasar)</span>
            </button>
            <button @click="currentAgeFilter = '4-5'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap shrink-0"
                    :class="currentAgeFilter === '4-5' ? 'bg-amber-500 text-white shadow-xs ring-2 ring-amber-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                <span>⭐ 4 - 5 Thn</span>
                <span class="text-[10px] opacity-80">(L2 Menengah)</span>
            </button>
            <button @click="currentAgeFilter = '5-6'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap shrink-0"
                    :class="currentAgeFilter === '5-6' ? 'bg-purple-600 text-white shadow-xs ring-2 ring-purple-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                <span>🚀 5 - 6 Thn</span>
                <span class="text-[10px] opacity-80">(L3 Pra-SD)</span>
            </button>
        </div>
    </div>

    <!-- Adventure Islands 3D Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        @foreach($categories as $category)
        <div x-show="filterByAge({{ $category['age_min'] }})"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="card-bubbly p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden group border-4"
             style="border-color: {{ $category['border_color'] }}25; background: linear-gradient(180deg, #ffffff 0%, #fafafa 100%);">
            
            <!-- Top Tag & Icon -->
            <div>
                <div class="flex items-start justify-between gap-3 mb-3">
                    <span class="text-6xl sm:text-7xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 drop-shadow-sm inline-block">
                        {{ $category['icon_emoji'] }}
                    </span>
                    
                    <div class="flex flex-col items-end gap-1">
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black text-white bg-gradient-to-r {{ $category['bg_gradient'] }} shadow-xs">
                            Usia {{ $category['recommended_age'] }}
                        </span>
                        <span class="text-[11px] font-bold text-slate-500">
                            {{ $category['materials_count'] }} Kartu Materi
                        </span>
                    </div>
                </div>

                <h4 class="text-2xl font-extrabold font-heading text-slate-800 mb-1 group-hover:text-sky-600 transition-colors">
                    {{ $category['name'] }}
                </h4>
                <p class="text-xs sm:text-sm font-bold text-slate-500 mb-4 line-clamp-2">
                    {{ $category['subtitle'] }}
                </p>

                <!-- Scaffolding Level Progress Bar Indicators -->
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-3 mb-4 flex flex-col gap-2">
                    <span class="text-[11px] font-extrabold uppercase text-slate-600 tracking-wider">
                        📈 Progres Tingkatan Level:
                    </span>
                    
                    <div class="grid grid-cols-3 gap-1.5 text-center">
                        @foreach($category['levels_progress'] as $lvl)
                        <div class="p-1.5 rounded-xl border text-[10px] font-bold flex flex-col items-center justify-center {{ $lvl['is_unlocked'] ? 'bg-emerald-50 border-emerald-300 text-emerald-900' : 'bg-slate-100 border-slate-200 text-slate-400' }}">
                            <span class="font-extrabold">L{{ $lvl['level'] }}</span>
                            @if($lvl['is_unlocked'])
                                <span class="text-[9px] text-emerald-700">🔓 Terbuka</span>
                            @else
                                <span class="text-[9px] text-slate-500" x-text="unlockedLevels['{{ $category['slug'] }}_3'] ? '🔓 Terbuka' : '🔒 Terkunci'"></span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- ALL AVAILABLE QUIZZES IN THIS CATEGORY (Real Dynamic List from MySQL) -->
                @if(!empty($category['quizzes_list']))
                <div class="bg-amber-50/80 border border-amber-200 rounded-2xl p-3 mb-4 flex flex-col gap-2">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-black uppercase text-amber-900 tracking-wider flex items-center gap-1">
                            <span>🎯</span>
                            <span>Pilihan Kuis ({{ count($category['quizzes_list']) }} Kuis):</span>
                        </span>
                    </div>

                    <div class="flex flex-col gap-1.5 max-h-40 overflow-y-auto pr-1">
                        @foreach($category['quizzes_list'] as $qz)
                        <a href="{{ route('quiz', $qz['slug']) }}" 
                           @click="if(window.soundEngine) window.soundEngine.playClick()"
                           class="p-2 bg-white hover:bg-amber-100 border border-amber-200 hover:border-amber-400 rounded-xl flex items-center justify-between gap-2 transition-all group/q shadow-2xs">
                            <div class="flex items-center gap-2 min-w-0">
                                <span class="text-lg shrink-0">{{ $qz['icon_emoji'] }}</span>
                                <div class="truncate text-left">
                                    <h5 class="text-xs font-extrabold text-slate-800 group-hover/q:text-amber-950 truncate">
                                        {{ $qz['title'] }}
                                    </h5>
                                    <span class="text-[10px] text-slate-500 font-semibold">
                                        {{ $qz['total_questions'] }} Soal • {{ $qz['target_age'] }}
                                    </span>
                                </div>
                            </div>

                            <div class="shrink-0 flex items-center gap-1">
                                @if($qz['best_stars'] > 0)
                                    <span class="px-2 py-0.5 bg-amber-100 text-amber-900 border border-amber-300 rounded-lg text-[10px] font-black flex items-center gap-0.5">
                                        <span>⭐</span>
                                        <span>{{ $qz['best_stars'] }}</span>
                                    </span>
                                @else
                                    <span class="px-2 py-0.5 bg-sky-50 text-sky-700 border border-sky-200 rounded-lg text-[10px] font-bold">
                                        Mulai ▶
                                    </span>
                                @endif
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Action Buttons for Kids -->
            <div class="flex flex-col gap-2.5 pt-2">
                <a href="{{ route('materials', $category['slug']) }}" 
                   @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="btn-3d btn-3d-{{ $category['color_theme'] }} py-3.5 px-4 rounded-2xl flex items-center justify-center gap-2 text-base font-extrabold shadow-sm">
                    <span class="text-xl">▶️</span>
                    <span>Buka Kartu Flashcard</span>
                </a>

                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route('quiz', $category['quiz_id']) }}" 
                       @click="if(window.soundEngine) window.soundEngine.playClick()"
                       class="btn-3d btn-3d-yellow py-3 px-3 rounded-2xl flex items-center justify-center gap-1.5 text-xs font-extrabold shadow-xs">
                        <span>🎯</span>
                        <span>Kuis Utama</span>
                    </a>

                    <!-- Smart Fast Unlock Button -->
                    <button type="button" @click="openSmartUnlock({{ Js::from($category) }})"
                            class="btn-3d btn-3d-purple py-3 px-3 rounded-2xl flex items-center justify-center gap-1 text-xs font-extrabold shadow-xs text-white">
                        <span>⚡</span>
                        <span>Uji Cepat</span>
                    </button>
                </div>
            </div>

            <!-- Subtle background glow -->
            <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-gradient-to-br {{ $category['bg_gradient'] }} rounded-full opacity-10 pointer-events-none"></div>
        </div>
        @endforeach
    </div>

    <!-- SMART FAST-UNLOCK CHALLENGE MODAL -->
    <div x-show="showSmartUnlockModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/70 backdrop-blur-xs overflow-y-auto"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-yellow-400 shadow-2xl relative my-8 text-center"
             @click.away="showSmartUnlockModal = false">
            
            <button @click="showSmartUnlockModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="w-20 h-20 bg-yellow-100 border-3 border-yellow-400 rounded-full flex items-center justify-center text-5xl mx-auto mb-4 animate-bounce-slow">
                ⚡
            </div>

            <span class="px-3 py-1 bg-purple-100 text-purple-900 rounded-full font-black text-xs uppercase tracking-wider">
                Akselerasi Anak Cerdas
            </span>

            <h3 class="text-2xl font-black font-heading text-slate-800 mt-2 mb-1">
                Tantangan Buka Kunci Level!
            </h3>
            <p class="text-xs sm:text-sm font-bold text-slate-600 mb-6">
                Ingin membuka Level 3 di <b x-text="unlockTarget.name"></b> lebih cepat? Jawab 1 pertanyaan cerdas ini:
            </p>

            <!-- Question Box -->
            <div class="bg-amber-50 border-3 border-amber-300 rounded-2xl p-4 mb-6">
                <p class="font-extrabold text-sm sm:text-base text-amber-950" x-text="unlockTarget.question"></p>
            </div>

            <!-- Option Buttons -->
            <div class="flex flex-col gap-3 mb-4">
                <template x-for="(opt, idx) in unlockTarget.options" :key="idx">
                    <button type="button" @click="answerChallenge(opt.isCorrect)"
                            class="btn-3d btn-3d-sky py-3.5 px-4 rounded-2xl text-sm sm:text-base font-extrabold text-white flex items-center justify-center gap-2">
                        <span x-text="opt.text"></span>
                    </button>
                </template>
            </div>

            <p class="text-[11px] font-semibold text-slate-400">
                💡 Level juga akan terbuka otomatis saat mengumpulkan 40 ⭐ Bintang Emas.
            </p>

        </div>
    </div>

</div>
@endsection

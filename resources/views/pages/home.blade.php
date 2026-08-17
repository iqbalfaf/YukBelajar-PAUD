@extends('layouts.app')

@section('title', 'Taman Petualangan YukBelajar PAUD - Belajar & Kuis Ceria')

@section('content')
<div class="flex flex-col gap-6 max-w-7xl mx-auto pb-16" 
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
    <section class="bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-200 border-4 border-amber-400 rounded-3xl p-5 sm:p-7 shadow-md relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-5">
        
        <!-- Mascot & Speech Bubble -->
        <div class="flex flex-col sm:flex-row items-center gap-4 z-10 text-center sm:text-left w-full md:w-auto">
            <button @click="speakGreeting()" 
                    title="Sentuh Kiki untuk mendengar suaranya!"
                    class="w-20 h-20 sm:w-24 sm:h-24 bg-white/95 rounded-full border-4 border-amber-400 flex items-center justify-center text-5xl sm:text-6xl shadow-md hover:scale-110 active:scale-95 transition-transform cursor-pointer shrink-0 animate-wiggle">
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
                    Sentuh pulau petualangan di bawah ini untuk membuka kartu materi dan kumpulkan bintang! ⭐
                </p>
            </div>
        </div>

        <!-- Quick Voice Play Button & User Stars & Profile Button -->
        <div class="flex items-center gap-2.5 z-10 shrink-0 flex-wrap justify-center w-full md:w-auto">
            <div class="bg-white/95 border-2 border-amber-400 px-4 py-2 rounded-2xl flex items-center gap-2 shadow-xs">
                <span class="text-2xl animate-pop-star">⭐</span>
                <div>
                    <span class="block text-[10px] font-black uppercase text-amber-700 leading-none">Tabungan Bintang</span>
                    <span class="font-black text-amber-950 text-base sm:text-lg leading-tight" x-text="`${userStars} ⭐`"></span>
                </div>
            </div>

            <button @click="speakGreeting()"
                    class="btn-3d btn-3d-yellow px-4 py-2.5 rounded-2xl flex items-center gap-1.5 text-xs sm:text-sm font-bold cursor-pointer">
                <span class="text-lg animate-bounce-slow">🔊</span>
                <span>Dengar Kiki</span>
            </button>

            <!-- Profil Siswa / Orang Tua Button -->
            <a href="{{ route('profile') }}" @click="if(window.soundEngine) window.soundEngine.playClick()" title="Pengaturan Profil Siswa & Orang Tua"
               class="btn-3d btn-3d-sky px-4 py-2.5 rounded-2xl flex items-center gap-1.5 text-xs sm:text-sm font-extrabold text-white shadow-xs">
                <span class="text-lg">👤</span>
                <span>Profil Saya</span>
            </a>
        </div>

        <!-- Decorative Floating Shapes -->
        <div class="absolute -right-8 -bottom-8 text-7xl sm:text-8xl opacity-15 pointer-events-none">⭐</div>
        <div class="absolute right-1/4 -top-8 text-6xl sm:text-7xl opacity-15 pointer-events-none">🎈</div>
    </section>

    <!-- UNIFIED GAME MISSION & AGE FILTER BAR (Clean, Single Row Design) -->
    <div class="bg-white border-3 border-sky-300 rounded-3xl p-4 sm:p-5 shadow-xs flex flex-col lg:flex-row items-center justify-between gap-4">
        
        <!-- Left: Filter Buttons with Level Indicator -->
        <div class="flex flex-col sm:flex-row items-center gap-3 w-full lg:w-auto">
            <div class="flex items-center gap-2 shrink-0">
                <span class="text-2xl">🎯</span>
                <span class="font-black text-xs sm:text-sm text-slate-800 font-heading uppercase tracking-wide">Filter Usia & Tingkatan Belajar:</span>
            </div>
            
            <div class="flex items-center gap-1.5 overflow-x-auto max-w-full pb-1 sm:pb-0 w-full sm:w-auto">
                <button @click="currentAgeFilter = 'all'; if(window.soundEngine) window.soundEngine.playClick()"
                        class="px-3.5 py-2 rounded-2xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap"
                        :class="currentAgeFilter === 'all' ? 'bg-sky-600 text-white shadow-xs ring-2 ring-sky-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    🌟 Semua Pulau
                </button>
                <button @click="currentAgeFilter = '3-4'; if(window.soundEngine) window.soundEngine.playClick()"
                        class="px-3.5 py-2 rounded-2xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1.5 whitespace-nowrap"
                        :class="currentAgeFilter === '3-4' ? 'bg-emerald-600 text-white shadow-xs ring-2 ring-emerald-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    <span>🌱 3 - 4 Thn</span>
                    <span class="px-1.5 py-0.2 rounded-full text-[10px]" :class="currentAgeFilter === '3-4' ? 'bg-white/25 text-white font-black' : 'bg-emerald-100 text-emerald-800 font-bold'">L1 🔓</span>
                </button>
                <button @click="currentAgeFilter = '4-5'; if(window.soundEngine) window.soundEngine.playClick()"
                        class="px-3.5 py-2 rounded-2xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1.5 whitespace-nowrap"
                        :class="currentAgeFilter === '4-5' ? 'bg-amber-500 text-white shadow-xs ring-2 ring-amber-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    <span>⭐ 4 - 5 Thn</span>
                    <span class="px-1.5 py-0.2 rounded-full text-[10px]" :class="currentAgeFilter === '4-5' ? 'bg-white/25 text-white font-black' : 'bg-amber-100 text-amber-900 font-bold'">L2 ({{ $user['stars_count'] >= 10 ? '🔓' : '🔒 10⭐' }})</span>
                </button>
                <button @click="currentAgeFilter = '5-6'; if(window.soundEngine) window.soundEngine.playClick()"
                        class="px-3.5 py-2 rounded-2xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1.5 whitespace-nowrap"
                        :class="currentAgeFilter === '5-6' ? 'bg-purple-600 text-white shadow-xs ring-2 ring-purple-300' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    <span>🚀 5 - 6 Thn</span>
                    <span class="px-1.5 py-0.2 rounded-full text-[10px]" :class="currentAgeFilter === '5-6' ? 'bg-white/25 text-white font-black' : 'bg-purple-100 text-purple-900 font-bold'">L3 ({{ $user['stars_count'] >= 25 ? '🔓' : '🔒 25⭐' }})</span>
                </button>
            </div>
        </div>

        <!-- Right: Student Star Progress to Next Milestone -->
        <div class="flex items-center gap-2.5 bg-amber-50 border border-amber-200 px-3.5 py-2 rounded-2xl shrink-0 w-full sm:w-auto justify-center sm:justify-start">
            <span class="text-xl">🏆</span>
            <div class="text-xs font-bold text-amber-950">
                @if($user['stars_count'] < 10)
                    <span>Butuh <b class="text-amber-600 font-extrabold">{{ 10 - $user['stars_count'] }} ⭐ lagi</b> untuk membuka Level 2</span>
                @elseif($user['stars_count'] < 25)
                    <span>Butuh <b class="text-purple-600 font-extrabold">{{ 25 - $user['stars_count'] }} ⭐ lagi</b> untuk membuka Level 3</span>
                @else
                    <span class="text-emerald-700 font-extrabold">🎉 Hebat! Seluruh Level & Materi Terbuka Penuh!</span>
                @endif
            </div>
        </div>

    </div>

    <!-- Adventure Islands 3D Grid (Clean, Balanced & Consistent) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($categories as $category)
        <div x-show="filterByAge({{ $category['age_min'] }})"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="card-bubbly p-6 rounded-3xl flex flex-col justify-between relative overflow-hidden group border-4 h-full shadow-xs"
             style="border-color: {{ $category['border_color'] }}35; background: linear-gradient(180deg, #ffffff 0%, #fafafa 100%);">
            
            <!-- Top Content Area -->
            <div class="flex flex-col gap-3">
                <!-- Top Badges & Icon -->
                <div class="flex items-start justify-between gap-3">
                    <span class="text-5xl sm:text-6xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 drop-shadow-xs inline-block">
                        {{ $category['icon_emoji'] }}
                    </span>
                    
                    <div class="flex flex-col items-end gap-1">
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black text-white bg-gradient-to-r {{ $category['bg_gradient'] }} shadow-xs">
                            Usia {{ $category['recommended_age'] }}
                        </span>
                        <span class="text-[11px] font-bold text-slate-500">
                            {{ $category['materials_count'] }} Kartu • {{ $category['quizzes_count'] }} Kuis
                        </span>
                    </div>
                </div>

                <div>
                    <h4 class="text-xl sm:text-2xl font-extrabold font-heading text-slate-800 group-hover:text-sky-600 transition-colors">
                        {{ $category['name'] }}
                    </h4>
                    <p class="text-xs font-bold text-slate-500 line-clamp-2 mt-0.5">
                        {{ $category['subtitle'] }}
                    </p>
                </div>

                <!-- Level Status Indicator Pills -->
                <div class="grid grid-cols-3 gap-1.5 text-center bg-slate-50 p-2 rounded-2xl border border-slate-200">
                    @foreach($category['levels_progress'] as $lvl)
                    <div class="py-1 px-1 rounded-xl text-[10px] font-bold flex flex-col items-center justify-center {{ $lvl['is_unlocked'] ? 'bg-emerald-100/70 border border-emerald-300 text-emerald-900' : 'bg-slate-100 border border-slate-200 text-slate-400' }}">
                        <span class="font-black">L{{ $lvl['level'] }}</span>
                        <span class="text-[9px] font-semibold">{{ $lvl['is_unlocked'] ? '🔓 Terbuka' : ($lvl['req_stars'] ? "🔒 {$lvl['req_stars']}⭐" : '🔒') }}</span>
                    </div>
                    @endforeach
                </div>

                <!-- Quizzes List (Sleek & Clean Dropdown / Direct View) -->
                @if(!empty($category['quizzes_list']))
                <div class="bg-amber-50/70 border border-amber-200 rounded-2xl p-2.5 flex flex-col gap-1.5"
                     x-data="{ showQuizList: false }">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-black uppercase text-amber-950 flex items-center gap-1">
                            <span>🎯</span>
                            <span>Pilihan Kuis ({{ $category['quizzes_count'] }}):</span>
                        </span>
                        @if($category['quizzes_count'] > 1)
                        <button type="button" @click="showQuizList = !showQuizList"
                                class="text-[10px] font-bold text-amber-700 hover:text-amber-900 underline cursor-pointer">
                            <span x-text="showQuizList ? 'Tutup ▴' : 'Lihat Semua ▾'"></span>
                        </button>
                        @endif
                    </div>

                    <!-- Primary Quiz Item -->
                    @php $firstQuiz = $category['quizzes_list'][0]; @endphp
                    <a href="{{ route('quiz', $firstQuiz['slug']) }}"
                       @click="if(window.soundEngine) window.soundEngine.playClick()"
                       class="p-2 bg-white hover:bg-amber-100 border border-amber-200 rounded-xl flex items-center justify-between gap-2 transition-all shadow-2xs">
                        <div class="flex items-center gap-1.5 min-w-0">
                            <span class="text-base shrink-0">{{ $firstQuiz['icon_emoji'] }}</span>
                            <div class="truncate text-left">
                                <p class="text-xs font-extrabold text-slate-800 truncate">{{ $firstQuiz['title'] }}</p>
                                <span class="text-[10px] text-slate-500 font-semibold">{{ $firstQuiz['total_questions'] }} Soal • {{ $firstQuiz['target_age'] }}</span>
                            </div>
                        </div>
                        <div class="shrink-0">
                            @if($firstQuiz['best_stars'] > 0)
                                <span class="px-2 py-0.5 bg-amber-100 text-amber-900 border border-amber-300 rounded-lg text-[10px] font-black flex items-center gap-0.5">
                                    <span>⭐</span>
                                    <span>{{ $firstQuiz['best_stars'] }}</span>
                                </span>
                            @else
                                <span class="px-2 py-0.5 bg-sky-50 text-sky-700 border border-sky-200 rounded-lg text-[10px] font-bold">
                                    Main ▶
                                </span>
                            @endif
                        </div>
                    </a>

                    <!-- Other Quizzes in Category (If > 1) -->
                    @if(count($category['quizzes_list']) > 1)
                    <div x-show="showQuizList" x-collapse class="flex flex-col gap-1.5 pt-1">
                        @foreach(array_slice($category['quizzes_list'], 1) as $otherQz)
                        <a href="{{ route('quiz', $otherQz['slug']) }}"
                           @click="if(window.soundEngine) window.soundEngine.playClick()"
                           class="p-2 bg-white hover:bg-amber-100 border border-amber-200 rounded-xl flex items-center justify-between gap-2 transition-all shadow-2xs">
                            <div class="flex items-center gap-1.5 min-w-0">
                                <span class="text-base shrink-0">{{ $otherQz['icon_emoji'] }}</span>
                                <div class="truncate text-left">
                                    <p class="text-xs font-extrabold text-slate-800 truncate">{{ $otherQz['title'] }}</p>
                                    <span class="text-[10px] text-slate-500 font-semibold">{{ $otherQz['total_questions'] }} Soal • {{ $otherQz['target_age'] }}</span>
                                </div>
                            </div>
                            <div class="shrink-0">
                                @if($otherQz['best_stars'] > 0)
                                    <span class="px-2 py-0.5 bg-amber-100 text-amber-900 border border-amber-300 rounded-lg text-[10px] font-black flex items-center gap-0.5">
                                        <span>⭐</span>
                                        <span>{{ $otherQz['best_stars'] }}</span>
                                    </span>
                                @else
                                    <span class="px-2 py-0.5 bg-sky-50 text-sky-700 border border-sky-200 rounded-lg text-[10px] font-bold">
                                        Main ▶
                                    </span>
                                @endif
                            </div>
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
                @endif
            </div>

            <!-- Bottom Action Buttons for Kids -->
            <div class="flex flex-col gap-2 pt-3 mt-3 border-t border-slate-100">
                <a href="{{ route('materials', $category['slug']) }}" 
                   @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="btn-3d btn-3d-{{ $category['color_theme'] }} py-3 px-4 rounded-2xl flex items-center justify-center gap-2 text-sm sm:text-base font-extrabold shadow-sm">
                    <span class="text-lg">▶️</span>
                    <span>Buka Flashcard Belajar</span>
                </a>

                <div class="grid grid-cols-2 gap-2">
                    <a href="{{ route('quiz', $category['quiz_id']) }}" 
                       @click="if(window.soundEngine) window.soundEngine.playClick()"
                       class="btn-3d btn-3d-yellow py-2.5 px-2 rounded-2xl flex items-center justify-center gap-1 text-xs font-extrabold shadow-xs">
                        <span>🎯</span>
                        <span>Kuis Cepat</span>
                    </a>

                    <!-- Smart Fast Unlock Button -->
                    <button type="button" @click="openSmartUnlock({{ Js::from($category) }})"
                            class="btn-3d btn-3d-purple py-2.5 px-2 rounded-2xl flex items-center justify-center gap-1 text-xs font-extrabold shadow-xs text-white">
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

            <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-900 rounded-full text-xs font-black uppercase tracking-wider mb-2">
                Tantangan Kilat Buka Level 3
            </span>

            <h3 class="text-xl sm:text-2xl font-black font-heading text-slate-800 mb-2">
                <span x-text="unlockTarget.name"></span>
            </h3>

            <p class="text-sm font-bold text-slate-600 mb-6" x-text="unlockTarget.question"></p>

            <div class="flex flex-col gap-3">
                <template x-for="(opt, idx) in unlockTarget.options" :key="idx">
                    <button type="button" 
                            @click="answerChallenge(opt.isCorrect)"
                            class="card-bubbly p-4 border-3 border-slate-200 hover:border-yellow-400 bg-slate-50 hover:bg-yellow-50 font-extrabold text-base sm:text-lg text-slate-800 transition-all text-center cursor-pointer active:scale-95 flex items-center justify-center gap-2">
                        <span x-text="opt.text"></span>
                    </button>
                </template>
            </div>
            
            <button @click="showSmartUnlockModal = false"
                    class="mt-6 text-xs text-slate-400 hover:text-slate-600 font-bold underline cursor-pointer">
                Nanti saja, saya ingin belajar kartu flashcard dulu
            </button>
        </div>
    </div>

</div>
@endsection

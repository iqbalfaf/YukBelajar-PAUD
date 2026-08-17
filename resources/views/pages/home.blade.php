@extends('layouts.app')

@section('title', 'Taman Petualangan YukBelajar PAUD - Belajar 3 Pilar Ceria')

@section('content')
<div class="flex flex-col gap-6 max-w-7xl mx-auto pb-16" 
     x-data="{
         activePillar: 'mengenal', // 'mengenal', 'membaca', 'menghitung'
         selectedCategory: null,
         categoryLevelFilter: 0, // 0: Semua Level, 1: Level 1, 2: Level 2, 3: Level 3
         quizLevelFilter: 0, // 0: Semua Kuis, 1: Level 1, 2: Level 2, 3: Level 3
         categoryViewTab: 'materials', // 'materials' (default awal), 'quizzes'
         currentPage: 1,
         cardsPerPage: 6,
         unlockedLevels: {{ Js::from($unlockedLevels ?? []) }},
         showSmartUnlockModal: false,
         unlockTarget: { slug: '', name: '', level: 3, reqStars: 25, question: '', options: [] },
         userStars: {{ (int) $user['stars_count'] }},
         completedMaterials: {},
         allCategories: {{ Js::from($categories) }},

         get filteredCategories() {
             return this.allCategories.filter(c => c.pillar === this.activePillar);
         },

         get currentTopicMaterials() {
             if (!this.selectedCategory || !this.selectedCategory.all_materials) return [];
             let mats = this.selectedCategory.all_materials;
             if (this.categoryLevelFilter > 0) {
                 mats = mats.filter(m => m.level === this.categoryLevelFilter);
             }
             return mats;
         },

         get currentTopicQuizzes() {
             if (!this.selectedCategory || !this.selectedCategory.quizzes_list) return [];
             let quizzes = this.selectedCategory.quizzes_list;
             if (this.quizLevelFilter > 0) {
                 quizzes = quizzes.filter(q => q.level === this.quizLevelFilter);
             }
             return quizzes;
         },

         get totalMaterialPages() {
             return Math.max(1, Math.ceil(this.currentTopicMaterials.length / this.cardsPerPage));
         },

         get paginatedMaterials() {
             const start = (this.currentPage - 1) * this.cardsPerPage;
             return this.currentTopicMaterials.slice(start, start + this.cardsPerPage);
         },
         
         speakGreeting() {
             if (window.soundEngine) {
                 window.soundEngine.speak('Halo {{ $user['name'] }}! Selamat datang di Taman Petualangan Tiga Pilar! Mau belajar Mengenal, Membaca, atau Menghitung hari ini bersama Kiki?');
                 window.soundEngine.playVictory();
             }
         },

         switchPillar(pillarName) {
             this.activePillar = pillarName;
             this.selectedCategory = null;
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 if (pillarName === 'mengenal') window.soundEngine.speak('Selamat datang di Zona Belajar Mengenal! Banyak hal seru untuk dieksplorasi!');
                 if (pillarName === 'membaca') window.soundEngine.speak('Selamat datang di Zona Belajar Membaca! Mari merangkai kata dan membaca cerita!');
                 if (pillarName === 'menghitung') window.soundEngine.speak('Selamat datang di Zona Belajar Menghitung! Ayo berhitung ceria bersama balon dan buah!');
             }
             window.scrollTo({ top: 0, behavior: 'smooth' });
         },

         selectCategory(cat) {
             this.selectedCategory = cat;
             this.categoryLevelFilter = 0;
             this.quizLevelFilter = 0;
             this.categoryViewTab = 'materials'; // Default ke Pengenalan Kartu!
             this.currentPage = 1;
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 window.soundEngine.speak('Bagus sekali! Mari belajar kartu ' + cat.name + ' terlebih dahulu!');
             }
             window.scrollTo({ top: 0, behavior: 'smooth' });
         },

         changePage(p) {
             if (p < 1 || p > this.totalMaterialPages) return;
             this.currentPage = p;
             if (window.soundEngine) window.soundEngine.playClick();
             const el = document.getElementById('topic-tab-navigation');
             if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
         },

         setCategoryLevelFilter(lvl) {
             this.categoryLevelFilter = lvl;
             this.currentPage = 1;
             if (window.soundEngine) window.soundEngine.playClick();
         },

         setQuizLevelFilter(lvl) {
             this.quizLevelFilter = lvl;
             if (window.soundEngine) window.soundEngine.playClick();
         },

         switchToQuizzes() {
             this.categoryViewTab = 'quizzes';
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 window.soundEngine.speak('Ayo uji kemampuanmu di Arena Kuis!');
             }
             const el = document.getElementById('topic-tab-navigation');
             if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
         },

         switchToMaterials() {
             this.categoryViewTab = 'materials';
             this.currentPage = 1;
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 window.soundEngine.speak('Yuk pelajari kartu pengenalan terlebih dahulu!');
             }
             const el = document.getElementById('topic-tab-navigation');
             if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
         },

         backToCategories() {
             this.selectedCategory = null;
             if (window.soundEngine) window.soundEngine.playClick();
             window.scrollTo({ top: 0, behavior: 'smooth' });
         },

         speakMaterial(m) {
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 window.soundEngine.speak(m.speech_text || (m.title + '. ' + (m.subtitle || '')));
             }
         },

         playMaterialEffect(soundEffect) {
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 if (soundEffect) {
                     window.soundEngine.speak(soundEffect);
                 }
             }
         },

         async markMaterialDone(m) {
             this.completedMaterials[m.id] = true;
             try {
                 const res = await fetch('{{ route('materials.complete-card') }}', {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/json',
                         'X-CSRF-TOKEN': '{{ csrf_token() }}',
                         'Accept': 'application/json'
                     },
                     body: JSON.stringify({ material_id: m.id })
                 });
                 const data = await res.json();
                 if (data.success) {
                     this.userStars = data.total_stars;
                 }
             } catch (e) {
                 console.error(e);
             }

             if (window.soundEngine) {
                 window.soundEngine.playCorrect();
                 window.soundEngine.playStar();
                 window.triggerConfetti(0.7);
             }
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
                    "Halo <span class="text-sky-700 underline decoration-wavy">{{ $user['name'] }}</span>!"
                </h2>
                <div class="flex items-center justify-center sm:justify-start gap-2 flex-wrap mt-1">
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 bg-white/90 border border-amber-300 text-amber-950 font-extrabold text-[11px] rounded-full shadow-2xs">
                        <span>🧒</span>
                        <span>Usia {{ $user['age'] }} Tahun</span>
                    </span>
                    @if(!empty($user['parent_name']))
                    <a href="{{ route('parents') }}" class="inline-flex items-center gap-1 px-2.5 py-0.5 bg-purple-100/90 hover:bg-purple-200 border border-purple-300 text-purple-950 font-extrabold text-[11px] rounded-full shadow-2xs transition-all" title="Buka Portal Pantauan Orang Tua">
                        <span>👨‍👩‍👧</span>
                        <span>Didampingi {{ $user['parent_display_title'] }}</span>
                        <span class="text-[9px] text-purple-700 underline font-black">➔</span>
                    </a>
                    @endif
                </div>
                <p class="text-xs sm:text-sm font-bold text-amber-900 mt-1">
                    Pilih salah satu Zona Belajar di bawah ini dan kumpulkan bintang emas sebanyak-banyaknya! ⭐
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

    <!-- ========================================================================= -->
    <!-- 3 GRAND PILLARS / ZONA PEMBELAJARAN SELECTOR (Mengenal, Membaca, Menghitung) -->
    <!-- ========================================================================= -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        
        <!-- Pillar 1: Mengenal -->
        <button type="button" 
                @click="switchPillar('mengenal')"
                class="p-4 sm:p-5 rounded-3xl border-4 flex items-center gap-4 transition-all cursor-pointer text-left relative overflow-hidden shadow-xs hover:shadow-md"
                :class="activePillar === 'mengenal' ? 'border-emerald-500 bg-gradient-to-r from-emerald-500 to-teal-600 text-white shadow-lg ring-4 ring-emerald-200 scale-[1.02]' : 'border-slate-200 bg-white hover:border-emerald-300 text-slate-800 hover:bg-emerald-50/40'">
            <span class="text-5xl shrink-0 animate-bounce-slow">🌟</span>
            <div>
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wide inline-block"
                      :class="activePillar === 'mengenal' ? 'bg-white/25 text-white border border-white/40' : 'bg-emerald-100 text-emerald-800 border border-emerald-200'">
                    10 Topik Eksplorasi
                </span>
                <h3 class="text-lg sm:text-xl font-black font-heading leading-tight mt-1"
                    :class="activePillar === 'mengenal' ? 'text-white' : 'text-slate-800'">Zona Mengenal</h3>
                <p class="text-xs font-bold line-clamp-1 mt-0.5"
                   :class="activePillar === 'mengenal' ? 'text-emerald-50' : 'text-slate-500'">Hewan, Buah, Bendera, Tubuh, dll.</p>
            </div>
            <div x-show="activePillar === 'mengenal'" class="absolute -right-4 -bottom-4 text-6xl opacity-20 text-white pointer-events-none">⭐</div>
        </button>

        <!-- Pillar 2: Membaca -->
        <button type="button" 
                @click="switchPillar('membaca')"
                class="p-4 sm:p-5 rounded-3xl border-4 flex items-center gap-4 transition-all cursor-pointer text-left relative overflow-hidden shadow-xs hover:shadow-md"
                :class="activePillar === 'membaca' ? 'border-sky-500 bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-lg ring-4 ring-sky-200 scale-[1.02]' : 'border-slate-200 bg-white hover:border-sky-300 text-slate-800 hover:bg-sky-50/40'">
            <span class="text-5xl shrink-0 animate-bounce-slow">📖</span>
            <div>
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wide inline-block"
                      :class="activePillar === 'membaca' ? 'bg-white/25 text-white border border-white/40' : 'bg-sky-100 text-sky-800 border border-sky-200'">
                    5 Topik Literasi
                </span>
                <h3 class="text-lg sm:text-xl font-black font-heading leading-tight mt-1"
                    :class="activePillar === 'membaca' ? 'text-white' : 'text-slate-800'">Zona Membaca</h3>
                <p class="text-xs font-bold line-clamp-1 mt-0.5"
                   :class="activePillar === 'membaca' ? 'text-sky-50' : 'text-slate-500'">Vokal, 2 Suku Kata, Cerita Pendek</p>
            </div>
            <div x-show="activePillar === 'membaca'" class="absolute -right-4 -bottom-4 text-6xl opacity-20 text-white pointer-events-none">📚</div>
        </button>

        <!-- Pillar 3: Menghitung -->
        <button type="button" 
                @click="switchPillar('menghitung')"
                class="p-4 sm:p-5 rounded-3xl border-4 flex items-center gap-4 transition-all cursor-pointer text-left relative overflow-hidden shadow-xs hover:shadow-md"
                :class="activePillar === 'menghitung' ? 'border-purple-500 bg-gradient-to-r from-purple-500 to-indigo-600 text-white shadow-lg ring-4 ring-purple-200 scale-[1.02]' : 'border-slate-200 bg-white hover:border-purple-300 text-slate-800 hover:bg-purple-50/40'">
            <span class="text-5xl shrink-0 animate-bounce-slow">🧮</span>
            <div>
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wide inline-block"
                      :class="activePillar === 'menghitung' ? 'bg-white/25 text-white border border-white/40' : 'bg-purple-100 text-purple-800 border border-purple-200'">
                    5 Topik Numerasi
                </span>
                <h3 class="text-lg sm:text-xl font-black font-heading leading-tight mt-1"
                    :class="activePillar === 'menghitung' ? 'text-white' : 'text-slate-800'">Zona Menghitung</h3>
                <p class="text-xs font-bold line-clamp-1 mt-0.5"
                   :class="activePillar === 'menghitung' ? 'text-purple-50' : 'text-slate-500'">Membilang, Tambah, Kurang & Pola</p>
            </div>
            <div x-show="activePillar === 'menghitung'" class="absolute -right-4 -bottom-4 text-6xl opacity-20 text-white pointer-events-none">🎈</div>
        </button>

    </div>

    <!-- ========================================================================= -->
    <!-- TAMPILAN 1: GRID PILIHAN TOPIK (Saat Belum Memilih Topik Tertentu)         -->
    <!-- ========================================================================= -->
    <template x-if="!selectedCategory">
        <div class="flex flex-col gap-6">
            
            <!-- Pillar Header Info Banner -->
            <div class="bg-white border-3 border-sky-300 rounded-3xl p-4 sm:p-5 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3 text-center sm:text-left">
                    <span class="text-3xl" x-text="activePillar === 'mengenal' ? '🌟' : (activePillar === 'membaca' ? '📖' : '🧮')"></span>
                    <div>
                        <h4 class="font-black text-base sm:text-lg text-slate-800 font-heading">
                            <span x-text="activePillar === 'mengenal' ? 'Topik Pembelajaran Zona Mengenal:' : (activePillar === 'membaca' ? 'Topik Pembelajaran Zona Belajar Membaca:' : 'Topik Pembelajaran Zona Belajar Menghitung:')"></span>
                        </h4>
                        <p class="text-xs text-slate-500 font-bold">
                            Sentuh salah satu topik di bawah ini untuk membuka kartu bergambar dan pilihan kuisnya!
                        </p>
                    </div>
                </div>

                <!-- Star Milestone Info -->
                <div class="flex items-center gap-2.5 bg-amber-50 border border-amber-200 px-3.5 py-2 rounded-2xl shrink-0">
                    <span class="text-xl">🏆</span>
                    <div class="text-xs font-bold text-amber-950">
                        @if($user['stars_count'] < 10)
                            <span>Butuh <b class="text-amber-600 font-extrabold">{{ 10 - $user['stars_count'] }} ⭐ lagi</b> buka Level 2</span>
                        @elseif($user['stars_count'] < 25)
                            <span>Butuh <b class="text-purple-600 font-extrabold">{{ 25 - $user['stars_count'] }} ⭐ lagi</b> buka Level 3</span>
                        @else
                            <span class="text-emerald-700 font-extrabold">🎉 Seluruh Level Terbuka Penuh!</span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Dynamic Topics Grid for Active Pillar -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="cat in filteredCategories" :key="cat.id">
                    <div class="card-bubbly p-6 rounded-3xl flex flex-col justify-between relative overflow-hidden group border-4 h-full shadow-xs cursor-pointer hover:shadow-lg transition-all"
                         @click="selectCategory(cat)"
                         :style="`border-color: ${cat.border_color}35; background: linear-gradient(180deg, #ffffff 0%, #fafafa 100%);`">
                        
                        <!-- Top Content Area -->
                        <div class="flex flex-col gap-3">
                            <!-- Top Badges & Icon -->
                            <div class="flex items-start justify-between gap-3">
                                <span class="text-5xl sm:text-6xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 drop-shadow-xs inline-block"
                                      x-text="cat.icon_emoji"></span>
                                
                                <div class="flex flex-col items-end gap-1">
                                    <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black text-white bg-gradient-to-r shadow-xs"
                                          :class="cat.bg_gradient"
                                          x-text="`Usia ${cat.recommended_age}`"></span>
                                    <span class="text-[11px] font-bold text-slate-500"
                                          x-text="`${cat.all_materials ? cat.all_materials.length : cat.materials_count} Kartu • ${cat.quizzes_count} Kuis`"></span>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-xl sm:text-2xl font-extrabold font-heading text-slate-800 group-hover:text-sky-600 transition-colors"
                                    x-text="cat.name"></h4>
                                <p class="text-xs font-bold text-slate-500 line-clamp-2 mt-0.5"
                                   x-text="cat.subtitle"></p>
                            </div>

                            <!-- Level Status Indicator Pills -->
                            <div class="grid grid-cols-3 gap-1.5 text-center bg-slate-50 p-2 rounded-2xl border border-slate-200">
                                <template x-for="lvl in cat.levels_progress" :key="lvl.level">
                                    <div class="py-1 px-1 rounded-xl text-[10px] font-bold flex flex-col items-center justify-center"
                                         :class="lvl.is_unlocked ? 'bg-emerald-100/70 border border-emerald-300 text-emerald-900' : 'bg-slate-100 border border-slate-200 text-slate-400'">
                                        <span class="font-black" x-text="`L${lvl.level}`"></span>
                                        <span class="text-[9px] font-semibold" x-text="lvl.is_unlocked ? '🔓 Terbuka' : (lvl.req_stars ? `🔒 ${lvl.req_stars}⭐` : '🔒')"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Bottom Action Buttons -->
                        <div class="flex flex-col gap-2 pt-4 mt-3 border-t border-slate-100">
                            <button type="button" 
                                    @click.stop="selectCategory(cat)"
                                    class="btn-3d py-3.5 px-4 rounded-2xl flex items-center justify-center gap-2 text-sm sm:text-base font-extrabold shadow-sm w-full"
                                    :class="`btn-3d-${cat.color_theme}`">
                                <span class="text-xl">🏝️</span>
                                <span>Buka & Lihat Seluruh Materi ➔</span>
                            </button>

                            <div class="grid grid-cols-2 gap-2">
                                <a :href="`{{ url('/kuis') }}/${cat.quiz_id}`" 
                                   @click.stop="if(window.soundEngine) window.soundEngine.playClick()"
                                   class="btn-3d btn-3d-yellow py-2 px-2 rounded-2xl flex items-center justify-center gap-1 text-xs font-extrabold shadow-xs">
                                    <span>🎯</span>
                                    <span>Kuis Cepat</span>
                                </a>

                                <button type="button" @click.stop="openSmartUnlock(cat)"
                                        class="btn-3d btn-3d-purple py-2 px-2 rounded-2xl flex items-center justify-center gap-1 text-xs font-extrabold shadow-xs text-white">
                                    <span>⚡</span>
                                    <span>Uji Level</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

        </div>
    </template>

    <!-- ========================================================================= -->
    <!-- TAMPILAN 2: DAFTAR LENGKAP MATERI & KUIS DI TOPIK TERPILIH                 -->
    <!-- ========================================================================= -->
    <template x-if="selectedCategory">
        <div class="flex flex-col gap-6">
            
            <!-- Topic Navigation Header Banner -->
            <div class="bg-white border-4 rounded-3xl p-5 sm:p-7 shadow-md relative overflow-hidden flex flex-col md:flex-row items-start md:items-center justify-between gap-5"
                 :style="`border-color: ${selectedCategory.border_color}50;`">
                
                <div class="flex items-center gap-4 sm:gap-6 z-10">
                    <span class="text-6xl sm:text-7xl drop-shadow-sm animate-wiggle" x-text="selectedCategory.icon_emoji"></span>
                    <div>
                        <div class="flex items-center gap-2 mb-1 flex-wrap">
                            <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black text-white bg-gradient-to-r"
                                  :class="selectedCategory.bg_gradient"
                                  x-text="`Usia ${selectedCategory.recommended_age}`"></span>
                            <span class="text-xs font-bold text-slate-500"
                                  x-text="`${selectedCategory.all_materials ? selectedCategory.all_materials.length : selectedCategory.materials_count} Kartu Materi • ${selectedCategory.quizzes_count} Pilihan Kuis`"></span>
                        </div>
                        <h2 class="text-2xl sm:text-4xl font-black font-heading text-slate-800" x-text="selectedCategory.name"></h2>
                        <p class="text-xs sm:text-sm font-bold text-slate-500 mt-0.5" x-text="selectedCategory.subtitle"></p>
                    </div>
                </div>

                <!-- Back to Topic Grid & Flashcard Mode Button -->
                <div class="flex items-center gap-2.5 z-10 flex-wrap w-full md:w-auto justify-start md:justify-end">
                    <button @click="backToCategories()"
                            class="btn-3d btn-3d-yellow px-4 py-2.5 rounded-2xl flex items-center gap-1.5 text-xs sm:text-sm font-extrabold cursor-pointer shadow-xs">
                        <span>⬅️</span>
                        <span>Ganti Topik Lain</span>
                    </button>

                    <a :href="`{{ url('/materi') }}/${selectedCategory.slug}`"
                       @click="if(window.soundEngine) window.soundEngine.playClick()"
                       class="btn-3d btn-3d-sky px-4 py-2.5 rounded-2xl flex items-center gap-1.5 text-xs sm:text-sm font-extrabold text-white shadow-xs">
                        <span>📖</span>
                        <span>Mode Belajar Penuh</span>
                    </a>
                </div>

                <div class="absolute -right-8 -bottom-8 w-32 h-32 rounded-full opacity-10 pointer-events-none bg-gradient-to-br"
                     :class="selectedCategory.bg_gradient"></div>
            </div>

            <!-- 2 GRAND TOPIC TABS: FLASHCARD PENGENALAN & ARENA KUIS -->
            <div id="topic-tab-navigation" class="grid grid-cols-1 sm:grid-cols-2 gap-3 p-2 bg-white rounded-3xl border-3 border-sky-200 shadow-xs">
                <!-- Tab 1: Flashcards -->
                <button type="button" @click="switchToMaterials()"
                        class="p-4 rounded-2xl font-black text-sm sm:text-base flex items-center justify-center gap-3 transition-all cursor-pointer"
                        :class="categoryViewTab === 'materials' 
                            ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md scale-[1.01]' 
                            : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                    <span class="text-3xl">🃏</span>
                    <div class="text-left leading-tight">
                        <span>1. Kartu Pengenalan Belajar</span>
                        <span class="block text-xs font-bold opacity-90" 
                              x-text="`${selectedCategory.all_materials ? selectedCategory.all_materials.length : 0} Kartu Bergambar`"></span>
                    </div>
                </button>

                <!-- Tab 2: Kuis -->
                <button type="button" @click="switchToQuizzes()"
                        class="p-4 rounded-2xl font-black text-sm sm:text-base flex items-center justify-center gap-3 transition-all cursor-pointer"
                        :class="categoryViewTab === 'quizzes' 
                            ? 'bg-gradient-to-r from-amber-400 to-yellow-500 text-yellow-950 shadow-md scale-[1.01]' 
                            : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                    <span class="text-3xl">🎯</span>
                    <div class="text-left leading-tight">
                        <span>2. Arena Kuis & Tantangan</span>
                        <span class="block text-xs font-bold opacity-90" 
                              x-text="`${selectedCategory.quizzes_list ? selectedCategory.quizzes_list.length : selectedCategory.quizzes_count} Modul Kuis`"></span>
                    </div>
                </button>
            </div>

            <!-- ========================================================================= -->
            <!-- TAB 1 CONTENT: KARTU PENGENALAN BELAJAR (FLASHCARD FIRST + PAGINATION)    -->
            <!-- ========================================================================= -->
            <div x-show="categoryViewTab === 'materials'" class="flex flex-col gap-6">
                
                <!-- Filter Tingkatan Level Sub-Bar -->
                <div class="bg-white/95 border-2 border-slate-200 rounded-2xl p-3 sm:p-4 shadow-xs flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
                    <div class="flex items-center gap-1.5 overflow-x-auto max-w-full pb-1 sm:pb-0">
                        <span class="text-xs font-black text-slate-700 uppercase tracking-wide mr-1 shrink-0">Level:</span>
                        
                        <button type="button" @click="setCategoryLevelFilter(0)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap"
                                :class="categoryLevelFilter === 0 ? 'bg-sky-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            🌟 Semua Level
                        </button>
                        
                        <button type="button" @click="setCategoryLevelFilter(1)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap"
                                :class="categoryLevelFilter === 1 ? 'bg-emerald-600 text-white shadow-xs font-black' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            <span>🌱 Level 1 (0 ⭐ 🔓)</span>
                        </button>

                        <button type="button" @click="setCategoryLevelFilter(2)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap"
                                :class="categoryLevelFilter === 2 ? 'bg-amber-500 text-white shadow-xs font-black' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            <span>⭐ Level 2</span>
                            <span class="text-[10px] opacity-80">({{ $user['stars_count'] >= 10 ? '🔓' : '🔒 10⭐' }})</span>
                        </button>

                        <button type="button" @click="setCategoryLevelFilter(3)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap"
                                :class="categoryLevelFilter === 3 ? 'bg-purple-600 text-white shadow-xs font-black' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            <span>🚀 Level 3</span>
                            <span class="text-[10px] opacity-80">({{ $user['stars_count'] >= 25 ? '🔓' : '🔒 25⭐' }})</span>
                        </button>
                    </div>

                    <span class="text-xs font-bold text-slate-500 shrink-0 text-right"
                          x-text="`Menampilkan ${paginatedMaterials.length} dari ${currentTopicMaterials.length} Kartu`"></span>
                </div>

                <!-- Grid Kartu Flashcard (Maksimal 6 Kartu per Halaman) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="m in paginatedMaterials" :key="m.id">
                        <div class="card-bubbly p-5 sm:p-6 rounded-3xl flex flex-col justify-between border-4 bg-white shadow-xs relative group overflow-hidden transition-all hover:shadow-md"
                             :class="m.is_unlocked || userStars >= m.req_stars ? 'border-sky-300 hover:border-sky-400' : 'border-slate-300 bg-slate-50/80'">
                            
                            <div>
                                <!-- Level & Status Badge -->
                                <div class="flex items-center justify-between gap-2 mb-3">
                                    <span class="px-2.5 py-1 rounded-xl text-[10px] font-black uppercase tracking-wider shadow-2xs"
                                          :class="m.level === 1 ? 'bg-emerald-100 text-emerald-900 border border-emerald-300' : (m.level === 2 ? 'bg-amber-100 text-amber-950 border border-amber-300' : 'bg-purple-100 text-purple-950 border border-purple-300')"
                                          x-text="`Level ${m.level} • ${m.target_age}`"></span>

                                    <template x-if="m.is_unlocked || userStars >= m.req_stars">
                                        <span class="text-[11px] font-extrabold text-emerald-700 flex items-center gap-1">
                                            <span>🔓</span>
                                            <span>Terbuka</span>
                                        </span>
                                    </template>
                                    <template x-if="!(m.is_unlocked || userStars >= m.req_stars)">
                                        <span class="text-[11px] font-extrabold text-rose-700 flex items-center gap-1">
                                            <span>🔒</span>
                                            <span x-text="`Butuh ${m.req_stars} ⭐`"></span>
                                        </span>
                                    </template>
                                </div>

                                <!-- Big Emoji Icon with Twemoji Rendering (Side-by-side Horizontal Fit) -->
                                <div class="w-32 h-24 mx-auto bg-slate-50 rounded-2xl flex items-center justify-center mb-3 border-2 border-slate-100 group-hover:scale-105 transition-transform shadow-inner select-none px-2 overflow-hidden">
                                    <span class="inline-flex items-center justify-center gap-1.5 whitespace-nowrap max-w-full text-5xl [&>img.emoji]:h-14 [&>img.emoji]:w-auto [&>img.emoji]:max-h-14 [&>img.emoji]:max-w-14 [&>img.emoji]:m-0 [&>img.emoji]:shrink-0" 
                                          x-html="window.twemojiParse(m.icon_emoji)"></span>
                                </div>

                                <!-- Title & Subtitle -->
                                <div class="text-center mb-4">
                                    <h4 class="text-lg sm:text-xl font-black font-heading text-slate-800 leading-snug" x-text="m.title"></h4>
                                    <p class="text-xs font-bold text-slate-500 mt-1" x-text="m.subtitle"></p>
                                </div>
                            </div>

                            <!-- Action Buttons for Material -->
                            <div class="flex flex-col gap-2 pt-3 border-t border-slate-100">
                                <template x-if="m.is_unlocked || userStars >= m.req_stars">
                                    <div class="flex flex-col gap-2">
                                        <button type="button" 
                                                @click="speakMaterial(m)"
                                                class="btn-3d btn-3d-yellow py-2.5 px-3 rounded-2xl flex items-center justify-center gap-2 text-xs font-black cursor-pointer shadow-xs">
                                            <span class="text-base">🔊</span>
                                            <span>Dengarkan Suara</span>
                                        </button>

                                        <div class="grid grid-cols-2 gap-2">
                                            <button type="button" 
                                                    @click="playMaterialEffect(m.sound_effect)"
                                                    class="py-2 px-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold flex items-center justify-center gap-1 cursor-pointer transition-colors">
                                                <span>🗣️</span>
                                                <span>Tirukan</span>
                                            </button>

                                            <button type="button" 
                                                    @click="markMaterialDone(m)"
                                                    class="py-2 px-2 rounded-xl text-xs font-black flex items-center justify-center gap-1 cursor-pointer transition-colors shadow-2xs"
                                                    :class="completedMaterials[m.id] ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : 'bg-amber-100 hover:bg-amber-200 text-amber-900 border border-amber-300'">
                                                <span>⭐</span>
                                                <span x-text="completedMaterials[m.id] ? 'Sudah ⭐' : '+1 ⭐'"></span>
                                            </button>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="!(m.is_unlocked || userStars >= m.req_stars)">
                                    <button type="button" 
                                            @click="openSmartUnlock(selectedCategory)"
                                            class="btn-3d btn-3d-purple py-2.5 px-3 rounded-2xl flex items-center justify-center gap-1.5 text-xs font-black text-white cursor-pointer shadow-xs">
                                        <span>⚡</span>
                                        <span x-text="`Uji Cepat Buka L${m.level}`"></span>
                                    </button>
                                </template>
                            </div>

                        </div>
                    </template>
                </div>

                <!-- Pagination Ceria Khusus Anak PAUD (Kids-Friendly Pagination) -->
                <template x-if="totalMaterialPages > 1">
                    <div class="bg-white border-3 border-sky-200 rounded-3xl p-4 sm:p-5 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
                        <button type="button" 
                                @click="changePage(currentPage - 1)" 
                                :disabled="currentPage === 1"
                                class="btn-3d px-5 py-2.5 rounded-2xl text-xs sm:text-sm font-black flex items-center gap-2 transition-all w-full sm:w-auto justify-center"
                                :class="currentPage === 1 ? 'opacity-40 cursor-not-allowed bg-slate-100 text-slate-400' : 'btn-3d-yellow cursor-pointer shadow-xs'">
                            <span>⬅️</span>
                            <span>Halaman Sebelumnya</span>
                        </button>

                        <!-- Nomor Halaman Bulat Warna-Warni -->
                        <div class="flex items-center gap-2">
                            <template x-for="p in totalMaterialPages" :key="p">
                                <button type="button" 
                                        @click="changePage(p)"
                                        class="w-10 h-10 rounded-2xl font-black text-sm transition-all cursor-pointer flex items-center justify-center shadow-2xs"
                                        :class="currentPage === p 
                                            ? 'bg-sky-600 text-white scale-110 shadow-md ring-3 ring-sky-300 font-black' 
                                            : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                                    <span x-text="p"></span>
                                </button>
                            </template>
                        </div>

                        <button type="button" 
                                @click="changePage(currentPage + 1)" 
                                :disabled="currentPage === totalMaterialPages"
                                class="btn-3d px-5 py-2.5 rounded-2xl text-xs sm:text-sm font-black flex items-center gap-2 transition-all w-full sm:w-auto justify-center"
                                :class="currentPage === totalMaterialPages ? 'opacity-40 cursor-not-allowed bg-slate-100 text-slate-400' : 'btn-3d-yellow cursor-pointer shadow-xs'">
                            <span>Halaman Berikutnya</span>
                            <span>➡️</span>
                        </button>
                    </div>
                </template>

                <!-- Jembatan Ajakan Bermain Kuis (Call-to-Action Banner) -->
                <div class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-400 border-4 border-amber-500 rounded-3xl p-5 sm:p-7 shadow-md flex flex-col md:flex-row items-center justify-between gap-5 text-center md:text-left">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-white/90 rounded-2xl flex items-center justify-center text-4xl shadow-inner shrink-0 animate-bounce-slow">
                            🎯
                        </div>
                        <div>
                            <span class="inline-block bg-amber-900/30 text-amber-950 text-[10px] font-black uppercase px-2.5 py-0.5 rounded-full mb-1">
                                Siap Menguji Kemampuan?
                            </span>
                            <h4 class="text-lg sm:text-xl font-black text-amber-950 font-heading">Sudah Selesai Mempelajari Kartu di Atas?</h4>
                            <p class="text-xs sm:text-sm font-bold text-amber-900 mt-0.5">Ayo mainkan kuis bergambar dan kumpulkan bintang emas sebanyak-banyaknya!</p>
                        </div>
                    </div>

                    <button type="button" @click="switchToQuizzes()"
                            class="btn-3d btn-3d-purple px-6 py-3.5 rounded-2xl font-black text-sm text-white flex items-center justify-center gap-2 shadow-md cursor-pointer shrink-0 hover:scale-105 transition-transform w-full md:w-auto">
                        <span>🎯</span>
                        <span>Mainkan Kuis Sekarang ➔</span>
                    </button>
                </div>

            </div>

            <!-- ========================================================================= -->
            <!-- TAB 2 CONTENT: ARENA KUIS & TANTANGAN SOAL                                -->
            <!-- ========================================================================= -->
            <div x-show="categoryViewTab === 'quizzes'" class="flex flex-col gap-6">
                
                <!-- Sub-bar Header & Filter Level Kuis -->
                <div class="bg-white/95 border-2 border-slate-200 rounded-2xl p-3 sm:p-4 shadow-xs flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3">
                    <div class="flex items-center gap-1.5 overflow-x-auto max-w-full pb-1 sm:pb-0">
                        <span class="text-xs font-black text-slate-700 uppercase tracking-wide mr-1 shrink-0">Level Kuis:</span>
                        
                        <button type="button" @click="setQuizLevelFilter(0)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap"
                                :class="quizLevelFilter === 0 ? 'bg-amber-500 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            🌟 Semua Kuis
                        </button>
                        
                        <button type="button" @click="setQuizLevelFilter(1)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap flex items-center gap-1"
                                :class="quizLevelFilter === 1 ? 'bg-emerald-500 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            <span>🌱</span>
                            <span>Level 1 (3 Soal)</span>
                        </button>

                        <button type="button" @click="setQuizLevelFilter(2)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap flex items-center gap-1"
                                :class="quizLevelFilter === 2 ? 'bg-amber-500 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            <span>⭐</span>
                            <span>Level 2 (5 Soal)</span>
                        </button>

                        <button type="button" @click="setQuizLevelFilter(3)"
                                class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap flex items-center gap-1"
                                :class="quizLevelFilter === 3 ? 'bg-purple-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                            <span>🚀</span>
                            <span>Level 3 (10 Soal)</span>
                        </button>
                    </div>

                    <button type="button" @click="switchToMaterials()"
                            class="btn-3d btn-3d-sky px-4 py-2 rounded-xl text-xs font-black text-white flex items-center justify-center gap-1.5 cursor-pointer shadow-xs shrink-0">
                        <span>🃏</span>
                        <span>Lihat Flashcard</span>
                    </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="q in currentTopicQuizzes" :key="q.id">
                        <div class="card-bubbly p-6 rounded-3xl flex flex-col justify-between border-4 bg-gradient-to-b from-amber-50/40 to-white shadow-xs transition-all hover:shadow-md"
                             :class="q.level === 1 ? 'border-emerald-200 hover:border-emerald-400' : (q.level === 2 ? 'border-amber-300 hover:border-amber-400' : 'border-purple-300 hover:border-purple-400')">
                            
                            <div>
                                <div class="flex items-start justify-between gap-3 mb-3">
                                    <span class="inline-flex items-center gap-1 text-4xl sm:text-5xl group-hover:scale-110 transition-transform whitespace-nowrap [&>img.emoji]:h-11 sm:[&>img.emoji]:h-12 [&>img.emoji]:w-auto [&>img.emoji]:m-0 [&>img.emoji]:shrink-0" x-html="window.twemojiParse(q.icon_emoji)"></span>
                                    
                                    <div class="flex flex-col items-end gap-1.5">
                                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black uppercase shadow-2xs"
                                              :class="q.level === 1 ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : (q.level === 2 ? 'bg-amber-100 text-amber-900 border border-amber-300' : 'bg-purple-100 text-purple-900 border border-purple-300')"
                                              x-text="`Level ${q.level}`"></span>
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-black bg-slate-100 text-slate-600 border border-slate-200"
                                              x-text="`Usia ${q.target_age}`"></span>
                                    </div>
                                </div>

                                <h4 class="text-lg font-extrabold font-heading text-slate-800 mb-1" x-text="q.title"></h4>
                                
                                <div class="flex items-center gap-2 text-xs font-black text-amber-700 mb-2">
                                    <span class="px-2 py-0.5 rounded-md bg-amber-100 border border-amber-200" x-text="`🎯 ${q.total_questions} Soal`"></span>
                                    <span class="px-2 py-0.5 rounded-md bg-yellow-100 border border-yellow-200" x-text="`Hadiah ${q.stars_reward} ⭐`"></span>
                                </div>

                                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-3 my-2 flex items-center justify-between">
                                    <span class="text-xs font-bold text-amber-900">Rekor Bintangmu:</span>
                                    <span class="text-xs font-black text-amber-700 flex items-center gap-1">
                                        <span>⭐</span>
                                        <span x-text="q.best_stars > 0 ? `${q.best_stars} / ${q.stars_reward} ⭐` : 'Belum Dicoba'"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="pt-2">
                                <a :href="`{{ url('/kuis') }}/${q.slug}`"
                                   @click="if(window.soundEngine) window.soundEngine.playClick()"
                                   class="btn-3d btn-3d-yellow py-3 px-4 rounded-2xl flex items-center justify-center gap-2 text-sm font-extrabold shadow-sm w-full">
                                    <span>🎯</span>
                                    <span>Mainkan Kuis Ini ▶</span>
                                </a>
                            </div>

                        </div>
                    </template>
                </div>
            </div>

            <!-- Return to Pillars Button -->
            <div class="flex items-center justify-center pt-4">
                <button type="button" @click="backToCategories()"
                        class="btn-3d btn-3d-sky px-6 py-3.5 rounded-2xl font-extrabold text-base text-white flex items-center gap-2 shadow-sm cursor-pointer hover:scale-105 transition-transform">
                    <span>🏝️</span>
                    <span>Kembali ke Pilihan Topik Utama</span>
                </button>
            </div>

        </div>
    </template>

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

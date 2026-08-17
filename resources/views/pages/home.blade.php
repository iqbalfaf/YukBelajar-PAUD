@extends('layouts.app')

@section('title', 'Taman Petualangan YukBelajar PAUD - Belajar 3 Pilar Ceria')

@section('content')
<div class="flex flex-col gap-6 max-w-7xl mx-auto pb-16" 
     x-data="{
         activePillar: 'mengenal', // 'mengenal', 'membaca', 'menghitung'
         selectedCategory: null,
         categoryLevelFilter: 0, // 0: Semua Level, 1: Level 1, 2: Level 2, 3: Level 3
         categoryViewTab: 'all', // 'all', 'materials', 'quizzes'
         unlockedLevels: {{ Js::from($unlockedLevels ?? []) }},
         showSmartUnlockModal: false,
         unlockTarget: { slug: '', name: '', level: 3, reqStars: 25, question: '', options: [] },
         userStars: {{ (int) $user['stars_count'] }},
         completedMaterials: {},
         allCategories: {{ Js::from($categories) }},

         get filteredCategories() {
             return this.allCategories.filter(c => c.pillar === this.activePillar);
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
             this.categoryViewTab = 'all';
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 window.soundEngine.speak('Bagus sekali! Sekarang kamu membuka ' + cat.name + '. Yuk pilih kartu materi atau kuisnya!');
             }
             window.scrollTo({ top: 0, behavior: 'smooth' });
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
                    "Halo <span class="text-sky-700 underline decoration-wavy">{{ $user['name'] }}</span>! (Usia {{ $user['age'] }} Tahun)"
                </h2>
                <p class="text-xs sm:text-sm font-bold text-amber-900 mt-0.5">
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
                class="card-bubbly p-4 sm:p-5 rounded-3xl border-4 flex items-center gap-4 transition-all cursor-pointer text-left relative overflow-hidden"
                :class="activePillar === 'mengenal' ? 'border-emerald-400 bg-gradient-to-r from-emerald-500 to-teal-600 text-white shadow-md scale-[1.02]' : 'border-slate-200 bg-white hover:border-emerald-300 text-slate-800'">
            <span class="text-5xl shrink-0 animate-bounce-slow">🌟</span>
            <div>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wide"
                      :class="activePillar === 'mengenal' ? 'bg-white/20 text-white' : 'bg-emerald-100 text-emerald-800'">
                    10 Topik Eksplorasi
                </span>
                <h3 class="text-lg sm:text-xl font-black font-heading leading-tight mt-1">Zona Mengenal</h3>
                <p class="text-xs font-semibold opacity-90 line-clamp-1">Hewan, Buah, Bendera, Tubuh, dll.</p>
            </div>
            <div x-show="activePillar === 'mengenal'" class="absolute -right-4 -bottom-4 text-6xl opacity-15">⭐</div>
        </button>

        <!-- Pillar 2: Membaca -->
        <button type="button" 
                @click="switchPillar('membaca')"
                class="card-bubbly p-4 sm:p-5 rounded-3xl border-4 flex items-center gap-4 transition-all cursor-pointer text-left relative overflow-hidden"
                :class="activePillar === 'membaca' ? 'border-sky-400 bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md scale-[1.02]' : 'border-slate-200 bg-white hover:border-sky-300 text-slate-800'">
            <span class="text-5xl shrink-0 animate-bounce-slow">📖</span>
            <div>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wide"
                      :class="activePillar === 'membaca' ? 'bg-white/20 text-white' : 'bg-sky-100 text-sky-800'">
                    5 Topik Literasi
                </span>
                <h3 class="text-lg sm:text-xl font-black font-heading leading-tight mt-1">Zona Membaca</h3>
                <p class="text-xs font-semibold opacity-90 line-clamp-1">Vokal, 2 Suku Kata, Cerita Pendek</p>
            </div>
            <div x-show="activePillar === 'membaca'" class="absolute -right-4 -bottom-4 text-6xl opacity-15">📚</div>
        </button>

        <!-- Pillar 3: Menghitung -->
        <button type="button" 
                @click="switchPillar('menghitung')"
                class="card-bubbly p-4 sm:p-5 rounded-3xl border-4 flex items-center gap-4 transition-all cursor-pointer text-left relative overflow-hidden"
                :class="activePillar === 'menghitung' ? 'border-purple-400 bg-gradient-to-r from-purple-500 to-indigo-600 text-white shadow-md scale-[1.02]' : 'border-slate-200 bg-white hover:border-purple-300 text-slate-800'">
            <span class="text-5xl shrink-0 animate-bounce-slow">🧮</span>
            <div>
                <span class="px-2 py-0.5 rounded-full text-[10px] font-black uppercase tracking-wide"
                      :class="activePillar === 'menghitung' ? 'bg-white/20 text-white' : 'bg-purple-100 text-purple-800'">
                    5 Topik Numerasi
                </span>
                <h3 class="text-lg sm:text-xl font-black font-heading leading-tight mt-1">Zona Menghitung</h3>
                <p class="text-xs font-semibold opacity-90 line-clamp-1">Membilang, Tambah, Kurang & Pola</p>
            </div>
            <div x-show="activePillar === 'menghitung'" class="absolute -right-4 -bottom-4 text-6xl opacity-15">🎈</div>
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

            <!-- IN-TOPIC CONTROLS: Filter Tingkatan Level & Tab Konten -->
            <div class="bg-white/95 border-3 border-sky-200 rounded-3xl p-4 sm:p-5 shadow-xs flex flex-col md:flex-row items-center justify-between gap-4">
                
                <!-- Level Selector (L1, L2, L3) -->
                <div class="flex items-center gap-2 overflow-x-auto max-w-full pb-1 md:pb-0 w-full md:w-auto">
                    <span class="text-xs font-black text-slate-700 uppercase tracking-wide shrink-0">Level:</span>
                    
                    <button @click="categoryLevelFilter = 0; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer whitespace-nowrap"
                            :class="categoryLevelFilter === 0 ? 'bg-sky-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                        🌟 Semua Level
                    </button>
                    
                    <button @click="categoryLevelFilter = 1; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap"
                            :class="categoryLevelFilter === 1 ? 'bg-emerald-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                        <span>🌱 Level 1</span>
                        <span class="text-[10px] opacity-80">(0 ⭐ 🔓)</span>
                    </button>

                    <button @click="categoryLevelFilter = 2; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap"
                            :class="categoryLevelFilter === 2 ? 'bg-amber-500 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                        <span>⭐ Level 2</span>
                        <span class="text-[10px] opacity-80">({{ $user['stars_count'] >= 10 ? '🔓' : '🔒 10⭐' }})</span>
                    </button>

                    <button @click="categoryLevelFilter = 3; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer flex items-center gap-1 whitespace-nowrap"
                            :class="categoryLevelFilter === 3 ? 'bg-purple-600 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                        <span>🚀 Level 3</span>
                        <span class="text-[10px] opacity-80">({{ $user['stars_count'] >= 25 ? '🔓' : '🔒 25⭐' }})</span>
                    </button>
                </div>

                <!-- Tab Konten: Semua / Flashcard / Kuis -->
                <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl shrink-0 w-full sm:w-auto justify-center">
                    <button @click="categoryViewTab = 'all'; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1 rounded-xl text-xs font-bold transition-all cursor-pointer"
                            :class="categoryViewTab === 'all' ? 'bg-white text-sky-700 shadow-xs font-black' : 'text-slate-600 hover:text-slate-900'">
                        Semua Konten
                    </button>
                    <button @click="categoryViewTab = 'materials'; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1 rounded-xl text-xs font-bold transition-all cursor-pointer"
                            :class="categoryViewTab === 'materials' ? 'bg-white text-sky-700 shadow-xs font-black' : 'text-slate-600 hover:text-slate-900'">
                        🃏 Kartu Materi
                    </button>
                    <button @click="categoryViewTab = 'quizzes'; if(window.soundEngine) window.soundEngine.playClick()"
                            class="px-3 py-1 rounded-xl text-xs font-bold transition-all cursor-pointer"
                            :class="categoryViewTab === 'quizzes' ? 'bg-white text-sky-700 shadow-xs font-black' : 'text-slate-600 hover:text-slate-900'">
                        🎯 Kuis Soal
                    </button>
                </div>

            </div>

            <!-- BAGIAN 1: DAFTAR KARTU MATERI FLASHCARD -->
            <div x-show="categoryViewTab === 'all' || categoryViewTab === 'materials'" class="flex flex-col gap-4">
                <div class="flex items-center justify-between px-1">
                    <h3 class="text-xl sm:text-2xl font-black font-heading text-slate-800 flex items-center gap-2">
                        <span>📚</span>
                        <span>Daftar Kartu Flashcard Bergambar:</span>
                    </h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                    <template x-for="m in selectedCategory.all_materials" :key="m.id">
                        <div x-show="categoryLevelFilter === 0 || m.level === categoryLevelFilter"
                             class="card-bubbly p-5 rounded-3xl flex flex-col justify-between border-3 bg-white shadow-xs relative group overflow-hidden"
                             :class="m.is_unlocked || userStars >= m.req_stars ? 'border-sky-300 hover:border-sky-400' : 'border-slate-300 bg-slate-50/80'">
                            
                            <div>
                                <!-- Level & Status Badge -->
                                <div class="flex items-center justify-between gap-2 mb-3">
                                    <span class="px-2 py-0.5 rounded-lg text-[10px] font-black uppercase tracking-wider"
                                          :class="m.level === 1 ? 'bg-emerald-100 text-emerald-800' : (m.level === 2 ? 'bg-amber-100 text-amber-900' : 'bg-purple-100 text-purple-900')"
                                          x-text="`Level ${m.level} • ${m.target_age}`"></span>

                                    <template x-if="m.is_unlocked || userStars >= m.req_stars">
                                        <span class="text-[11px] font-extrabold text-emerald-600 flex items-center gap-1">
                                            <span>🔓</span>
                                            <span>Terbuka</span>
                                        </span>
                                    </template>
                                    <template x-if="!(m.is_unlocked || userStars >= m.req_stars)">
                                        <span class="text-[11px] font-extrabold text-rose-600 flex items-center gap-1">
                                            <span>🔒</span>
                                            <span x-text="`Butuh ${m.req_stars} ⭐`"></span>
                                        </span>
                                    </template>
                                </div>

                                <!-- Big Emoji Icon -->
                                <div class="w-20 h-20 mx-auto bg-slate-50 rounded-2xl flex items-center justify-center text-5xl mb-3 border-2 border-slate-100 group-hover:scale-110 transition-transform">
                                    <span x-text="m.icon_emoji"></span>
                                </div>

                                <!-- Title & Subtitle -->
                                <div class="text-center mb-4">
                                    <h4 class="text-lg font-extrabold font-heading text-slate-800" x-text="m.title"></h4>
                                    <p class="text-xs font-bold text-slate-500 mt-0.5" x-text="m.subtitle"></p>
                                </div>
                            </div>

                            <!-- Action Buttons for Material -->
                            <div class="flex flex-col gap-2 pt-3 border-t border-slate-100">
                                <template x-if="m.is_unlocked || userStars >= m.req_stars">
                                    <div class="flex flex-col gap-2">
                                        <button type="button" 
                                                @click="speakMaterial(m)"
                                                class="btn-3d btn-3d-yellow py-2 px-3 rounded-xl flex items-center justify-center gap-1.5 text-xs font-extrabold cursor-pointer shadow-xs">
                                            <span class="text-base">🔊</span>
                                            <span>Dengarkan Suara</span>
                                        </button>

                                        <div class="grid grid-cols-2 gap-1.5">
                                            <button type="button" 
                                                    @click="playMaterialEffect(m.sound_effect)"
                                                    class="py-1.5 px-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-[11px] font-bold flex items-center justify-center gap-1 cursor-pointer transition-colors">
                                                <span>🗣️</span>
                                                <span>Tirukan</span>
                                            </button>

                                            <button type="button" 
                                                    @click="markMaterialDone(m)"
                                                    class="py-1.5 px-2 rounded-xl text-[11px] font-black flex items-center justify-center gap-1 cursor-pointer transition-colors"
                                                    :class="completedMaterials[m.id] ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 hover:bg-amber-200 text-amber-900'">
                                                <span>⭐</span>
                                                <span x-text="completedMaterials[m.id] ? 'Sudah ⭐' : '+1 ⭐'"></span>
                                            </button>
                                        </div>
                                    </div>
                                </template>

                                <template x-if="!(m.is_unlocked || userStars >= m.req_stars)">
                                    <button type="button" 
                                            @click="openSmartUnlock(selectedCategory)"
                                            class="btn-3d btn-3d-purple py-2 px-3 rounded-xl flex items-center justify-center gap-1 text-xs font-extrabold text-white cursor-pointer shadow-xs">
                                        <span>⚡</span>
                                        <span x-text="`Uji Cepat Buka L${m.level}`"></span>
                                    </button>
                                </template>
                            </div>

                        </div>
                    </template>
                </div>
            </div>

            <!-- BAGIAN 2: DAFTAR KUIS & TANTANGAN -->
            <div x-show="categoryViewTab === 'all' || categoryViewTab === 'quizzes'" class="flex flex-col gap-4 pt-4">
                <div class="flex items-center justify-between px-1">
                    <h3 class="text-xl sm:text-2xl font-black font-heading text-slate-800 flex items-center gap-2">
                        <span>🎯</span>
                        <span>Daftar Kuis & Tantangan Soal:</span>
                    </h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <template x-for="q in selectedCategory.quizzes_list" :key="q.id">
                        <div class="card-bubbly p-5 sm:p-6 rounded-3xl flex flex-col justify-between border-4 border-amber-300 bg-gradient-to-b from-amber-50/50 to-white shadow-xs hover:border-amber-400 transition-all">
                            
                            <div>
                                <div class="flex items-start justify-between gap-3 mb-3">
                                    <span class="text-5xl group-hover:scale-110 transition-transform" x-text="q.icon_emoji"></span>
                                    
                                    <div class="flex flex-col items-end gap-1">
                                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-black bg-amber-200 text-amber-950 border border-amber-300 shadow-2xs"
                                              x-text="`Usia ${q.target_age}`"></span>
                                        <span class="text-[11px] font-bold text-slate-500"
                                              x-text="`${q.total_questions} Butir Soal`"></span>
                                    </div>
                                </div>

                                <h4 class="text-lg font-extrabold font-heading text-slate-800 mb-1" x-text="q.title"></h4>
                                
                                <div class="bg-amber-100/60 border border-amber-200 rounded-2xl p-2.5 my-3 flex items-center justify-between">
                                    <span class="text-xs font-bold text-amber-900">Rekor Bintangmu:</span>
                                    <span class="text-xs font-black text-amber-700 flex items-center gap-1">
                                        <span>⭐</span>
                                        <span x-text="q.best_stars > 0 ? `${q.best_stars} / ${q.total_questions} ⭐` : 'Belum Dicoba'"></span>
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
            <div class="flex items-center justify-center pt-6">
                <button type="button" @click="backToCategories()"
                        class="btn-3d btn-3d-sky px-6 py-3.5 rounded-2xl font-extrabold text-base text-white flex items-center gap-2 shadow-sm cursor-pointer">
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

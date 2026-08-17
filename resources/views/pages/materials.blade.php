@extends('layouts.app')

@section('title', 'Belajar ' . $materialData['category_name'] . ' - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-5xl mx-auto pb-16"
     x-data="{
         viewMode: 'catalog', // 'carousel' (mode belajar), 'catalog' (katalog materi), 'quiz_bank' (bank soal & kuis)
         currentLevelFilter: 1, // 1, 2, 3
         userStars: {{ (int) $user['stars_count'] }},
         unlockedLevels: { '3': {{ (int) $user['stars_count'] >= 25 ? 'true' : 'false' }} },
         allCards: {{ Js::from($materialData['cards']) }},
         categoryQuizzes: {{ Js::from($materialData['category_quizzes'] ?? []) }},
         currentIndex: 0,
         isCompletedList: {},
         showQuizPreviewModal: false,
         selectedQuizPreview: null,

         get filteredCards() {
             return this.allCards.filter(c => c.level === this.currentLevelFilter);
         },

         get isLevelLocked() {
             if (this.currentLevelFilter === 2 && this.userStars < 10) return true;
             if (this.currentLevelFilter === 3 && this.userStars < 25 && !this.unlockedLevels['3']) return true;
             return false;
         },

         init() {
             this.allCards.forEach((c) => {
                 if (c.is_completed) this.isCompletedList[c.id] = true;
             });
             this.speakCurrent();
         },

         currentCard() {
             return this.filteredCards[this.currentIndex] || this.filteredCards[0];
         },

         selectLevel(lvl) {
             this.currentLevelFilter = lvl;
             this.currentIndex = 0;
             if (window.soundEngine) window.soundEngine.playClick();
             if (!this.isLevelLocked && this.viewMode === 'carousel') {
                 this.speakCurrent();
             }
         },

         unlockLevel3() {
             this.unlockedLevels['3'] = true;
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 window.soundEngine.speak('Hebat! Level 3 berhasil dibuka! Selamat belajar!');
             }
             window.triggerConfetti(0.8);
             if (this.viewMode === 'carousel') {
                 this.speakCurrent();
             }
         },

         jumpToCardInCarousel(cardId) {
             const card = this.allCards.find(c => c.id === cardId);
             if (card) {
                 this.currentLevelFilter = card.level;
                 const idxInLevel = this.filteredCards.findIndex(c => c.id === cardId);
                 this.currentIndex = idxInLevel >= 0 ? idxInLevel : 0;
                 this.viewMode = 'carousel';
                 if (window.soundEngine) window.soundEngine.playClick();
                 setTimeout(() => this.speakCurrent(), 200);
             }
         },

         nextCard() {
             if (this.currentIndex < this.filteredCards.length - 1) {
                 this.currentIndex++;
                 if (window.soundEngine) window.soundEngine.playClick();
                 this.speakCurrent();
             }
         },

         prevCard() {
             if (this.currentIndex > 0) {
                 this.currentIndex--;
                 if (window.soundEngine) window.soundEngine.playClick();
                 this.speakCurrent();
             }
         },

         speakCurrent() {
             if (window.soundEngine && this.currentCard() && !this.isLevelLocked) {
                 window.soundEngine.speak(this.currentCard().voice_text);
             }
         },

         speakText(text) {
             if (window.soundEngine) {
                 window.soundEngine.speak(text);
                 window.soundEngine.playClick();
             }
         },

         playSoundEffect() {
             if (window.soundEngine && this.currentCard() && !this.isLevelLocked) {
                 window.soundEngine.speak(this.currentCard().sound_mimic, 1.0, 1.4);
                 window.soundEngine.playVictory();
             }
         },

         async markCompleted(cardId) {
             const id = cardId || (this.currentCard() ? this.currentCard().id : null);
             if (id) {
                 this.isCompletedList[id] = true;
                 try {
                     const response = await fetch('{{ route('materials.complete-card') }}', {
                         method: 'POST',
                         headers: {
                             'Content-Type': 'application/json',
                             'X-CSRF-TOKEN': '{{ csrf_token() }}',
                             'Accept': 'application/json'
                         },
                         body: JSON.stringify({ material_id: id })
                     });
                     const res = await response.json();
                     if (res.success) {
                         this.userStars = res.total_stars;
                     }
                 } catch (e) {
                     console.error(e);
                 }

                 if (window.soundEngine) {
                     window.soundEngine.playCorrect();
                     window.soundEngine.playStar();
                     window.triggerConfetti(0.7);
                 }
             }
         }
     }">

    <!-- Category Header & Navigation Bar -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 bg-white/90 backdrop-blur-md p-4 rounded-3xl border-3 border-sky-300 shadow-xs">
        <a href="{{ route('home') }}" 
           class="flex items-center gap-2 text-slate-700 hover:text-sky-700 font-bold text-sm bg-slate-100 hover:bg-slate-200 px-4 py-2 rounded-2xl transition-all shrink-0">
            <span>🏠</span>
            <span>Kembali ke Peta Pulau</span>
        </a>

        <!-- Category Horizontal Pills -->
        <div class="flex items-center gap-2 overflow-x-auto max-w-full pb-1">
            @foreach($allCategories as $cat)
            <a href="{{ route('materials', $cat['slug']) }}" 
               class="px-3.5 py-1.5 rounded-full text-xs font-bold whitespace-nowrap transition-all border-2 {{ $cat['slug'] === $materialData['category_slug'] ? 'bg-sky-500 text-white border-sky-600 shadow-xs scale-105' : 'bg-white text-slate-600 border-slate-200 hover:bg-slate-50' }}">
                <span>{{ $cat['icon_emoji'] }}</span>
                <span>{{ $cat['name'] }}</span>
            </a>
            @endforeach
        </div>
    </div>

    <!-- MAIN VIEW MODE TOGGLE (KATALOG MATERI vs MODE BELAJAR vs BANK SOAL KUIS) -->
    <div class="bg-white border-3 border-amber-300 rounded-3xl p-3 sm:p-4 shadow-sm flex flex-col md:flex-row items-center justify-between gap-3">
        <div class="flex items-center gap-2.5 w-full md:w-auto">
            <span class="text-2xl sm:text-3xl">🏝️</span>
            <div>
                <h2 class="text-base sm:text-xl font-black font-heading text-slate-800 leading-tight">
                    {{ $materialData['category_name'] }}
                </h2>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Jelajahi materi flashcard, uji suara, dan tantangan kuis.</p>
            </div>
        </div>

        <!-- 3-Mode View Switcher Buttons (Responsive Grid on Mobile) -->
        <div class="grid grid-cols-3 sm:flex items-center gap-1 bg-slate-100 p-1.5 rounded-2xl w-full md:w-auto">
            <button @click="viewMode = 'catalog'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-2.5 sm:px-3.5 py-2 rounded-xl font-extrabold text-[11px] sm:text-xs transition-all flex flex-col sm:flex-row items-center justify-center gap-1 cursor-pointer"
                    :class="viewMode === 'catalog' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-200'">
                <span>📚</span>
                <span>Katalog Materi</span>
                <span class="px-1.5 py-0.2 bg-white/20 rounded-full text-[9px] sm:text-[10px]" x-text="allCards.length"></span>
            </button>

            <button @click="viewMode = 'quiz_bank'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-2.5 sm:px-3.5 py-2 rounded-xl font-extrabold text-[11px] sm:text-xs transition-all flex flex-col sm:flex-row items-center justify-center gap-1 cursor-pointer"
                    :class="viewMode === 'quiz_bank' ? 'bg-amber-500 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-200'">
                <span>🎯</span>
                <span>Bank Kuis & Soal</span>
                <span class="px-1.5 py-0.2 bg-white/20 rounded-full text-[9px] sm:text-[10px]" x-text="categoryQuizzes.length"></span>
            </button>

            <button @click="viewMode = 'carousel'; if(window.soundEngine) window.soundEngine.playClick()"
                    class="px-2.5 sm:px-3.5 py-2 rounded-xl font-extrabold text-[11px] sm:text-xs transition-all flex flex-col sm:flex-row items-center justify-center gap-1 cursor-pointer"
                    :class="viewMode === 'carousel' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-200'">
                <span>▶️</span>
                <span>Mode Belajar</span>
            </button>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- VIEW 1: KATALOG SELURUH MATERI FLASHCARD (GRID BROWSER SEMUA SOAL & KARTU) -->
    <!-- ========================================================================= -->
    <div x-show="viewMode === 'catalog'" class="flex flex-col gap-6">
        
        <!-- Filter Level Strip -->
        <div class="flex items-center justify-between flex-wrap gap-3 bg-white/80 p-3.5 rounded-2xl border-2 border-slate-200">
            <span class="text-xs font-black uppercase tracking-wider text-slate-600 flex items-center gap-1.5">
                <span>🪜</span> Tingkatan Level Belajar:
            </span>

            <div class="flex items-center gap-2 flex-wrap">
                <button @click="selectLevel(1)"
                        class="px-3.5 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer"
                        :class="currentLevelFilter === 1 ? 'bg-sky-600 text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                    🌱 Level 1: Dasar (3-4 Thn)
                </button>
                <button @click="selectLevel(2)"
                        class="px-3.5 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer"
                        :class="currentLevelFilter === 2 ? 'bg-amber-500 text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                    ⭐ Level 2: Menengah (4-5 Thn)
                </button>
                <button @click="selectLevel(3)"
                        class="px-3.5 py-1.5 rounded-xl font-extrabold text-xs transition-all cursor-pointer"
                        :class="currentLevelFilter === 3 ? 'bg-purple-600 text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'">
                    <span x-text="unlockedLevels['3'] ? '🚀 Level 3: Pra-SD (5-6 Thn)' : '🔒 Level 3: Pra-SD (Terkunci)'"></span>
                </button>
            </div>
        </div>

        <!-- Locked Level Alert in Catalog -->
        <template x-if="isLevelLocked">
            <div class="bg-gradient-to-r from-purple-100 to-indigo-100 border-3 border-purple-300 rounded-3xl p-6 sm:p-8 text-center flex flex-col items-center gap-4">
                <span class="text-5xl animate-bounce-slow">🔒</span>
                <div>
                    <h3 class="text-xl sm:text-2xl font-black font-heading text-purple-950">
                        Materi Level 3 Masih Terkunci
                    </h3>
                    <p class="text-xs sm:text-sm font-bold text-purple-800 mt-1 max-w-md">
                        Selesaikan materi Level 1 & 2 atau gunakan tombol akselerasi cerdas untuk membuka kunci secara instan!
                    </p>
                </div>
                <button type="button" @click="unlockLevel3()"
                        class="btn-3d btn-3d-purple px-6 py-3.5 rounded-2xl text-sm font-black text-white flex items-center gap-2">
                    <span>⚡</span>
                    <span>Buka Kunci Level 3 Sekarang (Akselerasi)</span>
                </button>
            </div>
        </template>

        <!-- Unlocked Cards Grid for Chosen Level -->
        <template x-if="!isLevelLocked">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                <template x-for="(card, idx) in filteredCards" :key="card.id">
                    <div class="card-bubbly p-5 sm:p-6 bg-white border-3 border-amber-200 rounded-3xl flex flex-col justify-between gap-4 hover:border-sky-400 hover:scale-102 transition-all relative group">
                        
                        <!-- Top Header Status -->
                        <div>
                            <div class="flex items-start justify-between gap-2 mb-3">
                                <span class="px-2.5 py-0.5 bg-amber-100 text-amber-900 rounded-full font-black text-[10px] uppercase"
                                      x-text="card.badge">
                                </span>

                                <button @click="markCompleted(card.id)"
                                        class="px-2.5 py-0.5 rounded-full font-extrabold text-[10px] cursor-pointer"
                                        :class="isCompletedList[card.id] ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-500 hover:bg-emerald-50'">
                                    <span x-text="isCompletedList[card.id] ? '✅ Selesai' : '⭕ Belum'"></span>
                                </button>
                            </div>

                            <!-- Big Emoji Artwork -->
                            <div class="w-full bg-gradient-to-b from-amber-50 to-orange-50 rounded-2xl p-6 flex items-center justify-center text-7xl select-none mb-3 group-hover:scale-110 transition-transform cursor-pointer"
                                 @click="speakText(card.voice_text)"
                                 x-text="card.emoji">
                            </div>

                            <h4 class="text-xl font-extrabold font-heading text-slate-800 mb-1" x-text="card.title"></h4>
                            <p class="text-xs font-semibold text-slate-500 line-clamp-2 leading-relaxed" x-text="card.subtitle"></p>
                        </div>

                        <!-- Card Quick Action Buttons -->
                        <div class="flex flex-col gap-2 pt-2 border-t border-slate-100">
                            <button @click="speakText(card.voice_text)"
                                    class="w-full py-2.5 px-3 bg-sky-100 hover:bg-sky-200 text-sky-900 rounded-xl font-extrabold text-xs flex items-center justify-center gap-1.5 transition-colors cursor-pointer">
                                <span class="text-base">🔊</span>
                                <span>Dengar Suara Ceria</span>
                            </button>

                            <button @click="jumpToCardInCarousel(card.id)"
                                    class="w-full py-2.5 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 rounded-xl font-extrabold text-xs flex items-center justify-center gap-1.5 shadow-xs transition-transform cursor-pointer">
                                <span>▶️</span>
                                <span>Buka Layar Penuh</span>
                            </button>
                        </div>

                    </div>
                </template>
            </div>
        </template>

    </div>

    <!-- ========================================================================= -->
    <!-- VIEW 2: ARENA KUIS & DAFTAR BANK SOAL KATEGORI (QUIZ LIST & QUESTION BANK) -->
    <!-- ========================================================================= -->
    <div x-show="viewMode === 'quiz_bank'" class="flex flex-col gap-6">
        
        <div class="bg-amber-50 border-3 border-amber-300 rounded-3xl p-5 shadow-xs flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-3">
                <span class="text-4xl">🎯</span>
                <div>
                    <h3 class="text-lg font-black font-heading text-amber-950">
                        Daftar Kuis & Bank Soal: {{ $materialData['category_name'] }}
                    </h3>
                    <p class="text-xs font-bold text-amber-900">
                        Mainkan kuis untuk menguji ingatan gambar, mengumpulkan bintang emas ⭐, dan meraih stiker hadiah!
                    </p>
                </div>
            </div>

            <a href="{{ route('stickers') }}" class="btn-3d btn-3d-yellow px-4 py-2.5 rounded-xl text-xs font-black text-amber-950">
                Lihat Koleksi Stiker 🏆
            </a>
        </div>

        <!-- Quizzes Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <template x-for="qz in categoryQuizzes" :key="qz.id">
                <div class="bg-white rounded-3xl p-6 border-3 shadow-sm flex flex-col justify-between gap-5 relative overflow-hidden"
                     :class="qz.is_unlocked || unlockedLevels['3'] ? 'border-amber-300' : 'border-slate-300 opacity-90'">
                    
                    <div>
                        <!-- Badge & Level Tag -->
                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="px-2.5 py-0.5 rounded-full font-black text-[10px] uppercase"
                                  :class="qz.level_num === 1 ? 'bg-emerald-100 text-emerald-800' : (qz.level_num === 2 ? 'bg-amber-100 text-amber-900' : 'bg-purple-100 text-purple-900')"
                                  x-text="qz.level_badge">
                            </span>

                            <span class="text-xs font-extrabold"
                                  :class="qz.stars_earned > 0 ? 'text-amber-500' : 'text-slate-400'"
                                  x-text="qz.stars_earned > 0 ? '⭐⭐⭐' : '☆☆☆'">
                            </span>
                        </div>

                        <!-- Quiz Title -->
                        <h4 class="text-xl font-extrabold font-heading text-slate-800 mb-2 leading-snug" x-text="qz.title"></h4>
                        
                        <!-- Quiz Meta Info -->
                        <div class="flex items-center gap-3 text-xs font-bold text-slate-500 mb-4">
                            <span>📝 <span x-text="qz.total_questions"></span> Soal Bergambar</span>
                            <span>•</span>
                            <span>🏆 <span x-text="qz.reward_sticker"></span></span>
                        </div>

                        <!-- Question Bank Preview Accordion -->
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-3.5">
                            <span class="text-[11px] font-black uppercase text-slate-600 block mb-2">
                                📋 Bocoran Soal Latihan:
                            </span>
                            <ul class="flex flex-col gap-1.5 text-xs text-slate-700 font-semibold">
                                <template x-for="(qItem, qIdx) in qz.questions_preview" :key="qIdx">
                                    <li class="flex items-start gap-1.5">
                                        <span class="text-amber-500 font-black">•</span>
                                        <span x-text="qItem"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="pt-2">
                        <template x-if="qz.is_unlocked || unlockedLevels['3']">
                            <a :href="'{{ route('quiz') }}/' + qz.id" 
                               class="btn-3d btn-3d-yellow w-full py-3.5 rounded-2xl text-sm font-black text-amber-950 flex items-center justify-center gap-2 shadow-sm">
                                <span>🎯</span>
                                <span>Mulai Kuis Tantangan</span>
                            </a>
                        </template>

                        <template x-if="!qz.is_unlocked && !unlockedLevels['3']">
                            <button type="button" @click="unlockLevel3()"
                                    class="btn-3d btn-3d-purple w-full py-3.5 rounded-2xl text-xs font-black text-white flex items-center justify-center gap-1.5">
                                <span>⚡</span>
                                <span>Buka Kunci Kuis Level 3</span>
                            </button>
                        </template>
                    </div>

                </div>
            </template>
        </div>

    </div>

    <!-- ========================================================================= -->
    <!-- VIEW 3: MODE BELAJAR LAYAR PENUH (CAROUSEL FLASHCARD BERSUARA)            -->
    <!-- ========================================================================= -->
    <div x-show="viewMode === 'carousel'" class="flex flex-col gap-6">
        
        <!-- MAIN FLASHCARD STAGE -->
        <div class="card-bubbly p-6 sm:p-10 border-4 border-amber-300 shadow-lg flex flex-col items-center text-center relative overflow-hidden bg-white min-h-[460px] justify-between">
            
            <!-- LOCKED LEVEL OVERLAY -->
            <template x-if="isLevelLocked">
                <div class="w-full flex flex-col items-center justify-center p-8 text-center my-auto">
                    <div class="w-24 h-24 bg-purple-100 border-4 border-purple-400 rounded-full flex items-center justify-center text-6xl mb-4 animate-bounce-slow">
                        🔒
                    </div>

                    <span class="px-3.5 py-1 bg-purple-100 text-purple-900 rounded-full font-black text-xs uppercase tracking-wider mb-2">
                        Level 3: Pra-SD (Usia 5-6 Thn)
                    </span>

                    <h3 class="text-2xl sm:text-3xl font-black font-heading text-slate-800 mb-2">
                        Level Ini Masih Terkunci
                    </h3>

                    <p class="text-sm font-bold text-slate-600 max-w-md mb-6 leading-relaxed">
                        Selesaikan semua materi Level 1 & 2 atau gunakan fitur akselerasi anak cerdas di bawah untuk membuka kunci instan! ⭐
                    </p>

                    <button type="button" @click="unlockLevel3()"
                            class="btn-3d btn-3d-purple py-4 px-8 rounded-3xl text-base font-black text-white flex items-center gap-3 shadow-lg hover:scale-105 cursor-pointer">
                        <span class="text-2xl animate-wiggle">⚡</span>
                        <span>BUKA KUNCI LEVEL SEKARANG (AKSELERASI ANAK CERDAS)</span>
                    </button>
                </div>
            </template>

            <!-- UNLOCKED CARD DISPLAY -->
            <template x-if="!isLevelLocked && currentCard()">
                <div class="w-full flex flex-col items-center">
                    
                    <!-- Top Status & Progress Bar -->
                    <div class="w-full flex items-center justify-between gap-2 mb-6">
                        <span class="px-3.5 py-1.5 bg-amber-100 text-amber-900 border-2 border-amber-300 rounded-full font-extrabold text-xs">
                            Kartu <span x-text="currentIndex + 1"></span> dari <span x-text="filteredCards.length"></span> (Level <span x-text="currentLevelFilter"></span>)
                        </span>

                        <!-- Read Status Badge -->
                        <button @click="markCompleted()" 
                                class="flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-extrabold text-xs transition-all cursor-pointer"
                                :class="isCompletedList[currentCard().id] ? 'bg-emerald-100 text-emerald-800 border-2 border-emerald-400' : 'bg-slate-100 text-slate-600 border-2 border-slate-300 hover:bg-emerald-50'">
                            <span x-text="isCompletedList[currentCard().id] ? '✅ Sudah Dipelajari' : '⭕ Tandai Selesai'"></span>
                        </button>
                    </div>

                    <!-- Big Card Illustration Box -->
                    <div class="w-full max-w-md bg-gradient-to-b from-amber-50 to-orange-50 border-4 border-amber-200 rounded-3xl p-8 sm:p-12 mb-6 flex flex-col items-center justify-center shadow-inner relative group">
                        
                        <div class="text-8xl sm:text-9xl mb-4 group-hover:scale-110 transition-transform duration-300 drop-shadow-md select-none cursor-pointer"
                             @click="speakCurrent()"
                             x-text="currentCard().emoji">
                        </div>

                        <span class="px-3 py-1 bg-amber-400/30 text-amber-900 font-black rounded-full text-xs uppercase tracking-wider mb-2"
                              x-text="cardBadgeText = currentCard().badge">
                        </span>

                        <h2 class="text-4xl sm:text-5xl font-extrabold font-heading text-amber-950 mb-2"
                            x-text="currentCard().title">
                        </h2>

                        <p class="text-base sm:text-lg font-bold text-slate-600 max-w-xs leading-snug"
                           x-text="currentCard().subtitle">
                        </p>

                        <!-- Decorative Stars -->
                        <span class="absolute top-4 left-4 text-2xl text-amber-400 opacity-60">✨</span>
                        <span class="absolute bottom-4 right-4 text-2xl text-amber-400 opacity-60">⭐</span>
                    </div>

                    <!-- Interactive Voice & Sound Buttons for Kids (Responsive) -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mb-6 w-full">
                        
                        <!-- Voice Pronunciation Button -->
                        <button @click="speakCurrent()"
                                class="btn-3d btn-3d-sky w-full sm:w-auto px-5 py-3.5 sm:px-6 sm:py-4 rounded-2xl flex items-center justify-center gap-2 text-sm sm:text-base font-extrabold text-white">
                            <span class="text-xl sm:text-2xl animate-wiggle">🔊</span>
                            <span>Dengar Pelafalan Suara</span>
                        </button>

                        <!-- Fun Mimic Sound Effect Button -->
                        <button @click="playSoundEffect()"
                                class="btn-3d btn-3d-yellow w-full sm:w-auto px-5 py-3.5 sm:px-6 sm:py-4 rounded-2xl flex items-center justify-center gap-2 text-sm sm:text-base font-extrabold text-amber-950">
                            <span class="text-xl sm:text-2xl animate-bounce-slow">🎵</span>
                            <span>Tirukan Suara Objek</span>
                        </button>
                    </div>

                    <!-- Jumbo Navigation Touch Controls (No Overlap on 360px phones) -->
                    <div class="w-full flex items-center justify-between gap-2.5 sm:gap-4 pt-4 border-t-2 border-slate-100">
                        <button @click="prevCard()"
                                :disabled="currentIndex === 0"
                                :class="currentIndex === 0 ? 'opacity-40 cursor-not-allowed bg-slate-200 text-slate-400' : 'btn-3d btn-3d-white text-slate-700'"
                                class="flex-1 py-3 sm:py-4 px-2.5 sm:px-4 rounded-2xl font-extrabold text-xs sm:text-base flex items-center justify-center gap-1.5 border-2">
                            <span>⬅️</span>
                            <span>Kartu Mundur</span>
                        </button>

                        <!-- Dots Indicator -->
                        <div class="hidden sm:flex items-center gap-1.5">
                            <template x-for="(card, idx) in filteredCards" :key="idx">
                                <button @click="currentIndex = idx; speakCurrent()"
                                        class="w-3.5 h-3.5 rounded-full transition-all"
                                        :class="currentIndex === idx ? 'bg-sky-500 scale-125' : (isCompletedList[card.id] ? 'bg-emerald-400' : 'bg-slate-300')">
                                </button>
                            </template>
                        </div>

                        <button @click="nextCard()"
                                :disabled="currentIndex === filteredCards.length - 1"
                                :class="currentIndex === filteredCards.length - 1 ? 'opacity-40 cursor-not-allowed bg-slate-200 text-slate-400' : 'btn-3d btn-3d-white text-slate-700'"
                                class="flex-1 py-3 sm:py-4 px-2.5 sm:px-4 rounded-2xl font-extrabold text-xs sm:text-base flex items-center justify-center gap-1.5 border-2">
                            <span>Kartu Maju</span>
                            <span>➡️</span>
                        </button>
                    </div>

                </div>
            </template>

        </div>

        <!-- Parent Guide Note Strip -->
        <template x-if="!isLevelLocked && currentCard()">
            <div class="bg-amber-50 border-3 border-amber-300 rounded-3xl p-5 shadow-xs flex items-start gap-4">
                <span class="text-3xl shrink-0">👨‍👩‍👧</span>
                <div>
                    <h4 class="font-extrabold text-sm text-amber-950 uppercase tracking-wide mb-1">
                        Tips Interaksi Orang Tua / Guru:
                    </h4>
                    <p class="text-xs sm:text-sm font-semibold text-amber-900 leading-relaxed"
                       x-text="currentCard().parent_note">
                    </p>
                </div>
            </div>
        </template>

    </div>

</div>
@endsection

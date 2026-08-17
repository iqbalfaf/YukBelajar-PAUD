@extends('layouts.app')

@section('title', 'Arena Kuis ' . $quizData['title'] . ' - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-4xl mx-auto pb-16"
     x-data="{
         questions: {{ Js::from($quizData['questions']) }},
         rewardSticker: {{ Js::from($quizData['reward_sticker']) }},
         currentIndex: 0,
         selectedOption: null,
         isAnswered: false,
         isCorrect: false,
         scoreCorrect: 0,
         isFinished: false,
         starsEarned: 0,
         feedbackMessage: '',
         init() {
             this.playCurrentQuestionVoice();
         },
         currentQuestion() {
             return this.questions[this.currentIndex] || this.questions[0];
         },
         playCurrentQuestionVoice() {
             if (window.soundEngine && this.currentQuestion()) {
                 window.soundEngine.speak(this.currentQuestion().voice_prompt);
             }
         },
         selectAnswer(opt) {
             if (this.isAnswered) return;

             this.selectedOption = opt;
             this.isAnswered = true;

             if (opt.is_correct) {
                 this.isCorrect = true;
                 this.scoreCorrect++;
                 this.feedbackMessage = 'YAY! Benar Sekali! Pintar! 🎉 ⭐';
                 if (window.soundEngine) {
                     window.soundEngine.playCorrect();
                     window.soundEngine.playStar();
                 }
                 window.triggerConfetti(0.5);
             } else {
                 this.isCorrect = false;
                 this.feedbackMessage = 'Hampir benar! Yuk coba sekali lagi! 😊';
                 if (window.soundEngine) {
                     window.soundEngine.playWrong();
                 }
             }
         },
         nextQuestion() {
             if (this.currentIndex < this.questions.length - 1) {
                 this.currentIndex++;
                 this.selectedOption = null;
                 this.isAnswered = false;
                 this.isCorrect = false;
                 this.feedbackMessage = '';
                 if (window.soundEngine) window.soundEngine.playClick();
                 this.playCurrentQuestionVoice();
             } else {
                 this.finishQuiz();
             }
         },
         finishQuiz() {
             this.isFinished = true;
             const pct = (this.scoreCorrect / this.questions.length) * 100;
             if (pct === 100) {
                 this.starsEarned = 3;
             } else if (pct >= 60) {
                 this.starsEarned = 2;
             } else {
                 this.starsEarned = 1;
             }

             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 window.soundEngine.speak('Hore! Kamu hebat sudah menyelesaikan kuis! Dapat ' + this.starsEarned + ' bintang emas!');
             }
             window.triggerConfetti(0.4);
             setTimeout(() => window.triggerConfetti(0.6), 600);
         },
         restartQuiz() {
             this.currentIndex = 0;
             this.selectedOption = null;
             this.isAnswered = false;
             this.isCorrect = false;
             this.scoreCorrect = 0;
             this.isFinished = false;
             this.starsEarned = 0;
             this.feedbackMessage = '';
             this.playCurrentQuestionVoice();
         }
     }">

    <!-- Top Quiz Header -->
    <div class="flex items-center justify-between gap-4 bg-white/85 backdrop-blur-md p-4 rounded-3xl border-3 border-yellow-400 shadow-xs">
        <a href="{{ route('home') }}" 
           class="flex items-center gap-2 text-slate-700 hover:text-sky-700 font-bold text-sm bg-slate-100 hover:bg-slate-200 px-4 py-2 rounded-2xl transition-all">
            <span>🏠</span>
            <span>Kembali ke Pulau</span>
        </a>

        <!-- Quiz Title & Question Counter -->
        <div class="flex items-center gap-3">
            <h2 class="text-base sm:text-lg font-extrabold font-heading text-slate-800">
                {{ $quizData['title'] }}
            </h2>
            <template x-if="!isFinished">
                <span class="px-3 py-1 bg-amber-100 text-amber-900 border-2 border-amber-300 rounded-full font-black text-xs">
                    Soal <span x-text="currentIndex + 1"></span> / <span x-text="questions.length"></span>
                </span>
            </template>
        </div>
    </div>

    <!-- Active Question Stage (When Quiz is In Progress) -->
    <template x-if="!isFinished">
        <div class="card-bubbly p-6 sm:p-10 border-4 border-yellow-400 shadow-xl flex flex-col items-center text-center bg-white relative">
            
            <!-- Question Voice Banner Box -->
            <div class="w-full bg-gradient-to-r from-amber-100 via-yellow-50 to-amber-100 border-3 border-amber-300 rounded-3xl p-6 mb-8 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
                
                <div class="flex items-center gap-4 text-center sm:text-left">
                    <span class="text-4xl sm:text-5xl animate-bounce-slow shrink-0">❓</span>
                    <div>
                        <span class="text-xs font-black uppercase tracking-wider text-amber-700">Pertanyaan Soal</span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold font-heading text-amber-950 leading-snug"
                            x-text="currentQuestion().prompt_text">
                        </h3>
                    </div>
                </div>

                <!-- Replay Audio Button -->
                <button @click="playCurrentQuestionVoice()" 
                        title="Putar Ulang Suara Soal"
                        class="btn-3d btn-3d-yellow px-5 py-3.5 rounded-2xl flex items-center gap-2 text-sm font-black shrink-0">
                    <span class="text-2xl animate-wiggle">🔊</span>
                    <span>Ulangi Suara</span>
                </button>
            </div>

            <!-- Picture Options Grid for Kids -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full mb-8">
                <template x-for="opt in currentQuestion().options" :key="opt.id">
                    <button @click="selectAnswer(opt)"
                            :disabled="isAnswered"
                            class="card-bubbly p-6 sm:p-8 flex flex-col items-center justify-center gap-4 border-4 transition-all relative overflow-hidden group cursor-pointer"
                            :class="{
                                'border-amber-200 hover:border-amber-400 hover:scale-105': !isAnswered,
                                'border-emerald-500 bg-emerald-50 scale-105 shadow-lg ring-4 ring-emerald-300': isAnswered && opt.is_correct,
                                'border-rose-400 bg-rose-50 opacity-60': isAnswered && !opt.is_correct && selectedOption?.id === opt.id,
                                'opacity-40 border-slate-200': isAnswered && !opt.is_correct && selectedOption?.id !== opt.id
                            }">
                        
                        <!-- Big Picture Illustration Emoji -->
                        <span class="text-7xl sm:text-8xl group-hover:scale-110 transition-transform select-none drop-shadow-sm"
                              x-text="opt.emoji">
                        </span>

                        <!-- Option Label -->
                        <span class="text-xl sm:text-2xl font-extrabold font-heading text-slate-800"
                              x-text="opt.label">
                        </span>

                        <!-- Correct/Wrong Instant Icon Stamp -->
                        <template x-if="isAnswered && opt.is_correct">
                            <span class="absolute top-3 right-3 text-3xl animate-pop-star">⭐</span>
                        </template>
                        <template x-if="isAnswered && !opt.is_correct && selectedOption?.id === opt.id">
                            <span class="absolute top-3 right-3 text-3xl">❌</span>
                        </template>
                    </button>
                </template>
            </div>

            <!-- Instant Feedback Banner -->
            <template x-if="isAnswered">
                <div class="w-full p-6 rounded-3xl border-4 flex flex-col sm:flex-row items-center justify-between gap-4 animate-pop-star"
                     :class="isCorrect ? 'bg-emerald-100 border-emerald-400 text-emerald-950' : 'bg-rose-100 border-rose-300 text-rose-950'">
                    
                    <div class="flex items-center gap-3 text-center sm:text-left">
                        <span class="text-4xl" x-text="isCorrect ? '🌟' : '💡'"></span>
                        <div>
                            <p class="text-xl sm:text-2xl font-extrabold font-heading" x-text="feedbackMessage"></p>
                            <p class="text-xs sm:text-sm font-semibold opacity-90" x-text="isCorrect ? 'Jawabanmu tepat sekali! Lanjut ke soal berikutnya yuk!' : 'Tidak apa-apa, kamu pasti bisa di soal berikutnya!'"></p>
                        </div>
                    </div>

                    <button @click="nextQuestion()"
                            class="btn-3d py-3.5 px-8 rounded-2xl text-lg font-black shrink-0 text-white"
                            :class="isCorrect ? 'btn-3d-green' : 'btn-3d-orange'">
                        <span x-text="currentIndex === questions.length - 1 ? '🎉 Lihat Hasil Kuis' : 'Soal Selanjutnya ➡️'"></span>
                    </button>
                </div>
            </template>

        </div>
    </template>

    <!-- Quiz Completed Screen (Celebration & Rewards) -->
    <template x-if="isFinished">
        <div class="card-bubbly p-8 sm:p-12 border-6 border-yellow-400 shadow-2xl flex flex-col items-center text-center bg-gradient-to-b from-white via-amber-50 to-yellow-100 relative overflow-hidden">
            
            <!-- Confetti & Trophy Mascot -->
            <div class="w-28 h-28 bg-yellow-300 rounded-full border-4 border-yellow-500 flex items-center justify-center text-6xl shadow-lg mb-4 animate-bounce-slow">
                🏆
            </div>

            <h2 class="text-3xl sm:text-5xl font-black font-heading text-amber-950 mb-2">
                HORE! KUIS SELESAI! 🎉
            </h2>
            <p class="text-base sm:text-lg font-bold text-amber-900 mb-6">
                Kamu menjawab benar <span class="text-2xl font-black text-emerald-700" x-text="scoreCorrect"></span> dari <span class="text-2xl font-black text-slate-800" x-text="questions.length"></span> soal!
            </p>

            <!-- Star Rating Badges (⭐⭐⭐) -->
            <div class="flex items-center justify-center gap-3 sm:gap-6 mb-8">
                <template x-for="i in 3" :key="i">
                    <div class="flex flex-col items-center gap-1">
                        <span class="text-6xl sm:text-7xl transition-all duration-500 drop-shadow-md"
                              :class="i <= starsEarned ? 'text-amber-400 animate-pop-star' : 'text-slate-300 grayscale opacity-40'"
                              x-text="i <= starsEarned ? '⭐' : '⭐'">
                        </span>
                    </div>
                </template>
            </div>

            <!-- Reward Sticker Unlocked Box -->
            <div class="w-full max-w-md bg-white border-4 border-purple-400 rounded-3xl p-6 sm:p-8 mb-8 shadow-md relative group">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-purple-600 text-white font-extrabold text-xs px-4 py-1 rounded-full uppercase tracking-wider shadow-sm">
                    ✨ HADIAH STIKER BARU DIBUKA! ✨
                </div>

                <div class="text-7xl mb-2 animate-wiggle drop-shadow-md" x-text="rewardSticker.emoji"></div>
                <h4 class="text-2xl font-extrabold font-heading text-purple-950" x-text="rewardSticker.name"></h4>
                <p class="text-sm font-bold text-purple-800 mt-1" x-text="rewardSticker.message"></p>
                <p class="text-xs text-slate-500 mt-2">Stiker ini otomatis tersimpan di Buku Stiker Virtualmu! 📖</p>
            </div>

            <!-- Bottom Navigation Actions -->
            <div class="flex flex-wrap items-center justify-center gap-4 w-full">
                <button @click="restartQuiz()"
                        class="btn-3d btn-3d-white px-6 py-3.5 rounded-2xl font-extrabold text-base flex items-center gap-2 border-2">
                    <span>🔄</span>
                    <span>Main Lagi</span>
                </button>

                <a href="{{ route('stickers') }}"
                   class="btn-3d btn-3d-purple px-6 py-3.5 rounded-2xl font-extrabold text-base text-white flex items-center gap-2">
                    <span>🏆</span>
                    <span>Buka Buku Stiker</span>
                </a>

                <a href="{{ route('home') }}"
                   class="btn-3d btn-3d-sky px-6 py-3.5 rounded-2xl font-extrabold text-base text-white flex items-center gap-2">
                    <span>🗺️</span>
                    <span>Pilih Pulau Lain</span>
                </a>
            </div>

        </div>
    </template>

</div>
@endsection

@extends('layouts.admin')

@section('title', 'Bank Soal & Manajemen Kuis Manual - YukBelajar Admin')

@section('content')
<div class="flex flex-col gap-6 pb-16"
     x-data="{
         activePillar: 'all', // 'all', 'mengenal', 'membaca', 'menghitung'
         selectedCatFilter: 'all',
         searchQuery: '',
         showCreateQuizModal: false,
         showAddQuestionModal: false,
         showEditQuizModal: false,
         activeQuiz: null,
         categories: {{ Js::from($categories) }},
         quizzes: {{ Js::from($quizzesData['quizzes']) }},
         
         get currentPillarCategories() {
             if (this.activePillar === 'all') return this.categories;
             return this.categories.filter(c => c.pillar === this.activePillar);
         },

         get filteredQuizzes() {
             return this.quizzes.filter(q => {
                 const matchPillar = this.activePillar === 'all' || q.category_pillar === this.activePillar;
                 const matchCat = this.selectedCatFilter === 'all' || q.category_id == this.selectedCatFilter;
                 const query = this.searchQuery.toLowerCase();
                 const matchQuery = !query || q.title.toLowerCase().includes(query) || q.category_name.toLowerCase().includes(query);
                 return matchPillar && matchCat && matchQuery;
             });
         },

         switchPillar(p) {
             this.activePillar = p;
             this.selectedCatFilter = 'all';
         },

         // Form Data Kuis Baru
         newQuiz: {
             category_id: {{ $categories[0]['id'] ?? 1 }},
             title: '',
             icon_emoji: '🦁',
             target_age: 4,
             stars_reward: 3,
             questions: [
                 {
                     question_text: '',
                     question_audio: '',
                     options: [
                         { option_text: '', option_emoji: '🦁', is_correct: true },
                         { option_text: '', option_emoji: '🐱', is_correct: false },
                         { option_text: '', option_emoji: '🐰', is_correct: false }
                     ]
                 }
             ]
         },

         // Form Data Tambah Soal Tunggal
         newQuestion: {
             quiz_id: null,
             question_text: '',
             question_audio: '',
             options: [
                 { option_text: '', option_emoji: '🌟', is_correct: true },
                 { option_text: '', option_emoji: '🪨', is_correct: false },
                 { option_text: '', option_emoji: '🌳', is_correct: false }
             ]
         },

         // Form Edit Kuis
         editQuizData: {
             id: null,
             category_id: 1,
             title: '',
             icon_emoji: '🦁',
             target_age: 4,
             stars_reward: 3
         },

         addQuestionToNewQuiz() {
             this.newQuiz.questions.push({
                 question_text: '',
                 question_audio: '',
                 options: [
                     { option_text: '', option_emoji: '🌟', is_correct: true },
                     { option_text: '', option_emoji: '🪨', is_correct: false },
                     { option_text: '', option_emoji: '🌳', is_correct: false }
                 ]
             });
         },

         removeQuestionFromNewQuiz(index) {
             if (this.newQuiz.questions.length > 1) {
                 this.newQuiz.questions.splice(index, 1);
             }
         },

         openAddQuestionModal(quiz) {
             this.activeQuiz = quiz;
             this.newQuestion.quiz_id = quiz.id;
             this.newQuestion.question_text = '';
             this.newQuestion.question_audio = '';
             this.showAddQuestionModal = true;
         },

         openEditQuizModal(quiz) {
             this.editQuizData = {
                 id: quiz.id,
                 category_id: quiz.category_id,
                 title: quiz.title,
                 icon_emoji: quiz.icon_emoji,
                 target_age: quiz.target_age,
                 stars_reward: quiz.stars_reward
             };
             this.showEditQuizModal = true;
         },

         playAudioSample(text) {
             if (window.soundEngine) {
                 window.soundEngine.speak(text);
             }
         }
     }">

    <!-- Top Banner -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                Panel Bank Soal & Kurator
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                Manajemen Bank Soal & Input Kuis 3 Pilar
            </h2>
            <p class="text-sm text-sky-100 mt-1 max-w-xl">
                Kelola bank soal kuis untuk 3 Pilar PAUD (Mengenal, Membaca, Menghitung), input butir soal baru, dan atur reward bintang.
            </p>
        </div>

        <button @click="showCreateQuizModal = true"
                class="px-6 py-4 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black rounded-2xl shadow-md transition-all flex items-center gap-2.5 shrink-0 hover:scale-105 cursor-pointer">
            <span class="text-2xl">➕</span>
            <span>Tambah Kuis & Soal Manual</span>
        </button>
    </div>

    <!-- Alert Success Notifications -->
    @if(session('success'))
    <div class="p-4 bg-emerald-100 border-2 border-emerald-400 text-emerald-950 font-extrabold text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
        <div class="flex items-center gap-3">
            <span class="text-2xl">✨</span>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    @if($errors->any())
    <div class="p-4 bg-rose-100 border-2 border-rose-400 text-rose-950 font-bold text-sm rounded-2xl shadow-xs">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- 3 GRAND PILLAR TABS -->
    <div class="bg-white border-2 border-slate-200 rounded-3xl p-3 shadow-xs">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
            
            <!-- All -->
            <button type="button" 
                    @click="switchPillar('all')"
                    class="p-3.5 rounded-2xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                    :class="activePillar === 'all' ? 'bg-slate-800 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span>🌟</span>
                <span>Semua Pilar</span>
            </button>

            <!-- Tab Mengenal -->
            <button type="button" 
                    @click="switchPillar('mengenal')"
                    class="p-3.5 rounded-2xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                    :class="activePillar === 'mengenal' ? 'bg-gradient-to-r from-emerald-500 to-teal-600 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span>🌟</span>
                <span>Pilar 1: Mengenal</span>
            </button>

            <!-- Tab Membaca -->
            <button type="button" 
                    @click="switchPillar('membaca')"
                    class="p-3.5 rounded-2xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                    :class="activePillar === 'membaca' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span>📖</span>
                <span>Pilar 2: Membaca</span>
            </button>

            <!-- Tab Menghitung -->
            <button type="button" 
                    @click="switchPillar('menghitung')"
                    class="p-3.5 rounded-2xl font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                    :class="activePillar === 'menghitung' ? 'bg-gradient-to-r from-purple-500 to-indigo-600 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span>🧮</span>
                <span>Pilar 3: Menghitung</span>
            </button>

        </div>
    </div>

    <!-- Filter & Controls Bar -->
    <div class="bg-white rounded-3xl p-4 sm:p-5 border border-slate-200 shadow-xs flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
        
        <!-- Category Filter Tabs -->
        <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl overflow-x-auto max-w-full">
            <button @click="selectedCatFilter = 'all'"
                    class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCatFilter === 'all' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                Semua Topik (<span x-text="filteredQuizzes.length"></span>)
            </button>
            <template x-for="cat in currentPillarCategories" :key="cat.id">
                <button @click="selectedCatFilter = cat.id"
                        class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer flex items-center gap-1.5"
                        :class="selectedCatFilter == cat.id ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    <span x-text="cat.icon_emoji"></span>
                    <span x-text="cat.name"></span>
                </button>
            </template>
        </div>

        <!-- Search Bar -->
        <div class="relative w-full md:w-64 shrink-0">
            <input type="text" x-model="searchQuery"
                   placeholder="Cari modul kuis..."
                   class="w-full pl-9 pr-3.5 py-2 bg-slate-50 border border-slate-200 focus:border-sky-500 rounded-xl text-xs font-bold outline-none">
            <span class="absolute left-3 top-2 text-slate-400 text-sm">🔍</span>
        </div>

    </div>

    <!-- Quizzes List Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <template x-for="quiz in filteredQuizzes" :key="quiz.id">
            <div class="bg-white border-2 border-slate-200 rounded-3xl p-6 shadow-xs flex flex-col justify-between gap-5 hover:border-sky-300 transition-all"
                 x-data="{ showQuestions: false }">
                
                <div>
                    <!-- Card Top Header -->
                    <div class="flex items-start justify-between gap-3 mb-3">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-3xl shrink-0 shadow-xs">
                                <span x-text="quiz.icon_emoji"></span>
                            </div>
                            <div>
                                <span class="px-2.5 py-0.5 rounded-md font-extrabold text-[10px] uppercase bg-sky-100 text-sky-800"
                                      x-text="quiz.category_name">
                                </span>
                                <h3 class="font-extrabold text-lg text-slate-900 mt-0.5 leading-snug" x-text="quiz.title"></h3>
                            </div>
                        </div>

                        <div class="flex items-center gap-1">
                            <button type="button" @click="openEditQuizModal(quiz)" title="Edit Kuis"
                                    class="p-2 bg-slate-100 hover:bg-sky-100 text-slate-600 hover:text-sky-700 rounded-xl transition-all font-bold cursor-pointer">
                                ✏️
                            </button>
                            <form :action="'{{ url('admin/quizzes') }}/' + quiz.id" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus seluruh modul kuis beserta soal-soalnya?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Hapus Kuis"
                                        class="p-2 bg-slate-100 hover:bg-rose-100 text-slate-600 hover:text-rose-700 rounded-xl transition-all font-bold cursor-pointer">
                                    🗑️
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Meta Tags -->
                    <div class="flex items-center gap-2 flex-wrap text-xs font-bold text-slate-600 mb-4">
                        <span class="px-2.5 py-1 bg-amber-50 text-amber-800 border border-amber-200 rounded-lg">
                            ⭐ Reward: <span x-text="quiz.stars_reward + ' Bintang'"></span>
                        </span>
                        <span class="px-2.5 py-1 bg-purple-50 text-purple-800 border border-purple-200 rounded-lg">
                            👶 Usia: <span x-text="quiz.target_age + ' Tahun'"></span>
                        </span>
                        <span class="px-2.5 py-1 bg-slate-100 text-slate-700 rounded-lg">
                            📝 <span x-text="quiz.questions_count + ' Soal'"></span>
                        </span>
                        <span class="px-2.5 py-1 bg-emerald-50 text-emerald-800 border border-emerald-200 rounded-lg">
                            🎯 <span x-text="quiz.attempts_count + 'x Dimainkan'"></span>
                        </span>
                    </div>

                    <!-- Question Dropdown Preview -->
                    <div class="border-t border-slate-100 pt-3">
                        <button type="button" @click="showQuestions = !showQuestions"
                                class="w-full flex items-center justify-between text-xs font-extrabold text-sky-700 hover:text-sky-800 py-1 cursor-pointer">
                            <span x-text="showQuestions ? '▲ Sembunyikan Butir Soal' : '▼ Lihat ' + quiz.questions_count + ' Butir Soal'"></span>
                            <span class="text-slate-400 font-semibold" x-text="quiz.questions_count + ' Soal'"></span>
                        </button>

                        <div x-show="showQuestions" class="flex flex-col gap-3 mt-3">
                            <template x-for="(qs, qIdx) in quiz.questions" :key="qs.id">
                                <div class="p-3.5 bg-slate-50 border border-slate-200 rounded-2xl flex flex-col gap-2">
                                    <div class="flex items-start justify-between gap-2">
                                        <div class="flex items-center gap-2">
                                            <span class="w-5 h-5 rounded-full bg-sky-500 text-white font-black text-[10px] flex items-center justify-center" x-text="qIdx + 1"></span>
                                            <p class="font-extrabold text-xs text-slate-800" x-text="qs.question_text"></p>
                                        </div>

                                        <div class="flex items-center gap-1 shrink-0">
                                            <button type="button" @click="playAudioSample(qs.question_audio)" title="Tes Audio Soal"
                                                    class="p-1 text-xs bg-white border rounded-lg text-slate-600 hover:text-sky-600 cursor-pointer">
                                                🔊
                                            </button>
                                            <form :action="'{{ url('admin/questions') }}/' + qs.id" method="POST"
                                                  onsubmit="return confirm('Hapus butir soal ini?')" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Hapus Soal"
                                                        class="p-1 text-xs bg-white border rounded-lg text-rose-500 hover:bg-rose-50 cursor-pointer">
                                                    ✖
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Options Checklist -->
                                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-1.5 mt-1">
                                        <template x-for="opt in qs.options" :key="opt.id">
                                            <div class="p-1.5 rounded-lg text-[11px] font-bold flex items-center gap-1.5"
                                                 :class="opt.is_correct ? 'bg-emerald-100 text-emerald-900 border border-emerald-300' : 'bg-white text-slate-600 border border-slate-200'">
                                                <span x-text="opt.option_emoji"></span>
                                                <span class="truncate" x-text="opt.option_text"></span>
                                                <span class="ml-auto text-[10px]" x-show="opt.is_correct">✅</span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Action Button: Add Question to Quiz -->
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between gap-3">
                    <button type="button" @click="openAddQuestionModal(quiz)"
                            class="flex-1 py-2.5 px-4 bg-sky-50 hover:bg-sky-100 text-sky-700 font-extrabold text-xs rounded-xl transition-all border border-sky-200 flex items-center justify-center gap-1.5 cursor-pointer">
                        <span>➕</span>
                        <span>Tambah Butir Soal</span>
                    </button>

                    <a :href="'{{ url('kuis') }}/' + quiz.slug" target="_blank"
                       class="py-2.5 px-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold text-xs rounded-xl transition-all flex items-center justify-center gap-1.5">
                        <span>👁️</span>
                        <span>Uji Coba</span>
                    </a>
                </div>

            </div>
        </template>
    </div>

    <!-- MODAL: TAMBAH KUIS & SOAL LENGKAP SECARA MANUAL (REAL DATABASE POST) -->
    <div x-show="showCreateQuizModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-2xl w-full border-4 border-sky-400 shadow-2xl relative my-8"
             @click.away="showCreateQuizModal = false">
            
            <button @click="showCreateQuizModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">🎯</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">
                        Input Kuis & Butir Soal Baru Manual
                    </h3>
                    <p class="text-xs font-bold text-slate-500">Buat paket modul kuis dan input butir pertanyaan ramah anak.</p>
                </div>
            </div>

            <form action="{{ route('admin.quizzes.store') }}" method="POST" class="flex flex-col gap-5">
                @csrf
                
                <!-- 1. Header Kuis -->
                <div class="p-4 bg-sky-50 border border-sky-200 rounded-2xl flex flex-col gap-3">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Pulau Belajar</label>
                            <select name="category_id" x-model="newQuiz.category_id"
                                    class="w-full p-3 text-xs font-bold bg-white border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                                <template x-for="cat in categories" :key="cat.id">
                                    <option :value="cat.id" x-text="cat.icon_emoji + ' ' + cat.name"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Target Usia Belajar</label>
                            <select name="target_age" x-model="newQuiz.target_age"
                                    class="w-full p-3 text-xs font-bold bg-white border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                                <option :value="3">3 Tahun (Batita / Dasar)</option>
                                <option :value="4">4 Tahun (PAUD A / Menengah)</option>
                                <option :value="5">5 Tahun (TK A / Eksplorasi)</option>
                                <option :value="6">6 Tahun (TK B / Siap SD)</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold text-slate-700 mb-1">Judul Modul Kuis</label>
                            <input type="text" name="title" x-model="newQuiz.title" required placeholder="Contoh: Kuis Tebak Hewan Jinak"
                                   class="w-full p-3 text-xs font-bold bg-white border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Reward Bintang</label>
                            <select name="stars_reward" x-model="newQuiz.stars_reward"
                                    class="w-full p-3 text-xs font-bold bg-white border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                                <option :value="3">⭐ 3 Bintang (Standar)</option>
                                <option :value="5">⭐ 5 Bintang (Tantangan)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- 2. Dynamic Questions Items -->
                <div class="flex flex-col gap-4 max-h-[350px] overflow-y-auto pr-1">
                    <div class="flex items-center justify-between">
                        <h4 class="font-extrabold text-sm text-slate-800">Butir Soal & Pilihan Jawaban:</h4>
                        <button type="button" @click="addQuestionToNewQuiz()"
                                class="px-3 py-1 bg-emerald-100 hover:bg-emerald-200 text-emerald-800 font-extrabold text-xs rounded-lg transition-all cursor-pointer">
                            ➕ Tambah Butir Soal
                        </button>
                    </div>

                    <template x-for="(q, qIdx) in newQuiz.questions" :key="qIdx">
                        <div class="p-4 bg-slate-50 border-2 border-slate-200 rounded-2xl flex flex-col gap-3 relative">
                            <div class="flex items-center justify-between">
                                <span class="font-black text-xs text-sky-800 uppercase" x-text="'Soal #' + (qIdx + 1)"></span>
                                <button type="button" @click="removeQuestionFromNewQuiz(qIdx)" x-show="newQuiz.questions.length > 1"
                                        class="text-rose-500 hover:text-rose-700 font-bold text-xs cursor-pointer">
                                    Hapus Butir Ini ✖
                                </button>
                            </div>

                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 mb-1">Teks Pertanyaan Ramah Anak</label>
                                <input type="text" :name="'questions[' + qIdx + '][question_text]'" x-model="q.question_text" required
                                       placeholder="Contoh: Manakah gambar kucing yang bersuara meong-meong? 🐱"
                                       class="w-full p-2.5 text-xs font-bold bg-white border border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                            </div>

                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 mb-1">Naskah Suara Narasi (TTS Audio Prompt)</label>
                                <input type="text" :name="'questions[' + qIdx + '][question_audio]'" x-model="q.question_audio"
                                       placeholder="Contoh: Ayo pilih gambar kucing lucu yang suka meong-meong!"
                                       class="w-full p-2.5 text-xs font-bold bg-white border border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                            </div>

                            <!-- Pilihan Jawaban -->
                            <div>
                                <label class="block text-[11px] font-bold text-slate-600 mb-1.5">3 Pilihan Jawaban (Centang 1 Jawaban Benar):</label>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                                    <template x-for="(opt, oIdx) in q.options" :key="oIdx">
                                        <div class="p-2.5 bg-white border rounded-xl flex flex-col gap-1.5"
                                             :class="opt.is_correct ? 'border-emerald-400 bg-emerald-50/50' : 'border-slate-300'">
                                            <div class="flex items-center gap-1.5">
                                                <input type="text" :name="'questions[' + qIdx + '][options][' + oIdx + '][option_emoji]'" x-model="opt.option_emoji"
                                                       class="w-8 p-1 text-center text-sm bg-slate-100 border rounded font-mono" placeholder="🦁">
                                                <input type="text" :name="'questions[' + qIdx + '][options][' + oIdx + '][option_text]'" x-model="opt.option_text" required
                                                       class="flex-1 p-1 text-xs font-bold border rounded outline-none" placeholder="Label Opsi">
                                            </div>
                                            <label class="flex items-center gap-1.5 text-[10px] font-bold cursor-pointer"
                                                   :class="opt.is_correct ? 'text-emerald-700' : 'text-slate-500'">
                                                <input type="radio" :name="'correct_for_q_' + qIdx" :checked="opt.is_correct"
                                                       @change="q.options.forEach((o, i) => o.is_correct = (i === oIdx))">
                                                <input type="hidden" :name="'questions[' + qIdx + '][options][' + oIdx + '][is_correct]'" :value="opt.is_correct ? '1' : '0'">
                                                <span>Jawaban Benar</span>
                                            </label>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showCreateQuizModal = false"
                            class="flex-1 py-3.5 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3.5 bg-sky-600 hover:bg-sky-700 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan Kuis & Soal ke Database
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- MODAL: TAMBAH 1 SOAL KE KUIS TERTENTU (REAL DATABASE POST) -->
    <div x-show="showAddQuestionModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-emerald-400 shadow-2xl relative my-8"
             @click.away="showAddQuestionModal = false">
            
            <button @click="showAddQuestionModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">➕</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">
                        Tambah Butir Soal Baru
                    </h3>
                    <p class="text-xs font-bold text-slate-500">
                        Menambahkan pertanyaan ke kuis: <b class="text-slate-800" x-text="activeQuiz ? activeQuiz.title : ''"></b>
                    </p>
                </div>
            </div>

            <form :action="'{{ url('admin/quizzes') }}/' + (activeQuiz ? activeQuiz.id : '') + '/questions'" method="POST" class="flex flex-col gap-4">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Teks Pertanyaan Ramah Anak</label>
                    <input type="text" name="question_text" x-model="newQuestion.question_text" required
                           placeholder="Contoh: Manakah buah semangka segar berwarna merah? 🍉"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Naskah Suara Audio TTS (Opsional)</label>
                    <input type="text" name="question_audio" x-model="newQuestion.question_audio"
                           placeholder="Contoh: Ayo sentuh gambar buah semangka yang segar!"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <!-- 3 Pilihan Jawaban -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-2">3 Opsi Jawaban (Pilih 1 yang Benar):</label>
                    <div class="flex flex-col gap-2">
                        <template x-for="(opt, oIdx) in newQuestion.options" :key="oIdx">
                            <div class="p-3 bg-slate-50 border rounded-xl flex items-center gap-2"
                                 :class="opt.is_correct ? 'border-emerald-400 bg-emerald-50/60' : 'border-slate-200'">
                                <input type="text" :name="'options[' + oIdx + '][option_emoji]'" x-model="opt.option_emoji"
                                       class="w-10 p-2 text-center text-sm bg-white border rounded-lg font-mono" placeholder="🍎">
                                <input type="text" :name="'options[' + oIdx + '][option_text]'" x-model="opt.option_text" required
                                       class="flex-1 p-2 text-xs font-bold bg-white border rounded-lg outline-none" placeholder="Nama Pilihan Objek">
                                
                                <label class="flex items-center gap-1 text-[11px] font-bold shrink-0 cursor-pointer"
                                       :class="opt.is_correct ? 'text-emerald-700' : 'text-slate-500'">
                                    <input type="radio" name="correct_single_q" :checked="opt.is_correct"
                                           @change="newQuestion.options.forEach((o, i) => o.is_correct = (i === oIdx))">
                                    <input type="hidden" :name="'options[' + oIdx + '][is_correct]'" :value="opt.is_correct ? '1' : '0'">
                                    <span>Benar</span>
                                </label>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showAddQuestionModal = false"
                            class="flex-1 py-3.5 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan Soal ke Kuis
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- MODAL: EDIT INFORMASI KUIS (REAL DATABASE PUT) -->
    <div x-show="showEditQuizModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-amber-400 shadow-2xl relative my-8"
             @click.away="showEditQuizModal = false">
            
            <button @click="showEditQuizModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">✏️</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">
                        Edit Informasi Kuis
                    </h3>
                    <p class="text-xs font-bold text-slate-500">Perbarui judul dan pengaturan kuis.</p>
                </div>
            </div>

            <form :action="'{{ url('admin/quizzes') }}/' + editQuizData.id" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Kuis</label>
                    <select name="category_id" x-model="editQuizData.category_id"
                            class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                        <template x-for="cat in categories" :key="cat.id">
                            <option :value="cat.id" x-text="cat.icon_emoji + ' ' + cat.name"></option>
                        </template>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Judul Kuis</label>
                    <input type="text" name="title" x-model="editQuizData.title" required
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Target Usia</label>
                        <select name="target_age" x-model="editQuizData.target_age"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option :value="3">3 Tahun</option>
                            <option :value="4">4 Tahun</option>
                            <option :value="5">5 Tahun</option>
                            <option :value="6">6 Tahun</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Reward Bintang</label>
                        <select name="stars_reward" x-model="editQuizData.stars_reward"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option :value="3">⭐ 3 Bintang</option>
                            <option :value="5">⭐ 5 Bintang</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showEditQuizModal = false"
                            class="flex-1 py-3.5 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3.5 bg-amber-500 hover:bg-amber-600 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection

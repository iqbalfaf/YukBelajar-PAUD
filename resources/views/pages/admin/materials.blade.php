@extends('layouts.admin')

@section('title', 'Manajemen Flashcard & Kurikulum 3 Pilar - YukBelajar Admin')

@section('content')
<div class="flex flex-col gap-6 pb-16"
     x-data="{
         activePillar: 'mengenal', // 'mengenal', 'membaca', 'menghitung'
         selectedCat: 'all',
         searchQuery: '',
         showAddModal: false,
         showEditModal: false,
         showAddTopicModal: false,
         showEditTopicModal: false,
         categories: {{ Js::from($categories) }},
         
         get currentPillarCategories() {
             return this.categories.filter(c => c.pillar === this.activePillar);
         },

         get currentFilteredCategories() {
             let cats = this.currentPillarCategories;
             if (this.selectedCat !== 'all') {
                 cats = cats.filter(c => c.slug === this.selectedCat);
             }
             if (this.searchQuery.trim() !== '') {
                 const q = this.searchQuery.toLowerCase();
                 cats = cats.filter(c => c.name.toLowerCase().includes(q) || c.levels.some(lvl => lvl.items.some(it => it.title.toLowerCase().includes(q))));
             }
             return cats;
         },

         editData: {
             id: null,
             title: '',
             subtitle: '',
             icon_emoji: '📄',
             speech_text: '',
             sound_effect: '',
             parent_note: ''
         },
         newCard: {
             category_slug: '{{ $categories[0]['slug'] ?? 'abjad' }}',
             level_number: 1,
             title: '',
             subtitle: '',
             icon_emoji: '📄',
             speech_text: '',
             sound_effect: 'Ceria',
             parent_note: ''
         },
         editTopicData: {
             id: null,
             pillar: 'mengenal',
             name: '',
             subtitle: '',
             icon_emoji: '🌟',
             color_theme: 'yellow',
             recommended_age: '3 - 5 Thn',
             description: ''
         },

         switchPillar(p) {
             this.activePillar = p;
             this.selectedCat = 'all';
         },

         openEdit(item) {
             this.editData = {
                 id: item.id,
                 title: item.title,
                 subtitle: item.subtitle,
                 icon_emoji: item.icon_emoji,
                 speech_text: item.speech_text,
                 sound_effect: item.sound_effect,
                 parent_note: item.parent_note
             };
             this.showEditModal = true;
         },

         openAddCardForCategory(catSlug) {
             this.newCard.category_slug = catSlug;
             this.showAddModal = true;
         },

         openEditTopic(cat) {
             this.editTopicData = {
                 id: cat.id,
                 pillar: cat.pillar,
                 name: cat.name,
                 subtitle: cat.subtitle,
                 icon_emoji: cat.icon_emoji,
                 color_theme: cat.color_theme,
                 recommended_age: cat.recommended_age,
                 description: ''
             };
             this.showEditTopicModal = true;
         },

         playSpeech(text) {
             if (window.soundEngine) {
                 window.soundEngine.speak(text);
             }
         }
     }">

    <!-- Top Banner -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <div class="flex items-center gap-2 mb-2 flex-wrap">
                <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider">
                    Panel Kurikulum 3 Pilar PAUD
                </span>
                <span class="inline-block px-3 py-1 bg-amber-400 text-amber-950 font-black rounded-full text-xs uppercase tracking-wider">
                    20 Topik Terstruktur
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                Manajemen Materi & Topik Pembelajaran
            </h2>
            <p class="text-sm text-sky-100 mt-1 max-w-xl">
                Kelola 3 Pilar Kurikulum Merdeka PAUD (Mengenal, Membaca, Menghitung), tambah topik baru secara dinamis, dan atur kartu flashcard berjenjang (Level 1, 2, 3).
            </p>
        </div>

        <div class="flex items-center gap-3 shrink-0 flex-wrap">
            <button @click="showAddTopicModal = true"
                    class="px-5 py-3.5 bg-emerald-500 hover:bg-emerald-400 text-white font-extrabold rounded-2xl shadow-md transition-all flex items-center gap-2 hover:scale-105 cursor-pointer">
                <span class="text-xl">➕</span>
                <span>Tambah Topik Baru</span>
            </button>

            <button @click="showAddModal = true"
                    class="px-5 py-3.5 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black rounded-2xl shadow-md transition-all flex items-center gap-2 hover:scale-105 cursor-pointer">
                <span class="text-xl">🃏</span>
                <span>Tambah Flashcard</span>
            </button>
        </div>
    </div>

    <!-- Alert Notifications -->
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
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
            
            <!-- Tab Mengenal -->
            <button type="button" 
                    @click="switchPillar('mengenal')"
                    class="p-4 rounded-2xl font-black text-sm sm:text-base flex items-center justify-center gap-2.5 transition-all cursor-pointer"
                    :class="activePillar === 'mengenal' ? 'bg-gradient-to-r from-emerald-500 to-teal-600 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span class="text-2xl">🌟</span>
                <div class="text-left leading-tight">
                    <span>Pilar 1: Mengenal</span>
                    <span class="block text-[11px] font-semibold opacity-90" x-text="`${categories.filter(c => c.pillar === 'mengenal').length} Topik`"></span>
                </div>
            </button>

            <!-- Tab Membaca -->
            <button type="button" 
                    @click="switchPillar('membaca')"
                    class="p-4 rounded-2xl font-black text-sm sm:text-base flex items-center justify-center gap-2.5 transition-all cursor-pointer"
                    :class="activePillar === 'membaca' ? 'bg-gradient-to-r from-sky-500 to-blue-600 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span class="text-2xl">📖</span>
                <div class="text-left leading-tight">
                    <span>Pilar 2: Membaca</span>
                    <span class="block text-[11px] font-semibold opacity-90" x-text="`${categories.filter(c => c.pillar === 'membaca').length} Topik`"></span>
                </div>
            </button>

            <!-- Tab Menghitung -->
            <button type="button" 
                    @click="switchPillar('menghitung')"
                    class="p-4 rounded-2xl font-black text-sm sm:text-base flex items-center justify-center gap-2.5 transition-all cursor-pointer"
                    :class="activePillar === 'menghitung' ? 'bg-gradient-to-r from-purple-500 to-indigo-600 text-white shadow-md' : 'bg-slate-50 hover:bg-slate-100 text-slate-700'">
                <span class="text-2xl">🧮</span>
                <div class="text-left leading-tight">
                    <span>Pilar 3: Menghitung</span>
                    <span class="block text-[11px] font-semibold opacity-90" x-text="`${categories.filter(c => c.pillar === 'menghitung').length} Topik`"></span>
                </div>
            </button>

        </div>
    </div>

    <!-- TOPIC SELECTOR GRID (NO HORIZONTAL SCROLL - SUPER EASY NAVIGATION) -->
    <div class="bg-white p-5 rounded-3xl border-2 border-slate-200 shadow-xs flex flex-col gap-4">
        
        <!-- Grid Header with Search & Mode Toggle -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pb-3 border-b border-slate-100">
            <div class="flex items-center gap-2">
                <span class="text-xs font-black uppercase text-slate-700 tracking-wide">
                    📌 Pilih Topik Pembelajaran:
                </span>
                <span class="px-2 py-0.5 bg-slate-100 text-slate-600 rounded-full text-[11px] font-bold"
                      x-text="`${currentPillarCategories.length} Topik Tersedia`"></span>
            </div>

            <div class="flex items-center gap-3 w-full sm:w-auto">
                <button type="button" 
                        @click="selectedCat = 'all'"
                        class="px-3 py-1.5 rounded-xl text-xs font-extrabold transition-all cursor-pointer whitespace-nowrap"
                        :class="selectedCat === 'all' ? 'bg-slate-800 text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-700'">
                    🌟 Lihat Semua Topik
                </button>

                <!-- Search Input -->
                <div class="relative w-full sm:w-60 shrink-0">
                    <input type="text" 
                           x-model="searchQuery" 
                           placeholder="Cari materi / topik..."
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-1.5 text-xs font-bold text-slate-800 focus:outline-hidden focus:ring-2 focus:ring-sky-500">
                    <span class="absolute right-2.5 top-2 text-xs text-slate-400">🔍</span>
                </div>
            </div>
        </div>

        <!-- Visual Topic Selection Cards Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
            <template x-for="cat in currentPillarCategories" :key="cat.id">
                <button type="button" 
                        @click="selectedCat = cat.slug"
                        class="p-3 rounded-2xl border-2 text-left transition-all cursor-pointer flex flex-col justify-between gap-2 group relative overflow-hidden"
                        :class="selectedCat === cat.slug 
                            ? 'border-sky-500 bg-sky-50 shadow-xs ring-3 ring-sky-200/80 scale-[1.02]' 
                            : 'border-slate-200 bg-slate-50/50 hover:bg-white hover:border-slate-300 text-slate-700'">
                    
                    <div class="flex items-center justify-between gap-1.5">
                        <span class="text-2xl sm:text-3xl shrink-0" x-html="window.twemojiParse(cat.icon_emoji)"></span>
                        <span class="px-2 py-0.5 rounded-full text-[10px] font-black"
                              :class="selectedCat === cat.slug ? 'bg-sky-200 text-sky-900' : 'bg-slate-200/70 text-slate-600'"
                              x-text="`${cat.levels.reduce((acc, l) => acc + l.cards_count, 0)} Kartu`"></span>
                    </div>

                    <div>
                        <h4 class="text-xs sm:text-sm font-black font-heading line-clamp-1 leading-snug"
                            :class="selectedCat === cat.slug ? 'text-sky-950 font-extrabold' : 'text-slate-800 group-hover:text-sky-700'"
                            x-text="cat.name"></h4>
                        <p class="text-[10px] font-semibold text-slate-400 line-clamp-1 mt-0.5" x-text="cat.subtitle"></p>
                    </div>

                    <div x-show="selectedCat === cat.slug" class="absolute top-0 right-0 w-2.5 h-2.5 bg-sky-500 rounded-bl-lg"></div>
                </button>
            </template>
        </div>

    </div>

    <!-- MAIN CURRICULUM WORKSPACE PER TOPIC -->
    <div class="flex flex-col gap-8">
        <template x-for="cat in currentFilteredCategories" :key="cat.id">
            <div class="bg-white border-2 border-slate-200 rounded-3xl p-5 sm:p-7 shadow-xs flex flex-col gap-6">
                
                <!-- Category Top Header -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-5 border-b border-slate-100">
                    <div class="flex items-center gap-4">
                        <span class="text-5xl sm:text-6xl shrink-0" x-html="window.twemojiParse(cat.icon_emoji)"></span>
                        <div>
                            <div class="flex items-center gap-2 flex-wrap mb-1">
                                <h3 class="text-2xl sm:text-3xl font-black font-heading text-slate-800" x-text="cat.name"></h3>
                                <span class="px-3 py-1 rounded-full text-xs font-black bg-sky-100 text-sky-800 border border-sky-200"
                                      x-text="`Target: Usia ${cat.recommended_age}`"></span>
                                <span class="px-3 py-1 rounded-full text-xs font-black bg-amber-100 text-amber-900 border border-amber-200"
                                      x-text="`${cat.levels.reduce((acc, l) => acc + l.cards_count, 0)} Total Kartu`"></span>
                            </div>
                            <p class="text-xs sm:text-sm font-bold text-slate-500" x-text="cat.subtitle"></p>
                        </div>
                    </div>

                    <!-- Category Action Buttons (Add Card, Edit Topic, Delete Topic) -->
                    <div class="flex items-center gap-2.5 flex-wrap w-full sm:w-auto justify-end">
                        <button @click="openAddCardForCategory(cat.slug)"
                                class="px-4 py-2.5 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 rounded-2xl font-extrabold text-xs flex items-center gap-1.5 shadow-xs transition-all hover:scale-105 cursor-pointer">
                            <span class="text-base">➕</span>
                            <span>Tambah Kartu</span>
                        </button>

                        <button @click="openEditTopic(cat)"
                                class="px-3.5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-2xl font-bold text-xs flex items-center gap-1.5 transition-all cursor-pointer">
                            <span>✏️</span>
                            <span>Edit Topik</span>
                        </button>

                        <form :action="`{{ url('/admin/topics') }}/${cat.id}`" method="POST" 
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus topik ini beserta seluruh materi dan kuisnya?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2.5 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-2xl font-bold text-xs transition-all cursor-pointer" title="Hapus Topik">
                                🗑️
                            </button>
                        </form>
                    </div>
                </div>

                <!-- 3 Levels Container (Level 1, Level 2, Level 3) -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <template x-for="lvl in cat.levels" :key="lvl.id">
                        <div class="bg-slate-50/90 border-2 border-slate-200/90 rounded-3xl p-5 flex flex-col justify-between gap-4">
                            
                            <div>
                                <!-- Level Title & Badge -->
                                <div class="flex items-center justify-between gap-2 mb-4 pb-3 border-b-2 border-slate-200">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2.5 py-1 rounded-xl text-xs font-black uppercase tracking-wide shadow-2xs"
                                              :class="lvl.level_num === 1 ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : (lvl.level_num === 2 ? 'bg-amber-100 text-amber-900 border border-amber-300' : 'bg-purple-100 text-purple-900 border border-purple-300')"
                                              x-text="`Level ${lvl.level_num}`"></span>
                                        <h4 class="text-xs font-extrabold text-slate-800" x-text="lvl.level_title"></h4>
                                    </div>
                                    <span class="px-2 py-0.5 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-600" 
                                          x-text="`${lvl.cards_count} Kartu`"></span>
                                </div>

                                <!-- Cards List in this Level -->
                                <div class="flex flex-col gap-3">
                                    <template x-for="item in lvl.items" :key="item.id">
                                        <div class="bg-white border-2 border-slate-200/80 rounded-2xl p-3.5 shadow-2xs flex items-center justify-between gap-3 hover:border-sky-400 hover:shadow-xs transition-all">
                                            
                                            <!-- Emoji Icon & Title Info -->
                                            <div class="flex items-center gap-3 min-w-0 flex-1">
                                                <div class="w-11 h-11 bg-slate-50 border border-slate-200 rounded-xl flex items-center justify-center text-2xl shrink-0">
                                                    <span x-html="window.twemojiParse(item.icon_emoji)"></span>
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <h5 class="text-xs sm:text-sm font-black text-slate-800 leading-snug" x-text="item.title"></h5>
                                                    <p class="text-[11px] font-semibold text-slate-400 truncate mt-0.5" x-text="item.subtitle"></p>
                                                </div>
                                            </div>

                                            <!-- Card Actions (Speak, Edit, Delete) -->
                                            <div class="flex items-center gap-1.5 shrink-0">
                                                <button @click="playSpeech(item.speech_text || item.title)" 
                                                        title="Tes Suara TTS"
                                                        class="w-8 h-8 bg-yellow-100 hover:bg-yellow-200 text-yellow-900 rounded-xl flex items-center justify-center text-xs font-bold transition-transform active:scale-90 cursor-pointer">
                                                    🔊
                                                </button>
                                                <button @click="openEdit(item)" 
                                                        title="Edit Kartu"
                                                        class="w-8 h-8 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl flex items-center justify-center text-xs font-bold transition-transform active:scale-90 cursor-pointer">
                                                    ✏️
                                                </button>
                                                <form :action="`{{ url('/admin/materials') }}/${item.id}`" method="POST"
                                                      onsubmit="return confirm('Hapus kartu materi ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="Hapus Kartu"
                                                            class="w-8 h-8 bg-rose-50 hover:bg-rose-100 text-rose-600 rounded-xl flex items-center justify-center text-xs font-bold transition-transform active:scale-90 cursor-pointer">
                                                        🗑️
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </template>

                                    <template x-if="lvl.items.length === 0">
                                        <div class="py-8 text-center bg-white/60 border border-dashed border-slate-300 rounded-2xl text-slate-400 text-xs font-bold flex flex-col items-center justify-center gap-2">
                                            <span>📭</span>
                                            <span>Belum ada kartu di Level ini</span>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <!-- Bottom Quick Add Button per Level -->
                            <button type="button" 
                                    @click="newCard.category_slug = cat.slug; newCard.level_number = lvl.level_num; showAddModal = true"
                                    class="w-full py-2.5 bg-white hover:bg-sky-50 border-2 border-dashed border-slate-300 hover:border-sky-400 text-slate-600 hover:text-sky-700 rounded-2xl text-xs font-extrabold transition-all flex items-center justify-center gap-1.5 cursor-pointer mt-2">
                                <span>➕</span>
                                <span x-text="`Tambah Kartu di Level ${lvl.level_num}`"></span>
                            </button>

                        </div>
                    </template>
                </div>

            </div>
        </template>
    </div>

    <!-- MODAL 1: TAMBAH TOPIK PEMBELAJARAN BARU -->
    <div x-show="showAddTopicModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-2 border-slate-200 shadow-2xl relative my-8"
             @click.away="showAddTopicModal = false">
            <button @click="showAddTopicModal = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-bold text-xl cursor-pointer">
                ✖
            </button>
            <div class="flex items-center gap-3 mb-5">
                <span class="text-3xl">🌟</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Tambah Topik Belajar Baru</h3>
                    <p class="text-xs font-bold text-slate-500">Pilih pilar kurikulum dan isi informasi topik pembelajaran.</p>
                </div>
            </div>

            <form action="{{ route('admin.topics.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Pilar Kurikulum Merdeka *</label>
                    <select name="pillar" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                        <option value="mengenal">🌟 Pilar 1: Mengenal</option>
                        <option value="membaca">📖 Pilar 2: Membaca</option>
                        <option value="menghitung">🧮 Pilar 3: Menghitung</option>
                    </select>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Nama Topik *</label>
                        <input type="text" name="name" required placeholder="e.g. Mengenal Bendera Dunia" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Ikon Emoji *</label>
                        <input type="text" name="icon_emoji" required placeholder="e.g. 🇮🇩" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-center text-lg font-bold text-slate-800">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Sub-judul / Penjelasan Singkat</label>
                    <input type="text" name="subtitle" placeholder="e.g. Mengenal bendera negara Indonesia dan sahabat dunia" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Tema Warna</label>
                        <select name="color_theme" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                            <option value="emerald">🟢 Emerald / Hijau</option>
                            <option value="sky">🔵 Sky / Biru</option>
                            <option value="yellow">🟡 Yellow / Kuning</option>
                            <option value="purple">🟣 Purple / Ungu</option>
                            <option value="rose">🔴 Rose / Merah</option>
                            <option value="amber">🟠 Amber / Oranye</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Rekomendasi Usia</label>
                        <input type="text" name="recommended_age" value="3 - 6 Thn" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                    </div>
                </div>

                <div class="flex items-center justify-end gap-2 pt-3 border-t border-slate-100">
                    <button type="button" @click="showAddTopicModal = false" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-extrabold cursor-pointer shadow-xs">
                        Simpan Topik Baru
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL 2: EDIT TOPIK PEMBELAJARAN -->
    <div x-show="showEditTopicModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-2 border-slate-200 shadow-2xl relative my-8"
             @click.away="showEditTopicModal = false">
            <button @click="showEditTopicModal = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-bold text-xl cursor-pointer">
                ✖
            </button>
            <div class="flex items-center gap-3 mb-5">
                <span class="text-3xl">✏️</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Edit Data Topik Pembelajaran</h3>
                    <p class="text-xs font-bold text-slate-500">Perbarui nama, ikon, atau tema topik ini.</p>
                </div>
            </div>

            <form :action="`{{ url('/admin/topics') }}/${editTopicData.id}`" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Pilar Kurikulum Merdeka *</label>
                    <select name="pillar" x-model="editTopicData.pillar" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                        <option value="mengenal">🌟 Pilar 1: Mengenal</option>
                        <option value="membaca">📖 Pilar 2: Membaca</option>
                        <option value="menghitung">🧮 Pilar 3: Menghitung</option>
                    </select>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Nama Topik *</label>
                        <input type="text" name="name" x-model="editTopicData.name" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Ikon Emoji *</label>
                        <input type="text" name="icon_emoji" x-model="editTopicData.icon_emoji" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-center text-lg font-bold text-slate-800">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Sub-judul</label>
                    <input type="text" name="subtitle" x-model="editTopicData.subtitle" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Tema Warna</label>
                        <select name="color_theme" x-model="editTopicData.color_theme" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                            <option value="emerald">🟢 Emerald / Hijau</option>
                            <option value="sky">🔵 Sky / Biru</option>
                            <option value="yellow">🟡 Yellow / Kuning</option>
                            <option value="purple">🟣 Purple / Ungu</option>
                            <option value="rose">🔴 Rose / Merah</option>
                            <option value="amber">🟠 Amber / Oranye</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Rekomendasi Usia</label>
                        <input type="text" name="recommended_age" x-model="editTopicData.recommended_age" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                    </div>
                </div>

                <div class="flex items-center justify-end gap-2 pt-3 border-t border-slate-100">
                    <button type="button" @click="showEditTopicModal = false" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-500 text-white text-xs font-extrabold cursor-pointer shadow-xs">
                        Perbarui Topik
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL 3: TAMBAH FLASHCARD BARU -->
    <div x-show="showAddModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-2 border-slate-200 shadow-2xl relative my-8"
             @click.away="showAddModal = false">
            <button @click="showAddModal = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-bold text-xl cursor-pointer">
                ✖
            </button>
            <div class="flex items-center gap-3 mb-5">
                <span class="text-3xl">🃏</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Tambah Kartu Flashcard</h3>
                    <p class="text-xs font-bold text-slate-500">Tambahkan objek kartu baru dengan pelafalan suara TTS ramah anak.</p>
                </div>
            </div>

            <form action="{{ route('admin.materials.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Topik *</label>
                        <select name="category_slug" x-model="newCard.category_slug" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                            <template x-for="cat in categories" :key="cat.id">
                                <option :value="cat.slug" x-text="`${cat.icon_emoji} ${cat.name}`"></option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Tingkatan Level *</label>
                        <select name="level_number" x-model="newCard.level_number" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                            <option value="1">🌱 Level 1 (Dasar)</option>
                            <option value="2">⭐ Level 2 (Menengah)</option>
                            <option value="3">🚀 Level 3 (Pra-SD)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Judul / Nama Objek *</label>
                        <input type="text" name="title" required placeholder="e.g. Apel Merah Manis" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Emoji *</label>
                        <input type="text" name="icon_emoji" required placeholder="e.g. 🍎" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-center text-lg font-bold text-slate-800">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Sub-judul / Pemenggalan Suku Kata</label>
                    <input type="text" name="subtitle" placeholder="e.g. A-pel (2 Suku Kata)" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Teks Pelafalan Suara (TTS Speech) *</label>
                    <textarea name="speech_text" rows="2" placeholder="e.g. Apel! Buah merah manis yang kaya vitamin C." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Catatan Panduan Orang Tua</label>
                    <input type="text" name="parent_note" placeholder="e.g. Ajak ananda menyebutkan warna merah pada apel." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                </div>

                <div class="flex items-center justify-end gap-2 pt-3 border-t border-slate-100">
                    <button type="button" @click="showAddModal = false" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-yellow-400 hover:bg-yellow-300 text-yellow-950 text-xs font-black cursor-pointer shadow-xs">
                        Simpan Flashcard
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL 4: EDIT FLASHCARD -->
    <div x-show="showEditModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-2 border-slate-200 shadow-2xl relative my-8"
             @click.away="showEditModal = false">
            <button @click="showEditModal = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-bold text-xl cursor-pointer">
                ✖
            </button>
            <div class="flex items-center gap-3 mb-5">
                <span class="text-3xl">✏️</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Edit Kartu Flashcard</h3>
                    <p class="text-xs font-bold text-slate-500">Perbarui informasi dan lafal suara kartu ini.</p>
                </div>
            </div>

            <form :action="`{{ url('/admin/materials') }}/${editData.id}`" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Judul / Objek *</label>
                        <input type="text" name="title" x-model="editData.title" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                    </div>
                    <div>
                        <label class="block text-xs font-black text-slate-700 uppercase mb-1">Emoji *</label>
                        <input type="text" name="icon_emoji" x-model="editData.icon_emoji" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-center text-lg font-bold text-slate-800">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Sub-judul</label>
                    <input type="text" name="subtitle" x-model="editData.subtitle" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Teks Pelafalan Suara (TTS Speech)</label>
                    <textarea name="speech_text" x-model="editData.speech_text" rows="2" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-700 uppercase mb-1">Catatan Panduan Orang Tua</label>
                    <input type="text" name="parent_note" x-model="editData.parent_note" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs font-bold text-slate-800">
                </div>

                <div class="flex items-center justify-end gap-2 pt-3 border-t border-slate-100">
                    <button type="button" @click="showEditModal = false" class="px-4 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-500 text-white text-xs font-extrabold cursor-pointer shadow-xs">
                        Perbarui Flashcard
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

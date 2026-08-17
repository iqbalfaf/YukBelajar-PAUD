@extends('layouts.admin')

@section('title', 'Manajemen Flashcard & Kurikulum Materi - YukBelajar Admin')

@section('content')
<div class="flex flex-col gap-6 pb-16"
     x-data="{
         selectedCat: 'all',
         searchQuery: '',
         showAddModal: false,
         showEditModal: false,
         categories: {{ Js::from($categories) }},
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
             category_slug: '{{ $categories[0]['slug'] ?? 'hewan' }}',
             level_number: 1,
             title: '',
             subtitle: '',
             icon_emoji: '📄',
             speech_text: '',
             sound_effect: 'Ceria',
             parent_note: ''
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

         playSpeech(text) {
             if (window.soundEngine) {
                 window.soundEngine.speak(text);
             }
         }
     }">

    <!-- Top Banner -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                Panel Kurator & Materi Pembelajaran
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                Manajemen Flashcard & Kartu Belajar PAUD
            </h2>
            <p class="text-sm text-sky-100 mt-1 max-w-xl">
                Kelola kartu objek flashcard, audio pelafalan TTS, dan panduan orang tua berjenjang (Level 1 Dasar, Level 2 Menengah, Level 3 Pra-SD).
            </p>
        </div>

        <button @click="showAddModal = true"
                class="px-6 py-4 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black rounded-2xl shadow-md transition-all flex items-center gap-2.5 shrink-0 hover:scale-105 cursor-pointer">
            <span class="text-2xl">➕</span>
            <span>Tambah Flashcard Baru</span>
        </button>
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

    <!-- Metric Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-bold text-slate-500">Total Kartu Flashcard</span>
                <span class="text-2xl">📚</span>
            </div>
            <div class="text-3xl font-black font-heading text-slate-800">{{ $materialsData['stats']['total_materials'] }}</div>
            <span class="text-xs font-semibold text-emerald-600">Seluruh Level Aktif</span>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-bold text-slate-500">Total Pulau Pembelajaran</span>
                <span class="text-2xl">🏝️</span>
            </div>
            <div class="text-3xl font-black font-heading text-slate-800">{{ $materialsData['stats']['total_categories'] }}</div>
            <span class="text-xs font-semibold text-sky-600">Kategori Tematik PAUD</span>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-bold text-slate-500">Tingkatan Level Scaffolding</span>
                <span class="text-2xl">📈</span>
            </div>
            <div class="text-3xl font-black font-heading text-slate-800">{{ $materialsData['stats']['total_levels'] }}</div>
            <span class="text-xs font-semibold text-purple-600">Level 1, 2, dan 3</span>
        </div>
    </div>

    <!-- Filter & Category Switcher Tabs -->
    <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-xs flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
        <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl overflow-x-auto max-w-full">
            <button @click="selectedCat = 'all'"
                    class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'all' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                Semua Pulau ({{ $materialsData['stats']['total_materials'] }})
            </button>
            <template x-for="cat in categories" :key="cat.slug">
                <button @click="selectedCat = cat.slug"
                        class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer flex items-center gap-1.5"
                        :class="selectedCat === cat.slug ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    <span x-text="cat.icon_emoji"></span>
                    <span x-text="cat.name"></span>
                </button>
            </template>
        </div>

        <div class="relative w-full md:w-64">
            <input type="text" x-model="searchQuery"
                   placeholder="Cari materi / objek..."
                   class="w-full pl-9 pr-3.5 py-2.5 bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-xl text-xs font-bold outline-none">
            <span class="absolute left-3 top-2.5 text-slate-400 text-sm">🔍</span>
        </div>
    </div>

    <!-- Flashcards Grouped by Category & Level -->
    <div class="flex flex-col gap-6">
        <template x-for="cat in categories" :key="cat.slug">
            <div x-show="selectedCat === 'all' || selectedCat === cat.slug"
                 class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
                
                <!-- Category Title -->
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <div class="flex items-center gap-3">
                        <span class="text-3xl" x-text="cat.icon_emoji"></span>
                        <div>
                            <h3 class="text-xl font-black font-heading text-slate-800" x-text="cat.name"></h3>
                            <p class="text-xs font-bold text-slate-400" x-text="cat.levels.reduce((acc, l) => acc + l.cards_count, 0) + ' Kartu Pembelajaran'"></p>
                        </div>
                    </div>

                    <button @click="newCard.category_slug = cat.slug; showAddModal = true"
                            class="px-4 py-2 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 font-bold text-xs rounded-xl transition-all flex items-center gap-1.5 cursor-pointer">
                        <span>➕</span>
                        <span>Tambah ke Pulau Ini</span>
                    </button>
                </div>

                <!-- Levels Grid -->
                <div class="flex flex-col gap-5">
                    <template x-for="level in cat.levels" :key="level.id">
                        <div class="border-2 border-slate-100 rounded-2xl p-5 bg-slate-50/50">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-2">
                                    <span class="px-2.5 py-1 rounded-xl text-xs font-black"
                                          :class="level.level_num === 1 ? 'bg-emerald-100 text-emerald-800' : (level.level_num === 2 ? 'bg-amber-100 text-amber-800' : 'bg-purple-100 text-purple-800')"
                                          x-text="'Level ' + level.level_num">
                                    </span>
                                    <h4 class="font-extrabold text-sm text-slate-800" x-text="level.level_title"></h4>
                                </div>
                                <span class="text-xs font-bold text-slate-500 bg-white px-2.5 py-1 rounded-lg border border-slate-200"
                                      x-text="level.items.length + ' Kartu'"></span>
                            </div>

                            <!-- Cards in Level -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5">
                                <template x-for="item in level.items.filter(i => !searchQuery || i.title.toLowerCase().includes(searchQuery.toLowerCase()))" :key="item.id">
                                    <div class="bg-white p-4 rounded-2xl border-2 border-slate-200 hover:border-sky-300 shadow-xs flex flex-col justify-between gap-3 transition-all">
                                        <div class="flex items-start justify-between gap-2">
                                            <div class="flex items-center gap-2.5">
                                                <span class="w-10 h-10 rounded-xl bg-amber-50 border border-amber-200 flex items-center justify-center text-xl shrink-0"
                                                      x-text="item.icon_emoji || '📄'">
                                                </span>
                                                <div>
                                                    <h5 class="font-extrabold text-sm text-slate-900" x-text="item.title"></h5>
                                                    <p class="text-[11px] font-semibold text-slate-500" x-text="item.subtitle"></p>
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-1 shrink-0">
                                                <button type="button" @click="openEdit(item)" title="Edit Kartu"
                                                        class="p-1.5 bg-slate-100 hover:bg-sky-100 text-slate-600 hover:text-sky-700 rounded-lg transition-all font-bold cursor-pointer">
                                                    ✏️
                                                </button>
                                                <form :action="'{{ url('admin/materials') }}/' + item.id" method="POST"
                                                      onsubmit="return confirm('Yakin ingin menghapus kartu materi ini?')" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="Hapus Kartu"
                                                            class="p-1.5 bg-slate-100 hover:bg-rose-100 text-slate-600 hover:text-rose-700 rounded-lg transition-all font-bold cursor-pointer">
                                                        🗑️
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- Voice Script Box -->
                                        <div class="p-2.5 bg-sky-50/70 border border-sky-200 rounded-xl text-xs flex items-center justify-between gap-2">
                                            <div class="truncate">
                                                <span class="text-[10px] font-bold text-sky-800 block">🎙️ Audio TTS:</span>
                                                <p class="text-sky-950 font-semibold truncate text-[11px]" x-text="item.speech_text"></p>
                                            </div>
                                            <button type="button" @click="playSpeech(item.speech_text)" title="Uji Suara"
                                                    class="px-2 py-1 bg-white border border-sky-300 text-sky-700 font-bold text-[10px] rounded-lg shrink-0 hover:bg-sky-100 cursor-pointer">
                                                🔊 Uji
                                            </button>
                                        </div>

                                        <!-- Parent Note -->
                                        <template x-if="item.parent_note">
                                            <p class="text-[11px] text-slate-400 font-medium italic border-t border-slate-100 pt-1.5">
                                                💡 <span x-text="item.parent_note"></span>
                                            </p>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </template>
    </div>

    <!-- MODAL: TAMBAH FLASHCARD BARU (REAL DATABASE POST) -->
    <div x-show="showAddModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-sky-400 shadow-2xl relative my-8"
             @click.away="showAddModal = false">
            
            <button @click="showAddModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">➕</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Tambah Flashcard Baru</h3>
                    <p class="text-xs font-bold text-slate-500">Buat materi kartu objek baru dan simpan ke database.</p>
                </div>
            </div>

            <form action="{{ route('admin.materials.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Pulau Sasaran</label>
                        <select name="category_slug" x-model="newCard.category_slug"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <template x-for="cat in categories" :key="cat.slug">
                                <option :value="cat.slug" x-text="cat.icon_emoji + ' ' + cat.name"></option>
                            </template>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Tingkatan Level</label>
                        <select name="level_number" x-model="newCard.level_number"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option :value="1">Level 1 (Dasar / Usia 3-4)</option>
                            <option :value="2">Level 2 (Menengah / Usia 4-5)</option>
                            <option :value="3">Level 3 (Pra-SD / Usia 5-6)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Judul Materi / Objek</label>
                        <input type="text" name="title" x-model="newCard.title" required placeholder="Contoh: Kucing Persia Lucu"
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Emoji Ikon</label>
                        <input type="text" name="icon_emoji" x-model="newCard.icon_emoji" placeholder="🐱"
                               class="w-full p-3 text-center text-sm bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Subtitle (Penjelasan / Suku Kata)</label>
                    <input type="text" name="subtitle" x-model="newCard.subtitle" placeholder="Contoh: Ku-cing (2 Suku Kata)"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Naskah Pelafalan Suara (TTS)</label>
                    <textarea name="speech_text" x-model="newCard.speech_text" rows="2" placeholder="Contoh: Kucing! Hewan berbulu halus yang suka mengeong."
                              class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tips Interaksi untuk Orang Tua</label>
                    <input type="text" name="parent_note" x-model="newCard.parent_note" placeholder="Ajak anak menirukan bunyi suara meong bersama."
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showAddModal = false"
                            class="flex-1 py-3.5 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3.5 bg-sky-600 hover:bg-sky-700 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan ke Database
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- MODAL: EDIT FLASHCARD (REAL DATABASE PUT) -->
    <div x-show="showEditModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-amber-400 shadow-2xl relative my-8"
             @click.away="showEditModal = false">
            
            <button @click="showEditModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">✏️</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Edit Kartu Flashcard</h3>
                    <p class="text-xs font-bold text-slate-500">Perbarui naskah suara dan tips interaksi.</p>
                </div>
            </div>

            <form :action="'{{ url('admin/materials') }}/' + editData.id" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Judul Materi</label>
                        <input type="text" name="title" x-model="editData.title" required
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Emoji Ikon</label>
                        <input type="text" name="icon_emoji" x-model="editData.icon_emoji"
                               class="w-full p-3 text-center text-sm bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Subtitle (Penjelasan / Suku Kata)</label>
                    <input type="text" name="subtitle" x-model="editData.subtitle"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Naskah Pelafalan Suara (TTS)</label>
                    <textarea name="speech_text" x-model="editData.speech_text" rows="2"
                              class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tips Interaksi untuk Orang Tua</label>
                    <input type="text" name="parent_note" x-model="editData.parent_note"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showEditModal = false"
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

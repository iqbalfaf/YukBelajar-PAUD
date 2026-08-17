@extends('layouts.admin')

@section('title', 'Manajemen Stiker & Hadiah Prestasi - YukBelajar Admin')

@section('content')
<div class="flex flex-col gap-6 pb-16"
     x-data="{
         searchQuery: '',
         selectedCat: 'all',
         showAddModal: false,
         showEditModal: false,
         stickers: {{ Js::from($stickersData['stickers']) }},
         editData: {
             id: null,
             name: '',
             category: 'Hewan',
             icon_emoji: '🦁',
             required_stars: 10,
             description: '',
             is_special: false
         },
         newSticker: {
             name: '',
             category: 'Hewan',
             icon_emoji: '🦁',
             required_stars: 10,
             description: '',
             is_special: false
         },

         openEdit(sticker) {
             this.editData = {
                 id: sticker.id,
                 name: sticker.name,
                 category: sticker.category,
                 icon_emoji: sticker.icon_emoji,
                 required_stars: sticker.required_stars,
                 description: sticker.description,
                 is_special: sticker.is_special
             };
             this.showEditModal = true;
         }
     }">

    <!-- Top Banner -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                Panel Hadiah & Gamifikasi PAUD
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                Manajemen Buku Stiker & Hadiah Bintang
            </h2>
            <p class="text-sm text-sky-100 mt-1 max-w-xl">
                Kelola koleksi stiker kartun anak, atur syarat bintang emas pembuka, dan pantau stiker yang telah dikoleksi siswa.
            </p>
        </div>

        <button @click="showAddModal = true"
                class="px-6 py-4 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black rounded-2xl shadow-md transition-all flex items-center gap-2.5 shrink-0 hover:scale-105 cursor-pointer">
            <span class="text-2xl">➕</span>
            <span>Tambah Stiker Baru</span>
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
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-bold text-slate-500">Total Koleksi Stiker</span>
                <span class="text-2xl">🏆</span>
            </div>
            <div class="text-3xl font-black font-heading text-slate-800">{{ $stickersData['stats']['total_stickers'] }}</div>
            <span class="text-xs font-semibold text-emerald-600">Stiker Tersedia di Album Siswa</span>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-bold text-slate-500">Siswa Telah Mengoleksi</span>
                <span class="text-2xl">👶</span>
            </div>
            <div class="text-3xl font-black font-heading text-slate-800">{{ $stickersData['stats']['total_claimed'] }}</div>
            <span class="text-xs font-semibold text-purple-600">Anak Membuka Stiker Prestasi</span>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-xs flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
        <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl overflow-x-auto max-w-full">
            <button @click="selectedCat = 'all'"
                    class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'all' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                Semua Kategori ({{ count($stickersData['stickers']) }})
            </button>
            <button @click="selectedCat = 'Hewan'"
                    class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'Hewan' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                🦁 Hewan
            </button>
            <button @click="selectedCat = 'Petualang'"
                    class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'Petualang' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                🚀 Petualang
            </button>
            <button @click="selectedCat = 'Spesial'"
                    class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'Spesial' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                👑 Edisi Spesial
            </button>
        </div>

        <div class="relative w-full md:w-64">
            <input type="text" x-model="searchQuery"
                   placeholder="Cari stiker..."
                   class="w-full pl-9 pr-3.5 py-2.5 bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-xl text-xs font-bold outline-none">
            <span class="absolute left-3 top-2.5 text-slate-400 text-sm">🔍</span>
        </div>
    </div>

    <!-- Stickers Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        <template x-for="sticker in stickers.filter(s => (selectedCat === 'all' || s.category === selectedCat || (selectedCat === 'Spesial' && s.is_special)) && (!searchQuery || s.name.toLowerCase().includes(searchQuery.toLowerCase())))" :key="sticker.id">
            <div class="bg-white rounded-3xl p-5 border-2 border-slate-200 hover:border-sky-300 shadow-xs flex flex-col justify-between gap-4 transition-all">
                <div>
                    <!-- Card Top -->
                    <div class="flex items-start justify-between gap-2 mb-3">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 border-2 border-amber-200 flex items-center justify-center text-3xl shadow-xs">
                            <span x-text="sticker.icon_emoji"></span>
                        </div>

                        <div class="flex items-center gap-1">
                            <button type="button" @click="openEdit(sticker)" title="Edit Stiker"
                                    class="p-1.5 bg-slate-100 hover:bg-sky-100 text-slate-600 hover:text-sky-700 rounded-lg transition-all font-bold cursor-pointer">
                                ✏️
                            </button>
                            <form :action="'{{ url('admin/stickers') }}/' + sticker.id" method="POST"
                                  onsubmit="return confirm('Hapus stiker ini dari katalog?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Hapus Stiker"
                                        class="p-1.5 bg-slate-100 hover:bg-rose-100 text-slate-600 hover:text-rose-700 rounded-lg transition-all font-bold cursor-pointer">
                                    🗑️
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mb-1 flex-wrap">
                        <span class="px-2 py-0.5 rounded-md font-extrabold text-[10px] uppercase bg-sky-100 text-sky-800" x-text="sticker.category"></span>
                        <template x-if="sticker.is_special">
                            <span class="px-2 py-0.5 rounded-md font-extrabold text-[10px] uppercase bg-amber-100 text-amber-800">👑 Edisi Spesial</span>
                        </template>
                    </div>

                    <h4 class="font-extrabold text-base text-slate-900 leading-snug" x-text="sticker.name"></h4>
                    <p class="text-xs font-semibold text-slate-500 mt-1" x-text="sticker.description"></p>
                </div>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold">
                    <span class="text-amber-600">⭐ Syarat: <span x-text="sticker.required_stars + ' Bintang'"></span></span>
                    <span class="text-slate-400" x-text="sticker.claimed_count + 'x Diklaim'"></span>
                </div>
            </div>
        </template>
    </div>

    <!-- MODAL: TAMBAH STIKER BARU (REAL DATABASE POST) -->
    <div x-show="showAddModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-sky-400 shadow-2xl relative my-8"
             @click.away="showAddModal = false">
            
            <button @click="showAddModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">🏆</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Tambah Stiker Baru</h3>
                    <p class="text-xs font-bold text-slate-500">Tambahkan hadiah stiker baru ke katalog.</p>
                </div>
            </div>

            <form action="{{ route('admin.stickers.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                
                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nama Stiker</label>
                        <input type="text" name="name" x-model="newSticker.name" required placeholder="Contoh: Singa Emas Juara"
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Emoji Ikon</label>
                        <input type="text" name="icon_emoji" x-model="newSticker.icon_emoji" required placeholder="🦁"
                               class="w-full p-3 text-center text-sm bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori</label>
                        <select name="category" x-model="newSticker.category"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option value="Hewan">Hewan 🦁</option>
                            <option value="Petualang">Petualang 🚀</option>
                            <option value="Alam">Alam 🌳</option>
                            <option value="Prestasi">Prestasi 🏆</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Syarat Bintang</label>
                        <input type="number" name="required_stars" x-model="newSticker.required_stars" required min="0" max="500"
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Deskripsi Stiker</label>
                    <input type="text" name="description" x-model="newSticker.description" placeholder="Diberikan saat mencapai prestasi belajar..."
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <label class="flex items-center gap-2 text-xs font-bold text-slate-700 cursor-pointer">
                    <input type="checkbox" name="is_special" value="1" x-model="newSticker.is_special" class="w-4 h-4 text-sky-600 rounded">
                    <span>Stiker Edisi Spesial (Hadiah Istimewa)</span>
                </label>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showAddModal = false"
                            class="flex-1 py-3.5 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3.5 bg-sky-600 hover:bg-sky-700 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan Stiker
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- MODAL: EDIT STIKER (REAL DATABASE PUT) -->
    <div x-show="showEditModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-amber-400 shadow-2xl relative my-8"
             @click.away="showEditModal = false">
            
            <button @click="showEditModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">✏️</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Edit Stiker Hadiah</h3>
                    <p class="text-xs font-bold text-slate-500">Perbarui rincian stiker dan syarat bintang.</p>
                </div>
            </div>

            <form :action="'{{ url('admin/stickers') }}/' + editData.id" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-2">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nama Stiker</label>
                        <input type="text" name="name" x-model="editData.name" required
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Emoji Ikon</label>
                        <input type="text" name="icon_emoji" x-model="editData.icon_emoji" required
                               class="w-full p-3 text-center text-sm bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori</label>
                        <select name="category" x-model="editData.category"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option value="Hewan">Hewan 🦁</option>
                            <option value="Petualang">Petualang 🚀</option>
                            <option value="Alam">Alam 🌳</option>
                            <option value="Prestasi">Prestasi 🏆</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Syarat Bintang</label>
                        <input type="number" name="required_stars" x-model="editData.required_stars" required min="0" max="500"
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Deskripsi Stiker</label>
                    <input type="text" name="description" x-model="editData.description"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <label class="flex items-center gap-2 text-xs font-bold text-slate-700 cursor-pointer">
                    <input type="checkbox" name="is_special" value="1" :checked="editData.is_special" @change="editData.is_special = !editData.is_special" class="w-4 h-4 text-sky-600 rounded">
                    <span>Stiker Edisi Spesial</span>
                </label>

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

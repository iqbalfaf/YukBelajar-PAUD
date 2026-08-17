@extends('layouts.app')

@section('title', 'Buku Stiker Virtual - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-5xl mx-auto pb-16"
     x-data="{
         stickers: {{ Js::from($stickers) }},
         selectedCat: 'all',
         selectedSticker: null,
         openModal: false,
         inspectSticker(st) {
             this.selectedSticker = st;
             this.openModal = true;
             if (window.soundEngine) {
                 if (st.is_unlocked) {
                     window.soundEngine.playVictory();
                 } else {
                     window.soundEngine.playClick();
                 }
             }
         }
     }">

    <!-- Header Album Title & Stats Banner -->
    <div class="bg-gradient-to-r from-purple-400 via-pink-400 to-amber-300 border-4 border-purple-500 rounded-3xl p-6 sm:p-8 shadow-md text-white flex flex-col md:flex-row items-center justify-between gap-6 relative overflow-hidden">
        
        <div class="flex items-center gap-4 sm:gap-6 text-center md:text-left z-10">
            <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white/20 backdrop-blur-md rounded-full border-4 border-white/40 flex items-center justify-center text-5xl sm:text-6xl shadow-inner animate-bounce-slow shrink-0">
                🏆
            </div>
            <div>
                <span class="inline-block bg-purple-900/40 text-purple-100 font-extrabold text-xs px-3 py-1 rounded-full uppercase tracking-wider mb-1">
                    Album Prestasi Anak Ceria
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-white">
                    Buku Stiker Virtual {{ $user['name'] }}
                </h2>
                <p class="text-sm sm:text-base font-bold text-purple-100 mt-1">
                    Koleksi stiker hadiah yang kamu dapatkan setelah menamatkan kartu belajar dan kuis!
                </p>
            </div>
        </div>

        <!-- Progress Counter Widget (Real Database Data) -->
        <div class="bg-white/90 text-purple-950 p-4 sm:p-5 rounded-3xl border-3 border-purple-300 shadow-sm text-center shrink-0 z-10 w-full md:w-auto min-w-[200px]">
            <span class="text-xs font-bold uppercase tracking-wider text-purple-700">Total Koleksi</span>
            <div class="text-3xl font-extrabold font-heading text-purple-900 my-0.5">
                <span class="text-amber-500">{{ $stickersData['unlocked_count'] }}</span> / {{ $stickersData['total_count'] }} Stiker
            </div>
            <div class="w-full bg-purple-100 rounded-full h-3 overflow-hidden border border-purple-300">
                <div class="bg-gradient-to-r from-amber-400 to-yellow-500 h-full rounded-full transition-all duration-500" style="width: {{ $stickersData['progress_pct'] }}%;"></div>
            </div>
            <span class="text-[11px] font-bold text-purple-800 mt-1 block">{{ $stickersData['progress_pct'] }}% Terkumpul!</span>
        </div>

        <div class="absolute -right-10 -bottom-10 text-9xl opacity-20 pointer-events-none">✨</div>
    </div>

    <!-- Navigation & Category Filter Tabs -->
    <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
        <a href="{{ route('home') }}" 
           class="flex items-center justify-center gap-2 text-slate-700 hover:text-sky-700 font-bold text-sm bg-white hover:bg-slate-100 px-4 py-2.5 rounded-2xl border-2 border-slate-200 shadow-xs transition-all">
            <span>🏠</span>
            <span>Kembali ke Taman Petualangan</span>
        </a>

        <!-- Category Tabs -->
        <div class="flex items-center gap-1.5 bg-white p-1.5 rounded-2xl border-2 border-slate-200 overflow-x-auto shadow-xs">
            <button @click="selectedCat = 'all'"
                    class="px-3.5 py-1.5 rounded-xl font-extrabold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'all' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
                🌟 Semua (<span x-text="stickers.length"></span>)
            </button>
            <button @click="selectedCat = 'hewan'"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'hewan' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
                🦁 Hewan (<span x-text="stickers.filter(s => s.category.toLowerCase() === 'hewan').length"></span>)
            </button>
            <button @click="selectedCat = 'petualang'"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'petualang' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
                🚀 Petualang (<span x-text="stickers.filter(s => s.category.toLowerCase() === 'petualang').length"></span>)
            </button>
            <button @click="selectedCat = 'spesial'"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'spesial' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
                👑 Spesial (<span x-text="stickers.filter(s => s.category.toLowerCase() === 'spesial').length"></span>)
            </button>
            <button @click="selectedCat = 'belajar'"
                    class="px-3 py-1.5 rounded-xl font-extrabold text-xs transition-all whitespace-nowrap cursor-pointer"
                    :class="selectedCat === 'belajar' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
                🎨 Belajar (<span x-text="stickers.filter(s => s.category.toLowerCase() === 'belajar').length"></span>)
            </button>
        </div>
    </div>

    <!-- Stickers Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 sm:gap-6">
        <template x-for="st in stickers.filter(s => selectedCat === 'all' || s.category.toLowerCase() === selectedCat.toLowerCase())" :key="st.id">
            <div @click="inspectSticker(st)"
                 class="card-bubbly p-5 sm:p-6 flex flex-col items-center justify-center text-center cursor-pointer border-4 transition-all relative group"
                 :class="st.is_unlocked ? 'border-purple-300 hover:border-purple-500 hover:scale-105 bg-white shadow-xs' : 'border-slate-200 bg-slate-100/70 opacity-70 hover:opacity-90'">
                
                <!-- Unlocked Sticker Glow & Badge -->
                <template x-if="st.is_unlocked">
                    <span class="absolute top-2 right-2 px-2 py-0.5 bg-amber-400 text-amber-950 rounded-full text-[10px] font-extrabold uppercase shadow-2xs">
                        Terbuka ✨
                    </span>
                </template>
                <template x-if="!st.is_unlocked">
                    <span class="absolute top-2 right-2 text-base">🔒</span>
                </template>

                <!-- Sticker Visual -->
                <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full flex items-center justify-center text-5xl sm:text-6xl mb-3 shadow-inner select-none transition-transform group-hover:scale-110"
                     :class="st.is_unlocked ? 'bg-gradient-to-br from-amber-100 to-purple-100 border-3 border-purple-200' : 'bg-slate-200 border-2 border-slate-300 grayscale'">
                    <span x-html="st.is_unlocked ? window.twemojiParse(st.emoji) : '🔒'"></span>
                </div>

                <!-- Sticker Name & Category -->
                <h4 class="font-extrabold font-heading text-base sm:text-lg text-slate-800 line-clamp-1"
                    x-text="st.is_unlocked ? st.name : 'Stiker Rahasia'">
                </h4>

                <div class="flex flex-col items-center gap-0.5 mt-0.5">
                    <span class="text-xs font-bold capitalize"
                          :class="st.is_unlocked ? 'text-purple-600 font-extrabold' : 'text-slate-400'"
                          x-text="st.category">
                    </span>
                    <template x-if="!st.is_unlocked">
                        <span class="px-2 py-0.5 bg-amber-50 border border-amber-300 text-amber-900 rounded-full text-[10px] font-black mt-0.5"
                              x-text="`⭐ ${st.required_stars} Bintang`"></span>
                    </template>
                </div>
            </div>
        </template>
    </div>

    <!-- Sticker Detail Modal -->
    <div x-show="openModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-sm w-full border-4 border-purple-400 shadow-2xl text-center relative"
             @click.away="openModal = false">
            
            <button @click="openModal = false" 
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 font-black text-xl cursor-pointer">
                ✖
            </button>

            <template x-if="selectedSticker">
                <div>
                    <div class="w-32 h-32 rounded-full mx-auto mb-4 flex items-center justify-center text-7xl shadow-lg border-4"
                         :class="selectedSticker.is_unlocked ? 'bg-gradient-to-tr from-amber-200 via-pink-100 to-purple-200 border-purple-400 animate-wiggle' : 'bg-slate-200 border-slate-300 grayscale'">
                        <span x-html="selectedSticker.is_unlocked ? window.twemojiParse(selectedSticker.emoji) : '🔒'"></span>
                    </div>

                    <h3 class="text-2xl font-extrabold font-heading text-purple-950 mb-1"
                        x-text="selectedSticker.is_unlocked ? selectedSticker.name : 'Stiker Masih Terkunci'">
                    </h3>

                    <div class="flex items-center justify-center gap-1.5 mb-3 flex-wrap">
                        <span class="inline-block px-3 py-0.5 rounded-full text-xs font-bold text-purple-800 bg-purple-100"
                              x-text="selectedSticker.category">
                        </span>
                        <span class="inline-block px-3 py-0.5 rounded-full text-xs font-black bg-amber-100 text-amber-900 border border-amber-300"
                              x-text="`⭐ ${selectedSticker.required_stars} Bintang`">
                        </span>
                    </div>

                    <div class="bg-purple-50 border border-purple-200 rounded-2xl p-4 mb-6 text-left">
                        <template x-if="selectedSticker.is_unlocked">
                            <div>
                                <p class="text-xs font-bold text-slate-500 mb-1">Karakter Istimewa:</p>
                                <p class="text-sm font-extrabold text-purple-900" x-text="`&ldquo;${selectedSticker.hint}&rdquo;`"></p>
                                <p class="text-[11px] text-purple-700 mt-2 font-bold">✨ Sudah menjadi koleksi pialamu!</p>
                            </div>
                        </template>
                        <template x-if="!selectedSticker.is_unlocked">
                            <div>
                                <p class="text-xs font-bold text-amber-800 mb-1">🎯 Syarat Membuka:</p>
                                <p class="text-xs font-bold text-slate-700 mb-2" x-text="selectedSticker.hint"></p>
                                <p class="text-xs font-extrabold text-amber-900 bg-amber-100/80 p-2 rounded-xl border border-amber-300"
                                   x-text="`Ayo kumpulkan hingga ${selectedSticker.required_stars} ⭐ Bintang Emas untuk membuka stiker ini!`"></p>
                            </div>
                        </template>
                    </div>

                    <button @click="openModal = false" 
                            class="w-full py-3 btn-3d btn-3d-purple rounded-2xl text-white font-bold">
                        Tutup
                    </button>
                </div>
            </template>

        </div>
    </div>

</div>
@endsection

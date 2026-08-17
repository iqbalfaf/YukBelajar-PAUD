@extends('layouts.app')

@section('title', 'YukBelajar PAUD - Game Petualangan Belajar & Kuis Ceria')

@section('content')
<div class="flex flex-col gap-10 sm:gap-14 pb-16"
     x-data="{
         speakHero() {
             if (window.soundEngine) {
                 window.soundEngine.speak('Hore! Selamat datang di YukBelajar PAUD! Ayo kita bermain, belajar flashcard bersuara, dan kumpulkan banyak bintang emas bersama Kiki!');
                 window.soundEngine.playVictory();
             }
         }
     }">

    <!-- Hero Section with Game Aesthetic -->
    <section class="relative bg-gradient-to-br from-amber-300 via-yellow-200 to-sky-200 border-4 border-amber-400 rounded-3xl p-6 sm:p-12 shadow-xl overflow-hidden">
        <div class="max-w-4xl mx-auto flex flex-col items-center text-center relative z-10">
            
            <!-- Top Playful Badge -->
            <div class="inline-flex items-center gap-2 bg-amber-500/90 text-white font-extrabold text-xs sm:text-sm px-4 py-1.5 rounded-full mb-4 shadow-sm uppercase tracking-wider animate-bounce-slow">
                <span>⭐</span>
                <span>100% Edukasi Terbuka Ramah Anak Usia Dini (Usia 3–6 Tahun)</span>
                <span>⭐</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black font-heading text-amber-950 leading-tight mb-4">
                Petualangan Belajar Digital <br class="hidden sm:inline">
                <span class="text-sky-700 underline decoration-wavy decoration-amber-400">Paling Ceria & Penuh Suara!</span> 🌟
            </h1>

            <!-- Subtitle -->
            <p class="text-base sm:text-xl font-bold text-amber-950/80 max-w-2xl mb-8 leading-relaxed">
                Platform interaktif berkonsep game petualangan pulau dengan <span class="text-amber-900 font-extrabold">Flashcard Bersuara</span>, <span class="text-amber-900 font-extrabold">Kuis Bergambar</span> berhadiah bintang & stiker, serta <span class="text-purple-900 font-extrabold">Piala & Lencana Prestasi</span> yang membanggakan!
            </p>

            <!-- Mascot Kiki Speech Banner -->
            <div class="bg-white/95 border-3 border-amber-400 rounded-3xl p-4 sm:p-5 shadow-md flex items-center gap-4 mb-8 max-w-lg hover:scale-105 transition-transform cursor-pointer"
                 @click="speakHero()">
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-amber-100 rounded-full border-3 border-amber-400 flex items-center justify-center text-5xl shrink-0 animate-wiggle">
                    🐱
                </div>
                <div class="text-left">
                    <span class="text-[11px] font-black uppercase text-amber-600">🐱 Kiki si Kucing Pintar:</span>
                    <p class="text-sm sm:text-base font-extrabold text-slate-800 leading-snug">
                        "Hai teman kecil! Sentuh aku untuk mendengar suara ceriaku! 🔊"
                    </p>
                </div>
            </div>

            <!-- Big Action CTAs -->
            <div class="flex flex-wrap items-center justify-center gap-4 w-full">
                @auth
                    <a href="{{ route('home') }}" 
                       @click="if(window.soundEngine) window.soundEngine.playVictory()"
                       class="btn-3d btn-3d-yellow py-4 sm:py-5 px-8 sm:px-10 rounded-3xl text-lg sm:text-2xl font-black text-amber-950 flex items-center gap-3 shadow-lg hover:scale-105">
                        <span class="text-3xl animate-bounce-slow">🎮</span>
                        <span>LANJUTKAN PETUALANGAN ({{ auth()->user()->name }})!</span>
                    </a>
                @else
                    <a href="{{ route('home') }}" 
                       @click="if(window.soundEngine) window.soundEngine.playVictory()"
                       class="btn-3d btn-3d-yellow py-4 sm:py-5 px-8 sm:px-10 rounded-3xl text-lg sm:text-2xl font-black text-amber-950 flex items-center gap-3 shadow-lg hover:scale-105">
                        <span class="text-3xl animate-bounce-slow">🎮</span>
                        <span>MULAI MAIN PETUALANGAN!</span>
                    </a>

                    <a href="{{ route('register') }}" 
                       class="btn-3d btn-3d-sky py-4 sm:py-5 px-8 sm:px-10 rounded-3xl text-lg sm:text-xl font-black text-white flex items-center gap-3 shadow-lg">
                        <span class="text-2xl">✨</span>
                        <span>Daftar Akun Baru (+10 ⭐)</span>
                    </a>

                    <a href="{{ route('login') }}" 
                       class="btn-3d btn-3d-white py-4 sm:py-5 px-6 sm:px-8 rounded-3xl text-base sm:text-lg font-black text-slate-700 flex items-center gap-2">
                        <span>🔑</span>
                        <span>Masuk Akun</span>
                    </a>
                @endauth
            </div>

        </div>

        <!-- Floating Decorative Assets -->
        <div class="absolute -left-10 -bottom-10 text-9xl opacity-20 pointer-events-none">🏝️</div>
        <div class="absolute -right-8 -top-8 text-9xl opacity-20 pointer-events-none">☀️</div>
    </section>

    <!-- Real Database Live Platform Stats Counter Bar -->
    <section class="grid grid-cols-2 lg:grid-cols-4 gap-3.5 sm:gap-4">
        
        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-amber-300 shadow-sm flex items-center gap-3.5">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-100 border-2 border-amber-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                📚
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_materials'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Flashcard Interaktif Aktif</p>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-sky-300 shadow-sm flex items-center gap-3.5">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-sky-100 border-2 border-sky-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                🎯
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_quizzes'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Bank Modul Kuis Ceria</p>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-purple-300 shadow-sm flex items-center gap-3.5">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-purple-100 border-2 border-purple-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                👶
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_students'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Siswa Petualang Cilik</p>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-3xl border-3 border-yellow-300 shadow-sm flex items-center gap-3.5">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-yellow-100 border-2 border-yellow-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                ⭐
            </div>
            <div>
                <div class="text-2xl sm:text-3xl font-black font-heading text-slate-800">{{ $platformStats['total_stars'] }}</div>
                <p class="text-[11px] sm:text-xs font-bold text-slate-500">Bintang Emas Dikumpulkan</p>
            </div>
        </div>

    </section>

    <!-- 6 Adventure Islands Showcase (Real Data Database) -->
    <section class="flex flex-col gap-6">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-black uppercase tracking-wider text-sky-700 bg-sky-100 px-3.5 py-1 rounded-full">
                🗺️ Peta Dunia Belajar (Real Database)
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold font-heading text-slate-800 mt-2">
                Jelajahi 6 Pulau Petualangan Seru
            </h2>
            <p class="text-sm sm:text-base font-bold text-slate-600">
                Setiap pulau menyimpan puluhan kartu bergambar dengan suara asli dan kuis tantangan bintang!
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach($categories as $cat)
            <a href="{{ route('materials', $cat['slug']) }}" 
               class="card-bubbly p-4 sm:p-5 flex flex-col items-center text-center gap-2 border-4 hover:scale-105 transition-all group"
               style="border-color: {{ $cat['border_color'] }}40;">
                <span class="text-5xl sm:text-6xl group-hover:scale-120 group-hover:rotate-6 transition-transform">
                    {{ $cat['icon_emoji'] }}
                </span>
                <h3 class="font-extrabold font-heading text-sm sm:text-base text-slate-800 mt-1">
                    {{ $cat['name'] }}
                </h3>
                <span class="text-[11px] font-bold text-slate-500">
                    {{ $cat['materials_count'] }} Kartu Materi
                </span>
                <span class="text-[10px] px-2 py-0.5 bg-slate-100 rounded-full font-bold text-slate-600">
                    {{ $cat['recommended_age'] }}
                </span>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Real Sticker Album Showcase -->
    <section class="bg-gradient-to-r from-purple-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-6 sm:p-10 shadow-lg border-4 border-purple-700">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-8">
            <div>
                <span class="inline-block px-3 py-1 bg-purple-500/30 text-purple-300 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                    🏆 Album Koleksi Virtual
                </span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-white">
                    12 Stiker Karakter Petualangan Unik
                </h2>
                <p class="text-xs sm:text-sm text-purple-200 mt-1 max-w-xl">
                    Kumpulkan seluruh karakter stiker ramah anak dengan menamatkan modul kuis dan menaikkan perolehan bintang emas!
                </p>
            </div>
            <a href="{{ route('stickers') }}" class="px-5 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black text-xs sm:text-sm rounded-2xl shadow-md transition-all shrink-0">
                Buka Album Stiker 🏆
            </a>
        </div>

        <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-3">
            @foreach($stickers as $stk)
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-3 rounded-2xl flex flex-col items-center text-center gap-1 hover:scale-105 transition-transform">
                <span class="text-3xl sm:text-4xl">{{ $stk['emoji'] }}</span>
                <span class="text-xs font-bold text-white line-clamp-1 mt-1">{{ $stk['name'] }}</span>
                <span class="text-[9px] px-1.5 py-0.2 rounded-full font-black uppercase {{ $stk['rarity'] === 'legendary' ? 'bg-amber-400 text-amber-950' : ($stk['rarity'] === 'rare' ? 'bg-purple-400 text-purple-950' : 'bg-slate-300 text-slate-900') }}">
                    {{ $stk['rarity'] }}
                </span>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Key Product Features (4 Pillars) -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Feature 1 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-sky-200 shadow-sm flex flex-col gap-3">
            <div class="w-14 h-14 bg-sky-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-sky-300">
                🔊
            </div>
            <h3 class="text-xl font-extrabold font-heading text-sky-950">Flashcard Bersuara</h3>
            <p class="text-xs sm:text-sm font-semibold text-slate-600 leading-relaxed">
                Kartu ilustrasi besar dengan pelafalan bahasa Indonesia ceria dan suara tiruan objek alami (hewan/kendaraan).
            </p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-yellow-200 shadow-sm flex flex-col gap-3">
            <div class="w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-yellow-300">
                🎯
            </div>
            <h3 class="text-xl font-extrabold font-heading text-yellow-950">Kuis Ramah Anak</h3>
            <p class="text-xs sm:text-sm font-semibold text-slate-600 leading-relaxed">
                Pilihan kartu bergambar sentuh besar, umpan balik suara ceria, dan hujan konfeti kemenangan tanpa rasa takut salah.
            </p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-purple-200 shadow-sm flex flex-col gap-3">
            <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-purple-300">
                🏆
            </div>
            <h3 class="text-xl font-extrabold font-heading text-purple-950">Buku Stiker Hadiah</h3>
            <p class="text-xs sm:text-sm font-semibold text-slate-600 leading-relaxed">
                Koleksi 12 karakter stiker virtual yang bisa dibuka dengan menyelesaikan modul belajar dan mengumpulkan bintang.
            </p>
        </div>

        <!-- Feature 4 -->
        <div class="bg-white rounded-3xl p-6 sm:p-7 border-4 border-emerald-200 shadow-sm flex flex-col gap-3">
            <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-3xl border-2 border-emerald-300">
                🎖️
            </div>
            <h3 class="text-xl font-extrabold font-heading text-emerald-950">Piala & Sertifikat</h3>
            <p class="text-xs sm:text-sm font-semibold text-slate-600 leading-relaxed">
                Raih lencana pahlawan, ganti aksesori avatar dengan mahkota, serta unduh piagam kelulusan pulau siap cetak!
            </p>
        </div>

    </section>

    <!-- Easy 3-Step Guide for Parents & Teachers -->
    <section class="bg-gradient-to-r from-sky-400 to-indigo-500 text-white rounded-3xl p-6 sm:p-10 shadow-lg border-4 border-sky-300">
        <div class="text-center max-w-xl mx-auto mb-8">
            <span class="text-xs font-black uppercase tracking-wider text-sky-100 bg-white/20 px-3 py-1 rounded-full">
                🚀 Cara Mulai Mudah
            </span>
            <h2 class="text-2xl sm:text-3xl font-black font-heading mt-2">
                3 Langkah Praktis Belajar Ceria
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20 flex flex-col items-center">
                <span class="w-12 h-12 bg-yellow-400 text-yellow-950 rounded-full flex items-center justify-center font-black text-xl mb-3 shadow-sm">1</span>
                <h4 class="text-lg font-bold font-heading mb-1">Pilih Avatar Hewan</h4>
                <p class="text-xs text-sky-100 font-semibold">Pilih karakter favorit (Dino, Kucing, Singa, Kelinci) dan masukkan nama anak.</p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20 flex flex-col items-center">
                <span class="w-12 h-12 bg-yellow-400 text-yellow-950 rounded-full flex items-center justify-center font-black text-xl mb-3 shadow-sm">2</span>
                <h4 class="text-lg font-bold font-heading mb-1">Buka Pulau Materi</h4>
                <p class="text-xs text-sky-100 font-semibold">Dengarkan suara objek flashcard dan tirukan bunyi suara cerianya.</p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20 flex flex-col items-center">
                <span class="w-12 h-12 bg-yellow-400 text-yellow-950 rounded-full flex items-center justify-center font-black text-xl mb-3 shadow-sm">3</span>
                <h4 class="text-lg font-bold font-heading mb-1">Main Kuis & Raih Stiker</h4>
                <p class="text-xs text-sky-100 font-semibold">Jawab soal kuis bergambar, raih bintang emas, dan lengkapi buku stiker!</p>
            </div>

        </div>
    </section>

    <!-- Bottom CTA Card -->
    <section class="bg-gradient-to-r from-yellow-300 via-amber-300 to-orange-300 border-4 border-amber-400 rounded-3xl p-8 sm:p-12 text-center shadow-lg flex flex-col items-center gap-6">
        <span class="text-6xl animate-bounce-slow">🎉</span>
        <div>
            <h2 class="text-3xl sm:text-5xl font-black font-heading text-amber-950 mb-2">
                Siap Memulai Petualangan Seru?
            </h2>
            <p class="text-base sm:text-lg font-bold text-amber-900 max-w-xl mx-auto">
                Bantu tumbuh kembang buah hati dengan cara belajar yang menyenangkan, interaktif, dan ramah anak.
            </p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('home') }}" 
               class="btn-3d btn-3d-yellow py-4 px-8 rounded-2xl text-xl font-black text-amber-950 shadow-md">
                🎮 Buka Petualangan Sekarang!
            </a>
            <a href="{{ route('admin.dashboard') }}" 
               class="btn-3d btn-3d-white py-4 px-6 rounded-2xl text-base font-bold text-slate-700 shadow-md">
                👨‍🏫 Masuk Panel Guru / Admin
            </a>
        </div>
    </section>

</div>
@endsection

@extends('layouts.app')

@section('title', 'Daftar Akun Baru - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-2xl mx-auto pb-16"
     x-data="{
         selectedAvatar: '{{ old('avatar_icon', 'dino') }}',
         username: '{{ old('username', '') }}',
         password: '',
         childName: '{{ old('name', '') }}',
         childAge: '{{ old('age', '4') }}',
         avatars: {{ Js::from($avatars) }},
         
         pickAvatar(av) {
             this.selectedAvatar = av.key;
             if (window.soundEngine) {
                 window.soundEngine.playCorrect();
                 window.soundEngine.speak('Karakter ' + av.name + '! Pilihan yang sangat hebat!');
             }
         },

         generateUsername() {
             if (this.childName.trim()) {
                 const clean = this.childName.trim().toLowerCase().replace(/[^a-z0-9]/g, '');
                 const rand = Math.floor(Math.random() * 90 + 10);
                 this.username = `${clean}_${rand}`;
             }
         }
     }">

    <!-- Top Heading Banner -->
    <div class="bg-gradient-to-r from-sky-400 via-indigo-400 to-purple-400 border-4 border-sky-400 rounded-3xl p-6 sm:p-8 text-center text-white shadow-md relative overflow-hidden">
        <span class="text-5xl sm:text-6xl inline-block mb-2 animate-bounce-slow">✨</span>
        <h2 class="text-3xl sm:text-4xl font-black font-heading text-white">
            DAFTAR AKUN PETUALANG CILIK
        </h2>
        <p class="text-sm sm:text-base font-bold text-sky-100 mt-1">
            Daftarkan akun dengan <span class="text-amber-300 font-extrabold underline">Username Unik</span> dan dapatkan <span class="text-amber-300 font-extrabold">10 Bintang Emas Pertama!</span> ⭐
        </p>
    </div>

    <!-- Error Alert Box -->
    @if ($errors->any())
        <div class="p-4 bg-rose-50 border-3 border-rose-400 rounded-2xl text-rose-900 text-sm font-bold shadow-sm flex items-start gap-3 animate-shake">
            <span class="text-2xl shrink-0">⚠️</span>
            <div class="flex flex-col gap-0.5">
                <span class="font-extrabold text-rose-950">Ada data yang perlu diperiksa:</span>
                <ul class="list-disc list-inside text-xs font-semibold">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Registration Card -->
    <div class="bg-white border-4 border-sky-200 rounded-3xl p-6 sm:p-8 shadow-lg">
        
        <form action="{{ route('register.post') }}" method="POST" class="flex flex-col gap-6">
            @csrf
            
            <input type="hidden" name="avatar_icon" :value="selectedAvatar">

            <!-- Step 1: Choose Avatar -->
            <div>
                <label class="block text-xs font-black uppercase text-slate-700 mb-2 flex items-center gap-1.5">
                    <span>🐾</span>
                    <span>1. Pilih Karakter Maskot Avatar Favoritmu:</span>
                </label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <template x-for="av in avatars" :key="av.key">
                        <button type="button" @click="pickAvatar(av)"
                                class="p-3.5 rounded-2xl border-3 flex flex-col items-center justify-center gap-1.5 transition-all cursor-pointer group"
                                :class="selectedAvatar === av.key ? 'border-sky-400 bg-sky-50 scale-105 shadow-md ring-3 ring-sky-200' : 'border-slate-200 hover:border-sky-300 bg-slate-50'">
                            <span class="text-4xl sm:text-5xl group-hover:scale-110 transition-transform select-none" x-text="av.emoji"></span>
                            <span class="text-xs font-bold text-slate-800" x-text="av.name"></span>
                            <template x-if="selectedAvatar === av.key">
                                <span class="text-[10px] px-2 py-0.2 bg-sky-500 text-white font-black rounded-full uppercase">
                                    Dipilih ✨
                                </span>
                            </template>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Step 2: Nama Panggilan Anak & Usia Belajar -->
            <div>
                <label class="block text-xs font-black uppercase text-slate-700 mb-2 flex items-center gap-1.5">
                    <span>👶</span>
                    <span>2. Data Anak (Nama & Usia Belajar):</span>
                </label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="reg_name" class="block text-xs font-bold text-slate-600 mb-1">Nama Panggilan Anak</label>
                        <input type="text" id="reg_name" name="name" x-model="childName" @input="if(!username) generateUsername()" required
                               placeholder="Contoh: Alif / Nayla"
                               class="w-full p-3.5 text-base font-extrabold bg-slate-50 border-3 border-slate-300 focus:border-sky-500 rounded-2xl outline-none">
                    </div>

                    <div>
                        <label for="reg_age" class="block text-xs font-bold text-slate-600 mb-1">Usia Belajar</label>
                        <select id="reg_age" name="age" x-model="childAge"
                                class="w-full p-3.5 text-sm font-bold bg-slate-50 border-3 border-slate-300 focus:border-sky-500 rounded-2xl outline-none cursor-pointer">
                            <option value="3">3 Tahun (Batita / PAUD Awal)</option>
                            <option value="4">4 Tahun (PAUD A)</option>
                            <option value="5">5 Tahun (TK A)</option>
                            <option value="6">6 Tahun (TK B / Pra-SD)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Step 3: Username & Password (Kunci Login Unik) -->
            <div class="bg-sky-50/70 border-3 border-sky-200 rounded-3xl p-5 sm:p-6">
                <label class="block text-xs font-black uppercase text-sky-900 mb-1 flex items-center gap-1.5">
                    <span>🔑</span>
                    <span>3. Akun Login Unik (Username & Password):</span>
                </label>
                <p class="text-xs text-sky-800 font-semibold mb-4">
                    Username unik digunakan saat login agar tidak tertukar dengan anak lain yang memiliki nama panggilan sama.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="reg_username" class="block text-xs font-bold text-slate-700">Username Unik</label>
                            <button type="button" @click="generateUsername()" class="text-[11px] font-bold text-sky-600 hover:underline cursor-pointer">
                                🎲 Buat Otomatis
                            </button>
                        </div>
                        <input type="text" id="reg_username" name="username" x-model="username" required
                               placeholder="Contoh: alif_ceria12"
                               class="w-full p-3.5 text-sm font-extrabold bg-white border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none lowercase">
                    </div>

                    <div>
                        <label for="reg_password" class="block text-xs font-bold text-slate-700 mb-1">Password Akun / PIN</label>
                        <input type="password" id="reg_password" name="password" x-model="password" required
                               placeholder="Minimal 4 karakter / PIN"
                               class="w-full p-3.5 text-sm font-bold bg-white border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none">
                    </div>
                </div>
            </div>

            <!-- Big Submit CTA -->
            <button type="submit"
                    class="w-full py-5 btn-3d btn-3d-yellow rounded-2xl text-lg sm:text-xl font-black text-amber-950 shadow-lg flex items-center justify-center gap-3 mt-2 cursor-pointer">
                <span class="text-3xl animate-bounce-slow">🎉</span>
                <span>BUAT AKUN & DAPATKAN 10 BINTANG GRATIS!</span>
            </button>

        </form>

        <!-- Bottom Link to Login -->
        <div class="mt-6 pt-6 border-t border-slate-100 text-center">
            <p class="text-sm font-bold text-slate-600">
                Sudah memiliki akun petualang?
                <a href="{{ route('login') }}" class="text-sky-600 hover:text-sky-700 font-extrabold underline ml-1">
                    Masuk dengan Username 🔑
                </a>
            </p>
        </div>

    </div>

</div>
@endsection

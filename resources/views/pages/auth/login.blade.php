@extends('layouts.app')

@section('title', 'Masuk Akun Petualang - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-xl mx-auto pb-16"
     x-data="{
         authMode: '{{ old('auth_mode', 'student') }}',
         selectedAvatar: 'dino',
         studentUsername: '{{ old('username', 'alif_ceria') }}',
         studentPassword: 'password123',
         adultLoginId: '{{ old('login_id', 'guru@kuybelajar.id') }}',
         adultPassword: 'password123',
         avatars: {{ Js::from($avatars) }},
         
         switchMode(mode) {
             this.authMode = mode;
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 if (mode === 'student') {
                     window.soundEngine.speak('Halo Teman Kecil! Masukkan username dan passwordmu yuk!');
                 } else {
                     window.soundEngine.speak('Selamat datang di Portal Guru dan Orang Tua.');
                 }
             }
         },

         pickAvatar(av) {
             this.selectedAvatar = av.key;
             if (window.soundEngine) {
                 window.soundEngine.playCorrect();
                 window.soundEngine.speak('Karakter ' + av.name + ' siap bermain!');
             }
         },

         fillDemoAccount(type) {
             if (type === 'alif') {
                 this.authMode = 'student';
                 this.studentUsername = 'alif_ceria';
                 this.studentPassword = 'password123';
                 this.selectedAvatar = 'dino';
             } else if (type === 'nayla') {
                 this.authMode = 'student';
                 this.studentUsername = 'nayla_pintar';
                 this.studentPassword = 'password123';
                 this.selectedAvatar = 'kucing';
             } else if (type === 'guru') {
                 this.authMode = 'adult';
                 this.adultLoginId = 'guru@kuybelajar.id';
                 this.adultPassword = 'password123';
             }
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
             }
         }
     }">

    <!-- Top Heading Banner -->
    <div class="bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-200 border-4 border-amber-400 rounded-3xl p-6 text-center shadow-md">
        <span class="text-5xl inline-block mb-2 animate-bounce-slow">🔑</span>
        <h2 class="text-3xl font-black font-heading text-amber-950">
            MASUK AKUN PETUALANG
        </h2>
        <p class="text-sm font-bold text-amber-900 mt-0.5">
            Gunakan <span class="underline font-extrabold">Username Unik</span> dan Password untuk masuk!
        </p>
    </div>

    <!-- Error Alert Box -->
    @if ($errors->any())
        <div class="p-4 bg-rose-50 border-3 border-rose-400 rounded-2xl text-rose-900 text-sm font-bold shadow-sm flex items-start gap-3 animate-shake">
            <span class="text-2xl shrink-0">⚠️</span>
            <div class="flex flex-col gap-0.5">
                <span class="font-extrabold text-rose-950">Ups, ada yang belum pas:</span>
                <ul class="list-disc list-inside text-xs font-semibold">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="p-4 bg-rose-50 border-3 border-rose-400 rounded-2xl text-rose-900 text-sm font-bold shadow-sm flex items-center gap-3">
            <span class="text-2xl shrink-0">🚫</span>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    @if (session('success'))
        <div class="p-4 bg-emerald-50 border-3 border-emerald-400 rounded-2xl text-emerald-950 text-sm font-bold shadow-sm flex items-center gap-3">
            <span class="text-2xl shrink-0">✨</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Mode Switcher Tabs -->
    <div class="grid grid-cols-2 gap-3 bg-white/80 p-2 rounded-2xl border-3 border-sky-300 shadow-xs">
        <button type="button" @click="switchMode('student')"
                class="py-3 px-4 rounded-xl font-extrabold text-sm sm:text-base flex items-center justify-center gap-2 transition-all cursor-pointer"
                :class="authMode === 'student' ? 'btn-3d btn-3d-yellow text-amber-950 shadow-sm scale-102' : 'text-slate-600 hover:bg-slate-100'">
            <span class="text-xl">👶</span>
            <span>Mode Siswa Cilik</span>
        </button>

        <button type="button" @click="switchMode('adult')"
                class="py-3 px-4 rounded-xl font-extrabold text-sm sm:text-base flex items-center justify-center gap-2 transition-all cursor-pointer"
                :class="authMode === 'adult' ? 'btn-3d btn-3d-sky text-white shadow-sm scale-102' : 'text-slate-600 hover:bg-slate-100'">
            <span class="text-xl">👨‍🏫</span>
            <span>Guru / Orang Tua</span>
        </button>
    </div>

    <!-- Quick Demo Accounts Helper Strip -->
    <div class="bg-amber-50/90 border-2 border-dashed border-amber-300 rounded-2xl p-3.5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2.5">
        <div class="flex items-center gap-2 text-xs font-bold text-amber-950">
            <span>⚡</span>
            <span>Akun Demo Cepat:</span>
        </div>
        <div class="flex items-center gap-2 flex-wrap">
            <button type="button" @click="fillDemoAccount('alif')" 
                    class="px-2.5 py-1 bg-white hover:bg-amber-100 text-amber-950 font-black text-xs rounded-xl border border-amber-300 transition-all cursor-pointer">
                🦖 Alif (Siswa)
            </button>
            <button type="button" @click="fillDemoAccount('nayla')" 
                    class="px-2.5 py-1 bg-white hover:bg-amber-100 text-amber-950 font-black text-xs rounded-xl border border-amber-300 transition-all cursor-pointer">
                🐱 Nayla (Siswa)
            </button>
            <button type="button" @click="fillDemoAccount('guru')" 
                    class="px-2.5 py-1 bg-sky-500 hover:bg-sky-400 text-white font-black text-xs rounded-xl border border-sky-600 transition-all cursor-pointer">
                👨‍🏫 Pak Guru Iqbal (Admin)
            </button>
        </div>
    </div>

    <!-- Main Login Card -->
    <div class="bg-white border-4 border-amber-300 rounded-3xl p-6 sm:p-8 shadow-lg">

        <!-- 1. Student Quick Login Mode with Unique Username -->
        <div x-show="authMode === 'student'" x-cloak>
            <form action="{{ route('login.post') }}" method="POST" class="flex flex-col gap-5">
                @csrf
                <input type="hidden" name="auth_mode" value="student">
                
                <div>
                    <label class="block text-xs font-black uppercase text-slate-700 mb-2">
                        1. Sentuh Karakter Avatarmu:
                    </label>
                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-2.5">
                        <template x-for="av in avatars.slice(0, 6)" :key="av.key">
                            <button type="button" @click="pickAvatar(av)"
                                    class="p-2.5 rounded-2xl border-3 flex flex-col items-center justify-center gap-1 transition-all cursor-pointer"
                                    :class="selectedAvatar === av.key ? 'border-amber-400 bg-amber-50 scale-105 shadow-sm ring-3 ring-amber-200' : 'border-slate-200 hover:border-amber-300 bg-slate-50'">
                                <span class="text-3xl sm:text-4xl select-none" x-text="av.emoji"></span>
                                <span class="text-[10px] font-bold text-slate-700 line-clamp-1" x-text="av.name"></span>
                            </button>
                        </template>
                    </div>
                </div>

                <div>
                    <label for="student_username" class="block text-xs font-bold text-slate-700 mb-1.5">Username Akun Siswa</label>
                    <input type="text" id="student_username" name="username" x-model="studentUsername" required
                           placeholder="Contoh: alif_ceria"
                           class="w-full p-4 text-base font-extrabold bg-slate-50 border-3 border-slate-300 focus:border-amber-400 rounded-2xl outline-none lowercase">
                </div>

                <div>
                    <label for="student_password" class="block text-xs font-bold text-slate-700 mb-1.5">Password Akun / PIN</label>
                    <input type="password" id="student_password" name="password" x-model="studentPassword" required placeholder="••••••••"
                           class="w-full p-4 text-base font-black bg-slate-50 border-3 border-slate-300 focus:border-amber-400 rounded-2xl outline-none">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember_student" name="remember" value="1" checked
                           class="w-4 h-4 text-amber-500 rounded border-slate-300 focus:ring-amber-400 cursor-pointer">
                    <label for="remember_student" class="text-xs font-bold text-slate-600 cursor-pointer">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit"
                        class="w-full py-4 btn-3d btn-3d-yellow rounded-2xl text-xl font-black text-amber-950 shadow-md flex items-center justify-center gap-2 mt-2 cursor-pointer">
                    <span class="text-2xl animate-bounce-slow">🚀</span>
                    <span>MASUK KE TAMAN BELAJAR!</span>
                </button>

            </form>
        </div>

        <!-- 2. Adult (Teacher/Parent) Login Mode -->
        <div x-show="authMode === 'adult'" x-cloak>
            <form action="{{ route('login.post') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="hidden" name="auth_mode" value="adult">
                
                <div>
                    <label for="adult_login_id" class="block text-xs font-bold text-slate-700 mb-1.5">Email / Username Guru atau Orang Tua</label>
                    <input type="text" id="adult_login_id" name="login_id" x-model="adultLoginId" required
                           placeholder="guru@kuybelajar.id atau pak_guru_iqbal"
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-3 border-slate-300 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label for="adult_password" class="block text-xs font-bold text-slate-700 mb-1.5">Password Akun</label>
                    <input type="password" id="adult_password" name="password" x-model="adultPassword" required placeholder="••••••••"
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-3 border-slate-300 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember_adult" name="remember" value="1" checked
                           class="w-4 h-4 text-sky-500 rounded border-slate-300 focus:ring-sky-400 cursor-pointer">
                    <label for="remember_adult" class="text-xs font-bold text-slate-600 cursor-pointer">Ingat saya di perangkat ini</label>
                </div>

                <div class="p-3 bg-sky-50 border border-sky-200 rounded-2xl text-xs text-sky-900 font-semibold">
                    💡 <span class="font-bold">Akses Admin:</span> Akun Guru & Administrator akan otomatis dialihkan ke Dashboard Manajemen Kurikulum.
                </div>

                <button type="submit"
                        class="w-full py-4 btn-3d btn-3d-sky rounded-2xl text-base font-extrabold text-white shadow-md flex items-center justify-center gap-2 mt-2 cursor-pointer">
                    <span>🔒</span>
                    <span>Masuk ke Portal Pengajar</span>
                </button>

            </form>
        </div>

        <!-- Bottom Link to Register -->
        <div class="mt-6 pt-6 border-t border-slate-100 text-center">
            <p class="text-sm font-bold text-slate-600">
                Belum punya username petualang?
                <a href="{{ route('register') }}" class="text-sky-600 hover:text-sky-700 font-extrabold underline ml-1">
                    Daftar Akun Baru Sekarang! ✨
                </a>
            </p>
        </div>

    </div>

</div>
@endsection

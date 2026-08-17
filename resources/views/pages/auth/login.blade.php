@extends('layouts.app')

@section('title', 'Masuk Akun - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-md mx-auto pb-16"
     x-data="{
         showPassword: false
     }">

    <!-- Top Heading Banner -->
    <div class="bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-200 border-4 border-amber-400 rounded-3xl p-6 sm:p-7 text-center shadow-md relative overflow-hidden">
        <div class="w-20 h-20 bg-white/40 backdrop-blur-md rounded-full border-4 border-white flex items-center justify-center text-4xl sm:text-5xl mx-auto mb-3 shadow-inner animate-bounce-slow">
            <span class="emoji-icon">🔑</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-black font-heading text-amber-950">
            Masuk Akun YukBelajar
        </h2>
        <p class="text-xs sm:text-sm font-bold text-amber-900 mt-1">
            Gunakan <span class="underline font-black">Username atau Email</span> dan Kata Sandi untuk masuk!
        </p>
    </div>

    <!-- Error Alert Box -->
    @if ($errors->any())
        <div class="p-4 bg-rose-50 border-3 border-rose-400 rounded-2xl text-rose-900 text-sm font-bold shadow-xs flex items-start gap-3 animate-shake">
            <span class="emoji-icon text-2xl shrink-0">⚠️</span>
            <div class="flex flex-col gap-0.5">
                <span class="font-black text-rose-950">Perhatian:</span>
                <ul class="list-disc list-inside text-xs font-semibold">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="p-4 bg-rose-50 border-3 border-rose-400 rounded-2xl text-rose-900 text-sm font-bold shadow-xs flex items-center gap-3">
            <span class="emoji-icon text-2xl shrink-0">🚫</span>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    @if (session('success'))
        <div class="p-4 bg-emerald-50 border-3 border-emerald-400 rounded-2xl text-emerald-950 text-sm font-bold shadow-xs flex items-center gap-3">
            <span class="emoji-icon text-2xl shrink-0">✨</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Single Unified Login Card -->
    <div class="bg-white border-4 border-amber-300 rounded-3xl p-6 sm:p-8 shadow-lg">

        <form action="{{ route('login.post') }}" method="POST" class="flex flex-col gap-4 sm:gap-5">
            @csrf
            
            <!-- Login Input (Username / Email) -->
            <div>
                <label for="login_input" class="block text-xs font-black uppercase text-slate-700 mb-1.5 flex items-center gap-1.5">
                    <span>👤</span>
                    <span>Username atau Email</span>
                </label>
                <input type="text" id="login_input" name="login" value="{{ old('login') }}" required autofocus
                       placeholder="Masukkan username atau email Anda..."
                       class="w-full p-3.5 sm:p-4 text-sm sm:text-base font-extrabold bg-slate-50 border-3 border-slate-300 focus:border-amber-400 focus:bg-white rounded-2xl outline-none transition-all placeholder:text-slate-400 placeholder:font-medium">
            </div>

            <!-- Password Input with Show/Hide Toggle -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label for="password_input" class="block text-xs font-black uppercase text-slate-700 flex items-center gap-1.5">
                        <span>🔒</span>
                        <span>Kata Sandi / Password</span>
                    </label>
                    <button type="button" @click="showPassword = !showPassword" 
                            class="text-xs font-bold text-sky-600 hover:text-sky-800 cursor-pointer flex items-center gap-1 select-none">
                        <span x-text="showPassword ? '🙈 Sembunyikan' : '👁️ Lihat'"></span>
                    </button>
                </div>
                <div class="relative">
                    <input :type="showPassword ? 'text' : 'password'" id="password_input" name="password" required
                           placeholder="••••••••"
                           class="w-full p-3.5 sm:p-4 text-sm sm:text-base font-black bg-slate-50 border-3 border-slate-300 focus:border-amber-400 focus:bg-white rounded-2xl outline-none transition-all placeholder:text-slate-400">
                </div>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input type="checkbox" name="remember" value="1" checked
                           class="w-4 h-4 text-amber-500 rounded border-slate-300 focus:ring-amber-400 cursor-pointer">
                    <span class="text-xs font-bold text-slate-600">Ingat saya di perangkat ini</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    @click="if(window.soundEngine) window.soundEngine.playClick()"
                    class="w-full py-4 btn-3d btn-3d-yellow rounded-2xl text-base sm:text-lg font-black text-amber-950 shadow-md flex items-center justify-center gap-2 mt-1 cursor-pointer">
                <span class="emoji-icon text-xl animate-bounce-slow">🚀</span>
                <span>Masuk Sekarang</span>
            </button>

        </form>

        <!-- Bottom Action: Register 3D Button -->
        <div class="mt-6 pt-5 border-t border-slate-100 flex flex-col items-center gap-3 text-center">
            <span class="text-xs sm:text-sm font-bold text-slate-600">
                Belum punya akun petualang?
            </span>
            <a href="{{ route('register') }}" 
               @click="if(window.soundEngine) window.soundEngine.playClick()"
               class="w-full py-3.5 btn-3d btn-3d-sky rounded-2xl text-sm sm:text-base font-black text-white shadow-md flex items-center justify-center gap-2 hover:scale-102 transition-transform">
                <span class="emoji-icon text-lg animate-bounce-slow">✨</span>
                <span>Daftar Akun Baru (+10 ⭐)</span>
            </a>
        </div>

    </div>

</div>
@endsection

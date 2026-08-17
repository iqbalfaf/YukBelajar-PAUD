@extends('layouts.admin')

@section('title', 'Profil Pengajar & Pengaturan Admin - YukBelajar')

@section('content')
<div class="flex flex-col gap-6 max-w-4xl mx-auto"
     x-data="{
         activeTab: 'admin_info', // 'admin_info', 'security', 'ai_settings'
         name: '{{ $adminProfile['name'] }}',
         username: '{{ $adminProfile['username'] }}',
         email: '{{ $adminProfile['email'] }}',
         schoolName: '{{ $adminProfile['school_name'] }}',
         phone: '{{ $adminProfile['phone'] }}',
         aiModel: '{{ $adminProfile['ai_model_preference'] }}',
         newPassword: '',
         confirmPassword: '',
         showAlert: {{ session('success') ? 'true' : 'false' }},
         alertMessage: '{{ session('success') ?? '✨ Data profil dan pengaturan admin berhasil diperbarui!' }}'
     }">

    <!-- Top Greeting Hero -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-5 text-center md:text-left">
            <div class="w-20 h-20 rounded-3xl bg-white text-sky-700 flex items-center justify-center font-black text-3xl shadow-md shrink-0">
                {{ $adminProfile['avatar_initials'] }}
            </div>
            <div>
                <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-1.5">
                    {{ $adminProfile['role'] }}
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white" x-text="name"></h2>
                <div class="flex items-center justify-center md:justify-start gap-2 mt-1 text-xs text-sky-100 flex-wrap">
                    <span class="font-mono bg-black/20 px-2 py-0.5 rounded" x-text="'@' + username"></span>
                    <span>•</span>
                    <span x-text="email"></span>
                    <span>•</span>
                    <span x-text="schoolName"></span>
                </div>
            </div>
        </div>

        <div class="bg-white/10 border border-white/20 px-4 py-2.5 rounded-2xl text-xs text-sky-100 shrink-0 text-center">
            <p class="font-bold">Terakhir Masuk:</p>
            <p class="font-extrabold text-white mt-0.5">{{ $adminProfile['last_login'] }}</p>
        </div>
    </div>

    <!-- Alert Notification -->
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

    <!-- Tabs Header -->
    <div class="bg-white p-2 rounded-2xl border border-slate-200 shadow-xs flex items-center gap-1.5 overflow-x-auto">
        <button @click="activeTab = 'admin_info'"
                class="flex-1 min-w-[140px] py-2.5 px-3 rounded-xl font-bold text-xs sm:text-sm transition-all flex items-center justify-center gap-2 cursor-pointer"
                :class="activeTab === 'admin_info' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
            <span>👤</span>
            <span>Data Diri & Profil</span>
        </button>

        <button @click="activeTab = 'security'"
                class="flex-1 min-w-[140px] py-2.5 px-3 rounded-xl font-bold text-xs sm:text-sm transition-all flex items-center justify-center gap-2 cursor-pointer"
                :class="activeTab === 'security' ? 'bg-amber-500 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
            <span>🔑</span>
            <span>Keamanan & Password</span>
        </button>

        <button @click="activeTab = 'ai_settings'"
                class="flex-1 min-w-[140px] py-2.5 px-3 rounded-xl font-bold text-xs sm:text-sm transition-all flex items-center justify-center gap-2 cursor-pointer"
                :class="activeTab === 'ai_settings' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
            <span>🤖</span>
            <span>Konfigurasi AI & Sistem</span>
        </button>
    </div>

    <!-- TAB 1: DATA DIRI & PROFIL -->
    <div x-show="activeTab === 'admin_info'" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form action="{{ route('admin.profile.update') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap & Gelar</label>
                    <input type="text" name="name" x-model="name" required
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Username Admin</label>
                    <input type="text" name="username" x-model="username" required
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none font-mono lowercase">
                    <span class="text-[11px] text-slate-400 mt-1 block">Digunakan untuk login (huruf kecil, angka, garis bawah)</span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Email Resmi</label>
                    <input type="email" name="email" x-model="email" required
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Kontak / WhatsApp</label>
                    <input type="text" name="phone" x-model="phone"
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Sekolah / Lembaga PAUD</label>
                <input type="text" name="school_name" x-model="schoolName" required
                       class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-sky w-full py-4 rounded-2xl font-bold text-sm text-white mt-2">
                Simpan Perubahan Profil Pengajar ke Database
            </button>

        </form>

    </div>

    <!-- TAB 2: KEAMANAN & PASSWORD ADMIN -->
    <div x-show="activeTab === 'security'" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form action="{{ route('admin.profile.update') }}" method="POST" class="flex flex-col gap-5">
            @csrf
            <input type="hidden" name="name" :value="name">
            <input type="hidden" name="email" :value="email">
            <input type="hidden" name="school_name" :value="schoolName">
            <input type="hidden" name="phone" :value="phone">
            
            <div class="p-4 bg-sky-50 border border-sky-200 rounded-2xl text-xs text-sky-900 font-semibold leading-relaxed">
                💡 Untuk keamanan akun pengajar, gunakan kata sandi yang memiliki kombinasi huruf dan angka minimal 6 karakter.
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Kata Sandi Baru</label>
                    <input type="password" name="password" x-model="newPassword" required placeholder="Minimal 6 karakter.."
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Konfirmasi Kata Sandi Baru</label>
                    <input type="password" name="password_confirmation" x-model="confirmPassword" required placeholder="Ulangi kata sandi baru.."
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-yellow w-full py-4 rounded-2xl font-bold text-sm text-amber-950 mt-2">
                Perbarui Kata Sandi Admin ke Database
            </button>

        </form>

    </div>

    <!-- TAB 3: KONFIGURASI AI & SISTEM -->
    <div x-show="activeTab === 'ai_settings'" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
        
        <div class="flex flex-col gap-5">
            
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Model Google Gemini AI Utama</label>
                <select x-model="aiModel"
                        class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none cursor-pointer">
                    @foreach($aiModels as $m)
                        <option value="{{ $m['id'] }}">{{ $m['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="p-4 bg-purple-50 border border-purple-200 rounded-2xl flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">✨</span>
                    <div>
                        <h4 class="font-extrabold text-xs text-purple-950 uppercase">Google Gemini API Key</h4>
                        <p class="text-xs text-purple-800 font-semibold">Status: <b>Terkonfigurasi via file .env (GEMINI_API_KEY)</b></p>
                    </div>
                </div>
                <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 font-black text-xs rounded-full">
                    🟢 Aktif
                </span>
            </div>

            <a href="{{ route('admin.ai-generator') }}" 
               class="btn-3d btn-3d-purple w-full py-4 rounded-2xl font-bold text-sm text-white mt-2 text-center flex items-center justify-center gap-2">
                <span>🚀</span>
                <span>Buka Studio 1-Click Gemini AI Generator</span>
            </a>

        </div>

    </div>

</div>
@endsection

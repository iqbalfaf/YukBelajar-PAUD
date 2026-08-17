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
         oldPassword: '',
         newPassword: '',
         confirmPassword: '',
         showAlert: false,
         alertMessage: '',

         saveProfile() {
             this.alertMessage = '✨ Data profil dan pengaturan admin berhasil diperbarui!';
             this.showAlert = true;
             if (window.soundEngine) window.soundEngine.playVictory();
             setTimeout(() => this.showAlert = false, 4000);
         }
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
    <div x-show="showAlert" x-cloak
         class="p-4 bg-emerald-100 border-2 border-emerald-400 text-emerald-950 font-extrabold text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
        <div class="flex items-center gap-3">
            <span class="text-2xl">✨</span>
            <span x-text="alertMessage"></span>
        </div>
        <button @click="showAlert = false" class="text-emerald-800 hover:text-emerald-950 font-black">✖</button>
    </div>

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
        
        <form @submit.prevent="saveProfile()" class="flex flex-col gap-5">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap & Gelar</label>
                    <input type="text" x-model="name" required
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Username Admin</label>
                    <input type="text" x-model="username" required
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none font-mono">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Email Resmi</label>
                    <input type="email" x-model="email" required
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Kontak / WhatsApp</label>
                    <input type="text" x-model="phone"
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Nama Sekolah / Lembaga PAUD</label>
                <input type="text" x-model="schoolName" required
                       class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-sky w-full py-4 rounded-2xl font-bold text-sm text-white mt-2">
                Simpan Perubahan Profil Pengajar
            </button>

        </form>

    </div>

    <!-- TAB 2: KEAMANAN & PASSWORD ADMIN -->
    <div x-show="activeTab === 'security'" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form @submit.prevent="saveProfile()" class="flex flex-col gap-5">
            
            <div class="p-4 bg-sky-50 border border-sky-200 rounded-2xl text-xs text-sky-900 font-semibold leading-relaxed">
                💡 Untuk keamanan akun pengajar, gunakan kata sandi yang memiliki kombinasi huruf besar, huruf kecil, dan angka minimal 8 karakter.
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Kata Sandi Saat Ini</label>
                <input type="password" x-model="oldPassword" placeholder="Masukkan kata sandi lama.."
                       class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Kata Sandi Baru</label>
                    <input type="password" x-model="newPassword" placeholder="Minimal 8 karakter.."
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Konfirmasi Kata Sandi Baru</label>
                    <input type="password" x-model="confirmPassword" placeholder="Ulangi kata sandi baru.."
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                </div>
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-yellow w-full py-4 rounded-2xl font-bold text-sm text-amber-950 mt-2">
                Perbarui Kata Sandi Admin
            </button>

        </form>

    </div>

    <!-- TAB 3: KONFIGURASI AI & SISTEM -->
    <div x-show="activeTab === 'ai_settings'" class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form @submit.prevent="saveProfile()" class="flex flex-col gap-5">
            
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Model Google Gemini AI Utama</label>
                <select x-model="aiModel"
                        class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none cursor-pointer">
                    <option value="gemini-2.0-flash">⚡ Google Gemini 2.0 Flash (Paling Cepat & Responsif - Direkomendasikan)</option>
                    <option value="gemini-1.5-flash">🚀 Google Gemini 1.5 Flash (Stabil & Efisien Kuota)</option>
                    <option value="gemini-1.5-pro">🧠 Google Gemini 1.5 Pro (Kemampuan Penalaran & Multi-Modal Tinggi)</option>
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

            <button type="submit"
                    class="btn-3d btn-3d-purple w-full py-4 rounded-2xl font-bold text-sm text-white mt-2">
                Simpan Konfigurasi AI
            </button>

        </form>

    </div>

</div>
@endsection

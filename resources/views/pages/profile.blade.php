@extends('layouts.app')

@section('title', 'Profil Akun Siswa & Pengaturan Orang Tua - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-4xl mx-auto pb-16"
     x-data="{
         activeTab: 'student_info', // 'student_info', 'parent_security', 'audio_preferences'
         name: '{{ $user['name'] }}',
         username: '{{ $user['username'] }}',
         age: {{ $user['age'] }},
         avatar: '{{ $user['avatar'] }}',
         accessory: '{{ $user['avatar_accessory'] }}',
         parentPin: '{{ $user['parent_pin'] }}',
         newPassword: '',
         confirmPassword: '',
         soundVolume: 90,
         speechRate: 1.0,
         speechPitch: 1.2,
         confettiEnabled: true,
         soundFxEnabled: true,
         showSuccessAlert: false,
         alertMessage: '',

         avatars: {{ Js::from($avatars) }},
         accessories: {{ Js::from($accessories) }},

         get selectedAvatarEmoji() {
             const av = this.avatars.find(a => a.key === this.avatar);
             return av ? av.emoji : '🦖';
         },

         get selectedAccessoryIcon() {
             const acc = this.accessories.find(a => a.key === this.accessory);
             return (acc && acc.icon !== '❌') ? acc.icon : '';
         },

         saveProfile() {
             this.alertMessage = '✨ Pengaturan profil & informasi akun berhasil disimpan!';
             this.showSuccessAlert = true;
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 window.soundEngine.speak('Bagus sekali! Profil akun barumu sudah tersimpan!');
             }
             window.triggerConfetti(0.7);
             setTimeout(() => this.showSuccessAlert = false, 4000);
         },

         testVoice() {
             if (window.soundEngine) {
                 window.soundEngine.speak('Halo ' + this.name + '! Suara ceria Kiki terdengar sangat jelas dan menyenangkan!');
             }
         }
     }">

    <!-- Top Breadcrumb & Return -->
    <div class="flex items-center justify-between">
        <a href="{{ route('home') }}" 
           class="flex items-center gap-2 text-slate-700 hover:text-sky-700 font-bold text-sm bg-white border-2 border-slate-200 px-4 py-2 rounded-2xl shadow-xs transition-all">
            <span>🏠</span>
            <span>Kembali ke Taman Petualangan</span>
        </a>

        <span class="px-3.5 py-1 bg-amber-100 text-amber-900 border-2 border-amber-300 rounded-full font-black text-xs">
            ⭐ {{ $user['stars_count'] }} Bintang Emas Terkumpul
        </span>
    </div>

    <!-- User Profile Header Card -->
    <div class="bg-gradient-to-r from-amber-200 via-yellow-100 to-sky-100 border-4 border-amber-300 rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-6 relative overflow-hidden">
        
        <div class="flex items-center gap-5 z-10 text-center sm:text-left">
            
            <!-- Avatar Display with Dynamic Accessory -->
            <div class="w-24 h-24 sm:w-28 sm:h-28 bg-white rounded-3xl border-4 border-amber-400 flex items-center justify-center text-6xl sm:text-7xl shadow-md relative shrink-0">
                <span x-text="selectedAvatarEmoji"></span>
                <span class="absolute -top-3 -right-2 text-3xl animate-bounce-slow" x-text="selectedAccessoryIcon"></span>
            </div>

            <div>
                <div class="inline-block bg-amber-500 text-white font-extrabold text-xs px-3 py-1 rounded-full mb-1.5 uppercase tracking-wide">
                    Siswa Petualang PAUD
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800" x-text="name"></h2>
                <div class="flex items-center justify-center sm:justify-start gap-2 mt-1 text-xs font-bold text-slate-600 flex-wrap">
                    <span class="px-2 py-0.5 bg-white/80 rounded-md font-mono" x-text="'@' + username"></span>
                    <span>•</span>
                    <span class="text-sky-800" x-text="'Usia ' + age + ' Tahun'"></span>
                    <span>•</span>
                    <span class="text-emerald-700 font-extrabold">🏆 7 Stiker Karakter</span>
                </div>
            </div>

        </div>

        <button @click="testVoice()"
                class="btn-3d btn-3d-yellow px-5 py-3 rounded-2xl flex items-center gap-2 text-xs sm:text-sm font-extrabold text-amber-950 z-10">
            <span class="text-xl">🔊</span>
            <span>Uji Suara Sapaan</span>
        </button>

        <!-- Decorative shape -->
        <span class="absolute -right-6 -bottom-6 text-8xl opacity-20 pointer-events-none">👑</span>
    </div>

    <!-- Alert Success Notification -->
    <div x-show="showSuccessAlert" x-cloak
         class="p-4 bg-emerald-100 border-3 border-emerald-400 text-emerald-950 font-extrabold text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
        <div class="flex items-center gap-3">
            <span class="text-2xl">✨</span>
            <span x-text="alertMessage"></span>
        </div>
        <button @click="showSuccessAlert = false" class="text-emerald-800 hover:text-emerald-950 font-black">✖</button>
    </div>

    <!-- Tab Navigation Selector -->
    <div class="bg-white p-2 rounded-2xl border-3 border-sky-200 shadow-xs flex items-center gap-1.5 overflow-x-auto">
        <button @click="activeTab = 'student_info'; if(window.soundEngine) window.soundEngine.playClick()"
                class="flex-1 min-w-[140px] py-2.5 px-3 rounded-xl font-black text-xs sm:text-sm transition-all flex items-center justify-center gap-2 cursor-pointer"
                :class="activeTab === 'student_info' ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
            <span>🧒</span>
            <span>Profil Anak & Avatar</span>
        </button>

        <button @click="activeTab = 'parent_security'; if(window.soundEngine) window.soundEngine.playClick()"
                class="flex-1 min-w-[140px] py-2.5 px-3 rounded-xl font-black text-xs sm:text-sm transition-all flex items-center justify-center gap-2 cursor-pointer"
                :class="activeTab === 'parent_security' ? 'bg-amber-500 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
            <span>🔒</span>
            <span>PIN & Keamanan Akun</span>
        </button>

        <button @click="activeTab = 'audio_preferences'; if(window.soundEngine) window.soundEngine.playClick()"
                class="flex-1 min-w-[140px] py-2.5 px-3 rounded-xl font-black text-xs sm:text-sm transition-all flex items-center justify-center gap-2 cursor-pointer"
                :class="activeTab === 'audio_preferences' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-100'">
            <span>🔊</span>
            <span>Suara & Efek Animasi</span>
        </button>
    </div>

    <!-- TAB 1: INFORMASI ANAK, AVATAR & AKSESORI -->
    <div x-show="activeTab === 'student_info'" class="bg-white rounded-3xl p-6 sm:p-8 border-3 border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form @submit.prevent="saveProfile()" class="flex flex-col gap-6">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-1.5">
                        Nama Panggilan Anak
                    </label>
                    <input type="text" x-model="name" required
                           class="w-full p-3.5 text-base font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-1.5">
                        Usia Belajar Anak
                    </label>
                    <select x-model="age"
                            class="w-full p-3.5 text-base font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none cursor-pointer">
                        <option :value="3">3 Tahun (Level 1: Dasar / Pemula)</option>
                        <option :value="4">4 Tahun (Level 2: Menengah / Eksplorasi)</option>
                        <option :value="5">5 Tahun (Level 3: Pra-SD / Mahir)</option>
                        <option :value="6">6 Tahun (Level 3: Siap Sekolah Dasar)</option>
                    </select>
                </div>
            </div>

            <!-- Avatar Selection Grid -->
            <div>
                <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-2">
                    Pilih Karakter Avatar Hewan Favorit:
                </label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <template x-for="av in avatars" :key="av.key">
                        <button type="button" @click="avatar = av.key; if(window.soundEngine) window.soundEngine.playClick()"
                                class="p-3.5 rounded-2xl border-3 flex flex-col items-center gap-1.5 transition-all cursor-pointer"
                                :class="avatar === av.key ? 'bg-amber-100 border-amber-400 scale-105 shadow-sm ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 hover:bg-slate-100'">
                            <span class="text-4xl" x-text="av.emoji"></span>
                            <span class="text-xs font-extrabold text-slate-800" x-text="av.name"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Dress-Up Accessories Selection Grid -->
            <div>
                <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-2">
                    Pasang Aksesori Mahkota / Topi (Dress-Up):
                </label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <template x-for="acc in accessories" :key="acc.key">
                        <button type="button" @click="if(acc.is_unlocked) { accessory = acc.key; if(window.soundEngine) window.soundEngine.playClick(); }"
                                :disabled="!acc.is_unlocked"
                                class="p-3 rounded-2xl border-2 flex flex-col items-center gap-1 transition-all text-center"
                                :class="!acc.is_unlocked ? 'opacity-40 bg-slate-100 border-slate-200 cursor-not-allowed' : (accessory === acc.key ? 'bg-sky-100 border-sky-400 ring-2 ring-sky-300 shadow-xs' : 'bg-white border-slate-200 hover:bg-slate-50 cursor-pointer')">
                            <span class="text-3xl" x-text="acc.icon"></span>
                            <span class="text-xs font-extrabold text-slate-800" x-text="acc.name"></span>
                            <span class="text-[10px] font-semibold text-slate-400" x-text="acc.is_unlocked ? 'Tersedia' : 'Terkunci'"></span>
                        </button>
                    </template>
                </div>
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-sky w-full py-4 rounded-2xl font-black text-base text-white mt-2">
                Simpan Perubahan Profil Anak
            </button>

        </form>

    </div>

    <!-- TAB 2: KEAMANAN, USERNAME & PIN ORANG TUA -->
    <div x-show="activeTab === 'parent_security'" class="bg-white rounded-3xl p-6 sm:p-8 border-3 border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form @submit.prevent="saveProfile()" class="flex flex-col gap-5">
            
            <div class="p-4 bg-amber-50 border-2 border-amber-300 rounded-2xl flex items-start gap-3">
                <span class="text-2xl shrink-0">🔒</span>
                <div>
                    <h4 class="font-extrabold text-xs text-amber-950 uppercase tracking-wide mb-0.5">
                        Parental Gate & Keamanan Akun
                    </h4>
                    <p class="text-xs font-semibold text-amber-900 leading-relaxed">
                        PIN Orang Tua digunakan untuk membuka menu pengaturan kurikulum, laporan penguasaan materi, dan pembatasan fitur.
                    </p>
                </div>
            </div>

            <div>
                <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-1.5">
                    Username Login Akun
                </label>
                <input type="text" x-model="username" required
                       class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none font-mono">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-1.5">
                        PIN Orang Tua (4 Digit Angka)
                    </label>
                    <input type="password" maxlength="4" x-model="parentPin" required placeholder="1234"
                           class="w-full p-3.5 text-center text-xl tracking-widest font-black bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none font-mono">
                </div>

                <div>
                    <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-1.5">
                        Kata Sandi Baru (Opsional)
                    </label>
                    <input type="password" x-model="newPassword" placeholder="Biarkan kosong jika tidak diganti"
                           class="w-full p-3.5 text-sm font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-2xl outline-none">
                </div>
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-yellow w-full py-4 rounded-2xl font-black text-base text-amber-950 mt-2">
                Simpan Pengaturan Keamanan
            </button>

        </form>

    </div>

    <!-- TAB 3: PREFERENSI AUDIO, TTS & ANIMASI -->
    <div x-show="activeTab === 'audio_preferences'" class="bg-white rounded-3xl p-6 sm:p-8 border-3 border-slate-200 shadow-xs flex flex-col gap-6">
        
        <form @submit.prevent="saveProfile()" class="flex flex-col gap-5">
            
            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border-2 border-slate-200">
                <div class="flex items-center gap-3">
                    <span class="text-3xl">🔊</span>
                    <div>
                        <h4 class="font-extrabold text-sm text-slate-800">Efek Suara Sintetis & Kemenangan</h4>
                        <p class="text-xs font-semibold text-slate-500">Memutar suara *ding*, *fanfare*, dan tepuk tangan ceria.</p>
                    </div>
                </div>
                <input type="checkbox" x-model="soundFxEnabled" class="w-6 h-6 rounded-lg text-sky-600 cursor-pointer">
            </div>

            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border-2 border-slate-200">
                <div class="flex items-center gap-3">
                    <span class="text-3xl">🎉</span>
                    <div>
                        <h4 class="font-extrabold text-sm text-slate-800">Efek Hujan Konfeti Bintang</h4>
                        <p class="text-xs font-semibold text-slate-500">Menampilkan konfeti warna-warni saat anak menyelesaikan kuis atau membuka level.</p>
                    </div>
                </div>
                <input type="checkbox" x-model="confettiEnabled" class="w-6 h-6 rounded-lg text-sky-600 cursor-pointer">
            </div>

            <div>
                <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-2">
                    Kecepatan Suara Pelafalan Bahasa Indonesia (TTS):
                </label>
                <div class="flex items-center gap-4">
                    <input type="range" min="0.7" max="1.3" step="0.1" x-model="speechRate"
                           class="flex-1 accent-sky-600 cursor-pointer">
                    <span class="text-xs font-black text-slate-800 px-3 py-1 bg-slate-100 rounded-lg" x-text="speechRate + 'x'"></span>
                </div>
            </div>

            <button type="submit"
                    class="btn-3d btn-3d-purple w-full py-4 rounded-2xl font-black text-base text-white mt-2">
                Simpan Preferensi Suara
            </button>

        </form>

    </div>

</div>
@endsection

@extends('layouts.app')

@section('title', 'Daftar Akun Baru Siswa & Orang Tua - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-2xl mx-auto pb-16"
     x-data="{
         selectedAvatar: '{{ old('avatar_icon', 'dino') }}',
         username: '{{ old('username', '') }}',
         password: '',
         childName: '{{ old('name', '') }}',
         childAge: '{{ old('age', '4') }}',
         parentName: '{{ old('parent_name', '') }}',
         parentRelationship: '{{ old('parent_relationship', 'bunda') }}',
         parentPhone: '{{ old('phone', '') }}',
         parentEmail: '{{ old('email', '') }}',
         parentPin: '{{ old('parent_pin', '1234') }}',
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
         },

         setRelationship(rel) {
             this.parentRelationship = rel;
             if (window.soundEngine) window.soundEngine.playClick();
         }
     }">

    <!-- Top Heading Banner -->
    <div class="bg-gradient-to-r from-sky-500 via-indigo-500 to-purple-500 border-4 border-sky-400 rounded-3xl p-6 sm:p-8 text-center text-white shadow-md relative overflow-hidden">
        <span class="text-5xl sm:text-6xl inline-block mb-2 animate-bounce-slow">✨</span>
        <h2 class="text-3xl sm:text-4xl font-black font-heading text-white tracking-wide">
            DAFTAR AKUN KELUARGA PETUALANG
        </h2>
        <p class="text-sm sm:text-base font-bold text-sky-100 mt-1 max-w-xl mx-auto">
            Daftarkan akun buah hati bersama orang tua pendamping & raih <span class="text-amber-300 font-extrabold underline">10 Bintang Emas Pertama!</span> ⭐
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
            <input type="hidden" name="parent_relationship" :value="parentRelationship">

            <!-- STEP 1: Pilih Maskot Avatar Favorit -->
            <div class="p-4 sm:p-5 bg-sky-50/50 border-2 border-sky-100 rounded-3xl">
                <label class="block text-xs font-black uppercase text-sky-900 mb-2.5 flex items-center gap-1.5">
                    <span>🐾</span>
                    <span>1. Pilih Karakter Maskot Favorit Anak:</span>
                </label>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3">
                    <template x-for="av in avatars" :key="av.key">
                        <button type="button" @click="pickAvatar(av)"
                                class="p-3 rounded-2xl border-3 flex flex-col items-center justify-center gap-1.5 transition-all cursor-pointer group"
                                :class="selectedAvatar === av.key ? 'border-sky-400 bg-sky-100/90 scale-105 shadow-md ring-3 ring-sky-200' : 'border-slate-200 hover:border-sky-300 bg-white'">
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

            <!-- STEP 2: Data Anak (Nama Panggilan & Usia Belajar) -->
            <div class="p-4 sm:p-5 bg-emerald-50/50 border-2 border-emerald-100 rounded-3xl">
                <label class="block text-xs font-black uppercase text-emerald-900 mb-2.5 flex items-center gap-1.5">
                    <span>👶</span>
                    <span>2. Data Buah Hati (Nama & Usia Belajar):</span>
                </label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="reg_name" class="block text-xs font-bold text-slate-700 mb-1">Nama Panggilan Anak <span class="text-rose-500">*</span></label>
                        <input type="text" id="reg_name" name="name" x-model="childName" @input="if(!username) generateUsername()" required
                               placeholder="Contoh: Alif / Nayla"
                               class="w-full p-3.5 text-base font-extrabold bg-white border-2 border-slate-300 focus:border-emerald-500 rounded-2xl outline-none shadow-xs">
                    </div>

                    <div>
                        <label for="reg_age" class="block text-xs font-bold text-slate-700 mb-1">Usia Belajar Anak</label>
                        <select id="reg_age" name="age" x-model="childAge"
                                class="w-full p-3.5 text-sm font-bold bg-white border-2 border-slate-300 focus:border-emerald-500 rounded-2xl outline-none cursor-pointer shadow-xs">
                            <option value="3">3 Tahun (Batita / PAUD Awal - Level 1)</option>
                            <option value="4">4 Tahun (PAUD A - Level 2)</option>
                            <option value="5">5 Tahun (TK A - Level 2/3)</option>
                            <option value="6">6 Tahun (TK B / Pra-SD - Level 3)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- STEP 3: Data Diri Orang Tua / Pendamping -->
            <div class="p-4 sm:p-5 bg-amber-50/60 border-2 border-amber-200 rounded-3xl flex flex-col gap-4">
                <div>
                    <label class="block text-xs font-black uppercase text-amber-950 mb-1 flex items-center gap-1.5">
                        <span>👨‍👩‍👧</span>
                        <span>3. Data Diri Orang Tua / Pendamping:</span>
                    </label>
                    <p class="text-xs text-amber-800 font-semibold">
                        Identitas orang tua terhubung langsung ke Portal Pantauan Belajar & laporan penguasaan materi anak.
                    </p>
                </div>

                <!-- Hubungan Peran Pendamping (Pill Selector) -->
                <div>
                    <span class="block text-xs font-bold text-slate-700 mb-1.5">Peran / Hubungan dengan Anak:</span>
                    <div class="grid grid-cols-3 gap-2">
                        <button type="button" @click="setRelationship('bunda')"
                                class="py-2.5 px-3 rounded-xl border-2 font-black text-xs transition-all flex items-center justify-center gap-1.5 cursor-pointer"
                                :class="parentRelationship === 'bunda' ? 'bg-amber-400 border-amber-500 text-amber-950 shadow-xs scale-102' : 'bg-white border-slate-200 text-slate-600 hover:bg-amber-50'">
                            <span>🌸</span>
                            <span>Bunda / Ibu</span>
                        </button>
                        <button type="button" @click="setRelationship('ayah')"
                                class="py-2.5 px-3 rounded-xl border-2 font-black text-xs transition-all flex items-center justify-center gap-1.5 cursor-pointer"
                                :class="parentRelationship === 'ayah' ? 'bg-sky-400 border-sky-500 text-sky-950 shadow-xs scale-102' : 'bg-white border-slate-200 text-slate-600 hover:bg-sky-50'">
                            <span>⚡</span>
                            <span>Ayah</span>
                        </button>
                        <button type="button" @click="setRelationship('wali')"
                                class="py-2.5 px-3 rounded-xl border-2 font-black text-xs transition-all flex items-center justify-center gap-1.5 cursor-pointer"
                                :class="parentRelationship === 'wali' ? 'bg-purple-400 border-purple-500 text-purple-950 shadow-xs scale-102' : 'bg-white border-slate-200 text-slate-600 hover:bg-purple-50'">
                            <span>🌟</span>
                            <span>Wali / Kakak</span>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="reg_parent_name" class="block text-xs font-bold text-slate-700 mb-1">
                            Nama Lengkap Orang Tua / Wali
                        </label>
                        <input type="text" id="reg_parent_name" name="parent_name" x-model="parentName"
                               placeholder="Contoh: Bunda Siti Rahmawati"
                               class="w-full p-3.5 text-sm font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-2xl outline-none shadow-xs">
                    </div>

                    <div>
                        <label for="reg_phone" class="block text-xs font-bold text-slate-700 mb-1">
                            Nomor WhatsApp / HP Orang Tua
                        </label>
                        <input type="text" id="reg_phone" name="phone" x-model="parentPhone"
                               placeholder="Contoh: 0812-3456-7890"
                               class="w-full p-3.5 text-sm font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-2xl outline-none shadow-xs">
                    </div>
                </div>

                <div>
                    <label for="reg_email" class="block text-xs font-bold text-slate-700 mb-1">
                        Email Orang Tua (Untuk Notifikasi Rapor & Pemulihan Akun)
                    </label>
                    <input type="email" id="reg_email" name="email" x-model="parentEmail"
                           placeholder="Contoh: bunda.siti@gmail.com"
                           class="w-full p-3.5 text-sm font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-2xl outline-none shadow-xs">
                </div>
            </div>

            <!-- STEP 4: Akun & Keamanan (Username, Password & PIN Parental Gate) -->
            <div class="p-4 sm:p-5 bg-purple-50/60 border-2 border-purple-200 rounded-3xl flex flex-col gap-4">
                <div>
                    <label class="block text-xs font-black uppercase text-purple-950 mb-1 flex items-center gap-1.5">
                        <span>🔑</span>
                        <span>4. Akun Login & Keamanan PIN:</span>
                    </label>
                    <p class="text-xs text-purple-800 font-semibold">
                        Username digunakan saat login ke game, dan PIN Parental Gate digunakan orang tua untuk membuka portal pantauan belajar.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="reg_username" class="block text-xs font-bold text-slate-700">Username Unik <span class="text-rose-500">*</span></label>
                            <button type="button" @click="generateUsername()" class="text-[11px] font-bold text-purple-700 hover:underline cursor-pointer">
                                🎲 Buat Otomatis
                            </button>
                        </div>
                        <input type="text" id="reg_username" name="username" x-model="username" required
                               placeholder="Contoh: alif_ceria12"
                               class="w-full p-3.5 text-sm font-extrabold bg-white border-2 border-slate-300 focus:border-purple-500 rounded-2xl outline-none lowercase font-mono shadow-xs">
                    </div>

                    <div>
                        <label for="reg_password" class="block text-xs font-bold text-slate-700 mb-1">Password Akun <span class="text-rose-500">*</span></label>
                        <input type="password" id="reg_password" name="password" x-model="password" required
                               placeholder="Minimal 4 karakter"
                               class="w-full p-3.5 text-sm font-bold bg-white border-2 border-slate-300 focus:border-purple-500 rounded-2xl outline-none shadow-xs">
                    </div>
                </div>

                <div class="bg-white/80 p-3.5 rounded-2xl border border-purple-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                    <div>
                        <span class="block text-xs font-extrabold text-slate-800">🔒 PIN Parental Gate Orang Tua (4 Digit):</span>
                        <span class="text-[11px] text-slate-500 font-medium">Default adalah <strong>1234</strong>. Anda dapat menggantinya sekarang atau nanti.</span>
                    </div>
                    <input type="password" name="parent_pin" maxlength="4" x-model="parentPin"
                           placeholder="1234"
                           class="w-24 p-2 text-center text-lg tracking-widest font-black bg-purple-50 border-2 border-purple-300 focus:border-purple-600 rounded-xl outline-none font-mono">
                </div>
            </div>

            <!-- Big Submit CTA -->
            <button type="submit"
                    class="w-full py-5 btn-3d btn-3d-yellow rounded-2xl text-lg sm:text-xl font-black text-amber-950 shadow-lg flex items-center justify-center gap-3 mt-2 cursor-pointer">
                <span class="text-3xl animate-bounce-slow">🎉</span>
                <span>BUAT AKUN KELUARGA & DAPATKAN 10 BINTANG!</span>
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

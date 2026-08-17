@extends('layouts.app')

@section('title', 'Pilih Avatar Lucu - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-3xl mx-auto pb-16"
     x-data="{
         avatars: {{ Js::from($avatars) }},
         selectedKey: '{{ $currentUser['avatar'] }}',
         childName: '{{ $currentUser['name'] }}',
         childAge: {{ $currentUser['age'] }},
         selectAvatar(av) {
             this.selectedKey = av.key;
             if (window.soundEngine) {
                 window.soundEngine.playCorrect();
                 window.soundEngine.speak(av.name);
             }
         },
         startAdventure() {
             if (!this.childName.trim()) {
                 alert('Silakan tuliskan nama panggilan anak terlebih dahulu ya!');
                 return;
             }
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 window.soundEngine.speak('Selamat datang ' + this.childName + '! Ayo kita mulai petualangan seru!');
             }
             window.triggerConfetti(0.5);
             setTimeout(() => {
                 window.location.href = '{{ route('home') }}';
             }, 800);
         }
     }">

    <!-- Top Card Heading -->
    <div class="bg-gradient-to-r from-yellow-300 via-amber-300 to-orange-300 border-4 border-amber-400 rounded-3xl p-6 sm:p-8 text-center shadow-md">
        <span class="text-5xl sm:text-6xl inline-block mb-2 animate-bounce-slow">🎨</span>
        <h2 class="text-3xl sm:text-4xl font-black font-heading text-amber-950">
            PILIH AVATAR PETUALANGMU
        </h2>
        <p class="text-sm sm:text-base font-bold text-amber-900 mt-1">
            Sentuh karakter kartun kesukaanmu dan tuliskan namamu di bawah ini!
        </p>
    </div>

    <!-- Avatar Selection 3D Grid -->
    <div class="bg-white border-4 border-amber-200 rounded-3xl p-6 sm:p-8 shadow-md">
        <h3 class="text-base font-extrabold font-heading text-slate-700 mb-4 flex items-center gap-2">
            <span>🐾</span>
            <span>1. Sentuh Karakter Avatar Favoritmu:</span>
        </h3>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
            <template x-for="av in avatars" :key="av.key">
                <button type="button" @click="selectAvatar(av)"
                        class="p-4 rounded-3xl border-4 flex flex-col items-center justify-center gap-2 transition-all cursor-pointer group"
                        :class="selectedKey === av.key ? 'border-amber-400 bg-amber-50 scale-105 shadow-md ring-4 ring-amber-200' : 'border-slate-200 bg-slate-50 hover:border-amber-300 hover:scale-102'">
                    
                    <span class="text-5xl sm:text-6xl group-hover:scale-110 transition-transform select-none"
                          x-text="av.emoji">
                    </span>

                    <span class="text-sm font-extrabold font-heading text-slate-800"
                          x-text="av.name">
                    </span>

                    <template x-if="selectedKey === av.key">
                        <span class="text-xs px-2 py-0.5 bg-amber-400 text-amber-950 font-black rounded-full uppercase">
                            Dipilih ⭐
                        </span>
                    </template>
                </button>
            </template>
        </div>

        <!-- Form Profile Info -->
        <h3 class="text-base font-extrabold font-heading text-slate-700 mb-4 flex items-center gap-2">
            <span>✏️</span>
            <span>2. Tuliskan Nama & Usiamu:</span>
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Nama Panggilan Anak</label>
                <input type="text" x-model="childName" placeholder="Contoh: Alif / Nayla"
                       class="w-full p-4 text-lg font-extrabold bg-slate-50 border-3 border-slate-300 focus:border-amber-400 rounded-2xl outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Usia Anak (Tahun)</label>
                <select x-model="childAge"
                        class="w-full p-4 text-base font-bold bg-slate-50 border-3 border-slate-300 focus:border-amber-400 rounded-2xl outline-none cursor-pointer">
                    <option value="3">3 Tahun (PAUD Awal)</option>
                    <option value="4">4 Tahun (PAUD)</option>
                    <option value="5">5 Tahun (TK A)</option>
                    <option value="6">6 Tahun (TK B / Pra-SD)</option>
                </select>
            </div>
        </div>

        <!-- Big Start Action Button -->
        <button type="button" @click="startAdventure()"
                class="w-full py-5 btn-3d btn-3d-yellow rounded-2xl text-xl sm:text-2xl font-black text-amber-950 shadow-lg flex items-center justify-center gap-3">
            <span class="text-3xl animate-bounce-slow">🚀</span>
            <span>SIMPAN & MULAI PETUALANGAN!</span>
        </button>

    </div>

</div>
@endsection

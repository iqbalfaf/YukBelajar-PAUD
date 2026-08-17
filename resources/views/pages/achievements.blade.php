@extends('layouts.app')

@section('title', 'Ruang Piala & Sertifikat Prestasi - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-5xl mx-auto pb-16"
     x-data="{
         activeTab: 'kids', // 'kids' or 'parents'
         currentAccessory: '{{ $user['avatar_accessory'] }}',
         accessories: {{ Js::from($accessories) }},
         kidAchievements: {{ Js::from($achievementsData['kid_achievements']) }},
         parentAchievements: {{ Js::from($achievementsData['parent_achievements']) }},
         certificates: {{ Js::from($achievementsData['printable_certificates']) }},
         selectedCert: null,
         showCertModal: false,
         showRewardModal: false,
         selectedAchievement: null,

         setTab(tab) {
             this.activeTab = tab;
             if (window.soundEngine) {
                 window.soundEngine.playClick();
                 if (tab === 'kids') {
                     window.soundEngine.speak('Ruang piala dan lencana petualang cilik!');
                 } else {
                     window.soundEngine.speak('Studio sertifikat kelulusan dan lencana orang tua hebat!');
                 }
             }
         },

         equipAccessory(acc) {
             if (!acc.is_unlocked) {
                 if (window.soundEngine) window.soundEngine.playWrong();
                 alert('Aksesori ini masih terkunci! Selesaikan achievement: ' + acc.source);
                 return;
             }
             this.currentAccessory = acc.icon === '❌' ? '' : acc.icon;
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 window.soundEngine.speak('Keren sekali! Avatarmu sekarang memakai ' + acc.name + '!');
             }
             window.triggerConfetti(0.5);
         },

         openCert(cert) {
             this.selectedCert = cert;
             this.showCertModal = true;
             if (window.soundEngine) {
                 window.soundEngine.playVictory();
                 window.soundEngine.speak('Selamat atas kelulusan ' + cert.title + '!');
             }
         },

         inspectAchievement(ach) {
             this.selectedAchievement = ach;
             this.showRewardModal = true;
             if (window.soundEngine) {
                 if (ach.is_unlocked) {
                     window.soundEngine.playVictory();
                 } else {
                     window.soundEngine.playClick();
                 }
             }
         },

         printCertificate() {
             window.print();
         }
     }">

    <!-- Top Heading Banner -->
    <div class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-300 border-4 border-amber-500 rounded-3xl p-5 sm:p-7 md:p-8 text-amber-950 shadow-md flex flex-col md:flex-row items-center justify-between gap-5 sm:gap-6 relative overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 text-center sm:text-left z-10">
            <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white/40 backdrop-blur-md rounded-full border-4 border-white flex items-center justify-center text-4xl sm:text-5xl shadow-inner animate-bounce-slow shrink-0">
                <span class="emoji-icon">🎖️</span>
            </div>
            <div>
                <span class="inline-block bg-amber-600 text-white font-extrabold text-[11px] sm:text-xs px-3 py-1 rounded-full uppercase tracking-wider mb-1">
                    Ruang Piala & Prestasi Belajar
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black font-heading text-amber-950 leading-tight">
                    Piala & Sertifikat {{ $user['name'] }}
                </h2>
                <p class="text-xs sm:text-sm font-bold text-amber-900 mt-1 max-w-xl">
                    Koleksi lencana pahlawan, ganti aksesori avatar, dan unduh sertifikat kelulusan pulau siap cetak!
                </p>
            </div>
        </div>

        <!-- Quick Summary Badge -->
        <div class="bg-white/95 p-3.5 sm:p-4 rounded-2xl border-3 border-amber-300 shadow-xs text-center shrink-0 z-10 w-full md:w-auto min-w-[170px]">
            <span class="text-[11px] font-bold text-slate-500 uppercase">Lencana Terbuka</span>
            <div class="text-2xl sm:text-3xl font-black font-heading text-amber-900 my-0.5">
                <span class="text-emerald-600">{{ $achievementsData['unlocked_count'] }}</span> / {{ $achievementsData['total_count'] }} <span class="text-sm font-bold text-amber-800">Piala</span>
            </div>
            <span class="text-[10px] sm:text-[11px] font-black text-amber-800">Tingkat Master 🌟</span>
        </div>

        <div class="absolute -right-8 -bottom-8 text-9xl opacity-20 pointer-events-none">🏆</div>
    </div>

    <!-- Switchable Tabs (Kids vs Parents) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3 bg-white/80 p-2 rounded-2xl border-3 border-amber-300 shadow-xs">
        <button type="button" @click="setTab('kids')"
                class="py-3 px-4 rounded-xl font-extrabold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                :class="activeTab === 'kids' ? 'btn-3d btn-3d-yellow text-amber-950 shadow-sm scale-102' : 'text-slate-600 hover:bg-slate-100'">
            <span class="text-lg">👶</span>
            <span>Lencana Petualang Cilik</span>
        </button>

        <button type="button" @click="setTab('parents')"
                class="py-3 px-4 rounded-xl font-extrabold text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                :class="activeTab === 'parents' ? 'btn-3d btn-3d-sky text-white shadow-sm scale-102' : 'text-slate-600 hover:bg-slate-100'">
            <span class="text-lg">📜</span>
            <span>Studio Sertifikat & Orang Tua</span>
        </button>
    </div>

    <!-- TAB 1: KID ACHIEVEMENTS & AVATAR DRESS-UP -->
    <template x-if="activeTab === 'kids'">
        <div class="flex flex-col gap-6 sm:gap-8">
            
            <!-- Avatar Dress-Up Mini Station -->
            <div class="bg-gradient-to-r from-amber-50 via-white to-amber-50 border-4 border-amber-300 rounded-3xl p-5 sm:p-7 shadow-sm flex flex-col md:flex-row items-center justify-between gap-5 sm:gap-6">
                
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 text-center sm:text-left">
                    <!-- Avatar Visual with Worn Accessory -->
                    <div class="relative w-20 h-20 sm:w-24 sm:h-24 bg-amber-100 border-4 border-amber-400 rounded-full flex items-center justify-center text-5xl sm:text-6xl shadow-md shrink-0 animate-bounce-slow">
                        <span>{{ $user['avatar_emoji'] }}</span>
                        <!-- Dynamic Accessory Floating Overlay -->
                        <template x-if="currentAccessory">
                            <span class="absolute -top-3 right-0 text-3xl sm:text-4xl animate-wiggle drop-shadow-md" x-text="currentAccessory"></span>
                        </template>
                    </div>

                    <div>
                        <span class="text-[10px] sm:text-xs font-black uppercase text-amber-700 bg-amber-200/70 px-3 py-0.5 rounded-full inline-block">
                            🎨 Kamar Ganti Aksesori Avatar
                        </span>
                        <h3 class="text-xl sm:text-2xl font-black font-heading text-amber-950 mt-1">
                            Kostum Petualang {{ $user['name'] }}
                        </h3>
                        <p class="text-xs sm:text-sm font-bold text-slate-600 mt-0.5">
                            Pasang mahkota, topi, atau kacamata yang kamu menangkan dari achievement!
                        </p>
                    </div>
                </div>

                <!-- Accessory Selector Buttons -->
                <div class="grid grid-cols-4 sm:flex sm:flex-wrap gap-2 justify-center w-full md:w-auto">
                    <template x-for="acc in accessories" :key="acc.key">
                        <button type="button" @click="equipAccessory(acc)"
                                class="p-2.5 sm:p-3 rounded-2xl border-3 flex flex-col items-center justify-center gap-1 transition-all cursor-pointer"
                                :class="currentAccessory === (acc.icon === '❌' ? '' : acc.icon) ? 'border-amber-400 bg-amber-100 scale-110 shadow-md ring-3 ring-amber-300' : (acc.is_unlocked ? 'border-slate-200 bg-white hover:border-amber-300' : 'border-slate-200 bg-slate-100 opacity-50')">
                            <span class="text-2xl select-none emoji-icon" x-text="acc.icon"></span>
                            <span class="text-[9px] sm:text-[10px] font-extrabold text-slate-700 line-clamp-1" x-text="acc.name"></span>
                        </button>
                    </template>
                </div>

            </div>

            <!-- Kid Achievements Badges Grid -->
            <div>
                <h3 class="text-lg sm:text-xl font-black font-heading text-slate-800 mb-3.5 flex items-center gap-2">
                    <span class="emoji-icon">🏆</span>
                    <span>Koleksi Lencana Gelar Juara (Piala Cilik)</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5 sm:gap-5">
                    <template x-for="ach in kidAchievements" :key="ach.id">
                        <div @click="inspectAchievement(ach)"
                             class="card-bubbly p-4 sm:p-5 flex flex-col justify-between border-3 sm:border-4 cursor-pointer transition-all hover:scale-102 bg-white shadow-xs hover:shadow-md"
                             :class="ach.is_unlocked ? 'border-amber-300' : 'border-slate-200 bg-slate-50/80 opacity-75'">
                            
                            <div>
                                <div class="flex items-start justify-between gap-3 mb-3">
                                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center text-3xl sm:text-4xl shadow-xs border-2"
                                         :class="ach.is_unlocked ? 'bg-amber-100 border-amber-300 animate-wiggle' : 'bg-slate-200 border-slate-300 grayscale'">
                                        <span class="emoji-icon" x-text="ach.is_unlocked ? ach.icon : '🔒'"></span>
                                    </div>

                                    <template x-if="ach.is_unlocked">
                                        <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 rounded-full text-[10px] sm:text-[11px] font-black uppercase">
                                            Diraih ✨
                                        </span>
                                    </template>
                                    <template x-if="!ach.is_unlocked">
                                        <span class="px-2.5 py-1 bg-slate-200 text-slate-600 rounded-full text-[10px] sm:text-[11px] font-bold">
                                            Progres <span x-text="ach.progress"></span>
                                        </span>
                                    </template>
                                </div>

                                <h4 class="font-black font-heading text-base sm:text-lg text-slate-800 mb-1" x-text="ach.title"></h4>
                                <p class="text-xs font-semibold text-slate-600 mb-3" x-text="ach.description"></p>
                            </div>

                            <!-- Reward Bottom Box -->
                            <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-xs">
                                <span class="font-bold text-slate-500">Hadiah:</span>
                                <span class="font-black text-purple-700 bg-purple-50 px-2 py-0.5 rounded-lg border border-purple-200" x-text="ach.reward_title"></span>
                            </div>

                        </div>
                    </template>
                </div>
            </div>

        </div>
    </template>

    <!-- TAB 2: PARENT ACHIEVEMENTS & PRINTABLE CERTIFICATES -->
    <template x-if="activeTab === 'parents'">
        <div class="flex flex-col gap-6 sm:gap-8">
            
            <!-- Printable Certificate Studio Section -->
            <div class="bg-gradient-to-r from-sky-400 to-indigo-500 text-white rounded-3xl p-5 sm:p-7 md:p-8 shadow-md border-4 border-sky-300">
                <div class="flex items-center gap-3 mb-2">
                    <span class="emoji-icon text-3xl">📜</span>
                    <div>
                        <span class="text-xs font-black uppercase text-sky-200">Fitur Kebanggaan Keluarga</span>
                        <h3 class="text-xl sm:text-2xl font-black font-heading text-white leading-tight">
                            Studio Sertifikat Kelulusan Siap Cetak (Printable)
                        </h3>
                    </div>
                </div>
                <p class="text-xs sm:text-sm text-sky-100 max-w-2xl mb-5">
                    Unduh dan cetak sertifikat resmi kelulusan pulau anak untuk dipajang di dinding kamar atau pigura sebagai bentuk apresiasi prestasi belajar!
                </p>

                <!-- Certificate Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3.5 sm:gap-4">
                    <template x-for="cert in certificates" :key="cert.id">
                        <div class="bg-white text-slate-800 rounded-2xl p-4 sm:p-5 border-3 border-amber-300 shadow-md flex flex-col justify-between gap-3 sm:gap-4">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-bold text-slate-400">📜 Sertifikat Resmi</span>
                                    <span class="text-lg">⭐</span>
                                </div>
                                <h4 class="font-black font-heading text-sm sm:text-base text-slate-900 mb-1" x-text="cert.title"></h4>
                                <span class="inline-block text-[10px] sm:text-[11px] font-extrabold text-amber-800 bg-amber-100 px-2.5 py-0.5 rounded-full" x-text="cert.badge"></span>
                            </div>

                            <button type="button" @click="openCert(cert)"
                                    class="w-full py-2.5 btn-3d btn-3d-yellow rounded-xl font-black text-xs text-amber-950 flex items-center justify-center gap-1.5 shadow-xs">
                                <span>🖨️</span>
                                <span>Lihat & Cetak Sertifikat</span>
                            </button>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Super Parent Badges -->
            <div>
                <h3 class="text-lg sm:text-xl font-black font-heading text-slate-800 mb-3.5 flex items-center gap-2">
                    <span class="emoji-icon">🌟</span>
                    <span>Lencana Pendampingan Orang Tua Hebat</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3.5 sm:gap-5">
                    <template x-for="pAch in parentAchievements" :key="pAch.id">
                        <div class="bg-white rounded-3xl p-4 sm:p-5 border-3 border-purple-200 shadow-xs flex flex-col justify-between gap-3 sm:gap-4 hover:shadow-md transition-shadow">
                            <div>
                                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-2xl sm:text-3xl mb-2.5 border-2 border-purple-300">
                                    <span class="emoji-icon" x-text="pAch.icon"></span>
                                </div>
                                <h4 class="font-black font-heading text-sm sm:text-base text-slate-800 mb-1" x-text="pAch.title"></h4>
                                <p class="text-xs font-semibold text-slate-600" x-text="pAch.description"></p>
                            </div>
                            <span class="px-3 py-1 bg-purple-50 text-purple-800 font-black text-[10px] sm:text-xs rounded-full border border-purple-200 text-center" x-text="pAch.badge_label"></span>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </template>

    <!-- PRINTABLE CERTIFICATE MODAL -->
    <div x-show="showCertModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/70 backdrop-blur-md overflow-y-auto"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-10 max-w-2xl w-full border-6 border-yellow-400 shadow-2xl relative text-center my-8"
             @click.away="showCertModal = false">
            
            <button @click="showCertModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-2xl cursor-pointer">
                ✖
            </button>

            <template x-if="selectedCert">
                <div class="border-4 border-dashed border-amber-300 p-6 sm:p-8 rounded-2xl bg-gradient-to-b from-amber-50 via-white to-yellow-50">
                    
                    <!-- Certificate Header -->
                    <div class="flex items-center justify-center gap-3 mb-2">
                        <span class="text-4xl">🌟</span>
                        <h4 class="text-sm sm:text-base font-extrabold uppercase tracking-widest text-sky-800">
                            YukBelajar PAUD • Piagam Kelulusan
                        </h4>
                        <span class="text-4xl">🌟</span>
                    </div>

                    <h2 class="text-2xl sm:text-4xl font-black font-heading text-amber-950 mb-2">
                        SERTIFIKAT KELULUSAN
                    </h2>
                    <p class="text-xs sm:text-sm font-bold text-slate-500 mb-6">Dengan bangga piagam penghargaan ini diberikan kepada:</p>

                    <!-- Child Recipient Name -->
                    <div class="my-4">
                        <h3 class="text-3xl sm:text-5xl font-black font-heading text-sky-700 underline decoration-wavy decoration-amber-400"
                            x-text="selectedCert.recipient">
                        </h3>
                        <p class="text-sm font-extrabold text-slate-700 mt-2">
                            Sebagai Petualang Cilik yang Hebat & Berprestasi di:
                        </p>
                        <p class="text-xl sm:text-2xl font-black font-heading text-amber-900 mt-1"
                            x-text="selectedCert.title">
                        </p>
                    </div>

                    <!-- Seal & Signature Stamps -->
                    <div class="flex items-center justify-between mt-8 pt-6 border-t-2 border-amber-200 text-left">
                        <div class="text-center">
                            <span class="text-4xl block">🐱</span>
                            <span class="text-xs font-bold text-slate-600">Kiki Kucing Pintar</span>
                            <span class="text-[10px] text-slate-400 block">Maskot Edukasi</span>
                        </div>

                        <div class="w-16 h-16 rounded-full bg-yellow-400 border-4 border-yellow-500 flex items-center justify-center text-2xl shadow-md animate-bounce-slow">
                            ⭐
                        </div>

                        <div class="text-center">
                            <span class="text-4xl block">👨‍🏫</span>
                            <span class="text-xs font-bold text-slate-600">Pak Guru Iqbal</span>
                            <span class="text-[10px] text-slate-400 block">Kurator PAUD</span>
                        </div>
                    </div>

                </div>
            </template>

            <!-- Actions: Print / Download -->
            <div class="flex gap-4 mt-6">
                <button type="button" @click="showCertModal = false"
                        class="flex-1 py-3.5 bg-slate-200 hover:bg-slate-300 font-bold text-slate-700 rounded-2xl">
                    Tutup
                </button>
                <button type="button" @click="printCertificate()"
                        class="flex-1 py-3.5 btn-3d btn-3d-yellow rounded-2xl text-amber-950 font-black flex items-center justify-center gap-2">
                    <span>🖨️</span>
                    <span>Cetak / Simpan PDF</span>
                </button>
            </div>

        </div>
    </div>

    <!-- ACHIEVEMENT DETAIL / REWARD CLAIM MODAL -->
    <div x-show="showRewardModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-sm w-full border-4 border-amber-400 shadow-2xl text-center relative"
             @click.away="showRewardModal = false">
            
            <button @click="showRewardModal = false" 
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 font-black text-xl cursor-pointer">
                ✖
            </button>

            <template x-if="selectedAchievement">
                <div>
                    <div class="w-24 h-24 rounded-full mx-auto mb-4 flex items-center justify-center text-6xl shadow-lg border-4"
                         :class="selectedAchievement.is_unlocked ? 'bg-amber-100 border-amber-400 animate-wiggle' : 'bg-slate-200 border-slate-300 grayscale'">
                        <span x-text="selectedAchievement.is_unlocked ? selectedAchievement.icon : '🔒'"></span>
                    </div>

                    <h3 class="text-2xl font-black font-heading text-amber-950 mb-1"
                        x-text="selectedAchievement.title">
                    </h3>

                    <p class="text-xs font-bold text-slate-600 mb-4" x-text="selectedAchievement.description"></p>

                    <div class="p-3 bg-amber-50 border border-amber-200 rounded-2xl text-xs text-amber-900 font-bold mb-6">
                        🎁 Hadiah: <span x-text="selectedAchievement.reward_title"></span>
                    </div>

                    <button @click="showRewardModal = false" 
                            class="w-full py-3 btn-3d btn-3d-yellow rounded-2xl text-amber-950 font-black">
                        Tutup
                    </button>
                </div>
            </template>

        </div>
    </div>

</div>
@endsection

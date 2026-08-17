@extends('layouts.app')

@section('title', 'Panggung Sahabat Petualang - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-5xl mx-auto pb-16"
     x-data="{
         friends: {{ Js::from($friends) }},
         milestone: {{ Js::from($milestone) }},
         cheerMessages: {{ Js::from($milestone['recent_cheers']) }},
         
         cheerFriend(friend, type) {
             if (type === 'clap') {
                 friend.claps_count++;
                 this.milestone.current_stars++;
                 if (window.soundEngine) {
                     window.soundEngine.playCorrect();
                     window.soundEngine.speak('Tepuk tangan untuk ' + friend.name + ' yang hebat!');
                 }
                 window.triggerConfetti(0.4);
                 this.cheerMessages.unshift('Kamu memberi 👏 Tepuk Tangan untuk ' + friend.name + '!');
             } else if (type === 'balloon') {
                 friend.balloons_count++;
                 this.milestone.current_stars++;
                 if (window.soundEngine) {
                     window.soundEngine.playClick();
                     window.soundEngine.speak('Balon ceria terbang untuk ' + friend.name + '!');
                 }
                 this.cheerMessages.unshift('Kamu mengirim 🎈 Balon Ceria untuk ' + friend.name + '!');
             } else if (type === 'star') {
                 friend.stars_given++;
                 this.milestone.current_stars += 2;
                 if (window.soundEngine) {
                     window.soundEngine.playVictory();
                     window.soundEngine.speak('Bintang semangat untuk ' + friend.name + '!');
                 }
                 window.triggerConfetti(0.6);
                 this.cheerMessages.unshift('Kamu mengirim ⭐ Bintang Semangat untuk ' + friend.name + '!');
             }
         }
     }">

    <!-- Top Heading Banner -->
    <div class="bg-gradient-to-r from-emerald-500 via-teal-500 to-sky-500 border-4 border-emerald-600 rounded-3xl p-5 sm:p-7 md:p-8 text-white shadow-md flex flex-col md:flex-row items-center justify-between gap-5 sm:gap-6 relative overflow-hidden">
        <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 text-center sm:text-left z-10">
            <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white/20 backdrop-blur-md rounded-full border-4 border-white/40 flex items-center justify-center text-4xl sm:text-5xl shadow-inner animate-bounce-slow shrink-0">
                <span class="emoji-icon">👥</span>
            </div>
            <div>
                <span class="inline-block bg-emerald-900/40 text-emerald-100 font-extrabold text-[11px] sm:text-xs px-3 py-1 rounded-full uppercase tracking-wider mb-1">
                    Komunitas Belajar Ceria
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black font-heading text-white leading-tight">
                    Panggung Sahabat Petualang
                </h2>
                <p class="text-xs sm:text-sm font-bold text-emerald-50 mt-1 max-w-xl">
                    Saling menyapa, beri tepuk tangan ceria, dan kumpulkan bintang bersama teman-teman! 🌟
                </p>
            </div>
        </div>

        <!-- Quick Summary Badge -->
        <div class="bg-white/95 p-3.5 sm:p-4 rounded-2xl border-3 border-emerald-300 shadow-xs text-center shrink-0 z-10 w-full md:w-auto min-w-[170px]">
            <span class="text-[11px] font-bold text-slate-500 uppercase">Petualang Aktif</span>
            <div class="text-2xl sm:text-3xl font-black font-heading text-emerald-950 my-0.5">
                <span class="text-emerald-600" x-text="milestone.active_adventurers_count"></span> <span class="text-sm font-bold text-emerald-800">Anak</span>
            </div>
            <span class="text-[10px] sm:text-[11px] font-black text-emerald-800">Sedang Belajar 🌟</span>
        </div>

        <div class="absolute -right-8 -bottom-8 text-9xl opacity-20 pointer-events-none">🎈</div>
    </div>

    <!-- Cooperative Goal: Giant Star Milestone -->
    <div class="bg-gradient-to-r from-amber-50 via-yellow-50 to-amber-50 border-4 border-amber-400 rounded-3xl p-5 sm:p-7 shadow-sm">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 sm:gap-6 mb-3 sm:mb-4">
            <div class="flex flex-col sm:flex-row items-center gap-3 sm:gap-4 text-center sm:text-left">
                <div class="w-14 h-14 sm:w-16 sm:h-16 bg-amber-200 border-3 border-amber-400 rounded-2xl flex items-center justify-center text-3xl sm:text-4xl shadow-inner animate-wiggle shrink-0">
                    <span class="emoji-icon">⭐</span>
                </div>
                <div>
                    <span class="text-[10px] sm:text-xs font-black uppercase text-amber-700 bg-amber-200 px-3 py-0.5 rounded-full inline-block">
                        🎯 Misi Bintang Bersama Seluruh Anak
                    </span>
                    <h3 class="text-xl sm:text-2xl font-black font-heading text-amber-950 mt-1 leading-snug">
                        Kumpulkan 500 Bintang Emas Bersama!
                    </h3>
                    <p class="text-xs sm:text-sm font-bold text-amber-900 mt-0.5">
                        Hadiah: <span class="font-extrabold underline text-amber-950" x-text="milestone.reward_title"></span>
                    </p>
                </div>
            </div>

            <!-- Current Star Progress Count -->
            <div class="text-center md:text-right shrink-0">
                <div class="text-2xl sm:text-3xl font-black font-heading text-amber-950">
                    <span x-text="milestone.current_stars"></span> <span class="text-base sm:text-lg text-slate-500 font-bold">/ 500 ⭐</span>
                </div>
                <span class="text-[11px] sm:text-xs font-bold text-amber-800">
                    Kurang <span x-text="500 - milestone.current_stars"></span> bintang lagi!
                </span>
            </div>
        </div>

        <!-- Animated Progress Bar -->
        <div class="w-full bg-amber-200 rounded-full h-6 sm:h-7 p-1 border-3 border-amber-400 shadow-inner">
            <div class="bg-gradient-to-r from-yellow-400 via-amber-400 to-orange-400 h-full rounded-full transition-all duration-500 shadow-sm flex items-center justify-end pr-2 font-black text-[11px] sm:text-xs text-amber-950"
                 :style="'width: ' + Math.min(100, Math.round((milestone.current_stars / 500) * 100)) + '%'">
                <span x-text="Math.min(100, Math.round((milestone.current_stars / 500) * 100)) + '%'"></span>
            </div>
        </div>
    </div>

    <!-- Active Friends Stage Grid -->
    <div>
        <h3 class="text-lg sm:text-xl font-black font-heading text-slate-800 mb-3.5 flex items-center gap-2">
            <span class="emoji-icon">🐾</span>
            <span>Panggung Sahabat Cilik yang Sedang Belajar</span>
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3.5 sm:gap-5">
            <template x-for="f in friends" :key="f.id">
                <div class="bg-white border-3 sm:border-4 rounded-3xl p-4 sm:p-5 shadow-xs flex flex-col justify-between gap-3 sm:gap-4 transition-all hover:scale-102 hover:shadow-md"
                     :class="f.name.includes('Kamu') ? 'border-sky-400 ring-4 ring-sky-100 bg-sky-50/40' : 'border-slate-200'">
                    
                    <div>
                        <!-- Header: Avatar & Name -->
                        <div class="flex items-center justify-between gap-2.5 sm:gap-3 mb-2.5 sm:mb-3">
                            <div class="flex items-center gap-2.5 sm:gap-3">
                                <div class="relative w-12 h-12 sm:w-14 sm:h-14 bg-slate-100 rounded-2xl border-2 sm:border-3 border-slate-300 flex items-center justify-center text-3xl sm:text-4xl shadow-inner shrink-0">
                                    <span class="emoji-icon" x-text="f.avatar_emoji"></span>
                                    <!-- Accessory Overlay -->
                                    <template x-if="f.accessory">
                                        <span class="absolute -top-2 -right-2 text-xl sm:text-2xl animate-wiggle" x-text="f.accessory"></span>
                                    </template>
                                </div>

                                <div>
                                    <div class="flex items-center gap-1.5">
                                        <h4 class="font-black font-heading text-base sm:text-lg text-slate-900 leading-tight" x-text="f.name"></h4>
                                        <template x-if="f.is_online">
                                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse shrink-0" title="Sedang Aktif"></span>
                                        </template>
                                    </div>
                                    <span class="text-[11px] sm:text-xs font-bold text-slate-500" x-text="f.age + ' Tahun • ' + f.badge"></span>
                                </div>
                            </div>

                            <!-- Star Count Badge -->
                            <div class="bg-amber-100 border-2 border-amber-300 px-2 sm:px-2.5 py-0.5 sm:py-1 rounded-full font-black text-[11px] sm:text-xs text-amber-950 flex items-center gap-1 shrink-0">
                                <span>⭐</span>
                                <span x-text="f.stars_count"></span>
                            </div>
                        </div>

                        <!-- Activity Status Box -->
                        <div class="p-2.5 sm:p-3 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-bold text-slate-700">
                            <span class="text-slate-400 block text-[10px] uppercase font-black mb-0.5">Kabar Petualangan:</span>
                            <span class="line-clamp-2" x-text="f.recent_action"></span>
                        </div>
                    </div>

                    <!-- Cheer Buttons -->
                    <div class="pt-2.5 sm:pt-3 border-t border-slate-100 flex items-center justify-between gap-1.5 sm:gap-2">
                        <button type="button" @click="cheerFriend(f, 'clap')"
                                class="flex-1 py-2 bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-xl font-black text-xs flex items-center justify-center gap-1 transition-all cursor-pointer">
                            <span>👏</span>
                            <span x-text="f.claps_count"></span>
                        </button>

                        <button type="button" @click="cheerFriend(f, 'balloon')"
                                class="flex-1 py-2 bg-sky-50 hover:bg-sky-100 border border-sky-300 text-sky-800 rounded-xl font-black text-xs flex items-center justify-center gap-1 transition-all cursor-pointer">
                            <span>🎈</span>
                            <span x-text="f.balloons_count"></span>
                        </button>

                        <button type="button" @click="cheerFriend(f, 'star')"
                                class="flex-1 py-2 bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-900 rounded-xl font-black text-xs flex items-center justify-center gap-1 transition-all cursor-pointer">
                            <span>⭐</span>
                            <span x-text="f.stars_given"></span>
                        </button>
                    </div>

                </div>
            </template>
        </div>
    </div>

    <!-- Live Friendly Cheer Activity Stream -->
    <div class="bg-white border-3 border-slate-200 rounded-3xl p-4 sm:p-6 shadow-xs">
        <h4 class="text-xs sm:text-sm font-black uppercase text-slate-700 mb-3 flex items-center gap-2">
            <span class="emoji-icon">💬</span>
            <span>Kabar Sapaan & Semangat Hari Ini:</span>
        </h4>

        <div class="flex flex-col gap-2">
            <template x-for="(msg, idx) in cheerMessages.slice(0, 5)" :key="idx">
                <div class="p-2.5 sm:p-3 bg-slate-50 border border-slate-100 rounded-xl text-xs font-bold text-slate-700 flex items-center gap-2 animate-fade-in">
                    <span class="text-base shrink-0">✨</span>
                    <span x-text="msg"></span>
                </div>
            </template>
        </div>
    </div>

</div>
@endsection

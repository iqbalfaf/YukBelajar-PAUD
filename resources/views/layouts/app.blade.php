<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'YukBelajar PAUD - Game Belajar & Kuis Bergambar Ceria')</title>
    <meta name="description" content="Platform Belajar dan Kuis Bergambar Interaktif Ramah Anak Usia Dini (3-6 Tahun) dengan Audio Suara Ceria dan AI Generator.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Quicksand:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
    @stack('styles')
</head>
<body class="min-h-screen bg-gradient-to-b from-sky-200 via-sky-100 to-amber-50 text-slate-800 flex flex-col font-sans overflow-x-hidden relative"
      x-data="{
          mobileNavOpen: false,
          audioUnlocked: false,
          isMuted: localStorage.getItem('kuy_muted') === 'true',
          showParentalGate: false,
          parentalAnswer: '',
          parentalError: false,
          num1: 4,
          num2: 3,
          showStreakModal: false,
          showLevelUnlockModal: false,
          unlockedLevelData: { level: 2, title: 'Level 2: Menengah', message: 'Hore! Level baru sudah terbuka untukmu! Hebat sekali!' },
          initAudio() {
              if (window.soundEngine) {
                  window.soundEngine.initContext();
                  window.soundEngine.playVictory();
              }
              this.audioUnlocked = true;
          },
          toggleAudio() {
              if (window.soundEngine) {
                  this.isMuted = window.soundEngine.toggleMute();
              }
          },
          openParentalGate() {
              this.num1 = Math.floor(Math.random() * 5) + 2;
              this.num2 = Math.floor(Math.random() * 4) + 1;
              this.parentalAnswer = '';
              this.parentalError = false;
              this.showParentalGate = true;
          },
          checkParentalGate() {
              if (parseInt(this.parentalAnswer) === (this.num1 + this.num2)) {
                  window.location.href = '{{ route('parents') }}';
              } else {
                  this.parentalError = true;
                  if (window.soundEngine) window.soundEngine.playWrong();
              }
          },
          triggerLevelUnlockCelebration(data) {
              this.unlockedLevelData = data;
              this.showLevelUnlockModal = true;
              if (window.soundEngine) {
                  window.soundEngine.playVictory();
                  setTimeout(() => {
                      window.soundEngine.speak(data.message || 'Hore! Level baru sudah terbuka untukmu! Hebat sekali!');
                  }, 300);
              }
              if (window.triggerConfetti) {
                  window.triggerConfetti(0.5);
                  setTimeout(() => window.triggerConfetti(0.4), 400);
              }
          }
      }"
      x-init="
          window.addEventListener('level-unlocked', (e) => {
              triggerLevelUnlockCelebration(e.detail);
          });
      ">

    <!-- Floating Background Clouds -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0 opacity-40">
        <div class="absolute top-12 left-10 text-6xl animate-cloud-slow">☁️</div>
        <div class="absolute top-6 left-2/3 text-6xl animate-cloud-slow" style="animation-delay: -5s;">☀️</div>
    </div>

    <!-- Top Navigation Header -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b-4 border-sky-300 shadow-sm px-3 sm:px-5 lg:px-6 py-2.5">
        <div class="max-w-[1600px] w-full mx-auto flex items-center justify-between gap-2 lg:gap-3 xl:gap-4">
            
            <!-- Left: Logo & Brand -->
            <a href="{{ route('landing') }}" @click="if(window.soundEngine) window.soundEngine.playClick()" class="flex items-center gap-2 group shrink-0">
                <span class="emoji-icon text-2xl sm:text-3xl lg:text-3xl group-hover:rotate-12 transition-transform drop-shadow-xs">🌟</span>
                <div>
                    <h1 class="text-base sm:text-lg lg:text-xl font-black font-heading tracking-wide text-sky-700 leading-none">
                        YukBelajar <span class="text-amber-500">PAUD</span>
                    </h1>
                    <p class="text-[9px] sm:text-[10px] font-bold text-slate-500 hidden sm:block">Game Belajar & Kuis Ceria</p>
                </div>
            </a>

            <!-- Center: Desktop Navigation Links (Visible on xl+ screens: 1280px+) -->
            <nav class="hidden xl:flex items-center gap-1 2xl:gap-2">
                <a href="{{ route('home') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="px-2.5 2xl:px-3.5 py-1.5 rounded-2xl font-black text-xs 2xl:text-sm whitespace-nowrap shrink-0 transition-all flex items-center gap-1.5 {{ request()->routeIs('home') ? 'bg-amber-400 text-amber-950 shadow-xs ring-2 ring-amber-300' : 'text-slate-700 hover:bg-slate-100 font-extrabold' }}">
                    <span class="emoji-icon text-base shrink-0">🎮</span>
                    <span>Petualangan</span>
                </a>

                <a href="{{ route('stickers') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="px-2.5 2xl:px-3.5 py-1.5 rounded-2xl font-black text-xs 2xl:text-sm whitespace-nowrap shrink-0 transition-all flex items-center gap-1.5 {{ request()->routeIs('stickers') ? 'bg-purple-600 text-white shadow-xs ring-2 ring-purple-300' : 'text-slate-700 hover:bg-slate-100 font-extrabold' }}">
                    <span class="emoji-icon text-base shrink-0">🏆</span>
                    <span>Buku Stiker</span>
                </a>

                <a href="{{ route('achievements') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="px-2.5 2xl:px-3.5 py-1.5 rounded-2xl font-black text-xs 2xl:text-sm whitespace-nowrap shrink-0 transition-all flex items-center gap-1.5 {{ request()->routeIs('achievements') ? 'bg-amber-500 text-white shadow-xs ring-2 ring-amber-300' : 'text-slate-700 hover:bg-slate-100 font-extrabold' }}">
                    <span class="emoji-icon text-base shrink-0">🎖️</span>
                    <span>Ruang Piala</span>
                </a>

                <a href="{{ route('community') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="px-2.5 2xl:px-3.5 py-1.5 rounded-2xl font-black text-xs 2xl:text-sm whitespace-nowrap shrink-0 transition-all flex items-center gap-1.5 {{ request()->routeIs('community') ? 'bg-emerald-600 text-white shadow-xs ring-2 ring-emerald-300' : 'text-slate-700 hover:bg-slate-100 font-extrabold' }}">
                    <span class="emoji-icon text-base shrink-0">👥</span>
                    <span>Sahabat</span>
                </a>

                <button type="button" @click="openParentalGate()"
                        class="px-2.5 2xl:px-3.5 py-1.5 rounded-2xl font-extrabold text-xs 2xl:text-sm whitespace-nowrap shrink-0 transition-all flex items-center gap-1.5 text-slate-700 hover:bg-slate-100 cursor-pointer">
                    <span class="emoji-icon text-base shrink-0">🔒</span>
                    <span>Orang Tua</span>
                </button>
            </nav>

            <!-- Right: Action Badges & Audio & Mobile Toggle -->
            <div class="flex items-center gap-1.5 sm:gap-2 shrink-0">
                
                <!-- Gold Stars Badge (Always Visible) -->
                <div class="flex items-center gap-1 bg-amber-50 border-2 border-amber-300 px-2.5 py-1 rounded-2xl shadow-xs text-yellow-950 font-black text-xs sm:text-sm whitespace-nowrap shrink-0">
                    <span class="emoji-icon text-sm animate-wiggle">⭐</span>
                    <span>{{ auth()->check() ? auth()->user()->total_stars : 35 }}</span>
                </div>

                <!-- Daily Streak Badge (Visible on sm+) -->
                <button @click="showStreakModal = true; if(window.soundEngine) { window.soundEngine.playChirp(); window.soundEngine.speak('Semangat belajar harian! Kamu sudah belajar {{ auth()->check() ? (auth()->user()->current_streak_days ?? 1) : 1 }} hari berturut-turut!'); }"
                        title="Semangat Belajar Harian (Daily Streak 🔥)"
                        class="hidden sm:flex items-center gap-1 bg-orange-50 hover:bg-orange-100 border-2 border-orange-400 px-2.5 py-1 rounded-2xl shadow-xs text-orange-950 font-black text-xs sm:text-sm cursor-pointer hover:scale-105 transition-transform whitespace-nowrap shrink-0">
                    <span class="emoji-icon text-sm animate-bounce-slow">🔥</span>
                    <span>{{ auth()->check() ? (auth()->user()->current_streak_days ?? 1) : 1 }} <span class="hidden md:inline text-[10px] 2xl:text-[11px] font-bold text-orange-800">Hari</span></span>
                </button>

                <!-- Audio Toggle (Always Visible) -->
                <button @click="toggleAudio()" title="Suara Musik & Efek"
                        class="w-8 h-8 sm:w-8 sm:h-8 2xl:w-9 2xl:h-9 flex items-center justify-center bg-sky-100 hover:bg-sky-200 border-2 border-sky-400 rounded-2xl shadow-xs transition-all text-sky-800 font-bold text-xs sm:text-sm cursor-pointer hover:scale-105 shrink-0">
                    <span class="emoji-icon" x-text="isMuted ? '🔇' : '🔊'"></span>
                </button>

                <!-- Desktop Profile & Action Buttons (Visible on xl+) -->
                <div class="hidden xl:flex items-center gap-1.5 2xl:gap-2 shrink-0">
                    @auth
                        <a href="{{ route('profile') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                           class="flex items-center gap-1.5 px-2.5 2xl:px-3 py-1 bg-sky-50 hover:bg-sky-100 border-2 border-sky-300 rounded-2xl text-xs font-black text-sky-900 shadow-xs hover:scale-105 transition-all whitespace-nowrap shrink-0">
                            <span class="emoji-icon text-sm">{{ auth()->user()->avatar_emoji ?? '🦖' }}</span>
                            <span class="whitespace-nowrap truncate max-w-[80px] 2xl:max-w-[160px]">{{ auth()->user()->name }}</span>
                        </a>

                        @if (in_array(auth()->user()->role, ['admin', 'teacher']))
                            <a href="{{ route('admin.dashboard') }}"
                               class="px-2 2xl:px-3 py-1 rounded-2xl font-black text-xs bg-emerald-100 hover:bg-emerald-200 border-2 border-emerald-300 text-emerald-800 flex items-center gap-1 hover:scale-105 transition-all whitespace-nowrap shrink-0"
                               title="Panel Guru & Admin">
                                <span class="emoji-icon text-sm">🦁</span>
                                <span class="hidden 2xl:inline">Panel Guru</span>
                            </a>
                        @endif

                        <form action="{{ route('logout') }}" method="POST" class="inline shrink-0">
                            @csrf
                            <button type="submit" title="Keluar dari Akun"
                                    class="w-7 h-7 2xl:w-8 2xl:h-8 flex items-center justify-center bg-rose-50 hover:bg-rose-100 border-2 border-rose-300 rounded-2xl text-rose-700 shadow-xs transition-all text-xs font-bold cursor-pointer hover:scale-105">
                                <span class="emoji-icon">🚪</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" 
                           class="px-3 2xl:px-4 py-1.5 2xl:py-2 bg-amber-400 hover:bg-yellow-300 border-2 border-amber-500 rounded-2xl text-amber-950 font-black text-xs sm:text-sm shadow-xs hover:scale-105 transition-all whitespace-nowrap shrink-0">
                            🔑 Masuk
                        </a>
                        <a href="{{ route('register') }}" 
                           class="px-3 2xl:px-4 py-1.5 2xl:py-2 bg-sky-500 hover:bg-sky-400 border-2 border-sky-600 rounded-2xl text-white font-black text-xs sm:text-sm shadow-xs hover:scale-105 transition-all whitespace-nowrap shrink-0">
                            ✨ Daftar
                        </a>
                    @endauth
                </div>

                <!-- Hamburger Button for Mobile / Tablet (< xl) -->
                <button type="button" @click="mobileNavOpen = true"
                        class="xl:hidden w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center bg-slate-100 hover:bg-slate-200 border-2 border-slate-300 rounded-2xl text-slate-700 font-black text-base shadow-xs cursor-pointer active:scale-95 transition-all shrink-0">
                    ☰
                </button>
            </div>

        </div>
    </header>

    <!-- Mobile Slide-Over Navigation Drawer (Top-level Fixed Full Screen) -->
    <div x-show="mobileNavOpen" x-cloak class="fixed inset-0 z-50 xl:hidden" aria-modal="true">
        <!-- Backdrop -->
        <div x-show="mobileNavOpen" 
             x-transition:enter="transition-opacity ease-linear duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs" 
             @click="mobileNavOpen = false"></div>

        <!-- Drawer Sliding Container -->
        <div class="fixed inset-0 flex justify-end pointer-events-none">
            <div x-show="mobileNavOpen"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full"
                 class="w-full max-w-xs bg-white h-screen shadow-2xl p-6 flex flex-col justify-between overflow-y-auto pointer-events-auto z-50">
                
                <div class="flex flex-col gap-5">
                    <!-- Drawer Header -->
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-3xl">🌟</span>
                            <span class="font-black text-lg text-sky-700 font-heading">YukBelajar PAUD</span>
                        </div>
                        <button @click="mobileNavOpen = false" class="w-8 h-8 rounded-full bg-slate-100 text-slate-500 font-bold flex items-center justify-center hover:bg-slate-200 cursor-pointer">
                            ✕
                        </button>
                    </div>

                    <!-- User Profile Card in Drawer (if logged in) -->
                    @auth
                        <div class="bg-gradient-to-r from-amber-100 to-yellow-50 border-2 border-amber-300 p-4 rounded-2xl flex items-center gap-3">
                            <span class="text-4xl">{{ auth()->user()->avatar_emoji ?? '🦖' }}</span>
                            <div>
                                <h4 class="font-black text-slate-800 text-sm">{{ auth()->user()->name }}</h4>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-xs font-black text-amber-900">⭐ {{ auth()->user()->total_stars }}</span>
                                    <span class="text-xs font-black text-orange-700">🔥 {{ auth()->user()->current_streak_days ?? 1 }} Hari</span>
                                </div>
                            </div>
                        </div>
                    @endauth

                    <!-- Navigation Links -->
                    <nav class="flex flex-col gap-2">
                        <a href="{{ route('home') }}" @click="mobileNavOpen = false; if(window.soundEngine) window.soundEngine.playClick()"
                           class="flex items-center gap-3 px-4 py-3 rounded-2xl font-black text-sm transition-all {{ request()->routeIs('home') ? 'bg-amber-400 text-amber-950 shadow-xs' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-xl">🎮</span>
                            <span>Taman Petualangan</span>
                        </a>

                        <a href="{{ route('stickers') }}" @click="mobileNavOpen = false; if(window.soundEngine) window.soundEngine.playClick()"
                           class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm transition-all {{ request()->routeIs('stickers') ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-xl">🏆</span>
                            <span>Buku Stiker Virtual</span>
                        </a>

                        <a href="{{ route('achievements') }}" @click="mobileNavOpen = false; if(window.soundEngine) window.soundEngine.playClick()"
                           class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm transition-all {{ request()->routeIs('achievements') ? 'bg-amber-500 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-xl">🎖️</span>
                            <span>Ruang Piala & Prestasi</span>
                        </a>

                        <a href="{{ route('community') }}" @click="mobileNavOpen = false; if(window.soundEngine) window.soundEngine.playClick()"
                           class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm transition-all {{ request()->routeIs('community') ? 'bg-emerald-600 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-xl">👥</span>
                            <span>Sahabat Petualang</span>
                        </a>

                        <a href="{{ route('profile') }}" @click="mobileNavOpen = false; if(window.soundEngine) window.soundEngine.playClick()"
                           class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm transition-all {{ request()->routeIs('profile') ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-xl">👤</span>
                            <span>Profil Siswa</span>
                        </a>

                        <button type="button" @click="mobileNavOpen = false; openParentalGate()"
                                class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm text-slate-700 hover:bg-slate-100 text-left cursor-pointer">
                            <span class="text-xl">🔒</span>
                            <span>Portal Orang Tua</span>
                        </button>

                        @if (auth()->check() && in_array(auth()->user()->role, ['admin', 'teacher']))
                            <a href="{{ route('admin.dashboard') }}" @click="mobileNavOpen = false"
                               class="flex items-center gap-3 px-4 py-3 rounded-2xl font-bold text-sm bg-emerald-50 text-emerald-800 hover:bg-emerald-100 border border-emerald-200">
                                <span class="text-xl">🦁</span>
                                <span>Panel Guru & Admin</span>
                            </a>
                        @endif
                    </nav>
                </div>

                <!-- Bottom Drawer Buttons -->
                <div class="border-t border-slate-100 pt-4 flex flex-col gap-2">
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full py-3 bg-rose-50 hover:bg-rose-100 border-2 border-rose-300 rounded-2xl text-rose-700 font-black text-sm flex items-center justify-center gap-2 cursor-pointer">
                                <span>🚪</span>
                                <span>Keluar dari Akun</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="w-full py-3 bg-amber-400 hover:bg-yellow-300 border-2 border-amber-500 rounded-2xl text-amber-950 font-black text-sm text-center">
                            🔑 Masuk Akun
                        </a>
                        <a href="{{ route('register') }}" class="w-full py-3 bg-sky-500 hover:bg-sky-400 border-2 border-sky-600 rounded-2xl text-white font-black text-sm text-center">
                            ✨ Daftar Siswa Baru (+10 ⭐)
                        </a>
                    @endauth
                </div>

            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="flex-1 relative z-10 max-w-7xl mx-auto w-full px-3.5 sm:px-6 lg:px-8 py-5">
        @yield('content')
    </main>

    <!-- Playful Grass & Animal Footer -->
    <footer class="mt-auto relative z-10 bg-emerald-400 border-t-8 border-emerald-500 pt-8 pb-6 px-4 text-emerald-950">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div class="flex items-center gap-3">
                <span class="text-4xl">🐱</span>
                <div>
                    <p class="font-bold text-lg font-heading">YukBelajar PAUD &copy; {{ date('Y') }}</p>
                    <p class="text-xs font-semibold text-emerald-900">Platform Belajar & Kuis Game Ramah Anak Usia Dini 🇮🇩</p>
                </div>
            </div>
            <div class="flex items-center gap-4 text-sm font-bold flex-wrap justify-center">
                <a href="{{ route('landing') }}" class="hover:underline">Beranda</a>
                <a href="{{ route('home') }}" class="hover:underline">Petualangan Game</a>
                <a href="{{ route('community') }}" class="hover:underline">Panggung Sahabat</a>
                <a href="{{ route('achievements') }}" class="hover:underline">Ruang Piala</a>
                <a href="{{ route('stickers') }}" class="hover:underline">Buku Stiker</a>
                <a href="{{ route('login') }}" class="hover:underline">Masuk</a>
                <a href="{{ route('register') }}" class="hover:underline">Daftar Akun</a>
                <a href="{{ route('parents') }}" class="hover:underline">Menu Orang Tua</a>
                <a href="{{ route('profile') }}" class="hover:underline">Profil Akun</a>
                <a href="{{ route('admin.dashboard') }}" class="hover:underline">Panel Guru</a>
            </div>
        </div>
    </footer>

    <!-- Parental Gate Modal -->
    <div x-show="showParentalGate" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-sky-400 shadow-2xl text-center"
             @click.away="showParentalGate = false">
            <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl border-2 border-sky-300">
                🔒
            </div>
            <h3 class="text-2xl font-bold font-heading text-slate-800 mb-2">Portal Orang Tua & Guru</h3>
            <p class="text-sm font-semibold text-slate-600 mb-6">
                Untuk keamanan, silakan jawab soal matematika berikut untuk melanjutkan:
            </p>
            
            <div class="bg-sky-50 border-2 border-sky-200 rounded-2xl p-4 mb-4">
                <span class="text-3xl font-extrabold font-heading text-sky-800" x-text="`${num1} + ${num2} = ?`"></span>
            </div>

            <input type="number" x-model="parentalAnswer" @keyup.enter="checkParentalGate()"
                   placeholder="Tuliskan jawaban..."
                   class="w-full text-center text-2xl font-bold p-3 border-4 border-slate-300 focus:border-sky-500 rounded-2xl mb-3 outline-none" autofocus>

            <p x-show="parentalError" class="text-rose-600 font-bold text-sm mb-4">
                ⚠️ Jawaban belum tepat, silakan coba lagi!
            </p>

            <div class="flex gap-3">
                <button type="button" @click="showParentalGate = false"
                        class="flex-1 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700 font-bold rounded-2xl">
                    Batal
                </button>
                <button type="button" @click="checkParentalGate()"
                        class="flex-1 py-3 btn-3d btn-3d-sky rounded-2xl text-white">
                    Masuk
                </button>
            </div>
        </div>
    </div>

    <!-- Daily Learning Streak Milestone Modal -->
    <div x-show="showStreakModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-orange-400 shadow-2xl text-center relative overflow-hidden"
             @click.away="showStreakModal = false">
            <!-- Header glow background -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-orange-300/30 rounded-full blur-xl pointer-events-none"></div>
            <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-amber-300/30 rounded-full blur-xl pointer-events-none"></div>

            <div class="w-20 h-20 bg-gradient-to-tr from-orange-400 to-amber-300 rounded-3xl flex items-center justify-center mx-auto mb-4 text-4xl shadow-md border-3 border-white animate-bounce-slow">
                🔥
            </div>

            <span class="inline-block px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-xs font-black uppercase tracking-wider mb-2">
                Semangat Belajar Harian
            </span>

            <h3 class="text-2xl sm:text-3xl font-black font-heading text-slate-800 mb-2">
                {{ auth()->check() ? (auth()->user()->current_streak_days ?? 1) : 1 }} Hari Berturut-Turut!
            </h3>

            <p class="text-xs sm:text-sm font-semibold text-slate-600 mb-5">
                Konsistensi hebat! Belajarlah setiap hari untuk mengumpulkan api semangat dan membuka stiker langka eksklusif!
            </p>

            <!-- 3-Day & 7-Day Track Visual -->
            <div class="bg-orange-50 border-2 border-orange-200 rounded-2xl p-4 mb-5">
                <div class="flex items-center justify-between gap-2 mb-3">
                    <span class="text-xs font-bold text-orange-950">Milestone Hadiah Stiker:</span>
                    <span class="text-xs font-black text-orange-700">Target: 3 Hari 🔥</span>
                </div>
                
                <div class="grid grid-cols-3 gap-2">
                    @php
                        $curStreak = auth()->check() ? (auth()->user()->current_streak_days ?? 1) : 1;
                    @endphp
                    <div class="p-3 rounded-xl flex flex-col items-center gap-1 border-2 {{ $curStreak >= 1 ? 'bg-orange-500 border-orange-600 text-white shadow-xs' : 'bg-white border-orange-200 text-slate-400' }}">
                        <span class="text-xl">🔥</span>
                        <span class="text-[11px] font-black">Hari 1</span>
                        <span class="text-[9px] font-bold">{{ $curStreak >= 1 ? '✓ Tercapai' : 'Terkunci' }}</span>
                    </div>

                    <div class="p-3 rounded-xl flex flex-col items-center gap-1 border-2 {{ $curStreak >= 2 ? 'bg-orange-500 border-orange-600 text-white shadow-xs' : 'bg-white border-orange-200 text-slate-400' }}">
                        <span class="text-xl">🔥</span>
                        <span class="text-[11px] font-black">Hari 2</span>
                        <span class="text-[9px] font-bold">{{ $curStreak >= 2 ? '✓ Tercapai' : 'Terkunci' }}</span>
                    </div>

                    <div class="p-3 rounded-xl flex flex-col items-center gap-1 border-2 {{ $curStreak >= 3 ? 'bg-gradient-to-tr from-amber-400 to-yellow-300 border-amber-500 text-amber-950 shadow-xs' : 'bg-white border-orange-200 text-slate-400' }}">
                        <span class="text-xl">🎁</span>
                        <span class="text-[11px] font-black">Hari 3</span>
                        <span class="text-[9px] font-bold">{{ $curStreak >= 3 ? '⭐ Stiker Terbuka!' : 'Stiker Langka' }}</span>
                    </div>
                </div>

                <div class="mt-3 pt-3 border-t border-orange-200/80 flex items-center justify-between text-xs text-orange-900 font-bold">
                    <span>Hadiah: Stiker "🔥 Sang Jawara Api Semangat"</span>
                    <a href="{{ route('stickers') }}" class="text-sky-700 underline font-black">Buku Stiker →</a>
                </div>
            </div>

            <button type="button" @click="showStreakModal = false; if(window.soundEngine) window.soundEngine.playClick()"
                    class="btn-3d btn-3d-orange w-full py-3.5 rounded-2xl text-white font-extrabold text-sm shadow-md">
                Ayo Belajar Lebih Giat! 🚀
            </button>
        </div>
    </div>

    <!-- AUDIO-GUIDED LEVEL UNLOCK CELEBRATION MODAL (MASCOT KIKI) -->
    <div x-show="showLevelUnlockModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/70 backdrop-blur-md"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90">
        
        <div class="bg-gradient-to-b from-amber-50 via-white to-sky-50 rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-yellow-400 shadow-2xl text-center relative overflow-hidden"
             @click.away="showLevelUnlockModal = false">
            
            <!-- Confetti blast decoration -->
            <div class="text-4xl animate-bounce-slow mb-1">🎆 🌟 🎊</div>

            <!-- Mascot Kiki Avatar with animated speech bubble -->
            <div class="relative inline-block my-2">
                <div class="w-24 h-24 sm:w-28 sm:h-28 bg-gradient-to-tr from-yellow-300 via-amber-200 to-sky-200 rounded-full flex items-center justify-center mx-auto text-5xl sm:text-6xl border-4 border-white shadow-lg animate-wiggle">
                    🐱
                </div>
                <span class="absolute -bottom-2 -right-2 bg-yellow-400 border-2 border-white px-2 py-0.5 rounded-full text-xs font-black text-amber-950 shadow-xs">
                    Kiki si Kucing
                </span>
            </div>

            <!-- Dialogue Speech Bubble -->
            <div class="bg-white border-3 border-amber-300 rounded-3xl p-4 sm:p-5 shadow-xs mb-4 text-center relative mt-3">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 w-4 h-4 bg-white border-t-3 border-l-3 border-amber-300 rotate-45"></div>
                
                <h3 class="text-xl sm:text-2xl font-black font-heading text-amber-950 mb-1">
                    "Hore! Level Baru Terbuka!"
                </h3>
                <p class="text-sm sm:text-base font-bold text-slate-700" x-text="unlockedLevelData.message || 'Hore! Level baru sudah terbuka untukmu! Hebat sekali!'"></p>
            </div>

            <!-- Unlocked Level Badge Card -->
            <div class="bg-sky-50 border-2 border-sky-300 rounded-2xl p-3.5 mb-5 flex items-center justify-between text-left">
                <div class="flex items-center gap-3">
                    <span class="text-3xl">🔓</span>
                    <div>
                        <h4 class="text-sm font-black text-sky-950" x-text="unlockedLevelData.title || 'Level Baru Terbuka'"></h4>
                        <span class="text-xs font-bold text-sky-700">Kartu & Tantangan Baru Siap Dijelajahi!</span>
                    </div>
                </div>
                <button type="button" 
                        @click="if(window.soundEngine) window.soundEngine.speak(unlockedLevelData.message || 'Hore! Level baru sudah terbuka untukmu!')"
                        class="p-2.5 bg-sky-500 hover:bg-sky-400 text-white rounded-xl text-xs font-black shadow-xs flex items-center gap-1 cursor-pointer">
                    <span>🔊</span>
                    <span class="hidden sm:inline">Ulangi Suara</span>
                </button>
            </div>

            <div class="flex gap-3">
                <button type="button" @click="showLevelUnlockModal = false; if(window.soundEngine) window.soundEngine.playClick()"
                        class="flex-1 py-3.5 btn-3d btn-3d-yellow rounded-2xl text-amber-950 font-black text-sm shadow-md">
                    Jelajahi Level Baru Sekarang! 🗺️
                </button>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>

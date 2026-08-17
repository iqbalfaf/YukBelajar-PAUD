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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.2/twemoji.min.js" crossorigin="anonymous"></script>
    @stack('styles')
</head>
<body class="min-h-screen bg-gradient-to-b from-sky-200 via-sky-100 to-amber-50 text-slate-800 flex flex-col font-sans overflow-x-hidden relative"
      x-data="{
          audioUnlocked: false,
          isMuted: localStorage.getItem('kuy_muted') === 'true',
          showParentalGate: false,
          parentalAnswer: '',
          parentalError: false,
          num1: 4,
          num2: 3,
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
          }
      }">

    <!-- Floating Background Clouds -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0 opacity-40">
        <div class="absolute top-12 left-10 text-6xl animate-cloud-slow">☁️</div>
        <div class="absolute top-28 right-20 text-7xl animate-cloud-slow" style="animation-delay: -10s;">☁️</div>
        <div class="absolute top-72 left-1/3 text-5xl animate-cloud-slow" style="animation-delay: -18s;">☁️</div>
        <div class="absolute top-6 left-2/3 text-6xl animate-cloud-slow" style="animation-delay: -5s;">☀️</div>
    </div>

    <!-- Top Navigation Header -->
    <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b-4 border-sky-300 shadow-sm px-3 sm:px-6 py-2.5">
        <div class="max-w-7xl mx-auto flex flex-col gap-2">
            
            <!-- Row 1: Logo, Score, Audio & Quick Action -->
            <div class="flex items-center justify-between gap-2 w-full">
                <!-- Logo & Brand -->
                <a href="{{ route('landing') }}" @click="if(window.soundEngine) window.soundEngine.playClick()" class="flex items-center gap-2 group shrink-0">
                    <span class="text-2xl sm:text-3xl group-hover:rotate-12 transition-transform">🌟</span>
                    <div>
                        <h1 class="text-lg sm:text-xl font-bold tracking-wide text-sky-700 leading-none">
                            YukBelajar <span class="text-amber-500 font-extrabold">PAUD</span>
                        </h1>
                        <p class="text-[10px] sm:text-xs font-semibold text-slate-500 hidden sm:block">Game Belajar & Kuis Ceria</p>
                    </div>
                </a>

                <!-- Quick Status Badges & Controls -->
                <div class="flex items-center gap-1.5 sm:gap-2.5 shrink-0">
                    <!-- Gold Stars Score -->
                    <div class="flex items-center gap-1 bg-amber-50 border-2 border-amber-300 px-2.5 py-1 rounded-full shadow-xs text-yellow-900 font-black text-xs sm:text-sm">
                        <span class="text-sm sm:text-base animate-wiggle">⭐</span>
                        <span>{{ auth()->check() ? auth()->user()->total_stars : 35 }}</span>
                    </div>

                    <!-- Sound FX Toggle -->
                    <button @click="toggleAudio()" title="Suara Musik & Efek"
                            class="w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center bg-sky-100 hover:bg-sky-200 border-2 border-sky-400 rounded-full shadow-xs transition-all text-sky-800 font-bold text-sm cursor-pointer">
                        <span x-text="isMuted ? '🔇' : '🔊'"></span>
                    </button>

                    <!-- Parental Gate Button -->
                    <button @click="openParentalGate()"
                            class="flex items-center gap-1 bg-slate-100 hover:bg-slate-200 border-2 border-slate-300 px-2.5 py-1 rounded-full shadow-xs transition-all text-slate-700 font-bold text-xs cursor-pointer">
                        <span>🔒</span>
                        <span class="hidden sm:inline">Orang Tua</span>
                    </button>

                    @if (auth()->check() && in_array(auth()->user()->role, ['admin', 'teacher']))
                        <!-- Admin Link -->
                        <a href="{{ route('admin.dashboard') }}"
                           class="hidden sm:flex items-center gap-1 bg-emerald-100 hover:bg-emerald-200 border-2 border-emerald-400 px-2.5 py-1 rounded-full shadow-xs transition-all text-emerald-800 font-bold text-xs">
                            <span>🦁</span>
                            <span class="hidden md:inline">Panel Guru</span>
                        </a>
                    @endif

                    @auth
                        <!-- Logout Form -->
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" title="Keluar dari Akun"
                                    class="flex items-center gap-1 bg-rose-50 hover:bg-rose-100 border-2 border-rose-300 px-2.5 py-1 rounded-full shadow-xs transition-all text-rose-700 font-bold text-xs cursor-pointer">
                                <span>🚪</span>
                                <span class="hidden sm:inline">Keluar</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" 
                           class="flex items-center gap-1 bg-amber-400 hover:bg-yellow-300 border-2 border-amber-500 px-2.5 py-1 rounded-full shadow-xs transition-all text-amber-950 font-black text-xs">
                            <span>🔑</span>
                            <span>Masuk</span>
                        </a>
                        <a href="{{ route('register') }}" 
                           class="hidden sm:flex items-center gap-1 bg-sky-500 hover:bg-sky-400 border-2 border-sky-600 px-2.5 py-1 rounded-full shadow-xs transition-all text-white font-black text-xs">
                            <span>✨</span>
                            <span>Daftar</span>
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Row 2: Horizontal Scrollable Kids Navigation Bar (Zero Overlap on Mobile/Tablet) -->
            <nav class="flex items-center gap-1.5 overflow-x-auto pb-0.5 pt-0.5 no-scrollbar scroll-smooth w-full">
                <!-- Game Hub Link -->
                <a href="{{ route('home') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-extrabold whitespace-nowrap transition-all shrink-0 {{ request()->routeIs('home') ? 'bg-yellow-400 text-yellow-950 border-yellow-500 shadow-xs' : 'bg-yellow-50 text-yellow-900 border-yellow-300 hover:bg-yellow-100' }}">
                    <span>🎮</span>
                    <span>Petualangan</span>
                </a>

                <!-- Child Avatar & Name (Profil Siswa) -->
                <a href="{{ route('profile') }}" @click="if(window.soundEngine) window.soundEngine.playClick()" title="Pengaturan Profil Siswa & Orang Tua"
                   class="flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-extrabold whitespace-nowrap transition-all shrink-0 {{ request()->routeIs('profile') ? 'bg-sky-500 text-white border-sky-600 shadow-xs' : 'bg-amber-50 text-amber-900 border-amber-300 hover:bg-amber-100' }}">
                    <span class="animate-bounce-slow">{{ auth()->check() ? auth()->user()->avatar_emoji : '🦖' }}</span>
                    <span>{{ auth()->check() ? auth()->user()->name : 'Profil Alif' }}</span>
                </a>

                <!-- Sticker Album Link -->
                <a href="{{ route('stickers') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-bold whitespace-nowrap transition-all shrink-0 {{ request()->routeIs('stickers') ? 'bg-purple-500 text-white border-purple-600 shadow-xs' : 'bg-purple-50 text-purple-900 border-purple-300 hover:bg-purple-100' }}">
                    <span>🏆</span>
                    <span>Stiker</span>
                </a>

                <!-- Achievements & Trophy Room Link -->
                <a href="{{ route('achievements') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-bold whitespace-nowrap transition-all shrink-0 {{ request()->routeIs('achievements') ? 'bg-amber-400 text-amber-950 border-amber-500 shadow-xs' : 'bg-amber-50 text-amber-900 border-amber-300 hover:bg-amber-100' }}">
                    <span>🎖️</span>
                    <span>Ruang Piala</span>
                </a>

                <!-- Community Friends Stage Link -->
                <a href="{{ route('community') }}" @click="if(window.soundEngine) window.soundEngine.playClick()"
                   class="flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-bold whitespace-nowrap transition-all shrink-0 {{ request()->routeIs('community') ? 'bg-emerald-500 text-white border-emerald-600 shadow-xs' : 'bg-emerald-50 text-emerald-950 border-emerald-300 hover:bg-emerald-100' }}">
                    <span>👥</span>
                    <span>Sahabat</span>
                </a>

                <!-- Mobile Only Parent & Teacher Links -->
                <a href="{{ route('parents') }}" 
                   class="sm:hidden flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-bold whitespace-nowrap transition-all shrink-0 bg-slate-100 text-slate-700 border-slate-300">
                    <span>👨‍👩‍👧</span>
                    <span>Orang Tua</span>
                </a>

                @if (auth()->check() && in_array(auth()->user()->role, ['admin', 'teacher']))
                    <a href="{{ route('admin.dashboard') }}" 
                       class="sm:hidden flex items-center gap-1 px-3 py-1 rounded-full border-2 text-xs font-bold whitespace-nowrap transition-all shrink-0 bg-emerald-100 text-emerald-800 border-emerald-300">
                        <span>🦁</span>
                        <span>Guru</span>
                    </a>
                @endif
            </nav>

        </div>
    </header>

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

    @stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - YukBelajar PAUD')</title>
    <meta name="description" content="Dashboard Pengelolaan Materi & AI Generator YukBelajar PAUD">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.2/twemoji.min.js" crossorigin="anonymous"></script>
    @stack('styles')
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 flex flex-col font-sans antialiased"
      x-data="{ mobileSidebarOpen: false }">
    
    <!-- Topbar Header -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/80 px-4 sm:px-6 lg:px-8 py-3 shadow-xs">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
            
            <!-- Left: Mobile Menu Toggle & Brand Logo -->
            <div class="flex items-center gap-2.5 sm:gap-4">
                <!-- Hamburger Button for Mobile & Tablet (<lg) -->
                <button type="button" 
                        @click="mobileSidebarOpen = true"
                        class="lg:hidden p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 border border-slate-300 transition-all cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-500"
                        title="Buka Menu Navigasi">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5 group">
                    <span class="text-2xl sm:text-3xl group-hover:scale-110 transition-transform">🦁</span>
                    <div>
                        <h1 class="font-extrabold text-base sm:text-lg tracking-tight text-slate-900 leading-none">
                            YukBelajar <span class="text-sky-600 font-black">Admin</span>
                        </h1>
                        <p class="text-[10px] text-slate-500 font-semibold hidden sm:block">Panel Pengelolaan Guru & Kurikulum</p>
                    </div>
                </a>

                <span class="hidden sm:inline-flex items-center gap-1 px-2.5 py-0.5 bg-sky-100 text-sky-800 rounded-full text-xs font-bold border border-sky-200">
                    <span>🎓</span>
                    <span>Panel Guru</span>
                </span>
            </div>

            <!-- Right: Quick Actions & Profile -->
            <div class="flex items-center gap-2 sm:gap-3">
                <!-- Web Siswa Shortcut -->
                <a href="{{ route('home') }}" 
                   class="flex items-center gap-1.5 px-3 py-1.5 sm:px-3.5 sm:py-2 bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-950 rounded-xl text-xs font-black transition-all shadow-xs shrink-0">
                    <span class="text-sm">🚀</span>
                    <span class="hidden sm:inline">Web Siswa</span>
                </a>

                <!-- Admin Profile Pill -->
                <a href="{{ route('admin.profile') }}" title="Pengaturan Profil Admin"
                   class="flex items-center gap-2 pl-2 sm:pl-3 border-l border-slate-200 hover:opacity-80 transition-opacity cursor-pointer shrink-0">
                    <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-gradient-to-tr from-sky-600 to-indigo-500 text-white flex items-center justify-center font-black text-xs sm:text-sm shadow-xs border-2 border-white">
                        {{ auth()->check() ? strtoupper(substr(auth()->user()->name, 0, 2)) : 'GI' }}
                    </div>
                    <div class="hidden md:block text-left leading-tight">
                        <p class="text-xs font-extrabold text-slate-800 truncate max-w-[120px]">{{ auth()->check() ? auth()->user()->name : 'Pak Guru Iqbal' }}</p>
                        <p class="text-[10px] font-bold text-sky-700 uppercase tracking-wider">{{ auth()->check() && auth()->user()->role === 'admin' ? 'Administrator' : 'Guru PAUD' }}</p>
                    </div>
                </a>

                <!-- Logout -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" title="Keluar dari Panel Admin"
                            class="p-2 sm:px-2.5 sm:py-1.5 bg-rose-50 hover:bg-rose-100 border border-rose-200 text-rose-700 rounded-xl text-xs font-bold transition-all cursor-pointer flex items-center gap-1">
                        <span>🚪</span>
                        <span class="hidden xl:inline font-black">Keluar</span>
                    </button>
                </form>
            </div>

        </div>
    </header>

    <!-- Mobile Navigation Slide-Over Drawer (<lg) -->
    <div x-show="mobileSidebarOpen" x-cloak class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        <!-- Backdrop -->
        <div x-show="mobileSidebarOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs"
             @click="mobileSidebarOpen = false"></div>

        <!-- Drawer Content -->
        <div class="fixed inset-0 flex">
            <div x-show="mobileSidebarOpen" 
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full"
                 class="relative mr-16 flex w-full max-w-xs flex-1">
                
                <div class="flex flex-col flex-1 bg-white border-r border-slate-200 px-5 py-6 shadow-2xl overflow-y-auto">
                    <!-- Drawer Header -->
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-200">
                        <div class="flex items-center gap-2.5">
                            <span class="text-3xl">🦁</span>
                            <div>
                                <h3 class="font-extrabold text-base text-slate-900 leading-tight">Panel Admin</h3>
                                <p class="text-[11px] text-slate-500 font-semibold">YukBelajar PAUD</p>
                            </div>
                        </div>
                        <button type="button" @click="mobileSidebarOpen = false"
                                class="p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 text-sm font-black cursor-pointer">
                            ✕
                        </button>
                    </div>

                    <!-- Navigation Links (Mobile) -->
                    <nav class="flex flex-col gap-1.5 flex-1">
                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 px-3 pt-1">Menu Utama</span>
                        
                        <a href="{{ route('admin.dashboard') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">📊</span>
                            <span>Dashboard Utama</span>
                        </a>

                        <a href="{{ route('admin.ai-generator') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.ai-generator') ? 'bg-purple-600 text-white shadow-sm' : 'text-slate-700 hover:bg-purple-50 hover:text-purple-700' }}">
                            <span class="text-lg">✨</span>
                            <div class="flex items-center justify-between flex-1">
                                <span>AI Gemini Studio</span>
                                <span class="px-1.5 py-0.5 bg-purple-200 text-purple-900 rounded text-[9px] font-black uppercase">AI</span>
                            </div>
                        </a>

                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 px-3 pt-3">Kurikulum & Materi</span>

                        <a href="{{ route('admin.materials') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.materials*') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">📚</span>
                            <span>Flashcard 3 Pilar</span>
                        </a>

                        <a href="{{ route('admin.quizzes') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.quizzes*') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">🎯</span>
                            <span>Bank Soal & Kuis</span>
                        </a>

                        <a href="{{ route('admin.stickers') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.stickers*') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">🏆</span>
                            <span>Stiker & Reward</span>
                        </a>

                        <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 px-3 pt-3">Pengguna & Akun</span>

                        <a href="{{ route('admin.users') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.users') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">👥</span>
                            <span>Manajemen Pengguna</span>
                        </a>

                        <a href="{{ route('admin.star-gifts') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.star-gifts*') ? 'bg-amber-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">🎁</span>
                            <span>Hadiah Bintang Guru</span>
                        </a>

                        <a href="{{ route('admin.profile') }}" @click="mobileSidebarOpen = false"
                           class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.profile') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-700 hover:bg-slate-100' }}">
                            <span class="text-lg">⚙️</span>
                            <span>Profil Admin</span>
                        </a>
                    </nav>

                    <!-- AI Card Badge in Mobile Drawer -->
                    <div class="mt-6 bg-gradient-to-br from-indigo-900 to-purple-900 text-white p-4 rounded-2xl border border-purple-800 shadow-sm">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-base">✨</span>
                            <span class="font-bold text-[11px] uppercase tracking-wider text-purple-200">Google Gemini AI</span>
                        </div>
                        <p class="text-[11px] text-purple-100 leading-snug">
                            Generator konten ramah anak instan 1 kali klik.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Main Body Container (Desktop Sidebar + Content) -->
    <div class="flex-1 flex w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 gap-8">
        
        <!-- Desktop Sidebar Navigation (Fixed on >=lg) -->
        <aside class="hidden lg:flex w-64 xl:w-72 shrink-0 flex-col gap-4 sticky top-20 h-[calc(100vh-6rem)] overflow-y-auto pr-1">
            <div class="bg-white p-3.5 rounded-3xl border border-slate-200/90 shadow-xs flex flex-col gap-1.5">
                
                <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 px-3 pt-1">Menu Utama</span>

                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">📊</span>
                    <span>Dashboard Utama</span>
                </a>

                <a href="{{ route('admin.ai-generator') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.ai-generator') ? 'bg-purple-600 text-white shadow-sm' : 'text-slate-600 hover:bg-purple-50 hover:text-purple-700' }}">
                    <span class="text-lg">✨</span>
                    <div class="flex items-center justify-between flex-1">
                        <span>AI Gemini Studio</span>
                        <span class="px-1.5 py-0.5 bg-purple-200 text-purple-900 rounded text-[9px] font-black uppercase">AI</span>
                    </div>
                </a>

                <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 px-3 pt-3">Kurikulum & Materi</span>

                <a href="{{ route('admin.materials') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.materials*') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">📚</span>
                    <span>Flashcard 3 Pilar</span>
                </a>

                <a href="{{ route('admin.quizzes') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.quizzes*') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">🎯</span>
                    <span>Bank Soal & Kuis</span>
                </a>

                <a href="{{ route('admin.stickers') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.stickers*') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">🏆</span>
                    <span>Stiker & Reward</span>
                </a>

                <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 px-3 pt-3">Pengguna & Akun</span>

                <a href="{{ route('admin.users') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.users') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">👥</span>
                    <span>Manajemen Pengguna</span>
                </a>

                <a href="{{ route('admin.star-gifts') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.star-gifts*') ? 'bg-amber-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">🎁</span>
                    <span>Hadiah Bintang Guru</span>
                </a>

                <a href="{{ route('admin.profile') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl font-extrabold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.profile') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="text-lg">⚙️</span>
                    <span>Profil Admin</span>
                </a>
            </div>

            <!-- AI Engine Badge Card -->
            <div class="bg-gradient-to-br from-indigo-900 via-purple-900 to-slate-900 text-white p-4 rounded-3xl shadow-sm border border-purple-800/80">
                <div class="flex items-center gap-2 mb-1.5">
                    <span class="text-lg">✨</span>
                    <span class="font-extrabold text-xs uppercase tracking-wider text-purple-200">Google Gemini AI</span>
                </div>
                <p class="text-xs text-purple-100 leading-relaxed font-medium">
                    Sistem otomatis menghasilkan Soal Ramah PAUD, Prompt Ilustrasi Kartun, dan Audio Narasi MP3 dalam 1 kali klik.
                </p>
                <a href="{{ route('admin.ai-generator') }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-yellow-300 mt-2.5 hover:underline">
                    Buka Studio AI →
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 min-w-0 overflow-x-hidden">
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>

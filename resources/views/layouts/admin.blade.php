<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - YukBelajar PAUD')</title>
    <meta name="description" content="Dashboard Pengelolaan Materi & AI Generator YukBelajar PAUD">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 flex flex-col font-sans">
    
    <!-- Topbar Header -->
    <header class="sticky top-0 z-30 bg-white border-b border-slate-200 px-4 sm:px-8 py-3.5 flex items-center justify-between shadow-xs">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                <span class="text-3xl">🦁</span>
                <span class="font-extrabold text-xl tracking-tight text-slate-800">
                    YukBelajar <span class="text-sky-600 font-bold">Admin</span>
                </span>
            </a>
            <span class="hidden md:inline-block px-2.5 py-0.5 bg-sky-100 text-sky-800 rounded-full text-xs font-semibold">
                Panel Guru PAUD
            </span>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" 
               class="flex items-center gap-1.5 px-3.5 py-2 bg-amber-50 hover:bg-amber-100 border border-amber-300 text-amber-900 rounded-xl text-xs font-bold transition-all shadow-xs">
                <span>🚀</span>
                <span>Lihat Web Siswa</span>
            </a>

            <a href="{{ route('admin.profile') }}" title="Pengaturan Profil Admin"
               class="flex items-center gap-2 pl-3 border-l border-slate-200 hover:opacity-80 transition-opacity cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-sky-500 text-white flex items-center justify-center font-bold text-sm shadow-xs">
                    {{ auth()->check() ? strtoupper(substr(auth()->user()->name, 0, 2)) : 'GI' }}
                </div>
                <div class="hidden sm:block text-left leading-tight">
                    <p class="text-xs font-bold text-slate-800">{{ auth()->check() ? auth()->user()->name : 'Pak Guru Iqbal' }}</p>
                    <p class="text-[11px] text-slate-500">{{ auth()->check() && auth()->user()->role === 'admin' ? 'Administrator' : 'Guru PAUD' }}</p>
                </div>
            </a>

            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" title="Keluar dari Panel Admin"
                        class="p-2 bg-rose-50 hover:bg-rose-100 border border-rose-200 text-rose-700 rounded-xl text-xs font-bold transition-all cursor-pointer">
                    <span>🚪</span>
                    <span class="hidden lg:inline ml-1">Keluar</span>
                </button>
            </form>
        </div>
    </header>

    <div class="flex-1 flex flex-col md:flex-row max-w-7xl w-full mx-auto p-3.5 sm:p-6 lg:p-8 gap-5 sm:gap-6">
        <!-- Sidebar Navigation (Responsive on Mobile & Tablet) -->
        <aside class="w-full md:w-64 shrink-0 flex flex-col gap-2">
            <div class="bg-white p-2.5 sm:p-3 rounded-2xl border border-slate-200 shadow-xs grid grid-cols-2 sm:grid-cols-3 md:flex md:flex-col gap-1.5 sm:gap-1">
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                    <span class="text-base sm:text-lg">📊</span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.ai-generator') }}" 
                   class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.ai-generator') ? 'bg-purple-600 text-white shadow-sm' : 'text-slate-600 hover:bg-purple-50 hover:text-purple-700' }}">
                    <x-gemini-icon class="w-4 h-4 sm:w-5 sm:h-5 shrink-0" />
                    <div class="flex items-center justify-between flex-1">
                        <span>AI Gemini</span>
                        <span class="px-1.5 py-0.2 bg-purple-200 text-purple-900 rounded text-[9px] font-black uppercase">AI</span>
                    </div>
                </a>

                <a href="{{ route('materials', 'hewan') }}" 
                   class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm text-slate-600 hover:bg-slate-100 transition-all">
                    <span class="text-base sm:text-lg">📚</span>
                    <span>Flashcard</span>
                </a>

                <a href="{{ route('admin.quizzes') }}" 
                   class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.quizzes') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                    <span class="text-base sm:text-lg">🎯</span>
                    <span>Bank Soal & Kuis</span>
                </a>

                <a href="{{ route('stickers') }}" 
                   class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm text-slate-600 hover:bg-slate-100 transition-all">
                    <span class="text-base sm:text-lg">🏆</span>
                    <span>Stiker</span>
                </a>

                <a href="{{ route('admin.users') }}" 
                   class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.users') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                    <span class="text-base sm:text-lg">👥</span>
                    <span>Users CRUD</span>
                </a>

                <a href="{{ route('admin.profile') }}" 
                   class="col-span-2 sm:col-span-1 flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-3.5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm transition-all {{ request()->routeIs('admin.profile') ? 'bg-sky-500 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100' }}">
                    <span class="text-base sm:text-lg">⚙️</span>
                    <span>Profil Admin</span>
                </a>
            </div>

            <!-- AI Engine Badge (hidden on smallest screens to save space, visible on tablet & desktop) -->
            <div class="hidden md:block bg-gradient-to-br from-indigo-900 to-purple-900 text-white p-4 rounded-2xl shadow-md border border-purple-800">
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-xl">✨</span>
                    <span class="font-bold text-xs uppercase tracking-wider text-purple-200">Google Gemini AI</span>
                </div>
                <p class="text-xs text-purple-100 leading-relaxed">
                    Sistem otomatis menghasilkan Soal Ramah PAUD, Prompt Ilustrasi Kartun, dan Audio Narasi MP3 dalam 1 kali klik.
                </p>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 min-w-0">
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>

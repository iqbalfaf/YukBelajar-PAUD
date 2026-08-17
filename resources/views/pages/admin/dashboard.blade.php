@extends('layouts.admin')

@section('title', 'Dashboard Guru & Admin - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6"
     x-data="{
         selectedCategoryTab: 'hewan',
         showAddMaterialModal: false,
         showExportModal: false,
         exportType: 'all_students',
         exportFormat: 'csv',
         newCardTitle: '',
         newCardLevel: 1,
         newCardCategory: 'hewan',
         newCardVoice: '',
         newCardParentNote: '',
         categories: {{ Js::from($categories) }},
         categorizedMaterials: {{ Js::from($adminData['categorized_materials']) }},
         chartAnalytics: {{ Js::from($adminData['chart_analytics']) }},
         systemHealth: {{ Js::from($adminData['system_health'] ?? []) }},
         auditLogs: {{ Js::from($adminData['audit_logs'] ?? []) }}
     }">

    <!-- Top Greeting Banner with Clean Structured Action Bar -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col gap-6 relative overflow-hidden">
        
        <!-- Header Info -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/20 backdrop-blur-xs text-white rounded-full text-xs font-black uppercase tracking-wider mb-2.5">
                    <span>👑</span>
                    <span>Panel Kurator & Guru PAUD</span>
                </span>
                <h2 class="text-2xl sm:text-3xl font-black font-heading text-white leading-tight">
                    Kelola Materi, Tingkatan Level & Dashboard Pembelajaran
                </h2>
                <p class="text-xs sm:text-sm text-sky-100 mt-2 leading-relaxed">
                    Pantau grafik keaktifan siswa, atur struktur materi berlevel (Scaffolding), dan buat materi instan dengan 1-Click Gemini AI.
                </p>
            </div>

            <div class="hidden lg:flex items-center gap-2 px-3.5 py-2 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 text-xs font-bold text-sky-100 shrink-0">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>Sistem Siap Digunakan</span>
            </div>
        </div>

        <!-- Quick Action Buttons Toolbar -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-4 border-t border-white/20">
            <button @click="showAddMaterialModal = true"
                    class="py-3 px-4 bg-white hover:bg-slate-50 text-slate-800 font-extrabold text-xs rounded-xl shadow-xs transition-all flex items-center justify-center gap-2 cursor-pointer hover:shadow-md hover:-translate-y-0.5">
                <span class="text-sm">➕</span>
                <span class="truncate">Tambah Materi Manual</span>
            </button>

            <a href="{{ route('admin.quizzes') }}"
               class="py-3 px-4 bg-purple-500/90 hover:bg-purple-500 text-white font-extrabold text-xs rounded-xl shadow-xs transition-all flex items-center justify-center gap-2 cursor-pointer hover:shadow-md hover:-translate-y-0.5 border border-purple-400/40">
                <span class="text-sm">🎯</span>
                <span class="truncate">Bank Soal & Input Manual</span>
            </a>

            <button @click="showExportModal = true"
                    class="py-3 px-4 bg-emerald-500 hover:bg-emerald-400 text-white font-extrabold text-xs rounded-xl shadow-xs transition-all flex items-center justify-center gap-2 cursor-pointer hover:shadow-md hover:-translate-y-0.5">
                <span class="text-sm">📊</span>
                <span class="truncate">Ekspor Rapor Belajar</span>
            </button>

            <a href="{{ route('admin.ai-generator') }}" 
               class="py-3 px-4 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black text-xs rounded-xl shadow-xs transition-all flex items-center justify-center gap-2 hover:shadow-md hover:-translate-y-0.5">
                <x-gemini-icon class="w-4 h-4 shrink-0" />
                <span class="truncate">1-Click AI Studio</span>
            </a>
        </div>
    </div>

    <!-- Alert Notifications -->
    @if(session('success'))
    <div class="p-4 bg-emerald-100 border-2 border-emerald-400 text-emerald-950 font-extrabold text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
        <div class="flex items-center gap-3">
            <span class="text-2xl">✨</span>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    @if($errors->any())
    <div class="p-4 bg-rose-100 border-2 border-rose-400 text-rose-950 font-bold text-sm rounded-2xl shadow-xs">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- SYSTEM HEALTH & LIVE API STATUS BAR -->
    <div class="bg-slate-900 text-white rounded-2xl p-4 sm:p-5 border border-slate-800 shadow-xs flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs w-full md:w-auto">
            <!-- Gemini Status -->
            <div class="flex items-center gap-2 bg-slate-800/80 px-3 py-2 rounded-xl border border-slate-700/60">
                <span class="w-2.5 h-2.5 rounded-full shrink-0"
                      :class="systemHealth.is_gemini_configured ? 'bg-emerald-400 animate-pulse' : 'bg-amber-400'"></span>
                <div class="truncate">
                    <span class="text-slate-400 text-[10px] block font-semibold">Gemini AI</span>
                    <span class="font-extrabold truncate text-[11px]"
                          :class="systemHealth.is_gemini_configured ? 'text-emerald-300' : 'text-amber-300'"
                          x-text="systemHealth.gemini_model"></span>
                </div>
            </div>

            <!-- Daily Quota -->
            <div class="flex items-center gap-2 bg-slate-800/80 px-3 py-2 rounded-xl border border-slate-700/60">
                <span class="text-amber-400 text-sm shrink-0">⚡</span>
                <div class="truncate">
                    <span class="text-slate-400 text-[10px] block font-semibold">Kuota AI Harian</span>
                    <span class="font-extrabold text-amber-300 truncate text-[11px]" x-text="systemHealth.daily_prompt_quota"></span>
                </div>
            </div>

            <!-- Speech Synthesis -->
            <div class="flex items-center gap-2 bg-slate-800/80 px-3 py-2 rounded-xl border border-slate-700/60">
                <span class="text-sky-400 text-sm shrink-0">🔊</span>
                <div class="truncate">
                    <span class="text-slate-400 text-[10px] block font-semibold">Audio Engine</span>
                    <span class="font-extrabold text-sky-300 truncate text-[11px]" x-text="systemHealth.tts_engine"></span>
                </div>
            </div>

            <!-- Parental Gate -->
            <div class="flex items-center gap-2 bg-slate-800/80 px-3 py-2 rounded-xl border border-slate-700/60">
                <span class="text-purple-400 text-sm shrink-0">🔒</span>
                <div class="truncate">
                    <span class="text-slate-400 text-[10px] block font-semibold">Parental Gate</span>
                    <span class="font-extrabold text-purple-300 truncate text-[11px]" x-text="systemHealth.parental_gate_status"></span>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.users') }}"
           class="w-full md:w-auto px-4 py-2.5 bg-sky-500/20 hover:bg-sky-500/30 text-sky-300 border border-sky-500/40 rounded-xl text-xs font-bold transition-all flex items-center justify-center gap-1.5 shrink-0 whitespace-nowrap">
            <span>👥</span>
            <span>Kelola {{ $adminData['stats']['total_students'] }} Siswa Terdaftar →</span>
        </a>
    </div>

    <!-- Quick Stats Grid (Real Database Counts & Uniform Cards) -->
    <div class="grid grid-cols-2 lg:grid-cols-6 gap-3.5 sm:gap-4">
        
        <!-- 1. Materi Aktif -->
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between h-36 hover:border-sky-300 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-500">Materi Aktif</span>
                <span class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center text-sm font-bold">📚</span>
            </div>
            <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900 my-1">{{ $adminData['stats']['total_materials'] }}</div>
            <span class="text-[11px] font-bold text-emerald-600 truncate">{{ count($categories) }} Pulau Belajar</span>
        </div>

        <!-- 2. Bank Soal Kuis -->
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between h-36 hover:border-sky-300 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-500">Bank Soal</span>
                <span class="w-8 h-8 rounded-lg bg-sky-50 text-sky-700 flex items-center justify-center text-sm font-bold">🎯</span>
            </div>
            <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900 my-1">{{ $adminData['stats']['total_quizzes'] }}</div>
            <a href="{{ route('admin.quizzes') }}" class="text-[11px] font-bold text-sky-600 hover:underline truncate">Kelola {{ $adminData['stats']['total_quizzes'] }} Modul Kuis →</a>
        </div>

        <!-- 3. Total Siswa -->
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between h-36 hover:border-sky-300 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-500">Total Siswa</span>
                <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center text-sm font-bold">👶</span>
            </div>
            <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900 my-1">{{ $adminData['stats']['total_students'] }}</div>
            <a href="{{ route('admin.users') }}" class="text-[11px] font-bold text-sky-600 hover:underline truncate">Kelola Akun Siswa →</a>
        </div>

        <!-- 4. Bintang Diberikan -->
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between h-36 hover:border-sky-300 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-500">Bintang Emas</span>
                <span class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center text-sm font-bold">⭐</span>
            </div>
            <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900 my-1">{{ $adminData['stats']['total_stars_awarded'] }}</div>
            <span class="text-[11px] font-bold text-amber-600 truncate">+{{ $adminData['stats']['stars_this_week'] }} Pekan Ini</span>
        </div>

        <!-- 5. Guru & Kurator -->
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between h-36 hover:border-sky-300 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-500">Guru / Admin</span>
                <span class="w-8 h-8 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center text-sm font-bold">🦁</span>
            </div>
            <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900 my-1">{{ $adminData['stats']['active_teachers'] }}</div>
            <span class="text-[11px] font-bold text-purple-600 truncate">Terverifikasi Aktif</span>
        </div>

        <!-- 6. Rerata Skor -->
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between h-36 hover:border-sky-300 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-500">Rerata Skor</span>
                <span class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center text-sm font-bold">📈</span>
            </div>
            <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900 my-1">{{ $adminData['stats']['avg_completion_rate'] }}</div>
            <span class="text-[11px] font-bold text-emerald-600 truncate">Penguasaan Materi</span>
        </div>

    </div>

    <!-- DUAL ANALYTICS CHARTS SECTION (NO OVERLAP / CLEAN CSS) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left 7 Cols: Weekly Engagement Dual-Bar Chart -->
        <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xs flex flex-col justify-between">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 mb-4">
                <div>
                    <h3 class="text-lg font-bold font-heading text-slate-800 flex items-center gap-2">
                        <span>📊</span>
                        <span>Aktivitas Kuis & Bintang Siswa (7 Hari Terakhir)</span>
                    </h3>
                    <p class="text-xs font-bold text-slate-400 mt-0.5">Jumlah pengerjaan kuis dan total bintang emas riil yang didapatkan siswa.</p>
                </div>
                <div class="flex items-center gap-3 text-xs font-bold shrink-0">
                    <span class="flex items-center gap-1.5 text-sky-600"><span class="w-3 h-3 rounded-md bg-sky-500"></span> Kuis</span>
                    <span class="flex items-center gap-1.5 text-amber-500"><span class="w-3 h-3 rounded-md bg-amber-400"></span> Bintang ⭐</span>
                </div>
            </div>

            <!-- Visual Bar Graph with Zero Layout Shifts and Absolute Tooltip -->
            <div class="h-56 pt-8 pb-2 flex items-end justify-between gap-2 sm:gap-4 border-b border-slate-200">
                <template x-for="(bar, idx) in chartAnalytics.weekly_activity" :key="idx">
                    <div class="flex-1 flex flex-col items-center h-full justify-end relative group">
                        
                        <!-- Floating Tooltip (Absolute, Above Column) -->
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-200 absolute -top-7 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[10px] font-bold py-1 px-2 rounded-lg pointer-events-none whitespace-nowrap shadow-lg z-30 flex items-center gap-1">
                            <span x-text="bar.day + ': ' + bar.quizzes + ' Kuis (' + bar.stars + ' ⭐)'"></span>
                        </div>

                        <!-- Bar Columns Container -->
                        <div class="w-full flex items-end justify-center gap-1 sm:gap-1.5 h-36">
                            <!-- Quizzes Bar -->
                            <div class="w-2.5 sm:w-4 bg-sky-500 group-hover:bg-sky-600 rounded-t-md transition-all duration-300 shadow-xs"
                                 :style="'height: ' + bar.quiz_height + '%;'">
                            </div>
                            <!-- Stars Bar -->
                            <div class="w-2.5 sm:w-4 bg-amber-400 group-hover:bg-amber-500 rounded-t-md transition-all duration-300 shadow-xs"
                                 :style="'height: ' + bar.star_height + '%;'">
                            </div>
                        </div>

                        <!-- Day Label -->
                        <span class="text-[11px] font-bold text-slate-500 mt-2" x-text="bar.day"></span>
                    </div>
                </template>
            </div>
            
            <div class="flex items-center justify-between text-xs text-slate-500 pt-3 font-semibold flex-wrap gap-2">
                <span>Puncak Belajar: <b class="text-slate-800" x-text="chartAnalytics.peak_day + ' (' + chartAnalytics.peak_quizzes + ' Kuis / ' + chartAnalytics.peak_stars + ' ⭐)'"></b></span>
                <span>Total 7 Hari: <b class="text-slate-800" x-text="chartAnalytics.total_quizzes_weekly + ' Kuis Selesai'"></b></span>
            </div>
        </div>

        <!-- Right 5 Cols: Category Mastery Distribution Progress Bars -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xs flex flex-col justify-between">
            <div class="mb-3">
                <h3 class="text-lg font-bold font-heading text-slate-800 flex items-center gap-2">
                    <span>🎯</span>
                    <span>Tingkat Ketuntasan per Kategori</span>
                </h3>
                <p class="text-xs font-bold text-slate-400 mt-0.5">Rerata skor kuis dan materi aktif yang diselesaikan siswa.</p>
            </div>

            <div class="flex flex-col gap-3 my-auto">
                <template x-for="(cat, idx) in chartAnalytics.category_distribution" :key="idx">
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center justify-between text-xs font-bold">
                            <span class="text-slate-800 flex items-center gap-1.5 truncate">
                                <span x-text="cat.icon"></span>
                                <span class="truncate" x-text="cat.name"></span>
                            </span>
                            <span class="text-slate-600 text-[11px] shrink-0 font-semibold"
                                  x-text="cat.pct + '% (' + cat.quizzes + ' Kuis, ' + cat.materials + ' Kartu)'">
                            </span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden">
                            <div class="h-full rounded-full transition-all duration-500"
                                 :class="cat.bg_bar"
                                 :style="'width: ' + Math.max(4, cat.pct) + '%;'">
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-sky-700">
                <span>Kategori Terpopuler: <b class="text-slate-800" x-text="chartAnalytics.category_distribution[0] ? chartAnalytics.category_distribution[0].name : '-'"></b></span>
                <a href="{{ route('admin.quizzes') }}" class="hover:underline">Kelola Kuis →</a>
            </div>
        </div>

    </div>

    <!-- RECENT AUDIT LOGS & ACTIVITY STREAM (PROFESSIONAL FEATURE) -->
    <div class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xs">
        <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
            <div>
                <h3 class="text-lg font-bold font-heading text-slate-800 flex items-center gap-2">
                    <span>⏱️</span>
                    <span>Riwayat Aktivitas Sistem & Audit Trail (Live Stream)</span>
                </h3>
                <p class="text-xs font-bold text-slate-400 mt-0.5">Pencatatan aktivitas siswa, aksi guru kurator, dan generasi AI secara real-time.</p>
            </div>

            <span class="px-3 py-1 bg-emerald-100 text-emerald-800 font-bold text-xs rounded-full">
                🟢 Live Sync Aktif
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            <template x-for="log in auditLogs" :key="log.id">
                <div class="p-3.5 bg-slate-50 border border-slate-200 rounded-2xl flex flex-col justify-between gap-2">
                    <div class="flex items-start justify-between gap-2">
                        <span class="px-2 py-0.5 rounded-md font-bold text-[10px] uppercase" :class="log.badge" x-text="log.action"></span>
                        <span class="text-[10px] font-semibold text-slate-400" x-text="log.time"></span>
                    </div>
                    <p class="text-xs font-extrabold text-slate-800" x-text="log.user"></p>
                    <p class="text-[11px] font-semibold text-slate-600 line-clamp-2" x-text="log.detail"></p>
                </div>
            </template>
        </div>
    </div>

    <!-- CATEGORIZED MATERIAL & SCAFFOLDING LEVEL MANAGEMENT -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-xs flex flex-col gap-6">
        
        <!-- Section Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 border-b border-slate-100 pb-4">
            <div>
                <h3 class="text-xl font-bold font-heading text-slate-800 flex items-center gap-2">
                    <span>🗂️</span>
                    <span>Pengkategorian Materi & Tingkatan Level (Scaffolding)</span>
                </h3>
                <p class="text-xs font-bold text-slate-400 mt-0.5">
                    Struktur materi per kategori dipecah ke dalam Level 1 (Dasar), Level 2 (Menengah), dan Level 3 (Pra-SD).
                </p>
            </div>

            <!-- Category Switcher Tabs -->
            <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl overflow-x-auto max-w-full">
                <template x-for="cat in categories" :key="cat.slug">
                    <button type="button" @click="selectedCategoryTab = cat.slug"
                            class="px-3.5 py-2 rounded-xl text-xs font-extrabold transition-all whitespace-nowrap cursor-pointer flex items-center gap-1.5"
                            :class="selectedCategoryTab === cat.slug ? 'bg-sky-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                        <span x-text="cat.icon_emoji"></span>
                        <span x-text="cat.name"></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- Level Sections for Selected Category -->
        <div class="flex flex-col gap-6">
            <template x-if="categorizedMaterials[selectedCategoryTab]">
                <div class="flex flex-col gap-6">
                    <template x-for="level in categorizedMaterials[selectedCategoryTab].levels" :key="level.level_num">
                        <div class="border-2 border-slate-200 rounded-2xl p-5 bg-slate-50/50">
                            
                            <!-- Level Header -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-2.5">
                                    <span class="px-2.5 py-1 rounded-xl text-xs font-black"
                                          :class="level.level_num === 1 ? 'bg-emerald-100 text-emerald-800' : (level.level_num === 2 ? 'bg-amber-100 text-amber-800' : 'bg-purple-100 text-purple-800')"
                                          x-text="'Level ' + level.level_num">
                                    </span>
                                    <h4 class="font-extrabold text-sm sm:text-base text-slate-800" x-text="level.level_title"></h4>
                                </div>

                                <span class="text-xs font-bold text-slate-500 bg-white px-2.5 py-1 rounded-lg border border-slate-200"
                                      x-text="level.cards_count + ' Kartu Materi'">
                                </span>
                            </div>

                            <!-- Flashcards Grid inside this level -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                                <template x-for="item in level.items" :key="item.id">
                                    <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-2 hover:border-sky-300 transition-colors">
                                        <div class="flex items-center gap-2.5 overflow-hidden">
                                            <span class="w-8 h-8 rounded-lg bg-amber-50 border border-amber-200 flex items-center justify-center text-base shrink-0">
                                                📄
                                            </span>
                                            <div class="truncate">
                                                <p class="font-bold text-xs text-slate-800 truncate" x-text="item.title"></p>
                                                <div class="flex items-center gap-2 text-[10px] text-slate-400 font-semibold mt-0.5">
                                                    <span class="text-emerald-600 font-bold">🔊 Audio Ready</span>
                                                    <template x-if="item.has_quiz">
                                                        <span class="text-sky-600 font-bold">🎯 Ada Kuis</span>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Real Delete Form -->
                                        <form :action="'{{ url('admin/materials') }}/' + item.id" method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus kartu materi ini dari database?')" class="inline shrink-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus Materi"
                                                    class="text-rose-400 hover:text-rose-600 font-bold text-xs p-1 rounded-md hover:bg-rose-50 cursor-pointer">
                                                🗑️
                                            </button>
                                        </form>
                                    </div>
                                </template>
                            </div>

                        </div>
                    </template>
                </div>
            </template>
        </div>

    </div>

    <!-- MODAL: EKSPOR RAPOR BELAJAR PAUD (REAL CSV STREAM EXPORTER) -->
    <div x-show="showExportModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full border-4 border-emerald-400 shadow-2xl relative my-8"
             @click.away="showExportModal = false">
            
            <button @click="showExportModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center text-3xl mx-auto mb-3">
                📊
            </div>

            <h3 class="text-xl font-black font-heading text-slate-800 text-center mb-1">
                Studio Ekspor Rapor Belajar PAUD
            </h3>
            <p class="text-xs font-bold text-slate-500 text-center mb-5">
                Cetak atau unduh rekap capaian bintang dan ketuntasan kuis anak untuk laporan orang tua / sekolah langsung dari database.
            </p>

            <form action="{{ route('admin.export-report') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Jenis Laporan</label>
                    <select name="report_type" class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                        <option value="all_students">📋 Rekap Rapor Seluruh Siswa PAUD ({{ $adminData['stats']['total_students'] }} Siswa)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Format File Dokumen</label>
                    <div class="p-3 bg-emerald-50 border-2 border-emerald-300 rounded-xl text-xs font-bold text-emerald-950 flex items-center justify-center gap-2">
                        <span>📗 Spreadsheet CSV Resmi (Kompatibel Excel)</span>
                    </div>
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showExportModal = false"
                            class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" @click="setTimeout(() => showExportModal = false, 1000)"
                            class="flex-1 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs rounded-xl shadow-xs flex items-center justify-center gap-2 cursor-pointer">
                        <span>Unduh File CSV 📥</span>
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- MODAL: ADD NEW FLASHCARD MANUAL (REAL DATABASE POST) -->
    <div x-show="showAddMaterialModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-sky-400 shadow-2xl relative my-8"
             @click.away="showAddMaterialModal = false">
            
            <button @click="showAddMaterialModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">➕</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">Tambah Flashcard Baru</h3>
                    <p class="text-xs font-bold text-slate-500">Buat materi kartu pembelajaran dan simpan ke database.</p>
                </div>
            </div>

            <form action="{{ route('admin.materials.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Sasaran</label>
                        <select name="category_slug" x-model="selectedCategoryTab"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <template x-for="cat in categories" :key="cat.slug">
                                <option :value="cat.slug" x-text="cat.icon_emoji + ' ' + cat.name"></option>
                            </template>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Tingkatan Level</label>
                        <select name="level_number" x-model="newCardLevel"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option :value="1">Level 1 (Dasar / Pemula)</option>
                            <option :value="2">Level 2 (Menengah / Eksplorasi)</option>
                            <option :value="3">Level 3 (Pra-SD / Mahir)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Judul Objek / Materi</label>
                    <input type="text" name="title" required placeholder="Contoh: Burung Hantu 🦉"
                           class="w-full p-3 text-sm font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Naskah Pelafalan Suara (TTS)</label>
                    <textarea name="speech_text" rows="2" placeholder="Contoh: Burung Hantu! Matanya bulat besar dan suka terbang di malam hari!"
                              class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tips Interaksi untuk Orang Tua</label>
                    <input type="text" name="parent_note" placeholder="Ajak anak menirukan bunyi uuu-huuu bersama."
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showAddMaterialModal = false"
                            class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3 bg-sky-600 hover:bg-sky-700 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan ke Database
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection

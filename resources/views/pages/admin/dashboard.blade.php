@extends('layouts.admin')

@section('title', 'Dashboard Guru & Admin - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6"
     x-data="{
         selectedCategoryTab: 'hewan',
         showAddMaterialModal: false,
         showExportModal: false,
         exportType: 'all_students', // 'all_students' or 'category_mastery'
         exportFormat: 'pdf', // 'pdf' or 'csv'
         exporting: false,
         exportSuccess: false,
         newCardTitle: '',
         newCardLevel: 1,
         newCardCategory: 'hewan',
         newCardVoice: '',
         newCardParentNote: '',
         categories: {{ Js::from($categories) }},
         categorizedMaterials: {{ Js::from($adminData['categorized_materials']) }},
         chartAnalytics: {{ Js::from($adminData['chart_analytics']) }},
         systemHealth: {{ Js::from($adminData['system_health'] ?? []) }},
         auditLogs: {{ Js::from($adminData['audit_logs'] ?? []) }},
         
         addNewMaterial() {
             if (!this.newCardTitle.trim()) {
                 alert('Silakan masukkan judul materi flashcard!');
                 return;
             }
             
             if (!this.categorizedMaterials[this.newCardCategory]) {
                 this.categorizedMaterials[this.newCardCategory] = {
                     category_name: this.newCardCategory,
                     category_icon: '📁',
                     levels: [
                         { level_num: 1, level_title: 'Level 1: Dasar', cards_count: 0, items: [] }
                     ]
                 };
             }

             const targetLevels = this.categorizedMaterials[this.newCardCategory].levels;
             let levelObj = targetLevels.find(l => l.level_num == this.newCardLevel);
             if (!levelObj) {
                 levelObj = {
                     level_num: this.newCardLevel,
                     level_title: 'Level ' + this.newCardLevel + ': Materi Baru',
                     cards_count: 0,
                     items: []
                 };
                 targetLevels.push(levelObj);
             }

             levelObj.items.push({
                 id: Date.now(),
                 title: this.newCardTitle,
                 type: 'Flashcard Baru',
                 voice_ready: true,
                 has_quiz: false
             });
             levelObj.cards_count = levelObj.items.length;

             alert('Materi ' + this.newCardTitle + ' berhasil ditambahkan ke Level ' + this.newCardLevel + '!');
             this.showAddMaterialModal = false;
             this.newCardTitle = '';
             this.newCardVoice = '';
             this.newCardParentNote = '';
         },

         deleteItem(catKey, levelNum, itemId) {
             if (confirm('Yakin ingin menghapus materi kartu ini?')) {
                 const cat = this.categorizedMaterials[catKey];
                 if (cat) {
                     const level = cat.levels.find(l => l.level_num === levelNum);
                     if (level) {
                         level.items = level.items.filter(i => i.id !== itemId);
                         level.cards_count = level.items.length;
                     }
                 }
             }
         },

         runExport() {
             this.exporting = true;
             setTimeout(() => {
                 this.exporting = false;
                 this.exportSuccess = true;
                 if (window.soundEngine) window.soundEngine.playVictory();
                 setTimeout(() => {
                     this.exportSuccess = false;
                     this.showExportModal = false;
                 }, 2500);
             }, 1200);
         }
     }">

    <!-- Top Greeting Banner with Quick CTAs -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                Panel Kurator & Guru PAUD
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                Kelola Materi, Tingkatan Level & Dashboard Pembelajaran
            </h2>
            <p class="text-sm text-sky-100 mt-1 max-w-xl">
                Pantau grafik keaktifan siswa, atur struktur materi berlevel (Scaffolding), dan buat materi instan dengan 1-Click Gemini AI.
            </p>
        </div>

        <div class="flex items-center gap-3 shrink-0 flex-wrap">
            <button @click="showAddMaterialModal = true"
                    class="px-4 py-3 bg-white hover:bg-slate-100 text-slate-900 font-extrabold text-xs rounded-2xl shadow-md transition-all flex items-center gap-2 cursor-pointer">
                <span>➕</span>
                <span>Tambah Materi Manual</span>
            </button>

            <button @click="showExportModal = true"
                    class="px-4 py-3 bg-emerald-500 hover:bg-emerald-400 text-white font-extrabold text-xs rounded-2xl shadow-md transition-all flex items-center gap-2 cursor-pointer">
                <span>📊</span>
                <span>Ekspor Rapor Belajar</span>
            </button>

            <a href="{{ route('admin.ai-generator') }}" 
               class="px-5 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black text-xs rounded-2xl shadow-md transition-all flex items-center gap-2 hover:scale-105">
                <x-gemini-icon class="w-5 h-5 shrink-0" />
                <span>1-Click AI Studio</span>
            </a>
        </div>
    </div>

    <!-- SYSTEM HEALTH & LIVE API STATUS BAR -->
    <div class="bg-slate-900 text-white rounded-2xl p-4 border border-slate-800 shadow-xs flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div class="flex items-center gap-6 flex-wrap text-xs">
            
            <!-- Gemini Status -->
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-slate-400 font-bold">Google Gemini AI:</span>
                <span class="font-extrabold text-emerald-300" x-text="systemHealth.gemini_model">Gemini 2.0 Flash</span>
            </div>

            <!-- Daily Quota -->
            <div class="flex items-center gap-2">
                <span class="text-slate-400 font-bold">Kuota AI Harian:</span>
                <span class="font-extrabold text-amber-300" x-text="systemHealth.daily_prompt_quota">850 / 1.000 Prompt</span>
            </div>

            <!-- Speech Synthesis -->
            <div class="flex items-center gap-2">
                <span class="text-slate-400 font-bold">Audio Engine:</span>
                <span class="font-extrabold text-sky-300" x-text="systemHealth.tts_engine">Web Speech (id-ID)</span>
            </div>

            <!-- Parental Gate -->
            <div class="flex items-center gap-2">
                <span class="text-slate-400 font-bold">Parental Gate:</span>
                <span class="font-extrabold text-purple-300">100% Proteksi Aktif 🔒</span>
            </div>

        </div>

        <a href="{{ route('admin.users') }}" class="text-xs font-bold text-sky-400 hover:text-sky-300 flex items-center gap-1 underline decoration-dotted">
            <span>👥 Kelola 120 Siswa Terdaftar →</span>
        </a>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-2 lg:grid-cols-6 gap-3 sm:gap-4">
        
        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-1 text-slate-500">
                <span class="text-xs font-bold">Materi Aktif</span>
                <span class="text-xl">📚</span>
            </div>
            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800">{{ $adminData['stats']['total_materials'] }}</div>
            <span class="text-[11px] font-semibold text-emerald-600">6 Pulau Belajar</span>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-1 text-slate-500">
                <span class="text-xs font-bold">Bank Soal Kuis</span>
                <span class="text-xl">🎯</span>
            </div>
            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800">{{ $adminData['stats']['total_quizzes'] }}</div>
            <span class="text-[11px] font-semibold text-sky-600">28 Modul Kuis</span>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-1 text-slate-500">
                <span class="text-xs font-bold">Total Siswa</span>
                <span class="text-xl">👶</span>
            </div>
            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800">{{ $adminData['stats']['total_students'] }}</div>
            <a href="{{ route('admin.users') }}" class="text-[11px] font-bold text-sky-600 hover:underline">Kelola Akun →</a>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-1 text-slate-500">
                <span class="text-xs font-bold">Bintang Diberikan</span>
                <span class="text-xl">⭐</span>
            </div>
            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800">{{ $adminData['stats']['total_stars_awarded'] }}</div>
            <span class="text-[11px] font-semibold text-amber-600">+320 Pekan Ini</span>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-1 text-slate-500">
                <span class="text-xs font-bold">Guru & Kurator</span>
                <span class="text-xl">🦁</span>
            </div>
            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800">{{ $adminData['stats']['active_teachers'] }}</div>
            <span class="text-[11px] font-semibold text-purple-600">Terverifikasi</span>
        </div>

        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200 shadow-xs">
            <div class="flex items-center justify-between mb-1 text-slate-500">
                <span class="text-xs font-bold">Rerata Ketuntasan</span>
                <span class="text-xl">📈</span>
            </div>
            <div class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-800">{{ $adminData['stats']['avg_completion_rate'] }}</div>
            <span class="text-[11px] font-semibold text-emerald-600">Sangat Tinggi</span>
        </div>

    </div>

    <!-- DUAL ANALYTICS CHARTS SECTION -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left 7 Cols: Weekly Engagement Dual-Bar Chart -->
        <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xs flex flex-col justify-between">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 mb-6">
                <div>
                    <h3 class="text-lg font-bold font-heading text-slate-800 flex items-center gap-2">
                        <span>📊</span>
                        <span>Aktivitas Kuis & Perolehan Bintang Siswa Mingguan</span>
                    </h3>
                    <p class="text-xs font-bold text-slate-400 mt-0.5">Jumlah kuis yang dimainkan dan total bintang emas yang dikumpulkan.</p>
                </div>
                <div class="flex items-center gap-3 text-xs font-bold">
                    <span class="flex items-center gap-1.5 text-sky-600"><span class="w-3 h-3 rounded-md bg-sky-500"></span> Kuis Selesai</span>
                    <span class="flex items-center gap-1.5 text-amber-500"><span class="w-3 h-3 rounded-md bg-amber-400"></span> Bintang Emas</span>
                </div>
            </div>

            <!-- Visual Bar Graph -->
            <div class="h-48 sm:h-56 flex items-end justify-between gap-2 sm:gap-4 pt-6 border-b border-slate-200 pb-2">
                <template x-for="(bar, idx) in chartAnalytics.weekly_activity" :key="idx">
                    <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end group">
                        
                        <!-- Tooltip on hover -->
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity bg-slate-900 text-white text-[10px] py-1 px-2 rounded-lg pointer-events-none whitespace-nowrap shadow-md mb-1 flex flex-col items-center">
                            <span x-text="bar.quizzes + ' Kuis (' + bar.stars + ' ⭐)'"></span>
                        </div>

                        <div class="w-full max-w-[36px] flex items-end justify-center gap-1 h-full">
                            <!-- Quizzes bar -->
                            <div class="w-1/2 bg-sky-500 group-hover:bg-sky-600 rounded-t-lg transition-all duration-300"
                                 :style="'height: ' + (bar.height_pct * 0.85) + '%;'">
                            </div>
                            <!-- Stars bar -->
                            <div class="w-1/2 bg-amber-400 group-hover:bg-amber-500 rounded-t-lg transition-all duration-300"
                                 :style="'height: ' + bar.height_pct + '%;'">
                            </div>
                        </div>

                        <!-- Day Label -->
                        <span class="text-[11px] font-bold text-slate-500 mt-1" x-text="bar.day"></span>
                    </div>
                </template>
            </div>
            
            <div class="flex items-center justify-between text-xs text-slate-400 pt-3 font-semibold">
                <span>Puncak Belajar: <b>Sabtu (100 Kuis / 300 ⭐)</b></span>
                <span>Total Pekan Ini: <b>550 Kuis Selesai</b></span>
            </div>
        </div>

        <!-- Right 5 Cols: Category Mastery Distribution Progress Bars -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xs flex flex-col justify-between">
            <div class="mb-4">
                <h3 class="text-lg font-bold font-heading text-slate-800 flex items-center gap-2">
                    <span>🎯</span>
                    <span>Tingkat Ketuntasan per Kategori</span>
                </h3>
                <p class="text-xs font-bold text-slate-400 mt-0.5">Persentase penguasaan materi oleh seluruh siswa terdaftar.</p>
            </div>

            <div class="flex flex-col gap-3.5 my-auto">
                <template x-for="(cat, idx) in chartAnalytics.category_distribution" :key="idx">
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center justify-between text-xs font-bold">
                            <span class="text-slate-800 flex items-center gap-1.5">
                                <span x-text="cat.icon"></span>
                                <span x-text="cat.name"></span>
                            </span>
                            <span class="text-slate-600" x-text="cat.pct + '% (' + cat.materials + ' Kartu)'"></span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden">
                            <div class="h-full rounded-full transition-all duration-500"
                                 :class="cat.bg_bar"
                                 :style="'width: ' + cat.pct + '%;'">
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-sky-700">
                <span>Kategori Terpopuler: 🦁 Pulau Hewan (88%)</span>
                <a href="{{ route('admin.ai-generator') }}" class="hover:underline">Tambah Materi AI →</a>
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

                                        <button type="button" @click="deleteItem(selectedCategoryTab, level.level_num, item.id)"
                                                class="text-rose-400 hover:text-rose-600 font-bold text-xs p-1 rounded-md hover:bg-rose-50 cursor-pointer shrink-0">
                                            🗑️
                                        </button>
                                    </div>
                                </template>
                            </div>

                        </div>
                    </template>
                </div>
            </template>
        </div>

    </div>

    <!-- MODAL: EKSPOR RAPOR BELAJAR PAUD (PROFESSIONAL REPORT CARD GENERATOR) -->
    <div x-show="showExportModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
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
                Cetak atau unduh rekap capaian bintang dan ketuntasan kuis anak untuk laporan orang tua / sekolah.
            </p>

            <div x-show="exportSuccess" class="p-3 bg-emerald-100 border border-emerald-400 text-emerald-950 font-bold text-xs rounded-xl mb-4 text-center">
                ✨ Laporan Rapor PAUD berhasil di-generate dan siap diunduh!
            </div>

            <div class="flex flex-col gap-3.5 mb-6">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Jenis Laporan</label>
                    <select x-model="exportType" class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none">
                        <option value="all_students">📋 Rekap Rapor Seluruh Siswa PAUD (120 Siswa)</option>
                        <option value="category_mastery">🎯 Laporan Ketuntasan 6 Pulau Belajar</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Format Dokumen</label>
                    <div class="grid grid-cols-2 gap-3">
                        <button type="button" @click="exportFormat = 'pdf'"
                                class="p-3 rounded-xl border-2 text-xs font-bold flex items-center justify-center gap-2 cursor-pointer"
                                :class="exportFormat === 'pdf' ? 'bg-rose-50 border-rose-400 text-rose-800 shadow-xs' : 'bg-slate-50 border-slate-200 text-slate-600'">
                            <span>📄 Format PDF Resmi</span>
                        </button>
                        <button type="button" @click="exportFormat = 'csv'"
                                class="p-3 rounded-xl border-2 text-xs font-bold flex items-center justify-center gap-2 cursor-pointer"
                                :class="exportFormat === 'csv' ? 'bg-emerald-50 border-emerald-400 text-emerald-800 shadow-xs' : 'bg-slate-50 border-slate-200 text-slate-600'">
                            <span>📗 Excel / CSV</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="button" @click="showExportModal = false"
                        class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl">
                    Batal
                </button>
                <button type="button" @click="runExport()" :disabled="exporting"
                        class="flex-1 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs rounded-xl shadow-xs flex items-center justify-center gap-2">
                    <span x-show="exporting">⏳ Memproses...</span>
                    <span x-show="!exporting">Unduh Dokumen 📥</span>
                </button>
            </div>

        </div>
    </div>

    <!-- MODAL: ADD NEW FLASHCARD MANUAL -->
    <div x-show="showAddMaterialModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
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
                    <p class="text-xs font-bold text-slate-500">Buat materi kartu pembelajaran dan tentukan levelnya.</p>
                </div>
            </div>

            <form @submit.prevent="addNewMaterial()" class="flex flex-col gap-4">
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Sasaran</label>
                        <select x-model="newCardCategory"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none">
                            <template x-for="cat in categories" :key="cat.slug">
                                <option :value="cat.slug" x-text="cat.name"></option>
                            </template>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Tingkatan Level</label>
                        <select x-model="newCardLevel"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none">
                            <option value="1">Level 1 (Usia 3-4 Thn - Dasar)</option>
                            <option value="2">Level 2 (Usia 4-5 Thn - Menengah)</option>
                            <option value="3">Level 3 (Usia 5-6 Thn - Pra-SD)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Judul Objek / Materi</label>
                    <input type="text" x-model="newCardTitle" required placeholder="Contoh: Burung Hantu 🦉"
                           class="w-full p-3 text-sm font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Naskah Pelafalan Suara (TTS)</label>
                    <textarea x-model="newCardVoice" rows="2" placeholder="Contoh: Burung Hantu! Matanya bulat besar dan suka terbang di malam hari!"
                              class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tips Interaksi untuk Orang Tua</label>
                    <input type="text" x-model="newCardParentNote" placeholder="Ajak anak menirukan bunyi uuu-huuu bersama."
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showAddMaterialModal = false"
                            class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3 bg-sky-600 hover:bg-sky-700 text-white font-extrabold text-xs rounded-xl shadow-xs">
                        Simpan Materi
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection

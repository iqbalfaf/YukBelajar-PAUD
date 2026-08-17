@extends('layouts.admin')

@section('title', 'Hadiah Bintang & Apresiasi Guru - YukBelajar Admin')

@section('content')
<div class="flex flex-col gap-6"
     x-data="{
         targetType: 'single', // 'single' or 'all'
         selectedStudentId: '{{ $starGiftsData['students'][0]['id'] ?? '' }}',
         starsCount: 10,
         category: 'prestasi',
         reason: '{{ $starGiftsData['preset_reasons'][1] ?? 'Hebat sekali sudah menyelesaikan kartu materi & kuis dengan skor sempurna! 🏆' }}',
         searchQuery: '',
         studentSearch: '',
         categoryFilter: 'all',
         showModal: false,
         viewMode: 'table', // 'table' or 'cards'

         students: {{ Js::from($starGiftsData['students']) }},
         recentGifts: {{ Js::from($starGiftsData['recent_gifts']) }},
         categories: {{ Js::from($starGiftsData['categories']) }},
         presetReasons: {{ Js::from($starGiftsData['preset_reasons']) }},

         setStars(val) {
             this.starsCount = val;
         },

         setPresetReason(text, cat) {
             this.reason = text;
             if (cat) this.category = cat;
         },

         openGiftForStudent(studentId) {
             this.targetType = 'single';
             this.selectedStudentId = studentId;
             this.showModal = true;
         },

         selectStudentInForm(studentId) {
             this.targetType = 'single';
             this.selectedStudentId = studentId;
             const formEl = document.getElementById('gift-form-card');
             if (formEl) {
                 formEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
             }
         },

         get filteredStudents() {
             const q = this.studentSearch.toLowerCase();
             if (!q) return this.students;
             return this.students.filter(s => 
                 s.name.toLowerCase().includes(q) || 
                 s.username.toLowerCase().includes(q) || 
                 s.parent_name.toLowerCase().includes(q)
             );
         },

         get filteredGifts() {
             return this.recentGifts.filter(g => {
                 const matchesCat = this.categoryFilter === 'all' || g.category === this.categoryFilter;
                 const q = this.searchQuery.toLowerCase();
                 const matchesSearch = !q || 
                     g.recipient_name.toLowerCase().includes(q) || 
                     g.reason.toLowerCase().includes(q) || 
                     g.sender_name.toLowerCase().includes(q) ||
                     g.recipient_username.toLowerCase().includes(q);
                 return matchesCat && matchesSearch;
             });
         }
     }">

    <!-- Top Header Banner (Consistent with All Admin Pages) -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-6 relative overflow-hidden">
        <div class="z-10 max-w-2xl">
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-black uppercase tracking-wider mb-2.5 backdrop-blur-xs">
                🎁 Apresiasi & Motivasi Siswa PAUD
            </span>
            <h2 class="text-2xl sm:text-3xl font-black font-heading text-white leading-tight">
                Hadiah Bintang Emas & Catatan Apresiasi Guru
            </h2>
            <p class="text-xs sm:text-sm text-sky-100 mt-2 leading-relaxed">
                Berikan penghargaan bintang instan kepada siswa berprestasi atau bagikan bintang penyemangat ke seluruh kelas. Bintang langsung menambah progres anak dan memicu perayaan ceria di dashboard!
            </p>
        </div>

        <button @click="showModal = true" 
                class="px-5 py-3.5 sm:px-6 sm:py-4 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black text-xs sm:text-sm rounded-2xl shadow-md transition-all flex items-center justify-center gap-2.5 shrink-0 hover:scale-105 cursor-pointer z-10 w-full sm:w-auto">
            <span class="text-xl sm:text-2xl">⭐</span>
            <span>Kirim Hadiah Bintang</span>
        </button>

        <!-- Background Decorative Shape -->
        <span class="absolute -right-6 -bottom-6 text-9xl opacity-10 pointer-events-none select-none">🌟</span>
    </div>

    <!-- 4 KPI Summary Cards (2 Cols on Mobile, 4 Cols on Desktop) -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
        
        <!-- Total Stars Gifted -->
        <div class="bg-white p-4 sm:p-5 rounded-3xl border-2 sm:border-3 border-amber-200 shadow-xs flex items-center gap-3 sm:gap-4">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                ⭐
            </div>
            <div class="min-w-0">
                <span class="text-[10px] sm:text-[11px] font-black text-slate-400 uppercase tracking-wider block truncate">Bintang Terkirim</span>
                <h3 class="text-xl sm:text-2xl font-black text-amber-900 font-heading truncate">{{ number_format($starGiftsData['stats']['total_stars_gifted']) }}</h3>
                <span class="text-[10px] sm:text-[11px] font-bold text-amber-700 block truncate">Total apresiasi</span>
            </div>
        </div>

        <!-- Total Gifts Sent -->
        <div class="bg-white p-4 sm:p-5 rounded-3xl border-2 sm:border-3 border-purple-200 shadow-xs flex items-center gap-3 sm:gap-4">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-purple-100 border border-purple-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                💌
            </div>
            <div class="min-w-0">
                <span class="text-[10px] sm:text-[11px] font-black text-slate-400 uppercase tracking-wider block truncate">Catatan Guru</span>
                <h3 class="text-xl sm:text-2xl font-black text-slate-800 font-heading truncate">{{ $starGiftsData['stats']['total_gifts_count'] }}</h3>
                <span class="text-[10px] sm:text-[11px] font-bold text-purple-700 block truncate">Motivasi & pujian</span>
            </div>
        </div>

        <!-- Students Reached -->
        <div class="bg-white p-4 sm:p-5 rounded-3xl border-2 sm:border-3 border-emerald-200 shadow-xs flex items-center gap-3 sm:gap-4">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-emerald-100 border border-emerald-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                👶
            </div>
            <div class="min-w-0">
                <span class="text-[10px] sm:text-[11px] font-black text-slate-400 uppercase tracking-wider block truncate">Siswa Terapresiasi</span>
                <h3 class="text-xl sm:text-2xl font-black text-slate-800 font-heading truncate">{{ $starGiftsData['stats']['total_students_reached'] }}</h3>
                <span class="text-[10px] sm:text-[11px] font-bold text-emerald-700 block truncate">Penerima bintang</span>
            </div>
        </div>

        <!-- This Month Gifts -->
        <div class="bg-white p-4 sm:p-5 rounded-3xl border-2 sm:border-3 border-sky-200 shadow-xs flex items-center gap-3 sm:gap-4">
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-sky-100 border border-sky-300 flex items-center justify-center text-2xl sm:text-3xl shrink-0">
                📅
            </div>
            <div class="min-w-0">
                <span class="text-[10px] sm:text-[11px] font-black text-slate-400 uppercase tracking-wider block truncate">Bulan Ini</span>
                <h3 class="text-xl sm:text-2xl font-black text-slate-800 font-heading truncate">{{ $starGiftsData['stats']['this_month_count'] }}</h3>
                <span class="text-[10px] sm:text-[11px] font-bold text-sky-700 block truncate">Keaktifan terkini</span>
            </div>
        </div>

    </div>

    <!-- Alert Notifications -->
    @if(session('success'))
    <div class="p-4 bg-emerald-100 border-2 border-emerald-400 text-emerald-950 font-extrabold text-xs sm:text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
        <div class="flex items-center gap-3">
            <span class="text-xl sm:text-2xl">✨</span>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    @if($errors->any())
    <div class="p-4 bg-rose-100 border-2 border-rose-400 text-rose-950 font-bold text-xs sm:text-sm rounded-2xl shadow-xs">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Main Grid Section: Formulir Pengiriman + Daftar Siswa Cepat -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        
        <!-- Left: Formulir Kirim Hadiah Bintang (7 Cols) -->
        <div id="gift-form-card" class="lg:col-span-7 bg-white rounded-3xl p-5 sm:p-7 border-2 sm:border-3 border-slate-200 shadow-xs flex flex-col gap-5">
            
            <div class="flex items-center gap-3 pb-3 border-b border-slate-100">
                <div class="w-10 h-10 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-2xl shrink-0">
                    🎁
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-black font-heading text-slate-900 leading-tight">
                        Kirim Hadiah Bintang Baru
                    </h3>
                    <p class="text-xs font-bold text-slate-500 mt-0.5">Bintang akan langsung ditambahkan ke akun siswa dan memicu perayaan di dashboard.</p>
                </div>
            </div>

            <form action="{{ route('admin.star-gifts.send') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                
                <!-- 1. Target Selection (Single vs Bulk) -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">
                        1. Pilih Penerima Hadiah Bintang:
                    </label>
                    <div class="grid grid-cols-2 gap-2.5">
                        <button type="button" @click="targetType = 'single'"
                                class="p-3 rounded-2xl border-2 font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                                :class="targetType === 'single' ? 'bg-amber-100 border-amber-400 text-amber-950 shadow-xs ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 text-slate-600 hover:bg-slate-100'">
                            <span>🧒</span>
                            <span class="truncate">Satu Siswa</span>
                        </button>
                        <button type="button" @click="targetType = 'all'"
                                class="p-3 rounded-2xl border-2 font-black text-xs sm:text-sm flex items-center justify-center gap-2 transition-all cursor-pointer"
                                :class="targetType === 'all' ? 'bg-purple-100 border-purple-400 text-purple-950 shadow-xs ring-2 ring-purple-300' : 'bg-slate-50 border-slate-200 text-slate-600 hover:bg-slate-100'">
                            <span>🎉</span>
                            <span class="truncate">Semua Siswa (Massal)</span>
                        </button>
                    </div>
                    <input type="hidden" name="target_type" :value="targetType">
                </div>

                <!-- Single Student Dropdown (if targetType === 'single') -->
                <div x-show="targetType === 'single'" x-transition>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Pilih Nama Siswa:</label>
                    <select name="recipient_id" x-model="selectedStudentId"
                            class="w-full p-3 text-xs sm:text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-amber-500 focus:bg-white rounded-2xl outline-none cursor-pointer">
                        @foreach($starGiftsData['students'] as $student)
                            <option value="{{ $student['id'] }}">
                                {{ $student['avatar_emoji'] }} {{ $student['name'] }} (&#64;{{ $student['username'] }}) - ⭐ {{ $student['total_stars'] }} Bintang [{{ $student['parent_display_title'] }}]
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Bulk Message Alert (if targetType === 'all') -->
                <div x-show="targetType === 'all'" x-transition class="p-4 bg-purple-50 border-2 border-purple-200 rounded-2xl flex items-start gap-3 text-xs text-purple-950 font-bold">
                    <span class="text-2xl shrink-0">📢</span>
                    <div>
                        <p class="font-extrabold uppercase tracking-wide text-purple-900 mb-0.5">Hadiah Bintang Massal Kelas</p>
                        <p class="leading-relaxed text-slate-700">Setiap siswa aktif ({{ count($starGiftsData['students']) }} siswa) akan menerima jumlah bintang yang sama dan melihat pop-up perayaan saat membuka akun!</p>
                    </div>
                </div>

                <!-- 2. Stars Count Selection (Pills + Custom) -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">
                        2. Jumlah Hadiah Bintang Emas (⭐):
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 mb-2.5">
                        <button type="button" @click="setStars(5)"
                                class="py-2.5 px-2 rounded-2xl border-2 font-black text-xs transition-all flex flex-col items-center gap-0.5 cursor-pointer"
                                :class="starsCount === 5 ? 'bg-amber-400 border-amber-500 text-amber-950 shadow-xs scale-102 ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-amber-50'">
                            <span class="text-sm font-extrabold">⭐ +5</span>
                            <span class="text-[10px] font-bold opacity-80">Semangat</span>
                        </button>
                        <button type="button" @click="setStars(10)"
                                class="py-2.5 px-2 rounded-2xl border-2 font-black text-xs transition-all flex flex-col items-center gap-0.5 cursor-pointer"
                                :class="starsCount === 10 ? 'bg-amber-400 border-amber-500 text-amber-950 shadow-xs scale-102 ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-amber-50'">
                            <span class="text-sm font-extrabold">⭐ +10</span>
                            <span class="text-[10px] font-bold opacity-80">Prestasi</span>
                        </button>
                        <button type="button" @click="setStars(20)"
                                class="py-2.5 px-2 rounded-2xl border-2 font-black text-xs transition-all flex flex-col items-center gap-0.5 cursor-pointer"
                                :class="starsCount === 20 ? 'bg-amber-400 border-amber-500 text-amber-950 shadow-xs scale-102 ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-amber-50'">
                            <span class="text-sm font-extrabold">⭐ +20</span>
                            <span class="text-[10px] font-bold opacity-80">Juara</span>
                        </button>
                        <button type="button" @click="setStars(50)"
                                class="py-2.5 px-2 rounded-2xl border-2 font-black text-xs transition-all flex flex-col items-center gap-0.5 cursor-pointer"
                                :class="starsCount === 50 ? 'bg-amber-400 border-amber-500 text-amber-950 shadow-xs scale-102 ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 text-slate-700 hover:bg-amber-50'">
                            <span class="text-sm font-extrabold">⭐ +50</span>
                            <span class="text-[10px] font-bold opacity-80">Spesial</span>
                        </button>
                    </div>

                    <div class="flex items-center gap-2.5">
                        <span class="text-xs font-bold text-slate-500 whitespace-nowrap">Kustom:</span>
                        <input type="number" name="stars_count" x-model="starsCount" min="1" max="500" required
                               class="w-28 p-2.5 text-center text-sm font-black bg-slate-50 border-2 border-slate-200 focus:border-amber-500 focus:bg-white rounded-xl outline-none">
                        <span class="text-xs font-bold text-amber-800">Bintang Emas</span>
                    </div>
                </div>

                <!-- 3. Category Selection -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-2">
                        3. Kategori Apresiasi Guru:
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                        <template x-for="cat in categories" :key="cat.key">
                            <button type="button" @click="category = cat.key"
                                    class="p-2.5 rounded-2xl border-2 font-black text-xs flex items-center gap-2 transition-all cursor-pointer text-left"
                                    :class="category === cat.key ? 'bg-amber-100 border-amber-400 text-amber-950 shadow-xs ring-2 ring-amber-300' : 'bg-slate-50 border-slate-200 text-slate-600 hover:bg-slate-100'">
                                <span class="text-lg" x-text="cat.emoji"></span>
                                <span class="text-[11px] leading-tight truncate" x-text="cat.label"></span>
                            </button>
                        </template>
                    </div>
                    <input type="hidden" name="category" :value="category">
                </div>

                <!-- 4. Reason / Message -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-1.5">
                        4. Pesan Apresiasi Guru:
                    </label>
                    
                    <!-- Preset Message Chips -->
                    <div class="flex flex-col gap-1.5 mb-2.5">
                        <span class="text-[11px] font-bold text-slate-400">Pilih ucapan cepat:</span>
                        <div class="flex flex-col gap-1.5 max-h-36 overflow-y-auto pr-1">
                            <template x-for="(pr, idx) in presetReasons" :key="idx">
                                <button type="button" @click="reason = pr"
                                        class="text-left text-xs p-2.5 rounded-xl border transition-all cursor-pointer font-bold leading-relaxed"
                                        :class="reason === pr ? 'bg-amber-50 border-amber-300 text-amber-950 font-extrabold shadow-2xs' : 'bg-slate-50 border-slate-200 text-slate-600 hover:bg-slate-100'">
                                    <span x-text="pr"></span>
                                </button>
                            </template>
                        </div>
                    </div>

                    <textarea name="reason" x-model="reason" rows="2" required placeholder="Tuliskan pesan motivasi untuk siswa..."
                              class="w-full p-3 text-xs sm:text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-amber-500 focus:bg-white rounded-2xl outline-none transition-all"></textarea>
                </div>

                <button type="submit"
                        class="w-full py-4 px-6 bg-yellow-400 hover:bg-yellow-300 active:scale-98 text-yellow-950 font-black text-sm sm:text-base rounded-2xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2.5 cursor-pointer mt-2 border-2 border-yellow-500">
                    <span class="text-xl sm:text-2xl animate-bounce-slow">🚀</span>
                    <span class="tracking-wide" x-text="targetType === 'all' ? 'Bagikan ' + starsCount + ' Bintang ke Seluruh Siswa!' : 'Kirim ' + starsCount + ' Bintang ke Siswa Sekarang!'"></span>
                </button>

            </form>

        </div>

        <!-- Right: Daftar Siswa Petualang & Tombol Cepat (5 Cols) -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-5 sm:p-7 border-2 sm:border-3 border-slate-200 shadow-xs flex flex-col gap-4">
            
            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                <div class="flex items-center gap-2.5">
                    <span class="text-2xl">🌟</span>
                    <div>
                        <h3 class="text-base sm:text-lg font-black font-heading text-slate-800 leading-tight">
                            Siswa Petualang
                        </h3>
                        <p class="text-xs font-bold text-slate-400">Pilih siswa untuk dikirimi bintang</p>
                    </div>
                </div>
                <span class="px-2.5 py-0.5 bg-emerald-100 text-emerald-800 rounded-full text-xs font-black shrink-0">
                    <span x-text="filteredStudents.length"></span> Siswa
                </span>
            </div>

            <!-- Student Search -->
            <div class="relative">
                <input type="text" x-model="studentSearch" placeholder="Cari nama siswa / ortu..."
                       class="w-full pl-9 pr-3.5 py-2.5 bg-slate-50 border-2 border-slate-200 focus:border-amber-500 focus:bg-white rounded-xl text-xs font-bold outline-none transition-all">
                <span class="absolute left-3 top-2.5 text-slate-400 text-sm">🔍</span>
            </div>

            <div class="flex flex-col gap-2 max-h-[480px] overflow-y-auto pr-1">
                <template x-for="s in filteredStudents" :key="s.id">
                    <div class="p-3 rounded-2xl border-2 border-slate-200 hover:border-amber-300 bg-slate-50 hover:bg-amber-50/40 transition-all flex items-center justify-between gap-2.5">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <div class="w-10 h-10 rounded-2xl bg-white border border-amber-300 flex items-center justify-center text-2xl shrink-0 shadow-2xs">
                                <span x-text="s.avatar_emoji"></span>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-black text-slate-900 leading-tight truncate" x-text="s.name"></h4>
                                <div class="flex items-center gap-1.5 mt-0.5 text-[11px] text-slate-500 font-bold">
                                    <span class="text-amber-700 font-extrabold whitespace-nowrap">⭐ <span x-text="s.total_stars"></span></span>
                                    <span>•</span>
                                    <span class="text-purple-700 font-semibold truncate max-w-[100px] sm:max-w-[120px]" x-text="s.parent_name"></span>
                                </div>
                            </div>
                        </div>

                        <button type="button" @click="selectStudentInForm(s.id)"
                                class="px-3 py-1.5 bg-amber-400 hover:bg-amber-500 text-amber-950 font-black rounded-xl text-xs shadow-2xs transition-all shrink-0 cursor-pointer">
                            ⭐ Pilih
                        </button>
                    </div>
                </template>
                <template x-if="filteredStudents.length === 0">
                    <div class="p-6 text-center text-slate-400 font-bold text-xs">
                        Tidak ada siswa yang cocok dengan pencarian.
                    </div>
                </template>
            </div>

        </div>

    </div>

    <!-- Bottom Section: Riwayat Hadiah & Apresiasi Bintang Guru -->
    <div class="bg-white rounded-3xl p-5 sm:p-7 border-2 sm:border-3 border-slate-200 shadow-xs flex flex-col gap-5">
        
        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
            <div>
                <h3 class="text-lg sm:text-xl font-black font-heading text-slate-900 flex items-center gap-2">
                    <span>📜</span>
                    <span>Riwayat Hadiah Bintang & Catatan Apresiasi</span>
                </h3>
                <p class="text-xs font-bold text-slate-500 mt-0.5">Daftar apresiasi dan hadiah bintang yang telah dikirimkan ke siswa.</p>
            </div>

            <!-- Filters -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5">
                <div class="relative flex-1 sm:w-60">
                    <input type="text" x-model="searchQuery" placeholder="Cari nama / pesan..."
                           class="w-full pl-9 pr-3.5 py-2.5 bg-slate-50 border-2 border-slate-200 focus:border-amber-500 focus:bg-white rounded-xl text-xs font-bold outline-none transition-all">
                    <span class="absolute left-3 top-2.5 text-slate-400 text-sm">🔍</span>
                </div>

                <select x-model="categoryFilter"
                        class="p-2.5 bg-slate-50 border-2 border-slate-200 focus:border-amber-500 focus:bg-white rounded-xl text-xs font-bold outline-none cursor-pointer">
                    <option value="all">Semua Kategori</option>
                    <template x-for="cat in categories" :key="cat.key">
                        <option :value="cat.key" x-text="cat.emoji + ' ' + cat.label"></option>
                    </template>
                </select>
            </div>
        </div>

        <!-- Table View (Desktop & Tablet) / Cards View on Mobile -->
        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left border-collapse min-w-[700px]">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-slate-500 font-extrabold text-[11px] uppercase tracking-wider">
                        <th class="p-4">Siswa Penerima</th>
                        <th class="p-4">Hadiah</th>
                        <th class="p-4">Kategori & Pesan Guru</th>
                        <th class="p-4">Pengirim</th>
                        <th class="p-4">Waktu</th>
                        <th class="p-4">Status Perayaan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-xs">
                    <template x-for="gift in filteredGifts" :key="gift.id">
                        <tr class="hover:bg-amber-50/30 transition-colors">
                            
                            <!-- Siswa Penerima -->
                            <td class="p-4">
                                <div class="flex items-center gap-2.5">
                                    <span class="text-2xl" x-text="gift.recipient_avatar"></span>
                                    <div>
                                        <p class="font-extrabold text-slate-900" x-text="gift.recipient_name"></p>
                                        <p class="text-[11px] font-mono text-slate-400" x-text="'@' + gift.recipient_username"></p>
                                    </div>
                                </div>
                            </td>

                            <!-- Jumlah Bintang -->
                            <td class="p-4">
                                <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-100 border border-amber-300 rounded-full font-black text-amber-950 text-xs shadow-2xs">
                                    <span>⭐</span>
                                    <span x-text="'+' + gift.stars_count"></span>
                                </div>
                            </td>

                            <!-- Kategori & Pesan -->
                            <td class="p-4 max-w-xs sm:max-w-md">
                                <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-700 font-extrabold text-[10px] rounded-md mb-1">
                                    <span x-text="gift.category_emoji"></span>
                                    <span x-text="gift.category_label"></span>
                                </span>
                                <p class="text-xs font-bold text-slate-800 leading-relaxed" x-text="'“' + gift.reason + '”'"></p>
                            </td>

                            <!-- Guru Pengirim -->
                            <td class="p-4 text-slate-700 font-extrabold">
                                <div class="flex items-center gap-1.5">
                                    <span>🦁</span>
                                    <span x-text="gift.sender_name"></span>
                                </div>
                            </td>

                            <!-- Waktu Dikirim -->
                            <td class="p-4 text-slate-500 font-semibold whitespace-nowrap">
                                <p x-text="gift.created_at"></p>
                                <span class="text-[10px] text-slate-400" x-text="gift.relative_time"></span>
                            </td>

                            <!-- Status Perayaan -->
                            <td class="p-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 rounded-full font-bold text-[10px] inline-flex items-center gap-1"
                                      :class="gift.is_claimed ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800'">
                                    <span class="w-1.5 h-1.5 rounded-full" :class="gift.is_claimed ? 'bg-emerald-500' : 'bg-amber-500'"></span>
                                    <span x-text="gift.is_claimed ? 'Dirayakan Siswa ✨' : 'Menunggu Login ⏳'"></span>
                                </span>
                            </td>

                        </tr>
                    </template>
                    <template x-if="filteredGifts.length === 0">
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-400 font-bold">
                                Belum ada riwayat hadiah bintang yang cocok dengan filter pencarian.
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

    </div>

    <!-- MODAL POPUP: KIRIM HADIAH BINTANG (RESPONSIVE MULTI-DEVICE) -->
    <div x-show="showModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-amber-400 shadow-2xl relative my-8"
             @click.away="showModal = false">
            
            <button @click="showModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-5">
                <div class="w-12 h-12 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-3xl shrink-0">
                    🎁
                </div>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">
                        Kirim Hadiah Bintang Guru
                    </h3>
                    <p class="text-xs font-bold text-slate-500">
                        Pemberian apresiasi bintang emas instan ke siswa PAUD
                    </p>
                </div>
            </div>

            <form action="{{ route('admin.star-gifts.send') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <!-- Target Type -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-1.5">
                        Penerima:
                    </label>
                    <div class="grid grid-cols-2 gap-2">
                        <button type="button" @click="targetType = 'single'"
                                class="p-2.5 rounded-xl border-2 font-black text-xs flex items-center justify-center gap-1.5 transition-all cursor-pointer"
                                :class="targetType === 'single' ? 'bg-amber-100 border-amber-400 text-amber-950' : 'bg-slate-50 border-slate-200 text-slate-600'">
                            <span>🧒</span>
                            <span>Satu Siswa</span>
                        </button>
                        <button type="button" @click="targetType = 'all'"
                                class="p-2.5 rounded-xl border-2 font-black text-xs flex items-center justify-center gap-1.5 transition-all cursor-pointer"
                                :class="targetType === 'all' ? 'bg-purple-100 border-purple-400 text-purple-950' : 'bg-slate-50 border-slate-200 text-slate-600'">
                            <span>🎉</span>
                            <span>Seluruh Siswa</span>
                        </button>
                    </div>
                    <input type="hidden" name="target_type" :value="targetType">
                </div>

                <!-- Single Student Picker -->
                <div x-show="targetType === 'single'">
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Siswa:</label>
                    <select name="recipient_id" x-model="selectedStudentId"
                            class="w-full p-2.5 text-xs font-bold bg-slate-50 border-2 border-slate-200 focus:border-amber-500 rounded-xl outline-none cursor-pointer">
                        @foreach($starGiftsData['students'] as $student)
                            <option value="{{ $student['id'] }}">
                                {{ $student['avatar_emoji'] }} {{ $student['name'] }} (&#64;{{ $student['username'] }}) - ⭐ {{ $student['total_stars'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Stars Count -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-1.5">
                        Jumlah Bintang (⭐):
                    </label>
                    <div class="grid grid-cols-4 gap-2 mb-2">
                        <button type="button" @click="setStars(5)"
                                class="py-2 px-1 rounded-xl border-2 font-black text-xs transition-all flex flex-col items-center"
                                :class="starsCount === 5 ? 'bg-amber-400 border-amber-500 text-amber-950 scale-105' : 'bg-slate-50 border-slate-200 text-slate-700'">
                            <span>⭐ +5</span>
                        </button>
                        <button type="button" @click="setStars(10)"
                                class="py-2 px-1 rounded-xl border-2 font-black text-xs transition-all flex flex-col items-center"
                                :class="starsCount === 10 ? 'bg-amber-400 border-amber-500 text-amber-950 scale-105' : 'bg-slate-50 border-slate-200 text-slate-700'">
                            <span>⭐ +10</span>
                        </button>
                        <button type="button" @click="setStars(20)"
                                class="py-2 px-1 rounded-xl border-2 font-black text-xs transition-all flex flex-col items-center"
                                :class="starsCount === 20 ? 'bg-amber-400 border-amber-500 text-amber-950 scale-105' : 'bg-slate-50 border-slate-200 text-slate-700'">
                            <span>⭐ +20</span>
                        </button>
                        <button type="button" @click="setStars(50)"
                                class="py-2 px-1 rounded-xl border-2 font-black text-xs transition-all flex flex-col items-center"
                                :class="starsCount === 50 ? 'bg-amber-400 border-amber-500 text-amber-950 scale-105' : 'bg-slate-50 border-slate-200 text-slate-700'">
                            <span>⭐ +50</span>
                        </button>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-bold text-slate-500">Kustom:</span>
                        <input type="number" name="stars_count" x-model="starsCount" min="1" max="500" required
                               class="w-24 p-2 text-center text-xs font-black bg-slate-50 border-2 border-slate-200 focus:border-amber-500 rounded-xl outline-none">
                        <span class="text-xs font-bold text-amber-800">Bintang</span>
                    </div>
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-1.5">
                        Kategori Apresiasi:
                    </label>
                    <select name="category" x-model="category"
                            class="w-full p-2.5 text-xs font-bold bg-slate-50 border-2 border-slate-200 focus:border-amber-500 rounded-xl outline-none cursor-pointer">
                        <template x-for="cat in categories" :key="cat.key">
                            <option :value="cat.key" x-text="cat.emoji + ' ' + cat.label"></option>
                        </template>
                    </select>
                </div>

                <!-- Reason -->
                <div>
                    <label class="block text-xs font-black uppercase tracking-wider text-slate-700 mb-1.5">
                        Pesan Motivasi Guru:
                    </label>
                    <textarea name="reason" x-model="reason" rows="2" required placeholder="Tuliskan pesan motivasi..."
                              class="w-full p-2.5 text-xs font-bold bg-slate-50 border-2 border-slate-200 focus:border-amber-500 rounded-xl outline-none"></textarea>
                </div>

                <div class="flex gap-3 mt-3">
                    <button type="button" @click="showModal = false"
                            class="flex-1 py-3.5 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3.5 px-4 bg-yellow-400 hover:bg-yellow-300 active:scale-98 text-yellow-950 font-black text-xs sm:text-sm rounded-xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 cursor-pointer border border-yellow-500">
                        <span>🚀</span>
                        <span>Kirim Hadiah Bintang</span>
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection

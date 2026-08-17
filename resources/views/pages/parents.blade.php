@extends('layouts.app')

@section('title', 'Portal Orang Tua & Pendamping - YukBelajar PAUD')

@section('content')
<div class="flex flex-col gap-6 max-w-5xl mx-auto pb-16"
     x-data="{
         savedName: '{{ $parentData['child_profile']['name'] }}',
         savedAge: {{ $parentData['child_profile']['age'] }},
         savedAvatar: '{{ $parentData['child_profile']['avatar'] }}',
         curriculumMode: 'adaptive', // 'adaptive' (by age) or 'unlocked_all' (accelerated)
         unlockedCategories: {{ Js::from($parentData['unlocked_categories']) }},
         showSuccessAlert: false,
         
         saveProfile() {
             this.showSuccessAlert = true;
             if (window.soundEngine) window.soundEngine.playVictory();
             setTimeout(() => this.showSuccessAlert = false, 3500);
         },

         toggleCategoryLevel(key) {
             this.unlockedCategories[key] = !this.unlockedCategories[key];
             this.saveProfile();
         }
     }">

    <!-- Top Banner Protected Mode -->
    <div class="bg-gradient-to-r from-slate-800 to-slate-900 text-white rounded-3xl p-6 sm:p-8 shadow-md border-4 border-slate-700 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-4 text-center sm:text-left">
            <div class="w-16 h-16 bg-slate-700 rounded-2xl flex items-center justify-center text-3xl border border-slate-600 shrink-0">
                🔒
            </div>
            <div>
                <span class="inline-block px-2.5 py-0.5 bg-emerald-500/20 text-emerald-300 rounded-full text-xs font-bold uppercase tracking-wider mb-1">
                    Parental Gate Terverifikasi
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                    Portal Pantauan Belajar Orang Tua
                </h2>
                <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                    Memonitor perkembangan minat, penguasaan materi, dan atur penyesuaian usia belajar anak.
                </p>
            </div>
        </div>

        <a href="{{ route('home') }}" 
           class="px-5 py-2.5 bg-slate-700 hover:bg-slate-600 rounded-2xl text-xs font-bold text-slate-200 transition-all shrink-0">
            ← Kembali ke Tampilan Siswa
        </a>
    </div>

    <!-- Quick Stats Cards (Real Data MySQL) -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        
        <div class="bg-white p-5 rounded-3xl border-3 border-amber-300 shadow-xs flex flex-col items-center text-center">
            <span class="text-3xl mb-1">⭐</span>
            <span class="text-2xl font-black font-heading text-amber-900">{{ $parentData['learning_summary']['total_stars'] }}</span>
            <span class="text-xs font-bold text-slate-500">Bintang Terkumpul</span>
        </div>

        <div class="bg-white p-5 rounded-3xl border-3 border-sky-300 shadow-xs flex flex-col items-center text-center">
            <span class="text-3xl mb-1">🎯</span>
            <span class="text-2xl font-black font-heading text-sky-900">{{ $parentData['learning_summary']['quizzes_completed'] }}</span>
            <span class="text-xs font-bold text-slate-500">Kuis Diselesaikan</span>
        </div>

        <div class="bg-white p-5 rounded-3xl border-3 border-emerald-300 shadow-xs flex flex-col items-center text-center">
            <span class="text-3xl mb-1">📚</span>
            <span class="text-2xl font-black font-heading text-emerald-900">{{ $parentData['learning_summary']['materials_read'] }}</span>
            <span class="text-xs font-bold text-slate-500">Flashcard Aktif</span>
        </div>

        <div class="bg-white p-5 rounded-3xl border-3 border-purple-300 shadow-xs flex flex-col items-center text-center">
            <span class="text-3xl mb-1">🔥</span>
            <span class="text-2xl font-black font-heading text-purple-900">{{ $parentData['learning_summary']['learning_streak_days'] }} Hari</span>
            <span class="text-xs font-bold text-slate-500">Belajar Berturut</span>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Left 2 Cols: Topic Mastery, Curriculum Unlock Manager & Activity Timeline -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            
            <!-- Pedagogical Recommendation Box -->
            <div class="bg-amber-50 border-3 border-amber-300 rounded-3xl p-6 shadow-xs">
                <div class="flex items-center gap-3 mb-2">
                    <span class="text-2xl">💡</span>
                    <h4 class="text-lg font-bold font-heading text-amber-950">
                        Rekomendasi Pendampingan Sesuai Usia (<span x-text="savedAge"></span> Tahun)
                    </h4>
                </div>
                <p class="text-sm font-semibold text-amber-900 leading-relaxed">
                    {{ $parentData['recommendation'] }}
                </p>
            </div>

            <!-- CURRICULUM & LEVEL UNLOCK MANAGER (SCAFFOLDING CONTROL - REAL DATA) -->
            <div class="bg-white border-3 border-purple-200 rounded-3xl p-6 shadow-xs flex flex-col gap-4">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 border-b border-slate-100 pb-3">
                    <div>
                        <span class="text-xs font-black uppercase text-purple-700 bg-purple-100 px-3 py-0.5 rounded-full">
                            Kontrol Pembelajaran Anak Cerdas
                        </span>
                        <h4 class="text-lg font-black font-heading text-slate-800 mt-1 flex items-center gap-2">
                            <span>🔓</span>
                            <span>Pengaturan Kunci Tingkatan Level (Scaffolding)</span>
                        </h4>
                    </div>

                    <!-- Mode Switch -->
                    <div class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl text-xs font-bold">
                        <button @click="curriculumMode = 'adaptive'; saveProfile()"
                                class="px-3 py-1.5 rounded-lg transition-all cursor-pointer"
                                :class="curriculumMode === 'adaptive' ? 'bg-white text-sky-800 shadow-xs' : 'text-slate-600'">
                            Sesuai Usia (<span x-text="savedAge"></span> Thn)
                        </button>
                        <button @click="curriculumMode = 'unlocked_all'; saveProfile()"
                                class="px-3 py-1.5 rounded-lg transition-all cursor-pointer"
                                :class="curriculumMode === 'unlocked_all' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600'">
                            ⚡ Buka Semua Level
                        </button>
                    </div>
                </div>

                <p class="text-xs font-semibold text-slate-500">
                    Orang tua dapat membuka kunci Level 3 (Pra-SD) secara manual apabila anak menunjukkan kemampuan lebih cepat (akselerasi mandiri).
                </p>

                <!-- Category Level Unlock Table (Dynamic Real Database Categories) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach($parentData['categories'] as $cat)
                    <div class="p-3 bg-slate-50 border border-slate-200 rounded-2xl flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="text-2xl">{{ $cat['icon_emoji'] }}</span>
                            <div>
                                <h5 class="text-xs font-extrabold text-slate-800">{{ $cat['name'] }}</h5>
                                <span class="text-[10px] text-slate-500">{{ $cat['level_title'] }}</span>
                            </div>
                        </div>
                        <button @click="toggleCategoryLevel('{{ $cat['slug'] }}_3')"
                                class="px-3 py-1 text-xs font-bold rounded-xl transition-all cursor-pointer"
                                :class="unlockedCategories['{{ $cat['slug'] }}_3'] || curriculumMode === 'unlocked_all' ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : 'bg-slate-200 text-slate-600'">
                            <span x-text="unlockedCategories['{{ $cat['slug'] }}_3'] || curriculumMode === 'unlocked_all' ? '🔓 Terbuka' : '🔒 Terkunci'"></span>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Topic Mastery Progress (Real Data MySQL Quiz Attempts) -->
            <div class="bg-white border-3 border-slate-200 rounded-3xl p-6 shadow-xs">
                <h4 class="text-lg font-bold font-heading text-slate-800 mb-4 flex items-center gap-2">
                    <span>📊</span>
                    <span>Tingkat Pemahaman per Kategori Belajar</span>
                </h4>

                <div class="flex flex-col gap-4">
                    @foreach($parentData['topic_mastery'] as $topic)
                    <div class="flex flex-col gap-1.5 border-b border-slate-100 pb-3 last:border-0 last:pb-0">
                        <div class="flex items-center justify-between text-sm">
                            <span class="font-bold text-slate-800 flex items-center gap-1.5">
                                <span>{{ $topic['icon'] }}</span>
                                <span>{{ $topic['category'] }}</span>
                            </span>
                            <span class="font-extrabold text-slate-700">{{ $topic['progress_pct'] }}%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-3 overflow-hidden">
                            <div class="{{ $topic['color'] }} h-full rounded-full transition-all duration-500" style="width: {{ $topic['progress_pct'] }}%;"></div>
                        </div>
                        <p class="text-xs font-semibold text-slate-500">{{ $topic['note'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Recent Activity Timeline (Real Data MySQL Quiz Attempts) -->
            <div class="bg-white border-3 border-slate-200 rounded-3xl p-6 shadow-xs">
                <h4 class="text-lg font-bold font-heading text-slate-800 mb-4 flex items-center gap-2">
                    <span>⏱️</span>
                    <span>Riwayat Aktivitas Belajar Anak</span>
                </h4>

                <div class="flex flex-col gap-3">
                    @forelse($parentData['recent_activities'] as $act)
                    <div class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 border border-slate-200">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">{{ $act['icon'] }}</span>
                            <div>
                                <h5 class="text-sm font-bold text-slate-800">{{ $act['topic'] }}</h5>
                                <span class="text-xs text-slate-500">{{ $act['time'] }}</span>
                            </div>
                        </div>
                        <div class="text-right">
                            @if(isset($act['score']) && $act['score'] !== null)
                                <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 rounded-full font-black text-xs">
                                    Skor: {{ $act['score'] }} ({{ str_repeat('⭐', max(1, min(3, (int) $act['stars']))) }})
                                </span>
                            @else
                                <span class="px-2.5 py-1 bg-sky-100 text-sky-800 rounded-full font-bold text-xs">
                                    {{ $act['status'] }}
                                </span>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="p-6 text-center text-slate-500 bg-slate-50 rounded-2xl border border-slate-200">
                        <p class="text-sm font-bold">Belum ada riwayat aktivitas kuis.</p>
                        <p class="text-xs text-slate-400 mt-1">Ajak ananda menyelesaikan modul petualangan untuk melihat perkembangan di sini.</p>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>

        <!-- Right 1 Col: Child Profile & Settings -->
        <div class="flex flex-col gap-6">
            
            <div class="bg-white border-3 border-slate-200 rounded-3xl p-6 shadow-xs flex flex-col gap-4">
                <h4 class="text-lg font-bold font-heading text-slate-800 flex items-center gap-2">
                    <span>⚙️</span>
                    <span>Kelola Profil & Usia Anak</span>
                </h4>

                <!-- Success Alert -->
                <div x-show="showSuccessAlert" x-cloak
                     class="p-3 bg-emerald-100 border border-emerald-300 text-emerald-800 font-bold text-xs rounded-2xl animate-pop-star">
                    ✨ Pengaturan profil & usia belajar berhasil diperbarui!
                </div>

                <form @submit.prevent="saveProfile()" class="flex flex-col gap-3.5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nama Panggilan Anak</label>
                        <input type="text" x-model="savedName" required
                               class="w-full p-3 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Usia Belajar (PAUD/TK)</label>
                        <select x-model="savedAge" @change="saveProfile()"
                                class="w-full p-3 text-sm font-bold bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-2xl outline-none cursor-pointer">
                            <option :value="3">3 Tahun (Level 1: Dasar / Pemula)</option>
                            <option :value="4">4 Tahun (Level 2: Menengah / Eksplorasi)</option>
                            <option :value="5">5 Tahun (Level 3: Pra-SD / Mahir)</option>
                            <option :value="6">6 Tahun (Level 3: Siap Sekolah Dasar)</option>
                        </select>
                        <span class="text-[11px] font-semibold text-slate-500 mt-1 block">
                            💡 Mengubah usia akan otomatis menyesuaikan kurikulum dan modul yang disarankan.
                        </span>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Avatar Anak</label>
                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-2xl border-2 border-slate-200">
                            <span class="text-3xl">{{ $parentData['child_profile']['avatar_emoji'] }}</span>
                            <div class="text-xs">
                                <p class="font-bold text-slate-800">{{ $parentData['child_profile']['avatar_name'] }}</p>
                                <a href="{{ route('profile') }}" class="text-sky-600 font-bold hover:underline">Ganti Avatar & Aksesori →</a>
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                            class="btn-3d btn-3d-sky w-full py-3.5 rounded-2xl font-bold text-sm text-white mt-2">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('profile') }}" 
                       class="w-full py-3 px-4 bg-slate-100 hover:bg-slate-200 border-2 border-slate-200 text-slate-700 font-extrabold text-xs rounded-2xl flex items-center justify-center gap-2 transition-all text-center">
                        <span>⚙️</span>
                        <span>Pengaturan Lengkap Profil & Keamanan PIN →</span>
                    </a>
                </form>
            </div>

            <!-- Print Certificate Studio Quick Access -->
            <div class="bg-gradient-to-br from-yellow-100 to-amber-100 border-3 border-amber-300 rounded-3xl p-6 shadow-xs flex flex-col gap-3 text-center items-center">
                <span class="text-5xl animate-bounce-slow">🏆</span>
                <h4 class="font-extrabold text-base text-amber-950 font-heading">
                    Piagam Kelulusan Si Kecil
                </h4>
                <p class="text-xs font-semibold text-amber-900 leading-relaxed">
                    Lihat dan cetak sertifikat resmi kelulusan pulau atau penghargaan bintang emas untuk si buah hati!
                </p>
                <a href="{{ route('achievements') }}" 
                   class="btn-3d btn-3d-yellow w-full py-3 rounded-2xl text-xs font-black text-amber-950">
                    Buka Studio Sertifikat 📜
                </a>
            </div>

        </div>

    </div>

</div>
@endsection

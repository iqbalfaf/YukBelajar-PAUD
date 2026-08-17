<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\Category;
use App\Models\LearningLevel;
use App\Models\Material;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\Sticker;
use App\Models\User;
use App\Services\GeminiService;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    /**
     * Dashboard Utama Admin & Guru PAUD (Real Data dari MySQL via Eloquent).
     */
    public function dashboard(GeminiService $geminiService): View
    {
        // 1. Ambil seluruh kategori beserta level dan kartu materi
        $categoriesModel = Category::with(['levels.materials'])->orderBy('sort_order')->get();

        $categories = $categoriesModel->map(function ($cat) {
            return [
                'name' => $cat->name,
                'slug' => $cat->slug,
                'icon_emoji' => $cat->icon_emoji,
                'color_theme' => $cat->color_theme,
                'bg_gradient' => $cat->bg_gradient,
                'border_color' => $cat->border_color,
                'subtitle' => $cat->subtitle,
                'materials_count' => $cat->levels->flatMap->materials->count(),
                'recommended_age' => $cat->recommended_age,
                'age_min' => $cat->age_min,
                'age_max' => $cat->age_max,
            ];
        })->toArray();

        // 2. Format struktur categorized_materials untuk UI tab per kategori & level
        $categorizedMaterials = [];
        foreach ($categoriesModel as $cat) {
            $levelsArr = [];
            foreach ($cat->levels as $lvl) {
                $itemsArr = [];
                foreach ($lvl->materials as $mat) {
                    $itemsArr[] = [
                        'id' => $mat->id,
                        'title' => $mat->title,
                        'subtitle' => $mat->subtitle,
                        'type' => 'Flashcard Bergambar',
                        'voice_ready' => ! empty($mat->speech_text),
                        'has_quiz' => true,
                        'icon_emoji' => $mat->icon_emoji,
                        'sound_effect' => $mat->sound_effect,
                    ];
                }

                $levelsArr[] = [
                    'level_num' => $lvl->level_number,
                    'level_title' => $lvl->title,
                    'cards_count' => count($itemsArr),
                    'items' => $itemsArr,
                ];
            }

            $categorizedMaterials[$cat->slug] = [
                'category_name' => $cat->name,
                'category_icon' => $cat->icon_emoji,
                'levels' => $levelsArr,
            ];
        }

        // 3. Hitung ringkasan statistik nyata dari database murni
        $totalMaterials = Material::count();
        $totalQuizzes = Quiz::count();
        $totalStudents = User::where('role', 'student')->count();
        $totalStarsAwarded = (int) User::where('role', 'student')->sum('total_stars');
        $activeTeachers = User::whereIn('role', ['admin', 'teacher'])->count();

        // 4. Hitung data analitik 7 hari terakhir dari tabel quiz_attempts nyata (Database MySQL murni)
        $now = Carbon::now();
        $dailyData = [];

        for ($offset = 6; $offset >= 0; $offset--) {
            $date = $now->copy()->subDays($offset);
            $dayKey = $date->format('Y-m-d');
            $dayLabel = match ($date->dayOfWeekIso) {
                1 => 'Sen',
                2 => 'Sel',
                3 => 'Rab',
                4 => 'Kam',
                5 => 'Jum',
                6 => 'Sab',
                default => 'Min',
            };
            $dayFullName = match ($date->dayOfWeekIso) {
                1 => 'Senin',
                2 => 'Selasa',
                3 => 'Rabu',
                4 => 'Kamis',
                5 => 'Jumat',
                6 => 'Sabtu',
                default => 'Minggu',
            };

            $attemptsOnDay = QuizAttempt::whereDate('completed_at', $dayKey)->get();
            $qCount = $attemptsOnDay->count();
            $sCount = (int) $attemptsOnDay->sum('stars_earned');

            $dailyData[] = [
                'date' => $dayKey,
                'day' => $dayLabel,
                'full_day' => $dayFullName,
                'quizzes' => $qCount,
                'stars' => $sCount,
            ];
        }

        $maxQuizzes = max(array_column($dailyData, 'quizzes')) ?: 1;
        $maxStars = max(array_column($dailyData, 'stars')) ?: 1;

        $weeklyActivity = [];
        $peakDay = $dailyData[count($dailyData) - 1]['full_day'];
        $peakQuizzes = 0;
        $peakStars = 0;
        $totalQuizzesWeekly = 0;
        $starsThisWeek = 0;

        foreach ($dailyData as $item) {
            $qCount = $item['quizzes'];
            $sCount = $item['stars'];
            $totalQuizzesWeekly += $qCount;
            $starsThisWeek += $sCount;

            if ($qCount >= $peakQuizzes && $qCount > 0) {
                $peakQuizzes = $qCount;
                $peakStars = $sCount;
                $peakDay = $item['full_day'];
            }

            // Normalisasi proporsi tinggi bar (antara 8% - 85% agar tidak keluar container dan bebas tabrakan)
            $quizHeightPct = $qCount > 0 ? round(($qCount / $maxQuizzes) * 82) : 6;
            $starHeightPct = $sCount > 0 ? round(($sCount / $maxStars) * 82) : 6;

            $weeklyActivity[] = [
                'day' => $item['day'],
                'quizzes' => $qCount,
                'stars' => $sCount,
                'quiz_height' => max(6, $quizHeightPct),
                'star_height' => max(6, $starHeightPct),
            ];
        }

        // 5. Hitung tingkat ketuntasan per kategori dari data quiz_attempts nyata
        $categoryDistribution = [];
        $topCatName = '-';
        $topCatPct = 0;

        foreach ($categoriesModel as $cat) {
            $quizzesInCat = Quiz::where('category_id', $cat->id)->pluck('id');
            $materialsCount = $cat->levels->flatMap->materials->count();
            $quizzesCount = $quizzesInCat->count();

            $attemptsInCat = QuizAttempt::whereIn('quiz_id', $quizzesInCat)->get();
            $attemptsCount = $attemptsInCat->count();

            if ($attemptsCount > 0) {
                $pct = (int) round($attemptsInCat->avg('score'));
            } else {
                $pct = 0;
            }

            if ($pct >= $topCatPct && ($pct > 0 || $topCatName === '-')) {
                $topCatPct = $pct;
                $topCatName = "{$cat->icon_emoji} {$cat->name} ({$pct}%)";
            }

            $bgBar = match ($cat->color_theme) {
                'orange' => 'bg-amber-500',
                'sky' => 'bg-sky-500',
                'pink', 'rose' => 'bg-rose-500',
                'purple' => 'bg-purple-500',
                'indigo' => 'bg-indigo-500',
                default => 'bg-emerald-500',
            };

            $categoryDistribution[] = [
                'name' => $cat->name,
                'icon' => $cat->icon_emoji,
                'materials' => $materialsCount,
                'quizzes' => $quizzesCount,
                'attempts' => $attemptsCount,
                'pct' => $pct,
                'bg_bar' => $bgBar,
            ];
        }

        // 6. Ambil live audit logs dari tabel audit_logs nyata
        $auditLogs = AuditLog::with('user')->latest()->take(6)->get()->map(function ($log) {
            $badge = match ($log->action_type) {
                'LOGIN' => 'bg-sky-100 text-sky-800',
                'CREATE_MATERIAL', 'AI_GENERATE', 'PUBLISH_AI', 'CREATE_QUIZ', 'CREATE_QUESTION' => 'bg-purple-100 text-purple-800',
                'UPDATE_PROFILE', 'UPDATE_QUIZ' => 'bg-amber-100 text-amber-800',
                'DELETE_USER', 'DELETE_MATERIAL', 'DELETE_QUIZ', 'DELETE_QUESTION' => 'bg-rose-100 text-rose-800',
                default => 'bg-emerald-100 text-emerald-800',
            };

            return [
                'id' => $log->id,
                'user' => $log->user ? $log->user->name : 'Sistem Otomatis',
                'action' => $log->action_type,
                'badge' => $badge,
                'detail' => $log->description,
                'time' => $log->created_at ? $log->created_at->diffForHumans() : 'Baru saja',
            ];
        })->toArray();

        $avgScore = QuizAttempt::avg('score');
        $avgCompletionRate = $avgScore ? round($avgScore).'%' : '0%';

        $isGeminiConfigured = $geminiService->isConfigured();
        $configuredModel = config('services.gemini.model', env('GEMINI_MODEL', 'gemini-2.0-flash'));

        $aiGenerationsToday = AuditLog::where('action_type', 'AI_GENERATE')->whereDate('created_at', Carbon::today())->count();
        $aiGenerationsTotal = AuditLog::where('action_type', 'AI_GENERATE')->count();

        $geminiStatusText = $isGeminiConfigured
            ? "Cloud API Aktif ({$configuredModel})"
            : 'Mode Cerdas Lokal (Siap API)';

        $geminiQuotaText = $isGeminiConfigured
            ? "{$aiGenerationsToday} / 1.500 RPD"
            : "{$aiGenerationsToday}x Dipakai (Lokal)";

        $studentsWithPin = User::where('role', 'student')->whereNotNull('parent_pin')->count();
        $parentGatePct = $totalStudents > 0 ? round(($studentsWithPin / $totalStudents) * 100) : 100;
        $parentGateText = "{$studentsWithPin}/{$totalStudents} Siswa ({$parentGatePct}%)";

        // 7. Bungkus data lengkap ke dalam $adminData
        $adminData = [
            'stats' => [
                'total_materials' => $totalMaterials,
                'total_quizzes' => $totalQuizzes,
                'total_students' => $totalStudents,
                'total_stars_awarded' => $totalStarsAwarded,
                'active_teachers' => $activeTeachers,
                'avg_completion_rate' => $avgCompletionRate,
                'stars_this_week' => $starsThisWeek,
                'most_popular_category' => $topCatName,
            ],
            'categorized_materials' => $categorizedMaterials,
            'chart_analytics' => [
                'weekly_activity' => $weeklyActivity,
                'category_distribution' => $categoryDistribution,
                'peak_day' => $peakDay,
                'peak_quizzes' => $peakQuizzes,
                'peak_stars' => $peakStars,
                'total_quizzes_weekly' => $totalQuizzesWeekly,
            ],
            'system_health' => [
                'is_gemini_configured' => $isGeminiConfigured,
                'gemini_model' => $geminiStatusText,
                'gemini_raw_model' => $configuredModel,
                'daily_prompt_quota' => $geminiQuotaText,
                'ai_generations_today' => $aiGenerationsToday,
                'ai_generations_total' => $aiGenerationsTotal,
                'tts_engine' => 'Web Speech TTS (id-ID)',
                'parental_gate_status' => $parentGateText,
                'server_status' => '🟢 Stabil (PHP '.PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION.')',
            ],
            'audit_logs' => $auditLogs,
        ];

        return view('pages.admin.dashboard', compact('adminData', 'categories'));
    }

    /**
     * Halaman Manajemen Flashcard & Materi Kurikulum Admin (Real Data Database).
     */
    public function materials(Request $request): View
    {
        $categoriesModel = Category::with(['levels.materials'])->orderBy('sort_order')->get();

        $categories = $categoriesModel->map(function ($cat) {
            return [
                'id' => $cat->id,
                'name' => $cat->name,
                'slug' => $cat->slug,
                'icon_emoji' => $cat->icon_emoji,
                'levels' => $cat->levels->map(function ($lvl) {
                    return [
                        'id' => $lvl->id,
                        'level_num' => $lvl->level_number,
                        'level_title' => $lvl->title,
                        'cards_count' => $lvl->materials->count(),
                        'items' => $lvl->materials->map(function ($mat) {
                            return [
                                'id' => $mat->id,
                                'title' => $mat->title,
                                'subtitle' => $mat->subtitle,
                                'icon_emoji' => $mat->icon_emoji ?? '📄',
                                'speech_text' => $mat->speech_text,
                                'sound_effect' => $mat->sound_effect,
                                'parent_note' => $mat->parent_note,
                            ];
                        })->toArray(),
                    ];
                })->toArray(),
            ];
        })->toArray();

        $totalMaterials = Material::count();
        $totalCategories = Category::count();
        $totalLevels = LearningLevel::count();

        $materialsData = [
            'stats' => [
                'total_materials' => $totalMaterials,
                'total_categories' => $totalCategories,
                'total_levels' => $totalLevels,
            ],
            'categories' => $categories,
        ];

        return view('pages.admin.materials', compact('materialsData', 'categories'));
    }

    /**
     * Tambah Materi Flashcard Manual (Database MySQL).
     */
    public function storeMaterial(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category_slug' => 'required|string|exists:categories,slug',
            'level_number' => 'required|integer|min:1|max:3',
            'title' => 'required|string|max:100',
            'subtitle' => 'nullable|string|max:150',
            'speech_text' => 'nullable|string|max:255',
            'sound_effect' => 'nullable|string|max:100',
            'parent_note' => 'nullable|string|max:255',
            'icon_emoji' => 'nullable|string|max:10',
        ]);

        $category = Category::where('slug', $validated['category_slug'])->firstOrFail();
        $level = LearningLevel::firstOrCreate(
            ['category_id' => $category->id, 'level_number' => $validated['level_number']],
            ['title' => "Level {$validated['level_number']}", 'unlock_stars_required' => ($validated['level_number'] - 1) * 15]
        );

        $material = Material::create([
            'learning_level_id' => $level->id,
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'] ?? "Mengenal {$validated['title']} bersama YukBelajar",
            'icon_emoji' => $validated['icon_emoji'] ?? '📄',
            'speech_text' => $validated['speech_text'] ?? "Ini adalah {$validated['title']}",
            'sound_effect' => $validated['sound_effect'] ?? 'Ceria',
            'parent_note' => $validated['parent_note'] ?? 'Ajak anak menyebutkan nama benda dengan riang.',
        ]);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'CREATE_MATERIAL',
            'description' => "Menambahkan kartu materi baru: {$material->title} ke {$category->name} (Level {$level->level_number})",
        ]);

        return back()->with('success', "Kartu materi '{$material->title}' berhasil disimpan ke database!");
    }

    /**
     * Perbarui Data Kartu Flashcard (Database MySQL).
     */
    public function updateMaterial(Request $request, int $id): RedirectResponse
    {
        $material = Material::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'subtitle' => 'nullable|string|max:150',
            'speech_text' => 'nullable|string|max:255',
            'sound_effect' => 'nullable|string|max:100',
            'parent_note' => 'nullable|string|max:255',
            'icon_emoji' => 'nullable|string|max:10',
        ]);

        $material->update($validated);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'UPDATE_MATERIAL',
            'description' => "Memperbarui kartu materi: {$material->title}",
        ]);

        return back()->with('success', "Kartu materi '{$material->title}' berhasil diperbarui!");
    }

    /**
     * Hapus Kartu Materi Flashcard (Database MySQL).
     */
    public function deleteMaterial(int $id): RedirectResponse
    {
        $material = Material::findOrFail($id);
        $title = $material->title;
        $material->delete();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'DELETE_MATERIAL',
            'description' => "Menghapus kartu materi: {$title}",
        ]);

        return back()->with('success', "Kartu materi '{$title}' berhasil dihapus dari database!");
    }

    /**
     * Halaman Manajemen Stiker & Hadiah Prestasi Admin (Real Data Database).
     */
    public function stickers(Request $request): View
    {
        $stickers = Sticker::withCount('users')->get();
        $totalStickers = $stickers->count();
        $totalClaimed = User::whereHas('stickers')->count();

        $stickersData = [
            'stats' => [
                'total_stickers' => $totalStickers,
                'total_claimed' => $totalClaimed,
            ],
            'stickers' => $stickers->map(function ($s) {
                return [
                    'id' => $s->id,
                    'name' => $s->name,
                    'category' => ucfirst($s->category),
                    'icon_emoji' => $s->emoji,
                    'rarity' => $s->rarity ?? 'common',
                    'is_special' => $s->rarity === 'legendary' || $s->rarity === 'rare',
                    'description' => $s->description,
                    'claimed_count' => $s->users_count,
                ];
            })->toArray(),
        ];

        return view('pages.admin.stickers', compact('stickersData'));
    }

    /**
     * Tambah Stiker Baru (Database MySQL).
     */
    public function storeSticker(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'required|string|max:50',
            'icon_emoji' => 'nullable|string|max:16',
            'emoji' => 'nullable|string|max:16',
            'rarity' => 'nullable|string|max:20',
            'description' => 'nullable|string|max:255',
            'is_special' => 'nullable|boolean',
        ]);

        $emoji = $validated['icon_emoji'] ?? $validated['emoji'] ?? '🏆';
        $rarity = ! empty($validated['is_special']) ? 'legendary' : ($validated['rarity'] ?? 'common');

        $sticker = Sticker::create([
            'name' => $validated['name'],
            'category' => strtolower($validated['category']),
            'emoji' => $emoji,
            'rarity' => $rarity,
            'description' => $validated['description'] ?? "Stiker hadiah prestasi {$validated['name']}",
        ]);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'CREATE_STICKER',
            'description' => "Menambahkan stiker hadiah baru: {$sticker->name}",
        ]);

        return back()->with('success', "Stiker '{$sticker->name}' berhasil ditambahkan ke database!");
    }

    /**
     * Perbarui Data Stiker (Database MySQL).
     */
    public function updateSticker(Request $request, int $id): RedirectResponse
    {
        $sticker = Sticker::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'required|string|max:50',
            'icon_emoji' => 'nullable|string|max:16',
            'emoji' => 'nullable|string|max:16',
            'rarity' => 'nullable|string|max:20',
            'description' => 'nullable|string|max:255',
            'is_special' => 'nullable|boolean',
        ]);

        $sticker->name = $validated['name'];
        $sticker->category = strtolower($validated['category']);
        if (! empty($validated['icon_emoji']) || ! empty($validated['emoji'])) {
            $sticker->emoji = $validated['icon_emoji'] ?? $validated['emoji'];
        }
        $sticker->rarity = ! empty($validated['is_special']) ? 'legendary' : ($validated['rarity'] ?? 'common');
        $sticker->description = $validated['description'] ?? $sticker->description;
        $sticker->save();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'UPDATE_STICKER',
            'description' => "Memperbarui stiker hadiah: {$sticker->name}",
        ]);

        return back()->with('success', "Stiker '{$sticker->name}' berhasil diperbarui!");
    }

    /**
     * Hapus Stiker (Database MySQL).
     */
    public function deleteSticker(int $id): RedirectResponse
    {
        $sticker = Sticker::findOrFail($id);
        $name = $sticker->name;
        $sticker->delete();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'DELETE_STICKER',
            'description' => "Menghapus stiker hadiah: {$name}",
        ]);

        return back()->with('success', "Stiker '{$name}' berhasil dihapus dari database!");
    }

    /**
     * Ekspor Rapor Belajar Siswa PAUD (Stream Real CSV).
     */
    public function exportReport(Request $request): StreamedResponse
    {
        $students = User::where('role', 'student')->with(['quizAttempts'])->get();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'EXPORT_REPORT',
            'description' => 'Mengekspor data rapor belajar perkembangan kognitif siswa ke format CSV',
        ]);

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="rapor-belajar-paud-'.date('Y-m-d').'.csv"',
        ];

        return response()->stream(function () use ($students) {
            $handle = fopen('php://output', 'w');
            // UTF-8 BOM for Microsoft Excel compatibility
            fwrite($handle, "\xEF\xBB\xBF");

            fputcsv($handle, ['ID Siswa', 'Nama Lengkap Siswa', 'Usia Belajar', 'Total Bintang Emas', 'Kuis Selesai', 'Rata-rata Skor', 'Status Akun', 'Tanggal Daftar']);

            foreach ($students as $s) {
                $quizCount = $s->quizAttempts->count();
                $avgScore = $quizCount > 0 ? round($s->quizAttempts->avg('score')) : 0;
                fputcsv($handle, [
                    $s->id,
                    $s->name,
                    ($s->age ?? 4).' Tahun',
                    $s->total_stars ?? 0,
                    $quizCount,
                    $avgScore.'%',
                    $s->is_active ? 'Aktif' : 'Non-aktif',
                    $s->created_at ? $s->created_at->format('d/m/Y') : date('d/m/Y'),
                ]);
            }
            fclose($handle);
        }, 200, $headers);
    }

    /**
     * 1-Click AI Generator Studio (Google Gemini AI Multi-Modal).
     */
    public function aiGenerator(GeminiService $geminiService): View
    {
        $categoriesModel = Category::with('levels')->orderBy('sort_order')->get();

        $categories = $categoriesModel->map(function ($cat) {
            return [
                'name' => $cat->name,
                'slug' => $cat->slug,
                'icon_emoji' => $cat->icon_emoji,
                'color_theme' => $cat->color_theme,
                'bg_gradient' => $cat->bg_gradient,
                'border_color' => $cat->border_color,
                'subtitle' => $cat->subtitle,
                'recommended_age' => $cat->recommended_age,
                'age_min' => $cat->age_min,
                'age_max' => $cat->age_max,
                'levels' => $cat->levels->map(function ($lvl) {
                    return [
                        'level_num' => $lvl->level_number,
                        'title' => $lvl->title,
                    ];
                })->toArray(),
            ];
        })->toArray();

        $aiModels = [
            [
                'id' => 'gemini-3.5-flash',
                'name' => '⚡ Google Gemini 3.5 Flash (Paling Cepat & Responsif - Direkomendasikan)',
                'badge' => 'Ultra Fast',
            ],
            [
                'id' => 'gemini-3.5-flash-lite',
                'name' => '🚀 Google Gemini 3.5 Flash-Lite (Sangat Ringan & Efisien)',
                'badge' => 'Lite',
            ],
            [
                'id' => 'gemini-flash-latest',
                'name' => '✨ Google Gemini Flash Latest (Model Flash Terbaru)',
                'badge' => 'Latest',
            ],
            [
                'id' => 'gemini-3.1-flash-lite',
                'name' => '🧠 Google Gemini 3.1 Flash-Lite (Stabil)',
                'badge' => 'Standard',
            ],
        ];

        $isGeminiConfigured = $geminiService->isConfigured();

        $adminData = [
            'is_configured' => $isGeminiConfigured,
            'default_model' => config('services.gemini.model', 'gemini-3.5-flash'),
            'sample_ai_preview' => [
                'category_slug' => 'hewan',
                'category_name' => 'Pulau Hewan 🦁',
                'level_number' => 2,
                'theme' => 'Mengenal Hewan Laut 🐬',
                'target_age' => '3-4 Tahun',
                'questions_count' => 3,
                'generated_items' => [
                    [
                        'question' => 'Manakah hewan laut lumba-lumba yang suka melompat tinggi? 🐬',
                        'voice_script' => 'Manakah gambar lumba-lumba ceria yang suka melompat di atas air laut?',
                        'image_prompt' => 'Cute 3D cartoon dolphin jumping happily over soft blue sea waves, bright pastel colors, kid friendly illustration, white background',
                        'options' => [
                            ['label' => 'Lumba-lumba Ceria 🐬', 'is_correct' => true],
                            ['label' => 'Kura-kura Laut 🐢', 'is_correct' => false],
                            ['label' => 'Kepiting Kecil 🦀', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Manakah hewan laut yang berjalan miring dan punya capit kuat? 🦀',
                        'voice_script' => 'Manakah hewan laut lucu berwarna merah yang berjalan miring dan punya capit?',
                        'image_prompt' => 'Cute red cartoon crab with friendly big eyes smiling on soft yellow sand, 3D style for toddlers',
                        'options' => [
                            ['label' => 'Kepiting Capit 🦀', 'is_correct' => true],
                            ['label' => 'Bintang Laut ⭐', 'is_correct' => false],
                            ['label' => 'Ikan Emas 🐠', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        return view('pages.admin.ai-generator', compact('categories', 'aiModels', 'adminData', 'isGeminiConfigured'));
    }

    /**
     * Endpoint API Generasi AI Multi-Modal (Backend Engine).
     */
    public function generateAiContent(Request $request, GeminiService $geminiService): JsonResponse
    {
        $validated = $request->validate([
            'category_slug' => 'required|string|exists:categories,slug',
            'level_number' => 'required|integer|min:1|max:3',
            'theme' => 'required|string|max:100',
            'target_age' => 'nullable|string',
            'questions_count' => 'nullable|integer|min:1|max:10',
            'ai_model' => 'nullable|string|max:50',
        ]);

        $category = Category::where('slug', $validated['category_slug'])->firstOrFail();
        $count = (int) ($validated['questions_count'] ?? 3);
        $theme = $validated['theme'];
        $targetAge = $validated['target_age'] ?? '3-4';
        $aiModel = $validated['ai_model'] ?? 'gemini-2.0-flash';

        $generation = $geminiService->generateQuizContent(
            $category->slug,
            $category->name,
            $validated['level_number'],
            $theme,
            $targetAge,
            $count,
            $aiModel
        );

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'AI_GENERATE',
            'description' => "Menjalankan AI Generator Multi-Modal ({$generation['source']}) untuk tema '{$theme}' ({$category->name} Level {$validated['level_number']})",
        ]);

        return response()->json([
            'success' => true,
            'source' => $generation['source'],
            'model' => $generation['model'],
            'category_slug' => $category->slug,
            'category_name' => $category->name,
            'level_number' => $validated['level_number'],
            'theme' => $theme,
            'generated_items' => $generation['items'],
        ]);
    }

    /**
     * Endpoint API Publikasi Konten Hasil AI ke Database MySQL.
     */
    public function publishAiContent(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'category_slug' => 'required|string|exists:categories,slug',
            'level_number' => 'required|integer|min:1|max:3',
            'theme' => 'required|string|max:100',
            'questions' => 'required|array',
        ]);

        $category = Category::where('slug', $validated['category_slug'])->firstOrFail();
        $level = LearningLevel::firstOrCreate(
            ['category_id' => $category->id, 'level_number' => $validated['level_number']],
            ['title' => "Level {$validated['level_number']}: {$validated['theme']}", 'unlock_stars_required' => ($validated['level_number'] - 1) * 15]
        );

        // 1. Buat kartu materi baru
        $material = Material::create([
            'learning_level_id' => $level->id,
            'title' => $validated['theme'],
            'subtitle' => 'Materi baru hasil kurasi AI Gemini',
            'icon_emoji' => $category->icon_emoji,
            'speech_text' => "Mari belajar {$validated['theme']} bersama-sama!",
            'sound_effect' => 'Ceria',
            'parent_note' => 'Ajak ananda mengamati kartu bergambar ini dan menirukan suaranya.',
        ]);

        // 2. Buat kuis baru
        $quizSlug = Str::slug("kuis-{$validated['theme']}-".time());
        $quiz = Quiz::create([
            'category_id' => $category->id,
            'title' => "Kuis {$validated['theme']}",
            'slug' => $quizSlug,
            'icon_emoji' => $category->icon_emoji,
            'target_age' => 4,
            'total_questions' => count($validated['questions']),
            'stars_reward' => 3,
        ]);

        // 3. Masukkan soal dan pilihan
        foreach ($validated['questions'] as $qData) {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => $qData['question'] ?? 'Pilih jawaban yang benar:',
                'question_audio' => $qData['voice_script'] ?? 'Pilih gambar yang tepat ya!',
            ]);

            if (! empty($qData['options']) && is_array($qData['options'])) {
                foreach ($qData['options'] as $opt) {
                    $rawLabel = $opt['label'] ?? $opt['text'] ?? 'Pilihan';
                    $optionEmoji = $opt['emoji'] ?? null;
                    $optionText = $rawLabel;

                    if (! $optionEmoji && preg_match('/([\x{1F300}-\x{1FAFF}\x{2600}-\x{27BF}\x{1F600}-\x{1F64F}\x{1F680}-\x{1F6FF}\x{1F1E0}-\x{1F1FF}])/u', $rawLabel, $matches)) {
                        $optionEmoji = $matches[1];
                        $optionText = trim(str_replace($optionEmoji, '', $rawLabel));
                    }

                    QuestionOption::create([
                        'question_id' => $question->id,
                        'option_text' => $optionText ?: $rawLabel,
                        'option_emoji' => $optionEmoji ?: $category->icon_emoji,
                        'is_correct' => ! empty($opt['is_correct']),
                    ]);
                }
            }
        }

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'PUBLISH_AI',
            'description' => "Mempublikasikan kuis & materi AI baru: '{$validated['theme']}' ke {$category->name}",
        ]);

        return response()->json([
            'success' => true,
            'message' => "Materi & Kuis '{$validated['theme']}' berhasil dipublikasikan ke database!",
            'quiz_id' => $quiz->id,
        ]);
    }

    /**
     * Halaman Bank Soal & Manajemen Kuis Admin (Real Data Database).
     */
    public function quizzes(Request $request): View
    {
        $categoriesModel = Category::orderBy('sort_order')->get();
        $categories = $categoriesModel->map(function ($cat) {
            return [
                'id' => $cat->id,
                'name' => $cat->name,
                'slug' => $cat->slug,
                'icon_emoji' => $cat->icon_emoji,
            ];
        })->toArray();

        $quizQuery = Quiz::with(['category', 'questions.options'])->withCount('quizAttempts');

        if ($request->filled('category_id') && $request->input('category_id') !== 'all') {
            $quizQuery->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $quizQuery->where('title', 'like', "%{$search}%");
        }

        $allQuizzes = $quizQuery->latest()->get();

        $quizzesFormatted = $allQuizzes->map(function ($q) {
            return [
                'id' => $q->id,
                'title' => $q->title,
                'slug' => $q->slug,
                'icon_emoji' => $q->icon_emoji,
                'target_age' => $q->target_age,
                'stars_reward' => $q->stars_reward,
                'category_id' => $q->category_id,
                'category_name' => $q->category ? $q->category->name : 'Umum',
                'category_emoji' => $q->category ? $q->category->icon_emoji : '🎯',
                'questions_count' => $q->questions->count(),
                'attempts_count' => $q->quiz_attempts_count,
                'questions' => $q->questions->map(function ($qs) {
                    return [
                        'id' => $qs->id,
                        'question_text' => $qs->question_text,
                        'question_audio' => $qs->question_audio,
                        'options' => $qs->options->map(function ($opt) {
                            return [
                                'id' => $opt->id,
                                'option_text' => $opt->option_text,
                                'option_emoji' => $opt->option_emoji,
                                'is_correct' => (bool) $opt->is_correct,
                            ];
                        })->toArray(),
                    ];
                })->toArray(),
            ];
        })->toArray();

        $totalQuizzes = Quiz::count();
        $totalQuestions = Question::count();
        $totalAttempts = QuizAttempt::count();
        $avgScore = QuizAttempt::avg('score');

        $quizzesData = [
            'stats' => [
                'total_quizzes' => $totalQuizzes,
                'total_questions' => $totalQuestions,
                'total_attempts' => $totalAttempts,
                'avg_score' => $avgScore ? round($avgScore).'%' : '88%',
            ],
            'quizzes' => $quizzesFormatted,
        ];

        return view('pages.admin.quizzes', compact('quizzesData', 'categories'));
    }

    /**
     * Tambah Kuis & Butir Soal Baru Secara Manual (Database MySQL).
     */
    public function storeQuiz(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|max:150',
            'icon_emoji' => 'nullable|string|max:10',
            'target_age' => 'required|integer|min:3|max:6',
            'stars_reward' => 'required|integer|min:1|max:10',
            'questions' => 'required|array|min:1',
            'questions.*.question_text' => 'required|string|max:255',
            'questions.*.question_audio' => 'nullable|string|max:255',
            'questions.*.options' => 'required|array|min:2',
            'questions.*.options.*.option_text' => 'required|string|max:100',
            'questions.*.options.*.option_emoji' => 'nullable|string|max:10',
            'questions.*.options.*.is_correct' => 'nullable|boolean',
        ]);

        $category = Category::findOrFail($validated['category_id']);
        $quizSlug = Str::slug($validated['title'].'-'.time());

        $quiz = Quiz::create([
            'category_id' => $category->id,
            'title' => $validated['title'],
            'slug' => $quizSlug,
            'icon_emoji' => $validated['icon_emoji'] ?? $category->icon_emoji,
            'target_age' => $validated['target_age'],
            'total_questions' => count($validated['questions']),
            'stars_reward' => $validated['stars_reward'],
        ]);

        foreach ($validated['questions'] as $qData) {
            $question = Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => $qData['question_text'],
                'question_audio' => $qData['question_audio'] ?? "Pilih jawaban untuk: {$qData['question_text']}",
            ]);

            foreach ($qData['options'] as $opt) {
                $rawText = $opt['option_text'] ?? 'Pilihan';
                $optionEmoji = $opt['option_emoji'] ?? null;
                $optionText = $rawText;

                if (! $optionEmoji && preg_match('/([\x{1F300}-\x{1FAFF}\x{2600}-\x{27BF}\x{1F600}-\x{1F64F}\x{1F680}-\x{1F6FF}\x{1F1E0}-\x{1F1FF}])/u', $rawText, $matches)) {
                    $optionEmoji = $matches[1];
                    $optionText = trim(str_replace($optionEmoji, '', $rawText));
                }

                QuestionOption::create([
                    'question_id' => $question->id,
                    'option_text' => $optionText ?: $rawText,
                    'option_emoji' => $optionEmoji ?: '⭐',
                    'is_correct' => ! empty($opt['is_correct']),
                ]);
            }
        }

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'CREATE_QUIZ',
            'description' => "Membuat kuis baru secara manual: '{$quiz->title}' ({$category->name}) dengan {$quiz->total_questions} butir soal",
        ]);

        return redirect()->route('admin.quizzes')->with('success', "Kuis '{$quiz->title}' beserta soal manual berhasil disimpan ke database!");
    }

    /**
     * Perbarui Data Modul Kuis (Database MySQL).
     */
    public function updateQuiz(Request $request, int $id): RedirectResponse
    {
        $quiz = Quiz::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|max:150',
            'icon_emoji' => 'nullable|string|max:10',
            'target_age' => 'required|integer|min:3|max:6',
            'stars_reward' => 'required|integer|min:1|max:10',
        ]);

        $quiz->category_id = $validated['category_id'];
        $quiz->title = $validated['title'];
        if (! empty($validated['icon_emoji'])) {
            $quiz->icon_emoji = $validated['icon_emoji'];
        }
        $quiz->target_age = $validated['target_age'];
        $quiz->stars_reward = $validated['stars_reward'];
        $quiz->save();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'UPDATE_QUIZ',
            'description' => "Memperbarui informasi kuis: '{$quiz->title}'",
        ]);

        return redirect()->route('admin.quizzes')->with('success', "Informasi kuis '{$quiz->title}' berhasil diperbarui!");
    }

    /**
     * Hapus Modul Kuis (Database MySQL).
     */
    public function deleteQuiz(int $id): RedirectResponse
    {
        $quiz = Quiz::findOrFail($id);
        $title = $quiz->title;
        $quiz->delete();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'DELETE_QUIZ',
            'description' => "Menghapus modul kuis: '{$title}'",
        ]);

        return redirect()->route('admin.quizzes')->with('success', "Modul kuis '{$title}' berhasil dihapus dari database!");
    }

    /**
     * Tambah Butir Soal Baru ke Kuis Tertentu (Database MySQL).
     */
    public function storeQuestion(Request $request, int $quizId): RedirectResponse
    {
        $quiz = Quiz::findOrFail($quizId);

        $validated = $request->validate([
            'question_text' => 'required|string|max:255',
            'question_audio' => 'nullable|string|max:255',
            'options' => 'required|array|min:2',
            'options.*.option_text' => 'required|string|max:100',
            'options.*.option_emoji' => 'nullable|string|max:10',
            'options.*.is_correct' => 'nullable|boolean',
        ]);

        $question = Question::create([
            'quiz_id' => $quiz->id,
            'question_text' => $validated['question_text'],
            'question_audio' => $validated['question_audio'] ?? "Pilih jawaban untuk: {$validated['question_text']}",
        ]);

        foreach ($validated['options'] as $opt) {
            $rawText = $opt['option_text'] ?? 'Pilihan';
            $optionEmoji = $opt['option_emoji'] ?? null;
            $optionText = $rawText;

            if (! $optionEmoji && preg_match('/([\x{1F300}-\x{1FAFF}\x{2600}-\x{27BF}\x{1F600}-\x{1F64F}\x{1F680}-\x{1F6FF}\x{1F1E0}-\x{1F1FF}])/u', $rawText, $matches)) {
                $optionEmoji = $matches[1];
                $optionText = trim(str_replace($optionEmoji, '', $rawText));
            }

            QuestionOption::create([
                'question_id' => $question->id,
                'option_text' => $optionText ?: $rawText,
                'option_emoji' => $optionEmoji ?: '⭐',
                'is_correct' => ! empty($opt['is_correct']),
            ]);
        }

        $quiz->total_questions = $quiz->questions()->count();
        $quiz->save();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'CREATE_QUESTION',
            'description' => "Menambahkan butir soal baru ke kuis '{$quiz->title}'",
        ]);

        return redirect()->route('admin.quizzes')->with('success', "Butir soal baru berhasil ditambahkan ke kuis '{$quiz->title}'!");
    }

    /**
     * Hapus Butir Soal Spesifik (Database MySQL).
     */
    public function deleteQuestion(int $id): RedirectResponse
    {
        $question = Question::findOrFail($id);
        $quiz = $question->quiz;
        $question->delete();

        if ($quiz) {
            $quiz->total_questions = $quiz->questions()->count();
            $quiz->save();
        }

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'DELETE_QUESTION',
            'description' => 'Menghapus 1 butir soal kuis dari sistem',
        ]);

        return redirect()->route('admin.quizzes')->with('success', 'Butir soal berhasil dihapus dari database!');
    }

    /**
     * Manajemen Pengguna (CRUD Siswa, Orang Tua, dan Guru/Admin - Real Data Database).
     */
    public function users(Request $request): View
    {
        $usersQuery = User::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $usersQuery->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('username', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('role') && $request->input('role') !== 'all') {
            $usersQuery->where('role', $request->input('role'));
        }

        $allUsers = $usersQuery->orderBy('id', 'asc')->get();

        $usersFormatted = $allUsers->map(function ($u) {
            $roleLabel = match ($u->role) {
                'admin' => 'Admin Guru',
                'teacher' => 'Guru PAUD',
                'parent' => 'Orang Tua',
                default => 'Siswa PAUD',
            };

            return [
                'id' => $u->id,
                'name' => $u->name,
                'username' => $u->username,
                'email' => $u->email ?? '-',
                'role' => $u->role,
                'role_label' => $roleLabel,
                'avatar_emoji' => $u->avatar_emoji,
                'avatar_key' => $u->avatar_icon ?? 'dino',
                'age' => $u->age ?? 4,
                'stars' => $u->total_stars ?? 0,
                'parent_pin' => $u->parent_pin ?? '1234',
                'status' => $u->is_active ? 'Aktif' : 'Non-aktif',
                'is_active' => (bool) $u->is_active,
                'registered_date' => $u->created_at ? $u->created_at->format('d M Y') : '10 Jan 2026',
            ];
        })->toArray();

        $totalStudents = User::where('role', 'student')->count();
        $totalParents = User::where('role', 'parent')->count();
        $totalTeachers = User::whereIn('role', ['admin', 'teacher'])->count();
        $activeUsers = User::where('is_active', true)->count();
        $onlineToday = User::whereNotNull('last_login_at')->where('last_login_at', '>=', now()->subDay())->count();

        $usersData = [
            'stats' => [
                'total_students' => $totalStudents,
                'total_parents' => $totalParents,
                'total_teachers' => $totalTeachers,
                'active_today' => $activeUsers,
                'online_today' => max(1, $onlineToday),
            ],
            'users' => $usersFormatted,
        ];

        $avatars = [
            ['key' => 'dino', 'name' => 'Dino Ceria', 'emoji' => '🦖'],
            ['key' => 'kucing', 'name' => 'Kucing Pintar', 'emoji' => '🐱'],
            ['key' => 'singa', 'name' => 'Singa Gagah', 'emoji' => '🦁'],
            ['key' => 'kelinci', 'name' => 'Kelinci Lincah', 'emoji' => '🐰'],
            ['key' => 'panda', 'name' => 'Panda Manis', 'emoji' => '🐼'],
            ['key' => 'beruang', 'name' => 'Beruang Madu', 'emoji' => '🐻'],
            ['key' => 'gajah', 'name' => 'Gajah Cerdas', 'emoji' => '🐘'],
            ['key' => 'koala', 'name' => 'Koala Ceria', 'emoji' => '🐨'],
        ];

        return view('pages.admin.users', compact('usersData', 'avatars'));
    }

    /**
     * Tambah Pengguna Baru (Database MySQL).
     */
    public function storeUser(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username',
            'email' => 'nullable|email|max:100|unique:users,email',
            'role' => 'required|string|in:student,parent,teacher,admin',
            'age' => 'nullable|integer|min:3|max:10',
            'avatar_icon' => 'nullable|string',
            'parent_pin' => 'nullable|string|max:10',
            'password' => 'required|string|min:4',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'] ?? null,
            'role' => $validated['role'],
            'age' => $validated['age'] ?? 4,
            'avatar_icon' => $validated['avatar_icon'] ?? 'dino',
            'avatar_accessory' => 'none',
            'total_stars' => $validated['role'] === 'student' ? 10 : 0,
            'parent_pin' => $validated['parent_pin'] ?? '1234',
            'is_active' => true,
            'password' => Hash::make($validated['password']),
        ]);

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'CREATE_USER',
            'description' => "Mendaftarkan pengguna baru: {$user->name} (@{$user->username}) dengan role {$user->role}",
        ]);

        return redirect()->route('admin.users')->with('success', "Pengguna {$user->name} berhasil didaftarkan ke sistem!");
    }

    /**
     * Perbarui Data Pengguna (Database MySQL).
     */
    public function updateUser(Request $request, int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'nullable|email|max:100|unique:users,email,'.$id,
            'role' => 'required|string|in:student,parent,teacher,admin',
            'age' => 'nullable|integer|min:3|max:10',
            'avatar_icon' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'password' => 'nullable|string|min:4',
        ]);

        $user->name = $validated['name'];
        if (isset($validated['email'])) {
            $user->email = $validated['email'];
        }
        $user->role = $validated['role'];
        if (isset($validated['age'])) {
            $user->age = $validated['age'];
        }
        if (! empty($validated['avatar_icon'])) {
            $user->avatar_icon = $validated['avatar_icon'];
        }
        if (isset($validated['is_active'])) {
            $user->is_active = (bool) $validated['is_active'];
        }
        if (! empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'UPDATE_USER',
            'description' => "Memperbarui profil pengguna: {$user->name} (@{$user->username})",
        ]);

        return redirect()->route('admin.users')->with('success', "Data pengguna {$user->name} berhasil diperbarui!");
    }

    /**
     * Hapus Pengguna (Database MySQL).
     */
    public function deleteUser(int $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        if ($user->id === Auth::id()) {
            return redirect()->route('admin.users')->withErrors(['error' => 'Anda tidak dapat menghapus akun Anda sendiri!']);
        }

        $userName = $user->name;
        $user->delete();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'DELETE_USER',
            'description' => "Menghapus akun pengguna: {$userName}",
        ]);

        return redirect()->route('admin.users')->with('success', "Akun pengguna {$userName} berhasil dihapus!");
    }

    /**
     * Reset PIN Parental Gate Pengguna (Database MySQL).
     */
    public function resetUserPin(int $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->parent_pin = '1234';
        $user->save();

        AuditLog::create([
            'user_id' => Auth::id(),
            'action_type' => 'RESET_PIN',
            'description' => "Mereset PIN Parental Gate untuk pengguna {$user->name} menjadi default (1234)",
        ]);

        return redirect()->route('admin.users')->with('success', "PIN Parental Gate untuk {$user->name} berhasil direset menjadi '1234'!");
    }

    /**
     * Profil & Pengaturan Akun Admin / Guru (Real Data Database).
     */
    public function profile(): View
    {
        $admin = Auth::user() ?? User::whereIn('role', ['admin', 'teacher'])->first();

        $aiModels = [
            [
                'id' => 'gemini-3.5-flash',
                'name' => '⚡ Google Gemini 3.5 Flash (Paling Cepat & Responsif - Direkomendasikan)',
                'badge' => 'Ultra Fast',
            ],
            [
                'id' => 'gemini-3.5-flash-lite',
                'name' => '🚀 Google Gemini 3.5 Flash-Lite (Sangat Ringan & Efisien)',
                'badge' => 'Lite',
            ],
            [
                'id' => 'gemini-flash-latest',
                'name' => '✨ Google Gemini Flash Latest (Model Flash Terbaru)',
                'badge' => 'Latest',
            ],
            [
                'id' => 'gemini-3.1-flash-lite',
                'name' => '🧠 Google Gemini 3.1 Flash-Lite (Stabil)',
                'badge' => 'Standard',
            ],
        ];

        $adminProfile = [
            'name' => $admin ? $admin->name : 'Pak Guru Iqbal, S.Pd.',
            'username' => $admin ? $admin->username : 'pak_guru_iqbal',
            'email' => $admin ? $admin->email : 'guru@kuybelajar.id',
            'role' => $admin && $admin->role === 'admin' ? 'Super Administrator & Kurator Modul PAUD' : 'Guru / Pendidik PAUD',
            'school_name' => $admin && $admin->school_name ? $admin->school_name : 'TK & PAUD Ceria Nusantara',
            'phone' => $admin && $admin->phone ? $admin->phone : '0812-3456-7890',
            'avatar_initials' => $admin ? strtoupper(substr($admin->name, 0, 2)) : 'GI',
            'last_login' => $admin && $admin->last_login_at ? $admin->last_login_at->format('d M Y, H:i').' WIB' : date('d M Y, H:i').' WIB',
            'ai_model_preference' => config('services.gemini.model', 'gemini-3.5-flash'),
            'api_key_configured' => ! empty(config('gemini.api_key') ?: env('GEMINI_API_KEY')),
        ];

        return view('pages.admin.profile', compact('adminProfile', 'aiModels'));
    }

    /**
     * Simpan Perubahan Profil Admin (Database MySQL).
     */
    public function updateAdminProfile(Request $request): RedirectResponse
    {
        $admin = Auth::user();

        if (! $admin) {
            return redirect()->route('login');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email,'.$admin->id,
            'school_name' => 'nullable|string|max:150',
            'phone' => 'nullable|string|max:30',
            'password' => 'nullable|string|min:4|confirmed',
        ]);

        $admin->name = $validated['name'];
        $admin->email = $validated['email'];
        if (isset($validated['school_name'])) {
            $admin->school_name = $validated['school_name'];
        }
        if (isset($validated['phone'])) {
            $admin->phone = $validated['phone'];
        }
        if (! empty($validated['password'])) {
            $admin->password = Hash::make($validated['password']);
        }

        $admin->save();

        AuditLog::create([
            'user_id' => $admin->id,
            'action_type' => 'UPDATE_PROFILE',
            'description' => "Admin {$admin->name} memperbarui informasi profil dan sekolah",
        ]);

        return redirect()->route('admin.profile')->with('success', '✨ Profil Admin berhasil diperbarui ke database!');
    }
}

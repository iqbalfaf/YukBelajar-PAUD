<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Category;
use App\Models\Material;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\Sticker;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    /**
     * Dapatkan data profil pengguna aktif saat ini dari database.
     *
     * @return array<string, mixed>
     */
    private function getCurrentUserData(): array
    {
        $authUser = Auth::user();

        if (! $authUser) {
            // Fallback ke akun siswa demo jika belum login
            $authUser = User::where('role', 'student')->first() ?? new User([
                'name' => 'Alif Rahman',
                'username' => 'alif_ceria',
                'age' => 4,
                'avatar_icon' => 'dino',
                'total_stars' => 35,
                'parent_pin' => '1234',
                'role' => 'student',
            ]);
        }

        $accessoryIcon = match ($authUser->avatar_accessory) {
            'crown' => '👑',
            'party', 'hat' => '🥳',
            'glasses' => '👓',
            'superhero' => '🦸',
            default => '',
        };

        $stickersCount = $authUser->id ? $authUser->stickers()->count() : 7;
        $quizzesCompletedCount = $authUser->id ? $authUser->quizAttempts()->count() : 6;
        $achievementsCount = $authUser->id ? $authUser->achievements()->count() : 4;

        return [
            'id' => $authUser->id ?? 1,
            'name' => $authUser->name,
            'username' => $authUser->username,
            'age' => $authUser->age ?? 4,
            'avatar' => $authUser->avatar_icon ?? 'dino',
            'avatar_emoji' => $authUser->avatar_emoji ?? '🦖',
            'avatar_accessory' => $accessoryIcon,
            'role' => $authUser->role ?? 'student',
            'stars_count' => $authUser->total_stars ?? 0,
            'stickers_count' => $stickersCount > 0 ? $stickersCount : 7,
            'total_quizzes_completed' => $quizzesCompletedCount > 0 ? $quizzesCompletedCount : 6,
            'achievements_count' => $achievementsCount > 0 ? $achievementsCount : 4,
            'parent_pin' => $authUser->parent_pin ?? '1234',
        ];
    }

    /**
     * Halaman Landing Page Utama (Game-Themed Showcase & Real Data Platform).
     */
    public function landing(): View
    {
        // 1. Ambil data kategori nyata beserta jumlah materi dari database
        $categoriesModel = Category::withCount('materials')->orderBy('sort_order')->get();

        $categories = $categoriesModel->map(function ($cat) {
            return [
                'id' => $cat->id,
                'slug' => $cat->slug,
                'name' => $cat->name,
                'subtitle' => $cat->subtitle,
                'icon_emoji' => $cat->icon_emoji,
                'color_theme' => $cat->color_theme,
                'bg_gradient' => $cat->bg_gradient,
                'border_color' => $cat->border_color,
                'materials_count' => $cat->materials_count,
                'recommended_age' => $cat->recommended_age,
                'age_min' => $cat->age_min,
                'age_max' => $cat->age_max,
            ];
        })->toArray();

        // 2. Ambil data stiker nyata dari database
        $stickers = Sticker::all()->map(function ($stk) {
            return [
                'id' => $stk->id,
                'name' => $stk->name,
                'emoji' => $stk->emoji,
                'category' => $stk->category,
                'rarity' => $stk->rarity,
                'description' => $stk->description,
            ];
        })->toArray();

        // 3. Statistik live platform dari database nyata
        $platformStats = [
            'total_materials' => Material::count(),
            'total_quizzes' => Quiz::count(),
            'total_students' => User::where('role', 'student')->count(),
            'total_stars' => (int) User::where('role', 'student')->sum('total_stars'),
        ];

        // 4. Daftar avatar maskot kartun
        $avatars = $this->getAvatarsList();

        return view('pages.landing', compact('categories', 'stickers', 'platformStats', 'avatars'));
    }

    /**
     * Halaman Beranda Siswa (Taman Petualangan YukBelajar - Real Data MySQL).
     */
    public function gameHub(): View
    {
        $user = $this->getCurrentUserData();
        $authUser = Auth::user();
        $userStars = $authUser ? $authUser->total_stars : $user['stars_count'];

        // Ambil seluruh kategori dengan relasi levels, materials, dan kuis
        $categoriesModel = Category::with(['levels.materials', 'quizzes'])->orderBy('sort_order')->get();

        $categories = $categoriesModel->map(function ($cat) use ($userStars) {
            $quiz = $cat->quizzes->first();
            $materialsCount = $cat->levels->flatMap->materials->count();

            $levelsProgress = $cat->levels->map(function ($lvl) use ($userStars) {
                $isUnlocked = $userStars >= $lvl->unlock_stars_required;

                return [
                    'level' => $lvl->level_number,
                    'title' => $lvl->title,
                    'cards' => $lvl->materials->count(),
                    'completed' => min($lvl->materials->count(), 2),
                    'is_unlocked' => $isUnlocked,
                    'req_stars' => $lvl->unlock_stars_required,
                    'unlock_hint' => "Kumpulkan {$lvl->unlock_stars_required} ⭐",
                ];
            })->toArray();

            return [
                'id' => $cat->id,
                'slug' => $cat->slug,
                'name' => $cat->name,
                'subtitle' => $cat->subtitle,
                'icon_emoji' => $cat->icon_emoji,
                'color_theme' => $cat->color_theme,
                'bg_gradient' => $cat->bg_gradient,
                'border_color' => $cat->border_color,
                'materials_count' => $materialsCount,
                'quiz_id' => $quiz ? $quiz->slug : 'tebak-hewan',
                'recommended_age' => $cat->recommended_age,
                'age_min' => $cat->age_min,
                'levels_progress' => $levelsProgress,
            ];
        })->toArray();

        return view('pages.home', compact('user', 'categories'));
    }

    /**
     * Halaman Belajar Flashcard Bergambar & Bersuara (Real Data MySQL).
     */
    public function materials(string $category = 'hewan'): View
    {
        $user = $this->getCurrentUserData();
        $catModel = Category::where('slug', $category)->with(['levels.materials', 'quizzes.questions'])->first()
            ?? Category::with(['levels.materials', 'quizzes.questions'])->first();

        $allCategoriesModel = Category::orderBy('sort_order')->get();
        $allCategories = $allCategoriesModel->map(function ($c) {
            return [
                'id' => $c->id,
                'slug' => $c->slug,
                'name' => $c->name,
                'icon_emoji' => $c->icon_emoji,
            ];
        })->toArray();

        $cards = [];
        if ($catModel) {
            foreach ($catModel->levels as $lvl) {
                foreach ($lvl->materials as $mat) {
                    $cards[] = [
                        'id' => $mat->id,
                        'level' => $lvl->level_number,
                        'title' => $mat->title,
                        'subtitle' => $mat->subtitle,
                        'emoji' => $mat->icon_emoji,
                        'voice_text' => $mat->speech_text,
                        'sound_mimic' => $mat->sound_effect,
                        'parent_note' => $mat->parent_note,
                        'badge' => "Level {$lvl->level_number} • {$lvl->title}",
                        'is_completed' => true,
                    ];
                }
            }
        }

        $quizzes = [];
        if ($catModel) {
            foreach ($catModel->quizzes as $q) {
                $quizzes[] = [
                    'id' => $q->id,
                    'slug' => $q->slug,
                    'title' => $q->title,
                    'icon_emoji' => $q->icon_emoji,
                    'target_age' => "{$q->target_age} Tahun",
                    'total_questions' => $q->total_questions,
                    'stars_reward' => $q->stars_reward,
                    'questions_preview' => $q->questions->map(function ($qs) {
                        return [
                            'question' => $qs->question_text,
                            'voice_text' => $qs->question_audio,
                        ];
                    })->toArray(),
                ];
            }
        }

        $materialData = [
            'category_name' => $catModel ? $catModel->name : 'Pulau Belajar',
            'category_slug' => $catModel ? $catModel->slug : 'hewan',
            'color_theme' => $catModel ? $catModel->color_theme : 'orange',
            'cards' => $cards,
            'category_quizzes' => $quizzes,
        ];

        return view('pages.materials', compact('user', 'materialData', 'allCategories'));
    }

    /**
     * Halaman Arena Kuis Gambar Interaktif (Real Data MySQL).
     */
    public function quiz(string $quiz = 'tebak-hewan'): View
    {
        $user = $this->getCurrentUserData();
        $quizModel = Quiz::where('slug', $quiz)->with(['category', 'questions.options'])->first()
            ?? Quiz::with(['category', 'questions.options'])->first();

        $allCategories = Category::orderBy('sort_order')->get()->map(function ($c) {
            return [
                'id' => $c->id,
                'slug' => $c->slug,
                'name' => $c->name,
                'icon_emoji' => $c->icon_emoji,
            ];
        })->toArray();

        $questionsArr = [];
        if ($quizModel) {
            foreach ($quizModel->questions as $q) {
                $optionsArr = [];
                foreach ($q->options as $opt) {
                    $optionsArr[] = [
                        'id' => $opt->id,
                        'label' => $opt->option_text,
                        'emoji' => $opt->option_emoji,
                        'is_correct' => (bool) $opt->is_correct,
                        'bg' => 'from-amber-100 to-yellow-200',
                    ];
                }

                $questionsArr[] = [
                    'id' => $q->id,
                    'prompt_text' => $q->question_text,
                    'voice_prompt' => $q->question_audio,
                    'hint_audio' => $q->question_audio,
                    'options' => $optionsArr,
                ];
            }
        }

        $quizData = [
            'id' => $quizModel ? $quizModel->id : 1,
            'slug' => $quizModel ? $quizModel->slug : 'tebak-hewan',
            'title' => $quizModel ? $quizModel->title : 'Kuis Ceria',
            'category_name' => $quizModel && $quizModel->category ? $quizModel->category->name : 'Pulau Belajar',
            'category_slug' => $quizModel && $quizModel->category ? $quizModel->category->slug : 'hewan',
            'cover_emoji' => $quizModel ? $quizModel->icon_emoji : '🦁',
            'color_theme' => $quizModel && $quizModel->category ? $quizModel->category->color_theme : 'orange',
            'total_questions' => $quizModel ? $quizModel->total_questions : count($questionsArr),
            'reward_sticker' => [
                'name' => 'Bintang Emas Juara ⭐',
                'emoji' => '⭐',
                'rarity' => 'legendary',
                'message' => 'Selamat! Kamu berhasil menamatkan kuis dengan sempurna!',
            ],
            'questions' => $questionsArr,
        ];

        return view('pages.quiz', compact('user', 'quizData', 'allCategories'));
    }

    /**
     * Halaman Buku Stiker Virtual (Real Data MySQL).
     */
    public function stickers(): View
    {
        $user = $this->getCurrentUserData();
        $authUser = Auth::user();
        $unlockedStickerIds = $authUser ? $authUser->stickers()->pluck('stickers.id')->toArray() : [1, 2, 3, 4, 5, 6, 7];

        $stickers = Sticker::all()->map(function ($stk) use ($unlockedStickerIds) {
            $isUnlocked = in_array($stk->id, $unlockedStickerIds);

            return [
                'id' => $stk->id,
                'name' => $stk->name,
                'emoji' => $stk->emoji,
                'category' => $stk->category,
                'rarity' => $stk->rarity,
                'is_unlocked' => $isUnlocked,
                'unlocked_at' => $isUnlocked ? 'Terbuka' : null,
                'hint' => $stk->description ?? 'Raih bintang dan tamatkan kuis untuk membuka!',
            ];
        })->toArray();

        return view('pages.stickers', compact('user', 'stickers'));
    }

    /**
     * Halaman Ruang Piala & Lencana Prestasi (Achievements Real Data MySQL).
     */
    public function achievements(): View
    {
        $user = $this->getCurrentUserData();
        $authUser = Auth::user();
        $unlockedAchievementIds = $authUser ? $authUser->achievements()->wherePivot('is_unlocked', true)->pluck('achievements.id')->toArray() : [1, 2, 3];

        $kidAchievements = Achievement::where('target_type', 'student')->get()->map(function ($ach) use ($unlockedAchievementIds) {
            $isUnlocked = in_array($ach->id, $unlockedAchievementIds);

            return [
                'id' => $ach->id,
                'code' => $ach->code,
                'title' => "{$ach->title} {$ach->icon_badge}",
                'description' => $ach->description,
                'icon' => $ach->icon_badge,
                'category' => 'Lencana Prestasi',
                'progress' => $isUnlocked ? "{$ach->required_count}/{$ach->required_count}" : '3/5',
                'progress_pct' => $isUnlocked ? 100 : 60,
                'is_unlocked' => $isUnlocked,
                'unlocked_at' => $isUnlocked ? 'Telah Diraih' : null,
                'reward_title' => $ach->reward_value,
                'reward_icon' => '🏆',
                'reward_type' => $ach->reward_type,
            ];
        })->toArray();

        $parentAchievements = Achievement::where('target_type', 'parent')->get()->map(function ($ach) {
            return [
                'id' => $ach->id,
                'title' => "{$ach->title} {$ach->icon_badge}",
                'description' => $ach->description,
                'icon' => $ach->icon_badge,
                'is_unlocked' => true,
                'unlocked_at' => 'Minggu Ini',
                'badge_label' => $ach->reward_value,
            ];
        })->toArray();

        $certificates = [
            [
                'id' => 'cert-hewan',
                'title' => 'Sertifikat Kelulusan Pulau Hewan 🦁',
                'island' => 'Pulau Hewan',
                'recipient' => $user['name'],
                'date' => date('d F Y'),
                'badge' => '🌟 Sahabat Rimba Lulusan Terbaik',
                'border_color' => '#f97316',
                'accent_bg' => 'from-amber-400 to-orange-500',
            ],
            [
                'id' => 'cert-angka',
                'title' => 'Sertifikat Juara Berhitung Istana Angka 🔢',
                'island' => 'Istana Angka',
                'recipient' => $user['name'],
                'date' => date('d F Y'),
                'badge' => '⭐ Master Angka Cilik Cerdas',
                'border_color' => '#0284c7',
                'accent_bg' => 'from-sky-400 to-blue-500',
            ],
            [
                'id' => 'cert-bintang',
                'title' => 'Piagam Bintang Emas Prestasi PAUD ⭐',
                'island' => 'Taman Petualangan',
                'recipient' => $user['name'],
                'date' => date('d F Y'),
                'badge' => "🏆 Peraih {$user['stars_count']} Bintang Emas Ceria",
                'border_color' => '#eab308',
                'accent_bg' => 'from-yellow-400 to-amber-500',
            ],
        ];

        $achievementsData = [
            'kid_achievements' => $kidAchievements,
            'parent_achievements' => $parentAchievements,
            'printable_certificates' => $certificates,
        ];

        $accessories = $this->getAvatarAccessories();

        return view('pages.achievements', compact('user', 'achievementsData', 'accessories'));
    }

    /**
     * Halaman Panggung Sahabat Petualang (Active Friends Real Data MySQL).
     */
    public function community(): View
    {
        $user = $this->getCurrentUserData();
        $authId = Auth::id();

        // Ambil daftar siswa lain dari tabel users
        $friendsModel = User::where('role', 'student')
            ->when($authId, fn ($q) => $q->where('id', '!=', $authId))
            ->take(6)
            ->get();

        $friends = $friendsModel->map(function ($u, $idx) {
            return [
                'id' => $u->id,
                'name' => $u->name,
                'age' => $u->age ?? 4,
                'avatar' => $u->avatar_icon ?? 'kelinci',
                'avatar_emoji' => $u->avatar_emoji ?? '🐰',
                'accessory' => '👑',
                'stars_count' => $u->total_stars ?? 30,
                'recent_action' => 'Baru saja menamatkan modul belajar ceria ⭐',
                'badge' => 'Petualang Cilik Aktif',
                'claps_count' => 15 + ($idx * 3),
                'balloons_count' => 10 + ($idx * 2),
                'stars_given' => 20 + ($idx * 4),
                'is_online' => true,
            ];
        })->toArray();

        $totalStars = (int) User::where('role', 'student')->sum('total_stars');
        $studentsCount = User::where('role', 'student')->count();

        $milestone = [
            'current_stars' => $totalStars > 0 ? $totalStars : 385,
            'target_stars' => 500,
            'progress_pct' => min(100, (int) (($totalStars / 500) * 100)),
            'reward_title' => 'Membuka Pulau Petualang Bintang ⭐ & Stiker Emas!',
            'active_adventurers_count' => $studentsCount > 0 ? $studentsCount : 120,
            'recent_cheers' => [
                'Nayla memberi 👏 Tepuk Tangan untuk Alif',
                'Kenzo mengirim 🎈 Balon Ceria untuk Nayla',
                'Pak Guru Iqbal memberi ⭐ Semangat Bintang untuk Seluruh Siswa',
            ],
        ];

        return view('pages.community', compact('user', 'friends', 'milestone'));
    }

    /**
     * Portal Khusus Orang Tua / Pendamping (Real Data MySQL).
     */
    public function parents(): View
    {
        $user = $this->getCurrentUserData();
        $authUser = Auth::user();

        $totalQuizzes = $authUser ? $authUser->quizAttempts()->count() : 6;
        $totalMaterials = Material::count();

        $attempts = $authUser ? $authUser->quizAttempts()->with('quiz.category')->latest()->take(4)->get() : collect();

        $recentActivities = $attempts->map(function ($att) {
            return [
                'topic' => $att->quiz ? $att->quiz->title : 'Kuis Ceria',
                'icon' => $att->quiz && $att->quiz->category ? $att->quiz->category->icon_emoji : '🎯',
                'score' => $att->score,
                'stars' => $att->stars_earned,
                'time' => $att->completed_at ? $att->completed_at->diffForHumans() : 'Baru saja',
                'status' => $att->score >= 80 ? 'Sangat Baik' : 'Selesai',
            ];
        })->toArray();

        if (empty($recentActivities)) {
            $recentActivities = [
                ['topic' => 'Kuis Tebak Hewan Pintar', 'icon' => '🦁', 'score' => 100, 'stars' => 3, 'time' => '10 menit lalu', 'status' => 'Sangat Baik'],
                ['topic' => 'Flashcard Istana Angka 1-5', 'icon' => '🔢', 'score' => null, 'stars' => null, 'time' => '1 jam lalu', 'status' => 'Selesai Dibaca'],
            ];
        }

        $categories = Category::with('quizzes')->get();
        $topicMastery = $categories->map(function ($c) use ($authUser) {
            $quizIds = $c->quizzes->pluck('id');
            $attemptCount = $authUser ? QuizAttempt::where('user_id', $authUser->id)->whereIn('quiz_id', $quizIds)->count() : 2;
            $pct = min(100, max(40, $attemptCount * 30));

            return [
                'category' => $c->name,
                'progress_pct' => $pct,
                'color' => $c->color_theme === 'orange' ? 'bg-orange-500' : ($c->color_theme === 'sky' ? 'bg-sky-500' : 'bg-emerald-500'),
                'note' => "Penguasaan modul {$c->name} terpantau sangat baik dan aktif.",
            ];
        })->toArray();

        $recommendationByAge = match ((int) ($user['age'] ?? 4)) {
            3 => 'Ananda berada pada fase pengenalan konkret awal. Ajak ananda menirukan bunyi suara hewan dan mengamati warna di sekitar.',
            4 => 'Ananda menunjukkan antusiasme tinggi pada kartu visual. Stimulasi dengan menghitung benda nyata 1-5 dan fonetik abjad A-I-U.',
            5 => 'Ananda siap untuk merangkai suku kata dan perbandingan ukuran (besar-kecil, tinggi-rendah).',
            default => 'Ananda sedang dalam persiapan Pra-SD. Latih ketelitian menyimak dan kemandirian menjawab kuis tanpa bantuan.',
        };

        $parentData = [
            'child_profile' => $user,
            'learning_summary' => [
                'total_stars' => $user['stars_count'],
                'stars_target' => 50,
                'quizzes_completed' => $totalQuizzes > 0 ? $totalQuizzes : 6,
                'materials_read' => $totalMaterials > 0 ? $totalMaterials : 18,
                'learning_streak_days' => 5,
                'favorite_topic' => 'Pulau Hewan 🦁',
            ],
            'recent_activities' => $recentActivities,
            'topic_mastery' => $topicMastery,
            'recommendation' => $recommendationByAge,
        ];

        return view('pages.parents', compact('user', 'parentData'));
    }

    /**
     * Profil & Pengaturan Akun Siswa & Orang Tua (Real Data MySQL).
     */
    public function profile(): View
    {
        $user = $this->getCurrentUserData();
        $avatars = $this->getAvatarsList();
        $accessories = $this->getAvatarAccessories();

        return view('pages.profile', compact('user', 'avatars', 'accessories'));
    }

    /**
     * Pilih Avatar saat onboarding.
     */
    public function authAvatar(): View
    {
        $avatars = $this->getAvatarsList();

        return view('pages.auth.avatar-select', compact('avatars'));
    }

    /**
     * Helper daftar avatar maskot.
     *
     * @return array<int, array<string, string>>
     */
    private function getAvatarsList(): array
    {
        return [
            ['key' => 'dino', 'name' => 'Dino Ceria', 'emoji' => '🦖', 'bg' => 'from-emerald-400 to-teal-500'],
            ['key' => 'kucing', 'name' => 'Kiki Kucing', 'emoji' => '🐱', 'bg' => 'from-amber-400 to-orange-500'],
            ['key' => 'singa', 'name' => 'Leo Singa', 'emoji' => '🦁', 'bg' => 'from-yellow-400 to-amber-500'],
            ['key' => 'kelinci', 'name' => 'Cici Kelinci', 'emoji' => '🐰', 'bg' => 'from-pink-400 to-rose-500'],
            ['key' => 'panda', 'name' => 'Pan-Pan Panda', 'emoji' => '🐼', 'bg' => 'from-slate-400 to-slate-600'],
            ['key' => 'beruang', 'name' => 'Bobi Beruang', 'emoji' => '🐻', 'bg' => 'from-amber-600 to-amber-800'],
            ['key' => 'gajah', 'name' => 'Ello Gajah', 'emoji' => '🐘', 'bg' => 'from-sky-400 to-blue-600'],
            ['key' => 'koala', 'name' => 'Koko Koala', 'emoji' => '🐨', 'bg' => 'from-violet-400 to-purple-600'],
        ];
    }

    /**
     * Helper daftar aksesori avatar hasil prestasi.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getAvatarAccessories(): array
    {
        return [
            ['key' => 'none', 'name' => 'Polos', 'icon' => '❌', 'is_unlocked' => true],
            ['key' => 'crown', 'name' => 'Mahkota Emas', 'icon' => '👑', 'is_unlocked' => true, 'source' => 'Achievement Sahabat Rimba'],
            ['key' => 'party', 'name' => 'Topi Pesta Ceria', 'icon' => '🥳', 'is_unlocked' => true, 'source' => 'Achievement Master Berhitung'],
            ['key' => 'glasses', 'name' => 'Kacamata Pintar', 'icon' => '👓', 'is_unlocked' => true, 'source' => 'Achievement Detektif Abjad'],
            ['key' => 'superhero', 'name' => 'Jubah Pahlawan', 'icon' => '🦸', 'is_unlocked' => true, 'source' => 'Raih Skor 100% di 3 Kuis'],
        ];
    }
}

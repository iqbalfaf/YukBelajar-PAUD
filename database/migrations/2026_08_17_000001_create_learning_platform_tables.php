<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Kategori Pulau Pembelajaran PAUD
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->enum('pillar', ['mengenal', 'membaca', 'menghitung'])->default('mengenal');
            $table->string('name'); // e.g. Pulau Hewan
            $table->string('slug')->unique(); // e.g. hewan
            $table->string('icon_emoji', 16); // e.g. 🦁
            $table->string('color_theme')->default('yellow'); // e.g. yellow, sky, emerald
            $table->string('bg_gradient')->default('from-amber-400 to-yellow-500');
            $table->string('border_color')->default('#f59e0b');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('age_min')->default(3);
            $table->unsignedTinyInteger('age_max')->default(6);
            $table->string('recommended_age')->default('3 - 5 Thn');
            $table->unsignedInteger('sort_order')->default(1);
            $table->timestamps();
        });

        // 2. Tingkatan Level Pembelajaran (Scaffolding Levels 1, 2, 3)
        Schema::create('learning_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('title'); // e.g. Level 1: Dasar / Pemula
            $table->unsignedTinyInteger('level_number')->default(1); // 1, 2, 3
            $table->unsignedTinyInteger('target_age')->default(3); // 3, 4, 5
            $table->unsignedInteger('unlock_stars_required')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // 3. Flashcard Kartu Materi Bergambar & Bersuara
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('learning_level_id')->constrained('learning_levels')->onDelete('cascade');
            $table->string('title'); // e.g. Singa Pemberani
            $table->string('subtitle')->nullable(); // e.g. Si-nga (2 Suku Kata)
            $table->string('icon_emoji', 16); // e.g. 🦁
            $table->string('sound_effect')->nullable(); // e.g. Auman Singa Menggelegar
            $table->text('speech_text')->nullable(); // e.g. Singa! Hewan pemberani yang dijuluki Raja Hutan!
            $table->text('parent_note')->nullable();
            $table->unsignedInteger('sort_order')->default(1);
            $table->timestamps();
        });

        // 4. Modul Kuis Bergambar
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('learning_level_id')->nullable()->constrained('learning_levels')->onDelete('cascade');
            $table->string('title'); // e.g. Kuis Tebak Hewan Ceria
            $table->string('slug')->unique(); // e.g. tebak-hewan
            $table->string('icon_emoji', 16)->default('🦁');
            $table->unsignedTinyInteger('target_age')->default(4);
            $table->unsignedInteger('total_questions')->default(3);
            $table->unsignedTinyInteger('stars_reward')->default(3);
            $table->timestamps();
        });

        // 5. Butir Soal Kuis
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->text('question_text'); // e.g. Manakah hewan yang suka makan wortel dan melompat-lompat?
            $table->text('question_audio')->nullable(); // Teks suara bacaan soal
            $table->string('question_emoji', 16)->nullable();
            $table->unsignedInteger('sort_order')->default(1);
            $table->timestamps();
        });

        // 6. Kartu Pilihan Jawaban Soal
        Schema::create('question_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
            $table->string('option_emoji', 16); // e.g. 🐰
            $table->string('option_text'); // e.g. Kelinci Lucu
            $table->boolean('is_correct')->default(false);
            $table->unsignedInteger('sort_order')->default(1);
            $table->timestamps();
        });

        // 7. Riwayat Percobaan Kuis Siswa
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->unsignedInteger('score')->default(100);
            $table->unsignedInteger('total_correct')->default(3);
            $table->unsignedInteger('total_questions')->default(3);
            $table->unsignedTinyInteger('stars_earned')->default(3);
            $table->timestamp('completed_at')->useCurrent();
            $table->timestamps();
        });

        // 8. Master Stiker Koleksi
        Schema::create('stickers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g. Singa Juara
            $table->string('emoji', 16); // e.g. 🦁
            $table->string('category')->default('hewan');
            $table->string('rarity')->default('common'); // common, rare, legendary
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // 9. Koleksi Stiker yang Diraih Siswa
        Schema::create('user_stickers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('sticker_id')->constrained('stickers')->onDelete('cascade');
            $table->timestamp('earned_at')->useCurrent();
            $table->timestamps();
        });

        // 10. Master Lencana Prestasi (Piala Siswa & Orang Tua)
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // e.g. hewan_master
            $table->string('title'); // e.g. Sahabat Rimba
            $table->text('description')->nullable();
            $table->string('icon_badge', 16)->default('🦁');
            $table->string('target_type')->default('student'); // student, parent
            $table->string('reward_type')->default('stars'); // stars, accessory, certificate
            $table->string('reward_value')->default('+10 Bintang');
            $table->unsignedInteger('required_count')->default(5);
            $table->timestamps();
        });

        // 11. Prestasi yang Diraih Pengguna
        Schema::create('user_achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('achievement_id')->constrained('achievements')->onDelete('cascade');
            $table->unsignedInteger('current_progress')->default(0);
            $table->boolean('is_unlocked')->default(false);
            $table->timestamp('unlocked_at')->nullable();
            $table->timestamps();
        });

        // 12. Audit Trail Log Sistem (Real-time Live Activity Feed)
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('action_type'); // quiz, ai, level_unlock, user_crud, profile
            $table->text('description');
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });

        // 13. Pengaturan Konfigurasi Aplikasi (App Settings)
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->string('setting_key')->unique();
            $table->text('setting_value')->nullable();
            $table->string('setting_group')->default('general');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_settings');
        Schema::dropIfExists('audit_logs');
        Schema::dropIfExists('user_achievements');
        Schema::dropIfExists('achievements');
        Schema::dropIfExists('user_stickers');
        Schema::dropIfExists('stickers');
        Schema::dropIfExists('quiz_attempts');
        Schema::dropIfExists('question_options');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('quizzes');
        Schema::dropIfExists('materials');
        Schema::dropIfExists('learning_levels');
        Schema::dropIfExists('categories');
    }
};

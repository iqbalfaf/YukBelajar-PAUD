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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('current_streak_days')->default(1)->after('total_stars');
            $table->unsignedInteger('longest_streak_days')->default(1)->after('current_streak_days');
            $table->date('last_activity_date')->nullable()->after('longest_streak_days');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['current_streak_days', 'longest_streak_days', 'last_activity_date']);
        });
    }
};

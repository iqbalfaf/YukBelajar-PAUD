<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontEndController;
use App\Http\Middleware\EnsureAdminOrTeacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - YukBelajar PAUD
|--------------------------------------------------------------------------
*/

// Landing Page & Public Showcase
Route::get('/', [FrontEndController::class, 'landing'])->name('landing');

// Rute Tamu / Guest (Hanya saat belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/daftar', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/daftar', [AuthController::class, 'register'])->name('register.post');
});

// Logout Rute (Mendukung POST form maupun GET link langsung)
Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Pembelajaran Siswa & Orang Tua (Terproteksi Middleware Auth)
Route::middleware('auth')->group(function () {
    Route::get('/petualangan', [FrontEndController::class, 'gameHub'])->name('home');
    Route::get('/profil', [FrontEndController::class, 'profile'])->name('profile');
    Route::post('/profil', [FrontEndController::class, 'updateProfile'])->name('profile.update');
    Route::get('/materi/{category?}', [FrontEndController::class, 'materials'])->name('materials');
    Route::post('/materi/complete-card', [FrontEndController::class, 'completeMaterialCard'])->name('materials.complete-card');
    Route::get('/kuis/{quiz?}', [FrontEndController::class, 'quiz'])->name('quiz');
    Route::post('/kuis/{quiz}/submit', [FrontEndController::class, 'submitQuizAttempt'])->name('quiz.submit');
    Route::get('/buku-stiker', [FrontEndController::class, 'stickers'])->name('stickers');
    Route::get('/prestasi', [FrontEndController::class, 'achievements'])->name('achievements');
    Route::get('/sahabat', [FrontEndController::class, 'community'])->name('community');
    Route::get('/orang-tua', [FrontEndController::class, 'parents'])->name('parents');
    Route::get('/pilih-avatar', [FrontEndController::class, 'authAvatar'])->name('auth.avatar');
});

// Rute Dashboard Khusus Admin / Guru (Terproteksi Middleware Auth + EnsureAdminOrTeacher)
Route::prefix('admin')->name('admin.')->middleware(['auth', EnsureAdminOrTeacher::class])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/materials', [AdminController::class, 'materials'])->name('materials');
    Route::post('/materials', [AdminController::class, 'storeMaterial'])->name('materials.store');
    Route::put('/materials/{id}', [AdminController::class, 'updateMaterial'])->name('materials.update');
    Route::delete('/materials/{id}', [AdminController::class, 'deleteMaterial'])->name('materials.delete');
    Route::get('/stickers', [AdminController::class, 'stickers'])->name('stickers');
    Route::post('/stickers', [AdminController::class, 'storeSticker'])->name('stickers.store');
    Route::put('/stickers/{id}', [AdminController::class, 'updateSticker'])->name('stickers.update');
    Route::delete('/stickers/{id}', [AdminController::class, 'deleteSticker'])->name('stickers.delete');
    Route::post('/export-report', [AdminController::class, 'exportReport'])->name('export-report');
    Route::get('/ai-generator', [AdminController::class, 'aiGenerator'])->name('ai-generator');
    Route::post('/ai-generator/generate', [AdminController::class, 'generateAiContent'])->name('ai-generator.generate');
    Route::post('/ai-generator/publish', [AdminController::class, 'publishAiContent'])->name('ai-generator.publish');
    Route::get('/quizzes', [AdminController::class, 'quizzes'])->name('quizzes');
    Route::post('/quizzes', [AdminController::class, 'storeQuiz'])->name('quizzes.store');
    Route::put('/quizzes/{id}', [AdminController::class, 'updateQuiz'])->name('quizzes.update');
    Route::delete('/quizzes/{id}', [AdminController::class, 'deleteQuiz'])->name('quizzes.delete');
    Route::post('/quizzes/{quizId}/questions', [AdminController::class, 'storeQuestion'])->name('quizzes.questions.store');
    Route::delete('/questions/{id}', [AdminController::class, 'deleteQuestion'])->name('questions.delete');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('users.delete');
    Route::post('/users/{id}/reset-pin', [AdminController::class, 'resetUserPin'])->name('users.reset-pin');
    Route::get('/profil', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profil', [AdminController::class, 'updateAdminProfile'])->name('profile.update');
});

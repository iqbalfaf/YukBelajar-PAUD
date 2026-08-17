<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman masuk (Login).
     */
    public function showLogin(): View
    {
        $avatars = [
            ['key' => 'dino', 'name' => 'Dino Ceria', 'emoji' => '🦖', 'bg' => 'from-emerald-400 to-teal-500'],
            ['key' => 'kucing', 'name' => 'Kiki Kucing', 'emoji' => '🐱', 'bg' => 'from-amber-400 to-orange-500'],
            ['key' => 'singa', 'name' => 'Leo Singa', 'emoji' => '🦁', 'bg' => 'from-yellow-400 to-amber-500'],
            ['key' => 'kelinci', 'name' => 'Cici Kelinci', 'emoji' => '🐰', 'bg' => 'from-pink-400 to-rose-500'],
            ['key' => 'panda', 'name' => 'Pan-Pan Panda', 'emoji' => '🐼', 'bg' => 'from-slate-400 to-slate-600'],
            ['key' => 'beruang', 'name' => 'Bobi Beruang', 'emoji' => '🐻', 'bg' => 'from-amber-600 to-amber-800'],
            ['key' => 'gajah', 'name' => 'Ello Gajah', 'emoji' => '🐘', 'bg' => 'from-sky-400 to-blue-600'],
            ['key' => 'koala', 'name' => 'Koko Koala', 'emoji' => '🐨', 'bg' => 'from-violet-400 to-purple-600'],
        ];

        return view('pages.auth.login', compact('avatars'));
    }

    /**
     * Proses autentikasi login pengguna.
     */
    public function login(Request $request): RedirectResponse
    {
        $mode = $request->input('auth_mode', 'student');

        if ($mode === 'adult') {
            $request->validate([
                'login_id' => ['required', 'string'],
                'password' => ['required', 'string'],
            ], [
                'login_id.required' => 'Email atau Username wajib diisi.',
                'password.required' => 'Kata sandi wajib diisi.',
            ]);

            $loginId = $request->input('login_id');
            $field = filter_var($loginId, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            $credentials = [
                $field => $loginId,
                'password' => $request->input('password'),
            ];
        } else {
            $request->validate([
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
            ], [
                'username.required' => 'Username wajib diisi.',
                'password.required' => 'Kata sandi wajib diisi.',
            ]);

            $credentials = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ];
        }

        $remember = $request->boolean('remember', true);

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            if (! $user->is_active) {
                Auth::logout();
                throw ValidationException::withMessages([
                    'login' => 'Akun Anda saat ini sedang dinonaktifkan. Silakan hubungi administrator.',
                ]);
            }

            $user->update(['last_login_at' => now()]);
            $request->session()->regenerate();

            if (in_array($user->role, ['admin', 'teacher'])) {
                return redirect()->intended(route('admin.dashboard'))->with('success', "Selamat datang kembali, {$user->name}!");
            }

            return redirect()->intended(route('home'))->with('success', "Halo {$user->name}! Selamat datang di Taman Petualangan!");
        }

        throw ValidationException::withMessages([
            'login' => 'Username/Email atau kata sandi yang Anda masukkan belum tepat. Yuk coba lagi!',
        ]);
    }

    /**
     * Tampilkan halaman pendaftaran akun baru (Register).
     */
    public function showRegister(): View
    {
        $avatars = [
            ['key' => 'dino', 'name' => 'Dino Ceria', 'emoji' => '🦖', 'bg' => 'from-emerald-400 to-teal-500'],
            ['key' => 'kucing', 'name' => 'Kiki Kucing', 'emoji' => '🐱', 'bg' => 'from-amber-400 to-orange-500'],
            ['key' => 'singa', 'name' => 'Leo Singa', 'emoji' => '🦁', 'bg' => 'from-yellow-400 to-amber-500'],
            ['key' => 'kelinci', 'name' => 'Cici Kelinci', 'emoji' => '🐰', 'bg' => 'from-pink-400 to-rose-500'],
            ['key' => 'panda', 'name' => 'Pan-Pan Panda', 'emoji' => '🐼', 'bg' => 'from-slate-400 to-slate-600'],
            ['key' => 'beruang', 'name' => 'Bobi Beruang', 'emoji' => '🐻', 'bg' => 'from-amber-600 to-amber-800'],
            ['key' => 'gajah', 'name' => 'Ello Gajah', 'emoji' => '🐘', 'bg' => 'from-sky-400 to-blue-600'],
            ['key' => 'koala', 'name' => 'Koko Koala', 'emoji' => '🐨', 'bg' => 'from-violet-400 to-purple-600'],
        ];

        return view('pages.auth.register', compact('avatars'));
    }

    /**
     * Proses pendaftaran akun baru siswa/orang tua.
     */
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'username' => ['required', 'string', 'alpha_dash', 'max:50', 'unique:users,username'],
            'password' => ['required', 'string', 'min:4'],
            'age' => ['required', 'integer', 'between:3,6'],
            'avatar_icon' => ['required', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:150', 'unique:users,email'],
        ], [
            'name.required' => 'Nama panggilan anak wajib diisi.',
            'username.required' => 'Username login unik wajib diisi.',
            'username.unique' => 'Username ini sudah digunakan, silakan pilih username yang lain.',
            'username.alpha_dash' => 'Username hanya boleh berisi huruf, angka, strip, dan garis bawah.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi minimal 4 karakter.',
            'age.required' => 'Usia belajar anak wajib dipilih.',
            'avatar_icon.required' => 'Silakan pilih salah satu avatar kartun hewan favorit.',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'username' => strtolower($request->input('username')),
            'password' => Hash::make($request->input('password')),
            'role' => 'student',
            'avatar_icon' => $request->input('avatar_icon', 'dino'),
            'age' => (int) $request->input('age', 4),
            'parent_pin' => '1234',
            'email' => $request->input('email'),
            'total_stars' => 10, // 10 Bintang Emas Bonus Awal Registrasi!
            'is_active' => true,
            'last_login_at' => now(),
        ]);

        AuditLog::create([
            'user_id' => $user->id,
            'action_type' => 'register',
            'description' => "Akun siswa baru {$user->name} (@{$user->username}) berhasil didaftarkan.",
            'ip_address' => $request->ip(),
        ]);

        Auth::login($user, true);
        $request->session()->regenerate();

        return redirect()->route('home')->with('success', 'Hore! Akun barumu berhasil dibuat dan kamu mendapatkan 10 Bintang Emas Pertama! ⭐');
    }

    /**
     * Keluar dari akun (Logout - Mendukung POST dan GET).
     */
    public function logout(Request $request): RedirectResponse
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect()->route('landing')->with('success', 'Kamu telah keluar dari akun. Sampai jumpa lagi teman pintar!');
    }
}

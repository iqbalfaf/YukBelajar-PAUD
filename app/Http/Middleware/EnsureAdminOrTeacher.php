<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminOrTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan masuk terlebih dahulu untuk mengakses Panel Guru.');
        }

        $user = Auth::user();

        if (! in_array($user->role, ['admin', 'teacher'])) {
            return redirect()->route('home')->with('error', 'Akses dibatasi khusus untuk Guru dan Administrator.');
        }

        return $next($request);
    }
}

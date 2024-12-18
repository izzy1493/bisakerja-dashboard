<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Pastikan pengguna terotentikasi
        if (!Auth::check()) {
            return redirect('/login'); // Arahkan ke halaman login jika belum login
        }

        // Dapatkan role pengguna
        $userRole = Auth::user()->role;

        // Cek apakah role pengguna termasuk dalam role yang diizinkan
        if (!in_array($userRole, $roles)) {
            return redirect('/home'); // Ganti dengan halaman yang sesuai
        }

        return $next($request);
    }
}

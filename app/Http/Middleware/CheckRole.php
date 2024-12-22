<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Pastikan pengguna sudah terautentikasi
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek apakah role pengguna sesuai dengan yang diharapkan
        if (Auth::user()->role !== $role) {
            return redirect()->route('login')->with('error', 'Akses ditolak.');
        }

        return $next($request);
    }
}



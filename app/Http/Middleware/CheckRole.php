<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {

        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');

        // Pastikan pengguna sudah terautentikasi
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek apakah role pengguna sesuai dengan yang diharapkan
        if (Auth::user()->role !== $role) {
            return redirect()->route('dashboard-page');

        }

        // Periksa apakah peran pengguna termasuk dalam daftar $roles
        if (!in_array(Auth::user()->role, $roles)) {
            return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request); // Lanjutkan jika peran sesuai
    }
}



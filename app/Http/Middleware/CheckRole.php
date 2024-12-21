<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Memastikan pengguna sudah login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Memeriksa apakah pengguna memiliki role yang sesuai
        if (auth()->user()->role !== $role) {
            // Jika pengguna tidak memiliki role yang sesuai, return 403
            return abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}


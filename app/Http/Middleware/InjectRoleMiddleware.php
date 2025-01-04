<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InjectRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            view()->share('role', auth()->user()->role);
        }

        return $next($request);
    }
}

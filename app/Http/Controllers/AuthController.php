<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerasi session untuk keamanan

            // Redirect ke halaman dashboard atau lainnya
            return redirect()->intended('dashboard'); // Sesuaikan dengan route dashboard
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah!');
    }
}


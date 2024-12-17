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

        

            // Redirect otomatis ke halaman dashboard berdasarkan role
            return redirect()->intended('/dashboard'); // Route dashboard akan di-handle middleware
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah!');
    }
    public function logout()
    {
        // Logout the current authenticated user
        Auth::guard('web')->logout();

        // Redirect to the login page or admin dashboard
        return redirect()->route('login'); // Ubah dengan route login Anda
    }

    
}


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

            // Mendapatkan pengguna yang saat ini login
            $user = Auth::user();

            // Cek role pengguna dan arahkan sesuai
            switch ($user->role) {
                case 'superadmin':
                case 'admin':
                    return redirect()->intended('/dashboard');
                case 'pelamar':
                    return redirect()->intended('/jobs');
                case 'penyedia':
                    return redirect()->intended('/dashboard-penyedia'); // Sesuaikan dengan route dashboard penyedia
                default:
                    // Jika role tidak dikenali, arahkan ke halaman default
                    return redirect()->intended('/dashboard');
            }
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        // Logout the current authenticated user
        Auth::guard('web')->logout();

        // Redirect to the login page
        return redirect()->route('login');
    }
}

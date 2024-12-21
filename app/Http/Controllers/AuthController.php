<?php

namespace App\Http\Controllers;

use App\Models\User; // Jangan lupa untuk menggunakan model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // Metode untuk login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt($credentials)) {            
            $request->session()->regenerate();
            $user = Auth::user();

            // Redirect based on the user's role
            if ($user->role == 'superadmin') {
                return view('dashboard.superadmin.dashboard');
            } elseif ($user->role == 'admin') {
                return view('dashboard.admin.dashboard');
            } elseif ($user->role == 'penyedia') {
                return view('dashboard.penyedia.lamaran');
            }
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah!');
    }

    // Metode untuk logout
    public function logout()
    {
        // Logout the current authenticated user
        Auth::guard('web')->logout();

        // Redirect ke halaman login
        return redirect()->route('login'); // Ubah dengan route login Anda
    }

    // Menampilkan halaman pendaftaran (sign-up)
    public function showSignupForm()
    {
        return view('auth.signup'); // Mengarah ke view signup.blade.php
    }

    // Proses registrasi (sign-up)
    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'password' => 'required|confirmed|min:8',
        ]);

        // Simpan data pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone, 
            'role' => 'user', // Default role
            'is_verified' => false, // Default status
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }
}

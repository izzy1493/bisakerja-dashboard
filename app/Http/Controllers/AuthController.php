<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
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
            // Regenerate session untuk mencegah session fixation attacks
            // $request->session()->regenerate();

            // // Ambil data pengguna yang sedang login
            Auth::loginUsingId(User::where('email', $request->email)->first()->id);
            $user = Auth::user();

            switch ($user->role) {
                case 'superadmin':
                    return view('dashboard.superadmin.dashboard');
                case 'admin':
                    return view('dashboard.admin.dashboard');
                case 'penyedia':
                    return view('dashboard.penyedia.index ');
                case 'pencari':
                    // Mengambil data pekerjaan dengan pagination (10 per halaman)
                    $jobs = Job::paginate(10);

                    // Mengirim data pekerjaan ke view
                    return view('dashboard.pencari.index', compact('jobs'));
                default:
                    return redirect()->route('login')->with('error', 'Role tidak dikenal.');
            }

            return redirect()->intended('dashboard-page');
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah!');
    }

    // Metode untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    // Metode untuk menampilkan halaman signup
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // Proses signup
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'user', // Default role
            'is_verified' => false, // Default status
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }
}

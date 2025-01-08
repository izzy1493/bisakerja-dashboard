<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVerification; // Pastikan ini sudah ada
use Illuminate\Support\Facades\Auth; // Untuk mengambil informasi pengguna yang sedang login

class UserVerificationController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login

        if ($user && $user->role === 'admin') { // Pastikan peran adalah 'admin'
            $verifications = UserVerification::with('user')->get();
            return view('dashboard.admin.user-verification', compact('verifications'));
        }

        return abort(403, 'Unauthorized action.');
    }

    public function show($id)
    {
        $verification = UserVerification::with('user')->findOrFail($id);
        return view('dashboard.admin.verification-show', compact('verification'));
    }

    public function approve($id)
    {
        $verification = UserVerification::findOrFail($id);
        $verification->update(['is_verified' => true]);
        return redirect()->route('list-lowongan.index')->with('success', 'Verifikasi berhasil disetujui!');
    }

    public function reject($id)
    {
        $verification = UserVerification::findOrFail($id);
        $verification->update(['is_verified' => false]);
        return redirect()->route('list-lowongan.index')->with('success', 'Verifikasi berhasil ditolak.');
    }
}


// class UserVerificationController extends Controller
// {
//     public function perindex()
//     {
//         $role = 'admin'; // Tentukan role yang sesuai

//         if ($role == 'admin') {
//             return view('dashboard.admin.user-verification');  // Halaman Verifikasi Pengguna Admin
//         }

//         return abort(403, 'Unauthorized action.');  // Jika role tidak valid
//     }
// }

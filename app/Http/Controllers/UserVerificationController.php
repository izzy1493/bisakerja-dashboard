<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVerification;

class UserVerificationController extends Controller
{
    public function index()
    {
        // Ambil semua verifikasi yang ada untuk ditampilkan di dashboard admin
        $verifications = UserVerification::all();

        return view('dashboard.admin.verif.user-verification', compact('verifications'));
    }

    public function show($id)
    {
        // Ambil verifikasi berdasarkan ID yang diterima
        $verification = UserVerification::findOrFail($id);

        // Kirim data ke view untuk ditampilkan
        return view('dashboard.admin.verif.detail', compact('verification'));
    }

    public function approve($id)
    {
        // Cari verifikasi berdasarkan ID
        $verification = UserVerification::findOrFail($id);

        // Set status menjadi 'approved'
        $verification->status = 'approved';
        $verification->save();

        // Arahkan kembali ke halaman daftar verifikasi
        return redirect()->route('admin.user-verifications.index')->with('success', 'Verifikasi telah disetujui.');
    }

    public function reject($id)
    {
        // Cari verifikasi berdasarkan ID
        $verification = UserVerification::findOrFail($id);

        // Set status menjadi 'rejected'
        $verification->status = 'rejected';
        $verification->save();

        // Arahkan kembali ke halaman daftar verifikasi
        return redirect()->route('admin.user-verifications.index')->with('error', 'Verifikasi telah ditolak.');
    }
}

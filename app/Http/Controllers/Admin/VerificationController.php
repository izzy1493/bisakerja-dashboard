<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    // Data dummy verifikasi pengguna
    protected $verifications = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'role' => 'Penyedia Kerja',
            'ktp' => '123456789',
            'ktp_image' => '/images/ktp1.jpg',
            'selfie_image' => '/images/selfie1.jpg',
            'status' => 'Pending',
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'role' => 'Pencari Kerja',
            'ktp' => '987654321',
            'ktp_image' => '/images/ktp2.jpg',
            'selfie_image' => '/images/selfie2.jpg',
            'status' => 'Pending',
        ],
    ];

    // Method untuk menampilkan daftar verifikasi
    public function index()
    {
        return view('admin.verifications.index', ['verifications' => $this->verifications]);
    }

    // Method untuk melihat detail verifikasi
    public function show($id)
    {
        $verification = collect($this->verifications)->firstWhere('id', $id);
        return view('admin.verifications.show', ['verification' => $verification]);
    }

    // Method untuk menyetujui verifikasi
    public function approve($id)
    {
        return redirect()->route('admin.verifications.index')->with('success', 'Verifikasi disetujui.');
    }

    // Method untuk menolak verifikasi dengan alasan
    public function reject(Request $request, $id)
    {
        $reason = $request->input('reason');
        return redirect()->route('admin.verifications.index')->with('error', 'Verifikasi ditolak. Alasan: ' . $reason);
    }
}

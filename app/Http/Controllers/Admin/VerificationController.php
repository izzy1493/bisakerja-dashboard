<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VerificationController extends Controller
{
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
        // Tambahkan data dummy lainnya sesuai kebutuhan
    ];

    public function index()
    {
        return view('admin.verifications.index', ['verifications' => $this->verifications]);
    }

    public function show($id)
    {
        $verification = collect($this->verifications)->firstWhere('id', $id);
        return view('admin.verifications.show', ['verification' => $verification]);
    }

    public function approve($id)
    {
        // Logika persetujuan verifikasi
        return redirect()->route('admin.verifications.index')->with('success', 'Verifikasi disetujui.');
    }

    public function reject(Request $request, $id)
    {
        // Logika penolakan verifikasi
        $reason = $request->input('reason');
        return redirect()->route('admin.verifications.index')->with('error', 'Verifikasi ditolak. Alasan: ' . $reason);
    }
}
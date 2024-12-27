<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVerification;

class UserVerificationController extends Controller
{
    public function index()
    {
        $role = 'admin'; // Tentukan role yang sesuai

        if ($role == 'admin') {
            // Ambil semua data dari tabel user_verifications
            $verifications = UserVerification::all();

            // Kirim data ke view
            return view('dashboard.admin.user-verification', compact('verifications'));
        }

        return abort(403, 'Unauthorized action.');
    }
}

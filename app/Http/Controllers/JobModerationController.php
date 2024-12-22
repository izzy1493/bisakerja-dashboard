<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobModerationController extends Controller
{
    // Memastikan middleware 'auth' sudah diaktifkan
    public function __construct()
    {
        $this->middleware('auth');  // Pastikan pengguna login sebelum mengakses
    }

    public function index()
    {
        // Memeriksa apakah pengguna memiliki role 'admin'
        $user = auth()->user();

        // Jika pengguna bukan admin, kirimkan response 403
        if ($user && $user->role !== 'admin') {
            return abort(403, 'Unauthorized action.');
        }

        // Jika role admin, tampilkan halaman moderasi pekerjaan
        return view('dashboard.admin.job-moderation');
    }
}

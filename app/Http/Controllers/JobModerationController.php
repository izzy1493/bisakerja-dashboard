<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobModerationController extends Controller
{
    public function __construct()
    {
        // Menambahkan middleware pada constructor untuk memastikan role 'admin'
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        // Cek role pengguna sebelum menampilkan halaman
        if (auth()->user() && auth()->user()->role == 'admin') {
            return view('dashboard.admin.job-moderation');  // Halaman Moderasi Pekerjaan Admin
        }

        return abort(403, 'Unauthorized action.');  // Jika role tidak valid
    }
}

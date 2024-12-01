<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Tentukan role secara manual (misalnya Admin atau Superadmin)
        $role = 'admin'; // Ganti dengan 'superadmin' untuk halaman superadmin

        // Cek role dan arahkan ke tampilan yang sesuai
        if ($role == 'admin') {
            return view('dashboard.admin.dashboard');  // Halaman untuk Admin
        }

        if ($role == 'superadmin') {
            return view('dashboard.superadmin.dashboard');  // Halaman untuk Superadmin
        }

        // Jika tidak ada role yang cocok, beri pesan error
        return abort(403, 'Unauthorized action.');
    }
}

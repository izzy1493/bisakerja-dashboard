<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobModerationController extends Controller
{
    public function index()
    {
        $role = 'admin'; // Tentukan role yang sesuai

        if ($role == 'admin') {
            return view('dashboard.admin.job-moderation');  // Halaman Moderasi Pekerjaan Admin
        }

        return abort(403, 'Unauthorized action.');  // Jika role tidak valid
    }
}

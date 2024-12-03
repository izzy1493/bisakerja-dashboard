<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportHandlingController extends Controller
{
    public function index()
    {
        $role = 'admin'; // Tentukan role yang sesuai

        if ($role == 'admin') {
            return view('dashboard.admin.report-handling');  // Halaman Penanganan Laporan Admin
        }

        return abort(403, 'Unauthorized action.');  // Jika role tidak valid
    }
}

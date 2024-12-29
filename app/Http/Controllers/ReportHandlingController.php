<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report; // Import model Report

class ReportHandlingController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role; // Pastikan role diambil dari user yang sedang login

        if ($role == 'admin') {
            // Ambil semua data laporan beserta relasi user dan job
            $reports = Report::with(['user', 'job'])->get();

            // Kirim data ke view
            return view('dashboard.admin.laporan.report-handling', compact('reports'));
        }

        return abort(403, 'Unauthorized action.'); // Jika role tidak valid
    }
}

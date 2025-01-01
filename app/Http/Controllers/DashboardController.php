<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Jika tidak ada role khusus, default saja
        return view('dashboard.index');
    }

    public function superadmin()
    {
        return view('dashboard.superadmin.dashboard');
    }

    public function admin()
    {
        return view('dashboard.admin.dashboard');
    }

    public function penyedia()
    {
        return view('dashboard.penyedia.dashboard');
    }

    public function pencari()
    {
        return view('dashboard.pencari.dashboard');
    }
}

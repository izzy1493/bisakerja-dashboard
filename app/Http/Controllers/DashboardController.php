<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin.dashboard');  // Halaman untuk Admin
    }
    public function superadmin()
    {
        return view('dashboard.superadmin.dashboard');  // Halaman untuk Admin
    }
    public function penyedia()
    {
        return view('dashboard.penyedia.index');  // Halaman untuk Admin
    }
}

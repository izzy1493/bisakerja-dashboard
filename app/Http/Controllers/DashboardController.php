<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = 'penyedia'; // Hardcoded untuk saat ini
        return view('dashboard.penyedia.index', compact('role'));
    }
}

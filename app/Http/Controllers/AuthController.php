<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Menentukan role berdasarkan tombol yang dipilih
        if ($request->role == 'super-admin') {
            // Simulasikan login untuk super-admin
            return redirect()->route('dashboard')->with('role', 'Super Admin');
        } elseif ($request->role == 'admin') {
            // Simulasikan login untuk admin
            return redirect()->route('dashboard')->with('role', 'Admin');
        }

        return redirect()->back()->withErrors(['role' => 'Role tidak valid.']);
    }
}

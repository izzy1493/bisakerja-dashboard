<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{   public function index()
    {
        $user = Auth::user();

        // Redirect based on the user's role
        if ($user->role == 'superadmin') {
            return view('dashboard.superadmin.dashboard');
        } elseif ($user->role == 'admin') {
            return view('dashboard.admin.dashboard');
        } elseif ($user->role == 'penyedia') {
            return view('dashboard.penyedia.dashboard');
        }

        // Redirect default untuk role yang tidak dikenali
        return redirect()->route('login');
    }
    
}
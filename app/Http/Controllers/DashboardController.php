<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Redirect based on the user's role
        if ($user->role == 'superadmin') {
            return view('dashboard.superadmin.dashboard');
        } elseif ($user->role == 'admin') {
            return view('dashboard.admin.dashboard');
        }

        // Default redirect for other roles (e.g. regular user)
        return redirect()->route('user.dashboard');
    }

   
}

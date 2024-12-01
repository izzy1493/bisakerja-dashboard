<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AdminManagementController extends Controller
{
    public function index()
    {
        return view('dashboard.superadmin.admin-management');
    }
}

<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PolicyManagementController extends Controller
{
    public function index()
    {
        return view('dashboard.superadmin.policy-management');
    }
}

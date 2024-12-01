<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ActivityMonitoringController extends Controller
{
    public function index()
    {
        return view('dashboard.superadmin.activity-monitoring');
    }
}

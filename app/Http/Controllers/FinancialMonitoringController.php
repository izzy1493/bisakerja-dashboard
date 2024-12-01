<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FinancialMonitoringController extends Controller
{
    public function index()
    {
        return view('dashboard.superadmin.financial-monitoring');
       
    }
}

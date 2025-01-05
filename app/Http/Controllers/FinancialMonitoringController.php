<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Escrow;

class FinancialMonitoringController extends Controller
{
    public function index()
    {
        // Ambil semua data payment dengan relasi 'job' dan 'provider'
        $payments = Payment::with('job', 'provider')->get();
        
        // Menjumlahkan semua nilai di kolom 'amount' untuk Payment
        $totalAmount = Payment::sum('amount'); 

        // Ambil semua data escrow dengan relasi 'job' dan 'seeker'
        $escrows = Escrow::with('job', 'seeker')->get();
        
        // Menjumlahkan semua nilai di kolom 'amount' untuk Escrow
        $escrowAmount = Escrow::sum('amount'); 

        // Menjumlahkan nilai 'amount' pada Payment dengan status 'validated'
        $paymentValidatedAmount = Payment::where('status', 'validated')->sum('amount'); 

        // Menjumlahkan nilai 'amount' pada Payment dengan status 'pending'
        $paymentRejectedAmount = Payment::where('status', 'pending')->sum('amount'); 
        
        // Kirim data ke view menggunakan compact
        return view('dashboard.superadmin.financial-monitoring', compact(
            'payments',
            'totalAmount',
            'escrows',
            'escrowAmount',
            'paymentValidatedAmount',
            'paymentRejectedAmount'
        ));
    }
}

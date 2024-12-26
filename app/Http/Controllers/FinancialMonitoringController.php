<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Escrow;
class FinancialMonitoringController extends Controller
{
    public function index()
    {
        $payments = Payment::with('job', 'provider')->get();
        $totalAmount = Payment::sum('amount'); // Menjumlahkan semua nilai di kolom amount

        $escrows = Escrow::with('job', 'seeker')->get();
        $escrowAmount = Escrow::sum('amount'); // 

        $paymentValidatedAmount = Payment::where('status', 'validated')->sum('amount'); // Menjumlahkan kolom amount untuk status validated

        $paymentRejectedAmount = payment::where('status', 'pending')->sum('amount'); // Menjumlahkan kolom amount untuk status pending
        
        return view('dashboard.superadmin.financial-monitoring')->with([
            'payments' => $payments, // data
            'totalAmount'=> $totalAmount, // angka/jumlah
            'escrows' => $escrows, // data
            'escrowAmount'=> $escrowAmount, // angka/jumlah
             'paymentValidatedAmount' => $paymentValidatedAmount, // data
             'paymentRejectedAmount' => $paymentRejectedAmount, // data



        ]);
    }
}

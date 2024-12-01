<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FinancialMonitoringController extends Controller
{
    public function index()
    {
        // Sample data untuk laporan keuangan
        $revenue = 500000; // Total pemasukan
        $expenditure = 300000; // Total pengeluaran
        $pendingTransactions = 120000; // Transaksi pending
        $completedTransactions = 380000; // Transaksi selesai

        // Daftar transaksi pembayaran
        $transactions = [
            ['id' => 1, 'amount' => 100000, 'status' => 'Selesai', 'date' => '2024-12-01'],
            ['id' => 2, 'amount' => 50000, 'status' => 'Pending', 'date' => '2024-12-05'],
            ['id' => 3, 'amount' => 200000, 'status' => 'Selesai', 'date' => '2024-12-07'],
            ['id' => 4, 'amount' => 120000, 'status' => 'Pending', 'date' => '2024-12-10'],
        ];

        return view('dashboard.superadmin.financial-monitoring', compact(
            'revenue', 'expenditure', 'pendingTransactions', 'completedTransactions', 'transactions'
        ));
    }
}

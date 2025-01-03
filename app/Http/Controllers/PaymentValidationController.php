<?php

namespace App\Http\Controllers;
use App\Models\Escrow;
use Illuminate\Http\Request;

class PaymentValidationController extends Controller
{
    public function index()
    {
        $role = 'admin'; // Tentukan role yang sesuai

        if ($role == 'admin') {
            // Ambil data escrow dari database
            $escrows = Escrow::all();  // Atau gunakan query lain sesuai kebutuhan

            // Kirim data escrow ke view untuk ditampilkan
            return view('dashboard.admin.payment.payment-validation', compact('escrows'));
        }

        return abort(403, 'Unauthorized action.');  // Jika role tidak valid
    }
}


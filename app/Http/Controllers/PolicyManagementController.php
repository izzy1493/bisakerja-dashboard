<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyManagementController extends Controller
{
    /**
     * Menampilkan halaman pengelolaan kebijakan.
     */
    public function index()
    {
        $policies = Policy::all();
        return view('dashboard.superadmin.policy-management', compact('policies'));
    }

    /**
     * Menyimpan kebijakan baru ke dalam database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'serviceFee' => 'required|numeric',
            'refundPolicy' => 'required|string',
            'contentRules' => 'required|string',
        ]);

        Policy::create($validatedData);

        return redirect()->route('policy.management')
            ->with('success', 'Kebijakan berhasil disimpan.');
    }
}

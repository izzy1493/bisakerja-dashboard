<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyediaController extends Controller
{
    public function store(Request $request)
    {
        // Logika untuk menyimpan data dari form
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'tenggat_waktu' => 'required|date',
        ]);

        // Simpan data ke database atau lakukan tindakan lain
        return redirect()->back()->with('success', 'Pekerjaan berhasil dipasang!');
    }
}

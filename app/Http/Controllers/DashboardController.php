<?php
namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\JobProposal;
use App\Models\Pekerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        // Redirect based on the user's role
        if ($user->role == 'superadmin') {
            return view('dashboard.superadmin.dashboard');
        } elseif ($user->role == 'admin') {
            return view('dashboard.admin.dashboard');
        }

        // Default redirect for other roles (e.g. regular user)
        return redirect()->route('user.dashboard');
    }
    // Menampilkan halaman Dashboard untuk Admin
    public function admin()
    {
        return view('dashboard.admin.dashboard');  // Halaman untuk Admin
    }

    // Menampilkan halaman Dashboard untuk Super Admin
    public function superadmin()
    {
        return view('dashboard.superadmin.dashboard');  // Halaman untuk Superadmin
    }
    // Menampilkan halaman Pasang Pekerjaan
    public function pasangPekerjaan()
    {
        return view('penyedia.pasang_pekerjaan');
    }

    // Menyimpan pekerjaan yang dipasang
    public function storePekerjaan(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string', // Pastikan deskripsi wajib diisi
            'kategori' => 'required|string',
            'tenggat_waktu' => 'required|date',
        ]);

        // Simpan data ke database
        Pekerjaan::create($validatedData);

        return redirect()->route('penyedia.tinjau')->with('success', 'Pekerjaan berhasil disimpan!');
    }
    // Menampilkan halaman Bayar Fee
    public function bayarFee()
    {
        return view('penyedia.bayar');
    }

    // Menyimpan pembayaran fee
    public function storeBayarFee(Request $request)
    {
        $validatedData = $request->validate([
            'metode_pembayaran' => 'required|string',
        ]);

        // Simpan pembayaran ke database (misal bayar fee di tabel pekerjaan atau transaksi)
        // Simulasikan proses pembayaran di sini

        return redirect()->route('penyedia.tinjau');
    }

    // Menampilkan daftar proposal
    public function tinjauProposal()
    {
        $proposals = JobProposal::all();
        return view('penyedia.tinjau', compact('proposals'));
    }

    // Menampilkan halaman Pilih Pekerja
    public function pilihPekerja($id)
    {
        $proposal = JobProposal::find($id);
        $pekerja = Pekerja::find($proposal->pekerja_id);

        return view('penyedia.pilih', compact('pekerja', 'proposal'));
    }

    // Konfirmasi pekerjaan selesai
    public function konfirmasiSelesai(Request $request)
    {
        $validatedData = $request->validate([
            'ulasan' => 'required|string|max:255',
        ]);

        // Simpan ulasan dan tandai pekerjaan selesai di database
        // Update status pekerjaan selesai
        $pekerjaan = Pekerjaan::find($request->pekerjaan_id);
        $pekerjaan->status = 'selesai';  // Misalnya, ada kolom 'status' di tabel pekerjaan
        $pekerjaan->save();

        return redirect()->route('penyedia.pasang_pekerjaan')->with('status', 'Pekerjaan Selesai');
    }
    

   
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    // Menampilkan daftar admin
    public function index()
    {
        // Mengambil data admin
        $users = User::where('role', 'admin')->orderBy('created_at', 'desc')->get();
        $userCount = $users->count(); // Menghitung jumlah admin

        return view('dashboard.superadmin.adminManagement.index')->with([
            'users' => $users, // Data admin
            'userCount' => $userCount, // Jumlah admin
        ]);
    }

    

    // Menampilkan halaman untuk menambahkan admin baru
    public function create()
    {
        return view('dashboard.superadmin.adminManagement.create'); // View untuk form tambah admin
    }

    // Menampilkan detail admin berdasarkan ID
    public function detail($id)
    {
        $admin = User::where('role', 'admin')->where('id', $id)->firstOrFail(); // Ambil data admin berdasarkan ID

        return view('dashboard.superadmin.adminManagement.detail')->with([
            'admin' => $admin,
        ]);
    }
    
    // Menyimpan admin baru ke database
    public function store(Request $request)
    {
        // Validasi input yang diterima
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:15', // Validasi phone
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Membuat admin baru
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone; // Menambahkan phone
        $admin->password = bcrypt($request->password); // Password di-hash
        $admin->role = 'admin'; // Menetapkan role sebagai admin
        $admin->save(); // Simpan data admin

        // Redirect dengan pesan sukses
        return redirect()->route('admin.management')->with('success', 'Admin berhasil ditambahkan.');
    }

    // Memperbarui data admin
    public function edit(Request $request, $id)
    {
        // Validasi input yang diterima
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // Ignore unique check for current user
            'role' => 'required|string',
            'phone' => 'required|string|max:15', // Validasi phone
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        // Mencari admin berdasarkan ID
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone; // Update phone
        $admin->role = $request->role;

        // Jika password diisi, maka diupdate
        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        // Mengatur status verifikasi jika diperlukan
        $admin->is_verified = $request->has('is_verified') ? 1 : 0;
        $admin->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.management')->with('success', 'Admin berhasil diperbarui.');
    }

    

    // Menghapus admin
    public function destroy($id)
    {
        // Mencari admin berdasarkan ID dan menghapusnya
        $admin = User::findOrFail($id);
        $admin->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.management')->with('success', 'Admin berhasil dihapus.');
    }
}

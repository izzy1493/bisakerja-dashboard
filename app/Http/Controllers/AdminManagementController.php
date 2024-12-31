<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    // Menampilkan daftar admin
    public function index()
    {
        $users = User::where('role', 'admin')->orderBy('created_at', 'desc')->get(); // Mengambil data admin
        $userCount = $users->count(); // Menghitung jumlah admin

        $admins = User::where('role', 'admin')->get();
        $adminCount = $admins->count();

        return view('dashboard.superadmin.adminManagement.index')->with([
            'users' => $users, // Data admin
            'userCount' => $userCount, // Jumlah admin
            'admins' => $admins,
            'adminCount' => $adminCount,
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->role = 'admin'; // Pastikan role diatur sebagai 'admin'
        $admin->save();

        return redirect()->route('admin.management')->with('success', 'Admin berhasil ditambahkan.');
    }

    // Memperbarui data admin
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->role = $request->role;

        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        $admin->is_verified = $request->has('is_verified') ? 1 : 0;
        $admin->save();

        return redirect()->route('admin.management')->with('success', 'Admin berhasil diperbarui.');
    }
}

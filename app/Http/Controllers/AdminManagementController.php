<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function index()
    {

        return view('dashboard.superadmin.adminManagement.index');
    }

    public function create()
    {
        return view('dashboard.superadmin.adminManagement.create'); // view untuk form tambah admin
    }

    public function store(Request $request)
    {
        // Validasi data form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Proses menyimpan data admin baru (misalnya menggunakan model User)
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect()->route('admin.management')->with('success', 'Admin berhasil ditambahkan');
    }
}

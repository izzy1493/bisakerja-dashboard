<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->get(); // Mengambil data user dengan role 'admin'
        $userCount = $users->count(); // Menghitung jumlah user dengan role 'admin'
        $users = User::where('role', 'admin')->orderBy('created_at', 'desc')->get(); // Mengambil data user dengan role 'admin', diurutkan berdasarkan created_at
        $userCount = $users->count(); // Menghitung jumlah user dengan role 'admin'
        $admins = User::where('role', 'admin')->get();
        $adminCount = $admins->count();
        
        return view('dashboard.superadmin.adminManagement.index')->with([
            'users' => $users, // Data user dengan role 'admin'
            'userCount' => $userCount, // Jumlah user dengan role 'admin'
            'users' => $users, // Data user dengan role 'admin' yang dibuat pada tanggal tertentu
             'userCount' => $userCount, // Jumlah user yang sesuai
             'admins' => $admins,
             'adminCount' => $adminCount,
        ]);
    
    }

    public function create()
    {

              return view('dashboard.superadmin.adminManagement.create'); // view untuk form tambah admin
    }

    public function detail($id)
    {
        // Check if the user has the 'admin' role
        // Ambil data pengguna dengan role 'admin' dan ID tertentu
    $admin = User::where('role', 'admin')->where('id', $id)->firstOrFail();

    // Kirim data ke view
    return view('dashboard.superadmin.adminManagement.detail')->with([
        'admin' => $admin,
    ]);
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

<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function index()
    {
        $role = 'admin'; // Tentukan role yang sesuai

        if ($role == 'admin') {
            $jobs = Job::with('applications.seeker')->get();
            $users = User::whereIn('role', ['pencari', 'penyedia'])->get();

            return view('dashboard.admin.operation.operations', compact('jobs', 'users'));
        }

        return abort(403, 'Unauthorized action.');
    }

    // Method untuk menampilkan form edit
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('dashboard.admin.operation.edit', compact('job'));
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.operations')->with('success', 'Data pekerjaan berhasil dihapus.');
    }

    public function activateUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'active';
        $user->save();

        return redirect()->route('admin.operations')->with('success', 'Pengguna berhasil diaktifkan.');
    }

    public function deactivateUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'inactive';
        $user->save();

        return redirect()->route('admin.operations')->with('success', 'Pengguna berhasil dinonaktifkan.');
    }



    // Method untuk menyimpan perubahan data
    public function updateStatus(Request $request, $jobId)
    {
        $job = Job::findOrFail($jobId);
    
        // Validasi dan perbarui status pekerjaan
        $job->status = $request->input('status');
        $job->save();
    
        return redirect()->back()->with('success', 'Status pekerjaan berhasil diperbarui');
    }
}

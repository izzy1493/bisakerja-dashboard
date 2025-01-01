<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class PencariController extends Controller
{
public function show($id)
    {
        // Mencari pekerjaan berdasarkan ID
        $job = Job::findOrFail($id);

        // Mengirim data pekerjaan ke view
        return view('dashboard.pencari.show', compact('job'));
    }
}
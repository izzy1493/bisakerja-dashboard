<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    // Menampilkan daftar pekerjaan, dengan filter berdasarkan kategori (jika ada)
    public function index(Request $request)
    {
        // Data pekerjaan dengan kategori
        $jobs = [
            [
                'title' => 'Desain Grafis',
                'description' => 'Buat desain untuk kampanye pemasaran produk baru.',
                'reward' => 50,
                'category' => 'Design',
            ],
            [
                'title' => 'Penulisan Konten',
                'description' => 'Tulis artikel tentang teknologi terbaru di dunia.',
                'reward' => 30,
                'category' => 'Writing',
            ],
            [
                'title' => 'Penerjemah Bahasa',
                'description' => 'Terjemahkan dokumen dari bahasa Inggris ke bahasa Indonesia.',
                'reward' => 40,
                'category' => 'Translation',
            ],
            [
                'title' => 'Pengembang Web',
                'description' => 'Bangun situs web untuk klien dari berbagai industri.',
                'reward' => 60,
                'category' => 'Development',
            ],
            [
                'title' => 'Pemasaran Digital',
                'description' => 'Tingkatkan penjualan dengan strategi digital marketing.',
                'reward' => 45,
                'category' => 'Marketing',
            ],
        ];

        // Jika ada filter kategori di query string, filter pekerjaan
        if ($request->has('category')) {
            $category = $request->category;
            // Filter pekerjaan berdasarkan kategori
            $jobs = array_filter($jobs, function ($job) use ($category) {
                return $job['category'] === $category;
            });
        }

        // Kirim data pekerjaan yang sudah difilter atau semua pekerjaan ke view
        return view('jobs.index', compact('jobs'));
    }

    // Menampilkan detail pekerjaan berdasarkan ID
    public function show($id)
    {
        // Data pekerjaan dummy
        $jobs = [
            1 => [
                'title' => 'Desain Grafis',
                'description' => 'Buat desain untuk kampanye pemasaran produk baru.',
                'reward' => 50,
            ],
            2 => [
                'title' => 'Penulisan Konten',
                'description' => 'Tulis artikel tentang teknologi terbaru di dunia.',
                'reward' => 30,
            ],
            3 => [
                'title' => 'Penerjemah Bahasa',
                'description' => 'Terjemahkan dokumen dari bahasa Inggris ke bahasa Indonesia.',
                'reward' => 40,
            ],
        ];

        // Pastikan ID yang diterima valid
        if (!array_key_exists($id, $jobs)) {
            abort(404); // Jika pekerjaan tidak ditemukan, tampilkan 404
        }

        // Ambil pekerjaan berdasarkan ID
        $job = $jobs[$id];

        return view('jobs.show', compact('job'));
    }
}

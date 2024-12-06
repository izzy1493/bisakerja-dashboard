<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    // Menampilkan daftar pekerjaan, dengan filter berdasarkan kategori (jika ada)
    public function index(Request $request)
    {
        // Data pekerjaan dengan kategori dan persyaratan
        $jobs = [
            [
                'id' => 1,
                'title' => 'Desain Grafis',
                'description' => 'Buat desain untuk kampanye pemasaran produk baru.',
                'reward' => 50,
                'category' => 'Design',
                'requirements' => [
                    'Pengalaman minimal 2 tahun di bidang desain grafis',
                    'Menguasai Adobe Photoshop, Illustrator, dan InDesign',
                    'Mampu bekerja dengan tenggat waktu yang ketat',
                    'Memiliki portofolio yang kuat dan beragam'
                ],
            ],
            [
                'id' => 2,
                'title' => 'Penulisan Konten',
                'description' => 'Tulis artikel tentang teknologi terbaru di dunia.',
                'reward' => 30,
                'category' => 'Writing',
                'requirements' => [
                    'Pengalaman menulis artikel SEO-friendly',
                    'Kemampuan riset yang kuat',
                    'Memiliki portofolio artikel atau blog',
                    'Mampu menulis dalam bahasa Indonesia dan Inggris'
                ],
            ],
            [
                'id' => 3,
                'title' => 'Penerjemah Bahasa',
                'description' => 'Terjemahkan dokumen dari bahasa Inggris ke bahasa Indonesia.',
                'reward' => 40,
                'category' => 'Translation',
                'requirements' => [
                    'Menguasai bahasa Inggris dan Indonesia dengan baik',
                    'Pengalaman minimal 1 tahun sebagai penerjemah',
                    'Memiliki kemampuan untuk menerjemahkan dokumen teknis',
                    'Memiliki sertifikasi penerjemah (lebih disukai)'
                ],
            ],
            [
                'id' => 4,
                'title' => 'Pengembang Web',
                'description' => 'Bangun situs web untuk klien dari berbagai industri.',
                'reward' => 60,
                'category' => 'Development',
                'requirements' => [
                    'Pengalaman 2+ tahun dalam pengembangan web',
                    'Menguasai HTML, CSS, JavaScript, dan framework seperti React atau Vue',
                    'Kemampuan untuk membangun website responsif dan user-friendly',
                    'Pengalaman dalam menggunakan API dan database (MySQL, MongoDB, dll.)'
                ],
            ],
            [
                'id' => 5,
                'title' => 'Pemasaran Digital',
                'description' => 'Tingkatkan penjualan dengan strategi digital marketing.',
                'reward' => 45,
                'category' => 'Marketing',
                'requirements' => [
                    'Pengalaman minimal 3 tahun di bidang pemasaran digital',
                    'Kemampuan analisis data dan pengelolaan kampanye media sosial',
                    'Memahami SEO, Google Ads, dan alat analitik lainnya',
                    'Kemampuan untuk memimpin tim dan bekerja dengan anggaran pemasaran'
                ],
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
        // Data pekerjaan dengan detail lengkap (termasuk persyaratan)
        $jobs = [
            1 => [
                'title' => 'Desain Grafis',
                'description' => 'Buat desain untuk kampanye pemasaran produk baru, termasuk logo dan materi promosi lainnya.',
                'reward' => 50,
                'company' => 'Perusahaan A',
                'location' => 'Jakarta, Indonesia',
                'category' => 'Design',
                'requirements' => [
                    'Pengalaman minimal 2 tahun di bidang desain grafis',
                    'Menguasai Adobe Photoshop, Illustrator, dan InDesign',
                    'Mampu bekerja dengan tenggat waktu yang ketat',
                    'Memiliki portofolio yang kuat dan beragam'
                ]
            ],
            2 => [
                'title' => 'Penulisan Konten',
                'description' => 'Tulis artikel tentang teknologi terbaru, termasuk penelitian mendalam tentang tren terbaru.',
                'reward' => 30,
                'company' => 'Perusahaan B',
                'location' => 'Bandung, Indonesia',
                'category' => 'Writing',
                'requirements' => [
                    'Pengalaman menulis artikel SEO-friendly',
                    'Kemampuan riset yang kuat',
                    'Memiliki portofolio artikel atau blog',
                    'Mampu menulis dalam bahasa Indonesia dan Inggris'
                ]
            ],
            3 => [
                'title' => 'Penerjemah Bahasa',
                'description' => 'Terjemahkan dokumen teknis dari bahasa Inggris ke bahasa Indonesia dengan ketelitian tinggi.',
                'reward' => 40,
                'company' => 'Perusahaan C',
                'location' => 'Surabaya, Indonesia',
                'category' => 'Translation',
                'requirements' => [
                    'Menguasai bahasa Inggris dan Indonesia dengan baik',
                    'Pengalaman minimal 1 tahun sebagai penerjemah',
                    'Memiliki kemampuan untuk menerjemahkan dokumen teknis',
                    'Memiliki sertifikasi penerjemah (lebih disukai)'
                ]
            ],
            4 => [
                'title' => 'Pengembang Web',
                'description' => 'Bangun situs web untuk klien dari berbagai industri, termasuk desain dan pengembangan backend.',
                'reward' => 60,
                'company' => 'Perusahaan D',
                'location' => 'Yogyakarta, Indonesia',
                'category' => 'Development',
                'requirements' => [
                    'Pengalaman 2+ tahun dalam pengembangan web',
                    'Menguasai HTML, CSS, JavaScript, dan framework seperti React atau Vue',
                    'Kemampuan untuk membangun website responsif dan user-friendly',
                    'Pengalaman dalam menggunakan API dan database (MySQL, MongoDB, dll.)'
                ]
            ],
            5 => [
                'title' => 'Pemasaran Digital',
                'description' => 'Buat dan implementasikan kampanye pemasaran digital untuk meningkatkan brand awareness dan penjualan.',
                'reward' => 45,
                'company' => 'Perusahaan E',
                'location' => 'Medan, Indonesia',
                'category' => 'Marketing',
                'requirements' => [
                    'Pengalaman minimal 3 tahun di bidang pemasaran digital',
                    'Kemampuan analisis data dan pengelolaan kampanye media sosial',
                    'Memahami SEO, Google Ads, dan alat analitik lainnya',
                    'Kemampuan untuk memimpin tim dan bekerja dengan anggaran pemasaran'
                ]
            ]
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

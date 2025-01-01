<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    protected $jobs; // Properti kelas untuk menyimpan data pekerjaan

    public function __construct()
    {
        // Inisialisasi data pekerjaan dalam konstruktor
        $this->jobs = [
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
    }

    public function page(){
        switch (Auth::user()->role) {
                case 'superadmin':
                    return view('dashboard.superadmin.dashboard');
                case 'admin':
                    return view('dashboard.admin.dashboard');
                case 'penyedia':
                    return view('dashboard.penyedia.index ');
                case 'pencari':
                    return view('dashboard.pencari.dashboard');
                default:
                    return redirect()->route('login')->with('error', 'Role tidak dikenal.');
            }
    }

    // Menampilkan daftar pekerjaan, dengan filter berdasarkan kategori (jika ada)
    public function index(Request $request)
    {
        // dd();
        // Jika ada filter kategori di query string, filter pekerjaan
        if ($request->has('category')) {
            $category = $request->category;
            // Filter pekerjaan berdasarkan kategori
            $jobs = array_filter($this->jobs, function ($job) use ($category) {
                return $job['category'] === $category;
            });
        } else {
            $jobs = $this->jobs;
        }

        // Kirim data pekerjaan yang sudah difilter atau semua pekerjaan ke view
        return view('landing.lowonganPekerjaan', compact('jobs'));
    }

    public function pencariKerja()
    {
        // Kirim data pekerjaan ke view
        return view('landing.pencari', ['jobs' => $this->jobs]);
    }

    public function penyediaKerja()
    {
        // Kirim data pekerjaan ke view
        return view('landing.penyedia', ['jobs' => $this->jobs]);
    }

    // Menampilkan detail pekerjaan berdasarkan ID
    public function show($id)
    {
        // Cari pekerjaan berdasarkan ID
        $job = collect($this->jobs)->firstWhere('id', $id);

        // Pastikan pekerjaan ditemukan
        if (!$job) {
            abort(404); // Jika pekerjaan tidak ditemukan, tampilkan 404
        }

        // Kirim data pekerjaan ke view
        return view('jobs.show', compact('job'));
    }
}

@extends('layouts.pencari.app') <!-- Menggunakan layout utama -->

@section('title', 'Daftar Pekerjaan - JobConnect') <!-- Judul halaman -->

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white py-20 px-6 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-transparent to-black/30 z-10"></div>
        <div class="relative z-20">
            <h1 class="text-5xl font-extrabold leading-tight sm:text-6xl md:text-7xl tracking-tight drop-shadow-lg">
                Temukan Pekerjaan Impian Anda
            </h1>
            <p class="mt-4 text-lg sm:text-xl max-w-2xl mx-auto text-white/90 drop-shadow-md">
                Jelajahi berbagai peluang kerja sesuai minat dan keterampilan Anda dengan mudah.
            </p>
        </div>
        <!-- SVG Wave Effect -->
        <svg class="absolute bottom-0 w-full text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f4f5" fill-opacity="0.95" d="M0,288L0,64L55.4,64L55.4,96L110.8,96L110.8,192L166.2,192L166.2,160L221.5,160L221.5,96L276.9,96L276.9,96L332.3,96L332.3,96L387.7,96L387.7,288L443.1,288L443.1,32L498.5,32L498.5,256L553.8,256L553.8,192L609.2,192L609.2,288L664.6,288L664.6,64L720,64L720,256L775.4,256L775.4,64L830.8,64L830.8,128L886.2,128L886.2,96L941.5,96L941.5,224L996.9,224L996.9,64L1052.3,64L1052.3,192L1107.7,192L1107.7,224L1163.1,224L1163.1,96L1218.5,96L1218.5,128L1273.8,128L1273.8,96L1329.2,96L1329.2,320L1384.6,320L1384.6,224L1440,224L1440,0L1384.6,0L1384.6,0L1329.2,0L1329.2,0L1273.8,0L1273.8,0L1218.5,0L1218.5,0L1163.1,0L1163.1,0L1107.7,0L1107.7,0L1052.3,0L1052.3,0L996.9,0L996.9,0L941.5,0L941.5,0L886.2,0L886.2,0L830.8,0L830.8,0L775.4,0L775.4,0L720,0L720,0L664.6,0L664.6,0L609.2,0L609.2,0L553.8,0L553.8,0L498.5,0L498.5,0L443.1,0L443.1,0L387.7,0L387.7,0L332.3,0L332.3,0L276.9,0L276.9,0L221.5,0L221.5,0L166.2,0L166.2,0L110.8,0L110.8,0L55.4,0L55.4,0L0,0L0,0Z"></path>
        </svg>
    </section>

    <!-- Daftar Pekerjaan -->
    <section class="container mx-auto py-16 px-4">
        <!-- Header dan Pencarian -->
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Daftar Pekerjaan Tersedia</h2>
            <div class="flex space-x-4 items-center">
                <input 
                    type="text" 
                    placeholder="Cari pekerjaan..." 
                    class="w-full sm:w-96 px-4 py-2 rounded-full border border-gray-300 shadow-md focus:ring-2 focus:ring-cyan-500 focus:outline-none"
                >
                <button class="bg-cyan-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-cyan-700 transition-all">
                    Cari
                </button>
            </div>
        </div>

        <!-- Grid Pekerjaan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($jobs as $job)
                <a href="{{ route('pencari.show', $job->job_id) }}" class="group bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-all relative">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://via.placeholder.com/50" alt="Logo Perusahaan" class="w-14 h-14 rounded-full mr-4 border border-gray-300 shadow-sm">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">{{ $job->title }}</h3>
                                <p class="text-sm text-gray-500">Lokasi: <span class="font-semibold text-gray-700">{{ $job->location }}</span></p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500">Gaji: <span class="font-bold text-gray-700">Rp {{ number_format($job->wage, 0, ',', '.') }}/bulan</span></p>
                    </div>

                    <!-- Border Animasi -->
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-cyan-500 transition-all"></div>
                </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 text-center">
            {{ $jobs->links() }} <!-- Menampilkan pagination -->
        </div>
    </section>
@endsection

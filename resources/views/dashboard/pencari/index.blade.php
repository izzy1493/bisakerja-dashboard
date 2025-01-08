@extends('layouts.pencari.app')

@section('title', 'Daftar Pekerjaan - JobConnect')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100 text-gray-800 py-20 px-6">
    <div class="max-w-7xl mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="text-5xl font-bold leading-tight sm:text-6xl">
            <span class="block">Temukan</span>
            <span class="block text-gray-900">Pekerjaan Impian Anda</span>
        </h1>
        <p class="mt-4 text-lg sm:text-xl max-w-2xl mx-auto text-gray-700 leading-relaxed">
            Jelajahi peluang karier terbaik yang dirancang khusus untuk keahlian Anda. Wujudkan impian Anda hari ini.
        </p>
        <div class="mt-6 flex justify-center space-x-4">
            <a href="#jobs" class="bg-black text-white px-6 py-3 rounded-lg shadow-md hover:bg-gray-800 transition transform hover:scale-105">
                Lihat Pekerjaan
            </a>
            <a href="#search" class="bg-gray-100 text-gray-800 px-6 py-3 rounded-lg shadow-md hover:bg-gray-200 transition transform hover:scale-105">
                Cari Pekerjaan
            </a>
        </div>
    </div>
</section>

<!-- Daftar Pekerjaan -->
<section id="jobs" class="container mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center" data-aos="zoom-in" data-aos-duration="1000">Pekerjaan untuk Anda</h2>

    <!-- Grid Card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($jobs as $job)
        <div class="bg-white rounded-xl shadow-md p-6 relative hover:shadow-lg transition transform hover:scale-105" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}" data-aos-duration="800">
            <!-- Tanggal -->
            <div class="absolute top-4 right-4 bg-gray-100 text-gray-600 text-xs font-medium px-3 py-1 rounded-full">
                {{ \Carbon\Carbon::parse($job->created_at)->format('d M, Y') }}
            </div>

            <!-- Logo Perusahaan -->
            <div class="flex items-center mb-4">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 font-bold mr-4">
                    {{ strtoupper(substr($job->company_name, 0, 1)) }}
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">{{ $job->company_name }}</h3>
                    <p class="text-sm text-gray-500">{{ $job->title }}</p>
                </div>
            </div>

            <!-- Tag Informasi -->
            <div class="flex flex-wrap gap-2 mb-4">
                @foreach (explode(',', $job->tags) as $tag)
                <span class="text-xs font-medium bg-gray-100 text-gray-600 px-3 py-1 rounded-full">
                    {{ $tag }}
                </span>
                @endforeach
            </div>

            <!-- Gaji dan Lokasi -->
            <div class="text-sm text-gray-500 mb-4">
                <p><strong class="text-gray-800">Rp{{ number_format($job->wage, 0, ',', '.') }}/bulan</strong></p>
                <p>{{ $job->location }}</p>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between items-center">
                <a href="{{ route('pencari.show', $job->job_id) }}" class="bg-black text-white text-sm font-medium px-4 py-2 rounded-lg shadow-md hover:bg-gray-800 transition transform hover:scale-105">
                    Details
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12 text-center" data-aos="fade-up" data-aos-duration="1000">
        {{ $jobs->links() }}
    </div>
</section>
@endsection

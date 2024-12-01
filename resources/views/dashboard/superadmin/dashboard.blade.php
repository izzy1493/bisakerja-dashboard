@extends('layouts.superadmin.app')

@section('content')
    
    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold">Temukan Pekerjaan Impian Anda</h1>
            <p class="mt-2">Bergabunglah dengan ribuan pencari kerja dan perusahaan.</p>
            <a href="#jobs" class="mt-4 inline-block bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-200">Cari Pekerjaan</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container mx-auto px-4 py-10" id="features">
        <h2 class="text-2xl font-bold text-center">Fitur Kami</h2>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-semibold text-lg">Pencarian Mudah</h3>
                <p class="mt-2">Cari pekerjaan berdasarkan kategori, lokasi, dan gaji.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-semibold text-lg">Profil Profesional</h3>
                <p class="mt-2">Buat profil profesional yang menarik untuk menarik perhatian perusahaan.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-semibold text-lg">Notifikasi Lowongan</h3>
                <p class="mt-2">Dapatkan notifikasi lowongan pekerjaan terbaru sesuai minat Anda.</p>
            </div>
        </div>
    </section>

    <!-- Job Listings Section -->
    <section class="container mx-auto px-4 py-10" id="jobs">
        <h2 class="text-2xl font-bold text-center">Lowongan Pekerjaan Terbaru</h2>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-semibold">Frontend Developer</h3>
                <p>Perusahaan XYZ</p>
                <p>Lokasi: Jakarta</p>
                <a href="#" class="text-blue-600 hover:underline">Lihat Detail</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-semibold">Backend Developer</h3>
                <p>Perusahaan ABC</p>
                <p>Lokasi: Bandung</p>
                <a href="#" class="text-blue-600 hover:underline">Lihat Detail</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-semibold">UI/UX Designer</h3>
                <p>Perusahaan DEF</p>
                <p>Lokasi: Surabaya</p>
                <a href="#" class="text-blue-600 hover:underline">Lihat Detail</a>
            </div>
        </div>
        <div class="mt-6 text-center">
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Semua Lowongan</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-200 py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center">Apa Kata Mereka</h2>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <p>"Apate apate
@endsection

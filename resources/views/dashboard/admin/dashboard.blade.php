@extends('layouts.admin.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto mt-8 space-y-8">
        <!-- Heading with Image and Animation -->
        <div class="bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold text-white mb-2 animate__animated animate__fadeInUp">Admin Dashboard</h1>
                    <p class="text-lg text-gray-200 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                        Selamat datang di dashboard admin. Di sini Anda dapat memantau status dan mengelola berbagai fitur platform.
                    </p>
                </div>
                <!-- Example Illustration or Icon -->
                <img src="https://via.placeholder.com/150" alt="Admin Icon" class="w-32 h-32 rounded-full shadow-lg animate__animated animate__fadeInUp animate__delay-2s">
            </div>
        </div>
        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Job Moderation Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-semibold text-gray-700">Moderasi Pekerjaan</h3>
                <p class="text-gray-500 mt-2">Pantau pekerjaan yang sedang diajukan dan moderasi sesuai dengan kebijakan.</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-3xl font-bold text-blue-600">23</span> <!-- Example number of jobs pending -->
                    <a href="{{ route('admin.jobs') }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                </div>
            </div>

            <!-- Verifikasi Pengguna Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-semibold text-gray-700">Verifikasi Pengguna</h3>
                <p class="text-gray-500 mt-2">Verifikasi data pengguna yang mengajukan identitas untuk memastikan keamanan platform.</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-3xl font-bold text-blue-600">12</span> <!-- Example number of users pending verification -->
                    <a href="{{ route('admin.users') }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                </div>
            </div>

            <!-- Report Handling Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-semibold text-gray-700">Penanganan Laporan</h3>
                <p class="text-gray-500 mt-2">Tangani laporan konflik antara penyedia kerja dan pencari kerja dengan bijaksana.</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-3xl font-bold text-blue-600">5</span> <!-- Example number of unresolved reports -->
                    <a href="{{ route('admin.reports') }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                </div>
            </div>

            <!-- Payment Validation Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-semibold text-gray-700">Validasi Pembayaran</h3>
                <p class="text-gray-500 mt-2">Verifikasi pembayaran yang dilakukan oleh penyedia kerja untuk pekerjaan yang selesai.</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-3xl font-bold text-blue-600">8</span> <!-- Example number of payments pending validation -->
                    <a href="{{ route('admin.payments') }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                </div>
            </div>

            <!-- Operations Management Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-semibold text-gray-700">Pengelolaan Data Operasional</h3>
                <p class="text-gray-500 mt-2">Kelola data operasional dan pastikan semua tugas administratif berjalan dengan lancar.</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="text-3xl font-bold text-blue-600">15</span> <!-- Example number of operational tasks -->
                    <a href="{{ route('admin.operations') }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                </div>
            </div>

        </div>

        <!-- Additional Info / Statistics (Optional) -->
        <div class="bg-white p-6 rounded-lg shadow-lg mt-8">
            <h3 class="text-xl font-semibold text-gray-700">Statistik</h3>
            <p class="text-gray-500 mt-2">Ringkasan statistik terkait platform, pekerjaan, dan pengguna.</p>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-blue-600 text-white p-4 rounded-lg shadow-lg">
                    <p class="text-lg font-semibold">Total Pekerjaan</p>
                    <h4 class="text-2xl font-bold">120</h4>
                </div>
                <div class="bg-green-600 text-white p-4 rounded-lg shadow-lg">
                    <p class="text-lg font-semibold">Pengguna Terverifikasi</p>
                    <h4 class="text-2xl font-bold">98</h4>
                </div>
                <div class="bg-yellow-600 text-white p-4 rounded-lg shadow-lg">
                    <p class="text-lg font-semibold">Laporan Selesai</p>
                    <h4 class="text-2xl font-bold">30</h4>
                </div>
                <div class="bg-red-600 text-white p-4 rounded-lg shadow-lg">
                    <p class="text-lg font-semibold">Pembayaran Terverifikasi</p>
                    <h4 class="text-2xl font-bold">45</h4>
                </div>
            </div>
        </div>
    </div>
@endsection

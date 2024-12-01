@extends('layouts.main')

@section('content')
<header class="bg-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Text Section -->
            <div class="text-center md:text-left md:w-1/2">
                <h1 class="text-4xl font-extrabold text-orange-600 leading-tight">
                    Bergabunglah dengan Kami<br>
                    Solusi Untuk Anda Mendapatkan Pekerjaan
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Temukan pekerjaan terbaik dan jadilah bagian dari mitra kami.
                </p>
                <div class="mt-6">
                    <a href="#" class="px-6 py-3 bg-orange-600 text-white rounded-md shadow hover:bg-orange-700">
                        Daftar Mitra
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="mt-8 md:mt-0 md:w-1/2 flex justify-center">
                <img src="https://via.placeholder.com/300x400" alt="Mitra Kerja" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</header>
@endsection

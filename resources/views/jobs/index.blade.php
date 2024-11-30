@extends('layouts.app')

@section('content')
    <!-- Landing Page Section -->
    <section class="bg-gradient-to-r from-indigo-500 to-blue-600 py-16 text-white text-center">
        <h1 class="text-5xl font-extrabold mb-4">
            Temukan Pekerjaan Impian Anda
        </h1>
        <p class="text-lg md:text-xl max-w-3xl mx-auto mb-6">
            Jelajahi ribuan lowongan pekerjaan yang tersedia dan temukan pekerjaan yang sesuai dengan minat serta keahlian Anda.
        </p>
        <a href="{{ url('/jobs') }}" class="px-8 py-3 bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition duration-300 transform hover:scale-105">
            Cari Pekerjaan
        </a>
    </section>

    <!-- Daftar Pekerjaan -->
    <section class="py-16">
        <h2 class="text-3xl font-semibold text-gray-800 text-center mb-8">
            Pekerjaan Terbaru
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto px-4">
            @foreach ($jobs as $job)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 transform hover:scale-105">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $job['title'] }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($job['description'], 100) }}</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-blue-600 font-semibold">${{ $job['reward'] }}</span>
                            <a href="{{ route('jobs.show', $job['id']) }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

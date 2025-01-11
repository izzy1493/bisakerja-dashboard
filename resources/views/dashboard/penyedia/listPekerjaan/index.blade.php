@extends('layouts.penyedia.app')

@section('content')

    <body class="bg-gray-100 font-sans antialiased h-screen flex flex-col">

        <!-- Hero Section -->
        <section class="relative bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 text-white flex-grow">
            <img alt="Background image of a professional office environment"
                class="absolute inset-0 w-full h-full object-cover opacity-20" height="1080"
                src="https://kerjain.org/wp-content/uploads/2023/03/pexels-ron-lach-8085932-1024x683.jpg" width="1920" />
            <div class="relative z-10 max-w-screen-xl mx-auto text-center py-20">
                <h1 class="text-5xl font-extrabold mb-4 animate__animated animate__fadeInUp">Daftar Lowongan Pekerjaan</h1>
                <p class="text-lg mb-8 animate__animated animate__fadeInUp animate__delay-1s">Temukan lowongan pekerjaan yang
                    sesuai dengan keahlian Anda.</p>
            </div>
        </section>

        <!-- Daftar Lowongan Pekerjaan Section -->
        <div class="relative w-full p-4 flex-grow bg-gray-100">
            <div class="relative bg-gray-100 bg-opacity-90 shadow-lg rounded-lg p-6 z-10">
                @if ($jobs->isEmpty())
                    <p class="text-gray-500 text-center text-lg">Belum ada lowongan pekerjaan yang dipasang.</p>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($jobs as $job)
                            <div
                                class="p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-lg">
                                <h2 class="text-xl font-bold text-blue-600 mb-2">{{ $job->title }}</h2>
                                <p class="text-gray-700 mb-4">{{ Str::limit($job->description, 100) }}</p>

                                <div class="flex justify-between items-center text-sm text-gray-500 mb-2">
                                    <span class="font-medium">Kategori: <span
                                            class="text-blue-600">{{ $job->status }}</span></span>
                                    <span class="font-medium">Tenggat: <span
                                            class="text-blue-600">{{ $job->duration }}</span></span>
                                </div>

                                <div class="text-sm text-gray-500 mb-2">
                                    <span class="font-medium">Lokasi: <span
                                            class="text-blue-600">{{ $job->location }}</span></span>
                                </div>
                                <div class="text-sm text-gray-500 mb-2">
                                    <span class="font-medium">Persyaratan: <span
                                            class="text-blue-600">{{ $job->requirements }}</span></span>
                                </div>
                                <div class="text-sm text-gray-500 mb-4">
                                    <span class="font-medium">Gaji: <span class="text-blue-600">Rp
                                            {{ number_format($job->wage, 0, ',', '.') }}</span></span>
                                </div>

                                <div class="mt-4">
                                    <a href="{{ route('list-pekerjaan', $job->id) }}"
                                        class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Footer Section -->
        <footer class="bg-black text-white py-6">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} BisaKerja.org</p>
            </div>
        </footer>

        <style>
            @media (max-width: 640px) {
                h1 {
                    font-size: 2.5rem;
                    /* Ukuran font untuk perangkat kecil */
                }

                .bg-gradient-to-r {
                    background-size: 200% 200%;
                    /* Efek gradien responsif */
                }
            }
        </style>
    </body>
@endsection

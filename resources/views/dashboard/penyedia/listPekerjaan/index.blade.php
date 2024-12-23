@extends('layouts.penyedia.app')

@section('content')
<body class="bg-gradient-to-br from-blue-500 to-purple-100 font-sans antialiased">

    <!-- Hero Section -->
    <section class="relative bg-gray-800 text-white py-20 px-6">
        <img alt="Background image of a professional office environment" class="absolute inset-0 w-full h-full object-cover opacity-30" height="1080" src="https://storage.googleapis.com/a1aa/image/uFDXEy8HEqJdCBGzgTAG9iTVQsxzop7PKeqph6OCqo612B9JA.jpg" width="1920"/>
        <div class="max-w-screen-xl mx-auto text-center">
            <h1 class="text-5xl font-extrabold mb-4">Daftar Lowongan Pekerjaan</h1>
            <p class="text-lg mb-8">Temukan lowongan pekerjaan yang sesuai dengan keahlian Anda.</p>
        </div>
    </section>

    <!-- Daftar Lowongan Pekerjaan Section -->
    <div class="relative max-w-4xl mx-auto mt-16 p-4">
        <div class="relative bg-white shadow-lg rounded-lg p-6 z-10">
            @if($jobs->isEmpty())
                <p class="text-gray-500 text-center">Belum ada lowongan pekerjaan yang dipasang.</p>
            @else
                <div class="space-y-6">
                    @foreach($jobs as $job)
                        <div class="p-6 bg-gradient-to-r from-blue-100 to-purple-100 rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-lg">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $job->judul }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($job->deskripsi, 100) }}</p>

                            <div class="flex justify-between items-center text-sm text-gray-600">
                                <span class="font-medium">Kategori: <span class="text-blue-600">{{ $job->kategori }}</span></span>
                                <span class="font-medium">Tenggat: <span class="text-red-600">{{ \Carbon\Carbon::parse($job->tenggat_waktu)->format('d M Y') }}</span></span>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('list-pekerjaan', $job->id) }}" class="inline-block bg-gradient-to-r from-purple-600 to-blue-500 text-white px-4 py-2 rounded-lg hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 transition transform hover:scale-105">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <style>
        @media (max-width: 640px) {
            h1 {
                font-size: 2.5rem; /* Ukuran font untuk perangkat kecil */
            }
            .bg-gradient-to-r {
                background-size: 200% 200%; /* Efek gradien responsif */
            }
        }
    </style>
</body>
@endsection
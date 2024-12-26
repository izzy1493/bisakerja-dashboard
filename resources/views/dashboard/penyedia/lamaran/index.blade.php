@extends('layouts.penyedia.app')

@section('content')
<body class="bg-gradient-to-br from-blue-50 to-purple-100 font-sans antialiased">

    <!-- Hero Section -->
    <section class="relative bg-gray-800 text-white py-20 px-6">
        <img alt="Background image of a professional office environment" class="absolute inset-0 w-full h-full object-cover opacity-30" height="1080" src="https://images.unsplash.com/photo-1514894780887-121968d00567?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="1920"/>
        <div class="relative z-10 max-w-screen-xl mx-auto text-center">
            <h1 class="text-5xl font-extrabold mb-4">Daftar Lamaran Pekerjaan</h1>
            <p class="text-lg mb-8">Lihat semua lamaran yang telah diterima dan statusnya.</p>
        </div>
    </section>

    <!-- Daftar Lamaran Pekerjaan Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-screen-xl mx-auto bg-white bg-opacity-80 rounded-lg p-6">
            @if($jobApplications->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach($jobApplications as $jobApplication)
                        <div class="p-6 bg-gradient-to-r from-blue-100 to-purple-100 rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-lg">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">Pelamar: {{ $jobApplication->seeker->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ $jobApplication->job->description }}</p>

                            <div class="text-sm text-gray-600">
                                <span class="font-medium">Status: 
                                    <span class="text-{{ $jobApplication->status == 'Accepted' ? 'green-500' : ($jobApplication->status == 'Rejected' ? 'red-500' : 'yellow-500') }}">
                                        {{ $jobApplication->status }}
                                    </span>
                                </span>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('list-lamaran', $jobApplication->id) }}" class="inline-block bg-gradient-to-r from-purple-600 to-blue-500 text-white px-4 py-2 rounded-lg hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 transition">
                                    Lihat Detail Lamaran
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-600">Tidak ada lamaran pekerjaan yang ditemukan.</p>
            @endif
        </div>
    </section>
</body>
@endsection
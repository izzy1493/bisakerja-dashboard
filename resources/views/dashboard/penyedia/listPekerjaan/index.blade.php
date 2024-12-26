@extends('layouts.penyedia.app')

@section('content')
<body class="bg-gradient-to-br from-blue-50 to-purple-100 font-sans antialiased">

    <div class="max-w-4xl mx-auto mt-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Daftar Lowongan Pekerjaan</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            @if($jobs->isEmpty())
                <p class="text-gray-500 text-center">Belum ada lowongan pekerjaan yang dipasang.</p>
            @else
                <div class="space-y-6">
                    @foreach($jobs as $job)
                        <div class="p-6 bg-gradient-to-r from-blue-100 to-purple-100 rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-lg">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $job->judul }}</h2>
                            <p class="text-gray-600 mb-4">{{ $job->deskripsi }}</p>

                            <div class="flex justify-between items-center text-sm text-gray-600">
                                <span class="font-medium">Kategori: {{ $job->kategori }}</span>
                                <span class="font-medium">Tenggat: {{ \Carbon\Carbon::parse($job->tenggat_waktu)->format('d M Y') }}</span>
                            </div>

                            <div class="mt-4">
                                <a href="" class="inline-block bg-gradient-to-r from-purple-600 to-blue-500 text-white px-4 py-2 rounded-lg hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-purple-500 transition">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
@endsection

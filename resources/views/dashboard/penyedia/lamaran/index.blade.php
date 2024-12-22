@extends('layouts.penyedia.app')

@section('content')
<body class="bg-gradient-to-br from-blue-50 to-purple-100 font-sans antialiased">

    <div class="max-w-4xl mx-auto mt-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Daftar Lamaran Pekerjaan</h1>

        <div class="bg-white shadow-md rounded-lg p-6"> 
            @if($jobApplications->isNotEmpty())
                <div class="space-y-6">
                    @foreach($jobApplications as $jobApplication)
                        <div class="p-6 bg-gradient-to-r from-blue-100 to-purple-100 rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-lg">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Pelamar: {{ $jobApplication->seeker->name}}</h2>
                            <p class="text-gray-600 mb-4">{{ $jobApplication->job->description }}</p>

                            <div class="text-sm text-gray-600">
                                <span class="font-medium">Status: 
                                    <span class="text-{{ $jobApplication->status == 'Accepted' ? 'green-500' : ($jobApplication->status == 'Rejected' ? 'red-500' : 'yellow-500') }}">
                                        {{$jobApplication->status}}
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
    </div>
</body>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <!-- Job Title -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $job['title'] }}</h1>

            <!-- Job Description -->
            <p class="text-gray-600 mb-6">{{ $job['description'] }}</p>

            <!-- Job Information -->
            <div class="text-lg text-gray-800 mb-4">
                <strong>Perusahaan:</strong> {{ $job['company'] }}
            </div>
            <div class="text-lg text-gray-800 mb-4">
                <strong>Lokasi:</strong> {{ $job['location'] }}
            </div>
            <div class="text-lg text-gray-800 mb-6">
                <strong>Gaji:</strong> ${{ $job['reward'] }} per jam
            </div>

            <!-- Job Requirements -->
            <div class="text-lg text-gray-800 mb-6">
                <h3 class="font-semibold text-xl mb-2">Persyaratan Pekerjaan:</h3>
                <ul class="list-disc pl-6 space-y-2">
                    @foreach ($job['requirements'] as $requirement)
                        <li class="text-gray-600">{{ $requirement }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Back to Job List -->
            <a href="{{ url('/jobs') }}" class="text-blue-600 hover:underline">Kembali ke Daftar Pekerjaan</a>
        </div>
    </div>
@endsection

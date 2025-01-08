@extends('layouts.pencari.app')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-4xl w-full bg-white shadow-md rounded-xl p-8">
        <!-- Header -->
        <div class="border-b pb-6 mb-6">
            <h1 class="text-3xl font-extrabold text-gray-800">{{ $job->title }}</h1>
            <p class="text-gray-500 mt-2">{{ $job->location }}</p>
        </div>

        <!-- Konten -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Kolom Informasi -->
            <div class="md:col-span-2 space-y-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Detail Pekerjaan</h2>
                    <p class="text-gray-600 mt-2 leading-relaxed">{{ $job->description }}</p>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Gaji</h2>
                    <p class="text-green-500 font-bold text-lg mt-2">Rp{{ number_format($job->wage, 0, ',', '.') }}</p>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Durasi</h2>
                    <p class="text-gray-600">{{ $job->duration }}</p>
                </div>

                <!-- Persyaratan -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Persyaratan</h2>
                    <ul class="list-disc list-inside text-gray-700 mt-4 space-y-2">
                        @if(!empty($job->requirements) && count($job->requirements) > 0)
                            @foreach ($job->requirements as $requirement)
                                <li>{{ trim($requirement) }}</li>
                            @endforeach
                        @else
                            <p class="text-gray-500">Tidak ada persyaratan yang ditentukan.</p>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Kolom Tindakan -->
            <div class="space-y-6">
                @if($hasApplied)
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 rounded">
                        <p><strong>Info:</strong> Anda sudah melamar pekerjaan ini.</p>
                    </div>
                @endif

                <div>
                    @if($hasApplied)
                        <button disabled class="w-full bg-gray-300 text-gray-500 font-bold px-6 py-3 rounded-lg shadow-md cursor-not-allowed">
                            Lamar Sekarang
                        </button>
                    @else
                        <form action="{{ route('jobs.apply', $job->job_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-indigo-500 text-white font-bold px-6 py-3 rounded-lg shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                Lamar Sekarang
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

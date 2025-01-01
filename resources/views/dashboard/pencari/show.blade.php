@extends('layouts.pencari.app')

@section('content')
<section class="py-16 px-6 bg-white">
    <div class="max-w-screen-xl mx-auto">
        <!-- Detail Pekerjaan -->
        <div class="bg-white mt-6 p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-900 mb-6">{{ $job->title }}</h2>
            <p class="text-gray-600 mb-6">{{ $job->description }}</p>

            <h3 class="text-xl font-semibold text-gray-900">Persyaratan:</h3>
            @if(is_array($job->requirements) && count($job->requirements) > 0)
                <ul class="list-disc list-inside text-left text-gray-700 mb-6">
                    @foreach ($job->requirements as $requirement)
                        <li>{{ $requirement }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">Tidak ada persyaratan yang ditentukan.</p>
            @endif
        </div>
    </div>
</section>
@endsection

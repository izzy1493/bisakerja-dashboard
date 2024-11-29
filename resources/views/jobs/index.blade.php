@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($jobs as $index => $job)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Job Image">
        <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800">{{ $job['title'] }}</h3>
            <p class="text-gray-600 mt-2">{{ Str::limit($job['description'], 100) }}</p>
            <div class="flex justify-between items-center mt-4">
                <span class="text-blue-600 font-semibold">${{ $job['reward'] }}</span>
                <a href="{{ route('jobs.show', $index + 1) }}" class="text-blue-600 hover:underline">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

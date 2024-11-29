<!-- resources/views/jobs/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="bg-white shadow-xl rounded-lg p-8 max-w-4xl mx-auto">
    <h2 class="text-3xl font-semibold text-gray-800">{{ $job['title'] }}</h2>
    <p class="text-gray-700 mt-4">{{ $job['description'] }}</p>
    <div class="flex justify-between items-center mt-6">
        <span class="text-blue-600 font-semibold text-2xl">${{ $job['reward'] }}</span>
        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Ajukan Permohonan
        </button>
    </div>
</div>
@endsection

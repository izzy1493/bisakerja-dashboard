@extends('layouts.main')

@section('title', 'Detail Pekerjaan')

@section('content')
<h1 class="text-2xl font-bold mb-6">Detail Pekerjaan</h1>

<div class="bg-white p-6 rounded-md shadow">
    <h2 class="text-xl font-semibold">{{ $job['title'] }}</h2>
    <p class="mt-2 text-gray-600">{{ $job['description'] }}</p>
    <p class="mt-4"><strong>Lokasi:</strong> {{ $job['location'] }}</p>
    <p><strong>Durasi:</strong> {{ $job['duration'] }}</p>

    <div class="mt-6 flex space-x-4">
        <form method="POST" action="{{ route('admin.jobs.approve', $job['id']) }}">
            @csrf
            <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Setujui</button>
        </form>

        <form method="POST" action="{{ route('admin.jobs.reject', $job['id']) }}">
            @csrf
            <input type="text" name="reason" placeholder="Alasan penolakan" class="px-3 py-2 border rounded-md">
            <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 ml-2">Tolak</button>
        </form>
    </div>
</div>
@endsection

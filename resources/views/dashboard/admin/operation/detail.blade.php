@extends('layouts.admin.app')

@section('title', 'Detail Pekerjaan')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Detail Pekerjaan</h2>
    <p><strong>Judul:</strong> {{ $job->title }}</p>
    <p><strong>Deskripsi:</strong> {{ $job->description }}</p>
    <p><strong>Status:</strong> {{ $job->status }}</p>
    <p><strong>Lokasi:</strong> {{ $job->location }}</p>
    <p><strong>Gaji:</strong> {{ $job->wage }}</p>
    <a href="{{ route('operation.jobs.edit', $job->job_id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
</div>
@endsection

@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Detail Pekerjaan</h1>

    <p><strong>Judul:</strong> {{ $job['title'] }}</p>
    <p><strong>Deskripsi:</strong> {{ $job['description'] }}</p>
    <p><strong>Lokasi:</strong> {{ $job['location'] }}</p>
    <p><strong>Durasi:</strong> {{ $job['duration'] }}</p>
    <p><strong>Status:</strong> {{ $job['status'] }}</p>

    <form action="{{ route('admin.jobs.approve', $job['id']) }}" method="POST" class="mb-2">
        @csrf
        <button type="submit" class="btn btn-success">Approve</button>
    </form>

    <form action="{{ route('admin.jobs.reject', $job['id']) }}" method="POST">
        @csrf
        <label for="reason" class="block mb-1">Alasan Penolakan:</label>
        <input type="text" id="reason" name="reason" class="border p-2 w-full mb-2" required>
        <button type="submit" class="btn btn-danger">Reject</button>
    </form>
@endsection

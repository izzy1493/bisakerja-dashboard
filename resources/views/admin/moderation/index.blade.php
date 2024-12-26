@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Pekerjaan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Judul</th>
                <th class="border border-gray-300 p-2">Lokasi</th>
                <th class="border border-gray-300 p-2">Durasi</th>
                <th class="border border-gray-300 p-2">Status</th>
                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td class="border border-gray-300 p-2">{{ $job['title'] }}</td>
                    <td class="border border-gray-300 p-2">{{ $job['location'] }}</td>
                    <td class="border border-gray-300 p-2">{{ $job['duration'] }}</td>
                    <td class="border border-gray-300 p-2">{{ $job['status'] }}</td>
                    <td class="border border-gray-300 p-2">
                        <a href="{{ route('admin.jobs.show', $job['id']) }}" class="text-blue-500">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.main')

@section('title', 'Daftar Pekerjaan')

@section('content')
<h1 class="text-3xl font-bold mb-6">Daftar Pekerjaan</h1>

<!-- Form Pencarian -->
<div class="mb-6">
    <form action="{{ route('admin.jobs.index') }}" method="GET" class="flex items-center">
        <input 
            type="text" 
            name="search" 
            placeholder="Cari pekerjaan..." 
            class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring focus:ring-blue-400">
        <button 
            type="submit" 
            class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700">
            Cari
        </button>
    </form>
</div>

<!-- Tabel Daftar Pekerjaan -->
<div class="bg-white rounded-md shadow overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left font-semibold text-gray-600">Judul</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-600">Status</th>
                <th class="px-6 py-3 text-center font-semibold text-gray-600">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr class="border-b">
                <td class="px-6 py-4">{{ $job['title'] }}</td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full {{ $job['status'] === 'approved' ? 'bg-green-100 text-green-600' : 'bg-yellow-100 text-yellow-600' }}">
                        {{ ucfirst($job['status']) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="{{ route('admin.jobs.show', $job['id']) }}" class="text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

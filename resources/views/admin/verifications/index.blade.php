@extends('layouts.main')

@section('title', 'Daftar Verifikasi Pengguna')

@section('content')
<h1 class="text-3xl font-bold mb-6">Daftar Verifikasi Pengguna</h1>

@if(session('success'))
    <div class="bg-green-100 text-green-600 p-4 rounded mb-4">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-600 p-4 rounded mb-4">{{ session('error') }}</div>
@endif

<div class="bg-white rounded-md shadow overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left font-semibold text-gray-600">Nama</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-600">Peran</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-600">Status</th>
                <th class="px-6 py-3 text-center font-semibold text-gray-600">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($verifications as $verification)
            <tr class="border-b">
                <td class="px-6 py-4">{{ $verification['name'] }}</td>
                <td class="px-6 py-4">{{ $verification['role'] }}</td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full {{ $verification['status'] === 'Approved' ? 'bg-green-100 text-green-600' : ($verification['status'] === 'Rejected' ? 'bg-red-100 text-red-600' : 'bg-yellow-100 text-yellow-600') }}">
                        {{ $verification['status'] }}
                    </span>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="{{ route('admin.verifications.show', $verification['id']) }}" class="text-blue-500 hover:underline">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

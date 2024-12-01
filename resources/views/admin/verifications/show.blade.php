@extends('layouts.main')

@section('title', 'Detail Verifikasi Pengguna')

@section('content')
<h1 class="text-2xl font-bold mb-6">Detail Verifikasi Pengguna</h1>

<div class="bg-white p-6 rounded-md shadow">
    <h2 class="text-xl font-semibold">{{ $verification['name'] }}</h2>
    <p class="mt-2 text-gray-600"><strong>Peran:</strong> {{ $verification['role'] }}</p>
    <p class="mt-2 text-gray-600"><strong>Nomor KTP/SIM:</strong> {{ $verification['ktp'] }}</p>

    <div class="mt-4">
        <strong>Foto KTP/SIM:</strong>
        <img src="{{ $verification['ktp_image'] }}" alt="KTP/SIM" class="mt-2 w-64 rounded">
    </div>

    <div class="mt-4">
        <strong>Foto Selfie:</strong>
        <img src="{{ $verification['selfie_image'] }}" alt="Selfie" class="mt-2 w-64 rounded">
    </div>

    <div class="mt-6 flex space-x-4">
        <form method="POST" action="{{ route('admin.verifications.approve', $verification['id']) }}">
            @csrf
            <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Setujui</button>
        </form>

        <form method="POST" action="{{ route('admin.verifications.reject', $verification['id']) }}">
            @csrf
            <input type="text" name="reason" placeholder="Alasan penolakan" class="px-3 py-2 border rounded-md">
            <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 ml-2">Tolak</button>
        </form>
    </div>
</div>
@endsection

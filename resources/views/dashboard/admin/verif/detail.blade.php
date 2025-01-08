@extends('layouts.admin.app')

@section('title', 'Detail Verifikasi Pengguna')

@section('content')
    <div class="bg-white p-8 rounded-xl shadow-lg max-w-4xl mx-auto mt-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Detail Verifikasi Pengguna</h2>
        <p class="text-gray-600 mb-8">Halaman ini digunakan untuk melihat detail dan memverifikasi pengguna yang mengajukan verifikasi identitas.</p>

        <!-- Detail Verifikasi (Menampilkan data tanpa inputan) -->
        <div class="space-y-6">
            <!-- ID Verifikasi -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                <p class="text-gray-700 font-semibold">ID Verifikasi</p>
                <p class="text-gray-500">{{ $verification->verification_id }}</p>
            </div>

            <!-- ID Pengguna -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                <p class="text-gray-700 font-semibold">ID Pengguna</p>
                <p class="text-gray-500">{{ $verification->user_id }}</p>
            </div>

            <!-- Nomor KTP -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                <p class="text-gray-700 font-semibold">Nomor KTP</p>
                <p class="text-gray-500">{{ $verification->id_card_number }}</p>
            </div>

            <!-- Foto KTP -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                <p class="text-gray-700 font-semibold">Foto KTP</p>
                <img src="{{ asset('storage/' . $verification->id_card_photo) }}" alt="Foto KTP" class="h-16 w-auto rounded-lg shadow-sm hover:scale-105 transition-all duration-300">
            </div>

            <!-- Foto Selfie -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                <p class="text-gray-700 font-semibold">Foto Selfie</p>
                <img src="{{ asset('storage/' . $verification->selfie_photo) }}" alt="Foto Selfie" class="h-16 w-auto rounded-lg shadow-sm hover:scale-105 transition-all duration-300">
            </div>

            <!-- Status -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                <p class="text-gray-700 font-semibold">Status</p>
                <p class="text-gray-500">
                    @if ($verification->status == 'Pending')
                        <span class="px-3 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Pending</span>
                    @elseif ($verification->status == 'Approved')
                        <span class="px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Approved</span>
                    @elseif ($verification->status == 'Rejected')
                        <span class="px-3 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Rejected</span>
                    @endif
                </p>
            </div>
        </div>

        <!-- Tombol Setujui dan Tolak -->
        @if ($verification->status == 'Pending')
            <div class="flex space-x-6 mt-6">
                <!-- Formulir untuk Setujui -->
                <form action="{{ route('admin.verify.approve', $verification->verification_id) }}" method="POST" class="w-1/2">
                    @csrf
                    @method('POST')
                    <button type="submit" class="w-full py-3 text-white bg-green-600 hover:bg-green-700 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">Setujui</button>
                </form>

                <!-- Formulir untuk Tolak -->
                <form action="{{ route('admin.verify.reject', $verification->verification_id) }}" method="POST" class="w-1/2">
                    @csrf
                    @method('POST')
                    <button type="submit" class="w-full py-3 text-white bg-red-600 hover:bg-red-700 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">Tolak</button>
                </form>
            </div>
        @else
            <span class="text-gray-500 mt-6 block">Tidak ada aksi yang dapat dilakukan karena status verifikasi sudah diproses.</span>
        @endif

        <!-- Tombol Kembali -->
        <div class="mt-6">
            <button onclick="window.history.back()" class="w-full py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                Kembali ke Halaman Sebelumnya
            </button>
        </div>
    </div>
@endsection

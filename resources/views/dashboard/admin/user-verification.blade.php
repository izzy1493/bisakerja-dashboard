@extends('layouts.admin.app')

@section('title', 'Verifikasi Pengguna')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Verifikasi Pengguna</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk memverifikasi pengguna yang mengajukan verifikasi identitas.</p>

        <!-- Daftar Pengguna untuk Verifikasi -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Verifikasi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pengguna</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nomor KTP</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Foto KTP</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Foto Selfie</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse ($verifications as $verification)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $verification->verification_id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $verification->user_id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $verification->id_card_number }}</td>
                            <!-- Kolom Foto KTP -->
                            <td class="px-4 py-2 text-sm text-gray-700">
                                <img src="{{ asset('storage/' . $verification->id_card_photo) }}" alt="Foto KTP" class="h-12 w-auto">
                            </td>
                            <!-- Kolom Foto Selfie -->
                            <td class="px-4 py-2 text-sm text-gray-700">
                                <img src="{{ asset('storage/' . $verification->selfie_photo) }}" alt="Foto Selfie" class="h-12 w-auto">
                            </td>
                            <!-- Status -->
                            <td class="px-4 py-2 text-sm text-gray-700">
                                @if ($verification->status == 'Pending')
                                    <span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Pending</span>
                                @elseif ($verification->status == 'Approved')
                                    <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Approved</span>
                                @elseif ($verification->status == 'Rejected')
                                    <span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Rejected</span>
                                @endif
                            </td>
                            <!-- Aksi -->
                            <td class="px-4 py-2 text-sm text-gray-700">
                                @if ($verification->status == 'Pending')
                                    <a href="#" class="text-green-600 hover:text-green-800">Setujui</a> | 
                                    <a href="#" class="text-red-600 hover:text-red-800">Tolak</a>
                                @else
                                    <span class="text-gray-500">Tidak ada aksi</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 text-sm text-gray-700 text-center">Tidak ada data untuk diverifikasi.</td>
                        </tr>
                    @endforelse
                </tbody>
                
                            
            </table>
        </div>
    </div>
@endsection

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
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pengguna</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama Pengguna</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nomor KTP/SIM</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status Verifikasi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data pengguna untuk verifikasi -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">John Doe</td>
                        <td class="px-4 py-2 text-sm text-gray-700">1234567890123456</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Pending</span>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Dokumen</a> | 
                            <a href="#" class="text-green-600 hover:text-green-800">Setujui</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Tolak</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Jane Smith</td>
                        <td class="px-4 py-2 text-sm text-gray-700">9876543210987654</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">Approved</span>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Dokumen</a> | 
                            <a href="#" class="text-green-600 hover:text-green-800">Setujui</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Tolak</a>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai dengan data pengguna -->
                </tbody>
            </table>
        </div>
    </div>
@endsection

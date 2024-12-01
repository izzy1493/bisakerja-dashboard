@extends('layouts.admin.app')

@section('title', 'Penanganan Laporan')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Penanganan Laporan</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk menangani laporan konflik antara penyedia kerja dan pencari kerja.</p>

        <!-- Daftar Laporan -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Laporan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama Pelapor</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Pekerjaan Terkait</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Deskripsi Masalah</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Bukti</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status Laporan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data laporan -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm">1</td>
                        <td class="px-4 py-2 text-sm">John Doe</td>
                        <td class="px-4 py-2 text-sm">Pekerjaan A</td>
                        <td class="px-4 py-2 text-sm">Deskripsi masalah terkait keterlambatan pekerjaan</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Bukti</a>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <span class="px-3 py-1 bg-yellow-300 text-yellow-800 rounded-full">Pending</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-green-600 hover:text-green-800">Mark as Resolved</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Escalate</a>
                        </td>
                    </tr>

                    <!-- Laporan lainnya -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm">2</td>
                        <td class="px-4 py-2 text-sm">Jane Smith</td>
                        <td class="px-4 py-2 text-sm">Pekerjaan B</td>
                        <td class="px-4 py-2 text-sm">Deskripsi masalah terkait pembayaran yang tertunda</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Bukti</a>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <span class="px-3 py-1 bg-green-300 text-green-800 rounded-full">Resolved</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-green-600 hover:text-green-800">Mark as Resolved</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Escalate</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.admin.app')

@section('title', 'Validasi Pembayaran')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Validasi Pembayaran</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk memverifikasi pembayaran yang dilakukan oleh penyedia kerja.</p>

        <!-- Daftar Pembayaran -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama Penyedia Kerja</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nominal Transfer</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Bukti Transfer</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status Pembayaran</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data pembayaran -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm">1001</td>
                        <td class="px-4 py-2 text-sm">John Doe</td>
                        <td class="px-4 py-2 text-sm">Rp 1.000.000</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Bukti</a>
                        </td>
                        <td class="px-4 py-2 text-sm text-yellow-500">Pending</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-green-600 hover:text-green-800">Setujui</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Tolak</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm">1002</td>
                        <td class="px-4 py-2 text-sm">Jane Smith</td>
                        <td class="px-4 py-2 text-sm">Rp 500.000</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Bukti</a>
                        </td>
                        <td class="px-4 py-2 text-sm text-green-500">Validated</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-gray-600">Sudah Divalidasi</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm">1003</td>
                        <td class="px-4 py-2 text-sm">Mark Taylor</td>
                        <td class="px-4 py-2 text-sm">Rp 750.000</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Lihat Bukti</a>
                        </td>
                        <td class="px-4 py-2 text-sm text-red-500">Rejected</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-gray-600">Pembayaran Ditolak</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

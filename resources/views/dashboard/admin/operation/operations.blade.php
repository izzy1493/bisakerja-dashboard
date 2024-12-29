@extends('layouts.admin.app')

@section('title', 'Pengelolaan Data Operasional')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pengelolaan Data Operasional</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk mengelola data operasional yang terkait dengan pekerjaan dan pengguna.</p>

        <!-- Daftar Pekerjaan -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Judul Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Pelamar</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data pekerjaan -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Desain Grafis</td>
                        <td class="px-4 py-2 text-sm">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Active</span>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">5 Pelamar</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a> |
                            <a href="#" class="text-yellow-600 hover:text-yellow-800">Ganti Status</a> |
                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Pembuatan Website</td>
                        <td class="px-4 py-2 text-sm">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">Completed</span>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">12 Pelamar</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a> |
                            <a href="#" class="text-yellow-600 hover:text-yellow-800">Ganti Status</a> |
                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">3</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Pemasaran Digital</td>
                        <td class="px-4 py-2 text-sm">
                            <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full">Pending</span>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">3 Pelamar</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a> |
                            <a href="#" class="text-yellow-600 hover:text-yellow-800">Ganti Status</a> |
                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Statistik Pekerjaan -->
        <div class="grid grid-cols-3 gap-6 mb-8">
            <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Jumlah Pekerjaan Selesai</h3>
                <p class="text-3xl font-bold text-blue-600">5</p>
            </div>
            <div class="bg-green-50 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Jumlah Pelamar</h3>
                <p class="text-3xl font-bold text-green-600">50</p>
            </div>
            <div class="bg-yellow-50 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Jumlah Pekerjaan Pending</h3>
                <p class="text-3xl font-bold text-yellow-600">3</p>
            </div>
        </div>

        <!-- Data Pengguna -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pengguna</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Jenis</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data pengguna -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">U001</td>
                        <td class="px-4 py-2 text-sm text-gray-700">John Doe</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Penyedia Kerja</td>
                        <td class="px-4 py-2 text-sm">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Active</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-red-600 hover:text-red-800">Nonaktifkan</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">U002</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Jane Smith</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Pencari Kerja</td>
                        <td class="px-4 py-2 text-sm">
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full">Nonaktif</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-green-600 hover:text-green-800">Aktifkan</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

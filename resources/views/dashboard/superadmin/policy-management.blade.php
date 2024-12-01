@extends('layouts.superadmin.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Pengelola Kebijakan</h2>
        <p class="mt-4 text-gray-600">Halaman ini digunakan untuk mengelola kebijakan aplikasi.</p>
    </div>

    <div class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-center mb-10">Pengelolaan Kebijakan</h2>
        
        <!-- Formulir Pengaturan Kebijakan -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-10">
            <h3 class="text-xl font-semibold mb-4">Atur Kebijakan Aplikasi</h3>
            <form id="policyForm">
                <div class="mb-4">
                    <label for="serviceFee" class="block text-sm font-medium text-gray-70 0">Biaya Layanan untuk Penyedia Kerja</label>
                    <input type="number" id="serviceFee" name="serviceFee" placeholder="Masukkan biaya layanan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="refundPolicy" class="block text-sm font-medium text-gray-700">Kebijakan Refund</label>
                    <textarea id="refundPolicy" name="refundPolicy" rows="4" placeholder="Masukkan kebijakan refund" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="contentRules" class="block text-sm font-medium text-gray-700">Aturan Konten Pekerjaan</label>
                    <textarea id="contentRules" name="contentRules" rows="4" placeholder="Masukkan aturan konten pekerjaan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Simpan Kebijakan</button>
            </form>
        </div>

        <!-- Daftar Kebijakan yang Berlaku -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-10">
            <h3 class="text-xl font-semibold mb-4">Daftar Kebijakan yang Berlaku</h3>
            <ul id="policyList" class="list-disc list-inside">
                <!-- Daftar kebijakan akan ditampilkan di sini -->
            </ul>
        </div>

        <!-- Tindakan -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold mb-4">Tindakan</h3>
            <button id="addPolicy" class="bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition">Tambah Kebijakan Baru</button>
            <button id="editPolicy" class="bg-yellow-600 text-white py-2 rounded-md hover:bg-yellow-700 transition">Edit Kebijakan</button>
            <button id="deletePolicy" class="bg-red-600 text-white py-2 rounded-md hover:bg-red-700 transition">Hapus Kebijakan</button>
            <button id="announcePolicy" class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Umumkan Kebijakan Baru</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambah kebijakan baru
            $('#addPolicy').click(function() {
                $('#policyFormContainer').removeClass('hidden');
                $('#policyListContainer').addClass('hidden');
            });

            // Edit kebijakan
            $('#editPolicy').click(function() {
                // Tambahkan kode untuk mengedit kebijakan
            });

            // Hapus kebijakan
            $('#deletePolicy').click(function() {
                // Tambahkan kode untuk menghapus kebijakan
            });

            // Umumkan kebijakan baru
            $('#announcePolicy').click(function() {
                // Tambahkan kode untuk mengumumkan kebijakan baru
            });
        });
    </script>
@endsection

@extends('layouts.superadmin.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Pengelolaan Kebijakan</h2>

    <!-- Formulir Pengaturan Kebijakan -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Atur Kebijakan Aplikasi</h3>
        <form id="policyForm" class="space-y-4">
            <div>
                <label for="serviceFee" class="block text-sm font-medium text-gray-700">Biaya Layanan</label>
                <input type="number" id="serviceFee" name="serviceFee" placeholder="Masukkan biaya layanan" class="mt-1 w-full border rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label for="refundPolicy" class="block text-sm font-medium text-gray-700">Kebijakan Refund</label>
                <textarea id="refundPolicy" name="refundPolicy" rows="3" placeholder="Masukkan kebijakan refund" class="mt-1 w-full border rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
            </div>
            <div>
                <label for="contentRules" class="block text-sm font-medium text-gray-700">Aturan Konten</label>
                <textarea id="contentRules" name="contentRules" rows="3" placeholder="Masukkan aturan konten pekerjaan" class="mt-1 w-full border rounded-md shadow-sm p-2 focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition">Simpan Kebijakan</button>
        </form>
    </div>

    <!-- Daftar Kebijakan -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Daftar Kebijakan</h3>
        <ul id="policyList" class="list-disc pl-5 space-y-2 text-gray-700">
            <!-- Daftar kebijakan akan dimuat di sini -->
        </ul>
    </div>

    <!-- Tindakan -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Tindakan</h3>
        <div class="flex flex-wrap gap-3">
            <button id="addPolicy" class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition">Tambah</button>
            <button id="editPolicy" class="bg-yellow-600 text-white py-2 px-4 rounded-md hover:bg-yellow-700 transition">Edit</button>
            <button id="deletePolicy" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition">Hapus</button>
            <button id="announcePolicy" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">Umumkan</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#addPolicy').click(function() {
            $('#policyForm').slideToggle();
        });
        $('#editPolicy, #deletePolicy, #announcePolicy').click(function() {
            alert("Fitur ini sedang dalam pengembangan.");
        });
    });
</script>
@endsection

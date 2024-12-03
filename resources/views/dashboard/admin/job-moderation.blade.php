@extends('layouts.admin.app')

@section('title', 'Moderasi Pekerjaan')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Moderasi Pekerjaan</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk moderasi pekerjaan yang diposting oleh penyedia kerja.</p>

        <!-- Daftar Pekerjaan -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Judul Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Deskripsi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Lokasi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Durasi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data pekerjaan -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">#1234</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Pekerjaan Desain Grafis</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Deskripsi singkat tentang pekerjaan desain grafis.</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Surabaya</td>
                        <td class="px-4 py-2 text-sm text-gray-800">3 Hari</td>
                        <td class="px-4 py-2 text-sm text-gray-800">
                            <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <!-- Button untuk melihat detail pekerjaan -->
                            <a href="#" class="text-blue-600 hover:text-blue-800 mr-2">Lihat Detail</a>

                            <!-- Button untuk menyetujui pekerjaan -->
                            <button class="text-green-600 hover:text-green-800 mr-2" onclick="approveJob(1234)">Setujui</button>

                            <!-- Button untuk menolak pekerjaan dengan alasan -->
                            <button class="text-red-600 hover:text-red-800" onclick="rejectJob(1234)">Tolak</button>
                        </td>
                    </tr>
                    <!-- Data pekerjaan lainnya -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">#1235</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Pekerjaan Web Development</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Deskripsi singkat pekerjaan pengembangan website.</td>
                        <td class="px-4 py-2 text-sm text-gray-800">Jakarta</td>
                        <td class="px-4 py-2 text-sm text-gray-800">7 Hari</td>
                        <td class="px-4 py-2 text-sm text-gray-800">
                            <span class="bg-green-200 text-green-800 px-2 py-1 rounded-full text-xs">Disetujui</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            <a href="#" class="text-blue-600 hover:text-blue-800 mr-2">Lihat Detail</a>
                            <span class="text-gray-500">Terkonfirmasi</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Alasan Penolakan Modal -->
        <div id="rejectModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-md w-1/3">
                <h3 class="text-xl font-semibold mb-4">Alasan Penolakan</h3>
                <textarea id="rejectReason" class="w-full h-24 p-2 border border-gray-300 rounded-lg mb-4" placeholder="Masukkan alasan penolakan..."></textarea>
                <div class="flex justify-end">
                    <button class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2" onclick="closeRejectModal()">Batal</button>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg" onclick="submitReject()">Tolak</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk membuka modal alasan penolakan
        function rejectJob(jobId) {
            document.getElementById('rejectModal').classList.remove('hidden');
        }

        // Fungsi untuk menutup modal alasan penolakan
        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
        }

        // Fungsi untuk mengirim alasan penolakan
        function submitReject() {
            var reason = document.getElementById('rejectReason').value;
            if (reason.trim() === "") {
                alert("Alasan penolakan tidak boleh kosong!");
                return;
            }
            alert("Pekerjaan ditolak dengan alasan: " + reason);
            closeRejectModal();
        }

        // Fungsi untuk menyetujui pekerjaan (contoh)
        function approveJob(jobId) {
            alert("Pekerjaan dengan ID " + jobId + " disetujui!");
        }
    </script>
@endsection

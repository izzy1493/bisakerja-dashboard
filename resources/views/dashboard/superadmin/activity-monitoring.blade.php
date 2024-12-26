@extends('layouts.superadmin.app')

@section('content')

<!-- Header Section -->
<div class="bg-gradient-to-r from-indigo-600 to-blue-500 p-6 rounded-2xl mb-10 text-white">
    <h2 class="text-3xl font-semibold">Monitoring Aktivitas Aplikasi</h2>
    <p class="mt-2 text-lg">Pantau statistik aplikasi secara keseluruhan dan aktivitas admin untuk mengidentifikasi masalah yang sering muncul.</p>
</div>

<!-- Statistik Aplikasi -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
    <!-- Jumlah Pengguna -->
    <div class="bg-white p-6 rounded-xl border border-gray-200 transition-all hover:scale-105">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-semibold text-gray-700">Jumlah Pengguna</h3>
            <span class="text-2xl font-bold text-blue-600">{{$userCount}} orang</span>
        </div>
        <p class="text-gray-600 mt-2">Jumlah total pengguna aktif dan nonaktif di aplikasi.</p>
    </div>

    <!-- Jumlah Pekerjaan -->
    <div class="bg-white p-6 rounded-xl border border-gray-200 transition-all hover:scale-105">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-semibold text-gray-700">Jumlah Pekerjaan</h3>
            <span class="text-2xl font-bold text-green-600">{{$jobCount}} Pekerjaan</span>
        </div>
        <p class="text-gray-600 mt-2">Jumlah pekerjaan yang telah diposting (termasuk selesai dan dibatalkan).</p>
    </div>

    <!-- Total Transaksi Pembayaran -->
    <div class="bg-white p-6 rounded-xl border border-gray-200 transition-all hover:scale-105">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-semibold text-gray-700">Total Transaksi Pembayaran</h3>
            <span class="text-2xl font-bold text-yellow-600">{{$paymentCount}} Transaksi</span>
        </div>
        <p class="text-gray-600 mt-2">Jumlah total transaksi pembayaran yang telah berhasil.</p>
    </div>
</div>

<!-- Grafik Statistik Aplikasi -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
    <!-- Statistik Pekerjaan (Bar Chart) -->
    <div class="bg-white p-6 rounded-xl border border-gray-200  transition-all">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Statistik Pekerjaan</h3>
        <canvas id="jobStatisticsChart"></canvas>
    </div>

    <!-- Statistik Transaksi Pembayaran (Pie Chart) -->
    <div class="bg-white p-6 rounded-xl border border-gray-200  transition-all">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Transaksi Pembayaran</h3>
        <canvas id="paymentTransactionChart"></canvas>
    </div>

    <!-- Daftar Aktivitas Admin -->
    <div class="bg-white p-6 rounded-xl border border-gray-200  transition-all">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Aktivitas Admin</h3>
        <table class="min-w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-2 px-4 text-gray-700">Nama Admin</th>
                    <th class="py-2 px-4 text-gray-700">Aktivitas</th>
                    <th class="py-2 px-4 text-gray-700">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50 transition-all">
                    <td class="py-2 px-4">Admin A</td>
                    <td class="py-2 px-4">Menambah lowongan pekerjaan</td>
                    <td class="py-2 px-4">2024-12-01 10:30</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<!-- Flowbite and Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Statistik Pekerjaan (Bar Chart)
    const ctxJobStats = document.getElementById('jobStatisticsChart').getContext('2d');
    const jobStatisticsChart = new Chart(ctxJobStats, {
        type: 'bar',
        data: {
            labels: ['Diposting', 'Selesai', 'Dibatalkan'],
            datasets: [{
                label: 'Jumlah Pekerjaan',
                data: [300, 200, 67],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.6)', // Diposting
                    'rgba(75, 192, 192, 0.6)', // Selesai
                    'rgba(255, 99, 132, 0.6)'  // Dibatalkan
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Statistik Transaksi Pembayaran (Pie Chart)
    const ctxPaymentStats = document.getElementById('paymentTransactionChart').getContext('2d');
    const paymentTransactionChart = new Chart(ctxPaymentStats, {
        type: 'pie',
        data: {
            labels: ['Transaksi Sukses', 'Transaksi Gagal'],
            datasets: [{
                label: 'Transaksi Pembayaran',
                data: [90, 10], // Persentase transaksi sukses vs gagal
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)', // Sukses
                    'rgba(255, 99, 132, 0.6)'  // Gagal
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>

@endsection

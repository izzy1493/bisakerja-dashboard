@extends('layouts.superadmin.app')

@section('content')
    <!-- Dashboard Header -->
    <div class="bg-gradient-to-r from-blue-500 via-indigo-600 to-purple-700 p-6 rounded-3xl shadow-md mb-10 text-white flex items-center justify-between">
        <!-- Title Section -->
        <div>
            <h2 class="text-4xl font-bold">Dashboard Superadmin</h2>
            <p class="mt-2 text-lg">Ringkasan informasi untuk memudahkan pengelolaan sistem.</p>
        </div>

       
    </div>

    <!-- Dashboard Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
        <!-- Total Users Card -->
        <div class="bg-white p-6 rounded-2xl  transition-all hover:scale-105 transform duration-300">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-semibold text-gray-800">Total Pengguna</h3>
                <span class="text-3xl font-bold text-blue-600">1,234</span>
            </div>
            <p class="text-gray-500 mt-2">Jumlah total pengguna yang terdaftar di aplikasi.</p>
        </div>

        <!-- Active Sessions Card -->
        <div class="bg-white p-6 rounded-2xl  transition-all hover:scale-105 transform duration-300">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-semibold text-gray-800">Sesi Aktif</h3>
                <span class="text-3xl font-bold text-green-600">456</span>
            </div>
            <p class="text-gray-500 mt-2">Sesi pengguna yang sedang aktif saat ini.</p>
        </div>

        <!-- New Signups Card -->
        <div class="bg-white p-6 rounded-2xl  transition-all hover:scale-105 transform duration-300">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-semibold text-gray-800">Pendaftaran Baru</h3>
                <span class="text-3xl font-bold text-yellow-600">78</span>
            </div>
            <p class="text-gray-500 mt-2">Jumlah pengguna baru yang mendaftar bulan ini.</p>
        </div>
    </div>
    
    <!-- Detailed Summary (Graphs & Tables) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Users Management Table -->
        <div class="bg-white p-6 rounded-2xl  transition-all">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Pengguna Terbaru</h3>
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-4 text-gray-700">Nama</th>
                        <th class="py-3 px-4 text-gray-700">Email</th>
                        <th class="py-3 px-4 text-gray-700">Peran</th>
                        <th class="py-3 px-4 text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100 transition-colors">
                        <td class="py-3 px-4">John Doe</td>
                        <td class="py-3 px-4">john@example.com</td>
                        <td class="py-3 px-4">Admin</td>
                        <td class="py-3 px-4">
                            <button class="text-yellow-500 hover:text-yellow-600 transition-all">Edit</button> |
                            <button class="text-red-500 hover:text-red-600 transition-all">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition-colors">
                        <td class="py-3 px-4">Ilham Cuki</td>
                        <td class="py-3 px-4">ilham@example.com</td>
                        <td class="py-3 px-4">User</td>
                        <td class="py-3 px-4">
                            <button class="text-yellow-500 hover:text-yellow-600 transition-all">Edit</button> |
                            <button class="text-red-500 hover:text-red-600 transition-all">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition-colors">
                        <td class="py-3 px-4">Wawan</td>
                        <td class="py-3 px-4">wawan@example.com</td>
                        <td class="py-3 px-4">User</td>
                        <td class="py-3 px-4">
                            <button class="text-yellow-500 hover:text-yellow-600 transition-all">Edit</button> |
                            <button class="text-red-500 hover:text-red-600 transition-all">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white p-6 rounded-2xl  transition-all">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Aktivitas Pengguna Terbaru</h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">Pengguna A telah mengubah profil</span>
                    <span class="text-sm text-gray-400">2 menit yang lalu</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">Pengguna B mengupload CV baru</span>
                    <span class="text-sm text-gray-400">5 menit yang lalu</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">Pengguna C telah login</span>
                    <span class="text-sm text-gray-400">10 menit yang lalu</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Graph Section (Charts) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-10">
        <!-- Bar Chart (Jobs by Category) -->
        <div class="bg-white p-6 rounded-2xl  transition-all">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Jumlah Lowongan per Kategori</h3>
            <canvas id="barChart"></canvas>
        </div>

        <!-- Pie Chart (Job Types Distribution) -->
        <div class="bg-white p-6 rounded-2xl  transition-all">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Distribusi Pekerjaan Berdasarkan Jenis</h3>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <!-- Line Chart (Jobs Trend) -->
    <div class="bg-white p-6 rounded-2xl  transition-all mt-10">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tren Lowongan Pekerjaan Selama 6 Bulan</h3>
        <canvas id="lineChart"></canvas>
    </div>

    <!-- Flowbite and Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart (Jobs by Category)
        const ctxBar = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Software Engineer', 'Desainer Grafis', 'Manajer Pemasaran'],
                datasets: [{
                    label: 'Jumlah Lowongan',
                    data: [12, 8, 5],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)'
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

        // Pie Chart (Job Types Distribution)
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Penuh Waktu', 'Paruh Waktu', 'Freelance'],
                datasets: [{
                    label: 'Jenis Pekerjaan',
                    data: [40, 30, 30],
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });

        // Line Chart (Jobs Trend)
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Jumlah Lowongan',
                    data: [10, 15, 12, 20 , 25, 30],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: true
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
    </script>
@endsection

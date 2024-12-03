@extends('layouts.superadmin.app')

@section('content')
    <!-- Dashboard Header -->
    <div class="bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-600 p-8 rounded-xl shadow-xl mb-12 text-white">
        <h2 class="text-4xl font-extrabold">Dashboard Superadmin</h2>
        <p class="mt-2 text-lg">Pantau dan kelola sistem dengan mudah melalui ringkasan data yang jelas.</p>
    </div>

    <!-- Dashboard Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        <!-- Total Users Card -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-300">
            <div class="flex items-center justify-between">
                <i class="fas fa-users text-4xl text-indigo-500"></i>
                <h3 class="text-2xl font-semibold text-gray-800">Total Pengguna</h3>
            </div>
            <div class="flex justify-between items-center mt-6">
                <span class="text-3xl font-bold text-indigo-600">1,234</span>
                <p class="text-gray-500">Jumlah total pengguna yang terdaftar di aplikasi.</p>
            </div>
        </div>

        <!-- Active Sessions Card -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-300">
            <div class="flex items-center justify-between">
                <i class="fas fa-laptop text-4xl text-green-500"></i>
                <h3 class="text-2xl font-semibold text-gray-800">Sesi Aktif</h3>
            </div>
            <div class="flex justify-between items-center mt-6">
                <span class="text-3xl font-bold text-green-600">456</span>
                <p class="text-gray-500">Jumlah sesi pengguna yang aktif saat ini.</p>
            </div>
        </div>

        <!-- New Signups Card -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform transform hover:scale-105 duration-300">
            <div class="flex items-center justify-between">
                <i class="fas fa-user-plus text-4xl text-yellow-500"></i>
                <h3 class="text-2xl font-semibold text-gray-800">Pendaftaran Baru</h3>
            </div>
            <div class="flex justify-between items-center mt-6">
                <span class="text-3xl font-bold text-yellow-600">78</span>
                <p class="text-gray-500">Jumlah pengguna baru yang mendaftar bulan ini.</p>
            </div>
        </div>
    </div>

    <!-- Detailed Summary (Graphs & Tables) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Users Management Table -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Pengguna Terbaru</h3>
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-6 text-gray-700">Nama</th>
                        <th class="py-3 px-6 text-gray-700">Email</th>
                        <th class="py-3 px-6 text-gray-700">Peran</th>
                        <th class="py-3 px-6 text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100 transition-all">
                        <td class="py-3 px-6">John Doe</td>
                        <td class="py-3 px-6">john@example.com</td>
                        <td class="py-3 px-6">Admin</td>
                        <td class="py-3 px-6">
                            <button class="text-blue-500 hover:text-blue-600 transition-all">Edit</button> |
                            <button class="text-red-500 hover:text-red-600 transition-all">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition-all">
                        <td class="py-3 px-6">bang ambalabu</td>
                        <td class="py-3 px-6">ilham@example.com</td>
                        <td class="py-3 px-6">User</td>
                        <td class="py-3 px-6">
                            <button class="text-blue-500 hover:text-blue-600 transition-all">Edit</button> |
                            <button class="text-red-500 hover:text-red-600 transition-all">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100 transition-all">
                        <td class="py-3 px-6">Wawan</td>
                        <td class="py-3 px-6">wawan@example.com</td>
                        <td class="py-3 px-6">User</td>
                        <td class="py-3 px-6">
                            <button class="text-blue-500 hover:text-blue-600 transition-all">Edit</button> |
                            <button class="text-red-500 hover:text-red-600 transition-all">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Aktivitas Pengguna update </h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">bang ambalabu telah mengubah profil</span>
                    <span class="text-sm text-gray-400">2 menit yang lalu</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">jony sins mengupload CV baru</span>
                    <span class="text-sm text-gray-400">5 menit yang lalu</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-gray-700">boboiboy kuasa 3 telah login</span>
                    <span class="text-sm text-gray-400">10 menit yang lalu</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Graph Section (Charts) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-12">
        <!-- Bar Chart (Jobs by Category) -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Jumlah Lowongan per Kategori</h3>
            <canvas id="barChart"></canvas>
        </div>

        <!-- Pie Chart (Job Types Distribution) -->
        <div class="bg-white p-6 rounded-xl shadow-xl transition-transform">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Distribusi Pekerjaan Berdasarkan Jenis</h3>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <!-- Line Chart (Jobs Trend) -->
    <div class="bg-white p-6 rounded-xl shadow-xl mt-12 transition-transform">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Tren Lowongan Pekerjaan Selama 6 Bulan</h3>
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
                },
                animation: {
                    duration: 1000, // Animasi yang lebih halus
                    easing: 'easeInOutQuart'
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
            },
            options: {
                animation: {
                    duration: 1000, // Animasi lebih halus
                    easing: 'easeInOutQuart'
                }
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
                },
                animation: {
                    duration: 1000, // Animasi halus pada grafik garis
                    easing: 'easeInOutQuart'
                }
            }
        });
    </script>
@endsection

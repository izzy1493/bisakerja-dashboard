<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pekerjaan - JobConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans leading-relaxed text-gray-900">
    @include('partials.navbar')

    <!-- Hero Section with Elegant Gradient Background -->
    <section class="relative bg-gradient-to-r from-teal-400 via-blue-500 to-indigo-600 text-white py-32 px-6 text-center mt-24 rounded-lg">
        <h1 class="text-5xl font-bold z-10 leading-tight">Temukan Pekerjaan Impian Anda</h1>
        <p class="mt-4 text-xl z-10 max-w-2xl mx-auto">Cari pekerjaan yang sesuai dengan keterampilan dan minat Anda di sini, dan wujudkan karir terbaik Anda.</p>
    </section>
    

    <!-- Daftar Pekerjaan -->
    <section class="container mx-auto py-16 px-4">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-semibold text-gray-800">Daftar Pekerjaan Tersedia</h2>

            <!-- Pencarian dan Filter -->
            <div class="flex space-x-4 items-center">
                <input type="text" placeholder="Cari pekerjaan..." class="px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full sm:w-96">
                <button class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300">Cari</button>
            </div>
        </div>

        @auth
        <div class="text-right mb-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-all duration-300">Logout</button>
            </form>
        </div>
    @endauth

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($jobs as $job)
                <div class="job-card bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-2xl transition-all duration-300 hover:bg-indigo-50">
                    <!-- Ikon atau Logo Perusahaan -->
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/50" alt="Logo Perusahaan" class="w-12 h-12 rounded-full mr-4">
                        <span class="text-lg font-semibold text-gray-800">{{ $job->company }}</span>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $job->title }}</h3>
                    <div class="space-y-2">
                        <p class="text-gray-600">Lokasi: <span class="font-semibold text-gray-800">{{ $job->location }}</span></p>
                        <p class="text-gray-600">Gaji: <span class="font-semibold text-gray-800">Rp {{ number_format($job->salary, 0, ',', '.') }}/bulan</span></p>
                    </div>
                    <a href="{{ route('jobs.show', $job->id) }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-200">Lihat Detail</a>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 text-center">
            <nav class="inline-flex items-center space-x-2">
                <a href="#" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Previous</a>
                <a href="#" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">1</a>
                <a href="#" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">2</a>
                <a href="#" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">3</a>
                <a href="#" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Next</a>
            </nav>
        </div>
    </section>

    @include('partials.footer')

</body>

</html>

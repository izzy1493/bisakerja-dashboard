<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pekerjaan - {{ $job->title }} - JobConnect</title>
    <!-- Link ke TailwindCSS dan Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.4/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        .hover-animate {
            transition: transform 0.4s ease, box-shadow 0.3s ease;
        }

        .hover-animate:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .emoji {
            font-size: 4rem;
            animation: bounce 1.2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-sans text-gray-800">

    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 text-white py-24 px-6 md:px-16 rounded-b-lg shadow-xl">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold tracking-tight leading-tight">{{ $job->title }} 🎉</h1>
            <p class="mt-4 text-xl">{{ $job->company }} | {{ $job->location }}</p>
            <p class="mt-4 text-2xl animate-pulse">Jangan lewatkan kesempatan ini! 🤩</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto py-20 px-6 md:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            <!-- Left Column (Job Details) -->
            <div>
                <!-- Deskripsi Pekerjaan -->
                <div class="bg-white rounded-lg shadow-lg hover-animate p-8 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Deskripsi Pekerjaan</h2>
                    <p class="text-lg text-gray-700">{{ $job->description }}</p>
                </div>

                <!-- Tanggung Jawab -->
                <div class="bg-white rounded-lg shadow-lg hover-animate p-8 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Tanggung Jawab</h3>
                    <ul class="list-disc pl-6 text-gray-600 space-y-2">
                        @foreach(explode("\n", $job->responsibilities) as $responsibility)
                        <li class="text-lg">🎯 {{ $responsibility }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Kualifikasi Pekerjaan -->
                <div class="bg-white rounded-lg shadow-lg hover-animate p-8 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Kualifikasi Pekerjaan</h3>
                    <p class="text-lg text-gray-700">{{ $job->qualification }}</p>
                </div>
            </div>

            <!-- Right Column (Gaji & Lamaran) -->
            <div class="space-y-8">
                <!-- Gaji -->
                <div class="bg-white rounded-lg shadow-lg hover-animate p-8 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Gaji</h2>
                    <p class="text-3xl font-bold text-gray-800">Rp {{ number_format($job->salary, 0, ',', '.') }}/bulan 💸</p>
                </div>

                <!-- Lamaran -->
                <div class="bg-white rounded-lg shadow-lg hover-animate p-8 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Lamaran</h2>
                    <a href="mailto:{{ $job->contact_email }}" class="block text-center py-3 px-8 bg-indigo-600 text-white rounded-lg font-semibold transition-all duration-300 ease-in-out hover:bg-indigo-700 hover:scale-105">
                        Kirim Lamaran 💌
                    </a>
                </div>
            </div>

        </div>

        <!-- Sidebar with Company Info -->
        <div class="mt-16 bg-white rounded-lg shadow-lg p-8 hover-animate">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Informasi Perusahaan</h3>
            <div class="space-y-4 text-lg text-gray-600">
                <div class="flex justify-between">
                    <span class="font-semibold">Nama Perusahaan:</span>
                    <span>{{ $job->company }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Lokasi:</span>
                    <span>{{ $job->location }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Kontak Email:</span>
                    <a href="mailto:{{ $job->contact_email }}" class="text-blue-600 hover:text-blue-800">{{ $job->contact_email }}</a>
                </div>
            </div>
        </div>

    </section>

    @include('partials.footer')

</body>

</html>

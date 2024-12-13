<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pekerjaan - {{ $job->title }} - JobConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-relaxed text-gray-900">

    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-teal-500 via-blue-600 to-indigo-700 text-white py-16 px-8 rounded-b-lg shadow-lg">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-semibold">{{ $job->title }}</h1>
            <p class="mt-4 text-lg">{{ $job->company }} | {{ $job->location }}</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto py-16 px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            
            <!-- Left Column (Job Details) -->
            <div class="col-span-2">
                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Deskripsi Pekerjaan</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">{{ $job->description }}</p>
                </div>

                <!-- Tanggung Jawab -->
                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Tanggung Jawab</h3>
                    <ul class="list-disc pl-6 text-gray-600 space-y-2">
                        @foreach(explode("\n", $job->responsibilities) as $responsibility)
                        <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Kualifikasi Pekerjaan -->
                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Kualifikasi Pekerjaan</h3>
                    <p class="text-lg text-gray-600">{{ $job->qualification }}</p>
                </div>

            </div>

            <!-- Right Column (Gaji & Lamaran) -->
            <div>
                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Gaji</h2>
                    <p class="text-2xl font-bold text-gray-800">Rp {{ number_format($job->salary, 0, ',', '.') }}/bulan</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Lamaran</h2>
                    <a href="mailto:{{ $job->contact_email }}" 
                       class="block text-center px-8 py-3 bg-blue-600 text-white rounded-md font-semibold transition-all duration-200 hover:bg-blue-700">
                       Kirim Lamaran
                    </a>
                </div>
            </div>

        </div>

        <!-- Sidebar with Company Info -->
        <div class="mt-16 bg-white rounded-lg shadow-md p-8">
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

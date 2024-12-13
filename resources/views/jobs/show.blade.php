<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pekerjaan - {{ $job->title }} - JobConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans leading-relaxed text-gray-900">
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-teal-500 via-blue-600 to-indigo-700 text-white py-16 px-8 rounded-b-lg shadow-lg">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">{{ $job->title }}</h1>
            <p class="mt-4 text-xl">{{ $job->company }} | {{ $job->location }}</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto py-16 px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Job Details -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Deskripsi Pekerjaan</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-8">{{ $job->description }}</p>

                <!-- Tanggung Jawab -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold text-gray-800">Tanggung Jawab</h3>
                    <ul class="list-disc pl-6 mt-4 text-gray-600 space-y-2">
                        @foreach(explode("\n", $job->responsibilities) as $responsibility)
                            <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Gaji dan Lamaran -->
                <div class="mt-8 flex items-center justify-between">
                    <p class="text-xl font-semibold text-gray-800">Gaji: Rp {{ number_format($job->salary, 0, ',', '.') }}/bulan</p>
                    <a href="mailto:{{ $job->contact_email }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300">Kirim Lamaran</a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6">Informasi Perusahaan</h3>
                <div class="space-y-4">
                    <div class="flex items-center text-gray-600">
                        <span class="font-semibold w-32">Nama Perusahaan:</span>
                        <span>{{ $job->company }}</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <span class="font-semibold w-32">Lokasi:</span>
                        <span>{{ $job->location }}</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <span class="font-semibold w-32">Kontak Email:</span>
                        <a href="mailto:{{ $job->contact_email }}" class="text-blue-600 hover:text-blue-800">{{ $job->contact_email }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

</body>

</html>

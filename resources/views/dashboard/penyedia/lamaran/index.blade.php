@extends('layouts.penyedia.app')

@section('content')

    <body class="bg-black font-sans antialiased h-screen flex flex-col">

        <!-- Hero Section -->
        <section class="relative bg-gradient-to-r from-black to-gray-800 text-white flex-grow">
            <img alt="Background image of a professional office environment"
                class="absolute inset-0 w-full h-full object-cover opacity-20" height="1080"
                src="https://images.unsplash.com/photo-1514894780887-121968d00567?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                width="1920" />
            <div class="relative z-10 max-w-screen-xl mx-auto text-center py-20">
                <h1 class="text-5xl font-extrabold mb-4 animate__animated animate__fadeInDown">Daftar Lamaran Pekerjaan</h1>
                <p class="text-lg mb-8 animate__animated animate__fadeInUp">Lihat semua lamaran yang telah diterima dan
                    statusnya.</p>
            </div>
        </section>

        <!-- Daftar Lamaran Pekerjaan Section -->
        <section class="py-24 px-6 bg-gray-900 flex-grow">
            <div class="bg-gray-800 bg-opacity-90 rounded-lg p-6 shadow-lg">
                @if ($jobApplications->isNotEmpty())
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($jobApplications as $jobApplication)
                            <div
                                class="p-6 bg-gradient-to-r from-gray-700 to-gray-800 rounded-lg shadow-md transition transform hover:scale-105 hover:shadow-lg">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-circle-user-round">
                                        <path d="M18 20a6 6 0 0 0-12 0" />
                                        <circle cx="12" cy="10" r="4" />
                                        <circle cx="12" cy="12" r="10" />
                                    </svg>
                                    <span class="font-medium">ID User:</span>
                                    <h2 class="text-xl font-semibold text-green-400">{{ $jobApplication->seeker_id }}</h2>
                                </div>
                                <p class="text-gray-300 mb-4">{{ $jobApplication->applied_at }}</p>

                                <div class="text-sm text-gray-300">
                                    <span class="font-medium">ID Job:
                                        <span
                                            class="text-{{ $jobApplication->status == 'Accepted' ? 'green-400' : ($jobApplication->status == 'Rejected' ? 'red-400' : 'yellow-400') }}">
                                            {{ $jobApplication->job_id }}
                                        </span>
                                    </span>
                                </div>

                                <div class="text-sm text-gray-300">
                                    <span class="font-medium">Status:
                                        <span
                                            class="text-{{ $jobApplication->status == 'Accepted' ? 'green-400' : ($jobApplication->status == 'Rejected' ? 'red-400' : 'yellow-400') }}">
                                            {{ $jobApplication->status }}
                                        </span>
                                    </span>
                                </div>

                                <!-- Tombol untuk menampilkan informasi tambahan -->
                                <div class="mt-4">
                                    <button onclick="toggleDetails(this)"
                                        class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white px-4 py-2 rounded-lg hover:from-green-600 hover:to-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 transition transform hover:scale-105">
                                        <i class="fas fa-eye mr-2"></i> Lihat Detail
                                    </button>
                                </div>

                                <!-- Informasi tambahan yang disembunyikan -->
                                <div class="hidden mt-4 details">
                                    <p class="text-gray-300"><strong>Tanggal:</strong>
                                        {{ $jobApplication->created_at->format('d-m-Y') }}</p>
                                    <p class="text-gray-300"><strong>Job:</strong> {{ $jobApplication->status }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-gray-400">Tidak ada lamaran pekerjaan yang ditemukan.</p>
                @endif
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="bg-black text-white py-6">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} BisaKerja.org</p>
            </div>
        </footer>

        <!-- Include Font Awesome for Icons -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- Include Animate.css for Animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <script>
            function toggleDetails(button) {
                // Mendapatkan elemen detail yang terkait
                const details = button.closest('.p-6').querySelector('.details');
                // Toggle visibility
                if (details.classList.contains('hidden')) {
                    details.classList.remove('hidden');
                    button.textContent = 'Sembunyikan Detail';
                } else {
                    details.classList.add('hidden');
                    button.textContent = 'Lihat Detail';
                }
            }
        </script>
    </body>
@endsection

@extends('layouts.admin.app')

@section('title', 'Detail Pekerjaan')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-4xl mx-auto mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-gray-800">Detail Pekerjaan</h2>
            <a href="{{ route('moderasi-pekerjaan') }}" class="px-6 py-2 bg-gray-800 text-white font-bold rounded-lg shadow-md hover:bg-gray-700">
                Kembali
            </a>
        </div>

        <!-- Card Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Informasi Utama -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4 border-b pb-2">Informasi Umum</h3>
                <p class="text-base text-gray-600 mb-2"><strong>ID Pekerjaan:</strong> {{ $job->id }}</p>
                <p class="text-base text-gray-600 mb-2"><strong>Judul:</strong> {{ $job->title }}</p>
                <p class="text-base text-gray-600 mb-2"><strong>Lokasi:</strong> {{ $job->location }}</p>
                <p class="text-base text-gray-600 mb-2"><strong>Durasi:</strong> {{ $job->duration }}</p>
                <p class="text-base text-gray-600 mb-2"><strong>Status:</strong>
                    @if ($job->status === 'Pending')
                        <span class="px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full text-sm">Pending</span>
                    @elseif ($job->status === 'Active')
                        <span class="px-3 py-1 bg-green-200 text-green-800 rounded-full text-sm">Active</span>
                    @elseif ($job->status === 'Completed')
                        <span class="px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">Completed</span>
                    @elseif ($job->status === 'Cancelled')
                        <span class="px-3 py-1 bg-red-200 text-red-800 rounded-full text-sm">Cancelled</span>
                    @endif
                </p>
                <p class="text-base text-gray-600"><strong>Gaji:</strong> Rp {{ number_format($job->wage, 0, ',', '.') }}</p>
            </div>

            <!-- Deskripsi -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4 border-b pb-2">Deskripsi</h3>
                <p class="text-gray-700 text-base leading-relaxed">
                    {{ $job->description }}
                </p>
            </div>
        </div>

        <!-- Persyaratan -->
        <div class="mt-6 p-6 bg-gray-100 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-700 mb-4 border-b pb-2">Persyaratan</h3>
            <p class="text-gray-700 text-base leading-relaxed">
                {{ $job->requirements }}
            </p>
        </div>

        <!-- Tombol Aksi -->
        @if ($job->status === 'Pending')
            <div class="mt-8 flex justify-center space-x-6">
                <!-- Tombol Setujui -->
                <form action="{{ route('moderasi-pekerjaan.approve', $job->job_id) }}" method="POST">
                    @csrf
                    <button type="submit" class="px-6 py-3 bg-green-600 text-white font-bold rounded-lg shadow-md hover:bg-green-700">
                        Setujui
                    </button>
                </form>

                <!-- Tombol Tolak -->
                <button onclick="showRejectModal()" class="px-6 py-3 bg-red-600 text-white font-bold rounded-lg shadow-md hover:bg-red-700">
                    Tolak
                </button>
            </div>
        @endif
    </div>

    <!-- Modal untuk Alasan Penolakan -->
    <div id="rejectModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h3 class="text-xl font-bold text-gray-700 mb-4">Alasan Penolakan</h3>
            <form action="{{ route('moderasi-pekerjaan.reject', $job->job_id) }}" method="POST">
                @csrf
                <textarea name="reason" class="w-full h-32 p-3 border border-gray-300 rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Masukkan alasan penolakan..." required></textarea>
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="closeRejectModal()" class="px-4 py-2 bg-gray-500 text-white font-bold rounded-lg hover:bg-gray-600">
                        Batal
                    </button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700">
                        Tolak
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Modal -->
    <script>
        function showRejectModal() {
            document.getElementById('rejectModal').classList.remove('hidden');
        }

        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
        }
    </script>
@endsection

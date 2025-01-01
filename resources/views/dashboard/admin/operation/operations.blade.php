@extends('layouts.admin.app')

@section('title', 'Pengelolaan Data Operasional')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pengelolaan Data Operasional</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk mengelola data operasional yang terkait dengan pekerjaan dan pengguna.</p>

        <!-- Daftar Pekerjaan -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gradient-to-r from-blue-500 to-green-500 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-bold">ID Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-bold">Judul Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-bold">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-bold">Pelamar</th>
                        <th class="px-4 py-2 text-left text-sm font-bold">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                        <tr class="border-b hover:bg-gray-100 transition-all duration-200">
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $job->job_id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $job->title }}</td>
                            <td class="px-4 py-2 text-sm">
                                <span class="px-3 py-1 rounded-full shadow-md 
                                    @if($job->status == 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($job->status == 'completed') bg-green-100 text-green-800
                                    @elseif($job->status == 'active') bg-blue-100 text-blue-800
                                    @elseif($job->status == 'cancelled') bg-red-100 text-red-800
                                    @else bg-gray-100 text-gray-800
                                    @endif
                                ">
                                    {{ ucfirst($job->status) }}
                                </span>
                            </td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $job->applications->count() }} Pelamar</td>
                            <td class="px-4 py-2 text-sm relative">
                                <div class="inline-block text-left">
                                    <button onclick="toggleDropdown(this)" class="inline-flex justify-between items-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-gray-100 text-gray-800 text-sm font-medium focus:outline-none hover:bg-gray-200">
                                     
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10 hidden">
                                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                            <a href="{{ route('admin.operations.edit', $job->job_id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                            <form action="{{ route('admin.operations.updateStatus', $job->job_id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="pending">
                                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-yellow-800 hover:bg-yellow-100">Pending</button>
                                            </form>
                                            <form action="{{ route('admin.operations.updateStatus', $job->job_id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="active">
                                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-blue-800 hover:bg-blue-100">Active</button>
                                            </form>
                                            <form action="{{ route('admin.operations.updateStatus', $job->job_id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="completed">
                                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-green-800 hover:bg-green-100">Completed</button>
                                            </form>
                                            <form action="{{ route('admin.operations.updateStatus', $job->job_id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="status" value="cancelled">
                                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-800 hover:bg-red-100">Cancelled</button>
                                            </form>
                                            <form action="{{ route('admin.operations.destroy', $job->job_id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-red-200">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleDropdown(button) {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
        }

        // Klik di luar dropdown untuk menutup
        document.addEventListener('click', function(event) {
            const dropdowns = document.querySelectorAll('.origin-top-right');
            dropdowns.forEach(dropdown => {
                if (!dropdown.contains(event.target) && !dropdown.previousElementSibling.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>
@endsection

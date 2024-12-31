@extends('layouts.admin.app')

@section('title', 'Pengelolaan Data Operasional')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Pengelolaan Data Operasional</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk mengelola data operasional yang terkait dengan pekerjaan dan pengguna.</p>

        <!-- Daftar Pekerjaan -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Judul Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Pelamar</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $job->job_id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $job->title }}</td>
                            <td class="px-4 py-2 text-sm">
                                <span class="px-3 py-1 rounded-full 
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
                            <td class="px-4 py-2 text-sm">
                                <a href="{{ route('admin.operations.edit', $job->job_id) }}" class="text-blue-600 hover:text-blue-800">Edit</a> |
                                <a href="#" class="text-yellow-600 hover:text-yellow-800">Ganti Status</a> 
                                <form action="{{ route('admin.operations.destroy', $job->job_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 bg-transparent border-none cursor-pointer">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Data Pengguna -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pengguna</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Jenis</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $index + 1 }}</td> <!-- Nomor urut -->
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $user->name }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $user->role == 'pencari' ? 'Pencari Kerja' : 'Penyedia Kerja' }}</td>
                        <td class="px-4 py-2 text-sm">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">{{ $user->status == 'active' ? 'Active' : 'Nonaktif' }}</span>
                        </td>
                        <td class="px-4 py-2 text-sm">
                            @if($user->status == 'active')
                                <form action="{{ route('admin.operations.users.deactivate', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="text-red-600 hover:text-red-800 bg-transparent border-none cursor-pointer">Nonaktifkan</button>
                                </form>
                            @else
                                <form action="{{ route('admin.operations.users.activate', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="text-green-600 hover:text-green-800 bg-transparent border-none cursor-pointer">Aktifkan</button>
                                </form>
                            @endif
                        </td>   
                    </tr>
                @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
@endsection

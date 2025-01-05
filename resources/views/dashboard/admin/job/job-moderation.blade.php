@extends('layouts.admin.app')

@section('title', 'Moderasi Pekerjaan')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Moderasi Pekerjaan</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk moderasi pekerjaan yang diposting oleh penyedia kerja.</p>

        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Judul</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jobs as $job)
                        <tr class="border-b">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $job->job_id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $job->title }}</td>
                            <td class="px-6 py-4 text-sm">
                                @if ($job->status === 'Pending')
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending</span>
                                @elseif ($job->status === 'Active')
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Active</span>
                                @elseif ($job->status === 'Completed')
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Completed</span>
                                @elseif ($job->status === 'Cancelled')
                                    <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs">Cancelled</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <a href="{{ route('moderasi-pekerjaan.detail', $job->job_id) }}" 
                                   class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">Tidak ada pekerjaan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

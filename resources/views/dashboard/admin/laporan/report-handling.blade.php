@extends('layouts.admin.app')

@section('title', 'Penanganan Laporan')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Penanganan Laporan</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk menangani laporan konflik antara penyedia kerja dan pencari kerja.</p>

        <!-- Daftar Laporan -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Laporan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nama Pelapor</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Pekerjaan Terkait</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Deskripsi Masalah</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Bukti</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status Laporan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reports as $report)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm">{{ $report->id }}</td>
                            <td class="px-4 py-2 text-sm">{{ $report->user->name }}</td>
                            <td class="px-4 py-2 text-sm">{{ $report->job->title }}</td>
                            <td class="px-4 py-2 text-sm">{{ Str::limit($report->description, 50) }}</td>
                            <td class="px-4 py-2 text-sm">
                                @if ($report->evidence)
                                    <a href="{{ asset($report->evidence) }}" target="_blank" class="text-blue-600 hover:text-blue-800">Lihat Bukti</a>
                                @else
                                    <span class="text-gray-500">Tidak Ada</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 text-sm">
                                @if ($report->status === 'Pending')
                                    <span class="px-3 py-1 bg-yellow-300 text-yellow-800 rounded-full">Pending</span>
                                @elseif ($report->status === 'Resolved')
                                    <span class="px-3 py-1 bg-green-300 text-green-800 rounded-full">Resolved</span>
                                @elseif ($report->status === 'Escalated')
                                    <span class="px-3 py-1 bg-red-300 text-red-800 rounded-full">Escalated</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 text-sm">
                                @if ($report->status === 'Pending')
                                    <form action="{{ route('admin.reports.resolve', $report->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="text-green-600 hover:text-green-800">Mark as Resolved</button>
                                    </form>
                                    |
                                    <form action="{{ route('admin.reports.escalate', $report->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="text-red-600 hover:text-red-800">Escalate</button>
                                    </form>
                                @else
                                    <span class="text-gray-500">No Actions</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 text-center text-sm text-gray-500">Tidak ada laporan yang tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

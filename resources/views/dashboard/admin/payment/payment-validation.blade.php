@extends('layouts.admin.app')

@section('title', 'Validasi Pembayaran')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Validasi Pembayaran</h2>
        <p class="text-gray-600 mb-6">Halaman ini digunakan untuk memverifikasi pembayaran yang dilakukan oleh penyedia kerja.</p>

        <!-- Daftar Pembayaran -->
        <div class="overflow-x-auto shadow-md rounded-lg mb-8">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pekerjaan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID Pencari Kerja</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nominal Pembayaran</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Status Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($escrows as $escrow)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm">{{ $escrow->job_id }}</td>
                            <td class="px-4 py-2 text-sm">{{ $escrow->seeker_id }}</td>
                            <td class="px-4 py-2 text-sm">Rp {{ number_format($escrow->amount, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 text-sm">
                                @if($escrow->status == 'Pending')
                                    <span class="text-yellow-500">Pending</span>
                                @elseif($escrow->status == 'Validated')
                                    <span class="text-green-500">Validated</span>
                                @elseif($escrow->status == 'Rejected')
                                    <span class="text-red-500">Rejected</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

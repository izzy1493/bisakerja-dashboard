@extends('layouts.superadmin.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Monitoring Keuangan</h2>

    <!-- Laporan Keuangan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Total Pemasukan -->
        <div class="bg-blue-100 p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Pemasukan</h3>
            <p class="text-xl font-bold text-blue-600 mt-2">Rp{{ number_format($totalAmount, 0, ',', '.') }}</p>
        </div>
        <!-- Total Pengeluaran -->
        <div class="bg-red-100 p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Pengeluaran</h3>
            <p class="text-xl font-bold text-red-600 mt-2">Rp{{ number_format($escrowAmount, 0, ',', '.') }}</p>
        </div>
    </div>

    <!-- Transaksi -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
        <!-- Transaksi Selesai -->
        <div class="bg-green-100 p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Transaksi Selesai</h3>
            <p class="text-xl font-bold text-green-600 mt-2">Rp{{ number_format($paymentValidatedAmount, 0, ',', '.') }}</p>
        </div>
        <!-- Transaksi Pending -->
        <div class="bg-yellow-100 p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Transaksi Pending</h3>
            <p class="text-xl font-bold text-yellow-600 mt-2">Rp{{ number_format($paymentRejectedAmount, 0, ',', '.') }}</p>
        </div>
    </div>

    <!-- Daftar Transaksi Pembayaran -->
    <div class="mt-6">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Transaksi Pembayaran</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse bg-white rounded-md shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID Transaksi</th>
                        <th class="px-4 py-2 text-left">Pekerjaan</th>
                        <th class="px-4 py-2 text-left">Nama Penyedia</th>
                        <th class="px-4 py-2 text-left">Jumlah</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments as $payment)
                        <tr class="border-b hover:bg-gray-50 transform transition-all duration-300 hover:scale-105">
                            <td class="px-4 py-2">{{ $payment['payment_id'] }}</td>
                            <td class="px-4 py-2">{{ $payment->job->title }}</td>
                            <td class="px-4 py-2">{{ $payment->provider->name }}</td>
                            <td class="px-4 py-2">Rp{{ number_format($payment['amount'], 0, ',', '.') }}</td>
                            <td class="px-4 py-2 text-{{ $payment['status'] == 'Selesai' ? 'green' : 'yellow' }}-600">{{ $payment['status'] }}</td>
                            <td class="px-4 py-2">{{ $payment->created_at->format('d M Y') }}</td>
                        
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-4 text-center text-gray-500">Tidak ada transaksi tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Tindakan -->
<div class="mt-6">
    <h3 class="text-xl font-semibold text-gray-700 mb-4">Tindakan</h3>
    <ul class="list-disc pl-6 text-gray-700 space-y-2">
        <li>Periksa laporan keuangan secara keseluruhan untuk memastikan keseimbangan.</li>
        <li>Identifikasi transaksi pending untuk langkah tindak lanjut.</li>
        <li>Pastikan semua transaksi selesai dan tidak ada pembayaran tertunda.</li>
    </ul>
</div>
</div>
@endsection

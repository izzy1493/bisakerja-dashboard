@extends('layouts.superadmin.app')

@section('content')
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800">Monitoring Keuangan</h2>

        <!-- Laporan Keuangan -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-blue-50 p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-gray-700">Total Pemasukan</h3>
                <p class="text-xl font-bold text-blue-600 mt-2">Rp {{ number_format($revenue, 0, ',', '.') }}</p>
            </div>
            <div class="bg-red-50 p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-gray-700">Total Pengeluaran</h3>
                <p class="text-xl font-bold text-red-600 mt-2">Rp {{ number_format($expenditure, 0, ',', '.') }}</p>
            </div>
        </div>

        <!-- Transaksi -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-green-50 p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-gray-700">Transaksi Selesai</h3>
                <p class="text-xl font-bold text-green-600 mt-2">Rp {{ number_format($completedTransactions, 0, ',', '.') }}</p>
            </div>
            <div class="bg-yellow-50 p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-gray-700">Transaksi Pending</h3>
                <p class="text-xl font-bold text-yellow-600 mt-2">Rp {{ number_format($pendingTransactions, 0, ',', '.') }}</p>
            </div>
        </div>

        <!-- Daftar Transaksi Pembayaran -->
        <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-700">Daftar Transaksi Pembayaran</h3>
            <table class="min-w-full table-auto mt-4">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID Transaksi</th>
                        <th class="px-4 py-2 text-left">Jumlah</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $transaction['id'] }}</td>
                            <td class="px-4 py-2">Rp {{ number_format($transaction['amount'], 0, ',', '.') }}</td>
                            <td class="px-4 py-2 text-{{ $transaction['status'] == 'Selesai' ? 'green' : 'yellow' }}-600">{{ $transaction['status'] }}</td>
                            <td class="px-4 py-2">{{ $transaction['date'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tindakan -->
        <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-700">Tindakan</h3>
            <div class="mt-4">
                <ul class="list-disc pl-5 text-gray-700">
                    <li>Melihat laporan keuangan secara keseluruhan untuk memastikan pemasukan dan pengeluaran seimbang.</li>
                    <li>Identifikasi anomali atau masalah keuangan berdasarkan transaksi yang pending atau tidak sesuai.</li>
                    <li>Pastikan semua transaksi selesai dan tidak ada pembayaran yang tertunda.</li>
                </ul>
            </div>
        </div>
    </div>

   

@endsection

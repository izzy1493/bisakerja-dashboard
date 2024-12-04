<x-admin-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Penanganan Laporan</h1>

        @foreach ($reports as $report)
            <div class="bg-white shadow p-4 mb-4 rounded-lg">
                <h2 class="font-bold">{{ $report['reporter_name'] }} (Laporan untuk: {{ $report['job_title'] }})</h2>
                <p><strong>Deskripsi Masalah:</strong> {{ $report['description'] }}</p>
                <img src="{{ $report['evidence'] }}" alt="Bukti Laporan" class="w-1/3 my-4">
                <p>Status: {{ $report['status'] }}</p>

                <div class="mt-4">
                    <form method="POST" action="{{ route('admin.reports.resolve', $report['id']) }}" class="inline-block">
                        @csrf
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Tandai Selesai</button>
                    </form>
                    <form method="POST" action="{{ route('admin.reports.escalate', $report['id']) }}" class="inline-block ml-2">
                        @csrf
                        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Eskalasi</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-admin-layout>

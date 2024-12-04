<x-admin-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Detail Laporan</h1>
        <div class="bg-white shadow p-6">
            <h2 class="font-bold">{{ $report['reporter_name'] }}</h2>
            <p>Pekerjaan terkait: {{ $report['job_title'] }}</p>
            <p>Deskripsi Masalah: {{ $report['description'] }}</p>
            <img src="{{ $report['evidence'] }}" alt="Bukti Laporan" class="w-1/3 my-4">
            <p>Status: {{ $report['status'] }}</p>

            <div class="mt-4">
                <form method="POST" action="{{ route('admin.reports.resolve', $report['id']) }}" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Tandai Selesai</button>
                </form>
                <form method="POST" action="{{ route('admin.reports.escalate', $report['id']) }}" class="inline-block ml-2">
                    @csrf
                    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Eskalasi ke Superadmin</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Detail Pekerjaan</h1>

        <div class="bg-white shadow p-6 mb-6 rounded-lg">
            <h2 class="font-bold text-xl">{{ $job['title'] }}</h2>
            <p><strong>Deskripsi:</strong> {{ $job['description'] }}</p>
            <p><strong>Lokasi:</strong> {{ $job['location'] }}</p>
            <p><strong>Durasi:</strong> {{ $job['duration'] }}</p>
            <p><strong>Status:</strong> {{ $job['status'] }}</p>
        </div>

        <div class="mt-4">
            <form method="POST" action="{{ route('admin.jobs.approve', $job['id']) }}" class="inline-block">
                @csrf
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Setujui</button>
            </form>

            <form method="POST" action="{{ route('admin.jobs.reject', $job['id']) }}" class="inline-block ml-2">
                @csrf
                <textarea name="reason" placeholder="Alasan penolakan" class="w-full mt-2 p-2 border rounded" rows="4"></textarea>
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-2">Tolak</button>
            </form>
        </div>
    </div>
</x-admin-layout>

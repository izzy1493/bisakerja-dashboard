<x-admin-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Moderasi Pekerjaan</h1>

        @foreach ($jobs as $job)
            <div class="bg-white shadow p-4 mb-4 rounded-lg">
                <h2 class="font-bold">{{ $job['title'] }}</h2>
                <p>{{ $job['description'] }}</p>
                <p><strong>Lokasi:</strong> {{ $job['location'] }}</p>
                <p><strong>Durasi:</strong> {{ $job['duration'] }}</p>
                <p>Status: {{ $job['status'] }}</p>

                <div class="mt-4">
                    <form method="POST" action="{{ route('admin.jobs.approve', $job['id']) }}" class="inline-block">
                        @csrf
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Setujui</button>
                    </form>
                    <form method="POST" action="{{ route('admin.jobs.reject', $job['id']) }}" class="inline-block ml-2">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Tolak</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-admin-layout>

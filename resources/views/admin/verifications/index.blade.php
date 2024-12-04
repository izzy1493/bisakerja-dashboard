<x-admin-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Verifikasi Pengguna</h1>

        @foreach ($verifications as $verification)
            <div class="bg-white shadow p-4 mb-4 rounded-lg">
                <h2 class="font-bold">{{ $verification['name'] }} ({{ $verification['role'] }})</h2>
                <p><strong>No. KTP/SIM:</strong> {{ $verification['ktp'] }}</p>
                <img src="{{ $verification['ktp_image'] }}" alt="KTP" class="w-1/4 mb-4">
                <img src="{{ $verification['selfie_image'] }}" alt="Selfie" class="w-1/4 mb-4">
                <p>Status Verifikasi: {{ $verification['status'] }}</p>

                <div class="mt-4">
                    <form method="POST" action="{{ route('admin.verifications.approve', $verification['id']) }}" class="inline-block">
                        @csrf
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Setujui</button>
                    </form>
                    <form method="POST" action="{{ route('admin.verifications.reject', $verification['id']) }}" class="inline-block ml-2">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Tolak</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-admin-layout>

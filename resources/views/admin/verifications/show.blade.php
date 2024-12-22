<x-admin-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Detail Verifikasi</h1>
        <div class="bg-white shadow p-6">
            <h2 class="font-bold">{{ $verification['name'] }}</h2>
            <p>Nomor KTP/SIM: {{ $verification['ktp'] }}</p>
            <img src="{{ $verification['ktp_image'] }}" alt="Foto KTP/SIM" class="w-1/3 my-4">
            <img src="{{ $verification['selfie_image'] }}" alt="Foto Selfie" class="w-1/3 my-4">
            <p>Status: {{ $verification['status'] }}</p>

            <div class="mt-4">
                <form method="POST" action="{{ route('admin.verifications.approve', $verification['id']) }}" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Setujui</button>
                </form>
                <form method="POST" action="{{ route('admin.verifications.reject', $verification['id']) }}" class="inline-block ml-2">
                    @csrf
                    <input type="text" name="reason" placeholder="Alasan penolakan" class="border px-2 py-1">
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Tolak</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

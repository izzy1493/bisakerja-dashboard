<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Selesai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
        <h1 class="text-2xl font-semibold mb-4">Konfirmasi Selesai</h1>

        <form action="{{ route('penyedia.konfirmasi_selesai') }}" method="POST">
            @csrf <!-- Laravel membutuhkan ini untuk keamanan -->
            <textarea name="ulasan" placeholder="Berikan ulasan" required></textarea>
            <input type="hidden" name="pekerjaan_id" value="{{ $pekerjaan->id }}">
            <button type="submit">Konfirmasi Selesai</button>
        </form>
    </div>
</body>

</html>
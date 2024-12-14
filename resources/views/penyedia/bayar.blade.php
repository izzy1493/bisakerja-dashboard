<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Fee</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-8">
        <h1 class="text-2xl font-semibold mb-4">Bayar Fee</h1>

        <form action="{{ route('penyedia.store_bayar_fee') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="metode_pembayaran" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
                <input type="text" id="metode_pembayaran" name="metode_pembayaran" class="w-full p-2 mt-2 border border-gray-300 rounded-lg" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600">Bayar Fee</button>
        </form>
    </div>
</body>
</html>
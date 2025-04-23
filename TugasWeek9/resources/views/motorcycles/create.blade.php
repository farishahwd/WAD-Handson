<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Motor Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">

    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Input Motor Baru</h1>

        <form method="POST" action="{{ route('motorcycles.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Merk</label>
                <input type="text" name="merk" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Tipe</label>
                <input type="text" name="tipe" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Tahun</label>
                <input type="number" name="tahun" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Harga Sewa (per hari)</label>
                <input type="number" name="harga_sewa" class="w-full border rounded px-3 py-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Simpan
            </button>
        </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tambahkan Tailwind CSS -->
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Dashboard</h1>

            <!-- Tombol logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>

        <!-- Menu Input Motor -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Menu</h2>

            <a href="{{ route('motorcycles.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                + Input Motor Baru
            </a>

            <a href="{{ route('motorcycles.index') }}" class="inline-block ml-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                📋 Lihat Daftar Motor
            </a>
        </div>
    </div>

</body>
</html>

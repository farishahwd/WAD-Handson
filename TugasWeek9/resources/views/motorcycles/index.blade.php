<!-- resources/views/motorcycles/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>🏍️ Daftar Motor yang Tersedia</h2>
            <div>
                <a href="{{ route('motorcycles.create') }}" class="btn btn-primary btn-sm">+ Tambah Motor</a>
                <a href="{{ route('logout') }}" class="btn btn-danger btn-sm ms-2">Logout</a>
            </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Harga Sewa (per hari)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($motorcycles as $motor)
                        <tr>
                            <th scope="row">{{ $motor->id }}</th>
                            <td>{{ $motor->merk }}</td>
                            <td>{{ $motor->tipe }}</td>
                            <td>{{ $motor->tahun }}</td>
                            <td>Rp {{ number_format($motor->harga_sewa, 0, ',', '.') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data motor tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>

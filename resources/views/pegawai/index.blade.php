<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Background halaman yang lebih lembut */
        }
        .container {
            margin-top: 20px; /* Jarak atas kontainer */
        }
        h1 {
            color: #343a40; /* Warna judul */
        }
        .table-hover tbody tr:hover {
            background-color: #e9ecef; /* Efek hover pada baris tabel */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pegawai)
                    <tr>
                        <td>{{ $pegawai->id_aktor }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->role }}</td>
                        <td>
                            <a href="{{ route('pegawai.show', $pegawai->id_aktor) }}" class="btn btn-success btn-sm">Lihat</a>
                            <a href="{{ route('pegawai.edit', $pegawai->id_aktor) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pegawai.destroy', $pegawai->id_aktor) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

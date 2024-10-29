<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai Kindai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Menambahkan Bootstrap -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ini Pegawai</h1>
        <h1 class="text-2xl font-bold mb-4">Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        
        <table class="table table-bordered">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

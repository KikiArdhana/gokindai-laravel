<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Pegawai</a>
        <table class="min-w-full bg-white border border-gray-200 mt-4">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Role</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pegawai)
                    <tr>
                        <td class="py-5 px-4 border-b">{{ $pegawai->id_aktor }}</td>
                        <td class="py-5 px-4 border-b">{{ $pegawai->nama }}</td>
                        <td class="py-5 px-4 border-b">{{ $pegawai->role }}</td>
                        <td class="py-5 px-4 border-b">
                            <a href="{{ route('pegawai.show', $pegawai->id_aktor) }}" class="bg-green-500 text-white px-2 py-1 rounded">Lihat</a>
                            <a href="{{ route('pegawai.edit', $pegawai->id_aktor) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <form action="{{ route('pegawai.destroy', $pegawai->id_aktor) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">Detail Pegawai</h1>
        <p><strong>ID:</strong> {{ $pegawai->id_aktor }}</p>
        <p><strong>Nama:</strong> {{ $pegawai->nama }}</p>
        <p><strong>Role:</strong> {{ $pegawai->role }}</p>
        <a href="{{ route('pegawai.edit', $pegawai->id_aktor) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
        <a href="{{ route('pegawai.index') }}" class="ml-2 text-blue-500">Kembali</a>
    </div>
</body>
</html>

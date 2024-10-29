<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">{{ $menu->nama_item }}</h1>
        <p><strong>Harga:</strong> {{ $menu->harga }}</p>
        <p><strong>Kategori:</strong> {{ $menu->kategori }}</p>
        <a href="{{ route('menu.index') }}" class="btn btn-primary mt-4">Kembali</a>
    </div>
</body>
</html>
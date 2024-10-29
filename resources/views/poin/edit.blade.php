<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Poin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Poin</h1>
    <form action="{{ route('poin.update', $poin->id_poin) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_poin">Nama Poin</label>
            <input type="text" class="form-control" id="nama_poin" name="nama_poin" value="{{ $poin->nama_poin }}" required>
        </div>
        <div class="form-group">
            <label for="poin_diperoleh">Poin Diperoleh</label>
            <input type="number" class="form-control" id="poin_diperoleh" name="poin_diperoleh" value="{{ $poin->poin_diperoleh }}" required>
        </div>
        <div class="form-group">
            <label for="poin_dapat_digunakan">Poin Dapat Digunakan</label>
            <input type="number" class="form-control" id="poin_dapat_digunakan" name="poin_dapat_digunakan" value="{{ $poin->poin_dapat_digunakan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('poin.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

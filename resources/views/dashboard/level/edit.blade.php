<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Level</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Level</h1>
    <form action="{{ route('level.update', $level->id_level) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_level">Nama Level</label>
            <input type="text" class="form-control" id="nama_level" name="nama_level" value="{{ $level->nama_level }}" required>
        </div>
        <div class="form-group">
            <label for="poin_diperoleh">Poin Diperoleh</label>
            <input type="number" class="form-control" id="poin_diperoleh" name="poin_diperoleh" value="{{ $level->poin_diperoleh }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('level.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

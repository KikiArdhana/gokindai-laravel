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
    <h1 class="text-2xl font-bold mb-4">Edit Poin</h1>
    
    <form action="{{ route('poin.update', $poin->id_poin) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="jumlah_poin">Jumlah Poin</label>
            <input type="number" class="form-control" id="jumlah_poin" name="jumlah_poin" value="{{ $poin->jumlah_poin }}" required>
        </div>
        
        <div class="form-group">
            <label for="tanggal_diberikan">Tanggal Diberikan</label>
            <input type="date" class="form-control" id="tanggal_diberikan" name="tanggal_diberikan" value="{{ $poin->tanggal_diberikan }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('poin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

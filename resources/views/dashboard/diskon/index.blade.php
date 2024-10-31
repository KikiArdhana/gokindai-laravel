<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Diskon Kindai</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

@if (session('success'))
    <script>
        toastr.success('{{ session('success') }}');
    </script>
@endif

<div class="container mt-5">
    <h1 class="text-2xl font-bold mb-4">Daftar Diskon</h1>
    <a href="{{ route('diskon.create') }}" class="btn btn-primary mb-3">Tambah Diskon</a>
    
    <table class="table table-bordered">
        <thead class="thead-light text-center">
            <tr>
                <th>ID Promo</th>
                <th>Syarat Pembelian</th>
                <th>Diskon</th>
                <th>Nama Promo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diskon as $diskon)
                <tr class="text-center">
                    <td>{{ $diskon->id_promo }}</td>
                    <td>{{ $diskon->syarat_pembelian }}</td>
                    <td>{{ $diskon->diskon }}%</td>
                    <td>{{ $diskon->nama_promo }}</td>
                    <td>
                        <a href="{{ route('diskon.edit', $diskon->id_promo) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" onclick="setDeleteForm('{{ route('diskon.destroy', $diskon->id_promo) }}')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus diskon ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form id="deleteForm" action="" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    function setDeleteForm(actionUrl) {
        document.getElementById('deleteForm').action = actionUrl;
    }
</script>
</body>
</html>

<!-- resources/views/pegawai/index.blade.php -->
@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@section('content')
<a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Aktor</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->id_aktor }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->role }}</td>
            <td>
                <a href="{{ route('pegawai.edit', $p->id_aktor) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pegawai.destroy', $p->id_aktor) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

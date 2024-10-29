<?php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menampilkan daftar semua pegawai
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    // Menampilkan form untuk menambahkan pegawai
    public function create()
    {
        return view('pegawai.create');
    }

    // Menyimpan pegawai baru
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'role' => 'required|string|max:255',
    ]);

    Pegawai::create($request->all());
    return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
}

    // Menampilkan detail pegawai tertentu
    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

   // Menampilkan form untuk mengedit pegawai
public function edit($id)
{
    $pegawai = Pegawai::findOrFail($id);
    return view('pegawai.edit', compact('pegawai'));
}


   // Memperbarui pegawai yang telah ada
public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'role' => 'required|string|max:255',
    ]);

    $pegawai = Pegawai::findOrFail($id);
    $pegawai->update($request->all());
    return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
}

    // Menghapus pegawai
public function destroy($id)
{
    $pegawai = Pegawai::findOrFail($id);
    $pegawai->delete();
    return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
}
}


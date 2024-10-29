<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;

class PoinController extends Controller
{
    public function index()
    {
        $poin = Poin::all();
        return view('poin.index', compact('poin'));
    }

    public function create()
    {
        return view('poin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_poin'    => 'required|integer',
            'tanggal_diberikan' => 'required|date',
        ]);

        Poin::create($request->all());
        return redirect()->route('poin.index')->with('success', 'Poin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $poin = Poin::findOrFail($id);
        return view('poin.edit', compact('poin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jumlah_poin'    => 'required|integer',
            'tanggal_diberikan' => 'required|date',
        ]);

        $poin = Poin::findOrFail($id);
        $poin->update($request->all());
        return redirect()->route('poin.index')->with('success', 'Poin berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $poin = Poin::findOrFail($id);
        $poin->delete();
        return redirect()->route('poin.index')->with('success', 'Poin berhasil dihapus.');
    }
}

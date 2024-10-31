<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $level = Level::all();
        return view('dashboard.level.index', compact('level'));
    }

    public function create()
    {
        return view('dashboard.level.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_level' => 'required|string|max:255',
            'min_poin'   => 'required|integer',
            'max_poin'   => 'required|integer',
        ]);

        Level::create($request->all());
        return redirect()->route('level.index')->with('success', 'Level berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $level = Level::findOrFail($id);
        return view('dashboard.level.edit', compact('level'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_level' => 'required|string|max:255',
            'min_poin'   => 'required|integer',
            'max_poin'   => 'required|integer',
        ]);

        $level = Level::findOrFail($id);
        $level->update($request->all());
        return redirect()->route('level.index')->with('success', 'Level berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();
        return redirect()->route('level.index')->with('success', 'Level berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Menampilkan daftar semua menu
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    // Menampilkan form untuk menambahkan menu
    public function create()
    {
        return view('menu.create');
    }

    // Menyimpan menu baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
        ]);

        Menu::create($request->all());
        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    // Menampilkan detail menu tertentu
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.show', compact('menu'));
    }

    // Menampilkan form untuk mengedit menu
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));
    }

    // Memperbarui menu yang telah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui.');
    }

    // Menghapus menu
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus.');
    }
}

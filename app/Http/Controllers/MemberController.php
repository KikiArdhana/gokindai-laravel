<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::all();
        return view('dashboard.member.index', compact('member'));
    }

    public function create()
    {
        return view('dashboard.member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon'     => 'required|string|max:15',
        ]);

        Member::create($request->all());
        return redirect()->route('member.index')->with('success', 'Member berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('dashboard.member.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon'     => 'required|string|max:15',
        ]);

        $member = Member::findOrFail($id);
        $member->update($request->all());
        return redirect()->route('member.index')->with('success', 'Member berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('member.index')->with('success', 'Member berhasil dihapus.');
    }
}

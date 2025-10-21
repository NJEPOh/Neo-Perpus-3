<?php

namespace App\Http\Controllers;

use App\Models\Denda;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DendaController extends Controller
{
    public function index()
    {
        $denda = Denda::with('peminjaman')->get();
        return view('admin.denda.index', compact('denda'));
    }

    public function create()
    {
        $peminjaman = Peminjaman::all();
        return view('admin.denda.create', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_peminjaman' => 'required',
            'jumlah_denda' => 'required|numeric',
        ]);

        Denda::create($request->all());
        return redirect()->route('denda.index')->with('success', 'Denda berhasil ditambahkan');
    }

    public function edit($id)
    {
        $denda = Denda::findOrFail($id);
        $peminjaman = Peminjaman::all();
        return view('admin.denda.edit', compact('denda', 'peminjaman'));
    }

    public function update(Request $request, $id)
    {
        $denda = Denda::findOrFail($id);
        $denda->update($request->all());
        return redirect()->route('denda.index')->with('success', 'Data denda diperbarui');
    }

    public function destroy($id)
    {
        Denda::destroy($id);
        return redirect()->route('denda.index')->with('success', 'Data denda dihapus');
    }
}

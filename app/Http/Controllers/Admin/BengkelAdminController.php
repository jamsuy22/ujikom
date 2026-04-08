<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bengkel;
use Illuminate\Http\Request;

class BengkelAdminController extends Controller
{
    public function index()
    {
        $bengkels = Bengkel::latest()->get();
        return view('admin.bengkel.index', compact('bengkels'));
    }

    public function create()
    {
        return view('admin.bengkel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bengkel' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Bengkel::create($request->all());

        return redirect()->route('admin.bengkel.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Bengkel $bengkel)
    {
        return view('admin.bengkel.edit', compact('bengkel'));
    }

    public function update(Request $request, Bengkel $bengkel)
    {
        $request->validate([
            'nama_bengkel' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $bengkel->update($request->all());

        return redirect()->route('admin.bengkel.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Bengkel $bengkel)
    {
        $bengkel->delete();

        return redirect()->route('admin.bengkel.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Pelanggan::latest()->get()
        ]);
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $pelanggan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required|unique:pelanggans,no_telp',
            'alamat' => 'nullable',
        ]);

        $pelanggan = Pelanggan::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $pelanggan
        ]);
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required|unique:pelanggans,no_telp,' . $id,
            'alamat' => 'nullable',
        ]);

        $pelanggan->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $pelanggan
        ]);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $pelanggan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil dihapus'
        ]);
    }
}
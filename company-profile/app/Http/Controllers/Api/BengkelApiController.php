<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bengkel;
use Illuminate\Http\Request;

class BengkelApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Bengkel::latest()->get()
        ]);
    }

    public function show($id)
    {
        $bengkel = Bengkel::find($id);

        if (!$bengkel) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $bengkel
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bengkel' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $bengkel = Bengkel::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $bengkel
        ]);
    }

    public function update(Request $request, $id)
    {
        $bengkel = Bengkel::find($id);

        if (!$bengkel) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $bengkel->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $bengkel
        ]);
    }

    public function destroy($id)
    {
        $bengkel = Bengkel::find($id);

        if (!$bengkel) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $bengkel->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil dihapus'
        ]);
    }
}
@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Tambah Layanan</h4>

<div class="bg-white rounded shadow p-4 max-w-xl">

    <form action="{{ route('admin.layanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="block mb-1">Nama Layanan</label>
            <input type="text" name="nama_layanan" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border p-2 rounded" required></textarea>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Harga</label>
            <input type="number" name="harga" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Gambar</label>
            <input type="file" name="gambar" class="w-full border p-2 rounded">
        </div>

        <div class="flex gap-2">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Simpan
            </button>

            <a href="{{ route('admin.layanan.index') }}"
               class="bg-gray-400 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>

    </form>

</div>

@endsection
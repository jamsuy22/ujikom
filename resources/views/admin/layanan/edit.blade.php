@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Edit Layanan</h4>

<div class="bg-white rounded shadow p-4 max-w-xl">

    <form action="{{ route('admin.layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block mb-1">Nama Layanan</label>
            <input type="text"
                   name="nama_layanan"
                   value="{{ $layanan->nama_layanan }}"
                   class="w-full border p-2 rounded"
                   required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Deskripsi</label>
            <textarea name="deskripsi"
                      class="w-full border p-2 rounded"
                      required>{{ $layanan->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Harga</label>
            <input type="number"
                   name="harga"
                   value="{{ $layanan->harga }}"
                   class="w-full border p-2 rounded"
                   required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Gambar</label><br>

            @if($layanan->gambar)
                <img src="{{ asset('storage/'.$layanan->gambar) }}" width="80" class="mb-2">
            @endif

            <input type="file" name="gambar" class="w-full border p-2 rounded">
        </div>

        <div class="flex gap-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

            <a href="{{ route('admin.layanan.index') }}"
               class="bg-gray-400 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>

    </form>

</div>

@endsection
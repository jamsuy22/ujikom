<<<<<<< HEAD
@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Edit Layanan</h4>

<div class="bg-white rounded shadow p-4 max-w-xl">

    <form action="{{ route('admin.layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
=======
@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Edit Layanan</h3>

    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
        @csrf
        @method('PUT')

        <div class="mb-3">
<<<<<<< HEAD
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
=======
            <label>Nama Layanan</label>
            <input type="text" name="nama_layanan" value="{{ $layanan->nama_layanan }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $layanan->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $layanan->harga }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gambar</label><br>
            @if($layanan->gambar)
                <img src="{{ asset('storage/'.$layanan->gambar) }}" width="100"><br><br>
            @endif
            <input type="file" name="gambar" class="form-control">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34

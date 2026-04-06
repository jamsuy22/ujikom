@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Edit Layanan</h3>

    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
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

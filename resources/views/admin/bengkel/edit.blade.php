@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h6>Edit Data Bengkel</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('bengkel.update', $bengkel->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Bengkel</label>
                    <input type="text"
                           name="nama_bengkel"
                           class="form-control"
                           value="{{ $bengkel->nama_bengkel }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control">{{ $bengkel->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="{{ $bengkel->no_hp }}">
                </div>

                <button type="submit" class="btn btn-success">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.backend')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h6>Tambah Data Bengkel</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('bengkel.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Bengkel</label>
                    <input type="text" name="nama_bengkel" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
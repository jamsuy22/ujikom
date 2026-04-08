@extends('layouts.backend')

@section('content')
<<<<<<< HEAD

<h4 class="mb-4 font-bold text-lg">Edit Bengkel</h4>

<div class="bg-white rounded shadow p-4 max-w-xl">

    <form action="{{ route('admin.bengkel.update', $bengkel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block mb-1">Nama Bengkel</label>
            <input type="text"
                   name="nama_bengkel"
                   value="{{ $bengkel->nama_bengkel }}"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Alamat</label>
            <textarea name="alamat"
                      class="w-full border rounded p-2"
                      required>{{ $bengkel->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="block mb-1">No Telp</label>
            <input type="text"
                   name="no_telp"
                   value="{{ $bengkel->no_telp }}"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="flex gap-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

            <a href="{{ route('admin.bengkel.index') }}"
               class="bg-gray-400 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>

    </form>

</div>

=======
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
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
@endsection
@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Edit Pelanggan</h4>

<div class="bg-white rounded shadow p-4 max-w-xl">

    <form action="{{ route('admin.pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block mb-1">Nama</label>
            <input type="text"
                   name="nama"
                   value="{{ $pelanggan->nama }}"
                   class="w-full border p-2 rounded"
                   required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">No Telp</label>
            <input type="text"
                   name="no_telp"
                   value="{{ $pelanggan->no_telp }}"
                   class="w-full border p-2 rounded"
                   required>
        </div>

        <div class="flex gap-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

            <a href="{{ route('admin.pelanggan.index') }}"
               class="bg-gray-400 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>

    </form>

</div>

@endsection
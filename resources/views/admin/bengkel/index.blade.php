@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Data Bengkel</h4>

<div class="bg-white rounded shadow p-4">

    <div class="flex justify-between mb-4">
        <a href="{{ route('admin.bengkel.create') }}"
           class="bg-blue-500 text-white px-3 py-2 rounded">
            + Tambah Bengkel
        </a>
    </div>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Nama</th>
                <th class="p-2">Alamat</th>
                <th class="p-2">No Telp</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($bengkels as $b)
            <tr class="border-t">
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $b->nama_bengkel }}</td>
                <td class="p-2">{{ $b->alamat }}</td>
                <td class="p-2">{{ $b->no_telp }}</td>
                <td class="p-2">
                    <a href="{{ route('admin.bengkel.edit', $b->id) }}"
                       class="text-yellow-500">Edit</a>

                    <form action="{{ route('admin.bengkel.destroy', $b->id) }}"
                          method="POST"
                          class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection
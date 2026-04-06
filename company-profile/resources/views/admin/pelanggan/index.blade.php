@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Data Pelanggan</h4>

<div class="bg-white rounded shadow p-4">

    <div class="flex justify-between mb-4">
        <a href="{{ route('admin.pelanggan.create') }}"
           class="bg-blue-500 text-white px-3 py-2 rounded">
            + Tambah Pelanggan
        </a>
    </div>

    @if(session('success'))
        <div class="mb-3 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Nama</th>
                <th class="p-2">No Telp</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($pelanggans as $p)
            <tr class="border-t">
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $p->nama }}</td>
                <td class="p-2">{{ $p->no_telp }}</td>
                <td class="p-2">
                    <a href="{{ route('admin.pelanggan.edit', $p->id) }}"
                       class="text-yellow-500">Edit</a>

                    <form action="{{ route('admin.pelanggan.destroy', $p->id) }}"
                          method="POST"
                          class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="text-red-500">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center p-3">
                    Data kosong
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>

</div>

@endsection
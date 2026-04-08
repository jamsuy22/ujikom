@extends('layouts.backend')

@section('content')

<h4 class="mb-4 font-bold text-lg">Data Layanan</h4>

<div class="bg-white rounded shadow p-4">

    <div class="flex justify-between mb-4">
        <a href="{{ route('admin.layanan.create') }}"
           class="bg-blue-500 text-white px-3 py-2 rounded">
            + Tambah Layanan
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
                <th class="p-2">Harga</th>
                <th class="p-2">Gambar</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($layanans as $l)
            <tr class="border-t">
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $l->nama_layanan }}</td>
                <td class="p-2">Rp {{ number_format($l->harga) }}</td>
                <td class="p-2">
                    @if($l->gambar)
                        <img src="{{ asset('storage/'.$l->gambar) }}" width="60">
                    @endif
                </td>
                <td class="p-2">
                    <a href="{{ route('admin.layanan.edit', $l->id) }}"
                       class="text-yellow-500">Edit</a>

                    <form action="{{ route('admin.layanan.destroy', $l->id) }}"
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
                <td colspan="5" class="text-center p-3">
                    Data kosong
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>

</div>

@endsection
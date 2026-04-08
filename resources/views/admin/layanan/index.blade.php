<<<<<<< HEAD
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
=======
@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Data Layanan</h3>

    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">
        + Tambah Layanan
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach ($layanans as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_layanan }}</td>
            <td>Rp {{ number_format($item->harga) }}</td>
            <td>
                @if($item->gambar)
                    <img src="{{ asset('storage/'.$item->gambar) }}" width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('layanan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('layanan.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34

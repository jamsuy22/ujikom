@extends('layouts.backend')

@section('content')
<<<<<<< HEAD

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

=======
<div class="container-fluid py-4">

    {{-- ALERT SUCCESS --}}
    @if(session('success'))
        <div class="alert alert-success text-white">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
            <h6>Data Bengkel</h6>

            <a href="{{ route('bengkel.create') }}" class="btn btn-primary btn-sm">
                + Tambah Bengkel
            </a>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-3">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Bengkel</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($bengkels as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->nama_bengkel }}</td>
                            <td>{{ $b->alamat }}</td>
                            <td>{{ $b->no_telp }}</td>

                            <td class="text-center">
                                <a href="{{ route('bengkel.edit', $b->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('bengkel.destroy', $b->id) }}"
                                      method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        {{-- kalau data kosong --}}
                        @if($bengkels->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">
                                Data belum ada
                            </td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
@endsection
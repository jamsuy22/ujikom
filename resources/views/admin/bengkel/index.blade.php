@extends('layouts.backend')

@section('content')
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
@endsection
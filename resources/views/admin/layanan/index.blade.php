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

@extends('layouts.user')

@section('content')

<div class="container py-5">
    <div class="text-center mb-5">
        <h1>Data Pelanggan</h1>
        <p>Daftar pelanggan yang telah menggunakan layanan kami</p>
    </div>

    <div class="row g-4">
        @forelse ($pelanggans as $item)
        <div class="col-md-4">
            <div class="card shadow p-4 h-100 text-center">
                <h5>{{ $item->nama }}</h5>
                <p class="text-muted">{{ $item->no_telp }}</p>
                <small>{{ $item->alamat }}</small>
            </div>
        </div>
        @empty
            <p class="text-center">Belum ada pelanggan</p>
        @endforelse
    </div>
</div>

@endsection
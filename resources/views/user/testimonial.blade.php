@extends('layouts.user')

@section('content')

<div class="container py-5">
    <div class="text-center mb-5">
        <h1>Testimoni Pelanggan</h1>
        <p>Apa kata mereka tentang layanan kami</p>
    </div>

    <div class="row g-4">
        @forelse ($pelanggans as $item)
        <div class="col-md-4">
            <div class="card shadow p-4 h-100">

                <p class="mb-3">
                    "Pelayanan sangat memuaskan, cepat dan terpercaya!"
                </p>

                <h6 class="mb-0">{{ $item->nama }}</h6>
                <small class="text-muted">{{ $item->alamat }}</small>

            </div>
        </div>
        @empty
            <p class="text-center">Belum ada testimoni</p>
        @endforelse
    </div>
</div>

@endsection
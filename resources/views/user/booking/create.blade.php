@extends('layouts.user')

@section('content')

<div class="container py-5">

    <h3 class="mb-4">Booking Layanan</h3>

    <div class="card p-4 shadow">

        <h5>{{ $layanan->nama_layanan }}</h5>
        <p class="text-muted">{{ $layanan->deskripsi }}</p>
        <h6 class="text-primary mb-4">
            Rp {{ number_format($layanan->harga,0,',','.') }}
        </h6>

        {{-- INFO USER --}}
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control"
                   value="{{ Auth::user()->name }}" disabled>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control"
                   value="{{ Auth::user()->email }}" disabled>
        </div>

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

            <input type="hidden" name="layanan_id" value="{{ $layanan->id }}">

            <div class="mb-3">
                <label>Tanggal Booking</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Catatan (opsional)</label>
                <textarea name="catatan" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">
                Booking Sekarang
            </button>

        </form>

    </div>

</div>

@endsection
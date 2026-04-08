@extends('layouts.user')

@section('content')

<!-- HEADER -->
<div class="container-fluid bg-dark py-5 mb-5">
    <div class="container text-center text-white">
        <h1 class="display-4">Layanan Bengkel</h1>
        <p>Kami menyediakan berbagai layanan terbaik untuk kendaraan Anda</p>
    </div>
</div>


<!-- SERVICES -->
<div class="container py-5">
    <div class="row g-4">

        @forelse ($layanans as $item)
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow h-100 text-center p-4">

                <!-- ICON / IMAGE -->
                <div class="mb-3">
                    @if($item->gambar)
                        <img src="{{ asset('storage/'.$item->gambar) }}" 
                             class="img-fluid" 
                             style="height:80px; object-fit:contain;">
                    @else
                        <i class="fa fa-tools fa-3x text-primary"></i>
                    @endif
                </div>

                <!-- TITLE -->
                <h4 class="fw-bold">{{ $item->nama_layanan }}</h4>

                <!-- DESC -->
                <p class="text-muted">
                    {{ \Illuminate\Support\Str::limit($item->deskripsi, 90) }}
                </p>

                <!-- PRICE -->
                <h5 class="text-primary fw-bold mb-3">
                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                </h5>

                <!-- CTA -->
                <a href="{{ route('booking.create', $item->id) }}" 
                class="btn btn-primary btn-sm">
                    Booking Sekarang
                </a>

            </div>
        </div>
        @empty
            <div class="text-center">
                <p class="text-muted">Belum ada layanan tersedia</p>
            </div>
        @endforelse

    </div>
</div>


<!-- CTA SECTION -->
<div class="container-fluid bg-primary text-white py-5 mt-5">
    <div class="container text-center">
        <h2 class="mb-3">Butuh Servis Cepat?</h2>
        <p>Hubungi kami sekarang dan dapatkan layanan terbaik</p>
        <a href="#" class="btn btn-light px-4">Hubungi Kami</a>
    </div>
</div>

@endsection
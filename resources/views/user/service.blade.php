@extends('layouts.user')

@section('content')
<<<<<<< HEAD

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
=======
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-5">Layanan Bengkel Kami</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
        </div>

        <div class="row gy-4 gx-3">
            @foreach ($layanans as $item)
            <div class="col-lg-4 col-md-6 pt-5">
                <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                    
                    <div class="service-icon p-3">
                        @if($item->gambar)
                            <img src="{{ asset('storage/'.$item->gambar) }}" width="60">
                        @else
                            <i class="fa fa-tools fa-2x"></i>
                        @endif
                    </div>

                    <h3 class="mt-4">{{ $item->nama_layanan }}</h3>

                    <p class="mt-2">
                            {{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}
                    </p>

                    <h5 class="text-primary">
                        Rp {{ number_format($item->harga) }}
                    </h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->
@endsection
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34

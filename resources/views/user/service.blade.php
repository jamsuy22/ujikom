@extends('layouts.user')

@section('content')
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

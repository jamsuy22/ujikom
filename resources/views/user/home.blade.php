<<<<<<< HEAD
@extends('layouts.user')

@section('content')

<!-- ABOUT START -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <div class="row gx-0 mb-5">
            <div class="col-lg-6 my-lg-5 py-lg-5">
                <div class="bg-primary p-5 text-white">
                    <h1 class="display-5 mb-4">Welcome To Bengkel Kami</h1>
                    <p>
                        Bengkel terpercaya untuk berbagai jenis servis kendaraan.
                        Cepat, aman, dan profesional.
                    </p>
                    <a href="#" class="btn btn-light rounded-pill px-4 mt-3">Hubungi Kami</a>
                </div>
            </div>

            <div class="col-lg-6" style="min-height: 400px;">
                <img class="w-100 h-100" 
                     src="{{ asset('assets/img/about-1.jpg') }}" 
                     style="object-fit: cover;">
            </div>
        </div>

        <div class="row gx-0">
            <div class="col-lg-6" style="min-height: 400px;">
                <img class="w-100 h-100" 
                     src="{{ asset('assets/img/about-2.jpg') }}" 
                     style="object-fit: cover;">
            </div>

            <div class="col-lg-6 my-lg-5 py-lg-5">
                <div class="bg-primary p-5 text-white">
                    <h1 class="display-5 mb-4">Kenapa Pilih Kami?</h1>
                    <p>
                        Mekanik berpengalaman, harga transparan, dan pelayanan cepat.
                    </p>
                    <a href="#" class="btn btn-light rounded-pill px-4 mt-3">Lihat Layanan</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ABOUT END -->


<!-- LAYANAN START -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">

        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h1 class="display-5">Layanan Kami</h1>
            <hr class="w-25 mx-auto text-primary">
        </div>

        <div class="row gy-4">

            @forelse ($layanans as $item)
            <div class="col-lg-4 col-md-6">
                <div class="bg-white shadow p-4 text-center h-100">

                    <div class="mb-3">
                        @if($item->gambar)
                            <img src="{{ asset('storage/'.$item->gambar) }}" width="60">
                        @else
                            <i class="fa fa-tools fa-2x text-primary"></i>
                        @endif
                    </div>

                    <h4>{{ $item->nama_layanan }}</h4>

                    <p>
                        {{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}
                    </p>

                    <h5 class="text-primary">
                        Rp {{ number_format($item->harga) }}
                    </h5>

                </div>
            </div>
            @empty
                <p class="text-center">Belum ada layanan</p>
            @endforelse

        </div>
    </div>
</div>
<!-- LAYANAN END -->

@endsection
=======
@extends('layouts.user')
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34

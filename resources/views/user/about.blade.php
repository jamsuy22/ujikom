@extends('layouts.user')

@section('content')

<!-- ABOUT START -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5">Tentang Kami</h1>
            <hr class="w-25 mx-auto text-primary">
            <p>
                Bengkel kami hadir untuk memberikan layanan servis kendaraan terbaik
                dengan kualitas profesional dan harga yang transparan.
            </p>
        </div>

        <div class="row gx-5 align-items-center mb-5">

            <div class="col-lg-6">
                <img class="img-fluid rounded w-100" 
                     src="{{ asset('assets/img/about-1.jpg') }}" 
                     alt="About">
            </div>

            <div class="col-lg-6">
                <h2 class="mb-4">Kami Ahli di Bidang Servis Kendaraan</h2>
                <p>
                    Dengan pengalaman bertahun-tahun, tim kami siap menangani berbagai
                    jenis kerusakan kendaraan dengan cepat dan tepat.
                </p>

                <ul class="list-unstyled">
                    <li>✔ Mekanik berpengalaman</li>
                    <li>✔ Peralatan modern</li>
                    <li>✔ Harga transparan</li>
                    <li>✔ Pelayanan cepat</li>
                </ul>
            </div>

        </div>

        <div class="row gx-5 align-items-center">

            <div class="col-lg-6 order-lg-2">
                <img class="img-fluid rounded w-100" 
                     src="{{ asset('assets/img/about-2.jpg') }}" 
                     alt="About">
            </div>

            <div class="col-lg-6 order-lg-1">
                <h2 class="mb-4">Kenapa Pilih Kami?</h2>
                <p>
                    Kami mengutamakan kepuasan pelanggan dengan pelayanan terbaik
                    dan hasil yang maksimal.
                </p>

                <a href="{{ route('user.service') }}" 
                   class="btn btn-primary px-4 py-2 mt-3">
                   Lihat Layanan
                </a>
            </div>

        </div>

    </div>
</div>
<!-- ABOUT END -->

@endsection
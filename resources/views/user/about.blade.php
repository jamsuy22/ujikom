@extends('layouts.user')
<<<<<<< HEAD

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
=======
@section('content')
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start bg-primary p-5">
                        <h1 class="display-5 mb-4">Welcome To Painter</h1>
                        <p>Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et, tempor sit sit diam amet et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor magna dolore erat amet </p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="asset/img/about-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="asset/img/about-2.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end bg-primary p-5">
                        <h1 class="display-5 mb-4">Why Choose Us?</h1>
                        <p>Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et, tempor sit sit diam amet et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor magna dolore erat amet </p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34

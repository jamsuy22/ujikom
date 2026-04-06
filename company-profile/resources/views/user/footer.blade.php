<div class="container-fluid bg-dark text-light py-5">
    <div class="container py-5">
        <div class="row g-5">

            <!-- KONTAK -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Kontak Kami</h4>
                <hr class="w-25 text-secondary mb-4">

                <p class="mb-4">
                    Bengkel terpercaya untuk berbagai kebutuhan servis kendaraan Anda.
                </p>

                <p class="mb-2">
                    <i class="fa fa-map-marker-alt text-primary me-3"></i>
                    Banjar, Jawa Barat
                </p>

                <p class="mb-2">
                    <i class="fa fa-envelope text-primary me-3"></i>
                    bengkel@gmail.com
                </p>

                <p class="mb-0">
                    <i class="fa fa-phone-alt text-primary me-3"></i>
                    0812-3456-7890
                </p>
            </div>


            <!-- LAYANAN -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Layanan</h4>
                <hr class="w-25 text-secondary mb-4">

                <div class="d-flex flex-column">
                    <span class="mb-2">Servis Ringan</span>
                    <span class="mb-2">Servis Besar</span>
                    <span class="mb-2">Ganti Oli</span>
                    <span class="mb-2">Cek Mesin</span>
                    <span>Perbaikan Umum</span>
                </div>
            </div>


            <!-- MENU -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Menu</h4>
                <hr class="w-25 text-secondary mb-4">

                <div class="d-flex flex-column">

                    <a class="text-light mb-2" href="{{ url('/') }}">
                        <i class="fa fa-angle-right me-2"></i>Beranda
                    </a>

                    <a class="text-light mb-2" href="{{ url('/about') }}">
                        <i class="fa fa-angle-right me-2"></i>Tentang
                    </a>

                    <a class="text-light mb-2" href="{{ route('user.service') }}">
                        <i class="fa fa-angle-right me-2"></i>Layanan
                    </a>

                    <a class="text-light mb-2" href="{{ route('user.pelanggan') }}">
                        <i class="fa fa-angle-right me-2"></i>Pelanggan
                    </a>

                    <a class="text-light" href="{{ route('user.testimonial') }}">
                        <i class="fa fa-angle-right me-2"></i>Testimoni
                    </a>

                </div>
            </div>


            <!-- CTA -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-primary">Butuh Bantuan?</h4>
                <hr class="w-25 text-secondary mb-4">

                <p>
                    Hubungi kami sekarang untuk mendapatkan layanan terbaik untuk kendaraan Anda.
                </p>

                <a href="#" class="btn btn-primary w-100 mb-3">
                    Booking Sekarang
                </a>

                <h6 class="text-primary mt-4 mb-3">Ikuti Kami</h6>

                <div class="d-flex">
                    <a class="btn btn-primary btn-square me-2" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-primary btn-square me-2" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-primary btn-square" href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- COPYRIGHT -->
<div class="container-fluid bg-secondary text-light text-center py-3">
    <p class="mb-0">
        &copy; {{ date('Y') }} BengkelKu. Semua Hak Dilindungi.
    </p>
</div>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
    
    <!-- LOGO -->
    <a href="{{ url('/') }}" class="navbar-brand p-0">
        <h1 class="m-0 text-uppercase text-primary">
            <i class="fa fa-tools text-secondary me-3"></i>BengkelKu
        </h1>
    </a>

    <!-- TOGGLE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarCollapse">

        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">

            <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
                Beranda
            </a>

            <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">
                Tentang
            </a>

            <a href="{{ route('user.service') }}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">
                Layanan
            </a>

            <a href="{{ route('user.pelanggan') }}" class="nav-item nav-link">
                Pelanggan
            </a>

            <a href="{{ route('user.testimonial') }}" class="nav-item nav-link {{ request()->is('testimonial') ? 'active' : '' }}">
                Testimoni
            </a>

            {{-- 🔥 BOOKING SAYA --}}
            @auth
            <a href="{{ route('booking.saya') }}" class="nav-item nav-link">
                Booking Saya
            </a>
            @endauth

        </div>

        <!-- RIGHT SIDE -->
        <div class="d-flex align-items-center ps-4">

            @guest
                {{-- BELUM LOGIN --}}
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                    Login
                </a>

                <a href="{{ route('register') }}" class="btn btn-primary">
                    Daftar
                </a>
            @endguest


            @auth
                {{-- SUDAH LOGIN --}}
                <div class="dropdown">

                    <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item" href="{{ route('booking.saya') }}">
                                Booking Saya
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Profile
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger">
                                    Logout
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
            @endauth

        </div>

    </div>
</nav>
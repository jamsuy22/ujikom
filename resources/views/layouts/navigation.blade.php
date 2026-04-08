<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <!-- LEFT -->
            <div class="flex">
                
                <!-- LOGO -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <span class="font-bold text-lg">BengkelKu</span>
                    </a>
                </div>

                <!-- MENU -->
                <div class="hidden space-x-8 sm:ms-10 sm:flex">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500">
                        Home
                    </a>

                    <a href="{{ route('user.service') }}" class="text-gray-700 hover:text-blue-500">
                        Layanan
                    </a>

                    @auth
                    <a href="{{ route('booking.saya') }}" class="text-gray-700 hover:text-blue-500">
                        Booking Saya
                    </a>
                    @endauth
                </div>
            </div>

            <!-- RIGHT -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                
                @auth
                <!-- USER DROPDOWN -->
                <div class="relative">
                    <button class="text-gray-700">
                        {{ Auth::user()->name }}
                    </button>

                    <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">
                            Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-2 hover:bg-red-100 text-red-500">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

                @else
                <!-- GUEST -->
                <a href="{{ route('login') }}" class="text-gray-700 me-3">
                    Login
                </a>

                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-3 py-1 rounded">
                    Register
                </a>
                @endauth

            </div>

            <!-- MOBILE BUTTON -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open" class="sm:hidden p-4">
        <a href="{{ route('home') }}" class="block py-2">Home</a>
        <a href="{{ route('user.service') }}" class="block py-2">Layanan</a>

        @auth
        <a href="{{ route('booking.saya') }}" class="block py-2">Booking Saya</a>
        @endauth

        <hr class="my-2">

        @auth
        <a href="{{ route('profile.edit') }}" class="block py-2">Profile</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="block py-2 text-red-500">Logout</button>
        </form>
        @else
        <a href="{{ route('login') }}" class="block py-2">Login</a>
        <a href="{{ route('register') }}" class="block py-2">Register</a>
        @endauth
    </div>

</nav>
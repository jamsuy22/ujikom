<aside
<<<<<<< HEAD
  class="fixed inset-y-0 left-0 w-64 p-4 overflow-y-auto shadow-xl bg-white rounded-2xl">

    {{-- LOGO --}}
    <div class="mb-6">
        <a href="{{ route('admin.dashboard') }}"
           class="block text-lg font-bold text-slate-700">
            Admin Bengkel
        </a>
    </div>

    <hr class="mb-4">

    <ul class="space-y-2">

        {{-- DASHBOARD --}}
        <li>
            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-100">
                Dashboard
            </a>
        </li>

        {{-- BENGKEL --}}
        <li>
            <a href="{{ route('admin.bengkel.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-100">
                Data Bengkel
            </a>
        </li>

        {{-- LAYANAN --}}
        <li>
            <a href="{{ route('admin.layanan.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-100">
                Data Layanan
            </a>
        </li>

        {{-- PELANGGAN --}}
        <li>
            <a href="{{ route('admin.pelanggan.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-100">
                Data Pelanggan
            </a>
        </li>

        {{-- BOOKING --}}
        <li>
            <a href="{{ route('admin.booking.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-100">
                Data Booking
            </a>
        </li>

        {{-- LOGOUT --}}
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="w-full text-left px-4 py-2 rounded-lg text-red-500 hover:bg-red-100">
                    Logout
                </button>
            </form>
        </li>

    </ul>
=======
  class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto shadow-xl bg-white max-w-64 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0">

    <div class="h-19">
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700"
           href="{{ route('admin.dashboard') }}">
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">
                Admin Bengkel
            </span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent">

    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

            {{-- DASHBOARD --}}
            <li class="mt-0.5 w-full">
                <a href="{{ route('admin.dashboard') }}"
                   class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700">
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- DATA BENGKEL --}}
            <li class="mt-0.5 w-full">
                <a href="{{ route('bengkel.index') }}"
                   class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700">
                    <span>Data Bengkel</span>
                </a>
            </li>

            {{-- DATA LAYANAN --}}
            <li class="mt-0.5 w-full">
                <a href="{{ route('layanan.index') }}"
                   class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700">
                    <span>Data Layanan</span>
                </a>
            </li>

            {{-- DATA PELANGGAN --}}
            <li class="mt-0.5 w-full">
                <a href="{{ route('pelanggan.index') }}"
                   class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700">
                    <span>Data Pelanggan</span>
                </a>
            </li>

            {{-- LOGOUT --}}
            <li class="mt-0.5 w-full">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-red-500 w-full text-left">
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </div>
>>>>>>> a75bdd23e3dff99bbb555952210a5af2c1077c34
</aside>
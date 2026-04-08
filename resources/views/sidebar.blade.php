<aside
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
</aside>
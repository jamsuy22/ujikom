<nav class="relative flex flex-wrap items-center justify-between px-6 py-3 shadow-none rounded-2xl">

    <div class="flex items-center justify-between w-full">

        {{-- LEFT (TITLE) --}}
        <div>
            <h6 class="text-white font-bold text-lg">
                Dashboard Admin
            </h6>
        </div>

        {{-- RIGHT --}}
        <div class="flex items-center gap-4">

            {{-- SEARCH --}}
            <div class="hidden md:block">
                <input type="text"
                       placeholder="Cari..."
                       class="px-3 py-2 text-sm border rounded-lg outline-none">
            </div>

            {{-- USER INFO --}}
            <div class="flex items-center gap-3">

                {{-- AVATAR --}}
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}"
                     class="w-8 h-8 rounded-full">

                {{-- NAME --}}
                <span class="text-white text-sm font-semibold">
                    {{ auth()->user()->name }}
                </span>

                {{-- DROPDOWN --}}
                <div class="relative">
                    <button onclick="toggleDropdown()" class="text-white text-sm">
                        ▼
                    </button>

                    <div id="dropdownUser"
                         class="hidden absolute right-0 mt-2 w-40 bg-white rounded shadow">

                        <a href="{{ route('profile.edit') }}"
                           class="block px-4 py-2 text-sm hover:bg-gray-100">
                            Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>

</nav>

{{-- SCRIPT --}}
<script>
function toggleDropdown() {
    document.getElementById('dropdownUser').classList.toggle('hidden');
}
</script>

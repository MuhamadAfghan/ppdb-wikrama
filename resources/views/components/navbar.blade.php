<nav id="navbar"
    class="text-white bg-blue-950 sticky top-0 left-0 z-10 w-full flex justify-between items-start py-[13px] px-4">
    <div class="control-sidebar">
        <button type="button" id="sidebar-toggle"
            class="items-center p-2 text-sm text-gray-100 rounded-lg hover:bg-gray-200/20 ">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
    </div>

    <div class="flex items-center gap-3 cursor-pointer" data-dropdown-toggle="dropdownAvatar">
        <span class="text-sm font-semibold uppercase text-blue-50">{{ auth()->user()->name }}</span>
        <button
            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-white/30 :focus:ring-gray-600"
            type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-10 h-10 rounded-full"
                src="https://placehold.jp/90/1e40af/ffffff/150x150.png?text={{ Str::upper(Str::substr(auth()->user()->name, 0, 1)) }}"
                alt="{{ auth()->user()->name }}">
        </button>
    </div>

    <x-dropdown id="dropdownAvatar">
        <x-slot:header>
            <div class="truncate">{{ auth()->user()->name }}</div>
            <div class="font-medium truncate">{{ auth()->user()->email }}</div>
        </x-slot:header>

        <x-dropdown-link href="{{ route('dashboard') }}">Dashboard</x-dropdown-link>
        <x-dropdown-link href="{{ route('profile') }}">Profile</x-dropdown-link>

        <x-slot:footer>
            <form action="{{ route('logout') }}" method="POST" class="w-full" id="logout_form">
                @csrf
                <button type="button" onclick="confirm('Kamu yakin?', 'Kamu yakin ingin keluar?', 'logout_form')"
                    class="w-full px-4 py-2 text-sm text-gray-700 text-start hover:bg-gray-100 hover:text-red-500">Logout</button>
            </form>
        </x-slot:footer>
    </x-dropdown>

</nav>

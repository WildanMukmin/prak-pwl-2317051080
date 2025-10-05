<nav class="bg-gradient-to-r from-indigo-800 via-blue-700 to-sky-600 text-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo / Judul -->
            <div class="flex items-center space-x-2">
                <div class="bg-white text-blue-700 rounded-full p-1.5 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                    </svg>
                </div>
                <span class="text-2xl font-extrabold tracking-wide">Manajemen Mahasiswa</span>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8 font-medium">
                <a href="{{ route('user.index') }}"
                    class="relative after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:text-blue-200 {{ request()->routeIs('user.index') ? 'after:w-full text-blue-100' : '' }}">
                    Daftar Mahasiswa
                </a>
                <a href="{{ route('user.create') }}"
                    class="relative after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:text-blue-200 {{ request()->routeIs('user.create') ? 'after:w-full text-blue-100' : '' }}">
                    Tambah Mahasiswa
                </a>
                <a href="{{ url('/') }}"
                    class="relative after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-white after:transition-all after:duration-300 hover:after:w-full hover:text-blue-200 {{ request()->is('/') ? 'after:w-full text-blue-100' : '' }}">
                    Beranda
                </a>
            </div>

            <!-- Tombol Menu Mobile -->
            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="focus:outline-none">
                    <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-blue-700 border-t border-blue-600">
        <a href="{{ route('user.index') }}"
            class="block px-6 py-3 text-white hover:bg-blue-600 transition {{ request()->routeIs('user.index') ? 'bg-blue-600' : '' }}">
            Daftar Mahasiswa
        </a>
        <a href="{{ route('user.create') }}"
            class="block px-6 py-3 text-white hover:bg-blue-600 transition {{ request()->routeIs('user.create') ? 'bg-blue-600' : '' }}">
            Tambah Mahasiswa
        </a>
        <a href="{{ url('/') }}"
            class="block px-6 py-3 text-white hover:bg-blue-600 transition {{ request()->is('/') ? 'bg-blue-600' : '' }}">
            Beranda
        </a>
    </div>
</nav>

<!-- Script Toggle Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('animate-fadeIn');
    });
</script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out forwards;
    }
</style>
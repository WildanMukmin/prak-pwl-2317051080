<footer class="bg-gradient-to-r from-indigo-800 via-blue-700 to-sky-600 text-white mt-16 shadow-inner">
    <div
        class="max-w-7xl mx-auto px-6 sm:px-8 py-8 text-center flex flex-col md:flex-row justify-between items-center gap-4">

        <!-- Bagian Kiri (Logo dan Judul) -->
        <div class="flex items-center space-x-3">
            <div class="bg-white text-blue-700 rounded-full p-1.5 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                </svg>
            </div>
            <span class="text-lg font-semibold tracking-wide">Manajemen Mahasiswa</span>
        </div>

        <!-- Bagian Tengah (Hak Cipta) -->
        <p class="text-sm text-blue-100">
            &copy; {{ date('Y') }} <span class="font-semibold">Manajemen Mahasiswa</span>. Seluruh hak cipta dilindungi.
        </p>

        <!-- Bagian Kanan (Navigasi Singkat) -->
        <div class="flex space-x-4 text-sm">
            <a href="{{ url('/') }}" class="hover:text-blue-200 transition">Beranda</a>
            <a href="{{ route('user.index') }}" class="hover:text-blue-200 transition">Daftar</a>
            <a href="{{ route('user.create') }}" class="hover:text-blue-200 transition">Tambah</a>
        </div>
    </div>
</footer>
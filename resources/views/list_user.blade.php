@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen mt-16">

        <!-- Judul Halaman -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-indigo-800 mb-2">Daftar Mahasiswa Terdaftar</h1>
            <p class="text-gray-600 text-sm">Berikut adalah daftar Mahasiswa yang telah terdaftar dalam sistem.</p>
        </div>

        <!-- Card Tabel -->
        <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl overflow-hidden border border-blue-100">

            <!-- Header Tabel (search & tombol) -->
            <div
                class="flex flex-col sm:flex-row items-center justify-between gap-4 px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-indigo-700 via-blue-600 to-sky-500 text-white">
                <h2 class="text-lg font-semibold tracking-wide">Tabel Data Mahasiswa</h2>

                <!-- Search Bar (dummy) -->
                <div class="relative w-full sm:w-64">
                    <input type="text" placeholder="Cari nama atau NIM..."
                        class="w-full pl-10 pr-4 py-2 rounded-xl text-gray-800 placeholder-gray-500 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.414-1.414l4.386 4.387a1 1 0 01-1.414 1.414l-4.386-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <!-- Isi Tabel -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-gray-700">
                    <thead class="bg-blue-100/70 text-blue-900 uppercase text-sm font-semibold tracking-wider">
                        <tr>
                            <th class="px-6 py-4 text-left">Nama Lengkap</th>
                            <th class="px-6 py-4 text-left">NIM</th>
                            <th class="px-6 py-4 text-left">Kelas</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $user->nama }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->nim }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Footer Tabel -->
            <div class="px-6 py-4 bg-gray-50 text-sm text-gray-500 flex justify-between items-center">
                <span>Menampilkan {{ count($users) }} Mahasiswa terdaftar</span>
                <span class="italic">Diperbarui terakhir: {{ now()->format('d M Y, H:i') }}</span>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
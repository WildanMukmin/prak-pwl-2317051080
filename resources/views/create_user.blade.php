@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-50 p-6 mt-16 ">
        <div
            class="relative bg-white/80 backdrop-blur-xl shadow-2xl rounded-3xl w-full max-w-xl p-10 border border-blue-100 transition-all duration-300 hover:shadow-blue-200">


            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-extrabold text-indigo-800 tracking-tight mb-2">Form Registrasi Mahasiswa</h1>
                <p class="text-gray-600 text-sm">Isi data berikut dengan lengkap dan benar untuk melanjutkan proses
                    pendaftaran.</p>
            </div>

            <!-- Form -->
            <form action="{{ route('user.store') }}" method="POST" class="space-y-7">
                @csrf

                <!-- Nama -->
                <div>
                    <label for="nama" class="block text-sm font-semibold text-indigo-900 mb-2">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white/70 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none placeholder-gray-400 transition-all duration-200"
                        placeholder="Tuliskan nama lengkap Anda" required>
                </div>

                <!-- NIM -->
                <div>
                    <label for="npm" class="block text-sm font-semibold text-indigo-900 mb-2">Nomor Induk Mahasiswa
                        (NIM)</label>
                    <input type="text" id="npm" name="npm"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white/70 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none placeholder-gray-400 transition-all duration-200"
                        placeholder="Masukkan NIM Anda" required>
                </div>

                <!-- Pilihan Kelas -->
                <div>
                    <label for="kelas_id" class="block text-sm font-semibold text-indigo-900 mb-2">Kelas</label>
                    <select name="kelas_id" id="kelas_id"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white/70 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-200">
                        <option value="" disabled selected>Pilih kelas Anda</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-indigo-700 via-blue-600 to-sky-500 text-white font-semibold py-3 px-6 rounded-xl shadow-md hover:shadow-lg hover:shadow-blue-200 hover:scale-[1.02] active:scale-[0.98] transition-all duration-300">
                        Kirim Data
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('components.footer')
@endsection
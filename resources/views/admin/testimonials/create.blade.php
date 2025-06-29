@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Tambah Testimoni</h1>

    <form action="{{ route('testimonials.store') }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-xl mx-auto">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Pesan</label>
            <textarea name="pesan" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
        </div>
    </form>
@endsection

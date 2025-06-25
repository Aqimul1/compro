@extends('layouts.admin')

@section('content')
<div class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
    <div class="bg-white w-full max-w-xl p-6 rounded shadow relative">
        <a href="{{ route('galleries.index') }}" class="absolute top-2 right-3 text-gray-500 hover:text-red-600">&times;</a>

        <h2 class="text-xl font-semibold mb-4">Edit Gambar Galeri</h2>

        <form method="POST" action="{{ route('galleries.update', $gallery->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1">Judul</label>
                <input type="text" name="judul" class="w-full border p-2 rounded" value="{{ $gallery->judul }}" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border p-2 rounded">{{ $gallery->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Gambar Saat Ini</label>
                <img src="{{ asset('storage/' . $gallery->gambar) }}" class="h-20 mb-2">
                <input type="file" name="gambar" class="w-full border p-2 rounded">
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

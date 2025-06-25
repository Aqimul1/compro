@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Edit Testimoni</h1>

    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-xl mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama" class="w-full border rounded px-3 py-2" value="{{ $testimonial->nama }}" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Pesan</label>
            <textarea name="pesan" class="w-full border rounded px-3 py-2" rows="4" required>{{ $testimonial->pesan }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Rating (1 - 5)</label>
            <input type="number" name="rating" min="1" max="5" class="w-full border rounded px-3 py-2" value="{{ $testimonial->rating }}" required>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Update
            </button>
        </div>
    </form>
@endsection

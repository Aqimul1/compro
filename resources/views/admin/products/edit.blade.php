@extends('layouts.admin')

@section('content')
    <!-- Overlay Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <!-- Modal Box -->
        <div class="bg-white w-full max-w-xl p-6 rounded shadow-lg relative">
            <!-- Tombol close -->
            <a href="{{ route('products.index') }}" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-xl font-bold">&times;</a>

            <h2 class="text-xl font-semibold mb-4">Edit Produk</h2>

            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-1">Nama Produk</label>
                    <input type="text" name="nama" class="w-full border p-2 rounded" value="{{ $product->nama }}" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Harga</label>
                    <input type="number" name="harga" class="w-full border p-2 rounded" value="{{ $product->harga }}" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Stok</label>
                    <input type="number" name="stok" class="w-full border p-2 rounded" value="{{ $product->stok }}" min="0" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Gambar Baru (opsional)</label>
                    <input type="file" name="gambar" class="w-full border p-2 rounded">
                    @if ($product->gambar)
                        <p class="text-sm text-gray-600 mt-1">Gambar lama: <img src="{{ asset('storage/' . $product->gambar) }}" class="h-16 mt-1"></p>
                    @endif
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

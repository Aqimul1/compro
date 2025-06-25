@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Manage Products</h1>
    <p class="text-gray-600 mb-4">Halaman untuk mengelola produk.</p>

    {{-- Tombol Tambah --}}
    <div class="mb-4">
        <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Tambah Produk
        </a>
    </div>

    {{-- Tabel Produk --}}
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3 border-b">No.</th>
                    <th class="p-3 border-b">Nama Produk</th>
                    <th class="p-3 border-b">Gambar</th>
                    <th class="p-3 border-b">Harga</th>
                    <th class="p-3 border-b">Stok</th>
                    <th class="p-3 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border-b">{{ $loop->iteration }}</td>
                    <td class="p-3 border-b">{{ $product->nama }}</td>
                    <td class="p-3 border-b">
                        <img src="{{ asset('storage/' . $product->gambar) }}" alt="gambar" class="h-16">
                    </td>
                    <td class="p-3 border-b">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td class="p-3 border-b">{{ $product->stok }}</td>
                    <td class="p-3 border-b space-x-2">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if ($products->isEmpty())
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada produk.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection

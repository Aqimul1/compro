@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4 text-gray-800">Galeri Produk</h1>
<p class="text-gray-600 mb-4">Halaman untuk mengelola galeri gambar pabrik plastik.</p>

<div class="mb-4">
    <a href="{{ route('galleries.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        + Tambah Gambar
    </a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="p-3 border-b">No.</th>
                <th class="p-3 border-b">Judul</th>
                <th class="p-3 border-b">Gambar</th>
                <th class="p-3 border-b">Deskripsi</th>
                <th class="p-3 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border-b">{{ $loop->iteration }}</td>
                    <td class="p-3 border-b">{{ $gallery->judul }}</td>
                    <td class="p-3 border-b">
                        <img src="{{ asset('storage/' . $gallery->gambar) }}" class="h-16" alt="Gambar Galeri">
                    </td>
                    <td class="p-3 border-b">{{ $gallery->deskripsi }}</td>
                    <td class="p-3 border-b space-x-2">
                        <a href="{{ route('galleries.edit', $gallery->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus gambar ini?')" class="text-red-600 hover:underline">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($galleries->isEmpty())
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada gambar galeri.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection

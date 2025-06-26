@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Manage Testimonials</h1>
    <p class="text-gray-600 mb-4">Halaman untuk mengelola testimoni pelanggan.</p>

    {{-- Tombol Tambah --}}
    <div class="mb-4">
        <a href="{{ route('testimonials.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Tambah Testimoni
        </a>
    </div>

    {{-- Tabel --}}
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3 border-b">No.</th>
                    <th class="p-3 border-b">Nama</th>
                    <th class="p-3 border-b">Pesan</th>
                    <th class="p-3 border-b">Rating</th>
                    <th class="p-3 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($testimonials as $testimonial)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border-b">{{ $loop->iteration }}</td>
                    <td class="p-3 border-b">{{ $testimonial->nama }}</td>
                    <td class="p-3 border-b">{{ $testimonial->pesan }}</td>
                    <td class="p-3 border-b space-x-2">
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline" onclick="return confirm('Hapus testimoni ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada testimoni.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

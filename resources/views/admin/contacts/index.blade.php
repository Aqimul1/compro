@extends('layouts.admin')

@section('content')
<div class="container p-4">
    <h1 class="text-xl font-bold mb-4">Data Kontak</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3">No</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Pesan</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $index => $contact)
                    <tr class="border-t">
                        <td class="p-3">{{ $index + $contacts->firstItem() }}</td>
                        <td class="p-3">{{ $contact->nama }}</td>
                        <td class="p-3">{{ $contact->email }}</td>
                        <td class="p-3">{{ $contact->pesan }}</td>
                        <td class="p-3">
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">Tidak ada data kontak.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</div>
@endsection

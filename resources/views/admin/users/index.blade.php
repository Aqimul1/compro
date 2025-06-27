@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Manajemen Pengguna</h1>

    {{-- Tombol Tambah --}}
    <div class="mb-4">
        <a href="#" id="openModal" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Tambah Pengguna
        </a>

    </div>
    {{-- Tabel Pengguna --}}
    <div class="bg-white shadow-md rounded-lg overflow-hidden">

        @include('admin.users.create')
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3 border-b">No.</th>
                    <th class="p-3 border-b">Nama</th>
                    <th class="p-3 border-b">Email</th>
                    <th class="p-3 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border-b">{{ $loop->iteration }}</td>
                        <td class="p-3 border-b">{{ $user->name }}</td>
                        <td class="p-3 border-b">{{ $user->email }}</td>
                        <td class="p-3 border-b space-x-2">
                            <a href="#" class="text-blue-600 hover:underline edit-user-btn"
                                data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                data-email="{{ $user->email }}">
                                Edit
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline"
                                    onclick="return confirm('Hapus pengguna ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($users->isEmpty())
                    <tr>
                        <td colspan="4" class="p-4 text-center text-gray-500">Belum ada pengguna.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openModal = document.getElementById("openModal");
            const closeModal = document.getElementById("closeModal");
            const modal = document.getElementById("userModal");

            openModal.addEventListener("click", function(e) {
                e.preventDefault();
                modal.classList.remove("hidden");
            });

            closeModal.addEventListener("click", function() {
                modal.classList.add("hidden");
            });

            // Klik luar modal untuk menutup
            window.addEventListener("click", function(e) {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
@endpush

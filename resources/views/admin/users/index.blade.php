@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Manajemen Pengguna</h1>

    {{-- Tombol Tambah --}}
    <div class="mb-4">
        {{-- ID diubah agar lebih jelas dan tidak konflik --}}
        <a href="#" id="openCreateModal" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            + Tambah Pengguna
        </a>
    </div>
    
    {{-- Tabel Pengguna --}}
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        {{-- Include modal serbaguna --}}
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
                            {{-- Tombol edit dengan data attributes --}}
                            <a href="#" class="text-blue-600 hover:underline edit-user-btn"
                                data-id="{{ $user->id }}" 
                                data-name="{{ $user->name }}"
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
        // --- Referensi Elemen ---
        const modal = document.getElementById("userModal");
        const openCreateModalBtn = document.getElementById("openCreateModal");
        const closeModalBtn = document.getElementById("closeModal");
        const editUserBtns = document.querySelectorAll(".edit-user-btn");

        // Elemen di dalam Modal
        const modalTitle = document.getElementById("modalTitle");
        const userForm = document.getElementById("userForm");
        const formMethod = document.getElementById("formMethod");
        const submitButton = document.getElementById("submitButton");
        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");

        // --- FUNGSI UNTUK MENAMPILKAN MODAL ---
        const showModal = () => {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        };

        // --- FUNGSI UNTUK MENUTUP MODAL ---
        const hideModal = () => {
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        };

        // --- Event Listener untuk Tombol TAMBAH ---
        openCreateModalBtn.addEventListener("click", function(e) {
            e.preventDefault();
            
            userForm.reset(); // Mengosongkan form
            modalTitle.textContent = "Tambah Pengguna";
            userForm.action = "{{ route('users.store') }}";
            formMethod.innerHTML = ""; // Pastikan method PUT/PATCH kosong
            submitButton.textContent = "Simpan";
            
            showModal();
        });

        // --- Event Listener untuk Tombol EDIT (Looping) ---
        editUserBtns.forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();

                // Ambil data dari atribut `data-*` (ini "key-value" yang Anda maksud)
                const id = this.dataset.id;
                const name = this.dataset.name;
                const email = this.dataset.email;

                // Atur modal untuk mode edit
                modalTitle.textContent = "Edit Pengguna";
                userForm.action = `/users/${id}`; // Ganti URL action form
                formMethod.innerHTML = `@method('PUT')`; // Sisipkan method spoofing untuk Laravel
                submitButton.textContent = "Simpan Perubahan";

                // Isi input field dengan data user
                nameInput.value = name;
                emailInput.value = email;
                
                showModal();
            });
        });

        // --- Event Listener untuk Menutup Modal ---
        closeModalBtn.addEventListener("click", hideModal);
        window.addEventListener("click", function(e) {
            if (e.target === modal) {
                hideModal();
            }
        });
    });
</script>
@endpush
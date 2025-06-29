<div id="userModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md">
        {{-- Header Modal --}}
        <div class="flex justify-between items-center border-b pb-3">
            <h3 id="modalTitle" class="text-xl font-bold text-gray-800">Tambah Pengguna</h3>
            <button id="closeModal" class="text-gray-500 hover:text-gray-800">&times;</button>
        </div>

        {{-- Form --}}
        <form id="userForm" method="POST" action="{{ route('users.store') }}" class="mt-4">
            @csrf
            {{-- Tempat untuk method PUT/PATCH saat edit --}}
            <span id="formMethod"></span>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-1">Nama</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" required>
            </div>
            {{-- Footer Modal (Tombol Aksi) --}}
            <div class="text-right mt-6">
                <button type="submit" id="submitButton" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</div>
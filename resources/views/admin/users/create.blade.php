<div id="userModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white w-full max-w-xl p-6 rounded shadow-lg relative">
        <!-- Tombol close -->
        <button id="closeModal" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-xl font-bold">&times;</button>

        <h2 class="text-xl font-semibold mb-4">Tambah User</h2>
        {{ $errors }}
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block mb-1">Nama</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

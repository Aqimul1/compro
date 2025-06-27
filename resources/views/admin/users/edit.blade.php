<div id="editUserModal" class="fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50 hidden">
    <div class="bg-white w-full max-w-xl p-6 rounded shadow-lg relative">
        <button id="closeEditModal" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-xl font-bold">&times;</button>

        <h2 class="text-xl font-semibold mb-4">Edit User</h2>
        <form id="editUserForm" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block mb-1">Nama</label>
                <input type="text" name="name" id="editName" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Email</label>
                <input type="email" name="email" id="editEmail" class="w-full border p-2 rounded" required>
            </div>
            <div class="text-right">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

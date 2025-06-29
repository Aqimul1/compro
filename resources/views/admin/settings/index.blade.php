@extends('layouts.admin')

@section('content')
    <div class="container p-6 mx-auto">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Manajemen Pengaturan Website</h1>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="p-3 border-b font-semibold">No.</th>
                        <th class="p-3 border-b font-semibold">Key</th>
                        <th class="p-3 border-b font-semibold">Value</th>
                        <th class="p-3 border-b font-semibold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $setting)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border-b text-sm text-gray-700 font-mono">
                                {{ $setting->id }}
                            <td class="p-3 border-b text-sm text-gray-700 font-mono">
                                {{ $setting->key }}
                            </td>
                            <td class="p-3 border-b text-sm text-gray-900 max-w-sm truncate">
                                {{ $setting->value }}
                            </td>
                            <td class="p-3 border-b text-center">
                                <button
                                    class="bg-blue-500 text-white px-3 py-1 text-xs font-bold rounded hover:bg-blue-600 edit-btn"
                                    data-id="{{ $setting->id }}"
                                    data-key="{{ $setting->key }}"
                                    data-value="{{ $setting->value }}">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 justify-center items-center z-50 hidden">
        <div class="bg-white w-full max-w-xl p-6 rounded-lg shadow-xl relative">
            <button id="closeModalBtn" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-xl font-bold">&times;</button>
            <h2 class="text-xl font-semibold mb-4">Edit Pengaturan</h2>
            
            <form id="editForm" method="POST" action="">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block mb-1 font-semibold text-gray-600">Key</label>
                    <input type="text" id="editKey" class="w-full border p-2 rounded bg-gray-100" disabled>
                </div>
                <div class="mb-4">
                    <label for="editValue" class="block mb-1 font-semibold text-gray-700">Value</label>
                    <textarea name="value" id="editValue" rows="4" class="w-full border p-2 rounded" required></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('editModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const editForm = document.getElementById('editForm');
    const editKeyInput = document.getElementById('editKey');
    const editValueInput = document.getElementById('editValue');

    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const key = this.dataset.key;
            const value = this.dataset.value;

            // Set action URL form
            const url = `{{ url('admin/settings') }}/${id}`;
            editForm.action = url;

            // Isi nilai ke dalam form modal
            editKeyInput.value = key;
            editValueInput.value = value;
            
            // Tampilkan modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    const hideModal = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    };

    closeModalBtn.addEventListener('click', hideModal);

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            hideModal();
        }
    });
});
</script>
@endpush
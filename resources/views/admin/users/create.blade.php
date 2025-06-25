@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Edit Pengguna</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-medium">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium">Password (kosongkan jika tidak ingin diubah)</label>
            <input type="password" name="password" class="w-full border p-2 rounded">
        </div>
        <div class="text-right">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Perbarui
            </button>
        </div>
    </form>
@endsection

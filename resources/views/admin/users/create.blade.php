@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users._form', ['button' => 'Tambah', 'user' => null])
    </form>
</div>
@endsection

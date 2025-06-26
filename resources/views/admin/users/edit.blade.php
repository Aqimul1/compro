@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('admin.users._form', ['button' => 'Update', 'user' => $user])
    </form>
</div>
@endsection
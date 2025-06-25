@extends('layouts.admin')
@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800">Dashboard</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    {{-- Card: Users --}}
    <div class="bg-white shadow-md rounded-lg p-6 border-l-4 border-blue-500">
        <div class="text-gray-600 text-sm font-semibold uppercase mb-1">Users</div>
        <div class="text-3xl font-bold text-gray-900">{{ $totalUsers ?? 0 }}</div>
    </div>

    {{-- Card: Contacts --}}
    <div class="bg-white shadow-md rounded-lg p-6 border-l-4 border-green-500">
        <div class="text-gray-600 text-sm font-semibold uppercase mb-1">Contacts</div>
        <div class="text-3xl font-bold text-gray-900">{{ $totalContacts ?? 0 }}</div>
    </div>

    {{-- Card: Testimonials --}}
    <div class="bg-white shadow-md rounded-lg p-6 border-l-4 border-yellow-500">
        <div class="text-gray-600 text-sm font-semibold uppercase mb-1">Testimonials</div>
        <div class="text-3xl font-bold text-gray-900">{{ $totalTestimonials ?? 0 }}</div>
    </div>

    {{-- Card: Products --}}
    <div class="bg-white shadow-md rounded-lg p-6 border-l-4 border-purple-500">
        <div class="text-gray-600 text-sm font-semibold uppercase mb-1">Products</div>
        <div class="text-3xl font-bold text-gray-900">{{ $totalProducts ?? 0 }}</div>
    </div>
@endsection
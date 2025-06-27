{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    {{-- Sidebar --}}
    <aside class="w-64 h-screen bg-white shadow-md flex flex-col justify-between">
        <div>
            <div class="px-6 py-4 font-bold text-xl text-blue-600 border-b">Dashboard Admin</div>
            <nav class="mt-4">
                <ul class="space-y-1 text-gray-700">
                    <li><a href="/dashboard" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'dashboard' ? 'bg-blue-200 font-semibold' : '' }}">Dashboard</a></li>
                    <li><a href="/users" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'users' ? 'bg-blue-200 font-semibold' : '' }}">Users</a></li>
                    <li><a href="/products" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'products' ? 'bg-blue-200 font-semibold' : '' }}">Products</a></li>
                    <li><a href="/testimonials" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'testimonials' ? 'bg-blue-200 font-semibold' : '' }}">Testimonials</a></li>
                    <li><a href="/contacts" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'contacts' ? 'bg-blue-200 font-semibold' : '' }}">Contacts</a></li>
                    <li><a href="/settings" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'settings' ? 'bg-blue-200 font-semibold' : '' }}">Settings</a></li>
                    <li><a href="/galleries" class="block px-6 py-2 hover:bg-blue-100 {{ $activePage === 'galleries' ? 'bg-blue-200 font-semibold' : '' }}">Galleries</a></li>
                </ul>
            </nav>
        </div>

        {{-- Tombol Logout --}}
        <form method="POST" action="{{ route('logout') }}" class="p-4 border-t">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-red-500 hover:bg-red-100 rounded">
                Logout
            </button>
        </form>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

    @stack('scripts')

</body>
</html>

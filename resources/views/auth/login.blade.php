<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-600">Login Admin</h2>

        @if ($errors->any())
            <div class="text-red-500 text-sm mb-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>

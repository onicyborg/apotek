<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="flex justify-center border-b border-gray-300 bg-white py-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
</nav>
<div class="container mx-auto py-10 px-6">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg px-8 py-10">
        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
        <p class="text-gray-600 text-center mb-8">Masukkan Email dan Password Anda</p>

        @if(session('error'))
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="block w-full bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Masuk</button>
            <a href="#" class="block text-center text-blue-600 mt-2">Lupa Password?</a>
        </form>
    </div>
</div>
</body>
</html>

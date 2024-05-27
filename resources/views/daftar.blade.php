<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test</title>
</head>
<body>
<nav class="flex justify-center border-b border-black">
    <img src="{{asset('images/logo.png')}}" alt="" class="h-32 w-full object-contain">
</nav>
<div class="space-y-14 py-10 px-14">
    <div>
        <h2 class="text-xl font-bold">Login</h2>
        <p>Lengkapi form untuk pendaftaran</p>
    </div>

    <form action="" class="space-y-4">
        <div class="space-y-4">
            <label>Nama lengkap</label>
            <input type="text" class="w-full py-1 px-3 bg-gray-300">
        </div>
        <div class="space-y-4">
            <label>Nomor Handphone</label>
            <input type="number" class="w-full py-1 px-3 bg-gray-300">
        </div>
        <div class="space-y-4">
            <label>Email</label>
            <input type="email" class="w-full py-1 px-3 bg-gray-300">
        </div>
        <div class="space-y-4">
            <label>Membuat password</label>
            <input type="password" class="w-full py-1 px-3 bg-gray-300">
        </div>
        <a href="/register" class="block py-2 w-full text-center text-white bg-cyan-600">Daftar</a>
    </form>
</div>
</body>
</html>

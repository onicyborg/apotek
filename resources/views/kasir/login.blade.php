<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test</title>
</head>
<body>
<div class="flex w-full h-screen items-center justify-center">
    <div class="w-3/5 flex justify-center">
        <div class="space-y-6">
            <div class="flex justify-center">
                <img src="{{asset('images/logo.png')}}" alt=""
                     class="w-40 h-full object-contain border-b-[4px] border-blue-600">
            </div>

            <form action="" class="space-y-5">
                <div class="">
                    <label class="">Username</label>
                    <input type="text" class=" w-full py-2 px-4 bg-gray-300">
                </div>
                <div class="">
                    <label class="">Password</label>
                    <input type="password" class=" w-full py-2 px-4 bg-gray-300">
                </div>
                <a href="/kasir" class="w-min float-right py-2 px-6 bg-blue-600 text-white">Login</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .custom-bg {
            background-image: url('{{asset('images/bg.png')}}');
            background-size: cover;
            background-position: center;
        }
        .nav-link {
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #FFA500; /* Orange color on hover */
        }
        .sidebar-item {
            transition: background-color 0.3s, color 0.3s;
        }
        .sidebar-item:hover {
            background-color: rgba(255, 165, 0, 0.1); /* Light orange background on hover */
            color: #FFA500; /* Orange text on hover */
        }
        .rounded-btn {
            transition: background-color 0.3s;
        }
        .rounded-btn:hover {
            background-color: #FF7F50; /* Coral color on hover */
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }
        .bouncing-logo, .bouncing-info {
            animation: bounce 2s infinite;
        }
    </style>
</head>
<body>
<nav class="px-14 flex items-center justify-between font-semibold bg-gray-900 text-white py-4">
    <div class="flex gap-2">
        <div class="bg-red-600 rounded-full w-4 h-4"></div>
        <div class="bg-orange-600 rounded-full w-4 h-4"></div>
        <div class="bg-green-600 rounded-full w-4 h-4"></div>
    </div>
    <div class="flex gap-2 items-center">

    </div>
    <a href="/login" class="block italic px-8 py-2 bg-orange-600 text-white rounded-full rounded-btn">Login</a>
</nav>
<div class="w-full custom-bg px-14 h-screen space-y-8 relative text-white">
    <div class="flex justify-end py-4">
        <div class="float-right flex gap-8">
            <a href="#" class="nav-link">Home</a>
            <a href="/produk" class="nav-link">Produk</a>
            <a href="/saran-dan-kritik" class="nav-link">Saran dan Kritik</a>
            <a href="/tentang" class="nav-link">Tentang Kami</a>
            <a href="https://wa.me/6281212504070" class="nav-link">Hubungi Kami Melalui Whatsapp</a>
        </div>
    </div>
    <div class="flex items-start gap-10">
        <div class="text-center">
            <img src="{{asset('images/logo.png')}}" alt="Logo" class="bouncing-logo">
        </div>
        <div class="flex flex-col gap-10">
            <div class="bg-gray-700/70 p-6 rounded-lg bouncing-info">
                <div class="flex items-center gap-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"/>
                    </svg>
                    <p class="font-bold text-lg">Jam Buka Apotek</p>
                </div>
                <div class="flex justify-between gap-4 mb-2">
                    <p>Senin - Kamis</p>
                    <p>7.30 - 21.00</p>
                </div>
                <div class="flex justify-between gap-4 mb-2">
                    <p>Jumat</p>
                    <p>7.30 - 21.00</p>
                </div>
                <div class="flex justify-between gap-4 mb-2">
                    <p>Sabtu</p>
                    <p>7.30 - 21.00</p>
                </div>
                <div class="flex justify-between gap-4 mb-2">
                    <p>Minggu</p>
                    <p>Closed</p>
                </div>
            </div>
            <div class="bg-gray-700/70 p-6 rounded-lg bouncing-info">
                <p class="font-bold text-lg text-center mb-4">Emergency Call</p>
                <div class="flex items-center gap-4 py-3 px-6 bg-gray-200/50 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    <p class="font-bold text-lg">081212504070</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Saran dan Kritik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://source.unsplash.com/random/1920x1080');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .bg-gray-100 {
            background-color: rgba(255, 255, 255, 0.8) !important;
        }

        .bg-white {
            background-color: rgba(255, 255, 255, 0.9) !important;
        }

        .shadow-md {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), 0 6px 6px rgba(0, 0, 0, 0.1) !important;
        }

        .rounded-md {
            border-radius: 10px !important;
        }

        .p-8 {
            padding: 3rem !important;
        }

        .py-10 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .px-8 {
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }

        .py-6 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .px-6 {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
        }

        .text-lg {
            font-size: 1.5rem !important;
        }

        .font-bold {
            font-weight: 700 !important;
        }

        .text-gray-500 {
            color: #9ca3af !important;
        }

        .bg-blue-500 {
            background-color: #1e40af !important;
        }

        .text-white {
            color: #fff !important;
        }

        .hover:bg-blue-600 {
            transition: background-color 0.3s;
        }

        .transition {
            transition: all 0.3s;
        }

        .duration-300 {
            transition-duration: 300ms;
        }
    </style>
</head>

<body>

    <nav class="flex justify-center py-8 border-b border-gray-300 bg-white">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-24">
    </nav>

    <div class="container mx-auto py-10">
        <div class="bg-white shadow-md rounded-md px-8 py-10">
            <!-- Judul -->
            <h2 class="text-2xl font-bold text-center mb-8">Saran dan Kritik</h2>

            <!-- Informasi Komentar -->
            <div class="grid grid-cols-1 gap-6">
                <!-- Jumlah Komentar dan Tombol -->
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Jadilah yang pertama untuk menyukai ini.</p>
                    <div class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md">KOMENTAR (0)</div>
                </div>

                <!-- Komentar dari Orang Lain -->
                <div class="bg-gray-100 rounded-md p-6">
                    @foreach ($data as $item)
                        <div class="border-b border-gray-200 pb-4 mb-4">
                            <div class="flex items-center mb-2">
                                <div class="h-8 w-8 bg-gray-300 rounded-full mr-2"></div>
                                <div>
                                    <p class="text-sm font-bold">Guest</p>
                                    <p class="text-xs text-gray-500">{{ $item->created_at }}</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">{{ $item->comment }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Form Komentar -->
                <p class="text-sm text-gray-500">Tinggalkan komentar</p>
                <form action="/post-comment" method="post">
                    @csrf
                    <div class="bg-gray-100 rounded-md p-6">
                        <h1 class="text-lg font-bold mb-4">Tinggalkan Balasan</h1>
                        <!-- Textarea untuk Komentar -->
                        <textarea id="comment" rows="6" name="comment" class="w-full border border-gray-300 rounded-md p-2"
                            placeholder="Masukkan komentar Anda di sini..."></textarea>
                        <!-- Tombol Kirim -->
                        <button id="" type="submit"
                            class="mt-4 px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

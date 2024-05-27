<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Apotek Lisma Sidodadi</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        .slide-in {
            animation: slideIn 1s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100">
<nav class="flex justify-between items-center border-b border-gray-300 bg-white shadow-lg p-4">
    <img src="{{asset('images/logo.png')}}" alt="Apotek Lisma Sidodadi" class="h-16 w-auto object-contain">
    <div class="flex gap-4">
        <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
        <a href="/produk" class="text-gray-700 hover:text-gray-900">Produk</a>
        <a href="/saran-dan-kritik" class="text-gray-700 hover:text-gray-900">Saran dan Kritik</a>
        <a href="/tentang" class="text-gray-700 hover:text-gray-900">Tentang Kami</a>
        <a href="https://wa.me/6281212504070" class="text-gray-700 hover:text-gray-900">Hubungi Kami</a>
    </div>
</nav>
<div class="bg-[url('{{asset('images/bg.png')}}')] bg-cover bg-center px-14 space-y-10 py-14 text-gray-800 fade-in">
    <h1 class="text-4xl font-bold text-center text-white bg-opacity-75 bg-gray-800 p-4 rounded-lg slide-in">Tentang Kami</h1>
    <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg space-y-4 slide-in">
        <p class="leading-relaxed">Hi semua, selamat datang di Apotek Lisma Sidodadi. Apotek Lisma berdiri sejak tahun 2020. Apotek Lisma kepanjangan dari Lingkar Asa Bersama (LISMA), sebuah nama yang mempunyai doa dan harapan baik dimana Lingkar merupakan simbolis dari arti saling bergandeng tangan, Asa merupakan semangat dan harapan-harapan baik, sedangkan Bersama artinya gotong royong bekerja secara tim.</p>
        <p class="leading-relaxed">Apotek LISMA mempunyai karakteristik dalam pelayanan yaitu Pertama, kami menyediakan meja pelayanan agar konsumen dapat menyampaikan keluhan kepada LISMA dengan perhatian penuh dari LISMA. Di dengar, diperhatikan sehingga bisa mendapatkan pelayanan yang prima dari LISMA. Kedua, kami menjadi apotek satu-satunya di Cilacap yang menyediakan perlengkapan menyusui, konsultasi menyusui dengan konselor menyusui sehingga para ibu tidak perlu bingung mencari paket perlengkapan untuk ibu menyusui. Ketiga, pelayanan cepat dan ramah. Keempat, menyediakan konsultasi bersama apoteker yang siap membantu. Kelima, layanan obat siap antar hingga ke depan pintu rumah pelanggan/konsumen.</p>
        <p class="leading-relaxed">Lisma bergerak, bermanfaat dan siap melayani dengan sepenuh hati.</p>
        <p class="leading-relaxed">Pada era digitalisasi, LISMA menyediakan peer group discussion dan focus group discussion pada platform WAG, lalu marketing digital melalui sosial media seperti Instagram dan TikTok sehingga pelanggan/konsumen dapat mendapatkan info terbaru mengenai stok yang ada di LISMA serta tips kesehatan dari LISMA.</p>
        <h2 class="text-xl font-bold">Visi</h2>
        <p class="leading-relaxed">Menjadi perusahaan yang bisa memberikan pelayanan secara holistik kepada masyarakat.</p>
        <h2 class="text-xl font-bold">Misi</h2>
        <ol class="list-decimal list-inside space-y-2 leading-relaxed">
            <li>Menjadi perusahaan dan apotek yang memberikan pelayanan yang tepat dengan berbasis evidence-based dan penerapan 5S (Senyum, Sapa, Salam, Santun, kaSih) dalam mendengarkan keluhan.</li>
            <li>Pengembangan jasa dan pelayanan dengan pendekatan holistic care.</li>
            <li>SDM yang memiliki kompetensi di bidang kefarmasian, semangat juang, komitmen, kompetisi dan konsisten dalam memberi pelayanan kepada pelanggan.</li>
        </ol>
    </div>
</div>
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex gap-2">
            <div class="bg-red-600 rounded-full w-8 h-4"></div>
            <div class="bg-orange-600 rounded-full w-8 h-4"></div>
            <div class="bg-green-600 rounded-full w-8 h-4"></div>
        </div>
        <p>&copy; 2024 Apotek Lisma Sidodadi. All rights reserved.</p>
    </div>
</footer>
</body>
</html>

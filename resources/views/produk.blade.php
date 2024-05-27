<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Produk</title>
    <style>
        /* Style untuk card placeholder */
        body {
            background-color: #f5f5f5;
        }

        .card {
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            margin-left: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background-image: linear-gradient(to right, #f5f5f5, #e5e5e5);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .card-text {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        .img-size {
            width: 100%;
            max-width: 150px;
            /* Lebih kecil dari sebelumnya */
            height: auto;
            /* Biarkan tingginya mengikuti proporsi asli */
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .buy-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .buy-button:hover {
            background-color: #45a049;
        }

        .buy-button-red {
            background-color: #e53935;
            /* Warna Merah */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .buy-button-red:hover {
            background-color: #c62828;
            /* Warna Merah yang lebih tua */
        }
    </style>
</head>

<body>
    <nav class="px-14 flex items-center justify-between font-semibold">
        <div class="flex gap-2">
            <div class="bg-red-600 rounded-full w-8 h-4"></div>
            <div class="bg-orange-600 rounded-full w-8 h-4"></div>
            <div class="bg-green-600 rounded-full w-8 h-4"></div>
        </div>
        <div class="flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

            <div class="input-group rounded">
                <input type="search" id="searchInput" class="form-control rounded"
                    placeholder="Cari Obat di Lisma Sidodi" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
        <a href="/login" class="block italic px-8 py-2 bg-orange-600 text-white w-min">Login</a>
    </nav>
    <div class="container mx-auto px-4">
        <div class="flex justify-end">
            <div class="float-right flex gap-4">
                <a href="/">Home</a>
                <a href="/produk">Produk</a>
                <a href="/saran-dan-kritik">Saran dan kritik </a>
                <a href="/tentang">Tentang Kami</a>
                <a href="https://wa.me/6281212504070">Hubungi Kami Melalui Whatsapp</a>
            </div>
        </div>
        <h2 class="text-3xl font-bold mb-6">Penjualan Produk Unggulan</h2>
        <div class="flex flex-wrap -mx-4">
            @foreach ($products as $item)
                <div class="w-full md:w-1/3 px-4 mb-8 product-card">
                    <div class="card">
                        @if ($item->img != '')
                            <img src="{{ asset('storage/images/' . $item->img) }}" class="img-size">
                        @else
                            <img src="{{ asset('images/obat.png') }}" class="img-size">
                        @endif

                        <div class="card-title">{{ $item->nama_obat }}</div>
                        <div class="card-text">{{ $item->deskripsi }}</div>
                        <div class="card-text">Harga: Rp.{{ number_format($item->harga_jual) }}</div>
                        <div class="card-text">Sisa Stok: {{ $item->quantity }}</div>
                        @if ($item->quantity != 0)
                            <a href="#" class="buy-button">Ready</a>
                        @else
                            <a href="#" class="buy-button-red">Stok Habis</a>
                        @endif
                    </div>
                </div>
            @endforeach
            <!-- Produk 1 -->
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const productCards = document.querySelectorAll('.product-card');

            searchInput.addEventListener('input', function() {
                const searchText = searchInput.value.toLowerCase();

                productCards.forEach(function(card) {
                    const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
                    if (cardTitle.includes(searchText)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>

</html>

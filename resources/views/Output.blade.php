<!-- resources/views/dashboard/obat.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Data Obat</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-4 text-gray-800 tracking-wider">Nama Obat</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-4 text-gray-800 tracking-wider">Harga Jual</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-4 text-gray-800 tracking-wider">Harga Beli</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-4 text-gray-800 tracking-wider">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $product->nama_obat }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $product->harga_jual }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $product->harga_beli }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $product->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

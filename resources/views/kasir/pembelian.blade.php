@extends('layouts.main')

@section('content')
    <div class="p-5">
        <h2 class="text-2xl font-bold mb-4">Form Pembelian Barang</h2>
        <form id="purchaseForm" action="/submit-purchase" method="POST" class="space-y-4">
            @csrf
            <div class="flex space-x-4 mb-2">
                <div class="flex-1">
                    <label for="customer_name" class="block text-sm font-medium text-gray-700">Nama Customer</label>
                    <input type="text" name="customer_name" id="customer_name"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                </div>
                <div class="flex-1">
                    <label for="customer_phone" class="block text-sm font-medium text-gray-700">No Handphone</label>
                    <input type="text" name="customer_phone" id="customer_phone"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                </div>
            </div>

            <div id="productContainer">
                <div class="flex space-x-4 mb-2">
                    <div class="flex-1">
                        <label for="product_1" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <select name="products[]" id="product_1"
                            class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600 product-select">
                            <option selected disabled>-Silahkan Pilih Obat-</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" data-price="{{ $product->harga_jual }}">{{ $product->nama_obat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="price_1" class="block text-sm font-medium text-gray-700">Harga Satuan</label>
                        <input type="text" name="prices[]" id="price_1" readonly
                            class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    </div>
                    <div class="flex-1">
                        <label for="quantity_1" class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <input type="number" name="quantities[]" id="quantity_1" min="1"
                            class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600 quantity-input">
                    </div>
                </div>
            </div>
            <button type="button" id="addRow"
                class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-600">Tambah Baris</button>
            <div class="mt-4">
                <h3 class="text-xl font-bold">Total: Rp.<span id="totalPrice">0</span></h3>
            </div>
            <button type="submit"
                class="block w-full bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 mt-4">Submit</button>
        </form>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let rowIndex = 1;

            function updateTotal() {
                let total = 0;
                $('.quantity-input').each(function(index) {
                    const quantity = $(this).val();
                    const price = $(this).closest('.flex').find('.product-select option:selected').data('price');
                    total += (quantity * price);
                });
                $('#totalPrice').text(total);
            }

            $(document).on('change', '.product-select', function() {
                const selectedOption = $(this).find('option:selected');
                const price = selectedOption.data('price');
                $(this).closest('.flex').find('input[name="prices[]"]').val(price);
                updateTotal();
            });

            $(document).on('input', '.quantity-input', function() {
                updateTotal();
            });

            $('#addRow').click(function() {
                rowIndex++;
                const newRow = `
                <div class="flex space-x-4 mb-2">
                    <div class="flex-1">
                        <label for="product_${rowIndex}" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <select name="products[]" id="product_${rowIndex}" class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600 product-select">
                            <option selected disabled>-Silahkan Pilih Obat-</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" data-price="{{ $product->harga_jual }}">{{ $product->nama_obat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="price_${rowIndex}" class="block text-sm font-medium text-gray-700">Harga Satuan</label>
                        <input type="text" name="prices[]" id="price_${rowIndex}" readonly
                            class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    </div>
                    <div class="flex-1">
                        <label for="quantity_${rowIndex}" class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <input type="number" name="quantities[]" id="quantity_${rowIndex}" min="1"
                            class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600 quantity-input">
                    </div>
                </div>
                `;
                $('#productContainer').append(newRow);
            });
        });
    </script>
@endpush

@extends('layouts.main')

@section('content')
    <div class="p-5 space-y-5">
        <h2 class="text-2xl font-bold mb-4">History Pembelian Customer</h2>

        <!-- Filter Tanggal -->
        <form method="POST" action="/kasir/filter-history" class="space-y-4">
            @csrf
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="from_date" class="block text-sm font-medium text-gray-700">Dari Tanggal</label>
                    <input type="date" name="from_date" id="from_date"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                </div>
                <div class="flex-1">
                    <label for="to_date" class="block text-sm font-medium text-gray-700">Sampai Tanggal</label>
                    <input type="date" name="to_date" id="to_date"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                </div>
            </div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Filter</button>
        </form>

        <!-- Tabel History Pembelian -->
        <div class="overflow-x-auto">
            <table id="historyTable" class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Tanggal</th>
                        <th class="py-2 px-4 border-b">Nama Customer</th>
                        <th class="py-2 px-4 border-b">No Handphone</th>
                        <th class="py-2 px-4 border-b">List Produk</th>
                        <th class="py-2 px-4 border-b">Total Pembelian</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($historys as $no => $item)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $no + 1 }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->created_at }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->nama_customer }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->no_handphone_customer }}</td>
                            <td class="py-2 px-4 border-b">
                                <ul>
                                    @foreach ($item->list_product as $produk)
                                    <li>{{ $produk->product->nama_obat }}({{ number_format($produk->product->harga_jual) }} * {{ $produk->quantity }} = {{ number_format($produk->total_price) }})</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="py-2 px-4 border-b">Rp.{{ number_format($item->total_all_price) }}
                            </td>
                        </tr>
                        @php
                            $total += $item->total_all_price;
                        @endphp
                    @endforeach
                    {{-- <tr>
                        <td class="py-2 px-4 border-b text-center" colspan="5"><strong>Total</strong></td>
                        <td class="py-2 px-4 border-b"><strong>Rp. {{ number_format($total) }}</strong></td>
                    </tr> --}}
                </tbody>
                <tfoot>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Tanggal</th>
                        <th class="py-2 px-4 border-b">Nama Customer</th>
                        <th class="py-2 px-4 border-b">No Handphone</th>
                        <th class="py-2 px-4 border-b">List Produk</th>
                        <th class="py-2 px-4 border-b">Total Pembelian</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#historyTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    title: 'History Pembelian Customer'
                }]
            });
        });
    </script>
@endpush

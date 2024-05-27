@extends('layouts.main')

@section('content')
    <div class="p-5 space-y-5">
        <div class="grid grid-cols-2 gap-5">
            <div class="flex gap-2">
                <div class="rounded-full p-4 bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="w-6 h-6 stroke-blue-600 fill-white">
                        <path
                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z"/>
                        <path
                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"/>
                    </svg>
                </div>

                <div>
                    <p>Jumlah Purchase Order</p>
                    <p class="text-xl font-bold">11 PO</p>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="rounded-full p-4 bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="w-6 h-6 stroke-red-600 fill-white">
                        <path
                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z"/>
                        <path
                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"/>
                    </svg>
                </div>

                <div>
                    <p>Jumlah Pembeliaan</p>
                    <p class="text-xl font-bold">9 Transaksi</p>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="rounded-full p-4 bg-cyan-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="w-6 h-6 stroke-cyan-600 fill-white">
                        <path
                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z"/>
                        <path
                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"/>
                    </svg>
                </div>

                <div>
                    <p>Jumlah Penerimaan</p>
                    <p class="text-xl font-bold">8 Penerimaan</p>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="rounded-full p-4 bg-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="w-6 h-6 stroke-purple-600 fill-white">
                        <path
                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z"/>
                        <path
                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"/>
                    </svg>
                </div>

                <div>
                    <p>Jumlah Retur Pembelian</p>
                    <p class="text-xl font-bold">1 Retur</p>
                </div>
            </div>
        </div>

        <div class="p-2 w-full bg-blue-500 text-white space-y-3">
            <p>Detail transaksi pada hari ini terdapat</p>

            <ul class="list-disc list-inside">
                <li>11 pre order</li>
                <li>9 transaksi</li>
                <li>8 penerimaan</li>
                <li>1 retur barang</li>
            </ul>
        </div>
    </div>
@endsection

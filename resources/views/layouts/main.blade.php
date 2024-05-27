<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="https://cdn.tiny.cloud/1/65e26xvf8mkn9pnuzct9ji06a9e50lf3snovabszlfns39dz/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <title>Test</title>
    @stack('styles')
</head>
<body>
<nav class="flex justify-start">
    <img src="{{asset('images/logo.png')}}" alt="" class="h-24">
</nav>
<div class="grid grid-cols-12 h-screen">
    @php
        $active = false;

        if(request()->segment(2)){
            $active = true;
        }
    @endphp


    <div class="col-span-3 pb-10 text-white {{$active ? 'bg-black/80' : 'bg-[#1D83A3]'}}" id="sidebar">
        <div class="flex justify-end">
            <button class="py-3 px-5 bg-black" onclick="toggleSidebar()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-4 h-4 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"/>
                </svg>
            </button>
        </div>

        @if(request()->segment(1) == 'dashboard')
            <div class="space-y-5 px-8 pt-10">
                <a href="/dashboard" class="block font-bold">Dashboard</a>
                <a href="/dashboard/data-obat" class="block font-bold">Data Obat</a>
                <a href="/dashboard/manajemen-user" class="block font-bold">Manajemen User</a>
                <a href="/logout" class="block font-bold">Logout</a>
            </div>
        @elseif(request()->segment(1) == 'kasir')
            <div class="space-y-5 px-8 pt-10">
                <a href="/kasir" class="block font-bold">Dashboard</a>
                <a href="/kasir/pembelian" class="block font-bold">Pembelian</a>
                <a href="/kasir/transaksi" class="block font-bold">Transaksi</a>
                <a href="/logout" class="block font-bold">Logout</a>
            </div>
        @endif
    </div>
    <div class="col-span-9">
        @php
            $pageTitle = 'Dashboard';

            if(request()->segment(2) == 'pembelian'){
                $pageTitle = 'Pembelian';
            }else if(request()->segment(2) == 'transaksi'){
                $pageTitle = 'Transaksi';
            }else if(request()->segment(2) == 'pembayaran'){
                $pageTitle = 'Pembayaran';
            }
        @endphp
        <div class="bg-[#1D83A3] py-3 w-full" id="judul">
            <h1 class="text-white font-bold pl-8">{{$pageTitle}}</h1>
        </div>

        <div class="grid grid-cols-12">
            <div class="col-span-8">
                @yield('content')
            </div>
        </div>

    </div>
</div>

@stack('scripts')
<script>
    // function toggleSidebar() {
    //     $('#sidebar-child').toggleClass('hidden');
    //     $('#sidebar').toggleClass('bg-[#1D83A3]');
    //     $('#sidebar').toggleClass('bg-black/80');
    //     $('#judul').toggleClass('bg-[#1D83A3]');
    //     $('#judul').toggleClass('bg-black');
    // }

    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>

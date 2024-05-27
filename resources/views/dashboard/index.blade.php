@extends('layouts.main')

@section('content')
    <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <!-- Card for Data Obat -->
        <div class="bg-blue-500 text-white space-y-3 pt-5 px-6 w-full rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-semibold text-3xl text-center">1382</p>
            <p class="text-center text-lg">Data Obat</p>
            <div class="flex justify-center">
                <img src="{{ asset('icons/dashboard-1.png') }}" alt="Data Obat Icon" class="w-16 h-16">
            </div>
        </div>

        <!-- Card for Data Obat Masuk -->
        <div class="bg-green-500 text-white space-y-3 pt-5 px-6 w-full rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-semibold text-3xl text-center">5</p>
            <p class="text-center text-lg">Data Obat Masuk</p>
            <div class="flex justify-center">
                <img src="{{ asset('icons/dashboard-2.png') }}" alt="Data Obat Masuk Icon" class="w-16 h-16">
            </div>
        </div>

        <!-- Card for Laporan Stok Obat -->
        <div class="bg-orange-500 text-white space-y-3 pt-5 px-6 w-full rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-semibold text-3xl text-center">1382</p>
            <p class="text-center text-lg">Laporan Stok Obat</p>
            <div class="flex justify-center">
                <img src="{{ asset('icons/dashboard-3.png') }}" alt="Laporan Stok Obat Icon" class="w-16 h-16">
            </div>
        </div>

        <!-- Card for Laporan Obat Masuk -->
        <div class="bg-red-500 text-white space-y-3 pt-5 px-6 w-full rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-semibold text-3xl text-center">5</p>
            <p class="text-center text-lg">Laporan Obat Masuk</p>
            <div class="flex justify-center">
                <img src="{{ asset('icons/dashboard-4.png') }}" alt="Laporan Obat Masuk Icon" class="w-16 h-16">
            </div>
        </div>
    </div>
@endsection

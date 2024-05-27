<?php

namespace App\Http\Controllers;

use App\Models\NotaPenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $total_transaksi = [];
        $tanggal = [];

        // Mendapatkan tanggal dua minggu yang lalu
        $twoWeeksAgo = Carbon::now()->subWeeks(2);

        // Mendapatkan tanggal hari ini
        $today = Carbon::now();

        // Loop untuk setiap tanggal dari dua minggu yang lalu hingga hari ini
        for ($date = $twoWeeksAgo; $date->lte($today); $date->addDay()) {
            // Menghitung jumlah transaksi pada tanggal tertentu
            $jumlah_transaksi = NotaPenjualan::whereDate('created_at', $date->toDateString())->count();

            // Menyimpan total transaksi dan tanggal
            $total_transaksi[] = $jumlah_transaksi;
            $tanggal[] = $date->format('Y-m-d');
        }

        $total_penjualan = 0;
        $data_penjualan = NotaPenjualan::whereDate('created_at', $today)->get();
        foreach ($data_penjualan as $item) {
            $total_penjualan += $item->total_all_price;
        }

        // Mendapatkan tanggal satu minggu yang lalu
        $oneWeekAgo = Carbon::now()->subWeek();

        // Menghitung total penjualan selama satu minggu terakhir
        $total_penjualan_seminggu = NotaPenjualan::whereBetween('created_at', [$oneWeekAgo, $today])
                                        ->sum('total_all_price');

        return view('kasir.index', ['total_transaksi' => $total_transaksi, 'tanggal' => $tanggal, 'total_penjualan' => $total_penjualan, 'total_penjualan_seminggu' => $total_penjualan_seminggu]);
    }

    public function index_admin()
    {
        $total_transaksi = [];
        $tanggal = [];

        // Mendapatkan tanggal dua minggu yang lalu
        $twoWeeksAgo = Carbon::now()->subWeeks(2);

        // Mendapatkan tanggal hari ini
        $today = Carbon::now();

        // Loop untuk setiap tanggal dari dua minggu yang lalu hingga hari ini
        for ($date = $twoWeeksAgo; $date->lte($today); $date->addDay()) {
            // Menghitung jumlah transaksi pada tanggal tertentu
            $jumlah_transaksi = NotaPenjualan::whereDate('created_at', $date->toDateString())->count();

            // Menyimpan total transaksi dan tanggal
            $total_transaksi[] = $jumlah_transaksi;
            $tanggal[] = $date->format('Y-m-d');
        }

        $total_penjualan = 0;
        $data_penjualan = NotaPenjualan::whereDate('created_at', $today)->get();
        foreach ($data_penjualan as $item) {
            $total_penjualan += $item->total_all_price;
        }

        // Mendapatkan tanggal satu minggu yang lalu
        $oneWeekAgo = Carbon::now()->subWeek();

        // Menghitung total penjualan selama satu minggu terakhir
        $total_penjualan_seminggu = NotaPenjualan::whereBetween('created_at', [$oneWeekAgo, $today])
                                        ->sum('total_all_price');

        return view('dashboard.index', ['total_transaksi' => $total_transaksi, 'tanggal' => $tanggal, 'total_penjualan' => $total_penjualan, 'total_penjualan_seminggu' => $total_penjualan_seminggu]);
    }
}

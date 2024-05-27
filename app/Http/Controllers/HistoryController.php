<?php

namespace App\Http\Controllers;

use App\Models\NotaPenjualan;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $historys = NotaPenjualan::all();

        return view('kasir.transaksi', ['historys' => $historys]);
    }

    public function filter(Request $request)
    {
        $request->validate([
            'from_date' => 'required',
            'to_date' => 'required',
        ]);
        // Ambil data tanggal dari request
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        // Filter data NotaPenjualan berdasarkan rentang tanggal
        $historys = NotaPenjualan::whereBetween('created_at', [$fromDate, $toDate])->get();

        // Kemudian Anda dapat melakukan apa pun dengan data yang difilter
        // Misalnya, lempar data ke view untuk ditampilkan
        return view('kasir.transaksi', ['historys' => $historys]);
    }
}

@extends('layouts.main')

@section('content')
    <div class="px-5 space-y-10">
        <div class="flex justify-between py-5">
            <div class="flex gap-2 bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"/>
                </svg>

                <p class="text-lg">Data Obat Masuk</p>
            </div>
            <a href="/dashboard/input-obat-masuk" class="flex gap-2 bg-blue-600 items-center px-2 text-white">
                <div class="py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 stroke-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>
                </div>
                <p class="text-lg">Tambah</p>
            </a>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>No.</th>
                <th>Kode Transaksi</th>
                <th>Tanggal</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Jumlah Masuk</th>
                <th>Satuan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            <tr>
                <td>1</td>
                <td>TM-2017-00000015</td>
                <td>01-04-2017</td>
                <td>B000111</td>
                <td>Paracetamol</td>
                <td>100</td>
                <td>Box</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>No.</th>
                <th>Kode Transaksi</th>
                <th>Tanggal</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Jumlah Masuk</th>
                <th>Satuan</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection

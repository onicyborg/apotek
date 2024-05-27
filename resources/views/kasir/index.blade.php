@extends('layouts.main')

@section('content')
    <div class="space-y-7 p-5">
        <h1 class="text-2xl font-semibold">Jumlah Transaksi dalam 2 Minggu Terakhir</h1>
        <div class="bg-white shadow-md rounded-lg p-4">
            <canvas id="chart"></canvas>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                <p class="text-lg font-semibold">Total Penjualan Hari Ini</p>
                <p class="text-xl font-bold">Rp. {{ number_format($total_penjualan) }}</p>
            </div>
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                <p class="text-lg font-semibold">Total Penjualan dalam Seminggu Ini</p>
                <p class="text-xl font-bold">Rp. {{ number_format($total_penjualan_seminggu) }}</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var beasiswaData = <?php echo json_encode($total_transaksi); ?>;
        var beasiswaLabels = <?php echo json_encode($tanggal); ?>;

        var ctx = document.getElementById('chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: beasiswaLabels,
                datasets: [{
                    data: beasiswaData,
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    borderColor: '#007bff',
                    borderWidth: 2,
                    pointBackgroundColor: '#007bff',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#007bff',
                }],
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function (value, index, values) {
                                return 'Rp.' + value.toLocaleString();
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var value = tooltipItem.yLabel;
                            return 'Rp.' + value.toLocaleString();
                        }
                    }
                }
            }
        });
    </script>
@endpush

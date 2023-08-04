<?php

namespace App\Charts;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HasilProduksiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $dailyProduct = Product::select('tanggal', DB::raw('SUM(qty_total) as dailyTotal'))
            ->groupBy('tanggal')
            ->get();

        // return $dailyProduct;

        $chartData = [];
        $xAxisData = [];

        foreach ($dailyProduct as $data) {
            $xAxisData[] = $data['tanggal'];
            $chartData[] = $data['dailyTotal'];
        }
        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('', $chartData)
            ->setXAxis($xAxisData);
    }
}

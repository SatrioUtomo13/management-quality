<?php

namespace App\Charts;

use App\Models\IdnProduct;
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
        // get data relation
        $query = IdnProduct::with(['lotwip', 'quantity']);

        $dailyProduct = $query->get()->groupBy(function ($product) {
            return $product->lotwip->tanggal;
        })->map(function ($group) {
            $dailyTotal = $group->sum('quantity.qty_total');
            return [
                'tanggal' => $group[0]->lotwip->tanggal,
                'dailyTotal' => $dailyTotal,
            ];
        });

        $chartData = [];
        $xAxisData = [];

        foreach ($dailyProduct as $data) {
            $xAxisData[] = $data['tanggal'];
            $chartData[] = $data['dailyTotal'];
        }

        return $this->chart->lineChart()
            ->setTitle('Amount of Production.')
            ->addData('', $chartData)
            ->setXAxis($xAxisData);
    }
}

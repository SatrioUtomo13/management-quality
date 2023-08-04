<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Charts\HasilProduksiChart;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(HasilProduksiChart $hasilProduksiChart)
    {
        // $dailyProduct = Product::select('tanggal', DB::raw('SUM(qty_total) as dailyTotal'))
        //     ->groupBy('tanggal')
        //     ->get();

        // foreach ($dailyProduct as $data) {
        //     $tanggal = $data['tanggal'];
        //     $total = $data['dailyTotal'];
        //     return $tanggal .  $total;
        // }
        // return $dailyProduct[0]['tanggal'];

        return view('dashboard.report.laporanProduksi.index', [
            "hasilProduksiChart" => $hasilProduksiChart->build()
        ]);
    }
}

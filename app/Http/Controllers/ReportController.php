<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Charts\HasilProduksiChart;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $products = Product::select('user_id', 'item', 'lot', 'berat_awal', 'berat_akhir', 'qty_total')->get();


        return view('dashboard.report.laporanProduksi.index', [
            "products" => $products
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Charts\HasilProduksiChart;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        $query = Product::select('user_id', 'item', 'lot', 'berat_awal', 'berat_akhir', 'qty_total');

        /* === Searching Feature === */

        if (request('search')) {
            $searchTerm = '%' . request('search') . '%';
            $query->where('item', 'LIKE', $searchTerm)
                ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                    $userQuery->where('name', 'LIKE', $searchTerm);
                });
        }

        /* === Filter Feature === */
        if (request('filter-radio')) {
            $selectedOption = request('filter-radio'); // create variable for contain http request

            // check option filter
            $endDate = Carbon::now();
            if ($selectedOption === 'Weekly') {
                $startDate = Carbon::now()->subDays(7);
                $query->whereBetween('created_at', [$startDate, $endDate]);
            } elseif ($selectedOption === 'Daily') {
                $startDate = Carbon::now()->subDays(1);
                $query->whereBetween('created_at', [$startDate, $endDate]);
            } elseif ($selectedOption === 'Monthly') {
                $startDate = Carbon::now()->subMonth();
                $query->whereBetween('created_at', [$startDate, $endDate]);
            } elseif ($selectedOption === 'Annual') {
                $startDate = Carbon::now()->subYear();
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }
        }

        $products = $query->latest()->get();

        return view('dashboard.report.laporanProduksi.index', [
            "products" => $products
        ]);
    }

    public function qualityReport()
    {
        $products = Product::select('user_id', 'item', 'lot', 'rc_r', 'rc_c', 'rc_l', 'vc_r', 'vc_l')->get();

        return view('dashboard.report.laporanKualitas.index', [
            "products" => $products
        ]);
    }
}

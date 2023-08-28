<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Param;
use App\Models\Product;
use App\Models\IdnProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Charts\HasilProduksiChart;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class ReportController extends Controller
{
    public function index()
    {
        $query = IdnProduct::with('lotwip', 'berat', 'quantity');

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
            $selectedOption = request('filter-radio'); // create variable for containt http request

            // check option filter
            $endDate = Carbon::now();
            if ($selectedOption === 'Weekly') {
                $startDate = Carbon::now()->subDays(7);
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            } elseif ($selectedOption === 'Daily') {
                $startDate = Carbon::now()->subDays(1);
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            } elseif ($selectedOption === 'Monthly') {
                $startDate = Carbon::now()->subMonth();
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            } elseif ($selectedOption === 'Annual') {
                $startDate = Carbon::now()->subYear();
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            }
        }

        $products = $query->latest()->get();

        return view('dashboard.report.laporanProduksi.index', [
            "products" => $products
        ]);
    }

    public function qualityReport()
    {
        // query to IdnProduct table with relation
        $query = IdnProduct::with('lotwip', 'check', 'report');

        /* === Searching Feature === */
        if (request('search')) {
            $searchTerm = '%' . request('search') . '%';
            $query->where('item', 'LIKE', $searchTerm)
                ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                    $userQuery->where('name', 'LIKE', $searchTerm);
                })
                ->orWhereHas('report', function ($reportQuery) use ($searchTerm) {
                    $reportQuery->where('status', 'LIKE', $searchTerm);
                });
        }

        /* === Filter Feature === */
        if (request('filter-radio')) {
            $selectedOption = request('filter-radio'); // create variable for containt http request

            // check option filter
            $endDate = Carbon::now();
            if ($selectedOption === 'Weekly') {
                $startDate = Carbon::now()->subDays(7);
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            } elseif ($selectedOption === 'Daily') {
                $startDate = Carbon::now()->subDays(1);
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            } elseif ($selectedOption === 'Monthly') {
                $startDate = Carbon::now()->subMonth();
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            } elseif ($selectedOption === 'Annual') {
                $startDate = Carbon::now()->subYear();
                $query->whereHas('lotwip', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('tanggal', [$startDate, $endDate]);
                });
            }
        }

        // concat query
        $products = $query->latest()->get();

        return view('dashboard.report.laporanKualitas.index', [
            "products" => $products
        ]);
    }
}

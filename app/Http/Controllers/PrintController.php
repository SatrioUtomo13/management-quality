<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\IdnProduct;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index()
    {

        $products = Product::query();

        if (request('search')) {
            $products->where('lot_wip', request('search'));
        }

        $product = $products->latest()->first(); // Mengambil satu record pertama yang sesuai dengan kriteria (jika ada).

        return view('dashboard.print.printHasil.index', [
            'product' => $product, // Mengirimkan data produk ke tampilan sebagai satu instance model.
        ]);
    }

    public function printLabel()
    {
        $products = IdnProduct::query();

        if (request('search')) {
            $products->where('lot_wip', request('search'));
        }

        $product = $products->with('lotwip')->latest()->first();

        return view('dashboard.print.printLabel.index', [
            'product' => $product
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berat;
use App\Models\Check;
use App\Models\Param;
use App\Models\LotWip;
use App\Models\Product;
use App\Models\Quantity;
use App\Models\IdnProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = IdnProduct::with(['user', 'lotwip', 'check', 'berat', 'quantity'])->latest()->get();
        $products = IdnProduct::latest()->get();

        return view('dashboard.product.index', [
            "products" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $latestRecord = LotWip::orderBy('id', 'desc')->first();

        // if ($latestRecord) {
        //     $latestId = $latestRecord->id;
        //     $latestId++;
        // } else {
        //     $latestId = 1;
        // }

        if (request("itemSearch")) {
            $items = Param::items();
        } else {
            $items = [];
        }

        return view('dashboard.product.create', [
            "params" => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validated data
        $validatedData = $request->validate([
            "user_id" => ['required'],
            "shift" => ['required'],
            "item" => ['required'],
            "resin" => ['required'],
            "speed" => ['required'],
            "tanggal" => ['required', 'date'],
            "lot" => ['required'],
            "lot_wip" => ['required', 'unique:lot_wips'],
            "berat_aktual" => ['required', 'numeric'],
            "berat_awal" => ['required', 'numeric'],
            "berat_akhir" => ['required', 'numeric'],
            "rsi" => ['nullable'],
            "rc_r" => ['required', 'numeric'],
            "rc_c" => ['required', 'numeric'],
            "rc_l" => ['required', 'numeric'],
            "vc_r" => ['required', 'numeric'],
            "vc_l" => ['required', 'numeric'],
            "qty_transisi" => ['nullable'],
            "qty_lot" => ['nullable'],
            "qty_total" => ['nullable'],
        ]);

        // create data to model IdnProduct
        $idnProduct = IdnProduct::create($validatedData);

        // create lot wip
        $lotwip = new LotWip([
            "tanggal" => $request->input('tanggal'),
            "lot" => $request->input('lot'),
            "lot_wip" => $request->input('lot_wip'),
        ]);

        // create berat
        $berat = new Berat([
            "berat_aktual" => $request->input('berat_aktual'),
            "berat_awal" => $request->input('berat_awal'),
            "berat_akhir" => $request->input('berat_akhir'),
            "rsi" => $request->input('rsi')
        ]);

        //create check
        $check = new Check([
            "rc_r" => $request->input('rc_r'),
            "rc_c" => $request->input('rc_c'),
            "rc_l" => $request->input('rc_l'),
            "vc_r" => $request->input('vc_r'),
            "vc_l" => $request->input('vc_l'),
        ]);

        // create qty
        $quantity = new Quantity([
            "qty_transisi" => $request->input('qty_transisi'),
            "qty_lot" => $request->input('qty_lot'),
            "qty_total" => $request->input('qty_total'),
        ]);

        // reference lot wip to IdnProduct
        $idnProduct->lotwip()->save($lotwip);

        // reference berat to IdnProduct
        $idnProduct->berat()->save($berat);

        // reference check to IdnProduct
        $idnProduct->check()->save($check);

        // reference qty to IdnProduct
        $idnProduct->quantity()->save($quantity);

        return redirect('/products')->with('success', 'New Data has been Added'); //flashing data

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IdnProduct $product)
    {
        return view('dashboard.product.edit', [
            "product" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IdnProduct $product)
    {
        // make rules
        $rules = [
            "user_id" => ['required'],
            "shift" => ['required'],
            "item" => ['required'],
            "resin" => ['required'],
            "speed" => ['required'],
            "tanggal" => ['required', 'date'],
            "lot" => ['required'],
            "berat_aktual" => ['required', 'numeric'],
            "berat_awal" => ['required', 'numeric'],
            "berat_akhir" => ['required', 'numeric'],
            "rsi" => ['nullable'],
            "rc_r" => ['required', 'numeric'],
            "rc_c" => ['required', 'numeric'],
            "rc_l" => ['required', 'numeric'],
            "vc_r" => ['required', 'numeric'],
            "vc_l" => ['required', 'numeric'],
            "qty_transisi" => ['nullable'],
            "qty_lot" => ['nullable'],
            "qty_total" => ['nullable'],
        ];

        // check lot wip
        if ($request->lot_wip !== $product->lotwip->lot_wip) {
            $rules["lot_wip"] = ['required', 'unique:lot_wips'];
        }

        // validated data
        $validatedData = $request->validate($rules);

        // update data lotwip melalui relasi
        $product->lotwip->update([
            "tanggal" => $request->input('tanggal'),
            "lot" => $request->input('lot'),
            "lot_wip" => $request->input('lot_wip'),
        ]);

        // update data berat melalui relasi
        $product->berat->update([
            "berat_aktual" => $request->input('berat_aktual'),
            "berat_awal" => $request->input('berat_awal'),
            "berat_akhir" => $request->input('berat_akhir'),
            "rsi" => $request->input('rsi')
        ]);

        //update data check melalui relasi
        $product->check->update([
            "rc_r" => $request->input('rc_r'),
            "rc_c" => $request->input('rc_c'),
            "rc_l" => $request->input('rc_l'),
            "vc_r" => $request->input('vc_r'),
            "vc_l" => $request->input('vc_l'),
        ]);

        // update data quantity melalui relasi
        $product->quantity->update([
            "qty_transisi" => $request->input('qty_transisi'),
            "qty_lot" => $request->input('qty_lot'),
            "qty_total" => $request->input('qty_total'),
        ]);

        // update data
        $product->update($validatedData);


        // update data
        // IdnProduct::where('id', $product->id)->update($validatedData);

        // redirect user
        return redirect('/products')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IdnProduct $product)
    {
        IdnProduct::destroy($product->id); //delete product sesuai dengan id

        return redirect('/products')->with('success', 'Product has been deleted'); //redirect with flash message
    }
}

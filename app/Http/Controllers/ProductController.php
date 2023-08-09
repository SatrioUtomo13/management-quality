<?php

namespace App\Http\Controllers;

use App\Models\Berat;
use App\Models\Check;
use App\Models\LotWip;
use App\Models\Product;
use App\Models\Quantity;
use App\Models\IdnProduct;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.product.index', [
            "products" => IdnProduct::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ruleIdnProduct = [
            "user_id" => ['required'],
            "lotwip_id" => ['required'],
            "check_id" => ['required'],
            "berat_id" => ['required'],
            "quantity_id" => ['required'],
            "shift" => ['required'],
            "item" => ['required'],
            "resin" => ['required'],
            "speed" => ['required'],
        ];

        $ruleLotWip = [
            "tanggal" => ['required', 'date'],
            "lot" => ['required'],
            "lot_wip" => ['required',]
        ];

        $ruleCheck = [
            "rc_r" => ['required', 'numeric'],
            "rc_c" => ['required', 'numeric'],
            "rc_l" => ['required', 'numeric'],
            "vc_r" => ['required', 'numeric'],
            "vc_l" => ['required', 'numeric'],
        ];

        $ruleBerat = [
            "berat_aktual" => ['required', 'numeric'],
            "berat_awal" => ['required', 'numeric'],
            "berat_akhir" => ['required', 'numeric'],
            "rsi" => ['nullable'],
        ];

        $ruleQuantity = [
            "qty_transisi" => ['nullable'],
            "qty_lot" => ['nullable'],
            "qty_total" => ['nullable'],
        ];

        $validatedDataIdnProduct = $request->validate($ruleIdnProduct);
        $validatedDataLotWip = $request->validate($ruleLotWip);
        $validatedDataCheck = $request->validate($ruleCheck);
        $validatedDataberat = $request->validate($ruleBerat);
        $validatedDataQuantity = $request->validate($ruleQuantity);


        IdnProduct::create($validatedDataIdnProduct);
        LotWip::create($validatedDataLotWip);
        Check::create($validatedDataCheck);
        Berat::create($validatedDataberat);
        Quantity::create($validatedDataQuantity);

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
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            "product" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // make rules
        $rules = [
            "user_id" => ['required'],
            "tanggal" => ['required', 'date'],
            "shift" => ['required'],
            "lot" => ['required'],
            "item" => ['required'],
            "resin" => ['required'],
            "rc_r" => ['required', 'numeric'],
            "rc_c" => ['required', 'numeric'],
            "rc_l" => ['required', 'numeric'],
            "vc_r" => ['required', 'numeric'],
            "vc_l" => ['required', 'numeric'],
            "speed" => ['required'],
            "berat_aktual" => ['required', 'numeric'],
            "berat_awal" => ['required', 'numeric'],
            "berat_akhir" => ['required', 'numeric'],
            "rsi" => ['nullable'],
            "qty_transisi" => ['nullable'],
            "qty_lot" => ['nullable'],
            "qty_total" => ['nullable'],
        ];

        // check lot wip
        if ($request->lot_wip !== $product->lot_wip) {
            $rules["lot_wip"] = ['required', 'unique:products'];
        }

        // validated data
        $validatedData = $request->validate($rules);

        // update data
        Product::where('id', $product->id)->update($validatedData);

        // redirect user
        return redirect('/products')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id); //delete product sesuai dengan id

        return redirect('/products')->with('success', 'Product has been deleted'); //redirect with flash message
    }
}

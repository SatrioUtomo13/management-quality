<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ParamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.produk.index', [
            "items" => Item::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* validated data */
        $validatedData = $request->validate([
            "item" => ['required', 'unique:items'],
            "type" => ['required'],
            "resin" => ['required'],
            "wip" => ['required']
        ]);

        Item::create($validatedData); // store to Item table

        return redirect('/items')->with('success', 'New Item has been added'); //redirect user

    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('dashboard.produk.edit', [
            "item" => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        // create rules
        $rules = [
            "type" => ['required'],
            "resin" => ['required'],
            "wip" => ['required']
        ];

        // check item
        if ($request->item !== $item->item) {
            $rules["item"] = ['required', 'unique:items'];
        }

        // validate data
        $validatedData = $request->validate($rules);

        // update data
        Item::where('id', $item->id)->update($validatedData);

        // redirect user
        return redirect('/items')->with('success', 'Item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        Item::destroy($item->id);
        return redirect('/items')->with('success', 'Item has been deleted');
    }
}

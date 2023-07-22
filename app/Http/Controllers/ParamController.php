<?php

namespace App\Http\Controllers;

use App\Models\Param;
use App\Http\Requests\StoreParamRequest;
use App\Http\Requests\UpdateParamRequest;

class ParamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.param.index', [
            "params" => Param::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.param.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParamRequest $request)
    {
        /* validated data */
        $validatedData = $request->validate([
            "item" => ['required', 'unique:params'],
            "resin" => ['required'],
            "type" => ['required'],
            "max_rc" => ['required', 'numeric'],
            "min_rc" => ['required', 'numeric'],
            "max_vc" => ['required', 'numeric'],
            "min_vc" => ['required', 'numeric'],
            "wind" => ['required']
        ]);

        Param::create($validatedData); // store to Param table

        return redirect('/params')->with('success', 'New Parameter has been added'); //redirect user
    }

    /**
     * Display the specified resource.
     */
    public function show(Param $param)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Param $param)
    {
        return view('dashboard.param.edit', [
            "param" => $param
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParamRequest $request, Param $param)
    {
        // create rules
        $rules = [
            "resin" => ['required'],
            "type" => ['required'],
            "max_rc" => ['required', 'numeric'],
            "min_rc" => ['required', 'numeric'],
            "max_vc" => ['required', 'numeric'],
            "min_vc" => ['required', 'numeric'],
            "wind" => ['required']
        ];

        // check item
        if ($request->item !== $param->item) {
            $rules["item"] = ['required', 'unique:params'];
        }

        // validate data
        $validatedData = $request->validate($rules);

        // update data
        Param::where('id', $param->id)->update($validatedData);

        // redirect user
        return redirect('/params')->with('success', 'Parameter has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Param $param)
    {
        Param::destroy($param->id);
        return redirect('/params')->with('success', 'Parameter has been deleted');
    }
}

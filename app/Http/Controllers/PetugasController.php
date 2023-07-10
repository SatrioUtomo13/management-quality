<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.petugas.index', [
            "users" => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* 
        validate user data & store data
        */
        $validatedData = $request->validate([
            "name" => ['required', 'max:255'],
            "username" => ['required', 'unique:users'],
            "password" => ['required', 'min:5', 'max:255'],
            "is_admin" => ['required']
        ]);

        $validatedData["password"] = Hash::make($validatedData["password"]); //hashing password

        User::create($validatedData); //store data to users table

        return redirect('/petugas')->with('success', 'New User has been added'); //redirect with flash message
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

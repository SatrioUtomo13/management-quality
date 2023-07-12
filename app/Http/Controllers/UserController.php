<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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

        return redirect('/users')->with('success', 'New User has been added'); //redirect with flash message
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
        return view('dashboard.petugas.edit', [
            "user" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // make rules
        $rules = [
            "name" => ['required', 'max:255'],
            "password" => ['required', 'min:5', 'max:255'],
            "is_admin" => ['required']
        ];

        // check username
        if ($request->username !== $user->username) {
            $rules["username"] = ['required', 'unique:users'];
        }

        // validated data
        $validatedData = $request->validate($rules);

        $validatedData["password"] = Hash::make($validatedData["password"]); //hashing password

        // update data
        User::where('id', $user->id)->update($validatedData);

        // redirect user
        return redirect('/users')->with('success', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/users')->with('success', 'User has been deleted');
    }
}

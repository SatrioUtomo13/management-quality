<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index()
    {
        return view('dashboard.print.printHasil.index');
    }

    public function printLabel()
    {
        return view('dashboard.print.printLabel.index');
    }
}

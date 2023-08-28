<?php

use App\Models\IdnProduct;
use App\Charts\HasilProduksiChart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* 
route for login system
*/
Route::get('/login', [LoginController::class, 'index'])->name('login'); //view form login
Route::post('/login', [LoginController::class, 'authenticate']); // when user klik login button

/* 
route for logout system
*/
Route::post('/logout', [LoginController::class, 'logout']);

/* 
route for dashboard system
*/
Route::get('/dashboard', function (HasilProduksiChart $hasilProduksiChart) {
    return view('dashboard.index', [
        "hasilProduksiChart" => $hasilProduksiChart->build()
    ]);
})->middleware('auth');

/* 
route for tambah pertugas
*/
Route::resource('/users', UserController::class);

/* 
route for standar produk
*/
Route::resource('/params', ParamController::class);

/* 
route for input data
*/
Route::resource('/products', ProductController::class);

/* 
route for print
*/
Route::get('/printHasil', [PrintController::class, 'index']);
Route::get('/printLabel', [PrintController::class, 'printLabel']);

/* 
route for reports
*/
Route::get('/reports', [ReportController::class, 'index']);
Route::get('/qualityReport', [ReportController::class, 'qualityReport']);

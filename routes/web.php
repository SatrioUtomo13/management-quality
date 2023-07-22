<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;

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
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
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

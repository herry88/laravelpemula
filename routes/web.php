<?php

use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

//rute pertama belajar laravel
Route::get('belajar', function () {
    return '<h1>Belajar Laravel</h1>';
});

Route::get('baju/{merk}/{harga}', function($merk, $harga){
    return 'baju-olahraga/'.$merk .'/'.$harga;
});

//rute controller
Route::get('products', [ProductControler::class, 'index']);
Route::get('data-diri',[DataDiriController::class,'index'])->name('datadiri.index');
Route::post('data-diri',[DataDiriController::class,'store'])->name('datadiri.store');
Route::get('qrcode/{id}',[DataDiriController::class,'generate'])->name('generate');

//rute category
Route::get('category', [CategoryController::class,'index'])->name('category.index');
Route::post('categorypost',[CategoryController::class,'store'])->name('category.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

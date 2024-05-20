<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::get('list-produk', [ProdukController::class, 'listProduk']);
Route::get('produk/edit/{id_produk}', [ProdukController::class, 'edit'])->name('edit');
Route::get('produk/create', [ProdukController::class, 'create'])->name('edit');
Route::post('produk/update', [ProdukController::class, 'storeUpdate']);
Route::delete('produk/delete/{id_produk}', [ProdukController::class, 'delete']);

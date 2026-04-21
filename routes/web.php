<?php



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
use App\Http\Controllers\HaloController;
Route::get('/halo', [HaloController::class, 'index']);

use App\Http\Controllers\ProdukController;
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create',[ProdukController::class, 'create']);
Route::post('/produk/store',[ProdukController::class, 'store']);
Route::delete('/produk/{id}',[ProdukController::class, 'destroy']);
Route::get('/produk/{id}/edit',[ProdukController::class,'edit']);
Route::put('/produk/{id}',[ProdukController::class, 'update']);
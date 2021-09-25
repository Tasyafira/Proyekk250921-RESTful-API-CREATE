<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Detail_TransaksoController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/pelanggan', 'PelangganController@store');
Route::post('/produk', 'ProdukController@store');
Route::post('/petugas', 'PetugasController@store');
Route::post('/transaksi', 'TransaksiController@store');
Route::post('/detail_transaksi', 'Detail_TransaksiController@store');
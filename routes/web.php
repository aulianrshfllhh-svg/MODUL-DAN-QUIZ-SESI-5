<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ikmi', [InfoController::class, 'ikmi']);
Route::get('/dosen', [InfoController::class, 'dosen']);
Route::get('/mahasiswa/{Aulia}', [InfoController::class, 'detailmahasiswa']);
Route::resource('produk', ProdukController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('koleksi', BukuController::class);
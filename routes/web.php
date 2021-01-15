<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembayaranController;



Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan', [PesananController::class, 'store']);
Route::delete('/{pesanan}', [PesananController::class, 'destroy']);
Route::get('/{pesanan}/edit', [PesananController::class, 'edit']);
Route::patch('/pesanan/{pesanan}', [PesananController::class, 'update']);


Route::get('/pembayaran', [PembayaranController::class, 'index']);

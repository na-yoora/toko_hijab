<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [PagesController::class, 'home']);
 //   return view('index');


Route::view('/', 'index');
Route::view('/pesanan', 'pesanan');
Route::view('/produk', 'produk');
Route::view('/about', 'about');
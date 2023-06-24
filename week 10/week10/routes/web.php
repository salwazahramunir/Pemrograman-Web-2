<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
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

// Bikin routing ke dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Buat Routing Produk
Route::get('/produk', [ProdukController::class, 'index']);


// Buat Routing Frontend
Route::get('/home', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);

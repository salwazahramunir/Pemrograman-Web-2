<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategory;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/products', [ProdukController::class, 'index'])->name('products');
Route::get('/product-categories', [ProductCategory::class, 'index'])->name('product-categories');

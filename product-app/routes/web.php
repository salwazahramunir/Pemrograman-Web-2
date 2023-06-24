<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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

Route::group(
    ['middleware' => ['auth']],
    function () {
        // Bikin routing ke dashboard
        Route::get('/dashboard', [DashboardController::class, 'index']);

        // Buat Routing Produk
        Route::get('/products', [ProductController::class, 'index']);
        Route::get('/products/create', [ProductController::class, 'create']);
        Route::post('/products/store', [ProductController::class, 'store']);
        Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
        Route::put('/products/update/{id}', [ProductController::class, 'update']);
        Route::get('/products/delete/{id}', [ProductController::class, 'destroy']);
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    }
);

Auth::routes();

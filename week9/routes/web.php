<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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

// Route form
Route::get('/form', [FormController::class, 'index']);
// Route hasil
Route::post('/hasil', [FormController::class, 'hasil']);

// Route form skill
Route::get('/form-skills', [SkillController::class, 'index']);
// Route hasil skill
Route::post('/hasil-skills', [SkillController::class, 'hasil']);

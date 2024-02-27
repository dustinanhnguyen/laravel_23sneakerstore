<?php

use App\Http\Controllers\ManufacturerController;
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

Route::get('/manufacturer', [ManufacturerController::class, 'index']);
Route::get('/manufacturer/create', [ManufacturerController::class, 'create'])->name('create');
Route::post('/manufacturer/create', [ManufacturerController::class, 'store'])->name('store');

<?php

use App\Http\Controllers\ManufacturerController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'manufacturers', 'as'=>'manufacturer.'], function() {
    Route::get('/', [ManufacturerController::class, 'index'])->name('index');
    Route::get('/create', [ManufacturerController::class, 'create'])->name('create');
    Route::post('/create', [ManufacturerController::class, 'store'])->name('store');
    Route::get('/edit/{manufacturer}', [ManufacturerController::class, 'edit'])->name('edit');
    Route::put('/edit/{manufacturer}', [ManufacturerController::class, 'update'])->name('update');
    Route::delete('/destroy/{manufacturer}', [ManufacturerController::class, 'destroy'])->name('destroy');
});
<?php

use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cotizacion', [QuotationController::class, 'index']);
Route::post('/cotizacion/buscar', [QuotationController::class, 'search'])->name('cotizacion.buscar');

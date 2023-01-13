<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/criar', [HomeController::class, 'criar'])->name('criar');
Route::post('/criar', [HomeController::class, 'adcionaJogo'])->name('adcionaJogo');



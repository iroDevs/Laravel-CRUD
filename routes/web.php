<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'criar'])->name('criar');
Route::post('/home', [HomeController::class, 'adcionaJogo'])->name('adcionaJogo');
Route::delete('/home/{id}', [HomeController::class, 'deletaJogo'])->name('deletaJogo');
Route::put('/home/{id}', [HomeController::class, 'editaJogo'])->name('editaJogo');



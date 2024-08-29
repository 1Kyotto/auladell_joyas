<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarritosController;
use App\Http\Controllers\AnillosController;

Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::get('/carrito',[CarritosController::class, 'index'])->name('carrito.index');

Route::get('/joyas/anillos',[AnillosController::class, 'index'])->name('anillos.index');


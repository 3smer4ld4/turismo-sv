<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ContactoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/destinos', [DestinoController::class, 'index'])
    ->name('destinos.index');

Route::get('/destinos/{id}', [DestinoController::class, 'show'])
    ->name('destinos.show');

Route::get('/contacto', [ContactoController::class, 'create'])
    ->name('contacto.create');

 Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');
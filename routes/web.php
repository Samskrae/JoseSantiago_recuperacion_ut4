<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ticketController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // get y post de productos para poder verlos y modificarlos
    Route::get('/tickets', [ticketController::class, 'index'])->name('productos.index');
    Route::post('/tickets', [ticketController::class, 'store'])->name('productos.store');
});

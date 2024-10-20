<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Redirige la página principal al login
Route::get('/', function () {
    return redirect('/login');
});

// Rutas de autenticación para el login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Rutas de autenticación para el registro
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

// Ruta para cerrar sesión
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

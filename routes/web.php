<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Redirige la página principal al login
Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para el dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Rutas de autenticación para el login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Rutas de autenticación para el registro
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Ruta para cerrar sesión
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Ruta para la vista de transacciones
Route::get('/transactions', function () {
    return view('transactions');
})->name('transactions');
Route::get('/transactions/deposit', function () {
    return view('transactions.deposit');
})->name('transactions.deposit');

Route::get('/transactions/withdraw', function () {
    return view('transactions.withdraw');
})->name('transactions.withdraw');

Route::get('/transactions/transfer', function () {
    return view('transactions.transfer');
})->name('transactions.transfer');

Route::get('/transactions/history', function () {
    return view('transactions.history');
})->name('transactions.history');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/consultar-saldo', function () {
    return view('consultar_saldo');
})->name('consultar_saldo');
#vista de cuentas
Route::get('/cuentas', function () {
    return view('cuentas');
})->name('cuentas');
#menu de vistas principal 
Route::get('/prestamos', function () {
    return view('prestamos');
})->name('prestamos');

Route::get('/tarjetas-credito', function () {
    return view('tarjetas_credito');
})->name('tarjetas_credito');

Route::get('/pago-servicios', function () {
    return view('pago_servicios');
})->name('pago_servicios');

Route::get('/transferencias', function () {
    return view('transferencias');
})->name('transferencias');

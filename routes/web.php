<?php

use App\Http\Controllers\AuthController;
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

/*Route::resources([
    'clientes' => ClienteController::class,
    'pedidos'  => PedidoController::class,
]);*/

Route::get('/', [AuthController::class, 'index'])->name('login.index');
Route::post('/verify', [AuthController::class, 'login'])->name('verify-user');
Route::get('/dashboard', [AuthController::class, 'logados'])->name('login.dashboard')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout');
Route::get('/vistaRegistroForm', [AuthController::class, 'vistaRegistroForm'])->name('registroForm.vista');
Route::post('/registrarUsuario', [AuthController::class, 'registrarUsuario'])->name('usuario.crear');

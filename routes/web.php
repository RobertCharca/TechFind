<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Usuario
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index']);

Route::get('/usuario/agregarUsuario', [App\Http\Controllers\UsuarioController::class, 'agregarUsuario']);
Route::post('/usuario/insertarUsuario', [App\Http\Controllers\UsuarioController::class, 'insertarUsuario']);

Route::get('/usuario/{id}/actualizarUsuario', [App\Http\Controllers\UsuarioController::class, 'actualizarUsuario']);
Route::post('/usuario/updateUsuario/{id}', [App\Http\Controllers\UsuarioController::class, 'updateUsuario']);

Route::get('/usuario/{id}/eliminarUsuario', [App\Http\Controllers\UsuarioController::class, 'eliminarUsuario']);

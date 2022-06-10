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
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'create']);
Route::post('/productos/insert', [App\Http\Controllers\ProductoController::class, 'insert']);
Route::get('/productos/{id}/edit', [App\Http\Controllers\ProductoController::class, 'edit']);
Route::post('/productos/update/{id}', [App\Http\Controllers\ProductoController::class, 'update']);
Route::get('/productos/{id}/delete', [App\Http\Controllers\ProductoController::class, 'delete']);

Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('categorias/create', [App\Http\Controllers\CategoriaController::class, 'create']);
Route::post('categorias/insert', [App\Http\Controllers\CategoriaController::class, 'insert']);
Route::get('/categorias/{id}/edit', [App\Http\Controllers\CategoriaController::class, 'edit']);
Route::post('/categorias/update/{id}', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::get('/categorias/{id}/delete', [App\Http\Controllers\CategoriaController::class, 'delete']);

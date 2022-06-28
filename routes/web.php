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
    return view('app');
});

Auth::routes();
Route::post('/loginvue', [App\Http\Controllers\LoginController::class, 'login']);
//Productos
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'create']);
Route::post('/productos/insert', [App\Http\Controllers\ProductoController::class, 'insert']);
Route::get('/productos/{id}/edit', [App\Http\Controllers\ProductoController::class, 'edit']);
Route::post('/productos/update/{id}', [App\Http\Controllers\ProductoController::class, 'update']);
Route::get('/productos/{id}/delete', [App\Http\Controllers\ProductoController::class, 'delete']);
Route::get('/productos/export/', [App\Http\Controllers\ProductoController::class, 'export']);
Route::get('/productos/exportPDF/', [App\Http\Controllers\ProductoController::class, 'exportPDF']);

//Categorias
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('categorias/create', [App\Http\Controllers\CategoriaController::class, 'create']);
Route::post('categorias/insert', [App\Http\Controllers\CategoriaController::class, 'insert']);
Route::get('/categorias/{id}/edit', [App\Http\Controllers\CategoriaController::class, 'edit']);
Route::post('/categorias/update/{id}', [App\Http\Controllers\CategoriaController::class, 'update']);
Route::get('/categorias/{id}/delete', [App\Http\Controllers\CategoriaController::class, 'delete']);
Route::get('/categorias/prueba', [App\Http\Controllers\CategoriaController::class, 'prueba']);

//Usuario
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuario/agregarUsuario', [App\Http\Controllers\UsuarioController::class, 'agregarUsuario']);
Route::post('/usuario/insertarUsuario', [App\Http\Controllers\UsuarioController::class, 'insertarUsuario']);
Route::get('/usuario/{id}/actualizarUsuario', [App\Http\Controllers\UsuarioController::class, 'actualizarUsuario']);
Route::post('/usuario/updateUsuario/{id}', [App\Http\Controllers\UsuarioController::class, 'updateUsuario']);
Route::get('/usuario/{id}/eliminarUsuario', [App\Http\Controllers\UsuarioController::class, 'eliminarUsuario']);

//Datos del usuario exportado en pdf y excel
Route::get('usuario/export/', [App\Http\Controllers\UsuarioController::class, 'export']);
Route::get('usuario/pdf/', [App\Http\Controllers\UsuarioController::class, 'createPDF']);

Route::get('/negocios', [App\Http\Controllers\NegocioController::class, 'index']);
Route::get('/negocios/create', [App\Http\Controllers\NegocioController::class, 'create']);
Route::post('/negocios/insert', [App\Http\Controllers\NegocioController::class, 'insert']);
Route::get('/negocios/{id}/edit', [App\Http\Controllers\NegocioController::class, 'edit']);
Route::post('/negocios/update/{id}', [App\Http\Controllers\NegocioController::class, 'update']);
Route::get('/negocios/{id}/delete', [App\Http\Controllers\NegocioController::class, 'delete']);
Route::get('/negocios/export/', [App\Http\Controllers\NegocioController::class, 'export']);
Route::get('/negocios/exportPDF/', [App\Http\Controllers\NegocioController::class, 'exportPDF']);
Route::get('/negocios/vue', [App\Http\Controllers\NegocioController::class, 'negvue']);

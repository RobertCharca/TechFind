<?php

use Illuminate\Support\Facades\Auth;
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
Route::post('/loginvue', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/registrovue', [App\Http\Controllers\LoginController::class, 'registro']);
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

Route::get('/categories', [App\Http\Controllers\CategoriaController::class, 'allcategories']);

//Usuario
Route::get('/usuario', [App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuario/agregarUsuario', [App\Http\Controllers\UsuarioController::class, 'agregarUsuario']);
Route::post('/usuario/insertarUsuario', [App\Http\Controllers\UsuarioController::class, 'insertarUsuario']);
Route::get('/usuario/{id}/actualizarUsuario', [App\Http\Controllers\UsuarioController::class, 'actualizarUsuario']);
Route::post('/usuario/updateUsuario/{id}', [App\Http\Controllers\UsuarioController::class, 'updateUsuario']);
Route::get('/usuario/{id}/eliminarUsuario', [App\Http\Controllers\UsuarioController::class, 'eliminarUsuario']);
Route::get('/usuario/vue/comentario_negocio/{id}', [App\Http\Controllers\UsuarioController::class, 'comments_business']);
Route::get('/usuario/vue/comentario_producto/{id}', [App\Http\Controllers\UsuarioController::class, 'comments_products']);
Route::get('/usuario/vue/one/{id}', [App\Http\Controllers\UsuarioController::class, 'getonebsn']);
Route::post('/usuario/vue/edit/{id}', [App\Http\Controllers\UsuarioController::class, 'editar']);

//Datos del usuario exportado en pdf y excel
Route::get('usuario/export/', [App\Http\Controllers\UsuarioController::class, 'export']);
Route::get('usuario/pdf/', [App\Http\Controllers\UsuarioController::class, 'createPDF']);
Route::get('/userr', [App\Http\Controllers\UsuarioController::class, 'allUsers']);

Route::get('/negocios', [App\Http\Controllers\NegocioController::class, 'index']);
Route::get('/negocios/create', [App\Http\Controllers\NegocioController::class, 'create']);
Route::post('/negocios/insert', [App\Http\Controllers\NegocioController::class, 'insert']);
Route::get('/negocios/{id}/edit', [App\Http\Controllers\NegocioController::class, 'edit']);
Route::post('/negocios/update/{id}', [App\Http\Controllers\NegocioController::class, 'update']);
Route::get('/negocios/{id}/delete', [App\Http\Controllers\NegocioController::class, 'delete']);
Route::get('/negocios/export/', [App\Http\Controllers\NegocioController::class, 'export']);
Route::get('/negocios/exportPDF/', [App\Http\Controllers\NegocioController::class, 'exportPDF']);


Route::get('/CommentsBsn', [App\Http\Controllers\NegocioController::class, 'api_negocios']);
Route::get('/mybusiness/{id}', [App\Http\Controllers\NegocioController::class, 'from_user']);
Route::get('/mybusiness/one/{id}', [App\Http\Controllers\NegocioController::class, 'getonebsn']);
Route::post('/mybusiness/edit/{id}', [App\Http\Controllers\NegocioController::class, 'editar']);
Route::post('/business', [App\Http\Controllers\NegocioController::class, 'añadir']);
Route::delete('/mybusiness/delete/{id}', [App\Http\Controllers\NegocioController::class, 'destroy']);

Route::get('/business/comments/{id}', [App\Http\Controllers\NegocioController::class, 'pro_neg']);
Route::post('/bsncomments', [App\Http\Controllers\NegocioController::class, 'post_com']);


Route::get('/products/{id}', [App\Http\Controllers\ProductoController::class, 'pro_from_bsn']);
Route::get('/products/one/{id}', [App\Http\Controllers\ProductoController::class, 'one_pro']);
Route::post('/product', [App\Http\Controllers\ProductoController::class, 'agregar']);

Route::get('/products/comments/{id}', [App\Http\Controllers\ProductoController::class, 'pro_com']);
Route::get('/products/one/{id}', [App\Http\Controllers\ProductoController::class, 'one_pro']);
Route::post('/procomments', [App\Http\Controllers\ProductoController::class, 'post_com']);

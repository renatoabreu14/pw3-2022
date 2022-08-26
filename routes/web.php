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

Route::get('/hello-world', function () {
    return 'Hello World!';
});

Route::get('/hello-world/{nome}', [\App\Http\Controllers\TesteController::class, 'mostrarNome']);
Route::get('/soma/{n1}/{n2}', [\App\Http\Controllers\TesteController::class, 'soma']);

Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);

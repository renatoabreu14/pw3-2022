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

//VITRINE
Route::get('vitrine', [\App\Http\Controllers\VitrineController::class, 'index'])->name('vitrine.index');
Route::get('vitrine/categoria/{id}', [\App\Http\Controllers\VitrineController::class, 'listarProdutosPorCategoria'])->name('vitrine.categoria');
Route::get('vitrine/subcategoria/{id}', [\App\Http\Controllers\VitrineController::class, 'listarProdutosPorSubCategoria'])->name('vitrine.subcategoria');
Route::get('vitrine/produto/{id}', [\App\Http\Controllers\VitrineController::class, 'mostrarProduto'])->name('vitrine.detalhes');

Route::get('vitrine/shop', function (){
    return view('vitrine.shop');
});
Route::get('vitrine/single', function (){
    return view('vitrine.single');
});
//FIM VITRINE

//CARRINHO DE COMPRAS
Route::get('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'index'])->name('vitrine.carrinho');
Route::post('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'adicionarItemCarrinho'])->name('vitrine.addcarrinho');
Route::delete('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'removerItemCarrinho'])->name('vitrine.delcarrinho');
Route::put('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'alterarItemCarrinho'])->name('vitrine.updcarrinho');
Route::get('vitrine/carrinho/clear', [\App\Http\Controllers\CarrinhoComprasController::class, 'limparCarrinho'])->name('vitrine.clearcarrinho');
//FIM CARRINHO DE COMPRAS


Route::resource('categorias', \App\Http\Controllers\CategoriaController::class)->middleware(['auth', 'verified']);
Route::resource('subcategorias', \App\Http\Controllers\SubcategoriaController::class)->middleware(['auth', 'verified']);
Route::resource('produtos', \App\Http\Controllers\ProdutoController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

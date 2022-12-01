<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class VitrineController extends Controller
{
    //
    public function index(){
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        return view('vitrine.main', compact('categorias', 'subcategorias'));
    }

    public function listarProdutosPorCategoria($id){
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $verCategoria = Categoria::findOrFail($id);
        return view('vitrine.categorias.index', compact('categorias', 'subcategorias', 'verCategoria'));
    }

    public function listarProdutosPorSubCategoria($id){
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $verSubCategoria = Subcategoria::findOrFail($id);
        return view('vitrine.subcategorias.index', compact('categorias', 'subcategorias', 'verSubCategoria'));
    }

    public function mostrarProduto($id){
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $produto = Produto::findOrFail($id);
        return view('vitrine.produtos.index', compact('categorias', 'subcategorias', 'produto'));
    }
}

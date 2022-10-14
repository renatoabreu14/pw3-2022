<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::paginate(10);
        return view('admin.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategorias = Subcategoria::all();
        return view('admin.produtos.create', compact('subcategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //https://blog.especializati.com.br/upload-de-arquivos-no-laravel-com-request/

        $nameFile = null;
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $name = uniqid(date('HisYmd'));
            $extension = $request->imagem->extension();
            $nameFile = $name . "." .$extension;
            $upload = $request->file('imagem')->storeAs('public/produtos/', $nameFile);
            if (!$upload){
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
            }else{
                $produto = Produto::create($request->all());
                $produto->imagem = $nameFile;
                $produto->save();
                return redirect()->route('produtos.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('admin.produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $subcategorias = Subcategoria::all();
        return view('admin.produtos.edit', compact('subcategorias', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $params = $request->all();
        $produto->update($params);
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}

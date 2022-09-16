<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategorias = Subcategoria::all();
        return view('admin.subcategorias.index', compact('subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.subcategorias.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subcategoria::create($request->all());
        return redirect()->route('subcategorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategoria $subcategoria)
    {
        return view('admin.subcategorias.show', compact('subcategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategoria $subcategoria)
    {
        $categorias = Categoria::all();
        return view('admin.subcategorias.edit', compact('subcategoria', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategoria  $subcategoria
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Subcategoria $subcategoria)
    {
        $params = $request->all();
        $subcategoria->update($params);
        return redirect()->route('subcategorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategoria $subcategoria)
    {
        $subcategoria->delete();
        return redirect()->route('subcategorias.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function mostrarNome($nome){
        return "Hello ".$nome;
    }

    public function soma($n1, $n2){
        $soma = $n1 + $n2;
        return view('soma', compact('soma'));
    }
}

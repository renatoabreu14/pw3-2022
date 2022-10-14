@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <img id="produto-imagem" src="{{\Illuminate\Support\Facades\Storage::url('produtos/'.$produto->imagem)}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Nome:</b></div>
            <div class="col col-11">{{$produto->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Estoque:</b></div>
            <div class="col col-11">{{$produto->estoque}}</div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Valor:</b></div>
            <div class="col col-11">{{$produto->valor}}</div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Subcategoria:</b></div>
            <div class="col col-11">{{$produto->subcategoria->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Descricão:</b></div>
            <div class="col col-11">{{$produto->descricao}}</div>
        </div>
        <div class="row">
            <div class="col col-12 pt-2">
                <a href="{{route('produtos.index')}}" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
@endsection

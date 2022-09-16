@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col col-1"><b>Nome:</b></div>
            <div class="col col-11">{{$subcategoria->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-1"><b>Categoria:</b></div>
            <div class="col col-11">{{$subcategoria->categoria->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-12 pt-2">
                <a href="{{route('subcategorias.index')}}" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
@endsection

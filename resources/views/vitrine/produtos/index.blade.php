@extends('vitrine.single')

@section('category')
    <a href="{{route('vitrine.categoria', $produto->subcategoria->categoria->id)}}">{{$produto->subcategoria->categoria->nome}}</a>
@endsection

@section('subcategory')
    <a href="{{route('vitrine.subcategoria', $produto->subcategoria->id)}}">{{$produto->subcategoria->nome}}</a>
@endsection

@section('product-name')
    {{$produto->nome}}
@endsection

@section('product-image')
    {{\Illuminate\Support\Facades\Storage::url('produtos/'.$produto->imagem)}}
@endsection

@section('product-value')
    {{$produto->valor}}
@endsection

@section('product-description')
    {{$produto->descricao}}
@endsection

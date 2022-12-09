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

@section('add-shopping-cart')
    <form action="{{route('vitrine.addcarrinho')}}" method="post" class="cart">
        @csrf
        <div class="quantity">
            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
        </div>
        <input type="hidden" name="id" value="{{$produto->id}}">
        <input type="hidden" name="name" value="{{$produto->nome}}">
        <input type="hidden" name="price" value="{{$produto->valor}}">
        <input type="hidden" name="image" value="{{$produto->imagem}}">
        <button class="add_to_cart_button" type="submit">Adicionar</button>
    </form>
@endsection

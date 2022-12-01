@extends('vitrine.shop')

@section('category-name')
    {{$verSubCategoria->nome}}
@endsection

@section('products')
    @foreach($verSubCategoria->produtos as $produto)
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <img src="{{\Illuminate\Support\Facades\Storage::url('produtos/'.$produto->imagem)}}" alt="">
                </div>
                <h2><a href="">{{$produto->nome}}</a></h2>
                <div class="product-carousel-price">
                    <ins>{{$produto->valor}}</ins>
                </div>

                <div class="product-option-shop">
                    <a class="add_to_cart_button" rel="nofollow" href="{{route('vitrine.detalhes', $produto->id)}}">Detalhes</a>
                </div>
            </div>
        </div>
    @endforeach


@endsection

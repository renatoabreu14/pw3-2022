@extends('vitrine.shop')

@section('category-name')
    {{$subcategoria->nome}}
@endsection

@section('products')
    <div class="col-md-3 col-sm-6">
        <div class="single-shop-product">
            <div class="product-upper">
                <img src="img/product-4.jpg" alt="">
            </div>
            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
            <div class="product-carousel-price">
                <ins>$899.00</ins> <del>$999.00</del>
            </div>

            <div class="product-option-shop">
                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
            </div>
        </div>
    </div>
@endsection

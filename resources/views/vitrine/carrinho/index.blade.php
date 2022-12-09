@extends('vitrine.cart')

@section('cart-itens')
    @if(count($itens) == 0)
        <div id="empty-cart" class="alert alert-warning" role="alert">
            <p>Seu carrinho de compras está vazio!</p>
            <p>Aproveite nossas promocões.</p>
            <a href="{{route('vitrine.index')}}" class="btn btn-warning">Voltar às compras</a>
        </div>
    @else
        <table class="table table-hover">
            <thead class="table-head-cart">
            <tr>
                <th>Imagem</th>
                <th class="column-name-cart">Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>-</th>
            </tr>
            </thead>
            <tbody class="table-body-cart">
            @foreach($itens as $item)
                <tr>
                    <td><img src="{{\Illuminate\Support\Facades\Storage::url('produtos/'.$item->attributes->image)}}" alt="" class="item-image-cart"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                        <form action="{{route('vitrine.updcarrinho')}}" method="post">
                        <td><input type="number" name="quantity" id="" value="{{$item->quantity}}" class="item-quantity-cart"></td>
                        <td>

                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button class="add_to_cart_button" type="submit">Alterar</button>
                        </form>
                        <form action="{{route('vitrine.delcarrinho')}}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button class="add_to_cart_button" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot class="table-foot-cart">
            <tr>
                <td colspan="5">TOTAL: {{\Cart::getTotal()}}</td>
            </tr>
            </tfoot>
        </table>
        <div class="cart-navigate">
            <div class="col-md-4 text-center">
                <a href="{{route('vitrine.index')}}" class="btn btn-primary">Continuar comprando</a>
            </div>
            <div class="col-md-4 text-center">
                <a href="{{route('vitrine.clearcarrinho')}}" class="btn btn-danger">Limpar carrinho</a>
            </div>
             <div class="col-md-4 text-center">
                <a href="{{route('vitrine.index')}}" class="btn btn-success">Finalizar compra</a>
            </div>
        </div>
    @endif
@endsection

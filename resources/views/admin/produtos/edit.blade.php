@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('produtos.update', $produto)}}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required value="{{$produto->nome}}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col col-6">
                            <label for="estoque">Estoque:</label>
                            <input type="number" name="estoque" id="estoque" class="form-control" required value="{{$produto->estoque}}">
                        </div>
                        <div class="col col-6">
                            <label for="valor">Valor:</label>
                            <input type="number" name="valor" id="valor" class="form-control" required value="{{$produto->valor}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subcategoria">Subcategoria:</label>
                    <select name="subcategoria_id" id="subcategoria" class="form-control" required>
                        <option value="">Selecione uma categoria</option>
                        @foreach($subcategorias as $subcategoria)
                            @if ($subcategoria->id == $produto->subcategoria->id)
                                <option value="{{$subcategoria->id}}" selected>{{$subcategoria->nome}}</option>
                            @else
                                <option value="{{$subcategoria->id}}">{{$subcategoria->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="descricao">Descricão:</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control">{{$produto->descricao}}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Gravar</button>
                    <a class="btn btn-danger" href="{{route('produtos.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

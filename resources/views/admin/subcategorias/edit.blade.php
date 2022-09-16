@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('subcategorias.update', $subcategoria)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{$subcategoria->nome}}" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select name="categoria_id" id="categoria" class="form-control" required>
                        <option value="">Selecione uma categoria</option>
                        @foreach($categorias as $categoria)
                            @if($categoria->id == $subcategoria->categoria->id)
                                <option value="{{$categoria->id}}" selected>{{$categoria->nome}}</option>
                            @else
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Gravar</button>
                    <a class="btn btn-danger" href="{{route('subcategorias.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

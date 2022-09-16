@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <a href="{{route('subcategorias.create')}}" class="btn btn-success">Novo</a>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>-</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subcategorias as $subcategoria)
                    <tr>
                        <td class="table-column-70">{{$subcategoria->nome}}</td>
                        <td>
                            <a href="{{route('subcategorias.show', $subcategoria)}}" class="btn btn-outline-dark">Ver</a>
                            <a href="{{route('subcategorias.edit', $subcategoria)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('subcategorias.destroy', $subcategoria)}}" method="post" class="form-delete">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

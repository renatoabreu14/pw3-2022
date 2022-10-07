@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <a href="{{route('produtos.create')}}" class="btn btn-success">Novo</a>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Subcategoria</th>
                    <th>Estoque</th>
                    <th>Valor</th>
                    <th>-</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td class="table-column-50">{{$produto->nome}}</td>
                        <td>{{$produto->subcategoria->nome}}</td>
                        <td>{{$produto->estoque}}</td>
                        <td>{{$produto->valor}}</td>
                        <td>
                            <a href="{{route('produtos.show', $produto)}}" class="btn btn-outline-dark">Ver</a>
                            <a href="{{route('produtos.edit', $produto)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('produtos.destroy', $produto)}}" method="post" class="form-delete">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">{{$produtos->links()}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

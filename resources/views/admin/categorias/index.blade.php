@extends('admin.main')

@section('conteudo')


    <div class="container">
        <div class="row">
            <a href="{{route('categorias.create')}}" class="btn btn-success">Novo</a>
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
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->nome}}</td>
                        <td>
                            <form action="{{route('categorias.destroy', $categoria)}}" method="post">
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

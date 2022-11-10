@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('categorias.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                @error('nome')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Gravar</button>
                    <a class="btn btn-danger" href="{{route('categorias.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

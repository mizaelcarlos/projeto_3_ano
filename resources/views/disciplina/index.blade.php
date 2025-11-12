@extends('layouts.app')
@section('title', 'Listar Disciplinas')
@section('content')
    <h1>Lista de Disciplinas
    </h1>
    {{-- @auth
     <a class="btn btn-primary" href="{{ route('professor.create') }}">Cadastrar</a>
    @endauth --}}
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Código</th>
            <th>Carga Horária</th>
        </thead>
        <tbody>
            @foreach ($disciplina as $disciplina)
            <tr class="table-warning">
                <td>{{ $disciplina->id}}</td>
                <td>{{ $disciplina->nome}}</td>
                <td>{{ $disciplina->codigo}}</td>
                <td>{{ $disciplina->carga_horaria}}</td> 
                @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('disciplina.edit',$disciplina->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('disciplina.show',$disciplina->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('disciplina.destroy',$disciplina->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                </td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

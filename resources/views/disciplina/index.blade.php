@extends('layouts.app')
@section('title', 'Listar disciplina')
@section('content')
    <h1>Lista da disciplina</h1>
    @auth
        <a class="btn btn-primary mb-3" href="{{ route('diretoria.create') }}">Cadastrar</a>
    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Carga horária</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
            <tr class="table-warning">
                <td>{{ $disc->id }}</td>
                <td>{{ $disc->nome }}</td>
                <td>{{ $disc->codigo }}</td>
                <td>{{ $disc->carga_horaria }}h</td>
                @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('diretoria.edit',$diretoria->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('diretoria.show',$diretoria->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('diretoria.destroy',$diretoria->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                </td>
                @endauth
                <tr class="table-warning">
                    <td>{{ $disciplina->nome }}</td>
                    <td>{{ $disciplina->codigo }}</td>
                    <td>{{ $disciplina->carga_horaria}}</td>
                    @auth
                        <td>
                            <div class="d-flex">
                                <div class="m-1">
                                    <a class="btn btn-success" href="{{ route('disciplina.edit', $disciplina->id) }}">Editar</a>
                                </div>
                                <div class="m-1">
                                    <a class="btn btn-primary" href="{{ route('disciplina.show', $disciplina->id) }}">Visualizar</a>
                                </div>
                                <div class="m-1">
                                    <form action="{{ route('disciplina.destroy', $disciplina->id) }}" method="post">
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

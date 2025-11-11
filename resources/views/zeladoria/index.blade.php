@extends('layouts.app')
@section('title', 'Lista de zeladoria')
@section('content')
    <h1>Lista de zeladoria
    </h1>
    @auth
     <a class="btn btn-primary" href="{{ route('zeladoria.create') }}">Cadastrar</a>
    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Setor</th>
            <th>Tarefa</th>
            <th>Turno</th>
            @auth
                <th>Opções</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($zeladorias as $zeladoria)
            <tr class="table-warning">
                <td>{{ $zeladoria->nome }}</td>
                <td>{{ $zeladoria->setor }}</td>
                <td>{{ $zeladoria->tarefa }}</td>
                <td>{{ $zeladoria->turno }}</td>
                @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('zeladoria.edit',$zeladoria->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('zeladoria.show',$zeladoria->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('zeladoria.destroy',$zeladoria->id) }}" method="post">
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

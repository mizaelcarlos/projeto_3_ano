@extends('layouts.app')
@section('title', 'Listar coordenadores')
@section('content')
    <h1>Lista de coordenadores</h1>
    <a class="btn btn-primary" href="{{ route('coordenador.create') }}">Cadastrar</a>
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($coordenadores as $coordenador)
            <tr class="table-warning">
                <td>{{ $coordenador->nome }}</td>
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('coordenador.edit',$coordenador->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('coordenador.show',$coordenador->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('coordenador.destroy',$coordenador->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')
@section('title', 'Listar diretoria')
@section('content')
    <h1>Lista da diretoria</h1>
    @auth
        <a class="btn btn-primary mb-3" href="{{ route('diretoria.create') }}">Cadastrar</a>
    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nome</th>
                <th>Gestão</th>
                <th>Data de início</th>
                <th>Data de fim</th>
                @auth
                    <th>Opções</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($diretorias as $diretoria)
                <tr class="table-warning">
                    <td>{{ $diretoria->nome }}</td>
                    <td>{{ $diretoria->gestao }}</td>
                    <td>{{ $diretoria->data_inicio }}</td>
                    <td>{{ $diretoria->data_fim }}</td>
                    @auth
                        <td>
                            <div class="d-flex">
                                <div class="m-1">
                                    <a class="btn btn-success" href="{{ route('diretoria.edit', $diretoria->id) }}">Editar</a>
                                </div>
                                <div class="m-1">
                                    <a class="btn btn-primary" href="{{ route('diretoria.show', $diretoria->id) }}">Visualizar</a>
                                </div>
                                <div class="m-1">
                                    <form action="{{ route('diretoria.destroy', $diretoria->id) }}" method="post">
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

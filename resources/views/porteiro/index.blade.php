@extends('layouts.app')
@section('title', 'Lista de porteiros')
@section('content')
    <h1>Lista de porteiros
    </h1>
    @auth
     <a class="btn btn-primary" href="{{ route('porteiro.create') }}">Cadastrar</a>
    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Turno</th>
            <th>Horário de Entrada</th>
            <th>Horário de Saída</th>
            @auth
                <th>Opções</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($porteiros as $porteiro)
            <tr class="table-warning">
                <td>{{ $porteiro->nome }}</td>
                <td>{{ $porteiro->turno }}</td>
                <td>{{ $porteiro->horario_entrada }}</td>
                <td>{{ $porteiro->horario_saida }}</td>
                @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('porteiro.edit',$porteiro->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('porteiro.show',$porteiro->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('porteiro.destroy',$porteiro->id) }}" method="post">
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
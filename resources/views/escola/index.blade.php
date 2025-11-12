@extends('layouts.app')
@section('title', 'Lista de escola')
@section('content')
    <h1>Lista de escola
    </h1>
    @auth
     <a class="btn btn-primary" href="{{ route('escola.create') }}">Cadastrar</a>
    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Cnpj</th>
            <th>Endereço</th>
            <th>Telefone</th>
            @auth
                <th>Opções</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($escolas as $escola)
            <tr class="table-warning">
                <td>{{ $escola->nome }}</td>
                <td>{{ $escola->cnpj }}</td>
                <td>{{ $escola->endereço }}</td>
                <td>{{ $escola->telefone }}</td>
                @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('escola.edit',$escola->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('escola.show',$escola->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('escola.destroy',$escola->id) }}" method="post">
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

@extends('layouts.app')
@section('title', 'Listar secretarias')
@section('content')
    <h1>Lista de secretarias</h1>
    
    @auth
        <a class="btn btn-primary mb-3" href="{{ route('secretaria.create') }}">Cadastrar</a>
    @endauth

    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                @auth
                    <th>Opções</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($secretarias as $secretaria)
                <tr class="table-info">
                    <td>{{ $secretaria->nome }}</td>
                    <td>{{ $secretaria->cpf }}</td>
                    <td>{{ $secretaria->email }}</td>
                    @auth
                        <td>
                            <div class="d-flex">
                                <div class="m-1">
                                    <a class="btn btn-success" href="{{ route('secretaria.edit', $secretaria->id) }}">Editar</a>
                                </div>
                                <div class="m-1">
                                    <a class="btn btn-primary" href="{{ route('secretaria.show', $secretaria->id) }}">Visualizar</a>
                                </div>
                                <div class="m-1">
                                    <form action="{{ route('secretaria.destroy', $secretaria->id) }}" method="POST">
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

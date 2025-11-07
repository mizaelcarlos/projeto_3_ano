@extends('layouts.app')
@section('title', 'Listar professores')
@section('content')
    <h1>Lista de professores 
    </h1>
    {{-- @auth
     <a class="btn btn-primary" href="{{ route('professor.create') }}">Cadastrar</a>
    @endauth --}}
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Disciplina</th>
            <th>Turno</th>
            @auth
                <th>Opções</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($professores as $professor)
            <tr class="table-warning">
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->email }}</td>
                <td>{{ $professor->telefone }}</td>
                <td>{{ $professor->disciplina }}</td> 
                <td>{{ $professor->turno }}</td> 
                {{-- @auth
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a class="btn btn-success" href="{{ route('professor.edit',$professor->id) }}">Editar</a>
                        </div>
                        <div class="m-1">
                            <a class="btn btn-primary" href="{{ route('professor.show',$professor->id) }}">Visualizar</a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('professor.destroy',$professor->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                </td>
                @endauth --}}
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

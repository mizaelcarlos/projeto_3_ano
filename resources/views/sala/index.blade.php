@extends('layouts.app')
@section('title', 'Listar Salas')
@section('content')
<h1>Lista de Salas
    @auth
    <a class="btn btn-primary" style="margin-left: 735px;" href="{{ route('sala.create') }}">Cadastrar</a>
    @endauth
</h1>
<table class="table table-sm table-bordered table-hover">
    <thead class="thead-light">
        <th>Número da sala</th>
        <th>Número de alunos</th>
        @auth
        <th>Opções</th>
        @endauth
    </thead>
    <tbody>
        @foreach ($salas as $sala)
        <tr class="table-secondary">
            <td>{{ $sala->numero_de_sala }}</td>
            <td>{{ $sala->numero_maximoAlunos }}</td>
            @auth
            <td>
                <div class="d-flex">
                    <div class="m-1">
                        <a href="{{ route('sala.edit',$sala->id) }}">
                            <img src="{{ asset('icons/edit-icon.png') }}" alt="Editar">
                        </a>
                    </div>
                    <div class="m-1">
                        <a href="{{ route('sala.show',$sala->id) }}">
                            <img src="{{ asset('icons/view-icon.png') }}" alt="Visualizar">
                        </a>
                    </div>
                    <div class="m-1">
                        <form action="{{ route('sala.destroy',$sala->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="background: none; border: none;" type="submit">
                                <img src="{{ asset('icons/delete-icon.png') }}" alt="Deletar">
                            </button>
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
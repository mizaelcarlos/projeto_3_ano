@extends('layouts.app')
@section('title', 'Listar alunos')
@section('content')
<h1>Lista de Disciplinas
    @auth
    <a class="btn btn-primary" style="margin-left: 735px;" href="{{ route('disciplina.create') }}">Cadastrar</a>
    @endauth
</h1>
<table class="table table-sm table-bordered table-hover">
    <thead class="thead-light">
        <th>Nome</th>
        <th>Código</th>
        <th>Carga Horária</th>
        @auth
        <th>Opções</th>
        @endauth
    </thead>
    <tbody>
        @foreach ($disciplinas as $disciplina)
        <tr class="table-secondary">
            <td>{{ $disciplina->id }}</td>
            <td>{{ $disciplina->nome }}</td>
            <td>{{ $disciplina->codigo }}</td>
            <td>{{ $disciplina->carga_horaria}}</td>
            @auth
            <td>
                <div class="d-flex">
                    <div class="m-1">
                        <a href="{{ route('disciplina.edit',$disciplina->id) }}">
                            <img src="{{ asset('icons/edit-icon.png') }}" alt="Editar">
                        </a>
                    </div>
                    <div class="m-1">
                        <a href="{{ route('disciplina.show',$disciplina->id) }}">
                            <img src="{{ asset('icons/view-icon.png') }}" alt="Visualizar">
                        </a>
                    </div>
                    <div class="m-1">
                        <form action="{{ route('disciplina.destroy',$disciplina->id) }}" method="post">
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
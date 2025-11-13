@extends('layouts.app')
@section('title', 'Listar alunos')
@section('content')
<h1>Lista de alunos
    @auth
    <a class="btn btn-primary" style="margin-left: 735px;" href="{{ route('aluno.create') }}">Cadastrar</a>
    @endauth
</h1>
<table class="table table-sm table-bordered table-hover">
    <thead class="thead-light">
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de nascimento</th>
        @auth
        <th>Opções</th>
        @endauth
    </thead>
    <tbody>
        @foreach ($alunos as $aluno)
        <tr class="table-secondary">
            <td>{{ $aluno->matricula }}</td>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->email }}</td>
            <td>{{ $aluno->data_nascimento }}</td>
            @auth
            <td>
                <div class="d-flex">
                    <div class="m-1">
                        <a href="{{ route('aluno.edit',$aluno->id) }}">
                            <img src="{{ asset('icons/edit-icon.png') }}" alt="Editar">
                        </a>
                    </div>
                    <div class="m-1">
                        <a href="{{ route('aluno.show',$aluno->id) }}">
                            <img src="{{ asset('icons/view-icon.png') }}" alt="Visualizar">
                        </a>
                    </div>
                    <div class="m-1">
                        <form action="{{ route('aluno.destroy',$aluno->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="background: none; border: none;" type="submit">
                                <img src="{{ asset('icons/delete-icon.png') }}" alt="Deletar">
                            </button>
                        </form>
                    </div>

                    <div class="m-1">
                        <a href="{{ route('aluno.boleto', $aluno->id) }}">
                            <img src="{{ asset('icons/boleto.png') }}" alt="Visualizar">
                        </a>
                    </div>
                </div>
            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
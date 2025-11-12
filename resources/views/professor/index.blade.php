@extends('layouts.app')
@section('title', 'Listar Professores')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Lista de professores</h1>
    <a class="btn btn-primary" href="{{ route('turma.create') }}">Cadastrar</a>
</div>
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
             <th>Disciplina</th>
              <th>Turno</th>
        </thead>
        <tbody>
            @foreach ($professor as $professor)
            <tr class="table-secondary">
                <td>{{ $professor->nome }}</td>
                <td>{{ $turma->email }}</td>
                <td>{{ $turma->telefone }}</td>
                <td>{{ $turma->disciplina }}</td>
                <td>{{ $turma->turno }}</td>
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a href="{{ route('professor.edit',$professor->id) }}">
                                <img src="/icons/edit-icon.png" alt="Editar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <a href="{{ route('professor.show',$professor->id) }}">
                                <img src="/icons/view-icon.png" alt="Visualizar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('professor.destroy', $professor->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta turma?')">
                                @csrf
                                @method('DELETE')
                                    <img src="{{ asset('icons/delete-icon.png') }}" alt="Excluir" width="20" height="20">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


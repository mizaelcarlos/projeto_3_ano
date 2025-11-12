@extends('layouts.app')
@section('title', 'Listar turmas')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Lista de turmas</h1>
    <a class="btn btn-primary" href="{{ route('turma.create') }}">Cadastrar</a>
</div>
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Descricao</th>
            <th>Curso</th>
            <th>Quantidade de alunos</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($turmas as $turma)
            <tr class="table-secondary">
                <td>{{ $turma->descricao }}</td>
                <td>{{ $turma->curso->nome }}</td>
                <td>{{ $turma->alunos_count }}</td>
                <td>
                    <div class="d-flex">
                        <div class="m-1">
                            <a href="{{ route('turma.edit',$turma->id) }}">
                                <img src="/icons/edit-icon.png" alt="Editar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <a href="{{ route('turma.show',$turma->id) }}">
                                <img src="/icons/view-icon.png" alt="Visualizar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('turma.destroy', $turma->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta turma?')">
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

@extends('layouts.app')
@section('title', 'Lista de zeladoria')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Lista de zelador</h1>
    <a class="btn btn-primary" href="{{ route('turma.create') }}">Cadastrar</a>
</div>
    @auth

    @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Setor</th>
            <th>Tarefa</th>
            <th>Turno</th>
            @auth
                <th>Opções</th>
            @endauth
        </thead>
        <tbody>
            @foreach ($zeladorias as $zeladoria)
       <tr class="table-secondary">
                <td>{{ $zeladoria->nome }}</td>
                <td>{{ $zeladoria->setor }}</td>
                <td>{{ $zeladoria->tarefa }}</td>
                <td>{{ $zeladoria->turno }}</td>
                @auth
                <td>
                   <div class="d-flex">
                        <div class="m-1">
                            <a href="{{ route('zeladoria.edit',$zeladoria->id) }}">
                                <img src="/icons/edit-icon.png" alt="Editar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <a href="{{ route('zeladoria.show',$zeladoria->id) }}">
                                <img src="/icons/view-icon.png" alt="Visualizar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('zeladoria.destroy', $zeladoria->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esse zelador?')">
                                @csrf
                                @method('DELETE')
                                    <img src="{{ asset('icons/delete-icon.png') }}" alt="Excluir" width="20" height="20">
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

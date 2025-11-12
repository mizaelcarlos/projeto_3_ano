@extends('layouts.app')

@section('title', 'Recepcionistas')
@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de recepcionistas</h1>

        @auth
            <a href="{{ route('recepcionista.create') }}" class="btn btn-primary mb-3">+ Novo recepcionista</a>
        @endauth

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-sm table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th style="width: 160px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($recepcionistas as $recepcionista)
                    <tr>
                        <td>{{ $recepcionista->id }}</td>
                        <td>{{ $recepcionista->nome }}</td>
                        <td>
                            <a href="{{ route('recepcionista.edit', $recepcionista->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('recepcionista.destroy', $recepcionista->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este recepcionista?')">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">Nenhum recepcionista cadastrado no momento.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

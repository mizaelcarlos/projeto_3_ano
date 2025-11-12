@extends('layouts.app')
@section('title', 'Listar coordenadores')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Lista de coordenadores</h1>
    <a class="btn btn-primary" href="{{ route('coordenador.create') }}">Cadastrar</a>
</div>

<table class="table table-sm table-bordered table-hover">
    <thead class="thead-light">
        <th>Nome</th>
        <th>Seguimento</th>
        <th>Opções</th>
    </thead>
    <tbody>
        @foreach ($coordenadores as $coordenador)
        <tr class="table-warning">
            <td>{{ $coordenador->nome }}</td>
            <td>{{ $coordenador->seguimento }}</td>
            <td>
                <div class="d-flex">
                    <div class="m-1">
                        <a href="{{ route('coordenador.edit',$coordenador->id) }}">
                            <img src="{{ asset('icons/edit-icon.png') }}" alt="Editar">
                        </a>
                    </div>
                    <div class="m-1">
                        <a href="{{ route('coordenador.show',$coordenador->id) }}">
                            <img src="{{ asset('icons/view-icon.png') }}" alt="Visualizar">
                        </a>
                    </div>
                    <div class="m-1">
                        <form action="{{ route('coordenador.destroy',$coordenador->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="background: none; border: none;" type="submit">
                                <img src="{{ asset('icons/delete-icon.png') }}" alt="Deletar">
                            </button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
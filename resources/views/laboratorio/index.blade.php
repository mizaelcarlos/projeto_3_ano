@extends('layouts.app')
@section('title', 'Listar Laboratórios')
@section('content')
    <h1>Lista de Laboratórios</h1>
    <a class="btn btn-primary mb-3" href="{{ route('laboratorio.create') }}">Cadastrar</a>

    <table class="table table-sm table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Capacidade</th>
                <th>Equipamentos</th>
                <th>Responsável</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($laboratorios as $lab)
                <tr class="table-light">
                    <td>{{ $lab->nome }}</td>
                    <td>{{ $lab->tipo }}</td>
                    <td>{{ $lab->capacidade }}</td>
                    <td>{{ $lab->equipmentos }}</td>
                    <td>{{ $lab->responsavel }}</td>
                    <td>
                        <div class="d-flex justify-content-center flex-wrap">
                            <a class="btn btn-success btn-sm m-1" href="{{ route('laboratorio.edit', $lab->id) }}">Editar</a>
                            <a class="btn btn-primary btn-sm m-1" href="{{ route('laboratorio.show', $lab->id) }}">Visualizar</a>
                            <form action="{{ route('laboratorio.destroy', $lab->id) }}" method="POST" class="m-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja excluir este laboratório?')">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-muted text-center">Nenhum laboratório cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@extends('layouts.app')
@section('title', 'Listar Laboratórios')
@section('content')

    <div class="d-flex justify-content-between">
        <h1>Lista de Laboratórios</h1>
        <a class="btn btn-primary mb-3 mt-2" href="{{ route('laboratorio.create') }}">Cadastrar</a>
    </div>

    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
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
                    <td>{{ $lab->equipamentos }}</td>
                    <td>{{ $lab->responsavel }}</td>
                    <td>
                        <div class="d-flex justify-content-center flex-wrap">

                            <a class="d-flex align-items-center" href="{{ route('laboratorio.edit', $lab->id) }}">
                                <img src="{{ asset('icons/edit-icon.png') }}" alt="">
                            </a>

                            <a class="d-flex align-items-center" href="{{ route('laboratorio.show', $lab->id) }}">
                                <img src="{{ asset('icons/view-icon.png') }}" alt="">
                            </a>

                            <form action="{{ route('laboratorio.destroy', $lab->id) }}" method="POST" class="d-flex align-items-center">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none; background: none;"
                                    onclick="return confirm('Tem certeza que deseja excluir este laboratório?')">
                                    <img src="{{ asset('icons/delete-icon.png') }}" alt="">
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

@extends('layouts.app')
@section('title', 'Listar cursos')
@section('content')
   <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Lista de cursos</h1>
    <a class="btn btn-primary" href="{{ route('curso.create') }}">Cadastrar</a>
</div>
 @auth

 @endauth
    <table class="table table-sm table-bordered table-hover">
        <thead class="thead-light">
            <th>Nome</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr class="table-secondary">
                <td>{{ $curso->nome }}</td>
                <td>
                      <div class="d-flex">
                        <div class="m-1">
                            <a href="{{ route('curso.edit',$curso->id) }}">
                                <img src="/icons/edit-icon.png" alt="Editar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <a href="{{ route('curso.show',$curso->id) }}">
                                <img src="/icons/view-icon.png" alt="Visualizar" width="24" height="24">
                            </a>
                        </div>
                        <div class="m-1">
                            <form action="{{ route('curso.destroy', $curso->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta turma?')">
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

@extends('layouts.app')
@section('title', 'Editar Secretaria')
@section('content')
    <h1>Editar Secretaria</h1>
    <form action="{{ route('turma.update', $secretaria->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $turma->descricao }}">
            </div>
            <div class="col-md-6">
                <label for="curso_id" class="form-label">Curso</label>
                <select class="form-control" name="curso_id" id="curso_id">
                    <option value="">Selecione</option>
                    @foreach ($secretarias as $secretaria)
                        <option value="{{ $secretaria->id }}"
                            {{ $secretaria->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

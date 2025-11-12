@extends('layouts.app')
@section('title', 'Cadastrar Disciplina')
@section('content')
    <h1>Cadastro de Disciplina</h1>
    <form action="{{ route('diretoria.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col-md-6">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name="codigo" id="codigo">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Carga Horária</label>
                <input type="text" class="form-control" name="carga_horaria" id="carga_horaria">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

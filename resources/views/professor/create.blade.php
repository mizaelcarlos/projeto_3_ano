@extends('layouts.app')
@section('title', 'Cadastrar Professor')
@section('content')
    <h1>Cadastro de Professor</h1>
    <form action="{{ route('diretoria.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="date" class="form-control" name="telefone" id="telefone">
            </div>
            <div class="col-md-6">
                <label for="disciplina" class="form-label">Disciplina</label>
                <input type="text" class="form-control" name="disciplina" id="disciplina">
            </div>
             <div class="col-md-6">
                <label for="turno" class="form-label">Turno</label>
                <input type="text" class="form-control" name="turno" id="turno">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

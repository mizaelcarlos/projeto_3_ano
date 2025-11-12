@extends('layouts.app')
@section('title', 'Cadastrar Sala')
@section('content')
    <h1>Cadastro de Sala</h1>
    <form action="{{ route('sala.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="numero_de_sala" class="form-label">Número da Sala</label>
                <input type="text" class="form-control" name="numero_de_sala" id="numero_de_sala">
            </div>
            <div class="col-md-6">
                <label for="numero_maximoAlunos" class="form-label">Número Máximo de Alunos</label>
                <input type="text" class="form-control" name="numero_maximoAlunos" id="numero_maximoAlunos">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

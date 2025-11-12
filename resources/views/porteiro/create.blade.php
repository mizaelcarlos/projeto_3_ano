@extends('layouts.app')
@section('title', 'Cadastrar Porteiro')
@section('content')
<h1>Cadastro Porteiro</h1>
<form action="{{ route('porteiro.store') }}" method="post">
    @csrf

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">Turno</label>
            <input type="text" class="form-control" name="turno" id="turno">
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">Horario de entrada:</label>
            <input type="time" class="form-control" name="horario_entrada" id="horario_entrada">
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">Horario de saida:</label>
            <input type="time" class="form-control" name="horario_saida" id="horario_saida">
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
</form>
@endsection
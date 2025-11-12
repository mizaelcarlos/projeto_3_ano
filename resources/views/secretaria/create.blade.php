@extends('layouts.app')
@section('title', 'Cadastrar Diretoria')
@section('content')
<h1>Cadastro Secretaria</h1>
<form action="{{ route('diretoria.store') }}" method="post">
    @csrf

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
        </div>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
</form>
@endsection
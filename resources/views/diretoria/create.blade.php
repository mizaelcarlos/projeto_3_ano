@extends('layouts.app')
@section('title', 'Cadastrar Diretoria')
@section('content')
    <h1>Cadastro de Diretoria</h1>
    <form action="{{ route('diretoria.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col-md-6">
                <label for="gestao" class="form-label">Gestão</label>
                <input type="text" class="form-control" name="gestao" id="gestao">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="data_inicio" class="form-label">Data de Início</label>
                <input type="date" class="form-control" name="data_inicio" id="data_inicio">
            </div>
            <div class="col-md-6">
                <label for="data_fim" class="form-label">Data de Término</label>
                <input type="date" class="form-control" name="data_fim" id="data_fim">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

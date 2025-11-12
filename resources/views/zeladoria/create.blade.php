@extends('layouts.app')
@section('title', 'Cadastrar Zeladoria')
@section('content')
    <h1>Cadastro de Zeladoria</h1>
    <form action="{{ route('zeladoria.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="setor" class="form-label">Setor</label>
                <input type="text" class="form-control" name="setor" id="setor">
            </div>
            <div class="col-md-6">
                <label for="tarefa" class="form-label">Tarefa</label>
                <input type="text" class="form-control" name="tarefa" id="tarefa">
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-md-6">
                <label for="turno" class="form-label">Turno</label>
                <input type="text" class="form-control" name="turno" id="turno">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

@extends('layouts.app')
@section('title', 'Cadastrar Coordenador')
@section('content')
    <h1>Cadastro de Coordenador</h1>
    <form action="{{ route('coordenador.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col-md-6">
                <label for="seguimento" class="form-label">Seguimento</label>
                <input type="text" class="form-control" name="seguimento" id="seguimento">
            </div>
        </div>


        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

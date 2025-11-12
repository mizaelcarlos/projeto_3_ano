@extends('layouts.app')
@section('title', 'Cadastrar Escola')
@section('content')
    <h1>Cadastro de Escola</h1>
    <form action="{{ route('escola.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="cnpj" class="form-label">Cnpj</label>
                <input type="text" class="form-control" name="cnpj" id="cnpj">
            </div>
            <div class="col-md-6">
                <label for="endereço" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereço" id="endereço">
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection

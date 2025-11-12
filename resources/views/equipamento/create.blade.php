@extends('layouts.app')
@section('title', 'Cadastrar Equipamento')
@section('content')

<h1>Cadastro de Equipamento</h1>
<form action="{{ route('equipamento.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="col-md-6">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="date" class="form-control" name="modelo" id="modelo">
    </div>

    <div class="col-md-6">
        <label for="modelo" class="form-label">Número de Série</label>
        <input type="date" class="form-control" name="numserie" id="numserie">
    </div>

    <div class="col-md-6">
        <label for="modelo" class="form-label">Descrição</label>
        <input type="date" class="form-control" name="descricao" id="descricao">
    </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
</form>

@endsection
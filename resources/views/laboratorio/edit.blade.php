@extends('layouts.app')
<<<<<<< HEAD

@section('content')
<div class="container">
    <h2>Editar Laboratório</h2>

    <form action="{{ route('laboratorio.update', $laboratorio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mt-3">
            <label>Nome:</label>
            <input 
                type="text" 
                name="nome" 
                class="form-control" 
                value="{{ $laboratorio->nome }}" 
                required
            >
        </div>

        <div class="form-group mt-3">
            <label>Tipo:</label>
            <input 
                type="text" 
                name="tipo" 
                class="form-control" 
                value="{{ $laboratorio->tipo }}" 
                required
            >
        </div>

        <div class="form-group mt-3">
            <label>Capacidade:</label>
            <input 
                type="number" 
                name="capacidade" 
                class="form-control" 
                value="{{ $laboratorio->capacidade }}" 
                required
            >
        </div>

        <div class="form-group mt-3">
            <label>Equipamentos:</label>
            <textarea 
                name="equipmentos" 
                class="form-control"
                rows="4"
            >{{ $laboratorio->equipmentos }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label>Responsável:</label>
            <input 
                type="text" 
                name="responsavel" 
                class="form-control" 
                value="{{ $laboratorio->responsavel }}"
            >
        </div>

        <button type="submit" class="btn btn-primary mt-4">
            Salvar Alterações
        </button>

        <a href="{{ route('laboratorio.index') }}" class="btn btn-secondary mt-4">
            Cancelar
        </a>
=======
@section('title', 'Cadastrar Laboratório')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Laboratório</h1>

    <form action="{{  route("laboratorio.update",$laboratorio->id) }}" method="POST" class="mt-4" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Laboratório</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do laboratório" value="{{ $laboratorio->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Ex: Informática, Química, Robótica..." value="{{ $laboratorio->tipo }}" required>
        </div>

        <div class="mb-3">
            <label for="capacidade" class="form-label">Capacidade</label>
            <input type="number" name="capacidade" id="capacidade" class="form-control" placeholder="Quantidade máxima de pessoas" value="{{ $laboratorio->capacidade }}" required>
        </div>

        <div class="mb-3">
            <label for="equipamentos" class="form-label">Equipamentos</label>
            <textarea name="equipamentos" id="equipamentos" class="form-control" rows="3" value="{{ $laboratorio->equipamentos }}"></textarea>
        </div>

        <div class="mb-3">
            <label for="responsavel" class="form-label">Responsável</label>
            <input type="text" name="responsavel" id="responsavel" class="form-control" placeholder="Nome do responsável pelo laboratório" value="{{ $laboratorio->responsavel }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('laboratorio.index') }}" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
>>>>>>> a5001206c17270a2426132e1a23bbd0ba6623e30
    </form>
</div>
@endsection

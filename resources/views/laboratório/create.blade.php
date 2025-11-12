@extends('layouts.app')
@section('title', 'Cadastrar Laboratório')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Laboratório</h1>

    <form action="{{ route('laboratorios.store') }}" method="POST" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Laboratório</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do laboratório" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Ex: Informática, Química, Robótica..." required>
        </div>

        <div class="mb-3">
            <label for="capacidade" class="form-label">Capacidade</label>
            <input type="number" name="capacidade" id="capacidade" class="form-control" placeholder="Quantidade máxima de pessoas" required>
        </div>

        <div class="mb-3">
            <label for="equipmentos" class="form-label">Equipamentos</label>
            <textarea name="equipmentos" id="equipmentos" class="form-control" rows="3" placeholder="Liste os principais equipamentos disponíveis"></textarea>
        </div>

        <div class="mb-3">
            <label for="responsavel" class="form-label">Responsável</label>
            <input type="text" name="responsavel" id="responsavel" class="form-control" placeholder="Nome do responsável pelo laboratório" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('laboratorios.index') }}" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection

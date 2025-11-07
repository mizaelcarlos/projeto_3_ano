@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Cadastrar Nova Disciplina</h2>

    {{-- Exibe mensagens de erro, se houver --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('disciplina.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Disciplina:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Ex: Matemática" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="4" placeholder="Digite uma breve descrição"></textarea>
        </div>

        <div class="mb-3">
            <label for="professor" class="form-label">Professor Responsável:</label>
            <input type="text" name="professor" id="professor" class="form-control" placeholder="Ex: João Silva">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('disciplina.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection

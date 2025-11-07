@extends('layouts.app')

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
    </form>
</div>
@endsection

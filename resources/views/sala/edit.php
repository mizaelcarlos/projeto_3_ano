@extends('layouts.app')
@section('title', 'Editar Sala')
@section('content')
<div class="container mt-4">
<h1>Editar Sala</h1>
<form action="{{ route('sala.update', $sala->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group mb-3">
<label for="numero_de_sala">Número da Sala</label>
<input type="text" name="numero_de_sala" id="numero_de_sala" 
class="form-control" value="{{ $sala->numero_de_sala }}" required>
</div>
<div class="form-group mb-3">
<label for="numero_maximoAluno">Número Máximo de Alunos</label>
<input type="text" name="numero_maximoAluno" id="numero_maximoAluno" 
class="form-control" value="{{ $sala->numero_maximoAluno }}" required>
</div>
<button type="submit" class="btn btn-primary">Salvar Alterações</button>
<a href="{{ route('sala.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
@endsection

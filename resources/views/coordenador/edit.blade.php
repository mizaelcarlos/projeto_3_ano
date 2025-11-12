@extends('layouts.app')
@section('title', 'Editar Coordenador')
@section('content')
<h1 class="mt-2">Editar Coordenaodor</h1>
<form action="{{  route("coordenador.update",$coordenador->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="matricula" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $coordenador->nome }}">
        </div>
        <div class="col-md-6">
            <label for="nome" class="form-label">Seguimento</label>
            <input type="text" class="form-control" name="seguimento" id="seguimento" value="{{ $coordenador->seguimento }}">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <button type="submit">Salvar</button>
        </div>
    </div>
</form>
@endsection
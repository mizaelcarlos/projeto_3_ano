@extends('layouts.app')
@section('title', 'Editar zeladoria')
@section('content')
    <h1>Editar Zeladoria</h1>
    <form action="{{  route("zeladoria.update", $zeladoria->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $zeladoria->nome }}">
        <label for="">Setor</label>
        <input type="text" name="setor" id="setor" value="{{ $zeladoria->setor }}">
        <label for="">Tarefa</label>
        <input type="text" name="tarefa" id="tarefa" value="{{ $zeladoria->tarefa }}">
        <label for="">Turno</label>
        <input type="date" name="turno" id="turno" value="{{ $zeladoria->turno }}">
        <button type="submit">Salvar</button>
    </form>
@endsection
@extends('layouts.app')
@section('title', 'Editar porteiro')
@section('content')
    <h1>Editar Porteiro</h1>
    <form action="{{  route('porteiro.update',$porteiro->id) }}" method="post" enctype="multipart/form-data">
    <form action="{{  route('porteiro.update', $porteiro->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $porteiro->nome }}">
        <label for="">Turno</label>
        <input type="text" name="turno" id="turno" value="{{ $porteiro->turno }}">
        <label for="">Horario Entrada</label>
        <input type="text" name="horario_entrada" id="horario_entrada" value="{{ $porteiro->horario_entrada }}">
        <label for="">Horario Saida</label>
        <input type="text" name="horario_saida" id="horario_saida" value="{{ $porteiro->horario_saida }}">
        <button type="submit">Salvar</button>
    </form>
@endsection
@extends('layouts.app')
@section('title', 'Dados da Zeladoria')
@section('content')
    <h1>Dados da Zeladoria</h1>
     <p>Nome: {{ $zeladoria->nome }}</p>
     <p>Setor: {{ $zeladoria->setor}}</p>
     <p>Tarefa: {{ $zeladoria->tarefa}}</p>
     <p>Turno: {{ $zeladoria->turno}}</p>
@endsection
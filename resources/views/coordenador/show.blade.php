@extends('layouts.app')
@section('title', 'Dados do Cordenador')
@section('content')
    <h1>Dados do Cordenador</h1>
    <p>Nome: {{ $coordenador->nome }}</p>
    <p> Seguimento: {{ $coordenador->seguimento }}</p>
@endsection
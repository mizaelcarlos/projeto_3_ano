@extends('layouts.app')
@section('title', 'Dados do porteiro')
@section('content')
<h1>Dados do Porteiro:</h1>
<p>Nome: {{ $porteiro->nome }}</p>
<p>Turno: {{ $porteiro->turno }}</p>
<p>Horaria de entrada: {{ $porteiro->horario_entrada }}</p>
<p>Horaria de saida: {{ $porteiro->horario_saida }}</p>
@endsection
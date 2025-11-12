@extends('layouts.app')
@section('title', 'Dados do porteiro')
@section('content')
<h1>Dados do Porteiro:</h1>
<p>Nome: {{ $porteiro->nome }}</p>
<p>Carga_horaria: {{ $porteiro->turno }}</p>
<p>Carga_horaria: {{ $porteiro->horario_entrada }}</p>
<p>Carga_horaria: {{ $porteiro->horario_saida }}</p>
@endsection
@extends('layouts.app')
@section('title', 'Dados da sala')
@section('content')
    <h1>Dados da Sala</h1>
     <p>Número de sala: {{ $sala->numero_de_sala }}</p>
    <p>numero_maximoAluno: {{ $sala->numero_maximoAluno }}</p>
@endsection
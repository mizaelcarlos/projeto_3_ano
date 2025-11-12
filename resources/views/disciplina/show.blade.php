@extends('layouts.app')
@section('title', 'Dados do disciplina')
@section('content')
    <h1>Dados do Disciplina</h1>
     <p>Nome: {{ $disciplina->nome }}</p>
    <p>Carga_horaria: {{ $disciplina->carga_horaria }}</p>
@endsection

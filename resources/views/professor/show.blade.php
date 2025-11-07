@extends('layouts.app')
@section('title', 'Dados do Professor')
@section('content')
    <h1>Dados do Professor</h1>
    <p>Nome: {{ $professor->nome }}</p>
    <p>Email: {{ $professor->email }}</p>
    <p>Telefone: {{ $professor->telefone }}</p>
    <p>Disciplina: {{ $professor->disciplina }}</p>
    <p>Turno: {{ $professor->turno }}</p>
@endsection
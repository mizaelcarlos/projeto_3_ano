@extends('layouts.app')

@section('title' , 'Dados do Laboratório')

@section('content')
    <h1>Dados do Laboratório</h1>
    <p>Nome: {{ $laboratorio->nome }}</p>
    <p>Tipo: {{ $laboratorio->tipo }}</p>
    <p>Capacidade: {{ $laboratorio->capacidade }}</p>
    <p>Equipamentos: {{ $laboratorio->equipamentos }}</p>
    <p>Responsável: {{ $laboratorio->responsavel }}</p>

@endsection

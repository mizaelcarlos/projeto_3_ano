@extends('layouts.app')
@section('title', 'Dados do Material')
@section('content')
    <h1>Dados do Material</h1>
    <p>Nome: {{ $material->nome }}</p>
    <p>id: {{ $material->id }}</p>
    <p>Quantidade: {{ $material->quantidade }}</p>
@endsection
@extends('layouts.app')

@section('title', 'Dados da diretoria')

@section('content')
    <h1>Dados da diretoria</h1>
    <p>Nome: {{ $diretoria->nome }}</p>
    <p>Gestão: {{ $diretoria->gestao }}</p>
    <p>Data de início: {{ $diretoria->data_inicio }}</p>
    <p>Data de finalização: {{ $diretoria->data_final }}</p>
@endsection

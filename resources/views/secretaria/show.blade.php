@extends('layouts.app')
@section('title', 'Dados da Secretaria')
@section('content')
    <h1>Dados do Secretaria</h1>
     <p>Nome: {{ $secretaria->nome }}</p>
    <p>Email: {{ $secretaria->email }}</p>
    <p>Cpf: {{ $secretaria->cpf }}</p>
    </div>
@endsection
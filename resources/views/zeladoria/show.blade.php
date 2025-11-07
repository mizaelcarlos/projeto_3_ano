@extends('layouts.app')
@section('title', 'Detalhes da Zeladoria')
@section('content')
<div class="container mt-4">
    <h2>Detalhes da Zeladoria</h2>
    <p>Nome do zelador: {{ $zeladoria->nome_zelador }}</p>
    <p>Setor: {{ $zeladoria->setor }}</p>
    <p>Tarefa: {{ $zeladoria->tarefa }}</p>
    <p>Data do serviço: {{ \Carbon\Carbon::parse($zeladoria->data_servico)->format('d/m/Y') }}</p>
    <p>Turno: {{ $zeladoria->turno }}</p>
    <p>Observação: {{ $zeladoria->observacao }}</p>

    <a href="{{ route('zeladoria.index') }}">Voltar</a>
</div>
@endsection

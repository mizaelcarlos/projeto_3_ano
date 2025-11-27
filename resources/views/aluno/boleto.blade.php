@extends('layouts.app')
@section('title', 'Boletos do Aluno')
@section('content')
    <h1>Boletos de {{ $aluno->nome }}</h1>
    <p><strong>Matrícula:</strong> {{ $aluno->id }}</p>

    @if ($boletos->isEmpty())
        <p>Nenhum boleto encontrado para este aluno.</p>
    @else
        <table class="table table-sm table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Data de Vencimento</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($boletos as $boleto)
                    <tr class="table-secondary">
                        <td>{{ $boleto->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($boleto->data_vencimento)->format('d/m/Y') }}</td>
                        <td>R$ {{ number_format($boleto->valor, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a class="btn btn-secondary mt-3" href="{{ route('aluno.index') }}">Voltar</a>
@endsection

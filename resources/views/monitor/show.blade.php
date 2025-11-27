@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Monitor</h1>

    <div style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; width: 400px;">
        <p><strong>ID:</strong> {{ $monitore->id }}</p>
        <p><strong>Nome:</strong> {{ $monitore->nome }}</p>
        <p><strong>Número:</strong> {{ $monitore->numero }}</p>
        <p><strong>Turno:</strong> {{ $monitore->turno }}</p>
        <p><strong>Criado em:</strong> {{ $monitore->created_at->format('d/m/Y H:i') }}</p>
        <p><strong>Atualizado em:</strong> {{ $monitore->updated_at->format('d/m/Y H:i') }}</p>
    </div>

    <br>

    <a href="{{ route('monitores.edit', $monitore->id) }}" style="background-color: #2196F3; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;">Editar</a>
    <a href="{{ route('monitores.index') }}" style="margin-left: 10px;">Voltar à lista</a>

    <form action="{{ route('monitores.destroy', $monitore->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este monitor?')" style="margin-left: 10px; background-color: red; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer;">Excluir</button>
    </form>
</div>
@endsection

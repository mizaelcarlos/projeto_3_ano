@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Monitores</h1>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('monitores.create') }}" style="display: inline-block; margin-bottom: 15px; background-color: #4CAF50; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;">Novo Monitor</a>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f0f0f0;">
                <th>ID</th>
                <th>Nome</th>
                <th>Número</th>
                <th>Turno</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($monitores as $monitor)
                <tr>
                    <td>{{ $monitor->id }}</td>
                    <td>{{ $monitor->nome }}</td>
                    <td>{{ $monitor->numero }}</td>
                    <td>{{ $monitor->turno }}</td>
                    <td>
                        <a href="{{ route('monitores.edit', $monitor->id) }}" style="color: blue;">Editar</a> |
                        <form action="{{ route('monitores.destroy', $monitor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este monitor?')" style="color: red; background: none; border: none; cursor: pointer;">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Nenhum monitor cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

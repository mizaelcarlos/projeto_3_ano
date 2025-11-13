@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Monitor</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('monitores.update', $monitore->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $monitore->nome) }}" required><br><br>

        <label for="numero">Número:</label><br>
        <input type="text" name="numero" id="numero" value="{{ old('numero', $monitore->numero) }}" required><br><br>

        <label for="turno">Turno:</label><br>
        <select name="turno" id="turno" required>
            <option value="Manhã" {{ $monitore->turno == 'Manhã' ? 'selected' : '' }}>Manhã</option>
            <option value="Tarde" {{ $monitore->turno == 'Tarde' ? 'selected' : '' }}>Tarde</option>
            <option value="Noite" {{ $monitore->turno == 'Noite' ? 'selected' : '' }}>Noite</option>
        </select><br><br>

        <button type="submit" style="background-color: #2196F3; color: white; padding: 8px 16px; border: none; border-radius: 5px;">Atualizar</button>
        <a href="{{ route('monitores.index') }}" style="margin-left: 10px;">Cancelar</a>
    </form>
</div>
@endsection

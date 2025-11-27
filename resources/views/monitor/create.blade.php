@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Monitor</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('monitores.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required><br><br>

        <label for="numero">Número:</label><br>
        <input type="text" name="numero" id="numero" value="{{ old('numero') }}" required><br><br>

        <label for="turno">Turno:</label><br>
        <select name="turno" id="turno" required>
            <option value="">Selecione</option>
            <option value="Manhã" {{ old('turno') == 'Manhã' ? 'selected' : '' }}>Manhã</option>
            <option value="Tarde" {{ old('turno') == 'Tarde' ? 'selected' : '' }}>Tarde</option>
            <option value="Noite" {{ old('turno') == 'Noite' ? 'selected' : '' }}>Noite</option>
        </select><br><br>

        <button type="submit" style="background-color: #4CAF50; color: white; padding: 8px 16px; border: none; border-radius: 5px;">Salvar</button>
        <a href="{{ route('monitores.index') }}" style="margin-left: 10px;">Cancelar</a>
    </form>
</div>
@endsection

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Secretarias</title>
    <link href= rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Secretarias</h1>

    <a href="{{ route('secretarias.create') }}" class="btn btn-success mb-3">+ Nova Secretaria</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            @forelse($secretarias as $secretaria)
                <tr>
                    <td>{{ $secretaria-> }}</td>
                    <td>{{ $secretaria-> }}</td>
                    <td>{{ $secretaria-> }}</td>
                    <td>{{ $secretaria-> }}</td>
                    <td>{{ $secretaria-> }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Nenhuma secretaria cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
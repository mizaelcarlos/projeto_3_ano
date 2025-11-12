<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Disciplina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Cadastrar Nova Disciplina</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('disciplina.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome da Disciplina</label>
                                <input type="text" name="nome" id="nome" class="form-control" 
                                       placeholder="Ex: Matemática, Biologia, etc." required>
                            </div>

                            <div class="mb-3">
                                <label for="codigo" class="form-label">Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control" 
                                       placeholder="Ex: MAT101" required>
                            </div>

                            <div class="mb-3">
                                <label for="carga_horaria" class="form-label">Carga Horária</label>
                                <input type="number" name="carga_horaria" id="carga_horaria" class="form-control" 
                                       placeholder="Ex: 60" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('disciplina.index') }}" class="btn btn-secondary">Voltar</a>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>

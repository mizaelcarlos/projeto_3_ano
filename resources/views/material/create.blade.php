<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Novo Material</h4>
                    </div>
                    <div class="card-body">
                        <!-- Exibe mensagens de erro -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Formulário -->
                        <form action="{{ route('material.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do Material</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do material" required>
                            </div>

                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input type="text" name="quantidade" id="quantidade" class="form-control" placeholder="Ex: 122" required>
                            </div>

                            <div class="mb-3">
                                <label for="id" class="form-label">id</label>
                                <input type="number" name="id" id="id" class="form-control" placeholder="Ex: 40" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

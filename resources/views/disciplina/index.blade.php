<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Lista de Disciplinas</h1>
                    <a href="{{ route('disciplina.create') }}" class="btn btn-primary">
                        Nova Disciplina
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($disciplina->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Código</th>
                                    <th>Carga Horária</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($disciplina as $disc)
                                    <tr>
                                        <td>{{ $disc->id }}</td>
                                        <td>{{ $disc->nome }}</td>
                                        <td>{{ $disc->codigo }}</td>
                                        <td>{{ $disc->carga_horaria }}h</td>
                                        <td>{{ Str::limit($disc->descricao, 50) }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('disciplina.show', $disc->id) }}" 
                                                   class="btn btn-info btn-sm" title="Visualizar">
                                                    <i class="fas fa-eye"></i> Ver
                                                </a>
                                                <a href="{{ route('disciplina.edit', $disc->id) }}" 
                                                   class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                                <form action="{{ route('disciplina.destroy', $disc->id) }}" 
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-danger btn-sm" 
                                                            title="Excluir"
                                                            onclick="return confirm('Tem certeza que deseja excluir esta disciplina?')">
                                                        <i class="fas fa-trash"></i> Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    @if($disciplina->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $disciplina->links() }}
                        </div>
                    @endif

                @else
                    <div class="alert alert-info text-center">
                        <h4>Nenhuma disciplina cadastrada</h4>
                        <p>Clique no botão "Nova Disciplina" para adicionar a primeira disciplina.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    
</body>
</html>
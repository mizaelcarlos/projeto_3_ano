<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistema Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>

@extends('layout')
@section('title', 'Criar Professor')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Novo Professor</h4>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('professor.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome Completo</label>
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do professor" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="exemplo@escola.com" required>
                                </div>
                            </div>
                        </div>


                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="data_contratacao" class="form-label">Data de Contratação</label>
                                    <input type="date" name="data_contratacao" id="data_contratacao" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="disciplina" class="form-label">Disciplina</label>
                            <select name="disciplina" id="disciplina" class="form-select" required>
                                <option value="">Selecione uma disciplina</option>
                                <option value="Matemática">Matemática</option>
                                <option value="Português">Português</option>
                                <option value="História">História</option>
                                <option value="Geografia">Geografia</option>
                                <option value="Ciências">Ciências</option>
                                <option value="Física">Física</option>
                                <option value="Química">Química</option>
                                <option value="Biologia">Biologia</option>
                                <option value="Inglês">Inglês</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formacao" class="form-label">Formação Acadêmica</label>
                            <select name="formacao" id="formacao" class="form-select" required>
                                <option value="">Selecione a formação</option>
                                <option value="Graduação">Graduação</option>
                                <option value="Especialização">Especialização</option>
                                <option value="Mestrado">Mestrado</option>
                                <option value="Doutorado">Doutorado</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="observacoes" class="form-label">Observações</label>
                            <textarea name="observacoes" id="observacoes" class="form-control" rows="3" placeholder="Observações adicionais sobre o professor"></textarea>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="ativo" id="ativo" value="1" checked>
                            <label class="form-check-label" for="ativo">
                                Professor ativo
                            </label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('professor.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Voltar para Lista
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-lg"></i> Cadastrar Professor
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

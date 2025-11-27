@extends('layouts.app')
@section('title', 'Editar aluno')
@section('content')
<h1 class="mt-2">Editar aluno</h1>
<form action="{{  route("aluno.update",$aluno->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" class="form-control" name="matricula" id="matricula" value="{{ $aluno->matricula }}">
        </div>
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $aluno->nome }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $aluno->email }}">
        </div>
        <div class="col-md-6">
            <label for="data_nascimento" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento"
                value="{{ $aluno->data_nascimento }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto">
            <img src="{{ asset($aluno->foto) }}" alt="" style="max-width: 400px">
        </div>

        <div class="col-md-6">
            <label for="turma" class="form-label">Turma:</label>
            <select class="form-control" name="turma_id" id="turma_id">
                <option value="">Selecione</option>
                @foreach ($turmas as $turma)
                <option value="{{ $turma->id }}">{{ $turma->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone"
                value="{{ $aluno->contatoAluno?->telefone }}">
            <button class="btn btn-primary mt-3" type="submit">Salvar</button>
        </div>
</form>
@endsection
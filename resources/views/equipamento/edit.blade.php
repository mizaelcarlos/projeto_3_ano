@extends('layouts.app')
@section('title', 'Editar Equipamento')
@section('content')

<h1>Editar Equipamento</h1>

    <form action="{{ route('equipamento.update',$equipamento->id) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <input type="text" name="nome" id="nome" value="{{$equipamento->nome}}" placeholder="Nome" ><br><br>
        <input type="text" name="modelo" id="modelo" value="{{$equipamento->modelo}}" placeholder="Modelo" ><br><br>
        <input type="text" name="numserie" id="numserie" placeholder="Número de Série" value="{{$equipamento->numserie}}"><br><br>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$equipamento->descricao}}"><br><br>
        <button type="submit">Salvar</button>
    </form>

@endsection

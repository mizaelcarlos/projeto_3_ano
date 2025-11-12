@extends('layouts.app')
@section('title', 'Editar Material')
@section('content')

<h1>Editar Material</h1>

    <form action="{{ route('material.update',$material->id) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <input type="text" name="nome" id="nome" value="{{$material->nome}}" placeholder="Nome" ><br><br>
        <input type="text" name="modelo" id="id" value="{{$material->id}}" placeholder="id" ><br><br>
        <input type="text" name="quantidade" id="quantidade" value="{{$material->quantidade}}" placeholder="quantidade"><br><br>
        <button type="submit">Salvar</button>
    </form>

@endsection
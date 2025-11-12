@extends('layouts.app')
@section('title', 'Editar professores')
@section('content')
 <h1>Editar Professor</h1>
    <form action="{{ route('professor.update',$professor->id) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <input type="text" name="nome" id="nome" value="{{$professor->nome}}" placeholder="Nome Completo" ><br><br>
        <input type="text" name="disciplina" id="disciplina" value="{{$professor->disciplina}}" placeholder="Disciplina" ><br><br>
        <input type="email" name="email" id="email" placeholder="E-Mail" value="{{$professor->email}}"><br><br>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{$professor->telefone}}"><br><br>
        <input type="text" name="turno" id="turno" placeholder="Turno" value="{{$professor->turno}}"><br><br>
        <button type="submit">Salvar</button>
    </form>
@endsection

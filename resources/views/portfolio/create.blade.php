@extends('layouts.app')
@section('title', 'Cadastro de Portifólio')
@section('content')
    
    <form action="" method="post" enctype="multipart/form-data">
    @csrf

    <label for="">Nome: </label>
    <input type="text" name="nome" id="nome">

    <label for="">Email: </label>
    <input type="email" name="email" id="email">

    <label for="">Portfólio: </label>
    <input type="file" name="portfolio_pdf" id="portfolio_pdf">

    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

@endsection
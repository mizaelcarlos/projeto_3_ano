@extends('layouts.app')
@section('title', 'Cadastro de Portifólio')
@section('content')
    
    <form action="{{ route('portfolio.cadastrar') }}" method="post" enctype="multipart/form-data">
    @csrf

     <!-- <input type="hidden" name="item_id" value="{{ $item->id }}"> -->

    <label for="">Nome: </label>
    <input type="text" name="nome" id="nome">

    <label for="">Email: </label>
    <input type="email" name="email" id="email">

    <label for="">Portfólio: </label>
    <input type="file" name="portfolio_pdf" id="portfolio_pdf">

    </form>

@endsection
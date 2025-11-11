@extends('layouts.app')
@selection('title', 'Cadastrar diretoria')
@section('content')
    h1'Cadastro de Diretoria</h1>
    <form action="{{ route('diretoria.store') }}" method="post" enctype="
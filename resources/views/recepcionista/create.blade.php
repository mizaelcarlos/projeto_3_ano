@extends('layouts.app')
@section('title', 'Cadastrar recepcionista')
@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Cadastrar novo recepcionista</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> Algo deu errado. Verifique os campos abaixo:
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('recepcionista.store') }}" method="POST">
            @csrf

            
@extends('layouts.app')
@section('title', ' Login')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">



<div class="container text-center mt-5">
    <h1 class="mb-4">🎓 Sistema de Controle Acadêmico</h1>
    <p class="mb-4">Gerencie de forma prática e integrada todos os setores da instituição.</p>
    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Realizar Login</a>
</div>

@endsection
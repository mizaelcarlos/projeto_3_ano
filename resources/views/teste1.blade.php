@extends('layouts.app')
@section('title', ' Teste QRCode')
@section('content')

<div class="container">
    <h1>QRCode</h1>
    {!! QrCode::size(200)->generate('Lary linda') !!}
</div>

@endsection

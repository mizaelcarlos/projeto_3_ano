@extends('layouts.app')
@section('title', ' Teste QRCode')
@section('content')

<div class="container">
    <h1>QR Code</h1>
    {{!! QrCode::size(200)->generate('Guilherme') !!}}
</div>

@endsection
@extends('layouts.app')
@section('title', ' Teste QRCode')
@section('content')

<div class="container">
    <h1>QRCode</h1>
    {!! QrCode::size(200)->generate('https://www.instagram.com/accounts/onetap/?next=%2Fp%2FDM266TyMCQf%2F')!!}
</div>

@endsection

@extends('layouts.app')
@section('title', ' Teste QRCode')
@section('content')

<div class="container">
  <h1>QrCode</h1>
  {!! QrCode::size(200)->generate('Texto ou URL aqui') !!}
</div>

@endsection

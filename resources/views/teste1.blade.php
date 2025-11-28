@extends('layouts.app')
@section('title', ' Teste QRCode')
@section('content')

<div class="container">
   <h1>QRCode</h1>
   {!!QrCode::size(200)->generate('Texto ou URL aqui, Terceirão Campeão')!!}
</div>

<div class="container">
    {!! $chart->container() !!}
 
     <script src="{{ $chart->cdn() }}"></script>
 
     {{ $chart->script() }}
</div>


@endsection

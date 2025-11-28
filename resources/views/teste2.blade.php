@extends('layouts.app')
@section('title', ' Teste QRCode')
@section('content')
 
     {!! $chart->container() !!}
 
     <script src="{{ $chart->cdn() }}"></script>
 
     {{ $chart->script() }}

@endsection     
 
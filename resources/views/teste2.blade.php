@extends('layouts.app')
@section('title', ' Teste Grafico')
@section('content')
<div class="container">
    <h1>Teste gráfico</h1>
     {!! $chart->container() !!}
 
     <script src="{{ $chart->cdn() }}"></script>
 
     {{ $chart->script() }}
</div>
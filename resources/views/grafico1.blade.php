@extends('layouts.app')
@section('title', ' Gráfico')
@section('content')
     {!! $chart->container() !!}
 
     <script src="{{ $chart->cdn() }}"></script>
 
     {{ $chart->script() }}
@endsection
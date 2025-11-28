@extends('layouts.app')
@section('title', ' Grafico1')
@section('content')
<div class="container">
   <h1>Grafico1</h1>
   <div>
      {!! $chart->container() !!}
   </div>
    <script src="{{ $chart->cdn() }}"></script>
    {!! $chart->script() !!}
</div>
@endsection
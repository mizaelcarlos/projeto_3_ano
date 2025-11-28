@extends('layouts.app')

@section('title', 'Gráfico')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Gráfico</h1>

    {!! $chart->container() !!}
</div>

<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endsection

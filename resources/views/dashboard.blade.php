@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row">

        @foreach ($alunos as $aluno)
            <div class="col-3 mb-3">
                <form action="" method="get">

                    <button type="submit" class="btn rounded-3  w-100 h-100" style="color: #E6EAE1">
                        <div class="m-3" >
                            <div class="col">
                                <img src="{{ asset('icons/documento.png') }}"class="img-fluid mb-2 w-25 h-25" />
                            </div>
                            <div>
                                <h4 class="text-dark m-0">{{ $aluno->name }}<h4>
                            </div class="col">
                        </div>
                    </button>
                </form>
            </div>
        @endforeach

    </div>
</div>
@endsection
@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Vista Previa</h1>
                </div>
                <div class="col-1">
                    <a class="btn btn-outline-dark float-right" href="{{route('carousel.index')}}">Regresar</a>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-warning float-right" href="{{route('carousel.edit',$top->id)}}">Editar</a>
                </div>
            </div>
            <hr>
            <div class="row ">

                {{-- Etapa 1 --}}
                <div class="col-12">
                    <h1>{{ $top->head }}</h1>
                    <br>
                </div>
                <div class="col-12">
                    <img src="/images/{{$top->path}}" class="img-fluid" alt="">
                    <br>
                </div>
            </div>
        </div>
    </div>

@endsection
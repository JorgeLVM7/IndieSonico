@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Top </h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('carousel.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('carousel.fragment.error')


            {!! Form::model($top, ['route'=>['carousel.update',$top->id], 'method'=> 'PUT','files'=>true]) !!}

            @include('carousel.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
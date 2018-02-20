@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Crear Top</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('carousel.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('carousel.fragment.info')

                    @include('carousel.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'carousel.store', 'files'=>true]) !!}

                            @include('carousel.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
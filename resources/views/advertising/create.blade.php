@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Crear Publicidad</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('advertising.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('advertising.fragment.info')

                    @include('advertising.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'advertising.store', 'files'=>true]) !!}

                            @include('advertising.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
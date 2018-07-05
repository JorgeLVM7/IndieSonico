@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Crear Descripción del Sitio</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('extras.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('extras.fragment.info')

                    @include('extras.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'extras.store', 'files'=>true]) !!}

                            @include('extras.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
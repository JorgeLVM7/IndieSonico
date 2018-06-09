@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Crear Popup</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('popups.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('popups.fragment.info')

                    @include('popups.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'popups.store', 'files'=>true]) !!}

                            @include('popups.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
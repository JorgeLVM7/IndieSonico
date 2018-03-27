@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Publicidad </h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('advertising.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('advertising.fragment.error')


            {!! Form::model($adver, ['route'=>['advertising.update',$adver->id], 'method'=> 'PUT','files'=>true]) !!}

            @include('advertising.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
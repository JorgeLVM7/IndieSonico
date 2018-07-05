@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Descripción</h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('extras.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('extras.fragment.error')


            {!! Form::model($extra, ['route'=>['extras.update',$extra->id], 'method'=> 'PUT','files'=>true]) !!}

            @include('extras.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
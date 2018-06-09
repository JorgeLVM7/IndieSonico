@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Popup </h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('popups.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('popups.fragment.error')


            {!! Form::model($popup, ['route'=>['popups.update',$popup->id], 'method'=> 'PUT','files'=>true]) !!}

            @include('popups.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
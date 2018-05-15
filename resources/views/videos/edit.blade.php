@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Video </h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('videos.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('videos.fragment.error')


            {!! Form::model($video, ['route'=>['videos.update',$video->id], 'method'=> 'PUT','files'=>true]) !!}

                @include('videos.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
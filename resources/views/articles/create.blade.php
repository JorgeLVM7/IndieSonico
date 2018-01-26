@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-11">
                    <h1>Crear Publicación</h1>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-dark" href="{{route('articles.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>

            @include('articles.fragment.error')

            {!! Form::open(['route'=>'articles.store', 'files'=>true]) !!}

            @include('articles.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>

@endsection
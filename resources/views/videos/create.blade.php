@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Crear Publicación</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('articles.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('videos.fragment.info')

                    @include('videos.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'videos.store', 'files'=>true]) !!}

                            @include('videos.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
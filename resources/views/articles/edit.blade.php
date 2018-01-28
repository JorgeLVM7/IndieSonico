@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Artículo </h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('articles.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('articles.fragment.error')


            {!! Form::model($article, ['route'=>['articles.update',$article->id], 'method'=> 'PUT','files'=>true]) !!}

                @include('articles.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
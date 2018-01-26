@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Editar Artículo </h3>
            @include('articles.fragment.error')


            {!! Form::model($article, ['route'=>['articles.update',$article->id], 'method'=> 'PUT','files'=>true]) !!}

                @include('articles.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
    <div class="row justify-content-center">
        <a class="btn btn-outline-dark" href="{{route('articles.index')}}">Cancelar</a>
    </div>
@endsection
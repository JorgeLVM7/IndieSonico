@extends('layout-principal')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-11">
                    <h1>Vista Previa</h1>
                </div>
            </div>
            <hr>
            <div class="col-12">
                {{--Encabezado--}}
                <h4>{{ $article->head }}</h4>
                {{--Descripcion--}}
                <p id="descripcion">{{ $article->description }}</p>
                {{--Cuerpo--}}
                <p class="text-justify">{{ $article->body }}</p>
                {{--Categoria--}}
                <p>{{ $article->category }} - <b>{{ $article->autor }}</b> </p>

                <img src="/images/{{$article->path}}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>

@endsection
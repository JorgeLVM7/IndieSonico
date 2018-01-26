@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-11">
                    <h1>Vista Previa</h1>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-warning" href="{{route('articles.edit',$article->id)}}">Editar</a>
                </div>
            </div>
            <hr>
            <div class="row bw">
                <div class="col-12">
                    <h4>{{ $article->head }}</h4>
                </div>
                <div class="col-12">
                    <img src="/images/{{$article->path}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-12">
                    <p id="descripcion">{{ $article->description }}</p>
                </div>
                <div class="col-12">
                        {!! $article->body !!}
                </div>
                <div class="col-12">
                    <p>{{ $article->category }}</p>
                </div>
                <div class="col-12">
                    <p><b>{{ $article->autor }}</b></p>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <a class="btn btn-outline-dark" href="{{route('articles.index')}}">Regresar</a>
    </div>

@endsection
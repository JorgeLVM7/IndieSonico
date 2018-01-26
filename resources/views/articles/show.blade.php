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
            <div class="col-12">
                {{--Encabezado--}}
                <div class="row">
                    <h4>{{ $article->head }}</h4>
                </div>

                <div class="row">
                    <img src="/images/{{$article->path}}" class="img-fluid" alt="Responsive image">
                </div>




                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                    {{--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>--}}
                {{--</div>--}}

                {{--Descripcion--}}
                <p id="descripcion">{{ $article->description }}</p>
                {{--Cuerpo--}}
{{--                <p class="text-justify">{{ $article->body }}</p>--}}
                <div class="row">
                    {{--<textarea name="" id="" cols="30" rows="10">--}}
                        {!! $article->body !!}
                    {{--</textarea>--}}
                </div>
                <div class="row">
                    <p>{{ $article->category }}</p>
                </div>
                <div class="row">
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
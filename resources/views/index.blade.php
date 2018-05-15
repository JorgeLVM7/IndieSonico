@extends('layouts.indie3')

@section('content-video')
    <div class="container-fluid">
        <div class="row">
            <video width="100%" height="100%" autoplay loop>

                @foreach($videos as $video)
                <source src="../images/{{$video->path}}" type="video/mp4">
                {{--<source src="../logos/indie.ogg" type="video/ogg">--}}
                    @endforeach
            </video>
        </div>
    </div>
    @endsection
{{--Top de 5 noticias --}}
@section('content0')

    @foreach($tops as $top)
        <div id="tops0" class="card" style="border:none !important; margin: 0;">
            <a href="{{ route('show',$top->id) }}">
                <img  class="card-img-top" src="../images/{{$top->path}}" alt="Card image cap" style="height: 112px">
            </a>
            <a href="{{ route('show',$top->id) }}" class="a-corregido2">
                <h5 class="card-title">{{ $top ->head }}</h5>
            </a>
        </div>
    @endforeach

    @foreach($tops1 as $top1)

        <div id="tops1" class="col-6" style="border:none !important; padding: 0;">
            <a href="{{ route('show',$top1->id) }}">
                <img  class="card-img-top" src="../images/{{$top1->path}}" alt="Card image cap" style="height: 112px">
            </a>            <a href="{{ route('show',$top1->id) }}" class="a-corregido2">
                <h5 class="card-title">{{ $top1 ->head }}</h5>
            </a>
        </div>

    @endforeach

@endsection

{{-- Noticia 1--}}
@section('content1')

    @foreach($last_articles as $last_article)

    <div id="" class="carousel slide" data-ride="carousel">
        <a class="a-first-notice" href="{{ route('show',$last_article->id) }}">
            <div class="carousel-inner a-first-notice">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-first-notice card-img-top " src="images/{{$last_article->path}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block caja-first-notice">
                        <a class="a-corregido2" href=""><h1 class="h1-first-notice">{{$last_article->head}}</h1>
                            <p class="p-first-notice">{{$last_article->description}} </p></a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @endforeach

    {{--Espacio de separacion entre ultimo publicacion y las demas --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
            </div>
        </div>
    </div>
    @foreach($articles as $article)

        <div class="row" style="margin-bottom: 10px ">
            <div class="col-sm-6">
                <a href="{{ route('show',$article->id) }}" class="a-corregido2">
                    <h2 class="card-title">{{ $article ->head }}</h2>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p>{{$article->category}} - By {{$article->autor}} </p>
                    </div>
                    {{--<div class="col-6">--}}
                        {{--<div id="" class="row">--}}
                            {{--<a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/show/{{$article->id }}">Twittear</a>--}}
                            {{--<div class="fb-share-button esp" data-href="http://indiesonico.com/show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <br>
            </div>
            <div class="col-sm-6 float-sm-left">
                <div class="row">
                    <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap">
                </div>
            </div>
        </div>
        <hr>

    @endforeach

    @endsection
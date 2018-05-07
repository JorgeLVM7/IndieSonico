@extends('layouts.indie3')

@section('content-video')
    <div class="container-fluid">
        <div class="row">
            <video width="100%" height="100%" autoplay loop>
                <source src="../logos/indie.mp4" type="video/mp4">
                <source src="../logos/indie.ogg" type="video/ogg">
            </video>
        </div>
    </div>
    @endsection
{{--Top de 5 noticias --}}
@section('content0')

    @foreach($tops as $top)
            <div id="tops0" class="card" style="border:none !important;">
                <img class="card-img-top" src="../images/{{$top->path}}" alt="Card image cap" style="height: 112px">
                <a href="{{ route('show',$top->id) }}" class="a-corregido2">
                    <h5 class="card-title">{{ $top ->head }}</h5>
                </a>
            </div>
    @endforeach

    @foreach($tops1 as $top1)


            <div id="tops1" class="col-6">
                <img class="card-img-top" src="../images/{{$top1->path}}" alt="Card image cap" style="height: 112px">
                <a href="{{ route('show',$top1->id) }}" class="a-corregido2">
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
                    <img class="d-block w-100 img-first-notice " src="images/{{$last_article->path}}" alt="First slide">
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

        <div class="row" style="margin-bottom: 10px">
            <div class="col-sm-6">
                        <a href="{{ route('show',$article->id) }}" class="a-corregido2">
                            <h1 class="card-title">{{ $article ->head }}</h1>
                        </a>
                        <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>
                        <p>{{$article->category}}</p>
                        <p>By {{$article->autor}}</p>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap">

                </div>
            </div>
        </div>

    @endforeach

    @endsection
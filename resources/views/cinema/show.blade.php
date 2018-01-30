@extends('layout-principal')

@section('content')

    {{--<div id="carouselExampleSlidesOnly" class="carousel slide fixed-absolute" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 top-ten" src="icons/1.png" alt="First slide">
            </div>
            @foreach($articles as $article)
                <div class="carousel-item ">
                    <img class="d-block w-100 top-ten logo" src="images/{{$article->path}}" alt="">
                    <div class="carousel-caption d-none d-md-block text-carousel">
                        <a class="text-top-ten ">{{$article->head}}</a>
                        <p>
                            <a class="a-corregido" href="">Ver más</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 bw">
                    <div class="card-body">
                        <div class="row ">
                            <h3 class="card-title"><b>{{ $article ->head }}</b></h3>
                        </div>
                        <div class="row ">
                            <img class="card-img-top img-articles" src="../images/{{$article->path}}" alt="Card image cap">
                        </div>
                        <div class="row">
                            <br>
                            <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>
                            <br>
                        </div>
                        <div class="row">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{$article->video}}"></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! $article->body !!}
                            </div>
{{--                        <a href="{{route('cinema.show',$article->id)}}" class="btn btn-info">Ver más</a>--}}
                        <button type="button" class="btn btn-primary">Twitter</button>
                        <button type="button" class="btn btn-primary">Facebook</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row bw">
                        <a class="twitter-timeline" data-lang="es" data-width="350" data-height="200" data-dnt="true" href="https://twitter.com/IndieSonico?ref_src=twsrc%5Etfw">Tweets by IndieSonico</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
        </div>
    </div>
@endsection
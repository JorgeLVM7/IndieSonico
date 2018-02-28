@extends('layout-principal')

@section('content')
    <div id="carouselExampleSlidesOnly" class=" carousel slide fixed-absolute ahi" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 top-ten" src="icons/1.png" alt="First slide">
            </div>
            @foreach($tops as $top)
                <div class="carousel-item ">
                    <img class="d-block w-100 top-ten logo" src="images/{{$top->path}}" alt="">
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 scroll bw">
                @foreach($articles as $article)
                    <div class="card-body">
                        <div class="row ">
                            <h3 class="card-title"><b>{{ $article ->head }}</b></h3>
                        </div>
                        <div class="row ">
                            <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap">
                        </div>
                        <div class="row">
                            <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>
                        </div>
                        <div class="row">
                            <a href="{{ route('random.show',$article->id) }}" class="btn btn-info pse">Ver más</a>
                            <a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/random/{{$article->id }}">Twittear</a>
                            <div class="fb-share-button esp" data-href="http://indiesonico.com/random/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                        </div>
                    </div>
                @endforeach
                {!! $articles->render() !!}
            </div>
            {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
            @include('tw.twit2')
        </div>
    </div>
@endsection
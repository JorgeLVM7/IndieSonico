@extends('layout-principal')

@section('content')

    <br>
    <div id="carouselExampleSlidesOnly" class=" carousel slide fixed-absolute ahi" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 top-ten" src="/icons/1.png" alt="First slide">
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
                <div class="card-body">
                    <div class="row ">
                        <h1 class="card-title">{{ $article ->head }}</h1>
                        <br>
                    </div>
                    <div class="row">
                        <img class="card-img-top img-articles" src="../images/{{$article->path}}" alt="Card image cap">
                        <br>
                    </div>
                    <div class="row">
                        <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>
                        <br>
                    </div>
                    <div class="row">
                        {!! $article->body !!}
                        <br>
                    </div>

                    @if(! empty($article->video))
                        <div class="row">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{$article->video}}"></iframe>
                            </div>
                        </div>
                    @else
                    @endif


                    @if(! empty($article->head_2))
                        <div class="row ">
                            <h1 class="card-title">{{ $article ->head_2 }}</h1>
                            <br>
                        </div>
                    @else
                    @endif

                    @if(! empty($article->path_2))
                        <div class="row">
                            <img class="card-img-top img-articles" src="../images/{{$article->path_2}}" alt="Card image cap">
                            <br>
                        </div>

                    @else
                    @endif

                    @if(! empty($article->description_2))
                        <div class="row">
                            <p class="card-subtitle mb-2  descripcion">{{ $article -> description_2 }}</p>
                            <br>
                        </div>
                    @else
                    @endif

                    @if(! empty($article->body_2))
                        <div class="row">
                            {!! $article->body_2 !!}
                            <br>
                        </div>
                    @else
                    @endif

                    @if(! empty($article->video_2))
                        <div class="row">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{$article->video_2}}"></iframe>
                            </div>
                            <br>
                        </div>
                    @else
                    @endif

                    <br>
                    <div class="row">
                        <br>
                        <p>Categoria: <b>{{$article->category}}</b></p>
                    </div>
                    <div class="row">
                        <p>Posteado por: <b>{{$article->autor}}</b></p>
                    </div>


                    <div class="row">
                        <a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/show/{{$article->id }}">Twittear</a>
                        <div class="fb-share-button esp" data-href="http://indiesonico.com/show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                    </div>
                </div>
            </div>
            {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
            @include('tw.twit2')
        </div>
    </div>
@endsection
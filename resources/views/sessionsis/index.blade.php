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
            <a href="{{ route('show',$top->id.$top->head) }}">
                <img  class="card-img-top" src="../images/{{$top->path}}" alt="Card image cap" style="height: 112px">
            </a>

            <div class="row align-items-center">
                <div class="col-1">
                    <span id="number">{{$top->rownum}}</span>
                </div>
                <div class="col-10 title-tops">
                    <a style="line-height: 1 !important;" href="{{ route('show',$top->id.$top->head) }}" class="a-corregido2 title-tops">
                        {{ $top->head }}
                    </a>
                </div>
            </div>
        </div>

    @endforeach

    @foreach($tops1 as $top1)

        <div id="tops1" class="col-6" style="border:none !important;  padding: 0;">
            <a href="{{ route('show',$top1->id.$top1->head) }}">
                <img  class="card-img-top" src="../images/{{$top1->path}}" alt="Card image cap" style="border-radius:0 !important;height: 112px">
            </a>

            <div class="row align-items-center">
                <div class="col-12 title-tops">
                    <a href="{{ route('show',$top1->id.$top1->head) }}" class="a-corregido2">
                        {{ $top1 ->head }}
                    </a>
                </div>
            </div>
            </a>
        </div>

    @endforeach

    @foreach($tops2 as $top2)

        <div id="tops2" class="col-4" style="border:none !important;  padding: 0;">
            <a href="{{ route('show',$top2->id.$top2->head) }}">
                <img  class="card-img-top" src="../images/{{$top2->path}}" alt="Card image cap" style="border-radius:0 !important;height: 112px">
            </a>

            <div class="row align-items-center">
                <div class="col-1">
                    <span id="number">{{$top2->rownum1}}</span>
                </div>
                <div class="col-10 title-tops">
                    <a style="line-height: 1 !important;" href="{{ route('show',$top2->id.$top2->head) }}" class="a-corregido2 title-tops">
                        {{ $top2->head }}
                    </a>
                </div>
            </div>
        </div>

    @endforeach

@endsection

{{-- Noticia 1--}}
@section('content1')

    {{--@foreach($last_articles as $last_article)--}}

    {{--<div class="row">--}}
    {{--<div class="col-sm-12">--}}
    {{--<div class="row">--}}
    {{--<a href="{{ route('music.show',$last_article->id.$last_article->head) }}" class="a-corregido2">--}}
    {{--<img class="card-img-top" src="images/{{$last_article->path}}" alt="">--}}

    {{--<div class="row first-notice vista-web">--}}
    {{--<div class="texto">--}}
    {{--<b>--}}
    {{--<a href="{{ route('music.show',$last_article->id.$last_article->head) }}" class="a-corregido2">--}}
    {{--<h1 class="text-tablet">--}}
    {{--<b>{{$last_article->head}}</b>--}}
    {{--</h1>--}}
    {{--</a>--}}
    {{--</b>--}}
    {{--<p class="p-first-notice">{{$last_article->description}} </p>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row vista-móvil text-movil-center " >--}}
    {{--<div class="col-sm-12">--}}
    {{--<b>--}}
    {{--<a href="{{ route('music.show',$last_article->id.$last_article->head) }}" class="a-corregido2">--}}
    {{--<h3 class="">--}}
    {{--<b>{{$last_article->head}}</b>--}}
    {{--</h3>--}}
    {{--</a>--}}
    {{--</b>--}}
    {{--<p class="p-first-notice">{{$last_article->description}} </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--@endforeach--}}
    {{--<div class="row">--}}
    {{--<div class="col-12">--}}
    {{--<br>--}}
    {{--</div>--}}

    {{--</div>--}}

    <div class="row">
        @foreach($category_tops as $category_top)


            <div class="col-sm-8">
                <div class="row vista-web">
                    <b>
                        <a href="{{ route('music.show',$category_top->id.$category_top->head) }}" class="a-corregido2">
                            <h3 class="">
                                <b>{{$category_top->head}}</b>
                            </h3>
                        </a>
                    </b>
                </div>
                <br>

            </div>
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">

                <div class="row">
                    <a href="{{ route('music.show',$category_top->id.$category_top->head) }}" class="a-corregido2">
                        <img class="card-img-top" src="images/{{$category_top->path}}" alt="">

                        {{--<div class="row first-notice-category vista-web">--}}
                            {{--<div class="texto-category">--}}
                                {{--<b>--}}
                                    {{--<i>--}}
                                        {{--<span class="title-first-category">MÚSICA</span>--}}
                                    {{--</i>--}}
                                {{--</b>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}
                        {{--<div class="col-12">--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolore natus voluptates. Aperiam, commodi dolorem dolorum excepturi illo impedit maxime molestiae neque nulla odio quae quasi repellendus soluta ullam voluptatibus.</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="row vista-móvil col-12 text-movil-center " >
                            <div class="col-sm-12">
                                <b>
                                    <a href="{{ route('music.show',$category_top->id.$category_top->head) }}" class="a-corregido2">
                                        <h3 class="">
                                            <b>{{$category_top->head}}</b>
                                        </h3>
                                    </a>
                                </b>
                                <p class="p-first-notice">{{$category_top->description}} </p>
                            </div>
                        </div>
                    </a>
                    <div class="row vista-web">
                        <div class="col-sm-12">
                            <p class="descripcion">{{$category_top->description}}</p>
                        </div>
                        <div class="col-12">
                            <p> <i>by</i> {{$category_top->autor}} </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 vista-web">
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, culpa et exercitationem fugiat inventore laboriosam laborum, magnam magni nulla pariatur perferendis quisquam, similique tempora tenetur voluptatum. Dolorum natus omnis sapiente?</p>--}}
            </div>

            <div class="col-sm-8">

            </div>
            <div class="col-sm-4">

            </div>

        @endforeach
    </div>


    {{--Espacio de separacion entre ultimo publicacion y las demas --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
            </div>
        </div>
    </div>




    @foreach($subarticles as $subarticle)

        <div class="row vista-web" style="margin-bottom: 10px ">
            <div class="col-sm-6 ">
                <p>{{$subarticle->category}}</p>
                <a href="{{ route('music.show',$subarticle->id.$subarticle->head) }}" class="a-corregido2">
                    <span class="title-articles"><b>{{ $subarticle ->head }}</b></span>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $subarticle -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p> <i>by</i> {{$subarticle->autor}} </p>
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
            <div class="col-sm-6 ">
                <div class="row">
                    <a href="{{ route('music.show',$subarticle->id.$subarticle->head) }}">
                        <img class="card-img-top img-articles" src="images/{{$subarticle->path}}" alt="Card image cap" style="border-radius:0 !important;">
                    </a>
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>

        <div class="row vista-móvil" style="margin-bottom: 10px ">
            <div class="col-sm-6 ">
                <div class="row">
                    <a href="{{ route('music.show',$subarticle->id.$subarticle->head) }}">
                        <img class="card-img-top img-articles" src="images/{{$subarticle->path}}" alt="Card image cap">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 text-movil-center">
                <a href="{{ route('music.show',$subarticle->id.$subarticle->head) }}" class="a-corregido2">
                    <h2 class="card-title"><b>{{ $subarticle ->head }}</b></h2>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $subarticle -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p><i>by</i> {{$subarticle->autor}} </p>
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

        </div>

    @endforeach

    {{--Espacio de separacion entre las 3 primeras publicaciones  --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <hr>
            </div>
        </div>
    </div>



    @foreach($articles as $article)

        <div class="row vista-web" style="margin-bottom: 10px ">
            <div class="col-sm-6 ">
                <p>{{$article->category}}</p>
                <a href="{{ route('music.show',$article->id.$article->head) }}" class="a-corregido2">
                    <span class="title-articles"><b>{{ $article ->head }}</b></span>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p> <i>by</i> {{$article->autor}} </p>
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
            <div class="col-sm-6 ">
                <div class="row">
                    <a href="{{ route('music.show',$article->id.$article->head) }}">
                        <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap" style="border-radius:0 !important;">
                    </a>
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>

        <div class="row vista-móvil" style="margin-bottom: 10px ">
            <div class="col-sm-6 ">
                <div class="row">
                    <a href="{{ route('music.show',$article->id.$article->head) }}">
                        <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 text-movil-center">
                <a href="{{ route('music.show',$article->id.$article->head) }}" class="a-corregido2">
                    <h2 class="card-title">{{ $article ->head }}</h2>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p><i>by</i> {{$article->autor}} </p>
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

        </div>

    @endforeach
@endsection

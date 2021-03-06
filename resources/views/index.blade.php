@extends('layouts.indie3')

@section('description-site')
    @foreach($description as $descriptio)

        {{ $descriptio->description }}

    @endforeach

@endsection

@section('popup')

    @foreach($popups as $popup)

        @if(! empty($popup->path))
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <a href="{{$popup->description}}">
                            <img  class="card-img-top" src="../images/{{$popup->path}}" alt="" style="width: 100%; height: 100%;">
                        </a>

                    </div>
                </div>
            </div>
        @else

        @endif

    @endforeach
@endsection

@section('content-video')
    <div class="container-fluid">
        <div class="row">
            <video width="100%" height="100%" autoplay loop>

                @foreach($videos as $video)
                <source src="../images/{{$video->path}}" type="video/mp4">
                    @endforeach
            </video>
        </div>
    </div>
    @endsection
{{--Top de 5 noticias --}}
@section('content0')

        @foreach($tops as $top)
        <div id="tops0" class="card" style="border:none !important; margin: 0;">
            <a href="{{ route('home.show',$top->id.'-'.str_slug($top->head)) }}">
                <img  class="card-img-top" src="../images/{{$top->path}}" alt="" style="height: 112px">
            </a>

            <div class="row align-items-center">
                <div class="col-1">
                    <span id="number">{{$top->rownum}}</span>
                </div>
                <div class="col-10 title-tops">
                    <a style="line-height: 1 !important;" href="{{ route('home.show',$top->id.'-'.str_slug($top->head)) }}" class="a-corregido2 title-tops">
                        {{ $top->head }}
                    </a>
                </div>
            </div>
        </div>

    @endforeach

    @foreach($tops1 as $top1)

        <div id="tops1" class="col-6" style="border:none !important;  padding: 0;">
            <a href="{{ route('home.show',$top1->id.'-'.str_slug($top1->head)) }}">
                <img  class="card-img-top" src="../images/{{$top1->path}}" alt="" style="border-radius:0 !important;height: 112px">
            </a>

            <div class="row align-items-center col-12">
                <div class="col-12 title-tops">
                    <a href="{{ route('home.show',$top1->id.'-'.str_slug($top1->head)) }}" class="a-corregido2">
                        {{ $top1 ->head }}
                    </a>
                </div>
            </div>

        </div>

    @endforeach

    @foreach($tops2 as $top2)

        <div id="tops2" class="col-4" style="border:none !important;  padding: 0;">
            <a href="{{ route('home.show',$top2->id.'-'.str_slug($top2->head)) }}">
                <img  class="card-img-top" src="../images/{{$top2->path}}" alt="" style="border-radius:0 !important;height: 112px">
            </a>

            <div class="row align-items-center col-12">
                <div class="col-1">
                    <span id="number">{{$top2->rownum1}}</span>
                </div>
                <div class="col-10 title-tops">
                    <a style="line-height: 1 !important;" href="{{ route('home.show',$top2->id.'-'.str_slug($top2->head)) }}" class="a-corregido2 title-tops">
                        {{ $top2->head }}
                    </a>
                </div>
            </div>
        </div>

    @endforeach

@endsection

{{-- Noticia 1--}}
@section('content1')

    @foreach($last_articles as $last_article)

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <a href="{{ route('home.show',$last_article->id.'-'.str_slug($last_article->head)) }}" class="a-corregido2" style="margin: 0 auto">
                    <img class="card-img-top" src="../images/{{$last_article->path}}" alt="">

                    <div class="row first-notice vista-web">
                        <div class="texto">
                            <b>
                                <a href="{{ route('home.show',$last_article->id.'-'.str_slug($last_article->head))}}" class="a-corregido2 a-destacado" >
                                    <h1 class="text-tablet title-articles">
                                        <b>{{$last_article->head}}</b>
                                    </h1>
                                </a>
                            </b>
                            <p class="p-first-notice">{{$last_article->description}} </p>
                        </div>
                    </div>

                    <div class="row vista-móvil col-12 text-movil-center " >
                        <div class="col-sm-12">
                            <b>
                                <a href="{{ route('home.show',$last_article->id.str_slug($last_article->head)) }}" class="a-corregido2">
                                    <h3 class="title-articles">
                                        <b>{{$last_article->head}}</b>
                                    </h3>
                                </a>
                            </b>
                            <p class="p-first-notice">{{$last_article->description}} </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @endforeach

    <div class="row">
        <div class="col-12">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <br>
        </div>
    </div>

    <div class="row">
    @foreach($category_tops as $category_top)
            <div class="col-sm-8">
                <div class="row vista-web">
                    <b>
                        <a href="{{ route('home.show',$category_top->id.'-'.str_slug($category_top->head)) }}" class="a-corregido2">
                            <h3 class="title-articles">
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
                    <a href="{{ route('home.show',$category_top->id.'-'.str_slug($category_top->head)) }}" class="a-corregido2">
                        <img class="card-img-top" src="../images/{{$category_top->path}}" alt="">

                        {{--<div class="row first-notice-category vista-web">--}}
                            {{--<div class="texto-category">--}}
                                {{--<b>--}}
                                    {{--<i>--}}
                                        {{--<span class="title-first-category">INDIE SONICO</span>--}}
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
                            <div class="col-sm-12 text-center">
                                <b>
                                    <a href="{{ route('home.show',$category_top->id.'-'.str_slug($category_top->head)) }}" class="a-corregido2">
                                        <h3 class="title-articles">
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
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- 1 -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-9317941718146890"
                data-ad-slot="4831809451"
                data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
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
                <a href="{{ route('home.show',$subarticle->id.'-'.str_slug($subarticle->head)) }}" class="a-corregido2">
                    <h1 class="title-articles"><b>{{ $subarticle ->head }}</b></h1>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $subarticle -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p> <i>by</i> {{$subarticle->autor}} </p>
                    </div>
                    {{--<div class="col-6">--}}
                    {{--<div id="" class="row">--}}
                    {{--<a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/home.show/{{$article->id }}">Twittear</a>--}}
                    {{--<div class="fb-share-button esp" data-href="http://indiesonico.com/home.show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <br>
            </div>
            <div class="col-sm-6 ">
                <div class="row">
                    <a href="{{ route('home.show',$subarticle->id.'-'.str_slug($subarticle->head)) }}">
                        <img class="card-img-top img-articles" src="../images/{{$subarticle->path}}" alt="" style="border-radius:0 !important;">
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
                    <a href="{{ route('home.show',$subarticle->id.'-'.str_slug($subarticle->head)) }}">
                        <img class="card-img-top img-articles" src="../images/{{$subarticle->path}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 text-movil-center">
                <a href="{{ route('home.show',$subarticle->id.'-'.str_slug($subarticle->head))}}" class="a-corregido2">
                    <h1 class=" title-articles"><b>{{ $subarticle ->head }}</b></h1>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $subarticle -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p><i>by</i> {{$subarticle->autor}} </p>
                    </div>
                    {{--<div class="col-6">--}}
                    {{--<div id="" class="row">--}}
                    {{--<a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/home.show/{{$article->id }}">Twittear</a>--}}
                    {{--<div class="fb-share-button esp" data-href="http://indiesonico.com/home.show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>--}}
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
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- 1 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9317941718146890"
                     data-ad-slot="4831809451"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <hr>
            </div>
        </div>
    </div>
    @foreach($articles as $article)

        <div class="row vista-web" style="margin-bottom: 10px ">
            <div class="col-sm-6 ">
                <p>{{$article->category}}</p>
                <a href="{{ route('home.show',$article->id.'-'.str_slug($article->head)) }}" class="a-corregido2">
                    <h1 class="title-articles"><b>{{ $article ->head }}</b></h1>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p> <i>by</i> {{$article->autor}} </p>
                    </div>
                    {{--<div class="col-6">--}}
                        {{--<div id="" class="row">--}}
                            {{--<a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/home.show/{{$article->id }}">Twittear</a>--}}
                            {{--<div class="fb-share-button esp" data-href="http://indiesonico.com/home.show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <br>
            </div>
            <div class="col-sm-6 ">
                <div class="row">
                    <a href="{{ route('home.show',$article->id.'-'.str_slug($article->head)) }}">
                        <img class="card-img-top img-articles" src="../images/{{$article->path}}" alt="" style="border-radius:0 !important;">
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
                    <a href="{{ route('home.show',$article->id.'-'.str_slug($article->head)) }}">
                        <img class="card-img-top img-articles" src="../images/{{$article->path}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 text-movil-center">
                <a href="{{ route('home.show',$article->id.'-'.str_slug($article->head)) }}" class="a-corregido2">
                    <h1 class="title-articles"><b>{{ $article ->head }}</b></h1>
                </a>
                <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>

                <div class="row ">
                    <div class="col-12">
                        <p><i>by</i> {{$article->autor}} </p>
                    </div>
                    {{--<div class="col-6">--}}
                    {{--<div id="" class="row">--}}
                    {{--<a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/home.show/{{$article->id }}">Twittear</a>--}}
                    {{--<div class="fb-share-button esp" data-href="http://indiesonico.com/home.show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <br>
            </div>

        </div>

    @endforeach
@endsection

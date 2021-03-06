@extends('layouts.indie3')

@section('head-article')

   - {{$article->head}}

@endsection
{{-- NOTAS DESTACADAS EN ENCABEZADO --}}
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
{{--ARTTICULO COMPLETO--}}
@section('content1')

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-articles"><b>{{ $article ->head }}</b></h1>
                    <p>{{ $article -> description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>By {{$article->autor}}</p>
                </div>
                <div class="col-sm-12">
                    <img class="card-img-top" src="../images/{{$article->path}}" alt="">
                    <p>{{$article->origin_img}}</p>

                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-justify">
                    <p>{!! $article->body !!}</p>
                    <br>
                </div>
            </div>

            @if(! empty($article->video))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{$article->video}}"></iframe>
                        </div>
                        <br>
                    </div>

                </div>
            @else
            @endif

            @if(! empty($article->head_2))
                <div class="row ">
                    <div class="col-sm-12">
                        <h1 class="title-articles"><b>{{ $article->head_2 }}</b></h1>
                    </div>
                    <br>
                </div>
            @else
            @endif

            @if(! empty($article->path_2))
                <div class="row">
                    <div class="col-sm-12">
                        <img class="card-img-top" src="../images/{{$article->path_2}}" alt="">
                        <p>{{$article->origin_img2}}</p>

                        <br>
                    </div>
                </div>

            @else
            @endif

            @if(! empty($article->description_2))
                <div class="row">
                    <div class="col-sm-12">
                        <p class="card-subtitle mb-2  descripcion">{{ $article -> description_2 }}</p>
                        <br>
                    </div>
                </div>
            @else
            @endif

            @if(! empty($article->body_2))
                <div class="row">
                    <div class="col-sm-12 text-justify">
                        <p>{!! $article->body_2 !!}</p>
                        <br>
                    </div>
                </div>
            @else
            @endif

            @if(! empty($article->video_2))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{$article->video_2}}"></iframe>
                        </div>
                        <br>
                    </div>
                </div>
            @else
            @endif
        </div>

        {{-- NOTAS RELACIONADAS DEL LADO DERECHO --}}
        <div id="tops0" class=" col-sm-4">
            <div class="row publicidad-medium">
                <div class="col-sm-12">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    @foreach($mediums as $medium)

                        <div id="" class="col-sm-12">
                            <div id="" class="card" style="border:none !important;">
                                <a href="{{ route('music.show',$medium->id.'-'.str_slug($medium->head))}}">
                                    <img  class="card-img-top" src="../images/{{$medium->path}}" alt="" style="height: 200px">
                                </a>

                                <div class="row align-items-center">
                                    <div class="col-12 title-tops">
                                        <a href="{{ route('music.show',$medium->id.'-'.str_slug($medium->head)) }}" class="a-corregido2">
                                            <h5 class="title-articles-bottoms">{{ $medium ->head }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <br>
        </div>
    </div>


@section('head-facebook')

    <meta property="og:url"           content="https://indiesonico.com/music/{{$article->id }}-{{str_slug($article->head)}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{$article->head}}" />
    <meta property="og:description"   content="{{$article->description}}" />
    {{--<meta property="og:image"         content="../images/{{$article->path}}" />--}}

@endsection

@section('head-twitter')
    <meta name="twitter:image" content="https://indiesonico.com/images/{{$article->path}}" />
    <meta name="twitter:site" content="@IndieSonico" />
    <meta name="twitter:creator" content="@IndieSonico" />
    <meta property="og:url" content="https://indiesonico.com/music/{{$article->id }}-{{str_slug($article->head)}}" />
    {{--<meta property="og:title" content="{{$article->head}}" />--}}
    {{--<meta property="og:description" content="{{$article->description}}" />--}}
    <meta property="og:image"         content="https://indiesonico.com/images/{{$article->path}}" />

    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b1b019d345ddfc6"></script>
@endsection

<div class="row">
    <div class="col-sm-12">
        <div class="addthis_inline_share_toolbox"></div>
    </div>
</div>

<div class="row">
    <br>
</div>

@endsection

{{--NOTAS RELACIONADAS BOTTOM--}}

@section('content-bottoms')

    <div class="row publicidad-bottom">
        <br>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <h1 class="title-articles"><b>Notas Relacionadas</b></h1>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($bottoms as $bottom)

            <div id="botoms0" class="col-sm-4">
                <div id="" class="card" style="border:none !important;">
                    <a href="{{ route('music.show',$bottom->id.'-'.str_slug($bottom->head)) }}">
                        <img  class="card-img-top" src="../images/{{$bottom->path}}" alt="" style="height: 200px">
                    </a>
                    <div class="row align-items-center">
                        <div class="col-12 title-tops">
                            <a href="{{ route('music.show',$bottom->id.'-'.str_slug($bottom->head)) }}" class="a-corregido2">
                                <h6 class="title-articles-bottoms">{{ $bottom ->head }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    <div class="row">
        <div id="bottoms1" class="row col-12 justify-content-around" style="margin: 0 auto;">
            @foreach($bottoms as $bottom)

                <div id="" class="col-6" style="border:none !important; padding: 0;">
                    <a href="{{ route('music.show',$bottom->id.'-'.str_slug($bottom->head)) }}">
                        <img  class="card-img-top" src="../images/{{$bottom->path}}" alt="" style="height: 120px">
                    </a>
                    <div class="row align-items-center">
                        <div class="col-12 title-tops">
                            <a href="{{ route('music.show',$bottom->id.'-'.str_slug($bottom->head)) }}" class="a-corregido2">
                                <h5 class="title-articles-bottoms">{{ $bottom ->head }}</h5>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection

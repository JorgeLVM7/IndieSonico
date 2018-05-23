@extends('layouts.indie3')
{{-- NOTAS DESTACADAS EN ENCABEZADO --}}
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
{{--ARTTICULO COMPLETO--}}
@section('content1')

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <h1><b>{{ $article ->head }}</b></h1>
                    <p>{{ $article -> description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>By {{$article->autor}}</p>
                </div>
                <div class="col-sm-12">
                    <img class="card-img-top" src="../images/{{$article->path}}" alt="Card image cap">
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
                        <h1><b>{{ $article->head_2 }}</b></h1>
                    </div>
                    <br>
                </div>
            @else
            @endif

            @if(! empty($article->path_2))
                <div class="row">
                    <div class="col-sm-12">
                        <img class="card-img-top" src="../images/{{$article->path_2}}" alt="Card image cap">
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
            {{--<p>Publicidad</p>--}}
            {{--<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, aut deserunt doloremque et ex illum magni nam quia. Consequatur consequuntur esse incidunt iste libero molestiae nam nulla quis quos recusandae!</span><span>A accusamus, animi corporis dolorem earum error hic illum impedit modi nihil possimus quibusdam quis repudiandae sequi tenetur unde veritatis vero. Dicta doloribus ex explicabo labore magni quaerat soluta voluptatem?</span><span>Ad amet aut dicta dolores, doloribus eos exercitationem explicabo id minus nemo placeat quam quasi repellendus sint, suscipit tempora temporibus tenetur vero voluptate voluptatum. Cupiditate repellendus, voluptatem! Aperiam, magnam, quibusdam.</span><span>Deleniti ducimus eligendi enim est ex exercitationem facere incidunt magnam nesciunt perspiciatis quas quisquam, repellendus repudiandae, sequi similique suscipit velit. Esse exercitationem minus modi? Aliquid cumque ipsum optio quaerat quisquam?</span><span>Aliquam animi corporis dignissimos eaque, inventore ipsa ipsam magni mollitia necessitatibus nihil obcaecati omnis praesentium quaerat quas quasi quidem quisquam reiciendis repellendus sint tempore velit veritatis voluptas voluptatum? Maxime, officia.</span></p>--}}
            <div class="row">
                <div class="col-sm-12">
                    @foreach($mediums as $medium)

                        <div id="" class="col-sm-12">
                            <div id="" class="card" style="border:none !important;">
                                <a href="{{ route('sessionsis.show',$medium->id.$medium->head) }}">
                                    <img  class="card-img-top" src="../images/{{$medium->path}}" alt="Card image cap" style="height: 150px">
                                </a>

                                <div class="row align-items-center">
                                    <div class="col-12 title-tops">
                                        <a href="{{ route('sessionsis.show',$medium->id.$medium->head) }}" class="a-corregido2">
                                            <h5>{{ $medium ->head }}</h5>
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

    <div class="row col-12">
        <div class="col-sm-12">
            {{--Aqui va  un id="tops1"--}}
            <div id="" class="row">
                <a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/{{$article->id }}">Twittear</a>
                <div class="fb-share-button esp" data-href="http://indiesonico.com/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
            </div>
        </div>
    </div>

    <div class="row">
        <br>
    </div>

@endsection

{{--NOTAS RELACIONADAS BOTTOM--}}

@section('content-bottoms')

    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Notas Relacionadas</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($bottoms as $bottom)

            <div id="botoms0" class="col-sm-4">
                <div id="" class="card" style="border:none !important;">
                    <a href="{{ route('sessionsis.show',$bottom->id.$bottom->head) }}">
                        <img  class="card-img-top" src="../images/{{$bottom->path}}" alt="Card image cap" style="height: 200px">
                    </a>
                    <div class="row align-items-center">
                        <div class="col-12 title-tops">
                            <a href="{{ route('sessionsis.show',$bottom->id.$bottom->head) }}" class="a-corregido2">
                                <h5>{{ $bottom ->head }}</h5>
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
                    <a href="{{ route('sessionsis.show',$bottom->id.$bottom->head) }}">
                        <img  class="card-img-top" src="../images/{{$bottom->path}}" alt="Card image cap" style="height: 120px">
                    </a>
                    <div class="row align-items-center">
                        <div class="col-12 title-tops">
                            <a href="{{ route('sessionsis.show',$bottom->id.$bottom->head) }}" class="a-corregido2">
                                <h5>{{ $bottom ->head }}</h5>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection

{{--@section('content2')--}}
{{--<div class="red">--}}
{{--<div id="twitter"><a class="fa fa-facebook" href=""><img src="/logos/twitter.png" alt=""></a></div>--}}
{{--<div id="facebook">--}}
{{--<div class="fb-share-button esp" data-href="http://indiesonico.com/show/{{ $article ->id }}" data-layout="button" data-size="large " data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a></div>--}}
{{--</div>--}}
{{--<div id="instagram"><a href=""><img src="/logos/instagram.png" alt=""></a></div>--}}
{{--<div id="youtube"><a href=""><img src="/logos/youtube.png" alt=""></a></div>--}}
{{--</div>--}}

{{--@endsection--}}
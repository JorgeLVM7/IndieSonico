@extends('layouts.indie3')

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

@section('content1')

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h1>{{ $article ->head }}</h1>
                    <p>{{ $article -> description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>By {{$article->autor}}</p>
                </div>
                <div class="col-sm-12">
                    <img class="card-img-top img-articles" src="../images/{{$article->path}}" alt="Card image cap">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
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
                        <h1>{{ $article->head_2 }}</h1>
                    </div>
                    <br>
                </div>
            @else
            @endif

            @if(! empty($article->path_2))
                <div class="row">
                    <div class="col-sm-12">
                        <img class="card-img-top img-articles" src="../images/{{$article->path_2}}" alt="Card image cap">
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
                    <div class="col-sm-12">
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

        {{--<div class="col-sm-4">--}}
            {{--<p>Publicidad</p>--}}
            {{--<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, aut deserunt doloremque et ex illum magni nam quia. Consequatur consequuntur esse incidunt iste libero molestiae nam nulla quis quos recusandae!</span><span>A accusamus, animi corporis dolorem earum error hic illum impedit modi nihil possimus quibusdam quis repudiandae sequi tenetur unde veritatis vero. Dicta doloribus ex explicabo labore magni quaerat soluta voluptatem?</span><span>Ad amet aut dicta dolores, doloribus eos exercitationem explicabo id minus nemo placeat quam quasi repellendus sint, suscipit tempora temporibus tenetur vero voluptate voluptatum. Cupiditate repellendus, voluptatem! Aperiam, magnam, quibusdam.</span><span>Deleniti ducimus eligendi enim est ex exercitationem facere incidunt magnam nesciunt perspiciatis quas quisquam, repellendus repudiandae, sequi similique suscipit velit. Esse exercitationem minus modi? Aliquid cumque ipsum optio quaerat quisquam?</span><span>Aliquam animi corporis dignissimos eaque, inventore ipsa ipsam magni mollitia necessitatibus nihil obcaecati omnis praesentium quaerat quas quasi quidem quisquam reiciendis repellendus sint tempore velit veritatis voluptas voluptatum? Maxime, officia.</span></p>--}}
        {{--</div>--}}
    </div>

    <div class="row">
        <div class="col-sm-12">
            {{--Aqui va  un id="tops1"--}}
            <div id="" class="row">
                <a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/show/{{$article->id }}">Twittear</a>
                <div class="fb-share-button esp" data-href="http://indiesonico.com/show/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
            </div>
        </div>
    </div>

    <div class="row">
        <br>
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
@extends('layout-principal')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide fixed-absolute" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 top-ten" src="images/42Firma.jpg" alt="First slide">
            </div>
            @foreach($articles as $article)

                <div class="carousel-item ">
                    <img class="d-block w-100 top-ten" src="images/{{$article->path}}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-top-ten">{{$article->head}}</h3>
                        <p class="text-top-ten">{{$article->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 bw">
                    <div class="row">
                        <div class="col-12">
                            <h1>Contáctanos</h1>
                            {{--<hr>--}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'articles.store', 'files'=>true]) !!}

                            @include('contact.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="row bw">
                        <a class="twitter-timeline" data-lang="es" data-width="350" data-height="350" data-dnt="true" href="https://twitter.com/IndieSonico?ref_src=twsrc%5Etfw">Tweets by IndieSonico</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>

@endsection
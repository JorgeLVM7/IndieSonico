@extends('layout-principal')

@section('content')

    {{--    CAROUSEL    --}}
 {{--   <div id="carouselExampleSlidesOnly" class="carousel slide fixed-absolute" data-ride="carousel">
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
    </div>--}}


@endsection
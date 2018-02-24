@extends('layout-principal')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide fixed-absolute" data-ride="carousel">
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
                        <a href="{{route('random.show',$article->id)}}" class="btn btn-info">Ver</a>
                        <button type="button" class="btn btn-primary">Twitter</button>
                        <button type="button" class="btn btn-primary">Facebook</button>
                    </div>
                @endforeach
                {!! $articles->render() !!}
            </div>
            {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
            @include('tw.twit2')
        </div>
    </div>
@endsection
@extends('layout-principal')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide fixed-absolute" data-ride="carousel">
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

    @endsection
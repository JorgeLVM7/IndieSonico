@extends('layout-principal')

@section('content')
    <br>
    <div id="carouselExampleSlidesOnly" class=" carousel slide fixed-absolute ahi" data-ride="carousel">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 scroll bw">
                @foreach($articles as $article)
                    <div id="{{$article->id}}" class="card-body">

                        {{--Publicacion --}}
                        <div class="row ">
                            <h3 class="card-title"><b>{{ $article ->head }}</b></h3>
                        </div>
                        <div class="row ">
                            <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap">
                        </div>
                        <div class="row">
                            <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>
                        </div>
                        <div class="row">
                            <hr>
                        </div>

                        {{--Contenido a Ocultar --}}

                        <div class="" id="respuesta-ej{{$article->id}}">
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
                                <hr>
                            </div>
                        </div>

                        {{--Botones de Compartir --}}
                        <div class="row">
                            <button href="#{{$article->id}}"type="submit" id="alternar-respuesta-ej{{$article->id}}" onClick="ShowHideElement{{$article->id}}()" class="btn btn-info pse">Ver más</button>
                            <a  class="twitter-share-button esp" data-size="large" href="https://twitter.com/home?status=http%3A//indiesonico.com/move/{{$article->id }}">Twittear</a>
                            <div class="fb-share-button esp" data-href="http://indiesonico.com/move/{{ $article ->id }}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Findiesonico.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                        </div>
                    </div>

                    <script>

                        // $('.caja').hide();
                        $("#respuesta-ej{{$article->id}}").hide();
                        function ShowHideElement{{$article->id}}() {

                            text="";

                            if ($("#alternar-respuesta-ej{{$article->id}}").text()==="Ver más"){
                                $("#respuesta-ej{{$article->id}}").show();
                                text ="Ver menos";
                            }else{
                                $("#respuesta-ej{{$article->id}}").hide();
                                text ="Ver más";
                            }
                            $("#alternar-respuesta-ej{{$article->id}}").html(text);
                        }
                    </script>
                @endforeach
                {!! $articles->render() !!}
            </div>
            {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
            @include('tw.twit2')
        </div>
    </div>
@endsection
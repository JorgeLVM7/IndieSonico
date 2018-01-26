@extends('layout-principal')

@section('content')

    {{--    CAROUSEL    --}}
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

    <br>
    {{--    PUBLICACIONES   --}}
    <div class="row ">
        <div class="col-8 scroll">
            <div class="">
                @foreach($articles as $article)
                    <div class="card-body">
                        ENCABEZADO
                        <h4 class="card-title">{{ $article ->head }}</h4>
                        HORA
                        <h6 class="card-subtitle mb-2 text-muted"> {{$article->updated_at}}</h6>
                        FOTO
                        <img class="card-img-top img-articles" src="images/{{$article->path}}" alt="Card image cap">
                        DESCRIPCION
                        <p class="card-subtitle mb-2 text-muted">{{ $article -> description }}</p>
                        BOTONES DE COMPARTIR
                        <button type="button" class="btn btn-info">Ver más</button>
                        <button type="button" class="btn btn-primary">Twitter</button>
                        <button type="button" class="btn btn-primary">Facebook</button>

                    </div>
                @endforeach
                {!! $articles->render() !!}
            </div>
        </div>

        {{--    PUBLICIDAD  --}}
        <div class="col-4 ">


            <div class="row ">
                <div class="col-12">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque eos eum impedit ipsam natus neque perferendis placeat possimus provident quae reiciendis repellendus sequi totam ut vel, velit vitae voluptatum.</p>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque eos eum impedit ipsam natus neque perferendis placeat possimus provident quae reiciendis repellendus sequi totam ut vel, velit vitae voluptatum.</p>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="col-6">
                        <h3>SÍGUENOS: </h3>
                    </div>
                    <div class="col-6">
                        <span><img src="icons/facebook.png" alt=""></span>
                        <span><img src="icons/instagram.png" alt=""></span>
                        <span><img src="icons/twitter.png" alt=""></span>
                    </div>
                </div>
                <div class="col-12">
                    <p>¿TIENES UNA BANDA ?          <a class="siguenos" href="">ESCRÍBENOS</a>  </p>
                    <p>SUBE TU FOTO/ NOTA /MÚSICA   <a class="siguenos" href="">COLABORA</a>    </p>
                    <p>DUDA / SUGERENCIAS           <a class="siguenos" href="">CONTACTO</a>    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
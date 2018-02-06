<div class="row">
    <div class="col-12">
        <div class="col-6">
            <h3>SÍGUENOS: </h3>
        </div>
        <div class="col-6">
            <span><img src="/icons/facebook.png" alt=""></span>
            <span><img src="/icons/instagram.png" alt=""></span>
            <span><img src="/icons/twitter.png" alt=""></span>
        </div>
    </div>
    <div class="col-12">
        <p>¿TIENES UNA BANDA ?          <a class="siguenos" href="">ESCRÍBENOS</a>  </p>
        <p>SUBE TU FOTO/ NOTA /MÚSICA   <a class="siguenos" href="">COLABORA</a>    </p>
        <p>DUDA / SUGERENCIAS           <a class="siguenos" href="">CONTACTO</a>    </p>
    </div>
</div>




@extends('layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-10">
                <h1>Vista Previa</h1>
            </div>
            <div class="col-1">
                <a class="btn btn-outline-dark float-right" href="{{route('articles.index')}}">Regresar</a>
            </div>
            <div class="col-1 ">
                <a class="btn btn-outline-warning float-right" href="{{route('articles.edit',$article->id)}}">Editar</a>
            </div>
        </div>
        <hr>
        <div class="row ">

            {{-- Etapa 1 --}}
            <div class="col-12">
                <h1>{{ $article->head }}</h1>
                <br>
            </div>


            <div class="col-12">
                <img src="/images/{{$article->path}}" class="img-fluid" alt="Responsive image">
                <br>
            </div>


            <div class="col-12">
                <p id="descripcion">{{ $article->description }}</p>
                <br>
            </div>



            <div class="col-12">
                {!! $article->body !!}
                <br>
            </div>



            @if($article->video ===1)
            <div class="col-12" >
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$article->video}}"></iframe>
                </div>
                <br>
            </div>
            @else

            @endif



            @if($article->head_2==1)
            {{-- Etapa 2 --}}
            <div class="col-12">



                <h1>{{ $article->head_2 }}</h1>
                <br>

            </div>

            @else

            @endif

            @if($article->path_2>0)
            <div class="col-12">
                <img src="/images/{{$article->path_2}}" class="img-fluid" alt="">
                <br>
            </div>

            @else

            @endif



            <div class="col-12">
                <p>{{ $article->description_2 }}</p>
                <br>
            </div>

            @if(isset($article->body_2))

            <div class="col-12">
                {!! $article->body_2 !!}
                <br>
            </div>
            @else
            <p>esta mal</p>
            @endif


            @if($article->vided_2==1)
            <div class="col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$article->video_2}}"></iframe>
                </div>
                <br>
            </div>

            @else

            @endif




            <div class="col-12">
                <p>{{ $article->category }}</p>
            </div>
            <div class="col-12">
                <p><b>{{ $article->autor }}</b></p>
            </div>

        </div>
    </div>
</div>



@endsection
@extends('layout-principal')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 bw">
                <div class="card-body">
                    <div class="row ">
                        <h1 class="card-title">{{ $article ->head }}</h1>
                        <br>
                    </div>
                    <div class="row">
                        <img class="card-img-top img-articles" src="../images/{{$article->path}}" alt="Card image cap">
                        <br>
                    </div>
                    <div class="row">
                        <p class="card-subtitle mb-2  descripcion">{{ $article -> description }}</p>
                        <br>
                    </div>
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


                    <div class="row"><div class="col-12">
                            <button type="button" class="btn btn-primary">Twitter</button>
                            <button type="button" class="btn btn-primary">Facebook</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
            @include('tw.twit2')
        </div>
    </div>
@endsection
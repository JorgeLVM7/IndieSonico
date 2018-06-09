@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Vista Previa</h1>
                </div>
                <div class="col-1">
                    <a class="btn btn-outline-dark float-right" href="{{route('popups.index')}}">Regresar</a>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-warning float-right" href="{{route('popups.edit',$popup->id)}}">Editar</a>
                </div>
            </div>
            <hr>
            <div class="row ">

                {{-- Etapa 1 --}}
                <div class="col-12">
                    <h1>{{ $popup->head }}</h1>
                    <br>
                </div>
                <div class="col-12">
                    <img src="/images/{{$popup->path}}" class="img-fluid" alt="">
                    <br>
                </div>
                <div class="col-12">
                    <p id="descripcion">{{ $popup->description }}</p>
                    <br>
                </div>

                <div class="col-12">
                    {!! $popup->body !!}
                    <br>
                </div>

                @if(! empty($popup->video))
                <div class="col-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{$popup->video}}"></iframe>
                    </div>
                    <br>
                </div>
                @else
                @endif


                @if(! empty($popup->path_2))
                <div class="col-12">
                    <img src="/images/{{$popup->path_2}}" class="img-fluid" alt="">
                    <br>
                </div>
                @else
                @endif









                <div class="col-12">
                    <p>{{ $popup->category }}</p>
                </div>
                <div class="col-12">
                    <p><b>{{ $popup->autor }}</b></p>
                </div>

            </div>
        </div>
    </div>



@endsection
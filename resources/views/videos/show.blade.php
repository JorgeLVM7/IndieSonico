@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Vista Previa</h1>
                </div>
                <div class="col-1">
                    <a class="btn btn-outline-dark float-right" href="{{route('videos.index')}}">Regresar</a>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-warning float-right" href="{{route('videos.edit',$video->id)}}">Editar</a>
                </div>
            </div>
            <hr>
            <div class="row ">

                {{-- Etapa 1 --}}
                <div class="col-12">
                    <h1>{{ $video->name }}</h1>
                    <br>
                </div>
                <div class="col-12">
                    <div class="container-fluid">
                        <div class="row">
                            <video width="100%" height="100%" autoplay loop>
                                <source src="../images/{{$video->path}}" type="video/mp4">
                                {{--<source src="../logos/indie.ogg" type="video/ogg">--}}
                            </video>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>



@endsection
@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Vista Previa</h1>
                </div>
                <div class="col-1">
                    <a class="btn btn-outline-dark float-right" href="{{route('extras.index')}}">Regresar</a>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-warning float-right" href="{{route('extras.edit',$extra->id)}}">Editar</a>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-12">
                    <p id="descripcion">{{ $extra->description }}</p>
                    <br>
                </div>

            </div>
        </div>
    </div>



@endsection
@extends('layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Crear Usuario</h3>

            @include('users.fragment.info')

            @include('users.fragment.error')

            {!! Form::open(['route'=>'users.store']) !!}

            @include('users.fragment.form')

            {!! Form::close() !!}
        </div>
    </div>
    <div class="row justify-content-center">
        <a class="btn btn-outline-dark" href="{{route('users.index')}}">Cancelar</a>
    </div>

    @endsection
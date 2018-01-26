@extends('layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3 class="text-center">
                Editar Usuario
            </h3>
            @include('users.fragment.error')

            {!! Form::model($user, ['route'=>['users.update',$user->id], 'method'=> 'PUT']) !!}

            @include('users.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
    <div class="row justify-content-center">
        <a class="btn btn-outline-dark" href="{{route('users.index')}}">Cancelar</a>
    </div>

    @endsection
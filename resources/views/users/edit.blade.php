@extends('layout')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Editar Usuario</h1>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-outline-dark float-right" href="{{route('users.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>

                    @include('users.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::model($user, ['route'=>['users.update',$user->id], 'method'=> 'PUT']) !!}

                            @include('users.fragment.form2')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
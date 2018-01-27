@extends('layout')

@section('content')
    <div class="cotainer-fluid">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-11">
                            <h1>Crear Usuario</h1>
                        </div>
                        <div class="col-1 ">
                            <a class="btn btn-outline-dark" href="{{route('users.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('users.fragment.info')

                    @include('users.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'users.store']) !!}

                            @include('users.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
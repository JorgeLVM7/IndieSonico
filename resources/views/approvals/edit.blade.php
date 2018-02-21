@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h3>Editar Artículo </h3>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('approvals.index')}}">Cancelar</a>
                </div>
            </div>
            <hr>
            @include('approvals.fragment.error')


            {!! Form::model($approval, ['route'=>['approvals.update',$approval->id], 'method'=> 'PUT','files'=>true]) !!}

            @include('approvals.fragment.form')

            {!! Form::close() !!}

        </div>
    </div>
@endsection
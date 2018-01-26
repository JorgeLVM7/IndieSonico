@extends('layout')


@section('content')
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Vista Previa </h3>
            <div class="row justify-content-end">
                <a href="{{ route('users.edit', $users->id) }}" class="btn btn-outline-warning ">Editar</a>
            </div>
            <h4>
                {{ $users->name }}

            </h4>
            <p>{{ $users->last_name }}</p>
            <p>{{ $users->email }}</p>
            <p>{{ $users->user }}</p>
            <p>{{ $users->level }}</p>

            {{--{!! $users ->body !!}--}}
        </div>
    </div>
    <div class="row justify-content-center">
        <a class="btn btn-outline-dark" href="{{route('users.index')}}">Regresar</a>
    </div>
@endsection
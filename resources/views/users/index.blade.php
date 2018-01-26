@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Usuarios</h1>
            <div class="row justify-content-end">
                <a class="btn btn-outline-dark" href="{{route('users.create')}}">Nuevo</a>
            </div>

            @include('users.fragment.info')
            <table class="table table-hover ">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    {{--<th>Categoria</th>--}}
                    <th colspan="3">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user ->name }}</td>
                        <td>{{ $user ->email }}</td>
                        <td>{{ $user ->password }}</td>
                        <td>
                            <div class="btn-group" role="group">

                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-success" type="button">Ver</a>

                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning" type="button">Editar</a>

                                <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button>
                                </form>

                            </div>
                        </td>
                    </tr>


                @endforeach
                </tbody>

            </table>
            {!! $users->render() !!}
        </div>
    </div>
    @endsection
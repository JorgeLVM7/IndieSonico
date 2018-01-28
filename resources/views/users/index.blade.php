@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Usuarios</h1>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-dark float-right" href="{{route('users.create')}}">Nuevo</a>
                </div>
            </div>
            @include('users.fragment.info')
            <table class="table table-hover ">
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th colspan="3">Nombre</th>
                    <th>Apellido</th>
                    <th colspan="3">Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user ->user }}</td>
                        <td colspan="3">{{ $user ->name }}</td>
                        <td>{{ $user ->last_name }}</td>
                        <td colspan="3">{{ $user ->email }}</td>
                        <td>{{ $user ->level }}</td>
                        <td>
                            <div class="btn-group btn-group-toggle">
                                {{--<a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true" >Ver</a>--}}

                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning" role="button" aria-pressed="true" >Editar</a>

                                <form class="btn-group btn-group-toggle" action="{{ route('users.destroy', $user->id)}}" method="POST">
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
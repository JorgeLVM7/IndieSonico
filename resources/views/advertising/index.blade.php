@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Publicidad</h1>
                </div>
                <div class="col-2">
                    {{--<a class="btn btn-outline-dark float-right" href="{{route('advertising.create')}}">Nuevo</a>--}}
                </div>
            </div>
            @include('advertising.fragment.info')
            <table class="table table-hover ">
                <thead>
                <tr>
                    <th>Encabezado</th>
                    <th>Imagen</th>
                    <th colspan="3">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($advers as $adver)
                    <tr>
                        <td>{{ $adver ->head }}</td>
                        <td>
                            <img src="/images/{{$adver->path}}" class="img-fluid" alt="">
                        </td>

                        <td>
                            <div class="btn-group btn-group-toggle" >
                                <a href="{{ route('advertising.show', $adver->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                <a href="{{ route('advertising.edit', $adver->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

{{--                                <form class="btn-group btn-group-toggle" action="{{ route('advertising.destroy', $adver->id)}}" method="POST">--}}
                                    {{ csrf_field() }}
                                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                                    {{--<button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button>--}}
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $advers->render() !!}
        </div>
    </div>
@endsection
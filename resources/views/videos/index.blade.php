@extends('layout')

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-10">
                  <h1>Videos</h1>
              </div>
              <div class="col-2">
                  <a class="btn btn-outline-dark float-right" href="{{route('videos.create')}}">Nuevo</a>
              </div>
          </div>
          @include('videos.fragment.info')
          <table class="table table-hover ">
              <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Video</th>
                    <th colspan="3">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($videos as $video)
                  <tr>
                      <td>{{ $video ->name }}</td>
                      <td>{{ $video ->path }}</td>
                      <td>
                        <div class="btn-group btn-group-toggle" >
                          <a href="{{ route('videos.show', $video->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                          <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                            <form class="btn-group btn-group-toggle" action="{{ route('videos.destroy', $video->id)}}" method="POST">
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
          {!! $videos->render() !!}
      </div>
  </div>
    @endsection
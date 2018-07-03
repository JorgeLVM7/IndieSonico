@extends('layout')

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-10">
                  <h1>Popups</h1>
              </div>
              <div class="col-2">
                  <a class="btn btn-outline-dark float-right" href="{{route('popups.create')}}">Nuevo</a>
              </div>
          </div>
          @include('popups.fragment.info')
          <table class="table table-hover ">
              <thead>
                <tr>
                    <th>Encabezado</th>
                    <th>URL</th>
                    <th>Categoria</th>
                    <th colspan="3">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($popups as $popup)
                  <tr>
                      <td>{{ $popup ->title }}</td>
                      <td>{{ $popup ->description }}</td>
                      <td>{{ $popup ->category }}</td>
                      <td>
                        <div class="btn-group btn-group-toggle" >
                          <a href="{{ route('popups.show', $popup->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                          <a href="{{ route('popups.edit', $popup->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                            <form class="btn-group btn-group-toggle" action="{{ route('popups.destroy', $popup->id)}}" method="POST">
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
          {!! $popups->render() !!}
      </div>
  </div>
    @endsection
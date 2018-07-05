@extends('layout')

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-10">
                  <h1>Extras</h1>
              </div>
              <div class="col-2">
                  <a class="btn btn-outline-dark float-right" href="{{route('extras.create')}}">Nuevo</a>
              </div>
          </div>
          @include('extras.fragment.info')
          <table class="table table-hover ">
              <thead>
                <tr>
                    <th>Descripción</th>
                    <th colspan="3">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($extras as $extra)
                  <tr>
                      <td>{{ $extra ->description }}</td>
                      <td>
                        <div class="btn-group btn-group-toggle" >
                          <a href="{{ route('extras.show', $extra->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                          <a href="{{ route('extras.edit', $extra->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                            <form class="btn-group btn-group-toggle" action="{{ route('extras.destroy', $extra->id)}}" method="POST">
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
          {!! $extras->render() !!}
      </div>
  </div>
    @endsection
@extends('layout')

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="row">
              <div class="col-10">
                  <h1>Publicaciones</h1>
              </div>
              <div class="col-2">
                  <a class="btn btn-outline-dark float-right" href="{{route('articles.create')}}">Nuevo</a>
              </div>
          </div>
          @include('articles.fragment.info')
          <table class="table table-hover ">
              <thead>
                <tr>
                    <th>Encabezado</th>
                    <th>Descripción</th>
                    <th>Categoria</th>
                    <th colspan="3">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($articles as $article)
                  <tr>
                      <td>{{ $article ->head }}</td>
                      <td>{{ $article ->description }}</td>
                      <td>{{ $article ->category }}</td>
                      <td>
                        <div class="btn-group btn-group-toggle" >
                          <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                          <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                            <form class="btn-group btn-group-toggle" action="{{ route('articles.destroy', $article->id)}}" method="POST">
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
          {!! $articles->render() !!}
      </div>
  </div>
    @endsection
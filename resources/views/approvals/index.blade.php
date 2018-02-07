@extends('layout')

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <h1>Aprobaciones</h1>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Encabezado</th>
                            <th>Categoría</th>
                            <th>Autor</th>
                            <th>Estado</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($approvals as $approval)
                        <tr>
                            <td>{{$approval->head}}</td>
                            <td>{{$approval->category}}</td>
                            <td>{{$approval->autor}}</td>
                            <td>{{$approval->approve}}</td>
                            <td>
                                <div class="btn-group btn-group-toggle" >
                                    <a href="{{ route('approvals.show', $approval->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                    <a href="{{ route('approvals.edit', $approval->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>


                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
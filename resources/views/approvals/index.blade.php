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
    <div class="row">
        <div class="col-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">No Aprobado</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">..2.</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.3..</div>
            </div>
        </div>
    </div>

@endsection
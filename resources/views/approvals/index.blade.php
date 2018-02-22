@extends('layout')

@section('content')
        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-12">--}}
                        {{--<h1>Aprobaciones</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<table class="table table-hover">--}}
                    {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Encabezado</th>--}}
                            {{--<th>Categoría</th>--}}
                            {{--<th>Autor</th>--}}
                            {{--<th>Estado</th>--}}
                            {{--<th colspan="3">Acciones</th>--}}
                        {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($approvals as $approval)--}}
                        {{--<tr>--}}
                            {{--<td>{{$approval->head}}</td>--}}
                            {{--<td>{{$approval->category}}</td>--}}
                            {{--<td>{{$approval->autor}}</td>--}}
                            {{--<td>{{$approval->approve}}</td>--}}
                            {{--<td>--}}
                                {{--<div class="btn-group btn-group-toggle" >--}}
                                    {{--<a href="{{ route('approvals.show', $approval->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>--}}

                                    {{--<a href="{{ route('approvals.edit', $approval->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>--}}


                                {{--</div>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                        {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}



    <div class="row">
        <div class="col-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active approvals" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> <b>No Aprobado</b></a>
                    <a class="nav-item nav-link approvals" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><b>Rechazado</b></a>
                    <a class="nav-item nav-link approvals" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><b>Aprobado</b></a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                {{--Pestaña 1 --}}
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                    <div class="row">
                        <div class="col-12">
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

                {{--Pestaña 2 --}}
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    <div class="row">
                        <div class="col-12">
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
                                @foreach($approvals_decline as $approval_decline)
                                    <tr>
                                        <td>{{$approval_decline->head}}</td>
                                        <td>{{$approval_decline->category}}</td>
                                        <td>{{$approval_decline->autor}}</td>
                                        <td>{{$approval_decline->approve}}</td>
                                        <td>
                                            <div class="btn-group btn-group-toggle" >
                                                <a href="{{ route('approvals.show', $approval_decline->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                                <a href="{{ route('approvals.edit', $approval_decline->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                {{--Pestaña 3 --}}
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                    <div class="row">
                        <div class="col-12">
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
                                @foreach($approvals_acepted as $approval_acepted)
                                    <tr>
                                        <td>{{$approval_acepted->head}}</td>
                                        <td>{{$approval_acepted->category}}</td>
                                        <td>{{$approval_acepted->autor}}</td>
                                        <td>{{$approval_acepted->approve}}</td>
                                        <td>
                                            <div class="btn-group btn-group-toggle" >
                                                <a href="{{ route('approvals.show', $approval_acepted->id) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                                <a href="{{ route('approvals.edit', $approval_acepted->id) }}" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
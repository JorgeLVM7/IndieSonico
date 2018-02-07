@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <h1>Vista Previa</h1>
                </div>
                <div class="col-1">
                    <a class="btn btn-outline-dark float-right" href="{{route('approvals.index')}}">Regresar</a>
                </div>
                <div class="col-1 ">
                    <a class="btn btn-outline-warning float-right" href="{{route('approvals.edit',$approval->id)}}">Editar</a>
                </div>
            </div>
            <hr>
            <div class="row ">

                {{-- Etapa 1 --}}
                <div class="col-12">
                    <h1>{{ $approval->head }}</h1>
                    <br>
                </div>
                <div class="col-12">
                    <img src="/images/{{$approval->path}}" class="img-fluid" alt="">
                    <br>
                </div>
                <div class="col-12">
                    <p id="descripcion">{{ $approval->description }}</p>
                    <br>
                </div>

                <div class="col-12">
                    {!! $approval->body !!}
                    <br>
                </div>

                @if(! empty($approval->video))
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{$approval->video}}"></iframe>
                        </div>
                        <br>
                    </div>
                @else
                @endif

                {{-- Etapa 2 --}}

                @if(! empty($approval->head_2))
                    <div class="col-12">
                        <h1>{{ $approval->head_2 }}</h1>
                        <br>

                    </div>
                @else
                @endif

                @if(! empty($approval->path_2))
                    <div class="col-12">
                        <img src="/images/{{$approval->path_2}}" class="img-fluid" alt="">
                        <br>
                    </div>
                @else
                @endif


                @if(! empty($approval->description_2))
                    <div class="col-12">
                        <p id="descripcion">{{ $approval->description_2 }}</p>
                        <br>
                    </div>

                @else
                @endif


                @if(! empty($approval->body_2))
                    <div class="col-12">
                        {!! $approval->body_2 !!}
                        <br>
                    </div>
                @else
                @endif


                @if(! empty($approval->video_2))
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{$approval->video_2}}"></iframe>
                        </div>
                        <br>
                    </div>
                @else
                @endif




                <div class="col-12">
                    <p>{{ $approval->category }}</p>
                </div>
                <div class="col-12">
                    <p><b>{{ $approval->autor }}</b></p>
                </div>

            </div>
        </div>
    </div>



@endsection
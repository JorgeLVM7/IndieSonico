@extends('layout-principal')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 bw">
                    <div class="row">
                        <div class="col-12">
                            <h1>Contáctanos</h1>
                            {{--<hr>--}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'articles.store', 'files'=>true]) !!}

                            @include('contact.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
                @include('tw.twit2')
            </div>
        </div>

@endsection
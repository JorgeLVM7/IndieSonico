@extends('layout-principal')

@section('content')
    <br>
        {{--<div class="container-fluid">--}}
            <div class="row">
                <div class="col-sm-9 bw">
                    <div class="row">
                        <a class="a-redes" href=""><img class="redes" src="icons/face.jpg" alt=""></a>
                    </div>
                    <div class="row">
                        <a class="a-redes" href=""><img class="redes" src="icons/insta.jpg" alt=""></a>
                    </div>
                    <div class="row">
                        <a class="a-redes" href=""><img class="redes" src="icons/youtube.jpg" alt=""></a>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1>Contáctanos</h1>
                            {{--<hr>--}}
                        </div>
                    </div>
                    @include('contact.fragment.info')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'contact.store']) !!}

                            @include('contact.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                {{-- Col-sm-3 Caja contenedora de Twitter y Publicidad --}}
                @include('tw.twit2')
            </div>
        {{--</div>--}}

@endsection
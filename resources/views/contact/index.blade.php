@extends('layouts.indie3')

@section('content-video')
    <div class="container-fluid">
        <div class="row">
            <video width="100%" height="100%" autoplay loop>

                @foreach($videos as $video)
                    <source src="../images/{{$video->path}}" type="video/mp4">
                    {{--<source src="../logos/indie.ogg" type="video/ogg">--}}
                @endforeach
            </video>
        </div>
    </div>
@endsection

@section('content1')
        {{--<div class="container-fluid">--}}
            <div class="row">
                <div class="col-sm-12 bw">
                    <div class="row follow">
                        <a class="a-redes" href="https://www.facebook.com/indiesonico/"><img class="redes" src="logos/face.jpg" alt="" style="width: 100%"></a>
                    </div>
                    <div class="row follow">
                        <a class="a-redes" href="https://www.instagram.com/indiesonico/"><img class="redes" src="logos/insta.jpg" alt=""></a>
                    </div>
                    <div class="row follow">
                        <a class="a-redes" href="https://www.youtube.com/channel/UC6C4w1GO4iuIZxqjrmLf7YQ"><img class="redes" src="logos/youtube.jpg" alt=""></a>
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

            </div>
        {{--</div>--}}

@endsection
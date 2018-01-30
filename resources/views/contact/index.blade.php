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
                <div class="col-sm-3">

                    <div class="row bw">
                        <a class="twitter-timeline" data-lang="es" data-width="350" data-height="300" data-dnt="true" href="https://twitter.com/IndieSonico?ref_src=twsrc%5Etfw">Tweets by IndieSonico</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>

@endsection
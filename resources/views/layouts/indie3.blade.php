<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description-site')">

    @yield('head-facebook')
    @yield('head-twitter')

    {{--Google Analyttics --}}

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121457529-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121457529-1');
    </script>
    {{--Google AdSense --}}

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9317941718146890",
            enable_page_level_ads: true
        });
    </script>



    <title>Indie Sonico - @yield('head-article')</title>
    <link rel="icon" href="/css/favicon.ico">
    <script src="/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script>

        {{-- Popup --}}
        $(document).ready(function()
        {
            setTimeout(function () {
            $("#exampleModalCenter").modal("show");

        },10000);

            setTimeout(function() {
                $("#exampleModalCenter").modal("hide");
            },40000);

        });


        // Notificacion de suscriptores

        $(document).ready(function() {
            // show the alert
        setTimeout(function() { $(".alert").alert('close'); }, 2000);

        });

    </script>

</head>
<body>
{{--Publiciddad --}}
@yield('popup')


{{-- Video de encabezado --}}
@yield('content-video')

{{--Menu Pincipal --}}
    <nav class="navbar navbar-expand-lg navbar-dark  h-insonico sticky-top">
        <div class="container">
            <a class="navbar-brand menu-top-iphone5 menu-top-iphone4" href="{{route('index')}}">
                <img style="width: 60%" src="/logos/logo.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link a-corregido" href="{{route('music.index')}}">Música</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a-corregido" href="{{route('move.index')}}">Moviendo el Indie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a-corregido" href="{{route('sessionsis.index')}}">Sesiones IS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a-corregido" href="{{route('entertainment.index')}}">Entretenimiento</a>
                    </li>


                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link a-corregido" href="{{route('contact.index')}}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link a-corregido" data-toggle="modal" data-target="#exampleModal" data-whatever="">Suscríbete</a>
                    </li>
                </ul>

            </div>

            </div>

    </nav>


{{-- Model de suscriptores --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="exampleModalLabel">Novedades</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-dark">


                {!! Form::open(['route'=>'subscribers.store']) !!}

                @include('subscribers.fragment.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @include('subscribers.fragment.info')
        @include('subscribers.fragment.error')

    </div>
</div>

{{--Contenido del sitio --}}

    <div class="container blanco">
        <div class="row">
            <br>
        </div>
        <div class="row">

            <div id="caja-tops0" class="col-sm-12 card-group">
                @yield('content0')
            </div>

            <div id="caja-tops1" class="row col-12 " style="margin: 0 auto; padding: 0;">
                @yield('content0')
            </div>

        </div>
    </div>

    <div class="container blanco">
        <div class="row publicidad-top">
            <div class="col-sm-12">
                <br>
            </div>
        </div>

        @yield('content1')

        @yield('content-bottoms')

    </div>


{{--</div>--}}
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <br>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="logo-indie mx-auto d-block" style="width: 80%" src="/logos/logo.png" alt="">
                    <p class="p-d-reservados">Todos los derechos reservados de Indie Sonico 2018</p>

                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="title-articles">ACERCA DE NOSOTROS</h6>
                            <p>Somos un medio digital especializado en Música y Entretenimiento.
                                Estamos Moviendo el Indie !</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h4 class="title-articles">SÍGUENOS</h4>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-3 text-center">
                                    <a href="https://twitter.com/IndieSonico">
                                        <img class="icons-redes"  src="/logos/tw.png" alt="">
                                    </a>
                                </div>
                                <div class="col-3 text-center">
                                    <a href="https://www.instagram.com/indiesonico/">
                                        <img class="icons-redes"  src="/logos/insta.png" alt="">
                                    </a>
                                </div>
                                <div class="col-3 text-center">
                                    <a href="https://www.youtube.com/channel/UC6C4w1GO4iuIZxqjrmLf7YQ">
                                        <img class="icons-redes"  src="/logos/ytb.png" alt="">
                                    </a>
                                </div>
                                <div class="col-3 text-center">
                                    <a href="https://www.facebook.com/indiesonico/">
                                        <img class="icons-redes" src="/logos/facebook.png" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {{--<p>Suscrbirse</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@yield('content2')


<script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));</script>




<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>
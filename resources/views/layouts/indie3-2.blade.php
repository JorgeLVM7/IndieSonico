<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head-facebook')

    <title>Indie Sonico</title>
    <link rel="icon" href="/css/favicon.ico">
    <script src="/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/css/style.css">

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-7250274927102411",
            enable_page_level_ads: true
        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

@yield('content-video')
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
                </ul>

            </div>

            </div>
    </nav>


    <div class="container-fluid bg-yellow follow">

        <div class="container">
            <div class="row">
                <br>
            </div>
        </div>

            @yield('content1')

    </div>
    <div class="container-fluid bg-yellow vista-web">

        <div class="container">
            <div class="row">
                <br>
            </div>
        </div>

        <div class="container">
            @yield('content1')

        </div>


    </div>
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
                    <div class="row text-left">
                        <div class="col-12">
                            <h6 class="title-articles">ACERCA DE NOSOTROS</h6>
                            <p>Somos un medio digital especializado en Música y Entretenimiento.
                                Estamos Moviendo el Indie !</p>
                        </div>
                        {{--<div class="col-sm-6">--}}
                            {{--<ul class="navbar-nav ml-auto">--}}

                                {{--<li class="nav-item ">--}}
                                    {{--<a class="nav-link a-corregido a-footer" href="{{route('music.index')}}">Música</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item ">--}}
                                    {{--<a class="nav-link a-corregido a-footer" href="{{route('move.index')}}">Moviendo el Indie</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6">--}}
                            {{--<ul class="navbar-nav ml-auto">--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link a-corregido a-footer" href="{{route('sessionsis.index')}}">Sesiones Indie Sonico</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link a-corregido a-footer" href="{{route('entertainment.index')}}">Entretenimiento</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="col-12">--}}
                            {{--<ul class="navbar-nav ml-auto">--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link a-corregido a-footer" href="{{route('contact.index')}}">Contacto</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
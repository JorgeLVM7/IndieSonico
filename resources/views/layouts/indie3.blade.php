<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indie Sonico</title>
    <link rel="icon" href="/css/favicon.ico">
    <script src="/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

@yield('content-video')
    <nav class="navbar navbar-expand-lg navbar-dark  h-insonico sticky-top">
        <div class="container">
            <a class="navbar-brand menu-top-iphone5 menu-top-iphone4" href="{{route('index')}}"><img style="width: 60%" src="/logos/logo.png" alt=""></a>

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
                    <li class="nav-item">
                        <a class="nav-link a-corregido" href="{{route('contact.index')}}">Contacto</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row">
        <div id="tops0" class="col-sm-12">
            <div id="tops0" class="card-group">
                @yield('content0')
            </div>
        </div>

        <div id="tops1" class="row justify-content-around">
            @yield('content0')
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <br>
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-12">--}}
            {{--<div class="leaderboard-ad " style="display: block;">--}}
                {{--<div id="gpt-leaderboard-ad" class="ad-container"><div id="gpt_lb_a" class="gpt-adslot noskim" data-cb-ad-id="ATF LB" data-google-query-id="COHLkKDHx9oCFUdgAQodWVIBaA" style=""><div id="google_ads_iframe_/36117602/hdm-cosmopolitan/style-beauty/article-d-atf_0__container__" style="border: 0pt none; display: inline-block; width: 728px; height: 90px;"><iframe frameborder="0" src="https://tpc.googlesyndication.com/safeframe/1-0-23/html/container.html" id="google_ads_iframe_/36117602/hdm-cosmopolitan/style-beauty/article-d-atf_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="728" height="90" data-is-safeframe="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" style="border: 0px; vertical-align: bottom;"></iframe></div></div></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    @yield('content1')

</div>


    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <br>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img style="width: 80%" src="/logos/logo.png" alt="">
                </div>
                <div class="col-sm-8">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link a-corregido" href="{{route('music.index')}}">Música</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link a-corregido" href="{{route('move.index')}}">Moviendo el Indie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link a-corregido" href="{{route('sessionsis.index')}}">Sesiones Indie Sonico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link a-corregido" href="{{route('entertainment.index')}}">Entretenimiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link a-corregido" href="{{route('contact.index')}}">Contacto</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row text-center">
                <div class="col-sm-12">
                    <p>Todos los derechos reservados de Indie Sonico 2018</p>
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
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
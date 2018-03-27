<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InsonicoV2</title>

    <script src="/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top h-insonico">
    <div class="container-fluid">
    <a class="navbar-brand menu-top-iphone5 menu-top-iphone4" href="{{route('index')}}"><img style="width: 75%" src="/icons/white-logo1.jpg" alt=""></a>

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
                <a class="nav-link a-corregido" href="{{route('post.index')}}">Artículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-corregido" href="{{route('concert.index')}}">Conciertos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-corregido" href="{{route('cinema.index')}}">Cine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-corregido" href="{{route('random.index')}}">Random</a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-corregido" href="{{route('contact.index')}}">Contacto</a>
            </li>

        </ul>
    </div>
    </div>
</nav>

<div class="container-fluid  posts ">
    <div class="row">
        <div class="col-2 c-banner2" >
            <br>
            @foreach($banners1 as $banner1)

            <img class="banner2" src="/images/{{$banner1->path}}" alt="">
                @endforeach
            {!! $banners1->render() !!}
        </div>
        <div class="col-8 centro">
            @yield('content')
        </div>
        <div class="col-2 c-banner2">
            <br>
            @foreach($banners2 as $banner2)

                <img class="banner2" src="/images/{{$banner2->path}}" alt="">
            @endforeach
            {!! $banners2->render() !!}
        </div>
    </div>





</div>

{{--<script type="text/javascript">--}}
    {{--// jQuery--}}
    {{--$(document).ready(function(){--}}
        {{--$('#alternar-respuesta-ej1').on('click',function(){--}}
            {{--$('#respuesta-ej1').toggle('slow');--}}
        {{--});--}}
    {{--});--}}

{{--</script>--}}

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
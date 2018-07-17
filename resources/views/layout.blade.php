<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indie Sonico</title>

    <link rel="stylesheet" href="/css/style.css">

    <!-- Select del bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>

    <link rel="stylesheet" href="/plugins/trumbowig/ui/trumbowyg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark h-insonico">
    <a class="navbar-brand" href="{{route('articles.index')}}">
        <img src="/logos/white-logo1.jpg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link a-corregido" href="{{route('articles.index')}}">Artículos <span class="sr-only">(current)</span></a>
            </li>
            
            @if(Auth::user()->level==="Administrador")

                <li class="nav-item">
                    <a class="nav-link a-corregido" href="{{route('approvals.index')}}">Aprobaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-corregido" href="{{route('users.index')}}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-corregido" href="{{route('videos.index')}}">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-corregido" href="{{route('popups.index')}}">Popups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-corregido" href="{{route('subscribers.create')}}">Suscripciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a-corregido" href="{{route('extras.index')}}">Extras</a>
                </li>

            @else


            @endif
        </ul>

        {{--Usuario--}}

        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle a-corregido " data-toggle="dropdown" role="button"
                       aria-expanded="false">
                        {{ Auth::user()->name }} - {{Auth::user()->level}}<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu ul-logout" role="menu">
                        <li class="li-logout">
                            <a class="a-logout" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>


    </div>
</nav> 
@if (session()->has('flash'))
    <div class="container">
        <div class="alert alert-success">{{ session('flash') }}</div>
    </div>
@endif

<div class="container bw">
    <br>
    @yield('content')

</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="/plugins/trumbowig/trumbowyg.min.js"></script>
<script src="/js/util.js"></script>

<!-- Js del select multiple -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>

<script type="text/javascript">
    $('#example-onSelectAll').multiselect({
        includeSelectAllOption: true,
        onSelectAll: function(recipient_id) {
            alert('');
        }
    });
</script>


{{-- Select2--}}
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

{{--Select2 script from CDN--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



</body>
</html>
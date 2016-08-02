<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="comparador, energias, energeticos, servicios, empresas">
    <meta name="description" content="Blog sobre energias y comparador de servicios energeticos"/>
    <title>Elige energía @yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}"/>

  </head>
<body class="body-color">
    @include('layouts.partials.blog._header')
    <div class="navbackground"></div>
    <div class="container" id="mid">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Información</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                        @yield('content')
                        </div>
                        <div class="col-md-2 divide-menu">
                            <h4>Navegación</h4>
                            <ul class="nav nav-pills nav-stacked">
                              <li role="presentation" {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="{{url('home')}}">Home</a></li>
                              <li role="presentation" {{{ (Request::is('post') ? 'class=active' : '') }}}><a href="#">Artículos</a></li>
                              <li role="presentation" {{{ (Request::is('user') ? 'class=active' : '') }}}><a href="{{route('home.user.list')}}">Usuarios</a></li>
                              <li role="presentation" {{{ (Request::is('engine') ? 'class=active' : '') }}}><a href="#">Comparador</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>

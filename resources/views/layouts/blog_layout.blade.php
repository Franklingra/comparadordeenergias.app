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
  <body>
    @include('layouts.partials.blog._header')
    
    @yield('content')
    
    @yield('aside')
    
    @yield('footer')
    
    @yield('scripts')
  </body>
<html>
@extends('layouts.dashboard_layout')

@section('title')
 Home
@endsection

@section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Home
            <small>Panel de administración para usuarios</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
        </ol>
    </section>
@endsection

@section('second_title')
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Home</h3>
        <div class="box-tools pull-right">
            <button type="button" 
                    class="btn btn-box-tool" 
                    data-widget="collapse" 
                    data-toggle="tooltip" 
                    title="Collapse">

                <i class="fa fa-minus"></i>

            </button>
            <button type="button" 
                    class="btn btn-box-tool" 
                    data-widget="remove" 
                    data-toggle="tooltip" 
                    title="Remove">

                <i class="fa fa-times"></i>

            </button>
        </div>
     </div>
@endsection

@section('content')
    <h3>Bienvenido {{ Auth::user()->first_name}}</h3>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Artículos creados</span>
                <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Páginas</span>
                <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Comentarios</span>
                <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
        </div>
          <!-- /.info-box -->
    </div>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Servicios agregados</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    
    <p>
        Este es el panel de administración para usuarios registrados en eligenergia.es, 
        eligenergia.es es un sitio web donde podrás manejar contenidos de 
        distintas formas y a través de distintas funciones que el mismo sitio 
        te ofrece. En esta pequeña introducción te diremos algunas de ellas. 
    </p>
    <p>
        Para empezar deberás conocer los tipos de usuarios dentro de 
        eligenergia.es entre ellos tenemos: 
    </p>
    <ul>
        <li class="text-blue">Administradores</li>
        <li class="text-green">Editores</li>
        <li class="text-red">Autores</li>
    </ul>
    <p>
        <strong class="text-blue">Administradores:</strong> Estos son los usuarios con mayor rango dentro de 
        eligenergia.es, como funciones destacadas tienen el poder invitar a 
        personas a registrarse dentro del mismo sitio web.  Entre otras 
        funciones podrán 
    </p>
    <ul>
        <li>Crear páginas</li>
        <li>Eliminar Páginas </li>
        <li>Editar Páginas</li>
        <li>Crear artículos</li>
        <li>Eliminar artículos</li>
        <li>Editar artículos</li>
        <li>Aprobar artículos creados por otros usuarios</li>
    </ul>
    <p>
        <strong class="text-green">Editores:</strong> Los editores a pesar de poseer un rango menor, tiene la 
        principal función de revisar y aprobar artículos que los autores hayan 
        creado. Dentro de las principales funciones de un editor están:
    </p>
    <ul>
        <li>Crear artículos</li>
        <li>Editar artículos</li>
        <li>Eliminar artículos</li>
        <li>Aprobar artículos creados por otros usuarios</li>
    </ul>
    <p>
        <strong class="text-red">Autores</strong> Entre las principales funciones que un autor tiene: 
    </p>
    <ul>
        <li>Crear artículos </li>
        <li>Eliminar artículos propios</li>
        <li>Editar artículos propios</li>
    </ul>
@endsection

@section('scripts')

@endsection

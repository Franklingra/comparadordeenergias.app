@extends('layouts.dashboard_layout')
    @section('title')
    artículos
    @endsection
    
    @section('content_header')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Artículos
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-quote-left"></i> Artículos</a></li>
                 <li class="active"><a href="#">Lista</a></li>
            </ol>
        </section>
    @endsection
    
    @section('second_title')
        <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Lista de artículos</h3>
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
        <h3>Lista de artículos</h3>
        <div class="row">
            <div class="col-md-8">
                {!! Form::open(array('route' => 'home.post.index', 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search')) !!}
                    <div class="input-group margin">
                            {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Escribe el titulo')) !!}
                            <span class="input-group-btn">
                                <input type="submit" name="Buscar" class="btn btn-info btn-flat" value="buscar">
                                
                            </span>
                        </div>
                {!! Form::close() !!}
                
            </div>
            <div class="col-md-4">
                <a href="{{route('home.post.create')}}" class="btn btn-sm btn-info btn-outline col-md-offset-6">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Crear nuevo artículo
                </a>
            </div>
        </div>
        <br/>
        @include('blog.partials._list')
    @endsection
     @section('footer_box')
        <p class="pull-left">{{Carbon\Carbon::today()->format('Y-m-d')}}</p>
        <p class="pull-right">{{$posts->total()}} Artículos creados</p>
    @endsection
@extends('layouts.dashboard_layout')
    @section('title')
    usuarios
    @endsection
    
    @section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-quote-left"></i> Usuarios</a></li>
             <li class="active"><a href="#">Lista</a></li>
        </ol>
    </section>
    @endsection
    
    @section('second_title')
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de usuarios</h3>
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
    <div class="row">
            <div class="col-md-12">
                <div class="input-group margin pull-left">
                    {!! Form::open(array('route' => 'home.user.index', 'method' => 'GET', 'class' => '', 'role' => 'search')) !!}
                        <div class="input-group margin">
                            {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Escribe un nombre')) !!}
                            <span class="input-group-btn">
                                <input type="submit" name="Buscar" class="btn btn-info btn-flat">
                                
                            </span>
                        </div>
                    {!! Form::close() !!}
                </div>        
                
            </div>
            <div class="col-md-12">
                @include('user.partials._list')
            </div>
        </div>
    @endsection
    
    @section('footer_box')
        <p class="pull-left">{{Carbon\Carbon::today()->format('Y-m-d')}}</p>
        <p class="pull-right">{{$users->total()}} Usuarios registrados</p>
    @endsection

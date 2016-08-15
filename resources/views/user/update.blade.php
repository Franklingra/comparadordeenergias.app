@extends('layouts.dashboard_layout')
    @section('title')
        Editar datos {{$user->first_name}}
    @endsection
    
    @section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-quote-left"></i> Usuarios</a></li>
             <li><a href="#">Lista</a></li>
             <li class="active"><a href="#">Editar usuario</a></li>
        </ol>
    </section>
    @endsection
    
    @section('second_title')
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Editar usuario</h3>
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
            <div class="col-md-9 col-md-offset-1">
        <h4>Editar datos de {{$user->first_name}}</h4>
        {!! Form::model($user, ['id' => 'form1','method' => 'PUT', 'action' => ['UserController@update',$user->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
            
            @include('user.partials._register_form')
            <!-- submit button -->
            <di class="col-md-2 col-md-offset-8">
                {!! Form::submit('Actualizar', array('class' => 'btn btn-block btn-info')) !!}
            </di>
        {!! Form::close() !!}
        </div>
        </div>
    @endsection
    @section('footer_box')
        <p class="pull-left">{{Carbon\Carbon::today()->format('Y-m-d')}}</p>
        <p class="pull-right">Datos de {{$user->first_name}} {{$user->last_name}}</p>
    @endsection
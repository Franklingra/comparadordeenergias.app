@extends('layouts.dashboard_layout')
    @section('title')
    invitar usuario
    @endsection
    
    @section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuarios
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-quote-left"></i> Usuarios</a></li>
             <li class="active"><a href="#">Invitar usuario</a></li>
        </ol>
    </section>
    @endsection
    
    @section('second_title')
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Inivitar usuario</h3>
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
        <div class="col-md-4 col-md-offset-4">
            <form enctype="multipart/form-data" 
                  action="{{ route('invite.user.sent') }}" 
                  method="POST" role="form" class="form-horizontal">
                
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Escribé el correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Escribé el nombre del invitado">
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-block btn-info">Envíar invitación</button>
                </div>
            </form>    
        </div>
    </div>
    @endsection

    @section('footer_box')
        <p class="pull-left">{{Carbon\Carbon::today()->format('Y-m-d')}}</p>
        
    @endsection
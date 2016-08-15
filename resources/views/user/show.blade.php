@extends('layouts.profile_layout')
    @section('title')
    usuarios
    @endsection
    
    @section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Perfil de {{ Auth::user()->first_name }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-quote-left"></i> Usuarios</a></li>
             <li class="active"><a href="#">perfil</a></li>
        </ol>
    </section>
    @endsection

    
    @section('content')
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="../../../uploads/avatar/{{ Auth::user()->avatar}}" alt="User profile picture">
        
                      <h3 class="profile-username text-center">
                          {{ Auth::user()->first_name}}
                          {{ Auth::user()->last_name}}
                      </h3>
                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>Artículos creados</b> <a class="pull-right">{{ $user->posts()->count() }}</a>
                        </li>
                        </li>
                      </ul>
                      @if(Auth::user()->id == $user->id)
                         <a href="{{route('home.user.edit', $user)}}" class="btn btn-primary btn-block"><b>Editar</b></a>
                      @endif
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">sobre mi</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <p>
                            {{ Auth::user()->biography }}
                        </p>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            
            <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Actividad</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
            
        </div>
    @endsection
    
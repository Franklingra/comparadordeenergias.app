@extends('layouts.dashboard_layout')
    @section('title')
    | usuarios
    @endsection
    @section('content')
        <h3>Lista de usuario</h3>
        <div class="row">
            <div class="col-md-8">
                {!! Form::open(array('route' => 'home.user.index', 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search')) !!}
                    <div class="form-group">
                        {!! Form::text('first_name', null, array('class' => 'form-control input-sm push-left', 'placeholder' => 'Escribe un nombre')) !!}
                    </div>
                    <button class="btn btn-sm btn-default btn-outline">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        Buscar
                    </button>
                {!! Form::close() !!}
                
            </div>
            <div class="col-md-4">
                <a href="{{route('invite.user.send')}}" class="btn btn-sm btn-info btn-outline col-md-offset-7">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Invitar usuario
                </a>
            </div>
        </div>
        <br/>
        @include('user.partials._list')
    @endsection
    @yield('scripts')
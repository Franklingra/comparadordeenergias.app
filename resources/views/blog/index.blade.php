@extends('layouts.dashboard_layout')
    @section('title')
    | Artículos
    @endsection
    @section('content')
        <h3>Lista de artículos</h3>
        <div class="row">
            <div class="col-md-8">
                {!! Form::open(array('route' => 'home.post.index', 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search')) !!}
                    <div class="form-group">
                        {!! Form::text('title', null, array('class' => 'form-control input-sm push-left', 'placeholder' => 'Título del artículo')) !!}
                    </div>
                    <button class="btn btn-sm btn-default btn-outline">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        Buscar
                    </button>
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
    @yield('scripts')
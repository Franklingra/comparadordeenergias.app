@extends('layouts.blog_layout')
    @section('title')
       | Iniciar sesión
    @endsection
    @section('content')
    <div class="navbackground"></div>
    <div class="container" id="mid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Iniciar sesión</div>
                    <div class="panel-body">
    
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
    
                            @include('auth.forms.login_form')
    
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Iniciar sesión
                                    </button>
    
                                    <a class="btn btn-link" href="{{ route('password.reset') }}">¿Has olvidado tu contraseña?</a>
                                </div>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @section('scripts')
        @include('layouts.partials.all._scripts')
    @endsection


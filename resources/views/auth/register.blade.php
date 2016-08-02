@extends('layouts.blog_layout')
    @section('title')
       | Registro
    @endsection
    @section('content')
    <div class="navbackground"></div>
    <div class="container" id="mid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('/register') }}">
                            @include('auth.forms.regorupd_form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @section('scripts')
         @include('layouts.partials.all._scripts')
    @endsection

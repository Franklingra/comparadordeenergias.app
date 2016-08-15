@extends('layouts.test_layout')

@section('content')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-box-body">
    <p class="login-box-msg">Registrar nuevo usuario</p>
    {!! Form::open(array('route' => '/register', 'class' => 'form-group')) !!}
    
        <div class="form-group has-feedback">
            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" maxlength="50" placeholder="Escribe tu nombre" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group has-feedback">
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" maxlength="50" placeholder="Escribe tu apellido" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="150" placeholder="Example@example.com" required>
            <span class="fa fa-calendar"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="150" placeholder="Example@example.com" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        
        <div class="row">
        <div class="col-xs-8">
        </div>
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
      
    {!! Form::close() !!}
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->

@endsection

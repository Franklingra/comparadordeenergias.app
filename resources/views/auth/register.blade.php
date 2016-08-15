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
                        {!! Form::open(array('route' => '/register', 'class' => 'form-horizontal')) !!}
                            @include('user.partials._register_form')
                            <!-- Password forms group -->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                {!! Form::label('password', 'Contraseña', array('class' => 'col-md-4 control-label')) !!}
                            
                                <div class="col-md-6">
                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                            
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Comfirm password forms group -->
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                {!! Form::label('password_confirmation', 'Confirmar contraseña', array('class' => 'col-md-4 control-label')) !!}
                            
                                <div class="col-md-6">
                                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                            
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Submit buttom forms group -->
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <!-- submit button -->
                                    {!! Form::submit('Registrar', array('class' => 'btn btn-info btn-outline col-md-offset-9 fa fa-btn fa-user')) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
        <script src="{{URL::asset('js/app.js')}}"></script>
    @endsection

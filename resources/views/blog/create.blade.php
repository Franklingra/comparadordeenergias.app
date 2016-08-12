@extends('layouts.dashboard_layout')
    @section('title')
    | Crear artículo
    @endsection
    @section('content')
        <h3>Crear artículo</h3>
        <div class="row">
            <div class="">
                {!! Form::open(array('route' => 'home.post.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
                    <!-- Title name form group -->
                    <div class="form-group{{ $errors->has('first_name') ? 'has-error' : '' }}">
                        {!! Form::label('title', 'Título', array('class' => 'col-md-1 col-md-offset-1 control-label')) !!}
                        
                        <div class="col-md-9">
                            {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Escribe el título del artículo')) !!}
                            
                            <!-- error block -->
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $error->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Content name form group -->
                    <div class="form-group{{ $errors->has('content') ? 'has-error' : '' }}">
                        {!! Form::label('content', 'Contenido', array('class' => 'col-md-1 col-md-offset-1 control-label')) !!}
                        
                        <div class="col-md-9">
                            {!! Form::textarea('content', null, array('class' => 'form-control', 'id' => 'mytextarea', 'rows' => '5', 'cols' => '3', 'placeholder' => 'Escribe el contenido del artículo')) !!}
                            
                            <!-- error block -->
                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $error->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <!-- image name form group -->
                    <div class="form-group{{ $errors->has('image') ? 'has-error' : '' }}">
                        {!! Form::label('content', 'imágen', array('class' => 'col-md-1 col-md-offset-1 control-label')) !!}
                        
                        <div class="col-md-9">
                            {!! Form::file('image', null, array('class' => 'form-control')) !!}
                            
                            <!-- error block -->
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $error->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Tags name form group -->
                    <div class="form-group{{ $errors->has('first_name') ? 'has-error' : '' }}">
                        {!! Form::label('tags', 'Tags', array('class' => 'col-md-1 col-md-offset-1 control-label')) !!}
                        
                        <div class="col-md-9">
                            {!! Form::text('tags', null, array('class' => 'form-control', 'placeholder' => 'Escribe Tags')) !!}
                            
                            <!-- error block -->
                            @if ($errors->has('tags'))
                                <span class="help-block">
                                    <strong>{{ $error->first('tags') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>                   
                   
                   
                    {!! Form::submit('Crear artículo', array('class' => 'btn btn-info col-md-offset-9')) !!}
                {!! Form::close() !!}
                
            </div>
            
        </div>
        <br/>
        
    @endsection
    @yield('scripts')
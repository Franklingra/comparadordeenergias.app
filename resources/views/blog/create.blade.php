@extends('layouts.dashboard_layout')
    @section('title')
    artículos
    @endsection
    
    @section('content_header')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Artículos
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-quote-left"></i> Artículos</a></li>
                 <li class="active"><a href="#">Lista</a></li>
            </ol>
        </section>
    @endsection
    
    @section('second_title')
        <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Crear artículo</h3>
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
        <h3>Crear artículo</h3>
        <div class="row">
            <div class="">
                {!! Form::open(array('route' => 'home.post.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
                    <!-- Title name form group -->
                    <div class="form-group{{ $errors->has('first_name') ? 'has-error' : '' }}">
                        {!! Form::label('title', 'Título', array('class' => 'col-md-1 col-md-offset-1 control-label')) !!}
                        
                        <div class="col-md-9 input-group">
                            <span class="input-group-addon">@</span>
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
                        
                        <div class="col-md-9 input-group">
                            {!! Form::textarea('content', null, array('class' => 'form-control', 'id' => 'editor1', 'rows' => '5', 'cols' => '3', 'placeholder' => 'Escribe el contenido del artículo')) !!}
                            
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
                        
                        <div class="col-md-9 input-group">
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
                        {!! Form::label('tags', 'Tags', array('class' => 'col-md-1 col-md-offset-1 control-label', 'name' => 'tags')) !!}
                        
                        <div class="col-md-9 input-group">
                            {!! Form::text('tags', null, array('class' => 'form-control', 'placeholder' => 'Escribe Tags', 'id' => 'tags', 'data-role' => 'tagsinput')) !!}
                            
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
     @section('footer_box')
        <p class="pull-left">{{Carbon\Carbon::today()->format('Y-m-d')}}</p>
    @endsection
    @section('scripts')
        <script src="{{ URL::asset('js/dashboard/ckeditor.js') }}"></script>
        <script src="{{ URL::asset('js/dashboard/bootstrap-tagsinput.js') }}"></script>
        <script>
        $(document).ready(function(){
           $("#tags").val()
        });
             $(function () {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                
            }); 
      </script>
    @endsection
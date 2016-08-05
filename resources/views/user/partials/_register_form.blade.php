<!-- First name form group -->
<div class="form-group{{ $errors->has('first_name') ? 'has-error' : '' }}">
    {!! Form::label('first_name', 'Nombres', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Escribe tu nombre')) !!}
        
        <!-- error block -->
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $error->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Last name form group -->
<div class="form-group{{ $errors->has('last_name') ? 'has-error' : '' }}">
    {!! Form::label('last_name', 'Apellidos', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Escribe tu apellido')) !!}
        
        <!-- error block -->
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $error->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Email name form group -->
<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('email', 'Correo electrónico', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Escribe tú correo electrónico')) !!}
        
        <!-- error block -->
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $error->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Birthday name form group -->
<div class="form-group{{ $errors->has('birthday') ? 'has-error' : '' }}">
    {!! Form::label('birthday', 'Fecha de nacimiento', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::date('birthday', null, array('class' => 'form-control', 'placeholder' => 'DD-MM-YYY')) !!}
        
        <!-- error block -->
        @if ($errors->has('birthday'))
            <span class="help-block">
                <strong>{{ $error->first('birthday') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Role name form group -->
<div class="form-group{{ $errors->has('role') ? 'has-error' : '' }}">
    {!! Form::label('role', 'Tipo de cuenta', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::radio('role', 'administrator') !!} Administrador
        {!! Form::radio('role', 'editor') !!} editor
        {!! Form::radio('role', 'author') !!} autor
        
        <!-- error block -->
        @if ($errors->has('role'))
            <span class="help-block">
                <strong>{{ $error->first('role') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Biography name form group -->
<div class="form-group{{ $errors->has('role') ? 'has-error' : '' }}">
    {!! Form::label('biography', 'Acerca de ti', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::textarea('biography', null, array('class' => 'form-control', 'rows' => '3', 'cols' => '3', 'placeholder' => 'Escribe algo acerca de ti')) !!}
        
        <!-- error block -->
        @if ($errors->has('biography'))
            <span class="help-block">
                <strong>{{ $error->first('biography') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Avatar name form group -->
<div class="form-group{{ $errors->has('role') ? 'has-error' : '' }}">
    {!! Form::label('avatar', 'Avatar', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::file('avatar', null, array('class' => 'form-control')) !!}
        
        <!-- error block -->
        @if ($errors->has('biography'))
            <span class="help-block">
                <strong>{{ $error->first('biography') }}</strong>
            </span>
        @endif
    </div>
</div>


<!-- Gender name form group -->
<div class="form-group{{ $errors->has('gender') ? 'has-error' : '' }}">
    {!! Form::label('gender', 'Sexo', array('class' => 'col-md-4 control-label')) !!}
    
    <div class="col-md-6">
        {!! Form::radio('gender', 'm') !!} Masculino
        {!! Form::radio('gender', 'f') !!} Femenino
        
        <!-- error block -->
        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $error->first('gender') }}</strong>
            </span>
        @endif
    </div>
</div>


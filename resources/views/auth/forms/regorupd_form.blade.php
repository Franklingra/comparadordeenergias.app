
{{ csrf_field() }}

<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    <label for="first_name" class="col-md-4 control-label">Nombres</label>

    <div class="col-md-6">
        <input id="first_first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" maxlength="50" placeholder="Ingresa tu nombre" required>

        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label for="last_name" class="col-md-4 control-label">Apellidos</label>

    <div class="col-md-6">
        <input id="first_last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Ingresa tu apellido" maxlength="50" required>

        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">Correo electrónico</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="150" placeholder="Example@example.com" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('datetime-local') ? ' has-error' : '' }}">
    <label for="datetime-local" class="col-md-4 control-label">Fecha de nacimiento</label>

    <div class="col-md-6">
        <input id="datetime-local" type="datetime-local" class="form-control" name="datetime-local" value="{{ old('datetime-local') }}" maxlength="150" placeholder="Example@example.com" required>

        @if ($errors->has('datetime-local'))
            <span class="help-block">
                <strong>{{ $errors->first('datetime-local') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
    <label for="gender" class="col-md-4 control-label">Sexo</label>

    <div class="col-md-6">
          <input type="radio" name="gender" value="m" checked value="{{ old('gender') }}"> Masculino
          <input type="radio" name="gender" value="f" value="{{ old('gender') }}"> Femenino

        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
    <label for="avatar" class="col-md-4 control-label">Avatar</label>

    <div class="col-md-6">
        <input id="avatar" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}">

        @if ($errors->has('avatar'))
            <span class="help-block">
                <strong>{{ $errors->first('avatar') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('biography') ? ' has-error' : '' }}">
    <label for="biography" class="col-md-4 control-label">Sobre ti</label>

    <div class="col-md-6">
        <textarea id="biography" class="form-control" name="biography" value="{{ old('biography') }}" placeholder="Acerca de ti" maxlength="350" cols="3"> </textarea>

        @if ($errors->has('biography'))
            <span class="help-block">
                <strong>{{ $errors->first('biography') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> Register
        </button>
    </div>
</div>
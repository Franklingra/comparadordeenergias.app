<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('/register') }}">
          <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token"/>
          <input type="hidden" id="id" value="">
          <!-- First name forms group -->
          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
              <label for="first_name" class="col-md-4 control-label">Nombres</label>
              
              <div class="col-md-6">
                  <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" maxlength="50" placeholder="Ingresa tus nombres" required>
          
                  @if ($errors->has('first_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <!-- Last name forms group -->
          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
              <label for="last_name" class="col-md-4 control-label">Apellidos</label>
          
              <div class="col-md-6">
                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Ingresa tus apellidos" maxlength="50" required>
          
                  @if ($errors->has('last_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <!-- Email forms group -->
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
          
          <!-- Birthday forms group -->
          <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
              <label for="birthday" class="col-md-4 control-label">Fecha de nacimiento</label>
          
              <div class="col-md-6">
                  <input id="birthday" type="date" class="form-control" name="birthday" placeholder="aaa-mm-dd" value="{{ old('birthday') }}" required>
          
                  @if ($errors->has('birthday'))
                      <span class="help-block">
                          <strong>{{ $errors->first('birthday') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          
          <!-- Gender forms group -->
          <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
              <label for="role" class="col-md-4 control-label">Tipo de cuenta</label>
          
              <div class="col-md-6">
                    <input id="administrator" type="radio" name="role" value="administrator" checked value="{{ old('role') }}"> Administrador
                    <input id="editor" type="radio" name="role" value="editor" value="{{ old('role') }}"> Editor
                    <input id="author" type="radio" name="role" value="Autor" value="{{ old('role') }}"> Autor
          
                  @if ($errors->has('role'))
                      <span class="help-block">
                          <strong>{{ $errors->first('role') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <!-- Gender forms group -->
          <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
              <label for="gender" class="col-md-4 control-label">Sexo</label>
          
              <div class="col-md-6">
                    <input type="radio" id="m" name="gender" value="m" checked value="{{ old('gender') }}"> Masculino
                    <input type="radio" id="f" name="gender" value="f" value="{{ old('gender') }}"> Femenino
          
                  @if ($errors->has('gender'))
                      <span class="help-block">
                          <strong>{{ $errors->first('gender') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          
          <!-- Avatar forms group -->
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
          
          <!-- Biography forms group -->
          <div class="form-group{{ $errors->has('biography') ? ' has-error' : '' }}">
              <label for="biography" class="col-md-4 control-label">Sobre ti</label>
          
              <div class="col-md-6">
                  <textarea id="biography" class="form-control" name="biography" value="{{ old('biography') }}" maxlength="350" cols="3"> </textarea>
          
                  @if ($errors->has('biography'))
                      <span class="help-block">
                          <strong>{{ $errors->first('biography') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="update" type="button" class="btn btn-info">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Enviar invitación</h2>

            <form enctype="multipart/form-data" action="{{ url('/invite/sent') }}" method="POST">

            	<label>Email</label>
            	<input type="email" name="email" required>
                <label>Nombre</label>
                <input type="name" name="name" required maxlength="50">
            	{{ csrf_field() }}
            	
            	<input type="submit" name="subtmit" class="pull-right btn btn-sm btn-primary">

            </form>
        </div>
    </div>
</div>
@endsection
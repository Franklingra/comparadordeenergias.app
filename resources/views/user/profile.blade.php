@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	<img src="/uploads/avatar/{{ $user->avatar}}"/ width="150px" height="150px" style="border-radius:50%; margin-right:25px; float:left">
            <h2>Perfil de {{ $user->first_name }}</h2>

            <form enctype="multipart/form-data" action="{{ url('/profile') }}" method="POST">

            	<label> Actualizar imagen de perfil</label>
            	<input type="file" name="avatar">

            	{{ csrf_field() }}
            	
            	<input type="submit" name="subtmit" class="pull-right btn btn-sm btn-primary">

            </form>
        </div>
    </div>
</div>
@endsection

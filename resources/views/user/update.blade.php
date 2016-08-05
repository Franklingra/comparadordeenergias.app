@extends('layouts.dashboard_layout')
    @section('title')
    | usuarios
    @endsection
    @section('content')
        <h3>Actualizar usuario</h3>
        {!! Form::model($user, ['id' => 'form1','method' => 'PUT', 'action' => ['UserController@update',$user->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
            
            @include('user.partials._register_form')
            <!-- submit button -->
            {!! Form::submit('Actualizar', array('class' => 'btn btn-info btn-outline col-md-offset-9')) !!}
        {!! Form::close() !!}
    @endsection
    @yield('scripts')
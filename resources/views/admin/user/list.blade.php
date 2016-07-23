@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class=".table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Correo electrónico</td>
                        <td>Tipo de cuenta</td>
                        <td>Accion</td>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                            <a href="{{ url('dashboard/user/delete', $user->id) }}">Eliminar</a>
                            | 
                            <a href="{{ url('dashboard/user/edit', 2) }}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

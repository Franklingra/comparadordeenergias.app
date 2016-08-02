@extends('layouts.dashboard_layout')
    @section('title')
    | usuarios
    @endsection
    @section('content')
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
    @endsection
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        
    @endsection
@extends('layouts.dashboard_layout')
    @section('title')
    | usuarios
    @endsection
    @section('content')
        <div class="users">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellido</th>
                            <th class="text-center">Correo electrónico</th>
                            <th class="text-center">Tipo de cuenta</th>
                            <th class="text-center">Avatar</th>
                            <th class="text-center">Opciones</th>
                        </thead>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center">{{$user->first_name}}</td>
                                    <td class="text-center">{{$user->last_name}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->role}}</td>
                                    <td class="text-center"><img class="tableavatar" src="../../uploads/avatar/{{$user->avatar}}" alt="avatar"/></td>
                                    <td class="text-center">
                                        <button class='btn-table btn btn-info btn-sm'>Editar</button>
                                        <button class='btn-table btn btn-danger btn-sm'>Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        <tbody id="data">
                        </tbody>
                    </table>
                </div>
                <h6 class="text-center">{!! $users->render() !!}</h6>
        </div>
                
    @endsection
    @section('scripts')
        <script src="{{URL::asset('js/actions/users/pagination_action.js')}}"></script>
    @endsection
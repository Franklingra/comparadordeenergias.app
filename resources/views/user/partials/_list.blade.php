<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Correo electrónico</th>
            <th class="text-center">Tipo de cuenta</th>
            <th class="text-center">Avatar</th>
            <th class="text-center">Fecha de nacimiento</th>
            <th class="text-center">Sexo</th>
            <th class="text-center">Opciones</th>
        </thead>
        <tbody id="data">
            @foreach($users as $user)
                {!! Form::open(array('id' => 'form1','method' => 'delete', 'action' => ['UserController@destroy',$user->id], 'onsubmit' => 'return confirm("¿Estás seguro de eliminar a este usuario?");', 'files' => 'true')) !!} 
                    <tr>
                        <td class="text-center">{{$user->first_name}}</td>
                        <td class="text-center">{{$user->last_name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">{{$user->role}}</td>
                        <td class="text-center">
                            <img class="tableavatar" 
                                 src="../../uploads/avatar/{{$user->avatar}}" 
                                 alt="avatar"/>
                        </td>
                        <td class="text-center">{{$user->birthday}}</td>
                        <td class="text-center">{{$user->gender}}</td>
                        <td class="text-center">
                            <a class='btn-table btn btn-info btn-outline btn-sm' 
                               href="{{route('home.user.edit', $user)}}">
                                Editar
                            </a>
                            
                            {!! Form::open(array('route' => array('home.user.delete', $user->id), 'method' => 'delete')) !!}
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                {!! Form::submit('Eliminar', array('class' => 'btn-table btn btn-danger btn-outline btn-sm', 'onsubmit' => 'return Confirm("¿Eliminara este usuario?");')) !!}
                        </td>
                    </tr>
                {!! Form::close() !!}
            @endforeach
        </tbody>
    </table>
</div>
<h6 class="text-center">{!! $users->render() !!}</h6>


<div class="table-responsive">
    <table id="example2" class="table table-bordered table-hover dataTable">
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
                {!! Form::open(array('id' => 'form1','method' => 'delete', 'action' => ['UserController@destroy',$user->id], 'onsubmit' => '', 'files' => 'true')) !!} 
                    <tr>
                        <td class="text-center" >{{$user->first_name}}</td>
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
                            <div class="btn-group">
                                <a class='btn  btn-info btn-xs' 
                                   href="{{route('home.user.edit', $user)}}">
                                    Editar
                                </a>
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs btn-delete-user">Eliminar</button>
                                    
                                       
                            </div>
                        </td>
                    </tr>
                {!! Form::close() !!} 
            @endforeach
        </tbody>
    </table>
</div>
<h6 class="text-center">{!! $users->render() !!}</h6>

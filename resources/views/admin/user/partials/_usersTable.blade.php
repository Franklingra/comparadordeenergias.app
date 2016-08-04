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
                                <tr>
                                    <td class="text-center">{{$user->first_name}}</td>
                                    <td class="text-center">{{$user->last_name}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->role}}</td>
                                    <td class="text-center"><img class="tableavatar" src="../../uploads/avatar/{{$user->avatar}}" alt="avatar"/></td>
                                    <td class="text-center">{{$user->birthday}}</td>
                                    <td class="text-center">{{$user->gender}}</td>
                                    <td class="text-center">
                                    
                                        <button class='btn-table btn btn-info btn-sm' OnClick="updateUser(this)"  value="{{$user->id}}" data-toggle="modal" data-target="#myModal">Editar</button>
                                        <button class='btn-table btn btn-danger btn-sm' value="{{$user->id}}" OnClick="destroy(this)">Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h6 class="text-center">{!! $users->render() !!}</h6>
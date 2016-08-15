<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Título</th>
            <th class="text-center">Estatus</th>
            <th class="text-center">Autor</th>
            <th class="text-center">Fecha de creacion</th>
            <th class="text-center">Opciones</th>
        </thead>
        <tbody id="data">
            @foreach($posts as $post)
                {!! Form::open(array('id' => 'form1','method' => 'delete', 'action' => ['PostController@destroy',$post->id], 'onsubmit' => '', 'files' => 'true')) !!} 
                    <tr>
                        <td class="text-center">{{$post->title}}</td>
                        @if ($post->status == 'pending')
                            <td class="text-center">
                                <span class="label label-warning">Pendiente</span>
                            </td>
                        @else
                           <td class="text-center">
                                <span class="label label-success">Publicado</span>
                            </td>
                        @endif
                        <td class="text-center">{{$post->user->first_name}}</td>
                        <td class="text-center">{{$post->created_at->format('d M Y - H:i:s')}}</td>
                        <td class="text-center">
                            <a class='btn  btn-info btn-xs' 
                               href="{{route('home.post.edit', $post)}}">
                                Editar
                            </a>
                            
                            {!! Form::open(array('route' => array('home.post.delete', $post->id), 'method' => 'delete')) !!}
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                {!! Form::submit('Eliminar', array('class' => 'btn btn-danger btn-xs btn-delete-post', 'onsubmit' => '')) !!}
                        </td>
                    </tr>
                {!! Form::close() !!}
            @endforeach
        </tbody>
    </table>
</div>
<h6 class="text-center">{!! $posts->render() !!}</h6>
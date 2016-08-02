@extends('layouts.dashboard_layout')

@section('title')
    | Panel
@endsection

@section('content')
<div class="container space-all" id="mid wrapper">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Información</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                        <h3>Bienvenido {{ Auth::user()->first_name}}</h3>
                        <p>
                            Este es tu panel de administración, en el podrás
                            editar, eliminar y actualizar contenidos relevantes
                            a cualquier artículo que desees administrar.
                         </p>
                         <p>
                             Dentro de este panel tendrás acceso a todas las
                             opciones administrativas dependiendo de tu tipo de
                             cuenta, los admins, son los usuarios con mayores
                             privilegios, seguidos de los editores y los autores.
                         </p>
                         
                            
                            
                            
                        </div>
                        <div class="col-md-2 divide-menu">
                            <h4>Navegación</h4>
                            <ul class="nav nav-pills nav-stacked">
                              <li role="presentation" class="active"><a href="#">Home</a></li>
                              <li role="presentation"><a href="#">Artículos</a></li>
                              <li role="presentation"><a href="#">Usuarios</a></li>
                              <li role="presentation"><a href="#">Comparador</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('layouts.partials.all._scripts')
@endsection

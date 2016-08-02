@extends('layouts.dashboard_layout')

@section('title')
    | Home
@endsection

@section('content')
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
@endsection

@section('scripts')
    @include('layouts.partials.all._scripts')
@endsection

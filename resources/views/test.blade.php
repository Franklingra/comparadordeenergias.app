@extends('layouts.test_layout')

@section('title')
  Página en blanco test
@endsection

@section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Página en blanco
            <small>Subtítulo de la página</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Ejemplos</a></li>
            <li class="active">Página en blanco</li>
        </ol>
    </section>
@endsection

@section('second_title')
    <div class="box-header with-border">
        <h3 class="box-title">Página de muestra</h3>
        <div class="box-tools pull-right">
            <button type="button" 
                    class="btn btn-box-tool" 
                    data-widget="collapse" 
                    data-toggle="tooltip" 
                    title="Collapse">

                <i class="fa fa-minus"></i>

            </button>
            <button type="button" 
                    class="btn btn-box-tool" 
                    data-widget="remove" 
                    data-toggle="tooltip" 
                    title="Remove">

                <i class="fa fa-times"></i>

            </button>
        </div>
     </div>
@endsection

@section('content')
    <p>Esto es una prueba</p>
@endsection

@section('scripts')
@endsection